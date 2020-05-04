-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2020 at 04:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `miniprojectdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `date` date NOT NULL,
  `time` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `text` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`date`, `time`, `title`, `text`) VALUES
('0000-00-00', '', '', ''),
('2020-05-01', '11:50:40pm', 'My first post ', 'Brain: thinking .....thinking.........thinking\r\nHand: Post :)'),
('2020-05-01', '11:54:10pm', 'test', '1. test\r\n2. test\r\n3. test\r\n4. test'),
('2020-05-01', '11:55:21pm', 'test2', 'Lets see if this works well ;)'),
('2020-05-02', '12:18:07am', 'My second post', 'testing'),
('2020-05-02', '12:19:49am', 'testing part3', 'Preview testing'),
('2020-05-02', '12:21:15am', 'testing part 4', 'Preview testing take 4'),
('2020-05-02', '12:31:56am', '', ''),
('2020-05-02', '07:14:02pm', '2019–20 coronavirus pandemic', 'The 2019–20 coronavirus pandemic is an ongoing pandemic of coronavirus disease 2019 (COVID‑19) caused by severe acute respiratory syndrome coronavirus 2 (SARS‑CoV‑2). The outbreak was identified in Wuhan, China, in December 2019.[4] The World Health Organization declared the outbreak a Public Health Emergency of International Concern on 30 January, and a pandemic on 11 March.[6][7] As of 2 May 2020, more than 3.38 million cases of COVID-19 have been reported in 187 countries and territories, resulting in more than 239,000 deaths. More than 1.06 million people have recovered.[5]'),
('2020-05-02', '07:15:07pm', 'covid 19 part 2 ', 'The virus is primarily spread between people during close contact,[c] often via small droplets produced by coughing,[d] sneezing, or talking.[8][9][11] The droplets usually fall to the ground or onto surfaces rather than remaining in the air over long distances.[8] People may also become infected by touching a contaminated surface and then touching their face.[8][9] On surfaces, the amount of virus declines over time until it is insufficient to remain infectious, but it may be detected for hours or days.[8][11][12][13]\r\n\r\n\r\n It is most contagious during the first three days after the onset of symptoms, although spread may be possible before symptoms appear and in later stages of the disease.[14]\r\n\r\n\r\nCommon symptoms include fever, cough, fatigue, shortness of breath, and loss of smell.[8][15][16] Complications may include pneumonia and acute respiratory distress syndrome.[17] The time from exposure to onset of symptoms is typically around five days, but may range from two to fourteen days.[18][19] There is no known vaccine or specific antiviral treatment.[8] Primary treatment is symptomatic and supportive therapy.[20]'),
('2020-05-02', '07:21:06', 'test idk what no. anymore', 'testing ...............!:;;;;;;;;;;;;;;;;'),
('2020-05-02', '19:24:09', 'hello again', 'any updates?\r\n'),
('2020-05-03', '02:29:35', 'My name is hehehe', 'Lets talk about corona......how long do you think it will last?'),
('2020-05-03', '02:46:33', 'adding post ', 'test for oder thing'),
('2020-05-03', '02:46:49', 'adding post ', 'test for oder thing'),
('2020-05-03', '03:25:29', 'blah blah black sheep', 'have you any wool ?? ^ ^'),
('2020-05-03', '14:47:53', 'test ', 'test of posting'),
('2020-05-03', '14:52:44', 'sdfghyuiolkm,nbhgftrew', 'xdcfgtyhujikmnbvcxz'),
('2020-05-03', '14:59:35', '', 'hope \' this works now \''),
('2020-05-03', '15:00:18', 'testing for \'\'\'', 'hope this \' works now \'\''),
('2020-05-03', '15:01:05', 'lets see \"\"', 'NOw does \"this \" work?'),
('2020-05-03', '15:01:22', 'lalalala \"', 'aklhaksh\"'),
('2020-05-03', '15:03:19', 'testing for enter', 'here \r\nis \r\nthe \r\ntest.....\r\n..........................'),
('2020-05-03', '15:06:40', 'testing for enter hope it works', 'Here\r\nis \r\nthe \r\ntest'),
('2020-05-03', '15:07:19', 'test again', 'test\r<br />for\r<br />enter\r<br />............'),
('2020-05-03', '15:08:35', 'Pandemic', 'A pandemic (from Greek πᾶν, pan, \"all\" and δῆμος, demos, \"people\") is an epidemic of disease that has spread across a large region, for instance multiple continents or worldwide, affecting a substantial number of people.\r<br /> A widespread endemic disease with a stable number of infected people is not a pandemic.\r<br /> Widespread endemic diseases with a stable number of infected people such as recurrences of seasonal influenza are generally excluded as they occur simultaneously in large regions of the globe rather than being spread worldwide.'),
('2020-05-03', '17:06:34', 'One of final tests', 'Hello new view page :DDDDDDD');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
