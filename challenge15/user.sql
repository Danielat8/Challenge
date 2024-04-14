-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:4306
-- Generation Time: Apr 14, 2024 at 09:08 PM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `cover_img_url` varchar(255) DEFAULT NULL,
  `main_title` varchar(35) DEFAULT NULL,
  `subtitle` varchar(80) DEFAULT NULL,
  `about_you` tinytext DEFAULT NULL,
  `telephone_number` int(10) DEFAULT NULL,
  `location` varchar(75) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `img_url` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `img_url_2` varchar(255) DEFAULT NULL,
  `description_2` text DEFAULT NULL,
  `img_url_3` varchar(255) DEFAULT NULL,
  `description_3` text DEFAULT NULL,
  `company_description` text DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `google_plus` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `cover_img_url`, `main_title`, `subtitle`, `about_you`, `telephone_number`, `location`, `state`, `img_url`, `description`, `img_url_2`, `description_2`, `img_url_3`, `description_3`, `company_description`, `linkedin`, `facebook`, `twitter`, `google_plus`) VALUES
(1, 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=', 'Hello world', 'hello this title its more bigger than the main title', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores.\r\n', 93856, 'glh234op.lo', 'Services', 'https://images.pexels.com/photos/826349/pexels-photo-826349.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n\r\n', 'https://images.pexels.com/photos/40185/mac-freelancer-macintosh-macbook-40185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n', 'https://images.pexels.com/photos/1586973/pexels-photo-1586973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga.', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(2, 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=', 'Hello world', 'hello this title its more bigger than the main title', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores.\r\n', 785436, 'glh234op.lo', 'Services', 'https://images.pexels.com/photos/826349/pexels-photo-826349.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n\r\n', 'https://images.pexels.com/photos/40185/mac-freelancer-macintosh-macbook-40185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n', 'https://images.pexels.com/photos/1586973/pexels-photo-1586973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis accusantium sed, perferendis aliquid fugiat eos maiores excepturi sequi repellat asperiores sapiente aspernatur molestias dolore atque. Nulla incidunt dolor sapiente!\r\n\r\n\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga.', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(3, 'https://images.pexels.com/photos/2047905/pexels-photo-2047905.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'This is my title', 'hello this title its more bigger than the main title ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing\r\n', 8854735, 'jfs682lo', 'Products', 'https://images.pexels.com/photos/826349/pexels-photo-826349.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.\r\n\r\n\r\n\r\n', 'https://images.pexels.com/photos/40185/mac-freelancer-macintosh-macbook-40185.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.\r\n\r\n\r\n', 'https://images.pexels.com/photos/1586973/pexels-photo-1586973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Facere, pariatur.\r\n\r\n\r\n\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. ', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(4, 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=', 'Hello everyone', 'hello this title its bigger  subtitle', '  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus.\r\n', 7639648, 'phdlWg2', 'Products', 'https://images.pexels.com/photos/826349/pexels-photo-826349.jpeg', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.\r\n\r\n\r\n\r\n', 'https://images.pexels.com/photos/1586973/pexels-photo-1586973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1', ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.\r\n\r\n\r\n\r\n\r\n', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus, quisquam.\r\n', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(5, 'https://cdn.pixabay.com/photo/2015/07/17/22/43/student-849822_1280.jpg', 'This is my title', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit.', 820476, '94LK54t', 'Services', 'https://images.pexels.com/photos/826349/pexels-photo-826349.jpeg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.\r\n\r\n\r\n\r\n\r\n', 'https://media.istockphoto.com/id/1194077963/photo/woman-with-laptop-filling-survey-form.webp?s=2048x2048&w=is&k=20&c=CGYXvVGhzjx1TwrX-urPi9hMXzKY3qytxoQb01V5tG8=', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adi.\r\n\r\n\r\n\r\n', 'https://media.istockphoto.com/id/1451456915/photo/female-freelance-developer-coding-and-programming-coding-on-two-with-screens-with-code.jpg?s=612x612&w=0&k=20&c=BFFIc-xOwzeRyR8ui9VkFKEqqqQFBbISJzr-ADN6hS8=', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit, distinctio numquam? Ipsa nemo dolor eius.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Lorem ipsum dolor sit amet consectetur adipisicing ', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/'),
(6, 'https://cdn.pixabay.com/photo/2017/05/11/11/15/workplace-2303851_1280.jpg', 'Hello this is my page', 'hello this title its more bigger than the previous main title', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores!', 86459, 'jfs682lo', 'Products', 'https://cdn.pixabay.com/photo/2015/01/08/18/27/startup-593341_960_720.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.\r\n\r\n\r\n\r\n\r\n\r\n', 'https://cdn.pixabay.com/photo/2016/06/25/12/52/laptop-1478822_960_720.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.\r\n\r\n\r\n\r\n', 'https://cdn.pixabay.com/photo/2015/07/17/22/42/startup-849804_1280.jpg', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit natus sint id a asperiores! Cupiditate, deserunt mollitia.\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Modi alias maiores reprehenderit.\r\n', 'https://www.linkedin.com/feed/', 'https://www.facebook.com/', 'https://twitter.com/', 'https://www.google.com/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
