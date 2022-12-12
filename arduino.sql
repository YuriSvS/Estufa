-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Dez-2022 às 01:56
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `arduino`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `dados`
--

CREATE TABLE `dados` (
  `id` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `lumi` int(11) NOT NULL,
  `co2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `dados`
--

INSERT INTO `dados` (`id`, `temp`, `lumi`, `co2`) VALUES
(1, 16, 85, 23),
(2, 16, 85, 23),
(3, 26, 56, 3),
(4, 26, 56, 3),
(5, 22, 99, 14),
(6, 31, 15, 11),
(7, 50, 20, 20),
(8, 66, 10, 10),
(9, 70, 20, 20),
(12, 1, 1, 1),
(13, 11, 11, 11);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesq`
--

CREATE TABLE `pesq` (
  `id` int(11) NOT NULL,
  `temp` int(11) DEFAULT NULL,
  `luminosidade` int(100) DEFAULT NULL,
  `co2` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesq`
--

INSERT INTO `pesq` (`id`, `temp`, `luminosidade`, `co2`) VALUES
(46, 10, 25, 13),
(47, 31, 0, 0),
(48, 41, 12, 12),
(49, 0, 0, 0),
(50, 31, 2, 0),
(51, 31, 2, 0),
(52, 71, 10, 12),
(53, 60, 1, 1),
(54, 74, 4, 4),
(55, 74, 4, 52);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `login` varchar(250) NOT NULL,
  `senha` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `login`, `senha`) VALUES
(1, 'pedro@gmail.com', '123'),
(2, 'pedroo@gmail.com', '123'),
(4, 'a@gmail.com', '123'),
(5, 'teste@gmail.com', '123');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `dados`
--
ALTER TABLE `dados`
  ADD UNIQUE KEY `id` (`id`);

--
-- Índices para tabela `pesq`
--
ALTER TABLE `pesq`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `dados`
--
ALTER TABLE `dados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de tabela `pesq`
--
ALTER TABLE `pesq`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
