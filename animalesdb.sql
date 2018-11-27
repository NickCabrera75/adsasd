# Host: localhost:33065  (Version 5.5.5-10.1.36-MariaDB)
# Date: 2018-11-26 22:37:52
# Generator: MySQL-Front 6.1  (Build 1.26)


#
# Structure for table "centromascotas"
#

DROP TABLE IF EXISTS `centromascotas`;
CREATE TABLE `centromascotas` (
  `IdCentro` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Departamento` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Descripcion` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`IdCentro`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "centromascotas"
#


#
# Structure for table "mascotas"
#

DROP TABLE IF EXISTS `mascotas`;
CREATE TABLE `mascotas` (
  `IdMascotas` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Edad` tinyint(3) NOT NULL DEFAULT '0',
  `Description` varchar(140) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Raza` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Color` varchar(15) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `Tamano` tinyint(3) NOT NULL DEFAULT '0',
  `Pedigree` bit(1) DEFAULT NULL,
  `Estado` tinyint(3) NOT NULL DEFAULT '0',
  `Imagen` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  `IdCuenta` int(11) DEFAULT NULL,
  `idCentroMascotas` int(11) DEFAULT NULL,
  `Tipo` tinyint(3) NOT NULL DEFAULT '0',
  `Sexo` bit(1) DEFAULT NULL,
  PRIMARY KEY (`IdMascotas`),
  KEY `IdCuenta` (`IdCuenta`),
  KEY `idCentroMascotas` (`idCentroMascotas`),
  CONSTRAINT `mascotas_ibfk_2` FOREIGN KEY (`idCentroMascotas`) REFERENCES `centromascotas` (`IdCentro`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "mascotas"
#

INSERT INTO `mascotas` VALUES (1,'Laila',2,'perrito','indefinido','indefinido',0,b'0',0,'images/adoptar/Laila.jpeg',NULL,NULL,1,NULL),(2,'Barbara',1,'gato atigrado','indefinido','plomo',0,b'1',0,'images/adoptar/Barbara.jpeg',NULL,NULL,0,NULL),(3,'Lalo',3,'es muy jugueton y le gustan las croquetas dogshau','golden terrier','rubio',0,b'1',0,'images/adoptar/Lalo.jpeg',27,NULL,1,NULL),(4,'Beto',5,'perro travieso le gusta mucho nadar','golden terrier','blanco',0,b'0',1,'images/adoptar/Beto.jpeg',NULL,NULL,1,NULL),(5,'Mila',6,'ella es muy callada en el dia pero en la noche ladra mucho','indefinido','negro',0,b'0',0,'images/adoptar/Mila.jpeg',NULL,NULL,1,NULL);

#
# Structure for table "usuarios"
#

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(60) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `PrimerApellido` varchar(30) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `SegundoApellido` varchar(30) COLLATE latin1_spanish_ci DEFAULT NULL,
  `Email` varchar(70) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `login` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `password` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  `tipo` varchar(45) COLLATE latin1_spanish_ci NOT NULL DEFAULT '1',
  `Imagen` varchar(255) COLLATE latin1_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "usuarios"
#

INSERT INTO `usuarios` VALUES (1,'Fernanda','Fernandez','Gomez','Fernanda@gmail.com','Fernanda','c39c312bd5c05f538f86b20befa9a3ef','1','images/usuarios/Fernanda.jpg'),(3,'','',NULL,'','error','cb5e100e5a9a3e7f6d1fd97512215282','',NULL),(4,'Victor','Sullcani','Mendoza','vikus@email.com','vhugosm','9a0bb434854088f62f84805592b0c469','1',NULL),(5,'Nick','Cabrera','Bergas','nicke@gmail.com','nike','41fd220f05ed0d8c56e3b83af87d45d7','1',NULL),(27,'Rene','Perez','','rene@email.com','rene','93de1a7f9a00f8823ac377738b66236b','1',NULL);

#
# Structure for table "tarjeta"
#

DROP TABLE IF EXISTS `tarjeta`;
CREATE TABLE `tarjeta` (
  `IdTareta` int(11) NOT NULL AUTO_INCREMENT,
  `Numero` smallint(1) NOT NULL DEFAULT '0',
  `Codigo` smallint(3) NOT NULL DEFAULT '0',
  `FechaVencimiento` date NOT NULL DEFAULT '0000-00-00',
  `IdCuenta` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdTareta`),
  KEY `IdCuenta` (`IdCuenta`),
  CONSTRAINT `tarjeta_ibfk_1` FOREIGN KEY (`IdCuenta`) REFERENCES `usuarios` (`idusuarios`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "tarjeta"
#


#
# Structure for table "publicacion"
#

DROP TABLE IF EXISTS `publicacion`;
CREATE TABLE `publicacion` (
  `IdPublicacion` int(11) NOT NULL AUTO_INCREMENT,
  `Fecha` date NOT NULL DEFAULT '0000-00-00',
  `Comentarios` int(11) NOT NULL DEFAULT '0',
  `IdCuenta` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`IdPublicacion`),
  KEY `IdCuenta` (`IdCuenta`),
  CONSTRAINT `publicacion_ibfk_1` FOREIGN KEY (`IdCuenta`) REFERENCES `usuarios` (`idusuarios`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "publicacion"
#


#
# Structure for table "comentario"
#

DROP TABLE IF EXISTS `comentario`;
CREATE TABLE `comentario` (
  `IdCuenta` int(11) NOT NULL AUTO_INCREMENT,
  `IdPublicacion` int(11) NOT NULL DEFAULT '0',
  `Comentario` varchar(255) COLLATE latin1_spanish_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`IdCuenta`,`IdPublicacion`),
  KEY `IdPublicacion` (`IdPublicacion`),
  CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`IdCuenta`) REFERENCES `usuarios` (`idusuarios`) ON UPDATE CASCADE,
  CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`IdPublicacion`) REFERENCES `publicacion` (`IdPublicacion`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

#
# Data for table "comentario"
#

