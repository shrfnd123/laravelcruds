@extends('layouts.dashboard')
@section('content')
<br>
<div class="reg">
  <form  method="POST" action="{{ route('save') }}">
  
  @csrf

     <label for="fname">First Name</label>
    <input type="text" name="fname"  placeholder="Your name..">
    <label for="lname">Middle Name</label>
    <input type="text" name="mname"  placeholder="Your last name..">
    <label for="lname">Last Name</label>
    <input type="text" name="lname"  placeholder="Your last name..">
    <label for="lname">Address</label>
    <input type="text" name="address"  placeholder="Your last name..">

    <label for="country">Gender</label>
    <select name="gender" >
      <option value="" selected>Select One</option>
      <option value="Female">Female</option>
      <option value="Male">Male</option>
    </select>
    <label for="lname">Contact Number</label>
    <input type="text" name="number"  placeholder="Your last name..">
    <label for="lname">Birthdate</label>
    <input type="date" name="bday"  placeholder="Your last name..">
    <label for="lname">username</label>
    <input type="text" name="username"  placeholder="Your last name..">
    <label for="lname">email</label>
    <input type="text" name="email"  placeholder="Your last name..">
    <label for="lname">password</label>
    <input type="password" name="password"  placeholder="Your last name..">
    <input type="hidden" name="user_type"  value="1">
    <input type="submit" value="Submit">
  </form>
</div>
@endsection
