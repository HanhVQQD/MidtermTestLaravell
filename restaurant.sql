-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2022 at 07:00 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Bread'),
(2, 'FoodItalia'),
(3, 'Rice'),
(4, 'FoodItalia'),
(5, 'Bread');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2022_07_01_013237_categories', 1),
(3, '2022_07_01_013401_products', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `promotionPrice` int(11) NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `id_type` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `image`, `price`, `promotionPrice`, `description`, `quantity`, `id_type`, `created_at`, `updated_at`) VALUES
(1, 'Cơm xíu mại', 'Hinh7.jpg', 50, 60, 'Với thịt xay ngon thì bạn nên mua ở những cửa hàng bách hóa hay siêu thị lớn để đảm bảo chất lượng. Đồng thời, bạn nên chọn phần thịt có màu đỏ tươi và có một ít mỡ để món ăn không bị khô.', 1000, 1, '2022-06-30 20:18:21', '2022-06-30 20:18:21'),
(2, 'Cơm cháy', 'Hinh8.jpg', 65, 70, 'Khi cơm cháy đã vàng đều các mặt thì vớt ra, đặt lên giấy thấm dầu. Mẹo: Bạn nên chiên ngập dầu để nếp được nở hết, cơm cháy mới giòn ngon.', 20, 2, '2022-06-30 20:18:21', '2022-06-30 20:18:21'),
(3, 'Bánh mì thập cẩm', 'Hinh1.jpg', 15, 30, 'món bánh mì đã có từ khoảng 150 năm trước, sau này, nó đã lan rộng khắp 3 miền Bắc, Trung, Nam và trở thành món ăn không thể thiếu đối với người Việt.', 80, 1, '2022-06-30 20:18:21', '2022-06-30 20:18:21'),
(4, 'Bánh mì thịt nướng', 'Hinh2.jpg', 20, 40, 'Món bánh mì Việt Nam được biến tấu, tùy theo những vùng miền khác nhau mà có những kiểu nhân khác nhau', 600, 2, '2022-06-30 20:18:21', '2022-06-30 20:18:21'),
(5, 'Bánh mì trứng', 'Hinh3.jpg', 10, 11, 'món bánh mì đã có từ khoảng 150 năm trước, sau này, nó đã lan rộng khắp 3 miền Bắc, Trung, Nam và trở thành món ăn không thể thiếu đối với người Việt.', 500, 1, '2022-06-30 20:18:21', '2022-06-30 20:18:21'),
(6, 'Bánh mì dài', 'Hinh4.jpg', 16, 30, 'Bánh mì Việt Nam hay còn có tên gọi khác là bánh mì, loại bánh này có xuất xứ từ bánh baguette của người Pháp, đưa vào Việt Nam vào khoảng thế kỷ trước.', 550, 2, '2022-06-30 20:18:21', '2022-06-30 20:18:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
