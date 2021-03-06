/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 5.7.34-cll-lve : Database - fundapro_data
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`fundapro_data` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `fundapro_data`;

/*Table structure for table `contacts` */

DROP TABLE IF EXISTS `contacts`;

CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `contacts` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `failed_jobs` */

/*Table structure for table `indices` */

DROP TABLE IF EXISTS `indices`;

CREATE TABLE `indices` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '900.576.263',
  `Cel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '3153982992',
  `Mision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Vision` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Principios` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Correo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Facebook` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Instagram` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Linkedin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Youtube` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Twitter` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `indices` */

insert  into `indices`(`id`,`Nit`,`Cel`,`Mision`,`Vision`,`Principios`,`Correo`,`Facebook`,`Instagram`,`Linkedin`,`Youtube`,`Twitter`,`created_at`,`updated_at`) values 
(1,'900.576.263','3153982992','Somos una Fundaci??n que promueve espacios de participaci??n ciudadana que propendan por la defensa y ejercicio de los derechos humanos desde una perspectiva integral, encaminados a la soluci??n de problemas sociales, ejerciendo control ciudadano, articulando esfuerzos a trav??s de alianzas p??blico-privadas, apoyo de ONG nacionales e internacionales, ejecuci??n de proyectos sociales, programas de formaci??n, capacitaci??n y formaci??n del capital humano, que permitan el mejoramiento de la calidad de vida de personas en condici??n vulnerable y v??ctimas del conflicto. Trabajamos por una sociedad justa y mejor, con un equipo humano competente, proactivo, comprometido, solidario y transparente.','La Fundaci??n Protecci??n Colombia de los Derechos Humanos Fudaprocol DDHH en el 2025 ser?? una entidad reconocida por sus logros a nivel local, regional y nacional por la promoci??n, defensa y ejercicio de los derechos humanos a favor de comunidad tolimense en el marco de la Constituci??n y la ley, a trav??s de programas de formaci??n y la ejecuci??n proyectos de inter??s social, p??blicos, mixtos y privados, encaminados a la soluci??n de problemas locales, departamentales, regionales, nacionales, contribuyendo al mejoramiento de la calidad de vida de las poblaciones vulnerables, personas en condici??n de discapacidad y v??ctimas del conflicto.','La Fundaci??n Protecci??n Colombia De Los Derechos Humanos Fudaprocol DDHH nace en el a??o 2012, con representaci??n legal de Luis Gonzalo Duarte Var??n, entidad sin ??nimo de lucro, ubicada en Ibagu??, con el objeto de promover la creaci??n de espacios de participaci??n civil, organizar, promover y mantener espacios de desarrollo y capacitaci??n social que propendan por la defensa y ejercicio de los derechos humanos de las comunidades colombianas y del departamento del Tolima dentro del marco de la Constituci??n y las leyes colombianas, ejercer, promover y defender los derechos humanos, educar, capacitar y formar a sus integrantes y a los ciudadanos en general. Investigar y asesorar para la realizaci??n de programas y proyectos de inter??s social, p??blicos, mixtos y privados, encaminados a la soluci??n de problemas locales, departamentales, regionales, nacionales e internacionales. Promocionar y crear entes cuyas actividades y recursos contribuyan al desarrollo del objeto social de la fundaci??n. Ejercer control ciudadano, comunitario y voluntario sobre las actividades o funciones de los servidores p??blicos y privados que ejerzan funciones p??blicas. Ejercer, promover y defender los derechos colectivos y del medio ambiente. Ejercer y fomentar espacios para el ejercicio de los mecanismos de defensa de los derechos humanos. Trabajar en pro de los grupos vulnerables de la sociedad. Presentar sugerencias y recomendaciones a entidades gubernamentales para el mejoramiento de los fines estatales. Organizar, promover y mantener programas de desarrollo, capacitaci??n econ??mico, pol??tico, ambiental, cultural. Vigilar, controlar, auditar, defender los bienes y negocios, los intereses estatales, la gesti??n p??blica, el erario en orden internacional, nacional, departamental, local y la empresa privada que ejerza funciones p??blicas. Obtener recursos provenientes de distintas fuentes, incluido los derivados de la cooperaci??n internacional, para ser destinados a la financiaci??n de actividades que constituyen el objeto de la Fundaci??n. Comercializar toda clase de bienes y servicios para satisfacer el objeto social. Suministrar insumos para sectores productivos, sociales, ambientales de infraestructura. Presentar iniciativas al gobierno nacional, departamental y local. Desarrollar actividades art??sticas y culturares, participar en el fortalecimiento de espacios art??sticos, culturales, en programas de formaci??n art??stica y cultural. Circulaci??n art??stica a escala nacional, regional, fortalecimiento cultura a contextos y poblaciones espec??ficas incluyendo a las personas con discapacidad, ofrecer programas y servicios de apoyo y gesti??n que permitan el mejoramiento de las condiciones de vida de las v??ctimas del conflicto armado en Colombia, seg??n lo establecido en la ley. Lograr la reinserci??n de los desplazados a sus lugares de origen, previa garant??a por parte del estado en la protecci??n de sus derechos fundamentales. Adquisiciones de tierras para que desarrollen todas sus actividades de su profesi??n u oficio a su cultura. Propender por el conocimiento, la gesti??n, la recuperaci??n, y la conservaci??n del medio ambiente mediante la aplicaci??n de acciones encaminadas al logro de un desarrollo sostenible, humano, local. Ser garantes y gestores de los procesos que se desarrollen en el marco del posconflicto, paz negociada, firma de tratados y afines. Encaminar recursos que aporta el Estado, las ONG y entidades internacionales para mejorar el estilo de vida de la poblaci??n v??ctima del conflicto humano, en cumplimiento de la defensa de los derechos humanos fundamentales enmarcados en la Constituci??n y el Derecho internacional humanitario, as?? como los tratados internacionales. La compra, venta, difusi??n, importaci??n, exportaci??n, distribuci??n, representaci??n de productos fonogr??ficos, video-gr??ficos, audiovisuales, sonoros, escritos y afines o cualquier otra forma de medios digitales o tecnolog??a.','fundacionproteccioncolombiad@yahoo.com','','','','','',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `patrocinadores` */

DROP TABLE IF EXISTS `patrocinadores`;

CREATE TABLE `patrocinadores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Imagen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `patrocinadores` */

insert  into `patrocinadores`(`id`,`Nombre`,`url`,`Telefono`,`Direccion`,`Imagen`,`Estado`,`created_at`,`updated_at`) values 
(1,'Smart And Computer','https://smartandcomputer.co','3185572439','Ibague','https://smartandcomputer.co/img/apple-touch-icon.png','1',NULL,NULL),
(2,'Tu Hamburguesa','https://tuhamburguesa.co','3184019742','Ibague','https://tuhamburguesa.co/assets/img/slide/portada-1.jpg','1',NULL,NULL),
(3,'Universidad Cooperativa De Colombia','https://www.ucc.edu.co','13123123','Ibague','https://www.ucc.edu.co/institucion/PublishingImages/Paginas/historia/logo-UCC-Universidad-cooperativa-de-colombia.jpg','1',NULL,NULL);

/*Table structure for table `staff` */

DROP TABLE IF EXISTS `staff`;

CREATE TABLE `staff` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Apellidos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Cargo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telefono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Estado` char(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `staff` */

insert  into `staff`(`id`,`Nombres`,`Apellidos`,`Cargo`,`Telefono`,`Foto`,`Estado`,`created_at`,`updated_at`) values 
(1,'dsfaf','asdfasdf','asfasd','asfasf','','1',NULL,NULL),
(2,'Luis','Prueba','Auxiliar','31231231','','1',NULL,NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
