-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 03, 2020 alle 19:28
-- Versione del server: 10.4.11-MariaDB
-- Versione PHP: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fioraio`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `fiore`
--

CREATE TABLE `fiore` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `occasion_id` int(11) NOT NULL,
  `cost` int(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `fiore`
--

INSERT INTO `fiore` (`id`, `name`, `occasion_id`, `cost`, `quantity`, `created`, `modified`) VALUES
(1, 'Fiorellino', 2, 11, 222, '2020-05-03', '2020-05-03'),
(2, 'Fiore2', 2, 22, 3, '2020-05-03', '2020-05-03'),
(3, 'Fioredelcompleanno', 1, 11, 1, '2020-05-03', '2020-05-03');

-- --------------------------------------------------------

--
-- Struttura della tabella `occasions`
--

CREATE TABLE `occasions` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `created` date NOT NULL,
  `modified` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `occasions`
--

INSERT INTO `occasions` (`id`, `name`, `description`, `created`, `modified`) VALUES
(1, 'Compleanno', 'Bellissima festa di compleanno', '0000-00-00', '0000-00-00'),
(2, 'Matrimonio', 'Descrizione matrimonio', '2020-05-03', '2020-05-03');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `fiore`
--
ALTER TABLE `fiore`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `occasions`
--
ALTER TABLE `occasions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `fiore`
--
ALTER TABLE `fiore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `occasions`
--
ALTER TABLE `occasions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
