-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2023 at 06:21 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `duan1`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int(11) NOT NULL,
  `madh` varchar(20) NOT NULL,
  `iduser` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tel` varchar(50) NOT NULL,
  `tongdonhang` double(10,2) NOT NULL,
  `pttt` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:CDO;1:CK;2:VIsa',
  `trangthai` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0:dhm;1:cxn;2:dgh;3:gtc',
  `Ngaydathang` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `madh`, `iduser`, `name`, `address`, `email`, `tel`, `tongdonhang`, `pttt`, `trangthai`, `Ngaydathang`) VALUES
(4, 'MVDGIAY24378695', 0, 'Nguyễn Văn Tịnh', '14/21 Trương Công Giai', 'vantinh16082003@fp.edu.vn', '0372699302', 1234.00, 0, 3, '2023-12-07'),
(5, 'MVDGIAY46964544', 0, 'Nguyễn Văn Tịnh', '14/21 Trương Công Giai', 'vantinh16082003@fp.edu.vn', '0372699302', 1234.00, 0, 0, '2023-12-07'),
(6, 'MVDGIAY40630358', 0, 'Nguyễn Văn Tịnh', '14/21 Trương Công Giai', 'vantinh16082003@fp.edu.vn', '0372699302', 1234.00, 0, 0, '2023-12-07'),
(7, 'MVDGIAY25810897', 0, 'Nguyễn Văn Tịnh', '14/21 Trương Công Giai', 'vantinh16082003@fp.edu.vn', '0372699302', 1234.00, 0, 0, '2023-12-07'),
(8, 'MVDGIAY86337774', 0, 'Nguyễn Văn Tịnh', '14/21 Trương Công Giai', 'vantinh16082003@gmail.com', '0372699302', 18001234.00, 1, 0, '2023-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `idpro` int(11) NOT NULL,
  `thanhtien` double(10,2) NOT NULL,
  `tensp` varchar(199) NOT NULL,
  `img` varchar(199) NOT NULL,
  `soluong` int(11) NOT NULL,
  `iddh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idpro`, `thanhtien`, `tensp`, `img`, `soluong`, `iddh`) VALUES
(1, 0, 0.00, 'bdc0eef2-4176-4969-af7b-612793267ab7.webp', '3500000.00', 1, 14),
(2, 0, 0.00, 'bdc0eef2-4176-4969-af7b-612793267ab7.webp', '3500000.00', 1, 14),
(3, 0, 0.00, 'f5ff7fcc-0ab8-4883-9dd8-cd2085ba8db0.webp', '9000000.00', 1, 15),
(4, 0, 0.00, 'f5ff7fcc-0ab8-4883-9dd8-cd2085ba8db0.webp', '9000000.00', 1, 15),
(5, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(6, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(7, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(8, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(9, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(10, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(11, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(12, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(13, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(14, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(15, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(16, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(17, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(18, 0, 0.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', '1234.00', 1, 16),
(19, 0, 0.00, 'f5ff7fcc-0ab8-4883-9dd8-cd2085ba8db0.webp', '9000000.00', 2, 15),
(20, 0, 0.00, 'f5ff7fcc-0ab8-4883-9dd8-cd2085ba8db0.webp', '9000000.00', 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `name_dm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `name_dm`) VALUES
(8, 'Jordan'),
(10, 'Nike Airmax'),
(12, 'Nike jordan 1'),
(13, 'Nike jordan 2'),
(14, 'Nike jordans 3'),
(15, 'doraemon'),
(16, 'Giày adidas');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` double(10,2) NOT NULL,
  `img` text DEFAULT NULL,
  `mota` text DEFAULT NULL,
  `luotxem` int(10) NOT NULL,
  `iddm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `name`, `price`, `img`, `mota`, `luotxem`, `iddm`) VALUES
(7, 'Giày jordan mid panda', 3900000.00, '6dd5c76b-c124-45f3-952e-a89d0741bcdf.webp', 'Giày rất dệp và xin', 0, 8),
(8, 'Nike Airmax 1', 2350000.00, '428b09d0-e330-4503-a0f6-75c729635dcc.webp', 'Giày rất êm và đẹp', 0, 10),
(9, 'Nike Airmax 2', 2450000.00, '501b85a2-8e91-4348-b75f-609c18b2bb51.webp', 'Giày rất êm và đẹp', 0, 10),
(10, 'Nike Airmax 3', 2550000.00, '7335efc7-663a-4deb-9168-f049dcdc400f.webp', 'Giày rất êm và đẹp', 0, 10),
(11, 'Giày jordan 3 q', 4500000.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', 'Giày rất đẹp nhé', 0, 14),
(12, 'Giày nike jordan 2 q', 2390000.00, 'bdc0eef2-4176-4969-af7b-612793267ab7.webp', 'Giày rất êm và đẹp', 0, 13),
(13, 'Giày nike jordan 1 q', 8900000.00, 'b1bcbca4-e853-4df7-b329-5be3c61ee057.webp', 'Giày rất êm và đẹp', 0, 12),
(14, 'Giày nike dunk low panda', 3500000.00, 'bdc0eef2-4176-4969-af7b-612793267ab7.webp', 'Giày đi rất êm và đẹp ạ\r\n', 0, 12),
(15, 'Giày nike airmax 15', 9000000.00, 'f5ff7fcc-0ab8-4883-9dd8-cd2085ba8db0.webp', 'Giày đi rất em và đẹp', 0, 14),
(16, 'Giày adidas', 1234.00, '30707017-6950-4d9e-bcfb-e5fe01336a9d.webp', 'qqq', 0, 16);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `tel` varchar(20) DEFAULT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `email`, `address`, `tel`, `role`) VALUES
(1, 'munters1', 123456, 'vantinh16082003@gmail.com', 'Thiệu Thành-Thiệu Hoá-Thanh Hoá', '0372699302', 0),
(3, 'handboy1xc', 111111, 'vantinh16082003@fp.edu.vn', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_dm` (`iddm`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sp_dm` FOREIGN KEY (`iddm`) REFERENCES `danhmuc` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
