-- tabela exportada do phpMyAdmin

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Estrutura para tabela `prd_vulneravel`
--

CREATE TABLE `prd_vulneravel` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `categoria` varchar(50) NOT NULL,
  `preco` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `prd_vulneravel`
--

INSERT INTO `prd_vulneravel` (`id`, `nome`, `categoria`, `preco`) VALUES
(1, 'Pão Francês Kg', 'Pães', 0.6),
(2, 'Pão de Queijo', 'Salgados', 4.5),
(3, 'Bolo de Fubá', 'Bolos', 15),
(4, 'Pastel de Presunto e Queijo', 'Salgados', 7.5),
(5, 'Sonho', 'Doces', 5),
(6, 'Rosquinha', 'Pães', 12.5),
(7, 'Hamburgão', 'Salgados', 18),
(8, 'Torta de Morango', 'Doces', 45.9);

--
-- Índices de tabela `prd_vulneravel`
--
ALTER TABLE `prd_vulneravel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabela `prd_vulneravel`
--
ALTER TABLE `prd_vulneravel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

