

CREATE TABLE `users` (
  `user_id` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `userType` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL
) ENGINE=InnoDB

INSERT INTO `users` (`user_id`, `username`, `email`, `fullname`, `user_pwd`, `userType`, `speciality`) VALUES
(4, 'algis', 'algins@alga.com', 'Algin baba', '$2y$10$4tcUQk4HlN6THAK1.AL0Q.GM2cN.6Y8qUHCpBKAC1n6F9wT35LYx.', 'user', 'pacientas'),
(5, 'pacientas', 'pacientas@gmail.com', 'Pacientas LIga', '$2y$10$WZq052G3knrRB9Oznscjveb/OECH.hka3Teb5/o1AyvXZe4BBnYuu', 'user', 'pacientas'),
(8, 'pacient', 'asdl@gmail.com', 'pacientas apac', '$2y$10$Dqy7NXLHbGgqp/NR74yyPuGYCCOAlv/pBZ77EhdW.zEJ2gmm55WD2', 'user', 'pacientas'),
(9, 'Tomass', 'Tomas@gmail.com', 'Tomas Tomas', '$2y$10$xPf2F2Hgzj/erpcEQjYxZ.YGzlUk.WBoZdtD3DxadPu1X/HbN4iAC', 'user', 'pacientas'),
(10, 'Rimas', 'Rimas@gmail.com', 'Rimas Rimas', '$2y$10$9ynAfYI/ECMwj3SttvHcyeWgHDuGhS3KzKU0RNJRPjKu5l0KkwooC', 'user', 'pacientas'),
(11, 'Simas', 'Simas@gmail.com', 'Simas Simas', '$2y$10$UkbX2zXRwpqwT8ya6lIko.qGqmAEeu7rPagFWJ5UJuXb/F6zLP2nW', 'user', 'pacientas'),
(12, 'Daktaras', 'daktar@gmail.com', 'Daktaras Daktaras', '$2y$10$vWcGfeIID8.TmCXfYAjNmOgBRnCse9UPNJ8/cMyTcNMurvPOc/UzS', 'doctor', 'Seimos gydytojas'),
(13, 'Daktarass', 'Daktarass@gmail.com', 'Daktarass Daktarass', '$2y$10$9Mf/tS72XnWnnuXYCiHqFuT.9lj9OZAWGxO/pOPzBauMYSAbyuj/m', 'doctor', 'Seimos gydytojas'),
(14, 'Daktarasss', 'Daktarasss@gmail.com', 'Daktarasss Daktarasss', '$2y$10$bSZqpiDM1jGZCLh96AufoedbcQtfH7WJEOVxmA9Y0ochDxPaSUwOW', 'doctor', 'Seimos gydytojas');DEFAULT CHARSET=utf8mb4;


CREATE TABLE `appointments` (
  `month` varchar(255) NOT NULL,
  `dname` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `monthDay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `appointments` (`month`, `dname`, `pname`, `monthDay`) VALUES
('Liepa 2020', 'Daktarasss Daktarasss', 'Simas', 25),
('Birzelis 2020', 'Daktarass Daktarass', 'Simas', 25),
('Vasaris 2020', 'Daktaras Daktaras', 'Simas', 14),
('Vasaris 2020', 'Daktaras Daktaras', 'Simas', 14),
('Vasaris 2020', 'Daktaras Daktaras', 'Simas', 14),
('Vasaris 2020', 'Daktaras Daktaras', 'Simas', 14),
('Vasaris 2020', 'Daktaras Daktaras', 'Simas', 7),
('Rugpjutis 2020', 'Daktarasss Daktarasss', 'pacientas', 22),
('Liepa 2020', 'Daktarass Daktarass', 'pacientas', 25),
('Balandis 2020', 'Daktaras Daktaras', 'pacientas', 18),
('Liepa 2020', 'Daktarasss Daktarasss', 'Rimas', 18),
('Birzelis 2020', 'Daktarass Daktarass', 'Rimas', 14),
('Kovas 2020', 'Daktaras Daktaras', 'Rimas', 7),
('Liepa 2020', 'Daktarasss Daktarasss', 'pacient', 22),
('Birzelis 2020', 'Daktarass Daktarass', 'pacient', 22),
('Gruodis 2019', 'Daktaras Daktaras', 'pacient', 14),
('Sausis 2020', 'Daktaras Daktaras', 'pacient', 7);