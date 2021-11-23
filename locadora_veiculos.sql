-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Set-2021 às 15:10
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `locadora_veiculos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(70) NOT NULL,
  `rua` varchar(100) NOT NULL,
  `num` int(4) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `rua`, `num`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `email`) VALUES
('1516215-38', 'Vinícius Carvalho da Silva', 'gfdgfdhgfshgfhgfhfgs', 341, 'fdgfdagfdagfdag', '16400-370', 'Lins', '24', '14 996164842', 'vinicius123@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionarios`
--

CREATE TABLE `funcionarios` (
  `nome` varchar(100) NOT NULL,
  `cpf` varchar(13) NOT NULL,
  `cep` varchar(13) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `rua` int(70) NOT NULL,
  `num` int(5) NOT NULL,
  `cidade` varchar(70) NOT NULL,
  `estado` varchar(2) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `chapa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome`, `cpf`, `cep`, `bairro`, `rua`, `num`, `cidade`, `estado`, `email`, `telefone`, `chapa`) VALUES
('Vinícius Carvalho', '151296-25', '215151', 'fdsfdsgdfg', 0, 561, 'dfsdgfdgaga', 'MG', 'vinicius123@gmail.com', '14 996164842', 215);

-- --------------------------------------------------------

--
-- Estrutura da tabela `veiculo`
--

CREATE TABLE `veiculo` (
  `chassi` varchar(30) NOT NULL,
  `placa` varchar(20) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `fabricacao` int(4) NOT NULL,
  `cor` varchar(50) NOT NULL,
  `km` int(6) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`chassi`, `placa`, `marca`, `modelo`, `fabricacao`, `cor`, `km`, `tipo`) VALUES
('sfd5445', 'd5df56', 'sdfdsfds', 'dsfdsfdsf', 2011, 'preto', 15, 'fdsfdsf');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`chassi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
