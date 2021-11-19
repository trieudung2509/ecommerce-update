-- MySQL dump 10.13  Distrib 8.0.25, for Win64 (x86_64)
--
-- Host: 127.168.0.122    Database: ecom-db
-- ------------------------------------------------------
-- Server version	8.0.25

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
-- Table structure for table `attributes`
--

DROP TABLE IF EXISTS `attributes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `attributes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `attributes`
--

LOCK TABLES `attributes` WRITE;
/*!40000 ALTER TABLE `attributes` DISABLE KEYS */;
INSERT INTO `attributes` VALUES (1,'Size','2020-02-24 05:55:07','2020-02-24 05:55:07'),(2,'Fabric','2020-02-24 05:55:13','2020-02-24 05:55:13');
/*!40000 ALTER TABLE `attributes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `business_settings`
--

DROP TABLE IF EXISTS `business_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `business_settings` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `value` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `lang` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=119 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `business_settings`
--

LOCK TABLES `business_settings` WRITE;
/*!40000 ALTER TABLE `business_settings` DISABLE KEYS */;
INSERT INTO `business_settings` VALUES (1,'home_default_currency','1',NULL,'2018-10-16 01:35:52','2019-01-28 01:26:53'),(2,'system_default_currency','1',NULL,'2018-10-16 01:36:58','2020-01-26 04:22:13'),(3,'currency_format','1',NULL,'2018-10-17 03:01:59','2018-10-17 03:01:59'),(4,'symbol_format','1',NULL,'2018-10-17 03:01:59','2019-01-20 02:10:55'),(5,'no_of_decimals','2',NULL,'2018-10-17 03:01:59','2020-03-04 00:57:16'),(6,'product_activation','1',NULL,'2018-10-28 01:38:37','2019-02-04 01:11:41'),(7,'vendor_system_activation','1',NULL,'2018-10-28 07:44:16','2019-02-04 01:11:38'),(8,'show_vendors','1',NULL,'2018-10-28 07:44:47','2019-02-04 01:11:13'),(9,'paypal_payment','0',NULL,'2018-10-28 07:45:16','2019-01-31 05:09:10'),(10,'stripe_payment','0',NULL,'2018-10-28 07:45:47','2018-11-14 01:51:51'),(11,'cash_payment','1',NULL,'2018-10-28 07:46:05','2019-01-24 03:40:18'),(12,'payumoney_payment','0',NULL,'2018-10-28 07:46:27','2019-03-05 05:41:36'),(13,'best_selling','1',NULL,'2018-12-24 08:13:44','2019-02-14 05:29:13'),(14,'paypal_sandbox','0',NULL,'2019-01-16 12:44:18','2019-01-16 12:44:18'),(15,'sslcommerz_sandbox','1',NULL,'2019-01-16 12:44:18','2019-03-14 00:07:26'),(16,'sslcommerz_payment','0',NULL,'2019-01-24 09:39:07','2019-01-29 06:13:46'),(17,'vendor_commission','20',NULL,'2019-01-31 06:18:04','2019-04-13 06:49:26'),(18,'verification_form','[{\"type\":\"text\",\"label\":\"Your name\"},{\"type\":\"text\",\"label\":\"Shop name\"},{\"type\":\"text\",\"label\":\"Email\"},{\"type\":\"text\",\"label\":\"License No\"},{\"type\":\"text\",\"label\":\"Full Address\"},{\"type\":\"text\",\"label\":\"Phone Number\"},{\"type\":\"file\",\"label\":\"Tax Papers\"}]',NULL,'2019-02-03 11:36:58','2019-02-16 06:14:42'),(19,'google_analytics','0',NULL,'2019-02-06 12:22:35','2019-02-06 12:22:35'),(20,'facebook_login','0',NULL,'2019-02-07 12:51:59','2019-02-08 19:41:15'),(21,'google_login','0',NULL,'2019-02-07 12:52:10','2019-02-08 19:41:14'),(22,'twitter_login','0',NULL,'2019-02-07 12:52:20','2019-02-08 02:32:56'),(23,'payumoney_payment','1',NULL,'2019-03-05 11:38:17','2019-03-05 11:38:17'),(24,'payumoney_sandbox','1',NULL,'2019-03-05 11:38:17','2019-03-05 05:39:18'),(36,'facebook_chat','0',NULL,'2019-04-15 11:45:04','2019-04-15 11:45:04'),(37,'email_verification','0',NULL,'2019-04-30 07:30:07','2019-04-30 07:30:07'),(38,'wallet_system','0',NULL,'2019-05-19 08:05:44','2019-05-19 02:11:57'),(39,'coupon_system','0',NULL,'2019-06-11 09:46:18','2019-06-11 09:46:18'),(40,'current_version','5.4',NULL,'2019-06-11 09:46:18','2019-06-11 09:46:18'),(41,'instamojo_payment','0',NULL,'2019-07-06 09:58:03','2019-07-06 09:58:03'),(42,'instamojo_sandbox','1',NULL,'2019-07-06 09:58:43','2019-07-06 09:58:43'),(43,'razorpay','0',NULL,'2019-07-06 09:58:43','2019-07-06 09:58:43'),(44,'paystack','0',NULL,'2019-07-21 13:00:38','2019-07-21 13:00:38'),(45,'pickup_point','0',NULL,'2019-10-17 11:50:39','2019-10-17 11:50:39'),(46,'maintenance_mode','0',NULL,'2019-10-17 11:51:04','2019-10-17 11:51:04'),(47,'voguepay','0',NULL,'2019-10-17 11:51:24','2019-10-17 11:51:24'),(48,'voguepay_sandbox','0',NULL,'2019-10-17 11:51:38','2019-10-17 11:51:38'),(50,'category_wise_commission','0',NULL,'2020-01-21 07:22:47','2020-01-21 07:22:47'),(51,'conversation_system','1',NULL,'2020-01-21 07:23:21','2020-01-21 07:23:21'),(52,'guest_checkout_active','1',NULL,'2020-01-22 07:36:38','2020-01-22 07:36:38'),(53,'facebook_pixel','0',NULL,'2020-01-22 11:43:58','2020-01-22 11:43:58'),(55,'classified_product','0',NULL,'2020-05-13 13:01:05','2020-05-13 13:01:05'),(56,'pos_activation_for_seller','1',NULL,'2020-06-11 09:45:02','2020-06-11 09:45:02'),(57,'shipping_type','product_wise_shipping',NULL,'2020-07-01 13:49:56','2020-07-01 13:49:56'),(58,'flat_rate_shipping_cost','0',NULL,'2020-07-01 13:49:56','2020-07-01 13:49:56'),(59,'shipping_cost_admin','0',NULL,'2020-07-01 13:49:56','2020-07-01 13:49:56'),(60,'payhere_sandbox','0',NULL,'2020-07-30 18:23:53','2020-07-30 18:23:53'),(61,'payhere','0',NULL,'2020-07-30 18:23:53','2020-07-30 18:23:53'),(62,'google_recaptcha','0',NULL,'2020-08-17 07:13:37','2020-08-17 07:13:37'),(63,'ngenius','0',NULL,'2020-09-22 10:58:21','2020-09-22 10:58:21'),(64,'header_logo',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(65,'show_language_switcher','on',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(66,'show_currency_switcher','on',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(67,'header_stikcy','on',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(68,'footer_logo',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(69,'about_us_description',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(70,'contact_address',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(71,'contact_phone',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(72,'contact_email',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(73,'widget_one_labels',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(74,'widget_one_links',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(75,'widget_one',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(76,'frontend_copyright_text',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(77,'show_social_links',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(78,'facebook_link',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(79,'twitter_link',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(80,'instagram_link',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(81,'youtube_link',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(82,'linkedin_link',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(83,'payment_method_images',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(84,'home_slider_images','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(85,'home_slider_links','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(86,'home_banner1_images','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(87,'home_banner1_links','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(88,'home_banner2_images','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(89,'home_banner2_links','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(90,'home_categories','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(91,'top10_categories','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(92,'top10_brands','[]',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(93,'website_name',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(94,'site_motto',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(95,'site_icon',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(96,'base_color','#e62e04',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(97,'base_hov_color','#e62e04',NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(98,'meta_title',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(99,'meta_description',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(100,'meta_keywords',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(101,'meta_image',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(102,'site_name',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(103,'system_logo_white',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(104,'system_logo_black',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(105,'timezone',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(106,'admin_login_background',NULL,NULL,'2020-11-16 07:26:36','2020-11-16 07:26:36'),(107,'iyzico_sandbox','1',NULL,'2020-12-30 16:45:56','2020-12-30 16:45:56'),(108,'iyzico','1',NULL,'2020-12-30 16:45:56','2020-12-30 16:45:56'),(109,'decimal_separator','1',NULL,'2020-12-30 16:45:56','2020-12-30 16:45:56'),(110,'nagad','0',NULL,'2021-01-22 10:30:03','2021-01-22 10:30:03'),(111,'bkash','0',NULL,'2021-01-22 10:30:03','2021-01-22 10:30:03'),(112,'bkash_sandbox','1',NULL,'2021-01-22 10:30:03','2021-01-22 10:30:03'),(113,'header_menu_labels','[\"Home\",\"Flash Sale\",\"Blogs\",\"All Brands\",\"All Categories\"]',NULL,'2021-02-16 02:43:11','2021-02-16 02:52:18'),(114,'header_menu_links','[\"http:\\/\\/domain.com\",\"http:\\/\\/domain.com\\/flash-deals\",\"http:\\/\\/domain.com\\/blog\",\"http:\\/\\/domain.com\\/brands\",\"http:\\/\\/domain.com\\/categories\"]',NULL,'2021-02-16 02:43:11','2021-02-18 01:20:04'),(115,'proxypay','1',NULL,'2021-06-20 11:25:42','2021-06-20 11:25:42'),(116,'proxypay_sandbox','1',NULL,'2021-06-20 11:25:42','2021-06-20 11:25:42'),(117,'google_map','0',NULL,'2021-07-27 15:49:39','2021-07-27 15:49:39'),(118,'google_firebase','0',NULL,'2021-07-27 15:49:39','2021-07-27 15:49:39');
/*!40000 ALTER TABLE `business_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `countries` (
  `id` int NOT NULL AUTO_INCREMENT,
  `code` varchar(2) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `status` int NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=297 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
INSERT INTO `countries` VALUES (1,'AF','Afghanistan',1,NULL,NULL),(2,'AL','Albania',1,NULL,NULL),(3,'DZ','Algeria',1,NULL,NULL),(4,'DS','American Samoa',1,NULL,NULL),(5,'AD','Andorra',1,NULL,NULL),(6,'AO','Angola',1,NULL,NULL),(7,'AI','Anguilla',1,NULL,NULL),(8,'AQ','Antarctica',1,NULL,NULL),(9,'AG','Antigua and Barbuda',1,NULL,NULL),(10,'AR','Argentina',1,NULL,NULL),(11,'AM','Armenia',1,NULL,NULL),(12,'AW','Aruba',1,NULL,NULL),(13,'AU','Australia',1,NULL,NULL),(14,'AT','Austria',1,NULL,NULL),(15,'AZ','Azerbaijan',1,NULL,NULL),(16,'BS','Bahamas',1,NULL,NULL),(17,'BH','Bahrain',1,NULL,NULL),(18,'BD','Bangladesh',1,NULL,NULL),(19,'BB','Barbados',1,NULL,NULL),(20,'BY','Belarus',1,NULL,NULL),(21,'BE','Belgium',1,NULL,NULL),(22,'BZ','Belize',1,NULL,NULL),(23,'BJ','Benin',1,NULL,NULL),(24,'BM','Bermuda',1,NULL,NULL),(25,'BT','Bhutan',1,NULL,NULL),(26,'BO','Bolivia',1,NULL,NULL),(27,'BA','Bosnia and Herzegovina',1,NULL,NULL),(28,'BW','Botswana',1,NULL,NULL),(29,'BV','Bouvet Island',1,NULL,NULL),(30,'BR','Brazil',1,NULL,NULL),(31,'IO','British Indian Ocean Territory',1,NULL,NULL),(32,'BN','Brunei Darussalam',1,NULL,NULL),(33,'BG','Bulgaria',1,NULL,NULL),(34,'BF','Burkina Faso',1,NULL,NULL),(35,'BI','Burundi',1,NULL,NULL),(36,'KH','Cambodia',1,NULL,NULL),(37,'CM','Cameroon',1,NULL,NULL),(38,'CA','Canada',1,NULL,NULL),(39,'CV','Cape Verde',1,NULL,NULL),(40,'KY','Cayman Islands',1,NULL,NULL),(41,'CF','Central African Republic',1,NULL,NULL),(42,'TD','Chad',1,NULL,NULL),(43,'CL','Chile',1,NULL,NULL),(44,'CN','China',1,NULL,NULL),(45,'CX','Christmas Island',1,NULL,NULL),(46,'CC','Cocos (Keeling) Islands',1,NULL,NULL),(47,'CO','Colombia',1,NULL,NULL),(48,'KM','Comoros',1,NULL,NULL),(49,'CG','Congo',1,NULL,NULL),(50,'CK','Cook Islands',1,NULL,NULL),(51,'CR','Costa Rica',1,NULL,NULL),(52,'HR','Croatia (Hrvatska)',1,NULL,NULL),(53,'CU','Cuba',1,NULL,NULL),(54,'CY','Cyprus',1,NULL,NULL),(55,'CZ','Czech Republic',1,NULL,NULL),(56,'DK','Denmark',1,NULL,NULL),(57,'DJ','Djibouti',1,NULL,NULL),(58,'DM','Dominica',1,NULL,NULL),(59,'DO','Dominican Republic',1,NULL,NULL),(60,'TP','East Timor',1,NULL,NULL),(61,'EC','Ecuador',1,NULL,NULL),(62,'EG','Egypt',1,NULL,NULL),(63,'SV','El Salvador',1,NULL,NULL),(64,'GQ','Equatorial Guinea',1,NULL,NULL),(65,'ER','Eritrea',1,NULL,NULL),(66,'EE','Estonia',1,NULL,NULL),(67,'ET','Ethiopia',1,NULL,NULL),(68,'FK','Falkland Islands (Malvinas)',1,NULL,NULL),(69,'FO','Faroe Islands',1,NULL,NULL),(70,'FJ','Fiji',1,NULL,NULL),(71,'FI','Finland',1,NULL,NULL),(72,'FR','France',1,NULL,NULL),(73,'FX','France, Metropolitan',1,NULL,NULL),(74,'GF','French Guiana',1,NULL,NULL),(75,'PF','French Polynesia',1,NULL,NULL),(76,'TF','French Southern Territories',1,NULL,NULL),(77,'GA','Gabon',1,NULL,NULL),(78,'GM','Gambia',1,NULL,NULL),(79,'GE','Georgia',1,NULL,NULL),(80,'DE','Germany',1,NULL,NULL),(81,'GH','Ghana',1,NULL,NULL),(82,'GI','Gibraltar',1,NULL,NULL),(83,'GK','Guernsey',1,NULL,NULL),(84,'GR','Greece',1,NULL,NULL),(85,'GL','Greenland',1,NULL,NULL),(86,'GD','Grenada',1,NULL,NULL),(87,'GP','Guadeloupe',1,NULL,NULL),(88,'GU','Guam',1,NULL,NULL),(89,'GT','Guatemala',1,NULL,NULL),(90,'GN','Guinea',1,NULL,NULL),(91,'GW','Guinea-Bissau',1,NULL,NULL),(92,'GY','Guyana',1,NULL,NULL),(93,'HT','Haiti',1,NULL,NULL),(94,'HM','Heard and Mc Donald Islands',1,NULL,NULL),(95,'HN','Honduras',1,NULL,NULL),(96,'HK','Hong Kong',1,NULL,NULL),(97,'HU','Hungary',1,NULL,NULL),(98,'IS','Iceland',1,NULL,NULL),(99,'IN','India',1,NULL,NULL),(100,'IM','Isle of Man',1,NULL,NULL),(101,'ID','Indonesia',1,NULL,NULL),(102,'IR','Iran (Islamic Republic of)',1,NULL,NULL),(103,'IQ','Iraq',1,NULL,NULL),(104,'IE','Ireland',1,NULL,NULL),(105,'IL','Israel',1,NULL,NULL),(106,'IT','Italy',1,NULL,NULL),(107,'CI','Ivory Coast',1,NULL,NULL),(108,'JE','Jersey',1,NULL,NULL),(109,'JM','Jamaica',1,NULL,NULL),(110,'JP','Japan',1,NULL,NULL),(111,'JO','Jordan',1,NULL,NULL),(112,'KZ','Kazakhstan',1,NULL,NULL),(113,'KE','Kenya',1,NULL,NULL),(114,'KI','Kiribati',1,NULL,NULL),(115,'KP','Korea, Democratic People\'s Republic of',1,NULL,NULL),(116,'KR','Korea, Republic of',1,NULL,NULL),(117,'XK','Kosovo',1,NULL,NULL),(118,'KW','Kuwait',1,NULL,NULL),(119,'KG','Kyrgyzstan',1,NULL,NULL),(120,'LA','Lao People\'s Democratic Republic',1,NULL,NULL),(121,'LV','Latvia',1,NULL,NULL),(122,'LB','Lebanon',1,NULL,NULL),(123,'LS','Lesotho',1,NULL,NULL),(124,'LR','Liberia',1,NULL,NULL),(125,'LY','Libyan Arab Jamahiriya',1,NULL,NULL),(126,'LI','Liechtenstein',1,NULL,NULL),(127,'LT','Lithuania',1,NULL,NULL),(128,'LU','Luxembourg',1,NULL,NULL),(129,'MO','Macau',1,NULL,NULL),(130,'MK','Macedonia',1,NULL,NULL),(131,'MG','Madagascar',1,NULL,NULL),(132,'MW','Malawi',1,NULL,NULL),(133,'MY','Malaysia',1,NULL,NULL),(134,'MV','Maldives',1,NULL,NULL),(135,'ML','Mali',1,NULL,NULL),(136,'MT','Malta',1,NULL,NULL),(137,'MH','Marshall Islands',1,NULL,NULL),(138,'MQ','Martinique',1,NULL,NULL),(139,'MR','Mauritania',1,NULL,NULL),(140,'MU','Mauritius',1,NULL,NULL),(141,'TY','Mayotte',1,NULL,NULL),(142,'MX','Mexico',1,NULL,NULL),(143,'FM','Micronesia, Federated States of',1,NULL,NULL),(144,'MD','Moldova, Republic of',1,NULL,NULL),(145,'MC','Monaco',1,NULL,NULL),(146,'MN','Mongolia',1,NULL,NULL),(147,'ME','Montenegro',1,NULL,NULL),(148,'MS','Montserrat',1,NULL,NULL),(149,'MA','Morocco',1,NULL,NULL),(150,'MZ','Mozambique',1,NULL,NULL),(151,'MM','Myanmar',1,NULL,NULL),(152,'NA','Namibia',1,NULL,NULL),(153,'NR','Nauru',1,NULL,NULL),(154,'NP','Nepal',1,NULL,NULL),(155,'NL','Netherlands',1,NULL,NULL),(156,'AN','Netherlands Antilles',1,NULL,NULL),(157,'NC','New Caledonia',1,NULL,NULL),(158,'NZ','New Zealand',1,NULL,NULL),(159,'NI','Nicaragua',1,NULL,NULL),(160,'NE','Niger',1,NULL,NULL),(161,'NG','Nigeria',1,NULL,NULL),(162,'NU','Niue',1,NULL,NULL),(163,'NF','Norfolk Island',1,NULL,NULL),(164,'MP','Northern Mariana Islands',1,NULL,NULL),(165,'NO','Norway',1,NULL,NULL),(166,'OM','Oman',1,NULL,NULL),(167,'PK','Pakistan',1,NULL,NULL),(168,'PW','Palau',1,NULL,NULL),(169,'PS','Palestine',1,NULL,NULL),(170,'PA','Panama',1,NULL,NULL),(171,'PG','Papua New Guinea',1,NULL,NULL),(172,'PY','Paraguay',1,NULL,NULL),(173,'PE','Peru',1,NULL,NULL),(174,'PH','Philippines',1,NULL,NULL),(175,'PN','Pitcairn',1,NULL,NULL),(176,'PL','Poland',1,NULL,NULL),(177,'PT','Portugal',1,NULL,NULL),(178,'PR','Puerto Rico',1,NULL,NULL),(179,'QA','Qatar',1,NULL,NULL),(180,'RE','Reunion',1,NULL,NULL),(181,'RO','Romania',1,NULL,NULL),(182,'RU','Russian Federation',1,NULL,NULL),(183,'RW','Rwanda',1,NULL,NULL),(184,'KN','Saint Kitts and Nevis',1,NULL,NULL),(185,'LC','Saint Lucia',1,NULL,NULL),(186,'VC','Saint Vincent and the Grenadines',1,NULL,NULL),(187,'WS','Samoa',1,NULL,NULL),(188,'SM','San Marino',1,NULL,NULL),(189,'ST','Sao Tome and Principe',1,NULL,NULL),(190,'SA','Saudi Arabia',1,NULL,NULL),(191,'SN','Senegal',1,NULL,NULL),(192,'RS','Serbia',1,NULL,NULL),(193,'SC','Seychelles',1,NULL,NULL),(194,'SL','Sierra Leone',1,NULL,NULL),(195,'SG','Singapore',1,NULL,NULL),(196,'SK','Slovakia',1,NULL,NULL),(197,'SI','Slovenia',1,NULL,NULL),(198,'SB','Solomon Islands',1,NULL,NULL),(199,'SO','Somalia',1,NULL,NULL),(200,'ZA','South Africa',1,NULL,NULL),(201,'GS','South Georgia South Sandwich Islands',1,NULL,NULL),(202,'SS','South Sudan',1,NULL,NULL),(203,'ES','Spain',1,NULL,NULL),(204,'LK','Sri Lanka',1,NULL,NULL),(205,'SH','St. Helena',1,NULL,NULL),(206,'PM','St. Pierre and Miquelon',1,NULL,NULL),(207,'SD','Sudan',1,NULL,NULL),(208,'SR','Suriname',1,NULL,NULL),(209,'SJ','Svalbard and Jan Mayen Islands',1,NULL,NULL),(210,'SZ','Swaziland',1,NULL,NULL),(211,'SE','Sweden',1,NULL,NULL),(212,'CH','Switzerland',1,NULL,NULL),(213,'SY','Syrian Arab Republic',1,NULL,NULL),(214,'TW','Taiwan',1,NULL,NULL),(215,'TJ','Tajikistan',1,NULL,NULL),(216,'TZ','Tanzania, United Republic of',1,NULL,NULL),(217,'TH','Thailand',1,NULL,NULL),(218,'TG','Togo',1,NULL,NULL),(219,'TK','Tokelau',1,NULL,NULL),(220,'TO','Tonga',1,NULL,NULL),(221,'TT','Trinidad and Tobago',1,NULL,NULL),(222,'TN','Tunisia',1,NULL,NULL),(223,'TR','Turkey',1,NULL,NULL),(224,'TM','Turkmenistan',1,NULL,NULL),(225,'TC','Turks and Caicos Islands',1,NULL,NULL),(226,'TV','Tuvalu',1,NULL,NULL),(227,'UG','Uganda',1,NULL,NULL),(228,'UA','Ukraine',1,NULL,NULL),(229,'AE','United Arab Emirates',1,NULL,NULL),(230,'GB','United Kingdom',1,NULL,NULL),(231,'US','United States',1,NULL,NULL),(232,'UM','United States minor outlying islands',1,NULL,NULL),(233,'UY','Uruguay',1,NULL,NULL),(234,'UZ','Uzbekistan',1,NULL,NULL),(235,'VU','Vanuatu',1,NULL,NULL),(236,'VA','Vatican City State',1,NULL,NULL),(237,'VE','Venezuela',1,NULL,NULL),(238,'VN','Vietnam',1,NULL,NULL),(239,'VG','Virgin Islands (British)',1,NULL,NULL),(240,'VI','Virgin Islands (U.S.)',1,NULL,NULL),(241,'WF','Wallis and Futuna Islands',1,NULL,NULL),(242,'EH','Western Sahara',1,NULL,NULL),(243,'YE','Yemen',1,NULL,NULL),(244,'ZR','Zaire',1,NULL,NULL),(245,'ZM','Zambia',1,NULL,NULL),(246,'ZW','Zimbabwe',1,NULL,NULL);
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `currencies`
--

DROP TABLE IF EXISTS `currencies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `currencies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `symbol` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `exchange_rate` double(10,5) NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `code` varchar(20) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `currencies`
--

LOCK TABLES `currencies` WRITE;
/*!40000 ALTER TABLE `currencies` DISABLE KEYS */;
INSERT INTO `currencies` VALUES (1,'U.S. Dollar','$',1.00000,1,'USD','2018-10-09 11:35:08','2018-10-17 05:50:52'),(2,'Australian Dollar','$',1.28000,1,'AUD','2018-10-09 11:35:08','2019-02-04 05:51:55'),(5,'Brazilian Real','R$',3.25000,1,'BRL','2018-10-09 11:35:08','2018-10-17 05:51:00'),(6,'Canadian Dollar','$',1.27000,1,'CAD','2018-10-09 11:35:08','2018-10-09 11:35:08'),(7,'Czech Koruna','Kč',20.65000,1,'CZK','2018-10-09 11:35:08','2018-10-09 11:35:08'),(8,'Danish Krone','kr',6.05000,1,'DKK','2018-10-09 11:35:08','2018-10-09 11:35:08'),(9,'Euro','€',0.85000,1,'EUR','2018-10-09 11:35:08','2018-10-09 11:35:08'),(10,'Hong Kong Dollar','$',7.83000,1,'HKD','2018-10-09 11:35:08','2018-10-09 11:35:08'),(11,'Hungarian Forint','Ft',255.24000,1,'HUF','2018-10-09 11:35:08','2018-10-09 11:35:08'),(12,'Israeli New Sheqel','₪',3.48000,1,'ILS','2018-10-09 11:35:08','2018-10-09 11:35:08'),(13,'Japanese Yen','¥',107.12000,1,'JPY','2018-10-09 11:35:08','2018-10-09 11:35:08'),(14,'Malaysian Ringgit','RM',3.91000,1,'MYR','2018-10-09 11:35:08','2018-10-09 11:35:08'),(15,'Mexican Peso','$',18.72000,1,'MXN','2018-10-09 11:35:08','2018-10-09 11:35:08'),(16,'Norwegian Krone','kr',7.83000,1,'NOK','2018-10-09 11:35:08','2018-10-09 11:35:08'),(17,'New Zealand Dollar','$',1.38000,1,'NZD','2018-10-09 11:35:08','2018-10-09 11:35:08'),(18,'Philippine Peso','₱',52.26000,1,'PHP','2018-10-09 11:35:08','2018-10-09 11:35:08'),(19,'Polish Zloty','zł',3.39000,1,'PLN','2018-10-09 11:35:08','2018-10-09 11:35:08'),(20,'Pound Sterling','£',0.72000,1,'GBP','2018-10-09 11:35:08','2018-10-09 11:35:08'),(21,'Russian Ruble','руб',55.93000,1,'RUB','2018-10-09 11:35:08','2018-10-09 11:35:08'),(22,'Singapore Dollar','$',1.32000,1,'SGD','2018-10-09 11:35:08','2018-10-09 11:35:08'),(23,'Swedish Krona','kr',8.19000,1,'SEK','2018-10-09 11:35:08','2018-10-09 11:35:08'),(24,'Swiss Franc','CHF',0.94000,1,'CHF','2018-10-09 11:35:08','2018-10-09 11:35:08'),(26,'Thai Baht','฿',31.39000,1,'THB','2018-10-09 11:35:08','2018-10-09 11:35:08'),(27,'Taka','৳',84.00000,1,'BDT','2018-10-09 11:35:08','2018-12-02 05:16:13'),(28,'Indian Rupee','Rs',68.45000,1,'Rupee','2019-07-07 10:33:46','2019-07-07 10:33:46');
/*!40000 ALTER TABLE `currencies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `languages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `code` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `rtl` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (1,'English','en',0,'2019-01-20 12:13:20','2019-01-20 12:13:20'),(3,'Bangla','bd',0,'2019-02-17 06:35:37','2019-02-18 06:49:51'),(4,'Arabic','sa',1,'2019-04-28 18:34:12','2019-04-28 18:34:12');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` int NOT NULL AUTO_INCREMENT,
  `type` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `meta_title` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `meta_description` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `keywords` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `meta_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'home_page','Home Page','home',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:13:20','2020-11-04 10:13:20'),(2,'seller_policy_page','Seller Policy Pages','sellerpolicy',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:14:41','2020-11-04 12:19:30'),(3,'return_policy_page','Return Policy Page','returnpolicy',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:14:41','2020-11-04 10:14:41'),(4,'support_policy_page','Support Policy Page','supportpolicy',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:14:59','2020-11-04 10:14:59'),(5,'terms_conditions_page','Term Conditions Page','terms',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:15:29','2020-11-04 10:15:29'),(6,'privacy_policy_page','Privacy Policy Page','privacypolicy',NULL,NULL,NULL,NULL,NULL,'2020-11-04 10:15:55','2020-11-04 10:15:55');
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `policies`
--

DROP TABLE IF EXISTS `policies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `policies` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(35) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `policies`
--

LOCK TABLES `policies` WRITE;
/*!40000 ALTER TABLE `policies` DISABLE KEYS */;
INSERT INTO `policies` VALUES (1,'support_policy',NULL,'2019-10-29 12:54:45','2019-01-22 05:13:15'),(2,'return_policy',NULL,'2019-10-29 12:54:47','2019-01-24 05:40:11'),(4,'seller_policy',NULL,'2019-10-29 12:54:49','2019-02-04 17:50:15'),(5,'terms',NULL,'2019-10-29 12:54:51','2019-10-28 18:00:00'),(6,'privacy_policy',NULL,'2019-10-29 12:54:54','2019-10-28 18:00:00');
/*!40000 ALTER TABLE `policies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `permissions` mediumtext CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb3 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'Manager','[\"1\",\"2\",\"4\"]','2018-10-10 04:39:47','2018-10-10 04:51:37'),(2,'Accountant','[\"2\",\"3\"]','2018-10-10 04:52:09','2018-10-10 04:52:09');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-11-19 19:49:01
