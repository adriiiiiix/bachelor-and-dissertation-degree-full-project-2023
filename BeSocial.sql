-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 08, 2023 at 10:11 AM
-- Server version: 5.7.39
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `BeSocial`
--

-- --------------------------------------------------------

--
-- Table structure for table `Abonat`
--

CREATE TABLE `Abonat` (
  `ID` int(2) NOT NULL,
  `Email` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Abonat`
--

INSERT INTO `Abonat` (`ID`, `Email`) VALUES
(1, 'adriana.nastase@rau.ro'),
(2, 'adriana.nastase@mediamed.ro');

-- --------------------------------------------------------

--
-- Table structure for table `AchizitionareProdus`
--

CREATE TABLE `AchizitionareProdus` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `GradProfesional` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(250) NOT NULL,
  `Produs` varchar(250) NOT NULL,
  `TotalPlata` varchar(250) NOT NULL,
  `MetodaPlata` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `AchizitionareProdus`
--

INSERT INTO `AchizitionareProdus` (`ID`, `Nume`, `Prenume`, `GradProfesional`, `Email`, `Telefon`, `Produs`, `TotalPlata`, `MetodaPlata`) VALUES
(1, 'Năstase', 'Adriana', 'STUDENT', 'adriana.nastase@mediamed.ro', '0771499210', 'CANĂ SUBLIMARE ALBĂ + CUTIE', '4.90€', 'CARD');

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(250) NOT NULL,
  `Mesaj` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`ID`, `Nume`, `Email`, `Telefon`, `Mesaj`) VALUES
(1, 'Stalinskaya Vodkalashnikov', 'vodka@stalin.com', '0722222222', 'Cum mă pot înregistra la eveniment?');

-- --------------------------------------------------------

--
-- Table structure for table `Eveniment`
--

CREATE TABLE `Eveniment` (
  `ID` int(2) NOT NULL,
  `Imagine` varchar(250) NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Perioada` varchar(250) NOT NULL,
  `Ora` varchar(250) NOT NULL,
  `Detalii` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Eveniment`
--

INSERT INTO `Eveniment` (`ID`, `Imagine`, `Denumire`, `Perioada`, `Ora`, `Detalii`) VALUES
(1, './images/CMSB_2022_Header-site_CMSB-01-1024x408.jpg', 'Congresul CMSB', '6/8-10-2022', '08:45', 'Fizic, la Crowne Plaza Hotel & ONLINE pe www.congrescmsb.ro');

-- --------------------------------------------------------

--
-- Table structure for table `Furnizor`
--

CREATE TABLE `Furnizor` (
  `Cod_Furnizor` int(2) NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Adresa` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Furnizor`
--

INSERT INTO `Furnizor` (`Cod_Furnizor`, `Denumire`, `Adresa`, `Email`, `Telefon`) VALUES
(1, 'Ganotti Event Cuisine', 'București, România', 'ganottieventcuisine@gmail.com', '0019375854659'),
(2, 'Sempre Sano Catering', 'Iași, România', 'sempresanocatering@gmail.com', '0014567846644');

-- --------------------------------------------------------

--
-- Table structure for table `Produs`
--

CREATE TABLE `Produs` (
  `Cod_Produs` int(2) NOT NULL,
  `Imagine` blob NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Pret` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Produs`
--

INSERT INTO `Produs` (`Cod_Produs`, `Imagine`, `Denumire`, `Pret`) VALUES
(1, 0x2e2f696d616765732f63616e612d7375626c696d6172652d616c62612d63752d63757469652d616c62612e706e67, 'Cană sublimare albă + cutie', '4.90€');

-- --------------------------------------------------------

--
-- Table structure for table `RezervareBilet`
--

CREATE TABLE `RezervareBilet` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `GradProfesional` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(250) NOT NULL,
  `Webinar` varchar(250) NOT NULL,
  `TotalPlata` varchar(250) NOT NULL,
  `MetodaPlata` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `RezervareBilet`
--

INSERT INTO `RezervareBilet` (`ID`, `Nume`, `Prenume`, `GradProfesional`, `Email`, `Telefon`, `Webinar`, `TotalPlata`, `MetodaPlata`) VALUES
(1, 'Năstase', 'Adriana', 'STUDENT', 'adriana.nastase@mediamed.ro', '0771499210', 'REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS', '7.00€', 'CARD');

-- --------------------------------------------------------

--
-- Table structure for table `RezervareEveniment`
--

CREATE TABLE `RezervareEveniment` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Data` varchar(250) NOT NULL,
  `Detalii` varchar(250) NOT NULL,
  `Buget` varchar(250) NOT NULL,
  `Cod_Serviciu` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `RezervareEveniment`
--

INSERT INTO `RezervareEveniment` (`ID`, `Nume`, `Prenume`, `Denumire`, `Data`, `Detalii`, `Buget`, `Cod_Serviciu`) VALUES
(1, 'Năstase', 'Adriana', 'Congresul CMSB', '6/8-10-2022', 'Locație: Crowne Plaza Hotel', '5600€', '1'),
(2, 'Năstase', 'Adriana', 'Anticoagularea între noutate și obișnuință', '2022-11-15', 'ONLINE pe live.mediamed.ro', '2000€', '-');

-- --------------------------------------------------------

--
-- Table structure for table `Serviciu`
--

CREATE TABLE `Serviciu` (
  `Cod_Serviciu` int(2) NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Pret` varchar(250) NOT NULL,
  `Detalii` varchar(250) NOT NULL,
  `Cod_Furnizor` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Serviciu`
--

INSERT INTO `Serviciu` (`Cod_Serviciu`, `Denumire`, `Pret`, `Detalii`, `Cod_Furnizor`) VALUES
(1, 'Meniu Deluxe', '450€', 'paste cu ton, bruschete cu somon afumat și cremă de brânză, creveți, cremă de zahăr ars', 'Sempre Sano Catering');

-- --------------------------------------------------------

--
-- Table structure for table `TipEveniment`
--

CREATE TABLE `TipEveniment` (
  `Cod_TipEveniment` int(2) NOT NULL,
  `TipEveniment` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `Utilizator`
--

CREATE TABLE `Utilizator` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `User` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Parola` varchar(250) NOT NULL,
  `Rol` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Utilizator`
--

INSERT INTO `Utilizator` (`ID`, `Nume`, `Prenume`, `User`, `Email`, `Parola`, `Rol`) VALUES
(1, '-', 'Adry', 'adry', 'adriana.nastase@rau.ro', 'adry', 'admin'),
(2, 'Năstase', 'Adriana', 'nastaseadriana', 'adriana.nastase@mediamed.ro', '1511', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `Webinar`
--

CREATE TABLE `Webinar` (
  `ID` int(2) NOT NULL,
  `Denumire` varchar(250) NOT NULL,
  `Categorie` varchar(250) NOT NULL,
  `Data` varchar(250) NOT NULL,
  `Ora` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Webinar`
--

INSERT INTO `Webinar` (`ID`, `Denumire`, `Categorie`, `Data`, `Ora`) VALUES
(1, 'REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS', 'Amgen', '2022-10-11', '17:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Abonat`
--
ALTER TABLE `Abonat`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `AchizitionareProdus`
--
ALTER TABLE `AchizitionareProdus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Eveniment`
--
ALTER TABLE `Eveniment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Furnizor`
--
ALTER TABLE `Furnizor`
  ADD PRIMARY KEY (`Cod_Furnizor`);

--
-- Indexes for table `Produs`
--
ALTER TABLE `Produs`
  ADD PRIMARY KEY (`Cod_Produs`);

--
-- Indexes for table `RezervareBilet`
--
ALTER TABLE `RezervareBilet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `RezervareEveniment`
--
ALTER TABLE `RezervareEveniment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Serviciu`
--
ALTER TABLE `Serviciu`
  ADD PRIMARY KEY (`Cod_Serviciu`);

--
-- Indexes for table `TipEveniment`
--
ALTER TABLE `TipEveniment`
  ADD PRIMARY KEY (`Cod_TipEveniment`);

--
-- Indexes for table `Utilizator`
--
ALTER TABLE `Utilizator`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Webinar`
--
ALTER TABLE `Webinar`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Abonat`
--
ALTER TABLE `Abonat`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `AchizitionareProdus`
--
ALTER TABLE `AchizitionareProdus`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Eveniment`
--
ALTER TABLE `Eveniment`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Furnizor`
--
ALTER TABLE `Furnizor`
  MODIFY `Cod_Furnizor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Produs`
--
ALTER TABLE `Produs`
  MODIFY `Cod_Produs` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `RezervareBilet`
--
ALTER TABLE `RezervareBilet`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `RezervareEveniment`
--
ALTER TABLE `RezervareEveniment`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Serviciu`
--
ALTER TABLE `Serviciu`
  MODIFY `Cod_Serviciu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `TipEveniment`
--
ALTER TABLE `TipEveniment`
  MODIFY `Cod_TipEveniment` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `Utilizator`
--
ALTER TABLE `Utilizator`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `Webinar`
--
ALTER TABLE `Webinar`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
