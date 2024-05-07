-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 07/05/2024 às 20:47
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `meuhotel`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `checkin`
--

CREATE TABLE `checkin` (
  `id_checkin` int(11) NOT NULL,
  `data_marcado` date NOT NULL,
  `data_entrada` date NOT NULL,
  `data_saida` date NOT NULL,
  `status` char(2) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_quarto` int(11) NOT NULL,
  `total_final` decimal(18,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `checkin`
--

INSERT INTO `checkin` (`id_checkin`, `data_marcado`, `data_entrada`, `data_saida`, `status`, `id_cliente`, `id_quarto`, `total_final`) VALUES
(1, '2024-05-07', '2024-05-14', '2024-05-21', 'FF', 1, 1, '0.0000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `cpf` char(15) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `configuracao_calculo`
--

CREATE TABLE `configuracao_calculo` (
  `cafe_manha` decimal(18,4) NOT NULL,
  `lazer` decimal(18,4) NOT NULL,
  `taxa_servico` decimal(18,4) NOT NULL,
  `desconto` decimal(18,4) NOT NULL,
  `alta_temporada` decimal(18,4) NOT NULL,
  `imposto` decimal(18,4) NOT NULL,
  `consumo_a_mais` decimal(18,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto_cliente`
--

CREATE TABLE `foto_cliente` (
  `id_foto_cliente` int(11) NOT NULL,
  `caminho` varchar(30) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `foto_quarto`
--

CREATE TABLE `foto_quarto` (
  `id_foto_quarto` int(11) NOT NULL,
  `caminho` varchar(30) NOT NULL,
  `id_quarto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacoes`
--

CREATE TABLE `informacoes` (
  `mensagem_boas_vindas` varchar(15) NOT NULL,
  `sub_mensagem` varchar(60) NOT NULL,
  `sobre` varchar(60) NOT NULL,
  `localizacao` varchar(60) NOT NULL,
  `telefone` char(14) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `login` varchar(30) NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura para tabela `quarto`
--

CREATE TABLE `quarto` (
  `id_quarto` int(11) NOT NULL,
  `nome` varchar(15) NOT NULL,
  `descricao` varchar(60) NOT NULL,
  `qtde_adulto` int(11) NOT NULL,
  `qtde_crianca` int(11) NOT NULL,
  `preco` decimal(18,4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `quarto`
--

INSERT INTO `quarto` (`id_quarto`, `nome`, `descricao`, `qtde_adulto`, `qtde_crianca`, `preco`) VALUES
(1, 'Quarto Luxuoso', 'Quarto grande com vista para o mar com suite, acomodando 3 a', 3, 1, '90.0000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `servicos`
--

CREATE TABLE `servicos` (
  `id_servico` int(11) NOT NULL,
  `titulo` varchar(15) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `icone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `checkin`
--
ALTER TABLE `checkin`
  ADD PRIMARY KEY (`id_checkin`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `foto_cliente`
--
ALTER TABLE `foto_cliente`
  ADD PRIMARY KEY (`id_foto_cliente`);

--
-- Índices de tabela `foto_quarto`
--
ALTER TABLE `foto_quarto`
  ADD PRIMARY KEY (`id_foto_quarto`);

--
-- Índices de tabela `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Índices de tabela `quarto`
--
ALTER TABLE `quarto`
  ADD PRIMARY KEY (`id_quarto`);

--
-- Índices de tabela `servicos`
--
ALTER TABLE `servicos`
  ADD PRIMARY KEY (`id_servico`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `checkin`
--
ALTER TABLE `checkin`
  MODIFY `id_checkin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `foto_cliente`
--
ALTER TABLE `foto_cliente`
  MODIFY `id_foto_cliente` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `foto_quarto`
--
ALTER TABLE `foto_quarto`
  MODIFY `id_foto_quarto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `quarto`
--
ALTER TABLE `quarto`
  MODIFY `id_quarto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servicos`
--
ALTER TABLE `servicos`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
