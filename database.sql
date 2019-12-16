 CREATE TABLE `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT primary key,
  `username` varchar(255) not null,
  `email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
   `userType` varchar(255) NOT NULL,
   `speciality` varchar(255) NOT NULL
    
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


CREATE TABLE `appointments`(


)ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;