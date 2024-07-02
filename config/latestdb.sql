-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2024 at 01:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phppayroll1`
--

-- --------------------------------------------------------

--
-- Table structure for table `editearningperhour`
--

CREATE TABLE `editearningperhour` (
  `EmployeeID` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `ratePerHour` decimal(8,2) NOT NULL,
  `Deduction1` varchar(55) NOT NULL,
  `Deduction2` varchar(55) NOT NULL,
  `Deduction3` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `editearningperhour`
--

INSERT INTO `editearningperhour` (`EmployeeID`, `username`, `ratePerHour`, `Deduction1`, `Deduction2`, `Deduction3`) VALUES
(1, 'Gerandy', 1233.00, 'TAX', 'PAG-IBIG', 'SSS');

-- --------------------------------------------------------

--
-- Table structure for table `employee_deduction_payslip`
--

CREATE TABLE `employee_deduction_payslip` (
  `EmployeeID` int(50) NOT NULL,
  `Receipt_Code` int(50) NOT NULL,
  `Deduction` varchar(50) NOT NULL,
  `Amount` decimal(8,2) NOT NULL,
  `Total_Deduction` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_earning_payslip`
--

CREATE TABLE `employee_earning_payslip` (
  `EmployeeID` int(50) NOT NULL,
  `Receipt_Code` int(50) NOT NULL,
  `Earning` varchar(50) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Total_Earning` decimal(10,2) NOT NULL,
  `NetPay` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_history`
--

CREATE TABLE `employee_history` (
  `EmployeeID` int(50) NOT NULL,
  `No` int(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Receipt_Code` int(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `EmployeeID` int(50) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Date_of_Birth` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_No` varchar(100) NOT NULL,
  `Identity_No` varchar(100) NOT NULL,
  `Employment_Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`EmployeeID`, `EmployeeName`, `FirstName`, `MiddleName`, `LastName`, `Date_of_Birth`, `Gender`, `Address`, `City`, `Region`, `Country`, `Status`, `Nationality`, `Email`, `Mobile_No`, `Identity_No`, `Employment_Type`) VALUES
(1, 'Gerandy', 'Gerandy Ernest', 'Jamanila', 'Buensuceso', '2024-12-09', 'Male', '594 Batong Dalig Kawit Cavite', 'Kawit', 'CALABARZON', 'Philippines', 'Single', 'Filipino', 'gerandyb2k18@gmail.com', '09927274046', '202210881', 'Human Resources');

-- --------------------------------------------------------

--
-- Table structure for table `employee_info_earnings`
--

CREATE TABLE `employee_info_earnings` (
  `EmployeeID` int(50) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `Rate_per_hour` decimal(8,2) NOT NULL,
  `Position` varchar(50) NOT NULL,
  `Salary` decimal(8,2) NOT NULL,
  `Deductions` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_log`
--

CREATE TABLE `employee_log` (
  `EmployeeID` int(50) NOT NULL,
  `fromName` varchar(55) NOT NULL,
  `Date` date NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_log`
--

INSERT INTO `employee_log` (`EmployeeID`, `fromName`, `Date`, `Message`) VALUES
(1, 'Weng', '2024-07-03', 'HELLO PARE');

-- --------------------------------------------------------

--
-- Table structure for table `employee_payslip_receipt`
--

CREATE TABLE `employee_payslip_receipt` (
  `Date` date NOT NULL,
  `Receipt_Code` int(50) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `EmployeeID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_add_account`
--

CREATE TABLE `hr_add_account` (
  `EmployeeID` int(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleInitial` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Moblie_No` varchar(100) NOT NULL,
  `Identity_No` varchar(100) NOT NULL,
  `Employment_type` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr_add_account`
--

INSERT INTO `hr_add_account` (`EmployeeID`, `FirstName`, `MiddleInitial`, `LastName`, `Date_of_birth`, `Gender`, `Address`, `City`, `Region`, `Country`, `Status`, `Nationality`, `Email`, `Moblie_No`, `Identity_No`, `Employment_type`, `Position`, `Department`) VALUES
(1, 'Gerandy Ernest', 'J.', 'Buensuceso', '2004-12-09', 'Male', '594 Batong Dalig Kawit Cavite', 'Kawit', 'CALABARZON', 'Philippines', 'Single', 'Filipino', 'gerandyb2k18@gmail.com', '09927274046', '20221081', 'Human Resources', 'Head Human Resources', 'Company Department'),
(2, 'Ken Clarence', 'C', 'Orosco', '2003-12-23', 'Male', 'Palico', 'Imus', 'CALABARZON', 'Philippines', 'Single', 'Filipino', 'ken@email.com', '0993213251', '202210823', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_deduction_payslip`
--

CREATE TABLE `hr_deduction_payslip` (
  `Receipt_Code` int(50) NOT NULL,
  `EmployeeID` int(50) NOT NULL,
  `Deduction` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Total_Deduction` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_earning_payslip`
--

CREATE TABLE `hr_earning_payslip` (
  `Receipt_Code` int(50) NOT NULL,
  `EmployeeID` int(50) NOT NULL,
  `Earning` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Total_Earning` decimal(10,2) NOT NULL,
  `NetPay` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employee_info`
--

CREATE TABLE `hr_employee_info` (
  `EmployeeID` int(50) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Moblie_No` varchar(100) NOT NULL,
  `Identity_No` varchar(100) NOT NULL,
  `Employment_type` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Identity_Document` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employee_info_earnings`
--

CREATE TABLE `hr_employee_info_earnings` (
  `EmployeeID` int(50) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
  `Rate_per_hour` decimal(10,2) NOT NULL,
  `Postion` varchar(100) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Deduction/ s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_employee_info_edit`
--

CREATE TABLE `hr_employee_info_edit` (
  `EmployeeID` int(50) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `MiddleName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Date_of_birth` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Region` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Status` varchar(100) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Mobile_No` varchar(100) NOT NULL,
  `Identity_No` varchar(100) NOT NULL,
  `Employment_type` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `Identity_Document` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_emp_info_earnings_edit`
--

CREATE TABLE `hr_emp_info_earnings_edit` (
  `EmployeeID` int(50) NOT NULL,
  `Rate_per_hour` decimal(10,2) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Deduction` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hr_emp_info_earnings_edit`
--

INSERT INTO `hr_emp_info_earnings_edit` (`EmployeeID`, `Rate_per_hour`, `Position`, `Salary`, `Deduction`) VALUES
(1, 0.00, '', 0.00, ''),
(2, 0.00, '', 0.00, '');

-- --------------------------------------------------------

--
-- Table structure for table `hr_list_of_employee`
--

CREATE TABLE `hr_list_of_employee` (
  `EmployeeID` int(50) NOT NULL,
  `Employee_Name` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_payslip_receipt`
--

CREATE TABLE `hr_payslip_receipt` (
  `Issued_Date` date NOT NULL,
  `Receipt_Code` int(50) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `EmployeeID` int(50) NOT NULL,
  `Date` date NOT NULL,
  `HourlyRate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EmployeeID` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `Employment_Type` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EmployeeID`, `username`, `password`, `Employment_Type`) VALUES
(1, 'bibs', '123', 'Human Resources');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `editearningperhour`
--
ALTER TABLE `editearningperhour`
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `employee_deduction_payslip`
--
ALTER TABLE `employee_deduction_payslip`
  ADD KEY `1edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `employee_earning_payslip`
--
ALTER TABLE `employee_earning_payslip`
  ADD KEY `2edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD KEY `3edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD KEY `4edfr` (`EmployeeID`);

--
-- Indexes for table `employee_info_earnings`
--
ALTER TABLE `employee_info_earnings`
  ADD KEY `5edfr` (`EmployeeID`);

--
-- Indexes for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD KEY `logfr` (`EmployeeID`);

--
-- Indexes for table `employee_payslip_receipt`
--
ALTER TABLE `employee_payslip_receipt`
  ADD KEY `6edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `hr_add_account`
--
ALTER TABLE `hr_add_account`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `hr_deduction_payslip`
--
ALTER TABLE `hr_deduction_payslip`
  ADD KEY `7edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `hr_earning_payslip`
--
ALTER TABLE `hr_earning_payslip`
  ADD KEY `8edfr` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `hr_employee_info`
--
ALTER TABLE `hr_employee_info`
  ADD KEY `9edfr` (`EmployeeID`);

--
-- Indexes for table `hr_employee_info_earnings`
--
ALTER TABLE `hr_employee_info_earnings`
  ADD KEY `10edfr` (`EmployeeID`);

--
-- Indexes for table `hr_employee_info_edit`
--
ALTER TABLE `hr_employee_info_edit`
  ADD KEY `11edfr` (`EmployeeID`);

--
-- Indexes for table `hr_emp_info_earnings_edit`
--
ALTER TABLE `hr_emp_info_earnings_edit`
  ADD KEY `12edfr` (`EmployeeID`);

--
-- Indexes for table `hr_list_of_employee`
--
ALTER TABLE `hr_list_of_employee`
  ADD KEY `13edfr` (`EmployeeID`);

--
-- Indexes for table `hr_payslip_receipt`
--
ALTER TABLE `hr_payslip_receipt`
  ADD PRIMARY KEY (`Receipt_Code`),
  ADD KEY `14edfr` (`EmployeeID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_deduction_payslip`
--
ALTER TABLE `employee_deduction_payslip`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_earning_payslip`
--
ALTER TABLE `employee_earning_payslip`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_history`
--
ALTER TABLE `employee_history`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_information`
--
ALTER TABLE `employee_information`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_info_earnings`
--
ALTER TABLE `employee_info_earnings`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_log`
--
ALTER TABLE `employee_log`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_payslip_receipt`
--
ALTER TABLE `employee_payslip_receipt`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_add_account`
--
ALTER TABLE `hr_add_account`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hr_deduction_payslip`
--
ALTER TABLE `hr_deduction_payslip`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_earning_payslip`
--
ALTER TABLE `hr_earning_payslip`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_employee_info`
--
ALTER TABLE `hr_employee_info`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_employee_info_earnings`
--
ALTER TABLE `hr_employee_info_earnings`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_employee_info_edit`
--
ALTER TABLE `hr_employee_info_edit`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_emp_info_earnings_edit`
--
ALTER TABLE `hr_emp_info_earnings_edit`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hr_list_of_employee`
--
ALTER TABLE `hr_list_of_employee`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hr_payslip_receipt`
--
ALTER TABLE `hr_payslip_receipt`
  MODIFY `EmployeeID` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `EmployeeID` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `editearningperhour`
--
ALTER TABLE `editearningperhour`
  ADD CONSTRAINT `editearningperhour_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `employee_deduction_payslip`
--
ALTER TABLE `employee_deduction_payslip`
  ADD CONSTRAINT `employee_deduction_payslip_ibfk_3` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_deduction_payslip_ibfk_4` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `employee_earning_payslip`
--
ALTER TABLE `employee_earning_payslip`
  ADD CONSTRAINT `employee_earning_payslip_ibfk_3` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_earning_payslip_ibfk_4` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD CONSTRAINT `employee_history_ibfk_3` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_history_ibfk_4` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD CONSTRAINT `employee_information_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `employee_info_earnings`
--
ALTER TABLE `employee_info_earnings`
  ADD CONSTRAINT `employee_info_earnings_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD CONSTRAINT `employee_log_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `employee_payslip_receipt`
--
ALTER TABLE `employee_payslip_receipt`
  ADD CONSTRAINT `employee_payslip_receipt_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_payslip_receipt_ibfk_2` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `hr_deduction_payslip`
--
ALTER TABLE `hr_deduction_payslip`
  ADD CONSTRAINT `hr_deduction_payslip_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `hr_deduction_payslip_ibfk_3` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `hr_earning_payslip`
--
ALTER TABLE `hr_earning_payslip`
  ADD CONSTRAINT `hr_earning_payslip_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `hr_earning_payslip_ibfk_3` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `hr_employee_info`
--
ALTER TABLE `hr_employee_info`
  ADD CONSTRAINT `hr_employee_info_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_employee_info_earnings`
--
ALTER TABLE `hr_employee_info_earnings`
  ADD CONSTRAINT `hr_employee_info_earnings_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_employee_info_edit`
--
ALTER TABLE `hr_employee_info_edit`
  ADD CONSTRAINT `hr_employee_info_edit_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_emp_info_earnings_edit`
--
ALTER TABLE `hr_emp_info_earnings_edit`
  ADD CONSTRAINT `hr_emp_info_earnings_edit_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_list_of_employee`
--
ALTER TABLE `hr_list_of_employee`
  ADD CONSTRAINT `hr_list_of_employee_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_payslip_receipt`
--
ALTER TABLE `hr_payslip_receipt`
  ADD CONSTRAINT `hr_payslip_receipt_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee_information` (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
