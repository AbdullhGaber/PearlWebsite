<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

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
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.schedule')->with('user' , $user);
        }
    }

    public function messages(){
        return view('dashboard.messages');
    }

    public function patients(){
        return view('dashboard.patients');
    }



    public function addBranch(){
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.add_branch')->with('user' , $user);
        }
    }

    public function storeBranch(Request $request)
    {
        $branchData = [
            'branch_type' => $request->branch_type,
            'branch_name' => $request->branch_name,
            'government' => $request->government,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'commercial_registration_number' => $request->commercial_registration_number,
            'tax_id_number' => $request->tax_id_number,
            'credit_card_number' => $request->credit_card_number,
            'doctor_uid' => Session::get('uid'),  // Link the branch with the doctor's UID
        ];
        try {
            $branchesReference = $this->database->getReference('branches');
            $newBranchKey = $branchesReference->push()->getKey();
            $branchesReference->getChild($newBranchKey)->set($branchData);
            return redirect()->route('dashboard.view_branches')->with('success', 'Branch added successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Failed to add branch: ' . $e->getMessage());
        }
    }

    public function viewBranches()
    {
        $uid = Session::get('uid');

        try {
            $branchesReference = $this->database->getReference('branches');
            $branchesSnapshot = $branchesReference->orderByChild('doctor_uid')->equalTo($uid)->getSnapshot();
            $branches = $branchesSnapshot->getValue();
            return view('dashboard.view_branches', compact('branches'));
        } catch (\Exception $e) {
            return view('dashboard.view_branches')->with('error', 'Failed to retrieve branches. Please try again later.');
        }
    }
    public function updateBranch(Request $request, string $uid){
        $branchRef = $this->database->getReference('branches/' . $uid);
        $branchData = $branchRef->getValue();

        $fields = ['branch_type', 'branch_name', 'government', 'city', 'phone_number','commercial_registration_number','tax_id_number'];
        $hasChanges = false;

        foreach ($branchData as $key => $branch) {
            $updates = [];
            foreach ($fields as $field) {
                if ($branch[$field] !== $request->input($field)) {
                    $updates[$field] = $request->input($field);
                    $hasChanges = true;
                }
            }
            if ($hasChanges) {
                $this->database->getReference('branches/' . $key)->update($updates);
            }
        }
        if ($hasChanges) {
            return back()->with('status', 'Profile updated successfully');
        }

        return back();
    }

public function deleteBranch(Request $request)
{
    $request->validate([
        'branch_id' => 'required',
    ]);

    try {
        $uid = Session::get('uid');
        $branchesReference = $this->database->getReference('branches');
        $branchSnapshot = $branchesReference->getChild($request->branch_id)->getValue();
        // Check if the branch exists
        if ($branchSnapshot) {
            // Check if the branch belongs to the current doctor
            if (isset($branchSnapshot['doctor_uid']) && $branchSnapshot['doctor_uid'] === $uid) {
                $branchesReference->getChild($request->branch_id)->remove();
                return redirect()->back()->with('success', 'Branch deleted successfully.');
            } else {
                return redirect()->back()->with('error', 'You do not have permission to delete this branch.');
            }
        } else {
            return redirect()->back()->with('error', 'Branch not found.');
        }
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Failed to delete branch: ' . $e->getMessage());
    }
}


    public function profile(){
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();
        foreach ($users as $key => $user) {
            return view('dashboard.profile')->with('user' , $user);
        }
    }
    public function updateProfile(Request $request, string $uid){
        $uid = Session::get('uid');
        $users = $this->database->getReference('doctors')->orderByChild('uid')->equalTo($uid)->getSnapshot()->getValue();

        $fields = ['firstName', 'lastName', 'title', 'email', 'phoneNumber'];
        $hasChanges = false;

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


    public function patient_report(){
        return view('dashboard.patientsreport');
    }
}
