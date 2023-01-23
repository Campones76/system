-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 11-Dez-2022 às 01:28
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `testy`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `eventis`
--

CREATE TABLE `eventis` (
  `id` int(11) NOT NULL,
  `EventName` varchar(120) NOT NULL,
  `datetime` datetime NOT NULL,
  `event_type` varchar(120) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `eventis`
--

INSERT INTO `eventis` (`id`, `EventName`, `datetime`, `event_type`, `status`) VALUES
(1, 'Portugal vs Marrocos', '2022-11-28 13:50:00', 'Sports', 1),
(9, 'Marina Vilela violin soloist', '2022-12-10 04:54:00', 'Arts', 1),
(10, 'Hugo Sousa', '2022-12-10 04:54:00', 'StandUp', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `userevents`
--

CREATE TABLE `userevents` (
  `user_events_id` int(100) NOT NULL,
  `events_user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `userevents`
--

INSERT INTO `userevents` (`user_events_id`, `events_user_id`) VALUES
(33, 1),
(33, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `isactive` tinyint(1) NOT NULL,
  `Registration_Date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `age`, `email`, `status`, `isactive`, `Registration_Date`) VALUES
(14, 'Mariana Vilela', '$2y$10$ZyHwrjauNuX6lxK5jmDRLuTsw.NkyyFJg7c4190eBZVHiypl9Wxn.', 21, 'chicooviolino@gmail.com', 0, 1, '2022-11-29'),
(16, '11', '', 11, 'strangerthings@netflix.com', 0, 1, '2022-11-29'),
(23, 'Gosto do numero 20', '$2y$10$.mEXak/e054FltJm7xq9tOkcCbu8UgYOLYSqDjOZChnX4cQI6UL4O', 20, '20automatico@rumoaos20.pt', 0, 1, '2022-11-29'),
(25, 'The Rock', '$2y$10$CQuq8Wp4CccVfZVUSFWyOuWZz5paMEYncGykZvF9lmtw2R4iLbUEu', 20, 'nosteroidstrustmebrolol@gmail.com', 0, 1, '2022-11-30'),
(32, 'Mara', '$2y$10$1KWENKTZsqGpvxVngjNdUONtBqa.nthoDiv6TMA8lUzfEjko8JFNq', 18, 'superrealemailwinkwink@myspace.com.pt', 0, 1, '2022-12-03'),
(33, 'Roni Ronaldo', '$2y$10$vU.34aKO/pXwQY4S2OhZK.8VjWU.fZOqSlUEaAGuzmkhc4DB6kvhW', 37, 'siiiiiiiiiiiim@siiiiiiiiu.com', 0, 1, '2022-12-04'),
(37, 'Gabriel', '$2y$10$ZyHwrjauNuX6lxK5jmDRLuTsw.NkyyFJg7c4190eBZVHiypl9Wxn.', 19, '123@gmail.com', 1, 1, '2022-12-07'),
(42, 'Beatriz Pinho', '$2y$10$kha8WeDB81.FjLBM8IBbQOGhs.ysTK6Ccr8S7SFfUaVzsx6Yhr2/W', 19, 'obalaodojoao@gmail.com', 1, 1, '2022-12-10'),
(43, 'Gonçalo Pires', '$2y$10$nKjIEOoRCTcusH9UfI5pSeL8ExZusVHcD4uBS65ygM4gHJ4jx13Ka', 19, 'goncalo123@gmail.com', 1, 1, '2022-12-10'),
(45, 'Rafael Duarte', '$2y$10$iH8g0O3Q5A24t4DPDiCyGOJb.jvulfSJUPG2X5E5oAobBTV3/lzlC', 19, 'rafaelemail@gmail.com', 1, 1, '2022-12-10'),
(46, 'Cleo', '$2y$10$T2VZzpfBPe7DmaArUdesLOYC2JWpUkCgUaXujZk927H6W.VCsWHLO', 16, 'h2ojustaddwater@gmail.com', 0, 1, '2022-12-10');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `eventis`
--
ALTER TABLE `eventis`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `userevents`
--
ALTER TABLE `userevents`
  ADD KEY `user_events_id` (`user_events_id`),
  ADD KEY `userevents_ibfk_2` (`events_user_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `eventis`
--
ALTER TABLE `eventis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `userevents`
--
ALTER TABLE `userevents`
  ADD CONSTRAINT `userevents_ibfk_1` FOREIGN KEY (`user_events_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `userevents_ibfk_2` FOREIGN KEY (`events_user_id`) REFERENCES `eventis` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
