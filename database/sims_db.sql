-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2016 at 10:12 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sims_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `1Sep` int(11) DEFAULT NULL,
  `1Oct` int(11) DEFAULT NULL,
  `1Nov` int(11) DEFAULT NULL,
  `1Dec` int(11) DEFAULT NULL,
  `1Jan` int(11) DEFAULT NULL,
  `1Feb` int(11) DEFAULT NULL,
  `1Mar` int(11) DEFAULT NULL,
  `1Apr` int(11) DEFAULT NULL,
  `1May` int(11) DEFAULT NULL,
  `2Sep` int(11) DEFAULT NULL,
  `2Oct` int(11) DEFAULT NULL,
  `2Nov` int(11) DEFAULT NULL,
  `2Dec` int(11) DEFAULT NULL,
  `2Jan` int(11) DEFAULT NULL,
  `2Feb` int(11) DEFAULT NULL,
  `2Mar` int(11) DEFAULT NULL,
  `2Apr` int(11) DEFAULT NULL,
  `2May` int(11) DEFAULT NULL,
  `3Sep` int(11) DEFAULT NULL,
  `3Oct` int(11) DEFAULT NULL,
  `3Nov` int(11) DEFAULT NULL,
  `3Dec` int(11) DEFAULT NULL,
  `3Jan` int(11) DEFAULT NULL,
  `3Feb` int(11) DEFAULT NULL,
  `3Mar` int(11) DEFAULT NULL,
  `3Apr` int(11) DEFAULT NULL,
  `3May` int(11) DEFAULT NULL,
  `LeaveAvailed` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `RollNo`, `1Sep`, `1Oct`, `1Nov`, `1Dec`, `1Jan`, `1Feb`, `1Mar`, `1Apr`, `1May`, `2Sep`, `2Oct`, `2Nov`, `2Dec`, `2Jan`, `2Feb`, `2Mar`, `2Apr`, `2May`, `3Sep`, `3Oct`, `3Nov`, `3Dec`, `3Jan`, `3Feb`, `3Mar`, `3Apr`, `3May`, `LeaveAvailed`) VALUES
