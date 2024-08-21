-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 02:14 AM
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
-- Database: `phppayroll`
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

--
-- Dumping data for table `employee_deduction_payslip`
--

INSERT INTO `employee_deduction_payslip` (`EmployeeID`, `Receipt_Code`, `Deduction`, `Amount`, `Total_Deduction`) VALUES
('1', '1', 'Pagi-big', 400.00, 400.00),
('2', '1', 'PAG IBIG', 500.00, 500.00);

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

--
-- Dumping data for table `employee_earning_payslip`
--

INSERT INTO `employee_earning_payslip` (`EmployeeID`, `Receipt_Code`, `Earning`, `Amount`, `Total_Earning`, `NetPay`) VALUES
('1', '1', '50000', 50000.00, 50000.00, 50000.00),
('2', '1', '50000', 2302.00, 5000.00, 5000.00);

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
  `EmployeeID` varchar(55) NOT NULL,
  `fromName` varchar(55) NOT NULL,
  `Date` date NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_log`
--

INSERT INTO `employee_log` (`EmployeeID`, `fromName`, `Date`, `Message`) VALUES
('1', 'Ken Orosco', '2024-07-02', 'HELLO BRO KAYA MOPA BROW?\r\n='),
('2', 'Gerandy Buensuceso', '2024-07-02', 'Yow bro ano kaya mo pa din ba?'),
('1', 'Ken Orosco', '2024-07-02', 'Nice one pare'),
('1', 'Ken Orosco', '2024-07-02', 'May goods shit ba dyan?'),
('1', 'Ken Orosco', '2024-07-02', 'Hi nako may pag asa ba ako');

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

--
-- Dumping data for table `employee_payslip_receipt`
--

INSERT INTO `employee_payslip_receipt` (`Date`, `Receipt_Code`, `EmployeeName`, `Department`, `EmployeeID`) VALUES
('2024-07-15', '1', 'Gerandy Ernest J. Buensuceso', 'Sales Department', '1'),
('2024-08-21', '1', 'Ken Orosco', 'Sales', '2');

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

--
-- Dumping data for table `hr_add_account`
--

INSERT INTO `hr_add_account` (`EmployeeID`, `EmployeeName`, `FirstName`, `MiddleInitial`, `LastName`, `Date_of_birth`, `Gender`, `Address`, `City`, `Region`, `Country`, `Status`, `Nationality`, `Email`, `Moblie_No`, `Identity_No`, `Employment_type`, `Designation`, `Identity_Document`, `Position`, `Department`) VALUES
('1', 'Gerandy', 'Gerandy Ernest', 'J.', 'Bunsuceso', '2004-12-09', 'Male', '594 Batong Dalig Kawit Cavite', 'Kawit', 'CALABARZON', 'Philippines', 'Single', 'Filipino', 'gerandyb2k18@gmail.com', '09927274046', '202210881', 'HR', 'DEFAULT', 'A', 'CEO', 'CEO'),
('2', 'Ken', 'Ken Clarence', 'R.', 'Orosco', '2003-12-23', 'Male', 'Paliko Imus Cavite', 'Imus City', 'CALABARZON', 'Philippines', 'Single', 'Filipino', 'kenorosco@email.com', '0912578344', '202276213', 'Employee', 'DEPARTMENT', 'default', 'Sales Manager', 'Sales Department');

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
-- Dumping data for table `hr_payslip_receipt`
--

INSERT INTO `hr_payslip_receipt` (`Issued_Date`, `Receipt_Code`, `Employee_Name`, `Department`, `EmployeeID`, `Date`, `HourlyRate`) VALUES
('2024-07-15', '1', 'Gerandy Ernest J. Buensuceso', 'Sales Department', '1', '2024-07-15', 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `EmployeeID` varchar(11) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `password` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`EmployeeID`, `username`, `password`) VALUES
('1', 'bibs', '123'),
('2', 'ken', '123');

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
-- Indexes for table `employee_log`
--
ALTER TABLE `employee_log`
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
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD KEY `EmployeeID` (`EmployeeID`);

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
-- Constraints for table `employee_log`
--
ALTER TABLE `employee_log`
  ADD CONSTRAINT `employee_log_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);

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

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `hr_add_account` (`EmployeeID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
