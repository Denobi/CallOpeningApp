-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 11/07/2024 às 23:43
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `dbchamados`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ticketexec`
--

CREATE TABLE `ticketexec` (
  `id` int(12) NOT NULL,
  `nomeUser` varchar(150) NOT NULL,
  `dpUser` varchar(25) NOT NULL,
  `ramal` varchar(12) NOT NULL,
  `descTicket` varchar(300) NOT NULL,
  `dataExec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ticketexec`
--

INSERT INTO `ticketexec` (`id`, `nomeUser`, `dpUser`, `ramal`, `descTicket`, `dataExec`) VALUES
(14, 'TESTE', 'AZUL', '0000', 'dxrcfghyu  fcvgbhjkm fvgyhbjkm', '2024-07-11');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(110) NOT NULL,
  `nomeUser` varchar(150) NOT NULL,
  `dpUser` varchar(50) NOT NULL,
  `ramal` varchar(12) NOT NULL,
  `descTicket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomeUser`, `dpUser`, `ramal`, `descTicket`) VALUES
(6, 'Guilherme ', 'T.I', '3000', 'ssssssssssssssssssssss');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ticketexec`
--
ALTER TABLE `ticketexec`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ticketexec`
--
ALTER TABLE `ticketexec`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
