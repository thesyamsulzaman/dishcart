-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 31, 2021 at 01:00 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dishcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ingredients`
--

INSERT INTO `ingredients` (`id`, `name`, `created_at`, `updated_at`) VALUES
(31, 'Tomato', '2020-12-08', '2020-12-08'),
(32, 'Onion', '2020-12-08', '2020-12-08'),
(33, 'Lemon', '2020-12-08', '2020-12-08'),
(34, 'Rice', '2020-12-08', '2020-12-08'),
(35, 'Egg', '2020-12-08', '2020-12-08'),
(36, 'Butter', '2020-12-08', '2020-12-08'),
(37, 'Chiken Breast', '2020-12-08', '2020-12-08'),
(38, 'Honey', '2020-12-08', '2020-12-08'),
(39, 'Maple', '2020-12-08', '2020-12-08'),
(40, 'Bacon', '2020-12-08', '2020-12-08'),
(41, 'Beef', '2020-12-08', '2020-12-08'),
(42, 'Beans', '2020-12-08', '2020-12-08'),
(43, 'Sausage', '2020-12-08', '2020-12-08'),
(44, 'Cracker', '2020-12-08', '2020-12-08'),
(45, 'Bun', '2020-12-08', '2020-12-08'),
(46, 'Chilli', '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `measurement_quantity`
--

CREATE TABLE `measurement_quantity` (
  `id` int(11) NOT NULL,
  `amount` varchar(3) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement_quantity`
--

