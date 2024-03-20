<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Auth;

class FirebaseAuthController extends Controller
{
    private $auth = null;

    public function __construct(Auth $auth)
    {
        $this->auth = $auth;
    }

    public function createUserWithEmailAndPassword(Request $request){
        $this->auth->createUserWithEmailAndPassword($request->email , $request->password);
    }

    public function signInWithEmailAndPassword(Request $request){
       $result = $this->auth->signInWithEmailAndPassword($request->email , $request->password);

       if(is_string($result->firebaseUserId())){
            return view('index');
       }else{
            echo "<script>alert('something went wrong !')</script>";
       }

    }

}
