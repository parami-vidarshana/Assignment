<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\employee;

class Bank extends Controller
{

// public function index(){
//     return view('employees_data');
// }

    public function retrive_data(){
        
        $data = DB::table('employees')->join('bank_branches' ,'bank_branches.branch_id','=' , 'employees.branch_id')
        ->join('banks' ,'banks.bank_id','=' , 'bank_branches.bank_id')
        ->select('employees.emp_id','employees.emp_name','employees.emp_email','employees.emp_photo','bank_branches.branch_name','banks.bank_name')->get();
        // return view('employees_data')->with('data',$data);

dd($data);


    }
}
