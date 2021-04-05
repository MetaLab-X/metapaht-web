-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 15, 2017 at 06:48 PM
-- Server version: 5.6.36
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metapaht_base`
--

-- --------------------------------------------------------

--
-- Table structure for table `article_category`
--

CREATE TABLE `article_category` (
  `arcat_id` int(10) UNSIGNED NOT NULL,
  `arcat_th` varchar(800) COLLATE utf8_bin NOT NULL,
  `arcat_en` varchar(800) COLLATE utf8_bin NOT NULL,
  `arcat_show` varchar(10) COLLATE utf8_bin NOT NULL,
  `arcat_point` varchar(10) COLLATE utf8_bin NOT NULL,
  `arcat_add` varchar(800) COLLATE utf8_bin NOT NULL,
  `arcat_date` varchar(800) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `article_category`
--

INSERT INTO `article_category` (`arcat_id`, `arcat_th`, `arcat_en`, `arcat_show`, `arcat_point`, `arcat_add`, `arcat_date`) VALUES
(3, 'บทความ', 'Article', '1', '1', '15', '30-08-2017 23:50:24');

-- --------------------------------------------------------

--
-- Table structure for table `article_list`
--

CREATE TABLE `article_list` (
  `ar_id` int(10) UNSIGNED NOT NULL,
  `arcat_id` int(10) UNSIGNED NOT NULL,
  `ar_title_th` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_title_en` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_key_th` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_key_en` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_dst_th` text COLLATE utf8_bin NOT NULL,
  `ar_dst_en` text COLLATE utf8_bin NOT NULL,
  `ar_det_th` text COLLATE utf8_bin NOT NULL,
  `ar_det_en` text COLLATE utf8_bin NOT NULL,
  `ar_image` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_show` varchar(10) COLLATE utf8_bin NOT NULL,
  `ar_pin` varchar(10) COLLATE utf8_bin NOT NULL,
  `ar_add` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_date1` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_date2` varchar(800) COLLATE utf8_bin NOT NULL,
  `ar_date3` varchar(800) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `db_editer`
--

