-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Feb 21, 2019 alle 13:35
-- Versione del server: 10.1.28-MariaDB
-- Versione PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negozio`
--
CREATE DATABASE IF NOT EXISTS `negozio` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `negozio`;

-- --------------------------------------------------------

--
-- Struttura della tabella `categoria`
--

CREATE TABLE `categoria` (
  `ID_categoria` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `fornitori` enum('Samsung','Apple') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotto`
--

CREATE TABLE `prodotto` (
  `ID_prodotto` int(11) NOT NULL,
  `marca` varchar(20) NOT NULL,
  `modello` varchar(20) NOT NULL,
  `descrizione` varchar(50) NOT NULL,
  `prezzo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `recensioni`
--

CREATE TABLE `recensioni` (
  `ID_recensione` int(11) NOT NULL,
  `rec` text NOT NULL,
  `rating` enum('1','2','3','4','5') NOT NULL,
  `ID_persona` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `ID_utente` int(11) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `cognome` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(61) NOT NULL,
  `nazione` varchar(20) NOT NULL,
  `registrazione` date NOT NULL,
  `last_login` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`ID_utente`, `nome`, `cognome`, `username`, `password`, `nazione`, `registrazione`, `last_login`) VALUES
(1, 'Marian', 'Cioanca', 'IMRC', '$2y$10$TC5mIFhGR6lleezHuaTN1edHTQ435xSRohbpt7iW4guyiMOn3M/3m', 'Romania', '2019-02-18', '2019-02-21'),
(2, '', '', '', '$2y$10$SvCMQxU2kzR.RtW8CphUBuolTQQLgeBsJDpBBCi9znbwVT4UHJcgy', '', '2019-02-18', '2019-02-21'),
(3, 'Marian', 'Cioanca', 'IMRC', '$2y$10$Zgvx0mi3d/B6BPogpa5MeOZQ0N50rGKumcZcBb2V1BOH8lj8JqooO', 'Romania', '2019-02-21', '2019-02-21'),
(4, '', '', '', '$2y$10$Xp4c0cY5l9A2fxanY59Ub.BMRRV/8enKnRbPmBWwyoxvbO77yCBB.', '', '2019-02-21', '2019-02-21'),
(5, '', '', '', '$2y$10$M97ZjkP2f/kBsZYT9Zy62eExnFF0wWaIKn1ZHxENGrF.KB4xWuT1C', '', '2019-02-21', '2019-02-21'),
(6, '', '', '', '$2y$10$Odt5MGvzHO9mI13J0JICSuymru08D7kzNP0uITKKazVUGAPBxRYFq', '', '2019-02-21', '2019-02-21'),
(7, '', '', 'test', '$2y$10$FLODk43bwG37HfQ9SEPA4OGASOEXRokMkM4XFlqNJX08kQKg0b9Ca', '', '2019-02-21', '2019-02-21'),
(8, '', '', 'asd', '$2y$10$GdexBAMVkVTVKuRmvf.BJO0sGl2kKkUrrjwSvxAntAVwqftKQHQeK', '', '2019-02-21', '2019-02-21'),
(9, '', '', '', '$2y$10$L1HM3eSjWfBq.b.zjUzC3uYdLcr6HCH2ApLc76tDmFzFe5cXWsa7C', '', '2019-02-21', '2019-02-21'),
(10, '', '', '', '$2y$10$7Mbj6u8T/L4ygoGA/ZTL1.wfUz4jyHxzabXZdu902akuBYk9ftwNu', '', '2019-02-21', '2019-02-21'),
(11, '', '', 'a', '$2y$10$oXaxCI/X5uVwAhEMWOl/b.1kHyHEl1X.9RDE61qOYEZlnR581QgjW', '', '2019-02-21', '2019-02-21'),
(12, '', '', 'asd', '$2y$10$nYaisIFJaZcHK9kt/KV3I.U8gBa6D8fGZUKXx/utQaRPFuDUdSzv6', '', '2019-02-21', '2019-02-21'),
(13, '', '', '', '$2y$10$GZoIVl/4CIeJg5yT2Z3jv.smF7cS0mWkO3jz1b31Ns1j8iM7gYF0y', '', '2019-02-21', '2019-02-21'),
(14, '', '', '', '$2y$10$xGxQ2vfd2tG1sQpR3KGnfe5jIGE5aMWRONeTHjP/38xUrIa77lqnK', '', '2019-02-21', '2019-02-21');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `prodotto`
--
ALTER TABLE `prodotto`
  ADD PRIMARY KEY (`ID_prodotto`);

--
-- Indici per le tabelle `recensioni`
--
ALTER TABLE `recensioni`
  ADD PRIMARY KEY (`ID_recensione`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID_utente`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `prodotto`
--
ALTER TABLE `prodotto`
  MODIFY `ID_prodotto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  MODIFY `ID_recensione` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `ID_utente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
