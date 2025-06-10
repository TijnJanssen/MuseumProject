-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jun 2025 om 16:59
-- Serverversie: 10.4.32-MariaDB
-- PHP-versie: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `museumdb`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `qrcodes`
--

CREATE TABLE `qrcodes` (
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `era` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` char(36) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `qrcodes`
--

INSERT INTO `qrcodes` (`title`, `content`, `era`, `image`, `createdAt`, `updatedAt`, `id`, `qr_code`) VALUES
('amininnnn', '<p>yusu</p>', 'vroegmoderne-tijd', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740', '2025-04-29 11:11:06', '2025-04-29 11:11:06', '7c775258-44a7-4b61-abe3-66b06247b95e', 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/d0/QR_code_for_mobile_English_Wikipedia.svg/1200px-QR_code_for_mobile_English_Wikipedia.svg.png'),
('jdsj f', 'sfsfsdf', 'Hedendaagse tijd', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740', '2025-04-29 11:24:47', '2025-04-29 11:24:47', '7a53c896-2449-4209-819d-61099930ce0e', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740'),
('jdsj f', 'sfsfsdf', 'Hedendaagse tijd', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740', '2025-04-29 11:24:53', '2025-04-29 11:24:53', '406ef60c-bdc1-4e57-94a8-942861b4c5ee', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740'),
('jdsj f', 'sfsfsdf', 'Hedendaagse tijd', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740', '2025-04-29 11:24:55', '2025-04-29 11:24:55', 'cc9f30c4-d7a9-42b1-a86e-f7721b9825b4', 'https://img.freepik.com/free-photo/luxurious-car-parked-highway-with-illuminated-headlight-sunset_181624-60607.jpg?ga=GA1.1.2083382005.1743423337&semt=ais_hybrid&w=740');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) DEFAULT 0,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `updatedAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `admin`, `createdAt`, `updatedAt`) VALUES
(1, 'Wanne', 'Vlems', 'wannevlems', 'hashed_password_1', 1, '2025-03-31 11:11:45', '2025-03-31 11:11:45'),
(2, 'Mees', 'Jansen', 'meesjansen', 'hashed_password_2', 0, '2025-03-31 11:11:45', '2025-03-31 11:11:45'),
(3, 'Tuur', 'Verwijen', 'tuurverwijen', 'hashed_password_3', 0, '2025-03-31 11:11:45', '2025-03-31 11:11:45');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
