CREATE DATABASE  IF NOT EXISTS `tenis_db` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `tenis_db`;
-- MySQL dump 10.13  Distrib 8.0.17, for macos10.14 (x86_64)
--
-- Host: 127.0.0.1    Database: tenis_db
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
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `brands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_brand` varchar(50) DEFAULT NULL,
  `img_brand` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `brands`
--

LOCK TABLES `brands` WRITE;
/*!40000 ALTER TABLE `brands` DISABLE KEYS */;
INSERT INTO `brands` VALUES (1,'Babolat',NULL),(2,'Head',NULL),(3,'Kirschbaum',NULL),(4,'Luxion',NULL),(5,'Penn',NULL),(6,'Solinco',NULL),(7,'Tecnifibre',NULL),(8,'Wilson',NULL),(9,'Yonex',NULL);
/*!40000 ALTER TABLE `brands` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_cat` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Raqueta'),(2,'Pelota'),(3,'Cuerda'),(4,'Bolso'),(5,'Accesorio');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prod_shop`
--

DROP TABLE IF EXISTS `prod_shop`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prod_shop` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) DEFAULT NULL,
  `id_prod` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prod_shop`
--

LOCK TABLES `prod_shop` WRITE;
/*!40000 ALTER TABLE `prod_shop` DISABLE KEYS */;
/*!40000 ALTER TABLE `prod_shop` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_prod` varchar(50) DEFAULT NULL,
  `detail` varchar(100) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `img_prod` varchar(50) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `id_brand` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_cat_idx` (`id_cat`),
  KEY `id_brand_idx` (`id_brand`),
  CONSTRAINT `id_brand` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `id_cat` FOREIGN KEY (`id_cat`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=100 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Clara Test','Clara Test',2991111,'',1,1),(2,'Pure Aero Plus','Team Lite 2015',13999,NULL,1,1),(3,'Pure Drive','GT 3 2012',11999,NULL,1,1),(4,'Pure Drive Plus','Lite GT 3/2 2012',13999,NULL,1,1),(5,'Pure Stike','Max 105',12999,NULL,1,1),(6,'Pure Control','Tour +',11500,NULL,1,1),(7,'Youtek Speed','MP300 Graphene',13999,NULL,1,2),(8,'Youtek Extreme','Graphene MP/PRO',13999,NULL,1,2),(9,'Youtek Instinct','S Graphene',13999,NULL,1,2),(10,'Graphene','Radical Pro',12999,NULL,1,2),(11,'XT Speed','Pro/MP/MPA',12500,NULL,1,2),(12,'XT Instict ','S/MP',10750,NULL,1,2),(13,'T-Flash','300 CES',9500,NULL,1,7),(14,'TF 40','305',8999,NULL,1,7),(15,'T-Flight 310 ','XTC',8750,NULL,1,7),(16,'T-Rebound','285',9250,NULL,1,7),(17,'T-Fit 26','Senior',8999,NULL,1,7),(18,'ATP T-Flight 300','XTC',9500,NULL,1,7),(19,'Blade 98','18 x20/S',10500,NULL,1,8),(20,'Pro Staff 97','LS',9999,NULL,1,8),(21,'Pro Lite','102',10999,NULL,1,8),(22,'Juice Pro','BLX 1012',9500,NULL,1,8),(23,'Federer Power','108/Nemesis Pro 103',11999,NULL,1,8),(24,'Grand Slam','XL',11500,NULL,1,8),(25,'RDiS','200 MP',9999,NULL,1,9),(26,'Revolution','Ace/Comp./Open',10500,NULL,1,9),(27,'Vcore Pro 98','2017',7800,NULL,1,9),(28,'Vcore Pro 100','2017',8500,NULL,1,9),(29,'Ezone 98','Radical',8000,NULL,1,9),(30,'Ezone 100','Radical Pro',9500,NULL,1,9),(31,'ATP Gold X3','Tubo individual',430,NULL,2,2),(32,'ATP Gold X12','Team',1500,NULL,2,2),(33,'ChampionShip','3 unidades',360,NULL,2,2),(34,'Core X4','Tubo individual',450,NULL,2,2),(35,'ATP Plus X6','Tubo doble',800,NULL,2,2),(36,'Radical X4','Tubo individual',600,NULL,2,2),(37,'Marathon ','Extra',820,NULL,2,5),(38,'Coache X3','Tubo individual',500,NULL,2,5),(39,'Tour','Premium',850,NULL,2,5),(40,'Pro ','Marathon',750,NULL,2,5),(41,'QST 60','Tubo individual',490,NULL,2,5),(42,'Control +','Plus',600,NULL,2,5),(43,'XPlosive \nXPlosive ','Speed, Black',690,NULL,3,3),(44,'Pro Line II','1,30 Black',590,NULL,3,3),(45,'Pro Line X','1,30 Red',590,NULL,3,3),(46,'4G','Smart',1500,NULL,3,4),(47,'Alu Power','Rough',1790,NULL,3,4),(48,'LNX ','Smart',1650,NULL,3,4),(49,'Tour Bite 16','L',450,NULL,3,6),(50,'Tour Bite 17','L',500,NULL,3,6),(51,'Hyper-G','G',350,NULL,3,6),(52,'Backpack Aero','2015',6900,NULL,4,1),(53,'Backpack French','Wimbledom 2014',7900,NULL,4,1),(54,'RH Team ','Line X9 2012',9900,NULL,4,1),(55,'RH French','Open X6',5500,NULL,4,1),(56,'RH Aero','X6 2013',6400,NULL,4,1),(57,'Pure Drive B','Aero X12',12000,NULL,4,1),(58,'Tour Team Yellow','Backpack 2014',6500,NULL,4,2),(59,'Tour Team Blue','Backpack 2014',6500,NULL,4,2),(60,'Core','Insurace ',4800,NULL,4,2),(61,'Radical ','Insurace ',5300,NULL,4,2),(62,'Tour Team Pink','Backpack 2014',6500,NULL,4,2),(63,'Basic WT','Pro',5000,NULL,4,2),(64,'Pro Endurance','10R Hector',6500,NULL,4,7),(65,'ATP Endurance ','15R',5300,NULL,4,7),(66,'Tour Endurance','12R White',4900,NULL,4,7),(67,'Tour Ergonomy','ATR 12R',4900,NULL,4,7),(68,'Air Endurence','12R',4900,NULL,4,7),(69,'T-Rebound','6R',5300,NULL,4,7),(70,'Super Tour','2 comp. x 9R',4000,NULL,4,8),(71,'Federer Team ','3R',4500,NULL,4,8),(72,'Ultra','15R',5700,NULL,4,8),(73,'RH Fed. Team','6R',5000,NULL,4,8),(74,'Tour V ','15R Pack Gyor(Gray/Orange)',7900,NULL,4,8),(75,'Advantage','6R',4700,NULL,4,8),(76,'Tour Edition Blue','6R',4500,NULL,4,9),(77,'Tour Edition Red','6R',4500,NULL,4,9),(78,'Tour Edition Black','9R',4500,NULL,4,9),(79,'Tour Edition Pink','6R',4500,NULL,4,9),(80,'Pro 9626','12R',5700,NULL,4,9),(81,'Stand Blue ','6R',4700,NULL,4,9),(82,'Antivibrador Aero','X2',240,NULL,5,1),(83,'Antivibrador Animals','X2',240,NULL,5,1),(84,'Antivibrador Custom Dump','X2',240,NULL,5,1),(85,'Antivibrador Emotisorb Subglas',NULL,200,NULL,5,8),(86,'Antivibrador Emotisorb Innocent',NULL,200,NULL,5,8),(87,'Antivibrador Emotisorb Tongue',NULL,200,NULL,5,8),(88,'Grip Skin Feel B',NULL,180,NULL,5,1),(89,'GripSyntec Pro B',NULL,180,NULL,5,1),(90,'Grip Hydrosorb Pro H','Confort',150,NULL,5,2),(91,'Grip Leather H','Confort',150,NULL,5,2),(92,'Grip Leather W',NULL,120,NULL,5,8),(93,'Grip Sublime W',NULL,120,NULL,5,8),(94,'CubreGrip Pro Team','X3',400,NULL,5,1),(95,'CubreGrip Pro Original','X12',800,NULL,5,1),(96,'CubreGrip Prestige ','Pro X3',350,NULL,5,2),(97,'Cubregrip Prime','X30',1500,NULL,5,2),(98,'CubreGrip Pro overgrip','X3',300,NULL,5,8),(99,'CubreGrip Pro Sensation','X2',200,NULL,5,8);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shop_cart`
--

DROP TABLE IF EXISTS `shop_cart`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `shop_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date_shop` date DEFAULT NULL,
  `price_shop` decimal(65,0) DEFAULT NULL,
  `id_order` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num_pedido` (`id_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shop_cart`
--

LOCK TABLES `shop_cart` WRITE;
/*!40000 ALTER TABLE `shop_cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `shop_cart` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(50) DEFAULT NULL,
  `pass_user` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `img_user` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
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

-- Dump completed on 2019-11-18 20:24:58
