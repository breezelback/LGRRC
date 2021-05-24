-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 03:33 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_lgrrc`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_about`
--

CREATE TABLE `tbl_about` (
  `id` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_about`
--

INSERT INTO `tbl_about` (`id`, `position`, `imageName`, `dateUploaded`) VALUES
(17, 1, '17_1621499952744.PNG', '2021-05-20 16:39:12'),
(18, 2, '18_1621499962256.PNG', '2021-05-20 16:39:22'),
(19, 3, '19_1621499969633.PNG', '2021-05-20 16:39:29'),
(20, 4, '20_1621499976528.PNG', '2021-05-20 16:39:36'),
(21, 5, '21_1621499983544.PNG', '2021-05-20 16:39:43'),
(22, 6, '22_1621499990711.PNG', '2021-05-20 16:39:50'),
(23, 7, '23_1621499997743.PNG', '2021-05-20 16:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_books`
--

CREATE TABLE `tbl_books` (
  `id` int(11) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `bookAuthor` varchar(255) NOT NULL,
  `bookDesc` longtext NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_books`
--

INSERT INTO `tbl_books` (`id`, `bookName`, `bookAuthor`, `bookDesc`, `imageName`, `dateUploaded`, `status`) VALUES
(21, 'The fault in our stars', 'Ed Sheeeran', 'Outside the rings of Saturn, Pati Lynch commanded a prison ship mining ice. Her crew mutinied, they tried to kill her, and she was the last one left standing.  Now, she stands trial for their murder.', '21_1612163151348.pdf', '2021-02-01 15:05:51', 0),
(22, 'Loss of Reason', 'Leonardo Da Vinci', 'fdsfa fasdfasd fasdfasd fasdfas', '22_1612163261384.epub', '2021-02-01 15:07:41', 0),
(23, '1', '1', '1', '23_1612166197966.epub', '2021-02-01 15:56:38', 0),
(24, '1', 'Tom Briggs', 'Outside the rings of Saturn, Pati Lynch commanded a prison ship mining ice. Her crew mutinied, they tried to kill her, and she was the last one left standing.  Now, she stands trial for their murder.', '24_1612166264967.epub', '2021-02-01 15:57:45', 0),
(25, 'The Boy Who Fell from the Sky', '1', 'The world is falling apart in 2055. Another flood has devastated London and it’s the eve of the First Space War. With the city locked down, sixteen-year-old Mathew Erlang is confined to his house with only his cat, his robot and his holographic dragons for company.', '25_1612166310083.epub', '2021-02-01 15:58:30', 0),
(28, 'Wuthering Heights', 'Emily Brontë', 'Emily Brontë\'s only novel, this tale portrays Catherine and Heathcliff, their all-encompassing love for one another, and how this unresolved passion eventually destroys them both, leading Heathcliff to shun and abuse society. First published in 1847 under the pseudonym Ellis Bell, Wuthering Heights is considered to be a classic of English literature.', '28_1612244728844.epub', '2021-02-02 13:45:28', 0),
(29, 'Docx Book Sample', 'Jeck Castillo', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '29_1612256760035.docx', '2021-02-02 17:06:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_downloads`
--

CREATE TABLE `tbl_downloads` (
  `id` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `downloaderId` int(11) NOT NULL,
  `dateDownloaded` datetime NOT NULL,
  `borrowerId` varchar(255) NOT NULL,
  `borrowerName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_downloads`
--

INSERT INTO `tbl_downloads` (`id`, `bookId`, `downloaderId`, `dateDownloaded`, `borrowerId`, `borrowerName`) VALUES
(1, 17, 7, '2021-04-07 01:57:13', '7-995', 'Zynell Mangilin'),
(2, 0, 0, '2021-04-19 21:25:05', '', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert`
--

CREATE TABLE `tbl_expert` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_expert`
--

INSERT INTO `tbl_expert` (`id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded`) VALUES
(1, 'Abe A Suministrado', 'VAWC, Katarungang Pambarangay, CDP / CDRA, Local Legislation and Parliamentary Procedure, CBMS Module 1-2', '', 'LGOO VI', 'aasuministrado@gmail.com', 'D7C7F79E-9263-4117-8088-7C4ED25FD8A4.jpeg', '0000-00-00 00:00:00'),
(2, 'Abe Gail B Beltran', 'CDP / CDRA, CBMS Module 1-4, Business Permits and Licensing', '', 'LGOO VI', 'noveleta.dilgr4acavite@gmail.com', 'PROFILE.jpg', '0000-00-00 00:00:00'),
(3, 'Adriann O Plasuelo', 'Business Permits and Licensing', 'Licensed Environmental Planner', 'LGOO IV', 'adigangzta@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(4, 'Albert H Sandoval', 'Katarungang Pambarangay', '', 'LGOO VI', 'aldrich28.as@gmail.com', '6C18D2B1-53B9-4139-819C-494B26679729.jpeg', '0000-00-00 00:00:00'),
(5, 'Alel P Ditalo', 'CBMS Module 1', '', 'LGOO VI', 'alelydilgquezon@gmail.com', 'IMG_20200612_222832.jpg', '0000-00-00 00:00:00'),
(6, 'Ana Shiela N Dalida', 'CBDRRM, L!sto, CBMS Module 1-2, CBDRRM, L!sto', 'CBDRRM ToT Certificate', 'LGOO II', 'anasheiladalida@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(7, 'Angelic M Sagun', 'Katarungang Pambarangay', '', 'LGOO VI', 'angelicamsagun@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(8, 'Angelito Cortuna', 'Local Road Asset Management', '', 'LGOO II', 'angelitocortuna@yahoo.com', 'Agie ID.jpg', '0000-00-00 00:00:00'),
(9, 'Anna Maureen D Gumboc', 'CBMS Module 1 , CBMS Module 1 , VAWC, L!sto', '', 'LGOO IV', 'maudorneo24@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(10, 'Annalyn Marie M Angulo', 'GAD, VAWC, BCPC, Local Planning and Budgeting, CDP / CDRA, GAD, VAWC, BCPC', '', 'LGOO VI', '', 'ANGULO-ANNALYN MARIE.jpg', '0000-00-00 00:00:00'),
(11, 'Anne Kimberly P Babaan', 'POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, GAD, CBMS Module 1-4', ', CBMS National Trainer ? Module 1-3', 'LGOO VI', 'naic2.dilgr4acavite@gmail.com', 'ANNE KIMBERLY BABAAN_PIC.jpg', '0000-00-00 00:00:00'),
(12, 'April F Banez', 'CBMS Module 1-3', 'Accredited Trainer- CBMS Module 2', 'LGOO VI', 'abril424@gmail.com', 'ID .jpg', '0000-00-00 00:00:00'),
(13, 'Aprilyn L Mayrong ', 'CDP/CDRA', '', 'LGOO VI', 'almayrong@dilg.gov.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(14, 'Art Brian G Rubio', 'EO 70, ECLIP, POC, EO 70, ECLIP', '', 'LGOO II', 'dilg4a.elcac@gmail.com', 'Art Brian Rubio Pic.jpg', '0000-00-00 00:00:00'),
(15, 'Atty Neil S Aranilla', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonseniorstaff@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(16, 'Batilde Agnes L Cilindro', 'BCPC', '', 'LGOO VI', 'cilindroagnes@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(17, 'Belinda A Valenzuela', 'GAD, VAWC, BCPC, Revenue Code/Ordinance, Project Development and Management, POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, GAD, VAWC, BCPC, Financial Administration', '', 'LGOO VII/Cluster Head', 'clustera.dilgcavite2@gmail.com', 'BELINDA VALENZUELA_PIC.jpg', '0000-00-00 00:00:00'),
(18, 'Bernar C Castillo', 'Environmental Laws', '', 'LGOO VI', 'caintadilg@gmail.com', 'CASTILLO-BERNARD.jpg', '0000-00-00 00:00:00'),
(19, 'Bryan M Batan', 'Local Legislation and Parliamentary Procedure, Katarungang Pambarangay, CBDRRM', '', 'LGOO V', 'bryandgreat84@yahoo.com', 'BATAN-BRYAN.jpg', '0000-00-00 00:00:00'),
(20, 'Carl R Reyes', 'Barangay Planning and Budgeting, Local Legislation & Parliamentary Procedures, Katarungang Pambarangay', '', 'LGOO VI', 'dilgguinayanganquezonph@gmail.com', 'My Picture.jpg', '0000-00-00 00:00:00'),
(21, 'Celi C Francia', 'CDP, CDRA, e-LCCAP, Project Monitoring and Evaluation, CDP, CDRA, e-LCCAP', ', Licensed EnP', 'LGOO VI', 'dilg4a.bauanbatangas@gmail.com', 'Cells 2x2 size.jpg', '0000-00-00 00:00:00'),
(22, 'Celia A Martal', 'Local Planning and Budgeting, CDP / CDRA, CBMS Module 1', '', 'LGOO VII', 'ailecmartal@yahoo.com', 'CELIA MARTAL_PIC.jpg', '0000-00-00 00:00:00'),
(23, 'Christi A Arcega', 'Katarungang Pambarangay', '', 'LGOO VI', 'arcegachristie@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(24, 'Christine B Sierra', 'CBMS Module 1 & 3', '', 'LGOO VI', 'indang.dilgr4acavite@gmail.com', 'CHRISTINE B SIERRA_PIC.jpg', '0000-00-00 00:00:00'),
(25, 'Clario Paz-Tanghal', 'Development Planning ( Poverty Reduction; Resettlement Governance)', '', 'LGOO VI', 'clarion_paz@yahoo.com.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(26, 'Clarion Paz ? Tanghal', 'Policy Development and Analysis', '', 'LGOO VI', 'clarion_paz@yahoo.com.ph', '103870288_279170170120985_7161450704646350710_n.jpg', '0000-00-00 00:00:00'),
(27, 'Desmari Francia M Mendoza-Parilla', 'CBMS Module 1-3', 'ACCREDITED CBMS MODULE 1 TRAINOR', 'LGOO VI', 'dilgsannicolas@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(28, 'Dexte P Fedeliz', 'Youth Empowerment, Local Peace Engagement (Peace and Order), Local Legislation, CDP/CDRA, Katarungang Pambarangay, Revenue Generation and Financial Administration, DRRM', '', 'LGOO VI', 'dpfedeliz@dilg.gov.ph', '1.jpg', '0000-00-00 00:00:00'),
(29, 'Diosdad M Rosa', 'Revenue Code / Ordinance, Local Legislation and Parliamentary Procedure', '', 'LGOO VI', 'diosdadolarosa@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(30, 'Djanin M Dacillo', 'Local Planning and Budgeting, Financial Administration', '', 'LGOO V', 'djaninedacillo@gmail.com', '20191118_173546.jpg', '0000-00-00 00:00:00'),
(31, 'Dominado A Nobleza', 'Incident Command System, CBMS Module 1-4', '', 'LGOO VI', 'danoblezajr@dilg.gov.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(32, 'Don Ayer A Abrazaldo', 'Revenue , Peace & Order/ Conflict-Sensitivity, POPS, Local Legislation, Codification of General Ordinances, LCCAP, CDP, Local Plan and Budget, Katarungang Pambarangay, ICS 1-4, CBDRRM, HEMS, Risk Disaster Needs Assessment, CORE, Barangay Tanod Skills Enha', '', 'LGOO VII', 'daabrazaldo@dilg.gov.ph', 'IMG_20200612_202520.jpg', '0000-00-00 00:00:00'),
(33, 'Esther B Dator', 'Revenue Code / Ordinance, Local Legislation and Parliamentary Procedure, Local Planning and Budgeting, CDP / CDRA, Katarungang Pambarangay, BCPC', '', 'LGOO VI', 'estherbdator@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(34, 'Evangeline Rose C del Moro', 'Katarungang Pambarangay, VAWC', '', 'LGOO V', 'rosa.dilg.12@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(35, 'F B Roales', 'GAD, BCPC, Local Planning and Budgeting, CDP / CDRA, Katarungang Pambarangay, GAD, BCPC', '', 'LGOO VI', 'fepotroales@gmail.com', 'IMG_20200613_111351.jpg', '0000-00-00 00:00:00'),
(36, 'Fatima Nona M Alon', 'GAD, VAWC, BCPC, CDP / CDRA, Local Planning and Budgeting, Katarungang Pambarangay, GAD, VAWC, BCPC, CBMS Module 1-4', ', CBMS Accredited Trainor - Module 1', 'LGOO VI', 'fatimanonaalon@gmail.com', '055DDD44-B78C-4788-990D-D883953C2DD2.jpeg', '0000-00-00 00:00:00'),
(37, 'Fe Monalie O Abarca', 'Business Permits and Licensing', '', 'LGOO V', 'mlgoocalauan05@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(38, 'Felicidad B Cuadro ', 'POC and Drug Related Topics, CBMS Module 1', '', 'LGOO VI', 'dilg4a.bauanbatangas@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(39, 'Florabel M Ingel', 'Parliamentary Procedure, Basic ICS', '', 'LGOO VI', 'mlgoopakil1@gmail.com', 'received_10209183926527612.jpeg', '0000-00-00 00:00:00'),
(40, 'Franci B Templo', 'CDP/CDRA', 'CDP Coach Certification', 'LGOO VI', 'fbtemplo2017@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(41, 'Gerard C Gabin', 'Barangay Taxation, Barangay Governance, POPS Planning, Codification of General Ordinances, Local Legislation, CDP, VAWC', '', 'LGOO VII', 'gc.gabin1965@gmail.com', '0CC420E1-1F82-47C4-A072-8D14464295AE.jpeg', '0000-00-00 00:00:00'),
(42, 'Gloria Paz O Toledo', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'wingtoledo@yahoo.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(43, 'Hannah Krystel R Castro', 'GAD Planning and Budgeting', '', 'LGOO II', 'hannahkrystelcastro@gmail.com', 'kitzi 2x2.jpg', '0000-00-00 00:00:00'),
(44, 'James Carl F Torres', 'CBMS Module 1 & 3', '', 'LGOO II', 'jcftorres@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(45, 'Janica Zandra V Mendoza', 'CBMS Module 1-2', 'CBMS National Trainer - Module 1', 'LGOO II', 'nicavergara2719@gmail.com', 'JANICA ZANDRA MENDOZA_PIC.jpg', '0000-00-00 00:00:00'),
(46, 'Jared S Baldemeca', 'Project Development and Management, Codification of Ordinances, Local Legislation and Parliamentary Procedure, CDP / CDRA, Local Planning and Budgeting, Katarungang Pambarangay, CBDRRM, Incident Command System', ', TOT National Training , ICS 1st Level Completion Certificate', 'LGOO VI', '', 'inbound1335700349.jpg', '0000-00-00 00:00:00'),
(47, 'Jay-Ar T Beltran', 'Sangguniang Kabataan, Leadership, Knowledge Management, EODB', '', 'LGOO VI', 'jtbeltran@dilg.gov.ph', 'JAY-AR T BELTRAN PIC.jpg', '0000-00-00 00:00:00'),
(48, 'Jayson L Chavez', 'Incident Command System, Environmental Laws, CBDRRM, Contingency Plan Formulation', '', 'LGOO VI', '', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(49, 'Jefre R Gamban', 'CDP, R.A. 9003, CBDRRM', ', Registered Civil Engineer', 'LGOO II', 'jefgamban52@gmail.com', 'Gamban, Jefrey Romero.jpg', '0000-00-00 00:00:00'),
(50, 'Jennifer O Zaide', 'Project Development and Management', '', 'LGOO VI', 'mlgoosiniloan2019@gmail.com', 'ID Photo.jpg', '0000-00-00 00:00:00'),
(51, 'Jennifer S Quirante', 'Local Planning and Budgeting, Katarungang Pambarangay, GAD, VAWC, BCPC', '', 'LGOO VI', 'jenniferquirante.dilg@gmail.com', 'IMG_20200612_112231.jpg', '0000-00-00 00:00:00'),
(52, 'Jermiluz Romano De Castro', 'CDP/ CDRA', '', 'LGOO VI', 'jermiluz_decastro@yahoo.com', 'jdc.jpg', '0000-00-00 00:00:00'),
(53, 'Jerome M Lingan', 'CBMS Module 1 & 3', '', 'LGOO VI', 'alfonso.dilgr4acavite@gmail.com', 'PIC jml fas.jpg', '0000-00-00 00:00:00'),
(54, 'Jessa Marie S Mendoza', 'Results-based Monitoring and Evaluation (RBME), CDP/CDRA, DRR-CCA, CBMS Module 1', ', National Accredited Trainer', 'LGOO VI', 'jessa18.mendoza@gmail.com', 'Jessa Marie S. Mendoza 1 (2).JPG', '0000-00-00 00:00:00'),
(55, 'Jill Lovella J Abrigo', 'CBMS Module 1', '', 'LGOO IV', 'dilg4a.lgmed@gmail.com', 'Jill Lovella J. Abrigo pic.jpg', '0000-00-00 00:00:00'),
(56, 'Jinkee C Jinke C Advento', 'GAD Plan and Budget Formulation', '', 'LGOO V', 'jinkee.advento@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(57, 'Jocelyn L Rodil', 'KP/LTIA/Local Legislation and Parliamentary Procedures', '', 'LGOO VI', 'jocelyn. rodil1959@gmail.com', '', '0000-00-00 00:00:00'),
(58, 'John Joseph B Vasquez', 'Monitoring and Evaluation of Projects, CDP, CapDev Agenda, DRRM, MDM', '', 'LGOO III', 'vasquezjohnjoseph@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(59, 'Jonalyn Cate V Magcayang', 'Project Development and Management, CLJIP (Comperehnsive Local Juvenile Intervention Plan), GAD', '', 'LGOO V', 'jcatevilla.dilg4a@gmail.com', 'IMG_20200812_101934.jpg', '0000-00-00 00:00:00'),
(60, 'Jonas Emmanuel A Fajarda', 'Basic ICS, Management of the Dead and Missing, Post-Disaster Needs Assessment', 'Certification', 'LGOO II', 'fajarda.jonas2018@gmail.com', 'Jonas A. Fajarda Pic.jpg', '0000-00-00 00:00:00'),
(61, 'Joseph Ryan V Geronimo', 'Monitoring & Evaluation, Peace and Order Programs/Conflict-Sensitivity and Peace Promotion/POPS Planning, Codification Of General Ordinances, Local Development Planning (CDP/ELA/CapDev), CDRA, LGU-Public Financial Management (LGU-PFM), Local Economic Deve', 'Member, PIEP-Laguna Chapter (Project Development Committee), Registered Agrculturist, , Member, PIEP-Laguna Chapter (Project Development Committee), Member, Philippine Institute of Environmental Planners (PIEP) , Licensed Environmental Planner, Member, Ph', 'LGOO VI', 'cavitecity2.dilgr4acavite@gmail.com', 'JOSEPH-RYAN-GERONIMO_PIC.png', '0000-00-00 00:00:00'),
(62, 'Josephine S Dela Rosa', 'Lupong Tagapamayapa Incentives Awards, GAD, LCPC, CFLGA', '', 'LGOO V', 'jsdelarosa.dilg@gmail.com', 'JOSEPHINE DELA ROSA_PIC.jpg', '0000-00-00 00:00:00'),
(63, 'Joyce A Saavedra', 'POPS Plan, GAD Planning and Budgeting', '', 'LGOO III', 'joycesaavedra09@gmail.com', 'new pic.jpg', '0000-00-00 00:00:00'),
(64, 'Juan Paolo S Brosas', 'Codification of Ordinances, CDP / CDRA, Katarungang Pambarangay', '', 'LGOO VI', 'mlgookalayaa2@gmail.com', 'IMG_20210318_105201.png', '0000-00-00 00:00:00'),
(65, 'Juel Fatima M Dijan-Trinidad', 'CDP / CDRA', '', 'LGOO VII', 'dilgbatangas.c2@gmail.com', 'Fatti crop 2.jpg', '0000-00-00 00:00:00'),
(66, 'Karen C Aquino', 'Incident Command System', '', 'LGOO VI', 'kcaquino@dilg.gov.ph ', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(67, 'Kermith Gilbert F Fadri', 'CBDRRM, CBMS Module 1 & 3', '', 'LGOO VI', 'drealkg@gmail.com', '20200814_172159.jpg', '0000-00-00 00:00:00'),
(68, 'Kharl Kris S Pinol', 'CBMS Module 1-3, CDP / CDRA, Incident Command System', '', 'LGOO VI', 'kharlpinol@gmail.com', 'Kenny2.jpg', '0000-00-00 00:00:00'),
(69, 'Kitch Karianne R Gogolin', 'LGRRC', '', 'LGOO II', 'kkrgogolin@gmail.com', 'kitch_cropped_dilg.jpg', '0000-00-00 00:00:00'),
(70, 'Lauric D Herradura', 'POC and Drug Related Topics', '', 'LGOO II', 'auricedalope08@gmail.com', 'HERRADURA-LAURICE.jpg', '0000-00-00 00:00:00'),
(71, 'Leandro S Dancil', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'mlgoovictoria02@gmail.com', 'Screenshot_20200613-065700_Gallery.jpg', '0000-00-00 00:00:00'),
(72, 'Lenie R Bautista', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'clgoosanpedro1@gmail.com', '79304640_3018546774841913_1259179068524331008_n.jpg', '0000-00-00 00:00:00'),
(73, 'Loida V Vista', 'Community Development, Codification of Ordinances, DRRM, CDP/CDRA', ', MSCD Graduate for Community Development field expertise', 'LGOO VI', 'mlgoopaete5@gmail.com', 'profile pic_FAS_n.jpg', '0000-00-00 00:00:00'),
(74, 'Lorn M Silva', 'Katarungang Pambarangay', '', 'LGOO VI', 'lornasilva57@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(75, 'Luningning C Esquillo', 'Local Legislation and Parliamentary Procedure, Local Planning and Budgeting, Katarungang Pambarangay, BCPC', '', 'LGOO VI', 'twinkle_cor@yahoo.com', 'inbound81402929314647382.jpg', '0000-00-00 00:00:00'),
(76, 'Marcial A Juangco', 'Revenue Code/Ordinance, Codification of Ordinances, Local Legislation and Parliamentary Procedure, Katarungang Pambarangay', '', 'LGOO VII', 'clusterc.dilgr4acavite@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(77, 'Maria Alma L Barrientos', 'Katarungang Pambarangay, GAD', '', 'LGOO VI', 'clgoosanpablo5@gmail.com', 'inbound5474051770866688859.jpg', '0000-00-00 00:00:00'),
(78, 'Maria Aurora A Robles', 'Katarungang Pambarangay, Financial Administration', '', 'LGOO VI', 'dilgaurra@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(79, 'Maria Isabel C Llanto', 'Katarungang Pambarangay, CBMS Module 1 & 3', '', 'LGOO VI', 'miocoronallanto@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(80, 'Maria Kerstine E Esber-Azucena', 'BCPC', '', 'LGOO V', 'mlgooalaminos22@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(81, 'Maria Lorilyn Valenzuela-Manrique', 'Revenue Code/ Ordinance, POC and Drug Related Topics, Codification of Ordinances, Katarungang Pambarangay, GAD, VAWC, BCPC, Financial Administration', '', 'LGOO VII', 'dilglaguna.clustera3@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(82, 'Maria May M Ambata', 'POPS Planning, POC, ADAC', '', 'LGOO II', 'mrsambata2011@gmail.com', '2x2.jpg', '0000-00-00 00:00:00'),
(83, 'Maria Normita H Arceo', 'POPS Planning and Budgeting', '', 'LGOO VI', 'manormitaarceo@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(84, 'Maricar F Llarena', 'Katarungang Pambarangay', '', 'LGOO VI', 'liliwmlgoo2@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(85, 'Marilen Grace T Abejero', 'Peace and Order and Drug-related Topics, Katarungan Pambarangay, CBDRRM', '', 'LGOO VI', 'mlgoopila1@gmail.com', 'IMG_20200612_131229.jpg', '0000-00-00 00:00:00'),
(86, 'Marren E Juangco', 'POC, ADAC, CDP / CDRA, CBMS Module 1', '', 'LGOO III', 'juangcomarrenE@gmail.com', 'MARREN JUANGCO.jpg', '0000-00-00 00:00:00'),
(87, 'Mary Grace M Saturno', 'Business Permits and Licensing, Local Economic Development (LED)', '', 'LGOO III', 'ghiesaturno.dilg@gmail.com', 'ghie pic v2.jpg', '0000-00-00 00:00:00'),
(88, 'Mary Irene O Alvarez', 'Katarungang Pambarangay', '', 'LGOO VI', 'dilg.tuy@gmail.com', 'mimmo.jpg', '0000-00-00 00:00:00'),
(89, 'Mary Janice B Sobremonte', 'Project Development and Management, EODB Related Topics (BPLS,BPCO,Rationalization of Fees and Charges, PPP, LED,RS4LG,Reengineering', '', 'LGOO V', 'msbalahadia@dilg.gov.ph', 'mj.jpg', '0000-00-00 00:00:00'),
(90, 'Mary Roxanne T Vicedo', 'Local Development Planning (CDP, BDP, CapDev), CBMS Module 1-3', ', CBMS National Trainer - Module 1-3', 'LGOO II', 'roxannevicedo52@gmail.com', 'img005.jpg', '0000-00-00 00:00:00'),
(91, 'Maybelline M Monteiro', 'DILG Intranet, CBMS Module 1-3', '', 'IT Officer I', 'mmmonteiro@dilg.gov.ph', 'Maybelline M. Monteiro Pic.jpg', '0000-00-00 00:00:00'),
(92, 'Melchor Eugenio G Doce', 'Local Legislation, Development Planning and Budgeting, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonagdangan2@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(93, 'Melissa Mae C Marero', 'Local Legislation and Parliamentary Procedure, CDP, Katarungang Pambarangay, GAD', '', 'LGOO II', 'melissa.dilgcavite@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(94, 'Melody M Barairo', 'Community Mobilization, Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'clgoosantarosa1@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(95, 'Michelle M Garcia', 'POC and Drug Related Topics, CDP / CDRA, Local Planning, Barangay Tanod, KP, VAWC, BCPC, CBMS Module 1-4', ', CBMS Module 1-3 National Accredited', 'LGOO VI', 'clgoosanpablo.city@gmail.com', 'inbound8718134334173652513.jpg', '0000-00-00 00:00:00'),
(96, 'Michiko R Escalante', 'CBDRP, other POC and anti-drug related topics, Katarungang Pambarangay, ICS, PSCP, RCSP, EO 70, LCCAP, CDRA, LDRRMP, Contingency Planning, Local Rehabilitation Planning, CBDRMM, Emergency Operations Center Training, Risk Disaster Needs Assessment', 'ICS Cadre, , Environmental Planner', 'LGOO VI', 'mlgoolosbanos2@gmail.com', 'Michiko R. Escalante Pic.jpg', '0000-00-00 00:00:00'),
(97, 'Milagro H Rosal', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'dilgmaubanquezon@gmail.com', 'MHROSAL.jpg', '0000-00-00 00:00:00'),
(98, 'Milcha C Espedillon', 'CBMS Module 1', '', 'LGOO VI', 'mlgoorizal2@gmail.com', '95079531_231509424856497_6652149449462120448_n.jpg', '0000-00-00 00:00:00'),
(100, 'Monette S Landicho', 'Basic Policy Process', '', 'LGOO III', 'dilg4a.mslandicho@gmail.com', '2x2 MSL.jpg', '0000-00-00 00:00:00'),
(101, 'Myra Carmina Q Arcelo', 'Local Incentives and Investment Code Formulation, Local Planning and Budgeting, GAD', '', 'LGOO VI', 'clgoocalamba1@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(102, 'Nencit N Costelo', 'CDP/ CDRA', '', 'LGOO VII', 'ngncostelo2018@gmail.com', 'nency id pic.jpg', '0000-00-00 00:00:00'),
(103, 'Nerissa G Contreras', 'Project Development and Management, POC and Drug Related Topics, CDP / CDRA, CBDRRM', '', 'LGOO VII', 'dilgbatangas.c3@gmail.com', 'neri id pix.jpg', '0000-00-00 00:00:00'),
(104, 'Ni¤a Norisa C Maranga', 'EODB Related Topics (BPLS, BPCO, RR4LGU, Rationalization of Fees and Charges), Solid Waste Management, LDRRMP', '', 'LGOO II', 'naimaranga@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(105, 'Noe P Magsino', 'CBMS Module 1-2, GAD, L!sto', '', 'LGOO VI', 'dilgnoel83@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(106, 'Noem M Pelaez', 'Codification of General Ordinances, Katarungang Pambarangay', '', 'LGOO VI', 'dilgpagbilaoquezon@gmail.com', 'IMG20200129161315.jpg', '0000-00-00 00:00:00'),
(107, 'Odessa L Tan', 'CDP/CDRA', '', 'LGOO VI', 'oltan@dilg.gov.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(108, 'Oliv Dorado-Esquivel', 'Local Legislation and Parliamentary Procedure', '', 'LGOO VI', 'mlgoonagcarlan5@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(109, 'Olive R Montefalcon', 'CDP / CDRA, Business Permits and Licensing', '', 'LGOO VI', 'sanmateodilg@gmail.com', '20200705_082449.png', '0000-00-00 00:00:00'),
(110, 'Olivo Dorado-Esquivel', 'Katarungang Pambarangay', '', 'LGOO VI', 'mlgoonagcarlan5@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(111, 'Pedryan Cris M Mendoza', 'BDP, CBDRRM, MDM, CBMS 2-4', ', CBMS Module 2 Accredited Trainer', 'LGOO V', 'pmontales@gmail.com', 'PEDRYAN CRIS M MENDOZA PIC.jpg', '0000-00-00 00:00:00'),
(112, 'Phoenix Grant M Teodoro', 'CBMS Module 1', '', 'LGOO VI', 'phoenix03_grant@yahoo.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(113, 'Pierre Vladimir T Palogan', 'CBMS Module 1, Local Legislation and Parliamentary Procedure, CDP / CDRA, CBDRRM', '', 'LGOO VI', 'dilg4a.quezoncluster1.real@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(114, 'Quenni C Malleon', 'Codification of Ordinances, Katarungang Pambarangay', ', Basic ICS', 'LGOO VI', 'qcmalleon@gmail.com', 'AD9DCB73-C9C4-4EC2-842D-1BFA8643A2C7.jpeg', '0000-00-00 00:00:00'),
(115, 'Ray T Rublico', 'CBMS Module 1-3', '', 'LGOO VI', 'rtrublico@gmail.com', 'ODTR pic.jpg', '0000-00-00 00:00:00'),
(116, 'Raymond Joseph B Paraiso', 'BDP, LGRRC, RCSP, DRRM', ', Registered Civil Engineer', 'LGOO II', 'rbparaiso@up.edu.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(117, 'Reginaldo S Revilla', 'Revenue Code/Ordinance, Project Development and Management, POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, Business Permits and Licensing, CBMS Module 1-4', ', CBMS National Trainer ? Module 1', 'LGOO VI', 'carmona.dilg4acavite@gmail.com', 'REG REVILLA 4.jpg', '0000-00-00 00:00:00'),
(118, 'Renz Harry M Toledo', 'GAD Plan & Budget Formulation - PCMBs', '', 'LGOO III', 'hrytld.dilg@gmail.com', 'For ID 2x2.jpg', '0000-00-00 00:00:00'),
(119, 'Reuben Joseph M Justo', 'CDP / CDRA, CBMS Module 1-2', '', 'LGOO VI', 'rmjusto@dilg.gov.ph', 'RJ.png', '0000-00-00 00:00:00'),
(120, 'Rhyianne L Mejico', 'Local Development Planning, Katarungang Pambarangay', '', 'LGOO V', 'rhyiannemejico@gmail.com', 'IMG_0076.JPG', '0000-00-00 00:00:00'),
(121, 'Riel John R Urriquia', 'Project Development Management, Katarungang Pambarangay', '', 'LGOO VI', 'mlgoopangil2021@gmail.com', 'IMG_20200212_194855_836.jpg', '0000-00-00 00:00:00'),
(122, 'Rizzalie Joy S Ebreo', 'Constitutional Reform, Barangay Tanod Skills Enhancement', 'Certification', 'LGOO II', 'rizzaliejoyebreo12@gmail.com', '75580336_10215276630970650_1894362640923230208_o.jpg', '0000-00-00 00:00:00'),
(123, 'Robinso G Maac', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonsannarciso@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(124, 'Rodaly A Macarandang', 'CDP/ CDRA, Katarungang Pambarangay, CBMS Module 1-4', '', 'LGOO VI', 'ramacarandang@dilg.gov.ph', 'fas pic.jpg', '0000-00-00 00:00:00'),
(125, 'Rodel S Gamban', 'Katarungang Pambarangay, CBMS Module 1', 'Certification', 'LGOO VI', 'cavg03032017@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(126, 'Ronald A Mojica ', 'Local Legislation, Katarungang Pambarangay, Local Economic Enterprise Development (LEED)', '', 'LGOO VI', 'ronald888mojica@gmail.com', 'Ronald James B. Guerrero.png', '0000-00-00 00:00:00'),
(127, 'Rosely A Mercado', 'Codification of Ordinances', 'Attended Trainors Training on Codification of General Ordinance (COGO)', 'LGOO VI', 'dilgcuenca@gmail.com', 'CFA0C2F6-AE29-476E-91A1-F6F9E8FF6C04.jpeg', '0000-00-00 00:00:00'),
(128, 'Rowen P Alviar', 'Lupong Tagapamayapa Incentive Awards, Revenue Code and Barangay Governance', '', 'LGOO VI', 'sanantoniodilg@gmail.com', 'weng.jpg', '0000-00-00 00:00:00'),
(129, 'Ryann Jay B Estrada', 'GAD Planning and Budgeting', '', 'LGOO VI', 'mlgoosantamaria2@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(130, 'Sheena Mistee M Alegre', 'Barangay Tanod Skills Enhancement, LTIA, ADAC, CDP, Katarungang Pambarangay', '', 'LGOO II', 'dilgquezonlgmes@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(131, 'Sherly A O¤ate-Resurreccion', 'GAD', '', 'LGOO V', 'sherlynonate29@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(132, 'Shiel O Mundo', 'Barangay Governance & Revenue Code', '', 'LGOO VI', 'dilgquezondolores@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(133, 'Soni R Matanguihan', 'Barangay Taxation, Codification of General Ordinances, Local Planning and Budgeting, CDP/CDRA, Katarungang Pambarangay, GAD', '', 'LGOO VI', 'dilgquezonunisan2@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(134, 'Teodorica D Castillo', 'BCPC', '', 'LGOO VI', 'castilloteodorica@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(135, 'Thelm T Benabon', 'CDP, Katarungang Pambarangay, GAD Plan and Budget', 'TOT Certificate, Certificate of Participation and Letter of Review for GPB', 'LGOO III', 'dilgquezonplanning@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(136, 'Tirso Alvin D Lavi¤a III', 'Business Permits and Licensing', '', 'LGOO VI', 'dilgalvin@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(137, 'Vhernalyn P Jacob', 'Katarungang Pambarangay, GAD,VAWC, CBDRRM', '', 'LGOO V', 'mlgoomabitac2@gmail.com', 'picture dilg vherns001.jpg', '0000-00-00 00:00:00'),
(138, 'Vladimi M Rocafor', 'Local Planning and Budgeting, CDP / CDRA, GAD', '', 'LGOO VI', 'vladrocafor@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(139, 'Von Gabriel C Eugenio', 'BPLS, EODB, PPP, BPCO', '', 'LGOO II', 'vgcairoeugenio@gmail.com', 'von.jpg', '0000-00-00 00:00:00'),
(140, 'Warre M Ratio', 'Codification of Ordinances, Katarungang Pambarangay', '', 'LGOO VI', 'ratio121@gmail.com', '20200713_121302.jpg', '0000-00-00 00:00:00'),
(141, 'Wyeth N Lumiado', 'SK Mandatory Training, POC, POPS Plan, DRR-CCA', '', 'LGOO II', 'wyethlumidao@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg.png', '0000-00-00 00:00:00'),
(142, 'Xerxe F Batralo', 'CBYDP/ABYIP Formulation, Revenue Generation, Formulation Of Local Action For Anti-Illegal Drugs, Development Planning and Budgeting, Sangguniang Bayan Information System, Financial Administration', '', 'LGOO VI', 'xxbatralo0914@gmail.com', '20210317_112124.jpg', '0000-00-00 00:00:00'),
(143, 'Yonn S Peria', 'Revenue Generation, Project Proposal Development, Local Legislation, Development Planning / Budgeting, Katarungang Pambarangay, Financial Administration', '', 'LGOO VI', 'ysperia071465@gmail.com', '20210317_124723.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_expert1`
--

CREATE TABLE `tbl_expert1` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_expert1`
--

INSERT INTO `tbl_expert1` (`id`, `name`, `expertise`, `contactNumber`, `address`, `email`, `imageName`, `dateUploaded`) VALUES
(1, 'Abe A Suministrado', 'VAWC, Katarungang Pambarangay, CDP / CDRA, Local Legislation and Parliamentary Procedure, CBMS Module 1-2', '', 'LGOO VI', 'aasuministrado@gmail.com', 'D7C7F79E-9263-4117-8088-7C4ED25FD8A4.jpeg', '0000-00-00 00:00:00'),
(2, 'Abe Gail B Beltran', 'CDP / CDRA, CBMS Module 1-4, Business Permits and Licensing', '', 'LGOO VI', 'noveleta.dilgr4acavite@gmail.com', 'PROFILE.jpg', '0000-00-00 00:00:00'),
(3, 'Adriann O Plasuelo', 'Business Permits and Licensing', 'Licensed Environmental Planner', 'LGOO IV', 'adigangzta@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(4, 'Albert H Sandoval', 'Katarungang Pambarangay', '', 'LGOO VI', 'aldrich28.as@gmail.com', '6C18D2B1-53B9-4139-819C-494B26679729.jpeg', '0000-00-00 00:00:00'),
(5, 'Alel P Ditalo', 'CBMS Module 1', '', 'LGOO VI', 'alelydilgquezon@gmail.com', 'IMG_20200612_222832.jpg', '0000-00-00 00:00:00'),
(6, 'Ana Shiela N Dalida', 'CBDRRM, L!sto, CBMS Module 1-2, CBDRRM, L!sto', ', CBDRRM ToT Certificate', 'LGOO II', 'anasheiladalida@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(7, 'Angelic M Sagun', 'Katarungang Pambarangay', '', 'LGOO VI', 'angelicamsagun@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(8, 'Angelito Cortuna', 'Local Road Asset Management', '', 'LGOO II', 'angelitocortuna@yahoo.com', 'Agie ID.jpg', '0000-00-00 00:00:00'),
(9, 'Anna Maureen D Gumboc', 'CBMS Module 1 , CBMS Module 1 , VAWC, L!sto', '', 'LGOO IV', 'maudorneo24@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(10, 'Annalyn Marie M Angulo', 'GAD, VAWC, BCPC, Local Planning and Budgeting, CDP / CDRA, GAD, VAWC, BCPC', '', 'LGOO VI', '', 'ANGULO-ANNALYN MARIE.jpg', '0000-00-00 00:00:00'),
(11, 'Anne Kimberly P Babaan', 'POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, GAD, CBMS Module 1-4', ', CBMS National Trainer ? Module 1-3', 'LGOO VI', 'naic2.dilgr4acavite@gmail.com', 'ANNE KIMBERLY BABAAN_PIC.jpg', '0000-00-00 00:00:00'),
(12, 'April F Banez', 'CBMS Module 1-3', 'Accredited Trainer- CBMS Module 2', 'LGOO VI', 'abril424@gmail.com', 'ID .jpg', '0000-00-00 00:00:00'),
(13, 'Aprilyn L Mayrong ', 'CDP/CDRA', '', 'LGOO VI', 'almayrong@dilg.gov.ph', 'images/LOGO.png', '0000-00-00 00:00:00'),
(14, 'Art Brian G Rubio', 'EO 70, ECLIP, POC, EO 70, ECLIP', '', 'LGOO II', 'dilg4a.elcac@gmail.com', 'Art Brian Rubio Pic.jpg', '0000-00-00 00:00:00'),
(15, 'Atty Neil S Aranilla', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonseniorstaff@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(16, 'Batilde Agnes L Cilindro', 'BCPC', '', 'LGOO VI', 'cilindroagnes@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(17, 'Belinda A Valenzuela', 'GAD, VAWC, BCPC, Revenue Code/Ordinance, Project Development and Management, POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, GAD, VAWC, BCPC, Financial Administration', '', 'LGOO VII/Cluster Head', 'clustera.dilgcavite2@gmail.com', 'BELINDA VALENZUELA_PIC.jpg', '0000-00-00 00:00:00'),
(18, 'Bernar C Castillo', 'Environmental Laws', '', 'LGOO VI', 'caintadilg@gmail.com', 'CASTILLO-BERNARD.jpg', '0000-00-00 00:00:00'),
(19, 'Bryan M Batan', 'Local Legislation and Parliamentary Procedure, Katarungang Pambarangay, CBDRRM', '', 'LGOO V', 'bryandgreat84@yahoo.com', 'BATAN-BRYAN.jpg', '0000-00-00 00:00:00'),
(20, 'Carl R Reyes', 'Barangay Planning and Budgeting, Local Legislation & Parliamentary Procedures, Katarungang Pambarangay', '', 'LGOO VI', 'dilgguinayanganquezonph@gmail.com', 'My Picture.jpg', '0000-00-00 00:00:00'),
(21, 'Celi C Francia', 'CDP, CDRA, e-LCCAP, Project Monitoring and Evaluation, CDP, CDRA, e-LCCAP', ', Licensed EnP', 'LGOO VI', 'dilg4a.bauanbatangas@gmail.com', 'Cells 2x2 size.jpg', '0000-00-00 00:00:00'),
(22, 'Celia A Martal', 'Local Planning and Budgeting, CDP / CDRA, CBMS Module 1', '', 'LGOO VII', 'ailecmartal@yahoo.com', 'CELIA MARTAL_PIC.jpg', '0000-00-00 00:00:00'),
(23, 'Christi A Arcega', 'Katarungang Pambarangay', '', 'LGOO VI', 'arcegachristie@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(24, 'Christine B Sierra', 'CBMS Module 1 & 3', '', 'LGOO VI', 'indang.dilgr4acavite@gmail.com', 'CHRISTINE B SIERRA_PIC.jpg', '0000-00-00 00:00:00'),
(25, 'Clario Paz-Tanghal', 'Development Planning ( Poverty Reduction; Resettlement Governance)', '', 'LGOO VI', 'clarion_paz@yahoo.com.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(26, 'Clarion Paz ? Tanghal', 'Policy Development and Analysis', '', 'LGOO VI', 'clarion_paz@yahoo.com.ph', '103870288_279170170120985_7161450704646350710_n.jpg', '0000-00-00 00:00:00'),
(27, 'Desmari Francia M Mendoza-Parilla', 'CBMS Module 1-3', 'ACCREDITED CBMS MODULE 1 TRAINOR', 'LGOO VI', 'dilgsannicolas@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(28, 'Dexte P Fedeliz', 'Youth Empowerment, Local Peace Engagement (Peace and Order), Local Legislation, CDP/CDRA, Katarungang Pambarangay, Revenue Generation and Financial Administration, DRRM', '', 'LGOO VI', 'dpfedeliz@dilg.gov.ph', '1.jpg', '0000-00-00 00:00:00'),
(29, 'Diosdad M Rosa', 'Revenue Code / Ordinance, Local Legislation and Parliamentary Procedure', '', 'LGOO VI', 'diosdadolarosa@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(30, 'Djanin M Dacillo', 'Local Planning and Budgeting, Financial Administration', '', 'LGOO V', 'djaninedacillo@gmail.com', '20191118_173546.jpg', '0000-00-00 00:00:00'),
(31, 'Dominado A Nobleza', 'Incident Command System, CBMS Module 1-4', '', 'LGOO VI', 'danoblezajr@dilg.gov.ph', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(32, 'Don Ayer A Abrazaldo', 'Revenue , Peace & Order/ Conflict-Sensitivity, POPS, Local Legislation, Codification of General Ordinances, LCCAP, CDP, Local Plan and Budget, Katarungang Pambarangay, ICS 1-4, CBDRRM, HEMS, Risk Disaster Needs Assessment, CORE, Barangay Tanod Skills Enha', '', 'LGOO VII', 'daabrazaldo@dilg.gov.ph', 'IMG_20200612_202520.jpg', '0000-00-00 00:00:00'),
(33, 'Esther B Dator', 'Revenue Code / Ordinance, Local Legislation and Parliamentary Procedure, Local Planning and Budgeting, CDP / CDRA, Katarungang Pambarangay, BCPC', '', 'LGOO VI', 'estherbdator@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(34, 'Evangeline Rose C del Moro', 'Katarungang Pambarangay, VAWC', '', 'LGOO V', 'rosa.dilg.12@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(35, 'F B Roales', 'GAD, BCPC, Local Planning and Budgeting, CDP / CDRA, Katarungang Pambarangay, GAD, BCPC', '', 'LGOO VI', 'fepotroales@gmail.com', 'IMG_20200613_111351.jpg', '0000-00-00 00:00:00'),
(36, 'Fatima Nona M Alon', 'GAD, VAWC, BCPC, CDP / CDRA, Local Planning and Budgeting, Katarungang Pambarangay, GAD, VAWC, BCPC, CBMS Module 1-4', ', CBMS Accredited Trainor - Module 1', 'LGOO VI', 'fatimanonaalon@gmail.com', '055DDD44-B78C-4788-990D-D883953C2DD2.jpeg', '0000-00-00 00:00:00'),
(37, 'Fe Monalie O Abarca', 'Business Permits and Licensing', '', 'LGOO V', 'mlgoocalauan05@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(38, 'Felicidad B Cuadro ', 'POC and Drug Related Topics, CBMS Module 1', '', 'LGOO VI', 'dilg4a.bauanbatangas@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(39, 'Florabel M Ingel', 'Parliamentary Procedure, Basic ICS', '', 'LGOO VI', 'mlgoopakil1@gmail.com', 'received_10209183926527612.jpeg', '0000-00-00 00:00:00'),
(40, 'Franci B Templo', 'CDP/CDRA', 'CDP Coach Certification', 'LGOO VI', 'fbtemplo2017@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(41, 'Gerard C Gabin', 'Barangay Taxation, Barangay Governance, POPS Planning, Codification of General Ordinances, Local Legislation, CDP, VAWC', '', 'LGOO VII', 'gc.gabin1965@gmail.com', '0CC420E1-1F82-47C4-A072-8D14464295AE.jpeg', '0000-00-00 00:00:00'),
(42, 'Gloria Paz O Toledo', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'wingtoledo@yahoo.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(43, 'Hannah Krystel R Castro', 'GAD Planning and Budgeting', '', 'LGOO II', 'hannahkrystelcastro@gmail.com', 'kitzi 2x2.jpg', '0000-00-00 00:00:00'),
(44, 'James Carl F Torres', 'CBMS Module 1 & 3', '', 'LGOO II', 'jcftorres@gmail.com', 'picture.JPG', '0000-00-00 00:00:00'),
(45, 'Janica Zandra V Mendoza', 'CBMS Module 1-2', 'CBMS National Trainer - Module 1', 'LGOO II', 'nicavergara2719@gmail.com', 'JANICA ZANDRA MENDOZA_PIC.jpg', '0000-00-00 00:00:00'),
(46, 'Jared S Baldemeca', 'Project Development and Management, Codification of Ordinances, Local Legislation and Parliamentary Procedure, CDP / CDRA, Local Planning and Budgeting, Katarungang Pambarangay, CBDRRM, Incident Command System', ', TOT National Training , ICS 1st Level Completion Certificate', 'LGOO VI', '', 'inbound1335700349.jpg', '0000-00-00 00:00:00'),
(47, 'Jay-Ar T Beltran', 'Sangguniang Kabataan, Leadership, Knowledge Management, EODB', '', 'LGOO VI', 'jtbeltran@dilg.gov.ph', 'JAY-AR T BELTRAN PIC.jpg', '0000-00-00 00:00:00'),
(48, 'Jayson L Chavez', 'Incident Command System, Environmental Laws, CBDRRM, Contingency Plan Formulation', '', 'LGOO VI', '', 'images/LOGO.png', '0000-00-00 00:00:00'),
(49, 'Jefre R Gamban', 'CDP, R.A. 9003, CBDRRM', ', Registered Civil Engineer', 'LGOO II', 'jefgamban52@gmail.com', 'Gamban, Jefrey Romero.jpg', '0000-00-00 00:00:00'),
(50, 'Jennifer O Zaide', 'Project Development and Management', '', 'LGOO VI', 'mlgoosiniloan2019@gmail.com', 'ID Photo.jpg', '0000-00-00 00:00:00'),
(51, 'Jennifer S Quirante', 'Local Planning and Budgeting, Katarungang Pambarangay, GAD, VAWC, BCPC', '', 'LGOO VI', 'jenniferquirante.dilg@gmail.com', 'IMG_20200612_112231.jpg', '0000-00-00 00:00:00'),
(52, 'Jermiluz Romano De Castro', 'CDP/ CDRA', '', 'LGOO VI', 'jermiluz_decastro@yahoo.com', 'jdc.jpg', '0000-00-00 00:00:00'),
(53, 'Jerome M Lingan', 'CBMS Module 1 & 3', '', 'LGOO VI', 'alfonso.dilgr4acavite@gmail.com', 'PIC jml fas.jpg', '0000-00-00 00:00:00'),
(54, 'Jessa Marie S Mendoza', 'Results-based Monitoring and Evaluation (RBME), CDP/CDRA, DRR-CCA, CBMS Module 1', ', National Accredited Trainer', 'LGOO VI', 'jessa18.mendoza@gmail.com', 'Jessa Marie S. Mendoza 1 (2).JPG', '0000-00-00 00:00:00'),
(55, 'Jill Lovella J Abrigo', 'CBMS Module 1', '', 'LGOO IV', 'dilg4a.lgmed@gmail.com', 'Jill Lovella J. Abrigo pic.jpg', '0000-00-00 00:00:00'),
(56, 'Jinkee C Jinke C Advento', 'GAD Plan and Budget Formulation', '', 'LGOO V', 'jinkee.advento@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(57, 'Jocelyn L Rodil', 'KP/LTIA/Local Legislation and Parliamentary Procedures', '', 'LGOO VI', 'jocelyn. rodil1959@gmail.com', '', '0000-00-00 00:00:00'),
(58, 'John Joseph B Vasquez', 'Monitoring and Evaluation of Projects, CDP, CapDev Agenda, DRRM, MDM', '', 'LGOO III', 'vasquezjohnjoseph@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(59, 'Jonalyn Cate V Magcayang', 'Project Development and Management, CLJIP (Comperehnsive Local Juvenile Intervention Plan), GAD', '', 'LGOO V', 'jcatevilla.dilg4a@gmail.com', 'IMG_20200812_101934.jpg', '0000-00-00 00:00:00'),
(60, 'Jonas Emmanuel A Fajarda', 'Basic ICS, Management of the Dead and Missing, Post-Disaster Needs Assessment', 'Certification', 'LGOO II', 'fajarda.jonas2018@gmail.com', 'Jonas A. Fajarda Pic.jpg', '0000-00-00 00:00:00'),
(61, 'Joseph Ryan V Geronimo', 'Monitoring & Evaluation, Peace and Order Programs/Conflict-Sensitivity and Peace Promotion/POPS Planning, Codification Of General Ordinances, Local Development Planning (CDP/ELA/CapDev), CDRA, LGU-Public Financial Management (LGU-PFM), Local Economic Deve', 'Member, PIEP-Laguna Chapter (Project Development Committee), Registered Agrculturist, , Member, PIEP-Laguna Chapter (Project Development Committee), Member, Philippine Institute of Environmental Planners (PIEP) , Licensed Environmental Planner, Member, Ph', 'LGOO VI', 'cavitecity2.dilgr4acavite@gmail.com', 'JOSEPH-RYAN-GERONIMO_PIC.png', '0000-00-00 00:00:00'),
(62, 'Josephine S Dela Rosa', 'Lupong Tagapamayapa Incentives Awards, GAD, LCPC, CFLGA', '', 'LGOO V', 'jsdelarosa.dilg@gmail.com', 'JOSEPHINE DELA ROSA_PIC.jpg', '0000-00-00 00:00:00'),
(63, 'Joyce A Saavedra', 'POPS Plan, GAD Planning and Budgeting', '', 'LGOO III', 'joycesaavedra09@gmail.com', 'new pic.jpg', '0000-00-00 00:00:00'),
(64, 'Juan Paolo S Brosas', 'Codification of Ordinances, CDP / CDRA, Katarungang Pambarangay', '', 'LGOO VI', 'mlgookalayaa2@gmail.com', 'IMG_20210318_105201.png', '0000-00-00 00:00:00'),
(65, 'Juel Fatima M Dijan-Trinidad', 'CDP / CDRA', '', 'LGOO VII', 'dilgbatangas.c2@gmail.com', 'Fatti crop 2.jpg', '0000-00-00 00:00:00'),
(66, 'Karen C Aquino', 'Incident Command System', '', 'LGOO VI', 'kcaquino@dilg.gov.ph ', 'images/LOGO.png', '0000-00-00 00:00:00'),
(67, 'Kermith Gilbert F Fadri', 'CBDRRM, CBMS Module 1 & 3', '', 'LGOO VI', 'drealkg@gmail.com', '20200814_172159.jpg', '0000-00-00 00:00:00'),
(68, 'Kharl Kris S Pinol', 'CBMS Module 1-3, CDP / CDRA, Incident Command System', '', 'LGOO VI', 'kharlpinol@gmail.com', 'Kenny2.jpg', '0000-00-00 00:00:00'),
(69, 'Kitch Karianne R Gogolin', 'LGRRC', '', 'LGOO II', 'kkrgogolin@gmail.com', 'kitch_cropped_dilg.jpg', '0000-00-00 00:00:00'),
(70, 'Lauric D Herradura', 'POC and Drug Related Topics', '', 'LGOO II', 'auricedalope08@gmail.com', 'HERRADURA-LAURICE.jpg', '0000-00-00 00:00:00'),
(71, 'Leandro S Dancil', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'mlgoovictoria02@gmail.com', 'Screenshot_20200613-065700_Gallery.jpg', '0000-00-00 00:00:00'),
(72, 'Lenie R Bautista', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'clgoosanpedro1@gmail.com', '79304640_3018546774841913_1259179068524331008_n.jpg', '0000-00-00 00:00:00'),
(73, 'Loida V Vista', 'Community Development, Codification of Ordinances, DRRM, CDP/CDRA', ', MSCD Graduate for Community Development field expertise', 'LGOO VI', 'mlgoopaete5@gmail.com', 'profile pic_FAS_n.jpg', '0000-00-00 00:00:00'),
(74, 'Lorn M Silva', 'Katarungang Pambarangay', '', 'LGOO VI', 'lornasilva57@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(75, 'Luningning C Esquillo', 'Local Legislation and Parliamentary Procedure, Local Planning and Budgeting, Katarungang Pambarangay, BCPC', '', 'LGOO VI', 'twinkle_cor@yahoo.com', 'inbound81402929314647382.jpg', '0000-00-00 00:00:00'),
(76, 'Marcial A Juangco', 'Revenue Code/Ordinance, Codification of Ordinances, Local Legislation and Parliamentary Procedure, Katarungang Pambarangay', '', 'LGOO VII', 'clusterc.dilgr4acavite@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(77, 'Maria Alma L Barrientos', 'Katarungang Pambarangay, GAD', '', 'LGOO VI', 'clgoosanpablo5@gmail.com', 'inbound5474051770866688859.jpg', '0000-00-00 00:00:00'),
(78, 'Maria Aurora A Robles', 'Katarungang Pambarangay, Financial Administration', '', 'LGOO VI', 'dilgaurra@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(79, 'Maria Isabel C Llanto', 'Katarungang Pambarangay, CBMS Module 1 & 3', '', 'LGOO VI', 'miocoronallanto@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(80, 'Maria Kerstine E Esber-Azucena', 'BCPC', '', 'LGOO V', 'mlgooalaminos22@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(81, 'Maria Lorilyn Valenzuela-Manrique', 'Revenue Code/ Ordinance, POC and Drug Related Topics, Codification of Ordinances, Katarungang Pambarangay, GAD, VAWC, BCPC, Financial Administration', '', 'LGOO VII', 'dilglaguna.clustera3@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(82, 'Maria May M Ambata', 'POPS Planning, POC, ADAC', '', 'LGOO II', 'mrsambata2011@gmail.com', '2x2.jpg', '0000-00-00 00:00:00'),
(83, 'Maria Normita H Arceo', 'POPS Planning and Budgeting', '', 'LGOO VI', 'manormitaarceo@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(84, 'Maricar F Llarena', 'Katarungang Pambarangay', '', 'LGOO VI', 'liliwmlgoo2@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(85, 'Marilen Grace T Abejero', 'Peace and Order and Drug-related Topics, Katarungan Pambarangay, CBDRRM', '', 'LGOO VI', 'mlgoopila1@gmail.com', 'IMG_20200612_131229.jpg', '0000-00-00 00:00:00'),
(86, 'Marren E Juangco', 'POC, ADAC, CDP / CDRA, CBMS Module 1', '', 'LGOO III', 'juangcomarrenE@gmail.com', 'MARREN JUANGCO.jpg', '0000-00-00 00:00:00'),
(87, 'Mary Grace M Saturno', 'Business Permits and Licensing, Local Economic Development (LED)', '', 'LGOO III', 'ghiesaturno.dilg@gmail.com', 'ghie pic v2.jpg', '0000-00-00 00:00:00'),
(88, 'Mary Irene O Alvarez', 'Katarungang Pambarangay', '', 'LGOO VI', 'dilg.tuy@gmail.com', 'mimmo.jpg', '0000-00-00 00:00:00'),
(89, 'Mary Janice B Sobremonte', 'Project Development and Management, EODB Related Topics (BPLS,BPCO,Rationalization of Fees and Charges, PPP, LED,RS4LG,Reengineering', '', 'LGOO V', 'msbalahadia@dilg.gov.ph', 'mj.jpg', '0000-00-00 00:00:00'),
(90, 'Mary Roxanne T Vicedo', 'Local Development Planning (CDP, BDP, CapDev), CBMS Module 1-3', ', CBMS National Trainer - Module 1-3', 'LGOO II', 'roxannevicedo52@gmail.com', 'img005.jpg', '0000-00-00 00:00:00'),
(91, 'Maybelline M Monteiro', 'DILG Intranet, CBMS Module 1-3', '', 'IT Officer I', 'mmmonteiro@dilg.gov.ph', 'Maybelline M. Monteiro Pic.jpg', '0000-00-00 00:00:00'),
(92, 'Melchor Eugenio G Doce', 'Local Legislation, Development Planning and Budgeting, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonagdangan2@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(93, 'Melissa Mae C Marero', 'Local Legislation and Parliamentary Procedure, CDP, Katarungang Pambarangay, GAD', '', 'LGOO II', 'melissa.dilgcavite@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(94, 'Melody M Barairo', 'Community Mobilization, Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'clgoosantarosa1@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(95, 'Michelle M Garcia', 'POC and Drug Related Topics, CDP / CDRA, Local Planning, Barangay Tanod, KP, VAWC, BCPC, CBMS Module 1-4', ', CBMS Module 1-3 National Accredited', 'LGOO VI', 'clgoosanpablo.city@gmail.com', 'inbound8718134334173652513.jpg', '0000-00-00 00:00:00'),
(96, 'Michiko R Escalante', 'CBDRP, other POC and anti-drug related topics, Katarungang Pambarangay, ICS, PSCP, RCSP, EO 70, LCCAP, CDRA, LDRRMP, Contingency Planning, Local Rehabilitation Planning, CBDRMM, Emergency Operations Center Training, Risk Disaster Needs Assessment', 'ICS Cadre, , Environmental Planner', 'LGOO VI', 'mlgoolosbanos2@gmail.com', 'Michiko R. Escalante Pic.jpg', '0000-00-00 00:00:00'),
(97, 'Milagro H Rosal', 'Katarungang Pambarangay, VAWC', '', 'LGOO VI', 'dilgmaubanquezon@gmail.com', 'MHROSAL.jpg', '0000-00-00 00:00:00'),
(98, 'Milcha C Espedillon', 'CBMS Module 1', '', 'LGOO VI', 'mlgoorizal2@gmail.com', '95079531_231509424856497_6652149449462120448_n.jpg', '0000-00-00 00:00:00'),
(99, 'Monette S Landicho', '', '', 'LGOO III', 'dilg4a.mslandicho@gmail.com', '2x2 MSL.jpg', '0000-00-00 00:00:00'),
(100, 'Monette S  Landicho', 'Basic Policy Process', '', 'LGOO III', 'dilg4a.mslandicho@gmail.com', '2x2 MSL.jpg', '0000-00-00 00:00:00'),
(101, 'Myra Carmina Q Arcelo', 'Local Incentives and Investment Code Formulation, Local Planning and Budgeting, GAD', '', 'LGOO VI', 'clgoocalamba1@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(102, 'Nencit N Costelo', 'CDP/ CDRA', '', 'LGOO VII', 'ngncostelo2018@gmail.com', 'nency id pic.jpg', '0000-00-00 00:00:00'),
(103, 'Nerissa G Contreras', 'Project Development and Management, POC and Drug Related Topics, CDP / CDRA, CBDRRM', '', 'LGOO VII', 'dilgbatangas.c3@gmail.com', 'neri id pix.jpg', '0000-00-00 00:00:00'),
(104, 'Ni¤a Norisa C Maranga', 'EODB Related Topics (BPLS, BPCO, RR4LGU, Rationalization of Fees and Charges), Solid Waste Management, LDRRMP', '', 'LGOO II', 'naimaranga@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(105, 'Noe P Magsino', 'CBMS Module 1-2, GAD, L!sto', '', 'LGOO VI', 'dilgnoel83@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(106, 'Noem M Pelaez', 'Codification of General Ordinances, Katarungang Pambarangay', '', 'LGOO VI', 'dilgpagbilaoquezon@gmail.com', 'IMG20200129161315.jpg', '0000-00-00 00:00:00'),
(107, 'Odessa L Tan', 'CDP/CDRA', '', 'LGOO VI', 'oltan@dilg.gov.ph', 'images/LOGO.png', '0000-00-00 00:00:00'),
(108, 'Oliv Dorado-Esquivel', 'Local Legislation and Parliamentary Procedure', '', 'LGOO VI', 'mlgoonagcarlan5@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(109, 'Olive R Montefalcon', 'CDP / CDRA, Business Permits and Licensing', '', 'LGOO VI', 'sanmateodilg@gmail.com', '20200705_082449.png', '0000-00-00 00:00:00'),
(110, 'Olivo Dorado-Esquivel', 'Katarungang Pambarangay', '', 'LGOO VI', 'mlgoonagcarlan5@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(111, 'Pedryan Cris M Mendoza', 'BDP, CBDRRM, MDM, CBMS 2-4', ', CBMS Module 2 Accredited Trainer', 'LGOO V', 'pmontales@gmail.com', 'PEDRYAN CRIS M MENDOZA PIC.jpg', '0000-00-00 00:00:00'),
(112, 'Phoenix Grant M Teodoro', 'CBMS Module 1', '', 'LGOO VI', 'phoenix03_grant@yahoo.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(113, 'Pierre Vladimir T Palogan', 'CBMS Module 1, Local Legislation and Parliamentary Procedure, CDP / CDRA, CBDRRM', '', 'LGOO VI', 'dilg4a.quezoncluster1.real@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(114, 'Quenni C Malleon', 'Codification of Ordinances, Katarungang Pambarangay', ', Basic ICS', 'LGOO VI', 'qcmalleon@gmail.com', 'AD9DCB73-C9C4-4EC2-842D-1BFA8643A2C7.jpeg', '0000-00-00 00:00:00'),
(115, 'Ray T Rublico', 'CBMS Module 1-3', '', 'LGOO VI', 'rtrublico@gmail.com', 'ODTR pic.jpg', '0000-00-00 00:00:00'),
(116, 'Raymond Joseph B Paraiso', 'BDP, LGRRC, RCSP, DRRM', ', Registered Civil Engineer', 'LGOO II', 'rbparaiso@up.edu.ph', 'images/LOGO.png', '0000-00-00 00:00:00'),
(117, 'Reginaldo S Revilla', 'Revenue Code/Ordinance, Project Development and Management, POC and Drug Related Topics, Local Planning and Budgeting, CDP / CDRA, Business Permits and Licensing, CBMS Module 1-4', ', CBMS National Trainer ? Module 1', 'LGOO VI', 'carmona.dilg4acavite@gmail.com', 'REG REVILLA 4.jpg', '0000-00-00 00:00:00'),
(118, 'Renz Harry M Toledo', 'GAD Plan & Budget Formulation - PCMBs', '', 'LGOO III', 'hrytld.dilg@gmail.com', 'For ID 2x2.jpg', '0000-00-00 00:00:00'),
(119, 'Reuben Joseph M Justo', 'CDP / CDRA, CBMS Module 1-2', '', 'LGOO VI', 'rmjusto@dilg.gov.ph', 'RJ.png', '0000-00-00 00:00:00'),
(120, 'Rhyianne L Mejico', 'Local Development Planning, Katarungang Pambarangay', '', 'LGOO V', 'rhyiannemejico@gmail.com', 'IMG_0076.JPG', '0000-00-00 00:00:00'),
(121, 'Riel John R Urriquia', 'Project Development Management, Katarungang Pambarangay', '', 'LGOO VI', 'mlgoopangil2021@gmail.com', 'IMG_20200212_194855_836.jpg', '0000-00-00 00:00:00'),
(122, 'Rizzalie Joy S Ebreo', 'Constitutional Reform, Barangay Tanod Skills Enhancement', 'Certification', 'LGOO II', 'rizzaliejoyebreo12@gmail.com', '75580336_10215276630970650_1894362640923230208_o.jpg', '0000-00-00 00:00:00'),
(123, 'Robinso G Maac', 'Local Legislation, Katarungang Pambarangay', '', 'LGOO VI', 'dilgquezonsannarciso@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(124, 'Rodaly A Macarandang', 'CDP/ CDRA, Katarungang Pambarangay, CBMS Module 1-4', '', 'LGOO VI', 'ramacarandang@dilg.gov.ph', 'fas pic.jpg', '0000-00-00 00:00:00'),
(125, 'Rodel S Gamban', 'Katarungang Pambarangay, CBMS Module 1', 'Certification', 'LGOO VI', 'cavg03032017@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(126, 'Ronald A Mojica ', 'Local Legislation, Katarungang Pambarangay, Local Economic Enterprise Development (LEED)', '', 'LGOO VI', 'ronald888mojica@gmail.com', 'Ronald James B. Guerrero.png', '0000-00-00 00:00:00'),
(127, 'Rosely A Mercado', 'Codification of Ordinances', 'Attended Trainors Training on Codification of General Ordinance (COGO)', 'LGOO VI', 'dilgcuenca@gmail.com', 'CFA0C2F6-AE29-476E-91A1-F6F9E8FF6C04.jpeg', '0000-00-00 00:00:00'),
(128, 'Rowen P Alviar', 'Lupong Tagapamayapa Incentive Awards, Revenue Code and Barangay Governance', '', 'LGOO VI', 'sanantoniodilg@gmail.com', 'weng.jpg', '0000-00-00 00:00:00'),
(129, 'Ryann Jay B Estrada', 'GAD Planning and Budgeting', '', 'LGOO VI', 'mlgoosantamaria2@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(130, 'Sheena Mistee M Alegre', 'Barangay Tanod Skills Enhancement, LTIA, ADAC, CDP, Katarungang Pambarangay', '', 'LGOO II', 'dilgquezonlgmes@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(131, 'Sherly A O¤ate-Resurreccion', 'GAD', '', 'LGOO V', 'sherlynonate29@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(132, 'Shiel O Mundo', 'Barangay Governance & Revenue Code', '', 'LGOO VI', 'dilgquezondolores@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(133, 'Soni R Matanguihan', 'Barangay Taxation, Codification of General Ordinances, Local Planning and Budgeting, CDP/CDRA, Katarungang Pambarangay, GAD', '', 'LGOO VI', 'dilgquezonunisan2@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(134, 'Teodorica D Castillo', 'BCPC', '', 'LGOO VI', 'castilloteodorica@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(135, 'Thelm T Benabon', 'CDP, Katarungang Pambarangay, GAD Plan and Budget', 'TOT Certificate, Certificate of Participation and Letter of Review for GPB', 'LGOO III', 'dilgquezonplanning@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(136, 'Tirso Alvin D Lavi¤a III', 'Business Permits and Licensing', '', 'LGOO VI', 'dilgalvin@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(137, 'Vhernalyn P Jacob', 'Katarungang Pambarangay, GAD,VAWC, CBDRRM', '', 'LGOO V', 'mlgoomabitac2@gmail.com', 'picture dilg vherns001.jpg', '0000-00-00 00:00:00'),
(138, 'Vladimi M Rocafor', 'Local Planning and Budgeting, CDP / CDRA, GAD', '', 'LGOO VI', 'vladrocafor@gmail.com', 'images/LOGO.png', '0000-00-00 00:00:00'),
(139, 'Von Gabriel C Eugenio', 'BPLS, EODB, PPP, BPCO', '', 'LGOO II', 'vgcairoeugenio@gmail.com', 'von.jpg', '0000-00-00 00:00:00'),
(140, 'Warre M Ratio', 'Codification of Ordinances, Katarungang Pambarangay', '', 'LGOO VI', 'ratio121@gmail.com', '20200713_121302.jpg', '0000-00-00 00:00:00'),
(141, 'Wyeth N Lumiado', 'SK Mandatory Training, POC, POPS Plan, DRR-CCA', '', 'LGOO II', 'wyethlumidao@gmail.com', '1200px-Department_of_the_Interior_and_Local_Government_(DILG)_Seal_-_Logo.svg ', '0000-00-00 00:00:00'),
(142, 'Xerxe F Batralo', 'CBYDP/ABYIP Formulation, Revenue Generation, Formulation Of Local Action For Anti-Illegal Drugs, Development Planning and Budgeting, Sangguniang Bayan Information System, Financial Administration', '', 'LGOO VI', 'xxbatralo0914@gmail.com', '20210317_112124.jpg', '0000-00-00 00:00:00'),
(143, 'Yonn S Peria', 'Revenue Generation, Project Proposal Development, Local Legislation, Development Planning / Budgeting, Katarungang Pambarangay, Financial Administration', '', 'LGOO VI', 'ysperia071465@gmail.com', '20210317_124723.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` longtext NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`id`, `question`, `answer`, `dateUploaded`, `status`) VALUES
(1, 'What is LGRRC?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sodales leo sit amet nisl lobortis commodo. Ut ac erat eget tellus suscipit facilisis eu in metus. Cras tempor nulla eget nisl lobortis ullamcorper. Aenean blandit lacinia justo vulputate egestas. Etiam imperdiet, purus sollicitudin aliquam porta, libero leo porttitor purus, eu tincidunt lectus magna eu quam. Maecenas quam justo, ultrices sed ipsum sed, posuere posuere eros. Vestibulum a neque nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec fermentum, dui sit amet feugiat cursus, metus orci feugiat diam, nec luctus felis nunc ut lacus. Pellentesque vestibulum scelerisque ligula, sit amet blandit tellus hendrerit ac. Praesent faucibus lacinia erat ac fermentum. Aliquam et sapien vel massa convallis ornare. Maecenas vehicula magna at est laoreet, a mattis arcu accumsan. Cras ut diam consectetur tortor ultrices pretium. Pellentesque dapibus nulla a vestibulum consectetur.', '2021-03-08 09:10:48', ''),
(4, 'What is the overall goal of the LGRC?', 'To promote a culture of learning and knowledge sharing in pursuit of sustainable development through excellence in local governance', '2021-03-08 11:11:45', ''),
(5, 'What are the 4 Program Facilities', '* Capacity Development - serves as the venue to deliver quality, strategic and responsive capacity development* Multi Media, Knowledge and Information - ensures that key players and prime movers in local governance must collectively articulate policies in building a culture that encourage learning and sharing of information and knowledge in promoting excellence in local governance* Linkage - mediator between the LGUs and other local government stakeholders initiatives like Replication of Best Practices, SGLG, BuB and Local Planning and Development Mechanisms* Public Education and Good Governance, Development and Citizenship - the promotion body of good governance, practices and innovations', '2021-03-08 11:20:33', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_knowledge_products`
--

CREATE TABLE `tbl_knowledge_products` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_knowledge_products`
--

INSERT INTO `tbl_knowledge_products` (`id`, `filename`, `title`, `status`, `dateUploaded`) VALUES
(14, 'The Explosive Child_ A New Approach for Understanding and Parenting Easily Frustrated, Chronically I ( PDFDrive ) (2).pdf', 'Explosive Child', 'published', '2021-03-15 14:03:58'),
(16, 'The Gifts of Imperfection_ Embrace Who You Are ( PDFDrive ) (4).pdf', 'The Gifts of Imperfection', 'published', '2021-03-15 14:06:35'),
(17, 'Living in the Light_ A guide to personal transformation ( PDFDrive ) (2) (1).pdf', 'Living the Light', 'published', '2021-03-15 14:24:40');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_msac`
--

CREATE TABLE `tbl_msac` (
  `id` int(11) NOT NULL,
  `agencyName` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contactNumber` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_msac`
--

INSERT INTO `tbl_msac` (`id`, `agencyName`, `address`, `contactNumber`, `email`, `imageName`, `dateUploaded`) VALUES
(10, 'Department of Agriculture', 'Manila Philippines', '095484558', 'doa.gov.ph', '10_1613461808179.png', '2021-02-16 15:50:08'),
(11, 'Bureau of Jail Management and Penology ', 'Muntinlupa', '0956584548', 'bjmp.gov.ph', '11_1613461862257.png', '2021-02-16 15:51:02'),
(12, 'Department of Health', 'Quezon City Philippines', '094845848', 'doh.gov.ph', '12_1613461899729.png', '2021-02-16 15:51:39'),
(13, 'De La Salle University Manila', 'Manila Philippines', '094548555', 'dlsu.gov.ph', '13_1613461952237.png', '2021-02-16 15:52:32'),
(14, 'Department of Budget and Management', 'Quezon City Philippines', '0954564846', 'dobm.gov.ph', '14_1613463808354.png', '2021-02-16 16:23:28'),
(15, 'Department of Education', 'Quezon City Philippines', '0956584545', 'deped.gov.ph', '15_1613463938601.png', '2021-02-16 16:25:38'),
(16, 'Department of Environment and Natural Resources', 'Quezon City Philippines', '0948454845', 'denr.gov.ph', '16_1613464169843.png', '2021-02-16 16:29:29'),
(17, 'Department of Social Welfare and Development', 'Quezon City Philippines', '09565484512', 'dswd.gov.ph', '17_1613464258864.png', '2021-02-16 16:30:58'),
(18, 'Department of the Interior and Local Government', 'Quezon City Philippines', '434-343-121', 'dilg.gov.ph', '18_1614578851501.png', '2021-02-17 09:06:57'),
(21, 'Bureau of Fire Protection', 'Pasay City', '4344-2252', 'bgp.gov.ph', '21_1614579256189.png', '2021-02-26 15:06:58'),
(22, 'Philippine Public Safety College', 'Pasay City Philippines', '09956584', 'ppsc.gov.ph', '22_1614578928583.png', '2021-02-26 15:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `author` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `title`, `description`, `imageName`, `status`, `dateUploaded`, `author`) VALUES
(47, 'Happy New Year', 'As we <b>enter </b>a brand new year, DILG IV-A wishes everyone for a better, safer and prosperous 2021!May we all have a whole year full of love, happiness, good health and peace! Happy New Year! ✨', '47_.jpg', 'published', '2021-02-17 13:34:01', 'John Doe'),
(48, 'Zero Waste Month', 'Ayon sa Proclamation no. 760 na nilagdaan ng dating Pangulo Benigno S. Aquino III, idineklara ang buwan ng Enero bilang National Zero Waste Month. Ikaw, anong mga hakbang ang ginagawa mo upang mabawasan ang  mga basura sa ating paligid?', '48_.jpg', 'draft', '2021-02-17 13:38:14', 'DILG IV-A CALABARZON'),
(49, 'Public Health Standards. ', '<div>aa bb <b>cc <i>dd</i> <a href=\'https://google.com\' target=\'_blank\'>ee</a><a href=\'google.com\' target=\'_self\'></a><a href=\'google.com\' target=\'_blank\'></a></b></div>', '49_.jpg', 'published', '2021-02-17 13:40:12', 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_program_images`
--

CREATE TABLE `tbl_program_images` (
  `id` int(11) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_program_images`
--

INSERT INTO `tbl_program_images` (`id`, `imageName`, `status`, `dateUploaded`) VALUES
(49, '49_1619506903786.png', 'subImage1', '2021-05-03 20:43:19'),
(50, '50_1619506907465.png', 'subImage2', '2021-05-03 20:43:26'),
(51, '51_1619506912455.png', 'subImage3', '2021-05-03 20:43:29'),
(52, '52_1619506915206.png', 'subImage4', '2021-05-03 20:43:33'),
(53, '50_1620099851858.png', 'mainImage', '2021-05-03 20:46:02');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotations`
--

CREATE TABLE `tbl_quotations` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `imageName` varchar(255) NOT NULL,
  `quotation` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_quotations`
--

INSERT INTO `tbl_quotations` (`id`, `name`, `imageName`, `quotation`) VALUES
(2, 'RD Ariel O. Iglesia, CESO IV', '2_1615797246780.png', 'The Local Governance Regional Resource Center of DILG IV-A CALABARZON has always been proactive in making necessary interventions to bridge the capacity gaps of our Local Government Units. As we progress in time, along with the significant changes we see in our society, adaptability is one of the core values that we embody in our operations. \r\nPart of being adaptive to the transformation in the landscape of our society is converting the knowledge that we have into forms that are best accessible and understood by our clients. That is why we maintain the dissemination of knowledge through various channels, not just on print media, but also through social media, and other online platforms. \r\nThis e-library is one of the initiatives that the organization developed, seeing that there isn’t a more opportune time than today to take advantage of online learning. In the time of pandemic when face-to-face interactions are being restricted, we seek to provide convenience to our clients by making available all our knowledge products in a one-stop portal. \r\nAt the core of all the initiatives that our Department undertakes is the long-standing mission of providing quality service to the Local Government Units (LGUs) that cuts across time and circumstance. '),
(3, 'ARD Noel R. Bartolabac, CESO V', '3_1615797267515.png', 'As the manager of DILG IV-A’s Local Governance Regional Resource Center (LGRRC), I have seen how knowledge sharing became the very heart of our organization’s operations and systems. At the same time, we also believe that no organization has the monopoly of knowledge and that is why we put value on establishing partnerships with other organizations that have stakes on local governance. On the other end, we also keep our doors open for our clients who wish to access the collected knowledge of our organization and promote a culture of convergence and knowledge sharing in the process. \r\nThis is one of the many reasons why this LGRRC E-library was developed. This hopes to make knowledge more accessible to our target clients and general public as well. Through the platform used, it will be easier for users to browse, navigate, inquire, and learn without having to physically transact with our personnel. It also hopes to provide more information on what the Department does to stakeholders and even students who are interested in learning about local governance. \r\nIt is a very timely undertaking, given that most people nowadays turn to online learning and this is one way for our Department to stay relevant with the times and the shifting modes of how we consume information and knowledge. \r\nI hope the people will find this place a haven of learning about local governance in the CALABARZON Region. Let us continue to build empowered and knowledge-centric communities!'),
(4, 'DILG', '4_1615876389551.png', '“ Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum rem soluta sit eius necessitatibus voluptate excepturi beatae ad eveniet sapiente impedit quae modi quo provident odit molestias! Rem reprehenderit assumenda ”'),
(5, 'wjeje', '5_1620657580893.jpg', 'kfktkt'),
(6, 'dilg4a', '6_1620971277959.php', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_request`
--

CREATE TABLE `tbl_request` (
  `id` int(11) NOT NULL,
  `expertId` int(11) NOT NULL,
  `expertName` varchar(255) NOT NULL,
  `expertExpertise` varchar(255) NOT NULL,
  `requestorId` int(11) NOT NULL,
  `requestorName` varchar(255) NOT NULL,
  `requestorAddress` varchar(255) NOT NULL,
  `dateRequested` datetime NOT NULL,
  `reason` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_request`
--

INSERT INTO `tbl_request` (`id`, `expertId`, `expertName`, `expertExpertise`, `requestorId`, `requestorName`, `requestorAddress`, `dateRequested`, `reason`) VALUES
(2, 15, 'Mary Roxanne T. Vicedo', 'CBMS Module 1-3 ', 7, 'Zynell Mangilin', '055 Ilaya, Gatid, Sta. Cruz, Laguna', '2021-04-11 21:22:58', 'Request testing'),
(3, 1, 'Abe A Suministrado', 'VAWC, Katarungang Pambarangay, CDP / CDRA, Local Legislation and Parliamentary Procedure, CBMS Module 1-2', 7, 'Zynell Mangilin', '055 Ilaya, Gatid, Sta. Cruz, Laguna', '2021-05-18 07:50:15', 'Assistance');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_review`
--

CREATE TABLE `tbl_review` (
  `id` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `downloaderId` int(11) NOT NULL,
  `dateReviewed` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `birthday` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateUploaded` datetime NOT NULL,
  `borrowerId` varchar(11) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `lastname`, `firstname`, `middlename`, `address`, `mobile`, `birthday`, `username`, `password`, `status`, `dateUploaded`, `borrowerId`, `usertype`, `email`) VALUES
(1, 'Administrator', '', '', '', '', '0000-00-00 00:00:00', 'admin', '$2y$10$n9bppCG1xRkCcuuJNkFdDekRiosBPU0zi3d8vbjRlWmID4jV/mbQ6', 'approved', '0000-00-00 00:00:00', '', 'admin', ''),
(2, 'MOJICA', 'KRISTOFFER', 'G', 'PUROK 3, 132 BANABA CERCA , INDANG CAVITE', ' 639178549325', '1988-12-21 00:00:00', 'kgmojica', '$2y$10$mnuhEeVs9u6i7pWkMqAMquft2qf0WAIt3quThVoG/0c.98yxsZG86', 'approved', '2021-04-07 16:40:33', '2-148', 'user', 'kg.mojica.21@gmail.com'),
(3, 'Landicho', 'Monette ', 'S', 'Brgy. IV, Mataasnakahoy, Batangas', '0917 569 4155', '1993-09-06 00:00:00', 'mslandicho', '$2y$10$00iMWlTROiTsy0XBwendlOfXiMb7zhBfYeJsrMW3B/sYRaCvy7rb.', 'approved', '2021-04-07 16:42:42', '3-542', 'user', 'dilg4a.mslandicho@gmail.com'),
(4, 'Caliwagan', 'SARA Elayne', 'M', 'Rosal St. Paciano Rizal Bay Laguna', '0927 358 4706', '1993-09-19 00:00:00', 'smcaliwagan', '$2y$10$eiSZkd7dT2l5wudU2lvzoubxdplZO3o690JZf8YR.LZhW4MpLEfQ2', 'approved', '2021-04-07 16:44:48', '4-947', 'user', 'saraelaynecaliwagan@gmail.com'),
(5, 'Gogolin', 'Kitch Karianne', 'R', '0043, Jasmin St., Lower Bicutan, Taguig City', '09266578081', '1997-04-19 00:00:00', 'krgogolin', '$2y$10$sfTsmCG3mYANfYueQFZCTeIjshnM61d9emyT2S5A2XyTV0C0auXO.', 'approved', '2021-04-07 16:46:07', '5-534', 'user', 'kitchieji@gmail.com'),
(6, 'Dela Rosa', 'Amiel ', 'D', 'Brgy. Soro-Soro, Biñan, Laguna', '09989283007', '1993-05-29 00:00:00', 'addelarosa', '$2y$10$6oPVEtSUZaKNiwyWZ7sjU.h0bBX.OLqalImuE4fjqurfePpY/7mFW', 'approved', '2021-04-07 16:47:13', '6-307', 'user', 'dilg4a.pdmu@gmail.com'),
(7, 'Mangilin', 'Zynell', 'B', '055 Ilaya, Gatid, Sta. Cruz, Laguna', '09297795782', '1998-10-02 00:00:00', 'zbmangilin', '$2y$10$mnuhEeVs9u6i7pWkMqAMquft2qf0WAIt3quThVoG/0c.98yxsZG86', 'approved', '2021-04-07 16:48:31', '7-995', 'user', 'zynell02@gmail.com'),
(9, 'Castillo', 'Jan Eric', 'Campomanes', '188 Bilucao Malvar Batangas', '09569631749', '1994-06-16 00:00:00', 'jeccastillo', '$2y$10$.PFCyjztredm.L/KFF1aGuTZDcXLDRS0BKTuroGaqIDhHqFeSqnLW', 'approved', '2021-04-25 22:38:47', '9-122', 'admin', 'janericcastillo32@gmail.com'),
(10, 'Kent', 'Thomas', 'Campomanes', '1720  Brookside Drive', '02053689115', '1970-01-01 00:00:00', 'breezelback', '$2y$10$M/nXZACDA0zaqu/KGF4YV.g9vyaQpkEJog29n61lsuVrBjCamxjFS', 'approved', '2021-05-17 14:23:37', '10-349', 'user', 'breezelback@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_videos`
--

CREATE TABLE `tbl_videos` (
  `id` int(11) NOT NULL,
  `videoLink` varchar(255) NOT NULL,
  `videoTitle` varchar(255) NOT NULL,
  `dateUploaded` date NOT NULL,
  `category` varchar(255) NOT NULL,
  `videoSeason` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_videos`
--

INSERT INTO `tbl_videos` (`id`, `videoLink`, `videoTitle`, `dateUploaded`, `category`, `videoSeason`) VALUES
(4, 'https://www.facebook.com/watch/?v=1155057548223080', 'Sagisag ng Pag-asa_Pagbilao, Quezon', '2021-03-01', 'sagisag ng pagasa', 2),
(5, 'https://www.facebook.com/watch/?v=689492315337137', 'Sagisag ng Pag-asa_Anos, Los Baños, Laguna', '2021-03-01', 'sagisag ng pagasa', 1),
(6, 'https://www.facebook.com/watch/?v=407113357079465', 'Sagisag ng Pagasa | Bayan ng Paete, Laguna', '2021-03-08', 'sagisag ng pagasa', 3),
(7, 'https://www.facebook.com/900983349940688/videos/1022249171547182', 'Sagisag ng Pag-asa_Bayan ng Balayan', '2021-03-02', 'sagisag ng pagasa', 2),
(13, 'https://www.facebook.com/900983349940688/videos/3689837414464022', 'Linawin Natin: Pagsulong Episode 16', '2021-03-04', 'linawin natin', 2),
(14, '12', 'TEASER: Linawin Natin: Pagsulong Episode 17: Gumagana ang Bakuna! ', '0000-00-00', '', 0),
(16, 'https://www.facebook.com/watch/?v=420248689200963', 'TEASER: Linawin Natin: Pagsulong Episode 17: Gumagana ang Bakuna! (hashtag)VaccineWorks', '2021-03-08', 'linawin natin', 1),
(17, 'https://www.facebook.com/dilgr4a/videos/438548780659452', 'Linawin Natin: Pagsulong Episode 14: Anu-ano ba ang dapat isaalang-alang sa pagsasagawa ng Road Clearing?', '2021-03-08', 'linawin natin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `text` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `text`) VALUES
(1, '<div style=\'text-align: left;\'>asdf asdf safa<br></div>'),
(2, '<div><b>asdf </b><i>asdfa</i> <a href=\'https://preview.colorlib.com/theme/petsitting/\' target=\'_self\'>asdf</a></div>'),
(3, '<div><br></div>'),
(4, '<div><div>Lorem <b>ipsum </b>dolor sit <i>amet</i>, <u>consectetur </u>adipiscing elit. <a href=\'google.com\' target=\'_self\'>Suspendisse </a>tincidunt nulla a orci molestie auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam quis ligula non sapien viverra congue. Mauris pellentesque tellus vel aliquam sodales. Aliquam laoreet vitae odio id congue. In mi elit, gravida eget venenatis at, venenatis ac velit. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut non vulputate velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a risus eget velit tempor posuere ac eget massa. Donec tempor elementum ante, non tempus ante luctus et. Nulla nulla erat, congue ac iaculis at, sagittis ut sem.</div><div>Ut ac pellentesque elit. Fusce non massa euismod, tincidunt lorem eu, congue felis. Aliquam iaculis nisl at mollis ullamcorper. Pellentesque semper congue pharetra. Aliquam eleifend lacus eu lectus ultricies, malesuada aliquet augue luctus. Maecenas varius elit et turpis tincidunt, eget interdum lacus fermentum. Sed justo sapien, finibus et felis nec, efficitur imperdiet nunc.</div><div>Donec non varius elit, quis vestibulum tellus. Aenean hendrerit leo diam, sodales sagittis dui rutrum non. Fusce vehicula tellus eu leo accumsan, eu tempor enim fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Cras vel nunc tellus. Quisque eleifend vitae massa consequat iaculis. Vivamus elit ipsum, tincidunt sit amet mauris sed, consectetur lacinia lectus. Nam pellentesque elit consequat turpis commodo bibendum sed a nunc. Curabitur velit lorem, cursus nec rutrum ac, imperdiet at mi. Proin lect mi, ultricies sit amet viverra sed, lacinia quis lacus. In a molestie ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</div><div>Curabitur tristique, ipsum eu pellentesque commodo, lectus turpis sollicitudin nisi, nec aliquet velit quam non tellus. Phasellus fringilla luctus lectus, et gravida ipsum sodales malesuada. Cras volutpat purus quis suscipit gravida. Nullam at odio ut arcu vulputate pulvinar non ut dui. Vestibulum eu egestas tellus, et viverra nibh. Aliquam blandit elit id urna dictum suscipit. Nunc quis augue et augue mattis tempus. Suspendisse nibh massa, mattis quis lorem at, dignissim tincidunt purus. Suspendisse nunc ante, vehicula ut pellentesque eget, iaculis ac ante. Donec porta mattis mauris. Donec vel turpis quis augue sagittis rutrum vitae eget mauris. Pellentesque rhoncus nisl nec consequat molestie. Donec sed malesuada ipsum. In auctor feugiat venenatis. In ligula nisl, consectetur vel efficitur eu, luctus in nulla.</div><div>Cras rhoncus et odio at congue. Nulla rhoncus posuere mi, et tempus massa facilisis eu. Fusce leo dui, maximus vitae dignissim nec, dapibus sollicitudin dolor. Vivamus ut consequat ante. Cras lobortis eleifend semper. Maecenas venenatis sem enim, sit amet pulvinar est pellentesque non. Curabitur lacinia massa et tellus imperdiet, quis maximus nunc egestas. Phasellus luctus porttitor erat, a interdum odio sollicitudin in. Integer non semper odio. Fusce vitae bibendum arcu, id varius ex. Donec sed molestie magna. Aliquam ut justo tellus. Donec in mollis magna. Mauris pretium, leo non dapibus vulputate, eros metus egestas purus, at vehicula ex felis vel quam.</div></div>'),
(5, '<div><div><i>Bobo </i><b>ipsum </b>dolor sit <i>amet</i>, <u>consectetur </u>adipiscing elit. <a href=\'google.com\' target=\'_self\'>Suspendisse </a>tincidunt nulla a orci molestie auctor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam quis ligula non sapien viverra congue. Mauris pellentesque tellus vel aliquam sodales. <a href=\'https://preview.colorlib.com/theme/petsitting/\' target=\'_self\'>Aliquam </a>laoreet vitae odio id congue. In mi elit, gravida eget venenatis at, venenatis ac velit. In hac habitasse platea dictumst. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut non vulputate velit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Integer a risus eget velit tempor posuere ac eget massa. Donec tempor elementum ante, non tempus ante luctus et. Nulla nulla erat, congue ac iaculis at, sagittis ut sem.</div><div>Ut ac pellentesque elit. Fusce non massa euismod, tincidunt lorem eu, congue felis. Aliquam iaculis nisl at mollis ullamcorper. Pellentesque semper congue pharetra. Aliquam eleifend lacus eu lectus ultricies, malesuada aliquet augue luctus. Maecenas varius elit et turpis tincidunt, eget interdum lacus fermentum. Sed justo sapien, finibus et felis nec, efficitur imperdiet nunc.</div><div>Donec non varius elit, quis vestibulum tellus. Aenean hendrerit leo diam, <i>sodales </i>sagittis dui rutrum non. Fusce <u>vehicula </u>tellus eu leo accumsan, eu tempor enim fringilla. Vestibulum ante ipsum <b>primis</b> in faucibus orci luctus et ultrices posuere cubilia curae; Cras vel nunc tellus. Quisque eleifend vitae massa consequat iaculis. Vivamus elit ipsum, tincidunt sit amet mauris sed, consectetur lacinia lectus. Nam pellentesque elit consequat turpis commodo bibendum sed a nunc. Curabitur velit lorem, cursus nec rutrum ac, imperdiet at mi. Proin lect mi, ultricies sit amet viverra sed, lacinia quis lacus. In a molestie ipsum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae;</div><div>Curabitur tristique, ipsum eu pellentesque commodo, lectus turpis sollicitudin nisi, nec aliquet velit quam non tellus. Phasellus fringilla luctus lectus, et gravida ipsum sodales malesuada. Cras volutpat purus quis suscipit gravida. Nullam at odio ut arcu vulputate pulvinar non ut dui. Vestibulum eu egestas tellus, et viverra nibh. Aliquam blandit elit id urna dictum suscipit. Nunc quis augue et augue mattis tempus. Suspendisse nibh massa, mattis quis lorem at, dignissim tincidunt purus. Suspendisse nunc ante, vehicula ut pellentesque eget, iaculis ac ante. Donec porta mattis mauris. Donec vel turpis quis augue sagittis rutrum vitae eget mauris. Pellentesque rhoncus nisl nec consequat molestie. Donec sed malesuada ipsum. In auctor feugiat venenatis. In ligula nisl, consectetur vel efficitur eu, luctus in nulla.</div><div>Cras rhoncus et odio at congue. Nulla rhoncus posuere mi, et tempus massa facilisis eu. Fusce leo dui, maximus vitae dignissim nec, dapibus sollicitudin dolor. Vivamus ut consequat ante. Cras lobortis eleifend semper. Maecenas venenatis sem enim, sit amet pulvinar est pellentesque non. Curabitur lacinia massa et tellus imperdiet, quis maximus nunc egestas. Phasellus luctus porttitor erat, a interdum odio sollicitudin in. Integer non semper odio. Fusce vitae bibendum arcu, id varius ex. Donec sed molestie magna. Aliquam ut justo tellus. Donec in mollis magna. Mauris pretium, leo non dapibus vulputate, eros metus egestas purus, at vehicula ex felis vel <a href=\'https://preview.colorlib.com/theme/petsitting/\' target=\'_self\'>quam</a><b></b>.</div></div>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_about`
--
ALTER TABLE `tbl_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_books`
--
ALTER TABLE `tbl_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_downloads`
--
ALTER TABLE `tbl_downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_expert`
--
ALTER TABLE `tbl_expert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_expert1`
--
ALTER TABLE `tbl_expert1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_knowledge_products`
--
ALTER TABLE `tbl_knowledge_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_msac`
--
ALTER TABLE `tbl_msac`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_program_images`
--
ALTER TABLE `tbl_program_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_request`
--
ALTER TABLE `tbl_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_review`
--
ALTER TABLE `tbl_review`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_about`
--
ALTER TABLE `tbl_about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_books`
--
ALTER TABLE `tbl_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_downloads`
--
ALTER TABLE `tbl_downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_expert`
--
ALTER TABLE `tbl_expert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `tbl_expert1`
--
ALTER TABLE `tbl_expert1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_knowledge_products`
--
ALTER TABLE `tbl_knowledge_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_msac`
--
ALTER TABLE `tbl_msac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `tbl_program_images`
--
ALTER TABLE `tbl_program_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_quotations`
--
ALTER TABLE `tbl_quotations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_request`
--
ALTER TABLE `tbl_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_review`
--
ALTER TABLE `tbl_review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_videos`
--
ALTER TABLE `tbl_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
