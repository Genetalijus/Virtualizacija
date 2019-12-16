
<?php
session_start();
if (!isset($_SESSION['u_username'])) {
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
            $teamquery = "select * from users where userType='doctor'";
            $userPlayer = mysqli_query($conn, $teamquery);
            $array = array();
            while ($row = mysqli_fetch_assoc($userPlayer)) {
                $array[] = $row;
            }
            $pName = $_SESSION["u_username"];
            foreach ($array as $user) {
                echo " 
         <div class='doctor'>
         <form  action='' method='POST'>
          <p class='name'>$user[fullname]</p>
          <p class='speciality'>$user[speciality]&nbsp&nbsp&nbsp&nbsp
              Pasirinkite data:
              </p>
                            <select name='Data' id=''>
                                <option value='' selected>Data</option>   
                                <option value='2'>2</option>
                                <option value='7'>7</option> 
                                <option value='14'>14</option> 
                                <option value='18'>18</option> 
                                <option value='22'>22</option> 
                                <option value='25'>25</option> 
                                <option value='30'>30</option>    
                            </select>
                            <select name='Miestas' id=''>
                                <option value='' selected>Miestas</option>   
                                <option value='vln'>Vilnius</option>
                                <option value='kns'>Kaunas</option>    
                                <option value='klpd'>Klaipeda</option>    
                            </select>
                            
                            <input type='submit' value='Užsiregistruoti' name='submitReg' id='play'/>
                            </form>
        </div>
            
            "
                ;

                if (isset($_POST['submitReg']) && $_POST['Data'] !='' && $_POST['Miestas'] !='') {
                    $data = $_POST['Data'];
                    $queryR = "INSERT INTO appointments(dname, pname, monthDay) VALUES ('$user[fullname]', '$pName', '$data')";
                    echo '<script language="javascript">';
                    echo 'alert("Sėkmingai užsiregistravote")';
                    echo '</script>';
                    
                }
            }
            ?>
            <form  action='../../php_includes/logout-inc.php' method='POST'>
                <input type="submit" value="Atsijungti" name="submit">
            </form>

        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </body>
</html>

