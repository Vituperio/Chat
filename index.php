<!DOCTYPE html>
<html>
  <head>
    <meta charset='UTF-8' />
    <!-- Style -->
    <link href="css/login.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    <div class="login_wrapper">
      <div class="pannello">
        <center>
          <div class="input_wrap">
            <label>Username:</label><br>
            <input type="text" name="user" id="user" placeholder="Username" maxlength="80" />
          </div>
          <div class="input_wrap">
            <label>Password:</label><br>
            <input type="password" name="pass" id="pass" placeholder="Password" maxlength="80" />
          </div>
          <br>
          <button id="login">Login</button> <button id="reset">Reset</button>
        </center>
      </div>
    </div>
  
    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="js/login.js"></script>
  </body>
</html>
