<?php
include_once 'dbCon.php';
$username=$_SESSION['u_username'];
$sql = "SELECT money FROM users WHERE user_name='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
     $data=$result;
    



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

