-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 07, 2018 at 03:45 PM
-- Server version: 5.7.19
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
-- Database: `designmee`
--

-- --------------------------------------------------------

--
-- Table structure for table `abandoned_cart`
--

DROP TABLE IF EXISTS `abandoned_cart`;
CREATE TABLE IF NOT EXISTS `abandoned_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` varchar(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mob` varchar(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `odate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `abandoned_cart`
--

INSERT INTO `abandoned_cart` (`id`, `pid`, `name`, `mob`, `email`, `odate`) VALUES
(1, '318,226,1', 'amitanand', '8979997072', 'amitanand.kvj.2@gmail.com', '2018-01-08 03:49:37'),
(2, '226', 'amit anand', '8979997072', 'amitanand.kvj.2@gmail.com', '2018-01-08 04:22:38'),
(3, '318', 'amit anand', '8979997072', 'amitanand.kvj.2@gmail.com', '2018-01-10 02:47:28');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'amit', '202cb962ac59075b964b07152d234b70'),
(3, 'admin@123', '202cb962ac59075b964b07152d234b70'),
(4, 'admin@456', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `artist`
--

DROP TABLE IF EXISTS `artist`;
CREATE TABLE IF NOT EXISTS `artist` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `artist` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attribute`
--

DROP TABLE IF EXISTS `attribute`;
CREATE TABLE IF NOT EXISTS `attribute` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` text NOT NULL,
  `category` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `attributevalue`
--

DROP TABLE IF EXISTS `attributevalue`;
CREATE TABLE IF NOT EXISTS `attributevalue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `attribute` text NOT NULL,
  `category` text NOT NULL,
  `attributevalue` text NOT NULL,
  `cost` int(11) NOT NULL,
  `scost` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `sdescr` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `sdescr`, `descr`, `image`, `link`) VALUES
(15, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type a', 'What is Lorem Ipsum?\r\nLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n\r\nWhy do we use it?\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n\r\n\r\nWhere does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\r\n\r\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.\r\n\r\nWhere can I get some?\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', '1517600312product.jpg', 'WhatisLoremIpsum');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `uid` int(200) NOT NULL,
  `productid` int(200) NOT NULL,
  `category` varchar(100) NOT NULL,
  `attributevalue` text NOT NULL,
  `color` text NOT NULL,
  `item` int(11) NOT NULL DEFAULT '1',
  `hem` varchar(50) NOT NULL,
  `cuff` varchar(50) NOT NULL,
  `collar` varchar(50) NOT NULL,
  `sleeve` varchar(50) NOT NULL,
  `placket` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `uid`, `productid`, `category`, `attributevalue`, `color`, `item`, `hem`, `cuff`, `collar`, `sleeve`, `placket`) VALUES
(65, 1, 4, '', 'M', '', 150, 'Type 1', 'Single Round Cuff', 'Classic Collar', 'Full Sleeve', 'Conventional');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) NOT NULL,
  `descr` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=66 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `descr`) VALUES
(65, 'Women', ''),
(64, 'Men', '');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(42) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `data` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('uag9cuk404gmtibt9t5eihmsbc2d85ro', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373831363732363b4642524c485f73746174657c733a33323a223262616132343333666561336434386333386439656438643965613235376533223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d),
('mn87okvbfq8l4abffitr2ahkr73hu9v0', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830373331373b4642524c485f73746174657c733a33323a226432346133326362653061316539353266623461363731363635626264333839223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d),
('9649e06b78frkckus58v7g4qhoekds3u', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830363937353b4642524c485f73746174657c733a33323a223866306337386634373138356436363931373738343962343039376664633836223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d),
('020dn3lnglcecnkt72rh8cnv19vbbfpl', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830363536383b4642524c485f73746174657c733a33323a223564613433356239393633656361616563303430323461396239646538666434223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d),
('pfrj873dd0nk7n1p3bjjpahhtpmuuv5u', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830363230373b4642524c485f73746174657c733a33323a223234613638643866313965663632376562313338636464653333376530303937223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d),
('kbg8h96a935ooj90alp176qevbjg1mq1', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830353130343b4642524c485f73746174657c733a33323a223732323333373465343536656162326263643963643730363434373766366362223b6c6f67696e7c623a313b666e616d657c733a343a22416d6974223b6c6e616d657c733a353a22416e616e64223b7569647c733a313a2231223b656d61696c7c733a32353a22616d6974616e616e642e6b766a2e3240676d61696c2e636f6d223b636f6e746163747c733a393a22383739393937303732223b),
('fll287n8vn72iklha1cjd3i0hh9lq2n9', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830353431333b4642524c485f73746174657c733a33323a223365333661323234383234633961333838333935643066313830626338616363223b6c6f67696e7c623a313b666e616d657c733a343a22416d6974223b6c6e616d657c733a353a22416e616e64223b7569647c733a313a2231223b656d61696c7c733a32353a22616d6974616e616e642e6b766a2e3240676d61696c2e636f6d223b636f6e746163747c733a393a22383739393937303732223b),
('ddl2o8q1rip4ko6fcmjp8a5pt544v63e', '::1', '0000-00-00 00:00:00', 0x5f5f63695f6c6173745f726567656e65726174657c693a313531373830353833373b4642524c485f73746174657c733a33323a226434623166666162343333343561333464656265363366623337616362323736223b636172745f636f6e74656e74737c613a333a7b733a31303a22636172745f746f74616c223b643a33392e3935303030303030303030303030333b733a31313a22746f74616c5f6974656d73223b643a313b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b613a31323a7b733a323a226964223b733a313a2234223b733a333a22717479223b643a313b733a353a227072696365223b643a33392e3935303030303030303030303030333b733a343a226e616d65223b733a373a22542d5368697274223b733a31343a2261747472696275746576616c7565223b733a313a224d223b733a333a2268656d223b733a363a22547970652031223b733a343a2263756666223b733a31373a2253696e676c6520526f756e642043756666223b733a363a22636f6c6c6172223b733a31343a22436c617373696320436f6c6c6172223b733a363a22736c65657665223b733a31313a2246756c6c20536c65657665223b733a373a22706c61636b6574223b733a31323a22436f6e76656e74696f6e616c223b733a353a22726f776964223b733a33323a223463613630383636383237316564336434366132313730333530323932383532223b733a383a22737562746f74616c223b643a33392e3935303030303030303030303030333b7d7d);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `msg` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
CREATE TABLE IF NOT EXISTS `delivery` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `mail` varchar(250) NOT NULL,
  `country` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `addr` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `delivery`
--

INSERT INTO `delivery` (`id`, `uid`, `fname`, `lname`, `mob`, `mail`, `country`, `town`, `state`, `pin`, `addr`) VALUES
(3, 1, 'amit', 'anand', '8979997072', 'amitanand.kvj.2@gmail.com', 'India', 'roorkee', 'Uttarakhand', '247667', 'iit roorkee'),
(4, 1, 'amit', 'anand', '8979997072', 'amitanand.kvj.2@gmail.com', 'India', 'roorkee', 'Uttarakhand', '247667', 'iit roorkee');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

DROP TABLE IF EXISTS `designer`;
CREATE TABLE IF NOT EXISTS `designer` (
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `orderinfo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE IF NOT EXISTS `image` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `productid` int(10) NOT NULL,
  `img` varchar(200) NOT NULL,
  `posted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `productid`, `img`, `posted`) VALUES
(1, 0, 'category.jpg', '2017-12-01 08:08:56'),
(2, 0, '', '2017-12-03 08:46:35'),
(3, 0, '1513526984product.jpg', '2017-12-17 16:09:44'),
(4, 0, '1513529025product.jpg', '2017-12-17 16:43:45'),
(5, 0, '1513529706product.jpg', '2017-12-17 16:55:06'),
(6, 0, '1513529795product.jpg', '2017-12-17 16:56:35'),
(7, 0, '1513530116product.jpg', '2017-12-17 17:01:56'),
(8, 0, '1513530184product.jpg', '2017-12-17 17:03:04'),
(9, 0, '1513530293product.jpg', '2017-12-17 17:04:53'),
(10, 0, '1513530381product.jpg', '2017-12-17 17:06:22'),
(11, 0, '1513530459product.jpg', '2017-12-17 17:07:39'),
(12, 0, '1513530566product.jpg', '2017-12-17 17:09:26'),
(13, 0, '1513530661product.jpg', '2017-12-17 17:11:01'),
(14, 0, '1513530725product.jpg', '2017-12-17 17:12:05'),
(15, 0, '1513530803product.jpg', '2017-12-17 17:13:23'),
(16, 0, '1513530871product.jpg', '2017-12-17 17:14:31'),
(17, 0, '1513530940product.jpg', '2017-12-17 17:15:40'),
(18, 0, '1513531017product.jpg', '2017-12-17 17:16:57'),
(19, 0, '1513531106product.jpg', '2017-12-17 17:18:26'),
(20, 0, '1513531220product.jpg', '2017-12-17 17:20:20'),
(21, 0, '1513531355product.jpg', '2017-12-17 17:22:35'),
(22, 0, '1513531465product.jpg', '2017-12-17 17:24:25'),
(23, 0, '1513531522product.jpg', '2017-12-17 17:25:22'),
(24, 0, '1513532823product.jpg', '2017-12-17 17:47:03'),
(25, 0, '1513532878product.jpg', '2017-12-17 17:47:58'),
(26, 0, '1513532924product.jpg', '2017-12-17 17:48:45'),
(27, 0, '1513532990product.jpg', '2017-12-17 17:49:50'),
(28, 0, '1513533077product.jpg', '2017-12-17 17:51:18'),
(29, 0, '1513533168product.jpg', '2017-12-17 17:52:48'),
(30, 0, '1513533427product.jpg', '2017-12-17 17:57:07'),
(31, 0, '1513533481product.jpg', '2017-12-17 17:58:02'),
(32, 0, '1513533584product.jpg', '2017-12-17 17:59:44'),
(33, 0, '1513533659product.jpg', '2017-12-17 18:00:59'),
(34, 0, '1513533721product.jpg', '2017-12-17 18:02:01'),
(35, 0, '1513533848product.jpg', '2017-12-17 18:04:08'),
(36, 0, '1513533939product.jpg', '2017-12-17 18:05:39'),
(37, 0, '1513534045product.jpg', '2017-12-17 18:07:25'),
(38, 0, '1513534074product.jpg', '2017-12-17 18:07:54'),
(39, 0, '1513534154product.jpg', '2017-12-17 18:09:14'),
(40, 0, '1513534286product.jpg', '2017-12-17 18:11:27'),
(41, 0, '1513534401product.jpg', '2017-12-17 18:13:21'),
(42, 0, '1513534610product.jpg', '2017-12-17 18:16:50'),
(43, 0, '1513534679product.jpg', '2017-12-17 18:17:59'),
(44, 0, '1513534800product.jpg', '2017-12-17 18:20:01'),
(45, 0, '1513534846product.jpg', '2017-12-17 18:20:46'),
(46, 0, '1513534933product.jpg', '2017-12-17 18:22:13'),
(47, 0, '1513535113product.jpg', '2017-12-17 18:25:13'),
(48, 0, '1513535248product.jpg', '2017-12-17 18:27:28'),
(49, 0, '1513618944product.jpg', '2017-12-18 17:42:24'),
(50, 0, '1513619316product.jpg', '2017-12-18 17:48:36'),
(51, 0, '1513619324product.jpg', '2017-12-18 17:48:44'),
(52, 0, '1513619516product.jpg', '2017-12-18 17:51:56'),
(53, 0, '1513619582product.jpg', '2017-12-18 17:53:02'),
(54, 0, '1513619648product.jpg', '2017-12-18 17:54:09'),
(55, 0, '1513619786product.jpg', '2017-12-18 17:56:26'),
(56, 0, '1513624378product.jpg', '2017-12-18 19:12:58'),
(57, 0, '1513624500product.jpg', '2017-12-18 19:15:00'),
(58, 0, '1513624563product.jpg', '2017-12-18 19:16:03'),
(59, 0, '1513624665product.jpg', '2017-12-18 19:17:45'),
(60, 0, '1513624837product.jpg', '2017-12-18 19:20:37'),
(61, 0, '1513624951product.jpg', '2017-12-18 19:22:31'),
(62, 0, '1513625011product.jpg', '2017-12-18 19:23:31'),
(64, 0, '1515178549product.jpg', '2018-01-05 18:55:49'),
(75, 5, '1517791371category.jpg', '2018-02-05 00:42:51'),
(71, 4, '1517791310category.jpg', '2018-02-05 00:41:50'),
(74, 3, '1517791357category.jpg', '2018-02-05 00:42:37'),
(73, 3, '1517791352category.jpg', '2018-02-05 00:42:32'),
(72, 4, '1517791316category.jpg', '2018-02-05 00:41:56'),
(76, 5, '1517791393category.jpg', '2018-02-05 00:43:13');

-- --------------------------------------------------------

--
-- Table structure for table `itemorder`
--

DROP TABLE IF EXISTS `itemorder`;
CREATE TABLE IF NOT EXISTS `itemorder` (
  `id` bigint(100) NOT NULL AUTO_INCREMENT,
  `orderid` bigint(100) NOT NULL,
  `uid` int(255) NOT NULL,
  `productid` int(255) NOT NULL,
  `item` int(10) NOT NULL,
  `category` varchar(100) NOT NULL,
  `attributevalue` text NOT NULL,
  `color` text NOT NULL,
  `status` text,
  `cost` int(20) NOT NULL,
  `dpo` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ddo` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `txnid` text NOT NULL,
  `status1` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `love`
--

DROP TABLE IF EXISTS `love`;
CREATE TABLE IF NOT EXISTS `love` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `uid` int(10) NOT NULL,
  `productid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `love`
--

INSERT INTO `love` (`id`, `uid`, `productid`) VALUES
(1, 2, 23),
(8, 1, 394),
(7, 1, 347),
(9, 1, 596),
(10, 1, 226);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
CREATE TABLE IF NOT EXISTS `message` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `email` varchar(80) NOT NULL,
  `mob` bigint(200) NOT NULL,
  `sub` text NOT NULL,
  `msg` text NOT NULL,
  `sent` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `mob`, `sub`, `msg`, `sent`) VALUES
(1, 'amy', 'admin1@gmail.com', 7956, '+9guj', 'iyk', '2017-11-25 09:23:37'),
(2, 'nets', 'amitanand.kvj.2@gmail.com', 0, '', '<script>   window.location.href = \"https://www.example.com\"; </script>', '2017-11-25 09:24:12'),
(3, 'hfb', 'admin@gmail.com', 67864533, 'hfvn', 'bb', '2017-11-25 11:33:10');

-- --------------------------------------------------------

--
-- Table structure for table `orderadd`
--

DROP TABLE IF EXISTS `orderadd`;
CREATE TABLE IF NOT EXISTS `orderadd` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `order_id` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `billing_name` text NOT NULL,
  `billing_address` text NOT NULL,
  `billing_city` text NOT NULL,
  `billing_state` text NOT NULL,
  `billing_zip` text NOT NULL,
  `billing_tel` bigint(212) NOT NULL,
  `billing_email` text NOT NULL,
  `delivery_name` text NOT NULL,
  `delivery_address` text NOT NULL,
  `delivery_city` text NOT NULL,
  `delivery_state` text NOT NULL,
  `delivery_zip` text NOT NULL,
  `delivery_tel` bigint(212) NOT NULL,
  `amount` int(100) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderadd`
--

INSERT INTO `orderadd` (`id`, `order_id`, `payment_mode`, `billing_name`, `billing_address`, `billing_city`, `billing_state`, `billing_zip`, `billing_tel`, `billing_email`, `delivery_name`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_zip`, `delivery_tel`, `amount`, `status`) VALUES
(1, 1, 'Wallet', 'cdfdf', 'xffx', 'cxf', 'ML', '700105', 8450865472, 'ravi@gmail.com', 'yrtr', 'dfc', 'KOLKATA', 'KA', '700105', 8450865472, 1, 'Failure'),
(8, 4, 'null', 'hd', 'htdg', 'fh', 'MH', '6375', 3352, 'amitanand.kvj.2@gmail.com', 'satyam kumar', 'delhi', 'delhi', 'MN', '946326494', 6488874946, 1, 'Invalid'),
(7, 3, 'Wallet', 'amit', 'new delhi', 'delhi', 'ML', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'satyam kumar', 'delhi', 'delhi', 'KA', '946326494', 6488874946, 1, 'Failure'),
(6, 2, 'Wallet', 'amit', 'new delhi', 'delhi', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'satyam kumar', 'delhi', 'delhi', 'HP', '946326494', 6488874946, 1, 'Success'),
(9, 5, 'Wallet', 'amit', 'address', 'town', 'MZ', '811214', 8979997072, 'amitanand.kvj.2@gmail.com', 'aymfh', 'hdsgrrnn dhzx', 'hrs', 'KL', '455555', 3833333333, 1, 'Failure'),
(10, 6, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'MZ', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'satyamkumar', 'delhi', 'delhi', 'BR', '946326494', 6488874946, 1, 'Failure'),
(11, 8, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'NL', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'NL', '247667', 8979997072, 1, 'Failure'),
(12, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(13, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(14, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(15, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(16, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(17, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 1, 'Failure'),
(18, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 1, 'Failure'),
(19, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 1, 'Failure'),
(20, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 1, 'Failure'),
(21, 9, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'OR', '247667', 8979997072, 1, 'Failure'),
(22, 10, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'NL', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'NL', '247667', 8979997072, 1, 'Failure'),
(23, 11, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'BR', '247667', 8979997072, 1, 'Failure'),
(24, 12, 'Wallet', 'amit', 'iit roorkee', 'roorkee', 'MP', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amit', 'iit roorkee', 'roorkee', 'MP', '247667', 8979997072, 1, 'Failure'),
(25, 13, 'Wallet', 'amitanand', 'iit roorkee', 'roorkee', 'UK', '247667', 8979997072, 'amitanand.kvj.2@gmail.com', 'amitanand', 'iit roorkee', 'roorkee', 'UK', '247667', 8979997072, 4695, 'Failure'),
(26, 14, 'null', '', '', '', '', '', 0, '', '', '', '', '', '', 0, 4695, 'Invalid');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `posted` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `scategory` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `Descr` varchar(2000) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `color` varchar(10) NOT NULL,
  `ocassion` varchar(50) NOT NULL,
  `fabric` varchar(50) NOT NULL,
  `pattern` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL,
  `view` bigint(20) NOT NULL,
  `love` float NOT NULL,
  `review` int(100) NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `title`, `price`, `posted`, `scategory`, `category`, `Descr`, `picture`, `color`, `ocassion`, `fabric`, `pattern`, `type`, `view`, `love`, `review`, `status`) VALUES
(1, 'Lorem ipsum', 700, '2018-01-21 21:54:52', '', '43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus enim justo, consequat ac dolor consequat, tempus elementum purus. Aenean sapien tellus, facilisis nec vehicula nec, tempor eu magna. Nullam at posuere ante, nec pharetra mi. Morbi dapibus, arcu ut condimentum vulputate, felis tellus porttitor nisl, a tempus ex velit at massa. Maecenas sit amet porta turpis, vel feugiat nulla. Phasellus eu lectus rutrum felis molestie accumsan quis quis diam. Aenean pulvinar placerat pharetra.', 'product.PNG', '#000', '', '', '', '', 7, 0, 0, 'hosted'),
(2, 'Lorem ipsum', 5000, '2018-01-21 22:00:14', '', '43', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer sollicitudin vulputate ullamcorper. Cras elementum magna magna, sed ullamcorper nulla egestas id. Suspendisse nec nunc ac quam fringilla facilisis.', 'product1.PNG', '#000', '', '', '', '', 170, 0, 0, 'hosted'),
(3, 'Nullam iaculis', 10, '2018-01-22 19:47:59', '', '45', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus enim justo, consequat ac dolor consequat, tempus elementum purus. Aenean sapien tellus, facilisis nec vehicula nec, tempor eu magna.', 'product1.jpg', '#fff', 'Formal', 'Cotton', 'Solids', '', 162, 0, 0, 'hosted'),
(4, 'Tiger', 52, '2018-01-29 23:37:17', '', '45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', 'product.jpg', '#000', 'Formal', 'Cotton', 'Solids', '', 149, 0, 0, 'hosted'),
(5, 'Lorem Ipsum', 5200, '2018-02-04 01:36:52', '', '45', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. ', '1517688412product.jpg', '#fff', 'Festive', 'Linen', 'Solids', '', 29, 0, 0, 'hosted');

-- --------------------------------------------------------

--
-- Table structure for table `purity`
--

DROP TABLE IF EXISTS `purity`;
CREATE TABLE IF NOT EXISTS `purity` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `purity` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purity`
--

INSERT INTO `purity` (`id`, `purity`) VALUES
(16, '14 kt'),
(15, 'Gold 14cr');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

DROP TABLE IF EXISTS `review`;
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `uid` int(100) NOT NULL,
  `productid` int(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `rate` int(2) NOT NULL,
  `review` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `uid`, `productid`, `uname`, `rate`, `review`) VALUES
(1, 8, 64, 'Phanendra Jangid', 0, 'ergsg'),
(2, 1, 394, 'Amit Anand', 0, 'hi'),
(3, 1, 380, 'Amit Anand', 0, 'FINE PRODUCT EVER'),
(4, 1, 394, 'Amit Anand', 0, 'NYC'),
(5, 1, 394, 'Amit Anand', 0, 'CCC'),
(6, 1, 394, 'Amit Anand', 0, 'CCCCC'),
(7, 1, 320, 'Amit Anand', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `scategory`
--

DROP TABLE IF EXISTS `scategory`;
CREATE TABLE IF NOT EXISTS `scategory` (
  `id` bigint(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `descr` varchar(2000) NOT NULL,
  `category` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `scategory`
--

INSERT INTO `scategory` (`id`, `name`, `descr`, `category`) VALUES
(47, 'Half Jackets', '', 'Men'),
(45, 'Shirt', '', 'Men'),
(46, 'Jackets', '', 'Men');

-- --------------------------------------------------------

--
-- Table structure for table `shipping`
--

DROP TABLE IF EXISTS `shipping`;
CREATE TABLE IF NOT EXISTS `shipping` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `uid` int(20) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mob` varchar(10) NOT NULL,
  `country` varchar(100) NOT NULL,
  `town` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `pin` varchar(10) NOT NULL,
  `addr` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shipping`
--

INSERT INTO `shipping` (`id`, `uid`, `fname`, `lname`, `mob`, `country`, `town`, `state`, `pin`, `addr`) VALUES
(1, 9, 'GOPAL', 'RAJAK', '8979997072', 'INDIA', 'jamalpur', 'Goa', '811214', 'C/o Gopal rajak'),
(7, 12, 'hetss', 'hess', '88899494', 'hse', 'hse', 'hs', '949494949', 'hse'),
(8, 1, 'satyam', 'kumar', '6488874946', 'INDIA', 'delhi', 'AP', '946326494', 'delhi'),
(9, 2, 'amit', 'anand', '8979997072', 'INDIA', 'roorkee', 'Uttarakhand', '247667', 'iitr');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

DROP TABLE IF EXISTS `slider`;
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `picture` text NOT NULL,
  `h1` text NOT NULL,
  `h2` text NOT NULL,
  `address` text NOT NULL,
  `color` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `picture`, `h1`, `h2`, `address`, `color`) VALUES
(7, 'slider2.jpg', 'Hello', '', '', '#FF0000');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

DROP TABLE IF EXISTS `subscribe`;
CREATE TABLE IF NOT EXISTS `subscribe` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscribe`
--

INSERT INTO `subscribe` (`id`, `email`) VALUES
(10, 'amitanand.kvj.2@gmail.com'),
(9, 'amitanand.kvj.255@gmail.com'),
(8, 'amitanand.kvj.3@gmail.com'),
(7, 'amitanand.kvj.2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tag`
--

DROP TABLE IF EXISTS `tag`;
CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` text NOT NULL,
  `tag` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

DROP TABLE IF EXISTS `tailor`;
CREATE TABLE IF NOT EXISTS `tailor` (
  `name` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `orderinfo` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `color` text NOT NULL,
  `colorcode` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `color`, `colorcode`) VALUES
(15, 'Black', '#000'),
(17, 'white', '#fff'),
(18, 'as', '#aaa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` text NOT NULL,
  `oauth_uid` varchar(50) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` text NOT NULL,
  `profile_url` varchar(250) NOT NULL,
  `picture_url` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `password` varchar(250) NOT NULL,
  `contact` bigint(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `gender`, `profile_url`, `picture_url`, `address`, `created`, `modified`, `password`, `contact`) VALUES
(1, 'facebook', '1109593212466447', 'Amit', 'Anand', 'amitanand.kvj.2@gmail.com', 'male', 'https://www.facebook.com/1109593212466447', 'https://scontent.xx.fbcdn.net/v/t1.0-1/p50x50/26114232_1578904235535340_1706556641232829753_n.jpg?oh=f3bce61e6f4f48826fffce187ecbf11e&oe=5AF815B2', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '202cb962ac59075b964b07152d234b70', 879997072),
(3, 'facebook', '10214501613031429', 'Allen', 'George', 'allengeorge_1993@yahoo.in', 'male', 'https://www.facebook.com/10214501613031429', 'https://fb-s-b-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/11138554_10206155642787389_3084776243083070868_n.jpg?oh=c303dff64772fa3bc21a78a711951e99&oe=5AB40A78&__gda__=1526102248_3a58175b84e3c07e3fb58464effeebe6', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '', 0),
(5, 'facebook', '847714008704115', 'Ravi', 'Ranjan', 'raviranjan.ptm@gmail.com', 'male', 'https://www.facebook.com/847714008704115', 'https://fb-s-d-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/20914678_990135304461984_3348981024797143368_n.jpg?oh=28d4363bc4bea07003f155dc820eb3bf&oe=5A9FD9FE&__gda__=1519281353_a72e3589d2a342b4b09ad3599d45dd4e', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '202cb962ac59075b964b07152d234b70', 0),
(6, 'facebook', '1504405129644650', 'Akhil', 'Goyal', 'jinnia20@gmail.com', 'male', 'https://www.facebook.com/1504405129644650', 'https://fb-s-a-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/17021894_1252455108172988_8285237339705554761_n.jpg?oh=d75fa6082b4de0c9400b385fb9f3e984&oe=5A96C147&__gda__=1520892959_bcb01c79ef77b344db1a22cd7bdd06d0', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '202cb962ac59075b964b07152d234b70', 0),
(8, 'facebook', '1497095500408250', 'Phanendra', 'Jangid', 'jangid.phanendra1998@gmail.com', 'male', 'https://www.facebook.com/1497095500408250', 'https://fb-s-a-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/18767947_1317499531701182_2261305554474870545_n.jpg?oh=0fb63e755fe768be54c2bcb69986894e&oe=5AD5D2C1&__gda__=1519027353_f4ed84f185aede1039a1ea69af2ae16e', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '', 0),
(15, 'facebook', '1832225773742367', 'Satyam', 'Kumar', '', 'male', 'https://www.facebook.com/1832225773742367', 'https://fb-s-c-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/23561343_1827054827592795_4006558415015179183_n.jpg?oh=11e42193ce50e4bd7c21ef50bfd5a7e2&oe=5A9874B8&__gda__=1520278752_fc69b5d8c8776caa3d4c06e14a1a8f2f', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '', 0),
(16, 'facebook', '2154248834589019', 'Shreya', 'Pillay', 'shreya.n.pillay@gmail.com', 'female', 'https://www.facebook.com/2154248834589019', 'https://fb-s-c-a.akamaihd.net/h-ak-fbx/v/t1.0-1/p50x50/13627257_1397711983576045_50241925835513148_n.jpg?oh=3ef7658aa53f2db6beb6490aecb3a960&oe=5AF4565F&__gda__=1521806018_8d7542d35d16ff223198c05b87df4bc6', '', '2018-02-05 10:04:48', '2018-02-05 04:34:48', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` text COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `contact` bigint(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2147483648 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `fname`, `lname`, `email`, `gender`, `profile_url`, `picture_url`, `address`, `created`, `modified`, `password`, `contact`) VALUES
(2147483647, 'facebook', '1109593212466447', 'Amit', 'Anand', 'amitanand.kvj.2@gmail.com', 'male', 'https://www.facebook.com/1109593212466447', 'https://fb-s-d-a.akamaihd.net/h-ak-fbx/v/t1.0-1/c82.246.599.599/s50x50/22528013_1508672275891870_2506027340893387234_n.jpg?oh=30e9c4b5d2528af3de01d9502be36cef&oe=5A9B6F21&__gda__=1520344560_5f0b7b945043db0cb9c5c0d759a7310d', '', '2017-11-07 19:22:52', '2017-11-07 19:22:52', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `uid` bigint(20) NOT NULL,
  `productid` bigint(20) NOT NULL,
  `attributevalue` text NOT NULL,
  `item` int(10) NOT NULL,
  `hem` varchar(50) NOT NULL,
  `cuff` varchar(50) NOT NULL,
  `collar` varchar(50) NOT NULL,
  `sleeve` varchar(50) NOT NULL,
  `placket` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `uid`, `productid`, `attributevalue`, `item`, `hem`, `cuff`, `collar`, `sleeve`, `placket`, `category`) VALUES
(14, 1, 3, 'M', 1, 'Type 1', 'Single Round Cuff', 'Classic Collar', 'Full Sleeve', 'Conventional', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
