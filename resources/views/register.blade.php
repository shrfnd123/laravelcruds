@extends('layouts.dashboard')
@section('content')
<br>
<div class="reg">
  <form action="{{ route('save') }}">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
    <label for="lname">Middle Name</label>
    <input type="text" id="mname" name="lastname" placeholder="Your last name..">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    <label for="lname">Address</label>
    <input type="text" id="address" name="lastname" placeholder="Your last name..">

    <label for="country">Gender</label>
    <select id="gender" >
      <option value="" selected>Select One</option>
      <option value="Female">Female</option>
      <option value="Male">Male</option>
    </select>
    <label for="lname">Contact Number</label>
    <input type="text" id="number" name="lastname" placeholder="Your last name..">
    <label for="lname">Birthdate</label>
    <input type="date" id="bday" name="lastname" placeholder="Your last name..">

    <input type="submit" value="Submit">
  </form>
</div>
@endsection
