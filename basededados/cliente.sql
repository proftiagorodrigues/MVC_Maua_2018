-- phpMyAdmin SQL Dump
-- version 5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 2018 
-- PHP Version: 7.0
-- Autor: Prof. Tiago Rodrigues

--
-- Table structure for table `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) NOT NULL,
  `cpf` char(14) NOT NULL,
  `rg` varchar(15) NOT NULL,
  `dt_nascimento` date NOT NULL,
  `endereco` varchar(150) NOT NULL,
  `sexo` char(1) NOT NULL COMMENT 'F=Feminino M=Masculino',
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `cpf`, `rg`, `dt_nascimento`, `endereco`, `sexo`) VALUES
(1, 'João da Silva', '123.456.789-12', '123.456.8', '1980-04-01', 'Quadra 1 Conjunto 15 Casa 10', 'M');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
