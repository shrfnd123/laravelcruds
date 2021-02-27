<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Styles -->
<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<link href="{{ asset('css/modal.css') }}" rel="stylesheet">
<link href="{{ asset('css/reg.css') }}" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>
   </head>
    <body class="antialiased">  <div class="bgimg">

<div class="topright">
                 <div class="topnav">
                 <a href="{{ route('login') }}" id="" >Login</a>
                 <a href="{{ route('signup') }}"  >Register</a>
                                   
                             </div>
                         
                </div>
             @yield('content')

           
</div>
<!-- <form id = "form1" method = "post">
<input type = "text" class = "text1" onkeyup = "validateForm1()">
</form>
<button onclick = "disableOnClick()">Disable On Click</button>
<label>Result : <span class = "validateResult"></span></label> -->
</body>
</html>
<!-- <script>

    function validateForm1(){
        $('#form1').parsley().validate();
    }
    function disableOnClick(){
        $(".text1").removeAttr("data-parsley-required");
        $(".text1").removeAttr("data-parsley-type");
        $('#form1').parsley().validate();
    }
    
$(document).ready(function(){
    yMPR

    $(".text1").attr("data-parsley-required","true");
    $(".text1").attr("data-parsley-type","email");
   
    $('#form1').parsley().on('form:validated', function() {
        
        var errorCount = $("#form1 .parsley-error").length;
        
        if(errorCount === 0){
            $(".validateResult").html("Validated");
        }else{
            $(".validateResult").html("Invalid");
        }
        
    });
    $('#form1').parsley().validate();
});

</script> -->