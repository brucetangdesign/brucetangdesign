-- phpMyAdmin SQL Dump
-- version 4.2.7
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Mar 23, 2016 at 08:22 PM
-- Server version: 5.5.41-log
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `work_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `work_detail_table`
--

CREATE TABLE IF NOT EXISTS `work_detail_table` (
  `ID` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `H1_Class` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Intro` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Role` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Href` varchar(600) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Images` varchar(2000) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_detail_table`
--

INSERT INTO `work_detail_table` (`ID`, `H1_Class`, `Title`, `Intro`, `Role`, `Href`, `Images`) VALUES
('amf', 'client-amf-header', 'AMF BOWLING', 'AMF is the largest owner and operator of bowling alleys in the world. The task at hand was to revitalize the look and feel of their website and consolidate the design and information for more than 240 AMF locations across the USA. Bruce Tang Design crafted a fully responsive design that met the client''s rebranding goals while keeping usability in mind.<br><span class="squeaky-tag">Work done at <a href="http://www.squeaky.com">Squeaky Wheel Media</a></span>', 'Visual Design, Art Direction, UX', 'http://www.amf.com', '<img class=''img-responsive'' src="img/work/wk-amf-1-lg.png" alt="amf screenshot 1" title="AMF Bowling Homepage">,\r\n<img class=''img-responsive'' src="img/work/wk-amf-2-lg.png" alt="amf screenshot 2" title="AMF Bowling Mobile Location">,\r\n<img class=''img-responsive'' src="img/work/wk-amf-3-lg.png" alt="amf screenshot 2" title="AMF Bowling Mobile Location">,\r\n<img class=''img-responsive'' src="img/work/wk-amf-style-lg.png" alt="AMF Style" title="AMF Bowling Style">'),
('makemeaning', 'client-makemeaning-header', 'MAKE MEANING', 'Make Meaning is a one-of-a-kind arts and crafts party destination for kids and adults alike. The goal of the project was to refresh the visual aesthetics of their website while also clearly showing the many offerings they have to several different audiences.<br><br>The new site design prominently featured photos of their facilities meshed with typical customers. The emphasis was kept on a seamless user experience while adhering to their fun and young brand image.<br><span class="squeaky-tag">Work done at <a href="http://www.squeaky.com">Squeaky Wheel Media</a></span>', 'Visual Design, Art Direction, UX', '', '<img class=''img-responsive'' src="img/work/wk-makemeaning-1-lg.png" alt="Make Meaning screenshot 1" title="Make Meaning Homepage">,\r\n<img class=''img-responsive'' src="img/work/wk-makemeaning-2-lg.png" alt="Make Meaning screenshot 2" title="Make Meaning Home Full">,\r\n<img class=''img-responsive'' src="img/work/wk-makemeaning-3-lg.png" alt="Make Meaning screenshot 3" title="Make Meaning Parties">,\r\n<img class=''img-responsive'' src="img/work/wk-makemeaning-4-lg.png" alt="Make Meaning screenshot 4" title="Make Meaning About">,\r\n<img class=''img-responsive'' src="img/work/wk-makemeaning-5-lg.png" alt="Make Meaning screenshot 5" title="Make Meaning Reserve">,\r\n<img class=''img-responsive'' src="img/work/wk-makemeaning-style-lg.png" alt="Make Meaning Style" title="Make Meaning Style">'),
('oberlin', 'client-oberlin-header', 'OBERLIN ILLUMINATE', 'Oberlin College and Conservatory needed a site to raise awareness and provide information and statistics for their fundraising campaign, Oberlin Illuminate. The site is fully responsive to provide the best user experience across multiple platforms.<br/><br/>\r\n\r\nOberlin Illuminate is a seven-year, $250 million fundraising campaign for Oberlin College and Conservatory that aims to broaden access to an Oberlin education, strengthen the campus community, enrich the academic program, make Oberlin more competitive, and better position their students for success after they graduate.\r\n<br/><br/>\r\nLaunched in 2014, Oberlin Illuminate is well on it''s way to reaching their fundraising goal.', 'Visual Design, Art Direction, UX', 'http://campaign.oberlin.edu/', '<img class=''img-responsive'' src="img/work/wk-oberlin-1-lg.png" alt="Oberlin screenshot 1" title="Oberlin Homepage">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-2-lg.png" alt="Oberlin screenshot 2" title="Oberlin Mobile">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-3-lg.png" alt="Oberlin screenshot 3" title="Oberlin Home Full">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-4-lg.png" alt="Oberlin screenshot 4" title="Oberlin Curricular">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-5-lg.png" alt="Oberlin screenshot 5" title="Oberlin News">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-6-lg.png" alt="Oberlin screenshot 5" title="Oberlin Quotes">,\r\n<img class=''img-responsive'' src="img/work/wk-oberlin-style-lg.png" alt="Oberlin Style" title="Oberlin Style">'),
('usccu', 'client-usccu-header', 'USC CREDIT UNION', 'USC Credit Union is the premiere financial institution for the University of Southern California (and beyond). The goal of the redesign was to position USCCU as a leader and make their site easy to use for prospective customers. Bruce Tang Design designed a fully responsive, custom WordPress theme that met the client''s goals of keeping usability at the forefront while being visually fresh and engaging to users.<br><span class="squeaky-tag">Work done at <a href="http://www.squeaky.com">Squeaky Wheel Media</a></span>', 'Visual Design, Art Direction, UX', 'https://www.usccreditunion.org/', '<img class=''img-responsive'' src="img/work/wk-usccu-1-lg.png" alt="USCCU screenshot 1" title="USCCU Homepage">,\r\n<img class=''img-responsive'' src="img/work/wk-usccu-2-lg.png" alt="USCCU screenshot 2" title="USCCU Mobile">,\r\n<img class=''img-responsive'' src="img/work/wk-usccu-3-lg.png" alt="USCCU screenshot 3" title="USCCU Home Full">,\r\n<img class=''img-responsive'' src="img/work/wk-usccu-4-lg.png" alt="USCCU screenshot 4" title="USCCU Product">,\r\n<img class=''img-responsive'' src="img/work/wk-usccu-5-lg.png" alt="USCCU screenshot 5" title="USCCU Resources">,\r\n<img class=''img-responsive'' src="img/work/wk-usccu-style-lg.png" alt="USCCU Style" title="USCCU Style">');

