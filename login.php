
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/login.css" />
  </head>
  <body>
    <form class="login" action="php_includes/login-inc.php" 
    method="POST">
      <div id="uname">
        <label for="uname"><b>Username</b></label>
        <input type="text" name="uname" placeholder="uname"/>
      </div>
      <div id="pword">
        <label for="psword"><b>Password</b></label>
        <input type="password" name="psword" placeholder="psword" />
      </div>
      <button id="lgnBut" type="submit" name="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember" /> Remember me
      </label>

      <div class="container" style="background-color:#f1f1f1">

        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>
    </form>
  </body>
</html>
