-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/08/2024 às 05:19
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
-- Banco de dados: `clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `atendimentos`
--

CREATE TABLE `atendimentos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `atendimentos`
--

INSERT INTO `atendimentos` (`id`, `nome`) VALUES
(1, 'Consulta'),
(3, 'Retorno');

-- --------------------------------------------------------

--
-- Estrutura para tabela `consultas`
--

CREATE TABLE `consultas` (
  `id` int(11) NOT NULL,
  `medico_id` int(11) NOT NULL,
  `convenio_id` int(11) NOT NULL,
  `paciente_id` int(11) NOT NULL,
  `atendimento_id` int(11) NOT NULL,
  `data_consulta` datetime DEFAULT NULL,
  `status` varchar(10) DEFAULT 'marcada'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `consultas`
--

INSERT INTO `consultas` (`id`, `medico_id`, `convenio_id`, `paciente_id`, `atendimento_id`, `data_consulta`, `status`) VALUES
(1, 7, 3, 5, 3, '2032-09-17 13:30:00', 'marcada'),
(2, 5, 2, 5, 3, '2024-08-15 00:00:00', 'marcada'),
(13, 5, 1, 4, 1, '2010-10-10 00:00:00', 'desmarcado'),
(15, 6, 2, 5, 3, NULL, 'marcada'),
(16, 4, 3, 5, 3, '2002-12-12 00:00:00', 'marcada'),
(17, 6, 2, 5, 1, '2024-12-12 00:00:00', 'marcada'),
(18, 3, 2, 4, 3, '2024-12-12 00:00:00', 'marcada'),
(19, 3, 1, 4, 1, '2232-02-12 00:00:00', 'desmarcado'),
(21, 3, 3, 5, 1, '2022-05-14 00:00:00', 'marcada'),
(22, 3, 1, 4, 1, '1980-10-30 00:00:00', 'marcada'),
(23, 3, 1, 4, 1, '0000-00-00 00:00:00', 'marcada'),
(24, 3, 1, 4, 1, '1980-02-12 10:40:00', 'marcada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `convenios`
--

CREATE TABLE `convenios` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `convenios`
--

INSERT INTO `convenios` (`id`, `nome`) VALUES
(1, 'Amil'),
(2, 'Gold'),
(3, 'Quality');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `crm` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `crm`) VALUES
(3, 'pedrin do 085', 'dasdasdsa-df'),
(4, 'Kaiozin', 'dsadsadsa-df'),
(5, 'jorginho', '897978-df'),
(6, 'douglinhas auto som', '999897-df'),
(7, 'sarrei', '123123123-df');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `data_nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `data_nascimento`) VALUES
(4, 'Kaiozin', '2002-02-12'),
(5, 'Tulio 47', '1940-03-16'),
(6, 'Sergio Junior', '1994-01-17');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `consultas`
--
ALTER TABLE `consultas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `medico_id` (`medico_id`),
  ADD KEY `convenio_id` (`convenio_id`),
  ADD KEY `paciente_id` (`paciente_id`),
  ADD KEY `atendimento_id` (`atendimento_id`);

--
-- Índices de tabela `convenios`
--
ALTER TABLE `convenios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `atendimentos`
--
ALTER TABLE `atendimentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `consultas`
--
ALTER TABLE `consultas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de tabela `convenios`
--
ALTER TABLE `convenios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `consultas`
--
ALTER TABLE `consultas`
  ADD CONSTRAINT `consultas_ibfk_1` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`id`),
  ADD CONSTRAINT `consultas_ibfk_2` FOREIGN KEY (`convenio_id`) REFERENCES `convenios` (`id`),
  ADD CONSTRAINT `consultas_ibfk_3` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  ADD CONSTRAINT `consultas_ibfk_4` FOREIGN KEY (`atendimento_id`) REFERENCES `atendimentos` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
