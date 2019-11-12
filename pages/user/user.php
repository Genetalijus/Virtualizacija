
<?php
session_start();
if(!isset($_SESSION['u_username'])){
   header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./css/user.css">
    <title>Document</title>
    
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  </head>
  <body> 
      <div class="header"></div>
            <div class="doctorList">
      <?php
      include_once "../../php_includes/dbCon-inc.php";
      $teamquery="select * from users where userType='doctor'";
           $userPlayer = mysqli_query($conn, $teamquery);
          $array=array();
          while ($row = mysqli_fetch_assoc($userPlayer)) {
              $array[] = $row;
          }

          foreach ($array as $user) {
    echo " 
         <div class='doctor'>
          <p class='name'>'$user[fullname]'</p>
          <p class='speciality'>'$user[speciality]'</p>
          <button type='submit'>Register</button>
        </div>
            
            "
            ;
    
}
                    ?>

       
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>

