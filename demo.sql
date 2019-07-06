-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 06:17 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_07_02_153215_create_users_table', 1),
(19, '2019_07_03_172130_add_province_of_users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `province` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `linhvuc` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `address`, `email`, `gender`, `created_at`, `updated_at`, `province`, `linhvuc`, `mota`, `password`) VALUES
(1, 'Cụ. Hồng Lập Chính', 22469761, '7217, Ấp Bạc Lam, Xã Lâm, Quận Trung Cẩn\nAn Giang', 'trang.hoan@gmail.com', 'nam', NULL, NULL, 'Hải Phòng', 'Kĩ sư', NULL, '$2y$10$rDmczRy1zdFqEexhjtlg2uk0BhdlpzfNdnN5AP6OF6.FUmZS7r4.K'),
(2, 'Cô. Phí Châu', 10885291, '6533 Phố Giang Thúy Ngọc, Xã Hán Tiển Khoát, Quận Hùng Tiếp\nHà Nội', 'ha.duong@yahoo.com', 'nữ', NULL, NULL, 'Hải Phòng', 'Kĩ sư', NULL, '$2y$10$PbtlEzpJewdRxLQ5Kr4lr.qErKtiysFb2lBCD8kgcoD8f27jhENv.'),
(3, 'Châu Hoan', 62721987, '375 Phố Phương Hảo Ca, Phường 59, Huyện Tào Hòa\nBình Phước', 'stu@trac.gov.vn', 'nữ', NULL, NULL, 'Hồ Chí Minh', 'Giáo viên', NULL, '$2y$10$1AvhjKi2ZGsvAu8xTXwbFel.s4/ccWaOgOH4EhFOXp6zFRGCXyAx.'),
(4, 'Phi Ty', 38467743, '42 Phố Trà Trường Tiến, Xã Lâm Như Phương, Quận 0\nĐà Nẵng', 'tu.triet@hotmail.com', 'nữ', NULL, NULL, 'Hải Phòng', 'Giáo viên', NULL, '$2y$10$tpBliUuxLRrUkq0YnotWWe6NP6rSzffjiaqZKyN/n2gMlnTZsY3te'),
(5, 'Chú. Tăng Kim Giang', 56751554, '599 Phố Ân, Xã Lô Mạnh Huynh, Huyện Chi\nĐà Nẵng', 'nham.hao@yahoo.com', 'nam', NULL, NULL, 'Đà Nẵng', 'Giáo viên', NULL, '$2y$10$yRCp3DThpAPiNexlCQpsruqN1FkaEHORnTugiqPUkNp8.kYvIqahy'),
(6, 'Bàng Hữu Vinh', 17580791, '9193, Thôn 46, Ấp Thái Hạ, Huyện Cự Thảo\nPhú Thọ', 'mtrieu@yahoo.com', 'nam', NULL, NULL, 'Hải Phòng', 'Kĩ sư', NULL, '$2y$10$/.iHpc3JsC4h5JVLewY3l.vrlA8O1t1R2ExclLD4ZFtyQ4BRdQ/4G'),
(7, 'Ông. Dư Đoàn', 37238253, '2, Ấp Ngân Lương, Xã Lữ Vu Đan, Huyện Mâu\nBình Phước', 'vgiap@cung.info', 'nữ', NULL, NULL, 'Hà Nội', 'Giáo viên', NULL, '$2y$10$DsstVwZiMYpoAEJ2CuUBKun9YjNwNtV5uNmadl7vuUjQASZsdLQ.2'),
(8, 'Bửu Túy Đường', 64550849, '4556 Phố Huyền, Ấp Hùng Tường, Quận Vi Uyên\nHải Phòng', 'qvan@tong.edu.vn', 'nam', NULL, NULL, 'Hà Nội', 'Giáo viên', NULL, '$2y$10$ERTVw.L7jQTtR9RJhs289e71pOFiSBePl3zO3U800Cg3leNn/5JlK'),
(9, 'Cát Cao Hưng', 27261752, '2805 Phố Trần Thoại Phúc, Phường 77, Huyện 49\nHải Dương', 'tram01@yahoo.com', 'nam', NULL, NULL, 'Hà Nội', 'Nhà nước', NULL, '$2y$10$DLeTjUXBaXCuFFOKoKtDYOPcn2A.aIjPIJ.ylyvYQHGjqoIgv8cfC'),
(10, 'Hạ Nghiệp', 96049782, '6198 Phố Giang Thiện Đạt, Thôn Lễ Hằng, Quận Chiêu Sử\nHưng Yên', 'dc.la@ton.net.vn', 'nam', NULL, NULL, 'Hải Phòng', 'Giáo viên', NULL, '$2y$10$TkkF/FBbafB7qZrJDNzrnOlRXyjNru5L/aPQ1WRAoTzWhK7/.qQo2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
