<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->integer('users_id');
            $table->string('email')->unique();
            $table->integer('user_type');
            $table->string('username');
            $table ->unsignedBigInteger('employee_id')->unsigned();
            $table ->unsignedBigInteger('student_id')->unsigned();
            $table->foreign('employee_id')->references('employee_id')->on('employee');
            $table->foreign('student_id')->references('student_id')->on('student');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_users');
    }
}
