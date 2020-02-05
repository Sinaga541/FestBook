/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.6-MariaDB : Database - festbook
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`festbook` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `festbook`;

/*Table structure for table `authors` */

DROP TABLE IF EXISTS `authors`;

CREATE TABLE `authors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `authors` */

insert  into `authors`(`id`,`created_at`,`updated_at`) values 
(12,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(13,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(14,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(15,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(16,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(17,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(18,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(19,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(20,'2019-12-17 07:32:48','2019-12-17 07:32:48'),
(21,'2019-12-17 07:32:48','2019-12-17 07:32:48');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'2014_10_12_000000_create_users_table',1),
(2,'2014_10_12_100000_create_password_resets_table',1),
(3,'2019_12_15_131528_create_authors_table',1),
(4,'2019_12_15_131733_create_product_table',1),
(5,'2019_12_15_132722_create_rent_history_table',1),
(6,'2019_12_15_133715_create_products_table',2),
(7,'2019_12_15_135617_create_permission_tables',3);

/*Table structure for table `model_has_permissions` */

DROP TABLE IF EXISTS `model_has_permissions`;

CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_permissions` */

/*Table structure for table `model_has_roles` */

DROP TABLE IF EXISTS `model_has_roles`;

CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `model_has_roles` */

insert  into `model_has_roles`(`role_id`,`model_type`,`model_id`) values 
(1,'App\\User',11),
(2,'App\\User',5),
(2,'App\\User',7);

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_resets` */

insert  into `password_resets`(`email`,`token`,`created_at`) values 
('ivansinaga@test.com','$2y$10$W7Prm6TRUUriR9lJCf9//OyGsJNQdm2nfMv58oCG7/oan8ShVEo7u','2019-12-16 13:19:01');

/*Table structure for table `permissions` */

DROP TABLE IF EXISTS `permissions`;

CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `permissions` */

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `author_id` bigint(20) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `products_author_id_foreign` (`author_id`),
  CONSTRAINT `products_author_id_foreign` FOREIGN KEY (`author_id`) REFERENCES `authors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

/*Table structure for table `rent_history` */

DROP TABLE IF EXISTS `rent_history`;

CREATE TABLE `rent_history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `rent_history` */

/*Table structure for table `role_has_permissions` */

DROP TABLE IF EXISTS `role_has_permissions`;

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role_has_permissions` */

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `roles` */

insert  into `roles`(`id`,`name`,`guard_name`,`created_at`,`updated_at`) values 
(1,'admin','web','2019-12-16 13:35:19','2019-12-16 13:35:19'),
(2,'user','web','2019-12-16 13:35:19','2019-12-16 13:35:19');

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`remember_token`,`created_at`,`updated_at`) values 
(1,'ivan','ivansinaga@test.com',NULL,'$2y$10$sX8p6otFVBHuwMh5euCc0uoR7HDiGHAvTKFjbye3nubuciw45i2C2','llhLEpgmN306fTuRDPpOUjpt2q6WaKxD2cFDP5kPw7WEii9oRWOb9giHpLQ0','2019-12-16 13:01:06','2019-12-16 13:15:33'),
(2,'Felix','Felix@festbook.test','2019-12-16 13:26:57','$2y$10$EBsx9Qh6AA6iWzja5edQ6ODJn3NbClxMevJS4F//6o2VeEOp6XZf2',NULL,'2019-12-16 13:24:09','2019-12-16 13:26:57'),
(3,'sinaga','sinaga@festbook.test',NULL,'$2y$10$UIq97epp3wMyxaG4ykD/nu4IJ3LugJLXPaNjEfv99VYXz/i77WNqm',NULL,'2019-12-16 13:58:39','2019-12-16 13:58:39'),
(4,'siah','siah@festbook.test',NULL,'$2y$10$YOQumHmeVhfFhXL1iwvTeO9MeROpbe883huroCJfcEZayrcaqeV8G',NULL,'2019-12-16 14:00:18','2019-12-16 14:00:18'),
(5,'loki','loki@festbook.test',NULL,'$2y$10$QaN2.0Y/gjQ52kZVsbqmSesWWnA.eD66lOs9GcVuCAGOXnJu.VdU6',NULL,'2019-12-16 14:02:42','2019-12-16 14:02:42'),
(6,'lokiy','lokiy@festbook.test',NULL,'$2y$10$m/BSuhDkftm/NHEbSPkkruKNKXpdCDCBxaCCdOHYQeELTyEvO9N26',NULL,'2019-12-16 14:05:46','2019-12-16 14:05:46'),
(7,'Ivan Felix','iFelix@festbook.test','2019-12-16 14:07:05','$2y$10$ATplN2cUXV2ZVr9O2X/I3eS5yMnbRkW33dS5AWY7PXUNKYflV4e2C',NULL,'2019-12-16 14:06:54','2019-12-16 14:07:05'),
(8,'Admin FestBook','admin@festbook.test',NULL,'$2y$10$SQKT.NHb9xtfNq382NzLE.X6sMC6ArNWTRQgLHfux51eRMJBhdPMa',NULL,'2019-12-16 14:15:31','2019-12-16 14:15:31'),
(11,'Admin FestBook','admin1@festbook.test',NULL,'$2y$10$ZMJXDFH21ch6TiP2l.2OEuyJu8gzt8Bng0sWZ4eMyyi3KYhWxVx6W',NULL,'2019-12-16 14:26:46','2019-12-16 14:26:46'),
(12,'','',NULL,'',NULL,NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
