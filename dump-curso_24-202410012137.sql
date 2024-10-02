-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_24
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.16-MariaDB-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Pessoa`
--

DROP TABLE IF EXISTS `Pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pessoa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `data_alteracao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `nome` varchar(500) NOT NULL,
  `sobrenome` varchar(500) NOT NULL,
  `nome_sobrenome` varchar(1000) NOT NULL,
  `sexo` enum('M','F','Outros') NOT NULL DEFAULT 'M',
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `cnpj` varchar(14) NOT NULL,
  `tipo_pessoa` enum('Juridica','Fisica') NOT NULL DEFAULT 'Fisica',
  `estado_civil` enum('Solteiro','Casado','Divorciado','Viuvo','Juntado') NOT NULL DEFAULT 'Solteiro',
  `data_aniversario` date NOT NULL,
  `usuario_alteracao` varchar(1000) NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Pessoa_Usuario_FK` (`id_usuario`),
  CONSTRAINT `Pessoa_Usuario_FK` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pessoa`
--

LOCK TABLES `Pessoa` WRITE;
/*!40000 ALTER TABLE `Pessoa` DISABLE KEYS */;
INSERT INTO `Pessoa` VALUES (1,'2024-10-01 20:46:13','0001-01-01 00:00:00','0001-01-01 00:00:00',0,'numeral','larumen','numeral laremun','M','numeral@gmail.com','12345678910','0','Fisica','Solteiro','2001-01-01','gabriel',1),(2,'2024-10-01 20:47:48','0001-01-01 00:00:00','0001-01-01 00:00:00',0,'aoContrario','oirartnoCoa','aoContrario oirartnoCoa','F','aoContrario@gmail.com','10987654321','0','Fisica','Viuvo','2002-01-01','gabriel',2),(3,'2024-10-01 20:52:13','0001-01-01 00:00:00','0001-01-01 00:00:00',0,'distorcido','odicrotsid','distorcido odicrotsid','Outros','distorcido@gmail.com','01123654789','0','Fisica','Juntado','2003-01-01','gabriel',3);
/*!40000 ALTER TABLE `Pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00',
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'12345678910','numeral@gmail.com','1234','2024-09-24 20:44:25','0001-01-01 00:00:00',0),(2,'10987654321','aoContrario@gmail.com','1234','2024-10-01 20:43:50','0001-01-01 00:00:00',0),(3,'01123654789','distorcido@gmail.com','1234','2024-10-01 20:50:38','0001-01-01 00:00:00',0);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `endereco`
--

DROP TABLE IF EXISTS `endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rua` varchar(512) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero_residencial` varchar(9) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(512) NOT NULL,
  `estado` varchar(512) NOT NULL,
  `id_pessoa` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `endereco_Pessoa_FK` (`id_pessoa`),
  CONSTRAINT `endereco_Pessoa_FK` FOREIGN KEY (`id_pessoa`) REFERENCES `Pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `endereco`
--

LOCK TABLES `endereco` WRITE;
/*!40000 ALTER TABLE `endereco` DISABLE KEYS */;
INSERT INTO `endereco` VALUES (1,'raimundo carvalho','fátima','1164','95702-430','casa azul','Bento Gonçalves','RS',1),(2,'são paulo','borgo','123','95702-000','sala comercial','Bento Gonçalves','RS',2),(3,'osvaldo aranha','juventude','13','95702-001','prédio beje','Bento Gonçalves','RS',3);
/*!40000 ALTER TABLE `endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_24'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-01 21:37:46
