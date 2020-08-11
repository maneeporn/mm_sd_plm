-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Nov 19, 2019 at 03:05 AM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `applepen`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(11) NOT NULL,
  `company_name` varchar(45) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `company_zipcode` varchar(5) DEFAULT NULL,
  `company_tel` varchar(15) DEFAULT NULL,
  `company_email` varchar(45) DEFAULT NULL,
  `company_fax` varchar(45) DEFAULT NULL,
  `company_tax_id` varchar(45) DEFAULT NULL,
  `company_tax` float DEFAULT NULL,
  `company_payment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_address`, `company_zipcode`, `company_tel`, `company_email`, `company_fax`, `company_tax_id`, `company_tax`, `company_payment`) VALUES
(1, 'Apple pen company', '239 Huaykaew Rd., Suthep, Muang, Chiang Mai', '50200', '053-956447', 'applepen_company@gmail.com', '053-945976', '0154626899541', 0.07, 'SCB 1245-132545-14753');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_fname` varchar(45) DEFAULT NULL,
  `customer_lname` varchar(45) DEFAULT NULL,
  `customer_ship_address` varchar(255) DEFAULT NULL,
  `customer_billing_address` varchar(255) DEFAULT NULL,
  `customer_tel` varchar(45) DEFAULT NULL,
  `customer_email` varchar(45) DEFAULT NULL,
  `customer_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_fname`, `customer_lname`, `customer_ship_address`, `customer_billing_address`, `customer_tel`, `customer_email`, `customer_type_id`) VALUES
(1, 'Coner', 'Stationery', '555/02 ตำบล ปงยางคก อำเภอห้างฉัตร ลำปาง 52190', '44/8 ตำบลสุเทพ อำเภอเมืองเชียงใหม่ เชียงใหม่ 50200', '0888187212', 'coner@gmail.com', 1),
(2, 'B2S', '', '1,999/2 ถนน ซุปเปอร์ไฮเวย์ เชียงใหม่-ลำปาง ตำบล ฟ้าฮ่าม อำเภอเมืองเชียงใหม่ เชียงใหม่ 50000', '1,999/2 ถนน ซุปเปอร์ไฮเวย์ เชียงใหม่-ลำปาง ตำบล ฟ้าฮ่าม อำเภอเมืองเชียงใหม่ เชียงใหม่ 50000', '056621223', 'b2s@gmail.com', 1),
(3, 'CWart', '', '555/02 ตำบล ปงยางคก อำเภอห้างฉัตร ลำปาง 52190', '555/02 ตำบล ปงยางคก อำเภอห้างฉัตร ลำปาง 52190', '0945584515', 'cw_art@gmail.com', 2);

-- --------------------------------------------------------

--
-- Table structure for table `customer_type`
--

CREATE TABLE `customer_type` (
  `customer_type_id` int(11) NOT NULL,
  `customer_type_detail` varchar(45) DEFAULT NULL,
  `customer_type_discount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer_type`
--

INSERT INTO `customer_type` (`customer_type_id`, `customer_type_detail`, `customer_type_discount`) VALUES
(1, 'member', 0.1),
(2, 'normal', 0);

-- --------------------------------------------------------

--
-- Table structure for table `document_sd`
--

CREATE TABLE `document_sd` (
  `doc_id` int(11) NOT NULL,
  `doc_sd_type_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `ref_id` int(11) DEFAULT NULL,
  `doc_date` date DEFAULT NULL,
  `exp_date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `sub_total` float DEFAULT NULL,
  `discount` float DEFAULT NULL,
  `net_total` float DEFAULT NULL,
  `ship_detail` varchar(45) DEFAULT NULL,
  `term` varchar(45) DEFAULT NULL,
  `request_delivery_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `document_sd`
--