CREATE TABLE `db_editer` (
  `id` int(10) UNSIGNED NOT NULL,
  `title_th` varchar(600) NOT NULL,
  `detail_th` text NOT NULL,
  `detail_en` text NOT NULL,
  `view` int(10) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `add_by` varchar(255) NOT NULL,
  `add_date1` varchar(255) NOT NULL,
  `add_date2` varchar(255) NOT NULL,
  `add_date3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `editer`
--

CREATE TABLE `editer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_th` varchar(500) NOT NULL,
  `name_en` varchar(500) NOT NULL,
  `detail_th` text NOT NULL,
  `detail_en` text NOT NULL,
  `addby` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `editer`
--

INSERT INTO `editer` (`id`, `name`, `name_th`, `name_en`, `detail_th`, `detail_en`, `addby`, `addate`) VALUES
(1, 'ABOUT', 'โรงเรียนเมธาพัฒน์', 'โรงเรียนเมธาพัฒน์', '<p><span style=\"color:#000066\"><strong>&quot;เราตั้งใจสร้างโรงเรียนที่เป็น นวัตกรรมใหม่ ให้ชาวโคราช ได้สัมผัสในราคาที่คุ้มค่า&quot;</strong></span></p>\r\n\r\n<p>โรงเรียนแห่งนวัตกรรม ก้าวล้ำสู่สากล ดังนั้นเด็กโรงเรียนเมธาพัฒน์</p>\r\n\r\n<p><span style=\"color:#000066\"><strong>จึงพร้อมสำหรับการต่อยอด ทั้งในระบบการศึกษาไทยหรือต่างประเทศ</strong></span></p>\r\n', '<p><strong>&quot;เราตั้งใจสร้างโรงเรียนที่เป็น นวัตกรรมใหม่ ให้ชาวโคราช ได้สัมผัสในราคาที่คุ้มค่า&quot;</strong><br />\r\nโรงเรียนแห่งนวัตกรรม ก้าวล้ำสู่สากล<br />\r\n<strong>ดังนั้นเด็กโรงเรียนเมธาพัฒน์</strong><br />\r\nจึงพร้อมสำหรับการต่อยอด ทั้งในระบบการศึกษาไทยหรือต่างประเทศ</p>\r\n', '16', '10/09/2017 22:19:33'),
(2, 'MISSION & VISION', 'วิสัยทัศน์และพันธกิจ', 'MISSION & VISION', '<p>โรงเรียนเมธาพัฒน์ตั้งใจจะสร้างโรงเรียนที่เป็นนวัตกรรมใหม่มาให้ชาวโคราช&nbsp;<br />\r\nโดยนำจุดเด่นของโรงเรียนนานาชาติ คือ&nbsp;<br />\r\n<span style=\"color:#696969\"><strong>สามารถใช้ภาษาอังกฤษได้อย่างคล่องแคล่วและมีเนื้อหาสาระอันเป็นสากล</strong></span><br />\r\nมาผนวกเข้ากับหลักสูตรของไทย คือ&nbsp;<br />\r\n<span style=\"color:#696969\"><strong>สามารถฟัง พูด อ่าน เขียนภาษาไทยได้อย่างลึกซึ้ง รวมถึงเรียนรู้สังคม&nbsp;</strong></span><br />\r\n<span style=\"color:#696969\"><strong>วัฒนธรรม อันเป็นรากเหง้าของชาติเรา</strong></span><br />\r\nดังนั้นเด็กเมธาพัฒน์จึงพร้อมต่อยอดในระบบ การศึกษาในประเทศหรือต่างประเทศได้</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>โรงเรียนเมธาพัฒน์ตั้งใจจะสร้างโรงเรียนที่เป็นนวัตกรรมใหม่มาให้ชาวโคราช&nbsp;<br />\r\nโดยนำจุดเด่นของโรงเรียนนานาชาติ คือ&nbsp;<br />\r\nสามารถใช้ภาษาอังกฤษได้อย่างคล่องแคล่วและมีเนื้อหาสาระอันเป็นสากล<br />\r\nมาผนวกเข้ากับหลักสูตรของไทย คือ&nbsp;<br />\r\nสามารถฟัง พูด อ่าน เขียนภาษาไทยได้อย่างลึกซึ้ง รวมถึงเรียนรู้สังคม&nbsp;<br />\r\nวัฒนธรรม อันเป็นรากเหง้าของชาติเรา&nbsp;<br />\r\nดังนั้นเด็กเมธาพัฒน์จึงพร้อมต่อยอดในระบบ การศึกษาในประเทศหรือต่างประเทศได้</p>\r\n', '16', '11/09/2017 7:33:31'),
(3, 'COURSE', 'หลักสูตร', 'COURSE', '<p><span style=\"color:#000066\"><strong>นวัตกรรมทางหลักสูตร&nbsp;</strong></span><br />\r\n<span style=\"color:#696969\">&quot;ทีมผู้สร้างหลักสูตร ทำการวิเคราะห์ แบบทดสอบทางการศึกษาแห่งชาติ (O-NET)<br />\r\nและแบบประเมินผลนักเรียนนานาชาติ (PISA) ได้องค์ความรู้ที่เป็นแก่นของสาระวิชา<br />\r\nนำมาร้อยเรียงเป็นเรื่องราวที่ทันสมัย น่าสนใจ</span><br />\r\n<span style=\"color:#000066\"><strong>ผ่านการจัดประสบการณ์ตรง เด็กๆ ได้เรียนรู้อย่างสนุกสนาน ส่งผลให้เกิดความรู้<br />\r\nอย่างยั่งยืน มากกว่าการท่องจำหรือคัดเขียน&quot;</strong></span></p>\r\n', '<p>นวัตกรรมทางหลักสูตร&nbsp;<br />\r\n&quot;ทีมผู้สร้างหลักสูตร ทำการวิเคราะห์ แบบทดสอบทางการศึกษาแห่งชาติ (O-NET)<br />\r\nและแบบประเมินผลนักเรียนนานาชาติ (PISA) ได้องค์ความรู้ที่เป็นแก่นของสาระวิชา<br />\r\nนำมาร้อยเรียงเป็นเรื่องราวที่ทันสมัย น่าสนใจ<br />\r\n<strong>ผ่านการจัดประสบการณ์ตรง เด็กๆ ได้เรียนรู้อย่างสนุกสนาน ส่งผลให้เกิดความรู้<br />\r\nอย่างยั่งยืน มากกว่าการท่องจำหรือคัดเขียน&quot;</strong></p>\r\n', '16', '10/09/2017 22:20:20'),
(4, 'COURSE', 'หลักสูตรเมธาพัฒน์ ออกแบบโดย', 'หลักสูตรเมธาพัฒน์ ออกแบบโดย', '<p><span style=\"color:#000066\"><strong>รศ.ดร.นาตยา ปิลันธนานนท์</strong></span><br />\r\nอดีตนายกสมาคมหลักสูตรและการสอนแห่งประเทศไทย&nbsp;</p>\r\n\r\n<p><br />\r\n<span style=\"color:#000066\"><strong>ดร.ศิริรัตน์ ศรีสอาด</strong></span><br />\r\nผู้เชี่ยวชาญ หลักสูตรและการสอนการพัฒนาทรัพยากร&nbsp;<br />\r\nการเรียนรู้และการจัดการการเรียนรู้ แห่งมหาวิทยาลัยเกษตรศาสตร์ พร้อมคณะ</p>\r\n', '<p><span style=\"color:#000099\"><strong>รศ.ดร.นาตยา ปิลันธนานนท์</strong></span><br />\r\nอดีตนายกสมาคมหลักสูตรและการสอนแห่งประเทศไทย&nbsp;</p>\r\n\r\n<p><br />\r\n<span style=\"color:#000099\"><strong>ดร.ศิริรัตน์ ศรีสอาด</strong></span><br />\r\nผู้เชี่ยวชาญ หลักสูตรและการสอนการพัฒนาทรัพยากร&nbsp;<br />\r\nการเรียนรู้และการจัดการการเรียนรู้ แห่งมหาวิทยาลัยเกษตรศาสตร์ พร้อมคณะ</p>\r\n', '16', '10/09/2017 22:21:09'),
(5, 'ชื่อโปรโมชั่น', 'สิ่งอำนวยความสะดวก', 'สิ่งอำนวยความสะดวก', '<p><span style=\"color:#000033\"><strong>โรงเรียนเมธาพัฒน์ </strong></span>ตั้งอยู่บนถนนบายพาส สาย ฉ มีขนาดที่ดิน 12 ไร่ ประกอบไปด้วย<span style=\"color:#000033\"><strong>อาคารเรียน อาคารอำนวยการ อาคารสระว่ายน้ำ โรงอาหาร ห้องประชุม โรงยิมเนเซียม มีห้องปฎิบัติการวิทยาศาสตร์ ห้องปฎิบัติการคณิตศาสตร์ ห้องดนตรี ห้องสมุด ห้องศิลปะและโซนแสดงนิทรรศการงานศิลป์ </strong></span>ทุกมุมของเมธาพัฒน์ออกแบบให้เป็นมุมแห่งการเรียนรู้ ทีมสถาปนิกยังได้นำแนวคิดการออกแบบอาคารเชื่อมโยงกับธรรมชาติ เมื่อใดก็ตามที่เด็กๆ เดินออกจากห้องเรียน เด็กๆจะได้สัมผัสกับธรรมชาติรอบตัวทันที ทุกการเอาใจใส่เหล่านี้</p>\r\n\r\n<p><span style=\"color:#000033\"><strong>เราเชื่อว่าจะมีส่วนสำคัญต่อการพัฒนาความคิดสร้างสรรค์ และส่งเสริมให้เกิดการเรียนรู้แบบไม่มีที่สิ้นสุด</strong></span></p>\r\n', '<p>โรงเรียนเมธาพัฒน์ ตั้งอยู่บนถนนบายพาส สาย ฉ มีขนาดที่ดิน 12 ไร่ ประกอบไปด้วยอาคารเรียน อาคารอำนวยการ อาคารสระว่ายน้ำ โรงอาหาร ห้องประชุม โรงยิมเนเซียม มีห้องปฎิบัติการวิทยาศาสตร์ ห้องปฎิบัติการคณิตศาสตร์ ห้องดนตรี ห้องสมุด ห้องศิลปะและโซนแสดงนิทรรศการงานศิลป์ ทุกมุมของเมธาพัฒน์ออกแบบให้เป็นมุมแห่งการเรียนรู้ ทีมสถาปนิกยังได้นำแนวคิดการออกแบบอาคารเชื่อมโยงกับธรรมชาติ เมื่อใดก็ตามที่เด็กๆ เดินออกจากห้องเรียน เด็กๆจะได้สัมผัสกับธรรมชาติรอบตัวทันที ทุกการเอาใจใส่เหล่านี้ เราเชื่อว่าจะมีส่วนสำคัญต่อการพัฒนาความคิดสร้างสรรค์ และส่งเสริมให้เกิดการเรียนรู้แบบไม่มีที่สิ้นสุด</p>\r\n', '16', '10/09/2017 22:27:31'),
(7, 'บริการของเรา ศัลยกรรมความงาม', 'วิธีเดินทาง', 'วิธีเดินทาง', '<p><span style=\"color:#000066\"><strong>ตั้งอยู่บนทำเลเดินทางสะดวก</strong></span><br />\r\nต.หนองบัวศาลา อ.เมือง จ.นครราชสีมา&nbsp;<br />\r\n<span style=\"color:#000066\"><strong>เข้าออกได้หลายเส้นทาง</strong></span></p>\r\n', '<p><strong>ตั้งอยู่บนทำเลศักยภาพบนถนนมิตรภาพ</strong><br />\r\nอ.เมือง จังหวัดนครราชสีมา&nbsp;<strong>เดินทางสะดวก<br />\r\nเข้าออกได้หลายเส้นทาง</strong>&nbsp;ทั้งจากถนน<br />\r\nมิตรภาพและถนนสุรนารายณ์</p>\r\n', '16', '10/09/2017 22:30:08'),
(6, 'บริการของเรา ดูแลผิวพรรณและความงาม', 'สิ่งอำนวยความสะดวก', 'สิ่งอำนวยความสะดวก', '<p>สนามเด็กเล่น</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/2.png\" /></p>\r\n\r\n<p>โรงอาหาร</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/3.png\" /></p>\r\n\r\n<p>สนามกีฬา</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/4.png\" /></p>\r\n\r\n<p>สื่อการเรียนรู้</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/5.png\" /></p>\r\n\r\n<p>ห้องปฏิบัติการ</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/6.png\" /></p>\r\n\r\n<p>ห้องคอมพิวเตอร์</p>\r\n', '<p>สนามเด็กเล่น</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/2.png\" /></p>\r\n\r\n<p>โรงอาหาร</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/3.png\" /></p>\r\n\r\n<p>สนามกีฬา</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/4.png\" /></p>\r\n\r\n<p>สื่อการเรียนรู้</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/5.png\" /></p>\r\n\r\n<p>ห้องปฏิบัติการ</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost/metapaht.com/assets/images/facilities/icon/6.png\" /></p>\r\n\r\n<p>ห้องคอมพิวเตอร์</p>\r\n', '15', '10/09/2017 18:32:50'),
(9, 'โปรโมชั่นรายเดือน intro', '', '', '	<div style=\"font-size:28px; color:#25a5e0; padding-bottom:15px;\">โปรโมชั่นศัลยกรรมเดือน ธันวาคม</div>\r\n       		<div><img src=\"<?php echo $getIMG[2][1];?>\"  alt=\"<?php echo $getIMG[2][2];?>\" title=\"<?php echo $getIMG[2][3]?>\" class=\"img-responsive\" ></div>', '', '15', '14/11/2016 21:54:44'),
(10, 'โปรโมชั่นพิเศษ intro', '', '', '<div style=\"font-size:28px; color:#7f6356; padding-bottom:5px;\">\r\n	โปรโมชั่น</div>\r\n<div class=\"col-md-5\">\r\n	<div style=\"padding-bottom:25px;\">\r\n		<img alt=\"&lt;?php echo $getIMG[3][2];?&gt;\" class=\"img-responsive\" src=\"&lt;?php echo $getIMG[3][1];?&gt;\" title=\"&lt;?php echo $getIMG[3][3]?&gt;\" /></div>\r\n</div>\r\n', '', '15', '14/11/2016 21:54:11'),
(11, 'โปรโมชั่นรายเดือน Detail', '', '', '<p>\r\n	โปรโมชั่นรายเดือน Detail</p>\r\n', '', '15', '14/11/2016 21:37:58'),
(12, 'โปรโมชั่นพิเศษ Detail', '', '', '<p>\r\n	โปรโมชั่นพิเศษ Detail</p>\r\n', '', '15', '14/11/2016 21:37:48'),
(13, 'รายละเอียดรีวิวหน้าแรก 1', '', '', '<p>\r\n	รีวิว1</p>\r\n', '', '15', '14/11/2016 21:47:55'),
(14, 'รายละเอียดรีวิวหน้าแรก 2', '', '', '<p>\r\n	รีวิว2</p>\r\n', '', '15', '14/11/2016 21:48:00');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(5) NOT NULL,
  `userType` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `logsite` varchar(254) NOT NULL,
  `active` int(11) NOT NULL,
  `adminsite` int(1) NOT NULL,
  `lastupdate` varchar(255) NOT NULL,
  `lastconnect` varchar(255) NOT NULL,
  `updateby` varchar(13) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `userType`, `name`, `username`, `password`, `logsite`, `active`, `adminsite`, `lastupdate`, `lastconnect`, `updateby`) VALUES
(15, 'user', 'admin', 'omario', 'admin8888', '1', 1, 1, '1', '10/09/2017 19:02:39', '1'),
(16, 'admin', 'Metapahat Admin ', 'metapaht', 'admin9999', '1', 1, 1, '1', '11/09/2017 08:32:22', '15'),
(17, 'admin', 'admin', 'ramone', 'mone8888', '1', 1, 1, '1', '30/08/2017 21:00:31', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article_category`
--
ALTER TABLE `article_category`
  ADD PRIMARY KEY (`arcat_id`);

--
-- Indexes for table `article_list`
--
ALTER TABLE `article_list`
  ADD PRIMARY KEY (`ar_id`);

--
-- Indexes for table `db_editer`
--
ALTER TABLE `db_editer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `editer`
--
ALTER TABLE `editer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article_category`
--
ALTER TABLE `article_category`
  MODIFY `arcat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `article_list`
--
ALTER TABLE `article_list`
  MODIFY `ar_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `db_editer`
--
ALTER TABLE `db_editer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `editer`
--
ALTER TABLE `editer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
