-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2022 at 11:37 PM
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
-- Database: `pwa_projekt`
--

-- --------------------------------------------------------

--
-- Table structure for table `clanak`
--

CREATE TABLE `clanak` (
  `id` int(10) NOT NULL,
  `naslov` varchar(30) NOT NULL,
  `sazetak` text NOT NULL,
  `sadrzaj` text NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `arhiva` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clanak`
--

INSERT INTO `clanak` (`id`, `naslov`, `sazetak`, `sadrzaj`, `kategorija`, `foto`, `arhiva`) VALUES
(10, 'Vijest', 'Kratki sadržaj', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue orci, sodales nec molestie eget, fermentum at velit. Aliquam vitae massa justo. Cras faucibus leo nec velit scelerisque, eu faucibus enim sodales. Sed id ante velit. Duis in sagittis ex, nec lobortis nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras ac nisl id justo venenatis volutpat et eget nisi. Curabitur quis diam non leo cursus convallis. Duis nec tellus luctus, eleifend elit non, efficitur est. Vivamus sit amet venenatis nisl. Integer at accumsan justo.', 'politika', '', 0),
(11, 'Vijest', 'Lorem ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis augue orci, sodales nec molestie eget, fermentum at velit. Aliquam vitae massa justo. Cras faucibus leo nec velit scelerisque, eu faucibus enim sodales. Sed id ante velit. Duis in sagittis ex, nec lobortis nulla. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras ac nisl id justo venenatis volutpat et eget nisi. Curabitur quis diam non leo cursus convallis. Duis nec tellus luctus, eleifend elit non, efficitur est. Vivamus sit amet venenatis nisl. Integer at accumsan justo.', 'sport', 'slika1.png', 0),
(12, 'Naslov', 'Lorem ipsum', 'Pellentesque non magna at urna maximus sollicitudin. Vivamus tortor massa, rutrum sit amet orci vitae, iaculis feugiat risus. Sed congue, quam ac fermentum efficitur, leo magna elementum massa, sit amet vestibulum felis augue ac nisl. Donec id dolor sollicitudin, pretium justo finibus, efficitur augue. Maecenas nec nunc in nisi euismod dignissim eget ut purus. Vivamus in sollicitudin sapien. Fusce ac viverra sapien, a aliquet tellus. Vestibulum non quam non ex pretium finibus viverra vel diam. Suspendisse rhoncus, orci in commodo malesuada, turpis leo porta tortor, gravida euismod risus tortor non ligula. Curabitur mollis varius quam at sollicitudin. Maecenas nisl odio, faucibus a iaculis vulputate, bibendum non metus. Duis posuere enim non commodo sollicitudin. Morbi quam quam, efficitur ut tempus iaculis, sagittis scelerisque leo. Aliquam metus metus, convallis non malesuada ut, blandit nec arcu. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur in odio sollicitudin, dapibus ligula sit amet, egestas augue.', 'sport', 'slika.png', 0);

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `ID` int(10) NOT NULL,
  `Ime` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Prezime` varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Lozinka` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Razina` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`ID`, `Ime`, `Prezime`, `Username`, `Lozinka`, `Razina`) VALUES
(1, 'Gracia', 'Zrnić', 'gagsson', '$2y$10$Alq812yumIxiig/kLZnjkuU8qVWXScb2GOB./KUdZ.ESwHUd4AD86', 1),
(2, 'Ana', 'Anić', 'Anaaaaa', '$2y$10$AsU3cdb1LxZfMFeGGzfMPeV0puGEIawiTc0c1L/h/u5148WN23KIu', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clanak`
--
ALTER TABLE `clanak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clanak`
--
ALTER TABLE `clanak`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
