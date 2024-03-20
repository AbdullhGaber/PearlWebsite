<?php

namespace App\Http\Controllers;
use Kreait\Firebase\Factory;

class FirebaseController extends Controller
{
    public function index(){
        //firebase_init
        $firebase = (new Factory)
        ->withServiceAccount(__DIR__.'/skincaredb-eb7c5-firebase-adminsdk-ej0lg-bbf49a871fjson')
        ->withDatabaseUri('https://skincaredb-eb7c5-default-rtdb.firebaseio.com');

        //real_time_database
        $database = $firebase->createDatabase();

        $auth = $firebase->createAuth();

        // $product = $database->getReference('user');

        // echo '<pre>';
        // print_r($product->getvalue());
        // echo '</pre>';
    }
}
