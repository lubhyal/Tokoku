-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2021 at 04:35 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_04_18_101953_create_products_table', 1),
(5, '2020_04_18_132841_create_profiles_table', 1),
(6, '2020_04_21_154729_create_stocks_table', 1),
(7, '2020_04_24_084350_create_orders_table', 1),
(8, '2020_04_26_123151_create_reminders_table', 1),
(9, '2020_04_27_044831_create_newsletters_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `newsletters`
--

CREATE TABLE `newsletters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cart` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phonenumber` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `created_at`, `updated_at`, `user_id`, `name`, `cart`, `phonenumber`, `email`, `payment_id`) VALUES
(2, '2021-09-26 13:54:29', '2021-09-26 13:54:29', 5, 'coba', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:1:{i:0;a:5:{s:8:\"quantity\";i:1;s:5:\"price\";i:11;s:4:\"size\";s:2:\"34\";s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:36;}}s:13:\"totalQuantity\";i:1;s:10:\"totalPrice\";i:11;}', '5436346343343', 'aaa@asd.com', NULL),
(3, '2021-09-26 16:17:45', '2021-09-26 16:17:45', 5, 'cobaaa', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:3:{i:0;a:4:{s:8:\"quantity\";i:1;s:5:\"price\";i:10999475;s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:37;}i:1;a:4:{s:8:\"quantity\";i:1;s:5:\"price\";i:11;s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:36;}i:2;a:4:{s:8:\"quantity\";i:1;s:5:\"price\";i:10999475;s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:37;}}s:13:\"totalQuantity\";i:3;s:10:\"totalPrice\";i:21998961;}', '8932323232', 'awef@dada.com', NULL),
(4, '2021-09-26 16:23:36', '2021-09-26 16:23:36', 7, 'cobaa', 'O:8:\"App\\Cart\":3:{s:5:\"items\";a:2:{i:0;a:4:{s:8:\"quantity\";i:1;s:5:\"price\";i:11;s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:36;s:4:\"name\";s:4:\"coba\";s:5:\"price\";i:11;s:5:\"image\";s:53:\"products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png\";s:4:\"desc\";s:3:\"131\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 18:52:45\";s:10:\"updated_at\";s:19:\"2021-09-26 18:52:45\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:36;}i:1;a:4:{s:8:\"quantity\";i:1;s:5:\"price\";i:10999475;s:4:\"item\";O:11:\"App\\Product\":27:{s:13:\"\0*\0connection\";s:5:\"mysql\";s:8:\"\0*\0table\";s:8:\"products\";s:13:\"\0*\0primaryKey\";s:2:\"id\";s:10:\"\0*\0keyType\";s:3:\"int\";s:12:\"incrementing\";b:1;s:7:\"\0*\0with\";a:0:{}s:12:\"\0*\0withCount\";a:0:{}s:10:\"\0*\0perPage\";i:15;s:6:\"exists\";b:1;s:18:\"wasRecentlyCreated\";b:0;s:13:\"\0*\0attributes\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:11:\"\0*\0original\";a:8:{s:2:\"id\";i:37;s:4:\"name\";s:3:\"aaa\";s:5:\"price\";i:10999475;s:5:\"image\";s:53:\"products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png\";s:4:\"desc\";s:20:\"sakgfbjfefhwuefbiueh\";s:8:\"quantity\";i:1;s:10:\"created_at\";s:19:\"2021-09-26 22:21:08\";s:10:\"updated_at\";s:19:\"2021-09-26 22:21:08\";}s:10:\"\0*\0changes\";a:0:{}s:8:\"\0*\0casts\";a:0:{}s:17:\"\0*\0classCastCache\";a:0:{}s:8:\"\0*\0dates\";a:0:{}s:13:\"\0*\0dateFormat\";N;s:10:\"\0*\0appends\";a:0:{}s:19:\"\0*\0dispatchesEvents\";a:0:{}s:14:\"\0*\0observables\";a:0:{}s:12:\"\0*\0relations\";a:0:{}s:10:\"\0*\0touches\";a:0:{}s:10:\"timestamps\";b:1;s:9:\"\0*\0hidden\";a:0:{}s:10:\"\0*\0visible\";a:0:{}s:11:\"\0*\0fillable\";a:0:{}s:10:\"\0*\0guarded\";a:1:{i:0;s:1:\"*\";}}s:10:\"product_id\";i:37;}}s:13:\"totalQuantity\";i:2;s:10:\"totalPrice\";i:10999486;}', '34234235435345', 'aa@adsa.com', NULL);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `desc`, `quantity`, `created_at`, `updated_at`) VALUES
(36, 'coba', 11, 'products/7GYOVH5pxstCyFgIxJqt0kIeHg3tbOPcGodnlkvW.png', '131', 1, '2021-09-26 11:52:45', '2021-09-26 11:52:45'),
(37, 'aaa', 10999475, 'products/2GSgN1fD8gFCEF4UVXuwcdoRm86gE8EG8acrhWKT.png', 'sakgfbjfefhwuefbiueh', 1, '2021-09-26 15:21:08', '2021-09-26 15:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `phonenumber` bigint(20) DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zipcode` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `phonenumber`, `country`, `city`, `address`, `zipcode`, `created_at`, `updated_at`) VALUES
(1, 1, 35996492834, 'Indonesia', 'Banyuwangi', 'lalalla', 42132, NULL, '2021-08-25 00:58:36'),
(2, 2, 8215551234, 'Indonesia', 'Medan', 'Danau Toba', 27321, NULL, NULL),
(3, 3, 42912345, 'United State of America', 'Seattle', 'Downtown Seattle ST 17', 78231, NULL, NULL),
(4, 4, 32912345, 'China', 'Guangzhou', 'ST 23a', 78213, NULL, NULL),
(5, 5, NULL, NULL, NULL, NULL, NULL, '2021-09-20 03:03:25', '2021-09-20 03:03:25'),
(6, 6, NULL, NULL, NULL, NULL, NULL, '2021-09-26 11:12:31', '2021-09-26 11:12:31'),
(7, 7, NULL, NULL, NULL, NULL, NULL, '2021-09-26 16:22:53', '2021-09-26 16:22:53');

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reminder` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reminders`
--

