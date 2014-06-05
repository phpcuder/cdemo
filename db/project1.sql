-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2014 at 04:17 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `business_types`
--

CREATE TABLE IF NOT EXISTS `business_types` (
  `business_type_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  PRIMARY KEY (`business_type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `business_types`
--

INSERT INTO `business_types` (`business_type_id`, `name`) VALUES
(1, 'Business type A'),
(2, 'Business type B'),
(3, 'Business type C'),
(4, 'Business type D'),
(5, 'Business type E');

-- --------------------------------------------------------

--
-- Table structure for table `business_type_images`
--

CREATE TABLE IF NOT EXISTS `business_type_images` (
  `btype_image_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_type_id` int(10) unsigned NOT NULL,
  `src` varchar(255) NOT NULL,
  PRIMARY KEY (`btype_image_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `business_type_images`
--

INSERT INTO `business_type_images` (`btype_image_id`, `business_type_id`, `src`) VALUES
(8, 1, 'upload/businessTypes/1/\\hydrangeas.jpg'),
(9, 1, 'upload/businessTypes/1/\\koala.jpg'),
(10, 1, 'upload/businessTypes/1/\\penguins.jpg'),
(11, 2, 'upload/businessTypes/2/\\chrysanthemum.jpg'),
(12, 2, 'upload/businessTypes/2/\\desert.jpg'),
(13, 2, 'upload/businessTypes/2/\\jellyfish.jpg'),
(14, 3, 'upload/businessTypes/3/\\hydrangeas.jpg'),
(15, 3, 'upload/businessTypes/3/\\lighthouse.jpg'),
(16, 3, 'upload/businessTypes/3/\\tulips.jpg'),
(17, 4, 'upload/businessTypes/4/\\chrysanthemum.jpg'),
(18, 4, 'upload/businessTypes/4/\\jellyfish.jpg'),
(19, 4, 'upload/businessTypes/4/\\penguins.jpg'),
(20, 5, 'upload/businessTypes/5/\\hydrangeas.jpg'),
(21, 5, 'upload/businessTypes/5/\\koala.jpg'),
(22, 5, 'upload/businessTypes/5/\\tulips.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `business_name` varchar(200) NOT NULL,
  `business_type_id` int(11) NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `website` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `sale_agent` varchar(250) NOT NULL,
  `headlines` varchar(250) NOT NULL,
  `coupon_deal` varchar(250) NOT NULL,
  `disclaimers` varchar(250) NOT NULL,
  `addition_info_1` varchar(250) NOT NULL,
  `addition_info_2` varchar(250) NOT NULL,
  `signup_date` int(10) NOT NULL,
  `uploaded_logo` varchar(255) NOT NULL,
  `uploaded_images` text NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `business_name`, `business_type_id`, `contact_person`, `address`, `email`, `website`, `phone`, `mobile`, `sale_agent`, `headlines`, `coupon_deal`, `disclaimers`, `addition_info_1`, `addition_info_2`, `signup_date`, `uploaded_logo`, `uploaded_images`) VALUES
(1, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872318, 'upload/customers/1/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/1/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/1/images/\\dsc0060.jpg";}'),
(2, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872339, 'upload/customers/2/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/2/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/2/images/\\dsc0060.jpg";}'),
(3, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872413, 'upload/customers/3/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/3/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/3/images/\\dsc0060.jpg";}'),
(4, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872474, 'upload/customers/4/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/4/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/4/images/\\dsc0060.jpg";}'),
(5, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872521, 'upload/customers/5/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/5/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/5/images/\\dsc0060.jpg";}'),
(6, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872639, 'upload/customers/6/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/6/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/6/images/\\dsc0060.jpg";}'),
(7, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872656, 'upload/customers/7/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/7/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/7/images/\\dsc0060.jpg";}'),
(8, 'asdf', 3, 'asdf', 'asdfas', 'fasfd', 'asdf', '343', '32423', 'afsasf', 'asdf', 'sf', 'afa', 'adf', 'df', 1401872701, 'upload/customers/8/logo/\\dsc0034.jpg', 'a:2:{i:0;s:43:"upload/customers/8/images/\\dsc0024-copy.jpg";i:1;s:38:"upload/customers/8/images/\\dsc0060.jpg";}'),
(9, 'asdf', 2, 'asdf', 'asdf', 'sadf', 'saf', '34', '324', 'asdf', 'asdf', 'asd', 'fasdf', 'asdf', 'asfd', 1401872847, 'upload/customers/9/logo/\\dsc0034.jpg', 'a:4:{i:0;s:38:"upload/customers/9/images/\\dsc0060.jpg";i:1;s:38:"upload/customers/9/images/\\img0570.jpg";i:2;s:38:"upload/customers/9/images/\\img0677.jpg";i:3;s:38:"upload/customers/9/images/\\img0895.jpg";}');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customer_id` int(10) unsigned NOT NULL,
  `contact_person` varchar(250) NOT NULL,
  `size` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `qty` int(11) NOT NULL DEFAULT '0',
  `total` float NOT NULL DEFAULT '0',
  `zipcode` varchar(255) NOT NULL,
  `season` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `order_date` int(10) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `customer_id`, `contact_person`, `size`, `qty`, `total`, `zipcode`, `season`, `status`, `order_date`) VALUES
(1, 7, 'asdf', 1, 25, 7375, '90211 90213 90215 ', 'spring summer fall', 0, 1401872656),
(2, 8, 'asdf', 1, 28, 8260, '90211 90213 90215 ', 'spring summer fall', 0, 1401872701),
(3, 9, 'asdf', 1, 7, 2065, '90213 90214 ', 'spring', 0, 1401872848);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
