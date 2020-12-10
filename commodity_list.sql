-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2020-12-10 09:56:39
-- サーバのバージョン： 10.4.14-MariaDB
-- PHP のバージョン: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `commodity_list`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL,
  `cost` float(50,2) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `cart`
--

INSERT INTO `cart` (`id`, `title`, `author`, `publisher`, `materials`, `cost`, `img`) VALUES
(96, 'English Idioms in Use Advanced', 'Felicity ODell ', ' Cambridge University Press', 'paperback', 3333.00, '51IH3anyryL.jpg'),
(99, 'Basic Grammar in Use ', 'Raymond Murphy', 'Cambridge University Press', 'paperback', 2700.00, '81bkoVDQNNL.jpg'),
(100, 'The Official Guide to the Toefl Test', 'McGraw Hill Education', 'McGraw-Hill', 'paperback and cd', 3762.00, '61hXOuBqF2L.jpg\r\n'),
(101, 'Grammar in Use Intermediate ', 'Raymond Murphy', ' Cambridge University Press', 'paperback', 3599.00, '81eyp3ZikyL.jpg'),
(102, 'The Official Guide to the Toefl Test', 'McGraw Hill Education', 'McGraw-Hill', 'paperback and cd', 3762.00, '61hXOuBqF2L.jpg\r\n');

-- --------------------------------------------------------

--
-- テーブルの構造 `customer_information`
--

CREATE TABLE `customer_information` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `email_address` varchar(255) NOT NULL,
  `address` varchar(100) NOT NULL,
  `post_code` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `customer_information`
--

INSERT INTO `customer_information` (`id`, `first_name`, `last_name`, `contact_number`, `email_address`, `address`, `post_code`, `date`) VALUES
(1, '和寿', '永井', '08024451289', 'gmail@.com', '葛飾区高砂二丁目1-15', '125', '2020-12-07');

-- --------------------------------------------------------

