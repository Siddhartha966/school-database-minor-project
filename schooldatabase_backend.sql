-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 01:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(50) NOT NULL,
  `salary` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `supervising_position` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `work_division` varchar(100) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `address` varchar(300) NOT NULL,
  `working_time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `salary`, `name`, `supervising_position`, `password`, `age`, `work_division`, `gender`, `address`, `working_time`) VALUES
('admin001', 200000, 'siddhartha', 'head', 'siddhartha', 19, 'transactions', 'male', 'indore', 9),
('admin002', 100000, 'geeta', 'none', 'geeta', 19, 'library', 'male', 'indore', 9);

-- --------------------------------------------------------

--
-- Table structure for table `belongingto`
--

CREATE TABLE `belongingto` (
  `course_id` int(11) NOT NULL,
  `department_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `belongingto`
--

INSERT INTO `belongingto` (`course_id`, `department_id`) VALUES
(2, 2),
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL,
  `couse_name` varchar(50) NOT NULL,
  `no_of_days_of_course` int(11) NOT NULL,
  `faculty_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `couse_name`, `no_of_days_of_course`, `faculty_id`) VALUES
(1, 'science4', 30, 'faculty001'),
(2, 'maths3', 95, 'faculty002'),
(3, 'english4', 45, 'faculty001'),
(4, 'biology4', 76, 'faculty002');

-- --------------------------------------------------------

--
-- Table structure for table `dealing`
--

CREATE TABLE `dealing` (
  `admin_id` varchar(50) NOT NULL,
  `transaction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealing`
--

INSERT INTO `dealing` (`admin_id`, `transaction_id`) VALUES
('admin002', 100001),
('admin001', 100002);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`) VALUES
(1, 'science'),
(2, 'mathematics');

-- --------------------------------------------------------

--
-- Table structure for table `eas`
--

