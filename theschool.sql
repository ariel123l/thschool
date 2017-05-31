-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2017 at 10:49 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theschool`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `name_course` varchar(255) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `image_course` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `name_course`, `description`, `image_course`) VALUES
(1, 'full stack', '×¦×ž×“ ×”×ž×™×œ×™× Full Stack ×ž×ª××¨ ××ª ×›×œ ×”×ª×•×›× ×” ×ž×›×£ ×¨×’×œ ×•×¢×“ ×¨××©. ×›×œ×•×ž×¨, ××ª ×›×œ ×©×›×‘×•×ª ×”×ª×•×›× ×” ×ž×¦×“ ×”×©×¨×ª (Server) ×•×¢×“ ×¦×“ ×”×œ×§×•×— (Client).\r\n×›××©×¨ ×—×‘×¨×” ×ž×¡×•×™×™×ž×ª ×ž×—×¤×©×ª ×ž×¤×ª×— Full Stack, ×”×™× ×ž×—×¤×©×ª ×ž×¤×ª×— ×©×ž×ª×ž×¦× ×‘×ž×¡×¤×™×§ ×˜×›× ×•×œ×•×’×™×•×ª ×•×©×¤×•×ª ×¤×™×ª×•×— ×ž×‘×™×Ÿ ×¡×˜ ×”×˜×›× ×•×œ×•×’×™×•×ª ×•×”×©×¤×•×ª ×©××™×ª×Ÿ ×”×™× ×¢×•×‘×“×ª, ×›×“×™ ×©×™×•×›×œ ×œ×ª×¨×•× ×œ×¤×™×ª×•×— ×‘×›×œ ××—×ª ×ž×”×©×›×‘×•×ª â€“ ×‘×¦×“ ×”×©×¨×ª, ×‘×¦×“ ×”×œ×§×•×— ××• ×‘×›×œ ×ž×” ×©×§×©×•×¨ ×œ×ª×§×©×•×¨×ª ×‘×™× ×™×”×.\r\n×—×©×•×‘ ×œ×¦×™×™×Ÿ ×›×™ × ×™×ª×Ÿ ×œ×¤×ª×— ×ª×•×›× ×ª ×©×¨×ª-×œ×§×•×— ×‘××™×Ÿ ×¡×¤×•×¨ ×“×¨×›×™× ×©×•× ×•×ª. ×™×© ×ž×¡×¤×¨ ×›×” ×¨×‘ ×©×œ ×©×¤×•×ª ×ª×›× ×•×ª, Frameworks, ×¡×•×’×™ ×ž×¡×“×™ × ×ª×•× ×™× ×•×¤×œ×˜×¤×•×¨×ž×•×ª ×œ×§×•×— (×›×’×•×Ÿ ××ª×¨×™ ××™× ×˜×¨× ×˜, ×˜×œ×¤×•× ×™× ×—×›×ž×™×, IoT), ×©×œ×¤×¢×ž×™× ×›×‘×¨ ×§×©×” ×œ×¢×§×•×‘.', 'images (18).jpg'),
(2, 'web', 'This is the definitive painting course. It is quite intense, but youâ€™ll definitely get your chops up. It is meant for a beginner to novice painter.  I go through all the fundamentals of how to draw like a painter, and also color theory, composition, and paint application. There are also 15 bonus supplemental ', 'images (10).jpg'),
(6, 'jquery', 'jQuery is a fast, small, and feature-rich JavaScript library. It makes things like HTML document traversal and manipulation, event handling, animation, and Ajax much simpler with an easy-to-use API that works across a multitude of browsers. With a combination of versatility and extensibility, jQuery has changed the way that millions of people write JavaScript.', 'images (11).jpg'),
(7, 'wpf', 'WPF ××• ×‘×©×ž×” ×”×ž×œ× Windows Presentation Foundation, ×”×™× ×”×˜×›× ×•×œ×•×’×™×” ×”×¢×“×›× ×™×ª ×‘×™×•×ª×¨ ×ž×‘×™×ª ×ž×™×§×¨×•×¡×•×¤×˜ ×œ×™×¦×™×¨×ª ×ª×•×›× ×•×ª ×‘×¢×œ×•×ª ×ž×ž×©×§ ×ž×©×ª×ž×© ×’×¨×¤×™ ×œ×¡×‘×™×‘×ª Windows.\r\n\r\nWPF ×ž××¤×©×¨×ª ×™×¦×™×¨×ª ×ª×•×›× ×•×ª ×‘×¢×œ×•×ª ×ž×ž×©×§ ×ž×©×ª×ž×© ×ž×¨×”×™×‘, ×ª×•×š ×©×™×ž×•×© ×‘×”××¦×ª ×—×•×ž×¨×”, ×–×›×•×ª ×©×”×™×™×ª×” ×©×”×™×” ×©×ž×•×¨×” ×¢×“ ×›×” ×œ×ž×©×—×§×™×. ×‘×™×Ÿ ×”×©×™×ž×•×©×™× ×”×©×’×¨×ª×™×™× ×‘××¤×œ×™×§×¦×™×•×ª WPF × ×™×ª×Ÿ ×œ×ž×¦×•×: ×—×œ×•× ×•×ª ×©×ž×ª××™×ž×™× ××ª ×ª×•×›× × ×œ×’×•×“×œ ×”×©×˜×— ×”×ž×•×§×¦×” ×œ×”×, ×× ×™×ž×¦×™×•×ª ×—×œ×§×•×ª, ×•×©×™×ž×•×© × ×¨×—×‘ ×‘×•×™×“××• ×•××•×“×™×•. ', 'images (14).jpg'),
(8, 'php', 'PHP (×¨××©×™ ×ª×™×‘×•×ª ×¨×§×•×¨×¡×™×‘×™×™× ×©×œ PHP Hypertext Preprocessor, ×©×‘×ž×§×•×¨ ×”×ª×‘×¡×¡×• ×¢×œ Personal Home Page) ×”×™× ×©×¤×ª ×ª×¡×¨×™×˜ ×”×ž×™×•×¢×“×ª ×‘×¢×™×§×¨ ×œ×ª×›× ×•×ª ×™×™×©×•×ž×™ ××™× ×˜×¨× ×˜ ×‘×¦×“ ×”×©×¨×ª, ××š ×™×›×•×œ×” ×œ×¨×•×¥ ×¢×œ ×”×ž×—×©×‘ ×”××™×©×™ ×‘××ž×¦×¢×•×ª ×ž×¤×¨×©. ×”×ª×—×‘×™×¨ ×©×œ ×”×©×¤×” ×“×•×ž×” ×œ×–×• ×©×œ C ×•×”×¡×ž× ×˜×™×§×” ×“×•×ž×” ×œ×–×• ×©×œ Perl. ×©×¤×ª PHP × ×•×¦×¨×” ×‘×ž×§×•×¨ ×¢×œ ×™×“×™ ×¨×–×ž×•×¡ ×œ×¨×“×•×¨×£ ××š ×‘×¦×•×¨×ª×” ×”× ×•×›×—×™×ª × ×›×ª×‘×” ×¢×œ ×™×“×™ ×–××‘ ×¡×•×¨×¡×§×™ ×•×× ×“×™ ×’×•×˜×ž× ×¡. PHP ×”×™× ××—×ª ×ž×©×¤×•×ª ×”×ª×›× ×•×ª ×”× ×¤×•×¦×•×ª ×‘×™×•×ª×¨[1].', 'images (9).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `user_name` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`user_name`, `role_id`, `phone`, `email`, `image`) VALUES
('kkkkkk', 2, ' 052-5555999', 'yoram@gmail.com', 'images (1).jpg'),
('beni', 3, '02-969741', 'ben@gmail.com', 'images (7).jpg'),
('Pnina', 1, '052-9593607', 'pnina@gmail.com', 'images (2).jpg'),
('ariel', 1, '052-9593607', 'ariel@gmail.com', 'images (1).jpg'),
('Dani', 3, '03-96969525', 'dani@walla.co.il', 'images (6).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`) VALUES
(1, 'owner'),
(2, 'manager'),
(3, 'sales');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `phone`, `email`, `image`) VALUES
(1, 'ariel', '052-9593607', '9999999@jhcvb', 'images (3).jpg'),
(5, 'avi', '585858', 'avi@gmail', 'images (1).jpg'),
(6, 'yorm', '8585', 'yoram@gmail.com', 'images.jpg'),
(7, 'yoni', '052-969696', 'yoram@gmail.com', 'images (1).jpg'),
(8, 'kim', '08-888888', 'sss@gmail.com', 'images (19).jpg'),
(9, 'tmtmmtmt', '4444444', '', 'images (1).jpg'),
(10, 'elad', '025-525252', 'e,lwd,@rkin', 'images (1).jpg'),
(11, 'ben', '02-969741', 'ben@gmail.com', 'images (5).jpg'),
(12, 'beni', '02-969741', 'beni@beni.com', 'images (1).jpg'),
(13, 'gal', '052-9696969', 'gal@gmail.com', 'images (2).jpg'),
(14, 'Tom', '02020202', 'tom@gmail.com', 'images (17).jpg'),
(37, 'david', '02020202', 'david@@@@@@', 'images (3).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_in_course`
--

CREATE TABLE `student_in_course` (
  `student_id` int(60) NOT NULL,
  `course_id` int(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_in_course`
--

INSERT INTO `student_in_course` (`student_id`, `course_id`) VALUES
(1, 1),
(1, 2),
(5, 1),
(10, 2),
(10, 1),
(11, 6),
(11, 7),
(7, 2),
(9, 1),
(37, 2),
(9, 2),
(8, 7),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `hash` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `hash`) VALUES
(1, 'ariel', '123'),
(2, 'avi', '123'),
(3, 'gal', '123'),
(4, '', '$2y$10$ct2KcM7TsmCtIXywLH4Yj.4.3MUxzmj0GkGyl2vp9bd/zTbN2WP/W'),
(5, '', '$2y$10$f7OtS31BYEnMasgwA7wWWOI4rUlkpoNYixLwUI3SyxVxhBia3WOUG'),
(6, '', '$2y$10$YtDhhzqLJUxFga7l6witxuNPw1VMvf7jX.b/FE4HMmknS4ARHKJom'),
(7, '', '$2y$10$0OMrmuKVphaGoo03ljoel.Xg.V17TDPgWkWRsyAq8S0TDVgfqHRNm'),
(8, '', '$2y$10$E8kyEMqzUa/FYOLZqzYXNuZgwB4IZzsRrUhQFICoyU6p4LwjHGC9u'),
(9, '', '$2y$10$cMKgJoRfAbH8ZgjF7Q.vsOpdAkX/RNXxCsAwYSn332ZS.mg.N8ImW'),
(10, '', '$2y$10$x49Ubocrqv10X2pDBCNLb.iohHnjnDX2W0A9jKlKtqbSE/dPqYlia'),
(11, '5252@8585', '$2y$10$5IQQ/DWtVsXtDfSlZF0QVu72ixpUQ0.21YeSsRa4casYQnDoDJDgS'),
(12, '', '$2y$10$h2K3gNG9QHwnoBuDAgcslOKsLzgZmBnj2nUvorpxmSrm9AN/tsdG6'),
(13, 'david', '$2y$10$UCx73Icx20s6XgkjzuwL1.NT54BBa36YZWhKlhBYNgArrerAP.A/6'),
(14, 'david', '$2y$10$RTYSjB91EN43BUurkKnnB.34xIDRbBx6XJ66UlFaxSVaG2lRJTaj6'),
(15, 'david', '$2y$10$iiM8bLQw867jiU3aVIPRI.AnUUbNHjjZThuIW4Hi1qGd3rUt6XJzC'),
(16, 'Pnina', '$2y$10$k2z70whhMJjNtQcbxMypGeBmBdLDlMDPTA.Fr35rPBIWiTqe6sTmy'),
(17, 'Pnina', '$2y$10$qoLLGQ7rwY5B24YAuMKA3uzUWRBWdnYOU.nk8G3zYVVOsEJSiguv2'),
(18, '', '$2y$10$N1h6pWav54Uuvgw9fIDqHenscqAfJyqJ/BsqVLcTIvYc63HfGr23m'),
(19, ' course', '$2y$10$HnlL.t.HyOIZzivIZsud.eshu.NiZ5qfZzPkVe2/m2..OqQFzETFm'),
(20, ' course', '$2y$10$zhbu.9FNLIZY4H1cGCt1t.1w/FFqH81PuBfiiAOEqpedlMV7w/jyG'),
(21, ' course', '$2y$10$O9ue3GWuHwe19.aoq2O8OeaOhQut/RGayivXAtSsmawkv27PYterK'),
(22, 'Pnina', '$2y$10$D84H9G7Hg17c3OtfSlli3egxTJ8POAt6iW.X1Con9axaQRQ8d9YLW'),
(23, 'Pnina', '$2y$10$npiSzpOrbCQOqzTqjBJaH.gddt7UmqQTAJzDsp2m5.URfWJT7zCju'),
(24, 'Pnina', '$2y$10$6SJNsth0he0Kd1pYQmDzBujL2XCJJdaBm6J.wuR7hC4s0MGeuvnT2'),
(25, 'Pnina', '$2y$10$toW895FP3m1MKEmEwDstqeqHlaJLmWkAhMMpiz4MuI2mjjkBmn9EK'),
(26, 'Pnina', '$2y$10$UwD4iUnPafjuQjMl5lglXOijmhJhD3lGOvkkA8i9GV6B1q5jw44Uq'),
(27, 'Pnina', '$2y$10$DX8HjP.n5lbwCbEJV0KF9OhgCPnGcSEIBdGan0NI0w3TDwwgYK5Ra'),
(28, 'Pnina', '$2y$10$MMTeXWqZwejaTzZiwM2us.XQ.ckKqnJhymGpPXjs49WCvWXnp1lIW'),
(29, 'Pnina', '$2y$10$BVJzdFapFbHiMB4vrCoRyu1sUByCy9fcnN1mwWU3lfP8s9ht.56ne'),
(30, 'Pnina', '$2y$10$E0NYN0rMyzxxiy8bkDFmHuReWA9ggTM3tvcBC.g8zeAgcuoAI45KK'),
(31, 'Pnina', '$2y$10$ZZTqhkTkObYCbwOK/v.73Oj78ZXgfD9A0lrunk/S3mk6Buh6tuWsO'),
(32, 'Pnina', '$2y$10$IbVYOKtuRw/bYYPAuSez6.QmEriUlVDmTzjTTXc7C6rb.w.NTJFt2'),
(33, 'Pnina', '$2y$10$lzHmUZkJaa2qykxoPPZodO4tmx3lzV/Ow9JUk38VBt9Ik6xqfcYbK'),
(34, 'Pnina', '$2y$10$SP9L96cvZXQtc/zddXV7UOFTsWBDb3vuf/6q.NSNgBWK7QdWImCCK'),
(35, 'Pnina', '$2y$10$/WTFXvwZvwEY1zp4bR0.Web1VXkZm6Padqk4b.Lrdh/CLoYT9Y61K'),
(36, 'Pnina', '$2y$10$tWHdV8bVdN7xot.GslVhdOJAJ7Kg.4pMAhyhKW7W/WV.4P91g6APm'),
(37, 'Pnina', '$2y$10$sLx68nnKTA4IFxrJq46IHeOLdbmIcuSBJRc9VZ9DTlcuAMGZOF1rq'),
(38, 'Pnina', '$2y$10$vxEwPHqWUckHByfvCjUyTOaGpJ6H5tHtCih/Mxnrbtps7J8t86MKK'),
(39, 'Pnina', '$2y$10$SYx89t0vWDNuMUR63AOmiOe7AZwT/BKu01Ol3rhHtSjrPYt9pVojy'),
(40, 'kkkkkk', '$2y$10$oBsHgeqIQPDFovzvy6rWDuempQiTJ5JzVI.EJky5kTZrhpnP3TwFS'),
(41, 'kkkkkk', '$2y$10$taFeI43I1kh38UG6Cdpj7ey.6Dc14PnEtp9r3aKOXyBWpH5qEb/Hm'),
(42, 'beni', '$2y$10$jM1Liol4kALB9lbaaDsyDu7FEfi49F5oUE5RkxH5OXOmUjcUZgeXq'),
(43, 'ariel', '$2y$10$kwl/kVTETCBTed7AV0Ow3e8U7EbT6vecBUtRayB6MQqeGciUGQ11i'),
(44, 'ariel', '$2y$10$2yzjuyEO11iv2lIBVA9KeOxfvQ6cQXW1asTc.UpDidOWtqt62yDtu'),
(45, 'Pnina', '$2y$10$s9fXL9Qg9cC7j.1xytrOmug3L5AunPnSK6/TIaI3ea2erx/eXM2zC'),
(46, 'Pnina', '$2y$10$b85Xz9n4qp21bk41uRrnrOj5DPSM5dRFmJ54IvQSU/fhhPQcPMEq2'),
(47, 'ariel', '$2y$10$T1QgXp0n6f66rfpAYFPpBOFR0lMVB9KP9k4PfAnpR5QWANc9FTXaa'),
(48, 'Dani', '$2y$10$nJO0jkZ.PcD1IqN.GKyU5uGYf.lmyy9WdfpTLSXigNdN9daTaBKMe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD KEY `fk_userName_idx` (`user_name`),
  ADD KEY `fk_roleId_idx` (`role_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_in_course`
--
ALTER TABLE `student_in_course`
  ADD KEY `fk_studentId_idx` (`student_id`),
  ADD KEY `fk_courseId_idx` (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `managers`
--
ALTER TABLE `managers`
  ADD CONSTRAINT `fk_roleId_idx` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_userName_idx` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`) ON DELETE CASCADE;

--
-- Constraints for table `student_in_course`
--
ALTER TABLE `student_in_course`
  ADD CONSTRAINT `fk_courseId_idx` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_studentId_idx` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
