<html>
  <head>
    <title>reCAPTCHA demo: Simple page</title>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ asset('js/parsley.js') }}"></script>
    <script src="{{ asset('js/parsley.min.js') }}"></script>
  </head>
  <body>
  <div style="margin-top:400px;">
    <form action="?" method="POST" id="form" >
    <center>
    Email
    <input type="text" name="email" data-parsley-type="email"/><br>
      <div class="g-recaptcha" data-sitekey="6Lf-HHkaAAAAALiK-5HlYsAeP68sCZH5JSXAZzjF"></div>
      <br/>
      <input type="submit" value="Submit">
      </div></form></center>
  </body>
  <script type="text/javascript">
  
</script>
<script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
    async defer>
</script>
</html>