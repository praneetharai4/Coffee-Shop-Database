-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2022 at 07:56 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffee`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `Br_id` int(50) NOT NULL,
  `Br_name` varchar(50) NOT NULL,
  `Loc` varchar(50) NOT NULL,
  `Mgr_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`Br_id`, `Br_name`, `Loc`, `Mgr_id`) VALUES
(10, 'a', 'bb', 45),
(20, 'bb', 'ccc', 90);

-- --------------------------------------------------------

--
-- Table structure for table `branch_facilities`
--

CREATE TABLE `branch_facilities` (
  `Br_id` int(11) NOT NULL,
  `Facilities` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_item`
--

CREATE TABLE `branch_item` (
  `Br_id` int(11) NOT NULL,
  `Item_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `branch_phone`
--

CREATE TABLE `branch_phone` (
  `Br_id` int(11) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Cust_id` int(11) NOT NULL,
  `Cust_name` varchar(50) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Emp_id` int(11) NOT NULL,
  `Emp_name` varchar(50) NOT NULL,
  `Phone_no` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `E_mail` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Br_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `Item_no` int(11) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL,
  `Price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `just_item_emp_order`
--

CREATE TABLE `just_item_emp_order` (
  `Cust_id` int(11) NOT NULL,
  `Item_no` int(11) NOT NULL,
  `Emp_id` int(11) NOT NULL,
  `Order_no` int(11) NOT NULL,
  `Subtotal` int(11) NOT NULL,
  `Taxes` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `Order_no` int(11) NOT NULL,
  `Item_name` varchar(50) NOT NULL,
  `Qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Sup_id` int(11) NOT NULL,
  `Sup_name` varchar(50) NOT NULL,
  `Phone_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier_item`
--

CREATE TABLE `supplier_item` (
  `Sup_id` int(11) NOT NULL,
  `Sup_item` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sup_branch_item`
--

CREATE TABLE `sup_branch_item` (
  `Sup_id` int(11) NOT NULL,
  `Br_id` int(11) NOT NULL,
  `Item_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`Br_id`);

--
-- Indexes for table `branch_facilities`
--
ALTER TABLE `branch_facilities`
  ADD PRIMARY KEY (`Br_id`,`Facilities`);

--
-- Indexes for table `branch_item`
--
ALTER TABLE `branch_item`
  ADD PRIMARY KEY (`Br_id`,`Item_no`);

--
-- Indexes for table `branch_phone`
--
ALTER TABLE `branch_phone`
  ADD PRIMARY KEY (`Br_id`,`Phone_no`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Cust_name`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Emp_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`Item_no`);

--
-- Indexes for table `just_item_emp_order`
--
ALTER TABLE `just_item_emp_order`
  ADD PRIMARY KEY (`Cust_id`,`Item_no`,`Emp_id`,`Order_no`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`Order_no`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Sup_id`);

--
-- Indexes for table `supplier_item`
--
ALTER TABLE `supplier_item`
  ADD PRIMARY KEY (`Sup_id`,`Sup_item`);

--
-- Indexes for table `sup_branch_item`
--
ALTER TABLE `sup_branch_item`
  ADD PRIMARY KEY (`Sup_id`,`Br_id`,`Item_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
