-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jun 26, 2024 at 04:27 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

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
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `ID` int(11) NOT NULL,
  `Titlu` varchar(250) NOT NULL,
  `Categorie` varchar(250) NOT NULL,
  `Descriere` text NOT NULL,
  `Imagine` varchar(255) NOT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`ID`, `Titlu`, `Categorie`, `Descriere`, `Imagine`, `Link`) VALUES
(1, 'REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS', 'Evenimente Amgen', 'Amgen România are plăcerea de a vă invita la evenimentul REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS, o dezbatere despre tratamentul dislipidemiei pacienților aflați la risc foarte înalt cardiovascular, beneficii, provocări și strategii.', 'images/AMGEN_11-octombrie-2022-1.png', './redefining-ldl-c-management-for-very-high-risk-patients.html'),
(2, 'PROTECȚIA PACIENTULUI CU FANV, DECIZII MEDICALE ARGUMENTATE', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Șerban Bălănescu, Ș.L. Dr. Mirela Stoian', 'images/ecran_1200x800_3.png', ''),
(3, 'VIAȚA REALĂ, ÎNTRE TEORIE ȘI PRACTICA CLINICĂ', 'Evenimente Bayer', 'Speakeri: Dr. Anca Elena Găitan, Conf. Dr. Alexandru Burlacu', 'images/ecran_1200x8001_3-1.png', ''),
(4, 'FLEXIBILITATE ȘI PREDICTIBILITATE PE TERMEN LUNG: EXTINDEREA INTERVALULUI DE TRATAMENT CU AFLIBERCEPT (EYLEA)', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Horia Stanca, Conf. Dr. Daniel Brănișteanu, Prof. Dr. Mihnea Munteanu', 'images/Banner-Eylea_1200x800-01.png', ''),
(5, 'PROTECȚIA PACIENȚILOR CE NECESITĂ ANTICOAGULARE ÎN VIAȚA REALĂ', 'Evenimente Bayer', 'Speakeri: Ș.L. Dr. Ana-Maria Vintilă, Conf. Dr. Puskas Attila', 'images/ecran_1200x800_3-1.png', ''),
(6, 'TROMBOZA ȘI MICILE AMĂNUNTE UITATE: ROLUL PROFILULUI CLINIC', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Dan Dobreanu, Dr. Laura Antohi', 'images/ecran_1200x800_5.png', ''),
(7, 'ANTICOAGULAREA ÎNTRE NOUTATE ȘI OBIȘNUINȚĂ', 'Evenimente Bayer', 'Speakeri: Ș.L. Dr. Vlad Vintilă, Prof. Dr. Diana Țînț', 'images/ecran_1200x800_1.png', ''),
(8, 'DE CE DABIGATRAN PENTRU PACIENȚII CU FIBRILAȚIE ATRIALĂ?', 'Evenimente Boehringer Ingelheim', 'Speakeri: Dr. Marius Țurcan, Dr. Ruxandra Dăneț, Dr. Anca Farcaș', 'images/Carton-eveniment-1.png', ''),
(9, 'DE CE DABIGATRAN ÎN MANAGEMENTUL ANTICOAGULĂRII?', 'Evenimente Boehringer Ingelheim', 'Speakeri: Prof. Țilea Ioan, Conf. Pop Călin, Ș.L. Mitu Ovidiu', 'images/Carton-eveniment.png', ''),
(10, 'DABIGATRAN – DE PESTE 12 ANI ÎMPREUNĂ! EFICACITATE ÎN PREVENȚIA AVC, PROFIL DE SIGURANȚĂ FAVORABIL, REVERSIBILITATE', 'Evenimente Boehringer Ingelheim', 'Speakeri: Conf. Dragoș Cozma, Conf. Cristina Florescu, Dr. Andrei Rusali', 'images/Carton-eveniment2.png', ''),
(11, 'DABIGATRAN UN PARTENER DE ÎNCREDERE ÎN PREVENȚIA AVC DIN FIBRILAȚIA ATRIALĂ', 'Evenimente Boehringer Ingelheim', 'Speakeri: Dr. Ioana Daha, Dr. Ionuț Stanca, Dr. Vasilica Enache', 'images/Carton-eveniment-01.png', ''),
(12, 'CONGRESUL SOCIETĂȚII ROMÂNE DE GLAUCOM - Ediția 2023', 'Evenimente SRG', 'Societatea Română de Glaucom are plăcerea să vă invite la o nouă ediție a congresului său, ce se va desfășura exclusiv fizic în perioada 16-18 martie la Hotel Kronwell, Brașov.', 'images/banner Congres-SRG 2023.png', './congres-srg2023.html'),
(13, 'CONGRESUL COLEGIULUI MEDICILOR STOMATOLOGI DIN BUCUREȘTI - Ediția 2022', 'Evenimente CMSB', 'Evenimentul intitulat „Viziune, performanţă, perspective în practica stomatologică” . își propune să aducă în atenția dumneavoastră cele mai recente descoperiri din domeniul stomatologiei, prezentate de personalități ale cercetării științifice medicale naționale și internaționale. Experiența primei ediții lansează provocarea unor standarde și performanțe adaptate noilor orizonturi profesionale. Astfel, a doua ediție a Congresului CMSB, având ca fundament o abordare multidisciplinară, va reprezenta o oportunitate excelentă de studiu, prin prisma temelor și cercetărilor științifice prezentate, promovând cele mai recente practici, cu scopul continuării misiunii educaționale și îmbunătățirii portofoliului de cunoștințe în domeniul stomatologiei.', 'images/banner CMSB 2022.jpg', './congres-cmsb2022.html'),
(14, 'CONFERINȚA SOCIETĂȚII DE NEURORADIOLOGIE ȘI RADIOLOGIE INTERVENȚIONALĂ DIN ROMÂNIA - Ediția 2023', 'Evenimente SNRIR', 'Vă invităm, aşadar, în perioada 30 martie-2 aprilie 2023 să participaţi la cea mai importantă manifestare ştiinţifică organizată de Societatea de Neuroradiologie și Radiologie Intervențională din România (SNRIR). Manifestarea va aduce în atenţia dumneavoastră teme extrem de interesante: tratamentul minim invaziv în terapia durerii, patologia venoasă acută (tromboza venoasă profundă, trombembolism pulmonar), patologia cerebrovasculară determinată de accidentul vascular ischemic (STROKE) şi accidentul vascular hemoragic.', 'images/SNRIR_2022_Header-site_SNRIR-01-1024x408.png', './conferinta-snrir2023.html'),
(15, 'CANĂ SUBLIMARE ALBĂ + CUTIE', 'Cadouri personalizate', '', 'images/cana-sublimare-alba-cu-cutie-alba.png', './cana-sublimare-alba-cu-cutie-alba.html');

-- --------------------------------------------------------

--
-- Table structure for table `Chitante`
--

CREATE TABLE `Chitante` (
  `ID` int(2) NOT NULL,
  `Nume` varchar(250) NOT NULL,
  `Prenume` varchar(250) NOT NULL,
  `GradProfesional` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Telefon` varchar(250) NOT NULL,
  `Produs` varchar(250) NOT NULL,
  `TotalPlata` varchar(250) NOT NULL,
  `MetodaPlata` varchar(250) NOT NULL,
  `Chitanta` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Chitante`
--

INSERT INTO `Chitante` (`ID`, `Nume`, `Prenume`, `GradProfesional`, `Email`, `Telefon`, `Produs`, `TotalPlata`, `MetodaPlata`, `Chitanta`) VALUES
(1, 'Năstase', 'Adriana', 'STUDENT', 'adriana.nastase@mediamed.ro', '0771499210', 'CANĂ SUBLIMARE ALBĂ + CUTIE', '4.90€', 'CARD', './confirmare-comanda-cana-sublimare-alba-cu-cutie-alba.html');

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
-- Table structure for table `Evenimente`
--

CREATE TABLE `Evenimente` (
  `ID` int(11) NOT NULL,
  `Titlu` varchar(250) NOT NULL,
  `Categorie` varchar(250) NOT NULL,
  `Descriere` text NOT NULL,
  `Imagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Evenimente`
--

INSERT INTO `Evenimente` (`ID`, `Titlu`, `Categorie`, `Descriere`, `Imagine`) VALUES
(1, 'REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS', 'Evenimente Amgen', 'Amgen România are plăcerea de a vă invita la evenimentul REDEFINING LDL-C MANAGEMENT IN VERY HIGH RISK PATIENTS, o dezbatere despre tratamentul dislipidemiei pacienților aflați la risc foarte înalt cardiovascular, beneficii, provocări și strategii.', 'images/AMGEN_11-octombrie-2022-1.png'),
(2, 'PROTECȚIA PACIENTULUI CU FANV, DECIZII MEDICALE ARGUMENTATE', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Șerban Bălănescu, Ș.L. Dr. Mirela Stoian', 'images/ecran_1200x800_3.png'),
(3, 'VIAȚA REALĂ, ÎNTRE TEORIE ȘI PRACTICA CLINICĂ', 'Evenimente Bayer', 'Speakeri: Dr. Anca Elena Găitan, Conf. Dr. Alexandru Burlacu', 'images/ecran_1200x8001_3-1.png'),
(4, 'FLEXIBILITATE ȘI PREDICTIBILITATE PE TERMEN LUNG: EXTINDEREA INTERVALULUI DE TRATAMENT CU AFLIBERCEPT (EYLEA)', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Horia Stanca, Conf. Dr. Daniel Brănișteanu, Prof. Dr. Mihnea Munteanu', 'images/Banner-Eylea_1200x800-01.png'),
(5, 'PROTECȚIA PACIENȚILOR CE NECESITĂ ANTICOAGULARE ÎN VIAȚA REALĂ', 'Evenimente Bayer', 'Speakeri: Ș.L. Dr. Ana-Maria Vintilă, Conf. Dr. Puskas Attila', 'images/ecran_1200x800_3-1.png'),
(6, 'TROMBOZA ȘI MICILE AMĂNUNTE UITATE: ROLUL PROFILULUI CLINIC', 'Evenimente Bayer', 'Speakeri: Prof. Dr. Dan Dobreanu, Dr. Laura Antohi', 'images/ecran_1200x800_5.png'),
(7, 'ANTICOAGULAREA ÎNTRE NOUTATE ȘI OBIȘNUINȚĂ', 'Evenimente Bayer', 'Speakeri: Ș.L. Dr. Vlad Vintilă, Prof. Dr. Diana Țînț', 'images/ecran_1200x800_1.png'),
(8, 'DE CE DABIGATRAN PENTRU PACIENȚII CU FIBRILAȚIE ATRIALĂ?', 'Evenimente Boehringer Ingelheim', 'Speakeri: Dr. Marius Țurcan, Dr. Ruxandra Dăneț, Dr. Anca Farcaș', 'images/Carton-eveniment-1.png'),
(9, 'DE CE DABIGATRAN ÎN MANAGEMENTUL ANTICOAGULĂRII?', 'Evenimente Boehringer Ingelheim', 'Speakeri: Prof. Țilea Ioan, Conf. Pop Călin, Ș.L. Mitu Ovidiu', 'images/Carton-eveniment.png'),
(10, 'DABIGATRAN – DE PESTE 12 ANI ÎMPREUNĂ! EFICACITATE ÎN PREVENȚIA AVC, PROFIL DE SIGURANȚĂ FAVORABIL, REVERSIBILITATE', 'Evenimente Boehringer Ingelheim', 'Speakeri: Conf. Dragoș Cozma, Conf. Cristina Florescu, Dr. Andrei Rusali', 'images/Carton-eveniment2.png'),
(11, 'DABIGATRAN UN PARTENER DE ÎNCREDERE ÎN PREVENȚIA AVC DIN FIBRILAȚIA ATRIALĂ', 'Evenimente Boehringer Ingelheim', 'Speakeri: Dr. Ioana Daha, Dr. Ionuț Stanca, Dr. Vasilica Enache', 'images/Carton-eveniment-01.png'),
(12, 'CONGRESUL SOCIETĂȚII ROMÂNE DE GLAUCOM - Ediția 2023', 'Evenimente SRG', 'Societatea Română de Glaucom are plăcerea să vă invite la o nouă ediție a congresului său, ce se va desfășura exclusiv fizic în perioada 16-18 martie la Hotel Kronwell, Brașov.', 'images/banner Congres-SRG 2023.png'),
(13, 'CONGRESUL COLEGIULUI MEDICILOR STOMATOLOGI DIN BUCUREȘTI - Ediția 2022', 'Evenimente CMSB', 'Evenimentul intitulat „Viziune, performanţă, perspective în practica stomatologică” . își propune să aducă în atenția dumneavoastră cele mai recente descoperiri din domeniul stomatologiei, prezentate de personalități ale cercetării științifice medicale naționale și internaționale. Experiența primei ediții lansează provocarea unor standarde și performanțe adaptate noilor orizonturi profesionale. Astfel, a doua ediție a Congresului CMSB, având ca fundament o abordare multidisciplinară, va reprezenta o oportunitate excelentă de studiu, prin prisma temelor și cercetărilor științifice prezentate, promovând cele mai recente practici, cu scopul continuării misiunii educaționale și îmbunătățirii portofoliului de cunoștințe în domeniul stomatologiei.', 'images/banner CMSB 2022.jpg'),
(14, 'CONFERINȚA SOCIETĂȚII DE NEURORADIOLOGIE ȘI RADIOLOGIE INTERVENȚIONALĂ DIN ROMÂNIA - Ediția 2023', 'Evenimente SNRIR', 'Vă invităm, aşadar, în perioada 30 martie-2 aprilie 2023 să participaţi la cea mai importantă manifestare ştiinţifică organizată de Societatea de Neuroradiologie și Radiologie Intervențională din România (SNRIR). Manifestarea va aduce în atenţia dumneavoastră teme extrem de interesante: tratamentul minim invaziv în terapia durerii, patologia venoasă acută (tromboza venoasă profundă, trombembolism pulmonar), patologia cerebrovasculară determinată de accidentul vascular ischemic (STROKE) şi accidentul vascular hemoragic.', 'images/SNRIR_2022_Header-site_SNRIR-01-1024x408.png'),
(15, 'One eternity later', 'Cadouri personalizate', 'Spongebob', 'images/d3da286e0671b419ceed87266b1afc82.jpg');

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
  `ID` int(11) NOT NULL,
  `Titlu` varchar(250) NOT NULL,
  `Categorie` varchar(250) NOT NULL,
  `Descriere` text NOT NULL,
  `Imagine` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Produs`
--

INSERT INTO `Produs` (`ID`, `Titlu`, `Categorie`, `Descriere`, `Imagine`) VALUES
(1, 'CANĂ SUBLIMARE ALBĂ + CUTIE', 'Cadouri personalizate', '-', 'images/cana-sublimare-alba-cu-cutie-alba.png');

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
(2, 'Năstase', 'Adriana', 'Anticoagularea între noutate și obișnuință', '2022-11-15', 'ONLINE pe live.mediamed.ro', '2000€', '-'),
(3, 'Năstase', 'Adriana', 'Congres UMF', '2023-10-26', 'HIBRID', '6000€', '1');

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
(1, '', 'Adry', 'adry', 'adriana.nastase@rau.ro', 'adry', 'admin'),
(2, 'Năstase', 'Adriana', 'nastaseadriana', 'adryadriana.migu@gmail.com', '1511', 'user');

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
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Chitante`
--
ALTER TABLE `Chitante`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Contact`
--
ALTER TABLE `Contact`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Evenimente`
--
ALTER TABLE `Evenimente`
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
  ADD PRIMARY KEY (`ID`);

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
-- Indexes for table `Utilizator`
--
ALTER TABLE `Utilizator`
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
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Chitante`
--
ALTER TABLE `Chitante`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Contact`
--
ALTER TABLE `Contact`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Evenimente`
--
ALTER TABLE `Evenimente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `Furnizor`
--
ALTER TABLE `Furnizor`
  MODIFY `Cod_Furnizor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Produs`
--
ALTER TABLE `Produs`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `RezervareBilet`
--
ALTER TABLE `RezervareBilet`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `RezervareEveniment`
--
ALTER TABLE `RezervareEveniment`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Serviciu`
--
ALTER TABLE `Serviciu`
  MODIFY `Cod_Serviciu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `Utilizator`
--
ALTER TABLE `Utilizator`
  MODIFY `ID` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