-- --------------------------------------------------------

--
-- Table structure for table `work_table`
--

CREATE TABLE IF NOT EXISTS `work_table` (
  `ID` smallint(6) NOT NULL DEFAULT '0',
  `Href` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Alt` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Display_Name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img_Class` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Img_Path` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `work_table`
--

INSERT INTO `work_table` (`ID`, `Href`, `Title`, `Alt`, `Display_Name`, `Img_Class`, `Img_Path`) VALUES
(0, 'amf', 'AMF Bowling Centers', 'AMF Bowling Centers thumbnail', 'AMF Bowling Centers', 'wk1', 'img/work/wk-amf-tn.jpg'),
(1, 'usccu', 'USC Credit Union', 'USC Credit Union thumbnail', 'USC Credit Union', 'wk2', 'img/work/wk-usccu-tn.jpg'),
(2, 'oberlin', 'Oberlin Illuminate', 'Oberlin Illuminate thumbnail', 'Oberlin Illuminate', 'wk3', 'img/work/wk-oberlin-tn.jpg'),
(3, 'makemeaning', 'Make Meaning', 'Make Meaning thumbnail', 'Make Meaning', 'wk4', 'img/work/wk-makemeaning-tn.jpg'),
(4, 'genre', 'Gen Re', 'Gen Re thumbnail', 'Gen Re', 'wk5', 'img/work/wk-genre-tn.jpg'),
(5, 'helix', 'Helix', 'Helix thumbnail', 'Helix', 'wk6', 'img/work/wk-helix-tn.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `work_detail_table`
--
ALTER TABLE `work_detail_table`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `work_table`
--
ALTER TABLE `work_table`
 ADD PRIMARY KEY (`ID`), ADD KEY `Display_Name` (`Display_Name`,`Img_Class`,`Img_Path`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
