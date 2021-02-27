<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class EmployeeModel extends Model
{
    use HasFactory;
    public static function AddEmployeeDetails($data){

        DB::table('employee')
        ->insert([

            'FirstName' => $data['fname'],
            'MiddleName' => $data['mname'],
            'LastName' => $data['lname'],
            'Gender' => $data['gender'],
            'Address' => $data['address'],
            'ContactNumber' => $data['number'],
            'Birthdate' => $data['bday'],
        ]);
        
        
    }
}
