-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 15-Out-2024 às 00:12
-- Versão do servidor: 8.3.0
-- versão do PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_arrecadacao`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `alimentos`
--

DROP TABLE IF EXISTS `alimentos`;
CREATE TABLE IF NOT EXISTS `alimentos` (
  `id_alimento` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `quantidade_estoque` int NOT NULL,
  `data_validade` date DEFAULT NULL,
  PRIMARY KEY (`id_alimento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doacoes`
--

DROP TABLE IF EXISTS `doacoes`;
CREATE TABLE IF NOT EXISTS `doacoes` (
  `id_doacao` int NOT NULL AUTO_INCREMENT,
  `id_doador` int DEFAULT NULL,
  `id_alimento` int DEFAULT NULL,
  `unidade` int NOT NULL,
  `data_doacao` date NOT NULL,
  PRIMARY KEY (`id_doacao`),
  KEY `id_doador` (`id_doador`),
  KEY `id_alimento` (`id_alimento`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `doadores`
--

DROP TABLE IF EXISTS `doadores`;
CREATE TABLE IF NOT EXISTS `doadores` (
  `id_doador` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `cpf` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`id_doador`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
