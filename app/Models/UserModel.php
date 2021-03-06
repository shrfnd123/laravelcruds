<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class UserModel extends Model
{
    use HasFactory;
    protected $tbl_users ='users';

    
   
    public static function CreateAccount($data2){

        DB::table('users')
        ->insert([
            'username' => $data2['username'],
            'email' => $data2['email'],
            'password' => $data2['password'],
            'employee_id' => $data2['employee_id'],
            'student_id' => $data2['student_id'],
            'user_type' => $data2['user_type']
           

        ]);
    }
}
