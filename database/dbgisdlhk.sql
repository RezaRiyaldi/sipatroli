/*
SQLyog Community v13.1.5  (64 bit)
MySQL - 10.4.17-MariaDB : Database - dbgisdlhk
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`dbgisdlhk` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `dbgisdlhk`;

/*Table structure for table `companies` */

DROP TABLE IF EXISTS `companies`;

CREATE TABLE `companies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nib` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_tlp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industry_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tr_kecamatan_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_lengkap` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `das` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kordinat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` char(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `updated_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_nama_perusahaan_unique` (`nama_perusahaan`)
) ENGINE=InnoDB AUTO_INCREMENT=109 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `companies` */

insert  into `companies`(`id`,`nama_perusahaan`,`slug`,`nib`,`no_tlp`,`cp`,`industry_id`,`ket_industri`,`tr_kecamatan_id`,`deskripsi`,`alamat_lengkap`,`das`,`foto_perusahaan`,`kordinat`,`latitude`,`longitude`,`website`,`status`,`created_at`,`updated_at`,`created_by`,`updated_by`) values 
(1,'PT. ARAI RUBBER SEAL INDONESIA','pt-arai-rubber-seal-indo','0','021-55650548','Andre HK','13','Industri barang-barang dari karet untuk keperluan industri','5',NULL,'Jl.Manis II Kawasan Industri Manis Desa Kadu Kec.Curug','Cirarab','1.jpg','-6.220689057006058, 106.57317771245326','-6.220689057006058','106.57317771245326','www.arai-net.com',NULL,'2021-04-12 05:32:42','2021-04-12 05:32:42','2',NULL),
(2,'PT. PROPAN DECORINDO RAYA','pt-propan-decorindo-raya','0','021-59303333','Agus Wahyuono (HSE CR)','11','Industri Cat dan tinta cetak','5',NULL,'Jl.Raya Serang Km.19 Desa Kadu Kec Curug','Cirarab','2.jpg','-6.21555068833013, 106.56385753573561','-6.21555068833013','106.56385753573561','www.propanraya.com',NULL,'2021-04-12 05:32:42','2021-04-12 05:32:42','2',NULL),
(3,'PT. MOLEX AYUS','pt-molex-ayus','0','021-5960311/5960212','Banu kuncoro','12','Industri farmasi','2',NULL,'Jl.Raya Serang Km.11,5 Kec.Cikupa','Cimanceuri','3.jpg','-6.217253313615883, 106.55171196372564','-6.217253313615883','106.55171196372564','www.molexayus.com',NULL,'2021-04-12 05:32:42','2021-04-12 05:32:42','2',NULL),
(4,'PT. CITRA GALVALINDO SUKSES MANDIRI','pt-citra-galvalindo-sukses-mandiri','0','021-5903593','Uttie Dwi Lestari (HRD & GA)','20','Komponen Kendaraan bermotor dan jasa penunjang industri komponen perlengkapan sepeda motor dan sejenisnya','18',NULL,'Jl.Raya Pasar Kemis Km 7,5 Kp.Kebon Kelapa 004/003 No.28 Ds.Suka Asih Kec.Pasar Kemis','Cirarab','4.jpg','-6.173478863219243, 106.5357172568129','-6.173478863219243 ','106.5357172568129','www.molexayus.com',NULL,'2021-04-12 05:32:42','2021-04-12 05:32:42','2',NULL);

/*Table structure for table `industries` */

DROP TABLE IF EXISTS `industries`;

CREATE TABLE `industries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_industri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `industries_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `industries` */

