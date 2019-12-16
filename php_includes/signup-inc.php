<?php

include 'dbCon-inc.php';
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
/*if($conn){

  
}*/
if(isset($_POST['submit'])){
   

    
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $fullname=$_POST['fullname'];
    $pwd = $_POST['psword'];
    $doctorPword=$_POST['doctorPword'];
    $speciality=$_POST['speciality'];
    

    //Error handlers
    //Check for empty fields
    
    if(empty($username) || empty($email) || empty($pwd)){
         
         header("Location: http://".$webserverIP."/Virtualizacija/index.php?empty");
         exit();
    }else{
        // Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("Location: http://".$webserverIP."/Virtualizacija/index.php?invalid");
            exit();
        }else{
            //check email validation
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: http://".$webserverIP."/Virtualizacija/index.php?invalid");
               exit();
            }else{
                //check if username is not taken
           
                   $sql = "SELECT * FROM users WHERE username ='$username'";
                $sqlemail = "SELECT * FROM users WHERE email ='$email'";

                $result = mysqli_query($conn, $sql);
                $resultEmail = mysqli_query($conn, $sqlemail);

                $resultCheck = mysqli_num_rows($result);
                $resultCheckEmail = mysqli_num_rows($resultEmail);
                
                if($resultCheck > 0 || $resultCheckEmail>0){ 
                    header("Location: http://".$webserverIP."/Virtualizacija/index.php?taken");
                    exit();
                }else{  
                 
                    //password hashing
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user to database 

                    echo $hashedPwd . $email . $username;
                    if( $doctorPword=='doktor' && $speciality!=""){
                    $sqll = "INSERT INTO users(username,email,fullname,user_pwd,userType,speciality) VALUES ('$username','$email','$fullname', '$hashedPwd','doctor','$speciality')";
                    }else if($doctorPword==''){
                          $sqll = "INSERT INTO users(username,email,fullname,user_pwd,userType,speciality) VALUES ('$username','$email','$fullname', '$hashedPwd','user','pacientas')";
                    }else{
                          header("Location: http://".$webserverIP."/Virtualizacija/index.php?error");
                    }
                    mysqli_query($conn, $sqll);
echo $speciality;

                   header("Location: http://".$webserverIP."/Virtualizacija/index.php?success");
                    exit();
                }
                
            }
        }
    }
    
    
} else {
   header("Location: http://".$webserverIP."/Virtualizacija/index.php?error");
    exit();
}