INSERT INTO `reminders` (`id`, `reminder`, `created_at`, `updated_at`) VALUES
(1, 'Type Something', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `product_id`, `quantity`, `created_at`, `updated_at`) VALUES
(60, 36, 9, '2021-09-26 14:27:06', '2021-09-26 16:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Customer',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@tokoku.com', NULL, '$2y$10$eUZiy2RFuiJZemNAuF/xauJwe1.NSOCERgl99gFVYBk1rugGrQVj2', 'Admin', NULL, NULL, NULL),
(5, 'coba', 'coba@gmail.com', NULL, '$2y$10$YOXAzIUigB0Ucvyq0Z74feCpIuD3YkuSyKdtYTBPvoBv2VfTpgjo2', 'Customer', NULL, '2021-09-20 03:03:25', '2021-09-20 03:03:25'),
(6, 'sholeh', 'msholehsanjaya78@gmail.com', NULL, '$2y$10$9jKZVAD6jhiq8ligOfo2OeOXnrqba/bSBg3SXP7wNls0gGVQFSP96', 'Customer', NULL, '2021-09-26 11:12:31', '2021-09-26 11:12:31'),
(7, 'cobaa', 'cobaa@q.com', NULL, '$2y$10$TARvyyqDTf/6qrsUOm1EAekd4u8qnctH/MjFs3fka5lmcKw2qCLG.', 'Customer', NULL, '2021-09-26 16:22:53', '2021-09-26 16:22:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletters`
--
ALTER TABLE `newsletters`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_index` (`user_id`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_product_id_index` (`product_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `newsletters`
--
ALTER TABLE `newsletters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
