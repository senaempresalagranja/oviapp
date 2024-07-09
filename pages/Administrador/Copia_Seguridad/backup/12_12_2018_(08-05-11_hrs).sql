SET FOREIGN_KEY_CHECKS=0;

CREATE DATABASE IF NOT EXISTS oviapp;

USE oviapp;

DROP TABLE IF EXISTS animal;

CREATE TABLE `animal` (
  `id_Animal` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_Animal` varchar(50) NOT NULL,
  `sex_Animal` varchar(50) NOT NULL,
  `ori_Animal` varchar(50) NOT NULL,
  `cod_Animal` varchar(20) NOT NULL,
  `fec_Nacimiento` varchar(50) NOT NULL,
  `num_Partos` varchar(10) NOT NULL,
  `nom_Raza` varchar(20) NOT NULL,
  `ind_Prenez` varchar(2) NOT NULL,
  `pes_Actual` varchar(4) NOT NULL,
  PRIMARY KEY (`id_Animal`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

INSERT INTO animal VALUES("1","veronica","macho","interno","5555","","1","cruces","s","");
INSERT INTO animal VALUES("15","pacho","hembra","interno","6418","00-00-0000","500","cruces","s","");
INSERT INTO animal VALUES("16","PACHO CHU","HEMBRA","INTERNO","3","2018-11-04","55","CRECES","S","100");
INSERT INTO animal VALUES("17","PACHECO","MACHO","INTERNO","1209","2018-11-22","1","KATAHDIN","S","");
INSERT INTO animal VALUES("20","HAM","MACHO","EXTERNO","991122","2018-12-03","0","PELIBUEY","NO","12");



DROP TABLE IF EXISTS celos;

CREATE TABLE `celos` (
  `id_Celo` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Animal` bigint(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `fec_Inicio` date NOT NULL,
  `fec_Final` date NOT NULL,
  `observaciones` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Celo`),
  KEY `id_Animal` (`id_Animal`),
  KEY `id_Persona` (`id_Persona`),
  CONSTRAINT `celos_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  CONSTRAINT `celos_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=latin1;

INSERT INTO celos VALUES("34","1","9","2018-12-12","2018-12-21","Nada");



DROP TABLE IF EXISTS ecografias;

CREATE TABLE `ecografias` (
  `id_Ecografia` bigint(20) NOT NULL AUTO_INCREMENT,
  `fec_Ecografia` date NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `id_Animal` bigint(20) NOT NULL,
  `res_Ecografia` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Ecografia`),
  KEY `id_Persona` (`id_Persona`,`id_Animal`),
  KEY `id_Monta` (`id_Animal`),
  CONSTRAINT `ecografias_ibfk_1` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`),
  CONSTRAINT `ecografias_ibfk_2` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO ecografias VALUES("1","2018-11-27","8","15","IKIKIKK");
INSERT INTO ecografias VALUES("2","2018-11-14","7","15","WERTYU");
INSERT INTO ecografias VALUES("3","2018-11-12","8","16","RTYUIO");



DROP TABLE IF EXISTS montas;

CREATE TABLE `montas` (
  `id_Monta` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Persona` bigint(20) NOT NULL,
  `fec_Monta` date NOT NULL,
  `fec_Posible_Parto` date NOT NULL,
  `id_AnimalMadre` bigint(20) NOT NULL,
  `id_AnimalPadre` bigint(20) NOT NULL,
  `observacion` varchar(100) NOT NULL,
  PRIMARY KEY (`id_Monta`),
  KEY `id_AnimalMadre` (`id_AnimalMadre`,`id_AnimalPadre`),
  KEY `id_AnimalPadre` (`id_AnimalPadre`),
  KEY `id_Persona` (`id_Persona`),
  CONSTRAINT `montas_ibfk_1` FOREIGN KEY (`id_AnimalMadre`) REFERENCES `animal` (`id_Animal`),
  CONSTRAINT `montas_ibfk_2` FOREIGN KEY (`id_AnimalPadre`) REFERENCES `animal` (`id_Animal`),
  CONSTRAINT `montas_ibfk_3` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;




DROP TABLE IF EXISTS partos;

CREATE TABLE `partos` (
  `id_Parto` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Animal` bigint(30) NOT NULL,
  `fec_Parto` date NOT NULL,
  `num_AnimalParido` double NOT NULL,
  `num_AnimalVivo` double NOT NULL,
  `num_AnimalMuerto` double NOT NULL,
  `num_AnimalMacho` double NOT NULL,
  `num_AnimalHembra` double NOT NULL,
  `fec_Destete` date NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  PRIMARY KEY (`id_Parto`),
  KEY `id_Persona` (`id_Persona`),
  KEY `id_Animal` (`id_Animal`),
  CONSTRAINT `partos_ibfk_1` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`),
  CONSTRAINT `partos_ibfk_2` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO partos VALUES("7","15","2018-11-27","1","2","3","4","5","2018-11-01","7");
INSERT INTO partos VALUES("8","15","2018-11-08","6","453","46","4","4","2018-11-27","8");
INSERT INTO partos VALUES("9","16","2018-11-27","1","1","1","1","1","2018-11-27","10");
INSERT INTO partos VALUES("10","16","2018-12-16","1","1","1","1","2","2018-12-12","7");



DROP TABLE IF EXISTS personas;

CREATE TABLE `personas` (
  `id_Persona` bigint(20) NOT NULL AUTO_INCREMENT,
  `nom_Persona` varchar(20) NOT NULL,
  `tel_Persona` varchar(20) NOT NULL,
  `cor_Persona` varchar(20) NOT NULL,
  `tip_Persona` varchar(20) NOT NULL,
  PRIMARY KEY (`id_Persona`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO personas VALUES("7","JUAN JOSE","3125484194","AAAAAAAAAAA.COOM","APRENDIZ");
INSERT INTO personas VALUES("8","KEVIN VILLAREAL","3125484194","KEVINVILLAREAL84@GMA","EXTERNO");
INSERT INTO personas VALUES("9","ANDREY GRANDA","1111111111","44444444444DDDDDDDD","APRENDIZ");
INSERT INTO personas VALUES("10","JOSE JAIR PACHECO","312548415","KEVUINFUIUDFS@F.COM","INSTRUCTOR");



DROP TABLE IF EXISTS pesajes;

CREATE TABLE `pesajes` (
  `id_Pesaje` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_Animal` bigint(20) NOT NULL,
  `id_Persona` bigint(20) NOT NULL,
  `pes_Kg_Animal` double NOT NULL,
  `observacion` varchar(20) NOT NULL,
  `fec_Peso` date NOT NULL,
  `gan_Peso` double NOT NULL,
  PRIMARY KEY (`id_Pesaje`),
  KEY `id_Ovino` (`id_Animal`),
  KEY `id_Persona` (`id_Persona`),
  CONSTRAINT `pesajes_ibfk_1` FOREIGN KEY (`id_Animal`) REFERENCES `animal` (`id_Animal`),
  CONSTRAINT `pesajes_ibfk_2` FOREIGN KEY (`id_Persona`) REFERENCES `personas` (`id_Persona`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO pesajes VALUES("3","20","8","5","22","2018-12-04","5");



DROP TABLE IF EXISTS usuarios;

CREATE TABLE `usuarios` (
  `id_Usuario` bigint(20) NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `nombre_Usuario` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `usuario` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `contrasena` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  PRIMARY KEY (`id_Usuario`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

INSERT INTO usuarios VALUES("1","ADMINISTRADOR","Instructor","admin","9adcb29710e807607b683f62e555c22dc5659713");



SET FOREIGN_KEY_CHECKS=1;