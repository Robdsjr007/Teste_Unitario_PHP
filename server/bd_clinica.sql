-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 26/10/2023 às 16:15
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_clinica`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Agendamento`
--

CREATE TABLE `Agendamento` (
  `numeroAgendamento` int(255) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(8) NOT NULL,
  `gravidade` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Agendamento`
--

INSERT INTO `Agendamento` (`numeroAgendamento`, `data`, `hora`, `gravidade`) VALUES
(1, '21-09-2023', '15', 'Perca de memória constante'),
(2, '31-10-2021', '12', 'Disfunção erétil'),
(3, '22-07-2023', '10', 'Inflamação na Apêndice'),
(4, '09-11-2022', '20', 'Hipertensão'),
(5, '07-09-2023', '00', 'Costela fraturada');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Consulta`
--

CREATE TABLE `Consulta` (
  `numeroConsulta` int(100) NOT NULL,
  `data` varchar(10) NOT NULL,
  `hora` varchar(8) NOT NULL,
  `agendamento` varchar(18) NOT NULL,
  `medico` varchar(24) NOT NULL,
  `paciente` varchar(24) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Consulta`
--

INSERT INTO `Consulta` (`numeroConsulta`, `data`, `hora`, `agendamento`, `medico`, `paciente`) VALUES
(1, '03-04-2023', '15', '17-06-2023', 'Isabella Nunes', 'Robson Junior'),
(2, '03-05-2022', '18', '12-10-2022', 'Ryan Felix', 'Daniel Alves'),
(3, '04-02-2020', '10', '12-08-2020', 'João Pedro', 'Carla Dantas'),
(4, '09-03-2021', '14', '13-03-2021', 'Kaio Montenegro', 'Nicolas Neves'),
(5, '06-06-2022', '12', '08-06-2022', 'Giovani Leal', 'Jamila Andrade');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Especialidade`
--

CREATE TABLE `Especialidade` (
  `numeroRegistro` int(255) NOT NULL,
  `nome` text NOT NULL,
  `publicoAlvo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Especialidade`
--

INSERT INTO `Especialidade` (`numeroRegistro`, `nome`, `publicoAlvo`) VALUES
(1, 'Rogério Carvalho', 'Pediatria'),
(2, 'Paulo Cesar', 'Clínico'),
(3, 'Robson Junior', 'Clínico'),
(4, 'Isabella Nunes', 'Pediatria'),
(5, 'Luis Carlos ', 'Pediatria');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Medico`
--

CREATE TABLE `Medico` (
  `CRM` varchar(10) NOT NULL,
  `nome` text NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(256) NOT NULL,
  `especialidade` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Medico`
--

INSERT INTO `Medico` (`CRM`, `nome`, `telefone`, `endereco`, `especialidade`) VALUES
('1', 'Carlos Maia', '(!1)93939-083', 'Rua Barrão Barroso do amazonas, 52', 'Ortopedia'),
('2', 'Kaique Rodrigues', '(11)973343-765', 'Rua vila paulistinha, 21', 'Urologista'),
('3', 'Laís Pereira', '(11)987462-645', 'Rua vila lobos, 32', 'Oftalmologista'),
('4', 'Inácio Gonçalves', '(!1)987463-432', 'Av Carlos almeida, 95', 'otorrinolaringologia'),
('5', 'Jorge Amado', '(!1)935643-234', 'Av Kubitschek, 732', 'Psicanalista');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Paciente`
--

CREATE TABLE `Paciente` (
  `numeroBeneficiario` int(255) NOT NULL,
  `nome` text NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `endereco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Paciente`
--

INSERT INTO `Paciente` (`numeroBeneficiario`, `nome`, `telefone`, `endereco`) VALUES
(1, 'Paulo Henrique', '(11)916216-545', 'Rua Heliópolis, 63'),
(2, 'Rafael Lucilio', '(11)91995-2548', 'Rua Paulo Freire, 43'),
(3, 'Daniel Alves', '(11)975345-423', 'Rua Manoel Chaves, 23'),
(4, 'Ryan Silva Felix', '(11)947374-543', 'Rua Inácio Nunes, 34'),
(5, 'Robson Alexandre', '(1!)963422-234', 'Rua Pedro Maia, 343');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `Agendamento`
--
ALTER TABLE `Agendamento`
  ADD PRIMARY KEY (`numeroAgendamento`);

--
-- Índices de tabela `Consulta`
--
ALTER TABLE `Consulta`
  ADD PRIMARY KEY (`numeroConsulta`);

--
-- Índices de tabela `Especialidade`
--
ALTER TABLE `Especialidade`
  ADD PRIMARY KEY (`numeroRegistro`);

--
-- Índices de tabela `Medico`
--
ALTER TABLE `Medico`
  ADD PRIMARY KEY (`CRM`);

--
-- Índices de tabela `Paciente`
--
ALTER TABLE `Paciente`
  ADD PRIMARY KEY (`numeroBeneficiario`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `Consulta`
--
ALTER TABLE `Consulta`
  MODIFY `numeroConsulta` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
