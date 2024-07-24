-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2024 at 06:37 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(100) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_ip` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_ip`) VALUES
(1, 'sameer', 'rockstarsamir23@gmail.com', '$2y$10$oH5Y.qc/pmbGsCTU5yV3DuGPYs0.905xNpHFQlLkvgIb/8D2qc7.K', ''),
(2, 'Ayudh', 'mark@23gmail.com', '$2y$10$QCX1xMydxS033U7YpjxnbO7WZihOsbFmENDjgTX7MHi2hNgNiGOMS', '::1'),
(3, 'ayudh_pantha', 'rockstar@gmail.com', '$2y$10$RIpOWtJP4Qy4sdW2poABcuPgLyH/UFsXPk9yX8WdMTg5IVHLaPpmm', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brands_id` int(200) NOT NULL,
  `brand_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brand_name`) VALUES
(1, 'Yamaha'),
(2, 'Bajaj'),
(3, 'Honda'),
(4, 'Mahindra'),
(5, 'TATA'),
(6, 'BMW'),
(9, 'Mustang'),
(10, 'Royal-Enfield');

-- --------------------------------------------------------

--
-- Table structure for table `cart_details`
--

CREATE TABLE `cart_details` (
  `product_id` int(11) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `quantity` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart_details`
--

INSERT INTO `cart_details` (`product_id`, `ip_address`, `quantity`) VALUES
(2, '::1', 1),
(3, '::1', 1),
(4, '::1', 1),
(5, '::1', 1),
(8, '::1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(100) NOT NULL,
  `category_name` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(3, 'Light'),
(4, 'Dirt'),
(5, 'Hottest Bikes'),
(6, 'Moped'),
(8, 'Latest'),
(9, 'Hottest'),
(11, 'Electric Bikes'),
(12, 'Royal Enfield');

-- --------------------------------------------------------

--
-- Table structure for table `orders_pending`
--

CREATE TABLE `orders_pending` (
  `order_id` int(11) NOT NULL,
  `ip_address` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `invoice_number` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `order_status` varchar(100) NOT NULL,
  `fullname` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `street` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(10) NOT NULL,
  `province` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders_pending`
--

INSERT INTO `orders_pending` (`order_id`, `ip_address`, `user_id`, `invoice_number`, `product_id`, `from_date`, `to_date`, `order_status`, `fullname`, `address`, `city`, `street`, `email`, `contact`, `province`, `payment`) VALUES
(1, '::1', 6, 294426285, 5, '2024-05-30', '2024-06-04', 'Confirmed', 'Nirjala Maharjan', 'Godawari ', 'lalitpur', 'Taukhel', 'rockstar@gmail.com', 986547123, '4', 'cash');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(255) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `product_features` longtext NOT NULL,
  `product_keywords` varchar(255) NOT NULL,
  `category_id` int(20) NOT NULL,
  `brand_id` int(20) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `price` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_title`, `product_description`, `product_features`, `product_keywords`, `category_id`, `brand_id`, `product_image1`, `product_image2`, `product_image3`, `price`, `date`, `status`) VALUES
(2, 'Racing Bike', 'Heavy Bike With monster Sound', ' Mileage of around 35-45 km/l, Classic retro styling, Single-cylinder and twin-cylinder engines, Robust build quality, Comfortable riding ergonomics, Advanced ABS (Anti-lock Braking System), Dual disc brakes, Fuel injection system, Long-stroke engine design, Smooth gear transitions, LED lighting, Digital-analog instrument cluster, Spoked wheels', 'Racing Bike, MotoGP,SuperBike', 5, 6, 'front-image.jpg', 'bckgrdbike.jpg', 'background.jpg', '7000', '2024-05-22 11:58:31', 'true'),
(5, 'Yamaha V3', 'Yamaha V3 Very Good Bike Rated the best Bike in the WOrld', '  Mileage of around 35-45 km/l, Classic retro styling, Single-cylinder and twin-cylinder engines, Robust build quality, Comfortable riding ergonomics, Advanced ABS (Anti-lock Braking System), Dual disc brakes, Fuel injection system, Long-stroke engine design, Smooth gear transitions, LED lighting, Digital-analog instrument cluster, Spoked wheels, Telescopic front suspension, Dual shock rear suspension, Varied color options, Customization accessories, Tubeless tires, Large fuel tank capacity, High torque output, Reliable performance, Low maintenance costs, Vintage-inspired design elements, Comfortable seating for long rides, High ground clearance, Durable and rugged construction, Iconic exhaust note, Windshield options, Luggage rack options, Classic and modern variant choices.', 'Yamaha V3  Red Bike Black Bike Stylish Bike', 5, 1, 'img2.png', 'img6.png', 'img2.png', '3000', '2024-05-22 11:55:18', 'true'),
(6, 'CrossFire X!2', 'Offroad Bike Dirt Bike Cross Fire Runs For the Mountain', ' Mileage of around 30-40 km/l, Off-road performance, Lightweight and durable construction, Reliable single-cylinder engine, Aggressive and rugged styling, Adjustable suspension, Disc brakes for reliable stopping power, Knobby tires for off-road traction, High ground clearance, Dual-sport capability, Electric start for convenience, Manual clutch for precise control, Fuel-efficient design, Easy maintenance, Comfortable off-road riding ergonomics, Versatile terrain handling, Affordable price point, Dirt bike racing appeal, Customization options, Suitable for beginners and experienced riders alike, Adventure-ready capabilities, Off-road adventure gear compatibility, Iconic dirt bike design elements, Exciting riding experience, Off-road adrenaline rush, Off-road and trail riding suitability, Robust chassis and frame design, Dirt bike community support, Trail-riding-friendly features, Suitable for various off-road environments, All-terrain performance, Off-road suspension system, and Off-road riding accessories compatibility.', 'Offroad Bike Dirt Bike Cross Fire Runs For the Mountain', 4, 4, 'img10.png', 'img9.png', 'img8.png', '3000', '2024-05-22 12:02:10', 'true'),
(7, 'Bullet', 'Heavy Bike Bullet Bike Runs Wild', 'Mileage of around 35-45 km/l, Classic retro styling, Single-cylinder and twin-cylinder engines, Robust build quality, Comfortable riding ergonomics, Advanced ABS (Anti-lock Braking System), Dual disc brakes, Fuel injection system, Long-stroke engine design, Smooth gear transitions, LED lighting, Digital-analog instrument cluster, Spoked wheels', 'Heavy Bike Bullet Bike Runs Wild', 12, 10, 'img4.png', 'pexels-nishant-aneja-2393835.jpg', 'pexels-nishant-aneja-2393835.jpg', '4000', '2024-05-21 18:01:45', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `product_id` int(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `comment` longtext NOT NULL,
  `star` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`product_id`, `username`, `comment`, `star`, `date`) VALUES
(2, 'sameer', 'NIce Bike Dream Bike', 5, '2024-05-22 11:17:13'),
(2, 'ayudh_pantha', 'This is BIke is so wack. ONly for show its brilliant but got no power it should have and mileage like worst gives 10km/hr. i dont suggest it to anyone', 5, '2024-05-23 02:15:50'),
(2, 'ayudh_pantha', '', 1, '2024-05-23 02:16:09'),
(7, 'sameer', 'Goood BIke', 4, '2024-05-26 08:53:04'),
(5, 'sameer', 'good bike', 4, '2024-05-26 13:41:24'),
(2, 'Hardworker', 'Good stopp eating good this is the best bike in the town. I give it a one hundred star if it was possible', 5, '2024-06-09 06:39:58');

-- --------------------------------------------------------

--
-- Table structure for table `users_orders`
--

CREATE TABLE `users_orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` int(200) NOT NULL,
  `invoice_number` int(255) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `user_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_image` varchar(255) NOT NULL,
  `user_ip` varchar(100) NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `user_mobile` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`user_id`, `username`, `user_email`, `user_password`, `user_image`, `user_ip`, `user_address`, `user_mobile`) VALUES
(5, 'ayudh_pantha', 'panthaayudh23@gmail.com', '$2y$10$Tk5iWKU2aBEfOhk.9JN1.eaNz0zvkpX/I1naE2ITSJXkW9ObjWlNm', 'ladyrider.jpg', '::1', 'Dhapakhel', '6546548965'),
(6, 'sameer', 'rockstar@gmail.com', '$2y$10$7sK8QDevKlyvUb7NrNI9eOQso0DX.M0CubYVqFXtbAY4M2WJh7xHq', 'me1.jpeg', '::1', 'Dhapakhel', '54646654');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brands_id`);

--
-- Indexes for table `cart_details`
--
ALTER TABLE `cart_details`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `orders_pending`
--
ALTER TABLE `orders_pending`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users_orders`
--
ALTER TABLE `users_orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brands_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders_pending`
--
ALTER TABLE `orders_pending`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users_orders`
--
ALTER TABLE `users_orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
