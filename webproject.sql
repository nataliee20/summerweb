-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 04:08 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `prodcutID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cat`
--

CREATE TABLE `cat` (
  `CatID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat`
--

INSERT INTO `cat` (`CatID`, `Name`, `Image`) VALUES
(1, 'Main Course', '/summerweb/images/main.jfif'),
(2, 'Dessert', '/summerweb/images/dess.jfif'),
(3, 'Drinks', '/summerweb/images/drinks.jpg'),
(4, 'Fruits', '/summerweb/images/fruits.jpg'),
(5, 'Vegetables', '/summerweb/images/veg.webp'),
(6, 'Frozen Food', '/summerweb/images/frozenf.webp');

-- --------------------------------------------------------

--
-- Table structure for table `chat1`
--

CREATE TABLE `chat1` (
  `ID` int(1) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat1`
--

INSERT INTO `chat1` (`ID`, `Message`) VALUES
(1, 'No Messages Yet..');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `sent_by` varchar(200) NOT NULL,
  `received_by` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `createdAt` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL,
  `Image` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `total` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `ID` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `Name` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Price` decimal(18,2) NOT NULL,
  `productID` int(11) NOT NULL,
  `Image` text NOT NULL,
  `quantity` int(200) NOT NULL,
  `catID` int(11) NOT NULL,
  `shopID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`Name`, `Description`, `Price`, `productID`, `Image`, `quantity`, `catID`, `shopID`) VALUES
('Big Tasty Beef', 'Beef Sandwich tt', '120.00', 1, 'bigtastybeef.png', 1, 1, 1),
('Big Tasty Chicken', 'chicken patty', '110.00', 2, 'bigtastychicken.png', 2, 1, 1),
('Sundae', 'Vanilla icecream topped with chocolate syrup', '30.00', 3, 'dessert.jpg', 4, 2, 1),
('Mcflurry', 'Icecream topped with oreo', '50.00', 4, 'icecream.jpg', 4, 2, 1),
('Cola', 'Softdrink', '30.00', 5, 'cola.jpg', 5, 3, 1),
('Orange Juice', 'Juice', '20.00', 6, 'orange.jpg', 5, 3, 1),
('Twister ', 'Chicken Sandwich', '80.00', 7, 'twister.jfif', 6, 1, 2),
('Share Box', '3 chicken pieces', '90.00', 8, 'sharebox.jfif', 7, 1, 2),
('Cola', 'Softdrink', '40.00', 9, 'cola.jpg', 1, 3, 2),
('Orange Juice', 'Juice', '60.00', 10, 'drinkskfc.jpg', 1, 3, 2),
('Sandwiches', 'Beef and Chicken patties', '100.00', 11, 'sandwicheswimpy.jpg', 1, 1, 3),
('Breakfast', 'susages served with fries', '110.00', 12, 'breakfast.jfif', 1, 1, 3),
('Waffle', 'waffle with chocolate', '70.00', 13, 'wimpydes2.jpg', 1, 2, 3),
('IceCream', 'icecream cone', '20.00', 14, 'icecream.jpg', 1, 2, 3),
('Cola', 'softdrink', '40.00', 15, 'cola.jpg', 1, 3, 3),
('Sprite', 'softdrink', '40.00', 16, 'sprite.jpg', 1, 3, 3),
('Strawberries', '1 kg of Strawberries', '20.00', 17, 'strawberry.jfif', 1, 4, 4),
('Oranges', '1 kg of oranges', '20.00', 18, 'Oranges.jpg', 1, 4, 4),
('Cucumbers', '1 kg of cucumbers ', '22.00', 19, 'cucumbers.jfif', 1, 5, 4),
('Tomatos', '1 kg of tomatos', '25.00', 20, 'tom2.jfif', 1, 5, 4),
('Farme frites fries', 'French fries', '60.00', 21, 'fries.jfif', 1, 6, 4),
('Atyab Strips', 'Chicken strips', '85.00', 22, 'strips.jfif', 1, 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `shop`
--

CREATE TABLE `shop` (
  `ShopID` int(100) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Logo` text NOT NULL,
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop`
--

INSERT INTO `shop` (`ShopID`, `Name`, `Logo`, `Description`) VALUES
(1, 'MC Donald\'s', '/summerweb/images/macc.png', 'Fastest Delivery, available online delivery fo2 24/7'),
(2, 'KFC', '/summerweb/images/kfc.jpg', 'Fastest Delivery, available online delivery fo2 24/7'),
(3, 'Wimpy', '/summerweb/images/wimpy.png', 'Fastest Delivery, available online delivery fo2 24/7'),
(4, 'Gourmet', '/summerweb/images/grocery.jpg', 'All your home grocery and food are available');

-- --------------------------------------------------------

--
-- Table structure for table `shop_cat`
--

CREATE TABLE `shop_cat` (
  `ID` int(11) NOT NULL,
  `shopID` int(11) NOT NULL,
  `catID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_cat`
--

INSERT INTO `shop_cat` (`ID`, `shopID`, `catID`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 4, 4),
(5, 4, 5),
(6, 4, 6),
(8, 2, 1),
(9, 2, 3),
(11, 3, 1),
(12, 3, 2),
(13, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserName` varchar(200) NOT NULL,
  `Password` varchar(200) NOT NULL,
  `FName` varchar(200) NOT NULL,
  `LName` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `UserID` int(11) NOT NULL,
  `Address` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserName`, `Password`, `FName`, `LName`, `Email`, `UserID`, `Address`) VALUES
('Hassan2000', '1234', 'Hassan', 'Sakr', 'hassan@email.com', 5, ''),
('Hassan2000', '1234', 'Hassan', 'Sakr', 'hassan@email.com', 6, ''),
('natalie', '123', 'natalie', 'sherif', 'natalie@gmail.com', 8, ''),
('nathalie', '123', 'natalie', 'sherif', 'natalie@gmail.com', 9, ''),
('nat', '123', 'natalie', 'sherif', 'natalie@gmail.com', 10, ''),
('ahmeddd', '456', 'ahmed', 'ammar', 'ahmed@gmail.com', 11, ''),
('neww', '123', 'new', 'x', 'new@new.com', 12, ''),
('mm', '123', 'mariam', 'Galal', 'mm@mm', 13, ''),
('mm', '123', 'mariam', 'Galal', 'mm@mm', 14, ''),
('ss', '123', 'maiam', 'aa', 'a@a.com', 15, ''),
('mariamgalall', '123', 'mariam', 'galal', 'mariam@gmail.com', 17, ''),
('aa', '123', 'Maha', 'Mohamed', 'mm@mm', 18, ''),
('newxx', '123', 'newx', 'newxx', 'newx@gmail.com', 19, 'xxxxxxxxx'),
('mariii', '123', 'mariam', 'galalll', 'mariam@gmail.com', 20, 'xxx4='),
('nat', '123', 'nat', 'tt', 'nat@gmail.com', 21, 'Room 204 Hotel Am Markt'),
('rewann', '123', 'rewan', 'ayman', 'rewan@mail.com', 22, 'xxxx');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cat`
--
ALTER TABLE `cat`
  ADD PRIMARY KEY (`CatID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `shop`
--
ALTER TABLE `shop`
  ADD PRIMARY KEY (`ShopID`);

--
-- Indexes for table `shop_cat`
--
ALTER TABLE `shop_cat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cat`
--
ALTER TABLE `cat`
  MODIFY `CatID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `shop`
--
ALTER TABLE `shop`
  MODIFY `ShopID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `shop_cat`
--
ALTER TABLE `shop_cat`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
