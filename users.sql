-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 31, 2019 at 10:17 PM
-- Server version: 5.6.44-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketmany`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `db` date NOT NULL,
  `gender` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `orders` varchar(255) NOT NULL,
  `confirm` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `sent` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `password`, `db`, `gender`, `phone`, `orders`, `confirm`, `place`, `sent`) VALUES
('achyuth venkata', 'dvachyuthroyal@gmail.com', '12345678', '2019-03-26', 'male', '', '20*potato 60=1200', 'confirmed', 'katpadi', 'Product Delivered Successfully'),
('achyuth', 'achyuth@gmail.com', 'dravidsachin', '2019-03-15', 'male', '', '12*potato 60=720', 'nothing', 'gandhi nagar', '--'),
('gnanesh', 'gnanesh@gmail.com', 'dravidsachin', '2019-03-08', 'male', '', '10*Tomatoes 40=400', 'nothing', 'katpadi', '--'),
('gnanesh g', 'gnaneshnaidu97@gmail.com', '12345678', '2019-03-15', 'male', '', 'nothing', 'nothing', '--', '--'),
('hemanth', 'hemanth@gmail.com', '12345678', '1999-03-06', 'male', '', '20*potato 60=1200', 'confirmed', 'katpadi', 'Product Delivered Successfully'),
('ramesh', 'ramesh@gmail.com', 'dravidsachin', '2019-03-22', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('raj kumar', 'raj@gmail.com', 'dravidsachin', '2019-03-14', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('vinay kumar', 'vinay@gmail.com', 'dravidsachin', '2019-03-01', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('vinod kumar', 'vinod@gmail.com', 'dravidsachin', '1999-02-02', 'male', '9790444036', '40*carrot 50=2000', 'confirmed', 'konavattam', 'Product Delivered Successfully'),
('karthik', 'karthik@gmail.com', 'dravidsachin', '2019-03-15', 'male', '9790444036', '1*potato 60=60', 'confirmed', 'katpadi', 'Product Delivered Successfully'),
('ghfghf', 'achyuth111111@gmail.com', 'dravidsachin', '2019-03-08', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('jaqdcjhcd', 'svjhv@gmail.com', '12345678', '2019-03-05', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('qsgjhgff', 'htfhfhtf@gmail.com', '12345678', '0223-02-03', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('drake_ryan42@ifastnet1.com', 'drake_ryan42@ifastnet1.com', 'IGIpOjal5YOL0hL', '2001-01-01', 'female', '76501508751', 'nothing', 'nothing', '--', '--'),
('khwsdefef', 'kdhv@gmail.com', 'dravidsachin', '2019-03-06', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('kumaran', 'kumarar@gmail.com', '12345678', '2019-03-07', 'male', '9790444036', 'nothing', 'nothing', '--', '--'),
('chdinesh', 'chdinesh78@gmail.com', '123456789@', '2019-03-28', 'male', '7989758409', 'nothing', 'nothing', '--', '--'),
('Pratap Ravikiran', 'pratap.ravikiran2016@vitstudent.ac.in', 'Ravikiran@123', '1998-08-29', 'male', '8500141316', '20*carrot 50=1000', 'confirmed', 'gandhi nagar', 'Product Delivered Successfully'),
('Llllll', 'sweety@gmail.com', 'llllllll', '2000-03-28', 'female', '768000987', 'nothing', 'nothing', '--', '--'),
('Aswath M', 'aswath.grand@gmail.com', 'aswath98', '1998-09-11', 'male', '9003952001', 'nothing', 'nothing', '--', '--'),
('Aswath', 'aswath.m2016@vitstudent.ac.in', 'aswath98', '1998-09-11', 'male', '9003952001', '1*Tomatoes 40=40', 'nothing', 'katpadi', '--'),
('Abinaya', 'abi.84048@gmail.com', 'abcd*1234', '1999-07-09', 'female', '9999999999', '5*Tomatoes 40=200', 'nothing', 'katpadi', '--'),
('Hari Priya A L', 'haripriyaloganathan26@gmail.com', 'Hari*1792', '1999-02-26', 'female', '9003919366', '2*potato 60=120', 'nothing', 'gandhi nagar', '--'),
('surekha', 'surekhasrc@gmail.com', '12345678', '1994-06-06', 'female', '9894125139', '2*carrot 50=100', 'confirmed', 'gandhi nagar', 'Product Delivered Successfully');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
