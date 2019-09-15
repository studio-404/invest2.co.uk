-- MySQL dump 10.13  Distrib 5.7.27, for Linux (x86_64)
--
-- Host: localhost    Database: buu
-- ------------------------------------------------------
-- Server version	5.7.27-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `names` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ge',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=129 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='not used';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cities`
--

LOCK TABLES `cities` WRITE;
/*!40000 ALTER TABLE `cities` DISABLE KEYS */;
INSERT INTO `cities` VALUES (1,'თბილისი','ge'),(2,'ბათუმი','ge'),(3,'ქუთაისი','ge'),(4,'აბასთუმანი','ge'),(5,'აბაშა','ge'),(6,'აგარა','ge'),(7,'ადიგენი','ge'),(8,'ამბროლაური','ge'),(9,'ანაკლია','ge'),(10,'ანანური','ge'),(11,'ასპინძა','ge'),(12,'ახალგორი','ge'),(13,'ახალდაბა','ge'),(14,'ახალქალაქი','ge'),(15,'ახალციხე','ge'),(16,'ახმეტა','ge'),(17,'ბაზალეთი','ge'),(18,'ბაკურიანი','ge'),(19,'ბაღდათი','ge'),(20,'ბახმარო','ge'),(21,'ბოლნისი','ge'),(22,'ბორჯომი','ge'),(23,'ბულაჩაური','ge'),(24,'გაგრა','ge'),(25,'გალი','ge'),(26,'გარდაბანი','ge'),(27,'გონიო','ge'),(28,'გორი','ge'),(29,'გრიგოლეთი','ge'),(30,'გუდაუთა','ge'),(31,'გუდაური','ge'),(32,'გულრიფში','ge'),(33,'გურჯაანი','ge'),(34,'დედოფლისწყარო','ge'),(35,'დმანისი','ge'),(36,'დუშეთი','ge'),(37,'ვაზისუბანი','ge'),(38,'ვანი','ge'),(39,'ზედაზენი','ge'),(40,'ზესტაფონი','ge'),(41,'ზუგდიდი','ge'),(42,'თეთრიწყარო','ge'),(43,'თელავი','ge'),(44,'თერჯოლა','ge'),(45,'თიანეთი','ge'),(46,'იგოეთი','ge'),(47,'კარდენახი','ge'),(48,'კასპი','ge'),(49,'კვარიათი','ge'),(50,'კოდორი','ge'),(51,'ლაგოდეხი','ge'),(52,'ლანჩხუთი','ge'),(53,'ლენტეხი','ge'),(54,'ლიკანი','ge'),(55,'მანგლისი','ge'),(56,'მარნეული','ge'),(57,'მარტვილი','ge'),(58,'მარტყოფი','ge'),(59,'მახინჯაური','ge'),(60,'მესტია','ge'),(61,'მისაქციელი','ge'),(62,'მუხრანი','ge'),(63,'მცხეთა','ge'),(64,'ნატანები','ge'),(65,'ნატახტარი','ge'),(66,'ნინოწმინდა','ge'),(67,'ნუნისი','ge'),(68,'ოზურგეთი','ge'),(69,'ონი','ge'),(70,'ოჩამჩირე','ge'),(71,'პანკისი','ge'),(72,'ჟინვალი','ge'),(73,'რუსთავი','ge'),(74,'საგარეჯო','ge'),(75,'საგურამო','ge'),(76,'საირმე','ge'),(77,'სამტრედია','ge'),(78,'სართიჭალა','ge'),(79,'სარფი','ge'),(80,'საჩხერე','ge'),(81,'სენაკი','ge'),(82,'სიონი','ge'),(83,'სიღნაღი','ge'),(84,'სოხუმი','ge'),(85,'სურამი','ge'),(86,'სუფსა','ge'),(87,'ტყვარჩელი','ge'),(88,'ტყიბული','ge'),(89,'ურეკი','ge'),(90,'ფასანაური','ge'),(91,'ფოთი','ge'),(92,'ქარელი','ge'),(93,'ქედა','ge'),(94,'ქობულეთი','ge'),(95,'ქსანი','ge'),(96,'ყაზბეგი','ge'),(97,'ყვარელი','ge'),(98,'შატილი','ge'),(99,'შეკვეთილი','ge'),(100,'შიომღვიმე','ge'),(101,'შუახევი','ge'),(102,'ჩაქვი','ge'),(103,'ჩოხატაური','ge'),(104,'ჩხოროწყუ','ge'),(105,'ცაგერი','ge'),(106,'ცემი','ge'),(107,'ციხისძირი','ge'),(108,'ცხვარიჭამია','ge'),(109,'ცხინვალი','ge'),(110,'წალენჯიხა','ge'),(111,'წალკა','ge'),(112,'წაღვერი','ge'),(113,'წეროვანი','ge'),(114,'წილკანი','ge'),(115,'წინანდალი','ge'),(116,'წიწამური','ge'),(117,'წნორი','ge'),(118,'წოდორეთი','ge'),(119,'წყალტუბო','ge'),(120,'ჭიათურა','ge'),(121,'ხარაგაული','ge'),(122,'ხაშური','ge'),(123,'ხელვაჩაური','ge'),(124,'ხობი','ge'),(125,'ხონი','ge'),(126,'ხულო','ge'),(127,'ჯავა','ge'),(128,'bob','ge');
/*!40000 ALTER TABLE `cities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `commentId` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `organization` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `read` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (13,1555084374,'82.211.130.43',1,'ლაშა','nope','gulelauri14@gmail.com','მარჯობათ ვარ სტუდენტი ვწავლობ გერმანულს და მაინტერესებ სამუშაო ვიზით თუ შეილებ ფრაკფურტში მუშაობის დაწყება. ასევე მაინტერესბს როგორ ხდება სტუდენტის საცხოვრებლით უზრუნველყოფა და კონკრეტულად რა კრიტერიუმებს უნდა აკმაყოფილებდეს სტუდენტი?','ge',0,0),(10,1544257422,'94.240.245.46',1,'','nope','giorgigvazava87@gmail.com','','ge',1,1),(11,1544257528,'94.240.245.46',1,'გიორგი','nope','giorgigvazava87@gmail.com','','ge',1,1),(12,1544257626,'94.240.245.46',1,'გიორგი','nope','giorgigvazava87@gmail.com','სატესტო','ge',1,1),(9,1544257058,'94.240.245.46',1,'','nope','giorgigvazava87@gmail.com','','ge',1,1);
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `countries` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `countries`
--

LOCK TABLES `countries` WRITE;
/*!40000 ALTER TABLE `countries` DISABLE KEYS */;
/*!40000 ALTER TABLE `countries` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `favourites`
--

DROP TABLE IF EXISTS `favourites`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `favourites` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tour_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `favourites`
--

LOCK TABLES `favourites` WRITE;
/*!40000 ALTER TABLE `favourites` DISABLE KEYS */;
/*!40000 ALTER TABLE `favourites` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `file_system`
--

DROP TABLE IF EXISTS `file_system`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `file_system` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` int(11) NOT NULL,
  `idx` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `random` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `page_id` int(11) NOT NULL,
  `file_path` text COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'page',
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `file_path` (`file_path`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `file_system`
--

LOCK TABLES `file_system` WRITE;
/*!40000 ALTER TABLE `file_system` DISABLE KEYS */;
/*!40000 ALTER TABLE `file_system` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `georgia`
--

DROP TABLE IF EXISTS `georgia`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `georgia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'ge',
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `georgia`
--

LOCK TABLES `georgia` WRITE;
/*!40000 ALTER TABLE `georgia` DISABLE KEYS */;
/*!40000 ALTER TABLE `georgia` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `languages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `languages`
--

LOCK TABLES `languages` WRITE;
/*!40000 ALTER TABLE `languages` DISABLE KEYS */;
INSERT INTO `languages` VALUES (2,'en','English','/public/img/en.jpg'),(3,'ge','Georgian','/public/img/ge.jpg'),(4,'de','Deutsch','/public/img/de.jpg');
/*!40000 ALTER TABLE `languages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `navigation`
--

DROP TABLE IF EXISTS `navigation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `navigation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `nav_type` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `text` longtext COLLATE utf8_unicode_ci NOT NULL,
  `slug` text COLLATE utf8_unicode_ci NOT NULL,
  `usefull_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `cssclass` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `redirect` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'false',
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `position` int(11) NOT NULL,
  `visibility` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `text` (`text`),
  FULLTEXT KEY `description` (`description`)
) ENGINE=MyISAM AUTO_INCREMENT=348 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `navigation`
--

LOCK TABLES `navigation` WRITE;
/*!40000 ALTER TABLE `navigation` DISABLE KEYS */;
INSERT INTO `navigation` VALUES (346,1,0,1568452896,0,'plugin','მთავარი გვერდი','<p>Home page</p>','<p>Home page</p>','home','false','','','ge',1,0,0),(345,1,0,1568452896,0,'plugin','Home page','<p>Home page</p>','<p>Home page</p>','home','false','','','en',1,0,0),(347,1,0,1568452896,0,'plugin','Home page','<p>Home page</p>','<p>Home page</p>','home','false','','','de',1,0,0);
/*!40000 ALTER TABLE `navigation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `newsletter`
--

LOCK TABLES `newsletter` WRITE;
/*!40000 ALTER TABLE `newsletter` DISABLE KEYS */;
INSERT INTO `newsletter` VALUES (1,'94.240.219.60','giorgigvazava87@gmail.com'),(2,'94.240.245.46','sample@email.tst');
/*!40000 ALTER TABLE `newsletter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `photos`
--

DROP TABLE IF EXISTS `photos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `photos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent` int(11) NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=819 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `photos`
--

LOCK TABLES `photos` WRITE;
/*!40000 ALTER TABLE `photos` DISABLE KEYS */;
/*!40000 ALTER TABLE `photos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `coverphoto` text COLLATE utf8_unicode_ci,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `destination` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `advanture_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `checkinout` text COLLATE utf8_unicode_ci NOT NULL,
  `arrival` date NOT NULL,
  `departure` date NOT NULL,
  `days_nights` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tourist_points` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'dynamic',
  `guests` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `location` text COLLATE utf8_unicode_ci NOT NULL,
  `special_offer` int(11) NOT NULL,
  `services` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `views` int(11) NOT NULL,
  `showwebsite` int(11) NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `visibility` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usefull`
--

DROP TABLE IF EXISTS `usefull`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usefull` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `date_format` date NOT NULL COMMENT 'day / month / year',
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `classname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `additional1` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empty',
  `additional2` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empty',
  `additional3` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empty',
  `additional4` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empty',
  `additional5` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'empty',
  `map_coordinates` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visibility` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `title` (`title`),
  FULLTEXT KEY `description` (`description`)
) ENGINE=MyISAM AUTO_INCREMENT=516 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usefull`
--

LOCK TABLES `usefull` WRITE;
/*!40000 ALTER TABLE `usefull` DISABLE KEYS */;
INSERT INTO `usefull` VALUES (65,33,0,1523131200,'2018-04-07','languagedata','usefulllinks','<p>Usefull Links</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(13,7,0,1523822400,'2018-04-16','slogan','Slogan','<p>,,Quality, for your success\"</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(15,8,0,1523995200,'2018-04-18','staff','თამუნა თევზაძე','','IT ინსტრუქტორი','[facebook=https://www.facebook.com/ttevzadze]','empty','empty','empty','empty','empty','','en',0,0),(263,132,0,1524081600,'2018-04-19','partners','სოკარ ჯორჯია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(264,132,0,1524081600,'2018-04-19','partners','სოკარ ჯორჯია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(265,133,0,1524081600,'2018-04-19','partners','ემბავუდ ჯორჯია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(266,133,0,1524081600,'2018-04-19','partners','ემბავუდ ჯორჯია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(14,7,0,1523822400,'2018-04-16','slogan','Hidden Field','<p>ხარისხი თქვენი წარმატებისთვის!</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(16,8,0,1523995200,'2018-04-18','staff','თამუნა თევზაძე','','კომპიუტერული პროგრამების სპეციალისტი','[facebook=https://www.facebook.com/ttevzadze]','empty','empty','empty','empty','empty','','ge',0,0),(154,77,0,1523736000,'2018-04-15','staff','ნინო მღებრიშვილი','','დირექტორი','empty','empty','empty','empty','empty','empty','','ge',0,0),(155,78,0,1523908800,'2018-04-17','staff','მარინა წიკლაშვილი','','','empty','empty','empty','empty','empty','empty','','en',0,0),(156,78,0,1523908800,'2018-04-17','staff','მარინა წიკლაშვილი','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(157,79,0,1523736000,'2018-04-15','staff','ინგა შალიბაშვილი','','','empty','empty','empty','empty','empty','empty','','en',0,0),(158,79,0,1523736000,'2018-04-15','staff','ინგა შალიბაშვილი','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(159,80,0,1523736000,'2018-04-15','staff','ალექსანდრე დვალი','','','empty','empty','empty','empty','empty','empty','','en',0,0),(160,80,0,1523736000,'2018-04-15','staff','ალექსანდრე დვალი','<p>Education:</p>\n<p>PHD in Economics (2014 - Present)<br /> TSU &ndash; Faculty of Business and Economics. Supervisor &ndash; Iuri Ananiashvili <br />Masters Program (2008 - 2010)</p>\n<p>ISET (International School of Economics at TSU) International graduate program in economics, taught in English by international faculty. Coursework in Money and Banking, International Trade, International Finance, Environmental Economics, Energy Economics, Public Economics, Labor Economics, Advanced Macroeconomics, Advanced Microeconomics, Advanced Statistics and Econometrics, Mathematics, Game theory etc.</p>\n<p>Bachelors program (1997 -2002)<br />I. Gogebashvili Telavi State University, Faculty of Physics and Mathematics, Specialization of Mathematics and Informatics (Diploma with honor)</p>\n<p>Research - Masters thesis: &ldquo;Microloan officers&rsquo; incentives to cheat&rdquo;.</p>\n<p>Training courses:</p>\n<p>Training &ldquo;Financial Stability Stress Testing for Banking Systems&rdquo; &ndash; at Joint Vienna Institute (Austria; 10-15 April 2011)<br />Training in SME banking - conducted by IFC (9-11 March 2011)<br />Training - Teaching Fellows course at CERGE-EI (Prague, Czech Republic; 23 &ndash; 30 August 2010)<br />Training in Accounting and Taxation - European Center for Professional Development (15 January 2010 &ndash; 9 April 2010)<br />Training in &ldquo;The company&rsquo;s structure and management&rdquo; given by Nikoloz Markozashvili, ESM Tbilisi (Spring 2007)<br />Shorbank&rsquo;s loan officer&rsquo;s training courses (Spring 2004)</p>\n<p>Test scores:</p>\n<p>TOEFL IBT: 102<br />GRE: Quantitative 780</p>\n<p>Professional Experience:</p>\n<p>East European University&ndash; Assistant Professor (2013 Autumn semester - present)<br />Main responsibilities:<br />&bull; Delivering weekly lectures - Informational technologies, Statistics, Economics, Banking;<br />&bull; Posting materials for recitation sessions and classes;</p>\n<p><br />TNS Georgia &ndash; Statistician &amp; data manager in marketing research (2012 - present)<br />Main responsibilities:<br />&bull; Designing Samples for marketing research;<br />&bull; Developing software (PHP, Laravel, MS Access, VBA, SPSS, Stata, Matlab) for analysis of huge databases;<br />&bull; Building presentations.</p>\n<p>Georgian Business Academy (SBA) &ndash; Teacher in Mathematics and Economics (2013 - 2017)<br />Main responsibilities:<br />&bull; Delivering weekly lectures in Mathematics and Economics; Delivered in English;<br />&bull; Posting materials for recitation sessions and classes;</p>\n<p>Intellect Center - Trainer in Advanced Excel, Access and Statistics (2011 &ndash; present)<br />Main responsibilities:<br />&bull; Delivering lectures;<br />&bull; Designing training courses (Statistics, SPSS, Excel, VBA);<br />&bull; Providing assistance to Companies regarding data management and analysis;</p>\n<p>Caucasus University (CSG, CSB) &ndash; Teacher in Statistics and IT (2012 spring semester - 2015)<br />Main responsibilities:<br />&bull; Delivering weekly lectures in Statistics, Informational technologies; Delivered in English;<br />&bull; Posting materials for recitation sessions and classes;</p>\n<p>International Black Sea University (IBSU) &ndash; Teacher in Economics (2011 - 2013)<br />Main responsibilities:<br />&bull; Delivering weekly lectures in Statistics, Economics; Delivered in English.<br />&bull; Posting materials for recitation sessions and classes;</p>\n<p><br />Ilya State University &ndash; Teacher in Managerial accounting (2012 - 2012)<br />Main responsibilities:<br />&bull; Delivering weekly lectures.<br />&bull; Posting materials for recitation sessions and classes;</p>\n<p>Tbilisi State University (TSU) &ndash; Teacher in Econometrics (2010 &ndash; 2012)<br />Main responsibilities:<br />&bull; Holding weekly meetings with the professor to prepare recitation sessions;<br />&bull; Delivering weekly lectures;<br />&bull; Posting materials for recitation sessions and classes;<br />&bull; Assisting professors with technical equipment, data, software, etc. as needed;<br />&bull; Assisting professors with the administration and grading of quizzes and exams; <br />&bull; Performing other course-related tasks assigned by the professor.</p>\n<p>National Bank of Georgia (NBG) &ndash; Credit risk specialist (2009 &ndash;2012)<br />Main responsibilities:<br />&bull; Assessing commercial banks&rsquo; credit risk;<br />&bull; Assessing main trends of credit risk in Georgia.</p>\n<p>International School of Economics (ISET) - Teaching assistant in Statistics and Econometrics (autumn 2009)<br />Main responsibilities:<br />&bull; Holding weekly meetings with the instructor to prepare recitation sessions;<br />&bull; Delivering weekly recitations;</p>\n<p>Bank Constanta Lagodekhi branch - Branch manager (Sep 06 &ndash; March 08)<br />Main responsibilities:<br />&bull; Reporting to the Head office. Establishing and following up objectives and action plans of the branch. Managing the branch on a daily basis;<br />&bull; Supervising a team of 9 staff (6 loan officers, cashier, office manager and driver) and daily operations;<br />&bull; Promoting and maintaining relationship with customers and targeting market segments in order to effectively sell products and services of the organization;<br />&bull; Reviewing agricultural, micro and small business loans to achieve proper loan reporting;<br />&bull; Motivating branch staff, evaluating performance of personnel.</p>\n<p>Bank Constanta Tsnori branch - Loan officer (2005)</p>\n<p>Bank Constanta Tsnori branch - Management Information System (MIS) officer (2004)</p>\n<p>Post Bank&rsquo;s Gurjaani Branch - Programmer (2003)<br />Languages:<br /> <br />&bull; Georgian - Native<br />&bull; Russian - Advanced<br />&bull; English - Advanced <br />&bull; French &ndash; Beginner<br /> <br />Computer Skills<br /> <br />&bull; MS Office - Advanced<br />&bull; Stata &ndash; Advanced<br />&bull; SPSS - Advanced<br />&bull; E-VIEWS &ndash; Good<br />&bull; Maple &ndash; Advanced<br />&bull; MatLab &ndash; Good <br />&bull; SurveyCTO &ndash; Advanced<br />&bull; Checker &ndash; Advanced<br />&bull; SurveyMonkey&ndash; Advanced<br />&bull; Oris - Good<br />&bull; Microfin - Good<br />&bull; Bank 2000 - Good<br />&bull; Photoshop - Good<br />&bull; Delphi - Advanced<br />&bull; Visual Basic (VBA) - Advanced<br />&bull; HTML, CSS, jquery, vue &ndash; Good<br /> &bull; PHP, Laravel &ndash; Good<br />&bull; MS SQL, My SQL SERVER - Good<br />&bull; MS Windows (Workstation, Server) &ndash; Advanced</p>\n<p>&nbsp;</p>','გაძლიერებული ექსელის, მონაცემთა ბაზების, ბიზნეს სტატისტიკის SPSS-ის სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(161,81,0,1523736000,'2018-04-15','staff','ნინო ჯაფარიძე','','ინგლისურის სპეციალისტი','empty','empty','empty','empty','empty','empty','','en',0,0),(162,81,0,1523736000,'2018-04-15','staff','ნინო ჯაფარიძე','','ინგლისურის სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(163,82,0,1523736000,'2018-04-15','staff','ვიკტორია ნადირაძე','','','empty','empty','empty','empty','empty','empty','','en',0,0),(164,82,0,1523736000,'2018-04-15','staff','ვიქტორია ნადირაძე','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(165,83,0,1523736000,'2018-04-15','staff','ანა სხვიტარიძე','','ექიმი','empty','empty','empty','empty','empty','empty','','en',0,0),(166,83,0,1523736000,'2018-04-15','staff','ანა სხვიტარიძე','','ექიმი','empty','empty','empty','empty','empty','empty','','ge',0,0),(167,84,0,1523736000,'2018-04-15','staff','ხათუნა შუბითიძე','','','empty','empty','empty','empty','empty','empty','','en',0,0),(168,84,0,1523736000,'2018-04-15','staff','ხათუნა შუბითიძე','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(169,85,0,1523736000,'2018-04-15','staff','ხათუნა ძაძამია','','რუსულის სპეციალისტი, პრაქტიკოსი გიდი','empty','empty','empty','empty','empty','empty','','en',0,0),(170,85,0,1523736000,'2018-04-15','staff','ხათუნა ძაძამია','','რუსულის სპეციალისტი, პრაქტიკოსი გიდი','empty','empty','empty','empty','empty','empty','','ge',0,0),(171,86,0,1523736000,'2018-04-15','staff','ელგუჯა შენგელია','','ისტორიკოსი, პრაქტიკოსი გიდი','empty','empty','empty','empty','empty','empty','','en',0,0),(17,9,0,1523044800,'2018-04-07','partners','Patel Psix','','','http://gumtree.com','empty','empty','empty','empty','empty','','en',0,0),(18,9,0,1523044800,'2018-04-07','partners','თიბისი ბანკი','<p>თიბისი ბანკი</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(27,14,0,1523044800,'2018-04-06','languagedata','contactus','<p>Call us</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(28,14,0,1523044800,'2018-04-06','languagedata','contactus','<p>დაგვიკავშირდით</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(29,15,0,1523044800,'2018-04-06','languagedata','search','<p>Search</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(30,15,0,1523044800,'2018-04-06','languagedata','search','<p>ძიება</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(33,17,0,1523131200,'2018-04-07','languagedata','registertraining','<p>Sign up for training</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(35,18,0,1523131200,'2018-04-07','languagedata','namelname','<p>Firstname Lastname</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(34,17,0,1523131200,'2018-04-07','languagedata','registertraining','<p>დარეგისტრირდი ტრენინგზე</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(36,18,0,1523131200,'2018-04-07','languagedata','namelname','<p>სახელი გვარი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(37,19,0,1523131200,'2018-04-07','languagedata','email','<p>Email</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(38,19,0,1523131200,'2018-04-07','languagedata','email','<p>ელ-ფოსტა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(39,20,0,1523131200,'2018-04-07','languagedata','contactnumber','<p>Contact number</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(40,20,0,1523131200,'2018-04-07','languagedata','contactnumber','<p>საკონტაქტო ნომერი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(41,21,0,1523131200,'2018-04-07','languagedata','age','<p>Age</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(42,21,0,1523131200,'2018-04-07','languagedata','age','<p>ასაკი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(43,22,0,1523131200,'2018-04-07','languagedata','trainingstarttime','<p>Admission Clock</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(45,23,0,1523131200,'2018-04-07','languagedata','howfindus','<p>who told you about us?</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(44,22,0,1523131200,'2018-04-07','languagedata','trainingstarttime','<p>გაკვეთილის დაწყების მისაღები საათი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(47,24,0,1523131200,'2018-04-08','howfindus','მეგობრისგან','','','empty','empty','empty','empty','empty','empty','','en',0,0),(46,23,0,1523131200,'2018-04-07','languagedata','howfindus','<p>საიდან შეიტყვეთ ჩვენს შესახებ?</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(48,24,0,1523131200,'2018-04-08','howfindus','მეგობრისგან','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(49,25,0,1523131200,'2018-04-07','howfindus','კოლეგისგან','','','empty','empty','empty','empty','empty','empty','','en',0,0),(50,25,0,1523131200,'2018-04-07','howfindus','კოლეგისგან','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(51,26,0,1523131200,'2018-04-07','howfindus','Google','','','empty','empty','empty','empty','empty','empty','','en',0,0),(52,26,0,1523131200,'2018-04-07','howfindus','Google','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(53,27,0,1523131200,'2018-04-07','howfindus','Jobs.ge','','','empty','empty','empty','empty','empty','empty','','en',0,0),(54,27,0,1523131200,'2018-04-07','howfindus','Jobs.ge','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(55,28,0,1523131200,'2018-04-07','howfindus','Hr.ge','','','empty','empty','empty','empty','empty','empty','','en',0,0),(56,28,0,1523131200,'2018-04-07','howfindus','Hr.ge','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(57,29,0,1523131200,'2018-04-07','languagedata','choosetraining','<p>Choose trainig</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(58,29,0,1523131200,'2018-04-07','languagedata','choosetraining','<p>აირჩიეთ ტრენინგი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(59,30,0,1523131200,'2018-04-07','languagedata','register','<p>Sign up</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(60,30,0,1523131200,'2018-04-07','languagedata','register','<p>რეგისტრაცია</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(63,32,0,1523131200,'2018-04-07','languagedata','trainings','<p>Trainings</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(64,32,0,1523131200,'2018-04-07','languagedata','trainings','<p>ტრენინგები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(66,33,0,1523131200,'2018-04-07','languagedata','usefulllinks','<p>სასარგებლო ბმულები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(71,36,0,1523131200,'2018-04-08','languagedata','archive','<p>Archive</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(72,36,0,1523131200,'2018-04-08','languagedata','archive','<p>არქივი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(73,37,0,1523131200,'2018-04-08','languagedata','allnews','<p>All news</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(74,37,0,1523131200,'2018-04-08','languagedata','allnews','<p>ყველა სიახლე</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(75,38,0,1523131200,'2018-04-08','languagedata','news','<p>News</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(76,38,0,1523131200,'2018-04-08','languagedata','news','<p>სიახლეები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(77,39,0,1523217600,'2018-04-09','languagedata','lastnews','<p>The last news</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(78,39,0,1523217600,'2018-04-09','languagedata','lastnews','<p>ბოლო სიახლეები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(79,40,0,1523217600,'2018-04-09','languagedata','viewprofile','<p>View profile</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(80,40,0,1523217600,'2018-04-09','languagedata','viewprofile','<p>პროფილის ნახვა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(172,86,0,1523736000,'2018-04-15','staff','ელგუჯა შენგელია','','ისტორიკოსი, პრაქტიკოსი გიდი','empty','empty','empty','empty','empty','empty','','ge',0,0),(173,87,0,1523736000,'2018-04-15','staff','დიანა დანელიანი','','კომპიუტერული გრაფიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','en',0,0),(174,87,0,1523736000,'2018-04-15','staff','დიანა დანელიანი','','კომპიუტერული გრაფიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(175,88,0,1523736000,'2018-04-15','staff','თეონა ბუაძე','','მენეჯმენტის ტრენერი','empty','empty','empty','empty','empty','empty','','en',0,0),(176,88,0,1523736000,'2018-04-15','staff','თეონა ბუაძე','','მენეჯმენტის ტრენერი','empty','empty','empty','empty','empty','empty','','ge',0,0),(177,89,0,1523736000,'2018-04-15','staff','სოფიკო ღუდუშაური','','ფინანსური მენეჯმენტის ტრენერი','empty','empty','empty','empty','empty','empty','','en',0,0),(178,89,0,1523736000,'2018-04-15','staff','სოფიკო ღუდუშაური','','ფინანსური მენეჯმენტის ტრენერი','empty','empty','empty','empty','empty','empty','','ge',0,0),(179,90,0,1523736000,'2018-04-15','staff','დავით მამრიკიშვილი','','საგადასახადო საქმის ტრენერი','empty','empty','empty','empty','empty','empty','','en',0,0),(180,90,0,1523736000,'2018-04-15','staff','დავით მამრიკიშვილი','','საგადასახადო საქმის ტრენერი','empty','empty','empty','empty','empty','empty','','ge',0,0),(181,91,0,1523736000,'2018-04-15','staff','ამირან დემურიშვილი','','სისტემური და ქსელური ადმინისტრირების სპეციალისტი','empty','empty','empty','empty','empty','empty','','en',0,0),(83,42,0,1523217600,'2018-04-09','languagedata','contactinfo','<p>Contact information</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(187,94,0,1523822400,'2018-04-16','staff','ირმა ბერძენიშვილი','','ბიზნეს ფსიქოლოგი','empty','empty','empty','empty','empty','empty','','en',0,0),(84,42,0,1523217600,'2018-04-09','languagedata','contactinfo','<p>საკონტაქტო ინფორმაცია</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(85,43,0,1523217600,'2018-04-09','languagedata','more','<p>More</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(86,43,0,1523217600,'2018-04-09','languagedata','more','<p>ნახე მეტი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(89,45,0,1523217600,'2018-04-09','languagedata','allvacancies','<p>All vacancies</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(90,45,0,1523217600,'2018-04-09','languagedata','allvacancies','<p>ყველა ვაკანსია</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(91,46,0,1523217600,'2018-04-09','languagedata','writeus','<p>Send us message</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(92,46,0,1523217600,'2018-04-09','languagedata','writeus','<p>მოგვწერეთ</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(93,47,0,1523217600,'2018-04-09','languagedata','message','<p>Message</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(94,47,0,1523217600,'2018-04-09','languagedata','message','<p>შეტყობინება</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(95,48,0,1523217600,'2018-04-09','languagedata','send','<p>Send</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(96,48,0,1523217600,'2018-04-09','languagedata','send','<p>გაგზავნა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(103,52,0,1523304000,'2018-04-10','languagedata','gallery','<p>Gallery</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(104,52,0,1523304000,'2018-04-10','languagedata','gallery','<p>გალერეა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(107,54,0,1523304000,'2018-04-10','languagedata','main','<p>Main</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(108,54,0,1523304000,'2018-04-10','languagedata','main','<p>მთავარი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(109,55,0,1523304000,'2018-04-10','languagedata','vacancies','<p>vacancies</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(110,55,0,1523304000,'2018-04-10','languagedata','vacancies','<p>ვაკანსიები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(111,56,0,1523304000,'2018-04-10','languagedata','ourteam','<p>Our team</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(112,56,0,1523304000,'2018-04-10','languagedata','ourteam','<p>ჩვენი გუნდი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(117,59,0,1523390400,'2018-04-11','languagedata','errorallfieldsrequire','<p>All fields are required !</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(118,59,0,1523390400,'2018-04-11','languagedata','errorallfieldsrequire','<p>ყველა ველი სავალდებულოა!</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(119,60,0,1523390400,'2018-04-11','languagedata','erroremail','<p>Email format error !</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(120,60,0,1523390400,'2018-04-11','languagedata','erroremail','<p>ელ-ფოსტა არასწორია !</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(121,61,0,1523390400,'2018-04-11','languagedata','errornull','<p>Operation done successfully !</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(123,62,0,1523390400,'2018-04-11','languagedata','error','<p>Error !</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(122,61,0,1523390400,'2018-04-11','languagedata','errornull','<p>ოპერაცია წარმატებით შესრულდა !</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(124,62,0,1523390400,'2018-04-11','languagedata','error','<p>მოხდა შეცდომა !</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(261,131,0,1524081600,'2018-04-19','partners','სვისკაპიტალი-მიკროსაფინანსო კომპანია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(262,131,0,1524081600,'2018-04-19','partners','სვისკაპიტალი-მიკროსაფინანსო კომპანია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(153,77,0,1523736000,'2018-04-15','staff','ნინო მღებრიშვილი','','დირექტორი','empty','empty','empty','empty','empty','empty','','en',0,0),(182,91,0,1523736000,'2018-04-15','staff','ამირან დემურიშვილი','','სისტემური და ქსელური ადმინისტრირების სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(183,92,0,1523736000,'2018-04-15','staff','იოსებ ჭიპაშვილი','','ლოგისტიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','en',0,0),(184,92,0,1523736000,'2018-04-15','staff','იოსებ ჭიპაშვილი','','ლოგისტიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(185,93,0,1523736000,'2018-04-15','staff','მიხეილ კუტალაძე','','ლოგისტიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','en',0,0),(186,93,0,1523736000,'2018-04-15','staff','მიხეილ კუტალაძე','','ლოგისტიკის სპეციალისტი','empty','empty','empty','empty','empty','empty','','ge',0,0),(188,94,0,1523822400,'2018-04-16','staff','ირმა ბერძენიშვილი','','ბიზნეს ფსიქოლოგი','empty','empty','empty','empty','empty','empty','','ge',0,0),(207,104,0,1523908800,'2018-04-17','partners','რომპეტროლი','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(201,101,0,1523822400,'2018-04-16','staff','ზურაბ ლაოშვილი','','','empty','empty','empty','empty','empty','empty','','en',0,0),(202,101,0,1523822400,'2018-04-16','staff','ზურაბ ლაოშვილი','','','empty','empty','empty','empty','empty','empty','','ge',0,0),(208,104,0,1523908800,'2018-04-17','partners','რომპეტროლი','<p>რომპეტროლი</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(209,105,0,1523908800,'2018-04-17','partners','ელთ კომპანი-საფინანსო კომპანია','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(210,105,0,1523908800,'2018-04-17','partners','ელთ კომპანი-საფინანსო კომპანია','<p>ელთ კომპანი-საფინანსო კომპანია</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(211,106,0,1523908800,'2018-04-17','partners','თიბისი დაზღვევა','Hidden field','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(212,106,0,1523908800,'2018-04-17','partners','თიბისი დაზღვევა','<p>თიბისი დაზღვევა</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(235,118,0,1523908800,'2018-04-17','languagedata','finishprojects','<p>Finished projects</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(236,118,0,1523908800,'2018-04-17','languagedata','finishprojects','<p>დასრულებული პროექტები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(237,119,0,1523995200,'2018-04-18','ongoing','შპს ,,პრესტიჟი\"','<p>შპს ,,პრესტიჟის\" კადრების მომზადება კომპიუტერულ გრაფიკულ პროგრამებში!</p>\n<p>პედაგოგი: დიანა დანელიანი</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(238,119,0,1523995200,'2018-04-18','ongoing','შპს ,,პრესტიჟი\"','<p>შპს ,,პრესტიჟის\" კადრების მომზადება კომპიუტერულ გრაფიკულ პროგრამებში!</p>\n<p>პედაგოგი: დიანა დანელიანი</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(241,121,0,1523995200,'2018-04-18','future','ბიზსეს სტატისტიკის კურსი','<p>მიმდინარეობს მოლაპარაკება ბიზნეს სტატისტიკის და SPSS-ის კურსის ჩატარებაზე შპს ,,გამასთან!</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','en',0,0),(242,121,0,1523995200,'2018-04-18','future','ბიზსეს სტატისტიკის კურსი','<p>მიმდინარეობს მოლაპარაკება ბიზნეს სტატისტიკის და SPSS-ის კურსის ჩატარებაზე შპს ,,გამასთან!</p>','Hidden Field','empty','empty','empty','empty','empty','empty','','ge',0,0),(243,122,0,1523995200,'2018-04-18','usefulllinks','ჯობს.გე','Hidden field','http://jobs.ge/client/vip-intellect-group/','http://jobs.ge/client/vip-intellect-group/','empty','empty','empty','empty','empty','','en',0,0),(244,122,0,1523995200,'2018-04-18','usefulllinks','ჯობს.გე','Hidden field','http://jobs.ge/client/vip-intellect-group/','http://jobs.ge/client/vip-intellect-group/','empty','empty','empty','empty','empty','','ge',0,0),(247,124,0,1523995200,'2018-04-18','usefulllinks','არის.ჯე','Hidden field','https://edu.aris.ge/preview/vip-intellect-group/turistuli-gidebis-mosamzadebeli-kursebi-rusul-da-inglisur-enebze.html','https://edu.aris.ge/preview/vip-intellect-group/turistuli-gidebis-mosamzadebeli-kursebi-rusul-da-inglisur-enebze.html','empty','empty','empty','empty','empty','','en',0,0),(248,124,0,1523995200,'2018-04-18','usefulllinks','არის.ჯე','Hidden field','https://edu.aris.ge/preview/vip-intellect-group/turistuli-gidebis-mosamzadebeli-kursebi-rusul-da-inglisur-enebze.html','https://edu.aris.ge/preview/vip-intellect-group/turistuli-gidebis-mosamzadebeli-kursebi-rusul-da-inglisur-enebze.html','empty','empty','empty','empty','empty','','ge',0,0),(249,125,0,1523908800,'2018-04-17','usefulllinks','ვიპ გრუპი-გასვლითი კოპრორატიული ტრენინგები საქართველოს მაშტაბით','Hidden field','https://www.facebook.com/VIP-GROUP-1979453345668458/','https://www.facebook.com/VIP-GROUP-1979453345668458/','empty','empty','empty','empty','empty','','en',0,0),(250,125,0,1523908800,'2018-04-17','usefulllinks','ვიპ გრუპი-გასვლითი კოპრორატიული ტრენინგები საქართველოს მაშტაბით','Hidden field','https://www.facebook.com/VIP-GROUP-1979453345668458/','https://www.facebook.com/VIP-GROUP-1979453345668458/','empty','empty','empty','empty','empty','','ge',0,0),(251,126,0,1523995200,'2018-04-18','vacancies','საოფიეს პროგრამების გამოცდილი პედაგოგი','<p>შპს ,,VIP Intellect Group&rdquo; ერთერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 17 წლიანი გამოცდილება გააჩნია.</p>\n<p>დაწვრილებითი ინფორმაცია ჩვენი ცენტრის შესახებ შეგიძლიათ იხილოთ ჩვენს ვებ გვერდზე www.vipintellect.ge <br />fb გვერდზე: https://www.facebook.com/vipintellectgroup/</p>\n<p>შპს ,,VIP Intellect Group&ldquo; მოთხოვნილების გაზრდასთან დაკავშირებით ესაჭიროება საოფისე პროგრამების პრაქტიკოსი სპეციალისტი-პედაგოგი,.</p>\n<p>აუცილებელი მოთხოვნა: <br />1. ჩამოთვლილი პროგრამების პროფესიონალურ დონეზე ცოდნა - Ms Office; Excel (basic, Intermediate); Outlook; Windows;<br />2. სასურველიია შეძლოს ლექციების ჩატარება რუსულ და ინგლისურ ენაზეც.<br />3. ჰქონდეს კომპიუტერის პედაგოგად მუშაობის არანაკლებ 2 წლიანი გამოცდილება.</p>\n<p>მსურველმა უნდა წარმოგვიდგინოს სასწავლო პროგრამა ისე, რომ ლექციები მოიცავდეს 50%/50% თეორიულ და პრაქტიკულ საკითხებს, რათა კურსის დამთავრების შემდეგ ჩვენმა მსმენელმა უნდა შეძლოს პრაქტიკულად მისი გამოყენება.</p>\n<p>პიროვნული ღირებულებები:<br />&bull; კომპანიის შინაგანაწესის გათავისება და გათვალისწინება<br />&bull; გუნდში მუშაობის უნარი<br />&bull; კეთილგანწყობილი და მეგობრული დამოკიდებულების შენარჩუნება კომპანიის ყველა წევრთან<br />&bull; საკუთარი პროგრამის მუდმივად განვითარება და სიახლეების დანერგვის მოტივაცია<br />სამუშაო საათები: კვირაში სამი-ოთხი დღე.<br />ანაზღაურება: ყოველი ჯგუფიდან ან შესრულებული შეკვეთებიდან 50%- დარიცხული ხელფასი.<br />საშუალოდ 400 -500 ლარის ფარგლებში.<br />ხოლო თუ კვირაში 5-6 დღე იმუშავებს ანაზღაურება იქნება მეტი.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, სადაც მითითებული იქნება დეტალურად სამუშაო გამოცდილება, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />მონაცემები გამოგვიგზავნეთ ninovipicg@gmail.com</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(252,126,0,1523995200,'2018-04-18','vacancies','საოფისე პროგრამების გამოცდილი პედაგოგი','<p>შპს ,,VIP Intellect Group&rdquo; ერთერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 17 წლიანი გამოცდილება გააჩნია.</p>\n<p>დაწვრილებითი ინფორმაცია ჩვენი ცენტრის შესახებ შეგიძლიათ იხილოთ ჩვენს ვებ გვერდზე www.vipintellect.ge <br />fb გვერდზე: https://www.facebook.com/vipintellectgroup/</p>\n<p>შპს ,,VIP Intellect Group&ldquo; მოთხოვნილების გაზრდასთან დაკავშირებით ესაჭიროება საოფისე პროგრამების პრაქტიკოსი სპეციალისტი-პედაგოგი,.</p>\n<p>აუცილებელი მოთხოვნა: <br />1. ჩამოთვლილი პროგრამების პროფესიონალურ დონეზე ცოდნა - Ms Office; Excel (basic, Intermediate); Outlook; Windows;<br />2. სასურველიია შეძლოს ლექციების ჩატარება რუსულ და ინგლისურ ენაზეც.<br />3. ჰქონდეს კომპიუტერის პედაგოგად მუშაობის არანაკლებ 2 წლიანი გამოცდილება.</p>\n<p>მსურველმა უნდა წარმოგვიდგინოს სასწავლო პროგრამა ისე, რომ ლექციები მოიცავდეს 50%/50% თეორიულ და პრაქტიკულ საკითხებს, რათა კურსის დამთავრების შემდეგ ჩვენმა მსმენელმა უნდა შეძლოს პრაქტიკულად მისი გამოყენება.</p>\n<p>პიროვნული ღირებულებები:<br />&bull; კომპანიის შინაგანაწესის გათავისება და გათვალისწინება<br />&bull; გუნდში მუშაობის უნარი<br />&bull; კეთილგანწყობილი და მეგობრული დამოკიდებულების შენარჩუნება კომპანიის ყველა წევრთან<br />&bull; საკუთარი პროგრამის მუდმივად განვითარება და სიახლეების დანერგვის მოტივაცია<br />სამუშაო საათები: კვირაში სამი-ოთხი დღე.<br />ანაზღაურება: ყოველი ჯგუფიდან ან შესრულებული შეკვეთებიდან 50%- დარიცხული ხელფასი.<br />საშუალოდ 400 -500 ლარის ფარგლებში.<br />ხოლო თუ კვირაში 5-6 დღე იმუშავებს ანაზღაურება იქნება მეტი.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, სადაც მითითებული იქნება დეტალურად სამუშაო გამოცდილება, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />მონაცემები გამოგვიგზავნეთ ninovipicg@gmail.com</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(255,128,0,1523995200,'2018-04-18','vacancies','WEB პროგრამების პედაგოგი, სპციალისტი','<p>შპს ,,VIP Intellect Group&rdquo; ერთერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 17 წლიანი გამოცდილება გააჩნია.</p>\n<p>დაწვრილებითი ინფორმაცია ჩვენი ცენტრის შესახებ შეგიძლიათ იხილოთ ჩვენს ვებ გვერდზე www.vipintellect.ge</p>\n<p>შპს ,,VIP Intellect Group&ldquo; მოთხოვნილების გაზრდასთან დაკავშირებით ესაჭიროება WEB პროგრამების სპციალისტი.</p>\n<p>აუცილებელი მოთხოვნა:</p>\n<p>1. ჩამოთვლილი პროგრამების პროფესიონალურ დონეზე ცოდნა -<br /> HTML/CSS; PHP/My SQL; JAVA SCRIPT;<br />2. ჰქონდეს კომპიუტერის პედაგოგად მუშაობის არანაკლებ 2 წლიანი გამოცდილება.<br />3. აუცილებელია შექმნილი ქონდეს WEB გვერდები, წარმოადგინოს თავისი ნამუშევრები.<br />4. შეძლოს მაღალ დონეზე შექმნას ნებისმიერი სირთულის WEB გვერდი</p>\n<p>მსურველმა უნდა წარმოგვიდგინოს სასწავლო პროგრამა ისე, რომ ლექციები მოიცავდეს 50%/50% თეორიულ და პრაქტიკულ საკითხებს, რათა კურსის დამთავრების შემდეგ ჩვენმა მსმენელმა უნდა შეძლოს პრაქტიკულად მისი გამოყენება.</p>\n<p>პიროვნული ღირებულებები:<br />&bull; კომპანიის შინაგანაწესის გათავისება და გათვალისწინება<br />&bull; გუნდში მუშაობის უნარი<br />&bull; კეთილგანწყობილი და მეგობრული დამოკიდებულების შენარჩუნება კომპანიის ყველა წევრთან<br />&bull; საკუთარი პროგრამის მუდმივად განვითარება და სიახლეების დანერგვის მოტივაცია<br />სამუშაო საათები: კვირაში სამი დღე .<br />ანაზღაურება: ყოველი ჯგუფიდან ან შესრულებული შეკვეთებიდან 50%- დარიცხული ხელფასი.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, სადაც მითითებული იქნება დეტალურად სამუშაო გამოცდილება, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />მონაცემები გამოგვიგზავნეთ ninovipicg@gmail.com</p>\n<p>დამატებითი ინფორმაცია ჩვენი სასწავლო ცენტრის შესახებ იხილეთ www.vipintellect.ge</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(256,128,0,1523995200,'2018-04-18','vacancies','WEB პროგრამების პედაგოგი, სპციალისტი','<p>შპს ,,VIP Intellect Group&rdquo; ერთერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 17 წლიანი გამოცდილება გააჩნია.</p>\n<p>დაწვრილებითი ინფორმაცია ჩვენი ცენტრის შესახებ შეგიძლიათ იხილოთ ჩვენს ვებ გვერდზე www.vipintellect.ge</p>\n<p>შპს ,,VIP Intellect Group&ldquo; მოთხოვნილების გაზრდასთან დაკავშირებით ესაჭიროება WEB პროგრამების სპციალისტი.</p>\n<p>აუცილებელი მოთხოვნა:</p>\n<p>1. ჩამოთვლილი პროგრამების პროფესიონალურ დონეზე ცოდნა -<br /> HTML/CSS; PHP/My SQL; JAVA SCRIPT;<br />2. ჰქონდეს კომპიუტერის პედაგოგად მუშაობის არანაკლებ 2 წლიანი გამოცდილება.<br />3. აუცილებელია შექმნილი ქონდეს WEB გვერდები, წარმოადგინოს თავისი ნამუშევრები.<br />4. შეძლოს მაღალ დონეზე შექმნას ნებისმიერი სირთულის WEB გვერდი</p>\n<p>მსურველმა უნდა წარმოგვიდგინოს სასწავლო პროგრამა ისე, რომ ლექციები მოიცავდეს 50%/50% თეორიულ და პრაქტიკულ საკითხებს, რათა კურსის დამთავრების შემდეგ ჩვენმა მსმენელმა უნდა შეძლოს პრაქტიკულად მისი გამოყენება.</p>\n<p>პიროვნული ღირებულებები:<br />&bull; კომპანიის შინაგანაწესის გათავისება და გათვალისწინება<br />&bull; გუნდში მუშაობის უნარი<br />&bull; კეთილგანწყობილი და მეგობრული დამოკიდებულების შენარჩუნება კომპანიის ყველა წევრთან<br />&bull; საკუთარი პროგრამის მუდმივად განვითარება და სიახლეების დანერგვის მოტივაცია<br />სამუშაო საათები: კვირაში სამი დღე .<br />ანაზღაურება: ყოველი ჯგუფიდან ან შესრულებული შეკვეთებიდან 50%- დარიცხული ხელფასი.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, სადაც მითითებული იქნება დეტალურად სამუშაო გამოცდილება, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />მონაცემები გამოგვიგზავნეთ ninovipicg@gmail.com</p>\n<p>დამატებითი ინფორმაცია ჩვენი სასწავლო ცენტრის შესახებ იხილეთ www.vipintellect.ge</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(257,129,0,1523995200,'2018-04-18','vacancies','უფასო სტაჟირება-საუკეთესოების დასაქმების შეთავაზებით','<p>უფასო სტაჟირება-საუკეთესოების დასაქმების შეთავაზებით!</p>\n<p>შპს ,,VIP Intellect Group&ldquo; აცხადებს ერთთვიან უფასო სტაჟირებას, მათთვის ვისაც სურს მიიღოს გამოცდილება კომპანიაში მუშაობის, კერძოდ გაყიდვების და მარკეტინგის სფეროში!</p>\n<p>სასურველია კანდიდატები იყვნენ ახალი კურსდამთავრებულები, დაინტერესებული პირები, ან მე-3-4 კურსის სტუდენტები, რომელთაც უნდათ, რომ აიმაღლონ კვალიფიკაცია, შეიძინონ პრაქტიკული უნარები და გახდნენ მოთხოვნადი კადრი.</p>\n<p>გასაუბრების შედეგად აირჩევა 4 -5 კანდიდატი</p>\n<p>სტაჟიების უპირატესობა:<br />1. საუკეთესო 1-2 სტაჟიორს გეძლევათ რეალურად ამავე კომპანიაში დასაქმების შესაძლებლობა ,,კორპორატიული და საცალო გაყიდვების მენეჯერის&ldquo; პოზიციაზე<br />2. სტაჟირების დროს თქვენივე შესრულებული ნებისმიერი პროექტიდან გეძლევათ ანაზღაურება.<br />3. თქვენ იძენთ იმ უნარებს და გამოცდილებას, რაც დასაქმებისთვის ყველა კომპანიაში მოგეთხოვებათ (ონლაინ, სატელეფონო და პირდაპირი ურთიერთობა კომპანიებთან, საქმიანი მოლაპარაკებები, შეთავაზებები, ღონისძიებები, საქმიანი წერილების დამუშავება, საქმიანი ეტიკეტი)<br />4. სრულიად უფასოდ გივლით სტაჟირებისთვის აუცილებელ სწავლებას კომპანიის მენეჯმენტისგან<br />5. ჩვენს სტაჟიორებს ჩვენივე სასწავლო ცენტრში ნებისმიერ სასწავლო კურსზე სწავლის სურვილის შემთხვევაში გეძლევათ 20%-იანი ფასდაკლება ჯგუფური მეცადინეობისას და 10%-იანი ფასდაკლება ინდივიდუალური სწავლებისას თქვენივე განვითარებისთვის. <br />6. არ მოგეთხოვებათ ფიქსირებული სამუშაო საათები</p>\n<p>აუცილებელი მოთხოვნები:</p>\n<p>უმაღლესი ან მიმდინარე განათლება, სასურველია ბიზნეს ადმინისტრირების სპეციალობით;<br />საოფისე პროგრამების ცოდნა;<br />გუნდური მუშაობის უნარი;<br />მოლაპარაკების წარმოების უნარი;<br />დამარწმუნებელი;<br />კომუნიკაბელური;<br />მოტივირებული;<br />ორგანიზებული და მოწესრიგებული;<br />შედეგზე ორიენტირებული;<br />პასუხისმგებლობის მაღალი გრძნობა.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />დამატებითი ინფორმაცია ჩვენი კომპანიის და პირობების შესახებ იხილეთ: www.vipintellect.ge</p>\n<p>შპს ,,VIP Intellect Group&rdquo; ერთ-ერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 16 წლიანი გამოცდილება გააჩნია.</p>\n<p>,,VIP Intellect Group&rdquo; კურსდამთავრებულები არიან მრავალი ათეული ადგილობრივი და საერთაშორისო ორგანიზაცია: http://vipintellect.ge/new/index.php</p>\n<p>ჩვენი ტრენერები არიან გამოცდილი პრაქტიკოსი სპეციალისტები: პროგრამისტები, მენეჯერები, ფინანსისტები, ბიზნეს ექსპერტები, მარკეტოლოგები და ბუღალტრები!</p>\n<p>www.vipintellect.ge<br />e-mail: ninovipicg@gmail.com</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(258,129,0,1523995200,'2018-04-18','vacancies','უფასო სტაჟირება-საუკეთესოების დასაქმების შეთავაზებით','<p>უფასო სტაჟირება-საუკეთესოების დასაქმების შეთავაზებით!</p>\n<p>შპს ,,VIP Intellect Group&ldquo; აცხადებს ერთთვიან უფასო სტაჟირებას, მათთვის ვისაც სურს მიიღოს გამოცდილება კომპანიაში მუშაობის, კერძოდ გაყიდვების და მარკეტინგის სფეროში!</p>\n<p>სასურველია კანდიდატები იყვნენ ახალი კურსდამთავრებულები, დაინტერესებული პირები, ან მე-3-4 კურსის სტუდენტები, რომელთაც უნდათ, რომ აიმაღლონ კვალიფიკაცია, შეიძინონ პრაქტიკული უნარები და გახდნენ მოთხოვნადი კადრი.</p>\n<p>გასაუბრების შედეგად აირჩევა 4 -5 კანდიდატი</p>\n<p>სტაჟიების უპირატესობა:<br />1. საუკეთესო 1-2 სტაჟიორს გეძლევათ რეალურად ამავე კომპანიაში დასაქმების შესაძლებლობა ,,კორპორატიული და საცალო გაყიდვების მენეჯერის&ldquo; პოზიციაზე<br />2. სტაჟირების დროს თქვენივე შესრულებული ნებისმიერი პროექტიდან გეძლევათ ანაზღაურება.<br />3. თქვენ იძენთ იმ უნარებს და გამოცდილებას, რაც დასაქმებისთვის ყველა კომპანიაში მოგეთხოვებათ (ონლაინ, სატელეფონო და პირდაპირი ურთიერთობა კომპანიებთან, საქმიანი მოლაპარაკებები, შეთავაზებები, ღონისძიებები, საქმიანი წერილების დამუშავება, საქმიანი ეტიკეტი)<br />4. სრულიად უფასოდ გივლით სტაჟირებისთვის აუცილებელ სწავლებას კომპანიის მენეჯმენტისგან<br />5. ჩვენს სტაჟიორებს ჩვენივე სასწავლო ცენტრში ნებისმიერ სასწავლო კურსზე სწავლის სურვილის შემთხვევაში გეძლევათ 20%-იანი ფასდაკლება ჯგუფური მეცადინეობისას და 10%-იანი ფასდაკლება ინდივიდუალური სწავლებისას თქვენივე განვითარებისთვის. <br />6. არ მოგეთხოვებათ ფიქსირებული სამუშაო საათები</p>\n<p>აუცილებელი მოთხოვნები:</p>\n<p>უმაღლესი ან მიმდინარე განათლება, სასურველია ბიზნეს ადმინისტრირების სპეციალობით;<br />საოფისე პროგრამების ცოდნა;<br />გუნდური მუშაობის უნარი;<br />მოლაპარაკების წარმოების უნარი;<br />დამარწმუნებელი;<br />კომუნიკაბელური;<br />მოტივირებული;<br />ორგანიზებული და მოწესრიგებული;<br />შედეგზე ორიენტირებული;<br />პასუხისმგებლობის მაღალი გრძნობა.</p>\n<p>მსურველმა გამოგზავნოს თავისი CV ქართულ ენაზე, ჩვენ თავად დავუკავშირდებით სასურველ კანდიდატებს.<br />ისეთი პირები, რომლებიც არ აკმაყოფილებენ ზემოთ ჩამოთვლილ პირობებს ნუ გამოგვიგზავნიან თავიანთ მონაცემებს.<br />დამატებითი ინფორმაცია ჩვენი კომპანიის და პირობების შესახებ იხილეთ: www.vipintellect.ge</p>\n<p>შპს ,,VIP Intellect Group&rdquo; ერთ-ერთი მრავალპროფილიანი სასწავლო ცენტრია საქართველოში, რომლის მენეჯმენტს და ძირითად გუნდს მუშაობის 16 წლიანი გამოცდილება გააჩნია.</p>\n<p>,,VIP Intellect Group&rdquo; კურსდამთავრებულები არიან მრავალი ათეული ადგილობრივი და საერთაშორისო ორგანიზაცია: http://vipintellect.ge/new/index.php</p>\n<p>ჩვენი ტრენერები არიან გამოცდილი პრაქტიკოსი სპეციალისტები: პროგრამისტები, მენეჯერები, ფინანსისტები, ბიზნეს ექსპერტები, მარკეტოლოგები და ბუღალტრები!</p>\n<p>www.vipintellect.ge<br />e-mail: ninovipicg@gmail.com</p>\n<p>&nbsp;</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(299,14,0,1523044800,'2018-04-06','languagedata','contactus','<p>დაგვიკავშირდით</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(300,15,0,1523044800,'2018-04-06','languagedata','search','<p>ძიება</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(301,17,0,1523131200,'2018-04-07','languagedata','registertraining','<p>დარეგისტრირდი ტრენინგზე</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(302,18,0,1523131200,'2018-04-07','languagedata','namelname','<p>სახელი გვარი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(303,19,0,1523131200,'2018-04-07','languagedata','email','<p>ელ-ფოსტა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(304,20,0,1523131200,'2018-04-07','languagedata','contactnumber','<p>საკონტაქტო ნომერი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(305,21,0,1523131200,'2018-04-07','languagedata','age','<p>ასაკი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(306,22,0,1523131200,'2018-04-07','languagedata','trainingstarttime','<p>გაკვეთილის დაწყების მისაღები საათი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(307,23,0,1523131200,'2018-04-07','languagedata','howfindus','<p>საიდან შეიტყვეთ ჩვენს შესახებ?</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(308,29,0,1523131200,'2018-04-07','languagedata','choosetraining','<p>აირჩიეთ ტრენინგი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(309,30,0,1523131200,'2018-04-07','languagedata','register','<p>რეგისტრაცია</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(310,32,0,1523131200,'2018-04-07','languagedata','trainings','<p>ტრენინგები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(311,33,0,1523131200,'2018-04-07','languagedata','usefulllinks','<p>სასარგებლო ბმულები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(312,36,0,1523131200,'2018-04-08','languagedata','archive','<p>არქივი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(313,37,0,1523131200,'2018-04-08','languagedata','allnews','<p>ყველა სიახლე</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(314,38,0,1523131200,'2018-04-08','languagedata','news','<p>სიახლეები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(315,39,0,1523217600,'2018-04-09','languagedata','lastnews','<p>ბოლო სიახლეები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(316,40,0,1523217600,'2018-04-09','languagedata','viewprofile','<p>პროფილის ნახვა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(317,42,0,1523217600,'2018-04-09','languagedata','contactinfo','<p>საკონტაქტო ინფორმაცია</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(318,43,0,1523217600,'2018-04-09','languagedata','more','<p>ნახე მეტი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(319,45,0,1523217600,'2018-04-09','languagedata','allvacancies','<p>ყველა ვაკანსია</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(320,46,0,1523217600,'2018-04-09','languagedata','writeus','<p>მოგვწერეთ</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(321,47,0,1523217600,'2018-04-09','languagedata','message','<p>შეტყობინება</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(322,48,0,1523217600,'2018-04-09','languagedata','send','<p>გაგზავნა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(323,52,0,1523304000,'2018-04-10','languagedata','gallery','<p>გალერეა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(324,54,0,1523304000,'2018-04-10','languagedata','main','<p>მთავარი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(325,55,0,1523304000,'2018-04-10','languagedata','vacancies','<p>ვაკანსიები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(326,56,0,1523304000,'2018-04-10','languagedata','ourteam','<p>ჩვენი გუნდი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(327,59,0,1523390400,'2018-04-11','languagedata','errorallfieldsrequire','<p>ყველა ველი სავალდებულოა!</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(328,60,0,1523390400,'2018-04-11','languagedata','erroremail','<p>ელ-ფოსტა არასწორია !</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(329,61,0,1523390400,'2018-04-11','languagedata','errornull','<p>ოპერაცია წარმატებით შესრულდა !</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(330,62,0,1523390400,'2018-04-11','languagedata','error','<p>მოხდა შეცდომა !</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(331,118,0,1523908800,'2018-04-17','languagedata','finishprojects','<p>დასრულებული პროექტები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(342,151,0,1543953600,'2018-12-05','languagedata','specialists','<p>სპეციალობები</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(343,151,0,1543953600,'2018-12-05','languagedata','specialists','<p>სპეციალობები</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(344,151,0,1543953600,'2018-12-05','languagedata','specialists','<p>სპეციალობები</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(351,154,0,1544126400,'2018-12-07','languagedata','firstname','<p>სახელი</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(352,154,0,1544126400,'2018-12-07','languagedata','firstname','<p>სახელი</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(353,154,0,1544126400,'2018-12-07','languagedata','firstname','<p>სახელი</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(354,155,0,1544126400,'2018-12-07','languagedata','subject','<p>თემა</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(355,155,0,1544126400,'2018-12-07','languagedata','subject','<p>თემა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(356,155,0,1544126400,'2018-12-07','languagedata','subject','<p>თემა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0),(366,159,0,1544385600,'2018-12-10','languagedata','keyword','<p>საკვანძო სიტყვა</p>','','empty','empty','empty','empty','empty','empty','','en',0,0),(367,159,0,1544385600,'2018-12-10','languagedata','keyword','<p>საკვანძო სიტყვა</p>','','empty','empty','empty','empty','empty','empty','','ge',0,0),(368,159,0,1544385600,'2018-12-10','languagedata','keyword','<p>საკვანძო სიტყვა</p>','','empty','empty','empty','empty','empty','empty','','de',0,0);
/*!40000 ALTER TABLE `usefull` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usefull_modules`
--

DROP TABLE IF EXISTS `usefull_modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `usefull_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idx` int(11) NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `fields` text COLLATE utf8_unicode_ci NOT NULL,
  `lang` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usefull_modules`
--

LOCK TABLES `usefull_modules` WRITE;
/*!40000 ALTER TABLE `usefull_modules` DISABLE KEYS */;
INSERT INTO `usefull_modules` VALUES (17,9,'languagedata','Language data','{\n  \"date\": {\n      \"visibility\":\"true\",\n      \"title\":\"თარიღი\",\n      \"defaultValue\":\"\"\n  },\n  \"title\":{\n    \"visibility\":\"true\",\n    \"title\":\"სათაური\",\n    \"defaultValue\":\"\"\n  },\n  \"pageText\":{\n    \"visibility\":\"true\",\n    \"title\":\"აღწერა\",\n    \"defaultValue\":\"\"\n  },\n  \"classname\":{\n    \"visibility\":\"true\",\n    \"title\":\"კლასი\",\n    \"defaultValue\":\"\"\n  },\n  \"link\":{\n    \"visibility\":\"true\",\n    \"title\":\"ბმული\",\n    \"defaultValue\":\"\"\n  },\n  \"photoUploaderBox\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფოტოს მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n  \"file_attach\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფაილის მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n\"additional1\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional2\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional3\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional4\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional5\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n\"map_coordinates\":{\n    \"visibility\":\"false\",\n    \"title\":\"რუკა\",\n    \"defaultValue\":\"\"\n}\n}','en',0),(18,9,'languagedata','თარგმნა','{\n  \"date\": {\n      \"visibility\":\"true\",\n      \"title\":\"თარიღი\",\n      \"defaultValue\":\"\"\n  },\n  \"title\":{\n    \"visibility\":\"true\",\n    \"title\":\"სათაური\",\n    \"defaultValue\":\"\"\n  },\n  \"pageText\":{\n    \"visibility\":\"true\",\n    \"title\":\"აღწერა\",\n    \"defaultValue\":\"\"\n  },\n  \"classname\":{\n    \"visibility\":\"true\",\n    \"title\":\"კლასი\",\n    \"defaultValue\":\"\"\n  },\n  \"link\":{\n    \"visibility\":\"true\",\n    \"title\":\"ბმული\",\n    \"defaultValue\":\"\"\n  },\n  \"photoUploaderBox\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფოტოს მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n  \"file_attach\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფაილის მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n\"additional1\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional2\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional3\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional4\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional5\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n\"map_coordinates\":{\n    \"visibility\":\"false\",\n    \"title\":\"რუკა\",\n    \"defaultValue\":\"\"\n}\n}','ge',0),(42,9,'languagedata','თარგმნა','{\n  \"date\": {\n      \"visibility\":\"true\",\n      \"title\":\"თარიღი\",\n      \"defaultValue\":\"\"\n  },\n  \"title\":{\n    \"visibility\":\"true\",\n    \"title\":\"სათაური\",\n    \"defaultValue\":\"\"\n  },\n  \"pageText\":{\n    \"visibility\":\"true\",\n    \"title\":\"აღწერა\",\n    \"defaultValue\":\"\"\n  },\n  \"classname\":{\n    \"visibility\":\"true\",\n    \"title\":\"კლასი\",\n    \"defaultValue\":\"\"\n  },\n  \"link\":{\n    \"visibility\":\"true\",\n    \"title\":\"ბმული\",\n    \"defaultValue\":\"\"\n  },\n  \"photoUploaderBox\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფოტოს მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n  \"file_attach\":{\n    \"visibility\":\"true\",\n    \"title\":\"ფაილის მიმაგრება\",\n    \"defaultValue\":\"\"\n  },\n\"additional1\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional2\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional3\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional4\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n \"additional5\":{\n    \"visibility\":\"false\",\n    \"title\":\"დამატებითი ველი\",\n    \"defaultValue\":\"\"\n },\n\"map_coordinates\":{\n    \"visibility\":\"false\",\n    \"title\":\"რუკა\",\n    \"defaultValue\":\"\"\n}\n}','de',0);
/*!40000 ALTER TABLE `usefull_modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (2,'root','202cb962ac59075b964b07152d234b70',0);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users_website`
--

DROP TABLE IF EXISTS `users_website`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users_website` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `register_date` int(11) NOT NULL,
  `register_ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `trainingid` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `starttime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `howfind` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users_website`
--

LOCK TABLES `users_website` WRITE;
/*!40000 ALTER TABLE `users_website` DISABLE KEYS */;
/*!40000 ALTER TABLE `users_website` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-09-14 13:33:48
