-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2021 at 01:16 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `AdminId` int(20) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `EmailId` varchar(50) NOT NULL,
  `ContactNo` int(12) NOT NULL,
  `ProfilePic` varchar(100) NOT NULL,
  `Level` varchar(100) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`AdminId`, `UserName`, `Password`, `EmailId`, `ContactNo`, `ProfilePic`, `Level`, `Status`) VALUES
(1001, 'admin', 'admin123', 'admin@gmail.com', 1234567890, 'user1.png', 'admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblapprovedproject`
--

CREATE TABLE `tblapprovedproject` (
  `ApproveProjectId` int(20) NOT NULL,
  `ProjectId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Budget` int(100) NOT NULL,
  `ApprovedDate` date NOT NULL,
  `ExpectedEndingDate` date NOT NULL,
  `FromUserId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcategory`
--

CREATE TABLE `tblcategory` (
  `CategoryId` int(20) NOT NULL,
  `CategoryName` varchar(200) NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcategory`
--

INSERT INTO `tblcategory` (`CategoryId`, `CategoryName`, `Status`) VALUES
(1, 'Mobile web & software Dev', 0),
(2, 'IT Networking', 1),
(3, 'Customer Service', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tblchat`
--

CREATE TABLE `tblchat` (
  `ChatId` int(20) NOT NULL,
  `Message` varchar(200) NOT NULL,
  `ReceiverId` int(20) NOT NULL,
  `SenderId` int(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `CreateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcity`
--

CREATE TABLE `tblcity` (
  `CityId` int(20) NOT NULL,
  `CityName` varchar(100) NOT NULL,
  `StateId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcity`
--

INSERT INTO `tblcity` (`CityId`, `CityName`, `StateId`) VALUES
(201, 'Surat', 301),
(202, 'varoda', 301),
(204, 'navsari', 301),
(205, 'Banglore', 304),
(206, 'Kadth Mandu', 305);

-- --------------------------------------------------------

--
-- Table structure for table `tblcomplaint`
--

CREATE TABLE `tblcomplaint` (
  `ComplaintId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Status` int(20) NOT NULL,
  `CreateDate` date NOT NULL,
  `Response` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblcountry`
--

CREATE TABLE `tblcountry` (
  `CountryId` int(20) NOT NULL,
  `CountryName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcountry`
--

INSERT INTO `tblcountry` (`CountryId`, `CountryName`) VALUES
(401, 'India'),
(403, 'DUBAI');

-- --------------------------------------------------------

--
-- Table structure for table `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `FeedbackId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Feedback` varchar(100) NOT NULL,
  `CreateDate` date NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblnotification`
--

CREATE TABLE `tblnotification` (
  `NotificationId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `Notification` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblproject`
--

CREATE TABLE `tblproject` (
  `ProjectId` int(20) NOT NULL,
  `Title` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `Budget` int(20) NOT NULL,
  `SubCategoryId` int(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `CreateDate` date NOT NULL,
  `EndingDate` date NOT NULL,
  `UserId` int(11) NOT NULL,
  `UploadFile` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblproject`
--

INSERT INTO `tblproject` (`ProjectId`, `Title`, `Description`, `Budget`, `SubCategoryId`, `Status`, `CreateDate`, `EndingDate`, `UserId`, `UploadFile`) VALUES
(1, 'demo', 'demo project run ', 100, 1, 0, '2021-05-09', '2021-05-28', 1, 'book1.jpg'),
(2, 'demo1', 'demo project run ', 100, 3, 0, '2021-05-09', '2021-05-28', 1, 'book2.jpg'),
(3, 'demo1', 'demo', 200, 1, 0, '2021-05-03', '2021-05-19', 1, 'User DFD Level-1.pdf'),
(4, 'demo2', 'succefull', 200, 1, 0, '2021-04-20', '2021-05-13', 3, 'book2.jpg'),
(5, 'demo2', 'succefull', 300, 5, 0, '2021-04-20', '2021-05-13', 3, 'book1.jpg'),
(6, 'first project', 'very nice project', 500, 1, 0, '2021-04-21', '2021-05-04', 3, 'book1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectbid`
--

CREATE TABLE `tblprojectbid` (
  `ProjectBidId` int(20) NOT NULL,
  `ProjectId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Message` varchar(100) NOT NULL,
  `Budget` int(20) NOT NULL,
  `CreateDate` date NOT NULL,
  `Status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectskill`
--

CREATE TABLE `tblprojectskill` (
  `ProjectSkillId` int(20) NOT NULL,
  `ProjectId` int(20) NOT NULL,
  `SkillId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblprojectskill`
--

INSERT INTO `tblprojectskill` (`ProjectSkillId`, `ProjectId`, `SkillId`) VALUES
(1, 1, 501),
(2, 1, 504);

-- --------------------------------------------------------

--
-- Table structure for table `tblprojectupdate`
--

CREATE TABLE `tblprojectupdate` (
  `ProjectUpdateId` int(20) NOT NULL,
  `ProjectId` int(20) NOT NULL,
  `UpdateName` varchar(100) NOT NULL,
  `CreateDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblreview`
--

CREATE TABLE `tblreview` (
  `ReviewId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL,
  `Review` varchar(100) NOT NULL,
  `Rating` tinyint(10) NOT NULL,
  `CreateDate` date NOT NULL,
  `FromUserId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblsaveproject`
--

CREATE TABLE `tblsaveproject` (
  `SaveProjectId` int(20) NOT NULL,
  `ProjectId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblskill`
--

CREATE TABLE `tblskill` (
  `SkillId` int(20) NOT NULL,
  `SkillName` varchar(200) NOT NULL,
  `SubCategoryId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblskill`
--

INSERT INTO `tblskill` (`SkillId`, `SkillName`, `SubCategoryId`) VALUES
(501, 'IOS', 1),
(502, 'andriod', 2),
(503, 'CG', 2),
(504, 'php', 1),
(505, 'hacking', 3),
(506, 'communication skills', 5),
(507, 'business skills', 6),
(508, 'html,css,cyber security', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tblstate`
--

CREATE TABLE `tblstate` (
  `StateId` int(20) NOT NULL,
  `StateName` varchar(100) NOT NULL,
  `CountryId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstate`
--

INSERT INTO `tblstate` (`StateId`, `StateName`, `CountryId`) VALUES
(301, 'Gujarat', 401),
(304, 'South', 401),
(305, 'Nepal', 401);

-- --------------------------------------------------------

--
-- Table structure for table `tblsubcategory`
--

CREATE TABLE `tblsubcategory` (
  `SubCategoryId` int(20) NOT NULL,
  `SubCategoryName` varchar(100) NOT NULL,
  `CategoryId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubcategory`
--

INSERT INTO `tblsubcategory` (`SubCategoryId`, `SubCategoryName`, `CategoryId`) VALUES
(1, 'Mobile Development', 1),
(2, 'Game Development', 1),
(3, 'information security', 2),
(5, 'Customer service', 3),
(6, 'Technical Support', 3),
(8, 'Other -IT Netwroking', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `UserId` int(20) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `ProfilePic` varchar(1000) NOT NULL,
  `EmailId` varchar(100) NOT NULL,
  `ContactNo` varchar(20) NOT NULL,
  `CityId` int(20) NOT NULL,
  `Status` int(20) NOT NULL,
  `RegistrationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`UserId`, `UserName`, `Password`, `ProfilePic`, `EmailId`, `ContactNo`, `CityId`, `Status`, `RegistrationDate`) VALUES
(1, 'xyz pqr', 'xyz123', 'user1.png', 'xyz@gmail.com', '1234567890', 201, 0, '2021-05-10'),
(2, 'kartik ', 'kartik123', 'user1.png', 'kartikjari@gmail.com', '9912254688', 202, 0, '2021-05-03'),
(3, 'tushar jariwala', 'tushar123', 'user1.png', 'tusharjari@gmail.com', '7894456812', 204, 0, '2021-05-05'),
(4, 'yash jariwala', 'yash123', 'user1.png\r\n', 'yashjariwala@gmail.com', '7889456123', 205, 0, '2021-04-13'),
(5, 'priyansh jariwala', 'priyansh123', 'user1.png', 'priyansh@gmail.com', '7894567891', 206, 0, '2021-03-24'),
(6, 'taher', 'taher', 'book1.jpg', 'taher123@gmail.com', '7894564561', 202, 0, '2021-05-18');

-- --------------------------------------------------------

--
-- Table structure for table `tbluserskill`
--

CREATE TABLE `tbluserskill` (
  `UserSkillId` int(20) NOT NULL,
  `SkillId` int(20) NOT NULL,
  `UserId` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `tblapprovedproject`
--
ALTER TABLE `tblapprovedproject`
  ADD PRIMARY KEY (`ApproveProjectId`);

--
-- Indexes for table `tblcategory`
--
ALTER TABLE `tblcategory`
  ADD PRIMARY KEY (`CategoryId`);

--
-- Indexes for table `tblcity`
--
ALTER TABLE `tblcity`
  ADD PRIMARY KEY (`CityId`);

--
-- Indexes for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  ADD PRIMARY KEY (`ComplaintId`);

--
-- Indexes for table `tblcountry`
--
ALTER TABLE `tblcountry`
  ADD PRIMARY KEY (`CountryId`);

--
-- Indexes for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`FeedbackId`);

--
-- Indexes for table `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`ProjectId`);

--
-- Indexes for table `tblprojectbid`
--
ALTER TABLE `tblprojectbid`
  ADD PRIMARY KEY (`ProjectBidId`);

--
-- Indexes for table `tblprojectskill`
--
ALTER TABLE `tblprojectskill`
  ADD PRIMARY KEY (`ProjectSkillId`);

--
-- Indexes for table `tblprojectupdate`
--
ALTER TABLE `tblprojectupdate`
  ADD PRIMARY KEY (`ProjectUpdateId`);

--
-- Indexes for table `tblreview`
--
ALTER TABLE `tblreview`
  ADD PRIMARY KEY (`ReviewId`);

--
-- Indexes for table `tblsaveproject`
--
ALTER TABLE `tblsaveproject`
  ADD PRIMARY KEY (`SaveProjectId`);

--
-- Indexes for table `tblskill`
--
ALTER TABLE `tblskill`
  ADD PRIMARY KEY (`SkillId`);

--
-- Indexes for table `tblstate`
--
ALTER TABLE `tblstate`
  ADD PRIMARY KEY (`StateId`);

--
-- Indexes for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  ADD PRIMARY KEY (`SubCategoryId`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`UserId`);

--
-- Indexes for table `tbluserskill`
--
ALTER TABLE `tbluserskill`
  ADD PRIMARY KEY (`UserSkillId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `AdminId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1002;

--
-- AUTO_INCREMENT for table `tblapprovedproject`
--
ALTER TABLE `tblapprovedproject`
  MODIFY `ApproveProjectId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcategory`
--
ALTER TABLE `tblcategory`
  MODIFY `CategoryId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcity`
--
ALTER TABLE `tblcity`
  MODIFY `CityId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=207;

--
-- AUTO_INCREMENT for table `tblcomplaint`
--
ALTER TABLE `tblcomplaint`
  MODIFY `ComplaintId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblcountry`
--
ALTER TABLE `tblcountry`
  MODIFY `CountryId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=404;

--
-- AUTO_INCREMENT for table `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `FeedbackId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `ProjectId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblprojectbid`
--
ALTER TABLE `tblprojectbid`
  MODIFY `ProjectBidId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblprojectskill`
--
ALTER TABLE `tblprojectskill`
  MODIFY `ProjectSkillId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblprojectupdate`
--
ALTER TABLE `tblprojectupdate`
  MODIFY `ProjectUpdateId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblreview`
--
ALTER TABLE `tblreview`
  MODIFY `ReviewId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblsaveproject`
--
ALTER TABLE `tblsaveproject`
  MODIFY `SaveProjectId` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblskill`
--
ALTER TABLE `tblskill`
  MODIFY `SkillId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=509;

--
-- AUTO_INCREMENT for table `tblstate`
--
ALTER TABLE `tblstate`
  MODIFY `StateId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `tblsubcategory`
--
ALTER TABLE `tblsubcategory`
  MODIFY `SubCategoryId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `UserId` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbluserskill`
--
ALTER TABLE `tbluserskill`
  MODIFY `UserSkillId` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
