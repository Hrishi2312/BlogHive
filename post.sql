-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2019 at 07:02 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(50) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `body`, `image`, `topic`, `created_at`) VALUES
(2, 'Discover a Gentle Introduction to Bayesian Optimiz', '<p>Global optimization is a challenging problem of finding an input that results in the minimum or maximum cost of a given objective function.</p><p>Typically, the form of the objective function is complex and intractable to analyze and is often non-convex, nonlinear, high dimension, noisy, and computationally expensive to evaluate.</p><p>Bayesian Optimization provides a principled technique based on Bayes Theorem to direct a search of a global optimization problem that is efficient and effective. It works by building a probabilistic model of the objective function, called the surrogate function, that is then searched efficiently with an acquisition function before candidate samples are chosen for evaluation on the real objective function.</p><p>Bayesian Optimization is often used in applied machine learning to tune the hyperparameters of a given well-performing model on a validation dataset.</p><p>In this tutorial, you will discover Bayesian Optimization for directed search of complex optimization problems.</p><p>After completing this tutorial, you will know:</p><ul><li>Global optimization is a challenging problem that involves black box and often non-convex, non-linear, noisy, and computationally expensive objective functions.</li><li>Bayesian Optimization provides a probabilistically principled method for global optimization.</li><li>How to implement Bayesian Optimization from scratch and how to use open-source implementations.</li></ul><p>Discover bayes opimization, naive bayes, maximum likelihood, distributions, cross entropy, and much more <a href=\"https://machinelearningmastery.com/probability-for-machine-learning/\">in my new book</a>, with 28 step-by-step tutorials and full Python source code.</p><p>Letâ€™s get started.</p>', 'A-Gentle-Introduction-to-Bayesian-Optimization.jpg', 'Motivational', '2019-10-09 16:39:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `title` (`title`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
