
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
              </p>            <select name='month' id=''>
                                <option value='' selected>Menuo</option>   
                                <option value='Gruodis 2019'>Gruodis 2019</option>
                                <option value='Sausis 2020'>Sausis 2020</option> 
                                <option value='Vasaris 2020'>Vasaris 2020</option> 
                                <option value='Kovas 2020'>Kovas 2020</option> 
                                <option value='Balandis 2020'>Balandis 2020</option> 
                                <option value='Geguze 2020'>Geguze 2020</option> 
                                <option value='Birzelis 2020'>Birzelis 2020</option>  
                                <option value='Liepa 2020'>Liepa 2020</option> 
                                <option value='Rugpjutis 2020'>Rugpjutis 2020</option>   
                            </select>
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
                            
                            <button type='submit' name='submitReg' id='play' value='$user[fullname]' placeholder='submit'>Registruoti</button>
                            </form>
        </div>
            
            "
                ;

                if (isset($_POST['submitReg']) && $_POST['Data'] !='' && $_POST['Miestas'] !='') {
                    $data = $_POST['Data'];
                    $month =$_POST['month'];
                    $name=$_POST['submitReg'];
                    $queryR = "INSERT INTO appointments(month,dname, pname, monthDay) VALUES ('$month','$name', '$pName', '$data')";
                    $result = mysqli_query($conn, $queryR);
                    echo '<script language="javascript">';
                    echo 'alert("Sėkmingai užsiregistravote")';
                    echo '</script>';
                    $_POST['Data']=null;
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

