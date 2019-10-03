CREATE DATABASE  IF NOT EXISTS `reteste` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `reteste`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: reteste
-- ------------------------------------------------------
-- Server version	5.5.5-10.1.30-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cliente`
--

DROP TABLE IF EXISTS `cliente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cliente` (
  `protocolo` int(11) NOT NULL AUTO_INCREMENT,
  `ccto` varchar(45) DEFAULT NULL,
  `cliente` varchar(80) DEFAULT NULL,
  `id_tec` varchar(45) DEFAULT NULL,
  `nome_tec` varchar(80) DEFAULT NULL,
  `data_rep` date DEFAULT NULL,
  `data_final` date DEFAULT NULL,
  `data_ult_ret` date DEFAULT NULL,
  `id_ga` int(11) DEFAULT NULL,
  `nome_ga` varchar(80) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `ga`
--

DROP TABLE IF EXISTS `ga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ga` (
  `id` int(11) NOT NULL,
  `protocolo` int(11) DEFAULT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `protocolo` (`protocolo`),
  CONSTRAINT `protocolo` FOREIGN KEY (`protocolo`) REFERENCES `cliente` (`protocolo`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `reteste`
--

DROP TABLE IF EXISTS `reteste`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reteste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `protocolo` int(11) NOT NULL,
  `data_ret` date DEFAULT NULL,
  `contato` varchar(80) DEFAULT NULL,
  `descricao` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_reteste_cliente_idx` (`protocolo`),
  CONSTRAINT `fk_reteste_cliente` FOREIGN KEY (`protocolo`) REFERENCES `cliente` (`protocolo`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(80) DEFAULT NULL,
  `login` varchar(45) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  `id_ga` varchar(45) DEFAULT NULL,
  `nome_ga` varchar(80) DEFAULT NULL,
  `acesso` varchar(45) DEFAULT NULL,
  `area` varchar(45) DEFAULT NULL,
  `uf` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-10-03 12:59:10
