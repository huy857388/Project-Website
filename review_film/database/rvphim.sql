-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 16, 2020 lúc 12:10 PM
-- Phiên bản máy phục vụ: 10.4.10-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `testrvphim`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `admin_username_unique` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`username`, `password`, `name`, `email`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
('Danh', '$2y$10$jo2hxMpdoNx1rwW3jjIrneIzfEWKfXplHWwukDQTHbXL/JnLVjCbK', 'Danh', 'Danh@gmail.com', '123456', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
('Huy', '$2y$10$5awi2s7ADA36k9vFvxIYOeNXJwlsmVERpOXz6wQ5NUZmjG1AHWk.q', 'Huy', 'Huy@gmail.com', '456123', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
('Khang', '$2y$10$HsbXs6VNfQEC1h55bu1oje5EamyztLRUOtgOZYH5Ua5sZhgNZeq6a', 'Khang', 'Khang@gmail.com', '987654', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
('Khanh', '$2y$10$H92a/YuYq6LgVrizHfsY2uZkc62P4JtFdX7RStA7RYfnHnmx4u5A.', 'Khanh', 'Khanh@gmail.com', '456789', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
('Phat', '$2y$10$XcOTsdu7wqAJYZ2g2YDchub7P60ZySJ4m0ogxxaNHI...ColbR1gi', 'Phat', 'Phat@gmail.com', '123789', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idBaiRv` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_iduser_foreign` (`idUser`),
  KEY `comment_idbairv_foreign` (`idBaiRv`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idBaiRv`, `NoiDung`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Like 1 Love 1!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(2, 2, 2, 'Like 2 Love 2!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(3, 3, 3, 'Like 3 Love 3!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(4, 4, 4, 'Like 4 Love 4!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(5, 5, 5, 'Like 5 Love 5!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(6, 1, 4, 'Like 1 Love 4!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(7, 2, 3, 'Like 2 Love 3!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(8, 3, 2, 'Like 3 Love 2!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(9, 4, 6, 'Like 4 Love 6!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(10, 5, 2, 'Like 5 Love 2!', '2020-05-16 03:42:39', '2020-05-16 03:42:39'),
(11, 1, 6, 'Like 1 Love 6!', '2020-05-16 03:42:39', '2020-05-16 03:42:39');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2020_05_16_093817_create_theloai_table', 1),
(10, '2020_05_16_094780_create_news_table', 1),
(11, '2020_05_16_094820_create_comment_table', 1),
(12, '2020_05_16_095607_create_abmin_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idTheLoai` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `new` int(11) NOT NULL DEFAULT 0,
  `deCu` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_idtheloai_foreign` (`idTheLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `idTheLoai`, `title`, `img`, `short_content`, `content`, `hot`, `new`, `deCu`, `created_at`, `updated_at`) VALUES
(1, 1, 'Conan - Thám tử lừng danh', 'conan.jpg', 'truyện kể về thám tử tí hon Conan', 'kể về những cuộc phá án đầy ngoạn ngục của thám tử nhí tài ba', 1, 1, 1, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(2, 2, 'One piece', 'one-piece.jpg', 'nhân vật chính: Luffy', 'kể về cuộc hành trình vượt biển để tìm kiếm kho bá...', 1, 0, 1, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(3, 3, 'Thất hình đại tội', 'that-hinh-dai-toi.jpg', 'nhân vật chính : 7 tội đồ', 'kể về cuộc hỗn loạn và thanh trừng giữa các tộc', 1, 0, 0, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(4, 4, 'Sherlock holmes', 'sherlock-holmes.jpg', 'nhân vật chính : Sherlock Holmes', 'kể về thám tử bậc nhất thế giới phá án ngoạn ngục', 0, 1, 1, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(5, 5, 'Overlord', 'overlord.jpg', 'nhân vật chính : Momon và Guild của hắn', 'kể về cuộc xâm chiếm và trở thành bá chủ game', 0, 1, 0, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(6, 6, 'Harry Potter', 'harry-potter.jpg', 'nhân vật chính : Harry Potter và 2 đứa bạn', 'kể về cuộc hỗn loạn ở thế giới phép thuật, nơi mà cậu đang sinh sống và học tập', 1, 0, 1, '2020-05-16 03:42:38', '2020-05-16 03:42:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `TenKhongDau`, `created_at`, `updated_at`) VALUES
(1, 'Trinh thám', 'trinh-tham', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(2, 'Phiêu lưu', 'phieu-luu', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(3, 'Hài hước', 'hai-huoc', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(4, 'Tình cảm', 'tinh-cam', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(5, 'Phép thuật', 'phep-thuat', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(6, 'Viễn tưởng', 'vien-tuong', '2020-05-16 03:42:38', '2020-05-16 03:42:38');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `provider`, `provider_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danh', 'Danh@gmail.com', '$2y$10$g2YLm1IbDHfO96/8DYKtVuLnT3y3MxNeLte.Z3YTv5H7t8gq5PlKW', NULL, NULL, NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(2, 'Huy', 'Huy@gmail.com', '$2y$10$nzEhaQ7iNML7XpGVm.YE9.zF588FSUzI1xS9B1eeCUOxXyK32ufKi', NULL, NULL, NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(3, 'Khang', 'Khang@gmail.com', '$2y$10$UfERI1JmVuCDsAiUZcdxeu237DnzJ/kAeguUWa2n5l1MFLBcBcFj2', NULL, NULL, NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(4, 'Khánh', 'Khanh@gmail.com', '$2y$10$Axx0sbv2q7HTAnImE3nuKO3YOGNqgEl03Lu.1/H2os7IB59xIAGrC', NULL, NULL, NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(5, 'Phát', 'Phat@gmail.com', '$2y$10$f5I71MiwPHGy3BBIm5TLG.mJnah/cvlOJdkqUizy3F6eDopoTHyG2', NULL, NULL, NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_idbairv_foreign` FOREIGN KEY (`idBaiRv`) REFERENCES `news` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_idtheloai_foreign` FOREIGN KEY (`idTheLoai`) REFERENCES `theloai` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
