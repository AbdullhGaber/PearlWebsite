<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Contract\Database;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
class PatientController extends Controller
{
    protected $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }

    public function viewPatients()
    {
        $uid = Session::get('uid');
        $patientsSnapshot = $this->database->getReference('doctors')->getChild($uid)->
        getChild('patients')->getSnapshot();

        if($patientsSnapshot->exists()){
            $patients = $this->database->getReference('doctors')->getChild($uid)->
            getChild('patients')->getValue();
            return view('dashboard.patients')->with('patients' , $patients);
        }else{
            return view('dashboard.patients');
        }
    }
    public function patient_report()
    {
        return view('dashboard.patientsreport');
    }

}
