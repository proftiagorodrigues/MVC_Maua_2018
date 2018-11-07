-- phpMyAdmin SQL Dump
-- version 5.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 2018 
-- PHP Version: 7.0
-- Autor: Prof. Tiago Rodrigues

-- Database: `bd-mvc`

-- Table structure for table `perfil`
CREATE TABLE IF NOT EXISTS `perfil` (
  `id_perfil` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_perfil`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- Table structure for table `usuario`
CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(90) DEFAULT NULL,
  `login` varchar(45) NOT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `id_perfil` int(11) NOT NULL,
  `dt_cadastro` DATE NOT NULL,
  PRIMARY KEY (`id_usuario`),
  FOREIGN KEY (`id_perfil`) REFERENCES  `bd-mvc`.`perfil` (`id_perfil`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- INSERTS
INSERT INTO  `bd-mvc`.`perfil` (`id_perfil` ,`nome`) 
	VALUES (NULL ,  'Administrador'), (NULL ,  'Usuario');

INSERT INTO `bd-mvc`.`usuario` (`id_usuario`, `nome`, `login`, `senha`, `id_perfil`, `dt_cadastro`) 
	VALUES (NULL, 'Administrador do Sistema', 'admin', '202cb962ac59075b964b07152d234b70', '1', '2018-06-20');
