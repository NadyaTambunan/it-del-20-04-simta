/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 8.0.21 : Database - p04_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`p04_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `p04_db`;

/*Table structure for table `absent` */

DROP TABLE IF EXISTS `absent`;

CREATE TABLE `absent` (
  `absent_date` date NOT NULL,
  `id_sup` varchar(50) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `id_group` varchar(50) DEFAULT NULL,
  `topic` varchar(100) NOT NULL,
  KEY `id_sup` (`id_sup`),
  KEY `stud_name` (`stud_name`),
  KEY `id_group` (`id_group`),
  CONSTRAINT `absen_fk1` FOREIGN KEY (`id_sup`) REFERENCES `supervisor` (`id`),
  CONSTRAINT `absen_fk2` FOREIGN KEY (`stud_name`) REFERENCES `stud_prog` (`stud_name`),
  CONSTRAINT `absen_fk3` FOREIGN KEY (`id_group`) REFERENCES `group_` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `absent` */

/*Table structure for table `artifact` */

DROP TABLE IF EXISTS `artifact`;

CREATE TABLE `artifact` (
  `description` varchar(500) DEFAULT NULL,
  `sesion_name` varchar(50) NOT NULL,
  `status_` varchar(50) NOT NULL,
  `file_` longtext NOT NULL,
  KEY `sesion_name` (`sesion_name`),
  CONSTRAINT `artefak_fk2` FOREIGN KEY (`sesion_name`) REFERENCES `sesion` (`sesion_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `artifact` */

/*Table structure for table `coordinator` */

DROP TABLE IF EXISTS `coordinator`;

