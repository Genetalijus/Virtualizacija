<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Document</title>
    <link rel="stylesheet" href="./css/register.css" />
  </head>
  <body>
    <form class="cont"  
          action="php_includes/signup-inc.php" 
    method="POST">
      <div class="uname ">
        <label for="uname"><b>Username</b></label>
        <input type="text" name="uname" placeholder="uname"/>
      </div>  
        <div class="fullname ">
        <label for="fullname"><b>Full Name</b></label>
        <input type="text" name="fullname" placeholder="fullname"/>
      </div>
      <div class="email ">
        <label for="email"><b>Email</b></label>
        <input type="text" name="email" placeholder="email"/>
      </div>
      <div class="pword ">
        <label for="psword"><b>Password</b></label>
        <input type="password" name="psword" placeholder="psword"/>
      </div>
      <div class="cnfpword ">
        <label for="cnfpsword"><b>Password</b></label>
        <input type="password" name="cnfpsword" placeholder="cnfpsword"/>
      </div>
      <div class="doctorPword">
        <label for="doctorPword"><b>Doctor authentication</b></label>
        <input type="password" name="doctorPword" placeholder="doctorPword"/>
      </div> 
      <div class="speciality ">
        <label for="speciality"><b>Speciality</b></label>
        <input type="text" name="speciality" placeholder="speciality"/>
      </div>
      <button id="lgnBut" type="submit" name="submit"><p>Login</p></button>
      

      
    </form>
  </body>
</html>
