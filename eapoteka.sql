-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 03:04 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eapoteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategorijalekova`
--

CREATE TABLE `kategorijalekova` (
  `kategorijaID` int(11) NOT NULL,
  `nazivKategorije` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorijalekova`
--

INSERT INTO `kategorijalekova` (`kategorijaID`, `nazivKategorije`) VALUES
(1, 'Analgetici'),
(2, 'Sumece granule'),
(3, 'Imunostimulanti'),
(4, 'Anestetici'),
(5, 'Sedativi'),
(6, 'Lekovi za alergiju'),
(7, 'Hipnotici');

-- --------------------------------------------------------

--
-- Table structure for table `korisnik`
--

CREATE TABLE `korisnik` (
  `korisnikID` int(11) NOT NULL,
  `imePrezime` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `korisnickaUloga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `korisnik`
--

INSERT INTO `korisnik` (`korisnikID`, `imePrezime`, `username`, `password`, `korisnickaUloga`) VALUES
(1, 'Milica Milinkovic', 'admin', 'admin', 'admin'),
(2, 'Katarina Jovicic', 'kaca', 'kaca', 'korisnik');


-- --------------------------------------------------------

--
-- Table structure for table `kupovina`
--

CREATE TABLE `kupovina` (
  `kupovinaID` int(11) NOT NULL,
  `lekID` int(11) NOT NULL,
  `korisnikID` int(11) NOT NULL,
  `daLiJeObavljena` tinyint(1) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kupovina`
--

INSERT INTO `kupovina` (`kupovinaID`, `lekID`, `korisnikID`, `daLiJeObavljena`, `datum`) VALUES
(2, 8, 2, 1, '2020-02-7'),
(3, 11, 2, 1, '2020-02-5'),
(5, 10, 2, 0, '2020-02-4'),
(6, 10, 2, 0, '2020-02-2');


-- --------------------------------------------------------

--
-- Table structure for table `lekovi`
--

CREATE TABLE `lekovi` (
  `lekID` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `opis` text NOT NULL,
  `slika` varchar(255) NOT NULL,
  `cena` int(11) NOT NULL,
  `kategorijaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lekovi`
--

INSERT INTO `lekovi` (`lekID`, `naziv`, `opis`, `slika`, `cena`, `kategorijaID`) VALUES
(2, 'Brufen', 'Antiinflamatorni i antireumatski lek namenjen za lecenje reumatskih i nereumatskih bolesti mišicno-koštanog sistema. Upotrebljava se u terapiji bola i zapaljenja.', 'slika1.jpg', 459, 1),
(3, 'Tylol Hot', 'Namenjen za ublažavanje simptoma prehlade, gripa, kao što su: zapušen nos,kijanje, curenje nosa, povišena telesna temperatura, glavobolja i bol u mišicima i zglobovima.', 'slika3.jpg', 420, 2),
(4, 'Riluzol', 'Koristi se kod pacijenata sa amiotroficnom lateralnom sklerozom(als-oboljenje motornog neurona koje napada nervne celije).', 'riluzol.jpg', 560, 4),
(5, 'Histamin', 'Povecava kapilarnu permeabilnost za bela krvna zrnca i proteine, cime im omogucava dejstvo protiv stranih organizama u inficiranim tkivima.', 'histamin.jpg', 1500, 3),
(6, 'Aspirin', 'Lek Aspirin 500 se uzima za simptomatsko lecenje povišene telesne temperature i/ili blagog do umerenog bola kao što je glavobolja, sindrom slican gripu, zubobolja, bol u mišicima. Lek Aspirin 500 je namenjen odraslima i adolescentima od 16 godina i starijima.', 'aspirin.jpg', 710, 1),
(7, 'Bromazepam', 'Koristi se za lecenje teškog oblika anksioznosti, koji ometa obavljanje svakodnevnih aktivnosti. Ovaj lek se prepisuje na što kraci vremenski period.', 'bromazepam.jpg', 840, 5),
(8, 'Kafetin', 'Lek je kombinovani preparat koji se koristi za kratkotrajnu terapiju umerenog bola, kao što je glavobolja, zubobolja, migrena, išijalgija, menstrualni bol.', 'kafetin.jpg', 240, 1),
(9, 'Persen', 'Tradicionalni biljni lek koji se koristi pri ublažavanju simptoma blagog psihickog stresa, kao i pomoc kod nesanice.', 'persen.jpg', 250, 5),
(10, 'Aerius', 'Lek koji ublažava simptome alergije, a ne izaziva pospanost.', 'aerius.jpg', 480, 6),
(11, 'Panadol', 'Panadol je analgetik na bazi paracetamola koji pruža brzo i efikasno ublažavanje blagih do umerenih bolova, glavobolje, bola u leđima, mišicima, menstrualnih bolova, zubobolje.', 'panadol.jpg', 520, 1),
(12, 'Propofol', 'Usporava aktivnost mozga i nervnog sistema. Koristi se za uspavljivanje i kao anestezija tokom operacija i ostalih medicinskih zahvata.', 'propofol.jpg', 1800, 7),
(13, 'Vitamin C', 'Neophodan je za ocuvanje vitalnosti i poboljšanje otpornosti celokupnog organizma.', 'vitaminc.jpg', 120, 2),
(14, 'Magnezijum', 'Pomaže kod opuštanja krvnih sudova i mišica, nesanice, grceva u mišicima.', 'magnezijum.jpg', 590, 2),
(15, 'Selen', 'Selen je esencijalni mineral koji služi kao antioksidans, narocito u kombinaciji sa vitaminom E.', 'selen.jpg', 460, 2),
(16, 'Coldrex', 'Lek za ublažavanje simptoma prehlade i gripa za odrasle i decu stariju od 12 godina.', 'coldrex.png', 250, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategorijalekova`
--
ALTER TABLE `kategorijalekova`
  ADD PRIMARY KEY (`kategorijaID`);

--
-- Indexes for table `korisnik`
--
ALTER TABLE `korisnik`
  ADD PRIMARY KEY (`korisnikID`);

--
-- Indexes for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD PRIMARY KEY (`kupovinaID`),
  ADD KEY `lek_FK` (`lekID`),
  ADD KEY `korisnik_FK` (`korisnikID`);

--
-- Indexes for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD PRIMARY KEY (`lekID`),
  ADD KEY `kategorija_FK` (`kategorijaID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategorijalekova`
--
ALTER TABLE `kategorijalekova`
  MODIFY `kategorijaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `korisnik`
--
ALTER TABLE `korisnik`
  MODIFY `korisnikID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kupovina`
--
ALTER TABLE `kupovina`
  MODIFY `kupovinaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lekovi`
--
ALTER TABLE `lekovi`
  MODIFY `lekID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kupovina`
--
ALTER TABLE `kupovina`
  ADD CONSTRAINT `korisnik_FK` FOREIGN KEY (`korisnikID`) REFERENCES `korisnik` (`korisnikID`),
  ADD CONSTRAINT `lek_FK` FOREIGN KEY (`lekID`) REFERENCES `lekovi` (`lekID`);

--
-- Constraints for table `lekovi`
--
ALTER TABLE `lekovi`
  ADD CONSTRAINT `kategorija_FK` FOREIGN KEY (`kategorijaID`) REFERENCES `kategorijalekova` (`kategorijaID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
