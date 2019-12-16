<?php
include_once "dbCon-inc.php";
$appID=$_POST['appID'];
$sql = "DELETE FROM appointments WHERE id='$appID' ";
$result = mysqli_query($conn, $sql);
header("Location: http://".$webserverIP."/Virtualizacija/pages/user/user.php");
