-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2020 at 11:32 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `brilliantdevelopers`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`, `time`) VALUES
(1, 'glorynwa@gmail.com', '740ea400bd97ca83676119e111b8917c', '2019-09-21 09:22:40.352737');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `company` text NOT NULL,
  `budget` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `company`, `budget`, `message`, `time`) VALUES
(1, 'Glory Adex', 'gloadex1@gmail.com', '0908765432', 'Adex and Sons Ltd', '150,000', 'I will like to meet you face to faace. Thank you!', '0000-00-00 00:00:00.000000'),
(2, 'Glory Adex', 'gloadex1@gmail.com', '0908765432', 'Adex and Sons Ltd', '150,000', 'I will like to meet you face to faace. Thank you!', '0000-00-00 00:00:00.000000'),
(3, 'Edet Christian', 'edyy@gmail.com', '09089876557', 'Mobil', '160,000', 'I will like to see you!', '2019-10-13 21:20:20.000000'),
(4, 'Glory Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ceflix Scepter', '160,000', 'i will see you', '2019-10-13 21:24:32.000000'),
(5, 'Glory Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ceflix Scepter', '160,000', 'i will love to meet you!', '2019-10-13 21:25:53.000000'),
(6, 'Gloria2wwee Nwaaaaaaaaaaaa', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'wwww', '2019-10-13 21:28:24.000000'),
(7, 'Gloria2wwee Nwaaaaaaaaaaaa', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'qqqqqqqqqq', '2019-10-13 21:29:17.000000'),
(8, 'Gloria22222222 Nwaaaaaaaaaaaa', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'aaaaaaaaaaa', '2019-10-13 21:29:55.000000'),
(9, 'ESSIEN444444 ALEX', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'rrrrrrrrrr', '2019-10-13 21:41:56.000000'),
(10, 'Glory Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ceflix Scepter', '160,000', 'eeeeeeeeeee', '2019-10-13 22:25:09.000000'),
(11, 'Gloria22222222 Nwaaaaaaaaaaaa', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'wwwwwwwwwwwwwwwwww', '2019-10-13 22:26:00.000000'),
(12, 'ESSIEN11111111 ALEX', 'glorynwa@gmail.com', '07068057873', 'Ceflix Scepter', '160,000', 'wwwwwwwwwwwww', '2019-10-13 22:26:28.000000');

-- --------------------------------------------------------

--
-- Table structure for table `qualitydesign`
--

CREATE TABLE `qualitydesign` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualitydesign`
--

INSERT INTO `qualitydesign` (`id`, `title`, `description`, `time`) VALUES
(1, '  High Quality Design', ' No one designs to their audience better than Brilliant Developers. Our UI/ UX experts offers appealing and intaractive user experience with stunning visual elegance to produce a complete package of purpose-driven, insightful design that works just the right way for your target audience. - Discover the developers difference.', '2019-09-17 21:49:04.000000'),
(2, 'Distinctive Features ', 'For your website to be successful, it should not only look good, it should also provide a seamless user experience for visitors. Good features can improve the performance of your website and increase your chances of success. It can also boost sales and revenue for your business. Give Brilliant Developers a chance to take your business to the next level.', '2019-09-17 21:54:00.000000'),
(3, 'Modern & Mobile Responsive Development ', 'One of the greatest challenges of responsive design is taking a content-heavy website and make it work on smaller screens. Brilliant Developers knows the techniques and philosophies behind modern responsive designs and how it should work regardless of whatever screen the site is been viewed on.', '2019-09-17 21:54:48.000000');

-- --------------------------------------------------------

--
-- Table structure for table `recentjobs`
--

