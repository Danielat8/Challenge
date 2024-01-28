-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Jan 28, 2024 at 02:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `id` int(11) NOT NULL,
  `First_Name` varchar(40) DEFAULT NULL,
  `Last_Name` varchar(40) DEFAULT NULL,
  `Nickname` varchar(40) DEFAULT NULL,
  `Date_of_Birth` date DEFAULT NULL,
  `Agent_Code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`id`, `First_Name`, `Last_Name`, `Nickname`, `Date_of_Birth`, `Agent_Code`) VALUES
(1, 'Michael', 'Thompson', 'Mike', '1980-06-15', 'AG006'),
(2, 'Aisha', 'Kapoor', 'Ash', '1995-09-20', 'AG007'),
(3, 'Maximus', 'Decimus Meridius', 'Max', '1970-06-15', 'AG008'),
(4, 'Ki-woo', 'Kim', 'Kevin', '1995-03-20', 'AG009'),
(5, 'Nick', 'Dunne', 'Nick', '1980-12-03', 'AG010'),
(6, 'Vincent', 'Vega', 'Vince', '1965-04-04', 'AG011'),
(7, 'Joseph', 'Cooper', 'Joe', '1978-08-15', 'AG012'),
(8, 'Arthur', 'Fleck', 'Joker', '1985-02-10', 'AG013'),
(9, 'Mahavir', 'Singh Phogat', 'Coach', '1960-06-05', 'AG014'),
(10, 'Hugh', 'Jackman', 'Hughie', '1968-10-12', 'AG015'),
(11, 'Brad', 'Pitt', 'Tyler', '1963-12-18', 'AG-3456'),
(12, 'Hugh', 'Jackman', 'Hughie', '1968-10-12', 'AG-6789'),
(13, 'Lin-Manuel', 'Miranda', 'Lin', '1980-01-16', 'AG-9876'),
(14, 'Alex', 'Petrov', 'Shadow', '1985-03-15', 'AGT-2929'),
(15, 'Emily', 'Watson', 'Sleuth', '1980-10-22', 'AGT-2828'),
(16, 'Liam', 'Frost', 'Blizzard', '1985-01-15', 'AGT-2727'),
(17, 'Jessica', 'Noir', 'Shadow', '1980-03-22', 'AGT-2626'),
(18, 'Rachel', 'Green', 'Ray', '1970-05-05', 'AGT-2525'),
(19, 'Charlie', 'Brooks', 'Mirage', '1985-08-15', 'AGT-2424'),
(20, 'Thomas', 'Shelby', 'Blinder', '1980-03-12', 'AGT-2323'),
(21, 'Earnest', 'Johnson', 'ATLStar', '1985-11-05', 'AGT-2222'),
(22, 'Dana', 'Anderson', 'XPhile', '1980-03-15', 'AGT-2121'),
(23, 'Michael', 'Morgan', 'DexStar', '1985-11-20', 'AGT-2020');

-- --------------------------------------------------------

--
-- Table structure for table `critic`
--

CREATE TABLE `critic` (
  `id` int(11) NOT NULL,
  `password` varchar(20) DEFAULT NULL,
  `username` varchar(33) DEFAULT NULL,
  `First_name` varchar(33) DEFAULT NULL,
  `Last_name` varchar(33) DEFAULT NULL,
  `role_critic` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `critic`
--

INSERT INTO `critic` (`id`, `password`, `username`, `First_name`, `Last_name`, `role_critic`) VALUES
(1, 'CriticPass123', 'FilmCriticSam', 'Samantha', 'Johnson', 1),
(2, 'Critic123', 'FilmBuffRohan', 'Rohan', 'Sharma', 2),
(3, 'Critic456', 'FilmFanaticEmily', 'Emily', 'Turner', 3),
(4, 'Critic789', 'FilmGeekSophia', 'Sophia', 'Park', 4),
(5, 'Critic567', 'CinemaCriticLauren', 'Lauren', 'Miller', 5),
(6, 'Critic890', 'FilmBuffChris', 'Christopher', 'Anderson', 6),
(7, 'Critic1234', 'SciFiCriticEm', 'Emily', 'Davis', 7),
(8, 'Critic5678', 'DarkCriticMike', 'Michael', 'Turner', 8),
(9, 'Critic12345', 'BollywoodCriticSneha', 'Sneha', 'Kapoor', 9),
(10, 'Critic4567', 'CrimeDramaCritic', 'Rachel', 'Anderson', 10),
(11, 'Critic123', 'CritiqueQueen', 'Amanda', 'Johnson', 11),
(12, 'Reviewer123', 'CriticEmily', 'Emily', 'Roberts', 12),
(13, 'Reviewer567', 'CriticSarah', 'Sarah', 'Thompson', 13);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `id` int(11) NOT NULL,
  `Last_name` varchar(33) DEFAULT NULL,
  `First_name` varchar(33) DEFAULT NULL,
  `Expertise` varchar(22) DEFAULT NULL,
  `Genre` varchar(22) DEFAULT NULL,
  `film_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`id`, `Last_name`, `First_name`, `Expertise`, `Genre`, `film_id`) VALUES