CREATE TABLE `eas` (
  `admin_id` varchar(50) NOT NULL,
  `years_of_patnership` int(11) NOT NULL,
  `activity_involved` varchar(300) NOT NULL,
  `external_affaries_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eas`
--

INSERT INTO `eas` (`admin_id`, `years_of_patnership`, `activity_involved`, `external_affaries_name`) VALUES
('admin001', 5, 'dairy products', 'amul'),
('admin001', 6, 'transportation', 'BENZ automobiles'),
('admin002', 3, 'stationaries', 'rajdeep stationaries');

-- --------------------------------------------------------

--
-- Table structure for table `enrolled`
--

CREATE TABLE `enrolled` (
  `student_roll_number` varchar(10) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `enrolled`
--

INSERT INTO `enrolled` (`student_roll_number`, `course_id`) VALUES
('student002', 1),
('student003', 1),
('student005', 1),
('student006', 1),
('student001', 2),
('student004', 2),
('student007', 2);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `exam_name` varchar(50) NOT NULL,
  `exam_date` date NOT NULL,
  `total_marks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`exam_name`, `exam_date`, `total_marks`) VALUES
('iapt', '2022-04-14', 75),
('kat', '2022-10-03', 100);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` varchar(50) NOT NULL,
  `years_of_experience` int(11) NOT NULL,
  `working_hours_per_day` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `years_of_experience`, `working_hours_per_day`) VALUES
('faculty001', 13, 8),
('faculty002', 20, 8),
('faculty003', 15, 8);

-- --------------------------------------------------------

--
-- Table structure for table `infrasructure`
--

CREATE TABLE `infrasructure` (
  `block_no` int(11) NOT NULL,
  `area_of_block` int(11) NOT NULL,
  `block_status` varchar(300) NOT NULL,
  `block_name` varchar(100) NOT NULL,
  `resources` varchar(300) NOT NULL,
  `damage_management` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infrasructure`
--

INSERT INTO `infrasructure` (`block_no`, `area_of_block`, `block_status`, `block_name`, `resources`, `damage_management`) VALUES
(1, 2500, 'complete', 'Block-A', 'none', 'none'),
(2, 3700, 'complete', 'Block-B', 'none', 'none');

-- --------------------------------------------------------

--
-- Table structure for table `infrasructurebody`
--

CREATE TABLE `infrasructurebody` (
  `admin_id` varchar(50) NOT NULL,
  `block_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `infrasructurebody`
--

INSERT INTO `infrasructurebody` (`admin_id`, `block_no`) VALUES
('admin001', 1),
('admin002', 2);

-- --------------------------------------------------------

--
-- Table structure for table `isa`
--

CREATE TABLE `isa` (
  `staff_id` varchar(50) NOT NULL,
  `nts_id` varchar(50) DEFAULT NULL,
  `faculty_id` varchar(50) DEFAULT NULL,
  `s.no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `isa`
--

INSERT INTO `isa` (`staff_id`, `nts_id`, `faculty_id`, `s.no`) VALUES
('faculty001', NULL, 'faculty001', 1),
('faculty002', NULL, 'faculty002', 2),
('nts001', 'nts001', NULL, 3),
('nts002', 'nts002', NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `isbn_no` int(11) NOT NULL,
  `no_of_copies` int(11) NOT NULL,
  `book_status` varchar(100) NOT NULL,
  `publication_year` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`isbn_no`, `no_of_copies`, `book_status`, `publication_year`, `author_name`, `book_name`) VALUES
(1001, 5, 'available', 1933, 'D.J.Griffith', 'griffith'),
(1002, 7, 'not available', 1967, 'Pearson', 'univesity physics');

-- --------------------------------------------------------

--
-- Table structure for table `libraryboby`
--

CREATE TABLE `libraryboby` (
  `admin_id` varchar(50) NOT NULL,
  `isbn_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `libraryboby`
--

INSERT INTO `libraryboby` (`admin_id`, `isbn_no`) VALUES
('admin001', 1001),
('admin002', 1002);

-- --------------------------------------------------------

--
-- Table structure for table `materials`
--

CREATE TABLE `materials` (
  `isbn_no` int(11) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `materials`
--

INSERT INTO `materials` (`isbn_no`, `course_id`) VALUES
(1001, 2),
(1002, 1);

-- --------------------------------------------------------

--
-- Table structure for table `nts`
--

CREATE TABLE `nts` (
  `nts_id` varchar(50) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nts`
--

INSERT INTO `nts` (`nts_id`, `role`) VALUES
('', ''),
('nts001', 'care taker'),
('nts002', 'bus driver');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `Student_roll_number` varchar(50) NOT NULL,
  `parentname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `profession` varchar(100) NOT NULL,
  `primary_contact_no` varchar(10) NOT NULL,
  `secondary_contact_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`Student_roll_number`, `parentname`, `password`, `address`, `profession`, `primary_contact_no`, `secondary_contact_no`) VALUES
('student001', 'kumar', '12345', 'mumbai', 'farmer', '9876543223', '9876543232'),
('student002', 'kumar', 'abcd', 'chennai', 'teacher', '7655423487', '9876234514'),
('student003', 'ragav', 'xyz', 'indore', 'professer', '8765434453', '5677422457'),
('student004', 'karim', 'qwer', 'guntur', 'teacher', '8765423987', '9876233457'),
('student005', 'srinivas', 'poorna', 'indore', 'docter', '7655423487', '9876233457'),
('student006', 'suresh', 'keerthi', 'indore', 'teacher', '7655423487', '9876234514'),
('student007', 'madhav', 'jeevan', 'vizag', 'professor', '7788255669', '3779499826');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `exam_name` varchar(50) NOT NULL,
  `student_roll_number` varchar(50) NOT NULL,
  `marks_obtained` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`exam_name`, `student_roll_number`, `marks_obtained`) VALUES
('iapt', 'student001', 53),
('iapt', 'student002', 43),
('iapt', 'student003', 35),
('kat', 'student004', 76),
('kat', 'student005', 63),
('kat', 'student006', 45);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `age` int(11) NOT NULL,
  `staff_type` enum('NTS','Faculty') NOT NULL,
  `supervising_position` varchar(50) NOT NULL,
  `current_salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_id`, `name`, `password`, `address`, `gender`, `age`, `staff_type`, `supervising_position`, `current_salary`) VALUES
('faculty001', 'vipul', 'vipul', 'indore', 'male', 34, 'Faculty', 'hod', 100000),
('faculty002', 'ben', 'ben', 'indore', 'male', 45, 'Faculty', 'none', 50000),
('faculty003', 'bapan', 'bapan', 'indore', '', 34, '', 'none', 100000),
('nts001', 'selena', 'selena', 'indore', 'female', 23, 'NTS', 'none', 50000),
('nts002', 'ram', 'ram', 'indore', 'male', 32, 'NTS', 'none', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `staffbody`
--

CREATE TABLE `staffbody` (
  `admin_id` varchar(50) NOT NULL,
  `staff_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staffbody`
--

INSERT INTO `staffbody` (`admin_id`, `staff_id`) VALUES
('admin001', 'faculty001'),
('admin002', 'faculty002'),
('admin001', 'nts001'),
('admin002', 'nts002');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_roll_number` varchar(10) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `student_password` varchar(20) NOT NULL,
  `academicyear` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `gender` enum('male','female','other') NOT NULL,
  `age` int(11) NOT NULL,
  `student_position` varchar(50) NOT NULL,
  `mothername` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_roll_number`, `firstname`, `lastname`, `student_password`, `academicyear`, `class`, `gender`, `age`, `student_position`, `mothername`, `fathername`, `address`) VALUES
('student001', 'ram', 'kumar', '12345', 2022, 7, 'male', 15, 'class leader', 'radha', 'kumar', 'mumbai'),
('student002', 'sita', 'mahalakshmi', 'abcd', 2022, 7, 'female', 13, 'none', 'radha', 'kumar', 'chennai'),
('student003', 'ravi', 'kumar', 'xyz', 2022, 5, 'male', 14, 'none', 'santhi', 'ragav', 'indore'),
('student004', 'ramesh', 'reddy', 'qwer', 2022, 3, 'male', 15, 'class leader', 'sita', 'karim', 'guntur'),
('student005', 'poorna', 'teja', 'poorna', 2022, 5, 'male', 16, 'none', 'parimala', 'srinivas', 'indore'),
('student006', 'keerthi', 'suresh', 'keerthi', 2022, 3, 'female', 13, 'class leader', 'radha', 'suresh', 'chennai'),
('student007', 'jeevan', 'savara', 'jeevan', 2022, 3, 'male', 11, 'none', 'laxmi', 'madhav', 'vizag'),
('student008', 'vishal', 'naik', 'vishal', 3, 8, 'male', 19, 'cr', 'vi', 'fd', 'dfr'),
('student009', 'bhanu', 'prasad', '8658147710', 2022, 5, 'male', 10, 'cr', 'kanaka mahalaxmi', 'satyanarayana', 'CVR HOSTEL');

-- --------------------------------------------------------

--
-- Table structure for table `studentbody`
--

CREATE TABLE `studentbody` (
  `admin_id` varchar(50) NOT NULL,
  `student_roll_number` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentbody`
--

INSERT INTO `studentbody` (`admin_id`, `student_roll_number`) VALUES
('admin001', 'student001'),
('admin002', 'student002'),
('admin001', 'student003'),
('admin002', 'student004'),
('admin001', 'student005'),
('admin002', 'student006'),
('admin001', 'student007');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `faculty_id` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`faculty_id`, `course_id`) VALUES
('faculty001', 2),
('faculty002', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transaction_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `debited_account` varchar(50) NOT NULL,
  `credited_account` varchar(50) NOT NULL,
  `date_of_transaction` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transaction_id`, `amount`, `debited_account`, `credited_account`, `date_of_transaction`) VALUES
(100001, 25000, 'xyz', 'abc', '2022-05-03'),
(100002, 37000, 'qwe', 'asd', '2021-10-12');

-- --------------------------------------------------------

--
-- Table structure for table `transportation`
--

CREATE TABLE `transportation` (
  `bus_no` int(11) NOT NULL,
  `maximum_capacity` int(11) NOT NULL,
  `destination` varchar(50) NOT NULL,
  `via_route` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transportation`
--

INSERT INTO `transportation` (`bus_no`, `maximum_capacity`, `destination`, `via_route`) VALUES
(1, 30, 'a', 'b'),
(2, 45, 'z', 'x');

-- --------------------------------------------------------

--
-- Table structure for table `under`
--

CREATE TABLE `under` (
  `nts_id` varchar(50) NOT NULL,
  `bus_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `under`
--

INSERT INTO `under` (`nts_id`, `bus_no`) VALUES
('nts002', 1),
('nts002', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `belongingto`
--
ALTER TABLE `belongingto`
  ADD KEY `hjkgfd` (`course_id`),
  ADD KEY `rtyueis` (`department_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `fk` (`faculty_id`);

--
-- Indexes for table `dealing`
--
ALTER TABLE `dealing`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `23` (`transaction_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `eas`
--
ALTER TABLE `eas`
  ADD PRIMARY KEY (`external_affaries_name`),
  ADD KEY `k` (`admin_id`);

--
-- Indexes for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD PRIMARY KEY (`student_roll_number`),
  ADD KEY `ascv` (`course_id`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`exam_name`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `infrasructure`
--
ALTER TABLE `infrasructure`
  ADD PRIMARY KEY (`block_no`);

--
-- Indexes for table `infrasructurebody`
--
ALTER TABLE `infrasructurebody`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `4` (`block_no`);

--
-- Indexes for table `isa`
--
ALTER TABLE `isa`
  ADD PRIMARY KEY (`s.no`),
  ADD KEY `rty` (`faculty_id`),
  ADD KEY `wer` (`nts_id`),
  ADD KEY `asd` (`staff_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`isbn_no`);

--
-- Indexes for table `libraryboby`
--
ALTER TABLE `libraryboby`
  ADD KEY `5678` (`admin_id`),
  ADD KEY `4536` (`isbn_no`);

--
-- Indexes for table `materials`
--
ALTER TABLE `materials`
  ADD KEY `q` (`course_id`),
  ADD KEY `h` (`isbn_no`);

--
-- Indexes for table `nts`
--
ALTER TABLE `nts`
  ADD PRIMARY KEY (`nts_id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`Student_roll_number`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD KEY `a` (`exam_name`),
  ADD KEY `b` (`student_roll_number`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `staffbody`
--
ALTER TABLE `staffbody`
  ADD KEY `zxcvbn` (`admin_id`),
  ADD KEY `tyugfdsa` (`staff_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_roll_number`);

--
-- Indexes for table `studentbody`
--
ALTER TABLE `studentbody`
  ADD KEY `123` (`admin_id`),
  ADD KEY `345` (`student_roll_number`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD KEY `fg` (`course_id`),
  ADD KEY `78` (`faculty_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `transportation`
--
ALTER TABLE `transportation`
  ADD PRIMARY KEY (`bus_no`);

--
-- Indexes for table `under`
--
ALTER TABLE `under`
  ADD KEY `4890` (`bus_no`),
  ADD KEY `5612` (`nts_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `belongingto`
--
ALTER TABLE `belongingto`
  ADD CONSTRAINT `hjkgfd` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `rtyueis` FOREIGN KEY (`department_id`) REFERENCES `department` (`department_id`);

--
-- Constraints for table `courses`
--
ALTER TABLE `courses`
  ADD CONSTRAINT `fk` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`);

--
-- Constraints for table `dealing`
--
ALTER TABLE `dealing`
  ADD CONSTRAINT `12` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `23` FOREIGN KEY (`transaction_id`) REFERENCES `transactions` (`transaction_id`);

--
-- Constraints for table `eas`
--
ALTER TABLE `eas`
  ADD CONSTRAINT `k` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `enrolled`
--
ALTER TABLE `enrolled`
  ADD CONSTRAINT `ascv` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`),
  ADD CONSTRAINT `qwrt` FOREIGN KEY (`student_roll_number`) REFERENCES `student` (`student_roll_number`);

--
-- Constraints for table `infrasructurebody`
--
ALTER TABLE `infrasructurebody`
  ADD CONSTRAINT `3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `4` FOREIGN KEY (`block_no`) REFERENCES `infrasructure` (`block_no`);

--
-- Constraints for table `isa`
--
ALTER TABLE `isa`
  ADD CONSTRAINT `asd` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `rty` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `wer` FOREIGN KEY (`nts_id`) REFERENCES `nts` (`nts_id`);

--
-- Constraints for table `libraryboby`
--
ALTER TABLE `libraryboby`
  ADD CONSTRAINT `4536` FOREIGN KEY (`isbn_no`) REFERENCES `library` (`isbn_no`),
  ADD CONSTRAINT `5678` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `materials`
--
ALTER TABLE `materials`
  ADD CONSTRAINT `h` FOREIGN KEY (`isbn_no`) REFERENCES `library` (`isbn_no`),
  ADD CONSTRAINT `q` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `parent`
--
ALTER TABLE `parent`
  ADD CONSTRAINT `qdafsrt` FOREIGN KEY (`Student_roll_number`) REFERENCES `student` (`student_roll_number`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `a` FOREIGN KEY (`exam_name`) REFERENCES `exam` (`exam_name`),
  ADD CONSTRAINT `b` FOREIGN KEY (`student_roll_number`) REFERENCES `student` (`student_roll_number`);

--
-- Constraints for table `staffbody`
--
ALTER TABLE `staffbody`
  ADD CONSTRAINT `tyugfdsa` FOREIGN KEY (`staff_id`) REFERENCES `staff` (`staff_id`),
  ADD CONSTRAINT `zxcvbn` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `studentbody`
--
ALTER TABLE `studentbody`
  ADD CONSTRAINT `123` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`),
  ADD CONSTRAINT `345` FOREIGN KEY (`student_roll_number`) REFERENCES `student` (`student_roll_number`);

--
-- Constraints for table `teaching`
--
ALTER TABLE `teaching`
  ADD CONSTRAINT `78` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`faculty_id`),
  ADD CONSTRAINT `fg` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`);

--
-- Constraints for table `under`
--
ALTER TABLE `under`
  ADD CONSTRAINT `4890` FOREIGN KEY (`bus_no`) REFERENCES `transportation` (`bus_no`),
  ADD CONSTRAINT `5612` FOREIGN KEY (`nts_id`) REFERENCES `nts` (`nts_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
