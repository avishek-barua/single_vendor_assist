-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 05:17 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokan`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `amount` double(20,2) NOT NULL DEFAULT 0.00,
  `account_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Cash',
  `account_type_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reference` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Self',
  `reference_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transaction_code_2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `amount`, `account_type`, `account_type_2`, `order_id`, `customer_id`, `customer_name`, `category`, `reference`, `reference_2`, `transaction_code`, `transaction_code_2`, `description`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 4.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(2, 5667.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-09-16 19:59:42', '2021-09-16 19:59:42'),
(3, 700.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-09-23 01:11:24', '2021-09-23 01:11:24'),
(4, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-09-23 01:11:56', '2021-09-23 01:11:56'),
(5, 6.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-09-23 01:12:52', '2021-09-23 01:12:52'),
(6, 4000.00, 'Cash', NULL, NULL, 2, 'Abu Naser Mohd. Helal', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-04 11:26:17', '2021-10-04 11:26:17'),
(7, 35800.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-06 04:47:59', '2021-10-06 04:47:59'),
(8, 1000.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 05:16:54', '2021-10-07 05:16:54'),
(9, 1400.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 05:30:55', '2021-10-07 05:30:55'),
(10, 4000.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 16:38:34', '2021-10-07 16:38:34'),
(11, 1480.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 16:42:12', '2021-10-07 16:42:12'),
(12, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 17:17:50', '2021-10-07 17:17:50'),
(13, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 17:19:02', '2021-10-07 17:19:02'),
(14, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 17:19:37', '2021-10-07 17:19:37'),
(15, 1000.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 17:21:27', '2021-10-07 17:21:27'),
(16, 1000.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 18:17:56', '2021-10-07 18:17:56'),
(17, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-07 18:18:24', '2021-10-07 18:18:24'),
(18, 1450.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-08 06:15:35', '2021-10-08 06:15:35'),
(19, 15000.00, 'Bkash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-11 07:48:32', '2021-10-11 07:48:32'),
(20, 250.00, 'Bkash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-11 07:57:32', '2021-10-11 07:57:32'),
(21, 3560.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Rodro', NULL, NULL, NULL, NULL, 0, '2021-10-11 08:03:59', '2021-10-11 08:03:59'),
(22, 100.00, 'Bkash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-11 08:04:55', '2021-10-11 08:04:55'),
(23, 2900.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-18 05:54:41', '2021-10-18 05:54:41'),
(24, 0.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Self', NULL, NULL, NULL, NULL, 0, '2021-10-18 05:56:19', '2021-10-18 05:56:19'),
(25, 900.00, 'Cash', NULL, NULL, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(26, 1000.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-19 18:09:21', '2021-10-19 18:09:21'),
(27, 200.00, 'Bkash', NULL, NULL, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-23 18:55:34', '2021-10-23 18:55:34'),
(28, 150.00, 'Cash', NULL, NULL, 1, 'Walk-in Customer', 'Final Payment', 'Rodro', NULL, NULL, NULL, NULL, 0, '2021-10-23 18:59:48', '2021-10-23 18:59:48'),
(29, 500.00, 'Bkash', NULL, NULL, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(30, 500.00, 'Bkash', NULL, NULL, 3, 'Rafig', 'Advance Payment', 'Momin', NULL, NULL, NULL, NULL, 0, '2021-10-26 06:05:59', '2021-10-26 06:05:59'),
(31, 80.00, 'Cash', NULL, 38, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-26 06:20:53', '2021-10-26 06:20:53'),
(32, 200.00, 'Cash', NULL, 39, 3, 'Rafig', 'Advance Payment', 'Avishek', NULL, NULL, NULL, NULL, 0, '2021-10-26 12:04:05', '2021-10-26 12:04:05'),
(33, 400.00, 'Cash', NULL, 40, 3, 'Rafig', 'Advance Payment', 'Avishek', NULL, NULL, NULL, NULL, 0, '2021-10-26 12:19:46', '2021-10-26 12:26:31'),
(34, 1350.00, 'Bkash', NULL, 41, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-26 12:35:30', '2021-10-26 12:36:22'),
(35, 2500.00, 'Cash', NULL, 42, 1, 'Walk-in Customer', 'Final Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-26 12:45:21', '2021-10-26 12:45:41'),
(36, 1000.00, 'Bkash', NULL, 43, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(37, 100.00, 'Bkash', NULL, 45, 3, 'Rafig', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-10-30 06:31:44', '2021-10-30 06:31:44'),
(38, 300.00, 'Bkash', NULL, 46, 3, 'Rafig', 'Final Payment', 'Sunny', 'Rodro', '4141', NULL, NULL, 0, '2021-10-30 06:33:56', '2021-10-30 06:36:18'),
(39, 380.00, 'Cash', 'Bkash', 47, 3, 'Rafig', 'Final Payment', 'Sunny', NULL, NULL, '#855', NULL, 0, '2021-11-01 18:19:36', '2021-11-01 18:20:51'),
(40, 350.00, 'Bkash', 'Bank Transaction', 48, 3, 'Rafig', 'Final Payment', 'Sunny', 'Momin', '#4141', '#acc855', NULL, 0, '2021-11-01 18:24:08', '2021-11-01 18:25:30'),
(42, 700.00, 'Bank Transaction', 'Bkash', 50, 1, 'Walk-in Customer', 'Final Payment', 'Rodro', 'Momin', 'acc#0285', '#67855', NULL, 0, '2021-11-02 05:30:43', '2021-11-02 05:38:13'),
(46, 100.00, 'Cash', NULL, 57, 2, 'Abu Naser Mohd. Helal', 'Advance Payment', 'Sunny', NULL, NULL, NULL, NULL, 0, '2021-11-10 07:11:10', '2021-11-10 07:11:10'),
(47, 100.00, 'Cash', NULL, 58, 8, 'hh', 'Advance Payment', 'jawad', NULL, NULL, NULL, NULL, 0, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(48, 600.00, 'Cash', 'Bank Transaction', 59, 9, 'B', 'Advance Payment', 'jawad', ',C', NULL, ',#000000', NULL, 0, '2021-12-29 19:45:39', '2021-12-30 07:01:07'),
(50, 4900.00, 'Cash,Bank Transaction,Cash,Bkash', NULL, 61, 4, 'Sun Enterprise', 'Final Payment', 'Sunny,Rodro,Momin,Avishek', NULL, 'Cash,#0002,Cash,#000000', NULL, NULL, 0, '2021-12-30 07:22:26', '2021-12-30 07:25:26'),
(51, 16160.00, 'Bkash,Cash', NULL, 62, 1, 'Walk-in Customer', 'Final Payment', 'Avishek,Momin', NULL, 'acc#0285,Cash', NULL, NULL, 0, '2022-10-28 06:15:05', '2022-10-28 06:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patients_id` int(11) NOT NULL,
  `appointment_at` datetime NOT NULL,
  `treatment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `confirmed` tinyint(1) NOT NULL DEFAULT 1,
  `initial_sms_sent` int(11) NOT NULL DEFAULT 0,
  `unavailability_sms_sent` int(11) NOT NULL DEFAULT 0,
  `reminder_sms_sent` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bundles`
--