(1, 'Rodriguez', 'Emily', 'Capturing complex char', 'Historical Drama', 1),
(2, 'Malhotra', 'Raj', 'Crafting heartwarming ', 'Comedy/Drama', 2),
(3, 'Scott', 'Ridley', 'Epic storytelling', 'Historical Action/Dram', 3),
(4, 'Joon-ho', 'Bong', 'Social commentary thro', 'Dark Comedy/Thriller', 4),
(5, 'Fincher', 'David', 'Psychological storytel', 'Mystery/Thriller', 5),
(6, 'Tarantino', 'Quentin', 'Non-linear storytellin', 'Crime/Drama', 6),
(7, 'Nolan', 'Christopher', 'Mind-bending narrative', 'Sci-Fi/Drama', 7),
(8, 'Phillips', 'Todd', 'Dark character studies', 'Crime/Drama', 8),
(9, 'Tiwari', 'Nitesh', 'Inspirational storytel', 'Biographical/Sports Dr', 9),
(10, 'Villeneuve', 'Denis', 'Intense storytelling', 'Crime/Drama', 10),
(11, 'Fincher', 'David', 'Dark Cinematography', 'Thriller', 11),
(12, 'Nolan', 'Christopher', 'Mind-bending Plots', 'Mystery', 12),
(13, 'Kail', 'Thomas', 'Stage-to-Screen Adapta', 'Musical', 13);

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id` int(11) NOT NULL,
  `Premiere_City` varchar(33) DEFAULT NULL,
  `First_week_earning` int(11) DEFAULT NULL,
  `Premiere_format_2D_3D` varchar(33) DEFAULT NULL,
  `movie_id` int(11) NOT NULL,
  `director_id` int(11) NOT NULL DEFAULT 1,
  `director_pay` int(11) NOT NULL DEFAULT 0,
  `sequel_to_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id`, `Premiere_City`, `First_week_earning`, `Premiere_format_2D_3D`, `movie_id`, `director_id`, `director_pay`, `sequel_to_id`) VALUES
(1, 'Washington, D.C.', 40000000, '2D', 1, 1, 33444345, NULL),
(2, 'Mambai', 15000000, '2D', 2, 2, 50000000, NULL),
(3, 'Rome', 80000000, '3D', 3, 3, 120000, NULL),
(4, 'Seoul', 30000000, '2D', 4, 4, 126546, NULL),
(5, 'New York', 45000000, '2D', 5, 5, 1231254, NULL),
(6, 'Loa Angeles', 60000000, '2D', 6, 6, 546456, NULL),
(7, 'New York', 100000000, '3D', 7, 7, 31289, NULL),
(8, 'Gotham City', 85000000, '2D', 8, 8, 546456, NULL),
(9, 'Mumbai', 75000000, '3D', 9, 9, 34532532, NULL),
(10, 'Los Angeles', 60000000, '2D', 10, 10, 1888888, NULL),
(11, 'San Francisco', 30000000, '2D', 11, 11, 55555, NULL),
(12, 'London', 25000000, '3D', 12, 12, 315647, NULL),
(13, 'New York', 50000000, '2D', 13, 13, 6000000, NULL),
(14, 'Rome', 10000000, '2D', 24, 3, 1265460, 3),
(15, 'New York', 15000000, '2D', 25, 5, 5757075, 5);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(11) NOT NULL,
  `Name` varchar(33) DEFAULT NULL,
  `Premiere_City` varchar(33) DEFAULT NULL,
  `Genre` varchar(33) DEFAULT NULL,
  `Country_of_Origin` varchar(33) DEFAULT NULL,
  `Production_Company` varchar(33) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `Name`, `Premiere_City`, `Genre`, `Country_of_Origin`, `Production_Company`) VALUES
(1, 'Oppenheimer', 'Washington, D.C.', 'Historical Drama', 'USA', 'Quantum Pictures'),
(2, '12th Fail', 'Mumbai', 'Comedy/Drama', 'India', 'Bollywood Dream Studios'),
(3, 'Gladiator', 'Rome', 'Historical Action/Drama', 'USA', 'Epic Films International'),
(4, 'Parasite', 'Seoul', 'Dark Comedy/Thriller', 'South Korea', 'Seoul Studios'),
(5, 'Gone Girl', 'New York', 'Mystery/Thriller', 'USA', 'Suspense Productions'),
(6, 'Pulp Fiction', 'Los Angeles', 'Crime/Drama', 'USA', 'Noir Films'),
(7, 'Interstellar', 'New York', 'Sci-Fi/Drama', 'USA', 'Stellar Studios'),
(8, 'Joker', 'Gotham City', 'Crime/Drama', 'USA', 'Dark Arts Productions'),
(9, 'Dangal', 'Mumbai', 'Biographical/Sports Drama', 'India', 'Bollywood Biopics'),
(10, 'Prisoners', 'Los Angeles', 'Crime/Drama', 'USA', 'Suspenseful Productions'),
(11, 'Fight Club', 'San Francisco', 'Drama/Thriller', 'United States', 'Durden Films'),
(12, 'The Prestige', 'London', 'Drama/Mystery', 'United Kingdom', 'Illusion Studios'),
(13, 'Hamilton', 'New York City', 'Musical/Drama', 'United States', 'Broadway Studios'),
(14, 'Chernobyl', 'Pripyat', 'Historical Drama', 'USA', 'Dramatic Productions'),
(15, 'Sherlock', 'London', 'Crime/Mystery', 'United Kingdom', 'Baker Street Productions'),
(16, 'Frozen Planet', 'Antarctica', 'Documentary', 'United Kingdom', 'Polar Productions'),
(17, 'True Detective', 'New Orleans', 'Crime/Drama', 'USA', 'Mystery Productions'),
(18, 'Friends', 'New York City', 'Comedy', 'USA', 'Central Perk Productions'),
(19, 'Black Mirror', 'London', 'Sci-Fi/Anthology', 'United Kingdom', 'Reflective Productions'),
(20, 'Peaky Blinders', 'Birmingham', 'Crime/Drama', 'United Kingdom', 'Shelby Productions'),
(21, 'Atlanta', 'Atlanta', 'Drama/Comedy', 'United States', 'Georgia Productions'),
(22, 'The X-Files', 'Washington, D.C.', 'Mystery/Science Fiction', 'United States', 'Paranormal Productions'),
(23, 'Dexter', 'Miami', 'Crime/Drama', 'United States', 'Darkly Entertainment'),
(24, 'Gladiator 2', 'Rome', 'Historical Action/Drama', 'USA', 'Paramount Pictures'),
(25, 'Gone Girl 2', 'New York', 'Mystery/Thriller', 'USA', 'Illusion Studios');

-- --------------------------------------------------------

--
-- Table structure for table `movie_critique`
--

CREATE TABLE `movie_critique` (
  `id` int(11) NOT NULL,
  `Rating` smallint(6) DEFAULT NULL,
  `critic_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie_critique`
--

INSERT INTO `movie_critique` (`id`, `Rating`, `critic_id`, `movie_id`) VALUES
(1, 5, 1, 1),
(2, 5, 2, 2),
(3, 4, 3, 3),
(4, 6, 4, 4),
(5, 5, 5, 5),
(6, 4, 6, 6),
(7, 6, 7, 7),
(8, 5, 8, 8),
(9, 4, 9, 9),
(10, 5, 10, 10),
(11, 4, 11, 11),
(12, 4, 12, 12),
(13, 6, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `oscar`
--

CREATE TABLE `oscar` (
  `id` int(11) NOT NULL,
  `year` year(4) DEFAULT NULL,
  `role` varchar(33) DEFAULT NULL,
  `film_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `oscar`
