-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/05/2026 às 01:50
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
-- Banco de dados: `ppi_2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `prd_nao_vulneravel`
--

CREATE TABLE `prd_nao_vulneravel` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prd_nao_vulneravel`
--

INSERT INTO `prd_nao_vulneravel` (`id`, `nome`, `categoria`, `preco`) VALUES
(1, 'Pão Francês Kg', 'Pães', 0.6),
(2, 'Pão de Queijo', 'Salgados', 4.5),
(3, 'Bolo de Fubá', 'Bolos', 15),
(4, 'Pastel de Presunto e Queijo', 'Salgados', 7.5),
(5, 'Sonho', 'Doces', 5),
(6, 'Rosquinha', 'Pães', 12.5),
(7, 'Hamburgão', 'Salgados', 18),
(8, 'Torta de Morango', 'Doces', 45.9),
(9, 'Pão de Forma', 'Pães', 6.5),
(10, 'Pastel de Nata', 'Doces', 8),
(11, 'Bolo de Cenoura com Chocolate', 'Bolos', 18.5),
(12, 'Coxinha de Frango com Catupiry', 'Salgados', 6),
(13, 'Quiche de Alho Poró', 'Salgados', 9.5),
(14, 'Pão de Forma Integral', 'Pães', 7.5),
(15, 'Massinha', 'Doces', 1.5),
(16, 'Bolo de Aipim', 'Bolos', 12),
(17, 'Folhado de Frango', 'Salgados', 7),
(18, 'Pão Doce', 'Doces', 10),
(19, 'Torta de Limão', 'Doces', 48.9),
(20, 'Bolo de copo', 'Doces', 6.5);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `prd_nao_vulneravel`
--
ALTER TABLE `prd_nao_vulneravel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `prd_nao_vulneravel`
--
ALTER TABLE `prd_nao_vulneravel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
