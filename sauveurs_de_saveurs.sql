-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 01, 2024 at 01:34 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauveurs_de_saveurs`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `object` varchar(45) DEFAULT NULL,
  `message` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

DROP TABLE IF EXISTS `fruit`;
CREATE TABLE IF NOT EXISTS `fruit` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`id`, `name`) VALUES
(1, 'Fraise'),
(2, 'Orange'),
(3, 'Kiwi'),
(4, 'Prune'),
(5, 'Grenade'),
(6, 'Courgette');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ref` varchar(45) NOT NULL,
  `user_id` int NOT NULL,
  `total` float NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ref_UNIQUE` (`ref`),
  KEY `fk_invoice_user1_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `invoice_has_product`
--

DROP TABLE IF EXISTS `invoice_has_product`;
CREATE TABLE IF NOT EXISTS `invoice_has_product` (
  `invoice_id` int NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`invoice_id`,`product_id`),
  KEY `fk_invoice_has_product_product1_idx` (`product_id`),
  KEY `fk_invoice_has_product_invoice1_idx` (`invoice_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `ref` varchar(45) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `composition` varchar(45) DEFAULT NULL,
  `use` varchar(45) DEFAULT NULL,
  `price` float NOT NULL,
  `date` date NOT NULL,
  `stock` int NOT NULL,
  `product_type_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_product_type_idx` (`product_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `ref`, `description`, `composition`, `use`, `price`, `date`, `stock`, `product_type_id`) VALUES
(1, 'Confiture Fraise', '#cf001', NULL, NULL, NULL, 5, '2024-02-29', 10, 1),
(2, 'Confiture Orange', '#co001', NULL, NULL, NULL, 5, '2024-02-29', 10, 1),
(3, 'Confiture Kiiwiis', 'XX4', NULL, NULL, NULL, 5, '2024-02-29', 10, 1),
(4, 'Confiture Prune', 'XX5', NULL, NULL, NULL, 5, '2024-02-29', 10, 1),
(5, 'Confiture Courgette', 'c', NULL, NULL, NULL, 5, '2024-02-29', 10, 1),
(6, 'Confiture Grenade', 'g', NULL, NULL, NULL, 5, '2024-02-29', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product_has_fruit`
--

DROP TABLE IF EXISTS `product_has_fruit`;
CREATE TABLE IF NOT EXISTS `product_has_fruit` (
  `product_id` int NOT NULL,
  `fruit_id` int NOT NULL,
  PRIMARY KEY (`product_id`,`fruit_id`),
  KEY `fk_product_has_fruit_fruit1_idx` (`fruit_id`),
  KEY `fk_product_has_fruit_product1_idx` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

DROP TABLE IF EXISTS `product_image`;
CREATE TABLE IF NOT EXISTS `product_image` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  `path` varchar(150) NOT NULL,
  `product_id` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_product_image_product1_idx` (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product_image`
--

INSERT INTO `product_image` (`id`, `name`, `path`, `product_id`) VALUES
(1, 'fraise.png', 'product_image/fraise.png', 1),
(2, 'orange.png', 'product_image/orange.png', 2),
(3, 'kiwi.png', 'product_image/kiwi.png', 3),
(4, 'prune.png', 'product_image/prune.png', 4),
(5, 'courgette.png', 'product_image/courgette.png', 5),
(6, 'grenade.png', 'product_image/grenade.png', 6);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int NOT NULL,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `name`) VALUES
(1, 'Confiture');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) NOT NULL,
  `phone` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_UNIQUE` (`email`),
  UNIQUE KEY `phone_UNIQUE` (`phone`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_invoice_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `invoice_has_product`
--
ALTER TABLE `invoice_has_product`
  ADD CONSTRAINT `fk_invoice_has_product_invoice1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`id`),
  ADD CONSTRAINT `fk_invoice_has_product_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_product_product_type` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_has_fruit`
--
ALTER TABLE `product_has_fruit`
  ADD CONSTRAINT `fk_product_has_fruit_fruit1` FOREIGN KEY (`fruit_id`) REFERENCES `fruit` (`id`),
  ADD CONSTRAINT `fk_product_has_fruit_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `fk_product_image_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
