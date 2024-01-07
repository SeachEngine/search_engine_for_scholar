-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 04:45 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `research`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `tag` varchar(50) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `author_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `title`, `tag`, `description`, `link`, `author_name`) VALUES
(1, 'what is database?', 'database,data,dbms,rdbms', 'A database is an organized collection of structured information, or data, typically stored electronically in a computer system. A database is usually controlled by a database management system (DBMS). Together, the data and the DBMS, along with the applications that are associated with them, are referred to as a database system, often shortened to just database.', 'https://www.oracle.com/in/database/what-is-database/#:~:text=Is%20a%20Database%3F-,Database%20defined,database%20management%20system%20(DBMS)', 'Oracle'),
(2, 'tell something about google scholar', 'scholar,google scholar,scholar database,WHAT IS GO', 'Google searches public Web content. Your teacher says \"Don\'t use Google,\" meaning that you should not use the public Web content.\r\n\r\nGoogle Scholar is different. It searches the same kinds of scholarly books, articles, and documents that you search in the Library\'s catalog and databases. The scholarly, authoritative focus of Google Scholar distinguishes it from ordinary Google.', 'https://library.shsu.edu/research/guides/tutorials/googlescholar/index.html#:~:text=Google%20Scholar%20is%20a%20Web,scholarly%20literature%20and%20academic%20resources.', 'unknown'),
(3, 'Requirement Engineering', 'S/w engineering,RE,Requirement engineering,SRS', 'Requirements engineering is the process of identifying, eliciting, analyzing, specifying, validating, and managing the needs and expectations of stakeholders for a software system.', 'https://www.geeksforgeeks.org/software-engineering-requirements-engineering-process/', 'GFG');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `tag` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `hid` int(10) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`tag`, `email`, `hid`, `time`) VALUES
('dbms', 'nejarulislam45@gmail.com', 1, '2023-12-26 15:08:37'),
('dbms', 'nejarulislam45@gmail.com', 2, '2023-12-26 15:09:51'),
('dbms', 'nejarulislam45@gmail.com', 3, '2023-12-26 15:21:11'),
('data ', 'nejarulislam45@gmail.com', 4, '2023-12-26 15:22:27'),
('what is dbms?', 'nejarulislam45@gmail.com', 5, '2023-12-26 15:27:17'),
('what is database', 'nimai4938@gmail.com', 6, '2023-12-26 15:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `scholar`
--

CREATE TABLE `scholar` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `qual` varchar(11) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scholar`
--

INSERT INTO `scholar` (`id`, `name`, `dob`, `email`, `address`, `qual`, `pass`) VALUES
(13, 'Nejarul Islam', '1999-02-01', 'nejarulislam45@gmail.com', 'Murshidabad', 'Bsc Btech', '12345'),
(14, 'Nimai Barman', '2000-01-01', 'nimai4938@gmail.com', 'Dinajpur', 'Bsc Btech', '09876');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`hid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `scholar`
--
ALTER TABLE `scholar`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `hid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `scholar`
--
ALTER TABLE `scholar`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `history_ibfk_1` FOREIGN KEY (`email`) REFERENCES `scholar` (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
