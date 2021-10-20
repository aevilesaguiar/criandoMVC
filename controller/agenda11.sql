-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para projeto_final
CREATE DATABASE IF NOT EXISTS `projeto_final` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `projeto_final`;

-- Copiando estrutura para tabela projeto_final.formacaoacademica
CREATE TABLE IF NOT EXISTS `formacaoacademica` (
  `idformacaoacademica` int(11) NOT NULL AUTO_INCREMENT,
  `idusuario` int(11) NOT NULL DEFAULT 0,
  `inicio` date NOT NULL,
  `fim` date NOT NULL,
  `descricao` varchar(150) NOT NULL,
  PRIMARY KEY (`idformacaoacademica`),
  KEY `FK_formacaoacademica_usuario` (`idusuario`),
  CONSTRAINT `FK_formacaoacademica_usuario` FOREIGN KEY (`idusuario`) REFERENCES `usuario` (`idusuario`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela projeto_final.formacaoacademica: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `formacaoacademica` DISABLE KEYS */;
/*!40000 ALTER TABLE `formacaoacademica` ENABLE KEYS */;

-- Copiando estrutura para tabela projeto_final.usuario
CREATE TABLE IF NOT EXISTS `usuario` (
  `idusuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) DEFAULT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `dataNasc` date DEFAULT NULL,
  `email` varchar(150) DEFAULT NULL,
  `senha` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idusuario`),
  UNIQUE KEY `cpf` (`cpf`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela projeto_final.usuario: ~1 rows (aproximadamente)
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` (`idusuario`, `nome`, `cpf`, `dataNasc`, `email`, `senha`) VALUES
	(1, 'Thiago', '333.333.333', '2016-10-19', 'teste@teste.com', '123456');
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
