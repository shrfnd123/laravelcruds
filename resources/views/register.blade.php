<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/reg.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('bootstrap/dist/adminlte.min.css') }}">

    </head>
    <body class="antialiased">
<div>
  <form action="/action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
  
    <input type="submit" value="Submit">
  </form>
</div></body>
<script src="{{ asset('bootstrap/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('bootstrap/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- DataTables -->
<script src="{{ asset('bootstrap/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bootstrap/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- SlimScroll -->
<script src="{{ asset('bootstrap/plugins/slimScroll/jquery.slimscroll.min.js') }}"></script>
<!-- FastClick -->
<script src="{{ asset('bootstrap/plugins/fastclick/fastclick.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('bootstrap/dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('bootstrap/dist/js/demo.js') }}"></script>
<!-- page script -->
</html>
