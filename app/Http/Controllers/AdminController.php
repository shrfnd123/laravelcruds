<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\UserModel;
use App\Models\AdminModel;
use Illuminate\Support\Facades\hash;
use DB;

class AdminController extends Controller
{

    public function admindashboard(){
        $sql = DB::table('users')->
        join('employee', 'employee.employee_id', '=', 'users.employee_id')->
        select('users.users_id','users.email','users.password',
        'users.username','users.employee_id','employee.employee_id',
        'employee.FirstName','employee.MiddleName','employee.LastName',
        'employee.Address','employee.Gender','employee.ContactNumber','employee.Gender')   
        ->where('users_id','!=',session('users_id'))
        ->first();

        
       
        return view('admin.index',compact('sql'));
      }
      public function addemployee(){
       
          return view('admin.addemployee');
      }
      public function createemployee(Request $request){
        $user_type = $request['usertype'];
       
        // dd($user_type);

        $data = [
            'fname' => $request['FirstName'],
            'mname' => $request['MiddleName'],
            'lname' => $request['LastName'],
            'address' => $request['Address'],
            'gender' => $request['Gender'],
            'number' => $request['ContactNumber'],
            'bday' => $request['Birthdate'],
        ];
        $id = DB::select("show table status like 'employee' ");
        $employee_id=$id[0]->Auto_increment;
        $studentid = DB::select("show table status like 'student' ");
        $student_id=$id[0]->Auto_increment;
      $addemployee = EmployeeModel::AddEmployeeDetails($data);
      if($user_type == '2'){
        $student = "0";
        $pass = Hash::make($request->password);
        // $pass = input($pass1);
        $data2 =[
            'email' => $request['email'],
        'user_type' => $request['usertype'],
        'username' => $request['username'],
        'password' =>Hash::make($request['password']),
        'employee_id' => $employee_id,
        'student_id' => $student
    
      
        // dd($data2);
           ];
    //  dd($data2);
    UserModel::CreateAccount($data2);
   }else{
$employ = "0";
    $data2 =[
      'email' => $request['email'],
  'user_type' => $request['usertype'],
  'username' => $request['username'],
  'password' =>Hash::make($request['password']),
  'employee_id' => $employ,
  'student_id' => $student_id


 
     ];
    //  dd($data2);
UserModel::CreateAccount($data2);
   }
    
      // $createaccount =  UserModel::ListofEmployee();

      }
      public function listofemployee(){
        $sql = DB::table('users')->
        join('employee', 'employee.employee_id', '=', 'users.employee_id')->
        select('*')   
        ->where('user_type','!=',"1")
        ->first();
      
        // dd($sql);
      return view('admin.employeelist',compact('sql'));
      }
      public function updateemployee(Request $request){

        //  $id = $request['users_id'];
      
        $users_id     = $request['users_id'];
        $FirstName     =  $request['FirstName'];
        $MiddleName    = $request['MiddleName'];
        $LastName      = $request['LastName'];
        $Address       = $request['Address'];
        $ContactNumber = $request['ContactNumber'];
       $data = DB::update('update employee set FirstName = ?,MiddleName=?,LastName=?,Address=?, ContactNumber= ? where employee_id = ?',[$FirstName,$MiddleName,$LastName,$Address,$ContactNumber,$users_id]);
        // dd($user_id);
        // AdminModel::UpdateEmployee($data);
        // return view('admin.index');
        // $data= $request->users_id;
  
        return view('admin.employeelist');
      }
      
      // public function ajaxResponse(Request $request){
      //   return response(['sample'=>1]);
      // }
}
