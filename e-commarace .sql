-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 10:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commarace`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(120) NOT NULL,
  `pass` varchar(130) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Mobile'),
(2, 'Laptops'),
(3, 'Tv'),
(4, 'Shirts'),
(5, 'watches'),
(6, 'Printers');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `price` double NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `pic` varchar(250) NOT NULL,
  `review` int(11) NOT NULL,
  `rate` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `price`, `name`, `description`, `pic`, `review`, `rate`) VALUES
(1, 1, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n\n', 'img/4.jpg', 16, 2),
(2, 1, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n\n', 'img/5.jpg', 2, 3),
(3, 1, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\n\n', 'img/6.jpg', 3, 2),
(4, 1, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/7.jpg', 0, 0),
(5, 1, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/8.jpg', 4, 5),
(6, 1, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/9.jpg', 9, 4),
(7, 3, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t1.jpg', 29, 5),
(8, 3, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t2.jpg', 28, 4),
(9, 3, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t3.jpg', 26, 3),
(10, 3, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t4.jpg', 24, 2),
(11, 3, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t5.jpg', 16, 1),
(12, 3, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/t6.jpg', 14, 3),
(13, 2, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l1.jpg', 11, 2),
(14, 2, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l2.jpg', 11, 4),
(15, 2, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l3.jpg', 12, 5),
(16, 2, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l4.jpg', 10, 5),
(17, 2, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l5.jpg', 19, 3),
(18, 2, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/l6.jpg', 17, 1),
(19, 4, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s1.jpg', 23, 0),
(20, 4, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s2.jpg', 16, 2),
(21, 4, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s3.jpg', 3, 2),
(22, 4, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s4.jpg', 12, 5),
(23, 4, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s5.jpg', 1, 3),
(24, 4, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/s6.jpg', 50, 4),
(25, 5, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w1.jpg', 2, 5),
(26, 5, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w2.jpg', 39, 3),
(27, 5, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w3.jpg', 23, 2),
(28, 5, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w4.jpg', 28, 1),
(29, 5, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w5.jpg', 12, 3),
(30, 5, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/w6.jpg', 20, 5),
(31, 6, 25.34, 'First Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p1.jpg', 34, 2),
(32, 6, 64.99, 'Second Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p2.jpg', 10, 4),
(33, 6, 74.99, 'Third Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p3.jpg', 34, 3),
(34, 6, 84.99, 'Fourth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p4.jpg', 42, 4),
(35, 6, 94.99, 'Fifth Product\r\n', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p5.jpg', 4, 0),
(36, 6, 94.99, 'Sixth Product', 'This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.\r\n\r\n', 'img/p6.jpg', 3, 2),
(37, 1, 22, 'ddr', 'www', 'img/5035985-beautiful-wallpaper-free-download.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `firstname` varchar(240) NOT NULL,
  `lastname` varchar(240) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `email` varchar(240) NOT NULL,
  `address` varchar(240) NOT NULL,
  `age` int(20) NOT NULL,
  `credcard` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `firstname`, `lastname`, `password`, `email`, `address`, `age`, `credcard`) VALUES
(1, 'fady', 'khayrat', 'FFgg1234', 'fadykhayrat@gmail.com', '23kilo', 23, '23444'),
(2, 'fady1', 'khayrat2', 'FFgg12343', 'fadykhayrat@yahoo.com', '23kilo', 23, '23444'),
(3, 's', 's', 'q', 'w', 'q', 1, '2'),
(4, 'fa', 'g', 'ff', 'f', 'ff', 2, '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

CREATE TABLE `user_product` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quentity` int(11) NOT NULL,
  `pric` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product`
--

INSERT INTO `user_product` (`id`, `user_id`, `product_id`, `quentity`, `pric`, `status`) VALUES
(1, 3, 1, 1, 25, 1),
(2, 3, 2, 1, 65, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`pass`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_product`
--
ALTER TABLE `user_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_product`
--
ALTER TABLE `user_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
