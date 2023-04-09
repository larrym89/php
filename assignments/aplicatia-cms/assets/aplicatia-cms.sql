-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 07:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplicatia-cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(50) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'politics', '2023-03-24 15:16:27', '2023-03-24 14:16:27'),
(2, 'economy', '2023-03-24 15:16:27', '2023-03-24 14:16:27'),
(3, 'education', '2023-03-24 18:07:54', '2023-03-24 17:07:54'),
(4, 'sports', '2023-03-24 18:07:54', '2023-03-24 17:07:54');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(50) NOT NULL,
  `content` text NOT NULL,
  `post_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `content`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'comment', 1, 1, '2023-03-24 15:18:02', '2023-03-24 15:18:02'),
(2, 'content', 3, 2, '2023-03-24 18:09:27', '2023-03-24 18:09:27'),
(5, 'fgh', 2, 4, '2023-04-08 00:06:01', '2023-04-08 00:06:01'),
(6, 'fgh', 2, 4, '2023-04-08 00:06:52', '2023-04-08 00:06:52'),
(7, '5555555555', 2, 4, '2023-04-08 00:07:39', '2023-04-08 00:07:39'),
(8, '4lea', 4, 2, '2023-04-08 00:09:56', '2023-04-08 00:09:56'),
(9, 'nr4', 4, 2, '2023-04-08 00:10:01', '2023-04-08 00:10:01'),
(10, 'VVVVVVVVVVVVVVVVVVVVVVV', 3, 2, '2023-04-08 00:10:59', '2023-04-08 00:10:59'),
(12, '333333', 3, 1, '2023-04-08 00:28:17', '2023-04-08 00:28:17'),
(13, 'nu poti comenta primul post', 1, 1, '2023-04-08 00:55:44', '2023-04-08 00:55:44'),
(14, 'ds dfsg sd d dds fsdf df ds', 8, 1, '2023-04-08 09:10:33', '2023-04-08 09:10:33'),
(16, 'comment from user2 on post id=6', 6, 3, '2023-04-09 18:12:07', '2023-04-09 18:12:07'),
(18, 'AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA', 3, 3, '2023-04-09 18:43:24', '2023-04-09 18:43:24');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(50) NOT NULL,
  `posts_title` varchar(255) NOT NULL,
  `posts_content` text NOT NULL,
  `posts_category_name` varchar(50) NOT NULL,
  `posts_created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `posts_updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `posts_title`, `posts_content`, `posts_category_name`, `posts_created_at`, `posts_updated_at`) VALUES
(1, 'primul post', 'content', 'economy', '2023-03-24 15:17:42', '2023-03-24 15:17:42'),
(2, 'al doilea post', 'content', 'sports', '2023-03-24 15:17:42', '2023-03-24 15:17:42'),
(3, 'al treilea', 'content', 'sports', '2023-03-24 18:08:41', '2023-03-24 18:08:41'),
(4, 'al 4lea', 'content', 'education', '2023-03-24 18:09:06', '2023-03-24 18:09:06'),
(6, 'numarul 5', '', 'Politics', '2023-04-08 08:51:08', '2023-04-08 08:51:08'),
(7, '2345325423', 'sdf gsdfgsdgsd dfhg sdhs d', 'politics', '2023-04-08 09:09:04', '2023-04-08 09:09:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(10) NOT NULL DEFAULT 3,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `status`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@newsapp.com', '$2y$10$5GMzhsaiAnelts6A5wgVfuisksV93pTlkp3TpIOlqeu6t1n2uJSAK', 3, '2023-04-07 13:12:42', '2023-04-07 13:12:42'),
(2, 'user1', 'user1@newsapp.com', '$2y$10$63mu9/Noe.MR3g670VBpNOesaHxDyRCK0t.mFeUPBOe0DBwGUICEO', 3, '2023-04-07 13:46:24', '2023-04-07 13:46:24'),
(3, 'user2', 'user2@newsapp.com', '$2y$10$B2EpQOAOo1oZZMrMaeF9lerBBj9V5LP1S4m5cjBbbXLegrAMa6g1i', 3, '2023-04-07 23:08:00', '2023-04-07 23:08:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
