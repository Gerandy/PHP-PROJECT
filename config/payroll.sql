-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2024 at 05:04 PM
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
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_deduction_payslip`
--

CREATE TABLE `employee_deduction_payslip` (
  `EmployeeID` varchar(50) NOT NULL,
  `Receipt_Code` varchar(50) NOT NULL,
  `Deduction` varchar(50) NOT NULL,
  `Amount` decimal(8,2) NOT NULL,
  `Total_Deduction` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_earning_payslip`
--

CREATE TABLE `employee_earning_payslip` (
  `EmployeeID` varchar(50) NOT NULL,
  `Receipt_Code` varchar(50) NOT NULL,
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
  `EmployeeID` varchar(50) NOT NULL,
  `No` int(50) NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `receipt_code` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `EmployeeID` varchar(100) NOT NULL,
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
  `Employment_Type` varchar(100) NOT NULL,
  `Designation` varchar(100) NOT NULL,
  `IdentityDocument` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_info_earnings`
--

CREATE TABLE `employee_info_earnings` (
  `EmployeeID` varchar(50) NOT NULL,
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
  `Date` date NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee_payslip_receipt`
--

CREATE TABLE `employee_payslip_receipt` (
  `Date` date NOT NULL,
  `Receipt_Code` varchar(50) NOT NULL,
  `EmployeeName` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `EmployeeID` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_add_account`
--

CREATE TABLE `hr_add_account` (
  `EmployeeID` varchar(100) NOT NULL,
  `EmployeeName` varchar(100) NOT NULL,
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
  `Designation` varchar(100) NOT NULL,
  `Identity_Document` varchar(100) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_deduction_payslip`
--

CREATE TABLE `hr_deduction_payslip` (
  `Receipt_Code` varchar(100) NOT NULL,
  `EmployeeID` varchar(100) NOT NULL,
  `Deduction` varchar(100) NOT NULL,
  `Amount` decimal(10,2) NOT NULL,
  `Total_Deduction` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_earning_payslip`
--

CREATE TABLE `hr_earning_payslip` (
  `Receipt_Code` varchar(100) NOT NULL,
  `EmployeeID` varchar(100) NOT NULL,
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
  `EmployeeID` varchar(100) NOT NULL,
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
  `EmployeeID` varchar(100) NOT NULL,
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
  `EmployeeID` varchar(100) NOT NULL,
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
  `EmployeeID` varchar(100) NOT NULL,
  `Rate_per_hour` decimal(10,2) NOT NULL,
  `Position` varchar(100) NOT NULL,
  `Salary` decimal(10,2) NOT NULL,
  `Deduction/ s` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hr_list_of_employee`
--

CREATE TABLE `hr_list_of_employee` (
  `EmployeeID` varchar(50) NOT NULL,
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
  `Receipt_Code` varchar(100) NOT NULL,
  `Employee_Name` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `EmployeeID` varchar(100) NOT NULL,
  `Date` date NOT NULL,
  `HourlyRate` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_deduction_payslip`
--
ALTER TABLE `employee_deduction_payslip`
  ADD KEY `EmployeeID` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `employee_earning_payslip`
--
ALTER TABLE `employee_earning_payslip`
  ADD KEY `EmployeeID` (`EmployeeID`),
  ADD KEY `Receipt_Code` (`Receipt_Code`);

--
-- Indexes for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD KEY `EmployeeID` (`EmployeeID`),
  ADD KEY `receipt_code` (`receipt_code`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `employee_info_earnings`
--
ALTER TABLE `employee_info_earnings`
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `employee_payslip_receipt`
--
ALTER TABLE `employee_payslip_receipt`
  ADD KEY `Receipt_Code` (`Receipt_Code`),
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `hr_add_account`
--
ALTER TABLE `hr_add_account`
  ADD PRIMARY KEY (`EmployeeID`);

--
-- Indexes for table `hr_deduction_payslip`
--
ALTER TABLE `hr_deduction_payslip`
  ADD KEY `Receipt_Code` (`Receipt_Code`),
  ADD KEY `hr_deduction_payslip_ibfk_2` (`EmployeeID`);

--
-- Indexes for table `hr_earning_payslip`
--
ALTER TABLE `hr_earning_payslip`
  ADD KEY `Receipt_Code` (`Receipt_Code`),
  ADD KEY `hr_earning_payslip_ibfk_2` (`EmployeeID`);

--
-- Indexes for table `hr_employee_info`
--
ALTER TABLE `hr_employee_info`
  ADD KEY `hr_employee_info_ibfk_1` (`EmployeeID`);

--
-- Indexes for table `hr_employee_info_earnings`
--
ALTER TABLE `hr_employee_info_earnings`
  ADD KEY `hr_employee_info_earnings_ibfk_1` (`EmployeeID`);

--
-- Indexes for table `hr_employee_info_edit`
--
ALTER TABLE `hr_employee_info_edit`
  ADD KEY `hr_employee_info_edit_ibfk_1` (`EmployeeID`);

--
-- Indexes for table `hr_emp_info_earnings_edit`
--
ALTER TABLE `hr_emp_info_earnings_edit`
  ADD KEY `hr_emp_info_earnings_edit_ibfk_1` (`EmployeeID`);

--
-- Indexes for table `hr_list_of_employee`
--
ALTER TABLE `hr_list_of_employee`
  ADD KEY `EmployeeID` (`EmployeeID`);

--
-- Indexes for table `hr_payslip_receipt`
--
ALTER TABLE `hr_payslip_receipt`
  ADD PRIMARY KEY (`Receipt_Code`),
  ADD KEY `hr_payslip_receipt_ibfk_1` (`EmployeeID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_deduction_payslip`
--
ALTER TABLE `employee_deduction_payslip`
  ADD CONSTRAINT `employee_deduction_payslip_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_deduction_payslip_ibfk_2` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `employee_earning_payslip`
--
ALTER TABLE `employee_earning_payslip`
  ADD CONSTRAINT `employee_earning_payslip_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_earning_payslip_ibfk_2` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

--
-- Constraints for table `employee_history`
--
ALTER TABLE `employee_history`
  ADD CONSTRAINT `employee_history_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`),
  ADD CONSTRAINT `employee_history_ibfk_2` FOREIGN KEY (`receipt_code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`);

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
-- Constraints for table `employee_payslip_receipt`
--
ALTER TABLE `employee_payslip_receipt`
  ADD CONSTRAINT `employee_payslip_receipt_ibfk_1` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`),
  ADD CONSTRAINT `employee_payslip_receipt_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_deduction_payslip`
--
ALTER TABLE `hr_deduction_payslip`
  ADD CONSTRAINT `hr_deduction_payslip_ibfk_1` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`),
  ADD CONSTRAINT `hr_deduction_payslip_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

--
-- Constraints for table `hr_earning_payslip`
--
ALTER TABLE `hr_earning_payslip`
  ADD CONSTRAINT `hr_earning_payslip_ibfk_1` FOREIGN KEY (`Receipt_Code`) REFERENCES `hr_payslip_receipt` (`Receipt_Code`),
  ADD CONSTRAINT `hr_earning_payslip_ibfk_2` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
