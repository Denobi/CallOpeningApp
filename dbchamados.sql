-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/07/2024 às 23:05
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
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(110) NOT NULL,
  `nomeUser` varchar(150) NOT NULL,
  `dpUser` varchar(50) NOT NULL,
  `ramal` varchar(50) NOT NULL,
  `descTicket` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nomeUser`, `dpUser`, `ramal`, `descTicket`) VALUES
(1, 'Guilherme ', 'T.I', '3000', 'wssssss '),
(2, 'dd', 'ddd', '000', 'xczjncjn jfdvsjhbdvfjhb jhb jbh jhbjbh  bbuhgj bjhbhj  bhjhjb hjhbb hjhbbhj   hjjhdfjbkbfjvkfdjkbjfbfvf b  bf bvfjkbfd bjkfd bhkfd bhkl hd fvb bfjbb dfbkfdvbkbfvdkb fdkkdflvbkf bkdfvb kbfdkbfv kbdfk fdbk'),
(3, 'sa', 'aaa', '1200', 'sdddddd sdsdsdsds ds  ed qw wqdwe m     j jj jjbj gjj uguguu\r\n');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(110) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