CREATE TABLE `bundles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` tinyint(1) DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundles`
--

INSERT INTO `bundles` (`id`, `name`, `is_deleted`, `created_at`, `updated_at`) VALUES
(12, 'Package 2', 1, '2021-10-02 03:13:14', '2021-10-27 16:00:03'),
(11, 'Package 1', 1, '2021-10-02 03:13:03', '2021-10-27 16:00:06'),
(13, 'Winter Package', 0, '2021-10-27 16:04:35', '2021-10-27 16:04:35'),
(14, 'Soap Offer', 0, '2021-10-28 04:09:38', '2021-10-28 04:09:38'),
(15, 'Soap Offer', 0, '2022-10-26 18:45:17', '2022-10-26 18:45:17'),
(16, 'Autumn package', 0, '2022-10-27 18:02:38', '2022-10-27 18:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `bundle_products`
--

CREATE TABLE `bundle_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bundle_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bundle_products`
--

INSERT INTO `bundle_products` (`id`, `bundle_id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(77, 12, 60, 1, '2021-10-02 03:13:14', '2021-10-02 03:13:14'),
(76, 12, 58, 1, '2021-10-02 03:13:14', '2021-10-02 03:13:14'),
(75, 12, 59, 1, '2021-10-02 03:13:14', '2021-10-02 03:13:14'),
(74, 11, 59, 1, '2021-10-02 03:13:03', '2021-10-02 03:13:03'),
(73, 11, 60, 1, '2021-10-02 03:13:03', '2021-10-02 03:13:03'),
(78, 13, 66, 1, '2021-10-27 16:04:35', '2021-10-27 16:04:35'),
(79, 13, 65, 1, '2021-10-27 16:04:35', '2021-10-27 16:04:35'),
(80, 14, 64, 5, '2021-10-28 04:09:38', '2021-10-28 04:09:38'),
(81, 14, 63, 10, '2021-10-28 04:09:38', '2021-10-28 04:09:38'),
(82, 14, 61, 15, '2021-10-28 04:09:38', '2021-10-28 04:09:38'),
(83, 15, 61, 30, '2022-10-26 18:45:17', '2022-10-26 18:45:17'),
(84, 16, 64, 10, '2022-10-27 18:02:38', '2022-10-27 18:02:38'),
(85, 16, 63, 5, '2022-10-27 18:02:38', '2022-10-27 18:02:38'),
(86, 16, 58, 3, '2022-10-27 18:02:38', '2022-10-27 18:02:38');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Lens', NULL, NULL, NULL),
(2, 'Camera', NULL, NULL, NULL),
(3, 'Accessories', NULL, NULL, NULL),
(4, 'Cloth', NULL, '2021-10-04 12:10:38', '2021-10-04 12:10:38');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `delivery_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nid` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `mobile`, `image`, `address`, `delivery_address`, `nid`, `passport`, `comment`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Walk-in Customer', '0000000000', NULL, 'Halishahar, chittagong', 'Agrabad, Chittagong', NULL, NULL, NULL, 0, NULL, '2021-06-08 15:54:39'),
(2, 'Abu Naser Mohd. Helal', '+8801754577685', NULL, 'Plot 06, Sector:1/A, Road: 5 C.E.P.Z', 'dhaka', '123212548', NULL, 'new', 0, '2021-10-04 11:22:03', '2021-10-04 11:22:03'),
(3, 'Rafig', '01872913082', NULL, 'Foteabad', NULL, '4655533851', '151651655', NULL, 0, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(4, 'Sun Enterprise', '01636524141', NULL, 'shadarghat', 'new market', '4655533851', 'sunenterprise@gmail.com', 'Good', 0, '2021-12-22 07:36:02', '2021-12-22 07:36:02'),
(5, 'Dental', '01872913082', NULL, 'Foteabad', 'new market', '55874030', 'sunenterprise@gmail.com', 'Good', 0, '2021-12-22 07:38:09', '2021-12-22 07:38:09'),
(6, 'df', '1636524141', NULL, 'shadarghat', 'new market', '4152866432', 'sunenterprise@gmail.com', 'Good', 0, '2021-12-22 07:39:26', '2021-12-22 07:39:26'),
(8, 'hh', '01872913082', NULL, 'shadarghat', NULL, '4655533851', 'sunenterprise@gmail.com', 'Good', 0, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(9, 'B', '01636524141', 'customer_image/1640807139.png', 'nala para', NULL, '4655533851', 'sunenterprise@gmail.com', 'Good', 0, '2021-12-29 19:45:39', '2021-12-29 19:45:39'),
(10, 'Sunny Mollick', '01636524141', 'customer_image/1666808786.jpg', 'Foteabad', 'new market', '45533905', 'sunenterprise@gmail.com', 'valo hoise', 0, '2022-10-26 18:26:26', '2022-10-26 18:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `damages`
--

CREATE TABLE `damages` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `category_id` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `sku` varchar(255) DEFAULT NULL,
  `loss_amount` varchar(255) DEFAULT NULL,
  `damage_note` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `damages`
--

INSERT INTO `damages` (`id`, `product_name`, `category_id`, `quantity`, `sku`, `loss_amount`, `damage_note`, `created_at`, `updated_at`) VALUES
(1, 'Sony Headphone', '3', 1, '#6565445454', '1500', 'Bad performance', '2021-11-12 07:50:27', '2021-11-12 07:50:27'),
(2, 'Lens 2', '1', 2, '43453', '1200', 'Broken', '2021-11-12 07:52:24', '2021-11-12 07:52:24'),
(3, 'test', '4', 2, '#656544', '1500', 'i dont know', '2022-10-28 06:46:56', '2022-10-28 06:46:56'),
(4, 'test', '4', 2, '#656544', '1500', 'i dont know', '2022-10-28 06:46:56', '2022-10-28 06:46:56');

-- --------------------------------------------------------

--
-- Table structure for table `demographies`
--

CREATE TABLE `demographies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE `invoices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `invoice_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 1,
  `order_id` int(11) NOT NULL,
  `issue_date` date NOT NULL,
  `due_date` date DEFAULT NULL,
  `send_date` date DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoices`
--

INSERT INTO `invoices` (`id`, `invoice_id`, `customer_id`, `order_id`, `issue_date`, `due_date`, `send_date`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, '#INV11', 1, 1, '2021-08-04', '2021-08-10', NULL, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(2, '#INV12', 1, 2, '2021-08-14', '2021-08-15', NULL, 0, '2021-08-15 05:11:01', '2021-08-15 05:11:01'),
(3, '#INV13', 1, 3, '2021-09-16', '2021-09-28', NULL, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(4, '#INV14', 1, 4, '2021-09-22', '2021-09-30', NULL, 0, '2021-09-23 00:57:52', '2021-09-23 00:57:52'),
(5, '#INV15', 1, 5, '2021-10-01', '2021-10-23', NULL, 0, '2021-10-02 02:30:06', '2021-10-02 02:30:06'),
(6, '#INV21', 1, 6, '2021-10-04', '2021-10-04', NULL, 0, '2021-10-04 11:23:45', '2021-10-04 11:23:45'),
(7, '#INV21', 1, 7, '2021-10-04', '2021-10-04', NULL, 0, '2021-10-04 11:26:17', '2021-10-04 11:26:17'),
(8, '#INV18', 1, 8, '2021-10-06', '2021-10-07', NULL, 0, '2021-10-06 04:47:59', '2021-10-06 04:47:59'),
(9, '#INV19', 1, 9, '2021-10-06', '2021-10-06', NULL, 0, '2021-10-06 06:44:51', '2021-10-06 06:44:51'),
(10, '#INV110', 1, 10, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:06', '2021-10-06 18:31:06'),
(11, '#INV111', 1, 11, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(12, '#INV112', 1, 12, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(13, '#INV113', 1, 13, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(14, '#INV114', 1, 14, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(15, '#INV115', 1, 15, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(16, '#INV116', 1, 16, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(17, '#INV117', 1, 17, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:09', '2021-10-06 18:31:09'),
(18, '#INV118', 1, 18, '2021-10-07', '2021-10-07', NULL, 0, '2021-10-06 18:31:09', '2021-10-06 18:31:09'),
(19, '#INV119', 1, 19, '2021-10-07', NULL, NULL, 0, '2021-10-07 05:16:54', '2021-10-07 05:16:54'),
(20, '#INV120', 1, 20, '2021-10-07', NULL, NULL, 0, '2021-10-07 05:30:55', '2021-10-07 05:30:55'),
(21, '#INV121', 1, 21, '2021-10-07', NULL, NULL, 0, '2021-10-07 16:38:34', '2021-10-07 16:38:34'),
(22, '#INV122', 1, 22, '2021-10-07', NULL, NULL, 0, '2021-10-07 16:42:12', '2021-10-07 16:42:12'),
(23, '#INV123', 1, 23, '2021-10-07', NULL, NULL, 0, '2021-10-07 17:21:27', '2021-10-07 17:21:27'),
(24, '#INV124', 1, 24, '2021-10-08', NULL, NULL, 0, '2021-10-08 06:15:35', '2021-10-08 06:15:35'),
(25, '#INV125', 1, 25, '2021-10-11', NULL, NULL, 0, '2021-10-11 07:48:32', '2021-10-11 07:48:32'),
(26, '#INV126', 1, 26, '2021-10-11', NULL, NULL, 0, '2021-10-11 07:57:32', '2021-10-11 07:57:32'),
(27, '#INV127', 1, 27, '2021-10-11', NULL, NULL, 0, '2021-10-11 08:00:29', '2021-10-11 08:00:29'),
(28, '#INV128', 1, 28, '2021-10-11', NULL, NULL, 0, '2021-10-11 08:01:39', '2021-10-11 08:01:39'),
(29, '#INV129', 1, 29, '2021-10-11', NULL, NULL, 0, '2021-10-11 08:03:59', '2021-10-11 08:03:59'),
(30, '#INV130', 1, 30, '2021-10-11', NULL, NULL, 0, '2021-10-11 08:04:55', '2021-10-11 08:04:55'),
(31, '#INV131', 1, 31, '2021-10-11', NULL, NULL, 0, '2021-10-11 08:06:03', '2021-10-11 08:06:03'),
(32, '#INV31', 1, 32, '2021-10-18', NULL, NULL, 0, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(33, '#INV133', 1, 33, '2021-10-20', NULL, NULL, 0, '2021-10-19 18:09:21', '2021-10-19 18:09:21'),
(34, '#INV31', 1, 34, '2021-10-24', NULL, NULL, 0, '2021-10-23 18:55:34', '2021-10-23 18:55:34'),
(35, '#INV135', 1, 35, '2021-10-24', NULL, NULL, 0, '2021-10-23 18:59:48', '2021-10-23 18:59:48'),
(36, '#INV31', 1, 36, '2021-10-24', NULL, NULL, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(37, '#INV31', 1, 37, '2021-10-26', NULL, NULL, 0, '2021-10-26 06:05:59', '2021-10-26 06:05:59'),
(38, '#INV31', 1, 38, '2021-10-26', NULL, NULL, 0, '2021-10-26 06:20:53', '2021-10-26 06:20:53'),
(39, '#INV31', 1, 39, '2021-10-26', NULL, NULL, 0, '2021-10-26 12:04:05', '2021-10-26 12:04:05'),
(40, '#INV31', 1, 40, '2021-10-26', NULL, NULL, 0, '2021-10-26 12:19:46', '2021-10-26 12:19:46'),
(41, '#INV31', 1, 41, '2021-10-26', NULL, NULL, 0, '2021-10-26 12:35:30', '2021-10-26 12:35:30'),
(42, '#INV142', 1, 42, '2021-10-26', NULL, NULL, 0, '2021-10-26 12:45:21', '2021-10-26 12:45:21'),
(43, '#INV31', 1, 43, '2021-10-28', NULL, NULL, 0, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(44, '#INV31', 1, 44, '2021-10-28', NULL, NULL, 0, '2021-10-28 04:11:12', '2021-10-28 04:11:12'),
(45, '#INV31', 1, 45, '2021-10-30', NULL, NULL, 0, '2021-10-30 06:31:43', '2021-10-30 06:31:43'),
(46, '#INV31', 1, 46, '2021-10-30', NULL, NULL, 0, '2021-10-30 06:33:56', '2021-10-30 06:33:56'),
(47, '#INV31', 1, 47, '2021-11-02', NULL, NULL, 0, '2021-11-01 18:19:36', '2021-11-01 18:19:36'),
(48, '#INV31', 1, 48, '2021-11-02', NULL, NULL, 0, '2021-11-01 18:24:08', '2021-11-01 18:24:08'),
(49, '#INV31', 1, 49, '2021-11-02', NULL, NULL, 0, '2021-11-02 05:25:52', '2021-11-02 05:25:52'),
(50, '#INV150', 1, 50, '2021-11-02', NULL, NULL, 0, '2021-11-02 05:30:43', '2021-11-02 05:30:43'),
(51, '#INV21', 1, 51, '2021-11-02', NULL, NULL, 0, '2021-11-02 05:55:33', '2021-11-02 05:55:33'),
(52, '#INV21', 1, 52, '2021-11-02', NULL, NULL, 0, '2021-11-02 05:58:57', '2021-11-02 05:58:57'),
(53, '#INV21', 1, 53, '2021-11-02', NULL, NULL, 0, '2021-11-02 06:03:09', '2021-11-02 06:03:09'),
(54, '#INV21', 1, 54, '2021-11-02', NULL, NULL, 0, '2021-11-02 06:06:44', '2021-11-02 06:06:44'),
(55, '#INV21', 1, 55, '2021-11-02', NULL, NULL, 0, '2021-11-02 06:14:24', '2021-11-02 06:14:24'),
(56, '#INV21', 1, 56, '2021-11-02', NULL, NULL, 0, '2021-11-02 06:17:35', '2021-11-02 06:17:35'),
(57, '#INV21', 1, 57, '2021-11-10', NULL, NULL, 0, '2021-11-10 07:11:10', '2021-11-10 07:11:10'),
(58, '#INV81', 1, 58, '2021-12-30', NULL, NULL, 0, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(59, '#INV91', 1, 59, '2021-12-30', NULL, NULL, 0, '2021-12-29 19:45:39', '2021-12-29 19:45:39'),
(60, '#INV41', 1, 60, '2021-12-30', NULL, NULL, 0, '2021-12-30 07:07:29', '2021-12-30 07:07:29'),
(61, '#INV41', 1, 61, '2021-12-30', NULL, NULL, 0, '2021-12-30 07:22:26', '2021-12-30 07:22:26'),
(62, '#INV162', 1, 62, '2022-10-28', NULL, NULL, 0, '2022-10-28 06:15:05', '2022-10-28 06:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patients_id` int(11) NOT NULL,
  `for` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(91, '2014_10_12_000000_create_users_table', 1),
(92, '2014_10_12_100000_create_password_resets_table', 1),
(93, '2019_08_19_000000_create_failed_jobs_table', 1),
(94, '2021_03_30_233845_create_patients_table', 1),
(95, '2021_04_08_152322_create_appointments_table', 1),
(96, '2021_04_08_220840_create_messages_table', 1),
(97, '2021_04_09_061852_create_demographies_table', 1),
(98, '2021_05_05_221850_create_products_table', 1),
(99, '2021_05_05_222120_create_customers_table', 1),
(100, '2021_05_05_222321_create_orders_table', 1),
(101, '2021_05_05_223902_create_invoices_table', 1),
(102, '2021_05_06_015443_create_order_products_table', 1),
(103, '2021_05_08_063053_create_receipts_table', 1),
(104, '2021_05_09_001019_create_settings_table', 1),
(105, '2021_05_09_055133_create_accounts_table', 1),
(106, '2021_06_09_131442_create_bundles_table', 2),
(107, '2021_06_09_131709_create_bundle_products_table', 2),
(108, '2021_10_01_202354_create_categories_table', 3),
(109, '2021_10_01_202739_product_category_relation', 3),
(112, '2021_10_01_210700_update_description_field', 4),
(113, '2021_10_01_210758_update_description_field_add', 4),
(114, '2021_10_01_212136_remove_old_category', 5),
(115, '2021_10_07_125003_create_suppliers_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL DEFAULT 1,
  `start_date` date DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `order_value` double(20,2) NOT NULL DEFAULT 0.00,
  `discount_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `amount_paid` double(20,2) NOT NULL DEFAULT 0.00,
  `advance_paid` int(11) DEFAULT 0,
  `total_quantity` int(11) DEFAULT NULL,
  `is_paid` int(11) DEFAULT 0,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `is_return` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `start_date`, `return_date`, `order_value`, `discount_amount`, `amount_paid`, `advance_paid`, `total_quantity`, `is_paid`, `comment`, `is_deleted`, `is_return`, `created_at`, `updated_at`) VALUES
(1, 1, '2021-08-16', '2021-08-10', 700.00, 10.00, 0.00, 0, 7, 0, NULL, 1, NULL, '2021-08-05 08:11:42', '2021-09-23 01:08:44'),
(2, 1, '2021-08-14', '2021-08-15', 200.00, 15.00, 0.00, 0, 4, 0, NULL, 1, 1, '2021-08-15 05:11:01', '2021-11-01 18:33:35'),
(3, 1, '2021-09-16', '2021-09-28', 5675.00, 4.00, 6371.00, 4, 3, 1, NULL, 1, NULL, '2021-09-16 19:59:01', '2021-10-08 06:54:22'),
(4, 1, '2021-09-22', '2021-09-30', 6300.00, 4.00, 6.00, 0, 4, 0, NULL, 1, 1, '2021-09-23 00:57:52', '2021-11-01 18:47:00'),
(5, 1, '2021-10-08', '2021-10-23', 4528.00, 4.00, 0.00, 0, 3, 0, NULL, 0, NULL, '2021-10-02 02:30:06', '2021-10-02 02:30:06'),
(6, 2, '2021-10-04', '2021-10-04', 1500.00, 10.00, 0.00, 0, 50, 0, NULL, 0, 1, '2021-10-04 11:23:45', '2021-10-04 11:25:02'),
(7, 2, '2021-10-04', '2021-10-04', 4000.00, 0.00, 4000.00, 4000, 40, 1, NULL, 0, NULL, '2021-10-04 11:26:16', '2021-10-04 11:26:17'),
(8, 1, '2021-10-06', '2021-10-07', 35800.00, 50.00, 35800.00, 35800, 5, 1, NULL, 1, NULL, '2021-10-06 04:47:59', '2021-10-08 06:54:31'),
(9, 1, '2021-10-06', '2021-10-06', 1500.00, 500.00, 1000.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 06:44:51', '2021-10-20 02:47:02'),
(10, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:06', '2021-10-20 02:42:10'),
(11, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:07', '2021-10-19 18:42:17'),
(12, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:07', '2021-10-19 18:35:49'),
(13, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:07', '2021-10-19 18:26:48'),
(14, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:08', '2021-10-19 18:25:03'),
(15, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:08', '2021-10-19 18:22:47'),
(16, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:08', '2021-10-19 18:06:55'),
(17, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:09', '2021-10-19 17:51:14'),
(18, 1, '2021-10-07', '2021-10-07', 1500.00, 1000.00, 500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-06 18:31:09', '2021-10-19 17:46:48'),
(19, 1, '2021-10-07', NULL, 1500.00, 500.00, 1000.00, 1000, 5, 0, NULL, 1, NULL, '2021-10-07 05:16:54', '2021-10-08 07:02:09'),
(21, 1, '2021-10-07', NULL, 4500.00, 500.00, 4000.00, 4000, 15, 1, NULL, 0, NULL, '2021-10-07 16:38:34', '2021-10-07 16:38:34'),
(22, 1, '2021-10-07', NULL, 1500.00, 20.00, 1480.00, 1480, 5, 1, NULL, 0, NULL, '2021-10-07 16:42:12', '2021-10-07 17:19:37'),
(23, 1, '2021-10-07', NULL, 2500.00, 500.00, 2000.00, 1000, 5, 1, NULL, 0, NULL, '2021-10-07 17:21:27', '2021-10-07 18:18:24'),
(24, 1, '2021-10-08', NULL, 1500.00, 50.00, 1450.00, 1450, 5, 1, NULL, 0, NULL, '2021-10-08 06:15:35', '2021-10-08 06:15:35'),
(25, 1, '2021-10-11', NULL, 17900.00, 1000.00, 16900.00, 15000, 5, 1, NULL, 0, NULL, '2021-10-11 07:48:32', '2021-10-19 17:43:59'),
(26, 1, '2021-10-11', NULL, 300.00, 50.00, 250.00, 250, 10, 1, NULL, 0, NULL, '2021-10-11 07:57:32', '2021-10-11 07:57:32'),
(27, 1, '2021-10-11', NULL, 2500.00, 1000.00, 1500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-11 08:00:29', '2021-10-19 17:41:27'),
(28, 1, '2021-10-11', NULL, 2500.00, 1000.00, 1500.00, 0, 5, 1, NULL, 0, NULL, '2021-10-11 08:01:39', '2021-10-19 17:35:36'),
(29, 1, '2021-10-11', NULL, 3580.00, 20.00, 3560.00, 3560, 1, 1, NULL, 0, NULL, '2021-10-11 08:03:59', '2021-10-11 08:03:59'),
(30, 1, '2021-10-11', NULL, 400.00, 0.00, 400.00, 100, 10, 1, NULL, 0, NULL, '2021-10-11 08:04:55', '2021-10-19 17:32:31'),
(31, 1, '2021-10-11', NULL, 3000.00, 100.00, 2900.00, 0, 10, 1, NULL, 0, NULL, '2021-10-11 08:06:03', '2021-10-18 05:56:19'),
(32, 3, '2021-10-18', NULL, 1000.00, 100.00, 900.00, 900, 2, 1, NULL, 0, NULL, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(33, 1, '2021-10-20', NULL, 2000.00, 1000.00, 1000.00, 1000, 4, 1, NULL, 0, NULL, '2021-10-19 18:09:20', '2021-10-19 18:09:21'),
(34, 3, '2021-10-24', NULL, 560.00, 60.00, 500.00, 200, 2, 1, NULL, 0, NULL, '2021-10-23 18:55:34', '2021-10-23 18:58:20'),
(35, 1, '2021-10-24', NULL, 165.00, 15.00, 150.00, 150, 5, 1, NULL, 0, NULL, '2021-10-23 18:59:48', '2021-10-23 18:59:48'),
(36, 3, '2021-10-24', NULL, 1540.00, 40.00, 500.00, 500, 8, 0, NULL, 0, NULL, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(37, 3, '2021-10-26', NULL, 1400.00, 400.00, 1000.00, 500, 10, 1, NULL, 0, NULL, '2021-10-26 06:05:59', '2021-10-26 06:07:07'),
(38, 3, '2021-10-26', NULL, 300.00, 20.00, 280.00, 80, 10, 1, NULL, 0, NULL, '2021-10-26 06:20:53', '2021-10-26 11:59:13'),
(39, 3, '2021-10-26', NULL, 500.00, 50.00, 450.00, 200, 2, 1, NULL, 0, NULL, '2021-10-26 12:04:05', '2021-10-26 12:12:34'),
(40, 3, '2021-10-26', NULL, 420.00, 20.00, 400.00, 100, 10, 1, NULL, 0, NULL, '2021-10-26 12:19:46', '2021-10-26 12:26:31'),
(41, 3, '2021-10-26', NULL, 1500.00, 150.00, 1350.00, 350, 5, 1, NULL, 0, NULL, '2021-10-26 12:35:30', '2021-10-26 12:36:23'),
(42, 1, '2021-10-26', NULL, 2750.00, 250.00, 2500.00, 500, 2, 1, NULL, 0, NULL, '2021-10-26 12:45:21', '2021-10-26 12:45:41'),
(43, 3, '2021-10-28', NULL, 2750.00, 50.00, 1000.00, 1000, 2, 0, NULL, 0, NULL, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(44, 3, '2021-10-28', NULL, 900.00, 20.00, 0.00, 0, 30, 0, NULL, 0, NULL, '2021-10-28 04:11:12', '2021-10-28 04:11:12'),
(45, 3, '2021-10-30', NULL, 500.00, 50.00, 100.00, 100, 2, 0, NULL, 0, 1, '2021-10-30 06:31:43', '2021-11-02 02:46:38'),
(46, 3, '2021-10-30', NULL, 350.00, 50.00, 300.00, 100, 10, 1, NULL, 0, NULL, '2021-10-30 06:33:56', '2021-10-30 06:36:18'),
(47, 3, '2021-11-02', '2021-11-02', 385.00, 5.00, 380.00, 80, 11, 1, NULL, 0, 1, '2021-11-01 18:19:36', '2021-11-02 02:59:01'),
(48, 3, '2021-11-02', NULL, 400.00, 50.00, 350.00, 100, 10, 1, NULL, 0, 1, '2021-11-01 18:24:08', '2021-11-02 02:51:32'),
(49, 3, '2021-11-02', NULL, 385.00, 85.00, 300.00, 100, 11, 1, NULL, 1, NULL, '2021-11-02 05:25:52', '2021-11-02 05:42:59'),
(50, 1, '2021-11-02', NULL, 750.00, 50.00, 700.00, 200, 25, 1, NULL, 1, NULL, '2021-11-02 05:30:43', '2021-11-02 05:40:15'),
(51, 2, '2021-11-02', NULL, 90.00, 0.00, 50.00, 50, 3, 0, NULL, 1, NULL, '2021-11-02 05:55:33', '2021-11-02 05:56:17'),
(52, 2, '2021-11-02', NULL, 270.00, 20.00, 100.00, 100, 9, 0, NULL, 1, NULL, '2021-11-02 05:58:57', '2021-11-02 06:00:55'),
(53, 2, '2021-11-02', NULL, 240.00, 40.00, 100.00, 100, 8, 0, NULL, 1, NULL, '2021-11-02 06:03:09', '2021-11-02 06:05:02'),
(54, 2, '2021-11-02', NULL, 180.00, 0.00, 0.00, 0, 6, 0, NULL, 1, NULL, '2021-11-02 06:06:44', '2021-11-02 06:07:03'),
(55, 2, '2021-11-02', NULL, 120.00, 0.00, 0.00, 0, 4, 0, NULL, 1, NULL, '2021-11-02 06:14:24', '2021-11-02 06:14:51'),
(56, 2, '2021-11-02', NULL, 470.00, 0.00, 0.00, 0, 15, 0, NULL, 1, NULL, '2021-11-02 06:17:35', '2021-11-02 06:17:52'),
(57, 2, '2021-11-10', NULL, 450.00, 50.00, 100.00, 100, 15, 0, NULL, 0, NULL, '2021-11-10 07:11:10', '2021-11-10 07:11:10'),
(58, 8, '2021-12-30', NULL, 500.00, 50.00, 100.00, 100, 2, 0, NULL, 0, NULL, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(59, 9, '2021-12-30', NULL, 2500.00, 20.00, 600.00, 500, 1, 0, NULL, 0, NULL, '2021-12-29 19:45:39', '2021-12-30 07:01:07'),
(60, 4, '2021-12-30', NULL, 1200.00, 50.00, 1150.00, 100, 40, 1, NULL, 0, NULL, '2021-12-30 07:07:29', '2022-10-26 18:42:09'),
(61, 4, '2021-12-30', NULL, 5000.00, 100.00, 4900.00, 1000, 2, 1, NULL, 0, NULL, '2021-12-30 07:22:26', '2021-12-30 07:25:26'),
(62, 1, '2022-10-28', NULL, 16210.00, 50.00, 16160.00, 14160, 17, 1, NULL, 0, NULL, '2022-10-28 06:15:05', '2022-10-28 06:22:22');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) NOT NULL,
  `price` double(20,2) NOT NULL DEFAULT 0.00,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `price`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 1, 48, 1, 100.00, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(2, 1, 2, 1, 200.00, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(3, 1, 8, 2, 200.00, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(4, 1, 49, 1, 100.00, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(5, 1, 9, 2, 100.00, 0, '2021-08-05 08:11:42', '2021-08-05 08:11:42'),
(6, 2, 49, 2, 100.00, 0, '2021-08-15 05:11:01', '2021-08-15 05:11:01'),
(7, 2, 3, 1, 100.00, 0, '2021-08-15 05:11:01', '2021-08-15 05:11:01'),
(8, 2, 48, 1, 0.00, 0, '2021-08-15 05:11:01', '2021-08-15 05:11:01'),
(9, 3, 49, 1, 3.00, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(10, 3, 15, 1, 43.00, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(11, 3, 14, 1, 332.00, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(12, 4, 49, 2, 200.00, 0, '2021-09-23 00:57:52', '2021-09-23 00:57:52'),
(13, 4, 10, 1, 200.00, 0, '2021-09-23 00:57:52', '2021-09-23 00:57:52'),
(14, 4, 18, 1, 300.00, 0, '2021-09-23 00:57:52', '2021-09-23 00:57:52'),
(15, 5, 60, 1, 65.00, 0, '2021-10-02 02:30:06', '2021-10-02 02:30:06'),
(16, 5, 59, 1, 109.00, 0, '2021-10-02 02:30:06', '2021-10-02 02:30:06'),
(17, 5, 58, 1, 109.00, 0, '2021-10-02 02:30:06', '2021-10-02 02:30:06'),
(18, 6, 61, 50, 1500.00, 0, '2021-10-04 11:23:45', '2021-10-04 11:23:45'),
(19, 7, 61, 40, 4000.00, 0, '2021-10-04 11:26:17', '2021-10-04 11:26:17'),
(20, 8, 62, 5, 17900.00, 0, '2021-10-06 04:47:59', '2021-10-06 04:47:59'),
(21, 9, 61, 5, 1500.00, 0, '2021-10-06 06:44:51', '2021-10-06 06:44:51'),
(22, 10, 61, 5, 1500.00, 0, '2021-10-06 18:31:06', '2021-10-06 18:31:06'),
(23, 11, 61, 5, 1500.00, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(24, 12, 61, 5, 1500.00, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(25, 13, 61, 5, 1500.00, 0, '2021-10-06 18:31:07', '2021-10-06 18:31:07'),
(26, 14, 61, 5, 1500.00, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(27, 15, 61, 5, 1500.00, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(28, 16, 61, 5, 1500.00, 0, '2021-10-06 18:31:08', '2021-10-06 18:31:08'),
(29, 17, 61, 5, 1500.00, 0, '2021-10-06 18:31:09', '2021-10-06 18:31:09'),
(30, 18, 61, 5, 1500.00, 0, '2021-10-06 18:31:09', '2021-10-06 18:31:09'),
(31, 19, 61, 5, 1500.00, 0, '2021-10-07 05:16:54', '2021-10-07 05:16:54'),
(32, 20, 61, 5, 1500.00, 0, '2021-10-07 05:30:55', '2021-10-07 05:30:55'),
(33, 21, 64, 15, 4500.00, 0, '2021-10-07 16:38:34', '2021-10-07 16:38:34'),
(34, 22, 65, 5, 1500.00, 0, '2021-10-07 16:42:12', '2021-10-07 16:42:12'),
(35, 23, 65, 5, 2500.00, 0, '2021-10-07 17:21:27', '2021-10-07 17:21:27'),
(36, 24, 65, 5, 1500.00, 0, '2021-10-08 06:15:35', '2021-10-08 06:15:35'),
(37, 25, 66, 5, 17900.00, 0, '2021-10-11 07:48:32', '2021-10-11 07:48:32'),
(38, 26, 63, 10, 300.00, 0, '2021-10-11 07:57:32', '2021-10-11 07:57:32'),
(39, 27, 66, 5, 2500.00, 0, '2021-10-11 08:00:29', '2021-10-11 08:00:29'),
(40, 28, 62, 5, 2500.00, 0, '2021-10-11 08:01:39', '2021-10-11 08:01:39'),
(41, 29, 66, 1, 3580.00, 0, '2021-10-11 08:03:59', '2021-10-11 08:03:59'),
(42, 30, 63, 10, 400.00, 0, '2021-10-11 08:04:55', '2021-10-11 08:04:55'),
(43, 31, 64, 10, 3000.00, 0, '2021-10-11 08:06:03', '2021-10-11 08:06:03'),
(44, 32, 66, 2, 1000.00, 0, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(45, 33, 66, 4, 2000.00, 0, '2021-10-19 18:09:21', '2021-10-19 18:09:21'),
(46, 34, 65, 2, 560.00, 0, '2021-10-23 18:55:34', '2021-10-23 18:55:34'),
(47, 35, 64, 5, 165.00, 0, '2021-10-23 18:59:48', '2021-10-23 18:59:48'),
(48, 36, 65, 2, 520.00, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(49, 36, 63, 4, 140.00, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(50, 36, 59, 2, 880.00, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(51, 37, 65, 5, 1250.00, 0, '2021-10-26 06:05:59', '2021-10-26 06:05:59'),
(52, 37, 63, 5, 150.00, 0, '2021-10-26 06:05:59', '2021-10-26 06:05:59'),
(53, 38, 64, 10, 300.00, 0, '2021-10-26 06:20:53', '2021-10-26 06:20:53'),
(54, 39, 65, 2, 500.00, 0, '2021-10-26 12:04:05', '2021-10-26 12:04:05'),
(55, 40, 63, 10, 420.00, 0, '2021-10-26 12:19:46', '2021-10-26 12:19:46'),
(56, 41, 62, 5, 1500.00, 0, '2021-10-26 12:35:30', '2021-10-26 12:35:30'),
(57, 42, 65, 1, 250.00, 0, '2021-10-26 12:45:21', '2021-10-26 12:45:21'),
(58, 42, 66, 1, 2500.00, 0, '2021-10-26 12:45:21', '2021-10-26 12:45:21'),
(59, 43, 66, 1, 2500.00, 0, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(60, 43, 65, 1, 250.00, 0, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(61, 44, 64, 5, 150.00, 0, '2021-10-28 04:11:12', '2021-10-28 04:11:12'),
(62, 44, 63, 10, 300.00, 0, '2021-10-28 04:11:12', '2021-10-28 04:11:12'),
(63, 44, 61, 15, 450.00, 0, '2021-10-28 04:11:12', '2021-10-28 04:11:12'),
(64, 45, 65, 2, 500.00, 0, '2021-10-30 06:31:43', '2021-10-30 06:31:43'),
(65, 46, 63, 10, 350.00, 0, '2021-10-30 06:33:56', '2021-10-30 06:33:56'),
(66, 47, 63, 11, 385.00, 0, '2021-11-01 18:19:36', '2021-11-01 18:19:36'),
(67, 48, 63, 10, 400.00, 0, '2021-11-01 18:24:08', '2021-11-01 18:24:08'),
(68, 49, 63, 11, 385.00, 0, '2021-11-02 05:25:52', '2021-11-02 05:25:52'),
(69, 50, 63, 25, 750.00, 0, '2021-11-02 05:30:43', '2021-11-02 05:30:43'),
(70, 51, 63, 3, 90.00, 0, '2021-11-02 05:55:33', '2021-11-02 05:55:33'),
(71, 52, 63, 9, 270.00, 0, '2021-11-02 05:58:57', '2021-11-02 05:58:57'),
(72, 53, 63, 8, 240.00, 0, '2021-11-02 06:03:09', '2021-11-02 06:03:09'),
(73, 54, 63, 6, 180.00, 0, '2021-11-02 06:06:44', '2021-11-02 06:06:44'),
(74, 55, 63, 4, 120.00, 0, '2021-11-02 06:14:24', '2021-11-02 06:14:24'),
(75, 56, 63, 10, 320.00, 0, '2021-11-02 06:17:35', '2021-11-02 06:17:35'),
(76, 56, 62, 5, 150.00, 0, '2021-11-02 06:17:35', '2021-11-02 06:17:35'),
(77, 57, 63, 15, 450.00, 0, '2021-11-10 07:11:10', '2021-11-10 07:11:10'),
(78, 58, 65, 2, 500.00, 0, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(79, 59, 66, 1, 2500.00, 0, '2021-12-29 19:45:39', '2021-12-29 19:45:39'),
(80, 60, 69, 40, 1200.00, 0, '2021-12-30 07:07:29', '2021-12-30 07:07:29'),
(81, 61, 66, 2, 5000.00, 0, '2021-12-30 07:22:26', '2021-12-30 07:22:26'),
(82, 62, 66, 6, 15000.00, 0, '2022-10-28 06:15:05', '2022-10-28 06:15:05'),
(83, 62, 65, 4, 1000.00, 0, '2022-10-28 06:15:05', '2022-10-28 06:15:05'),
(84, 62, 64, 7, 210.00, 0, '2022-10-28 06:15:05', '2022-10-28 06:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `supplier_id` int(30) DEFAULT NULL,
  `art_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` int(11) NOT NULL,
  `case` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit_price` double(20,2) NOT NULL DEFAULT 0.00,
  `trading_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mrp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `stk` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `supplier_id`, `art_no`, `stock`, `case`, `title`, `origin`, `unit_price`, `trading_price`, `mrp`, `image_path`, `is_deleted`, `stk`, `created_at`, `updated_at`, `category_id`, `description`) VALUES
(58, 1, '43453', 499, NULL, 'Lens 1', NULL, 300.00, NULL, NULL, 'uploads/1633539646.PNG', 0, 1, '2021-10-02 01:18:55', '2021-10-06 17:00:46', 6, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(59, 1, '43453', 497, NULL, 'Lens 2', NULL, 435.00, NULL, NULL, 'uploads/1633102134.PNG', 0, 1, '2021-10-02 01:28:54', '2021-10-23 19:13:43', 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(60, 1, '43453', 499, NULL, 'Lens 3', NULL, 300.00, NULL, NULL, 'uploads/1633102343.jpeg', 1, 1, '2021-10-02 01:32:23', '2021-10-04 11:47:19', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.'),
(61, 1, 'soap250', 185, NULL, 'Lux Soap', NULL, 30.00, NULL, NULL, 'uploads/1633586902.PNG', 0, 1, '2021-10-04 11:20:05', '2021-10-28 04:11:12', 4, 'lux soap'),
(62, 1, 'Argan250', 485, NULL, 'Argan Oil Body Butter (250ml)', NULL, 30.00, NULL, NULL, 'uploads/default.png', 0, 11, '2021-10-04 11:48:35', '2021-11-02 06:17:52', 3, 'Argan Oil Body Butter (250ml) Argan Oil Body Butter 250ml\r\n\r\nMoisturize your skin\r\n\r\nglow your skin\r\n\r\ncare your self'),
(63, 1, 'Argan250', 475, NULL, 'Argan Oil Body Butter (250ml)', NULL, 30.00, NULL, NULL, 'uploads/1633348176.jpg', 0, 21, '2021-10-04 11:49:36', '2021-11-10 07:11:10', 3, 'Argan Oil Body Butter (250ml) Argan Oil Body Butter 250ml\r\n\r\nMoisturize your skin\r\n\r\nglow your skin\r\n\r\ncare your self'),
(64, 1, '#656544', 208, NULL, 'English Soap', NULL, 30.00, NULL, NULL, 'uploads/1633624492.jpg', 0, 26, '2021-10-07 16:34:52', '2022-10-28 06:15:05', 3, 'very'),
(65, 1, '#65654454', 46, NULL, 'Perfume', NULL, 250.00, NULL, NULL, 'uploads/1633624847.jpg', 0, 16, '2021-10-07 16:40:47', '2022-10-28 06:15:05', 3, 'Paris'),
(66, 1, '#6565445454', 72, NULL, 'Sony Headphone', NULL, 2500.00, NULL, NULL, 'uploads/1633849440.jpg', 0, 17, '2021-10-10 07:04:00', '2022-10-28 06:15:05', 3, 'Good Quality'),
(67, 1, '#65654478', 50, NULL, 'Example', NULL, 30.00, NULL, NULL, 'uploads/1634928412.PNG', 1, NULL, '2021-10-22 18:46:52', '2021-10-22 18:58:19', 3, NULL),
(68, 1, '#656544885', 50, 12, 'Example Product', NULL, 35.00, '32', '40', 'uploads/1634929213.PNG', 0, 1, '2021-10-22 19:00:13', '2021-10-22 19:00:13', 3, NULL),
(69, 1, '#656544', 60, 12, 'test', 'BD', 30.00, '32', '40', 'uploads/1640844715.png', 0, 1, '2021-12-30 06:11:55', '2022-10-26 18:15:01', 4, NULL),
(70, 1, '#656544', 77, 12, 'epic', 'USA', 2500.00, '32', '4000', 'uploads/default.png', 0, 1, '2022-10-26 18:20:44', '2022-10-26 18:20:44', 3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_amount` double(20,2) NOT NULL DEFAULT 0.00,
  `discount` double(20,2) NOT NULL DEFAULT 0.00,
  `is_deleted` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receipts`
--

INSERT INTO `receipts` (`id`, `order_id`, `payment_amount`, `discount`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 3, 4.00, 4.00, 0, '2021-09-16 19:59:01', '2021-09-16 19:59:01'),
(2, 3, 5667.00, 0.00, 0, '2021-09-16 19:59:42', '2021-09-16 19:59:42'),
(3, 3, 700.00, 0.00, 0, '2021-09-23 01:11:24', '2021-09-23 01:11:24'),
(4, 2, 0.00, 0.00, 0, '2021-09-23 01:11:56', '2021-09-23 01:11:56'),
(5, 4, 6.00, 0.00, 0, '2021-09-23 01:12:52', '2021-09-23 01:12:52'),
(6, 7, 4000.00, 0.00, 0, '2021-10-04 11:26:17', '2021-10-04 11:26:17'),
(7, 8, 35800.00, 50.00, 0, '2021-10-06 04:47:59', '2021-10-06 04:47:59'),
(8, 19, 1000.00, 500.00, 0, '2021-10-07 05:16:54', '2021-10-07 05:16:54'),
(9, 20, 1400.00, 100.00, 0, '2021-10-07 05:30:55', '2021-10-07 05:30:55'),
(10, 21, 4000.00, 500.00, 0, '2021-10-07 16:38:34', '2021-10-07 16:38:34'),
(11, 22, 1480.00, 20.00, 0, '2021-10-07 16:42:12', '2021-10-07 16:42:12'),
(12, 22, 0.00, 0.00, 0, '2021-10-07 17:17:50', '2021-10-07 17:17:50'),
(13, 22, 0.00, 0.00, 0, '2021-10-07 17:19:02', '2021-10-07 17:19:02'),
(14, 22, 0.00, 0.00, 0, '2021-10-07 17:19:37', '2021-10-07 17:19:37'),
(15, 23, 1000.00, 500.00, 0, '2021-10-07 17:21:27', '2021-10-07 17:21:27'),
(16, 23, 1000.00, 0.00, 0, '2021-10-07 18:17:56', '2021-10-07 18:17:56'),
(17, 23, 0.00, 0.00, 0, '2021-10-07 18:18:24', '2021-10-07 18:18:24'),
(18, 24, 1450.00, 50.00, 0, '2021-10-08 06:15:35', '2021-10-08 06:15:35'),
(19, 25, 15000.00, 1000.00, 0, '2021-10-11 07:48:32', '2021-10-11 07:48:32'),
(20, 26, 250.00, 50.00, 0, '2021-10-11 07:57:32', '2021-10-11 07:57:32'),
(21, 29, 3560.00, 20.00, 0, '2021-10-11 08:03:59', '2021-10-11 08:03:59'),
(22, 30, 100.00, 0.00, 0, '2021-10-11 08:04:55', '2021-10-11 08:04:55'),
(23, 31, 2900.00, 0.00, 0, '2021-10-18 05:54:41', '2021-10-18 05:54:41'),
(24, 31, 0.00, 0.00, 0, '2021-10-18 05:56:19', '2021-10-18 05:56:19'),
(25, 32, 900.00, 100.00, 0, '2021-10-18 17:47:23', '2021-10-18 17:47:23'),
(26, 33, 1000.00, 1000.00, 0, '2021-10-19 18:09:21', '2021-10-19 18:09:21'),
(27, 34, 200.00, 60.00, 0, '2021-10-23 18:55:34', '2021-10-23 18:55:34'),
(28, 35, 150.00, 15.00, 0, '2021-10-23 18:59:48', '2021-10-23 18:59:48'),
(29, 36, 500.00, 40.00, 0, '2021-10-23 19:13:43', '2021-10-23 19:13:43'),
(30, 37, 500.00, 400.00, 0, '2021-10-26 06:05:59', '2021-10-26 06:05:59'),
(31, 38, 80.00, 20.00, 0, '2021-10-26 06:20:53', '2021-10-26 06:20:53'),
(32, 39, 200.00, 50.00, 0, '2021-10-26 12:04:05', '2021-10-26 12:04:05'),
(33, 40, 100.00, 20.00, 0, '2021-10-26 12:19:46', '2021-10-26 12:19:46'),
(34, 41, 350.00, 150.00, 0, '2021-10-26 12:35:30', '2021-10-26 12:35:30'),
(35, 42, 500.00, 250.00, 0, '2021-10-26 12:45:21', '2021-10-26 12:45:21'),
(36, 43, 1000.00, 50.00, 0, '2021-10-28 03:42:39', '2021-10-28 03:42:39'),
(37, 45, 100.00, 50.00, 0, '2021-10-30 06:31:43', '2021-10-30 06:31:43'),
(38, 46, 100.00, 50.00, 0, '2021-10-30 06:33:56', '2021-10-30 06:33:56'),
(39, 47, 80.00, 5.00, 0, '2021-11-01 18:19:36', '2021-11-01 18:19:36'),
(40, 48, 100.00, 50.00, 0, '2021-11-01 18:24:08', '2021-11-01 18:24:08'),
(41, 49, 100.00, 85.00, 0, '2021-11-02 05:25:52', '2021-11-02 05:25:52'),
(42, 50, 200.00, 50.00, 0, '2021-11-02 05:30:43', '2021-11-02 05:30:43'),
(43, 51, 50.00, 0.00, 0, '2021-11-02 05:55:33', '2021-11-02 05:55:33'),
(44, 52, 100.00, 20.00, 0, '2021-11-02 05:58:57', '2021-11-02 05:58:57'),
(45, 53, 100.00, 40.00, 0, '2021-11-02 06:03:09', '2021-11-02 06:03:09'),
(46, 57, 100.00, 50.00, 0, '2021-11-10 07:11:10', '2021-11-10 07:11:10'),
(47, 58, 100.00, 50.00, 0, '2021-12-29 19:42:46', '2021-12-29 19:42:46'),
(48, 59, 500.00, 20.00, 0, '2021-12-29 19:45:39', '2021-12-29 19:45:39'),
(49, 60, 100.00, 50.00, 0, '2021-12-30 07:07:29', '2021-12-30 07:07:29'),
(50, 61, 1000.00, 100.00, 0, '2021-12-30 07:22:26', '2021-12-30 07:22:26'),
(51, 62, 14160.00, 50.00, 0, '2022-10-28 06:15:05', '2022-10-28 06:15:05');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `invoice_prefix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#INV',
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tos` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `company_name`, `company_address`, `company_city`, `phone`, `email`, `invoice_prefix`, `image_path`, `tos`, `created_at`, `updated_at`) VALUES
(1, 'Pure Care BD', 'House #32 (3rd Floor); Road # 6B, Sector # 12', 'Uttara, Dhaka', '01713113550', 'titu2ctg@gmail.com', '#INV', 'uploads/logo/default_logo.jpg', 'Rental Terms\r\nThe following Rental Agreement is made between Deutsche vision (RENTOR) and (RENTEE) and is effective as of the date of \r\norder. Renters will lease the video production equipment package attached to this agreement to the rentee according to \r\nthe terms of this agreement.\r\n\r\n1. AUTHORIZATION.\r\nI/We hereby acknowledge receipt of a copy of this contract and hereby represent that I/we have the specific capacity \r\nand/or authority to enter into this contract and/or sign this contract on behalf of a corporate or like business entity.\r\nA copy of the rentees voter id card/company authorization card is required. Rentee is expected to collect and return the \r\nequipment and accessories to and from the Deutsche vision office on time. \r\n2. TERMS/RENTAL/PAYMENT.\r\nThis is a lease of the equipment and accessories (collectively referred to as equipment) described to the attached form \r\nand not a sale, conditional or otherwise. Rentee acknowledges that it has examined the equipment and it is in good \r\nworking condition. Renter guarantees all equipment to be operational when it leaves its premises and Renter cannot be \r\nresponsible for Rentees failure to operate the equipment properly. If Rentee fails to return the equipment by the return\r\ndate specified on the reverse for any reason, Rentee shall be liable for the daily cost of the equipment until returned \r\nor, if lost, replaced.\r\n3. AUTHORIZED USE.\r\nRentee agrees that the equipment shall be used only by duly qualified employees and/or agents of Renter. The equipment \r\nwill be used in strict compliance with standard operating procedures prescribed for the equipment and only for the \r\npurpose or production contemplated. Except in those circumstances where labour is supplied by Renter, Rentee shall keep \r\nthe equipment in its sole custody and control.\r\n4. CANCELLATION.\r\nSubject to the first day rental or forfeiture of deposit or an amount contractually established for this rental in \r\nadvance, whichever is greater.\r\n5. ALTERATIONS.\r\nRentee shall not make any alterations, additions or improvements to the equipment without the written consent of Renter.\r\n6.  INSURANCE.\r\nRentee hereby agrees that there are no insurances covered for every items of equipment. To ensure all operates properly,\r\nwe will send our staff as a companion of our equipment that you rent.\r\n7. LOSS AND DAMAGE.\r\nRentee shall be responsible for any loss or damage to the equipment from any cause whatsoever occurring after delivery \r\nto Rentee and Rentees acceptance of the equipment and before possession of the equipment is returned to Renter. In the \r\nevent of theft, Rentee agrees to immediately report loss to Renter and file a police report. Rentee shall keep the \r\nequipment in its and tear excepted. In the event the equipment is lost, stolen, missing, destroyed or not returned for \r\nany reason, the Rentee shall be responsible for the cost to replace the same item with the closest comparably equipped \r\nmodel, at current retail priced less any discounts available, without deduction for depreciation. If the equipment is \r\ndamaged, broken or returned incomplete, the Renter will make a determination of the extent of the damage and the \r\nrequired repairs. You and/or your representative(s) will have a reasonable amount of time to inspect the damage. In \r\ndetermining whether equipment shall be replaced or repaired, the Renters judgment shall be conclusive upon Rentee. \r\nShould Renter determine that the equipment must be replaced, Rentee will be responsible for the cost to replace the \r\nsame item or the closest comparably equipped model, at current retail prices less any discounts available, without \r\ndeduction for depreciation. Rentee shall be responsible and shall pay Rentor the repair or replacement cost of any \r\nequipment damaged, lost, stolen, missing, broken or otherwise.Rentee shall also be liable for any loss or damage \r\nsustained by Rentor including but not limited to the daily rental value of the equipment from the pick-up date until \r\nreturn, repair, and/or replacement. during the rental term\r\n8. SURRENDER.\r\nUpon the expiration or earlier termination of this lease, Rentee shall return the equipment and all accessories \r\n(including, but not limited to, sensors, connectors, cable, terminations, power cords, operation or maintenance manuals, \r\nand test charts furnished by Renter) to Renter in the same condition as at the delivery to Rentee, ordinary wear and \r\ntear excepted, Renters acceptance of the return of the equipment is not a waiver by it of any claims it may have against \r\nRentee nor a waiver of claims for latent or patent damage to the equipment.\r\n9. INDEMNIFICATION.\r\nRentee agrees to indemnify the Renter and to hold the Renter, its employees and agents harmless from and against any \r\nand all losses, damages, claims, demands or liability of any kind of nature whatsoever, including legal expenses, \r\narising from the use, condition (including, without  latent and other defects) or operation of the equipment, and by \r\nwhosoever used or operated.\r\n10. ENTIRE AGREEMENT.\r\nThis contract contains the complete and final agreement between Renter and Rentee, and no other agreement in any way \r\nmodifying any of said terms and conditions will be binding upon Renter unless made in writing and signed by Renter.', NULL, '2021-10-04 13:34:29');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE `suppliers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `organization_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trade_license` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`id`, `name`, `phone`, `organization_name`, `organization_address`, `trade_license`, `is_deleted`, `created_at`, `updated_at`) VALUES
(1, 'Shekar Mollick', '01727433484', 'Rangamati Std.', '125 lalkhan  bazar amin plaza', '#254666585456', 0, '2021-10-10 04:41:32', '2021-10-10 05:46:33'),
(3, 'Sunny Mollick', '+8801636524141', 'Rangamati Std.', '125 lalkhan amin plaza', '#254666585456', 0, '2022-10-26 18:23:09', '2022-10-26 18:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `is_admin`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Nokib', 'admin@gmail.com', NULL, 1, '$2y$10$/8ylYbJu5ZWQXjGD/eoBLOsDVxiui4IVvM1z3RqhJFdBbEnm3GKN.', NULL, NULL, NULL),
(5, 'Shihab', 'shihab@test.com', NULL, 0, '$2y$10$VL4vi0fAlM85RXIPnGAAjubXC.36OalEEukSmu24oWERkdnytocDe', NULL, '2021-06-11 23:46:43', '2021-06-11 23:46:43'),
(6, 'Zohir Huq', 'zohir.huq@gmail.com', NULL, 1, '$2y$10$NDRG57B/abGdHNVSMFYcq.1i4ZaTgBpMZkhKXKkbimp6PZzjL5LQO', '8UfzD0kxmriQ3O75QiEnjmYdK9jnRF86LLV7qJIiw8WiHfzrMLsmuPBMpsI2', '2021-06-11 23:48:38', '2021-06-11 23:48:38'),
(7, 'Sunny Mollick', 'sunnymollick@gmail.com', NULL, 0, '$2y$10$tMO/a2uJcsSiwX63gUxcd.tSSEtqvfiBCgQuMRu8XEKuFdT5CU3ZG', NULL, '2021-10-09 17:46:47', '2021-10-09 17:46:47'),
(8, 'Rodro Mollick', 'rodromollick@gmail.com', NULL, 2, '$2y$10$2DJNoWR/WPDJOPAl87y4jeySlS3kq66dFZKxpqX2/ah6b4ZoDGVRS', NULL, '2021-10-09 18:29:36', '2022-04-19 16:47:40'),
(9, 'Jawad Bin Alam', 'jawad@gmail.com', NULL, 0, '$2y$10$i6RCSpCvjt9TWbYVda1G1Oxoau5JTTTmu0DRZWQ3lyFkiS8PG3CxO', NULL, '2022-04-19 15:48:25', '2022-04-19 16:46:57'),
(10, 'Akbar Hossain', 'akbar@gmail.com', NULL, 2, '$2y$10$aaKS2oosHrVKQBglhtID5.Cs4mcaKyPfZoXFSHCgJ2fyutMj4irJe', NULL, '2022-04-19 16:13:26', '2022-04-19 16:13:26'),
(11, 'sajeeb saha', 'sajeebsaha@gmail.com', NULL, 2, '$2y$10$70dIRkU6Nclv7df./WLCrejj7Qe6EUOLIVf35KtHGJnCVNrLxhAYK', NULL, '2022-10-28 06:50:42', '2022-10-28 06:51:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundles`
--
ALTER TABLE `bundles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bundle_products`
--
ALTER TABLE `bundle_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `damages`
--
ALTER TABLE `damages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demographies`
--
ALTER TABLE `demographies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suppliers`
--
ALTER TABLE `suppliers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bundles`
--
ALTER TABLE `bundles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bundle_products`
--
ALTER TABLE `bundle_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `damages`
--
ALTER TABLE `damages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `demographies`
--
ALTER TABLE `demographies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suppliers`
--
ALTER TABLE `suppliers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
