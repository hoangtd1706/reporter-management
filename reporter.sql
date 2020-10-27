-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2020 lúc 11:32 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `reporter`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `cate_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1603418224),
('m130524_201442_init', 1603418226),
('m190124_110200_add_verification_token_column_to_user_table', 1603418226),
('m201027_043224_Category', 1603787117),
('m201027_043248_Reporter', 1603787118),
('m201027_043303_Reporter_Detail', 1603787119),
('m201027_043359_Reporter_Profile', 1603787123),
('m201027_043410_Reporter_Process', 1603787125);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reporter`
--

CREATE TABLE `reporter` (
  `id` int(11) NOT NULL,
  `rep_code` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` smallint(6) DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reporterdetail`
--

CREATE TABLE `reporterdetail` (
  `id` int(11) NOT NULL,
  `rep_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `rep_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_avt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_gender` tinyint(1) NOT NULL,
  `rep_dob` int(11) NOT NULL,
  `rep_noi_o` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_chuc_vu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_but_danh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_giao_duc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_chuyen_mon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_truong_hoc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_chuyen_nganh` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_hinh_thuc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_tot_nghiep` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_chinh_tri` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_ngoai_ngu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_chung_chi` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_dang_vien` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_chuc_dah` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_so_the_cu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_cmnd` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_ngay_cap_cmnd` int(11) NOT NULL,
  `rep_cmnd_front` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_cmnd_back` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rep_hdld` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_scan_bang` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_scan_hdld` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_scan_hs_khac` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reporterprocess`
--

CREATE TABLE `reporterprocess` (
  `id` int(11) NOT NULL,
  `rep_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chuc_vu` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `co_quan` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ngach_luong` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bac_luong` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `note` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reporterprofile`
--

CREATE TABLE `reporterprofile` (
  `id` int(11) NOT NULL,
  `profile_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rep_code` varchar(8) COLLATE utf8_unicode_ci NOT NULL,
  `so_the_nha_bao` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(2, 'admin', 'YXBZeHgUmB8PieSgm-BAocQ-Vk4fgnHG', '$2y$13$AUQsQx9HjSsBphISlftcw.36a9mImj0TFefK3eST4N0izNt3ntykC', NULL, 'hoangtd1706@gmail.com', 10, 1603769416, 1603769434, 'UEMIqsN9wsDmt6yJbc_nwALOjJJEBa4l_1603769416');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cate_name` (`cate_name`);

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Chỉ mục cho bảng `reporter`
--
ALTER TABLE `reporter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rep_code` (`rep_code`);

--
-- Chỉ mục cho bảng `reporterdetail`
--
ALTER TABLE `reporterdetail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ReporterDetail_Reporter` (`rep_code`);

--
-- Chỉ mục cho bảng `reporterprocess`
--
ALTER TABLE `reporterprocess`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_ReporterProcess_Reporter` (`rep_code`);

--
-- Chỉ mục cho bảng `reporterprofile`
--
ALTER TABLE `reporterprofile`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `profile_code` (`profile_code`),
  ADD KEY `fk_ReporterProfile_Reporter` (`rep_code`),
  ADD KEY `fk_ReporterProfile_Category` (`cate_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reporter`
--
ALTER TABLE `reporter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reporterdetail`
--
ALTER TABLE `reporterdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reporterprocess`
--
ALTER TABLE `reporterprocess`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `reporterprofile`
--
ALTER TABLE `reporterprofile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `reporterdetail`
--
ALTER TABLE `reporterdetail`
  ADD CONSTRAINT `FK_ReporterDetail_Reporter` FOREIGN KEY (`rep_code`) REFERENCES `reporter` (`rep_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reporterprocess`
--
ALTER TABLE `reporterprocess`
  ADD CONSTRAINT `FK_ReporterProcess_Reporter` FOREIGN KEY (`rep_code`) REFERENCES `reporter` (`rep_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `reporterprofile`
--
ALTER TABLE `reporterprofile`
  ADD CONSTRAINT `fk_ReporterProfile_Category` FOREIGN KEY (`cate_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `fk_ReporterProfile_Reporter` FOREIGN KEY (`rep_code`) REFERENCES `reporter` (`rep_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
