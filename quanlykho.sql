-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2019 lúc 03:07 PM
-- Phiên bản máy phục vụ: 10.1.29-MariaDB
-- Phiên bản PHP: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykho`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_exports`
--

CREATE TABLE `bill_exports` (
  `id_export` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_exports`
--

INSERT INTO `bill_exports` (`id_export`, `id_user`, `name`, `created_at`, `updated_at`) VALUES
(2, 3, 'huu tri', '2019-12-08 10:16:00', '2019-12-08 10:16:00'),
(3, 3, 'huu tri', '2019-12-08 10:34:04', '2019-12-08 10:34:04'),
(4, 3, 'huu tri', '2019-12-08 10:50:11', '2019-12-08 10:50:11'),
(5, 3, 'huu tri', '2019-12-08 10:51:45', '2019-12-08 10:51:45'),
(6, 3, 'huu tri', '2019-12-08 10:55:52', '2019-12-08 10:55:52'),
(7, 3, 'huu tri', '2019-12-08 19:45:26', '2019-12-08 19:45:26'),
(8, 3, 'huu tri', '2019-12-08 20:26:57', '2019-12-08 20:26:57'),
(9, 3, 'huu tri', '2019-12-08 21:01:27', '2019-12-08 21:01:27'),
(10, 3, 'huu tri', '2019-12-08 21:01:28', '2019-12-08 21:01:28'),
(11, 3, 'huu tri', '2019-12-08 23:47:57', '2019-12-08 23:47:57'),
(12, 3, 'huu tri', '2019-12-09 01:23:29', '2019-12-09 01:23:29'),
(13, 3, 'huu tri', '2019-12-09 01:31:26', '2019-12-09 01:31:26'),
(14, 6, 'Hồ Khánh Duy', '2019-12-13 04:07:00', '2019-12-13 04:07:00'),
(15, 6, 'Hồ Khánh Duy', '2019-12-13 07:03:49', '2019-12-13 07:03:49'),
(16, 6, 'Hồ Khánh Duy', '2019-12-13 07:04:06', '2019-12-13 07:04:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_imports`
--

CREATE TABLE `bill_imports` (
  `id_import` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bill_imports`
--

INSERT INTO `bill_imports` (`id_import`, `id_user`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'tri', '2019-12-04 08:38:47', '2019-12-04 08:38:47'),
(2, 3, 'huu tri', '2019-12-04 09:03:59', '2019-12-04 09:03:59'),
(7, 3, 'huu tri', '2019-12-04 20:40:27', '2019-12-04 20:40:27'),
(8, 3, 'huu tri', '2019-12-04 23:07:52', '2019-12-04 23:07:52'),
(9, 3, 'huu tri', '2019-12-04 23:09:16', '2019-12-04 23:09:16'),
(10, 3, 'huu tri', '2019-12-04 23:15:15', '2019-12-04 23:15:15'),
(11, 3, 'huu tri', '2019-12-04 23:15:52', '2019-12-04 23:15:52'),
(12, 3, 'huu tri', '2019-12-04 23:23:35', '2019-12-04 23:23:35'),
(13, 3, 'huu tri', '2019-12-04 23:26:45', '2019-12-04 23:26:45'),
(14, 3, 'huu tri', '2019-12-05 00:44:24', '2019-12-05 00:44:24'),
(15, 3, 'huu tri', '2019-12-05 09:41:12', '2019-12-05 09:41:12'),
(16, 3, 'huu tri', '2019-12-05 09:48:42', '2019-12-05 09:48:42'),
(17, 3, 'huu tri', '2019-12-07 00:04:06', '2019-12-07 00:04:06'),
(18, 3, 'huu tri', '2019-12-07 00:07:26', '2019-12-07 00:07:26'),
(19, 3, 'huu tri', '2019-12-07 00:15:38', '2019-12-07 00:15:38'),
(20, 3, 'huu tri', '2019-12-07 01:05:14', '2019-12-07 01:05:14'),
(21, 3, 'huu tri', '2019-12-07 01:12:04', '2019-12-07 01:12:04'),
(22, 3, 'huu tri', '2019-12-07 02:45:17', '2019-12-07 02:45:17'),
(23, 3, 'huu tri', '2019-12-07 04:46:57', '2019-12-07 04:46:57'),
(24, 3, 'huu tri', '2019-12-08 10:28:02', '2019-12-08 10:28:02'),
(25, 3, 'huu tri', '2019-12-08 10:33:50', '2019-12-08 10:33:50'),
(26, 3, 'huu tri', '2019-12-08 10:34:43', '2019-12-08 10:34:43'),
(27, 3, 'huu tri', '2019-12-08 19:39:44', '2019-12-08 19:39:44'),
(28, 3, 'huu tri', '2019-12-08 19:43:38', '2019-12-08 19:43:38'),
(29, 3, 'huu tri', '2019-12-08 19:45:08', '2019-12-08 19:45:08'),
(30, 3, 'huu tri', '2019-12-08 20:20:38', '2019-12-08 20:20:38'),
(31, 3, 'huu tri', '2019-12-08 20:27:19', '2019-12-08 20:27:19'),
(32, 3, 'huu tri', '2019-12-08 21:01:55', '2019-12-08 21:01:55'),
(33, 3, 'huu tri', '2019-12-08 23:47:30', '2019-12-08 23:47:30'),
(34, 3, 'huu tri', '2019-12-08 23:49:51', '2019-12-08 23:49:51'),
(35, 3, 'huu tri', '2019-12-08 23:53:37', '2019-12-08 23:53:37'),
(36, 3, 'huu tri', '2019-12-09 01:15:03', '2019-12-09 01:15:03'),
(37, 3, 'huu tri', '2019-12-09 01:23:17', '2019-12-09 01:23:17'),
(38, 3, 'huu tri', '2019-12-09 01:28:24', '2019-12-09 01:28:24'),
(39, 3, 'huu tri', '2019-12-09 08:01:20', '2019-12-09 08:01:20'),
(40, 3, 'huu tri', '2019-12-10 06:24:49', '2019-12-10 06:24:49'),
(41, 3, 'huu tri', '2019-12-11 11:40:21', '2019-12-11 11:40:21'),
(42, 6, 'Hồ Khánh Duy', '2019-12-13 04:05:15', '2019-12-13 04:05:15'),
(43, 6, 'Hồ Khánh Duy', '2019-12-13 04:10:46', '2019-12-13 04:10:46'),
(44, 6, 'Hồ Khánh Duy', '2019-12-13 04:15:24', '2019-12-13 04:15:24'),
(45, 5, 'Duy', '2019-12-13 05:44:44', '2019-12-13 05:44:44'),
(46, 5, 'Duy', '2019-12-13 05:45:59', '2019-12-13 05:45:59'),
(47, 6, 'Hồ Khánh Duy', '2019-12-13 07:04:17', '2019-12-13 07:04:17');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `catalogs`
--

CREATE TABLE `catalogs` (
  `id_cata` int(11) NOT NULL,
  `name_cata` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `catalogs`
--

INSERT INTO `catalogs` (`id_cata`, `name_cata`, `created_at`, `updated_at`) VALUES
(1, 'Áo thun', '2019-12-05 02:27:04', '2019-10-20 03:21:07'),
(2, 'Thực phẩm', '2019-12-05 02:27:04', '2019-10-20 07:16:28'),
(3, 'Đồ gia dụng', '2019-12-05 02:27:04', '2019-10-20 08:42:22'),
(4, 'Tủ lạnh', '2019-12-05 02:27:04', '2019-10-20 18:40:56'),
(5, 'Xà bông', '2019-12-05 02:27:04', '2019-10-21 00:08:17'),
(6, 'hoa', '2019-12-05 02:27:04', '2019-10-21 01:03:44'),
(7, 'quần kaki', '2019-12-05 02:27:04', '2019-10-23 00:43:08'),
(8, 'Ấm điện', '2019-12-05 02:27:04', '2019-10-25 02:27:21'),
(9, 'Ấm điện siêu tốc', '2019-12-05 02:27:04', '2019-11-05 00:41:36'),
(10, 'Áo thun', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(11, 'Thực phẩm', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(12, 'Đồ gia dụng', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(13, 'Tủ lạnh', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(14, 'Xà bông', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(15, 'hoa', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(16, 'quần kaki', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(17, 'Ấm điện', '2019-12-09 07:23:20', '2019-12-09 07:23:20'),
(23, 'Áo thun', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(24, 'Thực phẩm', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(25, 'Đồ gia dụng', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(26, 'Tủ lạnh', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(27, 'Xà bông', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(28, 'hoa', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(29, 'quần kaki', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(30, 'Ấm điện', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(31, 'Ấm điện siêu tốc', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(32, 'Áo thun', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(33, 'Thực phẩm', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(34, 'Đồ gia dụng', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(35, 'Tủ lạnh', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(36, 'Xà bông', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(37, 'hoa', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(38, 'quần kaki', '2019-12-13 04:25:10', '2019-12-13 04:25:10'),
(39, 'Ấm điện', '2019-12-13 04:25:10', '2019-12-13 04:25:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `checkeds`
--

CREATE TABLE `checkeds` (
  `id_check` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `real_quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_exports`
--

CREATE TABLE `detail_exports` (
  `id_detail_export` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `id_export` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_exports`
--

INSERT INTO `detail_exports` (`id_detail_export`, `id_pro`, `id_export`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 11, 2, 2, '2019-12-08 10:30:20', '2019-12-08 10:30:20'),
(2, 11, 6, 3, '2019-12-08 19:40:33', '2019-12-08 19:40:33'),
(3, 11, 10, 2, '2019-12-08 21:01:39', '2019-12-08 21:01:39'),
(4, 11, 12, 5, '2019-12-09 01:24:01', '2019-12-09 01:24:01'),
(5, 11, 13, 10, '2019-12-09 01:31:42', '2019-12-09 01:31:42'),
(6, 12, 14, 2, '2019-12-13 04:07:09', '2019-12-13 04:07:09'),
(7, 12, 14, 6, '2019-12-13 04:07:23', '2019-12-13 04:07:23'),
(8, 11, 14, 6, '2019-12-13 04:07:24', '2019-12-13 04:07:24');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `detail_imports`
--

CREATE TABLE `detail_imports` (
  `id_detail_import` int(11) NOT NULL,
  `id_import` int(11) NOT NULL,
  `id_pro` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `detail_imports`
--

INSERT INTO `detail_imports` (`id_detail_import`, `id_import`, `id_pro`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 20, 6, 10, '2019-12-07 01:10:09', '2019-12-07 01:10:09'),
(2, 20, 5, 10, '2019-12-07 01:10:59', '2019-12-07 01:10:59'),
(3, 22, 6, 15, '2019-12-07 02:45:54', '2019-12-07 02:45:54'),
(4, 22, 5, 1, '2019-12-07 04:00:29', '2019-12-07 04:00:29'),
(5, 23, 11, 1, '2019-12-07 23:17:09', '2019-12-07 23:17:09'),
(6, 24, 11, 2, '2019-12-08 10:28:25', '2019-12-08 10:28:25'),
(7, 26, 11, 2, '2019-12-08 10:56:14', '2019-12-08 10:56:14'),
(8, 27, 11, 2, '2019-12-08 19:40:04', '2019-12-08 19:40:04'),
(9, 32, 11, 32, '2019-12-08 21:02:05', '2019-12-08 21:02:05'),
(10, 36, 11, 3, '2019-12-09 01:16:06', '2019-12-09 01:16:06'),
(11, 36, 11, 3, '2019-12-09 01:16:06', '2019-12-09 01:16:06'),
(12, 36, 11, 3, '2019-12-09 01:16:07', '2019-12-09 01:16:07'),
(13, 36, 11, 2, '2019-12-09 01:16:23', '2019-12-09 01:16:23'),
(14, 38, 11, 5, '2019-12-09 01:29:58', '2019-12-09 01:29:58'),
(15, 38, 11, 5, '2019-12-09 01:30:06', '2019-12-09 01:30:06'),
(16, 38, 11, 5, '2019-12-09 01:30:07', '2019-12-09 01:30:07'),
(17, 42, 12, 5, '2019-12-13 04:05:26', '2019-12-13 04:05:26'),
(18, 43, 12, 10, '2019-12-10 04:11:03', '2019-12-10 04:11:03'),
(19, 44, 12, 14, '2019-12-12 04:15:33', '2019-12-13 04:15:33'),
(20, 45, 24, 4, '2019-12-12 05:45:06', '2019-12-13 05:45:06'),
(21, 46, 11, 3, '2019-12-13 05:46:16', '2019-12-13 05:46:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_11_24_113101_add_columm_to_users', 2),
(5, '2019_11_27_111508_add_id_role_users', 3),
(6, '2019_11_27_111827_add_id_role_1_users', 4),
(7, '2019_12_11_183254_add_roles_table', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id_pro` int(11) NOT NULL,
  `id_cata` int(11) NOT NULL,
  `code_pro` int(13) NOT NULL,
  `id_promotion` int(13) NOT NULL,
  `id_unit` int(11) NOT NULL,
  `id_vendor` int(11) NOT NULL,
  `name_pro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `images` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id_pro`, `id_cata`, `code_pro`, `id_promotion`, `id_unit`, `id_vendor`, `name_pro`, `price`, `quantity`, `created_at`, `updated_at`, `images`) VALUES
(2, 9, 121111, 1, 1, 1, 'thịt heo', 10000, 33, '2019-12-03 20:46:29', '2019-12-03 20:46:29', NULL),
(5, 1, 747, 1, 4, 2, 'thịt heo bò', 12, 13, '2019-12-07 11:00:29', '2019-12-07 04:00:29', NULL),
(6, 1, 74757465, 1, 4, 1, 'giày', 12, 60, '2019-12-07 09:45:54', '2019-12-07 02:45:54', NULL),
(8, 3, 121233, 2, 1, 2, 'dép', 12, 2, '2019-12-07 04:18:51', '2019-12-07 04:18:51', NULL),
(9, 3, 121324, 2, 1, 1, 'giày', 12, 2, '2019-12-07 04:24:00', '2019-12-07 04:24:00', NULL),
(11, 1, 2111214535, 1, 1, 2, 'Jacket', 12, 42, '2019-12-13 12:46:17', '2019-12-13 05:46:17', NULL),
(12, 3, 12345, 2, 2, 2, 'thịt heo gà', 424, 22, '2019-12-13 11:15:33', '2019-12-13 04:15:33', NULL),
(13, 3, 1234545, 2, 5, 1, 'dép lê', 565, 33, '2019-12-10 06:32:36', '2019-12-10 06:32:36', ''),
(24, 2, 56325, 2, 1, 1, 'giày bata', 12, 37, '2019-12-13 12:45:06', '2019-12-13 05:45:06', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `promotions`
--

CREATE TABLE `promotions` (
  `id_promotion` int(13) NOT NULL,
  `code_promotion` int(13) DEFAULT NULL,
  `sale` float DEFAULT NULL,
  `from_date` date DEFAULT NULL,
  `to_date` date DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `promotions`
--

INSERT INTO `promotions` (`id_promotion`, `code_promotion`, `sale`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(1, 12222, 25, '2019-10-01', '2019-10-10', '2019-11-03 16:49:07', '2019-11-03 09:49:07'),
(2, 8055, 23333, '2019-10-10', '2019-10-20', '2019-11-04 23:55:50', '2019-11-04 23:55:50'),
(3, 12222, 25, '2019-10-01', '2019-10-10', '2019-12-09 08:23:43', '2019-12-09 08:23:43'),
(4, 8055, 23333, '2019-10-10', '2019-10-20', '2019-12-09 08:23:43', '2019-12-09 08:23:43'),
(6, 12222, 25, '2019-10-01', '2019-10-10', '2019-12-13 04:47:08', '2019-12-13 04:47:08'),
(7, 8055, 23333, '2019-10-10', '2019-10-20', '2019-12-13 04:47:08', '2019-12-13 04:47:08'),
(8, 12222, 25, '2019-10-01', '2019-10-10', '2019-12-13 04:47:08', '2019-12-13 04:47:08'),
(9, 8055, 23333, '2019-10-10', '2019-10-20', '2019-12-13 04:47:08', '2019-12-13 04:47:08');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', NULL, NULL, NULL),
(2, 'stocker', 'Quản lý kho', NULL, NULL, NULL),
(3, 'counting', 'Kế toán', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `units`
--

CREATE TABLE `units` (
  `id_unit` int(11) NOT NULL,
  `name_unit` text COLLATE utf8_unicode_ci NOT NULL,
  `acronym` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `units`
--

INSERT INTO `units` (`id_unit`, `name_unit`, `acronym`, `created_at`, `updated_at`) VALUES
(1, 'Chai', 'CH', '2019-12-05 02:32:09', '2019-11-22 03:14:50'),
(2, 'Chục', 'CHU', '2019-12-05 02:32:09', '2019-11-03 08:55:37'),
(4, 'Cái', 'C', '2019-12-05 02:32:09', '2019-10-31 01:11:43'),
(5, 'kilo', 'kg', '2019-11-03 09:02:21', '2019-11-03 09:02:21'),
(6, 'Lốc', 'LO', '2019-12-05 02:32:09', '2019-11-05 00:55:08'),
(7, 'Chiếc', 'CHI', '2019-12-05 02:32:09', '2019-11-05 00:55:08'),
(8, 'Hộp', 'H', '2019-12-05 02:32:09', '2019-11-05 00:55:08'),
(9, 'Thùng', 'T', '2019-12-05 02:32:09', '2019-11-05 00:55:08'),
(10, 'Chai', 'CH', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(11, 'Chục', 'CHU', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(12, 'Cái', 'C', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(13, 'kilo', 'kg', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(14, 'Lốc', 'LO', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(15, 'Chiếc', 'CHI', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(16, 'Hộp', 'H', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(17, 'Thùng', 'T', '2019-12-09 07:43:42', '2019-12-09 07:43:42'),
(19, 'Chai', 'CH', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(20, 'Chục', 'CHU', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(21, 'Cái', 'C', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(22, 'kilo', 'kg', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(23, 'Lốc', 'LO', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(24, 'Chiếc', 'CHI', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(25, 'Hộp', 'H', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(26, 'Thùng', 'T', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(27, 'Chai', 'CH', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(28, 'Chục', 'CHU', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(29, 'Cái', 'C', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(30, 'kilo', 'kg', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(31, 'Lốc', 'LO', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(32, 'Chiếc', 'CHI', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(33, 'Hộp', 'H', '2019-12-13 04:36:52', '2019-12-13 04:36:52'),
(34, 'Thùng', 'T', '2019-12-13 04:36:52', '2019-12-13 04:36:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `lastname`, `phone_number`, `role_id`, `created_at`, `updated_at`, `email_verified_at`, `remember_token`) VALUES
(3, 'huu tri', 'tri12@gmail.com', '$2y$10$V9iOkRo8uX3B7K/Ur/0LwecMp1.qbb7iVqURu18IJRWQYX9JCNzHa', 'tran', 1234567890, 1, '2019-11-26 23:56:48', '2019-11-26 23:56:48', NULL, NULL),
(4, 'Huu Tri', 't123@gmail.com', '$2y$10$mN6buB4UKXd46TzeWo8udeEJ6l/BxYfjJnX0nN7OGZXE/wdB6blZC', 'Tran', 123456789, 2, '2019-11-27 04:01:43', '2019-12-11 12:18:44', NULL, NULL),
(5, 'Duy', 'duyhkps07941@fpt.edu.vn', '$2y$10$A6ryulMPjJ6tLYEfLyi2qOj2l/tzKamm3.Lj9dS67JHokQSury6q6', 'khanh', 985533428, 3, '2019-12-13 01:14:20', '2019-12-13 01:14:20', NULL, NULL),
(6, 'Hồ Khánh Duy', 'hokhanhduy241099@gmail.com', '$2y$10$FuEiVT27CrGyxt5vthHtzulGymVBqpEartdj/4/mPnBb/b/WpQZVm', 'khanh', 985533428, 2, '2019-12-13 02:42:07', '2019-12-13 02:42:07', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `vendors`
--

CREATE TABLE `vendors` (
  `id_vendor` int(11) NOT NULL,
  `name_vendor` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adress` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `vendors`
--

INSERT INTO `vendors` (`id_vendor`, `name_vendor`, `phone_number`, `email`, `adress`, `created_at`, `updated_at`) VALUES
(1, 'Honda', '123', 'a@gmail.com', '123', '2019-12-05 02:33:18', '0000-00-00 00:00:00'),
(2, 'Coca', '0903533757', 'tran@gmail.com', '3a, ton that tung', '2019-12-05 02:33:18', '2019-10-31 01:11:07'),
(3, 'Honda', '123', 'a@gmail.com', '123', '2019-12-09 08:05:16', '2019-12-09 08:05:16'),
(4, 'Coca', '0903533757', 'tran@gmail.com', '3a, ton that tung', '2019-12-09 08:05:16', '2019-12-09 08:05:16'),
(5, 'hjshd11111', '0985533428', 'duyhkps07941@fpt.edu.vn', 'nguyễn thiện thuật', '2019-12-13 11:32:45', '2019-12-13 04:32:45'),
(6, 'Honda', '123', 'a@gmail.com', '123', '2019-12-13 04:33:51', '2019-12-13 04:33:51'),
(7, 'Coca', '0903533757', 'tran@gmail.com', '3a, ton that tung', '2019-12-13 04:33:51', '2019-12-13 04:33:51'),
(8, 'Honda', '123', 'a@gmail.com', '123', '2019-12-13 04:33:51', '2019-12-13 04:33:51'),
(9, 'Coca', '0903533757', 'tran@gmail.com', '3a, ton that tung', '2019-12-13 04:33:51', '2019-12-13 04:33:51'),
(10, 'hjshd11111', '0985533428', 'duyhkps07941@fpt.edu.vn', 'nguyễn thiện thuật', '2019-12-13 04:33:51', '2019-12-13 04:33:51');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bill_exports`
--
ALTER TABLE `bill_exports`
  ADD PRIMARY KEY (`id_export`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `bill_imports`
--
ALTER TABLE `bill_imports`
  ADD PRIMARY KEY (`id_import`),
  ADD KEY `im_user` (`id_user`);

--
-- Chỉ mục cho bảng `catalogs`
--
ALTER TABLE `catalogs`
  ADD PRIMARY KEY (`id_cata`);

--
-- Chỉ mục cho bảng `checkeds`
--
ALTER TABLE `checkeds`
  ADD PRIMARY KEY (`id_check`),
  ADD KEY `id_user` (`id_user`,`id_pro`),
  ADD KEY `check_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `detail_exports`
--
ALTER TABLE `detail_exports`
  ADD PRIMARY KEY (`id_detail_export`),
  ADD KEY `detail_ex_ex` (`id_export`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `detail_imports`
--
ALTER TABLE `detail_imports`
  ADD PRIMARY KEY (`id_detail_import`),
  ADD KEY `detail_im_im` (`id_import`),
  ADD KEY `id_pro` (`id_pro`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id_pro`),
  ADD UNIQUE KEY `code_pro` (`code_pro`),
  ADD UNIQUE KEY `code_pro_2` (`code_pro`),
  ADD UNIQUE KEY `code_pro_3` (`code_pro`),
  ADD KEY `id_cata` (`id_cata`),
  ADD KEY `id_promotion` (`id_promotion`,`id_unit`,`id_vendor`),
  ADD KEY `pro_unit` (`id_unit`),
  ADD KEY `pro_vendor` (`id_vendor`);

--
-- Chỉ mục cho bảng `promotions`
--
ALTER TABLE `promotions`
  ADD PRIMARY KEY (`id_promotion`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id_unit`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id_role` (`role_id`);

--
-- Chỉ mục cho bảng `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id_vendor`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bill_exports`
--
ALTER TABLE `bill_exports`
  MODIFY `id_export` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `bill_imports`
--
ALTER TABLE `bill_imports`
  MODIFY `id_import` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT cho bảng `catalogs`
--
ALTER TABLE `catalogs`
  MODIFY `id_cata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `checkeds`
--
ALTER TABLE `checkeds`
  MODIFY `id_check` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `detail_exports`
--
ALTER TABLE `detail_exports`
  MODIFY `id_detail_export` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `detail_imports`
--
ALTER TABLE `detail_imports`
  MODIFY `id_detail_import` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id_pro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT cho bảng `promotions`
--
ALTER TABLE `promotions`
  MODIFY `id_promotion` int(13) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `units`
--
ALTER TABLE `units`
  MODIFY `id_unit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id_vendor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `checkeds`
--
ALTER TABLE `checkeds`
  ADD CONSTRAINT `check_pro` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id_pro`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_exports`
--
ALTER TABLE `detail_exports`
  ADD CONSTRAINT `detail_ex_ex` FOREIGN KEY (`id_export`) REFERENCES `bill_exports` (`id_export`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_ex_pro` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id_pro`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `detail_imports`
--
ALTER TABLE `detail_imports`
  ADD CONSTRAINT `detail_im_im` FOREIGN KEY (`id_import`) REFERENCES `bill_imports` (`id_import`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_pro` FOREIGN KEY (`id_pro`) REFERENCES `products` (`id_pro`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `pro_cata` FOREIGN KEY (`id_cata`) REFERENCES `catalogs` (`id_cata`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_prom` FOREIGN KEY (`id_promotion`) REFERENCES `promotions` (`id_promotion`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_unit` FOREIGN KEY (`id_unit`) REFERENCES `units` (`id_unit`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pro_vendor` FOREIGN KEY (`id_vendor`) REFERENCES `vendors` (`id_vendor`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_users_roles` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