INSERT INTO `measurement_quantity` (`id`, `amount`, `created_at`, `updated_at`) VALUES
(3, '.5', '2020-12-08', '2020-12-08'),
(4, '1', '2020-12-08', '2020-12-08'),
(5, '1.5', '2020-12-08', '2020-12-08'),
(6, '2', '2020-12-08', '2020-12-08'),
(7, '2.5', '2020-12-08', '2020-12-08'),
(8, '3', '2020-12-08', '2020-12-08'),
(9, '3.5', '2020-12-08', '2020-12-08'),
(10, '4', '2020-12-08', '2020-12-08'),
(11, '4.5', '2020-12-08', '2020-12-08'),
(12, '5', '2020-12-08', '2020-12-08'),
(13, '5.5', '2020-12-08', '2020-12-08'),
(14, '6', '2020-12-08', '2020-12-08'),
(15, '6.5', '2020-12-08', '2020-12-08'),
(16, '6', '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `measurement_units`
--

CREATE TABLE `measurement_units` (
  `id` int(11) NOT NULL,
  `description` varchar(150) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `measurement_units`
--

INSERT INTO `measurement_units` (`id`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Spoon', '2020-12-08', '2020-12-08'),
(2, 'Tea Spoon', '2020-12-08', '2020-12-08'),
(3, 'Sprinkle', '2020-12-08', '2020-12-08'),
(4, 'Clove', '2020-12-08', '2020-12-08'),
(5, 'Cups', '2020-12-08', '2020-12-08'),
(6, 'Cup', '2020-12-08', '2020-12-08'),
(7, 'Shot', '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `rate` int(1) NOT NULL DEFAULT 0,
  `comment` varchar(159) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `user_id`, `recipe_id`, `rate`, `comment`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 5, 'I can save this anytime i want', '2020-12-09', '2020-12-09'),
(2, 3, 2, 4, 'Well written, i do have a problem with the name though', '2020-12-09', '2020-12-09'),
(3, 4, 3, 5, 'nice touch with the ingredients', '2020-12-09', '2020-12-09'),
(4, 5, 4, 5, 'Best that i\'ve read so far', '2020-12-09', '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL DEFAULT 'default-recipe.jpg',
  `name` varchar(150) NOT NULL,
  `user_id` int(11) NOT NULL,
  `category` varchar(20) NOT NULL,
  `instruction` text NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `image`, `name`, `user_id`, `category`, `instruction`, `created_at`, `updated_at`) VALUES
(1, 'default-recipe.jpg', 'Giouvarlakia', 2, 'beverage', 'TestInstruction', '2020-12-08', '2020-12-08'),
(2, 'default-recipe.jpg', 'Broke Bithc Pizza', 4, 'meal', 'TestInstruction', '2020-12-08', '2020-12-08'),
(3, 'default-recipe.jpg', 'Veggie Wet Salad', 3, 'meal', 'TestInstruction', '2020-12-08', '2020-12-08'),
(4, 'default-recipe.jpg', 'Big Bunn Frech Burger', 2, 'dish', 'TestInstruction', '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `recipe_ingredients`
--

CREATE TABLE `recipe_ingredients` (
  `id` int(11) NOT NULL,
  `recipe_id` int(11) NOT NULL,
  `measurement_unit_id` int(11) NOT NULL,
  `measurement_quantity_id` int(11) NOT NULL,
  `ingredient_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recipe_ingredients`
--

INSERT INTO `recipe_ingredients` (`id`, `recipe_id`, `measurement_unit_id`, `measurement_quantity_id`, `ingredient_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 8, 36, '2020-12-09', '2020-12-09'),
(2, 1, 3, 3, 39, '2020-12-09', '2020-12-09'),
(3, 1, 5, 4, 35, '2020-12-09', '2020-12-09'),
(4, 2, 2, 4, 31, '2020-12-09', '2020-12-09'),
(5, 2, 7, 5, 35, '2020-12-09', '2020-12-09'),
(6, 2, 4, 3, 35, '2020-12-09', '2020-12-09'),
(7, 3, 5, 3, 38, '2020-12-09', '2020-12-09'),
(8, 3, 7, 4, 41, '2020-12-09', '2020-12-09'),
(9, 3, 1, 5, 35, '2020-12-09', '2020-12-09'),
(10, 4, 2, 6, 35, '2020-12-09', '2020-12-09'),
(11, 4, 4, 8, 31, '2020-12-09', '2020-12-09'),
(12, 4, 6, 3, 43, '2020-12-09', '2020-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(150) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` varchar(150) NOT NULL,
  `access_control_level` text DEFAULT NULL,
  `profile_picture` varchar(50) NOT NULL DEFAULT 'default.png',
  `cover_picture` varchar(150) DEFAULT 'default-cover.jpg',
  `about` text DEFAULT NULL,
  `deleted` int(11) DEFAULT 0,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `access_control_level`, `profile_picture`, `cover_picture`, `about`, `deleted`, `created_at`, `updated_at`) VALUES
(2, 'samparker', 'Syamsul', 'Zaman', 'thecardboardboyz@gmail.com', 'satuduatiga', NULL, 'default.png', 'default-cover.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2020-12-08', '2020-12-08'),
(3, 'ghoulmitten', 'Charlie', 'Kelly', 'kittensmittens@gmail.com', 'satuduatiga', NULL, 'default.png', 'default-cover.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2020-12-08', '2020-12-08'),
(4, 'macthebadass', 'Robert', 'McDonald', 'fisty@gmail.com', 'satuduatiga', NULL, 'default.png', 'default-cover.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2020-12-08', '2020-12-08'),
(5, 'jokeondee', 'Deandra', 'Reynolds', 'birdie@gmail.com', 'satuduatiga', NULL, 'default.png', 'default-cover.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 0, '2020-12-08', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `user_sessions`
--

CREATE TABLE `user_sessions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `session` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_quantity`
--
ALTER TABLE `measurement_quantity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `measurement_units`
--
ALTER TABLE `measurement_units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sessions`
--
ALTER TABLE `user_sessions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `measurement_quantity`
--
ALTER TABLE `measurement_quantity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `measurement_units`
--
ALTER TABLE `measurement_units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recipe_ingredients`
--
ALTER TABLE `recipe_ingredients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_sessions`
--
ALTER TABLE `user_sessions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
