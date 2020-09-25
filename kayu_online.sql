/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.11-MariaDB : Database - kayu_online
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`kayu_online` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `kayu_online`;

/*Table structure for table `fb_users` */

DROP TABLE IF EXISTS `fb_users`;

CREATE TABLE `fb_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `oauth_provider` enum('facebook','google','twitter','') COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `oauth_uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `picture` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `fb_users` */

/*Table structure for table `notifikasi` */

DROP TABLE IF EXISTS `notifikasi`;

CREATE TABLE `notifikasi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `admin_reg` int(11) DEFAULT NULL,
  `stok_barang` int(11) DEFAULT NULL,
  `bukti_transfer` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `notifikasi` */

insert  into `notifikasi`(`id`,`admin_reg`,`stok_barang`,`bukti_transfer`) values 
(1,0,0,0);

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `id_pemesan` bigint(20) DEFAULT NULL,
  `sku_product` char(20) DEFAULT NULL,
  `nama_product` varchar(255) DEFAULT NULL,
  `ukuran` char(100) DEFAULT NULL,
  `gambar_product` char(100) DEFAULT NULL,
  `id_product` bigint(50) DEFAULT NULL,
  `jumlah` int(20) DEFAULT NULL,
  `harga` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `orders` */

insert  into `orders`(`id`,`id_pemesan`,`sku_product`,`nama_product`,`ukuran`,`gambar_product`,`id_product`,`jumlah`,`harga`,`total`,`status`) values 
(36,28,'KO MB01','Merbau ',' 90x15x20','assets/img/merbau.png',2,4,85000,340000,'pesan'),
(41,27,'KO MB01','Merbau ',' 90x15x20','assets/img/merbau.png',2,1,85000,85000,'pesan'),
(42,27,'KO EKS-MG','Eksotik-MG',' 2 meter','assets/img/Eksotik-mg-thumbnail_3.png',4,5,70000,350000,'pesan'),
(47,27,'KO MB01','Merbau ',' 1 meter','assets/img/merbau.png',2,4,100000,400000,'pesan'),
(48,27,'KO JT01','Jati',' 3 meter','assets/img/default.png',3,3,150000,450000,'pesan'),
(49,27,'KO JT01','Jati',' 1 meter','assets/img/default.png',3,2,120000,240000,'pesan'),
(50,27,'DK MB01','Merbau',' 1 meter','assets/img/merbau-decking.png',1,4,100000,400000,'pesan');

/*Table structure for table `product_categories` */

DROP TABLE IF EXISTS `product_categories`;

CREATE TABLE `product_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_categories` */

insert  into `product_categories`(`id`,`category_code`,`category_name`,`description`,`created_at`,`updated_at`) values 
(1,'DK','Deking','this is Deking',NULL,NULL),
(2,'KO','Kayu Olahan','this is kayu olahan',NULL,NULL),
(3,'PT','Pintu','this is pintu',NULL,NULL),
(4,'TG','Tangga','this is tangga',NULL,NULL),
(5,'KS','Kusen','this is kusen',NULL,NULL),
(6,'LP','Lis Profil','this is LP',NULL,NULL);

/*Table structure for table `product_has_sizes` */

DROP TABLE IF EXISTS `product_has_sizes`;

CREATE TABLE `product_has_sizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `product_size_id` bigint(20) unsigned NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sold` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_has_sizes` */

insert  into `product_has_sizes`(`id`,`product_id`,`product_size_id`,`price`,`stock`,`created_at`,`updated_at`,`sold`) values 
(1,1,1,100000,10,NULL,NULL,1),
(2,1,2,75000,20,NULL,NULL,2),
(3,1,3,55000,20,NULL,NULL,1),
(4,2,3,85000,20,NULL,NULL,0),
(5,3,1,120000,12,NULL,NULL,3),
(6,3,5,150000,25,NULL,NULL,2),
(7,2,1,100000,22,NULL,NULL,2),
(8,4,2,70000,54,NULL,NULL,5);

/*Table structure for table `product_images` */

DROP TABLE IF EXISTS `product_images`;

CREATE TABLE `product_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` bigint(20) unsigned NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `first` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_images` */

insert  into `product_images`(`id`,`product_id`,`image`,`thumbnail_image`,`first`,`created_at`,`updated_at`) values 
(1,1,'assets/img/merbau-decking.png','assets/img/merbau-decking-thumbnail.png',1,NULL,NULL),
(2,1,'assets/img/merbau-decking.png','assets/img/merbau-decking-thumbnail.png',0,NULL,NULL),
(3,3,'assets/img/default.png','assets/img/default.png',1,NULL,NULL),
(4,2,'assets/img/merbau.png','assets/img/merbau.png',1,NULL,NULL),
(5,2,'assets/img/merbau.png','assets/img/merbau.png',0,NULL,NULL),
(6,4,'assets/img/Eksotik-mg-thumbnail_3.png','',0,NULL,NULL);

/*Table structure for table `product_sizes` */

DROP TABLE IF EXISTS `product_sizes`;

CREATE TABLE `product_sizes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `product_sizes` */

