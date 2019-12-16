
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
      <h1>Appointments</h1>
      <div class="appointments">

        <div id="appointment">
        <p>Name</p>
        <p>Date</p>

        </div>
       <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
        <div id="appointment">
        <p>Name</p>
        <p>Date</p>
        
        </div>
      </div>
     
      <h1>Daktarai</h1>

      <div class="doctors">
          <form action="doctor.php" method="POST">
              <input type="text" id="lg_remember" name="result" />
              <input type="submit">
          </form>
        <div class="doctor">
          <p>Vardas</p>
          <p>Scecialybe</p>
        </div>

         <?php 



      $id=$_SESSION['u_id'];
      if($_POST['result'] != null){
      $sql = "SELECT * FROM users WHERE userType='doctor' and fullname like '%{$_POST['result']}%' or fullname like '{$_POST['result']}%' or fullname like '%{$_POST['result']}'";
      }else{
         $sql = "SELECT * FROM users WHERE userType='doctor'";
      }
         
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
         $projects = array();
       while ($project =  mysqli_fetch_assoc($result))
    {
        $projects[] = $project;
    }
foreach ($projects as $project)
    {
        echo "  <div class='doctor'>
          <p>{$project['fullname']}</p>
          <p>{$project['speciality']}</p>
        </div>";

    }
    $_POST['result']=null;
      ?>
      </div>


    

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </body>
</html>

