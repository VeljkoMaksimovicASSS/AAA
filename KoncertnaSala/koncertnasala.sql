-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2024 at 04:48 PM
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
-- Database: `koncertnasala`
--

-- --------------------------------------------------------

--
-- Table structure for table `dogadjaji`
--

CREATE TABLE `dogadjaji` (
  `dogadjajID` int(255) NOT NULL,
  `naziv` text NOT NULL,
  `sala` int(255) NOT NULL,
  `datum` date NOT NULL,
  `opis` text NOT NULL,
  `izvodjacID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dogadjaji`
--

INSERT INTO `dogadjaji` (`dogadjajID`, `naziv`, `sala`, `datum`, `opis`, `izvodjacID`) VALUES
(1, 'Final Lap Turneja', 2, '2025-03-13', 'Poslednja turneja americkog repera 50 Cent-a', 1),
(2, 'Final Lap Turneja', 2, '2025-03-13', 'Poslednja turneja americkog repera 50 Cent-a', 2),
(3, 'Dzepovi U Rukama', 1, '2024-07-15', 'Koncert srpskog repera Dade', 3),
(4, 'Beerfest', 3, '2024-06-28', 'Van Gogh Beerfest', 4);

-- --------------------------------------------------------

--
-- Table structure for table `izvodjac`
--

CREATE TABLE `izvodjac` (
  `izvodjacID` int(255) NOT NULL,
  `ime` text NOT NULL,
  `zanr` text NOT NULL,
  `opis` text NOT NULL,
  `dogadjajID` int(255) NOT NULL,
  `slika` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `izvodjac`
--

INSERT INTO `izvodjac` (`izvodjacID`, `ime`, `zanr`, `opis`, `dogadjajID`, `slika`) VALUES
(1, '50 Cent', 'Rap', '50 Cent (Kurtis Džejms Džekson) je američki reper, glumac, producent i preduzetnik.', 1, '50cent.jpg'),
(2, 'Nas', 'Rap', 'Nasir bin Olu Dara Džons, poznatiji po umetničkom imenu Nas, je američki reper. Ukorenjen u hip hopu istočne obale, smatra se jednim od najvećih repera svih vremena.', 1, 'nas.jpg'),
(3, 'Dada', 'Rap', 'Dragan Nikolić, poznatiji pod umetničkim imenom Dada ili Dza, jeste srpski reper. Jedan je od najboljih repera koji je počeo da stvara u periodu između drugog i trećeg talasa hiphopa u Srbiji.', 2, 'dada.jpg'),
(4, 'Van Gogh', 'Rock', 'Van Gogh српска је рок група из Београда. Настала је 1986. године, а највећу популарност је доживела у другој половини 1990-их.', 3, 'gogh.jpg'),
(5, 'Zdravko Colic', 'Pop', 'Zdravko Čolić, poznat i kao Čola, i jugoslovenski je pevač pop muzike. Opisivan je kao „srpski Tom Džouns”, a popularan je na celoj teritoriji bivše Jugoslavije.', 3, 'cola.jpg'),
(6, 'Lloyd Banks', 'Rap', 'Kristofer Čarls Lojd, poznatiji pod umetničkim imenom Lojd Benks, je američki reper. Karijeru je započeo kao član hip hop grupe na istočnoj obali G-Unit, koju je osnovao sa prijateljima iz detinjstva 50 Centom i Tonijem Jejom 1999. godine.', 1, 'banks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `karta`
--

CREATE TABLE `karta` (
  `kartaID` int(255) NOT NULL,
  `dogadjajID` int(255) NOT NULL,
  `cena` int(255) NOT NULL,
  `brojSedista` int(255) NOT NULL,
  `redSedista` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karta`
--

INSERT INTO `karta` (`kartaID`, `dogadjajID`, `cena`, `brojSedista`, `redSedista`) VALUES
(1, 1, 3000, 3, 1),
(2, 3, 2000, 28, 3),
(3, 4, 2500, 24, 3);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(255) NOT NULL,
  `ime` text NOT NULL,
  `prezime` text NOT NULL,
  `email` text NOT NULL,
  `sifra` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `ime`, `prezime`, `email`, `sifra`, `about`) VALUES
(1, 'Veljko', 'Maksimovic', 'Maksa@gmail.com', 'f6a198c4e750d70498896be5599a0408', 'Volim pravi rep');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dogadjaji`
--
ALTER TABLE `dogadjaji`
  ADD PRIMARY KEY (`dogadjajID`);

--
-- Indexes for table `izvodjac`
--
ALTER TABLE `izvodjac`
  ADD PRIMARY KEY (`izvodjacID`);

--
-- Indexes for table `karta`
--
ALTER TABLE `karta`
  ADD PRIMARY KEY (`kartaID`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `izvodjac`
--
ALTER TABLE `izvodjac`
  MODIFY `izvodjacID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `karta`
--
ALTER TABLE `karta`
  MODIFY `kartaID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
