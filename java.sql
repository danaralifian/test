/*
SQLyog Community v9.63 --
MySQL - 5.5.30 : Database - java_akdmk_018
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`java_akdmk_018` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `java_akdmk_018`;

/*Table structure for table `t_mahasiswa` */

DROP TABLE IF EXISTS `t_mahasiswa`;

CREATE TABLE `t_mahasiswa` (
  `Nim` varchar(8) NOT NULL,
  `Nama` varchar(20) DEFAULT NULL,
  `ttl` varchar(8) DEFAULT NULL,
  `tglLahir` date DEFAULT NULL,
  `alamat` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`Nim`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_mahasiswa` */

insert  into `t_mahasiswa`(`Nim`,`Nama`,`ttl`,`tglLahir`,`alamat`) values ('10105119','Angga Setiyadi','Bandung','1988-10-30','Jl. Sekeloa 20'),('10105120','Hendra Herlambang','Bandung','1988-05-21','Jl. Tubagus Ismail NO 5'),('10105121','Ratu Husna','Bandung','1988-03-20','Jl. Cimandiri 15');

/*Table structure for table `t_mata_kuliah` */

DROP TABLE IF EXISTS `t_mata_kuliah`;

CREATE TABLE `t_mata_kuliah` (
  `kode_mk` varchar(20) NOT NULL,
  `nama_mk` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`kode_mk`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_mata_kuliah` */

insert  into `t_mata_kuliah`(`kode_mk`,`nama_mk`) values ('IF20001','Pemrogran Dasar'),('IF34348','Pemrogran Lanjut'),('IF37325P','Komputer Grafik'),('IF99191','Algoritm');

/*Table structure for table `t_nilai` */

DROP TABLE IF EXISTS `t_nilai`;

CREATE TABLE `t_nilai` (
  `kdNilai` int(11) NOT NULL,
  `nim` varchar(8) DEFAULT NULL,
  `kd_mk` varchar(8) DEFAULT NULL,
  `nilai` double DEFAULT NULL,
  `index` char(1) DEFAULT NULL,
  `ket` varchar(11) DEFAULT NULL,
  PRIMARY KEY (`kdNilai`),
  KEY `nim` (`nim`),
  KEY `kd_mk` (`kd_mk`),
  CONSTRAINT `t_nilai_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `t_mahasiswa` (`Nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `t_nilai_ibfk_2` FOREIGN KEY (`kd_mk`) REFERENCES `t_mata_kuliah` (`kode_mk`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `t_nilai` */

insert  into `t_nilai`(`kdNilai`,`nim`,`kd_mk`,`nilai`,`index`,`ket`) values (3,'10105119','IF34348',90,'A','Lulus');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
