-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 22, 2020 lúc 11:53 AM
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
-- Cơ sở dữ liệu: `rvphim`
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
('Danh', '$2y$10$3tO2e7UcPOebWMzwR2qQn.QN6gfDOCwOom.WE7S6JzcH9N6DaR/42', 'Danh', 'Danh@gmail.com', '123456', NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
('Huy', '$2y$10$EFpaX/uwPyPKPfQ9h2aAUuz4jJ6oy7XPuGM6pwP1CiBofNHB5cLEu', 'Huy', 'Huy@gmail.com', '456123', NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
('Khang', '$2y$10$ZnHD0CQs3sECTULJNmtPq.lITWQzMwgvkEzpEu4XSg9uGsiPvcRqm', 'Khang', 'Khang@gmail.com', '987654', NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
('Khanh', '$2y$10$MGJOMVuVeuVie7I9DOfmfOfOefjeQ7597dBTOAmajOj4E39Cd3Sw.', 'Khanh', 'Khanh@gmail.com', '456789', NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
('Phat', '$2y$10$eyt6gJL3.amR0VhccMUVHOrEqLTI1B.ewBgGXS75k3Y7S0bFPCGde', 'Phat', 'Phat@gmail.com', '123789', NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comment_iduser_foreign` (`idUser`),
  KEY `comment_idbairv_foreign` (`idBaiRv`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `comment`
--

INSERT INTO `comment` (`id`, `idUser`, `idBaiRv`, `NoiDung`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Like 1 Love 1!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(2, 2, 2, 'Like 2 Love 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(3, 3, 3, 'Like 3 Love 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(4, 4, 4, 'Like 4 Love 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(5, 5, 5, 'Like 5 Love 5!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(6, 1, 4, 'Like 1 Love 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(7, 2, 3, 'Like 2 Love 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(8, 3, 2, 'Like 3 Love 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(9, 4, 6, 'Like 4 Love 6!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(10, 5, 2, 'Like 5 Love 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(11, 1, 6, 'Like 1 Love 6!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(28, '2014_10_12_000000_create_users_table', 1),
(29, '2014_10_12_100000_create_password_resets_table', 1),
(30, '2020_05_16_093817_create_theloai_table', 1),
(31, '2020_05_16_094780_create_news_table', 1),
(32, '2020_05_16_094820_create_comment_table', 1),
(33, '2020_05_16_095607_create_abmin_table', 1),
(34, '2020_05_20_073357_create_subcomment_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

DROP TABLE IF EXISTS `news`;
CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idTheLoai` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diem_danh_gia` double(3,2) DEFAULT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `new` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_idtheloai_foreign` (`idTheLoai`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `idTheLoai`, `title`, `slug`, `img`, `short_content`, `content`, `diem_danh_gia`, `hot`, `new`, `created_at`, `updated_at`) VALUES
(1, 1, 'Conan - Thám tử lừng danh', 'conan-tham-tu-lung-danh', 'conan.jpg', 'truyện kể về thám tử tí hon Conan', 'kể về những cuộc phá án đầy ngoạn ngục của thám tử nhí tài ba', 5.10, 1, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(2, 2, 'One piece', 'one-piece', 'one-piece.jpg', 'nhân vật chính: Luffy', 'kể về cuộc hành trình vượt biển để tìm kiếm kho bá...', 7.20, 1, 0, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(3, 3, 'Thất hình đại tội', 'that-hinh-dai-toi', 'that-hinh-dai-toi.jpg', 'nhân vật chính : 7 tội đồ', 'kể về cuộc hỗn loạn và thanh trừng giữa các tộc', 9.30, 1, 0, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(4, 4, 'Sherlock holmes', 'sherlock-holmes', 'sherlock-holmes.jpg', 'nhân vật chính : Sherlock Holmes', 'kể về thám tử bậc nhất thế giới phá án ngoạn ngục', 4.40, 0, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(5, 5, 'Overlord', 'overlord', 'overlord.jpg', 'nhân vật chính : Momon và Guild của hắn', 'kể về cuộc xâm chiếm và trở thành bá chủ game', 8.50, 0, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(6, 6, 'Harry Potter', 'harry-potter', 'harry-potter.jpg', 'nhân vật chính : Harry Potter và 2 đứa bạn', 'kể về cuộc hỗn loạn ở thế giới phép thuật, nơi mà cậu đang sinh sống và học tập', 6.70, 1, 0, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(7, 7, 'The Conjuring', 'the-conjuring', 'conjuring.jpg', 'Quỷ dữ', 'kể về cuộc chiến đấu với quỷ dữ!', 9.50, 1, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(8, 7, 'Đứa trẻ bóng tối', 'dua-tre-bong-toi', 'dua-tre-bong-toi.jpg', 'đứa trẻ đến từ địa ngục', 'kể về 1 đứa trẻ ngoài hành tình có siêu năng lực, thay vì trở thành anh hùng thì hắn lại thực hiện hàng loạt tội ác kinh hoàng!', 8.80, 0, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(9, 7, 'Annabelle', 'annabelle', 'annabelle.jpg', 'Búp bê quỷ dữ', 'kể về cuộc chiến đấu với búp bê quỷ dữ thích giết chóc!', 9.10, 1, 1, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(10, 7, 'IT - Tên hề ma quái', 'it-ten-he-ma-quai', 'it.jpg', 'tên hề ma quái dụ dỗ và ăn thịt trẻ em', 'kể về 1 nhóm trẻ cùng nhau chiến đấu xua đuổi con quỷ ăn thịt cứ mỗi bao nhiêu năm quên rồi thì nó lại quay trở lại 1 lần!', 9.80, 1, 0, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(11, 8, 'Liên minh anh hùng', 'lien-minh-anh-hung', 'avengers.jpg', 'các siêu anh hùng chiến đấu bảo vệ trái đất!', 'kể về 1 nhóm siêu anh hùng dùng năng lực để chống lại bọn xâm lược trái đất và những thế lực đen tối khác!', 9.80, 1, 0, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(12, 8, 'Nhanh và nguy hiểm', 'nhanh-va-nguy-hiem', 'fast-furious.jpg', 'các băng đảng đánh thuê chả bít nữa!', 'kể về tình anh em giữa những người đồng đội chí cốt! vãi lều!', 8.30, 1, 1, '2020-05-22 04:53:21', '2020-05-22 04:53:21');

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
-- Cấu trúc bảng cho bảng `subcomment`
--

DROP TABLE IF EXISTS `subcomment`;
CREATE TABLE IF NOT EXISTS `subcomment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idComment` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subcomment_iduser_foreign` (`idUser`),
  KEY `subcomment_idcomment_foreign` (`idComment`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `subcomment`
--

INSERT INTO `subcomment` (`id`, `idUser`, `idComment`, `NoiDung`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Comment con của bài viết 1, người dùng 1!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(2, 2, 2, 'Comment con của bài viết 2, người dùng 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(3, 3, 3, 'Comment con của bài viết 3, người dùng 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(4, 4, 4, 'Comment con của bài viết 4, người dùng 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(5, 5, 5, 'Comment con của bài viết 5, người dùng 5!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(6, 1, 6, 'Comment con của bài viết 6, người dùng 1!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(7, 2, 7, 'Comment con của bài viết 7, người dùng 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(8, 3, 8, 'Comment con của bài viết 8, người dùng 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(9, 4, 9, 'Comment con của bài viết 9, người dùng 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(10, 5, 10, 'Comment con của bài viết 10, người dùng 5!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(11, 1, 1, 'Comment con của bài viết 1, người dùng 1!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(12, 2, 2, 'Comment con của bài viết 2, người dùng 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(13, 3, 3, 'Comment con của bài viết 3, người dùng 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(14, 4, 4, 'Comment con của bài viết 4, người dùng 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(15, 5, 5, 'Comment con của bài viết 5, người dùng 5!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(16, 1, 7, 'Comment con của bài viết 7, người dùng 1!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(17, 2, 8, 'Comment con của bài viết 8, người dùng 2!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(18, 3, 9, 'Comment con của bài viết 9, người dùng 3!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(19, 4, 10, 'Comment con của bài viết 10, người dùng 4!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21'),
(20, 5, 1, 'Comment con của bài viết 1, người dùng 5!', NULL, '2020-05-22 04:53:21', '2020-05-22 04:53:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

DROP TABLE IF EXISTS `theloai`;
CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `TenKhongDau`) VALUES
(1, 'Trinh thám', 'trinh-tham'),
(2, 'Phiêu lưu', 'phieu-luu'),
(3, 'Hài hước', 'hai-huoc'),
(4, 'Tình cảm', 'tinh-cam'),
(5, 'Phép thuật', 'phep-thuat'),
(6, 'Viễn tưởng', 'vien-tuong'),
(7, 'Kinh dị', 'kinh-di'),
(8, 'Hành động', 'hanh-dong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
(1, 'Danh', 'Danh@gmail.com', '$2y$10$CpqIWmKYb/kNj.9/y2WrNeihT9OkE27hj0s09Ep/7NSIbmbY79lI2', NULL, NULL, NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(2, 'Huy', 'Huy@gmail.com', '$2y$10$gir/XIunpMayoDqWOcWyMu7jqe0pQUIbaSxL30QpYOej3w7LFAV6u', NULL, NULL, NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(3, 'Khang', 'Khang@gmail.com', '$2y$10$WLkw0KPTB1GZ5iDSw4qvX.G1dzm/h7VK1GLlKbomB.AZ2mBonHNPO', NULL, NULL, NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(4, 'Khánh', 'Khanh@gmail.com', '$2y$10$ppyIS0Ut1BV3xlukd6K2xe0LSjtzgQxDdOv2z2.ZhM6tSCOBDB4Ga', NULL, NULL, NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20'),
(5, 'Phát', 'Phat@gmail.com', '$2y$10$svw9KDiUKL7jndy9E85yr.wemZF6lDVorBSZh5BgKzupKkHPzOfDy', NULL, NULL, NULL, '2020-05-22 04:53:20', '2020-05-22 04:53:20');

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

--
-- Các ràng buộc cho bảng `subcomment`
--
ALTER TABLE `subcomment`
  ADD CONSTRAINT `subcomment_idcomment_foreign` FOREIGN KEY (`idComment`) REFERENCES `comment` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `subcomment_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
