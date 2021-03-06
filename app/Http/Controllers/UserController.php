<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\hash;
use App\Models\UserModel;
use App\Models\EmployeeModel;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use DB;

class UserController extends Controller

   
{
    use AuthenticatesUsers;
    public function signup(){

      
        return view('register');
    }
    public function save(Request $request){
        $data = [
            'fname' => $request['fname'],
            'mname' => $request['mname'],
            'lname' => $request['lname'],
            'address' => $request['address'],
            'gender' => $request['gender'],
            'number' => $request['number'],
            'bday' => $request['bday'],
        ];
        $id = DB::select("show table status like 'employee' ");
        $employee_id=$id[0]->Auto_increment;
      $addemployee = EmployeeModel::AddEmployeeDetails($data);
      
        //$pass = $request['password'];
        $pass = Hash::make($request->password);
        // $pass = input($pass1);
        $data2 =[
            'email' => $request['email'],
        'user_type' => $request['user_type'],
        'username' => $request['username'],
        'password' =>Hash::make($request['password']),
        'employee_id' => $employee_id
    
        ];
        // dd($data2);
      $createaccount =  UserModel::CreateAccount($data2);
      
          return view('signin');

    }
    public function login()
    {
      return view('signin');
    }
  public function signin(Request $request){
        $email = $request['email'];
        $password = $request['password'];
        // dd($email);

        $sql = DB::table('users')->
        join('employee', 'employee.employee_id', '=', 'users.employee_id')->
        select('users.users_id','users.email','users.password','users.username','users.employee_id','employee.employee_id','employee.FirstName','employee.MiddleName','employee.LastName')   
        ->where('users.email',$email)
        ->first();
       $check = Hash::check($password, $sql->password);
        //dd($check);
        if(Hash::check($password, $sql->password) || $sql->email == $email ){
           
        $request->session()->put('users_id', $sql->users_id);
        $request->session()->put('username',$sql->username);
        $request->session()->put('email', $sql->email);
        $request->session()->put('password',$sql->password);
         $request->session()->put('FirstName', $sql->FirstName);
          $request->session()->put('MiddleName', $sql->MiddleName);
        $request->session()->put('LastName', $sql->LastName);
     $request->session()->put('LoggedUser',true);
         
        return redirect('admindashboard');
        }else{
            return 'hello';
        }

    }
   
}
