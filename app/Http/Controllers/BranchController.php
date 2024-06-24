<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class BranchController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
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
            'id' => 1,
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
        $userRef = $this->database->getReference('doctors')->getChild($uid);

        $isBranchesExisted = $userRef->getChild("branches")->getSnapshot()->exists();

        if($isBranchesExisted){
            $branches = $userRef->getChild("branches")->getValue();
            $id = sizeof($branches) + 1;
            $branch['id'] = $id;
            array_push($branches , $branch);
        }else{
            $branches = [];
            $branches[0] = $branch;
        }

        $userRef->getChild("branches")->set($branches);

        return redirect()->route('branches.view_branches')->with('status', 'Branch added successfully!');
    }

    public function viewBranches()
    {
        $uid = Session::get('uid');
        $branches = $this->database->getReference('doctors')->getChild($uid)->getChild("branches")->getValue();
        return view('dashboard.view_branches')->with('branches', $branches);

    }


    public function editBranch(string $branchId)
    {
        $uid = Session::get('uid');
        $branches = $this->database->getReference('doctors')->getChild($uid)->getChild("branches")->getValue();
        foreach($branches as $branch){
            if($branch['id'] == $branchId){
                return view('dashboard.edit_branch')->with('branch' , $branch);
            }
        }
    }

    public function updateBranch(Request $request, $branchId)
    {
        $uid = Session::get('uid');

        $updatedBranch = [
            'id' => $branchId,
            'branch_type' => $request->branch_type,
            'branch_name' => $request->branch_name,
            'government' => $request->government,
            'city' => $request->city,
            'phone_number' => $request->phone_number,
            'commercial_registration_number' => $request->commercial_registration_number,
            'tax_id_number' => $request->tax_id_number,
            'credit_card_number' => $request->credit_card_number
        ];

        $branches = $this->database->getReference('doctors')->getChild($uid)->getChild('branches')->getValue();

        array_push($branches , $updatedBranch);

        $this->database->getReference('doctors')->getChild($uid)->getChild('branches/'.$branchId - 1)->set($updatedBranch);

        return redirect()->route('branches.view_branches')->with('status', 'Branch updated successfully!');
    }

    public function deleteBranch(Request $request)
    {
        $uid = Session::get('uid');

        $branchId = $request->branch_id;

       $this->database->getReference('doctors')->getChild($uid)->
       getChild('branches/'.$branchId - 1)->remove();

        return redirect()->route('branches.view_branches')->with('status', 'Branch deleted successfully!');
    }
}
