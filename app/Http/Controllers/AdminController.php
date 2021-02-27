<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeModel;
use App\Models\UserModel;
use Illuminate\Support\Facades\hash;
use DB;

class AdminController extends Controller
{

    public function admindashboard(){
        if(session()->has('LoggedUser')){
            $user = DB::table('users')->
           join('employee', 'employee.employee_id', '=', 'users.employee_id')->
           select('users.users_id','users.employee_id','employee.employee_id','employee.FirstName','employee.MiddleName','employee.LastName')
            ->where('users.users_id','=', session('LoggedUser'))->first();
            // dd($user);
            $data = [
                'LoggedUser' =>$user
            ];
        }
        return view('admin.index',$data);
      }
      public function addemployee(){
        if(session()->has('LoggedUser')){
            $user = DB::table('users')->
           join('employee', 'employee.employee_id', '=', 'users.employee_id')->
           select('users.users_id','users.employee_id','employee.employee_id','employee.FirstName','employee.MiddleName','employee.LastName')
            ->where('users.users_id','=', session('LoggedUser'))->first();
            // dd($user);
            $data = [
                'LoggedUser' =>$user
            ];
        }
          return view('admin.addemployee',$data);
      }
      public function createemployee(Request $request){
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
      $addemployee = EmployeeModel::AddEmployeeDetails($data);
      
        //$pass = $request['password'];
        $pass = Hash::make($request->password);
        // $pass = input($pass1);
        $data2 =[
            'email' => $request['email'],
        'user_type' => '2',
        'username' => $request['username'],
        'password' =>Hash::make($request['password']),
        'employee_id' => $employee_id
    
        ];
        // dd($data2);
    //   $createaccount =  UserModel::ListofEmployee();

      }
      public function employeelist(){

        $employee = DB::table('employee')->
        select('*')->get();
        
      }
}
