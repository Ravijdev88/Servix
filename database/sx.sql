-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2021 at 07:37 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sx`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'valeno', '05c7c0f43c26733b9031bf579d2620fc');

-- --------------------------------------------------------

--
-- Table structure for table `booked`
--

CREATE TABLE `booked` (
  `id` int(11) NOT NULL,
  `providers_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `zip_code` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booked`
--

INSERT INTO `booked` (`id`, `providers_id`, `name`, `contact`, `email`, `address`, `zip_code`, `date`, `status`) VALUES
(1, 1, 'Mr  Onuora john', '08144307244', 'johnpaul@gmail.com', 'N0 24 Victorial Island Lagos', '2851', '2021-09-26', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL,
  `note` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `name`, `email`, `contact`, `image`, `location`, `note`, `date`) VALUES
(1, 'Johnpaul Onuora', 'valentine@gmail.com', '08144307243', 'admin/uploads/64932f3759ab1e7484cf16d416f5b39dprofile.jpg', 'Lagos', 'The site is cool. i love working with its providers because of there quick response to orders. Keep it up', '25-09-2021'),
(2, 'Mrs Chiwendu Onuora', 'chiwendu@gmail.com', '08144307243', 'admin/uploads/6e894a73d0705045c10e85ca8f715796avatar6.png', 'Enugu', 'Thanks alot for this. I no longer worry about Saturdays home cleaning when i have serviX to do the job for me at lower charges. Keep it up', '26-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `pre_comment`
--

CREATE TABLE `pre_comment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(200) NOT NULL,
  `note` longtext NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(100) NOT NULL,
  `id_name` varchar(255) NOT NULL,
  `id_pic` varchar(255) NOT NULL,
  `nepabill` varchar(255) NOT NULL,
  `work_type` varchar(200) NOT NULL,
  `others` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `capture` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `contact`, `email`, `password`, `city`, `address`, `experience`, `id_name`, `id_pic`, `nepabill`, `work_type`, `others`, `image`, `details`, `capture`, `status`, `last_login`, `date`) VALUES
(1, 'Johnpaul Onuora', '08144307244', 'valentineebube20@gmail.com', '$2y$10$BmTPgx9dZt6NOzX2H4oZcuQe1pxHR90AHgfsEEmyXgXXwq2nPM9ZC', 'Lagos', 'N0 24 Victorial Island Lagos', '7', '', 'admin/uploads/b7b37a9e9a4a18589c512cc20c400cddnoimage.jpg', 'admin/uploads/b7b37a9e9a4a18589c512cc20c400cddnoimage.jpg', 'Hot Tar Services', '', 'admin/uploads/ce8f9367d0fed6f49c399fea2885c40cval.png', 'I am currently the CEO of servix. Thanks for asking ', 'admin/uploads/6150a63c80b6f.png', 'Verified', 'online', '26-09-2021');

-- --------------------------------------------------------

--
-- Table structure for table `provider_request`
--

CREATE TABLE `provider_request` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(11) NOT NULL,
  `password` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `work_type` varchar(255) NOT NULL,
  `others` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `details` longtext NOT NULL,
  `capture` varchar(255) NOT NULL,
  `nepabill` varchar(255) NOT NULL,
  `national_id` varchar(255) NOT NULL,
  `message` varchar(100) NOT NULL,
  `date` varchar(255) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_name`, `image`) VALUES
(1, 'Hot Tar Services', 'uploads/b6d68b4f81e0cee7b8d2c9aa4f863897hot_tar_roofs.jpg'),
(2, 'Chef Services', 'uploads/6ec6f47ae78ca18c92a36b45961040admchef2.jpg'),
(3, 'Uber Services', 'uploads/fa016156766a777f84e4579ef097aeabuber2.jpg'),
(4, 'Painting Services', 'uploads/00be8de1004b39ac3affc7fdbbd669ecimages (15).jpg'),
(5, 'Cleaning Services', 'uploads/45fc19e240df5918bd2b0b98d4153d08wcleaner.jpg'),
(6, 'Home Tutors', 'uploads/4ff18db3b6a66be86192042ea425d19amtutor.jpg'),
(7, 'Plumber Man', 'uploads/c548ac0773e17ba123f522ca76d63588mplumber.jpg'),
(8, 'Security Guard', 'uploads/e473fea4267cc4825ec932384cc249fdguard1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booked`
--
ALTER TABLE `booked`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pre_comment`
--
ALTER TABLE `pre_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_request`
--
ALTER TABLE `provider_request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booked`
--
ALTER TABLE `booked`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pre_comment`
--
ALTER TABLE `pre_comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provider_request`
--
ALTER TABLE `provider_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
