-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 19 Cze 2023, 00:32
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
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
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `ID_Książki` int(11) NOT NULL,
  `Tytuł` varchar(50) NOT NULL,
  `Autor` varchar(50) NOT NULL,
  `Gatunek` varchar(30) NOT NULL,
  `Rok_wydania` year(4) NOT NULL,
  `Wypożyczone` int(1) DEFAULT 0,
  `image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`ID_Książki`, `Tytuł`, `Autor`, `Gatunek`, `Rok_wydania`, `Wypożyczone`, `image`) VALUES
(1, 'Harry Potter i Czara Ognia', 'Joanne Kathleen Rowling', 'Fantasy', 2002, 0, ''),
(2, 'Harry Potter i Zakon Feniksa', 'Joanne Kathleen Rowling', 'Fantasy', 2005, 0, ''),
(3, 'Krzyżacy', 'Henryk Sienkiewicz', 'Powieść historyczna', 2009, 0, ''),
(4, 'Pułapki myślenia. O myśleniu szybkim i wolnym', 'Daniel Kahneman', 'Psychologia', 2012, 0, ''),
(5, 'Później', 'Stephen King', 'Horror', 2021, 0, ''),
(6, 'Ziemia obiecana', 'Barack Obama', 'Literatura faktu', 2021, 0, ''),
(7, 'Felix, Net i Nika oraz Gang Niewidzialnych Ludzi', 'Kosik Rafał', 'Fantasy', 2012, 0, ''),
(8, 'Makbet', 'William Shakespeare', 'Tragedia', 2008, 1, ''),
(9, 'Harry Potter i przeklęte dziecko', 'Joanne Kathleen Rowling', 'Fantasy', 2016, 0, ''),
(10, 'Potęga podświadomości', 'Joseph Murphy', 'Psychologia', 2020, 0, ''),
(11, 'Wiedźmin. Tom 1. Ostatnie życzenie', 'Andrzej Sapkowski', 'Fantasy', 2007, 0, ''),
(12, 'Wiedźmin. Tom 3. Krew elfów', 'Andrzej Sapkowski', 'Fantasy', 2014, 0, ''),
(13, 'Tarzan wśród małp', 'Edgar Rice Burroughs', 'Powieść przygodowa', 2016, 0, ''),
(15, 'To', 'Stephen King', 'Horror', 2017, 0, ''),
(31, 'Pan Tadeusz', 'Adam Mickiewicz', 'Powieść historyczna', 2012, 0, ''),
(34, 'Potop', 'Henryk Sienkiewicz', 'Powieść historyczna', 2010, 0, 0x706f746f702e6a7067);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'test', '12345'),
(3, 'kamil', 'ślimak'),
(4, 'klient2', '123'),
(5, 'fajnekonto', '123'),
(6, 'klient1', '123'),
(7, 'klient', 'hasło'),
(8, 'jestdobrze', '1234'),
(9, 'siemano', 'kolano'),
(10, 'Adam31', 'zaq1@WSX'),
(11, 'Kowalski', 'kochamczytac');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wypozyczenia`
--

CREATE TABLE `wypozyczenia` (
  `ID_Wypożyczenia` int(11) NOT NULL,
  `ID_Użytkownika` int(11) NOT NULL,
  `ID_Książki` int(11) NOT NULL,
  `Data_wypożyczenia` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `wypozyczenia`
--

INSERT INTO `wypozyczenia` (`ID_Wypożyczenia`, `ID_Użytkownika`, `ID_Książki`, `Data_wypożyczenia`) VALUES
(39, 10, 8, '2023-06-19');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`ID_Książki`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD PRIMARY KEY (`ID_Wypożyczenia`),
  ADD KEY `ID_Użytkownika` (`ID_Użytkownika`),
  ADD KEY `ID_Książki` (`ID_Książki`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `ID_Książki` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  MODIFY `ID_Wypożyczenia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `wypozyczenia`
--
ALTER TABLE `wypozyczenia`
  ADD CONSTRAINT `wypozyczenia_ibfk_1` FOREIGN KEY (`ID_Użytkownika`) REFERENCES `uzytkownicy` (`ID`),
  ADD CONSTRAINT `wypozyczenia_ibfk_2` FOREIGN KEY (`ID_Książki`) REFERENCES `ksiazki` (`ID_Książki`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
