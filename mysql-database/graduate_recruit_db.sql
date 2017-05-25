-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 07:23 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `graduate_recruit_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `degree_details`
--

CREATE TABLE `degree_details` (
  `graduate_id` int(11) NOT NULL,
  `degree_id` int(11) NOT NULL,
  `degree_type` varchar(50) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `grade` varchar(10) NOT NULL,
  `institution` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `degree_details`
--

INSERT INTO `degree_details` (`graduate_id`, `degree_id`, `degree_type`, `course_name`, `grade`, `institution`) VALUES
(1, 1, 'Bachelor of Arts', 'Acting', '2:1', 'SOAS university of London'),
(3, 3, 'Bachelor of Engineering', 'Engineering', '1st', 'Middlesex University'),
(10, 113, 'BE', 'Computer Science', 'A+', 'aa'),
(10, 115, 'BS', 'Information Technology', '1st', 'axada'),
(14, 112, 'BS', 'Computer Science', 'A+', '');

-- --------------------------------------------------------

--
-- Table structure for table `graduate`
--

CREATE TABLE `graduate` (
  `user_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduate`
--

INSERT INTO `graduate` (`user_id`, `graduate_id`, `firstname`, `lastname`, `email`, `website`, `about`) VALUES
(1, 1, 'Ahmed', 'Fleming', 'iaculis.aliquet@Praesent.edu', 'www.abc.com', 'hello! i am james bond'),
(1, 3, 'Ali', 'Kline', 'ac.vitae@maurisrhoncus.net', 'www.abc.com', 'hello !'),
(2, 10, 'azeem', 'ullah', 'aaaa', 'aaaa', 'aaaaa'),
(10, 11, 'a', 'a', 'a', 'a', ''),
(12, 12, 'yaseens', 'raza', 'y_turabi@hotmai.com', 'www.abc.com', ''),
(21, 14, 'abc', 'khan', 'abc', 'abc', '');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`project_id`, `user_id`) VALUES
(1, 1),
(1, 2),
(1, 10),
(1, 18),
(1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `messeges`
--

CREATE TABLE `messeges` (
  `sender_id` int(10) NOT NULL,
  `receiver_id` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `messeges` varchar(10000) NOT NULL,
  `messege_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messeges`
--

INSERT INTO `messeges` (`sender_id`, `receiver_id`, `email`, `name`, `messeges`, `messege_id`) VALUES
(1, 2, 'shabih_haider1@outlook.com', 'Shabih', 'This is a test message.', 9),
(2, 1, 'azeemullah@abc.com', 'Azeem', 'this is test message reply.', 11),
(1, 2, 'azeemullah@abc.com', 'shaboh', 'this is reply of reply of test message.', 12),
(2, 1, 'azeemullah@abc.com', 'azeem', 'Hi there shabih. Whats up?', 13),
(1, 2, 'a', 'a', 'nothing much', 14);

-- --------------------------------------------------------

--
-- Table structure for table `opportunity`
--

CREATE TABLE `opportunity` (
  `opportunity_id` int(11) NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `type` varchar(1000) NOT NULL,
  `spec` varchar(1000) NOT NULL,
  `department` varchar(1000) NOT NULL,
  `grade` varchar(1000) NOT NULL,
  `slot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `opportunity`
--

INSERT INTO `opportunity` (`opportunity_id`, `recruiter_id`, `type`, `spec`, `department`, `grade`, `slot`) VALUES
(9, 8, 'MS', 'Information Technology', 'abc', 'A+', 2),
(10, 8, 'BS', 'Computer Science', 'acve', 'A+', 5),
(11, 9, 'MS', 'Information Technology', 'abc', 'B', 3),
(12, 9, 'MS', 'Information Technology', 'acb', 'A+', 1),
(13, 9, 'PHD', 'Buissness Management', 'acvada', 'A+', 10);

-- --------------------------------------------------------

--
-- Table structure for table `project_experience`
--

