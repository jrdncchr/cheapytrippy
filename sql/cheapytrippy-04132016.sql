-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 13, 2016 at 07:33 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jrdncchr_cheapytrippy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `access_id` int(2) NOT NULL DEFAULT '0',
  `last_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `contact`, `active`, `access_id`, `last_modified`, `date_created`) VALUES
(1, 'Jordan Cachero', 'admin@cheapytrippy.com', 'VFeyzvzrS.pMI', '', 1, 0, '2016-04-05 09:14:48', '2016-04-05 09:14:48');

-- --------------------------------------------------------

--
-- Table structure for table `lookup`
--

CREATE TABLE `lookup` (
  `lookup_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lookup`
--

INSERT INTO `lookup` (`lookup_id`, `category`, `value`, `date_created`) VALUES
(1, 'TYPE_OF_OFFER', 'Rental', '2016-04-10 13:41:44'),
(2, 'TYPE_OF_OFFER', 'Ticket', '2016-04-10 13:41:44'),
(3, 'TYPE_OF_OFFER', 'Activity', '2016-04-10 13:43:54'),
(4, 'TYPE_OF_OFFER', 'Day Tour', '2016-04-10 13:43:54'),
(5, 'TYPE_OF_OFFER', 'Package', '2016-04-10 13:44:11'),
(6, 'TYPE_OF_OFFER', 'Special', '2016-04-10 13:44:11'),
(7, 'TYPE_OF_OFFER', 'Group Tour', '2016-04-10 13:44:32'),
(8, 'TYPE_OF_OFFER', 'Educational Trips', '2016-04-10 13:44:32'),
(9, 'PRICE_BASIS', 'Per Person', '2016-04-10 13:46:56'),
(10, 'PRICE_BASIS', 'Per Group', '2016-04-10 13:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `type_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `snippet` text NOT NULL,
  `description` text NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `traveller_tip` varchar(1000) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `business_hours_from` varchar(10) NOT NULL,
  `business_hours_to` varchar(10) NOT NULL,
  `street` varchar(200) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Draft',
  `last_modified_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_modified_by` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `title`, `type_id`, `category_id`, `snippet`, `description`, `supplier_id`, `traveller_tip`, `duration`, `business_hours_from`, `business_hours_to`, `street`, `state`, `city`, `country`, `status`, `last_modified_date`, `last_modified_by`, `date_created`) VALUES
