-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 10:23 AM
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
-- Database: `db_brainop`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `idaccount` int(11) NOT NULL,
  `idlistAccess` int(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`idaccount`, `idlistAccess`, `email`, `password`) VALUES
(1, 6, 'admin@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 1, 'user@gmail.com', '202cb962ac59075b964b07152d234b70'),
(4, 5, 'sm@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 3, 'developer@gmail.com', '202cb962ac59075b964b07152d234b70'),
(6, 3, 'rizal.dev@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 4, 'asd@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 1, 'user.second@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, 1, 'z@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, 1, 'zcxxzc@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `idactivity` int(11) NOT NULL,
  `iddataEmployee` int(11) NOT NULL,
  `idlistTask` int(11) NOT NULL,
  `activity` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`idactivity`, `iddataEmployee`, `idlistTask`, `activity`, `date`) VALUES
(7, 3, 8, 'Memindahkan task ke Progress', '2022-10-25 10:01:53'),
(8, 3, 8, 'Memindahkan task ke Doing', '2022-10-25 10:03:17'),
(9, 3, 8, 'Memindahkan task ke Progress', '2022-10-25 10:12:38'),
(10, 3, 8, 'Memindahkan task ke Check', '2022-10-25 10:12:45');

-- --------------------------------------------------------

--
-- Table structure for table `appcategory`
--

CREATE TABLE `appcategory` (
  `idappCategory` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appcategory`
--

INSERT INTO `appcategory` (`idappCategory`, `name`) VALUES
(1, 'Android'),
(2, 'IOS'),
(3, 'Website');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `idchat` int(11) NOT NULL,
  `iddataUser` int(11) NOT NULL,
  `date` date NOT NULL,
  `chatUser` text DEFAULT NULL,
  `chatAdmin` text DEFAULT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`idchat`, `iddataUser`, `date`, `chatUser`, `chatAdmin`, `status`) VALUES
(21, 1, '2022-10-01', '<ul><li>xzczxc</li><li>asdasd</li><li>cvxv</li></ul>', ' ', 'Read'),
(22, 1, '2022-10-01', '<ol><li>dsfds</li><li>dsadsas</li><li>cvcxv</li></ol>', ' ', 'Read'),
(23, 1, '2022-10-01', '<p><strong>xzccxvcxvcx</strong></p>', ' ', 'Read');

-- --------------------------------------------------------

--
-- Table structure for table `commenttask`
--

CREATE TABLE `commenttask` (
  `idcommentTask` int(11) NOT NULL,
  `idlistTask` int(11) NOT NULL,
  `iddataEmployee` int(11) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `commenttask`
--

INSERT INTO `commenttask` (`idcommentTask`, `idlistTask`, `iddataEmployee`, `comment`) VALUES
(1, 8, 4, 'asdasd'),
(2, 8, 4, 'cxvxcvcxv'),
(3, 8, 4, 'apakah itu untuk login?');

-- --------------------------------------------------------

--
-- Table structure for table `contributiontask`
--

CREATE TABLE `contributiontask` (
  `idcontributionTask` int(11) NOT NULL,
  `idlistTask` int(11) NOT NULL,
  `iddataEmployee` int(11) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contributiontask`
--

INSERT INTO `contributiontask` (`idcontributionTask`, `idlistTask`, `iddataEmployee`, `status`) VALUES
(1, 2, 2, ' '),
(2, 2, 2, ' '),
(3, 2, 4, ' '),
(4, 1, 4, ' '),
(5, 4, 1, ' '),
(6, 6, 1, ' '),
(7, 7, 1, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `dataemployee`
--

CREATE TABLE `dataemployee` (
  `iddataEmployee` int(11) NOT NULL,
  `idaccount` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `role` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataemployee`
--

INSERT INTO `dataemployee` (`iddataEmployee`, `idaccount`, `name`, `role`) VALUES
(1, 5, 'Muhammad Rizal Wiyono', 'Scrum Master'),
(3, 4, 'Scrum Master', 'Developer'),
(4, 6, 'The Rizal', 'User'),
(5, 7, 'asd', 'Customer Service'),
(6, 8, 'Second User', 'User'),
(7, 9, 'z', 'User'),
(8, 10, 'asd', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `datauser`
--

CREATE TABLE `datauser` (
  `iddataUser` int(11) NOT NULL,
  `idaccount` int(11) NOT NULL,
  `name` varchar(45) NOT NULL,
  `first_name` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `no_telp` varchar(45) NOT NULL,
  `street` varchar(45) NOT NULL,
  `city` varchar(45) NOT NULL,
  `country` varchar(45) NOT NULL,
  `zip_code` varchar(45) NOT NULL,
  `birth_place` varchar(45) NOT NULL,
  `birth_date` varchar(45) NOT NULL,
  `religious` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datauser`
--

INSERT INTO `datauser` (`iddataUser`, `idaccount`, `name`, `first_name`, `last_name`, `no_telp`, `street`, `city`, `country`, `zip_code`, `birth_place`, `birth_date`, `religious`, `gender`) VALUES
(1, 3, 'Muhammad Rizal Wiyono', 'Muhammad WYB', 'Wiyono', '088235536572', 'Sampang', 'Sampang', 'Madura', '123234', 'Sampang', '2022-08-18', 'Islam', 'Laki-Laki'),
(2, 8, 'User Second', 'User', 'Second', '123', 'Sampang', 'Malang', 'Madura', '213', 'Sampang', '2022-08-31', 'Islam', 'Laki-Laki'),
(3, 9, 'z', 'z', 'x', '2', 'z', 'z', 'z', '123', 'z', '2022-09-27', 'zz', 'Laki-Laki');

-- --------------------------------------------------------

--
-- Table structure for table `detailorder`
--

CREATE TABLE `detailorder` (
  `iddetailOrder` int(11) NOT NULL,
  `iddataUser` int(11) NOT NULL,
  `project_name` varchar(45) NOT NULL,
  `company_name` varchar(45) NOT NULL,
  `idappCategory` int(11) NOT NULL,
  `resource` varchar(45) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(45) NOT NULL,
  `date` date NOT NULL,
  `deadline` date NOT NULL,
  `project_package` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detailorder`
--

INSERT INTO `detailorder` (`iddetailOrder`, `iddataUser`, `project_name`, `company_name`, `idappCategory`, `resource`, `description`, `status`, `date`, `deadline`, `project_package`) VALUES
(1, 1, 'Aplikasi Kasir', 'Rizky Company', 1, '', 'Aplikasi untuk kasir, warna sesuai dengan link yang ada', 'Unpaid', '0000-00-00', '0000-00-00', 'Custom'),
(2, 1, 'Mobile Kasir', 'Rizky Company', 3, 'https://github.com/new', 'Tolong sesuaikan warnanya dengan link resources', 'Unpaid', '0000-00-00', '0000-00-00', 'Gold'),
(3, 1, 'aa', 'aa', 1, 'ccc', '-tambahan fitur', 'Unpaid', '2022-09-07', '0000-00-00', 'Gold'),
(4, 1, 'Mobile App Curanmor', 'Rizky Company', 2, 'http://localhost/webBrainOp/component/user/or', 'fiturnya banyak', 'Unpaid', '2022-09-07', '0000-00-00', 'Silver'),
(5, 1, 'Moka', 'Rizky CV', 2, 'http://localhost/webBrainOp/component/user/or', 'aplikasi kasir dengan fitu manajemen, fitasdasdasdasd', 'Unpaid', '2022-09-08', '2022-09-30', 'Diamond'),
(6, 1, 'dfgdfg', 'dfg', 1, 'gfdgdfg', 'czxcv', 'Lunas', '2022-10-01', '2022-10-04', 'Silver'),
(7, 1, 'Game Apps', 'The Gaming', 1, 'http://localhost/webBrainOp/component/user/or', 'asdasdasdasd', 'Konsultasikan', '2022-10-01', '2022-10-13', 'Diamond'),
(8, 1, 'asdasd', 'zxczxc', 1, 'czxcxzc', '<ul><li>aesdasd</li><li>ccxv</li><li>asdasd</li></ul>', 'Konsultasikan', '2022-10-01', '2022-10-05', 'Silver');

-- --------------------------------------------------------

--
-- Table structure for table `featuresservice`
--

CREATE TABLE `featuresservice` (
  `idfeaturesService` int(11) NOT NULL,
  `idservicePrice` int(11) NOT NULL,
  `contents` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featuresservice`
--

INSERT INTO `featuresservice` (`idfeaturesService`, `idservicePrice`, `contents`) VALUES
(1, 1, 'Figma Resource'),
(2, 1, 'Code'),
(3, 2, 'Figma Resource'),
(4, 2, 'Code'),
(5, 2, 'Comment in Code'),
(6, 3, 'Figma Resource'),
(7, 3, 'Code'),
(8, 3, 'Comment in Code'),
(9, 3, 'Prototype');

-- --------------------------------------------------------

--
-- Table structure for table `listaccess`
--

CREATE TABLE `listaccess` (
  `idlistAcccess` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listaccess`
--

INSERT INTO `listaccess` (`idlistAcccess`, `name`) VALUES
(1, 'User'),
(2, 'Developer'),
(3, 'UI/UX'),
(4, 'Customer Service'),
(5, 'Scrum Master'),
(6, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `listtask`
--

CREATE TABLE `listtask` (
  `idlistTask` int(11) NOT NULL,
  `iddetailOrder` int(11) NOT NULL,
  `task_name` varchar(45) NOT NULL,
  `deadline` date NOT NULL,
  `progress` int(11) NOT NULL,
  `status` varchar(45) NOT NULL,
  `link_file` text NOT NULL,
  `additional_link` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listtask`
--

INSERT INTO `listtask` (`idlistTask`, `iddetailOrder`, `task_name`, `deadline`, `progress`, `status`, `link_file`, `additional_link`, `description`) VALUES
(8, 6, 'asd', '2022-10-11', 0, 'Check', '', 'asdasd', 'zxczxczxczxcxzc'),
(9, 6, 'asdasd', '2022-10-03', 0, 'Done', '', '', 'zxczxc'),
(10, 6, 'cvbcvb', '2022-10-12', 0, 'Done', '', '', 'cvbcbv');

-- --------------------------------------------------------

--
-- Table structure for table `serviceprice`
--

CREATE TABLE `serviceprice` (
  `idservicePrice` int(11) NOT NULL,
  `nominal` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `serviceprice`
--

INSERT INTO `serviceprice` (`idservicePrice`, `nominal`, `name`) VALUES
(1, 3800000, 'Silver'),
(2, 5700000, 'Gold'),
(3, 8000000, 'Diamond');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `idtransaction` int(11) NOT NULL,
  `iddetailOrder` int(11) NOT NULL,
  `price_order` text NOT NULL,
  `proof_of_payment` text NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`idtransaction`, `iddetailOrder`, `price_order`, `proof_of_payment`, `status`) VALUES
(1, 3, '105000', 'a313b39eed316386ec9b8f81a19f643bantrian.png', 'Unpaid'),
(2, 5, '5000000', 'b5ba6ed688996341b93008972d378f4aNew Wireframe 1 copy 4.png', 'Unpaid'),
(3, 6, '200000', '-', 'Lunas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`idaccount`);

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`idactivity`);

--
-- Indexes for table `appcategory`
--
ALTER TABLE `appcategory`
  ADD PRIMARY KEY (`idappCategory`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`idchat`);

--
-- Indexes for table `commenttask`
--
ALTER TABLE `commenttask`
  ADD PRIMARY KEY (`idcommentTask`);

--
-- Indexes for table `contributiontask`
--
ALTER TABLE `contributiontask`
  ADD PRIMARY KEY (`idcontributionTask`);

--
-- Indexes for table `dataemployee`
--
ALTER TABLE `dataemployee`
  ADD PRIMARY KEY (`iddataEmployee`);

--
-- Indexes for table `datauser`
--
ALTER TABLE `datauser`
  ADD PRIMARY KEY (`iddataUser`);

--
-- Indexes for table `detailorder`
--
ALTER TABLE `detailorder`
  ADD PRIMARY KEY (`iddetailOrder`);

--
-- Indexes for table `featuresservice`
--
ALTER TABLE `featuresservice`
  ADD PRIMARY KEY (`idfeaturesService`);

--
-- Indexes for table `listaccess`
--
ALTER TABLE `listaccess`
  ADD PRIMARY KEY (`idlistAcccess`);

--
-- Indexes for table `listtask`
--
ALTER TABLE `listtask`
  ADD PRIMARY KEY (`idlistTask`);

--
-- Indexes for table `serviceprice`
--
ALTER TABLE `serviceprice`
  ADD PRIMARY KEY (`idservicePrice`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idtransaction`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `idaccount` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `idactivity` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `appcategory`
--
ALTER TABLE `appcategory`
  MODIFY `idappCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `idchat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `commenttask`
--
ALTER TABLE `commenttask`
  MODIFY `idcommentTask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contributiontask`
--
ALTER TABLE `contributiontask`
  MODIFY `idcontributionTask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `dataemployee`
--
ALTER TABLE `dataemployee`
  MODIFY `iddataEmployee` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `datauser`
--
ALTER TABLE `datauser`
  MODIFY `iddataUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `detailorder`
--
ALTER TABLE `detailorder`
  MODIFY `iddetailOrder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `featuresservice`
--
ALTER TABLE `featuresservice`
  MODIFY `idfeaturesService` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `listaccess`
--
ALTER TABLE `listaccess`
  MODIFY `idlistAcccess` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listtask`
--
ALTER TABLE `listtask`
  MODIFY `idlistTask` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `serviceprice`
--
ALTER TABLE `serviceprice`
  MODIFY `idservicePrice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idtransaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
