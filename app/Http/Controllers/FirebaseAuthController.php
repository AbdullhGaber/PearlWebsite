<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Auth;
use Carbon\Carbon;
use Kreait\Firebase\Contract\Database;

class FirebaseAuthController extends Controller
{
    private $auth = null;
    public $database = null;

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




            try {
                $result = $this->auth->createUserWithEmailAndPassword($request->email, $request->password);

                $user = [
                    "firstName" => $firstName,
                    "lastName" => $lastName,
                    "image" => $image,
                    "title" => $title,
                    "license" => $license,
                    "patients" => [""],
                    "rate" => 0.0,
                    "rateNo" => 0,
                    "appointments" => [""],
                    "phoneNumber" => $phoneNumber,
                    "upcoming" => 0,
                    "finished" => 0,
                    "cancelled" => 0,
                    "age" => $age,
                    "branch" => "No Branch",
                    "uid" => $result->uid,
                    "email"=>$result->email
                ];

                $customToken = $this->auth->createCustomToken($result->uid);

                $request->session()->put('pearlUserToken', $customToken);

                $request->session()->put('uid' , $result->uid);

                $this->database->getReference('doctors')->push($user);

                return redirect()->route('dashboard.index');
            } catch (\Throwable $th) {
                // You can log the error or return a view with an error message
                return redirect()->back()->withErrors(['error' => 'Registration failed. Please try again.']);
            }

        }
    }

    public function signInWithEmailAndPassword(Request $request){

        try {
            $result = $this->auth->signInWithEmailAndPassword($request->email, $request->password);

            $uid = $result->firebaseUserId();

            if(is_string($uid)) {
                $customToken = $this->auth->createCustomToken($uid);

                $session = $request->session();

                $session->put('pearlUserToken', $customToken);

                $session->put('uid', $uid);

                 return redirect()->route('dashboard.index');
            } else {
                return redirect()->back()->withErrors(['error' => 'Login failed. Invalid user ID.']);
            }
        } catch (\Throwable $th) {
            // You can log the error or return a view with an error message
            return "Throw Error";
        }
    }

    public function logout(Request $request){
        $request->session()->put('pearlUserToken', null);
        return redirect()->route('home.index');
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
