-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 26 Cze 2017, 22:55
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `biblioteka`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazka`
--

CREATE TABLE `ksiazka` (
  `id` int(32) NOT NULL,
  `tytul` varchar(255) CHARACTER SET ucs2 COLLATE ucs2_polish_ci NOT NULL,
  `autor` varchar(128) CHARACTER SET ucs2 COLLATE ucs2_polish_ci NOT NULL,
  `gatunek` varchar(64) CHARACTER SET ucs2 COLLATE ucs2_polish_ci NOT NULL,
  `ile` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ksiazka`
--

INSERT INTO `ksiazka` (`id`, `tytul`, `autor`, `gatunek`, `ile`) VALUES
(1, 'Miecz Przeznaczenia', 'Andrzej Sapkowski', 'Fantasy', 13),
(3, 'Zielona Mila', 'Stephen King', 'Kryminał', 15),
(4, 'Człowiek-nietoperz', 'Jo Nesbo', 'Kryminał', 8),
(5, 'Quo Vadis', 'Henryk Sienkiewicz', 'Powieść Historyczna', 9),
(6, 'Atlas Roślin', 'Renata Krzyściak-Kosińska', 'Poradnik', 2),
(7, 'untitled', 'Unknown Artist', 'Unknown', 0),
(9, 'Pasterska Korona', 'Terry Pratchett', 'Fantasy', 12),
(10, 'Kolor Magii', 'Terry Pratchett', 'Fantasy', 13);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(32) NOT NULL,
  `imie` varchar(64) NOT NULL,
  `nazwisko` varchar(64) NOT NULL,
  `login` varchar(64) NOT NULL,
  `haslo` varchar(255) NOT NULL,
  `rola` varchar(16) NOT NULL,
  `kara` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `rola`, `kara`) VALUES
(1, 'Admin', 'Adminius', 'admin', 'admin', 'admin', 0),
(2, 'user', 'user', 'user', 'user', 'user', 0),
(4, 'Kamil', 'Basta', 'kambas', 'q', 'user', 10),
(5, 'Jan', 'Kowalski', 'j', 'k', 'user', 0),
(9, 'jan', 'nowak', 'jan', 'nowak', 'user', 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenie`
--

CREATE TABLE `wypozyczenie` (
  `idWyp` int(11) NOT NULL,
  `userid` int(32) NOT NULL,
  `bookid` int(32) NOT NULL,
  `data_wyp` date NOT NULL,
  `data_od` date NOT NULL,
  `status` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wypozyczenie`
--

INSERT INTO `wypozyczenie` (`idWyp`, `userid`, `bookid`, `data_wyp`, `data_od`, `status`) VALUES
(1, 2, 1, '2017-05-23', '2017-05-23', 'oddany'),
(2, 4, 1, '2017-06-25', '2017-07-26', 'oddany'),
(21, 2, 3, '2017-06-26', '2017-07-26', 'oddany'),
(22, 5, 7, '2017-06-26', '2017-07-26', 'wypozyczony'),
(23, 5, 4, '2017-06-26', '2017-07-26', 'oddany'),
(24, 5, 4, '2017-06-26', '2017-06-26', 'oddany'),
(25, 4, 5, '2017-06-26', '2017-07-26', 'wypozyczony'),
(26, 4, 3, '2017-06-26', '2017-07-26', 'oczekiwany'),
(27, 9, 6, '2017-06-26', '2017-06-26', 'oddany'),
(28, 9, 4, '2017-06-26', '2017-06-26', 'oddany'),
(29, 9, 3, '2017-06-26', '2017-06-26', 'oddany'),
(30, 2, 9, '2017-06-26', '2017-07-26', 'wypozyczony');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ksiazka`
--
ALTER TABLE `ksiazka`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD PRIMARY KEY (`idWyp`),
  ADD KEY `userid` (`userid`),
  ADD KEY `bookid` (`bookid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazka`
--
ALTER TABLE `ksiazka`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  MODIFY `idWyp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wypozyczenie`
--
ALTER TABLE `wypozyczenie`
  ADD CONSTRAINT `wypozyczenie_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `uzytkownik` (`id`),
  ADD CONSTRAINT `wypozyczenie_ibfk_2` FOREIGN KEY (`bookid`) REFERENCES `ksiazka` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
