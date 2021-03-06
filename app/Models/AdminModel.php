<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB;

class AdminModel extends Model
{
    use HasFactory;
    
    public function UpdateEmployee($data){
        
        DB::table('employee')->
        where('users_id',$data['users_id'])->
        update([
            'FirstName' => $data['FirstName'],
            'MiddleName' => $data['MiddleName'],
            'LastName' => $daa['LastName'],
            'Address' => $data['Address'],
            'ContactNumber' => $data['ContactNumber']
        ]);

    }
}
