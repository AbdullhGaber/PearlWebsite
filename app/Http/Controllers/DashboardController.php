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

    public function patients()
    {
        return view('dashboard.patients');
    }

    public function addBranch()
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.add_branch')->with('user', $user);
        }
    }

    public function storeBranch(Request $request)
    {
        $uid = Session::get('uid');
        $branch = [
            'branch_type' => $request->branch_type,
            'branch_name' => $request->branch_name,
            'government' => $request->government,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'commercial_registration_number' => $request->commercial_registration_number,
            'tax_id_number' => $request->tax_id_number,
            'credit_card_number' => $request->credit_card_number
        ];

        // Adding a branch to the branches list
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $this->database->getReference('doctors/' . $key . '/branches')->push($branch);
            break;
        }

        return redirect()->route('dashboard.view_branches')->with('status', 'Branch added successfully!');
    }

    public function viewBranches()
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $branches = $this->database->getReference('doctors/' . $key . '/branches')->getValue();
            return view('dashboard.view_branches')->with('branches', $branches);
        }
    }


    public function editBranch(string $branchId)
    {
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $branchData = $this->database->getReference('doctors/' . $key . '/branches/' . $branchId)->getValue();
            return view('dashboard.branch', [
                'branchData' => $branchData,
                'branchId' => $branchId
            ]);
        }
    }

    public function updateBranch(Request $request, string $branchId)
    {
        $uid = Session::get('uid');
        $updatedBranch = [
            'branch_type' => $request->branch_type,
            'branch_name' => $request->branch_name,
            'government' => $request->government,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'commercial_registration_number' => $request->commercial_registration_number,
            'tax_id_number' => $request->tax_id_number,
            'credit_card_number' => $request->credit_card_number
        ];

        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $this->database->getReference('doctors/' . $key . '/branches/' . $branchId)->update($updatedBranch);
            break;
        }

        return redirect()->route('dashboard.view_branches')->with('status', 'Branch updated successfully!');
    }

    public function deleteBranch(Request $request)
    {
        $uid = Session::get('uid');
        $branchId = $request->branch_id;

        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            $this->database->getReference('doctors/' . $key . '/branches/' . $branchId)->remove();
            break;
        }

        return redirect()->route('dashboard.view_branches')->with('status', 'Branch deleted successfully!');
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

    public function patient_report()
    {
        return view('dashboard.patientsreport');
    }
}
