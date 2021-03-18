-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `01_metapaht`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `article_category`
-- 

CREATE TABLE `article_category` (
  `arcat_id` int(10) unsigned NOT NULL auto_increment,
  `arcat_th` varchar(800) collate utf8_bin NOT NULL,
  `arcat_en` varchar(800) collate utf8_bin NOT NULL,
  `arcat_show` varchar(10) collate utf8_bin NOT NULL,
  `arcat_point` varchar(10) collate utf8_bin NOT NULL,
  `arcat_add` varchar(800) collate utf8_bin NOT NULL,
  `arcat_date` varchar(800) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`arcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=4 ;

-- 
-- dump ตาราง `article_category`
-- 

INSERT INTO `article_category` VALUES (3, 0xe0b89ae0b897e0b884e0b8a7e0b8b2e0b8a1, 0x41727469636c65, 0x31, 0x31, 0x3135, 0x33302d30382d323031372032333a35303a3234);

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `article_list`
-- 

CREATE TABLE `article_list` (
  `ar_id` int(10) unsigned NOT NULL auto_increment,
  `arcat_id` int(10) unsigned NOT NULL,
  `ar_title_th` varchar(800) collate utf8_bin NOT NULL,
  `ar_title_en` varchar(800) collate utf8_bin NOT NULL,
  `ar_key_th` varchar(800) collate utf8_bin NOT NULL,
  `ar_key_en` varchar(800) collate utf8_bin NOT NULL,
  `ar_dst_th` text collate utf8_bin NOT NULL,
  `ar_dst_en` text collate utf8_bin NOT NULL,
  `ar_det_th` text collate utf8_bin NOT NULL,
  `ar_det_en` text collate utf8_bin NOT NULL,
  `ar_image` varchar(800) collate utf8_bin NOT NULL,
  `ar_show` varchar(10) collate utf8_bin NOT NULL,
  `ar_pin` varchar(10) collate utf8_bin NOT NULL,
  `ar_add` varchar(800) collate utf8_bin NOT NULL,
  `ar_date1` varchar(800) collate utf8_bin NOT NULL,
  `ar_date2` varchar(800) collate utf8_bin NOT NULL,
  `ar_date3` varchar(800) collate utf8_bin NOT NULL,
  PRIMARY KEY  (`ar_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `article_list`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `db_editer`
-- 

CREATE TABLE `db_editer` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `title_th` varchar(600) NOT NULL,
  `detail_th` text NOT NULL,
  `detail_en` text NOT NULL,
  `view` int(10) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `add_by` varchar(255) NOT NULL,
  `add_date1` varchar(255) NOT NULL,
  `add_date2` varchar(255) NOT NULL,
  `add_date3` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- dump ตาราง `db_editer`
-- 


-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `editer`
-- 

CREATE TABLE `editer` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `name_th` varchar(500) NOT NULL,
  `name_en` varchar(500) NOT NULL,
  `detail_th` text NOT NULL,
  `detail_en` text NOT NULL,
  `addby` varchar(255) NOT NULL,
  `addate` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

-- 
-- dump ตาราง `editer`
-- 

INSERT INTO `editer` VALUES (1, 'ABOUT', 'โรงเรียนเมธาพัฒน์', 'โรงเรียนเมธาพัฒน์', '"เราตั้งใจสร้างโรงเรียนที่เป็น นวัตกรรมใหม่ ให้ชาวโคราช ได้สัมผัสในราคาที่คุ้มค่า" \r\nโรงเรียนแห่งนวัตกรรม ก้าวล้ำสู่สากล\r\nดังนั้นเด็กโรงเรียนเมธาพัฒน์ \r\nจึงพร้อมสำหรับการต่อยอด ทั้งในระบบการศึกษาไทยหรือต่างประเทศ', '"เราตั้งใจสร้างโรงเรียนที่เป็น นวัตกรรมใหม่ ให้ชาวโคราช ได้สัมผัสในราคาที่คุ้มค่า" \r\nโรงเรียนแห่งนวัตกรรม ก้าวล้ำสู่สากล\r\nดังนั้นเด็กโรงเรียนเมธาพัฒน์ \r\nจึงพร้อมสำหรับการต่อยอด ทั้งในระบบการศึกษาไทยหรือต่างประเทศ', '15', '27/10/2016 14:37:57');
INSERT INTO `editer` VALUES (2, 'MISSION & VISION', 'วิสัยทัศน์และพันธกิจ', 'MISSION & VISION', '<p>โรงเรียนเมธาพัฒน์ตั้งใจจะสร้างโรงเรียนที่เป็นนวัตกรรมใหม่มาให้ชาวโคราช&nbsp;<br />\r\nโดยนำจุดเด่นของโรงเรียนนานาชาติ คือ&nbsp;<br />\r\nสามารถใช้ภาษาอังกฤษได้อย่างคล่องแคล่วและมีเนื้อหาสาระอันเป็นสากล<br />\r\nมาผนวกเข้ากับหลักสูตรของไทย คือ&nbsp;<br />\r\nสามารถฟัง พูด อ่าน เขียนภาษาไทยได้อย่างลึกซึ้ง รวมถึงเรียนรู้สังคม&nbsp;<br />\r\nวัฒนธรรม อันเป็นรากเหง้าของชาติเรา&nbsp;<br />\r\nดังนั้นเด็กเมธาพัฒน์จึงพร้อมต่อยอดในระบบ การศึกษาในประเทศหรือต่างประเทศได้</p>\r\n', '<p>โรงเรียนเมธาพัฒน์ตั้งใจจะสร้างโรงเรียนที่เป็นนวัตกรรมใหม่มาให้ชาวโคราช&nbsp;<br />\r\nโดยนำจุดเด่นของโรงเรียนนานาชาติ คือ&nbsp;<br />\r\nสามารถใช้ภาษาอังกฤษได้อย่างคล่องแคล่วและมีเนื้อหาสาระอันเป็นสากล<br />\r\nมาผนวกเข้ากับหลักสูตรของไทย คือ&nbsp;<br />\r\nสามารถฟัง พูด อ่าน เขียนภาษาไทยได้อย่างลึกซึ้ง รวมถึงเรียนรู้สังคม&nbsp;<br />\r\nวัฒนธรรม อันเป็นรากเหง้าของชาติเรา&nbsp;<br />\r\nดังนั้นเด็กเมธาพัฒน์จึงพร้อมต่อยอดในระบบ การศึกษาในประเทศหรือต่างประเทศได้</p>\r\n', '15', '10/09/2017 18:24:18');
INSERT INTO `editer` VALUES (3, 'COURSE', 'หลักสูตร', 'COURSE', '<p>นวัตกรรมทางหลักสูตร&nbsp;<br />\r\n&quot;ทีมผู้สร้างหลักสูตร ทำการวิเคราะห์ แบบทดสอบทางการศึกษาแห่งชาติ (O-NET)<br />\r\nและแบบประเมินผลนักเรียนนานาชาติ (PISA) ได้องค์ความรู้ที่เป็นแก่นของสาระวิชา<br />\r\nนำมาร้อยเรียงเป็นเรื่องราวที่ทันสมัย น่าสนใจ<br />\r\n<strong>ผ่านการจัดประสบการณ์ตรง เด็กๆ ได้เรียนรู้อย่างสนุกสนาน ส่งผลให้เกิดความรู้<br />\r\nอย่างยั่งยืน มากกว่าการท่องจำหรือคัดเขียน&quot;</strong></p>\r\n', '<p>นวัตกรรมทางหลักสูตร&nbsp;<br />\r\n&quot;ทีมผู้สร้างหลักสูตร ทำการวิเคราะห์ แบบทดสอบทางการศึกษาแห่งชาติ (O-NET)<br />\r\nและแบบประเมินผลนักเรียนนานาชาติ (PISA) ได้องค์ความรู้ที่เป็นแก่นของสาระวิชา<br />\r\nนำมาร้อยเรียงเป็นเรื่องราวที่ทันสมัย น่าสนใจ<br />\r\n<strong>ผ่านการจัดประสบการณ์ตรง เด็กๆ ได้เรียนรู้อย่างสนุกสนาน ส่งผลให้เกิดความรู้<br />\r\nอย่างยั่งยืน มากกว่าการท่องจำหรือคัดเขียน&quot;</strong></p>\r\n', '15', '10/09/2017 18:25:06');
INSERT INTO `editer` VALUES (4, 'COURSE', 'หลักสูตรเมธาพัฒน์ ออกแบบโดย', 'หลักสูตรเมธาพัฒน์ ออกแบบโดย', '<p><strong>รศ.ดร.นาตยา ปิลันธนานนท์</strong><br />\r\nอดีตนายกสมาคมหลักสูตรและการสอนแห่งประเทศไทย&nbsp;<br />\r\n<strong>ดร.ศิริรัตน์ ศรีสอาด</strong><br />\r\nผู้เชี่ยวชาญ หลักสูตรและการสอนการพัฒนาทรัพยากร&nbsp;<br />\r\nการเรียนรู้และการจัดการการเรียนรู้ แห่งมหาวิทยาลัยเกษตรศาสตร์ พร้อมคณะ</p>\r\n', '<p><strong>รศ.ดร.นาตยา ปิลันธนานนท์</strong><br />\r\nอดีตนายกสมาคมหลักสูตรและการสอนแห่งประเทศไทย&nbsp;<br />\r\n<strong>ดร.ศิริรัตน์ ศรีสอาด</strong><br />\r\nผู้เชี่ยวชาญ หลักสูตรและการสอนการพัฒนาทรัพยากร&nbsp;<br />\r\nการเรียนรู้และการจัดการการเรียนรู้ แห่งมหาวิทยาลัยเกษตรศาสตร์ พร้อมคณะ</p>\r\n', '15', '10/09/2017 18:31:06');
INSERT INTO `editer` VALUES (5, 'ชื่อโปรโมชั่น', 'สิ่งอำนวยความสะดวก', 'สิ่งอำนวยความสะดวก', '<p>โรงเรียนเมธาพัฒน์ ตั้งอยู่บนถนนบายพาส สาย ฉ มีขนาดที่ดิน 12 ไร่ ประกอบไปด้วยอาคารเรียน อาคารอำนวยการ อาคารสระว่ายน้ำ โรงอาหาร ห้องประชุม โรงยิมเนเซียม มีห้องปฎิบัติการวิทยาศาสตร์ ห้องปฎิบัติการคณิตศาสตร์ ห้องดนตรี ห้องสมุด ห้องศิลปะและโซนแสดงนิทรรศการงานศิลป์ ทุกมุมของเมธาพัฒน์ออกแบบให้เป็นมุมแห่งการเรียนรู้ ทีมสถาปนิกยังได้นำแนวคิดการออกแบบอาคารเชื่อมโยงกับธรรมชาติ เมื่อใดก็ตามที่เด็กๆ เดินออกจากห้องเรียน เด็กๆจะได้สัมผัสกับธรรมชาติรอบตัวทันที ทุกการเอาใจใส่เหล่านี้ เราเชื่อว่าจะมีส่วนสำคัญต่อการพัฒนาความคิดสร้างสรรค์ และส่งเสริมให้เกิดการเรียนรู้แบบไม่มีที่สิ้นสุด</p>\r\n', '<p>โรงเรียนเมธาพัฒน์ ตั้งอยู่บนถนนบายพาส สาย ฉ มีขนาดที่ดิน 12 ไร่ ประกอบไปด้วยอาคารเรียน อาคารอำนวยการ อาคารสระว่ายน้ำ โรงอาหาร ห้องประชุม โรงยิมเนเซียม มีห้องปฎิบัติการวิทยาศาสตร์ ห้องปฎิบัติการคณิตศาสตร์ ห้องดนตรี ห้องสมุด ห้องศิลปะและโซนแสดงนิทรรศการงานศิลป์ ทุกมุมของเมธาพัฒน์ออกแบบให้เป็นมุมแห่งการเรียนรู้ ทีมสถาปนิกยังได้นำแนวคิดการออกแบบอาคารเชื่อมโยงกับธรรมชาติ เมื่อใดก็ตามที่เด็กๆ เดินออกจากห้องเรียน เด็กๆจะได้สัมผัสกับธรรมชาติรอบตัวทันที ทุกการเอาใจใส่เหล่านี้ เราเชื่อว่าจะมีส่วนสำคัญต่อการพัฒนาความคิดสร้างสรรค์ และส่งเสริมให้เกิดการเรียนรู้แบบไม่มีที่สิ้นสุด</p>\r\n', '15', '10/09/2017 18:25:33');
INSERT INTO `editer` VALUES (7, 'บริการของเรา ศัลยกรรมความงาม', 'วิธีเดินทาง', 'วิธีเดินทาง', '<p><strong>ตั้งอยู่บนทำเลศักยภาพบนถนนมิตรภาพ</strong><br />\r\nอ.เมือง จังหวัดนครราชสีมา&nbsp;<strong>เดินทางสะดวก<br />\r\nเข้าออกได้หลายเส้นทาง</strong>&nbsp;ทั้งจากถนน<br />\r\nมิตรภาพและถนนสุรนารายณ์</p>\r\n', '<p><strong>ตั้งอยู่บนทำเลศักยภาพบนถนนมิตรภาพ</strong><br />\r\nอ.เมือง จังหวัดนครราชสีมา&nbsp;<strong>เดินทางสะดวก<br />\r\nเข้าออกได้หลายเส้นทาง</strong>&nbsp;ทั้งจากถนน<br />\r\nมิตรภาพและถนนสุรนารายณ์</p>\r\n', '15', '10/09/2017 18:28:45');
INSERT INTO `editer` VALUES (6, 'บริการของเรา ดูแลผิวพรรณและความงาม', 'สิ่งอำนวยความสะดวก', 'สิ่งอำนวยความสะดวก', '<p>สนามเด็กเล่น</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/2.png" /></p>\r\n\r\n<p>โรงอาหาร</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/3.png" /></p>\r\n\r\n<p>สนามกีฬา</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/4.png" /></p>\r\n\r\n<p>สื่อการเรียนรู้</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/5.png" /></p>\r\n\r\n<p>ห้องปฏิบัติการ</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/6.png" /></p>\r\n\r\n<p>ห้องคอมพิวเตอร์</p>\r\n', '<p>สนามเด็กเล่น</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/2.png" /></p>\r\n\r\n<p>โรงอาหาร</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/3.png" /></p>\r\n\r\n<p>สนามกีฬา</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/4.png" /></p>\r\n\r\n<p>สื่อการเรียนรู้</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/5.png" /></p>\r\n\r\n<p>ห้องปฏิบัติการ</p>\r\n\r\n<p><img alt="" src="http://localhost/metapaht.com/assets/images/facilities/icon/6.png" /></p>\r\n\r\n<p>ห้องคอมพิวเตอร์</p>\r\n', '15', '10/09/2017 18:32:50');
INSERT INTO `editer` VALUES (9, 'โปรโมชั่นรายเดือน intro', '', '', '	<div style="font-size:28px; color:#25a5e0; padding-bottom:15px;">โปรโมชั่นศัลยกรรมเดือน ธันวาคม</div>\r\n       		<div><img src="<?php echo $getIMG[2][1];?>"  alt="<?php echo $getIMG[2][2];?>" title="<?php echo $getIMG[2][3]?>" class="img-responsive" ></div>', '', '15', '14/11/2016 21:54:44');
INSERT INTO `editer` VALUES (10, 'โปรโมชั่นพิเศษ intro', '', '', '<div style="font-size:28px; color:#7f6356; padding-bottom:5px;">\r\n	โปรโมชั่น</div>\r\n<div class="col-md-5">\r\n	<div style="padding-bottom:25px;">\r\n		<img alt="&lt;?php echo $getIMG[3][2];?&gt;" class="img-responsive" src="&lt;?php echo $getIMG[3][1];?&gt;" title="&lt;?php echo $getIMG[3][3]?&gt;" /></div>\r\n</div>\r\n', '', '15', '14/11/2016 21:54:11');
INSERT INTO `editer` VALUES (11, 'โปรโมชั่นรายเดือน Detail', '', '', '<p>\r\n	โปรโมชั่นรายเดือน Detail</p>\r\n', '', '15', '14/11/2016 21:37:58');
INSERT INTO `editer` VALUES (12, 'โปรโมชั่นพิเศษ Detail', '', '', '<p>\r\n	โปรโมชั่นพิเศษ Detail</p>\r\n', '', '15', '14/11/2016 21:37:48');
INSERT INTO `editer` VALUES (13, 'รายละเอียดรีวิวหน้าแรก 1', '', '', '<p>\r\n	รีวิว1</p>\r\n', '', '15', '14/11/2016 21:47:55');
INSERT INTO `editer` VALUES (14, 'รายละเอียดรีวิวหน้าแรก 2', '', '', '<p>\r\n	รีวิว2</p>\r\n', '', '15', '14/11/2016 21:48:00');

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user_login`
-- 

CREATE TABLE `user_login` (
  `user_id` int(5) NOT NULL auto_increment,
  `userType` varchar(13) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(20) NOT NULL,
  `logsite` varchar(254) NOT NULL,
  `active` int(11) NOT NULL,
  `adminsite` int(1) NOT NULL,
  `lastupdate` varchar(255) NOT NULL,
  `lastconnect` varchar(255) NOT NULL,
  `updateby` varchar(13) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

-- 
-- dump ตาราง `user_login`
-- 

INSERT INTO `user_login` VALUES (15, 'user', 'admin', 'omario', 'admin8888', '1', 1, 1, '1', '10/09/2017 16:11:35', '1');
INSERT INTO `user_login` VALUES (16, 'user', 'administrator', 'athitclinic', 'athit8888', '1', 1, 1, '1', '13/11/2016 17:40:42', '15');
INSERT INTO `user_login` VALUES (17, 'admin', 'admin', 'ramone', 'mone8888', '1', 1, 1, '1', '30/08/2017 21:00:31', '1');
