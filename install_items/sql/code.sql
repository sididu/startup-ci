-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: May 07, 2017 at 10:02 PM
-- Server version: 5.5.42
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `code`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `description`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`) VALUES
(3, 'Akbar', '::1', '::1', '2017-05-07 19:55:51', '2017-05-07 19:55:51'),
(4, 'satria', '::1', '::1', '2017-05-07 19:55:59', '2017-05-07 19:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `description`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`) VALUES
(1, 'minuman', '::1', '::1', '2017-05-06 16:38:50', '2017-05-06 16:38:50'),
(2, 'makanan', '::1', '::1', '2017-05-06 16:39:00', '2017-05-06 16:39:00');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) unsigned NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `jaksa`
--

CREATE TABLE `jaksa` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `perkara`
--

CREATE TABLE `perkara` (
  `id` int(11) NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tgl_surat` datetime NOT NULL,
  `judul_kasus` varchar(100) NOT NULL,
  `masalah` varchar(500) NOT NULL,
  `kesimpulan` varchar(500) NOT NULL,
  `saran` varchar(500) NOT NULL,
  `nilai_kontrak` int(20) NOT NULL,
  `subyek_hukum` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `kerugian_negara` int(20) NOT NULL,
  `pemulihan_aset` int(20) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `register` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `brand_id` int(11) NOT NULL,
  `model` varchar(150) DEFAULT NULL,
  `tag_line` varchar(250) DEFAULT NULL,
  `features` varchar(350) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty_at_hand` int(11) DEFAULT NULL,
  `editorial_reviews` varchar(750) DEFAULT NULL,
  `created_from_ip` varchar(100) NOT NULL,
  `updated_from_ip` varchar(100) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `no_surat` int(20) NOT NULL,
  `tgl_surat` varchar(100) NOT NULL,
  `judul_kasus` varchar(200) NOT NULL,
  `masalah` varchar(300) NOT NULL,
  `kesimpulan` varchar(300) NOT NULL,
  `saran` varchar(300) NOT NULL,
  `nilai_kontrak` int(20) NOT NULL,
  `subyek_hukum` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `lembaga` varchar(100) NOT NULL,
  `kerugian_negara` int(20) NOT NULL,
  `pemulihan_aset` int(20) NOT NULL,
  `register` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `brand_id`, `model`, `tag_line`, `features`, `price`, `qty_at_hand`, `editorial_reviews`, `created_from_ip`, `updated_from_ip`, `date_created`, `date_updated`, `no_surat`, `tgl_surat`, `judul_kasus`, `masalah`, `kesimpulan`, `saran`, `nilai_kontrak`, `subyek_hukum`, `status`, `lembaga`, `kerugian_negara`, `pemulihan_aset`, `register`) VALUES
(3, 'akbar', NULL, 3, NULL, NULL, NULL, NULL, NULL, NULL, '::1', '::1', '2017-05-07 21:50:02', '2017-05-07 21:50:02', 123, '12/12/2017', 'Korupsi hambalang', 'Korupsi hambalang serentak', 'korupsi dialukan bersama sama\\', 'jangan korupsi', 1000000000, 'Andi malarangeng', 'Terlapor', 'Kementrian dalam negri', 1000000000, 10000000, 'RP-2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) unsigned DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) unsigned NOT NULL,
  `last_login` int(11) unsigned DEFAULT NULL,
  `active` tinyint(1) unsigned DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2a$07$SeBknntpZror9uyftVopmu61qg0ms8Qv1yV6FG.kQOSM.9QhmTo36', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1494174866, 1, 'Admin', 'istrator', 'ADMIN', '0'),
(2, '::1', 'Akbar', '$2y$08$Up/1UzTNZZgZkjM0xywQX.G2u0YCaYf1zUT7HGd6HcI17hmNNa55G', NULL, 'akbar@akbar.com', NULL, NULL, NULL, NULL, 1494078910, NULL, 1, 'akbar', 'satria permadi', NULL, '081297018587');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) unsigned NOT NULL,
  `user_id` int(11) unsigned NOT NULL,
  `group_id` mediumint(8) unsigned NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(4, 2, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jaksa`
--
ALTER TABLE `jaksa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perkara`
--
ALTER TABLE `perkara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jaksa`
--
ALTER TABLE `jaksa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `perkara`
--
ALTER TABLE `perkara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