(1, 13501, 70, 71, 73, 76, 79, 88, 78, 77, 89, 54, 89, 78, 67, 77, 80, 45, 79, 78, 89, 78, 89, 79, 78, 89, 78, 79, 78, ''),
(2, 13502, 89, 78, 89, 78, 86, 87, 85, 84, 86, 89, 84, 87, 75, 72, 71, 70, 78, 79, 85, 75, 65, 58, 78, 79, 76, 78, 78, ''),
(3, 13504, 78, 89, 78, 89, 78, 89, 86, 87, 87, 84, 85, 81, 82, 83, 87, 89, 58, 78, 98, 84, 95, 84, 87, 75, 71, 58, 73, ''),
(4, 13505, 78, 78, 75, 84, 87, 68, 85, 74, 79, 78, 89, 78, 69, 45, 78, 78, 45, 78, 89, 78, 56, 78, 89, 78, 45, 45, 89, ''),
(5, 13506, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, ''),
(6, 131051, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, ''),
(7, 131052, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, ''),
(8, 131053, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 90, 'Bhai Pheru Bohat Doooooooooorrrrr Hy Ager Kisi Din Chutti Hui Hy To Bhai PheruBhai ko chaker aa gaye hon gy ki waja sy.'),
(9, 131054, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 87, 80, 80, 80, 80, 80, 80, ''),
(10, 131055, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, ''),
(11, 14501, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0, 0, 0, 0, 0, 0, 0, 0, -1, 'Nil'),
(12, 14502, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nil'),
(13, 14503, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0, 0, 0, 0, 0, 0, 0, 80, 0, 'Nil'),
(14, 14504, 80, 80, 70, 90, 80, 70, 90, 70, 80, 80, 80, 80, 80, 80, 80, 70, 70, 70, 0, 0, 0, 0, 0, 0, 0, 70, 0, 'Nil'),
(15, 141051, 90, 90, 90, 90, 90, 80, 80, 80, 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 0, 0, 0, 0, 0, 0, 0, 70, 0, 'Nil'),
(16, 141052, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 80, 0, 0, 0, 0, 0, 0, 0, 80, 0, 'Nil'),
(17, 15501, 100, 100, 100, 100, 100, 100, 100, 100, 100, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nil'),
(18, 15502, 90, 90, 90, 90, 90, 90, 90, 90, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nil'),
(19, 151051, 90, 90, 90, 90, 90, 90, 90, 90, 90, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nil'),
(20, 151052, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Nil');

-- --------------------------------------------------------

--
-- Table structure for table `cocurricular`
--

CREATE TABLE `cocurricular` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `Sports1` varchar(255) DEFAULT NULL,
  `Sports2` varchar(255) DEFAULT NULL,
  `Others` varchar(255) DEFAULT NULL,
  `1Prize` varchar(255) DEFAULT NULL,
  `2Prize` varchar(255) DEFAULT NULL,
  `OtherPrize` varchar(255) DEFAULT NULL,
  `1Meeting` text,
  `2Meeting` text,
  `3Meeting` text,
  `4Meeting` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocurricular`
--

INSERT INTO `cocurricular` (`id`, `RollNo`, `Sports1`, `Sports2`, `Others`, `1Prize`, `2Prize`, `OtherPrize`, `1Meeting`, `2Meeting`, `3Meeting`, `4Meeting`) VALUES
(5, 13501, 'Criket', '', '', '', '', '', '', '', '', ''),
(6, 13502, 'Badmentan', '', '', 'Certificate', '', '', 'Good', 'Extra Ordinary', 'Best', 'Superb'),
(7, 13504, 'Bedmentan', '', '', 'Certificate', '', '', 'Average', 'Fine', 'Good', 'Best'),
(8, 13505, '', '', '', '', '', '', 'Fine', 'Fine', 'Good', 'Best'),
(9, 13506, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Good', 'Good', 'Good', 'Good'),
(10, 131051, 'Nil', 'Nil', 'Tilawat e Quran', 'Nil', 'Nil', 'Certificate', 'Best', 'Best', 'Best', 'Best'),
(11, 131052, 'Football', '', '', 'Certificate', '', '', 'Good', 'Good', 'Good', 'Best'),
(12, 131053, 'Football', '', '', 'Certificate', '', '', 'Good', 'Good', 'Good', 'Good'),
(13, 131054, 'Football', '', '', 'Certificate', '', '', 'Good', 'Good', 'Good', 'Good'),
(14, 131055, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Fine', 'Average', 'Good', 'Good'),
(15, 14501, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Fine', 'Fine', 'Good', 'Good'),
(16, 14502, 'Cricket', 'Nil', 'Nil', 'Certificate', 'Nil', 'Nil', 'Good', 'Good', 'Fail', 'Fail'),
(17, 14503, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Good', 'Good', 'Good', 'Good'),
(18, 14504, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Good', 'Good', 'Good', 'Good'),
(19, 141051, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Good', 'Average', 'Fine', 'Fine'),
(20, 141052, 'Cricket', 'Nil', 'Nil', 'Certificate', 'Nil', 'Nil', 'Good', 'Good', 'Good', 'Good'),
(21, 15501, 'Cricket', 'Bedmanten', 'Khush Khati', 'Certicate', 'Certificate', 'Certificate', 'Best', 'Best', 'Best', 'Best'),
(22, 15502, 'Nil', 'Nil', 'Recit&#039;s Holy Quran', 'Nil', 'Nil', 'Certificate', 'Good', 'Fine', 'Good', 'Good'),
(23, 151051, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', 'Good', 'Good', 'Good', 'Good'),
(24, 151052, 'Cricket', 'Nil', 'Nil', 'Certificate', 'Nil', 'Nil', 'Good', 'Best', 'Best', 'Best');

-- --------------------------------------------------------

--
-- Table structure for table `examination`
--

CREATE TABLE `examination` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `MeritMarks` int(12) DEFAULT NULL,
  `1YM1` int(12) DEFAULT NULL,
  `1YM2` int(12) DEFAULT NULL,
  `2YM1` int(12) DEFAULT NULL,
  `2YM2` int(12) DEFAULT NULL,
  `3YM1` int(12) DEFAULT NULL,
  `3YM2` int(12) DEFAULT NULL,
  `1YF1` varchar(255) DEFAULT NULL,
  `1YF2` varchar(255) DEFAULT NULL,
  `2YF1` varchar(255) DEFAULT NULL,
  `2YF2` varchar(255) DEFAULT NULL,
  `3YF1` varchar(255) DEFAULT NULL,
  `3YF2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examination`
--

INSERT INTO `examination` (`id`, `RollNo`, `MeritMarks`, `1YM1`, `1YM2`, `2YM1`, `2YM2`, `3YM1`, `3YM2`, `1YF1`, `1YF2`, `2YF1`, `2YF2`, `3YF1`, `3YF2`) VALUES
(10, 13501, 550, 700, 0, 740, 740, 720, 730, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', '730'),
(11, 13502, 499, 597, 672, 700, 800, 1000, 1000, 'Math', '', 'Digital Electronics', 'Nil', 'Nil', '1000'),
(12, 13504, 480, 684, 710, 800, 800, 0, 0, 'English', 'Nil', 'Nil', 'Nil', '', ''),
(13, 13505, 450, 715, 0, 1502, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', '', ''),
(14, 13506, 449, 684, 0, 700, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(15, 131051, 488, 800, 0, 800, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(16, 131052, 300, 780, 780, 800, 800, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(17, 131053, 270, 770, 770, 770, 770, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(18, 131054, 260, 800, 800, 700, 700, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(19, 131055, 250, 700, 700, 750, 750, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(20, 14501, 500, 800, 800, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(21, 14502, 490, 790, 790, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(22, 14503, 470, 800, 800, 800, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(23, 14504, 460, 780, 780, 780, 780, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(24, 141051, 460, 700, 760, 760, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(25, 141052, 480, 800, 800, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(26, 15501, 600, 0, 0, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(27, 15502, 590, 0, 0, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(28, 151051, 470, 0, 0, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', ''),
(29, 151052, 490, 0, 0, 0, 0, 0, 0, 'Nil', 'Nil', 'Nil', 'Nil', 'Nil', '');

-- --------------------------------------------------------

--
-- Table structure for table `parents`
--

CREATE TABLE `parents` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `FatherName` varchar(255) NOT NULL,
  `FatherCell` varchar(11) DEFAULT NULL,
  `FatherOccupation` varchar(255) DEFAULT NULL,
  `FatherOffice1` text,
  `FatherOffice2` text,
  `FatherOfficeCell1` varchar(11) DEFAULT NULL,
  `FatherOfficeCell2` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parents`
--

INSERT INTO `parents` (`id`, `RollNo`, `FatherName`, `FatherCell`, `FatherOccupation`, `FatherOffice1`, `FatherOffice2`, `FatherOfficeCell1`, `FatherOfficeCell2`) VALUES
(10, 13501, 'Muhammad Iqbal', '03002554954', '', '', '', '', ''),
(11, 13502, 'Naseer Ahmad', '03437688581', 'Landlord', '', '', '', ''),
(12, 13504, 'Shabir Ahmad', '03336545455', 'Teacher', 'Sultan Pura', '', '0426859675', ''),
(13, 13505, 'Muhammad Sarver', '0345452145', 'Farmer', 'Nil', 'Nil', '', ''),
(14, 13506, 'Tahir Iqbal', '03457545454', '', '', '', '', ''),
(15, 131051, 'Ahmad Ali', '03214165541', 'Bussinessman', '', '', '', ''),
(16, 131052, 'Ramzan Ali', '03121541244', 'Teacher', '', '', '', ''),
(17, 131053, 'Server Ali', '03254514245', 'Manager', 'Oman', '', '', ''),
(18, 131054, 'Muhammad Ashraf', '03332551554', 'Lawyer', 'Kachari Lahore', '', '', ''),
(19, 131055, 'Muhammad Ali', '03324554551', '', '', '', '', ''),
(20, 14501, 'Muhammad Ali', '03216549870', 'Farmer', '', '', '', ''),
(21, 14502, 'Muhammad Iqbal', '03216549870', 'Teacher', '', '', '', ''),
(22, 14503, 'Muhammad', '03216549870', '', '', '', '', ''),
(23, 14504, 'Insaar Berni', '03216549870', 'Teacher', '', '', '', ''),
(24, 141051, 'Zulifqar Haider', '03216549870', 'Supervisor', '', '', '', ''),
(25, 141052, 'Shokat Ali', '03216549870', 'Landlord', '', '', '', ''),
(26, 15501, 'Naseer Ahmad', '03216549870', 'Landlord', '', '', '', ''),
(27, 15502, 'Asghar Ali', '03216549870', 'Supplier', '', '', '', ''),
(28, 151051, 'Asghar Ali', '03216549870', 'Suplier', '', '', '', ''),
(29, 151052, 'Muhammad Khushi', '3216549869', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `punishment`
--

CREATE TABLE `punishment` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `1SO` text,
  `2SO` text,
  `3SO` text,
  `Counseling` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punishment`
--

INSERT INTO `punishment` (`id`, `RollNo`, `1SO`, `2SO`, `3SO`, `Counseling`) VALUES
(10, 13501, '', '', '', ''),
(11, 13502, 'Nil', 'Nil', 'Nil', '50'),
(12, 13504, 'Nil', 'Nil', 'Nil', '50'),
(13, 13505, 'Nil', 'Nil', 'Nil', '50'),
(14, 13506, 'Nil', 'Nil', 'Nil', '50'),
(15, 131051, 'Nil', 'Nil', 'Nil', '50'),
(16, 131052, 'Nil', 'Nil', 'Nil', '50'),
(17, 131053, 'Nil', 'Nil', 'Nil', '50'),
(18, 131054, 'Nil', 'Nil', 'Nil', '50'),
(19, 131055, 'Nil', 'Nil', 'Nil', '50'),
(20, 14501, 'Nil', 'Nil', '', '50'),
(21, 14502, 'Nil', 'Miss Behave with Teacher \r\n24-042016', '', '100'),
(22, 14503, 'Nil', 'Nil', '', '50'),
(23, 14504, 'Nil', 'Nil', 'Nil', '50'),
(24, 141051, 'Nil', 'Nil', '', '50'),
(25, 141052, 'Nil', 'Nil', 'Nil', 'Nil'),
(26, 15501, 'Nil', 'Nil', 'Nil', 'Nil'),
(27, 15502, 'Nil', 'Nil', 'Nil', 'Nil'),
(28, 151051, 'Nil', 'Nil', 'Nil', 'Nil'),
(29, 151052, 'Nil', 'Nil', 'Nil', 'Nil');

-- --------------------------------------------------------

--
-- Table structure for table `remarks`
--

CREATE TABLE `remarks` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `1YR` varchar(255) DEFAULT NULL,
  `2YR` varchar(255) DEFAULT NULL,
  `3YR` varchar(255) DEFAULT NULL,
  `Distinction` varchar(255) DEFAULT NULL,
  `Tutor` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `remarks`
--

INSERT INTO `remarks` (`id`, `RollNo`, `1YR`, `2YR`, `3YR`, `Distinction`, `Tutor`) VALUES
(10, 13501, '', '', '', '', ''),
(11, 13502, 'Fine', 'Good', 'Best', '', 'Salman Tariq HOD'),
(12, 13504, 'Fine', 'Good', 'Good', '', 'Salman Tariq HoD'),
(13, 13505, 'Fine', 'Good', 'Fine', '', 'Salman Tariq HoD'),
(14, 13506, 'Good', 'Good', 'Good', '', 'Salman Tariq HoD'),
(15, 131051, 'Best', 'Best', 'Best', '', 'Sir Salman Tariq HoD'),
(16, 131052, 'Good', 'Good', 'Good', 'Regular', 'Salman Tariq HoD'),
(17, 131053, 'Good', 'Good', 'Good', 'Bohat Mehenti hy Rozana Bhai Pheru sy chal ky Aata hy!', 'Salman Tariq HoD'),
(18, 131054, 'Fine', 'Average', 'Good', 'Shughliya', 'Sir Salman Tariq HoD'),
(19, 131055, 'Good', 'Good', 'Good', '', 'Sir Salman Tariq HoD'),
(20, 14501, 'Good', 'Good', '', 'Nil', 'Sir Humayun Bashir'),
(21, 14502, 'Good', 'Fail', '', 'Nil', 'Sir Humayun Bashir'),
(22, 14503, 'Good', 'Good', '', 'Nil', 'Sir Humayun Bashir'),
(23, 14504, 'Good', 'Good', 'Good', 'Nil', 'Sir Humayun Bashir'),
(24, 141051, 'Good', 'Good', '', 'Nil', 'Sir Humayun Bashir'),
(25, 141052, 'Good', 'Good', 'Good', 'Nil', 'Sir Humayun Bashir'),
(26, 15501, 'Best', 'Best', 'Best', 'Everything Special', 'Mrs Mehwish Khan'),
(27, 15502, 'Good', 'Good', 'Good', 'Fast Seeker', 'Mrs Mehwish Khan'),
(28, 151051, 'Good', '', '', 'Nil', 'Mrs Mehwish Khan'),
(29, 151052, 'Good', '', '', 'Nil', 'Mrs Mehwish Khan');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `RollNo` int(11) NOT NULL,
  `StudentName` varchar(255) NOT NULL,
  `RegistationNo` int(44) NOT NULL,
  `Session` varchar(255) NOT NULL,
  `Technology` varchar(255) NOT NULL,
  `Class` varchar(255) NOT NULL,
  `Shift` varchar(255) NOT NULL,
  `StudentCell` varchar(44) DEFAULT NULL,
  `BloodGroup` varchar(255) DEFAULT NULL,
  `StudentEmail` varchar(255) DEFAULT NULL,
  `PermanentAddress` text,
  `PermanentCell` varchar(44) DEFAULT NULL,
  `PostalAddress` text,
  `PostalCell` varchar(44) DEFAULT NULL,
  `ResidentalAddress` text NOT NULL,
  `ResidentalCell` varchar(44) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `RollNo`, `StudentName`, `RegistationNo`, `Session`, `Technology`, `Class`, `Shift`, `StudentCell`, `BloodGroup`, `StudentEmail`, `PermanentAddress`, `PermanentCell`, `PostalAddress`, `PostalCell`, `ResidentalAddress`, `ResidentalCell`) VALUES
(7, 13501, 'Arslan Iqbal', 213, '2013-2016', 'CIT', 'DCIT', 'R1', '03024004492', 'A-', '', 'Awan Town Lahore.', '03024004492', 'Awan Town Lahore.', '', 'Awan Town Lahore.', '03024004492'),
(8, 13502, 'Kashif Naseer', 213, '2013-2016', 'CIT', 'DCIT', 'R1', '03068899766', 'O+', 'kashifnaseerahmad@gmail.com', 'Kot Assa Singh Wala P/O Box Kaly Ottar Teh &amp; Dist Kasur.', '03068899766', 'Kot Assa Singh Wala P/O Box Kaly Ottar Teh &amp; Dist Kasur.', '', 'Kot Assa Singh Wala P/O Box Kaly Ottar Teh &amp; Dist Kasur.', '03466422464'),
(9, 13504, 'Haseeb Ahmad', 213, '2013-2016', 'CIT', 'DCIT', 'R1', '03215648657', 'O+', 'haseeb1442@gmail.com', 'Jawa Jump Raiwind', '03215546844', 'Jawa Jump Raiwind P/O Box Raiwind City', '', 'Jawa Jump Raiwind', '03215464445'),
(10, 13505, 'Shabbir Ali', 0, '2013-2016', 'CIT', 'DCIT', 'R1', '03044182855', 'A+', 'alishabbir269@gmail.com', '59 Chak Rossa Adda Manga Road Manga', '', '59 Chak P/O Box Rossa Manga Road Manga', '', '59 Chak Rossa Manga Road Manga', ''),
(11, 13506, 'Usama Tahir', 213, '2013-2016', 'CIT', 'DCIT', 'R1', '03215468447', 'B+', 'usamatahir@gmail.com', 'Muhalla Islamabad Near Railwy Station Raiwind', '', 'Muhalla Islamabad Near P/O Box Railwy Station Raiwind', '', 'Muhalla Islamabad Near Railwy Station Raiwind', ''),
(12, 131051, 'Hafiz Ahmad', 213, '2013-2016', 'CIT', 'DCIT', 'R2', '03334515755', 'A+', 'hafizahmad@gmail.com', 'Dharam Pura Lahore', '03215465854', 'Dharam Pura P/O Dharam Pura Lahore', '', 'Dharam Pura Lahore', ''),
(13, 131052, 'Ramzan Ali', 213, '2013-2016', 'CIT', 'DCIT', 'R2', '03332541544', 'B-', 'ramzanali@gmail.com', 'Johar Town Canal Bank Lahore', '03332541544', 'Johar Town Canal Bank P/O Box Johar Town Lahore', '', 'Johar Town Canal Bank Lahore', '03215456784'),
(14, 131053, 'Labiquee Server', 213, '2013-2016', 'CIT', 'DCIT', 'R2', '03335425215', 'B+', 'labiqueesever@gmail.com', 'Bhai Pheru Multan Road Pattoki', '03354542112', 'Bhai Pheru P/O Bhai Pheru Multan Road Pattoki', '', 'Bhai Pheru Multan Road Pattoki', '03145421454'),
(15, 131054, 'Nabil Ashraf', 213, '2013-2016', 'CIT', 'DCIT', 'R2', '03214556874', 'B+', 'nabilashraf@gmail.com', 'Kahna Stop Ferozepur Road Lahore', '03215546844', 'Kahna Stop P/O Kahna Ferozepur Road Lahore', '03214566194', 'Kahna Stop Ferozepur Road Lahore', '0343254651'),
(16, 131055, 'Ali Hussain', 0, '2013-2016', 'CIT', 'DCIT', 'R2', '03215568474', 'AB+', 'alihussain@gmail.com', 'Shalimar Bagh Near UET Lahore', '03214565844', 'Shalimar Bagh P/O UET Near UET Lahore', '3215465484', 'Shalimar Bagh Near UET Lahore', '0321547874'),
(17, 14501, 'Sajid Ali', 214, '2014-2017', 'CIT', 'SCIT', 'R1', '03215455544', 'A-', 'sajidali@gmail.com', 'Olakh Ottar Teh Kot Radha Kishan Dist Kasur', '03216549870', 'Olakh Ottar P/O Box Kot Mehtab Khan Teh Kot Radha Kishan Dist Kasur', '03216549870', 'Olakh Ottar Teh Kot Radha Kishan Dist Kasur', '03216549870'),
(18, 14502, 'Roshan Iqbal', 214, '2014-2017', 'CIT', 'SCIT', 'R1', '03216549870', 'AB-', 'roshaniqbal@gmail.com', 'New Kahna Stop Ferozepur Road Lahore', '03216549870', 'New Kahna P/o New Kahna Stop Ferozepur Road Lahore', '03216549870', 'New Kahna Stop Ferozepur Road Lahore', '03216549870'),
(19, 14503, 'Shahzad Roy', 214, '2014-2017', 'CIT', 'SCIT', 'R1', '03216549870', 'B-', 'shazadroy@gmail.com', 'Main Bazar Commetie Chok Raiwind', '03216549870', 'Main Bazar Commetie Chok P/O Raiwind Raiwind', '03216549870', 'Main Bazar Commetie Chok Raiwind', '03216549870'),
(20, 14504, 'Kashif Abbasi', 214, '2014-2017', 'CIT', 'SCIT', 'R1', '03216549870', 'B+', 'kashifabbasi@gmail.com', 'Aarain Stop near Supirior universty Raiwind Road', '', 'Aarain Stop near Supirior universty P/O Box Aarain Raiwind Road', '03216549870', 'Aarain Stop near Supirior universty Raiwind Road', '03216549870'),
(21, 141051, 'Zulqar Nain', 214, '2014-2017', 'CIT', 'SCIT', 'R2', '03216549870', 'AB-', 'zulqarnain@gmail.com', 'Kot Fazal Abad Raiwind', '03216549870', 'Kot Fazal Abad P/O Mission Sua Raiwind', '03216549870', 'Kot Fazal Abad Raiwind', '03216549870'),
(22, 141052, 'Nasir Saim', 214, '2014-2017', 'CIT', 'SCIT', 'R2', '0321654987', 'AB+', 'nasirsaim@gmail.com', 'Basti Phool Khan Wali Lain par Raiwind P/O Babulyana Ottar', '03216549870', 'Basti Phool Khan Wali Lain par Raiwind P/O Babulyana Ottar', '03216549870', 'Basti Phool Khan Wali Lain par Raiwind P/O Babulyana Ottar', '03216549870'),
(23, 15501, 'Aaqib Naseer', 215, '2015-2018', 'CIT', 'FCIT', 'R1', '03216549870', 'A+', 'aaqibnaseer@gmail.com', 'Kot Assa Singh Wala P/O Box Kaly ottar Teh &amp; Dist Kasur', '03216549870', 'Kot Assa Singh Wala P/O Box Kaly ottar Teh &amp; Dist Kasur', '03216549870', 'Kot Assa Singh Wala P/O Box Kaly ottar Teh &amp; Dist Kasur', '03216549870'),
(24, 15502, 'Hafiz Rashid', 215, '2015-2018', 'CIT', 'FCIT', 'R1', '03216549870', 'A+', 'hafizrashid@gmail.com', 'Sua Stop Raiwind', '03216549870', 'Sua Stop P/O Box Babulyana Ottar Raiwind', '03216549870', 'Sua Stop Raiwind', '03216549870'),
(25, 151051, 'Aqib Javid', 215, '2015-2018', 'CIT', 'FCIT', 'R2', '03216549870', 'B-', 'aqibjavid@gmail.com', 'Sua Stop Raiwind', '03216549870', 'Sua Stop P/O Box Babulyana Ottar Raiwind', '03216549870', 'Sua Stop Raiwind', '03216549870'),
(26, 151052, 'Wasim Veer', 215, '2015-2018', 'CIT', 'FCIT', 'R2', '03216549870', 'A+', 'wasimveer@gmail.com', 'Mission Colony Raiwind', '032165498720', 'Mission Colony P/O Box Babulyana Ottar Raiwind', '03216549870', 'Mission Colony Raiwind', '03216549870');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int(11) UNSIGNED NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `authorization` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `username`, `password`, `authorization`) VALUES
(1, 'admin_test', '$2y$10$5Ki7Aayy0NoJ.fLJigdg5.ejwMzQTUmUm3UjqM17vpQrvr4KVPHFC', 'admin'),
(2, 'standard_test', '$2y$10$351u4ZkkIfNeGpW1bls1vuH10coSRixjV4p7mqKDZuEyNMbVRYIwW', 'standard'),
(3, 'limited_test', '$2y$10$aNWAqQt/vyo/r7m/TyvjduZKmZuXjRSYmTwQES9AA61qGnJaE7OnO', 'limited');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `cocurricular`
--
ALTER TABLE `cocurricular`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `examination`
--
ALTER TABLE `examination`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `parents`
--
ALTER TABLE `parents`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `punishment`
--
ALTER TABLE `punishment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `remarks`
--
ALTER TABLE `remarks`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `RollNo` (`RollNo`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `cocurricular`
--
ALTER TABLE `cocurricular`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `examination`
--
ALTER TABLE `examination`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `parents`
--
ALTER TABLE `parents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `punishment`
--
ALTER TABLE `punishment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `remarks`
--
ALTER TABLE `remarks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
