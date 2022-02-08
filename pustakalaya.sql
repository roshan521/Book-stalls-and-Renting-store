-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2022 at 02:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pustakalaya`
--

-- --------------------------------------------------------

--
-- Table structure for table `booksonrent`
--

CREATE TABLE `booksonrent` (
  `rent_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(2552) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `dayissued` int(50) NOT NULL,
  `Sem` varchar(50) NOT NULL,
  `price` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `paymentMethod` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booksonrent`
--

INSERT INTO `booksonrent` (`rent_id`, `order_no`, `name`, `email`, `phone`, `address`, `bookname`, `dayissued`, `Sem`, `price`, `date`, `paymentMethod`) VALUES
(2, 'rent466', 'pramesh shrestha', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'C programming ', 10, '1', '10', '2021-07-29', 'COD'),
(3, 'rent192', 'Ram', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'C programming ', 10, '1', '10', '2021-08-07', 'COD'),
(4, 'rent116', 'Ram', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'Information Technology', 5, '1', '30', '2021-07-31', 'COD'),
(6, 'rent120', 'pramesh shrestha', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'Discrete Structure', 10, '2', '40', '2021-07-02', 'COD');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `contact_phone` varchar(20) NOT NULL,
  `contact_message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_name`, `contact_email`, `contact_phone`, `contact_message`) VALUES
(13, 'Pramesh Shrestha', 'pramesh@gmail.com', '6546444334', 'Shrestha');

-- --------------------------------------------------------

--
-- Table structure for table `img_upload`
--

CREATE TABLE `img_upload` (
  `img_id` int(11) NOT NULL,
  `user_id` int(20) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_upload`
--

