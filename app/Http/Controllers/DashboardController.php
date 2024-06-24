<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function index()
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.index')->with('user', $user);
        }
    }

    public function schedule()
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.schedule')->with('user', $user);
        }
    }

    public function messages()
    {
        return view('dashboard.messages');
    }

    public function profile()
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.profile')->with('user', $user);
        }
    }

    public function updateProfile(Request $request)
    {
        $uid = Session::get('uid');
        $fields = ['firstName', 'lastName', 'title', 'email', 'phoneNumber'];
        $hasChanges = false;

        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $updates = [];
            foreach ($fields as $field) {
                if ($user[$field] !== $request->input($field)) {
                    $updates[$field] = $request->input($field);
                    $hasChanges = true;
                }
            }
            if ($hasChanges) {
                $this->database->getReference('doctors/' . $key)->update($updates);
            }
        }

        if ($hasChanges) {
            return back()->with('status', 'Profile updated successfully');
        }

        return back();
    }


}
