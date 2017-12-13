-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 05:16 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `insurence`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_user`
--

CREATE TABLE `application_user` (
  `user_id` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `user_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `owner_details_id` int(11) NOT NULL,
  `policy_number` varchar(256) NOT NULL,
  `name` varchar(256) NOT NULL,
  `country` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `contact_number` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `promotions`
--

CREATE TABLE `promotions` (
  `promotions_id` int(11) NOT NULL,
  `promotion_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `promotions`
--

INSERT INTO `promotions` (`promotions_id`, `promotion_name`) VALUES
(1, 'RAC'),
(2, 'RAS');

-- --------------------------------------------------------

--
-- Table structure for table `tax`
--

CREATE TABLE `tax` (
  `tax_id` int(11) NOT NULL,
  `tax_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tax`
--

INSERT INTO `tax` (`tax_id`, `tax_name`) VALUES
(1, 'Percentage '),
(2, 'Fixed');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_brand`
--

CREATE TABLE `vehicle_brand` (
  `vehicle_brand_id` int(11) NOT NULL,
  `vehicle_make_name` varchar(256) NOT NULL,
  `vehicle_brand_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_brand`
--

INSERT INTO `vehicle_brand` (`vehicle_brand_id`, `vehicle_make_name`, `vehicle_brand_name`) VALUES
(1, 'Japanese car', 'Honda');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_color`
--

CREATE TABLE `vehicle_color` (
  `vehicle_color_id` int(11) NOT NULL,
  `vehicle_color_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_color`
--

INSERT INTO `vehicle_color` (`vehicle_color_id`, `vehicle_color_name`) VALUES
(1, 'Black'),
(2, 'Red'),
(3, 'Green');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_details`
--

CREATE TABLE `vehicle_details` (
  `vehicle_details` int(11) NOT NULL,
  `make` varchar(256) NOT NULL,
  `model` varchar(256) NOT NULL,
  `color` varchar(256) NOT NULL,
  `chasis_no` varchar(256) NOT NULL,
  `engin_cc` varchar(256) NOT NULL,
  `vehicle_reg_no` varchar(256) NOT NULL,
  `odometer_reading` varchar(256) NOT NULL,
  `purchase_date` varchar(256) NOT NULL,
  `reg_date` varchar(256) NOT NULL,
  `date_expiry` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_make`
--

CREATE TABLE `vehicle_make` (
  `vehicle_make_id` int(11) NOT NULL,
  `vehicle_make_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_make`
--

INSERT INTO `vehicle_make` (`vehicle_make_id`, `vehicle_make_name`) VALUES
(1, 'Japanese car'),
(2, 'European cars'),
(3, 'American cars ');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_model`
--

CREATE TABLE `vehicle_model` (
  `vehicle_model_id` int(11) NOT NULL,
  `vehicle_brand_name` varchar(256) NOT NULL,
  `vehicle_model_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_model`
--

INSERT INTO `vehicle_model` (`vehicle_model_id`, `vehicle_brand_name`, `vehicle_model_name`) VALUES
(1, 'Honda', 'Jazz');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_type`
--

CREATE TABLE `vehicle_type` (
  `vehicle_type_id` int(11) NOT NULL,
  `vehicle_type_name` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle_type`
--

INSERT INTO `vehicle_type` (`vehicle_type_id`, `vehicle_type_name`) VALUES
(1, 'Sedan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`owner_details_id`);

--
-- Indexes for table `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`promotions_id`);

--
-- Indexes for table `tax`
--
ALTER TABLE `tax`
  ADD PRIMARY KEY (`tax_id`);

--
-- Indexes for table `vehicle_brand`
--
ALTER TABLE `vehicle_brand`
  ADD PRIMARY KEY (`vehicle_brand_id`);

--
-- Indexes for table `vehicle_color`
--
ALTER TABLE `vehicle_color`
  ADD PRIMARY KEY (`vehicle_color_id`);

--
-- Indexes for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  ADD PRIMARY KEY (`vehicle_details`);

--
-- Indexes for table `vehicle_make`
--
ALTER TABLE `vehicle_make`
  ADD PRIMARY KEY (`vehicle_make_id`);

--
-- Indexes for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  ADD PRIMARY KEY (`vehicle_model_id`);

--
-- Indexes for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  ADD PRIMARY KEY (`vehicle_type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `owner_details`
--
ALTER TABLE `owner_details`
  MODIFY `owner_details_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `promotions`
--
ALTER TABLE `promotions`
  MODIFY `promotions_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tax`
--
ALTER TABLE `tax`
  MODIFY `tax_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `vehicle_brand`
--
ALTER TABLE `vehicle_brand`
  MODIFY `vehicle_brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_color`
--
ALTER TABLE `vehicle_color`
  MODIFY `vehicle_color_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_details`
--
ALTER TABLE `vehicle_details`
  MODIFY `vehicle_details` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `vehicle_make`
--
ALTER TABLE `vehicle_make`
  MODIFY `vehicle_make_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `vehicle_model`
--
ALTER TABLE `vehicle_model`
  MODIFY `vehicle_model_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle_type`
--
ALTER TABLE `vehicle_type`
  MODIFY `vehicle_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
