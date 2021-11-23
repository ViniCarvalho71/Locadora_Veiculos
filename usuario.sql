-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22-Nov-2021 às 14:49
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
-- Banco de dados: `usuario`
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
  `email` text NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cpf`, `nome`, `rua`, `num`, `bairro`, `cep`, `cidade`, `estado`, `telefone`, `email`, `usuario`, `senha`) VALUES
('058.458.898-38', 'Vinícius Carvalho', 'rehgrtehfghds', 341, 'gfhgfdhgfh', '16401370', 'Lins', 'SP', '14 99616-4842', 'carvalhovinicius71@gmail.com', 'Vinícius', '81dc9bdb52d04dc20036dbd8313ed055');

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
  `chapa` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionarios`
--

INSERT INTO `funcionarios` (`nome`, `cpf`, `cep`, `bairro`, `rua`, `num`, `cidade`, `estado`, `email`, `telefone`, `chapa`, `usuario`, `senha`) VALUES
('Vinícius Carvalho', '05815889838', '16400-370', 'Jardim Aeroporto', 0, 341, 'Lins', 'SP', 'carvalhovinicius71@gmail.com', '14 996164842', 50, 'Vinícius', '81dc9bdb52d04dc20036dbd8313ed055');

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
  `tipo` varchar(50) NOT NULL,
  `preco` decimal(10,2) NOT NULL,
  `imagem` varchar(40) NOT NULL,
  `id` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `veiculo`
--

INSERT INTO `veiculo` (`chassi`, `placa`, `marca`, `modelo`, `fabricacao`, `cor`, `km`, `tipo`, `preco`, `imagem`, `id`) VALUES
('saffds14512', 'abcd1234', 'Yamaha', 'Midnight Star', 2011, 'Azul escuro', 200, 'XVS 950A', '500.00', 'Midnight-Star.jpg', 2),
('dfd45sf45145', 'sdf45415', 'Kawasaki', 'Prisma-R7', 2021, 'verda', 200, 'motocicleta', '1200.00', 'kawasaki.jpeg', 3),
('dsfdsf541521', 'asfds15', 'Honda', 'biz', 2010, 'nude', 1200, 'fdsfsdfsd', '200.00', 'biz.jpg', 4);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `funcionarios`
--
ALTER TABLE `funcionarios`
  ADD PRIMARY KEY (`cpf`);

--
-- Índices para tabela `veiculo`
--
ALTER TABLE `veiculo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `veiculo`
--
ALTER TABLE `veiculo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
