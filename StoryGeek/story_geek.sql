-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Jun-2022 às 02:02
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `story_geek`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_clientes`
--

CREATE TABLE `cadastro_clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `senha` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_clientes`
--

INSERT INTO `cadastro_clientes` (`id`, `nome`, `email`, `telefone`, `senha`) VALUES
(1, 'Eduardo Franco', 'efs2437@gmail.com', '(19)991303806', '123456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_produto`
--

CREATE TABLE `cadastro_produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `valor` varchar(15) NOT NULL,
  `img1` varchar(1000) NOT NULL,
  `img2` varchar(1000) NOT NULL,
  `img3` varchar(1000) NOT NULL,
  `img4` varchar(1000) NOT NULL,
  `img5` varchar(1000) NOT NULL,
  `descricao` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro_produto`
--

INSERT INTO `cadastro_produto` (`id`, `nome`, `valor`, `img1`, `img2`, `img3`, `img4`, `img5`, `descricao`) VALUES
(2, 'MOLETOM PRETO COM FORRO MOSTARDA - ola', 'R$189,90', 'https://d3ugyf2ht6aenh.cloudfront.net/stores/974/635/products/no-tengo-moletom21-53fe499bfa85f82e0116526636600727-1024-1024.png', 'https://d3ugyf2ht6aenh.cloudfront.net/stores/974/635/products/no-tengo-moletom41-5b8b4bbe87152b3c1116526636601944-1024-1024.png', ' https://d3ugyf2ht6aenh.cloudfront.net/stores/974/635/products/no-tengo-moletom51-8a9dc54f656d0123a316526636604117-1024-1024.png', ' https://d3ugyf2ht6aenh.cloudfront.net/stores/974/635/products/no-tengo-moletom61-1c02536e222ae240b916526636608529-1024-1024.png', 'https://d3ugyf2ht6aenh.cloudfront.net/stores/974/635/products/moletom161-d4b6d437e71367841a16526562634321-1024-1024.png', 'Você está prestes a adquirir um produto totalmente único e de qualidade.  Nossas estampas formidáveis, é claro são criadas e pensadas especialmente pra você.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `cadastro_produto`
--
ALTER TABLE `cadastro_produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_clientes`
--
ALTER TABLE `cadastro_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cadastro_produto`
--
ALTER TABLE `cadastro_produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
