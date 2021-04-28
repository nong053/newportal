-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 10:58 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ncoc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `medical_report_tbl`
--

CREATE TABLE `medical_report_tbl` (
  `id` int(11) NOT NULL,
  `data_report1` varchar(200) DEFAULT NULL,
  `data_report_status1` varchar(45) DEFAULT NULL,
  `data_report2` varchar(200) DEFAULT NULL,
  `data_report_status2` varchar(45) DEFAULT NULL,
  `data_report3` varchar(200) DEFAULT NULL,
  `data_report_status3` varchar(45) DEFAULT NULL,
  `data_report4` varchar(200) DEFAULT NULL,
  `data_report_status4` varchar(45) DEFAULT NULL,
  `data_report5` varchar(200) DEFAULT NULL,
  `data_report_status5` varchar(45) DEFAULT NULL,
  `data_report6` varchar(200) DEFAULT NULL,
  `data_report_status6` varchar(45) DEFAULT NULL,
  `data_report7` varchar(200) DEFAULT NULL,
  `data_report_status7` varchar(45) DEFAULT NULL,
  `data_report8` varchar(200) DEFAULT NULL,
  `data_report_status8` varchar(45) DEFAULT NULL,
  `data_report9` varchar(200) DEFAULT NULL,
  `data_report_status9` varchar(45) DEFAULT NULL,
  `data_report10` varchar(200) DEFAULT NULL,
  `data_report_status10` varchar(45) DEFAULT NULL,
  `data_report11` varchar(200) DEFAULT NULL,
  `data_report_status11` varchar(45) DEFAULT NULL,
  `data_report12` varchar(200) DEFAULT NULL,
  `data_report_status12` varchar(45) DEFAULT NULL,
  `data_report13` varchar(200) DEFAULT NULL,
  `data_report_status13` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `medical_report_tbl`
--

INSERT INTO `medical_report_tbl` (`id`, `data_report1`, `data_report_status1`, `data_report2`, `data_report_status2`, `data_report3`, `data_report_status3`, `data_report4`, `data_report_status4`, `data_report5`, `data_report_status5`, `data_report6`, `data_report_status6`, `data_report7`, `data_report_status7`, `data_report8`, `data_report_status8`, `data_report9`, `data_report_status9`, `data_report10`, `data_report_status10`, `data_report11`, `data_report_status11`, `data_report12`, `data_report_status12`, `data_report13`, `data_report_status13`) VALUES
(1, 'สถานการณ์การแพร่ระบาดของโรค COVID-19 ทั่วโลก', '0', 'ประเทศที่มีผู้ติดเชื้อฯ สูงสุด 10 อันดับ', '1', 'ประชาคมอาเซียน', '1', 'สถานการณ์การแพร่ระบาดของโรค COVID-19 ประเทศไทย', '0', 'ศักยภาพ ร.พ.สังกัด ท.อ', '0', 'สถิติผู้ติดเชื้อ', '0', 'State Quarantine', '0', 'การสนับสนุนด้านเวชภัณฑ์ป้องกัน', '0', 'การประชาสัมพันธ์', '0', 'จำนวนผู้ป่วย ARI Clinic', '0', 'พัสดุสายพลาธิการ', '0', 'พัสดุสายพลาธิการ', '0', 'เครื่องบินลำเลียงสนับสนุนการงานด้านการแพทย์', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medical_report_tbl`
--
ALTER TABLE `medical_report_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medical_report_tbl`
--
ALTER TABLE `medical_report_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