--

INSERT INTO `oscar` (`id`, `year`, `role`, `film_id`, `role_id`) VALUES
(1, '2023', 'J. Robert Oppenheimer', 1, 1),
(2, '2024', 'Riya', 2, 2),
(3, '2001', 'Maximus Decimus Meridius', 3, 3),
(4, '2020', 'Ki-woo Kim', 4, 4),
(5, '2015', 'Nick Dunne', 5, 5),
(6, '1995', 'Vincent Vega', 6, 6),
(7, '2015', 'Joseph Cooper', 7, 7),
(8, '2020', 'Arthur Fleck', 8, 8),
(9, '2017', 'Mahavir Singh Phogat', 9, 9),
(10, '2014', 'Keller Dover', 10, 10),
(11, '2000', 'Tyler Durden', 11, 11),
(12, '2007', 'Robert Angier', 12, 12),
(13, '2020', 'Alexander Hamilton', 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `Pay` int(11) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL,
  `actor_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `Pay`, `movie_id`, `actor_id`) VALUES
(1, 12000000, 1, 1),
(2, 10000000, 2, 2),
(3, 20000000, 3, 3),
(4, 30000000, 4, 4),
(5, 12000000, 5, 5),
(6, 15000000, 6, 6),
(7, 18000000, 7, 7),
(8, 20000000, 8, 8),
(9, 10000000, 9, 9),
(10, 15000000, 10, 10),
(11, 5000000, 11, 11),
(12, 7500000, 12, 12),
(13, 1000000, 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `role_critic`
--

CREATE TABLE `role_critic` (
  `id` int(11) NOT NULL,
  `Devotion_grade` varchar(33) DEFAULT NULL,
  `Naturalness_grade` varchar(33) DEFAULT NULL,
  `Expression_grade` varchar(33) DEFAULT NULL,
  `Acting_grade` varchar(33) DEFAULT NULL,
  `role_id` int(11) NOT NULL,
  `critic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role_critic`
--

INSERT INTO `role_critic` (`id`, `Devotion_grade`, `Naturalness_grade`, `Expression_grade`, `Acting_grade`, `role_id`, `critic_id`) VALUES
(1, '9', '9', '8', '8', 1, 1),
(2, '7', '7', '6', '6', 2, 2),
(3, '7', '8', '8', '9', 3, 3),
(4, '5', '6', '7', '6', 4, 4),
(5, '10', '9', '9', '10', 5, 5),
(6, '9', '8', '9', '10', 6, 6),
(7, '8', '10', '9', '9', 7, 7),
(8, '10', '8', '8', '9', 8, 8),
(9, '10', '10', '8', '8', 9, 9),
(10, '6', '6', '7', '8', 10, 10),
(11, '8', '7', '7', '9', 11, 11),
(12, '10', '9', '10', '9', 12, 12),
(13, '9', '10', '10', '10', 13, 13);

-- --------------------------------------------------------

--
-- Table structure for table `tv_series`
--

CREATE TABLE `tv_series` (
  `id` int(11) NOT NULL,
  `TV_Channel` varchar(33) DEFAULT NULL,
  `Number_of_Episodes` varchar(33) DEFAULT NULL,
  `Expected_Seasons` varchar(33) DEFAULT NULL,
  `movie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tv_series`
--

INSERT INTO `tv_series` (`id`, `TV_Channel`, `Number_of_Episodes`, `Expected_Seasons`, `movie_id`) VALUES
(1, 'HBO', '5', '1', 14),
(2, 'BBC One', '15', '4', 15),
(3, 'BBC Earth', '10', '1', 16),
(4, 'HBO', '30', '3', 17),
(5, 'NBC', '234', '10', 18),
(6, 'Channel 4', '28', '6', 19),
(7, 'BBC Two', '36', '7', 20),
(8, 'FX', '41', '5', 21),
(9, 'FOX', '217', '12', 22),
(10, 'Showtime', '96', '8', 23);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `critic`
--
ALTER TABLE `critic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_movie_FK` (`movie_id`),
  ADD KEY `film_director_FK` (`director_id`),
  ADD KEY `sequel_film_FK` (`sequel_to_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `movie_critique`
--
ALTER TABLE `movie_critique`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_critique_movie_FK` (`movie_id`),
  ADD KEY `movie_critique_critic_FK` (`critic_id`);

--
-- Indexes for table `oscar`
--
ALTER TABLE `oscar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oscar_film_FK` (`role_id`),
  ADD KEY `oscar_film2_FK` (`film_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_actor_FK` (`actor_id`),
  ADD KEY `role_movie_FK` (`movie_id`);

--
-- Indexes for table `role_critic`
--
ALTER TABLE `role_critic`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_critic_critic_FK` (`critic_id`),
  ADD KEY `role_critic_role_FK` (`role_id`);

--
-- Indexes for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD PRIMARY KEY (`id`),
  ADD KEY `movie_fk` (`movie_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `critic`
--
ALTER TABLE `critic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `movie_critique`
--
ALTER TABLE `movie_critique`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `oscar`
--
ALTER TABLE `oscar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `role_critic`
--
ALTER TABLE `role_critic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tv_series`
--
ALTER TABLE `tv_series`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `film`
--
ALTER TABLE `film`
  ADD CONSTRAINT `film_director_FK` FOREIGN KEY (`director_id`) REFERENCES `director` (`id`),
  ADD CONSTRAINT `film_movie_FK` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`),
  ADD CONSTRAINT `sequel_film_FK` FOREIGN KEY (`sequel_to_id`) REFERENCES `film` (`id`);

--
-- Constraints for table `movie_critique`
--
ALTER TABLE `movie_critique`
  ADD CONSTRAINT `movie_critique_critic_FK` FOREIGN KEY (`critic_id`) REFERENCES `critic` (`id`),
  ADD CONSTRAINT `movie_critique_movie_FK` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `oscar`
--
ALTER TABLE `oscar`
  ADD CONSTRAINT `oscar_film2_FK` FOREIGN KEY (`film_id`) REFERENCES `film` (`id`),
  ADD CONSTRAINT `oscar_role_FK` FOREIGN KEY (`id`) REFERENCES `role` (`id`);

--
-- Constraints for table `role`
--
ALTER TABLE `role`
  ADD CONSTRAINT `role_actor_FK` FOREIGN KEY (`actor_id`) REFERENCES `actor` (`id`),
  ADD CONSTRAINT `role_movie_FK` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);

--
-- Constraints for table `role_critic`
--
ALTER TABLE `role_critic`
  ADD CONSTRAINT `role_critic_critic_FK` FOREIGN KEY (`critic_id`) REFERENCES `critic` (`id`),
  ADD CONSTRAINT `role_critic_role_FK` FOREIGN KEY (`role_id`) REFERENCES `role` (`id`);

--
-- Constraints for table `tv_series`
--
ALTER TABLE `tv_series`
  ADD CONSTRAINT `movie_fk` FOREIGN KEY (`movie_id`) REFERENCES `movie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
