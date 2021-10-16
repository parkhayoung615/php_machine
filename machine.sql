-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 21-07-18 15:50
-- 서버 버전: 10.4.20-MariaDB
-- PHP 버전: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `machine`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `machine`
--

CREATE TABLE `machine` (
  `id` int(100) NOT NULL,
  `name` varchar(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 테이블의 덤프 데이터 `machine`
--

INSERT INTO `machine` (`id`, `name`, `amount`, `price`) VALUES
(1, '밀크커피', 10, 400),
(2, '생수', 10, 500),
(3, '캔커피', 10, 600),
(4, '오렌지 쥬스', 10, 700),
(5, '환타', 10, 800),
(6, '보리차', 10, 1200),
(7, '포카리스웨트', 10, 1500),
(8, '콜라', 10, 1500),
(9, '사이다', 10, 1500),
(10, '민초우유', 10, 1800);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
