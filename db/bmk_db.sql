-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 12, 2014 at 04:44 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bmk_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `project_id` int(11) NOT NULL AUTO_INCREMENT,
  `projects` varchar(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `desc` text,
  `type` varchar(255) DEFAULT NULL,
  `screenshot` text,
  `url` text,
  PRIMARY KEY (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `projects`, `name`, `desc`, `type`, `screenshot`, `url`) VALUES
(1, 'commercial', 'Goweb Hosting Solution', 'Main website, Product catalog.', 'Drupal 7', 'upload/test2.png', 'http://www.gowebhosting.ph/'),
(2, 'commercial', 'Goweb Hosting Billing', 'Portal, Web Hosting Management, Billing', 'WHMCS, bootstrap', 'upload/test3.png', 'http://portal.gowebhosting.ph/domainchecker.php'),
(3, 'commercial', 'Goweb Hosting Design', 'Goweb Portfolio, Free design, Design', 'Codeigniter, Zurb', 'upload/test4.png', 'http://portal.gowebhosting.ph/domainchecker.php'),
(4, 'commercial', 'Hijo Resources', 'Content Management', 'Dreamweaver, php, js', 'upload/test5.png', 'http://www.hijoresources.net/'),
(5, 'commercial', 'Planet Gadget', 'CMS, Ecommerse,  Product Catalog', 'Joomla', 'upload/test6.png', 'http://www.planetgadgetph.com/'),
(6, 'commercial', 'We design, We shoot', 'Product Catalog', 'PHP, JS, HTML, CSS', 'upload/test7.png', 'http://wedesignweshoot.com/'),
(7, 'commercial', 'LMCGLAW', 'N/A', 'PHP, JS, HTML, CSS', 'upload/lmcg-law.png', 'http://lmcglaw.com/'),
(8, 'commercial', 'Mercury Drug Store', 'Product Catalog, Store Locator, Inquiries page', 'JS, HTML, CSS', 'upload/mercury-drug-store.png', 'https://www.mercurydrug.com/index.html'),
(9, 'commercial', 'Abby Golf- Abby Arevalo', 'Personal Profile, Archive, Gallery', 'Wordpress Theming, Wordpress Development', 'upload/abby2.png', 'http://abby-golf.com/stagging/'),
(10, 'commercial', 'Marc Dios Ababa', 'Product Catalog, Blog', 'Joomla', 'upload/marcdiosababa.png', 'http://marcdiosababa.com/stagging'),
(11, 'commercial', 'Waterfront contailer', 'Product Catalog', 'Wordpress Theming, Plugin, Development', 'upload/test1.png', 'http://waterfrontcontainer.ph/'),
(12, 'studies', 'DDG - Magazine [UNFINISH]', 'Product Catalog, Blog, archieve', 'PSD TO HTML / static / stagging', 'upload/ddg-mag.png', 'http://digimarketing.github.io/DDG-magazine/'),
(13, 'commercial', 'Double Dragon Properties', 'N/A', 'Wordpress Plugin', 'upload/doubledragon.png', 'http://doubledragon.com.ph/'),
(14, 'commercial', 'Mrs. Fields', 'Product Catalog, Store Locator, Plugins', 'Wordpress Plugin, Wordpress Theming', 'upload/mrsfields.png', 'http://mrsfields.com.ph/'),
(15, 'personal', 'My Personal Gallery', 'Gallery for my personal photos', 'CodeIgniter, Js, Css Html', 'upload/personal_gallery.png', 'admin/gallery');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(20) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`users_id`, `name`, `username`, `password`) VALUES
(1, 'Mark Kevin Cardente Besinga', 'besingamk', '85d8db29c5ed109beab681214a749f05');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
