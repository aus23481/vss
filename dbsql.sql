/*
SQLyog Ultimate v9.20 
MySQL - 5.6.20 : Database - vss
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`vss` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `vss`;

/*Table structure for table `booking` */

DROP TABLE IF EXISTS `booking`;

CREATE TABLE `booking` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) NOT NULL,
  `arrival_date` datetime NOT NULL,
  `departure_date` datetime NOT NULL,
  `price_from` int(11) NOT NULL,
  `price_to` int(11) NOT NULL,
  `guest_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_booking` (`user_id`),
  CONSTRAINT `FK_booking` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `booking` */

insert  into `booking`(`id`,`user_id`,`arrival_date`,`departure_date`,`price_from`,`price_to`,`guest_info`,`room_info`,`options`,`remember_token`,`created_at`,`updated_at`) values (5,10,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 17:33:24','2017-05-01 17:33:24'),(6,10,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 17:51:21','2017-05-01 17:51:21'),(7,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 17:51:53','2017-05-01 17:51:53'),(8,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:21:03','2017-05-01 18:21:03'),(9,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:22:18','2017-05-01 18:22:18'),(10,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:22:59','2017-05-01 18:22:59'),(11,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:24:52','2017-05-01 18:24:52'),(12,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:25:39','2017-05-01 18:25:39'),(13,11,'2017-05-01 00:00:00','2017-06-01 00:00:00',2010,6030,'3','4','8,3',NULL,'2017-05-01 18:28:21','2017-05-01 18:28:21'),(14,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','7,5',NULL,'2017-05-02 04:17:29','2017-05-02 04:17:29'),(15,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','7,5',NULL,'2017-05-02 04:18:06','2017-05-02 04:18:06'),(16,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','',NULL,'2017-05-02 04:18:43','2017-05-02 04:18:43'),(17,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','',NULL,'2017-05-02 04:19:15','2017-05-02 04:19:15'),(18,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','15,9,7',NULL,'2017-05-02 05:11:34','2017-05-02 05:11:34'),(19,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','15,9,7',NULL,'2017-05-02 05:12:27','2017-05-02 05:12:27'),(20,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','15,9,7',NULL,'2017-05-02 05:13:38','2017-05-02 05:13:38'),(21,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','15,9,7',NULL,'2017-05-02 05:15:09','2017-05-02 05:15:09'),(22,12,'2017-05-02 05:26:07','2017-05-02 05:26:07',1000,2000,'dfdfdf1493702767','room_info1493702767','dfd1493702767',NULL,'2017-05-02 05:26:07','2017-05-02 05:26:07'),(23,10,'2017-05-02 00:00:00','2017-06-02 00:00:00',2010,6030,'3','4','15,9,7',NULL,'2017-05-02 05:28:25','2017-05-02 05:28:25'),(24,13,'2017-05-03 00:00:00','2017-06-30 00:00:00',2010,6030,'4','3','',NULL,'2017-05-03 01:57:31','2017-05-03 01:57:31'),(25,13,'2017-05-03 00:00:00','2017-06-30 00:00:00',2010,6030,'4','3','2,6,15',NULL,'2017-05-03 01:58:27','2017-05-03 01:58:27'),(26,10,'2017-05-03 00:00:00','2017-06-03 00:00:00',2010,6030,'3','3','2,11,13,14,7,8,9',NULL,'2017-05-03 16:30:09','2017-05-03 16:30:09'),(27,10,'2017-05-03 00:00:00','2017-06-03 00:00:00',2010,6030,'3','3','2,11,13,14,7,8,9',NULL,'2017-05-03 16:33:59','2017-05-03 16:33:59'),(28,14,'2017-05-05 00:00:00','2017-06-05 00:00:00',4560,6030,'3','6','7,9,4',NULL,'2017-05-03 16:48:46','2017-05-03 16:48:46'),(29,10,'2017-05-05 00:00:00','2017-06-05 00:00:00',4470,6540,'5','4','1,3,11,13',NULL,'2017-05-03 17:05:39','2017-05-03 17:05:39'),(30,10,'2017-05-04 00:00:00','2017-06-08 00:00:00',2010,6030,'1','4','4,3',NULL,'2017-05-04 15:42:33','2017-05-04 15:42:33');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_04_30_155918_create_booking_table',1);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `NewIndex1` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`password`,`phone`,`remember_token`,`created_at`,`updated_at`) values (10,'Abbas Uddin Sheikh','aus234@yahoo.com','202cb962ac59075b964b07152d234b70','1111111111111111122ff',NULL,'2017-05-01 17:33:24','2017-05-01 17:33:24'),(11,'Abbas dfUddin Sheikh','aus234dd@yahoo.com','202cb962ac59075b964b07152d234b70','1111111111111111122ff',NULL,'2017-05-01 17:51:53','2017-05-01 17:51:53'),(12,'test1493702767','test221493702767@test.com','202cb962ac59075b964b07152d234b70','1493702767',NULL,'2017-05-02 05:26:07','2017-05-02 05:26:07'),(13,'Abbas','aus234@gmail.com','202cb962ac59075b964b07152d234b70','222222222222222',NULL,'2017-05-03 01:57:31','2017-05-03 01:57:31'),(14,'John Smith','johnsmith@yahoo.com','202cb962ac59075b964b07152d234b70','8801914383409',NULL,'2017-05-03 16:48:46','2017-05-03 16:48:46');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
