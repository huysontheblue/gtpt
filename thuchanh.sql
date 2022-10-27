-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:41 PM
-- Server version: 5.7.24
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thuchanh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Trọ Thường'),
(2, 'Trọ Cao Cấp'),
(3, 'Chung Cư');

-- --------------------------------------------------------

--
-- Table structure for table `districks`
--

CREATE TABLE `districks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `districks`
--

INSERT INTO `districks` (`id`, `name`) VALUES
(1, 'tp Vinh'),
(2, 'Hà Nội'),
(3, 'Lào cai'),
(4, 'Yên bái');

-- --------------------------------------------------------

--
-- Table structure for table `motel`
--

CREATE TABLE `motel` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `area` int(11) NOT NULL,
  `count_view` int(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `latlng` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `district_id` int(11) NOT NULL,
  `utilities` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL,
  `phone` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motel`
--

INSERT INTO `motel` (`id`, `title`, `description`, `price`, `area`, `count_view`, `address`, `latlng`, `images`, `user_id`, `category_id`, `district_id`, `utilities`, `created_at`, `phone`, `approve`) VALUES
(8, 'Trọ ba tám', '3\r\nTry to use a Trigger. As example, when creating a new entry, the trigger will be activated and will execute, like an event in c# or an Action listener in Java!', 600000, 4, 3, 'gần trọ bà mai', 'gần trọ bà mai', '../uploads/573de890878037539c1b828e58e37064.jpeg', 1, 1, 1, 'Trọ bà mai', '2021-12-01 13:06:01', '456456456456', 1),
(9, 'Trọ của Hoàng Duyên', 'Positive (N): When this parameter is passed with a positive value it means that the array will contain this number of elements. If the number of elements after separating with respect to the separator emerges to be greater than this value the first N-1 elements remain the same and the last element is the whole remaining string.', 200000, 6, 1, 'Gần nhà bà tám bán bún', '234324', '../uploads/400a3668b9b76edf41c42be658f0fea4.jpg', 2, 1, 1, 'Wifi Miễn Phí, Nước Phờ ri', '2021-12-01 13:11:29', '0987585452', 1),
(10, 'Bà Mai Hoàng', 'Tạo trang Hiển thị danh sách thông tin phòng trọ theo các mục\r\no Các phòng trọ xem nhiều nhất (*)\r\no Các phòng trọ mới được đăng tải (*)\r\no Các phòng trọ gần trường ĐH Vinh nhất (*)', 200000, 5, 2, '63 Hải Thượng', 'n trường ĐH Vinh n', '../uploads/d4e2ca0213cf7573796dbcd7eea4b4b6.jpeg', 1, 1, 1, 'Wifi Trả Tiền, Điện nước gấp đôi', '2021-12-01 13:32:54', '098498545245', 1);

-- --------------------------------------------------------

--
-- Table structure for table `phongtro`
--

CREATE TABLE `phongtro` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `acreage` int(11) NOT NULL,
  `price` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `role` int(11) NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8mb4 NOT NULL,
  `avata` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `password`, `role`, `phone`, `avata`, `email`, `status`) VALUES
(1, 'Đinh Viết Duy', 'dinhvietduy', '731c827f6d0107d3e50d10600edc7095', 0, 'dinhvietduy', '../uploads/unnamed.ico', 'dinhvietduy', 1),
(2, 'Hoàng Duyên', 'thunghiem', '38a3c105ba587ba5b7ae3026603a07d8', 0, '0984929813', 'https://datxanhhatinh.com/wp-content/uploads/2020/06/46315527.jpg', 'sbrown@example.net', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districks`
--
ALTER TABLE `districks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `motel`
--
ALTER TABLE `motel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phongtro`
--
ALTER TABLE `phongtro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `districks`
--
ALTER TABLE `districks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `motel`
--
ALTER TABLE `motel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `phongtro`
--
ALTER TABLE `phongtro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
