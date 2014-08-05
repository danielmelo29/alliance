-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (i686)
--
-- Host: localhost    Database: db_alliance
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.13.10.2

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
-- Table structure for table `TB_BOTOES`
--

DROP TABLE IF EXISTS `TB_BOTOES`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_BOTOES` (
  `ID_BOTAO` int(11) NOT NULL AUTO_INCREMENT,
  `NOME_BOTAO` varchar(30) NOT NULL,
  `ESTADO_BOTAO` tinyint(4) NOT NULL DEFAULT '0',
  `CADASTRO_BOTAO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_BOTAO`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_BOTOES`
--

LOCK TABLES `TB_BOTOES` WRITE;
/*!40000 ALTER TABLE `TB_BOTOES` DISABLE KEYS */;
INSERT INTO `TB_BOTOES` VALUES (1,'COZINHA',0,'0000-00-00 00:00:00'),(2,'QUARTO',0,'0000-00-00 00:00:00'),(3,'QUARTO2',0,'0000-00-00 00:00:00'),(4,'ROOM',0,'0000-00-00 00:00:00'),(5,'SALA2',0,'0000-00-00 00:00:00'),(6,'TESTE2',0,'0000-00-00 00:00:00'),(7,'TESTE3',0,'0000-00-00 00:00:00'),(8,'TESTE4',0,'0000-00-00 00:00:00');
/*!40000 ALTER TABLE `TB_BOTOES` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_CFTV`
--

DROP TABLE IF EXISTS `TB_CFTV`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_CFTV` (
  `id_cftv` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(20) NOT NULL,
  `link` varchar(45) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `teste3` int(11) DEFAULT NULL,
  `teste2` int(11) DEFAULT NULL,
  `teste1` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_cftv`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_CFTV`
--

LOCK TABLES `TB_CFTV` WRITE;
/*!40000 ALTER TABLE `TB_CFTV` DISABLE KEYS */;
INSERT INTO `TB_CFTV` VALUES (1,'Primeiro teste','edflexwave.no-ip.biz:8080','2014-05-03 05:31:27',NULL,NULL,NULL);
/*!40000 ALTER TABLE `TB_CFTV` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `TB_USER_AUTOMACAO`
--

DROP TABLE IF EXISTS `TB_USER_AUTOMACAO`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `TB_USER_AUTOMACAO` (
  `ID_USER` int(11) NOT NULL AUTO_INCREMENT,
  `NOME` varchar(25) NOT NULL,
  `LOGIN` varchar(25) NOT NULL,
  `SENHA` varchar(35) NOT NULL,
  `DATA_CADASTRO` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`ID_USER`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `TB_USER_AUTOMACAO`
--

LOCK TABLES `TB_USER_AUTOMACAO` WRITE;
/*!40000 ALTER TABLE `TB_USER_AUTOMACAO` DISABLE KEYS */;
INSERT INTO `TB_USER_AUTOMACAO` VALUES (1,'DANIEL MELO','DANIEL','123','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `TB_USER_AUTOMACAO` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `agenda_manutencao`
--

DROP TABLE IF EXISTS `agenda_manutencao`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `agenda_manutencao` (
  `idagenda_manutencao` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(60) NOT NULL,
  `data` date NOT NULL,
  `hora` time DEFAULT NULL,
  `fornecedor` int(11) DEFAULT NULL,
  `descricao` text,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idagenda_manutencao`),
  KEY `fk_agenda_manutencao_usuarios1_idx` (`usuarios`),
  CONSTRAINT `fk_agenda_manutencao_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `agenda_manutencao`
--

LOCK TABLES `agenda_manutencao` WRITE;
/*!40000 ALTER TABLE `agenda_manutencao` DISABLE KEYS */;
/*!40000 ALTER TABLE `agenda_manutencao` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `areas`
--

DROP TABLE IF EXISTS `areas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `areas` (
  `idareas` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(40) NOT NULL,
  `situacao` enum('L','I') NOT NULL COMMENT 'L - Liberado\nI - Indisponivel',
  `obs` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`idareas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `areas`
--

LOCK TABLES `areas` WRITE;
/*!40000 ALTER TABLE `areas` DISABLE KEYS */;
/*!40000 ALTER TABLE `areas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `avisos`
--

DROP TABLE IF EXISTS `avisos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `avisos` (
  `idavisos` int(11) NOT NULL AUTO_INCREMENT,
  `aviso` varchar(200) NOT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idavisos`),
  KEY `fk_avisos_usuarios1_idx` (`usuarios`),
  CONSTRAINT `fk_avisos_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `avisos`
--

LOCK TABLES `avisos` WRITE;
/*!40000 ALTER TABLE `avisos` DISABLE KEYS */;
/*!40000 ALTER TABLE `avisos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ci_sessions`
--

DROP TABLE IF EXISTS `ci_sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` text NOT NULL,
  PRIMARY KEY (`session_id`),
  KEY `last_activity_idx` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ci_sessions`
--

LOCK TABLES `ci_sessions` WRITE;
/*!40000 ALTER TABLE `ci_sessions` DISABLE KEYS */;
INSERT INTO `ci_sessions` VALUES ('06387ac16d5a7bbb48c4fa7af3a86fc2','127.0.0.1','Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:28.0) Gecko/20100101 Firefox/28.0',1399099494,'');
/*!40000 ALTER TABLE `ci_sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `convidados`
--

DROP TABLE IF EXISTS `convidados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `convidados` (
  `idconvidados` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cpf` int(11) DEFAULT NULL,
  `rg` int(11) DEFAULT NULL,
  `reservas` int(11) NOT NULL,
  PRIMARY KEY (`idconvidados`),
  KEY `fk_convidados_reservas1_idx` (`reservas`),
  CONSTRAINT `fk_convidados_reservas1` FOREIGN KEY (`reservas`) REFERENCES `reservas` (`idreservas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `convidados`
--

LOCK TABLES `convidados` WRITE;
/*!40000 ALTER TABLE `convidados` DISABLE KEYS */;
/*!40000 ALTER TABLE `convidados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dias_trabalho`
--

DROP TABLE IF EXISTS `dias_trabalho`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dias_trabalho` (
  `iddias_trabalho` int(11) NOT NULL AUTO_INCREMENT,
  `domingo` enum('S','N') DEFAULT NULL,
  `segunda` enum('S','N') DEFAULT NULL,
  `terca` enum('S','N') DEFAULT NULL,
  `quarta` enum('S','N') DEFAULT NULL,
  `quinta` enum('S','N') DEFAULT NULL,
  `sexta` enum('S','N') DEFAULT NULL,
  `sabado` enum('S','N') DEFAULT NULL,
  `funcionarios` int(11) NOT NULL,
  PRIMARY KEY (`iddias_trabalho`),
  KEY `fk_dias_trabalho_funcionarios1_idx` (`funcionarios`),
  CONSTRAINT `fk_dias_trabalho_funcionarios1` FOREIGN KEY (`funcionarios`) REFERENCES `funcionarios` (`idfuncionarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dias_trabalho`
--

LOCK TABLES `dias_trabalho` WRITE;
/*!40000 ALTER TABLE `dias_trabalho` DISABLE KEYS */;
/*!40000 ALTER TABLE `dias_trabalho` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `documentos`
--

DROP TABLE IF EXISTS `documentos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `documentos` (
  `iddocumentos` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  `documento` varchar(100) NOT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`iddocumentos`),
  KEY `fk_documentos_usuarios2_idx` (`usuarios`),
  CONSTRAINT `fk_documentos_usuarios2` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `documentos`
--

LOCK TABLES `documentos` WRITE;
/*!40000 ALTER TABLE `documentos` DISABLE KEYS */;
/*!40000 ALTER TABLE `documentos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `erros`
--

DROP TABLE IF EXISTS `erros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `erros` (
  `iderros` int(11) NOT NULL AUTO_INCREMENT,
  `erro` text NOT NULL,
  PRIMARY KEY (`iderros`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `erros`
--

LOCK TABLES `erros` WRITE;
/*!40000 ALTER TABLE `erros` DISABLE KEYS */;
/*!40000 ALTER TABLE `erros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `financeiro`
--

DROP TABLE IF EXISTS `financeiro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `financeiro` (
  `iddespesas` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(45) NOT NULL,
  `data` datetime NOT NULL,
  `valor` float NOT NULL,
  `tipo` enum('R','D') DEFAULT NULL COMMENT 'R - Receitas\nD - Despesas',
  PRIMARY KEY (`iddespesas`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `financeiro`
--

LOCK TABLES `financeiro` WRITE;
/*!40000 ALTER TABLE `financeiro` DISABLE KEYS */;
/*!40000 ALTER TABLE `financeiro` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fornecedores`
--

DROP TABLE IF EXISTS `fornecedores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fornecedores` (
  `idfornecedores` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `cnpj` bigint(20) DEFAULT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `responsavel` varchar(60) NOT NULL,
  `site` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`idfornecedores`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fornecedores`
--

LOCK TABLES `fornecedores` WRITE;
/*!40000 ALTER TABLE `fornecedores` DISABLE KEYS */;
/*!40000 ALTER TABLE `fornecedores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `funcionarios`
--

DROP TABLE IF EXISTS `funcionarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `funcionarios` (
  `idfuncionarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `cargo` varchar(60) NOT NULL,
  `h_inicio` time NOT NULL,
  `h_fim` time NOT NULL,
  PRIMARY KEY (`idfuncionarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `funcionarios`
--

LOCK TABLES `funcionarios` WRITE;
/*!40000 ALTER TABLE `funcionarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `funcionarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `horarios`
--

DROP TABLE IF EXISTS `horarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `horarios` (
  `idhorarios` int(11) NOT NULL AUTO_INCREMENT,
  `hora_inicio` time NOT NULL,
  `hora_fim` time NOT NULL,
  `idareas` int(11) NOT NULL,
  PRIMARY KEY (`idhorarios`),
  KEY `fk_horarios_areas1_idx` (`idareas`),
  CONSTRAINT `fk_horarios_areas1` FOREIGN KEY (`idareas`) REFERENCES `areas` (`idareas`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `horarios`
--

LOCK TABLES `horarios` WRITE;
/*!40000 ALTER TABLE `horarios` DISABLE KEYS */;
/*!40000 ALTER TABLE `horarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ocorrencias`
--

DROP TABLE IF EXISTS `ocorrencias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ocorrencias` (
  `idocorrencias` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(45) NOT NULL,
  `tipo` enum('M','O') NOT NULL,
  `descricacao` text NOT NULL,
  `status` enum('N','A','F') NOT NULL COMMENT 'N - Novo\nA - Lido e em análise\nF - Finalizado',
  `data` datetime DEFAULT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idocorrencias`),
  KEY `fk_ocorrencias_usuarios2_idx` (`usuarios`),
  CONSTRAINT `fk_ocorrencias_usuarios2` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ocorrencias`
--

LOCK TABLES `ocorrencias` WRITE;
/*!40000 ALTER TABLE `ocorrencias` DISABLE KEYS */;
/*!40000 ALTER TABLE `ocorrencias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservas`
--

DROP TABLE IF EXISTS `reservas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservas` (
  `idreservas` int(11) NOT NULL AUTO_INCREMENT,
  `dt_inicio` datetime NOT NULL,
  `dt_fim` datetime NOT NULL,
  `valor` float DEFAULT NULL,
  `status` enum('E','C') NOT NULL COMMENT 'E - Esperando confirmação do sindico\nC - Confirmado',
  `obs` text,
  `areas` int(11) NOT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idreservas`),
  KEY `fk_reservas_areas1_idx` (`areas`),
  KEY `fk_reservas_usuarios1_idx` (`usuarios`),
  CONSTRAINT `fk_reservas_areas1` FOREIGN KEY (`areas`) REFERENCES `areas` (`idareas`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_reservas_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservas`
--

LOCK TABLES `reservas` WRITE;
/*!40000 ALTER TABLE `reservas` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `residencia`
--

DROP TABLE IF EXISTS `residencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `residencia` (
  `idresidencia` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) DEFAULT NULL,
  `tipo` enum('A','C') DEFAULT NULL COMMENT 'A - Apartamento\nC - Casa',
  `bloco` varchar(10) DEFAULT NULL,
  `status` enum('O','D') DEFAULT NULL COMMENT 'O - Ocupado\nD - Desocupado',
  `situacao` enum('P','A') DEFAULT NULL COMMENT 'P - próprio\nA - Alugado',
  `tipo_residencia` int(11) NOT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idresidencia`),
  KEY `fk_residencia_tipo_residencia1_idx` (`tipo_residencia`),
  KEY `fk_residencia_usuarios2_idx` (`usuarios`),
  CONSTRAINT `fk_residencia_tipo_residencia1` FOREIGN KEY (`tipo_residencia`) REFERENCES `tipo_residencia` (`idtipo_residencia`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_residencia_usuarios2` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `residencia`
--

LOCK TABLES `residencia` WRITE;
/*!40000 ALTER TABLE `residencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `residencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone`
--

DROP TABLE IF EXISTS `telefone`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone` (
  `idtelefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `tipo` enum('C','R','CO') NOT NULL,
  `usuarios` int(11) NOT NULL,
  PRIMARY KEY (`idtelefone`),
  KEY `fk_telefone_usuarios1_idx` (`usuarios`),
  CONSTRAINT `fk_telefone_usuarios1` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`idusuarios`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone`
--

LOCK TABLES `telefone` WRITE;
/*!40000 ALTER TABLE `telefone` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefone` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `telefone_fornecedor`
--

DROP TABLE IF EXISTS `telefone_fornecedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `telefone_fornecedor` (
  `idtelefone` int(11) NOT NULL AUTO_INCREMENT,
  `numero` int(11) NOT NULL,
  `tipo` enum('C','R','CO') NOT NULL,
  `fornecedores` int(11) NOT NULL,
  PRIMARY KEY (`idtelefone`),
  KEY `fk_telefone_fornecedor_fornecedores1_idx` (`fornecedores`),
  CONSTRAINT `fk_telefone_fornecedor_fornecedores1` FOREIGN KEY (`fornecedores`) REFERENCES `fornecedores` (`idfornecedores`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `telefone_fornecedor`
--

LOCK TABLES `telefone_fornecedor` WRITE;
/*!40000 ALTER TABLE `telefone_fornecedor` DISABLE KEYS */;
/*!40000 ALTER TABLE `telefone_fornecedor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipo_residencia`
--

DROP TABLE IF EXISTS `tipo_residencia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipo_residencia` (
  `idtipo_residencia` int(11) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(45) NOT NULL,
  PRIMARY KEY (`idtipo_residencia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipo_residencia`
--

LOCK TABLES `tipo_residencia` WRITE;
/*!40000 ALTER TABLE `tipo_residencia` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipo_residencia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) NOT NULL,
  `senha` char(32) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(30) DEFAULT 'default.png',
  `cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `tipo` enum('A','M') NOT NULL COMMENT 'M - Morador\nA - Alugado',
  `ativo` tinyint(4) NOT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (137,'daniel','123123','daniel.melo255@live.com','default.png','2014-04-30 19:07:47','A',1),(139,'naty','123123','naty@foo.bar','default.png','2014-04-30 19:29:06','A',1);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-05-04 11:27:18
