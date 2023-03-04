-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2022 at 07:22 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diamond`
--

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` char(49) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`) VALUES
(1, 'English'),
(2, 'Afar'),
(3, 'Abkhazian'),
(4, 'Afrikaans'),
(5, 'Amharic'),
(6, 'Arabic'),
(7, 'Assamese'),
(8, 'Aymara'),
(9, 'Azerbaijani'),
(10, 'Bashkir'),
(11, 'Belarusian'),
(12, 'Bulgarian'),
(13, 'Bihari'),
(14, 'Bislama'),
(15, 'Bengali/Bangla'),
(16, 'Tibetan'),
(17, 'Breton'),
(18, 'Catalan'),
(19, 'Corsican'),
(20, 'Czech'),
(21, 'Welsh'),
(22, 'Danish'),
(23, 'German'),
(24, 'Bhutani'),
(25, 'Greek'),
(26, 'Esperanto'),
(27, 'Spanish'),
(28, 'Estonian'),
(29, 'Basque'),
(30, 'Persian'),
(31, 'Finnish'),
(32, 'Fiji'),
(33, 'Faeroese'),
(34, 'French'),
(35, 'Frisian'),
(36, 'Irish'),
(37, 'Scots/Gaelic'),
(38, 'Galician'),
(39, 'Guarani'),
(40, 'Gujarati'),
(41, 'Hausa'),
(42, 'Hindi'),
(43, 'Croatian'),
(44, 'Hungarian'),
(45, 'Armenian'),
(46, 'Interlingua'),
(47, 'Interlingue'),
(48, 'Inupiak'),
(49, 'Indonesian'),
(50, 'Icelandic'),
(51, 'Italian'),
(52, 'Hebrew'),
(53, 'Japanese'),
(54, 'Yiddish'),
(55, 'Javanese'),
(56, 'Georgian'),
(57, 'Kazakh'),
(58, 'Greenlandic'),
(59, 'Cambodian'),
(60, 'Kannada'),
(61, 'Korean'),
(62, 'Kashmiri'),
(63, 'Kurdish'),
(64, 'Kirghiz'),
(65, 'Latin'),
(66, 'Lingala'),
(67, 'Laothian'),
(68, 'Lithuanian'),
(69, 'Latvian/Lettish'),
(70, 'Malagasy'),
(71, 'Maori'),
(72, 'Macedonian'),
(73, 'Malayalam'),
(74, 'Mongolian'),
(75, 'Moldavian'),
(76, 'Marathi'),
(77, 'Malay'),
(78, 'Maltese'),
(79, 'Burmese'),
(80, 'Nauru'),
(81, 'Nepali'),
(82, 'Dutch'),
(83, 'Norwegian'),
(84, 'Occitan'),
(85, '(Afan)/Oromoor/Oriya'),
(86, 'Punjabi'),
(87, 'Polish'),
(88, 'Pashto/Pushto'),
(89, 'Portuguese'),
(90, 'Quechua'),
(91, 'Rhaeto-Romance'),
(92, 'Kirundi'),
(93, 'Romanian'),
(94, 'Russian'),
(95, 'Kinyarwanda'),
(96, 'Sanskrit'),
(97, 'Sindhi'),
(98, 'Sangro'),
(99, 'Serbo-Croatian'),
(100, 'Singhalese'),
(101, 'Slovak'),
(102, 'Slovenian'),
(103, 'Samoan'),
(104, 'Shona'),
(105, 'Somali'),
(106, 'Albanian'),
(107, 'Serbian'),
(108, 'Siswati'),
(109, 'Sesotho'),
(110, 'Sundanese'),
(111, 'Swedish'),
(112, 'Swahili'),
(113, 'Tamil'),
(114, 'Telugu'),
(115, 'Tajik'),
(116, 'Thai'),
(117, 'Tigrinya'),
(118, 'Turkmen'),
(119, 'Tagalog'),
(120, 'Setswana'),
(121, 'Tonga'),
(122, 'Turkish'),
(123, 'Tsonga'),
(124, 'Tatar'),
(125, 'Twi'),
(126, 'Ukrainian'),
(127, 'Urdu'),
(128, 'Uzbek'),
(129, 'Vietnamese'),
(130, 'Volapuk'),
(131, 'Wolof'),
(132, 'Xhosa'),
(133, 'Yoruba'),
(134, 'Chinese'),
(135, 'Zulu');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