INSERT INTO `document_sd` (`doc_id`, `doc_sd_type_id`, `company_id`, `customer_id`, `employee_id`, `ref_id`, `doc_date`, `exp_date`, `description`, `sub_total`, `discount`, `net_total`, `ship_detail`, `term`, `request_delivery_date`) VALUES
(2, 1, 1, 1, 1, NULL, '2019-11-19', NULL, 'aa', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 2, 1, 1, 1, 2, '2019-11-19', '2019-11-30', 'Promotion if you are member.You will get discount 10%.', 38900, 0.1, 37460.7, NULL, '45 days', NULL),
(4, 3, 1, 1, 1, 2, '2019-11-19', NULL, 'Promotion if you are member.You will get discount 10%.', 38900, 0.1, 37460.7, 'ground', '45 days', '2019-11-30'),
(5, 4, 1, 1, 1, 2, '2019-11-19', NULL, NULL, NULL, NULL, NULL, 'ground', NULL, NULL),
(6, 5, 1, 1, 1, 2, '2019-11-19', NULL, 'If you have any questions, you can ask to our company. ', 38900, 0.1, 37460.7, NULL, '45 days', NULL),
(7, 1, 1, 2, 2, NULL, '2019-11-19', NULL, 'qw', NULL, NULL, NULL, NULL, NULL, NULL),
(8, 2, 1, 2, 2, 7, '2019-11-19', '2019-11-30', 'Promotion if you are member.You will get discount 10%.', 40000, 0.1, 38520, NULL, '45 days', NULL),
(9, 2, 1, 2, 2, 7, '2019-11-19', '2019-11-30', 'Promotion if you are member.You will get discount 10%.', 40000, 0.1, 38520, NULL, '45 days', NULL),
(10, 3, 1, 2, 2, 7, '2019-11-19', NULL, 'Promotion if you are member.You will get discount 10%.', 40000, 0.1, 38520, 'ground', '45 days', '2019-11-30'),
(11, 3, 1, 2, 2, 7, '2019-11-19', NULL, 'Promotion if you are member.You will get discount 10%.', 40000, 0.1, 38520, 'ground', '45 days', '2019-11-30'),
(12, 4, 1, 2, 2, 7, '2019-11-19', NULL, NULL, NULL, NULL, NULL, 'ground', NULL, NULL),
(13, 4, 1, 2, 2, 7, '2019-11-19', NULL, NULL, NULL, NULL, NULL, 'ground', NULL, NULL),
(14, 4, 1, 2, 2, 7, '2019-11-19', NULL, NULL, NULL, NULL, NULL, 'ground', NULL, NULL),
(15, 5, 1, 2, 2, 7, '2019-11-19', NULL, 'If you have any questions, you can ask to our company. ', 40000, 0.1, 38520, NULL, '45 days', NULL),
(16, 5, 1, 2, 2, 7, '2019-11-19', NULL, 'If you have any questions, you can ask to our company. ', 40000, 0.1, 38520, NULL, '45 days', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doc_sd_type`
--

CREATE TABLE `doc_sd_type` (
  `doc_sd_type_id` int(11) NOT NULL,
  `doc_sd_type_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `doc_sd_type`
--

INSERT INTO `doc_sd_type` (`doc_sd_type_id`, `doc_sd_type_name`) VALUES
(1, 'inquiry'),
(2, 'quotation'),
(3, 'sale order'),
(4, 'good issue'),
(5, 'invoice');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `employee_name` varchar(100) DEFAULT NULL,
  `employee_department` varchar(45) DEFAULT NULL,
  `employee_email` varchar(45) DEFAULT NULL,
  `employee_tel` varchar(15) DEFAULT NULL,
  `username` varchar(10) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `employee_name`, `employee_department`, `employee_email`, `employee_tel`, `username`, `password`) VALUES
(1, 'Kamonsiri Piengjaikum', 'Manager', 'Kamonsiri@gmail.com', '0945645213', 'biw080', '080'),
(2, 'Maneeporn Noipang', 'Accounting', 'Maneeporn@gmail.com', '0952356521', 'bow149', '149'),
(3, 'Nutnicha Srechthadatta', 'Customer Relations', 'Nutnicha@gmail.com', '0963264568', 'tang106', '106'),
(4, 'Tanawat Majame', 'Customer Relations', 'Tanawat@gmail.com', '0942356515', 'ton103', '103'),
(5, 'Chan Chumintarachak', 'Procurement Department', 'Chan@gmail.com', '0923564125', 'chan100', '100'),
(6, 'Pukjira Luetan', 'Procurement Department', 'Pukjira@gmail.com', '09312465526', 'pim144', '144'),
(7, 'Premanan Onsing', 'Sales', 'Premanan@gmail.com', '0978551235', 'prem132', '132'),
(8, 'Peeratchai Pisboon', 'Sales', 'Peeratchai@gmail.com', '0986642531', 'prem131', '131'),
(9, '	\r\nPrem Tuntisak', 'IT Supports', 'Prem@gmail.com', '0942311256', 'ter141', '141');