--
-- テーブルの構造 `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `information` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  `materials` varchar(255) NOT NULL,
  `cost` float(50,2) NOT NULL,
  `img` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- テーブルのデータのダンプ `items`
--

INSERT INTO `items` (`id`, `title`, `author`, `information`, `publisher`, `materials`, `cost`, `img`) VALUES
(1, 'English Grammar in Use 5th edition Book ', 'Raymond Murphy', 'Raymond Murphylearners and covers all the grammar you will need at this level. This book has clear explanations and practice exercises that have helped millions of people around the world', 'Cambridge University Press', 'paperback', 3511.00, '81K+KhRUkQL.jpg'),
(2, 'Basic Grammar in Use ', 'Raymond Murphy', 'The worlds best selling grammar series for learners of English. Basic Grammar in Use Fourth Edition is an American English self study reference and practice book for beginner level learners . With simple explanations, clear examples, and easy to u', 'Cambridge University Press', 'paperback', 2700.00, '81bkoVDQNNL.jpg'),
(3, 'Grammar in Use Intermediate ', 'Raymond Murphy', 'The worlds bestselling grammar series for learners of English. Grammar in Use Intermediate with Answers and Interactive eBook, authored by Raymond Murphy, is the first choice for intermediate learners of American English and covers all the grammer', ' Cambridge University Press', 'paperback', 3599.00, '81eyp3ZikyL.jpg'),
(4, 'English Idioms in Use Advanced', 'Felicity ODell ', 'Improve your understanding of idioms in English. Explanations and practice of English idioms, written for advanced level learners of English. Perfect for both self study and classroom activities. Learn idioms in context, with lots of different ', ' Cambridge University Press', 'paperback', 3333.00, '51IH3anyryL.jpg'),
(5, 'Essential Grammar in Use Supplementary Exercises', 'Cambridge University Press', 'Grammar in Use is the worlds bestselling grammar series for learners of English. To accompany Essential Grammar in Use Fourth edition, Essential Grammar in Use Supplementary Exercises provides elementary level learners with extra practice of the grammar', 'Cambridge University Press', 'paperback', 2400.00, '61qv83A839L.jpg'),
(6, 'Advanced Grammar in Use ', 'Martin Hewings', 'Grammar in Use is the worlds best selling grammar series for learners of English. This third edition, with answers and interactive eBook, contains 100 units of grammar reference and practice materials, with illustrations in full colour and a user-friendl', 'Cambridge University Press', 'paperback', 3799.00, '61gvKAuVLfL.jpg'),
(7, 'English Language Teaching Today', 'Willy A. Renandya', 'English Language Teaching Today Linking Theory and Practice provides an up to date account of current principles and practices for teaching English in the world today. The chapters written by internationally recognized language teacher educators and TES', 'Springer; Softcover reprint of the original ', 'paperback', 6475.00, '615+qv0jnyL.jpg'),
(8, 'Cambridge Vocabulary for IELTS Advanced ', 'Pauline Cullen', 'The book covers all the vocabulary needed by students aiming for band 6.5 and above in the IELTS tests and provides students with practice of exam tasks from each paper. Vocabulary for IELTS Advanced focuses on moving students to 6.5 and beyond', 'Cambridge English', 'paperback and cd', 1300.00, '51gxtMazhTL.jpg'),
(9, 'Cambridge English Skills Real Listening and Speaking 1 with Answers and Audio CD ', 'MIles Craven', 'A four-level skills series for adults and young adults Learners can develop the skills they need to use English confidently wherever they are - at home, at work, travelling, studying or just in social situations with English-speaking friends. This edition', 'Cambridge University Press', 'paperback and cd', 3196.00, '51EYuDsTxSL.jpg'),
(10, 'Cambridge English Skills Real Listening and Speaking 2 with Answers and Audio CD', 'Sally Logan ', 'A four-level skills series for adults and young adults Learners can develop the skills they need to use English confidently wherever they are - at home, at work, travelling, studying or just in social situations with English-speaking friends. This edition', 'Cambridge University Press', 'paperback and cd', 3196.00, '51eDydQqQWL.jpg'),
(11, 'Cambridge English Skills Real Listening and Speaking 3 with Answers and Audio CD', 'Miles Craven', 'A four-level skills series for adults and young adults Cambridge English Skills is a four-level skills series for adults and young adult learners.Learners can develop the skills they need to use English confidently wherever they are - at home, at work, tr', 'Cambridge University Press', 'paperback and cd', 3196.00, 'A1t7efv3mjL.jpg'),
(12, 'Cambridge English Skills Real Listening and Speaking Level 4 with Answers and Audio CDs ', 'MIles Craven', 'A four-level skills series for adults and young adults Learners can develop the skills they need to use English confidently wherever they are - at home, at work, travelling, studying or just in social situations with English-speaking friends. This edition', 'Cambridge University Press', 'paperback and cd', 3196.00, '51pAIDTIq0L.jpg'),
(13, 'Official TOEFL iBT Tests', 'Educational Testing Service ', 'The bestselling collection of Official TOEFL iBT Tests from ETS, the makers of the test. Are you preparing to take the TOEFL test? Official TOEFL Tests, Volume I gives you all the tools you need to achieve your best score. This book from ETS contains five', ' McGraw-Hill', 'paperback and cd', 3879.00, '61UE67UlryL.jpg'),
(14, 'The Official Guide to the Toefl Test', 'McGraw Hill Education', 'The bestselling official guide to the TOEFL iBT® test, from ETS, the maker of the test! Now expanded with a fourth authentic TOEFL iBT practice test.The new Official Guide to the TOEFL® Test is the best, most reliable guide to the test that is used to mee', 'McGraw-Hill', 'paperback and cd', 3762.00, '61hXOuBqF2L.jpg\r\n');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `customer_information`
--
ALTER TABLE `customer_information`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルのAUTO_INCREMENT
--

--
-- テーブルのAUTO_INCREMENT `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- テーブルのAUTO_INCREMENT `customer_information`
--
ALTER TABLE `customer_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- テーブルのAUTO_INCREMENT `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
