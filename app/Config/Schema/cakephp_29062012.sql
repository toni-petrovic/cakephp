-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 29, 2012 at 07:06 PM
-- Server version: 5.5.24
-- PHP Version: 5.3.10-1ubuntu3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cakephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `code` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` enum('_inprogress','_idle','_active','_archived') NOT NULL DEFAULT '_inprogress',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `code`, `description`, `status`, `created`, `modified`, `order`) VALUES
(1, 'Tony', 'tony', 'test', '_active', '2012-06-29 16:22:37', '2012-06-29 16:22:37', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `brand_id` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) DEFAULT '0',
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `status` enum('_inprogress','_active','_archived') COLLATE utf8_bin NOT NULL DEFAULT '_active',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `order` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`brand_id`),
  KEY `fk_category_brand1` (`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `brand_id`, `parent_id`, `name`, `description`, `status`, `created`, `modified`, `order`) VALUES
(1, 1, 0, 'Category 1', '', '_active', '2012-06-29 16:23:19', '2012-06-29 16:23:19', '1'),
(2, 1, 0, 'Test 2', '', '_active', '2012-06-29 17:52:43', '2012-06-29 17:52:43', '1');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL DEFAULT '0',
  `brand_id` int(11) NOT NULL DEFAULT '0',
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `bar_code` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `short_description` text COLLATE utf8_bin NOT NULL,
  `status` enum('_inprogress','_idle','_active','_archived') CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '_inprogress',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `picture_layout` enum('horizontal','vertical') COLLATE utf8_bin DEFAULT 'horizontal',
  `on_action` int(1) DEFAULT '0',
  `slider_image` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `slider_order` int(11) DEFAULT NULL,
  `order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`,`category_id`,`brand_id`),
  KEY `fk_product_category1` (`category_id`,`brand_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=7 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `name`, `code`, `bar_code`, `description`, `short_description`, `status`, `created`, `modified`, `picture_layout`, `on_action`, `slider_image`, `slider_order`, `order`) VALUES
(1, 1, 1, 'Test product', 'xxx-1', '', 'test desc', 'test desc', '_active', '2012-06-29 16:24:58', '2012-06-29 16:24:58', NULL, NULL, '', NULL, NULL),
(2, 1, 1, 'Test product 2', 'xxx-1', '', 'test desc', 'test desc', '_active', '2012-06-29 16:24:58', '2012-06-29 16:24:58', 'horizontal', NULL, '', NULL, NULL),
(3, 1, 1, 'Test product 3', 'xxx-1', '', 'test desc', 'test desc', '_active', '2012-06-29 16:24:58', '2012-06-29 16:24:58', 'horizontal', NULL, '', NULL, NULL),
(4, 1, 1, 'Test product 4', 'xxx-1', '', 'test desc', 'test desc', '_active', '2012-06-29 16:24:58', '2012-06-29 16:24:58', 'horizontal', NULL, '', NULL, NULL),
(5, 2, 1, 'Test product 5', 'xxx-1', '', 'test desc', 'test desc', '_active', '2012-06-29 16:24:58', '2012-06-29 18:07:06', 'horizontal', NULL, '', NULL, NULL),
(6, 2, 1, '', '', '', '', 'test', '_active', '2012-06-29 18:16:07', '2012-06-29 18:16:07', NULL, NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_pictures`
--

DROP TABLE IF EXISTS `product_pictures`;
CREATE TABLE IF NOT EXISTS `product_pictures` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) unsigned NOT NULL DEFAULT '0',
  `picture_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `mime_type` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `file_size` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `subdir` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `extra_field` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `ext` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `order` int(10) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
