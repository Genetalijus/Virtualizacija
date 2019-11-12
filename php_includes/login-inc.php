<?php

session_start();

if(isset($_POST['submit'])){
    
    include 'dbCon-inc.php';
    
     $username = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['psword'];
  
    
    //error handlers
    //check if inputs are empty
    
    if(empty($username) || empty($pwd)){
          header("Location: http://localhost/Virtualizacija/index.php?empty");
         exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if($resultCheck < 1){
            header("Location: http://localhost/Virtualizacija/index.php?error1");
            exit();  
        
    } else {
        if($row = mysqli_fetch_assoc($result)){
          //Dehashing the password
            $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
            if($hashedPwdCheck == false){
                header("Locaton: ../index.php?login=error");
                exit();
            } elseif($hashedPwdCheck == true){
                //Log in the user here
                $_SESSION['u_id'] = $row['user_id'];
                $_SESSION['u_username'] = $row['username'];
                $_SESSION['u_email'] = $row['email'];
                  $_SESSION['fullname'] = $row['fullname'];
                  $_SESSION['speciality'] = $row['speciality'];
                  $_SESSION['userType'] = $row['userType'];
                  
                    $user_data = "select * from users where username ='$username'";
                    $userType = mysqli_query($conn, $user_data);
                    $row = mysqli_fetch_assoc($userType);

                    $type = $row['userType'];

                    if($type == 'doctor'){
                        header("Location: http://localhost/Virtualizacija/pages/doctor/doctor.php"); 
                    }else{
                         header("Location: http://localhost/Virtualizacija/pages/user/user.php"); 
           
                    }

                  
                exit();
            }
            }
        }
    }
}else{
   header("Location: http://localhost/Virtualizacija/index.php?errorrs");
  exit();  
}