insert  into `product_sizes`(`id`,`size`,`description`,`created_at`,`updated_at`) values 
(1,'1 meter','1 m',NULL,NULL),
(2,'2 meter','2 m',NULL,NULL),
(3,'90x15x20','90x15x20',NULL,NULL),
(4,'78x20x30','78x20x30',NULL,NULL),
(5,'3 meter','3 meter kubik',NULL,NULL);

/*Table structure for table `product_thumbnail` */

DROP TABLE IF EXISTS `product_thumbnail`;

CREATE TABLE `product_thumbnail` (
  `id` bigint(20) NOT NULL,
  `product_id` char(50) NOT NULL,
  `kode_product` char(50) NOT NULL,
  `kode_kayu` char(50) NOT NULL,
  `thumbnail` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `product_thumbnail_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products2` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `product_thumbnail` */

insert  into `product_thumbnail`(`id`,`product_id`,`kode_product`,`kode_kayu`,`thumbnail`,`name`) values 
(1,'2','KO','KO EKS-MG','assets/img/Eksotik-mg-thumbnail.png','Eksotik-MG'),
(2,'2','KO','KO EKS-MG','assets/img/Eksotik-mg-thumbnail_2.png','Eksotik-MG'),
(3,'2','KO','KO EKS-MG','assets/img/Eksotik-mg-thumbnail_3.png','Eksotik-MG');

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` bigint(20) unsigned NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `detail` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_product_code_unique` (`product_code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `products` */

insert  into `products`(`id`,`category_id`,`product_code`,`name`,`description`,`detail`,`created_at`,`updated_at`) values 
(1,1,'DK MB01','Merbau','Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaat','ini Detail Merbau Decking','2020-09-02 20:49:41','2020-09-02 20:49:45'),
(2,2,'KO MB01','Merbau ','Merbau terutama dimanfaatkan kayunya, yang biasa digunakan dalam konstruksi berat seperti balok-balok, tiang dan bantalan, di bangunan rumah maupun jembatan.Oleh karena kekuatan, keawetan dan penampilannya yang menarik, sekarang kayu merbau juga dimanfaat','Ini adalah detail merbau kayu olahan','2020-09-02 20:49:41','2020-09-02 21:05:39'),
(3,2,'KO JT01','Jati','Ini merupakan Deskripsi dari kayu olahan jenis jati','Detail kayu olahan Jenis Jati',NULL,NULL),
(4,2,'KO EKS-MG','Eksotik-MG','ini merupakan deskripsi dari kayu olahan jenis eksotik-mg','ini merupakan detail kayu olahan jenis eksotik-mg',NULL,NULL);

/*Table structure for table `products2` */

DROP TABLE IF EXISTS `products2`;

CREATE TABLE `products2` (
  `id` char(50) NOT NULL,
  `category_id` char(50) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `products2` */

insert  into `products2`(`id`,`category_id`,`name`,`description`,`price`,`created_at`,`updated_at`) values 
('1','DK','Deking','Ini Decking',NULL,NULL,NULL),
('2','KO','Kayu Olahan','Ini Kayu Olahan',NULL,NULL,NULL),
('3','PT','Pintu','Ini Pintu',NULL,NULL,NULL),
('4','TG','Tangga','Ini Tangga',NULL,NULL,NULL),
('5','KS','Kusen','Ini Kusen',NULL,NULL,NULL),
('6','LP','Lis Profil','Ini Lis Profil',NULL,NULL,NULL);

/*Table structure for table `user_token` */

DROP TABLE IF EXISTS `user_token`;

CREATE TABLE `user_token` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `date_created` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_token` */

insert  into `user_token`(`id`,`email`,`token`,`date_created`) values 
(25,'giannugraha76@gmail.com','J7FqxYQzI5yEkpoD0uD6YNUjag/1VPKSTWu/LdmOYh0=','2020-09-09'),
(26,'giannugraha76@gmail.com','/k5vefBbYDpaXhZh4AbjInWd7zNcY7S2AVTpvQZ0ocw=','2020-09-16');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `no_hp` char(50) DEFAULT NULL,
  `role` varbinary(255) DEFAULT NULL,
  `status` char(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`id`,`nama`,`email`,`username`,`password`,`no_hp`,`role`,`status`) values 
(1,'Admin','kayuOnline.co@gmail.com','leaq6vp2yph3','#Alhamdulillah1','089','admin','active'),
(2,'Gian Nugraha','giannugraha76@gmail.com','siJalu','NmhUTzZTV3JUQjIvaUNNai9DSXQ0UT09',NULL,'admin','active'),
(3,'Super Admin','SuperAdmin@gmail.com','KayuOnline.co','#Alhamdulillah1',NULL,'admin','active'),
(25,'Gian Nugraha User','gianzolla9@gmail.com','siJaluUser','Pesat.muda9','081295704758','user','0'),
(27,'Gian Nugraha','giannugraha76@gmail.com','gian User','NmhUTzZTV3JUQjIvaUNNai9DSXQ0UT09','087821925626','user','0'),
(28,'nugraha gian','nugrahagian76@gmail.com','nugraha gian','NmhUTzZTV3JUQjIvaUNNai9DSXQ0UT09','087821925626','user',NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
