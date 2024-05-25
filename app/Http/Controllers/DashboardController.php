<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public $database = null;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }
    public function index(){
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.index')->with('user' , $user);
        }


    }

    public function schedule(){
        return view('dashboard.schedule');
    }

    public function messages(){
        return view('dashboard.messages');
    }

    public function patients(){
        return view('dashboard.patients');
    }

    public function view_branches(){
        return view('dashboard.view_branches');
    }
    public function create_branches(){
        return view('dashboard.add_branch');
    }

    public function profile(){
        return view('dashboard.profile');
    }

    public function patient_report(){
        return view('dashboard.patientsreport');
    }
}