CREATE TABLE `coordinator` (
  `id` varchar(50) NOT NULL,
  `name_` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `coordinator` */

insert  into `coordinator`(`id`,`name_`,`email`,`pass`) values 
('coo_01','Mariana','mariana@del.ac.id','40100'),
('coo_02','Denis','denis@del.ac.id','33112'),
('coo_03','Surti','surti@del.ac.id','33333'),
('coo_04','Maria','maria@del.ac.id','33322'),
('coo_05','Felix','felix@del.ac.id','32454'),
('coo_06','Dita','dita@del.ac.id','99221'),
('coo_07','Bimo','bimo@del.ac.id','03045'),
('coo_08','Henry','henry@del.ac.id','00088');

/*Table structure for table `grade` */

DROP TABLE IF EXISTS `grade`;

CREATE TABLE `grade` (
  `komp_1` float(30,30) NOT NULL,
  `komp_2` float(30,30) NOT NULL,
  `komp_3` float(30,30) NOT NULL,
  `result` float(30,30) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `id_group` varchar(50) NOT NULL,
  `sesion_name` varchar(50) NOT NULL,
  KEY `stud_name` (`stud_name`),
  KEY `id_group` (`id_group`),
  KEY `sesion_name` (`sesion_name`),
  CONSTRAINT `nilai_fk1` FOREIGN KEY (`stud_name`) REFERENCES `stud_prog` (`stud_name`),
  CONSTRAINT `nilai_fk2` FOREIGN KEY (`id_group`) REFERENCES `group_` (`id_group`),
  CONSTRAINT `nilai_fk3` FOREIGN KEY (`sesion_name`) REFERENCES `sesion` (`sesion_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `grade` */

/*Table structure for table `group_` */

DROP TABLE IF EXISTS `group_`;

CREATE TABLE `group_` (
  `stud_name` varchar(50) NOT NULL,
  `id_group` varchar(100) NOT NULL,
  `YEAR` int NOT NULL,
  `nim_1` varchar(10) NOT NULL,
  `name_1` varchar(50) NOT NULL,
  `nim_2` varchar(10) DEFAULT NULL,
  `name_2` varchar(50) DEFAULT NULL,
  `nim_3` varchar(10) DEFAULT NULL,
  `name_3` varchar(50) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id_group`),
  KEY `student` (`nim_1`,`nim_2`,`nim_3`),
  KEY `stud_prog` (`stud_name`),
  KEY `kel_fk3` (`nim_2`),
  KEY `kel_fk4` (`nim_3`),
  CONSTRAINT `kel_fk1` FOREIGN KEY (`stud_name`) REFERENCES `stud_prog` (`stud_name`),
  CONSTRAINT `kel_fk2` FOREIGN KEY (`nim_1`) REFERENCES `student` (`nim`),
  CONSTRAINT `kel_fk3` FOREIGN KEY (`nim_2`) REFERENCES `student` (`nim`),
  CONSTRAINT `kel_fk4` FOREIGN KEY (`nim_3`) REFERENCES `student` (`nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `group_` */

insert  into `group_`(`stud_name`,`id_group`,`YEAR`,`nim_1`,`name_1`,`nim_2`,`name_2`,`nim_3`,`name_3`,`created_at`,`updated_at`) values 
('Informatika','ta2021-if-001',2018,'11S18001','Fardah','11S18002','Lucky','11S18003','Hendra','2020-12-07 11:58:04','2020-12-07 11:58:04');

/*Table structure for table `group_lecture` */

DROP TABLE IF EXISTS `group_lecture`;

CREATE TABLE `group_lecture` (
  `id` varchar(50) NOT NULL,
  `idsup_1` varchar(50) NOT NULL,
  `sup_name_1` varchar(50) NOT NULL,
  `idsup_2` varchar(50) DEFAULT NULL,
  `sup_name_2` varchar(50) DEFAULT NULL,
  `idtes_1` varchar(50) NOT NULL,
  `tes_name_1` varchar(50) NOT NULL,
  `idtes_2` varchar(50) DEFAULT NULL,
  `tes_name_2` varchar(50) DEFAULT NULL,
  `idtes_3` varchar(50) DEFAULT NULL,
  `tes_name_3` varchar(50) DEFAULT NULL,
  KEY `group_` (`id`),
  KEY `supervisor` (`idsup_1`,`idsup_2`),
  KEY `tester` (`idtes_1`,`idtes_2`,`idtes_3`),
  KEY `sche3` (`idsup_2`),
  KEY `sche5` (`idtes_2`),
  KEY `sche6` (`idtes_3`),
  CONSTRAINT `sche1` FOREIGN KEY (`id`) REFERENCES `group_` (`id_group`),
  CONSTRAINT `sche2` FOREIGN KEY (`idsup_1`) REFERENCES `supervisor` (`id`),
  CONSTRAINT `sche3` FOREIGN KEY (`idsup_2`) REFERENCES `supervisor` (`id`),
  CONSTRAINT `sche4` FOREIGN KEY (`idtes_1`) REFERENCES `tester` (`id`),
  CONSTRAINT `sche5` FOREIGN KEY (`idtes_2`) REFERENCES `tester` (`id`),
  CONSTRAINT `sche6` FOREIGN KEY (`idtes_3`) REFERENCES `tester` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `group_lecture` */

/*Table structure for table `group_schedule` */

DROP TABLE IF EXISTS `group_schedule`;

CREATE TABLE `group_schedule` (
  `id` varchar(50) NOT NULL,
  `pra_seminar` date NOT NULL,
  `seminar` date NOT NULL,
  `pra_sidang` date NOT NULL,
  `sidang` date NOT NULL,
  KEY `group_` (`id`),
  CONSTRAINT `gro_sche1` FOREIGN KEY (`id`) REFERENCES `group_` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `group_schedule` */

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

/*Table structure for table `report` */

DROP TABLE IF EXISTS `report`;

CREATE TABLE `report` (
  `description` varchar(500) DEFAULT NULL,
  `sesion_name` varchar(50) NOT NULL,
  `status_` varchar(50) NOT NULL,
  `file_` longtext NOT NULL,
  KEY `sesion_name` (`sesion_name`),
  CONSTRAINT `report_fk2` FOREIGN KEY (`sesion_name`) REFERENCES `sesion` (`sesion_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `report` */

/*Table structure for table `sesion` */

DROP TABLE IF EXISTS `sesion`;

CREATE TABLE `sesion` (
  `sesion_name` varchar(50) NOT NULL,
  PRIMARY KEY (`sesion_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `sesion` */

insert  into `sesion`(`sesion_name`) values 
('Pra-Sidang'),
('Pra_Seminar'),
('Seminar '),
('Sidang');

/*Table structure for table `stud_prog` */

DROP TABLE IF EXISTS `stud_prog`;

CREATE TABLE `stud_prog` (
  `stud_name` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  PRIMARY KEY (`stud_name`),
  KEY `coordinator` (`id`),
  CONSTRAINT `prod_fk1` FOREIGN KEY (`id`) REFERENCES `coordinator` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `stud_prog` */

insert  into `stud_prog`(`stud_name`,`id`) values 
('Sistem Informasi','coo_01'),
('Informatika','coo_02'),
('Teknik Elektro','coo_03'),
('Teknik Bioproses','coo_04'),
('Manajemen Rekayasa','coo_05'),
('D4 TRPL','coo_06'),
('D3 TI','coo_07'),
('D3 TK','coo_08');

/*Table structure for table `student` */

DROP TABLE IF EXISTS `student`;

CREATE TABLE `student` (
  `id` varchar(50) NOT NULL,
  `nim` varchar(50) NOT NULL,
  `name_` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  PRIMARY KEY (`nim`),
  KEY `stud_prog` (`stud_name`),
  CONSTRAINT `student_fk1` FOREIGN KEY (`stud_name`) REFERENCES `stud_prog` (`stud_name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `student` */

insert  into `student`(`id`,`nim`,`name_`,`email`,`pass`,`stud_name`) values 
('ifs17001','11S17001','Lisda','ifs17001@del.ac.id','467654','Informatika'),
('ifs17002','11S17002','Ramli','ifs17002@del.ac.id','44221','Informatika'),
('ifs18001','11S18001','Fardah','ifs18001@del.ac.id','32321','Informatika'),
('ifs18002','11S18002','Lucky','ifs18002@del.ac.id','22211','Informatika'),
('ifs18003','11S18003','Hendra','ifs18003@del.ac.id','33144','Informatika'),
('iss1701','12S17001','Hendery','iss17001','7428191','Sistem Informasi'),
('iss17002','12S17002','Yuni','iss17002@del.ac.id','748234','Sistem Informasi'),
('iss001','12S18001','Cindy','iss1801@del.ac.id','33224','Sistem Informasi'),
('iss18002','12S18002','Dania','iss18002','440213','Sistem Informasi'),
('iss18003','12S18003','Fikri','iss18003@del.ac.id','49299','Sistem Informasi');

/*Table structure for table `supervisor` */

DROP TABLE IF EXISTS `supervisor`;

CREATE TABLE `supervisor` (
  `id` varchar(50) NOT NULL,
  `name_` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `supervisor` */

insert  into `supervisor`(`id`,`name_`,`email`,`pass`) values 
('sup_01','Diana','diana@del.ac.id','9921'),
('sup_02','Helena','helena@del.ac.id','3214'),
('sup_03','Firman','firman@del.ac.id','4020'),
('sup_04','Salomo','salomo@del.ac.id','8823'),
('sup_05','Rut','rut@del.ac.id','1144'),
('sup_06','Tiana','tiana@del.ac.id','9311'),
('sup_07','Rian','rian@del.ac.id','4429'),
('sup_08','Johnny','johnny@del.ac.id','4033'),
('sup_09','Mark','mark@del.ac.id','4219'),
('sup_10','Lucas','lucas@del.ac.id','3020');

/*Table structure for table `tester` */

DROP TABLE IF EXISTS `tester`;

CREATE TABLE `tester` (
  `id` varchar(50) NOT NULL,
  `name_` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `tester` */

insert  into `tester`(`id`,`name_`,`email`,`pass`) values 
('tes_01','Lina','lina@del.ac.id','88833'),
('tes_02','Tina','tina@del.ac.id','30402'),
('tes_03','Damar','damar@del.ac.id','33322'),
('tes_04','Dimas','dimas@del.ac.id','32100'),
('tes_05','Lia','lia@del.ac.id','00321'),
('tes_06','Vivi','vivi@del.ac.id','40102'),
('tes_07','Sule','sule@del.ac.id','00323'),
('tes_08','Gina','gina@del.ac.id','88332');

/*Table structure for table `topic` */

DROP TABLE IF EXISTS `topic`;

CREATE TABLE `topic` (
  `tittle` varchar(50) NOT NULL,
  `id` varchar(50) NOT NULL,
  KEY `group_` (`id`),
  CONSTRAINT `topik_fk1` FOREIGN KEY (`id`) REFERENCES `group_` (`id_group`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `topic` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`username`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Nadya','nadya@gmail.com','iss18011','2020-12-10 19:32:55','nadya','123','2020-12-10 19:33:03','2020-12-10 19:33:05'),
(2,'Yohanes','yohanes@gmail.com','iss18026','2020-12-10 19:35:03','yohanes','456','2020-12-10 19:35:16','2020-12-10 19:35:19'),
(3,'Angelina','angelina@gmail.com','iss18035','2020-12-10 19:35:45','naomi','789','2020-12-10 19:35:54','2020-12-10 19:35:57'),
(4,'Naomi ','naomi@gmail.com','iss18038','2020-12-10 19:36:38','naomi','321','2020-12-10 19:36:52','2020-12-10 19:36:54'),
(5,'Erika','erika@gmail.com','iss18054','2020-12-10 19:37:29','erika','654','2020-12-10 19:37:39','2020-12-10 19:37:41');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