insert  into `industries`(`id`,`kode`,`nama_industri`,`created_at`,`updated_at`) values 
(1,'IND-2001','Industri makanan',NULL,NULL),
(2,'IND-2002','Industri minuman',NULL,NULL),
(3,'IND-2003','Industri pengolahan tembakau',NULL,NULL),
(4,'IND-2004','Industri tekstil',NULL,NULL),
(5,'IND-2005','Industri pakaian jadi',NULL,NULL),
(6,'IND-2006','Industri kulit, barang dari kulit dan alas kaki',NULL,NULL),
(7,'IND-2007','Industri kayu, barang dari kayu dan gabus (non furnitur) dan barang anyaman dari bambu, rotan dan sejenisnya',NULL,NULL),
(8,'IND-2008','Industri kertas dan barang dari kertas',NULL,NULL),
(9,'IND-2009','Industri pencetakan dan reproduksi media rekaman',NULL,NULL),
(10,'IND-2010','Industri produk dari batu bara dan pengilangan minyak bumi',NULL,NULL),
(11,'IND-2011','Industri bahan kimia dan barang dari bahan kimia',NULL,NULL),
(12,'IND-2012','Industri farmasi, produk obat kimia dan obat tradisional',NULL,NULL),
(13,'IND-2013','Industri karet, barang dari karet dan plastik',NULL,NULL),
(14,'IND-2014','Industri barang galian bukan logam',NULL,NULL),
(15,'IND-2015','Industri logam dasar',NULL,NULL),
(16,'IND-2016','Industri barang logam, bukan mesin dan peralatannya',NULL,NULL),
(17,'IND-2017','Industri komputer, barang elektronik dan optik',NULL,NULL),
(18,'IND-2018','Industri peralatan listrik',NULL,NULL),
(19,'IND-2019','Industri mesin dan perlengkapan YTDL',NULL,NULL),
(20,'IND-2020','Industri kendaraan bermotor, trailer dan semi trailer',NULL,NULL),
(21,'IND-2021','Industri alat angkut lainnya',NULL,NULL),
(22,'IND-2022','Industri furnitur',NULL,NULL),
(23,'IND-2023','Industri pengolahan lainnya',NULL,NULL),
(24,'IND-2024','Reparasi dan pemasangan mesin dan peralatan',NULL,NULL),
(25,'IND-2025','Fasyankes (Fasilitas Pelayanan Kesehatan)',NULL,NULL),
(26,'IND-2026','Fasilitas pendidikan',NULL,NULL),
(27,'IND-2027','Hotel, restaurant dan kafe',NULL,NULL),
(28,'IND-2028','Industri Lainnya',NULL,NULL);

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`version`,`class`,`group`,`namespace`,`time`,`batch`) values 
(2,'2021-04-19-112140','App\\Database\\Migrations\\Users','default','App',1617863484,1),
(3,'2021-04-19-084624','App\\Database\\Migrations\\Perusahaan','default','App',1618823151,2),
(4,'2021-04-19-085757','App\\Database\\Migrations\\Product','default','App',1618823151,2);

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `product_id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_description` text DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `product` */

/*Table structure for table `tbl_users` */

DROP TABLE IF EXISTS `tbl_users`;

CREATE TABLE `tbl_users` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `tbl_users` */

insert  into `tbl_users`(`id`,`nama`,`email`,`password`,`created_at`,`updated_at`) values 
(1,'admin','admin@gmail.com','$2y$10$AMPw.9lTxFbHg16eGSFuf.s1O8xhbuE8qBqmBywnHbsdBFp8PF9w2','2021-04-08 03:15:38','2021-04-08 03:15:38');

/*Table structure for table `tr_kecamatan` */

DROP TABLE IF EXISTS `tr_kecamatan`;

CREATE TABLE `tr_kecamatan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kecamatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tr_kecamatan_kode_unique` (`kode`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `tr_kecamatan` */

insert  into `tr_kecamatan`(`id`,`kode`,`nama_kecamatan`,`created_at`,`updated_at`) values 
(1,'K001','Balaraja',NULL,NULL),
(2,'K002','Cikupa',NULL,NULL),
(3,'K003','Cisauk',NULL,NULL),
(4,'K004','Cisoka',NULL,NULL),
(5,'K005','Curug',NULL,NULL),
(6,'K006','Gunung Kaler',NULL,NULL),
(7,'K007','Jambe',NULL,NULL),
(8,'K008','Jayanti',NULL,NULL),
(9,'K009','Kelapa Dua',NULL,NULL),
(10,'K010','Kemiri',NULL,NULL),
(11,'K011','Kosambi',NULL,NULL),
(12,'K012','Kronjo',NULL,NULL),
(13,'K013','Legok',NULL,NULL),
(14,'K014','Mekar Baru',NULL,NULL),
(15,'K015','Pagedangan',NULL,NULL),
(16,'K016','Pakuhaji',NULL,NULL),
(17,'K017','Panongan',NULL,NULL),
(18,'K018','Pasar Kemis',NULL,NULL),
(19,'K019','Rajeg',NULL,NULL),
(20,'K020','Sepatan',NULL,NULL),
(21,'K021','Sepatan Timur',NULL,NULL),
(22,'K022','Sindang Jaya',NULL,NULL),
(23,'K023','Sukadiri',NULL,NULL),
(24,'K024','Suka Mulya',NULL,NULL),
(25,'K025','Teluk Naga',NULL,NULL),
(26,'K026','Tigaraksa',NULL,NULL),
(27,'K027','Kresek',NULL,NULL),
(28,'K028','Mauk',NULL,NULL),
(29,'K029','Solear',NULL,NULL);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