-- --------------------------------------------------------

--
-- Table structure for table `good_issue`
--

CREATE TABLE `good_issue` (
  `good_issue_id` int(11) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `good_issue_date` date DEFAULT NULL,
  `good_issue_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `good_receipt`
--

CREATE TABLE `good_receipt` (
  `good_receipt_id` int(11) NOT NULL,
  `invoice_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `good_receipt`
--

INSERT INTO `good_receipt` (`good_receipt_id`, `invoice_id`) VALUES
(1, 1),
(2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inventory_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `material_id` varchar(45) NOT NULL,
  `material_stock` int(11) DEFAULT NULL,
  `material_price` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inventory_id`, `vendor_id`, `material_id`, `material_stock`, `material_price`) VALUES
(1, 2, 'CR001', 318, 100),
(2, 2, 'CR002', 318, 100),
(3, 2, 'CR003', 498, 5),
(16, 2, 'CR004', 398, 10),
(17, 2, 'CR005', 248, 150),
(18, 2, 'CR006', 498, 10),
(19, 1, 'CR001', 200, 110),
(20, 1, 'CR002', 250, 110),
(21, 1, 'CR003', 200, 7),
(22, 1, 'CR004', 300, 12),
(23, 1, 'CR005', 250, 145),
(24, 1, 'CR006', 300, 9),
(25, 3, 'CR002', 500, 10),
(26, 3, 'CRS003', 298, 90),
(27, 3, 'CRS004', 498, 7),
(28, 3, 'CRS005', 498, 7),
(29, 3, 'CRS006', 498, 10),
(30, 3, 'CRS007', 298, 145),
(31, 2, 'PA001', 298, 80),
(32, 2, 'PA002', 298, 250),
(33, 2, 'PA004', 298, 200),
(34, 3, 'PA001', 200, 85),
(35, 3, 'PA002', 250, 265),
(36, 3, 'PA003', 348, 130),
(37, 3, 'PA004', 350, 190),
(38, 1, 'RC001', 298, 10),
(39, 1, 'RC001', 298, 10),
(40, 1, 'RC002', 298, 50),
(41, 1, 'RC003', 498, 7),
(42, 1, 'RC004', 298, 60),
(43, 1, 'RC005', 298, 125),
(44, 1, 'RC006', 348, 90),
(47, 2, 'RM002', 348, 80),
(48, 2, 'RM003', 348, 80),
(49, 2, 'RM004', 348, 150),
(50, 2, 'RM005', 348, 200);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` int(11) NOT NULL,
  `po_id` int(11) NOT NULL,
  `invoice_total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `po_id`, `invoice_total`) VALUES
(1, 1, 4000);

-- --------------------------------------------------------

--
-- Table structure for table `item_list`
--

CREATE TABLE `item_list` (
  `item_list_id` int(11) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `item_list`
--

INSERT INTO `item_list` (`item_list_id`, `product_id`, `doc_id`, `quantity`, `total`) VALUES
(1, 'AT0001', 2, 20, 20900),
(2, 'AT0002', 2, 20, 18000),
(3, 'AT0003', 7, 20, 20000),
(4, 'AT0004', 7, 20, 20000),
(5, 'AT0001', 16, 20, 20900),
(6, 'AT0002', 16, 20, 18000),
(7, 'AT0001', 16, 20, 20900),
(8, 'AT0002', 16, 20, 18000),
(9, 'AT0001', 16, 20, 20900),
(10, 'AT0002', 16, 20, 18000),
(11, 'AT0001', 16, 20, 20900),
(12, 'AT0002', 16, 20, 18000),
(13, 'AT0001', 16, 20, 20900),
(14, 'AT0002', 16, 20, 18000),
(15, 'AT0001', 16, 20, 20900),
(16, 'AT0002', 16, 20, 18000),
(17, 'AT0001', 16, 20, 20900),
(18, 'AT0002', 16, 20, 18000),
(19, 'AT0001', 16, 20, 20900),
(20, 'AT0002', 16, 20, 18000),
(21, 'AT0001', 16, 20, 20900),
(22, 'AT0002', 16, 20, 18000),
(23, 'AT0001', 16, 20, 20900),
(24, 'AT0002', 16, 20, 18000),
(25, 'AT0001', 16, 20, 20900),
(26, 'AT0002', 16, 20, 18000),
(27, 'AT0001', 16, 2, 2090),
(28, 'AT0002', 16, 2, 1800),
(29, 'AT0001', 16, 2, 2090),
(30, 'AT0002', 16, 2, 1800),
(31, 'AT0001', 16, 2, 2090),
(32, 'AT0002', 16, 2, 1800);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `material_id` varchar(45) NOT NULL,
  `material_name` varchar(45) DEFAULT NULL,
  `material_type` varchar(45) DEFAULT NULL,
  `material_version` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `material`
--

INSERT INTO `material` (`material_id`, `material_name`, `material_type`, `material_version`) VALUES
('CR001', 'Barrel1', 'Each', 1),
('CR002', 'Cap1', 'Each', 1),
('CR003', 'Trim Ring1', 'Each', 1),
('CR004', 'Plunge1', 'Each', 1),
('CR005', 'Rollerball Ink Cartrige 1', 'Each', 1),
('CR006', 'Spring1', 'Each', 1),
('CRS001', 'Tip2', 'Each', 1),
('CRS002', 'Barrel5', 'Each', 1),
('CRS003', 'Cap5', 'Each', 1),
('CRS004', 'Plunge2', 'Each', 1),
('CRS005', 'Trim Ring3', 'Each', 1),
('CRS006', 'Spring2', 'Each', 1),
('CRS007', 'Gel Ink Cartrige2', 'Each', 1),
('PA001', 'Grip3', 'Each', 1),
('PA002', 'Rollerball Ink Cartrige2', 'Each', 1),
('PA003', 'Brarel4', 'Each', 1),
('PA004', 'Cap4', 'Each', 1),
('RC001', 'Tip1', 'Each', 1),
('RC002', 'Grip1', 'Each', 1),
('RC003', 'Trim Ring2', 'Each', 1),
('RC004', 'Brarel2', 'Each', 1),
('RC005', 'Gel Ink Cartrige1', 'Each', 1),
('RC006', 'Cap2', 'Each', 1),
('RM001', 'Nib', 'Each', 1),
('RM002', 'Brarel3', 'Each', 1),
('RM003', 'Grip2', 'Each', 1),
('RM004', 'Cap3', 'Each', 1),
('RM005', 'Ink Cartrige', 'Each', 1),
('RM011 ', 'Nib2', 'Each', 2);

-- --------------------------------------------------------

--
-- Table structure for table `operation`
--

CREATE TABLE `operation` (
  `operation_id` int(11) NOT NULL,
  `routing_id` int(11) NOT NULL,
  `work_center_id` int(11) NOT NULL,
  `operation_time` varchar(11) NOT NULL,
  `operation_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `operation`
--

INSERT INTO `operation` (`operation_id`, `routing_id`, `work_center_id`, `operation_time`, `operation_description`) VALUES
(1, 1, 1, '10  minute', 'Step1: Finding the Parts (Feel annoyed that your pen came apart and hope all the parts are there. Collect the parts.)'),
(2, 1, 1, '1  minute', 'Step2: Spring on the Ink Tube (Got all the parts? Great. First put the spring on the ink tube.)'),
(3, 1, 1, '1  minute', 'Step3: Plastic Thing in Pen Tube (Drop the white tube thing into the large pen tube. Make sure it\'s small side is toward the clicker side.)'),
(4, 1, 1, '1  minute', 'Step4: Tube in Tube (Drop the ink tube into the big pen tube. The unnamed plastic part from before should be nestled into the end of the pen tube before inserting the ink tube.)'),
(5, 1, 1, '1  minute', 'Step5: Grip (Add grip.)'),
(6, 1, 1, '1  minute', 'Step6: Screw on and Write (Finally, screw on the cap. Hopefully you have managed to scrounge up all the parts and when you click the end, the pen tip comes out and you can write that first novel. )'),
(7, 2, 2, '10  minute', 'Thin bubble wrap'),
(8, 2, 2, '5  minute', 'Put in the box '),
(9, 2, 2, '3  minute', 'Packing '),
(10, 3, 3, '10  minute', 'product catergorized'),
(11, 3, 3, '1 hour', 'Sent back to inventory');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(45) DEFAULT NULL,
  `product_price` float DEFAULT NULL,
  `product_qty` int(11) DEFAULT NULL,
  `product_type` varchar(45) DEFAULT NULL,
  `product_discount` float DEFAULT NULL,
  `product_detail` varchar(255) DEFAULT NULL,
  `product_photo` varchar(255) DEFAULT NULL,
  `product_photo_bom` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_price`, `product_qty`, `product_type`, `product_discount`, `product_detail`, `product_photo`, `product_photo_bom`) VALUES
('AT0001', 'CROSS', 1100, 100, 'Ballpiont Pen Blue color 0.7 mm', 0.05, 'Classic Century Lustrous Chrome an icon of American design and innovation.The choice of movers, shakers and ground breakers since 1946.', 'product1.jpg', 'NIB_1.png'),
('AT0002', 'RICHARD CROSS', 900, 100, 'Gel Ink Pen Blue color 0.5mm', 0, 'Century II Classic Black embracing both tradition and evolution—the iconic Cross profile takes a broader point of view.', 'Product2.jpg', 'NIB_2.png'),
('AT0003', 'LAMY ', 1000, 100, 'Fountain Pen Black color 0.7mm', 0, 'Lamy AL-star is a further development of  the classic Lamy Safari.AL-star, unlike Safari, has a body in aluminum,which makes the pen slightly heavier.AL-star also has a transparent grip section and is marginally larger than its sister Safari, Aluminum gra', 'Product3.jpg', 'NIB_3.png'),
('AT0004', 'CROSS ', 1000, 100, 'Ballpiont Pen Blue color 0.5mm', 0, 'Coventry Red Lacquer the Coventry ballpoint pen impresses with its strong profile,rich sheen, and polished contrasting appointments.This stylish writing instrument is the perfect gift for those who want to elevate their writing experience every day.', 'Product4.jpg', 'NIB_4.png'),
('AT0005', 'PARKER', 1750, 100, 'Rollerball Pen Blue color 0.5mm', 0.05, 'Smart yet timeless designs meet a modern tapered silhouette comfortable shape is paired with timeless craftsmanship Range of finishes and trims to complement your style 									Consistently smooth-flowing rollerball design', 'Product5.jpg', 'NIB_5.png');

-- --------------------------------------------------------

--
-- Table structure for table `production`
--

CREATE TABLE `production` (
  `production_id` int(11) NOT NULL,
  `production_date` date DEFAULT NULL,
  `product_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `production_has_routing`
--

CREATE TABLE `production_has_routing` (
  `production_id` int(11) NOT NULL,
  `routing_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `product_material`
--

CREATE TABLE `product_material` (
  `pm_id` int(11) NOT NULL,
  `pm_qty` int(11) DEFAULT NULL,
  `material_id` varchar(45) NOT NULL,
  `product_id` varchar(10) NOT NULL,
  `material_use` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product_material`
--

INSERT INTO `product_material` (`pm_id`, `pm_qty`, `material_id`, `product_id`, `material_use`) VALUES
(1, 1, 'CR001', 'AT0001', 1),
(2, 1, 'CR002', 'AT0001', 1),
(3, 1, 'CR003', 'AT0001', 1),
(4, 1, 'CR004', 'AT0001', 1),
(5, 1, 'CR005', 'AT0001', 1),
(6, 1, 'CR006', 'AT0001', 1),
(7, 1, 'CRS001', 'AT0004', 1),
(8, 1, 'CRS002', 'AT0004', 1),
(9, 1, 'CRS003', 'AT0004', 1),
(10, 1, 'CRS004', 'AT0004', 1),
(11, 1, 'CRS005', 'AT0004', 1),
(12, 1, 'CRS006', 'AT0004', 1),
(13, 1, 'CRS007', 'AT0004', 1),
(14, 1, 'PA001', 'AT0005', 1),
(15, 1, 'PA002', 'AT0005', 1),
(16, 1, 'PA003', 'AT0005', 1),
(17, 1, 'PA004', 'AT0005', 1),
(18, 1, 'RC001', 'AT0002', 1),
(19, 1, 'RC002', 'AT0002', 1),
(20, 1, 'RC003', 'AT0002', 1),
(21, 1, 'RC004', 'AT0002', 1),
(22, 1, 'RC005', 'AT0002', 1),
(23, 1, 'RC006', 'AT0002', 1),
(24, 1, 'RM001', 'AT0003', 1),
(25, 1, 'RM002', 'AT0003', 1),
(26, 1, 'RM003', 'AT0003', 1),
(27, 1, 'RM004', 'AT0003', 1),
(28, 1, 'RM005', 'AT0003', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `po_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `po_total` float DEFAULT NULL,
  `po_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`po_id`, `pr_id`, `po_total`, `po_date`) VALUES
(1, 1, 4000, '2019-11-18');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requisition`
--

CREATE TABLE `purchase_requisition` (
  `pr_id` int(11) NOT NULL,
  `vendor_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `pr_date` date DEFAULT NULL,
  `pr_dateneed` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_requisition`
--

INSERT INTO `purchase_requisition` (`pr_id`, `vendor_id`, `employee_id`, `company_id`, `pr_date`, `pr_dateneed`) VALUES
(1, 2, 2, 1, '2019-11-19', '2019-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_requisition_detail`
--

CREATE TABLE `purchase_requisition_detail` (
  `pr_detail_id` int(11) NOT NULL,
  `inventory_id` int(11) NOT NULL,
  `pr_id` int(11) NOT NULL,
  `pr_qty` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `purchase_requisition_detail`
--

INSERT INTO `purchase_requisition_detail` (`pr_detail_id`, `inventory_id`, `pr_id`, `pr_qty`) VALUES
(1, 1, 1, 20),
(2, 2, 1, 20);

-- --------------------------------------------------------

--
-- Table structure for table `routing`
--

CREATE TABLE `routing` (
  `routing_id` int(11) NOT NULL,
  `routing_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `routing`
--

INSERT INTO `routing` (`routing_id`, `routing_name`) VALUES
(1, 'assemble'),
(2, 'packing'),
(3, 'shiping');

-- --------------------------------------------------------

--
-- Table structure for table `vendor`
--

CREATE TABLE `vendor` (
  `vendor_id` int(11) NOT NULL,
  `vendor_name` varchar(60) DEFAULT NULL,
  `vendor_address` varchar(255) DEFAULT NULL,
  `vendor_tel` varchar(15) DEFAULT NULL,
  `vendor_email` varchar(45) DEFAULT NULL,
  `vendor_tax_id` varchar(25) DEFAULT NULL,
  `vendor_tax` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vendor`
--

INSERT INTO `vendor` (`vendor_id`, `vendor_name`, `vendor_address`, `vendor_tel`, `vendor_email`, `vendor_tax_id`, `vendor_tax`) VALUES
(1, 'PCV company', 'Rama Iii Rd., Yan Nawa, Bang Phongphang, Bangkok 10120', '053-565789', 'PCV_company@gmail.com', '01652355465312', 0.07),
(2, 'EPN company', 'Narathiwat Ratchanakharin Rd., Yan Nawa, Chong Nonsi, Bangkok 10120', '053-954362', 'EPN_company@gmail.com', '0122345682251', 0.07),
(3, 'VVPA company', '345 Moo 4, Prachasamosorn Road, Nai Mueang, Mueang, Khon Kaen 40000', '053-784111', 'VVPA_company@gmail.com', '0195648235112', 0.07);

-- --------------------------------------------------------

--
-- Table structure for table `work_center`
--

CREATE TABLE `work_center` (
  `work_center_id` int(11) NOT NULL,
  `work_center_name` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_center`
--

INSERT INTO `work_center` (`work_center_id`, `work_center_name`) VALUES
(1, 'Plant_A'),
(2, 'Plant_B'),
(3, 'Plant_C');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `fk_customer_customer_type1_idx` (`customer_type_id`);

--
-- Indexes for table `customer_type`
--
ALTER TABLE `customer_type`
  ADD PRIMARY KEY (`customer_type_id`);

--
-- Indexes for table `document_sd`
--
ALTER TABLE `document_sd`
  ADD PRIMARY KEY (`doc_id`),
  ADD KEY `fk_document_sd_doc_sd_type1_idx` (`doc_sd_type_id`),
  ADD KEY `fk_document_sd_customer1_idx` (`customer_id`),
  ADD KEY `fk_document_sd_employee1_idx` (`employee_id`),
  ADD KEY `fk_document_sd_company1_idx` (`company_id`);

--
-- Indexes for table `doc_sd_type`
--
ALTER TABLE `doc_sd_type`
  ADD PRIMARY KEY (`doc_sd_type_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `good_issue`
--
ALTER TABLE `good_issue`
  ADD PRIMARY KEY (`good_issue_id`),
  ADD KEY `fk_good_issue_product1_idx` (`product_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `good_receipt`
--
ALTER TABLE `good_receipt`
  ADD PRIMARY KEY (`good_receipt_id`),
  ADD KEY `fk_good_receipt_invoice1_idx` (`invoice_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inventory_id`),
  ADD KEY `fk_inventory_vendor_idx` (`vendor_id`),
  ADD KEY `fk_inventory_material1_idx` (`material_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `fk_invoice_purchase_order1_idx` (`po_id`);

--
-- Indexes for table `item_list`
--
ALTER TABLE `item_list`
  ADD PRIMARY KEY (`item_list_id`),
  ADD KEY `fk_item_list_product1_idx` (`product_id`),
  ADD KEY `doc_id` (`doc_id`);

--
-- Indexes for table `material`
--
ALTER TABLE `material`
  ADD PRIMARY KEY (`material_id`);

--
-- Indexes for table `operation`
--
ALTER TABLE `operation`
  ADD PRIMARY KEY (`operation_id`),
  ADD KEY `routing_id` (`routing_id`),
  ADD KEY `work_center_id` (`work_center_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `production`
--
ALTER TABLE `production`
  ADD PRIMARY KEY (`production_id`),
  ADD KEY `fk_production_product1_idx` (`product_id`);

--
-- Indexes for table `production_has_routing`
--
ALTER TABLE `production_has_routing`
  ADD PRIMARY KEY (`production_id`,`routing_id`),
  ADD KEY `fk_production_has_routing_routing1_idx` (`routing_id`),
  ADD KEY `fk_production_has_routing_production1_idx` (`production_id`);

--
-- Indexes for table `product_material`
--
ALTER TABLE `product_material`
  ADD PRIMARY KEY (`pm_id`),
  ADD KEY `fk_product_material_material1_idx` (`material_id`),
  ADD KEY `fk_product_material_product1_idx` (`product_id`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`po_id`),
  ADD KEY `fk_purchase_order_purchase_requisition1_idx` (`pr_id`);

--
-- Indexes for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD PRIMARY KEY (`pr_id`),
  ADD KEY `fk_purchase_requisition_vendor1_idx` (`vendor_id`),
  ADD KEY `fk_purchase_requisition_employee1_idx` (`employee_id`),
  ADD KEY `fk_purchase_requisition_company1_idx` (`company_id`);

--
-- Indexes for table `purchase_requisition_detail`
--
ALTER TABLE `purchase_requisition_detail`
  ADD PRIMARY KEY (`pr_detail_id`),
  ADD KEY `fk_purchase_requisition_detail_purchase_requisition1_idx` (`pr_id`),
  ADD KEY `fk_purchase_requisition_detail_inventory1_idx` (`inventory_id`);

--
-- Indexes for table `routing`
--
ALTER TABLE `routing`
  ADD PRIMARY KEY (`routing_id`);

--
-- Indexes for table `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`vendor_id`);

--
-- Indexes for table `work_center`
--
ALTER TABLE `work_center`
  ADD PRIMARY KEY (`work_center_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `document_sd`
--
ALTER TABLE `document_sd`
  MODIFY `doc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `good_issue`
--
ALTER TABLE `good_issue`
  MODIFY `good_issue_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `good_receipt`
--
ALTER TABLE `good_receipt`
  MODIFY `good_receipt_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inventory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item_list`
--
ALTER TABLE `item_list`
  MODIFY `item_list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `operation`
--
ALTER TABLE `operation`
  MODIFY `operation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `production`
--
ALTER TABLE `production`
  MODIFY `production_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_material`
--
ALTER TABLE `product_material`
  MODIFY `pm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `purchase_order`
--
ALTER TABLE `purchase_order`
  MODIFY `po_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  MODIFY `pr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `purchase_requisition_detail`
--
ALTER TABLE `purchase_requisition_detail`
  MODIFY `pr_detail_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `routing`
--
ALTER TABLE `routing`
  MODIFY `routing_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vendor`
--
ALTER TABLE `vendor`
  MODIFY `vendor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `work_center`
--
ALTER TABLE `work_center`
  MODIFY `work_center_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_customer_type1` FOREIGN KEY (`customer_type_id`) REFERENCES `customer_type` (`customer_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `document_sd`
--
ALTER TABLE `document_sd`
  ADD CONSTRAINT `fk_document_sd_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_sd_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_sd_doc_sd_type1` FOREIGN KEY (`doc_sd_type_id`) REFERENCES `doc_sd_type` (`doc_sd_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_document_sd_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `good_issue`
--
ALTER TABLE `good_issue`
  ADD CONSTRAINT `fk_good_issue_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `good_issue_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `document_sd` (`doc_id`);

--
-- Constraints for table `good_receipt`
--
ALTER TABLE `good_receipt`
  ADD CONSTRAINT `fk_good_receipt_invoice1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `inventory`
--
ALTER TABLE `inventory`
  ADD CONSTRAINT `fk_inventory_material1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_inventory_vendor` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `fk_invoice_purchase_order1` FOREIGN KEY (`po_id`) REFERENCES `purchase_order` (`po_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `item_list`
--
ALTER TABLE `item_list`
  ADD CONSTRAINT `fk_item_list_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `item_list_ibfk_1` FOREIGN KEY (`doc_id`) REFERENCES `document_sd` (`doc_id`);

--
-- Constraints for table `operation`
--
ALTER TABLE `operation`
  ADD CONSTRAINT `routing_id` FOREIGN KEY (`routing_id`) REFERENCES `routing` (`routing_id`),
  ADD CONSTRAINT `work_center_id` FOREIGN KEY (`work_center_id`) REFERENCES `work_center` (`work_center_id`);

--
-- Constraints for table `production`
--
ALTER TABLE `production`
  ADD CONSTRAINT `fk_production_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `production_has_routing`
--
ALTER TABLE `production_has_routing`
  ADD CONSTRAINT `fk_production_has_routing_production1` FOREIGN KEY (`production_id`) REFERENCES `production` (`production_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_production_has_routing_routing1` FOREIGN KEY (`routing_id`) REFERENCES `routing` (`routing_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `product_material`
--
ALTER TABLE `product_material`
  ADD CONSTRAINT `fk_product_material_material1` FOREIGN KEY (`material_id`) REFERENCES `material` (`material_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_product_material_product1` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `fk_purchase_order_purchase_requisition1` FOREIGN KEY (`pr_id`) REFERENCES `purchase_requisition` (`pr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_requisition`
--
ALTER TABLE `purchase_requisition`
  ADD CONSTRAINT `fk_purchase_requisition_company1` FOREIGN KEY (`company_id`) REFERENCES `company` (`company_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_requisition_employee1` FOREIGN KEY (`employee_id`) REFERENCES `employee` (`employee_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_requisition_vendor1` FOREIGN KEY (`vendor_id`) REFERENCES `vendor` (`vendor_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase_requisition_detail`
--
ALTER TABLE `purchase_requisition_detail`
  ADD CONSTRAINT `fk_purchase_requisition_detail_inventory1` FOREIGN KEY (`inventory_id`) REFERENCES `inventory` (`inventory_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_requisition_detail_purchase_requisition1` FOREIGN KEY (`pr_id`) REFERENCES `purchase_requisition` (`pr_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
