<?php
include_once "dbCon-inc.php";
if(isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: http://".$webserverIP."/Virtualizacija/index.php?");
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

