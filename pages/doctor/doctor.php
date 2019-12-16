
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
    <link rel="stylesheet" href="./css/doctor.css">
    <title>Document</title>
    
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">

  </head>
  <body>
  <div class="header"> <?php 
            include_once "../../php_includes/dbCon-inc.php";
            $id=$_SESSION['u_id'];
          $sql = "SELECT * FROM users WHERE user_id='{$id}'";
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);

            echo "<h1>".$row['fullname'].', '. $row['speciality']."</h1>";


          ?></div>
      <div>
         
      </div>
      <h1>Darbotvarkė</h1>
      <div class="appointments">
          <?php




              $sql = "SELECT * FROM appointments WHERE dname='{$row['fullname']}' ";


          $result = mysqli_query($conn, $sql);
          $resultCheck = mysqli_num_rows($result);

          $row = mysqli_fetch_assoc($result);
          $projects = array();
          while ($project =  mysqli_fetch_assoc($result))
          {
              $projects[] = $project;
          }
          foreach ($projects as $project)
          {
              echo "  <div id='appointment'>
          <p>{$project['pname']}</p>
          <p>{$project['month']}</p>
          <p>{$project['monthDay']}</p>
        </div>";

          }

          ?>





      </div>

  <form  action='../../php_includes/logout-inc.php' method='POST'>
      <input type="submit" value="Atsijungti" name="submit">
  </form>




    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>

