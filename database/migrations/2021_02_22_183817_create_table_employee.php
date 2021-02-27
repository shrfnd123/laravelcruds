<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableEmployee extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee', function (Blueprint $table) {
            $table ->bigIncrements('employee_id');
            $table ->string('FirstName');
            $table ->string('MiddleName');
            $table ->string('LastName');
            $table ->string('Address');
            $table ->string('Gender');
            $table ->string('ContactNumber');
            $table ->string('Birthdate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('employee', function (Blueprint $table) {
            //
        });
    }
}
