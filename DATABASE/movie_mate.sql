-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 07:12 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movie_mate`
--

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(11) NOT NULL,
  `movie_name` varchar(255) NOT NULL,
  `year` int(255) NOT NULL,
  `duration` varchar(255) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `poster_image` text NOT NULL,
  `trailer_link` text NOT NULL,
  `genres` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `director` varchar(255) NOT NULL,
  `writers` varchar(255) NOT NULL,
  `stars` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `movie_name`, `year`, `duration`, `rating`, `poster_image`, `trailer_link`, `genres`, `description`, `director`, `writers`, `stars`) VALUES
(1, 'John Wick Chapter: 4', 2023, '2h 20m', '95%', 'https://m.media-amazon.com/images/M/MV5BMDExZGMyOTMtMDgyYi00NGIwLWJhMTEtOTdkZGFjNmZiMTEwXkEyXkFqcGdeQXVyMjM4NTM5NDY@._V1_QL75_UX280_CR0,0,280,414_.jpg', 'https://www.youtube.com/embed/yjRHZEUamCc', 'Action,Crime,Thriller', 'John Wick uncovers a path to defeating The High Table. But before he can earn his freedom, Wick must face off against a new enemy with powerful alliances across the globe and forces that turn old friends into foes.', 'Chad Stahelski', 'Shay Hatten,Michael Finch,Derek Kolstad', 'Keanu Reeves,Laurence Fishburne,George Georgiou'),
(12, 'Ted Lasso', 2020, '30m', '88%', 'https://m.media-amazon.com/images/M/MV5BMTdmZjBjZjQtY2JiNS00Y2ZlLTg2NzgtMjUzMGY2OTVmOWJiXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_QL75_UX380_CR0,0,380,562_.jpg', 'https://www.youtube.com/embed/IR9yjn7Lkdg', 'Comedy, Drama, Sport', 'An American football coach is hired to manage a British soccer team; what he lacks in knowledge, he makes up for in optimism, determination and biscuits.', 'Brendan Hunt', 'Brendan Hunt, Joe Kelly, Bill Lawrence', 'Jason Sudeikis, Brett Goldstein, Hannah Waddingham'),
(13, 'The Night Agent', 2023, '45m', '75%', 'https://m.media-amazon.com/images/M/MV5BODgzYmFkZjAtYjhmNC00NDdkLTk4NGYtNDdiODVlNmE3ODkyXkEyXkFqcGdeQXVyNTE1NjY5Mg@@._V1_QL75_UX280_CR0,0,280,414_.jpg', 'https://www.youtube.com/embed/YDbnY9Obsfs', 'Action,Drama,Thriller', 'Low-level FBI agent Peter Sutherland works in the basement of the White House manning a phone that never rings - until the night it does, propelling him into a conspiracy that leads all the way to the Oval Office.', 'Shawn Ryan', 'Shawn Ryan', 'Gabriel Basso,Lucaine Buchanan,Fola Evans-Akingbola'),
(14, 'Shazam! Fury of the Gods ', 2023, '2h 10m', '60%', 'https://m.media-amazon.com/images/M/MV5BNzJlM2NmZTItOGQyYS00MmE2LTkwZGUtNDFkNmJmZjRjZjcxXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_QL75_UX280_CR0,0,280,414_.jpg', 'https://www.youtube.com/embed/AIc671o9yCI', 'Action,Adventure', 'Bestowed with the powers of the gods, Billy Batson and his fellow foster kids are still learning how to juggle teenage life with their adult superhero alter egos. When a vengeful trio of ancient gods arrives on Earth in search of the magic stolen from them long ago, Shazam and his allies get thrust into a battle for their superpowers, their lives, and the fate of the world.', 'David F. Sandberg', 'David F. Sandberg', 'Zachery Levi,Asher Angel,Jack Dylan Grazer'),
(15, 'Dungeons &amp; Dragons', 2023, '2h 14m', '76%', 'https://m.media-amazon.com/images/M/MV5BZjAyMGMwYTEtNDk4ZS00YmY0LThhZjUtOWI4ZjFmZmU4N2I3XkEyXkFqcGdeQXVyMTEyNzQ1MTk0._V1_QL75_UY414_CR2,0,280,414_.jpg', 'https://www.youtube.com/embed/IiMinixSXII', 'Adventure,Fantasy', 'A charming thief and a band of unlikely adventurers embark on an epic quest to retrieve a long lost relic, but their charming adventure goes dangerously awry when they run afoul of the wrong people.', 'John Francis Daley', 'John Francis Daley, Jonathan Goldstein', 'Chris Pine, Michelle Rodriguez, Rege-jean Page'),
(16, 'Barbie', 2023, '1h 40m', '71%', 'https://m.media-amazon.com/images/M/MV5BOWIwZGY0OTYtZjUzYy00NzRmLTg5YzgtYWMzNWQ0MmZiY2MwXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_QL75_UX280_CR0,0,280,414_.jpg', 'https://www.youtube.com/embed/GRyt3Ov4zz0', 'Comedy,Fantasy', 'After being expelled from Barbieland for being a less than perfect-looking doll, Barbie sets off for the human world to find true happiness.', 'Greta Gerwig', 'Greta Gerwig', 'Ryan Gosling,Margot Robbie,Emma Mackey'),
(17, 'Creed III', 2023, '1h 57m', '70%', 'https://m.media-amazon.com/images/M/MV5BYWY1ZDY4MmQtYjhiYS00N2QwLTk1NzgtOWI2YzUwZThjNDYwXkEyXkFqcGdeQXVyMDM2NDM2MQ@@._V1_QL75_UX280_CR0,0,280,414_.jpg', 'https://www.youtube.com/embed/AHmCH7iB_IM', 'Drama,Sport', 'Still dominating the boxing world, Adonis Creed is thriving in his career and family life. When Damian, a childhood friend and former boxing prodigy resurfaces after serving time in prison, he&#039;s eager to prove that he deserves his shot in the ring. The face-off between former friends is more than just a fight. To settle the score, Adonis must put his future on the line to battle Damian -- a fighter who has nothing to lose.', 'Michael B. Jordan', 'Michael B. Jordan', 'Michael B. Jordan,Jonathan Majors,Tessa Thompson'),
(21, 'Air', 2023, '1h 51m', '77%', 'https://m.media-amazon.com/images/M/MV5BYmNlOTNlYjUtM2U3Yy00M2ZjLTkxZDQtN2NiNGZiZDI0ZjE3XkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_QL75_UX380_CR0,0,380,562_.jpg', 'https://www.youtube.com/embed/Euy4Yu6B3nU', 'Drama, Sport', 'Follows the history of shoe salesman Sonny Vaccaro, and how he led Nike in its pursuit of the greatest athlete in the history of basketball, Michael Jordan.', 'Ben Affleck', 'Alex Convery', 'Matt Damon, Jason Batemon, Ben Affleck');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
