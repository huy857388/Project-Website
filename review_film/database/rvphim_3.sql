-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 04, 2020 lúc 12:11 PM
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
  `adminId` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `adminEmail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adminPassword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminName` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `adminPhone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`adminId`),
  UNIQUE KEY `admin_adminemail_unique` (`adminEmail`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`adminId`, `adminEmail`, `adminPassword`, `adminName`, `adminPhone`, `phone`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Danh', NULL, '123456', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(2, 'Huy@gmail.com', 'd964173dc44da83eeafa3aebbee9a1a0', 'Huy', NULL, '456123', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(3, 'Khang@gmail.com', '6c44e5cd17f0019c64b042e4a745412a', 'Khang', NULL, '987654', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(4, 'Khanh@gmail.com', 'e35cf7b66449df565f93c607d5a81d09', 'Khanh', NULL, '456789', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(5, 'Phat@gmail.com', '55587a910882016321201e6ebbc9f595', 'Phat', NULL, '123789', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46');

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
(1, 1, 1, 'Like 1 Love 1!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(2, 2, 2, 'Like 2 Love 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(3, 3, 3, 'Like 3 Love 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(4, 4, 4, 'Like 4 Love 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(5, 5, 5, 'Like 5 Love 5!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(6, 1, 4, 'Like 1 Love 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(7, 2, 3, 'Like 2 Love 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(8, 3, 2, 'Like 3 Love 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(9, 4, 6, 'Like 4 Love 6!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(10, 5, 2, 'Like 5 Love 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(11, 1, 6, 'Like 1 Love 6!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46');

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
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(42, '2014_10_12_000000_create_users_table', 1),
(43, '2014_10_12_100000_create_password_resets_table', 1),
(44, '2020_05_16_093817_create_theloai_table', 1),
(45, '2020_05_16_094780_create_news_table', 1),
(46, '2020_05_16_094820_create_comment_table', 1),
(47, '2020_05_16_095607_create_abmin_table', 1),
(48, '2020_05_20_073357_create_subcomment_table', 1);

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
(1, 1, 'Conan - Thám tử lừng danh', 'conan-tham-tu-lung-danh', '[\"conan.jpg\",\"conan1.png\",\"conan2.jpg\"]', 'truyện kể về thám tử tí hon Conan....', '<p>Mở đầu câu truyện, cậu học sinh trung học 17 tuổi Shinichi Kudo bị biến thành cậu bé Conan Edogawa. Shinichi trong phần đầu của Thám tử lừng danh Conan được miêu tả là một thám tử học đường xuất sắc. Trong một lần đi chơi công viên \"Miền Nhiệt đới\" với cô bạn từ thuở nhỏ Ran Mori, cậu tình cờ chứng kiến vụ một án giết người, Kishida - một hành khách trong trò chơi Chuyến tàu tốc hành đã bị giết một cách dã man. Cậu đã giúp cảnh sát làm sáng tỏ vụ án. Trên đường về nhà, cậu vô tình phát hiện một vụ làm ăn mờ ám của những người đàn ông mặc toàn đồ đen. Khi chúng phát hiện ra cậu, Shinichi đã bị đánh ngất đi. Sau đó những người đàn ông áo đen đó đã cho cậu uống một thứ thuốc độc chưa qua thử nghiệm là Apotoxin-4869 với mục đích thủ tiêu cậu. Tuy nhiên chất độc đã không giết chết Kudo. Khi tỉnh lại, cậu bàng hoàng nhận thấy mình đã bị teo nhỏ lại thành hình dạng của một cậu học sinh tiểu học.</p>\r\n\r\n<p>Theo lời khuyên của Tiến sĩ Hiroshi Agasa, Shinichi đã che giấu tung tích, để tránh việc hội Áo đen có thể phát hiện ra rằng cậu vẫn còn sống. Khi Ran hỏi tên cậu, Shinichi đã ghép \"Conan\" trong tên của Sir Arthur Conan Doyle và \"Edogawa\" trong tên của Edogawa Rampo, buột miệng nói ra tên mình là \"Conan Edogawa\". Tiến sĩ Agasa đã nói Conan là một người cháu của mình, nhưng hiện ông đang quá bận rộn không thể chăm sóc cho chú bé nên đã nhờ Ran trông nom Conan giúp mình. Ran nhận lời và từ đó Conan sống tại nhà của Ran tức văn phòng thám tử Mori, vừa che giấu thân phận vừa điều tra tung tích của Tổ chức Áo đen và tìm kiếm thuốc giải độc.</p>\r\n\r\n<p>Cha của Ran, Kogoro Mori (Richard Moore) là một thám tử bất tài. Từ khi Conan giúp ông phá án, ông trở nên rất nổi tiếng với biệt danh \"Mori ngủ gật\". Vì bộ dạng bé nhỏ của Conan, cảnh sát chẳng mấy khi để tâm tới những phán đoán, suy luận của cậu bé. Conan, bằng cách bắn súng gây mê để cho ông Mori ngủ say, sau đó sử dụng thiết bị đổi giọng nói là chiếc nơ gắn trên cổ áo để giả giọng ông, đã giúp cảnh sát phá rất nhiều vụ án dưới danh nghĩa Mori. Cũng có lúc cậu gợi ý và dẫn dắt ông Mori tìm ra chìa khóa của vụ án hay phá án dưới danh nghĩa của Suzuki Sonoko, bạn thân của Ran.</p>\r\n\r\n<p>Một số nhân vật quan trọng khác xuất hiện về sau là cha mẹ của Shinichi, Yusaku (Booker) và Yukiko Kudo (Vivian), Heiji Hattori, một thám tử đến từ Osaka, Siêu trộm Kid, nhà sáng chế ra thuốc APTX4869 - Sherry ( người của Tổ chức Áo đen, cũng bị biến thành một đứa trẻ sau khi uống chính loại thuốc độc mình đã sáng chế ra với hy vọng chạy trốn khỏi tổ chức), các thành viên của Tổ chức Áo đen: Gin, Vodka, Tequila, Calvados, Pisco, Vermouth, Kir, Chianti, Köln, và một \"ông trùm\" bí ẩn chỉ được nhắc đến rất mơ hồ.</p>\r\n\r\n<p>Để duy trì vỏ bọc bên ngoài, Conan đi học ở trường Tiểu học Teitan và kết bạn với ba đứa trẻ ở trường, Genta Kojima, Mitsuhiko Tsuburaya, và Ayumi Yoshida, lập ra Đội thám tử nhí lớp 1B (Detective Boys/Shōnen Tantei-dan - trong bản gốc). Bộ tứ đã có nhiều cuộc phiêu lưu với nhau và ba đứa trẻ đã cho thấy khả năng làm trợ lý thám tử ở tuổi của chúng. Sau này, Ai Haibara - tức Sherry cũng trở thành thành viên của đội thám tử nhí này.</p>\r\n\r\n<p>Trải qua nhiều vụ án, Conan khám phá ra rằng FBI và CIA cũng đang truy đuổi Tổ chức Áo đen. Cùng với các thành viên Áo đen đang dần dần lộ mặt, truyện xuất hiện thêm một số điệp viên của FBI và CIA như Shuichi Akai, Jodie Starling, James Black, Mizunashi Rena...</p>', 5.10, 1, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(2, 2, 'One piece', 'one-piece', '[\"one-piece.jpg\",\"one-piece1.png\",\"one-piece2.jpg\"]', 'kể về con đường trở thành vua hải tặc của Monkey.D.Luffy', '<p>Mở đầu phim là một đoạn hồi tưởng về phân cảnh của chiến trường Marineford. Trong thời điểm mà Râu Đen đang tập hợp những thủy thủ đoàn của mình thì hắn ta đã thấy hình ảnh Bullet cùng người bạn tù đã bị hắn sát hại dã man. Thấy được cảnh tượng ấy thì Râu Đen đã cảm thấy vô cùng sợ hãi và nhanh chóng rời đi.  (Đây cũng chính là phân cảnh duy nhất mà Râu Đen xuất hiện trong phim).Chuyển cảnh về thực tại, Festa đang dựng lên hội chợ hải tặc và bàn bạc với Bullet về việc chung tay hiện thực hóa kế hoạch của cả hai. Hắn ta nói về việc hội chợ này sẽ là một cơ hội để thay đổi thế giới này.</p>\r\n\r\n<p>Chuyển cảnh sang băng Mũ Rơm tiếp cận đảo Delta để tham gia hội chợ. Luffy lúc bấy giờ đang rất phấn khích khi biết mình sẽ tham gia tìm kiếm kho báu của Roger.Một đoạn phim ngắn chiếu cảnh Mũ Rơm đến hội chợ và vui chơi tại các địa điểm trong đó.Sau đó, cuộc đua truy tìm kho báu bắt đầu.</p>\r\n\r\n<p>Những tên tuổi tham gia gồm có băng Mũ Rơm, băng Barto, Cải Bắp, băng hải tặc Foxy và băng mới thành lập của Wapol.Law (trong tình trạng bị thương) đã xuất hiện phía sau hội chợ và nắm được tẩy của hội chợ này.Buggy xuất hiện trong khoảng 30 giây... chỉ để khoe khoang về bản thân hắn ta. Hắn dường như đến muộn cuộc đua vì bỏ lỡ thông tin của hội chợ.</p>\r\n<p>Buggy thấy Law nên ra tay tấn công. Law phát hiện ra tàu Sunny nên trốn vào đó vì tin tưởng băng Mũ Rơm.Donald Moderate và Ann được giới thiệu là chủ khảo cuộc thi. Ann thể hiện sức mạnh của trái ác quỷ Bijo Bijo no Mi ( Trái này cho phép người ăn nó có thể tạo ra ảo ảnh) thông qua việc tạo ra bản mô phỏng con rồng ở arc Punk Hazard. Tiếc thay... đây là lần duy nhất mà sức mạnh của trái ác quỷ này được thể hiện trong movie.</p>\r\n<p>Cuộc đua giành kho báu của Roger bắt đầu. Nhưng đột nhiên có một xoáy nước hình thành ở trung tâm của hòn đảo. Từ đó xuất hiện một cột nước cao chót vót. Trên đỉnh của nó là một hòn đảo được bao phủ bởi bong bóng (giống ở đảo Người Cá). Hóa ra đây là hòn đảo đã chìm sâu từ lâu, cuối cùng cũng trồi lên từ vực sâu chứa kho báu của Roger. Các băng nhóm tham gia phải tìm cách leo lên hòn đảo đó để lấy được kho báu và trở thành người chiến thắng.</p>', 7.20, 1, 0, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(3, 2, 'Thất hình đại tội', 'that-hinh-dai-toi', '[\"that-hinh-dai-toi.jpg\",\"that-hinh-dai-toi1.jpg\",\"that-hinh-dai-toi2.jpg\"]', 'kể về 7 tội đồ và cuộc tranh đấu giữa các bộ tộc...', 'Chưa có content', 9.30, 1, 0, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(4, 1, 'Sherlock holmes', 'sherlock-holmes', '[\"sherlock-holmes.jpg\",\"sherlock-holmes1.jpg\"]', 'kể về thám tử bậc nhất thế giới Sherlock Holmes với sự thông minh, ông đã phá án....', 'Chưa có content', 4.40, 0, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(5, 5, 'Overlord', 'overlord', '[\"overlord.jpg\",\"overlord1.jpg\",\"overlord2.jpg\"]', 'Kể về cuộc xâm chiếm và trở thành bá chủ game của pháp sư vương Momon và Guild của hắn...', 'Chưa có content', 8.50, 0, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(6, 6, 'Harry Potter', 'harry-potter', '[\"harry-potter.jpg\"]', 'Kể về hành trình chinh phục thế giới phép thuật của Harry Potter và 2 người bạn thân...', 'Chưa có content', 6.70, 1, 0, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(7, 7, 'The Conjuring', 'the-conjuring', '[\"conjuring.jpg\"]', 'Kể về cuộc chiến đấu của nhóm người chuyên diệt quỷ với quỷ dữ mang hình dạng là một ma sơ!', 'Chưa có content', 9.50, 1, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(8, 7, 'Đứa trẻ bóng tối', 'dua-tre-bong-toi', '[\"dua-tre-bong-toi.jpg\"]', 'Kể về đứa trẻ đến từ địa ngục có sức mạnh phi thường đến hành tinh để...', 'kể về 1 đứa trẻ ngoài hành tình có siêu năng lực, thay vì trở thành anh hùng thì hắn lại thực hiện hàng loạt tội ác kinh hoàng!', 8.80, 0, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(9, 7, 'Annabelle', 'annabelle', '[\"annabelle.jpg\"]', 'Kể về cuộc chiến đấu của 1 nhóm người với quỷ ẩn mình trong con búp bê....', 'Chưa có content', 9.10, 1, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(10, 7, 'IT - Tên hề ma quái', 'it-ten-he-ma-quai', '[\"it.jpg\"]', 'Kể về tên hề ma quái qua vài chục năm thì hắn lại xuất hiện và dụ dỗ,ăn thịt trẻ em....', 'kể về 1 nhóm trẻ cùng nhau chiến đấu xua đuổi con quỷ ăn thịt cứ mỗi bao nhiêu năm quên rồi thì nó lại quay trở lại 1 lần!', 9.80, 1, 0, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(11, 8, 'Liên minh anh hùng', 'lien-minh-anh-hung', '[\"avengers.jpg\"]', 'Kể về các siêu anh hùng chiến đấu và chống lại thế lực đen tối, bảo vệ trái đất....', 'kể về 1 nhóm siêu anh hùng dùng năng lực để chống lại bọn xâm lược trái đất và những thế lực đen tối khác!', 9.80, 1, 0, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(12, 8, 'Nhanh và nguy hiểm', 'nhanh-va-nguy-hiem', '[\"fast-furious.jpg\"]', 'Kể về các băng đảng đánh thuê và những cuộc chiến đậm chất hành động đến nghẹt thở!', 'Chưa có content', 8.30, 1, 1, '2020-06-04 05:09:46', '2020-06-04 05:09:46');

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
(1, 1, 1, 'Comment con của bài viết 1, người dùng 1!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(2, 2, 2, 'Comment con của bài viết 2, người dùng 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(3, 3, 3, 'Comment con của bài viết 3, người dùng 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(4, 4, 4, 'Comment con của bài viết 4, người dùng 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(5, 5, 5, 'Comment con của bài viết 5, người dùng 5!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(6, 1, 6, 'Comment con của bài viết 6, người dùng 1!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(7, 2, 7, 'Comment con của bài viết 7, người dùng 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(8, 3, 8, 'Comment con của bài viết 8, người dùng 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(9, 4, 9, 'Comment con của bài viết 9, người dùng 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(10, 5, 10, 'Comment con của bài viết 10, người dùng 5!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(11, 1, 1, 'Comment con của bài viết 1, người dùng 1!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(12, 2, 2, 'Comment con của bài viết 2, người dùng 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(13, 3, 3, 'Comment con của bài viết 3, người dùng 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(14, 4, 4, 'Comment con của bài viết 4, người dùng 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(15, 5, 5, 'Comment con của bài viết 5, người dùng 5!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(16, 1, 7, 'Comment con của bài viết 7, người dùng 1!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(17, 2, 8, 'Comment con của bài viết 8, người dùng 2!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(18, 3, 9, 'Comment con của bài viết 9, người dùng 3!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(19, 4, 10, 'Comment con của bài viết 10, người dùng 4!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(20, 5, 1, 'Comment con của bài viết 1, người dùng 5!', NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46');

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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `follow_IdBaiRv` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `provider`, `provider_id`, `follow_IdBaiRv`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Danh', 'Danh@gmail.com', '$2y$10$0LfB5riQyrsKoxkuUlogpeNnyAhG.tNGebV1yLPhDUi0M3xOJaC72', NULL, NULL, NULL, NULL, '2020-06-04 05:09:45', '2020-06-04 05:09:45'),
(2, 'Huy', 'Huy@gmail.com', '$2y$10$tYwJaP0L8MNXFINRMXtVDO1WmlC1umIFqbVT4clyjhDapOz1nNnGW', NULL, NULL, NULL, NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(3, 'Khang', 'Khang@gmail.com', '$2y$10$IxaBTSjUWhZelDDeSq1KQucR2SRkLxLTb.0ci5yldSLkJNVyKYBoi', NULL, NULL, NULL, NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(4, 'Khánh', 'Khanh@gmail.com', '$2y$10$04N6F7fm9T9UEWz124ccfe4/NE47KK0LVTdj7gjWSADvUQETSoZHm', NULL, NULL, NULL, NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46'),
(5, 'Phát', 'Phat@gmail.com', '$2y$10$WgoqWZLdY0rDltokE5539.zX9Mp5FYcnuNEb9KSewKa2.5cwIkl2m', NULL, NULL, NULL, NULL, '2020-06-04 05:09:46', '2020-06-04 05:09:46');

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
