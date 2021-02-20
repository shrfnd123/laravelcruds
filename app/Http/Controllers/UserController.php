<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function signup(){
        return view('register');
    }
    public function save(Request $request){
        $data = [
            'fname' => $request['fname'],
            'mname' => $request['mname'],
            'lname' => $request['lname'],
            'gender' => $request['gender'],
            'number' => $request['number'],
            'bday' => $request['bday'],
        ];
        
    }
}
