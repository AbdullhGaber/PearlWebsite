<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
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