CREATE TABLE `recentjobs` (
  `id` int(11) NOT NULL,
  `site` text NOT NULL,
  `description` text NOT NULL,
  `picture` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recentjobs`
--

INSERT INTO `recentjobs` (`id`, `site`, `description`, `picture`) VALUES
(1, 'http://www.sexwomanandgod.com', 'An online book site build to show case an ebook', 'sex.PNG'),
(2, 'http://www.diakrino.com', '', 'cms0.png'),
(3, 'https://www.deohub.com', '', 'des.png'),
(6, 'https://www.polizis.com', '', 'polizis.PNG'),
(7, 'https://www.polizis.com', 'Online store developed and manage by us with fully integrated card payment facility, CMS etc.', 'Capture.PNG'),
(8, 'http://www.diakrino.com', 'Beautiful website designed, developed and programmed by us for oil and gas industry.', 'diakrino.PNG'),
(9, 'https://www.sexwomanandgod.com', 'eBook site designed, developed and programmed by us.', 'sex.PNG'),
(10, 'https://frontlineinteriors.com', 'Interior decoration site and online store with fully integrated with card payment facility', 'frontline.PNG'),
(12, 'https://frontlineinteriors.net', 'Interior decoration site and online store with fully integrated with card payment facility', 'Capture.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `title2` text NOT NULL,
  `description` text NOT NULL,
  `pics` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `title2`, `description`, `pics`, `time`) VALUES
(18, 'Product Design', 'Product Design', 'The technical team at Brilliant Developers is a seasoned group of professionals who can visualize the most complex client requirements and can translate them into a simplistic and aesthetic solution â€“ We deliver a product that makes your organization the leader in its segment while carving a niche for itself in the web world.', 'design.jpg', '2019-10-19 19:18:48.058259'),
(19, 'Web-Based Apps', 'Web-Based Application and Dynamic Website', 'From multinational corporations to SMEs and startups, we contribute to the success of businesses through exceptional digital services. We create an impactful Web-Based Apps that fits your brand and industry to ensure seamless experience within a shorter time frame. We develop, upgrade, maintain and support. Whether you seek to optimise your business by automation, or open new revenue streams by creating something completely unique and new.  As Brilliant Web Developers, we help you translate your business needs into an efficient web application\r\n                 by creating beautiful and engaging digital journeys to ensure that your target audience have the very brilliant experience during their digital interaction with your organisation.', 'pic.PNG', '2019-10-19 19:20:39.862808');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `pics` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `pics`, `time`) VALUES
(3, 'Responsive and Cross Broswer Compatibility ', 'We are brillant developers, we know how internet browsers work. Between Firefox, Chrome, Safari, Opera, and Internet Explorer. We can asure you that your web page will look good and work correctly on every browser.  We understand the logic behind cross browser compatibility.', 'browsers.png', '2019-09-15 14:33:46.000000'),
(4, 'Hello, We are Brilliant Developers', ' We develop Web Bases applications with a high standard. We are Creative and Passionate, an oustanding web solution company in Nigeria. We help you imagine, design, develop & programme brilliant digital experiences that make you and your users happy. We accept the complicated.', 'iMac.png', '2019-09-15 14:36:42.000000'),
(5, 'Expand your Business with Innovative Web Solutions', ' As Brilliant Web Developers, we help you translate your business needs into an efficient web application by creating beautiful and engaging digital journeys to ensure that your target audience have the very brilliant experience during their digital interaction with your organisation.', 'screen.png', '2019-09-15 14:38:29.000000'),
(6, 'Expand your Business with Innovative Web Solutions', ' As Brilliant Web Developers, we help you translate your business needs into an efficient web application by creating beautiful and engaging digital journeys to ensure that your target audience have the very brilliant experience during their digital interaction with your organisation.', 'screen.png', '2019-09-15 15:36:27.000000');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `position` text NOT NULL,
  `twitter` text,
  `facebook` text NOT NULL,
  `instagram` text NOT NULL,
  `github` text,
  `pics` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `position`, `twitter`, `facebook`, `instagram`, `github`, `pics`, `time`) VALUES
(7, 'Ibukun Agboola', 'Senior Web Developer', '', '', '', NULL, 'IBK2.jpg', '2019-10-03 22:26:53.000000'),
(8, 'Uzo Abiaka', 'Social Media Marketing Specialist', '', '', '', NULL, 'uzo1.jpg', '2019-10-25 00:31:25.026131'),
(9, 'Glory Nwa', 'Senior Web Developer', '', 'https://web.facebook.com/GloryNwa', '', 'https://github.com/GloryNwa/', 'gil_1.jpg', '2019-10-03 23:10:19.000000'),
(10, 'Femi Dasilva', 'Digital Marketing Head', '', 'https://web.facebook.com/femi Dasilva', 'https://instagram.com/femidasilva17', '', 'pstFemi.jpg', '2019-10-25 00:25:19.429220');

-- --------------------------------------------------------

--
-- Table structure for table `testimony`
--

CREATE TABLE `testimony` (
  `id` int(11) NOT NULL,
  `testimoni` text NOT NULL,
  `name` text NOT NULL,
  `url` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimony`
--

INSERT INTO `testimony` (`id`, `testimoni`, `name`, `url`, `time`) VALUES
(2, ' If youâ€™re starting a new business or upgrading an existing site, I strongly recommend using Brilliant Developers. The developers are friendly, knowledgeable, and dedicated to producing a high quality product. They all worked very hard to create my site. They were always available to answer questions, make improvements, and provide guidance. Even after the site was completed, they continued to offer unsolicited assistance. On a scale of 1-10, I give all of them a 10.', 'Kola Agboola Founder, Polizis.', 'www.polizis.com', '2019-09-17 22:55:05.295401'),
(4, 'Brilliant developers have taken our business to the next level.              Their professional solutions continue to impress us and their knowledge has catapulted our sales.              They have created 4 different websites for our companies; all with excellent results.              I will sure use them for all my upcoming projects and recommend them!!', 'Mr Debo  General Manager, Diakrino Nigeria Ltd.', 'www.diakrino.com', '2019-10-25 00:35:04.107661'),
(5, 'Thanks for the fantastic job on our site. It was a pleasure working with Brilliant Developers. as they worked closely with us every step of the way, and we valued their creative input that exceeded our expectations.                   We are planning a couple more websites in the near future, and we will be trusting Brilliant Developers to come through for us again and again!!!                   If you are looking to get a website built or redesigned these are the go-to guys.', 'Mr Alexander Ibeh, DEOHub', 'www.deohub.com', '2019-10-24 22:33:50.139236');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `location` text NOT NULL,
  `message` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id`, `firstname`, `lastname`, `email`, `phone`, `location`, `message`, `time`) VALUES
(1, 'Glory', 'Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ajao estate', 'weekends', '2019-10-11 13:01:36.000000'),
(2, 'Glory', 'Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ajao estate', 'weekends', '2019-10-11 13:02:27.000000'),
(3, 'Glory', 'Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ajao estate', 'weekend', '2019-10-11 13:06:27.000000'),
(4, 'Glory', 'Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ajao estate', 'weekends', '2019-10-11 13:08:48.000000'),
(5, 'Glory', 'Nwa', 'glorynwa@gmail.com', '+2347068057873', 'Ajao estate', 'weekend', '2019-10-11 13:15:21.000000');

-- --------------------------------------------------------

--
-- Table structure for table `webtraining`
--

CREATE TABLE `webtraining` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `pics` text NOT NULL,
  `time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webtraining`
--

INSERT INTO `webtraining` (`id`, `description`, `pics`, `time`) VALUES
(1, 'School or private coding classes, we have got you covered, reach us today Lorem ipsum dolor sit amet, oporteat reformidans mei ut, sea simul intellegat ad. Accusata forensibus sed ne. Eu quas nemore aliquid eam. Lorem munere graeco ad eum.  Est ne prima voluptatum, ea nam scripta invidunt petentium. Has ad summo aeterno maiorum. Partiendo scriptorem pri ad, pro choro sadipscing ne, ad usu tempor deleniti. Esse animal qualisque qui id. Sea habemus quaestio delicata an', 'train.png', '2019-10-06 22:38:54.041582'),
(2, 'School or private coding classes, we have got you covered, reach us today Lorem ipsum dolor sit amet, oporteat reformidans mei ut, sea simul intellegat ad. Accusata forensibus sed ne. Eu quas nemore aliquid eam. Lorem munere graeco ad eum.  Est ne prima voluptatum, ea nam scripta invidunt petentium. Has ad summo aeterno maiorum. Partiendo scriptorem pri ad, pro choro sadipscing ne, ad usu tempor deleniti. Esse animal qualisque qui id. Sea habemus quaestio delicata an', 'train.png', '2019-10-06 22:39:00.646960'),
(3, ' The WEB DEVELOPMENT TRAINING is organise by the web programming team at Brilliant Developers Limited, it is a practical oriented training class. There will be a tutor lead section, class programming session and a project development section. Every student will be expected to complete a web project (a Computer Based Test or a Responsive Personal Resume Website or both) using the technology learnt during the training.     Student will also be thought the advance programming language in web development using database technologies and server- side scripting to bring out a dynamic web site.  At the completion of the programme, students will be familiar with higher technologies used in creating a dynamic website', 'train.png', '2019-10-30 23:49:21.509719'),
(4, ' The WEB DEVELOPMENT TRAINING is organise by the web programming team at Brilliant Developers Limited, it is a practical oriented training class. There will be a tutor lead section, class programming session and a project development section. Every student will be expected to complete a web project (a Computer Based Test or a Responsive Personal Resume Website or both) using the technology learnt during the training.     Studen will also be thought the advance programming language in web development using database technologies and server- side scripting to bring out a dynamic web site.  At the completion of the programme, students will be familiar with higher technologies used in creating a dynamic website', 'train.png', '2019-10-06 22:39:16.345858'),
(5, ' The WEB DEVELOPMENT TRAINING is organise by the web programming team at Brilliant Developers Limited, it is a practical oriented training class. There will be a tutor lead section, class programming session and a project development section. Every student will be expected to complete a web project (a Computer Based Test or a Responsive Personal Resume Website or both) using the technology learnt during the training.     Studen will also be thought the advance programming language in web development using database technologies and server- side scripting to bring out a dynamic web site.  At the completion of the programme, students will be familiar with higher technologies used in creating a dynamic website', 'train.png', '2019-10-06 22:39:22.149190');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualitydesign`
--
ALTER TABLE `qualitydesign`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recentjobs`
--
ALTER TABLE `recentjobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimony`
--
ALTER TABLE `testimony`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `webtraining`
--
ALTER TABLE `webtraining`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `qualitydesign`
--
ALTER TABLE `qualitydesign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `recentjobs`
--
ALTER TABLE `recentjobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `testimony`
--
ALTER TABLE `testimony`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `webtraining`
--
ALTER TABLE `webtraining`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
