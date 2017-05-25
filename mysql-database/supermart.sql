-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 07:50 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `supermart`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUSTOMER_ID` int(11) NOT NULL,
  `CUSTOMER_NAME` varchar(25) NOT NULL,
  `CUSTOMER_PHONE` varchar(25) NOT NULL,
  `CUSTOMER_ADDRESS` varchar(100) NOT NULL,
  `CUSTOMER_CITY` varchar(25) NOT NULL,
  `CUSTOMER_EMAIL` varchar(50) DEFAULT NULL,
  `imageUrl` varchar(50) DEFAULT NULL,
  `CUSTOMER_TYPE` varchar(50) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUSTOMER_ID`, `CUSTOMER_NAME`, `CUSTOMER_PHONE`, `CUSTOMER_ADDRESS`, `CUSTOMER_CITY`, `CUSTOMER_EMAIL`, `imageUrl`, `CUSTOMER_TYPE`, `DOB`) VALUES
(2, 'Rafay', '0300-2332434', 'Malir,BlockA', 'Karachi', 'syedr41@gmail.com', 'images/customer/1.jpg', 'Premium', '1995-06-15'),
(4, 'Shabih', '0334-32324242', 'GardenBanglow4', 'Karachi', 'shabihhaider1@outlook.com', 'images/customer/2.jpg', 'Premium', '1993-12-15'),
(5, 'Tayyab', '0345-34242424', 'GulshanBlockB', 'Karachi', 'tayyabali67@hotmail.com', 'images/customer/3.jpg', 'Abnormal', '1985-01-30'),
(6, 'Ali', '0300-31241414', 'FederalBArea', 'Karachi', 'ali47@gmail.com', 'images/customer/4.jpg', 'Normal', '1994-04-23'),
(7, 'Samra', '0300-3432423', 'HyderiBlockD', 'Karachi', 'samra24@outlook.com', 'images/customer/5.jpg', 'Premium', '1993-06-28'),
(8, 'Usman', '0307-34322562', 'JauharBlock7', 'Karachi', 'usmanhaider@hotmail.com', 'images/customer/6.jpg', 'Normal', '1991-09-29'),
(9, 'Haider', '0300-3424322', 'DarakshanSocietyStreet4', 'Karachi', 'haider1@yahoo.com', 'images/customer/7.jpg', 'Normal', '1997-08-24'),
(10, 'Arsalan', '0323-32332523', 'GulshanBlock9', 'Karachi', 'arsalanm841@gmail.com', 'images/customer/8.jpg', 'Premium', '1990-05-11'),
(11, 'Rakesh', '0346-452242623', 'DefencePhase1', 'Karachi', 'rakeshr87@outlook.com', 'images/customer/9.jpg', 'Normal', '1989-03-19'),
(12, 'Izhar', '0347-3262452', 'DefencePhase2', 'Karachi', 'izhar71@hotmail.com', 'images/customer/10.jpg', 'Normal', '1992-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EMPLOYEE_ID` int(11) NOT NULL,
  `EMPLOYEE_NAME` varchar(25) NOT NULL,
  `EMPLOYEE_PHONE` varchar(25) NOT NULL,
  `EMPLOYEE_ADDRESS` varchar(100) NOT NULL,
  `EMPLOYEE_CITY` varchar(255) NOT NULL,
  `EMPLOYEE_TITLE` varchar(25) NOT NULL,
  `EMPLOYEE_SALARY` int(11) NOT NULL,
  `HIRE_DATE` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EMPLOYEE_ID`, `EMPLOYEE_NAME`, `EMPLOYEE_PHONE`, `EMPLOYEE_ADDRESS`, `EMPLOYEE_CITY`, `EMPLOYEE_TITLE`, `EMPLOYEE_SALARY`, `HIRE_DATE`) VALUES
(2, 'Azeem', '0300-32352342', 'GulshanBlockB', 'Karachi', 'Manager', 50000, '2015-06-01'),
(3, 'Shabih', '0304-23324323', 'GardenBanglow2B', 'Karachi', 'AssistantManager', 25000, '2015-06-10'),
(4, 'Usman', '0300-253242342', 'Hussainabad_Block_C', 'Karachi', 'Salesman', 20000, '2015-07-10'),
(5, 'Muzammil', '0300-32432422', 'DefencePhase3', 'Karachi', 'Salesman', 15000, '2015-07-25'),
(6, 'Minhal', '0321-34124121', 'KDASoicety_Banglow_2', 'Karachi', 'Salesman', 17000, '2015-08-01'),
(7, 'Miqdad', '0306-3423422', 'DefencePhase1', 'Karachi', 'Salesman', 12000, '2016-02-24'),
(8, 'Samar', '034-23523422', 'Gulshan_Block_B', 'Karachi', 'Salesman', 18000, '2016-04-04'),
(9, 'Minhaj', '0347-23324232', 'DefencePhase5', 'Karachi', 'Salesman', 13000, '2015-12-28'),
(10, 'Mairaj', '0346-3223522', 'KDA_Banglow_4', 'Karachi', 'Salesman', 14000, '2016-05-12'),
(11, 'Shahab', '0322-32523242', 'Defence_Phase_7', 'Karachi', 'Salesman', 17000, '2016-07-09');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PRODUCT_ID` int(11) NOT NULL,
  `PRODUCT_NAME` varchar(25) NOT NULL,
  `PRODUCT_CATEGORY_ID` int(11) NOT NULL,
  `QUANTITY_OF_SUB_UNITS` int(11) NOT NULL,
  `UNIT_PRICE` int(11) NOT NULL,
  `EXPIRY_DATE` date DEFAULT NULL,
  `imageUrl` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PRODUCT_ID`, `PRODUCT_NAME`, `PRODUCT_CATEGORY_ID`, `QUANTITY_OF_SUB_UNITS`, `UNIT_PRICE`, `EXPIRY_DATE`, `imageUrl`) VALUES
(7, 'TV', 1, 10, 50000, NULL, 'images/products/1.jpg'),
(8, 'QMobile', 1, 50, 4999, NULL, 'images/products/2.jpg'),
(9, 'Laptop', 1, 70, 70000, NULL, 'images/products/3.jpg'),
(10, 'Bread', 2, 50, 50, '2017-02-12', 'images/products/4.jpg'),
(11, 'Brownies', 2, 60, 40, '2016-12-30', 'images/products/5.jpg'),
(12, 'Eggs', 2, 60, 10, '2016-12-30', 'images/products/6.jpg'),
(13, 'Chicken', 3, 8, 200, '2017-03-24', 'images/products/7.jpg'),
(14, 'Mutton', 3, 8, 400, '2017-04-25', 'images/products/1.jpg'),
(15, 'Beef', 3, 10, 500, '2017-05-12', 'images/products/2.jpg'),
(16, 'Froota', 4, 15, 25, '2017-08-12', 'images/products/3.jpg'),
(17, 'Pepsi', 4, 20, 30, '2017-02-14', 'images/products/4.jpg'),
(18, 'Falooda', 4, 25, 40, '2017-01-20', 'images/products/5.jpg'),
(19, 'Javed_Nihari', 5, 50, 700, '2016-12-30', 'images/products/6.jpg'),
(20, 'Pineapple', 5, 20, 300, '2017-11-24', 'images/products/7.jpg'),
(21, 'Waheed_Kabab', 5, 10, 500, '2017-06-20', 'images/products/1.jpg'),
(22, 'Biscuits', 6, 50, 90, '2016-12-30', 'images/products/2.jpg'),
(23, 'Chips', 6, 40, 80, '2017-01-10', 'images/products/3.jpg'),
(24, 'Sandwiches', 6, 10, 70, '2017-02-28', 'images/products/4.jpg'),
(25, 'Omang', 7, 12, 50, '2017-03-24', 'images/products/5.jpg'),
(26, 'Olpers', 7, 10, 70, '2017-04-04', 'images/products/6.jpg'),
(27, 'Nesvita', 7, 30, 30, '2017-05-12', 'images/products/7.jpg'),
(28, 'Fish', 8, 20, 800, '2017-01-20', 'images/products/1.jpg'),
(29, 'Nuggets', 8, 30, 100, '2017-06-14', 'images/products/2.jpg'),
(30, 'IceCream', 8, 15, 50, '2017-05-11', 'images/products/3.jpg'),
(31, 'Dairy_Milk', 8, 50, 30, '0000-00-00', 'images/products/1.jpg'),
(32, 'PaperA4', 9, 30, 350, NULL, 'images/products/5.jpg'),
(33, 'Spiral', 9, 10, 245, NULL, 'images/products/6.jpg'),
(34, 'HairGel', 13, 11, 99, NULL, 'images/products/2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `PRODUCT_CATEGORY_ID` int(11) NOT NULL,
  `PRODUCT_CATEGORY_NAME` varchar(25) NOT NULL,
  `PRODUCT_DESCRIPTION` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`PRODUCT_CATEGORY_ID`, `PRODUCT_CATEGORY_NAME`, `PRODUCT_DESCRIPTION`) VALUES
(1, 'Electronics', 'Electrical stuff'),
(2, 'Grocery', 'Eatables'),
(3, 'Meat', '-'),
(4, 'Beverages', ''),
(5, 'Canned', ''),
(6, 'Bakery', ''),
(7, 'Dairy', ''),
(8, 'Frozen Goods', ''),
(9, 'Paper Goods', ''),
(13, 'Personal Care', '');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `PURCHASE_ORDER_ID` int(11) NOT NULL,
  `PRODUCT_CATEGORY_ID` int(11) NOT NULL,
  `QUANTITY_OF_PURCHASED_UNITS` int(11) NOT NULL,
  `PURCHASE_UNIT_PRICE` int(11) NOT NULL,
  `SUPPLIER_ID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL,
  `PURCHASE_TOTAL` int(10) NOT NULL,
  `PURCHASE_PAID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`PURCHASE_ORDER_ID`, `PRODUCT_CATEGORY_ID`, `QUANTITY_OF_PURCHASED_UNITS`, `PURCHASE_UNIT_PRICE`, `SUPPLIER_ID`, `EMPLOYEE_ID`, `PURCHASE_TOTAL`, `PURCHASE_PAID`) VALUES
(1, 1, 1, 50000, 3, 2, 50000, 20000),
(2, 8, 5, 4999, 1, 3, 25000, 20000),
(3, 4, 4, 30, 2, 4, 120, 100),
(4, 4, 3, 40, 4, 5, 120, 100),
(5, 1, 1, 70000, 5, 6, 70000, 65000),
(6, 4, 5, 30, 6, 7, 180, 150),
(7, 8, 1, 800, 7, 8, 800, 700),
(8, 8, 3, 50, 8, 9, 150, 120),
(9, 8, 4, 100, 9, 10, 400, 350),
(10, 6, 2, 80, 10, 11, 160, 150);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order`
--

CREATE TABLE `sales_order` (
  `SALES_ORDER_ID` int(11) NOT NULL,
  `CUSTOMER_ID` int(11) NOT NULL,
  `EMPLOYEE_ID` int(11) NOT NULL,
  `DATE_OF_SALES` date NOT NULL,
  `TOTAL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order`
--

INSERT INTO `sales_order` (`SALES_ORDER_ID`, `CUSTOMER_ID`, `EMPLOYEE_ID`, `DATE_OF_SALES`, `TOTAL`) VALUES
(1, 2, 2, '2013-01-13', 3000),
(2, 4, 3, '2013-02-12', 3000),
(3, 5, 4, '2013-03-24', 5000),
(4, 6, 5, '2013-04-12', 2000),
(5, 7, 6, '2013-05-23', 7000),
(6, 10, 7, '2013-06-22', 9000),
(7, 4, 3, '2013-07-23', 15000),
(8, 10, 6, '2013-08-13', 12000),
(9, 11, 11, '2013-09-29', 9000),
(10, 8, 5, '2013-10-27', 13000),
(11, 9, 9, '2013-11-08', 7000),
(12, 12, 5, '2013-12-30', 20000),
(13, 2, 3, '2014-01-22', 4000),
(14, 4, 8, '2014-02-21', 9000),
(15, 6, 7, '2014-03-14', 3000),
(16, 12, 8, '2014-04-02', 14000),
(17, 7, 9, '2014-05-19', 16000),
(18, 9, 6, '2014-06-22', 7000),
(19, 10, 5, '2014-07-26', 1000),
(20, 11, 5, '2014-08-27', 24000),
(21, 5, 6, '2014-09-12', 18000),
(22, 9, 2, '2014-10-22', 5000),
(23, 7, 4, '2014-11-15', 12000),
(24, 11, 4, '2014-12-22', 50000),
(25, 6, 7, '2015-01-12', 2000),
(26, 8, 5, '2015-02-22', 12000),
(27, 6, 8, '2015-03-15', 7000),
(28, 12, 5, '2015-04-09', 9000),
(29, 5, 5, '2015-05-02', 12000),
(30, 8, 4, '2015-06-12', 8000),
(31, 5, 6, '2015-07-30', 14000),
(32, 9, 5, '2015-08-22', 4000),
(33, 5, 3, '2015-09-12', 10000),
(34, 4, 8, '2015-10-11', 9000),
(35, 11, 11, '2015-11-29', 23000),
(36, 5, 3, '2015-12-19', 17000),
(37, 5, 7, '2016-01-02', 12000),
(38, 7, 3, '2016-02-13', 5000),
(39, 7, 9, '2016-03-22', 8000),
(40, 8, 9, '2016-04-29', 9000),
(41, 7, 8, '2016-05-18', 16000),
(42, 12, 6, '2016-06-17', 14000),
(43, 9, 5, '2016-07-25', 25000),
(44, 2, 3, '2016-08-08', 9000),
(45, 10, 4, '2016-09-19', 19000),
(46, 8, 9, '2016-10-26', 6000),
(47, 9, 6, '2016-11-23', 8000),
(48, 10, 4, '2016-12-28', 12000);

-- --------------------------------------------------------

--
-- Table structure for table `sales_order_details`
--

CREATE TABLE `sales_order_details` (
  `SALES_ORDER_ID` int(11) NOT NULL,
  `PRODUCT_ID` int(11) NOT NULL,
  `QUANTITY_OF_SOLD_UNITS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales_order_details`
--

INSERT INTO `sales_order_details` (`SALES_ORDER_ID`, `PRODUCT_ID`, `QUANTITY_OF_SOLD_UNITS`) VALUES
(1, 7, 1000),
(1, 8, 100),
(1, 11, 300),
(1, 12, 1000),
(1, 16, 2499),
(1, 18, 560),
(1, 11, 1000),
(1, 23, 700),
(1, 11, 640),
(1, 25, 190),
(1, 31, 2500),
(1, 23, 50),
(2, 16, 300),
(2, 21, 5000),
(2, 22, 300),
(2, 14, 900),
(2, 26, 445),
(2, 24, 60),
(2, 30, 688),
(2, 31, 390),
(2, 19, 1000),
(2, 25, 2400),
(3, 7, 500),
(3, 9, 600),
(3, 10, 890),
(3, 13, 3000),
(5, 18, 655),
(3, 21, 900),
(3, 31, 342),
(3, 18, 467),
(3, 29, 322),
(3, 26, 12);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SUPPLIER_ID` int(11) NOT NULL,
  `SUPPLIER_NAME` varchar(25) NOT NULL,
  `SUPPLIER_PHONE` varchar(25) NOT NULL,
  `SUPPLIER_ADDRESS` varchar(100) NOT NULL,
  `SUPPLIER_CITY` varchar(25) NOT NULL,
  `SUPPLIER_EMAIL` varchar(50) NOT NULL,
  `imageUrl` varchar(50) DEFAULT NULL,
  `SUPPLIER_TYPE` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SUPPLIER_ID`, `SUPPLIER_NAME`, `SUPPLIER_PHONE`, `SUPPLIER_ADDRESS`, `SUPPLIER_CITY`, `SUPPLIER_EMAIL`, `imageUrl`, `SUPPLIER_TYPE`) VALUES
(1, 'Carburry', '0300-3243242', 'Gulshan', 'Karachi', 'carburry41@gmail.com', 'images/employee/1.jpg', 'Premium'),
(2, 'UniLever', '0300-23524232', 'KDA', 'Karachi', 'unilev782@outlook.com', 'images/employee/2.jpg', 'Normal'),
(3, 'Sony', '0300-23523422', 'Jauhar', 'Karachi', 'sony47@gmail.com', 'images/employee/3.jpg', 'Premium'),
(4, 'Walls', '0345-23523242', 'Defence_phase_04', 'Karachi', 'wallsw891@yahoo.com', 'images/employee/4.jpg', 'Normal'),
(5, 'Haier', '0300-32341231', 'FederalBArea', 'Karachi', 'haierh41@hotmail.com', 'images/employee/5.jpg', 'Premium'),
(6, 'Pepsi', '0332-45242221', 'KorangiCreek', 'Karachi', 'pepsip789@gmail.com', 'images/employee/6.jpg', 'Normal'),
(7, 'K&NS', '0345-42423421', 'North_nazimabad', 'Karachi', 'kns721@outlook.com', 'images/employee/7.jpg', 'Normal'),
(8, 'Igloo', '0334-4234226', 'Korangi_Industrial_Area', 'Karachi', 'iglooi98@hotmail.com', 'images/employee/8.jpg', 'Premium'),
(9, 'Ajwa', '0336-4324232', 'Gulshan-e-iqbal', 'Karachi', 'ajwa57@outlook.com', 'images/employee/9.jpg', 'Normal'),
(10, 'Lays', '0323-32423424', 'Tariq_Road', 'Karachi', 'laysl47@hotmail.com', 'images/employee/10.jpg', 'Premium');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUSTOMER_ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EMPLOYEE_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PRODUCT_ID`),
  ADD KEY `PRODUCT_CATEGORY_ID` (`PRODUCT_CATEGORY_ID`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`PRODUCT_CATEGORY_ID`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`PURCHASE_ORDER_ID`),
  ADD KEY `PRODUCT_CATEGORY_ID` (`PRODUCT_CATEGORY_ID`),
  ADD KEY `SUPPLIER_ID` (`SUPPLIER_ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD PRIMARY KEY (`SALES_ORDER_ID`),
  ADD KEY `CUSTIOMER_ID` (`CUSTOMER_ID`),
  ADD KEY `EMPLOYEE_ID` (`EMPLOYEE_ID`);

--
-- Indexes for table `sales_order_details`
--
ALTER TABLE `sales_order_details`
  ADD KEY `SALES_ORDER_ID` (`SALES_ORDER_ID`),
  ADD KEY `PRODUCT_ID` (`PRODUCT_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SUPPLIER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CUSTOMER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EMPLOYEE_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `PRODUCT_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `PRODUCT_CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `PURCHASE_ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `sales_order`
--
ALTER TABLE `sales_order`
  MODIFY `SALES_ORDER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SUPPLIER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`PRODUCT_CATEGORY_ID`) REFERENCES `product_category` (`PRODUCT_CATEGORY_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`PRODUCT_CATEGORY_ID`) REFERENCES `product_category` (`PRODUCT_CATEGORY_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_ibfk_2` FOREIGN KEY (`SUPPLIER_ID`) REFERENCES `supplier` (`SUPPLIER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `purchase_order_ibfk_3` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales_order`
--
ALTER TABLE `sales_order`
  ADD CONSTRAINT `sales_order_ibfk_1` FOREIGN KEY (`CUSTOMER_ID`) REFERENCES `customer` (`CUSTOMER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_order_ibfk_2` FOREIGN KEY (`EMPLOYEE_ID`) REFERENCES `employee` (`EMPLOYEE_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sales_order_details`
--
ALTER TABLE `sales_order_details`
  ADD CONSTRAINT `sales_order_details_ibfk_1` FOREIGN KEY (`SALES_ORDER_ID`) REFERENCES `sales_order` (`SALES_ORDER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sales_order_details_ibfk_2` FOREIGN KEY (`PRODUCT_ID`) REFERENCES `product` (`PRODUCT_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
