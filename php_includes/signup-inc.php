<?php

include 'dbCon-inc.php';
$money=1000;
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
if($conn){

  
}
if(isset($_POST['submit'])){
   

    
    $username = $_POST['uname'];
    $email = $_POST['email'];
    $pwd = $_POST['psword'];
    $doctorPword=$_POST['doctorPword'];
    

    //Error handlers
    //Check for empty fields
    
    if(empty($username) || empty($email) || empty($pwd)){
         
         header("Location: http://localhost/Virtualizacija/index.php?empty");
         exit();
    }else{
        // Check if input characters are valid
        if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("Location: http://localhost/Virtualizacija/index.php?invalid");
            exit();
        }else{
            //check email validation
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: http://localhost/Virtualizacija/index.php?invalid");
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
                    header("Location: http://localhost/Virtualizacija/index.php?taken");
                    exit();
                }else{  
                 
                    //password hashing
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user to database 

                    echo $hashedPwd . $email . $username;
                    if( $doctorPword=='doktor'){
                    $sqll = "INSERT INTO users(username,email,user_pwd,userType) VALUES ('$username','$email', '$hashedPwd','doctor')";
                    }else{
                          $sqll = "INSERT INTO users(username,email,user_pwd,userType) VALUES ('$username','$email', '$hashedPwd','user')";
                    }
                    mysqli_query($conn, $sqll);


                    //  header("Location: http://localhost/Virtualizacija/index.php?success");
                    exit();
                }
                
            }
        }
    }
    
    
} else {
   header("Location: http://localhost/Virtualizacija/index.php?error");
    exit();
}


