-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 21, 2021 at 03:03 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodordermodel`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Subject` varchar(250) NOT NULL,
  `Message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Subject`, `Message`) VALUES
('CHANDAN KUMAR', 'ckj40856@gmail.com', 'sa', ''),
('CHANDAN KUMAR', 'ckj40856@gmail.com', 'sa', ''),
('BIRJU KUMAR', 'ckj40856@gmail.com', 'asd', 'asdasdasd'),
('CHANDAN KUMAR', 'ckj40856@gmail.com', 'asd', 'hfgdsfsx'),
('rose', 'rose@gmail.com', 'about my order', 'i order and it is not deliver till now'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('tolu', 'adeleke@gmail.com', 'seyi', 'i love your food'),
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('james', 'james@gmail.com', '09088776654', 'please i nedd food\r\n'),
('james', 'james@gmail.com', '09088776654', 'please i nedd food\r\n'),
('dayo ', 'seun@gmail.com', 'adeleke', 'i can\'t order now'),
('', '', '', ''),
('james', 'james@gmail.com', '09088114433', 'I need cake and drinks'),
('fayose', 'fayose@gmail.com', '0908811233', 'i need groceries');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`username`, `fullname`, `email`, `contact`, `password`) VALUES
('', '', 'babe@gmail.com', '778899', 'babe'),
('accra', 'adeleke', 'adeleke@gmail.com', '09012234566', 'adeleke'),
('acne', 'babe', 'babe@gmail.com', '778899', 'babe'),
('adeayo', 'jane', 'jane@gmail.com', '0908877112', 'jane'),
('adeewa', 'shade', 'shade@gmail.com', '09088776655', 'shade'),
('adewale', 'adeleke', 'wale@gmail.com', '090888776', 'wale'),
('birju', 'BIRJU KUMAR', 'bkm123r@gmail.com', '8903079750', 'Birju123@'),
('ckumar', 'CHANDAN KUMAR', 'ckj40856@gmail.com', '9487810674', 'Ckumar123@'),
('clara', 'constance', 'clara@gmail.com', '00909887', 'clara'),
('clement', 'myles', 'myles@gmail.com', '13243433222', 'myles'),
('dave', 'alex', 'alex@gmail.com', '09088776633', 'alex'),
('Degbe Romuald', 'soft', 'software@gmail.com', '0908766333', 'soct'),
('dele', 'posi', 'posi@gmail.com', '0999887776', 'ola'),
('fayose', 'adeleke', 'adele@gmail.com', '09012345678', 'adeleke'),
('fisayo', 'adesewa', 'ade@gmail.com', '09088112233', 'qwerty'),
('Francis', 'Smith', 'francis@gmail.com', '09088776655', 'francis'),
('gbenga', 'anu', 'anu@gmail.com', '090887766', '123'),
('george', 'john', 'george@gmail.com', '09088112233', '123'),
('guy', 'boy', 'boy@gmail.com', '09088771122', 'boy'),
('Idowu ', 'emmanuel', 'idowu@gmail.com', '0908811233', '123'),
('jane', 'luara', 'raymond@gmail.com', '09088776611', 'raymond'),
('kehinde', 'kenny', 'kenny@gmail.com', '09088090900', 'kenny'),
('nidha', 'nidha', 'nidha@gmail.com', '998696572', 'suhail'),
('ojo', 'ralia', 'ralia@gmail.com', '09088771122', 'ralia'),
('pratheek083', 'Pratheek Shiri', 'pratheek@gmail.com', '8779546521', 'pratheek'),
('rakshithk00', 'Rakshith Kotian', 'rakshith@gmail.com', '9547123658', 'rakshith'),
('rose01', 'Roseline', 'rose@gmail.com', '09088776655', 'rose'),
('sade', 'malik', 'malik@gmail.com', '09088112233', 'malik'),
('schema', 'shade', 'schema@gmail.com', '09088776655', '123'),
('SEUN', 'DELE', 'dele@gmail.com', '09088112233', 'seun'),
('sewa', 'ola', 'ola@gmail.com', '0809888', 'ola'),
('Seyi', 'adeleke', 'seyi@gmailcom', '09088776655', 'seyi'),
('smart', 'Lloyd', 'smart@gmail.com', '0908812342', 'smart'),
('taiwo', 'dare', 'dare@gmail.com', '09088112233', 'dare'),
('tayo', 'pelumi', 'tayo@gmail.com', '1234567890', 'tayo'),
('wasiu', 'david', 'david@gmail.com', '09088771122', 'david');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `F_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `description` varchar(200) NOT NULL,
  `R_ID` int(30) NOT NULL,
  `images_path` varchar(200) NOT NULL,
  `options` varchar(10) NOT NULL DEFAULT 'ENABLE'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`F_ID`, `name`, `price`, `description`, `R_ID`, `images_path`, `options`) VALUES
(58, 'Delicious Spaggetti', 400, 'Delicious Spaggetti onion.', 1, 'menu-imgs/spaggetti.png', 'ENABLE'),
(59, 'Sharwama', 600, 'Shawama Pomfret fish grilled & with grilled onions.', 2, 'menu-imgs/sharwama.png\r\n', 'ENABLE'),
(60, 'Chocolate Cake', 800, 'Lose all senses over this very delicious chocolate cake.', 3, 'menu-imgs/Chocolate_Hazelnut_Truffle.jpg', 'ENABLE'),
(61, 'Semo', 500, 'Semo with Egusi Soup', 1, 'menu-imgs/Semo.jpeg\r\n', 'ENABLE'),
(62, 'Fried dodo', 500, 'Delicious Fried Dodo', 2, 'menu-imgs/Frieddodo.jpeg', 'ENABLE'),
(63, 'Fried Rice', 600, 'Delicious and hot fried rice', 3, 'menu-imgs/Friedrice.jpeg', 'ENABLE'),
(65, 'Hollandia-Yoghurt', 1200, 'Hollandia-Yoghurt-Drink-500ml', 4, 'menu-imgs/Hollandia-Yoghurt-Drink-500ml.png', 'ENABLE'),
(66, 'Eva Water', 350, 'Chilled Eva Water 1liter', 4, 'menu-imgs/evawater.png', 'ENABLE'),
(68, 'Burger', 300, 'Sweet and Tasty Burger', 6, 'menu-imgs/burger.jpg', 'ENABLE'),
(69, 'Breaded Chicken', 1500, 'Fried and Tasty Breaded Chicken', 2, 'menu-imgs/BreadedChicken.jpeg', 'ENABLE'),
(70, 'Coca-Cola', 300, 'Chilled Coca-Cola Drink', 2, 'menu-imgs/coca-cola.png', 'ENABLE'),
(71, 'Samosa', 600, 'Cocktail Crispy Samosa..', 2, 'menu-imgs/samosa.jpg', 'ENABLE'),
(72, 'Paneer Pakora', 1000, 'it gives whole new dimension even to the most boring or dull vegetable', 2, 'menu-imgs/paneer pakora.jpg', 'ENABLE'),
(73, 'Puff', 350, 'Vegetable Puff, a snack with crisp-n-flaky outer layer and mixed vegetables stuffing', 2, 'menu-imgs/puff.jpg', 'ENABLE'),
(74, 'Pizza', 200, 'Good and Tasty ', 2, 'menu-imgs/roll.jpg', 'ENABLE'),
(75, 'Spicy rice', 600, 'Delicious Spicy rice and Tasty.', 2, 'menu-imgs/Spicyrice.jpeg', 'ENABLE'),
(76, 'Chi Exotic drink', 350, 'Chilled Chi Exotic drink.', 2, 'menu-imgs/Chi-exotic.jpg', 'ENABLE'),
(77, 'Fried Meat', 200, 'delicious and meat Tasty.', 2, 'menu-imgs/friedmeat.png', 'ENABLE'),
(78, 'French Fries', 750, 'Pure Veg and Tasty.', 2, 'menu-imgs/frenchfries.jpg', 'ENABLE'),
(79, ' Beans', 400, 'Delicious & Tasty Beans', 2, 'menu-imgs/Beans.jpeg', 'ENABLE'),
(80, 'Edikankong soup', 550, 'Delicious and tasty Edikankong soup ', 1, 'menu-imgs/Edikankongsoup.jpeg', 'ENABLE');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `username` varchar(30) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`username`, `fullname`, `email`, `contact`, `address`, `password`) VALUES
('aditi068', 'Aditi Naik', 'aditi@gmail.com', '8654751259', 'Goa', 'aditi'),
('aminnikhil073', 'Nikhil Amin', 'aminnikhil073@gmail.com', '9632587412', 'Karnataka', 'nikhil'),
('ckumar', 'Chandan Kumar', 'ckj40856@gmail.com', '9487810674', 'Pondicherry University, SRK HOSTEL ROOM NUMBER-59,', 'Ckumar123'),
('dhiraj', 'DHIRAJ kUMAR', 'dk123@gmail.com', '8903079750', 'Pondicherry. Le cafe', 'Dhiraj'),
('roshanraj07', 'Roshan Raj', 'roshan@gmail.com', '9541258761', 'Bihar', 'roshan');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_ID` int(30) NOT NULL,
  `F_ID` int(30) NOT NULL,
  `foodname` varchar(30) NOT NULL,
  `price` int(30) NOT NULL,
  `quantity` int(30) NOT NULL,
  `order_date` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `R_ID` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_ID`, `F_ID`, `foodname`, `price`, `quantity`, `order_date`, `username`, `R_ID`) VALUES
(1, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2019-03-03', 'ckumar', 1),
(2, 61, 'Happy Happy Choco Chip Shake', 80, 2, '2019-03-03', 'ckumar', 1),
(3, 61, 'Happy Happy Choco Chip Shake', 80, 2, '2019-03-03', 'ckumar', 1),
(4, 65, 'Coffee', 25, 4, '2019-03-03', 'ckumar', 4),
(5, 58, 'Juicy Masala Paneer Kathi Roll', 40, 7, '2019-03-03', 'ckumar', 1),
(6, 65, 'Coffee', 25, 2, '2019-03-03', 'ckumar', 4),
(7, 58, 'Juicy Masala Paneer Kathi Roll', 40, 7, '2019-03-03', 'ckumar', 1),
(8, 65, 'Coffee', 25, 2, '2019-03-03', 'ckumar', 4),
(9, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-03-03', 'ckumar', 3),
(10, 59, 'Meurig Fish', 60, 1, '2019-03-05', 'ckumar', 2),
(11, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-03-05', 'ckumar', 3),
(12, 65, 'Coffee', 25, 1, '2019-03-05', 'ckumar', 4),
(13, 59, 'Meurig Fish', 60, 4, '2019-03-05', 'ckumar', 2),
(14, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2019-03-05', 'ckumar', 1),
(15, 60, 'Chocolate Hazelnut Truffle', 99, 4, '2019-03-05', 'ckumar', 3),
(16, 65, 'Coffee', 25, 1, '2019-03-05', 'ckumar', 4),
(17, 66, 'Tea', 20, 7, '2019-03-05', 'ckumar', 4),
(18, 59, 'Meurig Fish', 60, 5, '2019-03-05', 'birju', 2),
(19, 63, 'Baahubali Thali', 75, 1, '2019-03-05', 'birju', 3),
(20, 68, 'Paneer Pakora', 75, 1, '2019-03-05', 'birju', 6),
(21, 62, 'Spring Rolls', 65, 1, '2019-03-05', 'birju', 2),
(22, 68, 'Paneer Pakora', 75, 1, '2019-03-05', 'birju', 6),
(23, 62, 'Spring Rolls', 65, 1, '2019-03-05', 'birju', 2),
(24, 65, 'Coffee', 25, 1, '2019-03-05', 'birju', 4),
(25, 68, 'Paneer Pakora', 75, 1, '2019-03-05', 'birju', 6),
(26, 59, 'Meurig Fish', 60, 6, '2019-03-05', 'birju', 2),
(27, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2019-03-05', 'birju', 1),
(28, 59, 'Meurig Fish', 60, 1, '2019-03-05', 'birju', 2),
(29, 58, 'Juicy Masala Paneer Kathi Roll', 40, 1, '2019-03-05', 'birju', 1),
(30, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-03-15', 'ckumar', 3),
(31, 59, 'Meurig Fish', 60, 1, '2019-03-15', 'ckumar', 2),
(32, 61, 'Happy Happy Choco Chip Shake', 80, 1, '2019-03-15', 'ckumar', 1),
(33, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-03-15', 'ckumar', 3),
(34, 59, 'Meurig Fish', 60, 1, '2019-03-15', 'ckumar', 2),
(35, 61, 'Happy Happy Choco Chip Shake', 80, 1, '2019-03-15', 'ckumar', 1),
(36, 62, 'Spring Rolls', 65, 1, '2019-03-15', 'ckumar', 2),
(37, 72, 'Paneer Pakora', 45, 6, '2019-03-15', 'ckumar', 2),
(38, 78, 'French Fries', 75, 7, '2019-03-15', 'ckumar', 2),
(39, 78, 'French Fries', 75, 1, '2019-03-15', 'ckumar', 2),
(40, 73, 'Puff', 35, 1, '2019-03-15', 'ckumar', 2),
(41, 77, 'Pizza', 200, 2, '2019-03-16', 'ckumar', 2),
(42, 70, 'Tea', 20, 1, '2019-03-16', 'ckumar', 2),
(43, 60, 'Chocolate Hazelnut Truffle', 99, 2, '2019-03-16', 'ckumar', 3),
(44, 70, 'Tea', 20, 1, '2019-03-16', 'ckumar', 2),
(45, 60, 'Chocolate Hazelnut Truffle', 99, 2, '2019-03-16', 'ckumar', 3),
(46, 70, 'Tea', 20, 1, '2019-03-16', 'ckumar', 2),
(47, 60, 'Chocolate Hazelnut Truffle', 99, 2, '2019-03-16', 'ckumar', 3),
(48, 60, 'Chocolate Hazelnut Truffle', 99, 4, '2019-03-25', 'ckumar', 3),
(49, 62, 'Spring Rolls', 65, 6, '2019-03-25', 'ckumar', 2),
(50, 70, 'Tea', 20, 5, '2019-03-25', 'ckumar', 2),
(51, 73, 'Puff', 35, 3, '2019-03-25', 'ckumar', 2),
(52, 70, 'Tea', 20, 1, '2019-03-30', 'ckumar', 2),
(53, 60, 'Chocolate Hazelnut Truffle', 99, 5, '2019-03-30', 'ckumar', 3),
(54, 69, 'Coffee', 25, 7, '2019-03-30', 'ckumar', 2),
(55, 62, 'Spring Rolls', 65, 1, '2019-04-01', 'ckumar', 2),
(56, 70, 'Tea', 20, 4, '2019-04-01', 'ckumar', 2),
(57, 70, 'Tea', 20, 1, '2019-04-01', 'ckumar', 2),
(58, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-04-01', 'ckumar', 3),
(59, 59, 'Meurig Fish', 60, 6, '2019-04-02', 'ckumar', 2),
(60, 61, 'Happy Happy Choco Chip Shake', 80, 1, '2019-04-02', 'ckumar', 1),
(61, 71, 'Samosa', 40, 3, '2019-04-17', 'ckumar', 2),
(62, 70, 'Tea', 20, 4, '2019-04-17', 'ckumar', 2),
(63, 72, 'Paneer Pakora', 45, 2, '2019-04-17', 'ckumar', 2),
(64, 71, 'Samosa', 40, 3, '2019-04-17', 'ckumar', 2),
(65, 70, 'Tea', 20, 4, '2019-04-17', 'ckumar', 2),
(66, 72, 'Paneer Pakora', 45, 2, '2019-04-17', 'ckumar', 2),
(67, 60, 'Chocolate Hazelnut Truffle', 99, 1, '2019-04-18', 'ckumar', 3),
(68, 71, 'Samosa', 40, 1, '2019-04-18', 'ckumar', 2),
(69, 61, 'Happy Happy Choco Chip Shake', 80, 1, '2021-09-09', 'rose01', 1),
(70, 69, 'Coffee', 25, 1, '2021-09-09', 'rose01', 2),
(71, 58, 'Delicious Spaggetti', 40, 1, '2021-09-10', 'rose01', 1),
(72, 58, 'Delicious Spaggetti', 400, 5, '2021-09-10', 'rose01', 1),
(73, 58, 'Delicious Spaggetti', 400, 5, '2021-09-10', 'rose01', 1),
(74, 58, 'Delicious Spaggetti', 400, 1, '2021-09-10', 'rose01', 1),
(75, 69, 'Breaded Chicken', 1500, 1, '2021-09-10', 'rose01', 2),
(76, 58, 'Delicious Spaggetti', 400, 1, '2021-09-10', 'rose01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `R_ID` int(30) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `M_ID` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`R_ID`, `name`, `email`, `contact`, `address`, `M_ID`) VALUES
(1, 'Nikhil\'s Restaurant', 'nikhil@restaurant.com', '7998562145', 'Karnataka', 'aminnikhil073'),
(2, 'Roshan\'s Restaurant', 'roshan@restaurant.com', '9887546821', 'Bihar', 'roshanraj07'),
(3, 'Aditi\'s Restaurant', 'aditi@restaurant.com', '7778564231', 'Goa', 'aditi068'),
(4, 'Food Exploria', 'ckj40856@gmail.com', '09487810674', 'C:\\xampp\\htdocs\\FoodExploria-master\\images/coffee.', 'ckumar'),
(6, 'Le Cafe', 'lecafepondi234@gmail.com', '9443369040', 'Pondicherry,rock beach Near,Le cafe', 'dhiraj');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`) USING BTREE,
  ADD KEY `username` (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`F_ID`,`R_ID`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_ID`),
  ADD KEY `F_ID` (`F_ID`),
  ADD KEY `username` (`username`),
  ADD KEY `R_ID` (`R_ID`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`R_ID`),
  ADD UNIQUE KEY `M_ID_2` (`M_ID`),
  ADD KEY `M_ID` (`M_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `F_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `R_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food_ibfk_1` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`F_ID`) REFERENCES `food` (`F_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`username`) REFERENCES `customer` (`username`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`R_ID`) REFERENCES `restaurants` (`R_ID`);

--
-- Constraints for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD CONSTRAINT `restaurants_ibfk_1` FOREIGN KEY (`M_ID`) REFERENCES `manager` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
