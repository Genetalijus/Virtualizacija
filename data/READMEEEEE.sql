-- as manau, kad duombazes kurimas taip atrodys: zmogus uzsiregistruoja -> sukuriamas user objektas -> sukuriamas team su id is user "team_id"----> sukuriami penki zaidejai su random stats. dar nezinau kaip random vardus jiems uzdet. Tikriausiai textini faila su daug vardu ir tiesiog is ten idet i database

--sitas sql kodas turetu nesikirsti su tavo php kodu (jeigu viska gerai padariau)


--dabar su php padariau, kad team turetu user id ir kad player turetu team id. pachekink ir parasyk man ar viskas gerai.

CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `team_id` int(10) NOT NULL,
  `name` varchar(16) NOT NULL,
  `xp` int(10) UNSIGNED NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `attack` int(10) UNSIGNED NOT NULL ,
  `defense` int(10) UNSIGNED NOT NULL ,
  `dribble` int(10) UNSIGNED NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--geras
CREATE TABLE `players` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT primary key,
   `user_id` int(60) not null, 
  `name` varchar(16) NOT NULL,
  `xp` int(10) UNSIGNED NOT NULL,
  `level` int(10) UNSIGNED NOT NULL,
  `attack` int(10) UNSIGNED NOT NULL ,
  `defense` int(10) UNSIGNED NOT NULL ,
  `dribble` int(10) UNSIGNED NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- kode reikia, kad useris team name susigalvotu arba tsg user.user_name+"'s team"
CREATE TABLE `team` (
`user_id` int NOT NULL,
  `name` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--"insert into team(name) values('$username''s Team  )";

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT primary key,
  `email` varchar(64) NOT NULL,
  `user_name` varchar(12) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `money` int(11) NOT NULL,
   `teamName` varchar(100) not null
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


--sitas bus i koda idet kai uzsiregistruos useris. Manau reikia cikla penkis kartus prasukt su situo sql kodu

--insert into players(team_id,name,xp,level,attack,defense,dribble)
--values (0,"rim",0,1, (FLOOR( 1 + RAND( ) *4 )), (FLOOR( 1 + RAND( ) *4 )), (FLOOR( 1 + RAND( ) --*4 )));
insert into players(team_id,name,xp,level,attack,defense,dribble)
values (-1,"Lebron Jamer",0,1, (FLOOR( 1 + RAND( ) *4 )), (FLOOR( 1 + RAND( ) *4 )), (FLOOR( 1 + RAND( ) *4 )));




--team nebereikia uztenka userio