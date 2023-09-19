-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 19/09/2023 às 21:21
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cadastro1db`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tbclientes`
--

CREATE TABLE `tbclientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `datanascimento` varchar(10) NOT NULL,
  `profissao` varchar(100) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `possuiwhats` tinyint(1) NOT NULL,
  `enviarsms` tinyint(1) NOT NULL,
  `notficacaoemail` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tbclientes`
--

INSERT INTO `tbclientes` (`id`, `nome`, `email`, `telefone`, `datanascimento`, `profissao`, `celular`, `possuiwhats`, `enviarsms`, `notficacaoemail`) VALUES
(33, 'Abner de Souza', 'abnersouza26@gmail.com', '(19)98134-4568', '1996-12-18', 'Desenolvedor de software', '(19)98134-4568', 1, 0, 0),
(34, 'Jose Silva', 'silva@alphacode.com', '(55) 5555-5555', '1980-05-15', 'Pedreiro', '(55) 5555-5555', 1, 0, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tbclientes`
--
ALTER TABLE `tbclientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
