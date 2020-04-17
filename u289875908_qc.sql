use willypete
-- MySQL dump 10.16  Distrib 10.2.16-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: u289875908_qc
-- ------------------------------------------------------
-- Server version	10.2.16-MariaDB

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
-- Table structure for table `categoria`
--

DROP TABLE IF EXISTS `categoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_mcategoria` int(11) NOT NULL,
  `cat_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categoria`
--

/*!40000 ALTER TABLE `categoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `categoria` ENABLE KEYS */;

--
-- Table structure for table `compra`
--

DROP TABLE IF EXISTS `compra`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `compra` (
  `com_id` int(11) NOT NULL AUTO_INCREMENT,
  `com_usuario` int(11) NOT NULL,
  `com_categoria` int(11) NOT NULL,
  `com_nome` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `com_descricao` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `com_preco` double NOT NULL,
  `com_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `compra`
--

/*!40000 ALTER TABLE `compra` DISABLE KEYS */;
/*!40000 ALTER TABLE `compra` ENABLE KEYS */;

--
-- Table structure for table `mcatecogira`
--

DROP TABLE IF EXISTS `mcatecogira`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mcatecogira` (
  `mca_id` int(11) NOT NULL,
  `mca_scategoria` int(11) NOT NULL,
  `mca_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mcatecogira`
--

/*!40000 ALTER TABLE `mcatecogira` DISABLE KEYS */;
/*!40000 ALTER TABLE `mcatecogira` ENABLE KEYS */;

--
-- Table structure for table `propostas`
--

DROP TABLE IF EXISTS `propostas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `propostas` (
  `pro_id` int(11) NOT NULL,
  `pro_compra` int(11) NOT NULL,
  `pro_usuario` int(11) NOT NULL,
  `pro_preco` double NOT NULL,
  `pro_descricao` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`pro_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propostas`
--

/*!40000 ALTER TABLE `propostas` DISABLE KEYS */;
/*!40000 ALTER TABLE `propostas` ENABLE KEYS */;

--
-- Table structure for table `scategoria`
--

DROP TABLE IF EXISTS `scategoria`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `scategoria` (
  `sca_id` int(11) NOT NULL,
  `sca_nome` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sca_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `scategoria`
--

/*!40000 ALTER TABLE `scategoria` DISABLE KEYS */;
/*!40000 ALTER TABLE `scategoria` ENABLE KEYS */;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuario` (
  `usu_id` int(11) NOT NULL AUTO_INCREMENT,
  `usu_login` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usu_senha` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usu_nome` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `usu_email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `usu_tel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usu_cel` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usu_foto` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usu_sobre` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `usu_aprovacao` int(11) DEFAULT NULL,
  `usu_hash` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  `usu_rechash` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`usu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (1,'perses','teste','Perses De Vilhena','perses@persesvilhena.ddns.net',NULL,NULL,NULL,NULL,1,NULL,NULL);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

--
-- Dumping routines for database 'u289875908_qc'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-09-08 19:29:55
