
# Kaip pasirengti svetaine
1. susikurti duombaze 
2. idet table
 CREATE TABLE `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT primary key,
  `username` varchar(255) not null,
  `email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
   `userType` varchar(255) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

2. slaptika pasikeist dbCon faile
