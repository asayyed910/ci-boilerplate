-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2019 at 02:52 PM
-- Server version: 5.7.28-0ubuntu0.16.04.2
-- PHP Version: 7.2.25-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_boiler`
--

-- --------------------------------------------------------

--
-- Table structure for table `practice_templates`
--

CREATE TABLE `practice_templates` (
  `id` int(11) NOT NULL,
  `practice_id` int(11) DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `message` text COLLATE utf8mb4_unicode_ci,
  `type` enum('SMS','EMAIL') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message_category` enum('BOOKING','INSTA','RECALL','REMAINDER','STATEMENT','CUSTOM') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `practice_templates`
--

INSERT INTO `practice_templates` (`id`, `practice_id`, `description`, `message`, `type`, `message_category`, `created_by`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, NULL, 'Reminder SMS', 'SMS TEST\r\n{patient name} \r\n{date} \r\n{treatment} \r\n{Practice_Name} \r\n{Loc}', 'SMS', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL),
(3, NULL, 'Booking Email', 'Thank you for scheduling an appointment for {patient name} with {Loc} on: {date} <br />\r\n<br />\r\nWe look forward to seeing {patient name}! <br />\r\n<br />\r\nBest regards, <br />\r\n{Practice_Name}', 'EMAIL', 'BOOKING', NULL, '2019-12-20 06:36:36', NULL, NULL),
(4, NULL, 'Booking SMS', 'Thank you for scheduling an appointment for {patient name} with {Loc} on: {date} \r\n\r\nWe look forward to seeing {patient name}!\r\n\r\nBest regards, \r\n{Practice_Name}', 'SMS', 'BOOKING', NULL, '2019-12-20 06:36:36', NULL, NULL),
(5, NULL, 'Recall Email 1', 'Dear {patient name}, <br />\r\nRecall Email 1<br />\r\nYou are due to schedule a recall appointment with our office.<br />\r\nPlease call us to discuss the benefits for your free recall visit.<br />\r\nTEST AGAIN - RECALL', 'EMAIL', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(6, NULL, 'Recall Email 2', 'Dear {patient name}, <br />\r\nRecall Email 2<br />\r\nYou are due to schedule a recall appointment with {Practice_Name}.<br />\r\nPlease call us to discuss the benefits for your free recall visit.', 'EMAIL', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(7, NULL, 'Recall Email 3', 'Dear {patient name}, <br />\r\nRecall Email 3<br />\r\nYou are due to schedule a recall appointment with {Practice_Name}.<br />\r\nPlease call us to discuss the benefits for your free recall visit.', 'EMAIL', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(8, NULL, 'Recall SMS 1', 'Recall SMS 1 - Dear {patient name} - {Practice_Name} - {Loc} - {date} - {treatment} <br />\r\nPlease call us to discuss your free checkup visit.', 'SMS', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(9, NULL, 'Recall SMS 2', 'Recall SMS 2 - Dear {patient name} - {Practice_Name} - {Loc} - {date} - {treatment} <br />\r\nPlease call us to discuss your free checkup visit.', 'SMS', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(10, NULL, 'Recall SMS 3', 'Recall SMS 3 - Dear {patient name} - {Practice_Name} - {Loc} - {date} - {treatment} <br />\r\nPlease call us to discuss your free checkup visit.', 'SMS', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(11, NULL, 'No Show SMS Message', 'Hi {patient name}, <br />\r\n<br />\r\nyou missed your orthodontic appointment. <br />\r\nPlease call to reschedule. <br />\r\n<br />\r\nTEST AGAIN', 'SMS', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(37, NULL, 'test message', 'Hi {patient name},<br />\r\n<br />\r\nWe need to see you again.<br />\r\n<br />\r\nPlease call us', 'EMAIL', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(40, NULL, 'Recall TEST EMAIL', 'RECALL TEST EMAIL<br />\r\n{patient name} <br />\r\n{date} <br />\r\n{treatment} <br />\r\n{Practice_Name} <br />\r\n{Loc}', 'EMAIL', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(41, NULL, 'Missed Appointment - SMS', 'Hi {patient name}, you have missed an appt, pls call to reschedule.', 'SMS', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(42, NULL, 'Missed Appointment - Email', 'Hi {patient name}, <br />\r\n<br />\r\nYou have missed an appointment.<br />\r\nPlease call {Practice_Name} to reschedule.<br />\r\n<br />\r\nENTER', 'EMAIL', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(44, NULL, 'Reminder Email', 'EMAIL TEST<br />\r\n{patient name} <br />\r\n{date} <br />\r\n{treatment} <br />\r\n{Practice_Name} <br />\r\n{Loc} TEST EMAIL', 'EMAIL', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL),
(45, NULL, 'Reminder SMS TEST', 'TEST {patient name}  on {date} ', 'SMS', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL),
(46, NULL, 'Reminder SMS Test 2', '{patient name} {date}', 'SMS', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL),
(50, NULL, 'testing', 'Hey {patient name},<br />\r\n<br />\r\nThank you for scheduling an appointment for {patient name} with {Loc} on: {date} <br />\r\nWe look forward to seeing {patient name}! <br />\r\n<br />\r\nBest regards, <br />\r\n{Practice_Name}', 'EMAIL', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL),
(51, NULL, 'Recall TEST SMS', 'RECALL TEST SMS<br />\r\n{patient name} <br />\r\n{date} <br />\r\n{treatment} <br />\r\n{Practice_Name} <br />\r\n{Loc}', 'SMS', 'RECALL', NULL, '2019-12-20 06:36:36', NULL, NULL),
(52, NULL, 'CUSTOM MESSAGE TEST EMAIL', 'CUSTOM MESSAGE TEST EMAIL<br />\r\n{patient name} <br />\r\n{date} <br />\r\n{treatment} <br />\r\n{Practice_Name} <br />\r\n{Loc}', 'EMAIL', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(53, NULL, 'CUSTOM MESSAGE TEST SMS', 'CUSTOM MESSAGE TEST SMS<br />\r\n{patient name} <br />\r\n{date} <br />\r\n{treatment} <br />\r\n{Practice_Name} <br />\r\n{Loc}', 'SMS', 'INSTA', NULL, '2019-12-20 06:36:36', NULL, NULL),
(57, NULL, 'Statement Email Message', 'Dear {Responsible}, <br />\r\n<br />\r\nStatement Email - TEST<br />\r\nPlease view your latest Statement at {SHORT_URL}.<br />\r\n<br />\r\nBest regards,<br />\r\n{Practice_Name}', 'EMAIL', 'STATEMENT', NULL, '2019-12-20 06:36:36', NULL, NULL),
(58, NULL, 'Statement SMS Message', 'Hi {Responsible}, Your latest statement is now available from {Practice_Name} at {SHORT_URL}. 1800 223 603', 'SMS', 'STATEMENT', NULL, '2019-12-20 06:36:36', NULL, NULL),
(59, NULL, 'Statement SMS Message2', 'Hi {Responsible}, Your latest statement iTESTle from {Practice_Name} at {SHORT_URL}. ', 'SMS', 'STATEMENT', NULL, '2019-12-20 06:36:36', NULL, NULL),
(60, NULL, 'buikld new appt message', '{patient name}  sdf wef wef aEF  {date} ', 'SMS', 'REMAINDER', NULL, '2019-12-20 06:36:36', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `practice_templates`
--
ALTER TABLE `practice_templates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `practice_templates`
--
ALTER TABLE `practice_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
