-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Out-2018 às 14:55
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spaceappsdebug`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tabfornecedor`
--

CREATE TABLE `tabfornecedor` (
  `cod_forn` int(11) NOT NULL,
  `nome_forn` varchar(60) NOT NULL,
  `end_forn` varchar(100) NOT NULL,
  `cidade_forn` varchar(90) NOT NULL,
  `estado_forn` varchar(90) NOT NULL,
  `telefone_forn` varchar(90) NOT NULL,
  `cep_forn` varchar(9) NOT NULL,
  `esp_ins_forn` varchar(100) NOT NULL,
  `esp_ins_forn2` varchar(100) DEFAULT NULL,
  `esp_ins_forn3` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tabfornecedor`
--

INSERT INTO `tabfornecedor` (`cod_forn`, `nome_forn`, `end_forn`, `cidade_forn`, `estado_forn`, `telefone_forn`, `cep_forn`, `esp_ins_forn`, `esp_ins_forn2`, `esp_ins_forn3`) VALUES
(1, 'Haniel Nunes Pereira Pinheiro', 'rua maria eugenia celso, 99, Ap 52-B', 'São Paulo', 'São Paulo', '1127292153', '03568050', 'aegys', 'adassd', 'adsdasad'),
(2, 'Maria de Lourdes dos Santos Pereira', 'Rua Maria Eugênia Celso, 99, Ap-52B', 'Osasco', 'São Paulo', '1127292153', '03568050', 'Minhoca', 'asd', 'adasd'),
(3, '', '', '', '', '', '', '', '', ''),
(4, 'Maria de Lourdes dos Santos Pereira', 'Rua Maria Eugênia Celso, 99, Ap-52B', 'Osasco2', 'São Paulo2', '1127292153', '03568050', 'asda', 'sada', 'asd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabfornecedor`
--
ALTER TABLE `tabfornecedor`
  ADD PRIMARY KEY (`cod_forn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabfornecedor`
--
ALTER TABLE `tabfornecedor`
  MODIFY `cod_forn` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
