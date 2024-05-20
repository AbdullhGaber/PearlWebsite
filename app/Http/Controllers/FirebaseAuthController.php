<?php

namespace App\Http\Controllers;

use App\Data\Branch;
use App\Data\User;
use App\Http\Requests\PearlRequest;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Auth;
use Carbon\Carbon;
use Kreait\Firebase\Contract\Database;

class FirebaseAuthController extends Controller
{
    private $auth = null;
    public $database = null;

    private $mPearlRequest = null;

    public function __construct(Auth $auth, Database $database)
    {
        $this->auth = $auth;
        $this->database = $database;
    }

    public function createUserWithEmailAndPassword(Request $request){
        if($request != null){
            $firstName = $request->firstName;
            $lastName = $request->lastName;
            $image = "img/path";
            $title = $request->title;
            $license = $request->license;
            $phoneNumber = $request->phone;
            $year = Carbon::parse($request->DOB)->year;
            $currentYear = Carbon::now()->year;
            $age = $currentYear - $year ;

            // $branchName = $request->branchName;
            // $branchType = $request->branchType;
            // $government = $request->government;
            // $city = $request->city;
            // $mobile = $request->mobile;
            // $CRN = $request->CRN;
            // $taxId = $request->taxId;

            // $branch = new Branch(
            //     $branchName, $branchType, $government, $city, $mobile, $CRN, $taxId
            // );

            // $user = new User(
            //    $firstName,
            //    $lastName,
            //    $image,
            //    $title,
            //    $license,
            //    $phoneNumber,
            //    $age,
            //    null
            // );

            $user = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "image" => $image,
                "title" => $title,
                "license" => $license,
                "phoneNumber" => $phoneNumber,
                "age" => $age,
                "branch" => "No Branch"
            ];

            $this->database->getReference('doctor')->push($user);

           try {
            $this->auth->createUserWithEmailAndPassword($request->email , $request->password);
            return view('dashboard.index');
           } catch (\Throwable $th) {
              throw $th;
           }

        }
    }

    public function signInWithEmailAndPassword(Request $request){
       $result = $this->auth->signInWithEmailAndPassword($request->email , $request->password);

       if(is_string($result->firebaseUserId())){
            return view('dashboard.index');
       }else{
            echo "<script>alert('something went wrong !')</script>";
       }

    }

    public function sign_in(){
        return view('auth.login');
    }

    public function first_register(){
        return view('auth.first_register');
    }

    public function second_register(){
        return view('auth.second_register');
    }

    public function third_register(){
        return view('auth.third_register');
    }

}