INSERT INTO `img_upload` (`img_id`, `user_id`, `uname`, `image`) VALUES
(12, 7, 'Ram', 'madhu.jpg'),
(13, 1, 'pramesh shrestha', 'pramesh.jpg'),
(14, 8, 'madhu khadka', 'madhu.jpg'),
(15, 0, 'pramesh@gmail.com', 'pramesh.jpg'),
(16, 1, 'pramesh', 'pramesh.jpg'),
(17, 44, 'Hari bahadur', 'Capture.PNG'),
(18, 46, 'roshanthapa', 'roshan.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mycart`
--

CREATE TABLE `mycart` (
  `username` varchar(30) NOT NULL,
  `new_id` int(10) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(50,0) NOT NULL,
  `cartid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mycart`
--

INSERT INTO `mycart` (`username`, `new_id`, `qty`, `price`, `cartid`) VALUES
('pramesh shrestha', 13, 1, '1005', 50),
('pramesh shrestha', 7, 2, '300', 47),
('pramesh@gmail.com', 8, 1, '400', 51),
('madhu khadka', 17, 2, '350', 49),
('pramesh', 8, 1, '400', 52),
('kpBaa', 8, 1, '400', 53),
('kpBaa', 12, 1, '979', 54);

-- --------------------------------------------------------

--
-- Table structure for table `nbook`
--

CREATE TABLE `nbook` (
  `new_id` int(10) NOT NULL,
  `newbook` varchar(66) DEFAULT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `Sem` varchar(1) DEFAULT NULL,
  `Author` varchar(44) DEFAULT NULL,
  `PublicationHouse` varchar(40) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `Price` float DEFAULT NULL,
  `image` varchar(1000) NOT NULL DEFAULT 'nbook/na.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nbook`
--

INSERT INTO `nbook` (`new_id`, `newbook`, `Branch`, `Sem`, `Author`, `PublicationHouse`, `description`, `Price`, `image`) VALUES
(7, 'Information Technology', 'CSIT', '1', 'Imran saeed', 'KITAB MARKAZ', 'Information technology (IT) is the use of computers to store or retrieve data and information', 300, 'IT1sem.jpg'),
(8, 'Discrete Structure', 'CSIT', '2', 'James L.Hein', 'PEARSON', 'Discrete structure is specifically designed to be used at the beginner level. It covers all the basic hardware and software concepts in computers ', 400, '61DjylXbCGL._SX404_BO1,204,203,2.jpg'),
(11, 'C programming ', 'CSIT', '1', 'Herbert Schidlt', 'Osborne', ' book is a medium for recording information in the form of writing or images, typically composed of many pages ', 1005, '13.jpg'),
(9, 'Digital Logic', 'CSIT', '1', 'M. Morris Mano', 'PEARSON', 'Lots of innovative ideas come to my mind whenever  I enter the college premise, which has always helped to boost', 428, 'DL1sem.jpg'),
(15, 'Artificial Intelligence', 'CSIT', '4', 'Staurt Russell', 'PRENTICE HALL', 'Artificial Intelligence (AI) is a big field, and this is a big book. We have tried to explore the full breadth of the field, which encompasses logic, probability, and continuous mathematics; perceptio', 350, 'AI.png'),
(10, 'Mathematics-II', 'CSIT', '2', 'BInod Prasad Dhakal', 'KEC', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages ', 428, 'download (1).jpg'),
(12, 'Physics', 'CSIT', '1', 'J.P Agrawal', 'A.P publication', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages ', 979, 'physics.jpg'),
(13, 'Data Structure and Algorithms', 'CSIT', '3', 'Thomas  H.Cormen', 'PEARSON', 'data algorithm is 3rd semester book', 1005, '47.jpg'),
(14, 'Compiler Design', 'CSIT', '6', 'Alfred V. Aho', 'Osborne', 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu', 428, '95.jpg'),
(16, 'Cryptography ', 'CSIT', '5', 'Stallings William', 'PEARSON', 'Pearson brings to you the revised edition of Cryptography and Network Security by Stallings. In an age of viruses and hackers, electronic eavesdropping and electronic fraud on a global scale, security', 710, 'crypto.jpg'),
(17, 'Principal Of management', 'CSIT', '7', 'Mahandra Chalisa', 'KEC', 'POM is a book about managing projects and all.', 350, 'principal of management.jpg'),
(18, 'Data warehousing', 'CSIT', '7', 'Bhpendra singh saud', 'KEC', 'Data warehousing is about warehousing and data mning', 355, 'data warehouse.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `obook`
--

CREATE TABLE `obook` (
  `old_id` int(10) NOT NULL,
  `oldbook` varchar(66) DEFAULT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `seller` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Sem` varchar(1) DEFAULT NULL,
  `Author` varchar(44) DEFAULT NULL,
  `PublicationHouse` varchar(40) DEFAULT NULL,
  `Price` float DEFAULT NULL,
  `image` varchar(1000) NOT NULL DEFAULT 'nbook/na.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `obook`
--

INSERT INTO `obook` (`old_id`, `oldbook`, `Branch`, `seller`, `email`, `Sem`, `Author`, `PublicationHouse`, `Price`, `image`) VALUES
(5, 'Compiler Design', 'CSIT', 'pramesh shrestha', 'pramesh@gmail.com', '6', 'Alfred V. Aho', 'PEARSON', 120, '95.jpg'),
(6, 'Java', 'CSIT', 'pramesh shrestha', 'pramesh@gmail.com', '7', 'E.Balagurusyami', 'McGraw Hill', 120, '40.jpeg'),
(7, 'Web Technology', 'CSIT', 'Ram', 'ram@gmail.com', '5', 'Jagdish Bhatta', 'KEC', 120, 'web tech.PNG'),
(8, 'Simulation', 'CSIT', 'Ram', 'ram@gmail.com', '5', 'Santosh Dhungana', 'KEC', 155, 'simulation.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `order_no` varchar(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(2552) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `bookname` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `qty` int(10) NOT NULL,
  `Sem` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `paymentMethod` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `order_no`, `name`, `email`, `phone`, `address`, `bookname`, `price`, `qty`, `Sem`, `date`, `paymentMethod`, `status`) VALUES
(10, 'ord375', 'pramesh shrestha', 'pramesh@gmail.com', '9817534262', 'butwal', 'Artificial Intelligence', 350, 3, '4', '2021-07-21', 'COD', 'completed'),
(11, 'ord290', 'pramesh shrestha', 'pramesh@gmail.com', '9817534262', 'butwal', 'Discrete Structure', 400, 2, '2', '2021-07-15', 'COD', 'completed'),
(12, 'ord345', 'pramesh shrestha', 'pramesh@gmail.com', '6546444334', 'pharsatikar', 'Information Technology', 300, 3, '1', '2021-09-17', 'COD', 'processing'),
(13, 'ord114', 'madhu khadka', 'madhu@gmail.com', '6546444334', 'pharsatikar', 'Principal Of management', 350, 2, '7', '2021-11-18', 'COD', 'transporting'),
(14, 'ord175', '', 'pramesh@gmail.com', '9815430493', 'pharsatikar', 'Discrete Structure', 400, 1, '2', '2021-12-20', 'COD', 'processing'),
(15, 'ord197', 'pramesh', 'pramesh@gmail.com', '9815430493', 'pharsatikar', 'Discrete Structure', 400, 1, '2', '2021-12-29', 'COD', 'processing'),
(18, 'ord120', 'kpBaa', 'kpbaa@gmail.com', '9811436594', 'Jhapa', 'Discrete Structure', 400, 1, '2', '2021-12-15', 'COD', 'processing'),
(19, 'ord297', 'roshanthapa', 'roshan521@gmail.com', '9811436594', 'Butwal', 'Digital Logic', 428, 1, '1', '2021-12-22', 'COD', 'processing');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `post_date` varchar(50) NOT NULL,
  `author` varchar(40) NOT NULL,
  `post_img` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `title`, `description`, `category`, `post_date`, `author`, `post_img`) VALUES
(11, 'KEC 7th Semester Books', 'Recently new 7th semester KEC publication books has been released and distribute on stores. The books are of revised edition according to new syllabus. KEC has published three books of 7th semester which are Principle of management, Java and Data warehouse.', 'Education', '23 Sep,2021', 'pramesh shrestha', 'principal of management.jpg'),
(12, 'Form Filling of 7th Semester', 'Tu IOST has recently recently published 7th semester and 3rd semester form filling with the deadline at kartik 10.The rate is Rs. 1700 for regular and 2700 for partial and elective.', 'Education', '23 Sep,2021', 'pramesh shrestha', 'Capture.PNG'),
(13, 'KEC 3rd Semester Books', 'Recently new 3rd semester KEC publication books has been released and distribute on stores. The books are of revised edition according to new syllabus. KEC has published three books of 3rd semester which are Computer Graphics, Architecture, and Numerical Method.', 'Education', '02 Oct,2021', 'pramesh shrestha', 'grphics.PNG'),
(14, 'How To Buy  Books From Our Site', 'Books stall and renting store is a It based bookstore here you can buy books related to csit and ICT.<h3>How to Place an Order</h3>Placing an order is as straightforward and easy as it can be. Simple, add your picks to the cart and then conclude your shopping by filling in some personal and shipping details.\r\n<h3>Visit our website:</h3>\r\nVisit our official website and browse our catalog by different categories or search the name of books or authors manually.', 'Knowledge', '24 nov 2021', 'pramesh', 'library1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ratting`
--

CREATE TABLE `ratting` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(30) NOT NULL,
  `ratting` int(11) NOT NULL,
  `review` varchar(4000) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `pid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratting`
--

INSERT INTO `ratting` (`id`, `name`, `email`, `ratting`, `review`, `date`, `pid`) VALUES
(11, 'pramesh shrestha', 'pramesh@gmail.com', 1, 'too lengthy and tough', '2021-12-09', 11),
(12, 'Ram bahadur', 'ram@gmail.com', 3, 'good;)', '2021-12-09', 11),
(13, 'pramesh shrestha', 'pramesh@gmail.com', 4, 'Amazing book', '2021-12-09', 7),
(14, 'Pramesh Shrestha', 'pramesh@gmail.com', 5, 'fantastic', '2021-12-09', 8),
(15, 'madhu khadka', 'madhu@gmail.com', 3, 'i loved it', '2021-12-09', 8),
(16, 'Pramesh Shrestha', 'pramesh@gmail.com', 1, 'Not so useful', '2021-12-09', 9);

-- --------------------------------------------------------

--
-- Table structure for table `rbook`
--

CREATE TABLE `rbook` (
  `rent_id` int(10) NOT NULL,
  `rentbook` varchar(66) DEFAULT NULL,
  `Branch` varchar(20) DEFAULT NULL,
  `Sem` varchar(1) DEFAULT NULL,
  `Author` varchar(44) DEFAULT NULL,
  `PublicationHouse` varchar(40) DEFAULT NULL,
  `description` varchar(200) NOT NULL,
  `Rent_price` float DEFAULT NULL,
  `image` varchar(1000) NOT NULL DEFAULT 'nbook/na.jpg'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rbook`
--

INSERT INTO `rbook` (`rent_id`, `rentbook`, `Branch`, `Sem`, `Author`, `PublicationHouse`, `description`, `Rent_price`, `image`) VALUES
(7, 'Information Technology', 'CSIT', '1', 'Imran saeed', 'KITAB MARKAZ', 'Information technology (IT) is the use of computers to store or retrieve data and information', 30, 'IT1sem.jpg'),
(8, 'Discrete Structure', 'CSIT', '2', 'James L.Hein', 'PEARSON', 'Discrete structure is specifically designed to be used at the beginner level. It covers all the basic hardware and software concepts in computers ', 40, '61DjylXbCGL._SX404_BO1,204,203,200_.jpg'),
(11, 'C programming ', 'CSIT', '1', 'Herbert Schidlt', 'Osborne', ' book is a medium for recording information in the form of writing or images, typically composed of many pages ', 10, '13.jpg'),
(9, 'Digital Logic', 'CSIT', '1', 'M. Morris Mano', 'PEARSON', 'Lots of innovative ideas come to my mind whenever  I enter the college premise, which has always helped to boost', 42, 'DL1sem.jpeg'),
(10, 'Mathematics-II', 'CSIT', '2', 'BInod Prasad Dhakal', 'KEC', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages ', 42, 'download (1).jpg'),
(12, 'Physics', 'CSIT', '1', 'J.P Agrawal', 'A.P publication', 'A book is a medium for recording information in the form of writing or images, typically composed of many pages ', 39, 'physics.jpg'),
(13, 'Data Structure and Algorithms', 'CSIT', '3', 'Thomas  H.Cormen', 'PEARSON', 'data algorithm is 3rd semester book', 12, '47.jpg'),
(14, 'Compiler Design', 'CSIT', '6', 'Alfred V. Aho', 'Osborne', 'Lorem ipsum dolor sit amet, consec adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliqu', 25, '95.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_email` varchar(100) NOT NULL,
  `book_types` varchar(20) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `book_request` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `contact_name`, `contact_email`, `book_types`, `book_name`, `book_request`) VALUES
(15, 'Pramesh Shrestha', 'pramesh@gmail.com', 'NewBook', 'Java', 'KEC 12th edition');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `password` varchar(200) NOT NULL,
  `usertype` varchar(200) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `phone`, `address`, `password`, `usertype`, `service`) VALUES
(1, 'pramesh shrestha', 'pramesh@gmail.com', '98676554545', 'pharsatikar', 'pramesh123', 'ADMIN', 'PRO'),
(44, 'Hari bahadur', 'hari@gmail.com', '9816540392', 'pharsatikar', 'hari123', 'USER', 'REG'),
(45, 'kpBaa', 'kpbaa@gmail.com', '9811436594', 'Jhapa', '123456', 'USER', 'REG'),
(46, 'roshanthapa', 'roshan521@gmail.com', '9811436594', 'Butwal', 'roshan123', 'USER', 'REG'),
(47, 'madhu khadka', 'madhu@gmail.com', '9817652432', 'manpakadi', 'madhu123', 'USER', 'REG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booksonrent`
--
ALTER TABLE `booksonrent`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `img_upload`
--
ALTER TABLE `img_upload`
  ADD PRIMARY KEY (`img_id`);

--
-- Indexes for table `mycart`
--
ALTER TABLE `mycart`
  ADD UNIQUE KEY `cartid` (`cartid`);

--
-- Indexes for table `nbook`
--
ALTER TABLE `nbook`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `obook`
--
ALTER TABLE `obook`
  ADD PRIMARY KEY (`old_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`),
  ADD UNIQUE KEY `post_id` (`post_id`);

--
-- Indexes for table `ratting`
--
ALTER TABLE `ratting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rbook`
--
ALTER TABLE `rbook`
  ADD PRIMARY KEY (`rent_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booksonrent`
--
ALTER TABLE `booksonrent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `img_upload`
--
ALTER TABLE `img_upload`
  MODIFY `img_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `mycart`
--
ALTER TABLE `mycart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `nbook`
--
ALTER TABLE `nbook`
  MODIFY `new_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `obook`
--
ALTER TABLE `obook`
  MODIFY `old_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `ratting`
--
ALTER TABLE `ratting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `rbook`
--
ALTER TABLE `rbook`
  MODIFY `rent_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
