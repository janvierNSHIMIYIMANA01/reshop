-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 11:50 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_customer`
--

CREATE TABLE `add_customer` (
  `id` int(11) NOT NULL,
  `F_Name` varchar(100) NOT NULL,
  `L_Name` varchar(100) NOT NULL,
  `P_Number` text NOT NULL,
  `E_mail` varchar(100) NOT NULL,
  `Address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_customer`
--

INSERT INTO `add_customer` (`id`, `F_Name`, `L_Name`, `P_Number`, `E_mail`, `Address`) VALUES
(1, 'janvier', 'cruise', '734592347256', 'cruise@gmail.com', 'nyamirambo'),
(2, 'janvier', 'cruise', '4684856468', 'cruise@gmail.com', 'nyamirambo'),
(3, 'sibo', 'adbul', '782319', 'sibo@gmail.com', 'nyamagabe'),
(4, 'gilbert', 'NTWALI', '0789754332', 'ntwali@Gmail.com', 'nyabiteke'),
(5, 'debrah', 'cruise', '089765673784628', 'debrah@gmail.com', 'nyamirambo'),
(6, 'sibo', 'abdul', '345678567', 'sibo@gmail.com', 'nyamabuye'),
(7, 'kavuyo', 'kevin', '453678249', 'kavk@gmail.com', 'nyamasheke');

-- --------------------------------------------------------

--
-- Table structure for table `add_product`
--

CREATE TABLE `add_product` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `P_Name` varchar(100) NOT NULL,
  `P_Number` text NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` text NOT NULL,
  `Payment` varchar(20) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_product`
--

INSERT INTO `add_product` (`id`, `date`, `P_Name`, `P_Number`, `price`, `quantity`, `Payment`, `photo`) VALUES
(1, '2023-12-11 09:56:28', 'pen', '100', 100, '100', 'due', ''),
(5, '2023-12-25 10:10:26', 'ibishyimbo', '234576556', 1000, '100000', 'due', ''),
(6, '2023-12-25 10:11:48', 'hp i9', '345678', 2000000, '20', 'due', ''),
(10, '2024-01-03 10:05:02', 'watches', '23', 20000, '12', 'NO', ''),
(11, '2024-01-04 07:25:40', 'infinix ht30', '1234', 80000, '30', 'due', ''),
(12, '2024-01-10 06:27:25', 'shoes', '12345', 2, '100', 'due', 'Screenshot 2023-11-07 114923.png'),
(13, '2024-01-12 07:54:12', 'cassava', '299', 1000, '20000', 'due', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `photo`, `name`, `email`, `password`, `date`) VALUES
(1, 'Pictureskik22.jpg', 'janvier cruise', 'cruise@gmail.com', '0000', '2024-01-04 13:36:47'),
(2, 'PicturesWhatsApp Image 2023-09-16 at 13.24.08.jpg', 'derry', 'derry@gmail.com', '1111', '2024-01-04 14:58:57'),
(3, 'PicturesWhatsApp Image 2023-09-16 at 13.25.35.jpg', 'sisca', 'sisca@gmail.com', '1212', '2024-01-04 15:01:52'),
(4, 'jnvr2.jpg', 'Janvier', 'admin@gmail.com', 'admin', '2024-01-11 09:52:59'),
(5, 'jnvr2.jpg', 'Janvier', 'admin@gmail.com', 'admin', '2024-01-11 09:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `cartid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `name`, `date`) VALUES
(1, 'Home', '2024-01-02 22:00:00'),
(2, 'Fashion & Beauty', '2024-01-05 19:22:49'),
(3, 'Kids & Women Clothes', '2024-01-05 19:22:49'),
(4, ' Men & Women Clothes', '2024-01-05 19:22:49'),
(5, 'Electronics & Accessories', '2024-01-05 19:22:49'),
(6, 'Made In Rwanda Fashion Clothes', '2024-01-05 19:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `username`, `email`, `phone`, `password`, `photo`, `date`) VALUES
(1, 'janvier cruise', 'cruise@gmail.com', '7862383746', '$2y$10$iilglLy1YJK67JnHvaa1He7JZAv36ZxsoaNzgCqoI82sr5P./ORbO', '', '2024-01-12 09:29:58'),
(2, 'derry', 'derry@gmail.com', '78346529847', 'janvier2020', '', '2024-01-01 22:14:13'),
(3, 'kevin', 'kevin@gmail.com', '783462894', '1111', '', '2024-01-01 22:14:13'),
(4, 'ivan', 'ivan@gmial.com', '873478983', '2222', '', '2024-01-01 22:14:13'),
(6, 'nelson', 'nelson@gmail.com', '12345678', '12345', '', '2024-01-12 10:30:12'),
(13, 'janvier', 'janvier01@gmail.com', '0784573357', 'janvier2020', '', '2024-01-07 11:48:51'),
(14, 'admin', 'admin@gmail.com', '983450283', 'admin', '', '2024-01-10 19:52:41'),
(15, 'vandrossi', 'vandrossi@gmail.com', '0784573543', 'vandrossi', '', '2024-01-11 06:47:49'),
(16, 'chloe', 'happy@gmail.com', '89232782', '1212', 'Picturescruise.jpg', '2024-01-11 07:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `mid` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`mid`, `username`, `email`, `message`, `date`) VALUES
(1, '', 'cruise@gmail.com', 'hello, i like your web...', '2024-01-04 11:38:28'),
(3, '', 'derry@gmail.com', 'waguan, i would to ask how can i call u???', '2024-01-04 11:40:10'),
(4, '', 'nelson@gmail.com', 'tspp dude...', '2024-01-04 12:27:36'),
(5, '', 'cruise@gmail.com', 'hello\r\nwai not reply??', '2024-01-04 12:36:57'),
(6, '', 'derry@gmail.com', 'wamuswera weee naguha nyoko nundira mafaraga yangeee', '2024-01-04 13:57:39'),
(7, '', 'gib@gmail.com', 'hello, am gbz i love ur website ', '2024-01-07 12:21:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_customer`
--
ALTER TABLE `add_customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_product`
--
ALTER TABLE `add_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartid`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`mid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_customer`
--
ALTER TABLE `add_customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `add_product`
--
ALTER TABLE `add_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
