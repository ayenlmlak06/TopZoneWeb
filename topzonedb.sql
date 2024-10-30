-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 28, 2022 lúc 11:38 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `topzonedb`
--
CREATE DATABASE IF NOT EXISTS `topzonedb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `topzonedb`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `img_big4detail`
--

CREATE TABLE `img_big4detail` (
  `id_b` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `link_bimg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `img_big4detail`
--

INSERT INTO `img_big4detail` (`id_b`, `name`, `link_bimg`) VALUES
(1, 'Test Ip', 'https://cdn.tgdd.vn/Products/Images/42/244141/s16/iphone-se-red-650x650.png'),
(2, 'Test Ip', 'https://cdn.tgdd.vn/Products/Images/42/244141/s16/iphone-se-2022-red-2-650x650.jpg'),
(3, 'Test Ip', 'https://cdn.tgdd.vn/Products/Images/42/244141/s16/iphone-se-2022-red-4-650x650.jpg'),
(4, 'Iphone 13 pro max', 'https://cdn.tgdd.vn/Products/Images/42/230529/s16/iphone-13-pro-max-gold-650x650.png'),
(5, 'Iphone 13 pro max', 'https://cdn.tgdd.vn/Products/Images/42/230529/s16/iphone-13-pro-max-vang-dong-3-650x650.jpg'),
(6, 'Iphone 13 pro max', 'https://cdn.tgdd.vn/Products/Images/42/230529/s16/iphone-13-pro-max-vang-dong-5-650x650.jpg'),
(7, 'Iphone 13 pro max', 'https://cdn.tgdd.vn/Products/Images/42/230529/s16/iphone-13-pro-max-vang-dong-7-650x650.jpg'),
(8, 'Iphone 13 mini', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-black-650x650.png'),
(9, 'Iphone 13 mini', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-den-1-650x650.jpg'),
(10, 'Iphone 13 mini', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-den-3-650x650.jpg'),
(11, 'Iphone 13 mini', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-den-4-650x650.jpg'),
(12, 'Iphone 13 mini', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-den-6-650x650.jpg'),
(13, 'Iphone 13 pro', 'https://cdn.tgdd.vn/Products/Images/42/230521/s16/iphone-13-pro-gold-650x650.png'),
(14, 'Iphone 13 pro', 'https://cdn.tgdd.vn/Products/Images/42/230521/s16/iphone-13-pro-vang-dong-3-650x650.jpg'),
(15, 'Iphone 13 pro', 'https://cdn.tgdd.vn/Products/Images/42/230521/s16/iphone-13-pro-vang-dong-5-650x650.jpg'),
(16, 'Iphone 13 pro', 'https://cdn.tgdd.vn/Products/Images/42/230521/s16/iphone-13-pro-vang-dong-7-650x650.jpg'),
(17, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-xam-650x650.png'),
(18, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-2-650x650.jpg'),
(19, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-3-650x650.jpg'),
(20, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-4-650x650.jpg'),
(21, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-6-650x650.jpg'),
(22, 'MacBook Air M2 2022 10 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-vang-650x650.png'),
(23, 'MacBook Air M2 2022 10 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-vang-1-650x650.jpg'),
(24, 'MacBook Air M2 2022 10 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-vang-3-650x650.jpg'),
(25, 'MacBook Air M2 2022 10 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-vang-5-650x650.jpg'),
(26, 'MacBook Air M2 2022 8 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xa%CC%81m-650x650.png'),
(27, 'MacBook Air M2 2022 8 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xam-2-650x650.jpg'),
(28, 'MacBook Air M2 2022 8 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xam-3-650x650.jpg'),
(29, 'MacBook Air M2 2022 8 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xam-5-650x650.jpg'),
(30, 'MacBook Air M2 2022 8 core GPU', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xam-7-650x650.jpg'),
(31, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-xam-650x650.png'),
(32, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-2-650x650.jpg'),
(33, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-3-650x650.jpg'),
(34, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-5-650x650.jpg'),
(35, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-6-650x650.jpg'),
(36, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-xam-650x650.png'),
(37, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-1-650x650.jpg'),
(38, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-3-650x650.jpg'),
(39, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-4-650x650.jpg'),
(40, 'MacBook Pro 13 inch M2 2022', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-macbook-pro-13-inch-m2-2022-5-650x650.jpg'),
(41, 'iMac 24 inch M1 2021 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-core-gpu-bac-650x650.png'),
(42, 'iMac 24 inch M1 2021 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-gpu-bac-2-650x650.jpg'),
(43, 'iMac 24 inch M1 2021 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-gpu-bac-4-650x650.jpg'),
(44, 'iMac 24 inch M1 2021 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-gpu-bac-7-650x650.jpg'),
(45, 'iMac 24 inch M1 2021 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-gpu-bac-6-650x650.jpg'),
(46, 'MacBook Air M1 2020 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-gold-thumb-650x650.png'),
(47, 'MacBook Air M1 2020 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-vang-01-650x650.jpg'),
(48, 'MacBook Air M1 2020 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-vang-02-650x650.jpg'),
(49, 'MacBook Air M1 2020 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-vang-03-650x650.jpg'),
(50, 'MacBook Air M1 2020 8-Core GPU', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-vang-04-650x650.jpg'),
(51, 'iPad Air 5 WiFi', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/ipad-air-5-5G-pink-650x650.png'),
(52, 'iPad Air 5 WiFi', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/air-5-m1-wifi-cellular-hong-2-650x650.jpeg'),
(53, 'iPad Air 5 WiFi', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/air-5-m1-wifi-cellular-hong-3-650x650.jpeg'),
(54, 'iPad Air 5 WiFi', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/air-5-m1-wifi-cellular-hong-4-650x650.jpeg'),
(55, 'iPad Air 5 WiFi', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/ipad_air_cellular_pink_position-6-650x650.jpg'),
(56, 'iPad Pro M1 11 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/261710/s16/ipad-pro-m1-11-inch-cellular-wifi-silver-thumb-650x650.png'),
(57, 'iPad Pro M1 11 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/261710/s16/ipad-pro-m1-11-inch-wifi-cellular-silver-01-650x650.jpg'),
(58, 'iPad Pro M1 11 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/261710/s16/ipad-pro-m1-11-inch-wifi-cellular-silver-3-650x650.jpg'),
(59, 'iPad Pro M1 11 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/261710/s16/ipad-pro-m1-11-inch-wifi-cellular-silver-4-650x650.jpg'),
(60, 'iPad mini 6 8.3 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-5g-pink-650x650.png'),
(61, 'iPad mini 6 8.3 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-pink-3-650x650.jpg'),
(62, 'iPad mini 6 8.3 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-pink-5-650x650.jpg'),
(63, 'iPad mini 6 8.3 inch WiFi', 'https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-pink-7-650x650.jpg'),
(64, 'iPad Pro M1 12.9 inch WiFi ', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-650x650.png'),
(65, 'iPad Pro M1 12.9 inch WiFi ', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-1-650x650.jpg'),
(66, 'iPad Pro M1 12.9 inch WiFi ', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-3-650x650.jpg'),
(67, 'iPad Pro M1 12.9 inch WiFi ', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-5-650x650.jpg'),
(68, 'iPad Pro M1 12.9 inch WiFi ', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-7-650x650.jpg'),
(69, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-650x650.png'),
(70, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-2-650x650.jpg'),
(71, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-3-650x650.jpg'),
(72, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-4-650x650.jpg'),
(73, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-9-650x650.jpg'),
(74, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(75, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(76, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(77, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(78, 'Apple Watch Nike Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(79, 'Apple Watch Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/250651/s16/apple-watch-s7-lte-41mm-vien-thep-2-650x650.png'),
(80, 'Apple Watch Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/250651/s16/apple-watch-s7-lte-41mm-den-2-650x650.jpg'),
(81, 'Apple Watch Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/250651/s16/apple-watch-s7-lte-41mm-den-4-650x650.jpg'),
(82, 'Apple Watch Series 7 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/250651/s16/apple-watch-s7-lte-41mm-den-6-650x650.jpg'),
(83, 'Apple Watch Series 3 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/239158/s16/apple-watch-s3-gps-38mm-trang-650x650.png'),
(84, 'Apple Watch Series 3 GPS', 'https://cdn.tgdd.vn/Products/Images/7077/239158/s16/apple-watch-s3-gps-38mm-trang-1-650x650.jpg'),
(85, 'AirPods Pro Hộp sạc MagSafe', 'https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png'),
(86, 'AirPods Pro Hộp sạc MagSafe', 'https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-2-650x650.jpg'),
(87, 'AirPods Pro Hộp sạc MagSafe', 'https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-4-650x650.jpg'),
(88, 'AirPods Pro Hộp sạc MagSafe', 'https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-6-650x650.jpg'),
(89, 'AirPods Max', 'https://cdn.tgdd.vn/Products/Images/54/236331/s16/airpods-max-select-bac-thumb-650x650.png'),
(90, 'AirPods Max', 'https://cdn.tgdd.vn/Products/Images/54/236331/s16/bluetooth-airpods-max-apple-bac-1-650x650.jpg'),
(91, 'AirPods Max', 'https://cdn.tgdd.vn/Products/Images/54/236331/s16/bluetooth-airpods-max-apple-bac-2-650x650.jpg'),
(92, 'Tai nghe Bluetooth TWS Sony WF-1000XM3SME', 'https://cdn.tgdd.vn/Products/Images/54/272012/s16/tai-nghe-bluetooth-tws-sony-wf-1000xm3-091021-050723-650x650.png'),
(93, 'Tai nghe Bluetooth TWS Sony WF-1000XM3SME', 'https://cdn.tgdd.vn/Products/Images/54/272012/s16/tai-nghe-bluetooth-tws-sony-wf-1000xm3-2-650x650.jpg'),
(94, 'Tai nghe Bluetooth TWS Sony WF-1000XM3SME', 'https://cdn.tgdd.vn/Products/Images/54/272012/s16/tai-nghe-bluetooth-tws-sony-wf-1000xm3-4-650x650.jpg'),
(95, 'AirPods 2 Hộp sạc không dây', 'https://cdn.tgdd.vn/Products/Images/54/236025/s16/11-650x650.png'),
(96, 'AirPods 2 Hộp sạc không dây', 'https://cdn.tgdd.vn/Products/Images/54/236025/s16/3-1200x1200-1200x1200.jpg'),
(97, 'AirPods 2 Hộp sạc không dây', 'https://cdn.tgdd.vn/Products/Images/54/236025/s16/1-1200x1200-1200x1200.jpg'),
(98, 'AirPods 2 Hộp sạc không dây', 'https://cdn.tgdd.vn/Products/Images/54/236025/s16/2-1200x1200-1200x1200.jpg'),
(99, 'Pin Dự Phòng MagSafe', 'https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-211221-090310-650x650.png'),
(100, 'Pin Dự Phòng MagSafe', 'https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-3-650x650.jpg'),
(101, 'Pin Dự Phòng MagSafe', 'https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-4-650x650.jpg'),
(102, 'Adapter sạc Apple 2 cổng USB-C 35W', 'https://cdn.tgdd.vn/Products/Images/9499/284275/s16/adapter-sac-apple-type-c-35w-thumb-1-650x650.png'),
(103, 'Adapter sạc Apple 2 cổng USB-C 35W', 'https://cdn.tgdd.vn/Products/Images/9499/284275/s16/adapter-sac-apple-type-c-35w-2-3-650x650.jpg'),
(104, 'Adapter sạc Apple 2 cổng USB-C 35W', 'https://cdn.tgdd.vn/Products/Images/9499/284275/s16/adapter-sac-apple-type-c-35w-3-650x650.jpg'),
(105, 'Bộ chuyển đổi chân sạc World Travel Adapter Kit', 'https://cdn.tgdd.vn/Products/Images/9499/251656/s16/chan-sac-world-travel-adapter-kit-apple-md837-thumb-1-1-650x650.png'),
(106, 'Bộ chuyển đổi chân sạc World Travel Adapter Kit', 'https://cdn.tgdd.vn/Products/Images/9499/251656/s16/goccanh-4-650x650.jpeg'),
(107, 'Bộ chuyển đổi chân sạc World Travel Adapter Kit', 'https://cdn.tgdd.vn/Products/Images/9499/251656/s16/goccanh-5-650x650.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `inf_product`
--

CREATE TABLE `inf_product` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(1000) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `inf_product`
--

INSERT INTO `inf_product` (`id`, `type`, `name`, `price`, `image`) VALUES
(1, 'IP', 'Test Ip', '1000', 'https://cdn.tgdd.vn/Products/Images/42/244141/s16/iphone-se-red-650x650.png'),
(2, 'IP', 'Iphone 13 pro max', '2000', 'https://cdn.tgdd.vn/Products/Images/42/230529/s16/iphone-13-pro-max-gold-650x650.png'),
(3, 'IP', 'Iphone 13 pro', '25.000.000', 'https://cdn.tgdd.vn/Products/Images/42/230521/s16/iphone-13-pro-gold-650x650.png'),
(4, 'IP', 'Iphone 13 mini', '18.500.000', 'https://cdn.tgdd.vn/Products/Images/42/236780/s16/iphone-13-mini-black-650x650.png'),
(5, 'Mac', 'MacBook Pro 13 inch M2 2022', '41.999.000', 'https://cdn.tgdd.vn/Products/Images/44/285958/s16/apple-macbook-pro-m2-2022-16gb-256gb-xa%CC%81m-650x650.png'),
(6, 'Mac', 'MacBook Air M2 2022 10 core GPU', '31.999.000', 'https://cdn.tgdd.vn/Products/Images/44/282847/s16/apple-macbook-air-m2-2022-10-core-gpu-vang-650x650.png'),
(7, 'Mac', 'MacBook Air M2 2022 8 core GPU', '32.990.000', 'https://cdn.tgdd.vn/Products/Images/44/282827/s16/macbook-air-m2-2022-8-core-gpu-xa%CC%81m-650x650.png'),
(8, 'Mac', 'MacBook Pro 13 inch M2 2022', '35.990.000', 'https://cdn.tgdd.vn/Products/Images/44/282828/s16/apple-pro-m2-2022-xam-650x650.png'),
(9, 'Mac', 'iMac 24 inch M1 2021 8-Core GPU', '43.490.000', 'https://cdn.tgdd.vn/Products/Images/5698/264394/s16/imac-24-inch-m1-2021-8-core-gpu-bac-650x650.png'),
(10, 'Mac', 'MacBook Air M1 2020 8-Core GPU', '39.990.000', 'https://cdn.tgdd.vn/Products/Images/44/264420/s16/macbook-air-m1-2020-8-core-gpu-gold-thumb-650x650.png'),
(11, 'Ipad', 'iPad Air 5 WiFi', '24.490.000', 'https://cdn.tgdd.vn/Products/Images/522/274156/s16/ipad-air-5-5G-pink-650x650.png'),
(12, 'Ipad', 'iPad Air 5 WiFi', '20.490.000', 'https://cdn.tgdd.vn/Products/Images/522/274155/s16/air-5-m1-wifi-cellular-xanh-thumb-650x650.png'),
(13, 'Ipad', 'iPad Pro M1 11 inch WiFi', '30.990.000', 'https://cdn.tgdd.vn/Products/Images/522/261710/s16/ipad-pro-m1-11-inch-cellular-wifi-silver-thumb-650x650.png'),
(14, 'Ipad', 'iPad mini 6 8.3 inch WiFi', '16.990.000', 'https://cdn.tgdd.vn/Products/Images/522/250734/s16/ipad-mini-6-5g-pink-650x650.png'),
(15, 'Ipad', 'iPad Pro M1 12.9 inch WiFi', '29.290.000', 'https://cdn.tgdd.vn/Products/Images/522/238649/s16/ipad-pro-m1-129-inch-wifi-cellular-gray-650x650.png'),
(16, 'Watch', 'Apple Watch Nike Series 7 GPS', '14.990.000', 'https://cdn.tgdd.vn/Products/Images/7077/266360/s16/apple-watch-nike-series-7-gps-cellular-41mm-650x650.png'),
(17, 'Watch', 'Apple Watch Nike Series 7 GPS', '10.490.000', 'https://cdn.tgdd.vn/Products/Images/7077/254326/s16/apple-watch-series-7-gps-41mm-trang-650x650.png'),
(18, 'Watch', 'Apple Watch Series 7 GPS', '19.990.000', 'https://cdn.tgdd.vn/Products/Images/7077/250651/s16/apple-watch-s7-lte-41mm-vien-thep-2-650x650.png'),
(19, 'Watch', 'Apple Watch Series 3 GPS', '4.890.000', 'https://cdn.tgdd.vn/Products/Images/7077/239158/s16/apple-watch-s3-gps-38mm-trang-650x650.png'),
(20, 'Airpod', 'AirPods Pro Hộp sạc MagSafe', '5.390.000', 'https://cdn.tgdd.vn/Products/Images/54/253802/s16/bluetooth-airpods-pro-magsafe-charge-apple-mlwk3-261121-033421-650x650.png'),
(21, 'Airpod', 'AirPods Max', '12.590.000', 'https://cdn.tgdd.vn/Products/Images/54/236331/s16/airpods-max-select-bac-thumb-650x650.png'),
(22, 'Airpod', 'Tai nghe Bluetooth TWS Sony WF-1000XM3SME', '4.790.000', 'https://cdn.tgdd.vn/Products/Images/54/272012/s16/tai-nghe-bluetooth-tws-sony-wf-1000xm3-091021-050723-650x650.png'),
(23, 'Airpod', 'AirPods 2 Hộp sạc không dây', '3.490.000', 'https://cdn.tgdd.vn/Products/Images/54/236025/s16/11-650x650.png'),
(24, 'Acry', 'Pin Dự Phòng MagSafe', '2.390.000', 'https://cdn.tgdd.vn/Products/Images/57/266084/s16/pin-apple-magsafe-battery-pack-211221-090310-650x650.png'),
(25, 'Acry', 'Adapter sạc Apple 2 cổng USB-C 35W', '1.520.000', 'https://cdn.tgdd.vn/Products/Images/9499/284275/s16/adapter-sac-apple-type-c-35w-thumb-1-650x650.png'),
(26, 'Acry', 'Bộ chuyển đổi chân sạc World Travel Adapter Kit', '870.000', 'https://cdn.tgdd.vn/Products/Images/9499/251656/s16/chan-sac-world-travel-adapter-kit-apple-md837-thumb-1-1-650x650.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `img_big4detail`
--
ALTER TABLE `img_big4detail`
  ADD PRIMARY KEY (`id_b`);

--
-- Chỉ mục cho bảng `inf_product`
--
ALTER TABLE `inf_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `img_big4detail`
--
ALTER TABLE `img_big4detail`
  MODIFY `id_b` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT cho bảng `inf_product`
--
ALTER TABLE `inf_product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
