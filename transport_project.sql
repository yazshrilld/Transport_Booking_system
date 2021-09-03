-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2021 at 11:27 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`) VALUES
(1, 'yazid', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `available_seat`
--

CREATE TABLE `available_seat` (
  `seat_id` int(11) NOT NULL,
  `busNo` varchar(11) NOT NULL,
  `journeyNo` varchar(11) NOT NULL,
  `status` varchar(2) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `trv_from` varchar(255) NOT NULL,
  `trv_to` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `departing` date NOT NULL,
  `return` date NOT NULL,
  `adult` varchar(255) NOT NULL,
  `children` varchar(255) NOT NULL,
  `trv_class` varchar(255) NOT NULL,
  `confirmation` varchar(255) NOT NULL,
  `finished` varchar(255) NOT NULL,
  `paid` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking_id`, `name`, `username`, `trv_from`, `trv_to`, `email`, `mobile`, `departing`, `return`, `adult`, `children`, `trv_class`, `confirmation`, `finished`, `paid`) VALUES
(1, 'Braynd Stars', '', 'cotonou', 'brazil', 'book@email.com', 223334415, '2020-07-14', '2020-07-21', '1', '1', '', '', '', ''),
(2, 'Yazid jkfkkuf', '', 'ghchkc', 'cujkdk', 'ld@gmail.comtk', 7061889, '2020-07-23', '2020-07-27', '1', '2', '', '', '', ''),
(3, ' bjgfedhfEDGE', '', 'SghJFGJH', 'ghasdfh', 'agfahf@jwshgjk.com', 235646, '2020-07-14', '2020-07-25', '0', '0', '', '', '', ''),
(4, ' rwgry', '', 'ery', 'ety', 'eg@Wazfsa.cojyhh', 0, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(5, ' 34t35', '', 'qw3r', '3', 'qettqe@eqwrter.rwet', 2147483647, '2020-07-28', '0000-00-00', '0', '0', '', '', '', ''),
(6, 'jkshr', '', 'sdvajkbv', 'dsFGVWfq', 'sdkjfkh@jkehrg.cjilfh', 706, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(7, ' WETT', '', 'ADFRGE', 'aedth', 'dfsh@dfgh.rfdthr', 0, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(8, ' errrrq', '', 'errrrrrhth', 'hgjthyet', 'wetget@rethb.vedfgv', 23514566, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(9, ' weff', '', 'fedqfge', 'AFAEA', 'sdgdfsg@ws.sdgas', 325675, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(10, ' sDFFFs', '', 'DG', 'RGHTGTEG', 'ASSDHHJ@jksf.com', 234576456, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(11, ' jSJbf', '', 'nhsdjhjsgfh', 'sahjdfghjdv', 'sah@hsgfuh.com', 34614, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(12, ' dshghf', '', 'jhsdghsdf', 'sdj', 'fhjfb@jhf.com', 4785697, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(13, ' asdfdGH', '', 'cgacSG', 'nsadvsdv', 'asdgasf@jhgf.com', 23, '0000-00-00', '0000-00-00', '0', '0', '', '', '', ''),
(14, ' hjwegg', '', 'edgdjhfvg', 'ghsdvd', 'asvghd@sdgh.com', 32623456, '2020-07-15', '2020-07-23', '1', '2', '', '', '', ''),
(15, 'Yazid Musa', '', 'Lagos', 'ss', 'yazshrilld@gmail.com', 2147483647, '2020-07-30', '2020-07-23', '2', '0', '1', '', '', ''),
(16, 'Yazid Musa', '', 'Lagos', 'cujkdk', 'yazshrilld@gmail.com', 2147483647, '2020-07-31', '2020-07-31', '2', '0', '1', '', '', ''),
(17, 'Yazid Musa', '', 'Lagos', 'cujkdk', 'yazshrilld@gmail.com', 2147483647, '2020-07-31', '2020-07-31', '2', '0', '1', '', '', ''),
(18, 'Yazid Musa', '', 'Lagos', 'cujkdk', 'yazshrilld@gmail.com', 2147483647, '2020-07-31', '2020-07-31', '2', '0', '1', '', '', ''),
(19, 'yazid brain', '', 'Lagos', '', '', 0, '0000-00-00', '0000-00-00', '0', '0', '1', '', '', ''),
(20, 'Adele Tope', '', 'Lagos', 'brazil', 'yazsd@gmail.xgd', 2164, '2020-07-13', '2020-07-15', '1', '1', '1', '', '', ''),
(21, 'yazid brain', '', 'Lagos', 'brazil', '', 0, '0000-00-00', '0000-00-00', '0', '0', '1', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `trip_id` int(11) NOT NULL,
  `bookingsID` varchar(255) NOT NULL,
  `bFirstName` varchar(255) NOT NULL,
  `bLastName` varchar(255) NOT NULL,
  `bPhoneNumber` int(50) NOT NULL,
  `bEmail` varchar(255) NOT NULL,
  `amount` decimal(40,6) NOT NULL,
  `bselectSeat` varchar(12) NOT NULL,
  `bFullName` varchar(255) NOT NULL,
  `bMobileNumber` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `trip_id`, `bookingsID`, `bFirstName`, `bLastName`, `bPhoneNumber`, `bEmail`, `amount`, `bselectSeat`, `bFullName`, `bMobileNumber`) VALUES
(1, 0, 'wa2101070000', 'werj', 'askjdhf', 43345, 'dhf@jerg.cjf', '0.000000', 'A4', 'jdfkhre', 3298745),
(2, 0, 'uw2101070000', 'uyuyuuy', 'wwerljwe', 985354, 'sfhj@lrea.sdjkf', '0.000000', 'A2', 'fldksaf', 3298745),
(3, 0, 'ly2101070000', 'lksdkfsdkddflj', 'ytur', 985354, 'sdklahr@EJR.DJR', '0.000000', 'A2', 'jdfkhre', 0),
(4, 0, 'wy2101070000', 'werj', 'ytur', 59354, 'dhf@jerg.cjf', '0.000000', 'A3', 'jdfkhre', 0),
(5, 0, 'ly2101070000', 'lksdkfsdkddflj', 'ytur', 985354, 'dhf@jerg.cjf', '0.000000', 'A3', 'jdfkhre', 0),
(6, 0, 'hg2101110000', 'hjghg', 'ghfgdfg', 5453434, 'ghsdh@gfs.sdk', '0.000000', 'A3', 'hggy', 9876766),
(7, 0, 'js2101110000', 'jksdhah', 'sajhdJ', 3286362, 'jhsg@as.ds', '0.000000', 'A10', 'sdfsa', 2147483647),
(8, 0, 'aG2101140000', 'able', 'God', 3980485, 'akhsjk@sdjf.ciu', '0.000000', 'A5', 'jdfkhre', 384),
(9, 0, 'lf2101140000', 'ldkfa', 'fksdla', 425929485, 'sjh@siue.cj', '0.000000', 'A2', 'fldksaf', 9876766),
(10, 0, 'iu2101140000', 'iuhu', 'uiyuhu', 897896, 'uhklj@dft.kji', '0.000000', 'A10', 'hjgjhh', 988976),
(11, 0, 'op2101140000', 'ooiuh', 'ppppp', 9877, 'reddfdfd@hg.hjh', '0.000000', 'A10', 'kjhh', 8987878),
(12, 0, 'la2101140000', 'llolo', 'aaa', 8787676, 'nhgg@ef.lk', '0.000000', 'A10', 'jhgh', 989),
(13, 0, 'nm2101140000', 'nnn', 'mmm', 9988, 'hgf@ttt.jh', '0.000000', 'A9', 'hhggg', 999),
(20, 0, 'we2101140000', 'weui', 'erwtew', 34234, 'rwt@gjkes.dr', '0.000000', 'A11', 'reeeeeeeeegfe', 435624),
(24, 0, 'st2101150000', 'scale', 'through', 9877, 'assd@sgf.sf', '100.000000', 'A3', 'kjhh', 8987878),
(25, 0, 'sn2101150000', 'safe', 'now', 897896, 'assd@sgf.sf', '0.000000', 'A1', 'jhgh', 239823),
(26, 0, 'wu2101150000', 'win', 'uiyuhu', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'hjgjhh', 988976),
(27, 0, 'sm2101150000', 'sule', 'man', 897896, 'assd@sgf.sf', '600.000000', 'A1', 'easra', 34523),
(28, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'uhklj@dft.kji', '300.000000', 'A2', 'hhggg', 989),
(29, 0, 'su2101180000', 'safe', 'uiyuhu', 9877, 'assd@sgf.sf', '300.000000', 'A6', 'sdkjhafa', 988976),
(30, 0, 'na2101180000', 'nnn', 'aaa', 8787676, 'nhgg@ef.lk', '345.000000', 'A8', 'hjgjhh', 239823),
(31, 0, 'su2101180000', 'safe', 'uiyuhu', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'jhgh', 8987878),
(32, 0, 'lp2101180000', 'llolo', 'ppppp', 897896, 'uhklj@dft.kji', '466.000000', 'A2', 'kjhh', 999),
(33, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'sdkjhafa', 34523),
(34, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '466.000000', 'A2', 'hhggg', 999),
(35, 0, 'sp2101180000', 'safe', 'ppppp', 897896, 'uhklj@dft.kji', '288.000000', 'A2', 'easra', 989),
(36, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'jhgh', 988976),
(37, 0, 'iu2101180000', 'iuhu', 'uiyuhu', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'kjhh', 8987878),
(38, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'hjgjhh', 34523),
(39, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'easra', 239823),
(40, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'sdkjhafa', 999),
(41, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A4', 'hhggg', 989),
(42, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'reddfdfd@hg.hjh', '288.000000', 'A3', 'jhgh', 8987878),
(43, 0, 'ip2101180000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A3', 'kjhh', 239823),
(44, 0, 'su2101180000', 'safe', 'uiyuhu', 897896, 'assd@sgf.sf', '288.000000', 'A3', 'hjgjhh', 988976),
(45, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'uhklj@dft.kji', '288.000000', 'A1', 'easra', 999),
(46, 0, 'sp2101190000', 'safe', 'ppppp', 897896, 'assd@sgf.sf', '600.000000', 'A1', 'sdkjhafa', 34523),
(47, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'uhklj@dft.kji', '288.000000', 'A1', 'hhggg', 989),
(48, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'jhgh', 8987878),
(49, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'sdkjhafa', 988976),
(50, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'kjhh', 999),
(51, 0, 'sp2101190000', 'safe', 'ppppp', 897896, 'assd@sgf.sf', '300.000000', 'A2', 'easra', 239823),
(52, 0, 'ip2101190000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A4', 'hjgjhh', 989),
(53, 0, 'ou2101200000', 'ooiuh', 'uiyuhu', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'hhggg', 34523),
(54, 0, 'im2101200000', 'iuhu', 'mmm', 897896, 'assd@sgf.sf', '288.000000', 'A1', 'jhgh', 8987878),
(55, 0, 'kp2101200000', 'kasjdfa', 'ppppp', 8787676, 'nhgg@ef.lk', '288.000000', 'A3', 'kjhh', 988976),
(56, 0, 'sp2101200000', 'safe', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A2', 'hjgjhh', 239823),
(57, 0, 'ip2101240000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A7', 'easra', 34523),
(58, 0, 'sm2101240000', 'sam', 'max', 897896, 'sajsh@js.cs', '288.000000', 'A3', 'hhggg', 999),
(59, 0, 'tv2101240000', 'top', 'vbgt', 9877, 'assd@sgf.sf', '288.000000', 'A6', 'jhgh', 988976),
(60, 0, 'su2101240000', 'safe', 'uiyuhu', 2384, 'uhklj@dft.kji', '288.000000', 'A3', 'sdkjhafa', 989),
(61, 0, 'ls2101240000', 'llolo', 'safea', 9877, 'assd@sgf.sf', '466.000000', 'A2', 'kjhh', 239823),
(62, 0, 'oa2101240000', 'ooiuh', 'aaa', 897896, 'assd@sgf.sf', '300.000000', 'A11', 'hjgjhh', 8987878),
(63, 0, 'ip2101250000', 'iuhu', 'ppppp', 897896, 'assd@sgf.sf', '288.000000', 'A3', 'easra', 34523),
(64, 0, 'ip2101250000', 'iuhu', 'ppppp', 243333, 'sajsh@js.cs', '300.000000', 'A5', 'hjgjhh', 999),
(65, 0, 'ip2101250000', 'iuhu', 'ppppp', 9988, 'hgf@ttt.jh', '300.000000', 'A5', 'hjgjhh', 989),
(66, 0, 'jJ2102070000', 'jkdkkkkkhA', 'JKDHKUYEWHEH', 9485349, 'jakshd@hsgd.asjhd', '288.000000', 'A1', 'jdhkhsa', 2147483647),
(67, 0, 'jJ2102070000', 'jkdkkkkkhA', 'JKDHKUYEWHEH', 9485349, 'jakshd@hsgd.asjhd', '288.000000', 'A1', 'jdhkhsa', 2147483647),
(68, 0, 'ip2102180000', 'iuhu', 'ppppp', 9877, 'uhklj@dft.kji', '0.000000', 'A1', 'sdkjhafa', 239823),
(69, 0, 'sa2102180000', 'safe', 'aaa', 2384, 'nhgg@ef.lk', '300.000000', 'A2', 'hhggg', 8987878),
(70, 0, 'on2102180000', 'ooiuh', 'now', 9877, 'uhklj@dft.kji', '300.000000', 'A4', 'kjhh', 34523),
(71, 0, 'la2102180000', 'llolo', 'aaa', 897896, 'nhgg@ef.lk', '300.000000', 'A10', 'jhgh', 989),
(72, 0, 'sn2102180000', 'safe', 'now', 897896, 'nhgg@ef.lk', '288.000000', '--Seat--', 'sdkjhafa', 988976),
(73, 0, 'nm2102180000', 'nnn', 'mmm', 9877, 'uhklj@dft.kji', '300.000000', 'A4', 'easra', 999),
(74, 0, 'ip2102230000', 'iuhu', 'ppppp', 897896, 'uhklj@dft.kji', '288.000000', 'A1', 'hhggg', 8987878),
(75, 0, 'ia2102230000', 'iuhu', 'aaa', 8787676, 'nhgg@ef.lk', '288.000000', 'A9', 'kjhh', 999),
(76, 0, 'kn2102230000', 'kasjdfa', 'now', 9988, 'reddfdfd@hg.hjh', '288.000000', 'A11', 'kjhh', 999),
(77, 0, 'sa2102230000', 'safe', 'aaa', 897896, 'uhklj@dft.kji', '288.000000', 'A2', 'jhgh', 988976),
(78, 0, 'in2102230000', 'iuhu', 'now', 9877, 'assd@sgf.sf', '288.000000', 'A2', 'hhggg', 239823),
(79, 0, 'ln2102230000', 'llolo', 'now', 897896, 'uhklj@dft.kji', '288.000000', 'A2', 'easra', 989),
(80, 0, 'np2102240000', 'nnn', 'ppppp', 9877, 'assd@sgf.sf', '288.000000', 'A3', 'sdkjhafa', 34523),
(81, 0, 'lp2102240000', 'llolo', 'ppppp', 9877, 'reddfdfd@hg.hjh', '288.000000', 'A6', 'jhgh', 8987878);

-- --------------------------------------------------------

--
-- Table structure for table `dates`
--

CREATE TABLE `dates` (
  `date_id` int(11) NOT NULL,
  `date_departure` date NOT NULL,
  `date_arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dates`
--

INSERT INTO `dates` (`date_id`, `date_departure`, `date_arrival`) VALUES
(1, '0000-00-00', '0000-00-00'),
(2, '0000-00-00', '0000-00-00'),
(3, '0000-00-00', '0000-00-00'),
(4, '0000-00-00', '0000-00-00'),
(5, '0000-00-00', '0000-00-00'),
(6, '0000-00-00', '0000-00-00'),
(7, '0000-00-00', '0000-00-00'),
(8, '0000-00-00', '0000-00-00'),
(9, '0000-00-00', '0000-00-00'),
(10, '0000-00-00', '0000-00-00'),
(11, '0000-00-00', '0000-00-00'),
(12, '0000-00-00', '0000-00-00'),
(13, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `origin`
--

CREATE TABLE `origin` (
  `origin_id` int(11) NOT NULL,
  `origin_state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `origin`
--

INSERT INTO `origin` (`origin_id`, `origin_state`) VALUES
(1, 'fdhha'),
(2, 'Abuja'),
(3, 'Lagos'),
(4, 'Enugu'),
(5, 'dfgfd'),
(6, 'Abakaliki');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat_id` int(11) NOT NULL,
  `seatNo` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat_id`, `seatNo`) VALUES
(1, 'A1'),
(2, 'A2'),
(3, 'A3'),
(4, 'A4'),
(5, 'A5'),
(6, 'A6'),
(7, 'A7'),
(8, 'A8'),
(9, 'A9'),
(10, 'A10');

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `travel_id` int(11) NOT NULL,
  `tr_name` varchar(100) NOT NULL,
  `tr_price` varchar(100) NOT NULL,
  `tr_distance` varchar(100) NOT NULL,
  `tr_image` varchar(100) NOT NULL,
  `tr_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`travel_id`, `tr_name`, `tr_price`, `tr_distance`, `tr_image`, `tr_desc`) VALUES
(1, 'Lagos-Benin', '4150', '100km', 'travel_image/7e06c721d9966cce0f4998a3b9e9888dsolomon.jpg', 'This Journey will go smooth and safe In Jesus Name'),
(3, 'Asaba-Oshodi', '41500', '1000km', 'travel_image/996aad1976d4750ecbdad40548f25ce0event_10.jpg', 'This Journey will go smooth and safe In Jesus Name'),
(16, 'Asaba-Oshodi', '41500', '1000km', 'travel_image/2ed7bbf2df3946fc66fbff8a33feaf2devent_10.jpg', 'This Journey will go smooth and safe In Jesus Name'),
(17, 'Asaba-Oshodi', '41500', '1000km', 'travel_image/1d598bcf7a2e7642354d900e22e5dd09event_10.jpg', 'This Journey will go smooth and safe In Jesus Name'),
(18, 'Lagos-Canada', '41500000', '100000km', 'travel_image/376dcd15f1b2890067dd7444e0d4f641Bana_1.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `trips`
--

CREATE TABLE `trips` (
  `trip_id` int(11) NOT NULL,
  `trip_origin_id` int(11) NOT NULL,
  `trip_state` varchar(255) NOT NULL,
  `trip_title` varchar(255) NOT NULL,
  `trip_cost` varchar(255) NOT NULL,
  `trip_dst` varchar(255) NOT NULL,
  `trip_image` varchar(255) NOT NULL,
  `trip_description` varchar(200) NOT NULL,
  `date_departure` date NOT NULL,
  `date_arrival` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trips`
--

INSERT INTO `trips` (`trip_id`, `trip_origin_id`, `trip_state`, `trip_title`, `trip_cost`, `trip_dst`, `trip_image`, `trip_description`, `date_departure`, `date_arrival`) VALUES
(1, 1, 'Lagos', 'Abuja - Asaba', '288', '200km', 'trip_img/b424cc1d2177a2862dcd057eb71b8d4fchickens-768x575.jpg', 'this trip is expeertrare', '0000-00-00', '0000-00-00'),
(2, 1, 'Ibadan', 'Abuja - Calabar', '288', '200km', 'trip_img/a47c85894012d452a0f5a65495ba04f5chickens-768x575.jpg', 'this trip is expeertrare', '0000-00-00', '0000-00-00'),
(3, 1, 'Abuja', 'Lagos - Akure', '288', '200km', 'trip_img/fe7e5cecab8fdf5b9204a1989346b7afanneliese-phillips-uv4-vl3liKM-unsplash.jpg', 'Enjoy your Journey', '0000-00-00', '0000-00-00'),
(4, 2, 'Asaba', 'Enugu - Owerri', '300', '50km', 'trip_img/e90a1a0970cfc7a5edceeca68f951f0dcoker-alafia.jpg', 'Eat your food as you journey', '0000-00-00', '0000-00-00'),
(5, 1, 'Enugu', 'Imo - osun', '600', '40', 'gfhsgsgsfg.jpg', 'sths iys zhz zda', '0000-00-00', '0000-00-00'),
(6, 1, 'Calabar', 'Jalingo - Sokoto', '466', '23', 'sdfgaesdh.jpg', 'awaaer adfghq qethh', '0000-00-00', '0000-00-00'),
(7, 1, 'kogi', 'kogi - lokoja', '345', '34km', 'kjfkjfk.jpg', 'dkfjkfjndjvn', '0000-00-00', '0000-00-00'),
(8, 0, '', '', '', '', '', '', '2023-01-02', '2021-12-31');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(1, 'yazid', 'brain', 'brainyazid@tech.com', 'braynd', '123456'),
(2, 'Yazid', 'Musa', 'yazshrilld@gmail.com', 'smooth', 'qawsedrftg'),
(3, 'stone', 'joe', 'stone_joe@email.com', 'stoned', '1234567'),
(4, 'book', 'study', 'book_study@email.com', 'bookstudy', 'book12345'),
(5, 'edit', 'slap', 'edit_slap@hsk.com', 'edited', 'slap101'),
(6, 'asjdfhj', 'adb,h,b', 'dshdf@kjlsf.com', 'spoon', 'plate'),
(7, '', '', '', '', ''),
(8, 'tims', 'zxcdv', 'ndfb@gnf.com', 'rocket', 'science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dates`
--
ALTER TABLE `dates`
  ADD PRIMARY KEY (`date_id`);

--
-- Indexes for table `origin`
--
ALTER TABLE `origin`
  ADD PRIMARY KEY (`origin_id`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat_id`);

--
-- Indexes for table `travel`
--
ALTER TABLE `travel`
  ADD PRIMARY KEY (`travel_id`);

--
-- Indexes for table `trips`
--
ALTER TABLE `trips`
  ADD PRIMARY KEY (`trip_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `dates`
--
ALTER TABLE `dates`
  MODIFY `date_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `origin`
--
ALTER TABLE `origin`
  MODIFY `origin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `travel`
--
ALTER TABLE `travel`
  MODIFY `travel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `trips`
--
ALTER TABLE `trips`
  MODIFY `trip_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
