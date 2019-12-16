CREATE DATABASE  IF NOT EXISTS `ecommercetenis` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `ecommercetenis`;
-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: ecommercetenis
-- ------------------------------------------------------
-- Server version	5.7.26

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`),
  UNIQUE KEY `categories_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Raquetas','raquetas','/images/main-racquets.jpg',NULL,NULL),(2,'Pelotas','pelotas','/images/main-balls.jpg',NULL,NULL),(3,'Cuerdas','cuerdas','/images/main-strings.jpg',NULL,NULL),(4,'Bolsos','bolsos','/images/main-tennisbags.jpg',NULL,NULL),(5,'Accesorios','accesorios','/images/main-accessories.jpg',NULL,NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_12_11_125134_create_categories_table',1),(4,'2019_12_11_125322_create_products_table',1),(5,'2019_12_11_130052_create_products_in_cart_table',1),(6,'2019_12_11_130905_create_orders_table',1),(7,'2019_12_11_131033_create_orders_products_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `total` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (1,3,19999.00,'2019-12-16 06:23:23','2019-12-16 06:23:23'),(2,3,3185.00,'2019-12-16 06:23:49','2019-12-16 06:23:49'),(3,3,24489.00,'2019-12-16 06:37:17','2019-12-16 06:37:17'),(4,3,39998.00,'2019-12-16 07:14:27','2019-12-16 07:14:27');
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_products`
--

DROP TABLE IF EXISTS `orders_products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders_products` (
  `order_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`,`product_id`),
  KEY `orders_products_product_id_foreign` (`product_id`),
  CONSTRAINT `orders_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `orders_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_products`
--

LOCK TABLES `orders_products` WRITE;
/*!40000 ALTER TABLE `orders_products` DISABLE KEYS */;
INSERT INTO `orders_products` VALUES (1,1,1,19999.00,'2019-12-16 06:23:23','2019-12-16 06:23:23'),(2,31,7,455.00,'2019-12-16 06:23:49','2019-12-16 06:23:49'),(3,1,1,19999.00,'2019-12-16 06:37:17','2019-12-16 06:37:17'),(3,61,10,449.00,'2019-12-16 06:37:17','2019-12-16 06:37:17'),(4,1,2,19999.00,'2019-12-16 07:14:27','2019-12-16 07:14:27');
/*!40000 ALTER TABLE `orders_products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `products_name_unique` (`name`),
  UNIQUE KEY `products_slug_unique` (`slug`),
  KEY `products_category_id_foreign` (`category_id`),
  CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=69 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'RAQUETA BABOLAT PURE AERO','raqueta-babolat-pure-aero','/images/1.jpg',19999.00,NULL,NULL,1),(2,'RAQUETA BABOLAT PURE DRIVE','raqueta-babolat-pure-drive','/images/3.jpg',19999.00,NULL,NULL,1),(3,'RAQUETA BABOLAT PURE CONTROL','raqueta-babolat-pure-control','/images/6.jpg',18999.00,NULL,NULL,1),(4,'RAQUETA BABOLAT PURE STRIKE','raqueta-babolat-pure-strike','/images/5.jpg',18499.00,NULL,NULL,1),(5,'RAQUETA TECNIFIBRE FIGHT 265','raqueta-tecnifibre-fight-265','/images/15.jpg',17999.00,NULL,NULL,1),(6,'RAQUETA TECNIFIBRE FIGHT 295','raqueta-tecnifibre-fight-295','/images/16.jpg',16999.00,NULL,NULL,1),(7,'RAQUETA TECNIFIBRE FIGHT 300','raqueta-tecnifibre-fight-300','/images/17.jpg',18399.00,NULL,NULL,1),(8,'RAQUETA TECNIFIBRE FIGHT 315','raqueta-tecnifibre-fight-315','/images/18.jpg',17399.00,NULL,NULL,1),(9,'RAQUETA TECNIFIBRE FIGHT 320','raqueta-tecnifibre-fight-320','/images/13.jpg',19399.00,NULL,NULL,1),(10,'RAQUETA TECNIFIBRE FIGHT 325','raqueta-tecnifibre-fight-325','/images/18.jpg',18399.00,NULL,NULL,1),(11,'RAQUETA HEAD GRAPHENE SPEED X','raqueta-graphene-speed-x','/images/head-graphene-speed-x.jpg',15999.00,NULL,NULL,1),(12,'RAQUETA HEAD GRAPHENE SPEED PRO','raqueta-graphene-speed-pro','/images/head-graphene-speed-x.jpg',15999.00,NULL,NULL,1),(13,'RAQUETA HEAD GRAPHENE SPEED MP','raqueta-graphene-speed-mp','/images/11.jpg',14999.00,NULL,NULL,1),(14,'RAQUETA HEAD GRAPHENE 360 GRAVITY PRO','raqueta-graphene-gravity-pro','/images/head-gravity-pro.jpg',15439.00,NULL,NULL,1),(15,'RAQUETA HEAD GRAPHENE 350 GRAVITY MP','raqueta-graphene-gravity-mp','/images/head-gravity-pro.jpg',15439.00,NULL,NULL,1),(16,'RAQUETA HEAD GRAPHENE 350 GRAVITY S','raqueta-graphene-gravity-s','/images/head-gravity-pro.jpg',14999.00,NULL,NULL,1),(17,'RAQUETA WILSON BLADE 98','raqueta-blade-98','/images/wilson-blade-98.jpg',12900.00,NULL,NULL,1),(18,'RAQUETA WILSON BLADE 98 S','raqueta-blade-98s','/images/19.jpg',11900.00,NULL,NULL,1),(19,'RAQUETA WILSON PRO STAFF 97','raqueta-prostaff-97','/images/20.jpg',12499.00,NULL,NULL,1),(20,'RAQUETA WILSON CLASH 100','raqueta-clash100','/images/clash-100.jpg',13499.00,NULL,NULL,1),(21,'RAQUETA WILSON ULTRA 100','raqueta-ultra-100','/images/wilson-ultra.jpg',12999.00,NULL,NULL,1),(22,'RAQUETA WILSON PRO STAFF 97 LAVER','raqueta-prostaff97-laver','/images/wilson-pro-staff-97laver.jpg',13549.00,NULL,NULL,1),(23,'RAQUETA WILSON PRO STAFF 97 S','raqueta-prostaff97-s','/images/20.jpg',11999.00,NULL,NULL,1),(24,'RAQUETA YONEX VCORE PRO 100','raqueta-vcore-100','/images/yonex-vcore.jpg',13249.00,NULL,NULL,1),(25,'RAQUETA YONEX VCORE PRO 98','raqueta-vcore-98','/images/25.jpg',13249.00,NULL,NULL,1),(26,'RAQUETA YONEX VPRO 98 2018','raqueta-vpro-98','/images/26.jpg',12249.00,NULL,NULL,1),(27,'RAQUETA YONEX VPRO 100 2018','raqueta-vpro-100','/images/27.jpg',12249.00,NULL,NULL,1),(28,'RAQUETA YONEX EZONE 98','raqueta-ezone-98','/images/28.jpg',12249.00,NULL,NULL,1),(29,'RAQUETA YONEX EZONE 100','raqueta-ezone-100','/images/29.jpg',12239.00,NULL,NULL,1),(30,'PELOTAS PENN CHAMPIONSHIP','pelotas-pennchampionship-x3','/images/30.jpg',435.00,NULL,NULL,2),(31,'PELOTAS PENN ATP','pelotas-pennatpx3','/images/31.jpg',455.00,NULL,NULL,2),(32,'PELOTAS HEAD ATP','pelotas-headatpx3','/images/32.jpg',500.00,NULL,NULL,2),(33,'PELOTAS HEAD CHAMPIONSHIP','pelotas-headchampionshipx3','/images/33.jpg',495.00,NULL,NULL,2),(34,'PELOTAS WILSON AUSTRALIAN OPEN','pelotas-wilsonaox3','/images/34.jpg',515.00,NULL,NULL,2),(35,'PELOTAS WILSON CHAMPIONSHIP','pelotas-wilsonchampionshiipx3','/images/35.jpg',515.00,NULL,NULL,2),(36,'PELOTAS DUNLOP CHAMPIONSHIP','pelotas-dunlopchampionshipx3','/images/36.jpg',600.00,NULL,NULL,2),(37,'PELOTAS BABOLAT ROLAND GARROS','pelotas-babolatrolandgarrosx3','/images/37.jpg',589.00,NULL,NULL,2),(38,'ROLLO LUXILON ALU POWER','rollo-luxilon-alupower','/images/38.jpg',18749.00,NULL,NULL,3),(39,'ROLLO LUXILON ALU POWER ROUGH','rollo-luxilon-alupowerrough','/images/39.jpg',18749.00,NULL,NULL,3),(40,'ROLLO LUXILON ORIGINAL','rollo-luxilonoriginal','/images/40.jpg',17749.00,NULL,NULL,3),(41,'ROLLO KIRSCHBAUM PRO LINE II','rollo-kirschbaum-prolineII','/images/41.jpg',124999.00,NULL,NULL,3),(42,'ROLLO KIRSCHBAUM PRO LINE X','rollo-kirschbaum-prolinex','/images/42.jpg',11999.00,NULL,NULL,3),(43,'ROLLO KIRSCHBAUM SUPERSMASH ','rollo-kirschbaum-supersmash','/images/43.jpg',10449.00,NULL,NULL,3),(44,'ROLLO KIRSCHBAUM COMPETITION','rollo-kirschbaum-competition','/images/44.jpg',9999.00,NULL,NULL,3),(45,'ROLLO BABOLAT RPM BLAST ','rollo-babolat-rpmblast','/images/45.jpg',16449.00,NULL,NULL,3),(46,'ROLLO BABOLAT PRO HURRICANE','rollo-babolat-prohurricane','/images/46.jpg',15449.00,NULL,NULL,3),(47,'ROLLO BABOLAT XCELL','rollo-babolat-xcell','/images/47.jpg',8999.00,NULL,NULL,3),(48,'BOLSO WILSON FEDERER DNA X12','bolso-wilson-federer-dna-x12','/images/48.jpg',8999.00,NULL,NULL,4),(49,'BOLSO WILSON FEDERER DNA X12 BLACK','bolso-wilson-federer-dna-x12-black','/images/49.jpg',9349.00,NULL,NULL,4),(50,'BOLSO BABOLAT PURE AERO X12','bolso-babolat-pure-aero-x12','/images/50.jpg',9999.00,NULL,NULL,4),(51,'BOLSO BABOLAT PURE X12','bolso-babolat-pure-x12','/images/51.jpg',8999.00,NULL,NULL,4),(52,'BOLSO HEAD DJOKOVIC X12','bolso-head-djokovic-x12','/images/52.jpg',9199.00,NULL,NULL,4),(53,'BOLSO HEAD RADICAL X12','bolso-head-radical-x12','/images/53.jpg',9349.00,NULL,NULL,4),(54,'BOLSO YONEX PRO X12','bolso-yonex-pro-x12','/images/bolso-yonex-x12.jpg',8999.00,NULL,NULL,4),(55,'BOLSO YONEX PRO X9','bolso-yonex-pro-x9','/images/bolso-yonex-x9.jpg',7649.00,NULL,NULL,4),(56,'BOLSO TECNIFIBRE TOUR ENDURANCE X12','bolso-tecnifibre-tour-endurance','/images/56.jpg',8999.00,NULL,NULL,4),(57,'BOLSO TECNIFIBRE ATP ENDURANCE 15','bolso-tecnifibre-atp-endurance','/images/57.jpg',8499.00,NULL,NULL,4),(58,'GRIP WILSON SUBLIME','grip-wilson-sublime','/images/58.jpg',500.00,NULL,NULL,5),(59,'GRIP WILSON LEATHER','grip-wilson-leather','/images/59.jpg',700.00,NULL,NULL,5),(60,'GRIP BABOLAT SYNTEC ','grip-babolat-syntecpro','/images/60.jpg',449.00,NULL,NULL,5),(61,'CUBREGRIP WILSON PRO OVERGRIP X3','cubregrip-wilson-proovergripx3','/images/61.jpg',449.00,NULL,NULL,5),(62,'CUBREGRIP BABOLAT VS X3','cubregrip-babolat-vsx3','/images/62.jpg',549.00,NULL,NULL,5),(63,'ANTIVIBRADOR WILSON FUN X2','antivibrador-wilson-fun-x2','/images/63.jpg',349.00,NULL,NULL,5),(64,'ANTIVIBRADOR WILSON PRO FEEL X2','antivibrador-wilson-profeel-x2','/images/64.jpg',349.00,NULL,NULL,5),(65,'ANTIVIBRADOR BABOLAT FLAG DUMP','antivibrador-babolat-flagdump-x2','/images/65.jpg',389.00,NULL,NULL,5),(66,'ANTIVIBRADOR BABOLAT VIBRAKILL','antivibrador-babolat-vibrakill-x2','/images/66.jpg',389.00,NULL,NULL,5),(67,'STENCIL WILSON ROJO','stencil-wilson-rojo','/images/67.jpg',409.00,NULL,NULL,5),(68,'STENCIL BABOLAT NEGRO','stencil-babolar-negro','/images/68.jpg',409.00,NULL,NULL,5);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products_in_cart`
--

DROP TABLE IF EXISTS `products_in_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products_in_cart` (
  `user_id` bigint(20) unsigned NOT NULL,
  `product_id` bigint(20) unsigned NOT NULL,
  `count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`product_id`),
  KEY `products_in_cart_product_id_foreign` (`product_id`),
  CONSTRAINT `products_in_cart_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  CONSTRAINT `products_in_cart_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products_in_cart`
--

LOCK TABLES `products_in_cart` WRITE;
/*!40000 ALTER TABLE `products_in_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `products_in_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Juan','juan.stillo1@gmail.com',NULL,'$2y$10$nN5Z1u3IqdKQRD88N8am2uueX/GELMsVFLL3JlEPF2kW65MkpPkRq',NULL,'2019-12-14 02:00:46','2019-12-14 02:00:46'),(2,'juan','112121@1.com',NULL,'$2y$10$76sF33rmj3m8QsHttN8PheqHjPC.rkHGoyo0d9Lxcfcijx7kpR.k2',NULL,'2019-12-15 20:41:45','2019-12-15 20:41:45'),(3,'juanstillo','juan.stillo12@gmail.com',NULL,'$2y$10$.Tb1xj/pfEmRo3dt38nd8.ZQvUl2LH1mQzjGC4yHf/GR0nMMO6XLq',NULL,'2019-12-16 06:23:10','2019-12-16 06:23:10'),(4,'Marcelo','mdiaz@sinectis.com',NULL,'$2y$10$uS9xyjpZXYg4RUYDbc/v8uiqMALY4Pm620d/7tnVUrpH4nbvNYfRC',NULL,'2019-12-16 06:40:28','2019-12-16 06:40:28');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-16  2:10:22
