-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16-Jan-2018 às 20:25
-- Versão do servidor: 5.6.26
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php-mvc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `artist` text COLLATE utf8_unicode_ci NOT NULL,
  `track` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `song`
--

INSERT INTO `song` (`id`, `artist`, `track`, `link`) VALUES
(1, 'Dena', 'Cash, Diamond Ring, Swimming Pools', 'r4CDc9yCAqE'),
(3, 'The Orwells', 'In my Bed (live)', '8tA_2qCGnmE'),
(4, 'L''Orange & Stik Figa', 'Smoke Rings', 'Q5teohMyGEY'),
(5, 'Labyrinth Ear', 'Navy Light', 'a9qKkG7NDu0'),
(6, 'Bon Hiver', 'Wolves (Kill them with Colour Remix)', '5GXAL5mzmyw'),
(7, 'Detachments', 'Circles (Martyn Remix)', 'v=UzS7Gvn7jJ0'),
(8, 'Dillon & Dirk von Loetzow', 'Tip Tapping (Live at ZDF Aufnahmezustand)', 'hbrOLsgu000'),
(9, 'Dillon', 'Contact Us (Live at ZDF Aufnahmezustand)', 'E6WqTL2Up3Y'),
(10, 'Tricky', 'Hey Love (Promo Edit)', 'OIsCGdW49OQ'),
(11, 'Compuphonic', 'Sunset feat. Marques Toliver (DJ T. Remix)', 'Ue5ZWSK9r00'),
(12, 'Ludovico Einaudi', 'Divenire (live @ Royal Albert Hall London)', 'X1DRDcGlSsE'),
(15, 'Buku', 'All Deez', 'R0bN9JRIqig'),
(16, 'Pilocka Krach', 'Wild Pete', '4wChP_BEJ4s'),
(17, 'Mount Kimbie', 'Here to stray (live at Pitchfork Music Festival Paris)', 'jecgI-zEgIg'),
(18, 'Kool Savas', 'King of Rap (2012) / Ein Wunder', 'mTqc6UTG1eY&hd=1'),
(19, 'Chaim feat. Meital De Razon', 'Love Rehab (Original Mix)', 'MJT1BbNFiGs'),
(20, 'Emika', 'Searching', 'oscuSiHfbwo'),
(21, 'Emika', 'Sing to me', 'k9sDBZm8pgk'),
(22, 'George Fitzgerald', 'Thinking of You', '-14B8l49iKA'),
(23, 'Disclosure', 'You & Me (Flume Edit)', 'OUkkaqSNduU'),
(24, 'Crystal Castles', 'Doe Deer', 'zop0sWrKJnQ'),
(25, 'Tok Tok vs. Soffy O.', 'Missy Queens Gonna Die', 'EN0Tnw5zy6w'),
(26, 'Fink', 'Maker (Synapson Remix)', 'Dyd-cUkj4Nk'),
(27, 'Flight Facilities (ft. Christine Hoberg)', 'Clair De Lune', 'Jcu1AHaTchM'),
(28, 'Karmon', 'Turning Point (Original Mix)', '-tB-zyLSPEo'),
(29, 'Shuttle Life', 'The Birds', 'I3m3cWDEtM'),
(30, 'SantÃ©', 'Homegirl (Rampa Mix)', 'fnhMNOWxLYw'),
(58, 'DIE HAARE SILBER GEFÃ„RBT', 'Minecraft', 'n7taofWDifg'),
(59, 'Minecraft OPASTYLE ', 'ICH WERDE ZUM WEIHNACHTSMANN?! ', 'tfvfXOquqjQ'),
(60, 'AHHHHHHHHHHHHHHHHHH!!! -', 'Minecraft [Deutsch/HD]', 'ZknIhmxAw_0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