CREATE TABLE `project_experience` (
  `project_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL,
  `title` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `skill_gained` varchar(20) NOT NULL,
  `project_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_experience`
--

INSERT INTO `project_experience` (`project_id`, `graduate_id`, `title`, `type`, `skill_gained`, `project_image`) VALUES
(1, 10, 'a', 'a', 'a', 'uploads/1.jpg'),
(3, 12, '', 'Personal', '', 'uploads/3.PNG'),
(36, 14, '', 'Semester', 'abc', 'uploads/3.PNG'),
(37, 10, 'abc', 'Semester', 'abc', 'uploads/37.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `recruiter`
--

CREATE TABLE `recruiter` (
  `user_id` int(11) NOT NULL,
  `recruiter_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `company` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `postal_code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recruiter`
--

INSERT INTO `recruiter` (`user_id`, `recruiter_id`, `firstname`, `lastname`, `email`, `role`, `company`, `address`, `city`, `postal_code`) VALUES
(1, 2, 'Jenna', 'Ahmed', 'penatibus@felis.com', 'HR Recruiter', 'abc', 'Ap #794-4605 Ornare Road\r\n', 'Beez', '8775'),
(2, 4, 'Cynthia', 'Wheeler', 'sem.vitae.aliquam@ligulaeu.net', 'HR Recruiter', 'Accumsan Laoreet Ipsum Associates', '380-7471 Phasellus Rd.\r\n', 'Huissen', '421732'),
(11, 7, 'a', 'a', 'a', 'a', 'a', 'a', 'a', '000'),
(18, 8, 'test', 'test', 'test', 'test', 'test', 'test', 'test', '12345'),
(20, 9, 'test', 'test', 'test', 'test', 'test', 'test', 'test', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_type`) VALUES
(1, 'shabih', 'hadihadi123', 'recruiter'),
(2, 'azeemullah', 'corsair123', 'graduate'),
(10, 'abc', 'abc', 'Graduate'),
(11, 'a', 'a', 'recruiter'),
(12, 'yaseen', 'raza', 'graduate'),
(13, 'azeem', 'abc', 'graduate'),
(14, 'azeem', 'abc', 'graduate'),
(17, 'aa', 'a', ''),
(18, 'test123', 'test123', 'recruiter'),
(19, 'azeemullah', 'abc', 'graduate'),
(20, 'test12', 'test123', 'recruiter'),
(21, 'test21', 'test123', 'graduate'),
(22, 'abddc', 'abcd', 'recruiter');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `user_id` int(11) NOT NULL,
  `graduate_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`user_id`, `graduate_id`) VALUES
(1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `degree_details`
--
ALTER TABLE `degree_details`
  ADD PRIMARY KEY (`graduate_id`,`degree_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `detail_id` (`degree_id`);

--
-- Indexes for table `graduate`
--
ALTER TABLE `graduate`
  ADD PRIMARY KEY (`user_id`,`graduate_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`project_id`,`user_id`),
  ADD KEY `graduate_id` (`user_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `messeges`
--
ALTER TABLE `messeges`
  ADD PRIMARY KEY (`messege_id`);

--
-- Indexes for table `opportunity`
--
ALTER TABLE `opportunity`
  ADD PRIMARY KEY (`opportunity_id`,`recruiter_id`),
  ADD KEY `opportunity_id` (`opportunity_id`,`recruiter_id`),
  ADD KEY `recruiter_id` (`recruiter_id`);

--
-- Indexes for table `project_experience`
--
ALTER TABLE `project_experience`
  ADD PRIMARY KEY (`project_id`,`graduate_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `project_id` (`project_id`);

--
-- Indexes for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD PRIMARY KEY (`user_id`,`recruiter_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `recruiter_id` (`recruiter_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`user_id`,`graduate_id`),
  ADD KEY `graduate_id` (`graduate_id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `degree_details`
--
ALTER TABLE `degree_details`
  MODIFY `degree_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
--
-- AUTO_INCREMENT for table `graduate`
--
ALTER TABLE `graduate`
  MODIFY `graduate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `messeges`
--
ALTER TABLE `messeges`
  MODIFY `messege_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `opportunity`
--
ALTER TABLE `opportunity`
  MODIFY `opportunity_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `project_experience`
--
ALTER TABLE `project_experience`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `recruiter`
--
ALTER TABLE `recruiter`
  MODIFY `recruiter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `graduate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `degree_details`
--
ALTER TABLE `degree_details`
  ADD CONSTRAINT `degree_details_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduate` (`graduate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `graduate`
--
ALTER TABLE `graduate`
  ADD CONSTRAINT `graduate_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`project_id`) REFERENCES `project_experience` (`project_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `opportunity`
--
ALTER TABLE `opportunity`
  ADD CONSTRAINT `opportunity_ibfk_1` FOREIGN KEY (`recruiter_id`) REFERENCES `recruiter` (`recruiter_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `recruiter`
--
ALTER TABLE `recruiter`
  ADD CONSTRAINT `recruiter_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `views`
--
ALTER TABLE `views`
  ADD CONSTRAINT `views_ibfk_1` FOREIGN KEY (`graduate_id`) REFERENCES `graduate` (`graduate_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `views_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
