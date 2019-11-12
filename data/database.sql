 CREATE TABLE `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT primary key,
  `username` varchar(255) not null,
  `email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
   `userType` varchar(255) NOT NULL,
   `speciality` varchar(255) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

 CREATE TABLE `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT primary key,
  `email` varchar(255) NOT NULL,
`fullname` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
   `userType` varchar(255) NOT NULL,
    `teamName` varchar(100) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



  if(!preg_match("/^[a-zA-Z]*$/", $username)){
            header("Location: http://localhost/Virtualizaacija/index.php?invalid");
            exit();
        }else{
            //check email validation
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: http://localhost/Virtualizacija/index.php?invalid");
               exit();
            }else{
                //check if username is not taken
                echo "SQL";
                $sql = "SELECT * FROM users WHERE user_name ='$username'";
                echo "results";
                $result = mysqli_query($conn, $sql);
                echo "check";
                $resultCheck = mysqli_num_rows($result);
                echo resultcheck;
                if($resultCheck > 0){ echo "iffff";
                    header("Location: http://localhost/Virtualizacija/index.php?taken");
                    exit();
                }else{  
                    echo "successs";
                    //password hashing
                    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
                    //Insert the user to database 

                    echo $hashedPwd . $email . $username;
             $sqll = "INSERT INTO users(username,email,user_pwd,userType) VALUES ($username','$email', '$hashedPwd','user')";



                   // mysqli_query($conn, $sqll);

                   // $user_id = "select user_id from users where user_name ='$username'";
                   // $usrIDres = mysqli_query($conn, $user_id);
                   // $row = mysqli_fetch_assoc($usrIDres);
                   // $usrid = $row['user_id'];


                
                 header("Location: http://localhost/Virtualizacija/index.php?success");
                    exit();