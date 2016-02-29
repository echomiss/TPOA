# MySQL-Front 5.1  (Build 3.62)

/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE */;
/*!40101 SET SQL_MODE='STRICT_TRANS_TABLES,NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES */;
/*!40103 SET SQL_NOTES='ON' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS */;
/*!40014 SET FOREIGN_KEY_CHECKS=0 */;


# Host: localhost    Database: tpoa
# ------------------------------------------------------
# Server version 5.5.27-log

#
# Source for table tp_admin
#

DROP TABLE IF EXISTS `tp_admin`;
CREATE TABLE `tp_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_admin
#
LOCK TABLES `tp_admin` WRITE;
/*!40000 ALTER TABLE `tp_admin` DISABLE KEYS */;

INSERT INTO `tp_admin` VALUES (1,'admin','21232f297a57a5a743894a0e4a801fc3');
/*!40000 ALTER TABLE `tp_admin` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tp_attendance
#

DROP TABLE IF EXISTS `tp_attendance`;
CREATE TABLE `tp_attendance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stuname` varchar(20) NOT NULL,
  `subject` int(11) NOT NULL,
  `addtime` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_attendance
#
LOCK TABLES `tp_attendance` WRITE;
/*!40000 ALTER TABLE `tp_attendance` DISABLE KEYS */;

/*!40000 ALTER TABLE `tp_attendance` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tp_info
#

DROP TABLE IF EXISTS `tp_info`;
CREATE TABLE `tp_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(40) NOT NULL,
  `filepath` varchar(255) DEFAULT NULL,
  `content` text,
  `addtime` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_info
#
LOCK TABLES `tp_info` WRITE;
/*!40000 ALTER TABLE `tp_info` DISABLE KEYS */;

INSERT INTO `tp_info` VALUES (1,'图片上传','2016-01-06/568c6e938e4fe.jpg','&lt;p&gt;阿斯顿&lt;/p&gt;\r\n',1452043923);
/*!40000 ALTER TABLE `tp_info` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tp_student
#

DROP TABLE IF EXISTS `tp_student`;
CREATE TABLE `tp_student` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `name` varchar(20) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `age` int(11) NOT NULL,
  `tel` varchar(11) NOT NULL,
  `address` varchar(255) NOT NULL,
  `addtime` int(11) NOT NULL,
  `remark` varchar(255) NOT NULL,
  `classname` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_student
#
LOCK TABLES `tp_student` WRITE;
/*!40000 ALTER TABLE `tp_student` DISABLE KEYS */;

/*!40000 ALTER TABLE `tp_student` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tp_subject
#

DROP TABLE IF EXISTS `tp_subject`;
CREATE TABLE `tp_subject` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `classname` varchar(30) NOT NULL,
  `room` varchar(15) NOT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `studentnum` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_subject
#
LOCK TABLES `tp_subject` WRITE;
/*!40000 ALTER TABLE `tp_subject` DISABLE KEYS */;

/*!40000 ALTER TABLE `tp_subject` ENABLE KEYS */;
UNLOCK TABLES;

#
# Source for table tp_survey
#

DROP TABLE IF EXISTS `tp_survey`;
CREATE TABLE `tp_survey` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '1',
  `level` int(11) NOT NULL DEFAULT '1',
  `content` text,
  `classname` int(11) NOT NULL DEFAULT '0',
  `addtime` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1039 DEFAULT CHARSET=utf8;

#
# Dumping data for table tp_survey
#
LOCK TABLES `tp_survey` WRITE;
/*!40000 ALTER TABLE `tp_survey` DISABLE KEYS */;

/*!40000 ALTER TABLE `tp_survey` ENABLE KEYS */;
UNLOCK TABLES;

/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
