-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2019 at 02:41 PM
-- Server version: 5.7.24-0ubuntu0.18.04.1
-- PHP Version: 7.2.10-0ubuntu0.18.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meplus`
--

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(3) NOT NULL,
  `title` varchar(50) NOT NULL,
  `short_description` varchar(200) NOT NULL,
  `full_description` varchar(3000) NOT NULL,
  `branch` varchar(80) NOT NULL,
  `cost` int(10) NOT NULL,
  `validity` varchar(7) NOT NULL,
  `company` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `title`, `short_description`, `full_description`, `branch`, `cost`, `validity`, `company`) VALUES
(1, 'demo title', 'This is short description for demo certificate ...this is just for testing', 'this is full description of the demo certification this is also made for testing purpose .You may delete this certification after testing ...the end of demo certification full description', 'web development', 5, '1 YEAR', 'The DEMO GROUP'),
(4, 'CCIE: Cisco Certified Internetwork Expert', 'An evergreen and high-value networking certification is the Cisco Certified Internetwork Expert (CCIE), which comes in several tracks.', 'An evergreen and high-value networking certification is the Cisco Certified Internetwork Expert (CCIE), which comes in several tracks. The annual production of CCIEs remains small enough that Cisco can still claim to hire all of them itself, with demand and appreciation for this difficult and rewarding certification always stratospheric. Over the past few years, the Storage Networking credential gave way to Collaboration, and a Data Center credential was introduced.\r\n\r\nAlthough the road to obtaining the CCIE is long and hard, it is well worth the effort, time and money. This is a credential that will open doors to plenty of job opportunities and high salaries for networking pros.', 'networking', 0, '18month', 'Cisco'),
(5, 'Certified Ethical Hacker', 'Certified Ethical Hacker (CEH) is the broadest of all available certification options. The CEH exam is designed to test the cybersecurity professional’s baseline knowledge of security threats, risk', 'The Certified Ethical Hacker (CEH) is the broadest of all available certification options. The CEH exam is designed to test the cybersecurity professional’s baseline knowledge of security threats, risks, and countermeasures through lectures and hands-on labs. An experienced professional may sit for the exam without any training by submitting proof of at least two years of cybersecurity experience.  Managed by the EC-Council, a significant benefit of the CEH certification is flexibility. The EC-Council has options for instructor-led training, video lectures, and self-study. These options are available online and organizations have the option of contracting EC-Council trainers to conduct on-site training.   Even though many of the job listings for ethical hackers specifically require a CEH certification, it may not always be the best option. A major criticism of CEH is that because of the emphasis on lecture-based training, most of their hacking courses do not provide an adequate amount of hands-on experience. ', 'hacking', 0, '2 Years', ' EC-Council'),
(7, 'Global Information Assurance Certification (GIAC)', 'The Global Information Assurance Certification (GIAC) program is run by the SANS Institute, one of the oldest organizations that provides cybersecurity education. ', 'The Global Information Assurance Certification (GIAC) program is run by the SANS Institute, one of the oldest organizations that provides cybersecurity education. GIAC offers dozens of vendor-neutral certifications with courses that require hands-on learning. GIAC courses are held online. The company also sponsors research white papers that are provided to the cybersecurity industry without charge.\r\n\r\nThere are a variety of options to earn the GIAC Penetration Tester (GPEN) certification, but it is highly recommended that learners take the SEC560 course on Network Penetration Testing and Ethical Hacking from the SANS Institute; it is one of the most comprehensive courses on the topic and demonstrates that the certificate holder has received a good balance of theory and hands-on training.', 'hacking', 0, '4Years', 'GPEN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
