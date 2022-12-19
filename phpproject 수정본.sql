-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 22-12-19 18:56
-- 서버 버전: 10.4.27-MariaDB
-- PHP 버전: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `phpproject`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `restaurant_report`
--

CREATE TABLE `restaurant_report` (
  `no` int(11) NOT NULL,
  `name` varchar(10) NOT NULL,
  `type` varchar(5) NOT NULL,
  `review_text` text NOT NULL,
  `review_score` int(11) NOT NULL,
  `location_x` int(11) NOT NULL,
  `location_y` int(11) NOT NULL,
  `food_menu` varchar(50) NOT NULL,
  `food_photo` varchar(50) NOT NULL,
  `food_price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `restaurant_review`
--

CREATE TABLE `restaurant_review` (
  `no` int(11) NOT NULL,
  `food_type` varchar(5) NOT NULL,
  `food_name` varchar(10) NOT NULL,
  `total_score` int(11) NOT NULL,
  `review` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- 테이블 구조 `user_info`
--

CREATE TABLE `user_info` (
  `no` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- 테이블의 덤프 데이터 `user_info`
--

INSERT INTO `user_info` (`no`, `id`, `password`) VALUES
(1, 332423, 'ds'),
(2, 3324233, 'ds');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `restaurant_report`
--
ALTER TABLE `restaurant_report`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `restaurant_review`
--
ALTER TABLE `restaurant_review`
  ADD PRIMARY KEY (`no`);

--
-- 테이블의 인덱스 `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`no`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `restaurant_report`
--
ALTER TABLE `restaurant_report`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `restaurant_review`
--
ALTER TABLE `restaurant_review`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- 테이블의 AUTO_INCREMENT `user_info`
--
ALTER TABLE `user_info`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