(4, 'test1', 1, 1, 's', 'd', 1, 't', '266460', '12:00 AM', '1:00 AM', 's', 's', 'c', 'c', 'Draft', '2016-04-10 23:44:11', 0, '2016-04-10 14:37:52'),
(5, 'test2', 2, 2, 'sd', 'd', 1, 't', '267300', '12:00 AM', '1:00 AM', 'ss', 'ss', 'c', 'c', 'Draft', '2016-04-10 23:40:33', 0, '2016-04-10 14:41:13'),
(6, 'test3', 2, 2, 'sd', 'd', 1, 't', '266460', '12:00 AM', '1:00 AM', 's', 's', 'c', 'c', 'Draft', '2016-04-10 23:38:09', 0, '2016-04-10 14:43:32'),
(7, 'test4', 2, 2, 'sd', 'd', 1, 't', '266460', '12:00 AM', '1:00 AM', 's', 's', 'c', 'c', 'Draft', '2016-04-10 23:38:51', 0, '2016-04-10 15:38:15'),
(8, 'test5', 2, 2, 'sd', 'd', 1, 't', '266460', '12:00 AM', '1:00 AM', 's', 's', 'c', 'c', 'Draft', '2016-04-10 23:39:21', 0, '2016-04-10 15:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `category_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`category_id`, `parent_id`, `category`, `date_created`) VALUES
(1, 0, 'Adventure', '2016-04-10 13:59:15'),
(2, 0, 'Food Trip', '2016-04-10 13:59:15'),
(3, 0, 'Family and Friends Trip', '2016-04-10 13:59:36'),
(4, 0, 'Transport', '2016-04-10 13:59:36'),
(5, 0, 'Culture Wanderer', '2016-04-10 13:59:51'),
(6, 0, 'Nature', '2016-04-10 13:59:51'),
(7, 0, 'Wellness', '2016-04-10 14:00:01'),
(8, 0, 'Events', '2016-04-10 14:00:01'),
(9, 0, 'Accomodation', '2016-04-10 14:00:22');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates`
--

CREATE TABLE `product_rates` (
  `rate_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price_basis` int(11) NOT NULL,
  `commission` double NOT NULL,
  `nop_min` int(11) NOT NULL,
  `nop_max` int(11) NOT NULL,
  `availability_from` date NOT NULL,
  `availability_to` date NOT NULL,
  `have_bod` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rates`
--

INSERT INTO `product_rates` (`rate_id`, `product_id`, `price_basis`, `commission`, `nop_min`, `nop_max`, `availability_from`, `availability_to`, `have_bod`, `date_created`) VALUES
(1, 1, 5, 5, 1, 3, '2016-04-06', '2016-04-22', 1, '2016-04-10 03:31:10'),
(3, 3, 32, 10, 1, 3, '2016-04-10', '2016-04-12', 1, '2016-04-10 11:25:58'),
(4, 4, 10, 12, 0, 0, '2016-04-07', '2016-04-16', 0, '2016-04-10 14:37:52'),
(5, 5, 9, 10, 0, 0, '2016-04-15', '2016-04-16', 0, '2016-04-10 14:41:13'),
(6, 6, 9, 0, 0, 0, '2016-04-15', '2016-04-16', 0, '2016-04-10 14:43:32'),
(7, 7, 9, 20, 0, 0, '2016-04-15', '2016-04-16', 0, '2016-04-10 15:38:15'),
(8, 8, 9, 30, 0, 0, '2016-04-15', '2016-04-16', 0, '2016-04-10 15:39:01');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates_bo_dates`
--

CREATE TABLE `product_rates_bo_dates` (
  `id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `bo_from` date NOT NULL,
  `bo_to` date NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rates_bo_dates`
--

INSERT INTO `product_rates_bo_dates` (`id`, `rate_id`, `bo_from`, `bo_to`, `date_created`) VALUES
(1, 1, '2016-04-01', '2016-04-02', '2016-04-10 03:31:40'),
(2, 1, '2016-04-06', '2016-04-08', '2016-04-10 03:31:40'),
(5, 3, '2016-04-13', '2016-04-15', '2016-04-10 11:25:58'),
(6, 3, '2016-04-16', '2016-04-18', '2016-04-10 11:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates_bo_days`
--

CREATE TABLE `product_rates_bo_days` (
  `id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `day` varchar(15) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rates_bo_days`
--

INSERT INTO `product_rates_bo_days` (`id`, `rate_id`, `day`, `date_created`) VALUES
(1, 1, 'Mon', '2016-04-10 03:32:13'),
(2, 1, 'Sun', '2016-04-10 03:32:13'),
(3, 3, 'Mon', '2016-04-10 11:25:58'),
(4, 3, 'Wed', '2016-04-10 11:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates_nop_pricing`
--

CREATE TABLE `product_rates_nop_pricing` (
  `id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `supplier_rate` double NOT NULL,
  `published_rate` double NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rates_nop_pricing`
--

INSERT INTO `product_rates_nop_pricing` (`id`, `rate_id`, `number`, `supplier_rate`, `published_rate`, `date_created`) VALUES
(1, 1, 1, 10, 12, '2016-04-10 03:33:08'),
(2, 1, 2, 23, 25, '2016-04-10 03:33:08'),
(3, 3, 1, 5, 7, '2016-04-10 11:25:58'),
(4, 3, 2, 6, 7, '2016-04-10 11:25:58'),
(5, 3, 3, 7, 9, '2016-04-10 11:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `product_rates_sp_pricing`
--

CREATE TABLE `product_rates_sp_pricing` (
  `id` int(11) NOT NULL,
  `rate_id` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `supplier_rate` double NOT NULL,
  `published_rate` double NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_rates_sp_pricing`
--

INSERT INTO `product_rates_sp_pricing` (`id`, `rate_id`, `number`, `supplier_rate`, `published_rate`, `date_created`) VALUES
(1, 1, 1, 10, 11, '2016-04-10 03:33:35'),
(2, 1, 2, 12, 13, '2016-04-10 03:33:35'),
(3, 3, 1, 5, 6, '2016-04-10 11:25:58'),
(4, 3, 2, 7, 8, '2016-04-10 11:25:58'),
(5, 3, 3, 8, 9, '2016-04-10 11:25:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lookup`
--
ALTER TABLE `lookup`
  ADD PRIMARY KEY (`lookup_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product_rates`
--
ALTER TABLE `product_rates`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `product_rates_bo_dates`
--
ALTER TABLE `product_rates_bo_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rates_bo_days`
--
ALTER TABLE `product_rates_bo_days`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rates_nop_pricing`
--
ALTER TABLE `product_rates_nop_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_rates_sp_pricing`
--
ALTER TABLE `product_rates_sp_pricing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lookup`
--
ALTER TABLE `lookup`
  MODIFY `lookup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `product_rates`
--
ALTER TABLE `product_rates`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `product_rates_bo_dates`
--
ALTER TABLE `product_rates_bo_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product_rates_bo_days`
--
ALTER TABLE `product_rates_bo_days`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product_rates_nop_pricing`
--
ALTER TABLE `product_rates_nop_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product_rates_sp_pricing`
--
ALTER TABLE `product_rates_sp_pricing`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
