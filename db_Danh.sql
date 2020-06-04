-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2020 lúc 10:18 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `admin` (
  `adminId` int(11) NOT NULL,
  `adminEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPassword` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adminId`, `adminEmail`, `adminPassword`, `adminName`, `adminPhone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Huy@gmail.com', '$2y$10$5awi2s7ADA36k9vFvxIYOeNXJwlsmVERpOXz6wQ5NUZmjG1AHWk.q', 'Huy', '456123', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(2, 'Khang@gmail.com', '$2y$10$HsbXs6VNfQEC1h55bu1oje5EamyztLRUOtgOZYH5Ua5sZhgNZeq6a', 'Khang', '987654', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(3, 'Khanh@gmail.com', '$2y$10$H92a/YuYq6LgVrizHfsY2uZkc62P4JtFdX7RStA7RYfnHnmx4u5A.', 'Khanh', '456789', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(4, 'Phat@gmail.com', '$2y$10$XcOTsdu7wqAJYZ2g2YDchub7P60ZySJ4m0ogxxaNHI...ColbR1gi', 'Phat', '123789', NULL, '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(5, 'vohoangcongdanh@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'Võ Hoàng Công Danh', '0931222460', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comment`
--

CREATE TABLE `comment` (
  `id` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `idBaiRv` int(10) UNSIGNED NOT NULL,
  `NoiDung` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `idTheLoai` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hot` int(11) NOT NULL DEFAULT 0,
  `new` int(11) NOT NULL DEFAULT 0,
  `deCu` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `theloai`
--

CREATE TABLE `theloai` (
  `id` int(10) UNSIGNED NOT NULL,
  `Ten` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TenKhongDau` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `theloai`
--

INSERT INTO `theloai` (`id`, `Ten`, `TenKhongDau`, `created_at`, `updated_at`) VALUES
(1, 'Trinh thám', 'trinh-tham', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(2, 'Phiêu lưu', 'phieu-luu', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(3, 'Hài hước', 'hai-huoc', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(4, 'Tình cảm Lãng Mạn', 'tinh-cam-lang-man', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(5, 'Phép thuật', 'phep-thuat', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(6, 'Viễn tưởng', 'vien-tuong', '2020-05-16 03:42:38', '2020-05-16 03:42:38'),
(7, 'Hành Động', 'hanh-dong', NULL, NULL),
(8, 'Chiến Tranh', 'chien-tranh', NULL, NULL),
(9, 'Hình Sự', 'hinh-su', NULL, NULL),
(10, 'Hài Hước', 'hai-huoc', NULL, NULL),
(11, 'Võ Thuật', 'vo-thuat', NULL, NULL),
(12, 'Kinh Dị', 'kinh-di', NULL, NULL),
(13, 'Hồi Hợp Gây Cấn', 'hoi-hop-gay-can', NULL, NULL),
(14, 'Bí Ẩn Siêu Nhiên', 'bí-an-sieu-nhien', NULL, NULL),
(15, 'Cổ Trang', 'co-trang', NULL, NULL),
(16, 'Thần Thoại', 'than-thoai', NULL, NULL),
(17, 'Tâm Lý', 'tam-ly', NULL, NULL),
(18, 'Chính Kịch Drama', 'chinh-kich-drama', NULL, NULL),
(19, 'Thể Thao Âm Nhạc', 'the-thao-am-nhac', NULL, NULL),
(20, 'Gia Đình', 'gia-dinh', NULL, NULL),
(21, 'Hoạt Hình', 'hoat-hinh', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminId`) USING BTREE;

--
-- Chỉ mục cho bảng `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comment_iduser_foreign` (`idUser`),
  ADD KEY `comment_idbairv_foreign` (`idBaiRv`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_idtheloai_foreign` (`idTheLoai`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `adminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `theloai`
--
ALTER TABLE `theloai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
