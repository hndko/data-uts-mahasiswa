-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 04:17 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datamhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhspaw2`
--

CREATE TABLE `mhspaw2` (
  `nbi` char(10) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(10) NOT NULL,
  `no` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mhspaw2`
--

INSERT INTO `mhspaw2` (`nbi`, `nama`, `alamat`, `no`) VALUES
('461203659', 'Moh. Khoirul Arifin', 'Surabaya', '08123456789'),
('461203660', 'Dennys', 'Gresik', '08198765432'),
('461203661', 'Indra', 'Sidoarjo', '08543234565'),
('461203662', 'Faizal', 'Surabaya', '08456987234'),
('461203663', 'Poerwoko', 'Surabaya', '08445460981'),
('461203664', 'Zainudin', 'Lamongan', '08598765456'),
('461203665', 'Nizam', 'Lamongan', '08208765451'),
('461203666', 'Bagus', 'Madura', '08665433456'),
('461203667', 'Sofi', 'Madura', '08209876876'),
('461203668', 'Budi', 'Madura', '08487654334'),
('461203669', 'Angga', 'Surabaya', '08398765445'),
('461304659', 'Dwi', 'Surabaya', '08598765434'),
('461304660', 'Yahya', 'Sidoarjo', '08676788765'),
('461304661', 'Herman', 'Sidoarjo', '08387657764'),
('461304662', 'Hendra', 'Surabaya', '08498765425'),
('461304663', 'Rian', 'Lamongan', '08598765431'),
('461304664', 'Fahrudin', 'Gresik', '08489765466'),
('461304665', 'Ronaldo', 'Lamongan', '08276545678');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
