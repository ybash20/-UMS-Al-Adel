-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: aladel
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `addresses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Directorate_ID` bigint(20) unsigned DEFAULT NULL,
  `Neighborhood` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `addresses`
--

LOCK TABLES `addresses` WRITE;
/*!40000 ALTER TABLE `addresses` DISABLE KEYS */;
/*!40000 ALTER TABLE `addresses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bloods`
--

DROP TABLE IF EXISTS `bloods`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bloods` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Type` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bloods`
--

LOCK TABLES `bloods` WRITE;
/*!40000 ALTER TABLE `bloods` DISABLE KEYS */;
/*!40000 ALTER TABLE `bloods` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `books`
--

DROP TABLE IF EXISTS `books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(255) DEFAULT NULL,
  `Author` varchar(255) DEFAULT NULL,
  `Number_of_Page` int(10) unsigned DEFAULT NULL,
  `Cover_Image` varchar(255) DEFAULT NULL,
  `Edition` varchar(30) DEFAULT NULL,
  `Section_ID` bigint(20) unsigned DEFAULT NULL,
  `Publication_year` int(10) unsigned DEFAULT NULL,
  `Publisher` varchar(255) DEFAULT NULL,
  `Language` varchar(50) DEFAULT NULL,
  `Quantity` int(10) unsigned DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=116 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `books`
--

LOCK TABLES `books` WRITE;
/*!40000 ALTER TABLE `books` DISABLE KEYS */;
INSERT INTO `books` VALUES (1,'Data Mining','Ian H. Witten',642,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(2,'Algorithms','Robert Sedgewick and Kevin Wayne',969,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'An Introduction to Object-Oriented','C.Thomas Wu',1009,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'Ethics For the Information Age','Michael J. Quinn',551,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'Logic and Computer Design Fundamentals, Fourth Edition','M. Morris Mano Charles Kime',700,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'C How To Program','P. J. Deitel Deitel &',1000,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'C HOW TO PROGRAM','Paul Deitel & Harvey Deitel',1006,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'C++ HOW TO PROGRAM','Paul Deitel & Harvey Deitel',1303,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'A Complete Guide to Programming in C++','Ulla Kirch-Prinz Peter Prinz',846,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Data Structures Using C','Reema Thareja',557,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'Digital Fundamentals ELEVENTH EDITION','Thomas L. Floyd',953,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'DISCRETE MATHEMATICS','Clifford Stein',526,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Discrete Mathematics and Its Applications Seventh Edition','Kenneth H. Rosen',1071,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'Computer Programming for Teens','Mary Farrell',353,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'Digital Design','M. Morris Mano',525,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'English++ English for Computer Science Students','Jagiellonian Language Center Jagiellonian University',231,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'DATA STRUCTURES USING C++','D.S. MALIK',945,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'ETHICS IN INFORMATION TECHNOLOGY','George W. Reynolds',482,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'Java How to program','Paul Deitel & Harvey Deitel',1245,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'Java How to program','Paul Deitel & Harvey Deitel',1705,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'SCHAUM’S OUTLINE OF THEORY AND PROBLEMS of PROGRAMMING WITH C++ Second Edition','JOHN R. HUBBARD',434,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'The C Programming Language','Brian W. Kernighan and Dennis M. Ritchie',288,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Object-Oriented Programming in C++, Fourth Edition','Robert Lafore',1038,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'Practical C++ Programming','Steve Oualline',549,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'Oxford English for Information Technology','Eric H. Glendinning & John McEwan',225,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Practical Machine Learning with Python A Problem-Solver’s Guide to Building Real-World Intelligent Systems','Dipanjan Sarkar Raghav Bali Tushar Sharma',545,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'Principles to Data Structure using C and C++','Vinu V. Das',375,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'Programming Principles and Practice Using C++','Bjarne Stroustrup',1267,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'Fundamentals of Semiconductors Physics and Materials Properties Fourth Edition','Peter Y. Yu & Manuel Cardona',793,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(30,'Student\'s Solutions Guide to accompany Discrete Mathematics and Its Applications Seventh Edition','Kenneth H. Rosen',576,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(31,'Instructor’s Manual for C++ How to Program, 3/e','Deitel, Deitel & Nieto',577,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(32,'Teach Yourself in21Days','Jesse Liberty Bradley Jones',937,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(33,'Data Mining','Jiawei Han &',740,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(34,'Thinking in C++, Volume 1, 2nd Edition','Bruce Eckel',878,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(35,'Cisco CCENT/ CCNA ICND1 100-101 Official Cert Guide Academic Edition','Wendell Odom',1015,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(36,'CCENT/CCNA ICND1 Official Exam Certification Guide, Second Edition','Wendell Odom',685,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(37,'Introduction to Algorithms','Thomas H. Cormen Charles E. Leiserson Ronald L. Rivest Clifford Stein',1313,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(38,'Introduction to the Design and Analysis Of Algorithms','Anany Levitin',593,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(39,'OPERATING SYSTEM CONCEPTS','ABRAHAM SILBERSCHATZ',1278,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(40,'Modern Information Retrieval','Recardo Baeza-Yates & Berthier Ribeiro-Neto',964,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(41,'Advanced Programming in the UNIX® Environment Third Edition','W. Richard Stevens Stephen A. Rago',1034,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(42,'Cisco CCNA Exam #640-507 Certification Guide','Wendell Odom',864,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(43,'CCNA ICND2 Official Certification Guide','Wendell Odom',734,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(44,'COMPUTER ETHICS: A CASE-BASED APPROACH','ROBERT N. BARGER',265,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(45,'COMPUTER NETWORKING A Top-Down Approach','James F. Kurose Amherst Keith W. Ross',775,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(46,'Computer Networks a systems approach','Larry L. Peterson and Bruce S. Davie',921,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(47,'Computer Networks and Internets','DOUGLAS E. COMER',668,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(48,'Computer Networks and the Internet A Hands-On Approach','Gerry Howser',555,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(49,'COMPUTER NETWORKS FIFTH EDITION','ANDREW S. TANENBAUM & DAVID J. WETHERALL',962,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(50,'DATABASE SYSTEM CONCEPTS SIXTH EDITION','Abraham Silberschatz & Henry F. Korth &',1373,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(51,'Distributed Systems design and algorithms','Edited by Serge Haddad Fabrice Kordon Laurent Pautet Laure Petrucci',324,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(52,'DISTRIBUTED SYSTEMS Concepts and Design Fifth Edition','George Coulouris & Jean Dollimore &',1064,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(53,'Distributed Systems Principles and Second Edition','Paradigms Andrew S. Tanenbaum Maarten Van Steen',638,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(54,'Ethical and Social Issues in the Information Age Joseph Migga Kizza Sixth Edition','Joseph Migga Kizza',422,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(55,'INTRODUCTIO N TO PARALLEL ALGORITHMS AND ARCHITECTURES: ARRAYS · TREES · HYPERCUBES','F. THOMSO N LEIGHTO N',839,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(56,'Introduction to Parallel Processing Algorithms and Architectures','Rami G. Melhem',557,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(57,'Object-Oriented Systems Analysis and Design using UML','Simmon Bennett, Steve McRobb and Ray Farmer',636,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(58,'Machine Learning','Tom M. Mitchell',421,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(59,'Image Processing, Analysis, and Machine Vision','Milan Sonka &',930,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(60,'Programming Languages','Kenneth C. Louden Kenneth A. Lambert',666,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(61,'Data Science from Scratch','Joel Grus',464,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(62,'Information Technology for Management','Henry C. Lucas, Jr.',752,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(63,'Artificial Intelligence A Modern Approach Third Edition','Stuart J. Russell and Peter Norvig',1151,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(64,'Hello, Startup A programmer’s guide to building products, technologies, and teams','Yevgeniy Brikman',593,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(65,'Introducing Data Science BIG DATA, MACHINE LEARNING, AND MORE, USING PYTHON TOOLS','DAVY CIELEN ARNO D. B. MEYSMAN MOHAMED ALI',322,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(66,'Probability & Statistics with Applications to Computing','Alex Tsun',384,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(67,'Python Data Science Essentials Second Edition','Alberto Boschetti Luca Massaron',374,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(68,'PROBABILITY AND STATISTICS FOR COMPUTER SCIENTISTS SECOND EDITION','Michael Baron',469,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(69,'USING INFORMATION Technology','BRIAN K. WILLIAMS & STACEY C. SAWYER',606,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(70,'Applied Numerical Analysis','Curtis F. Gerald &',620,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(71,'Cambridge English for Engineering','Mark Ibbotson',110,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(72,'CONCEPTS OF PROGRAMMING LANGUAGES TENTH EDITION','ROBERT W. SEBESTA',816,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(73,'Design Concepts in Programming Languages','Franklyn Turbak and David Gifford with Mark A. Sheldon',1347,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(74,'SOFTWARE ENGINEERING','Ian Sommerville',790,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(75,'FUNDAMENTALS OF Database Systems SEVENTH EDITION','Ramez Elmasri & Shamkant B. Navathe',1274,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(76,'Human–Computer Interaction Third Edition','Alan Dix & Janet Finlay & Gregory D. Abowd & Russell Beale',382,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(77,'Information technology Project management','Kathy Schwalbe',609,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(78,'Introduction to the Theory of Computation','Michael Sipser',482,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(79,'THE ART OF SOFTWARE TESTING','GLENFORD J. MYERS TOM BADGETT COREY SANDLER',254,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(80,'Object-Oriented Analysis and Design with Applications Third Edition','Grady Booch, Ivar Jacobson, and James Rumbaugh',717,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(81,'Object-Oriented Software Engineering Practical Software Development using UML and Java Second edition','Timothy C. Lethbridge Robert Laganière',561,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(82,'STRUCTURED COMPUTER ORGANIZATION','ANDREW S. TANENBAUM &',801,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(83,'Microsoft® Visual Studio® 2015 Unleashed','Lars Powers Mike Snell',2266,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(84,'AN INTRODUCTION TO NUMERICAL METHODS AND ANALYSIS','JAMES F. EPPERSON',615,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(85,'Numerical Analysis','Walter Gautschi',615,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(86,'Linear Algebra','David Cherney, Tom Denton, Rohit Thomas and Andrew Waldron',436,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(87,'An Introduction to Numerical Analysis','Endre S¨uli and David F. Mayers',445,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(88,'Windows Server ® Administration Fundamentals, Exam 98-365','Bryan Gambrel',242,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(89,'HTML & CSS Design and Build Websites','Jon Ducket',514,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(90,'Mastering Windows Server 2016','Jordan Krause',537,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(91,'CSS Mastery Advanced Web Standards Solutions','Andy Budd with Cameron Moll and Simon Collison',247,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(92,'A Modern Introduction to Probability and Statistics','F.M. Dekking C. Kraaikamp H.P. Lopuhaa¨ L.E. Meester',483,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(93,'CIS Microsoft Windows Server 2012 R2 Benchmark','Center for Internet Security',732,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(94,'Probability and Statistics The Science of Uncertainty','Michael J. Evans and Je§rey S. Rosenthal',773,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(95,'AN INTRODUCTION TO NUMERICAL ANALYSIS','Kendall E. Atkinson',663,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(96,'Data Structures and Algorithms DSA','Granville Barnett',112,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(97,'Data Structures and Algorithms in Java™ Sixth Edition','Michael T. Goodrich & Roberto Tamassia & Michael H. Goldwasser',738,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(98,'Data Structures and Algorithm Analysis in C++','Mark Allen Weiss',654,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(99,'Data Structures and Algorithm Analysis','Clifford A. Shaffer',613,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(100,'Algorithm Design','Jon Kleinberg & Eva Tardos',864,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(101,'Algorithms','Jeff Erickson',472,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(102,'Data Structures and Algorithm','TutorialPOINT',262,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(103,'Learning Web Design Fourth Edition','Jennifer Niederst Robbins',621,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(104,'THE PRINCIPLES OF BEAUTIFUL WEB DESIGN','JASON BEAIRD & JAMES GEORGE',211,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(105,'Beginning Visual C#','Karli Watson David Espinosa Zach Greenvoss Christian Nagel Jacob Hammer Pedersen Jon D. Reid Matthew Reynolds Morgan Skinner Eric White',1250,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(106,'Learn SQL Server Administration in a Month of Lunches','DON JONES',258,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(107,'Applied Microsoft .NET Framework Programming','Jeffrey Richter',500,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(108,'CLR via C# Full Coverage of Multicore Programming FOURTH EDITION','Jeffrey Richter',813,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(109,'Mastering C# Database Programming','Jason Price',710,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(110,'FUNDAMENTALS OF COMPUTER PROGRAMMING WITH C#','Svetlin Nakov & Co',1122,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(111,'Microsoft® SQL Server™ 2005 Programming FOR DUMmIES','Andrew Watt',435,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(112,'C# 5.0 IN A NUTSHELL Fifth Edition','Joseph Albahari and Ben Albahari',1062,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(113,'SQL Tutorial','tutorialspoint.com',200,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(114,'SQL Server 2016 Developer\'s Guide','Dejan Sarka Miloš Radivojević William Durkin',607,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(115,'Thinking in C# (Revision 0.1)','Bruce Eckel',799,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `certificates`
--

DROP TABLE IF EXISTS `certificates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `certificates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Qualification_ID` bigint(20) unsigned DEFAULT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Graduation_Year` int(10) unsigned DEFAULT NULL,
  `Disciplines` varchar(30) DEFAULT NULL,
  `Maximum_Pass_Grade` int(10) unsigned DEFAULT NULL,
  `Total_Grades` int(10) unsigned DEFAULT NULL,
  `Percentage` int(10) unsigned DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Certificate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `certificates`
--

LOCK TABLES `certificates` WRITE;
/*!40000 ALTER TABLE `certificates` DISABLE KEYS */;
/*!40000 ALTER TABLE `certificates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `colleges`
--

DROP TABLE IF EXISTS `colleges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `colleges` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Dean` varchar(30) DEFAULT NULL,
  `Dean_Speech` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `colleges`
--

LOCK TABLES `colleges` WRITE;
/*!40000 ALTER TABLE `colleges` DISABLE KEYS */;
/*!40000 ALTER TABLE `colleges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_categories`
--

DROP TABLE IF EXISTS `content_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_categories`
--

LOCK TABLES `content_categories` WRITE;
/*!40000 ALTER TABLE `content_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `content_images`
--

DROP TABLE IF EXISTS `content_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `content_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Content_ID` bigint(20) unsigned DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `content_images`
--

LOCK TABLES `content_images` WRITE;
/*!40000 ALTER TABLE `content_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `content_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contents`
--

DROP TABLE IF EXISTS `contents`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contents` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Content` varchar(255) DEFAULT NULL,
  `Category_ID` bigint(20) unsigned DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contents`
--

LOCK TABLES `contents` WRITE;
/*!40000 ALTER TABLE `contents` DISABLE KEYS */;
/*!40000 ALTER TABLE `contents` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `courses`
--

DROP TABLE IF EXISTS `courses`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `courses` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) DEFAULT NULL,
  `Major_ID` bigint(20) unsigned DEFAULT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Duration` int(10) unsigned DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `courses`
--

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;
/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `degree_levels`
--

DROP TABLE IF EXISTS `degree_levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `degree_levels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `degree_levels`
--

LOCK TABLES `degree_levels` WRITE;
/*!40000 ALTER TABLE `degree_levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `degree_levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `directorates`
--

DROP TABLE IF EXISTS `directorates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `directorates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Governorate_ID` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `directorates`
--

LOCK TABLES `directorates` WRITE;
/*!40000 ALTER TABLE `directorates` DISABLE KEYS */;
/*!40000 ALTER TABLE `directorates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_check`
--

DROP TABLE IF EXISTS `email_check`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_check` (
  `email` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `email_check_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_check`
--

LOCK TABLES `email_check` WRITE;
/*!40000 ALTER TABLE `email_check` DISABLE KEYS */;
INSERT INTO `email_check` VALUES ('w3ghost775@gmail.com','$2y$10$Audgzhw1ZUJ5Z8SUcFJtie.DemtfHYIJDKFNKTQwpifaQFTJ5ge9W','2024-06-05 13:07:30','2024-06-05 13:14:34');
/*!40000 ALTER TABLE `email_check` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event_catagories`
--

DROP TABLE IF EXISTS `event_catagories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event_catagories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event_catagories`
--

LOCK TABLES `event_catagories` WRITE;
/*!40000 ALTER TABLE `event_catagories` DISABLE KEYS */;
/*!40000 ALTER TABLE `event_catagories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `events` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Location` varchar(30) DEFAULT NULL,
  `Category_ID` bigint(20) unsigned DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `events`
--

LOCK TABLES `events` WRITE;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
/*!40000 ALTER TABLE `events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Student_ID` bigint(20) unsigned DEFAULT NULL,
  `Course_ID` bigint(20) unsigned DEFAULT NULL,
  `Rating` int(10) unsigned DEFAULT NULL,
  `Comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `governorates`
--

DROP TABLE IF EXISTS `governorates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `governorates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `governorates`
--

LOCK TABLES `governorates` WRITE;
/*!40000 ALTER TABLE `governorates` DISABLE KEYS */;
/*!40000 ALTER TABLE `governorates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grades`
--

DROP TABLE IF EXISTS `grades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `grades` (
  `Student_ID` bigint(20) unsigned DEFAULT NULL,
  `Course_ID` bigint(20) unsigned DEFAULT NULL,
  `Grade_30` int(10) unsigned DEFAULT NULL,
  `Grade_70` int(10) unsigned DEFAULT NULL,
  `Grade_100` int(10) unsigned DEFAULT NULL,
  `Spoint` varchar(255) DEFAULT NULL,
  `Note` varchar(255) DEFAULT NULL,
  `Turn` int(10) unsigned DEFAULT NULL,
  `Semester` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grades`
--

LOCK TABLES `grades` WRITE;
/*!40000 ALTER TABLE `grades` DISABLE KEYS */;
/*!40000 ALTER TABLE `grades` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guardians`
--

DROP TABLE IF EXISTS `guardians`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guardians` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Registration_ID` bigint(20) unsigned DEFAULT NULL,
  `Name` varchar(255) DEFAULT NULL,
  `Relationship` varchar(30) DEFAULT NULL,
  `Profession` varchar(30) DEFAULT NULL,
  `Workplace` varchar(30) DEFAULT NULL,
  `Address_ID` bigint(20) unsigned DEFAULT NULL,
  `Phone_Number` varchar(30) DEFAULT NULL,
  `Landline_No` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guardians`
--

LOCK TABLES `guardians` WRITE;
/*!40000 ALTER TABLE `guardians` DISABLE KEYS */;
/*!40000 ALTER TABLE `guardians` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `identities`
--

DROP TABLE IF EXISTS `identities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `identities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Type` varchar(30) DEFAULT NULL,
  `Number` varchar(30) DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Issuing_Authority` date DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `identities`
--

LOCK TABLES `identities` WRITE;
/*!40000 ALTER TABLE `identities` DISABLE KEYS */;
/*!40000 ALTER TABLE `identities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `levels`
--

DROP TABLE IF EXISTS `levels`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `levels` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `levels`
--

LOCK TABLES `levels` WRITE;
/*!40000 ALTER TABLE `levels` DISABLE KEYS */;
/*!40000 ALTER TABLE `levels` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `library_sections`
--

DROP TABLE IF EXISTS `library_sections`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `library_sections` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `library_sections`
--

LOCK TABLES `library_sections` WRITE;
/*!40000 ALTER TABLE `library_sections` DISABLE KEYS */;
/*!40000 ALTER TABLE `library_sections` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `magazines`
--

DROP TABLE IF EXISTS `magazines`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `magazines` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) DEFAULT NULL,
  `Issue_Date` date DEFAULT NULL,
  `Cover_Image` varchar(255) DEFAULT NULL,
  `Author` varchar(30) DEFAULT NULL,
  `Version` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `magazines`
--

LOCK TABLES `magazines` WRITE;
/*!40000 ALTER TABLE `magazines` DISABLE KEYS */;
/*!40000 ALTER TABLE `magazines` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `majors`
--

DROP TABLE IF EXISTS `majors`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `majors` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `College_ID` bigint(20) unsigned DEFAULT NULL,
  `Degree_Level_ID` bigint(20) unsigned DEFAULT NULL,
  `Prerequisites` varchar(255) DEFAULT NULL,
  `Career_Opportunities` varchar(255) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `majors`
--

LOCK TABLES `majors` WRITE;
/*!40000 ALTER TABLE `majors` DISABLE KEYS */;
/*!40000 ALTER TABLE `majors` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maritals`
--

DROP TABLE IF EXISTS `maritals`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `maritals` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Status` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maritals`
--

LOCK TABLES `maritals` WRITE;
/*!40000 ALTER TABLE `maritals` DISABLE KEYS */;
/*!40000 ALTER TABLE `maritals` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (103,'2014_10_12_000000_create_users_table',1),(104,'2014_10_12_100000_create_password_resets_table',1),(105,'2016_08_07_145904_add_table_ums_apicustom',1),(106,'2016_08_07_150834_add_table_ums_dashboard',1),(107,'2016_08_07_151210_add_table_ums_logs',1),(108,'2016_08_07_152014_add_table_ums_privileges',1),(109,'2016_08_07_152214_add_table_ums_privileges_roles',1),(110,'2016_08_07_152320_add_table_ums_settings',1),(111,'2016_08_07_152421_add_table_ums_users',1),(112,'2016_08_07_154624_add_table_ums_menus_privileges',1),(113,'2016_08_07_154624_add_table_ums_moduls',1),(114,'2016_08_20_125418_add_table_ums_notifications',1),(115,'2016_09_04_033706_add_table_ums_email_queues',1),(116,'2016_09_17_104728_create_nullable_ums_apicustom',1),(117,'2016_10_01_144826_add_table_apikey',1),(118,'2016_11_14_141657_create_ums_menus',1),(119,'2016_11_15_132350_create_ums_email_templates',1),(120,'2016_11_15_190410_create_ums_statistics',1),(121,'2016_11_17_102740_create_ums_statistic_components',1),(122,'2019_08_19_000000_create_failed_jobs_table',1),(123,'2019_12_14_000001_create_personal_access_tokens_table',1),(124,'2024_05_21_061742_create_contents_table',1),(125,'2024_05_21_063538_create_content_categories_table',1),(126,'2024_05_21_063633_create_maritals_table',1),(127,'2024_05_21_063700_create_bloods_table',1),(128,'2024_05_21_063746_create_identities_table',1),(129,'2024_05_21_063852_create_content_images_table',1),(130,'2024_05_21_063922_create_registrations_table',1),(131,'2024_05_21_063958_create_certificates_table',1),(132,'2024_05_21_064042_create_guardians_table',1),(133,'2024_05_21_064117_create_qualifications_table',1),(134,'2024_05_21_064155_create_departments_table',1),(135,'2024_05_21_064338_create_magazines_table',1),(136,'2024_05_21_064620_create_events_table',1),(137,'2024_05_21_064832_create_news_categories_table',1),(138,'2024_05_21_064918_create_news_table',1),(139,'2024_05_21_064945_create_news_images_table',1),(140,'2024_05_21_065546_create_directorates_table',1),(141,'2024_05_21_065603_create_addresses_table',1),(142,'2024_05_21_065701_create_event_catagories_table',1),(143,'2024_05_21_065723_create_feedback_table',1),(144,'2024_05_21_065740_create_majors_table',1),(145,'2024_05_21_065820_create_governorates_table',1),(146,'2024_05_21_065942_create_library_sections_table',1),(147,'2024_05_21_065956_create_grades_table',1),(148,'2024_05_21_070035_create_students_table',1),(149,'2024_05_21_070049_create_levels_table',1),(150,'2024_05_21_070112_create_books_table',1),(151,'2024_05_21_070138_create_colleges_table',1),(152,'2024_05_21_070152_create_courses_table',1),(153,'2024_05_21_070212_create_degree_levels_table',1),(154,'2024_06_02_194245_create_email_check_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Title` varchar(30) DEFAULT NULL,
  `Article` text DEFAULT NULL,
  `Author` varchar(30) DEFAULT NULL,
  `Category_ID` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_categories`
--

DROP TABLE IF EXISTS `news_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_categories`
--

LOCK TABLES `news_categories` WRITE;
/*!40000 ALTER TABLE `news_categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news_images`
--

DROP TABLE IF EXISTS `news_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news_images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `News_ID` bigint(20) unsigned DEFAULT NULL,
  `Image` varchar(255) DEFAULT NULL,
  `Caption` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news_images`
--

LOCK TABLES `news_images` WRITE;
/*!40000 ALTER TABLE `news_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `news_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  UNIQUE KEY `password_resets_email_unique` (`email`)
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
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qualifications`
--

DROP TABLE IF EXISTS `qualifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qualifications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(30) DEFAULT NULL,
  `Level` varchar(30) DEFAULT NULL,
  `Institution` varchar(30) DEFAULT NULL,
  `Address_ID` bigint(20) unsigned DEFAULT NULL,
  `Country` varchar(30) DEFAULT NULL,
  `Description` varchar(30) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qualifications`
--

LOCK TABLES `qualifications` WRITE;
/*!40000 ALTER TABLE `qualifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `qualifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `Nationality` varchar(30) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Place_Of_Birth` varchar(30) DEFAULT NULL,
  `Marital_ID` bigint(20) unsigned DEFAULT NULL,
  `Blood_ID` bigint(20) unsigned DEFAULT NULL,
  `Address_ID` bigint(20) unsigned DEFAULT NULL,
  `Identity_ID` bigint(20) unsigned DEFAULT NULL,
  `Mobile_Phone_Number` varchar(9) DEFAULT NULL,
  `Major_ID` bigint(20) unsigned DEFAULT NULL,
  `Certificate_ID` bigint(20) unsigned DEFAULT NULL,
  `Qualification_ID` bigint(20) unsigned DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `students` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Name` varchar(255) DEFAULT NULL,
  `Major_ID` bigint(20) unsigned DEFAULT NULL,
  `Level_ID` bigint(20) unsigned DEFAULT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Phone_number` varchar(255) DEFAULT NULL,
  `Address_ID` bigint(20) unsigned DEFAULT NULL,
  `Status` varchar(255) DEFAULT NULL,
  `Not_Allowed_Show` tinyint(1) DEFAULT NULL,
  `Notes` varchar(255) DEFAULT NULL,
  `Photo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `students`
--

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;
INSERT INTO `students` VALUES (1,'Bilal',NULL,NULL,'123',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_apicustom`
--

DROP TABLE IF EXISTS `ums_apicustom`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_apicustom` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `permalink` varchar(255) DEFAULT NULL,
  `tabel` varchar(255) DEFAULT NULL,
  `aksi` varchar(255) DEFAULT NULL,
  `kolom` varchar(255) DEFAULT NULL,
  `orderby` varchar(255) DEFAULT NULL,
  `sub_query_1` varchar(255) DEFAULT NULL,
  `sql_where` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `parameter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `method_type` varchar(25) DEFAULT NULL,
  `parameters` longtext DEFAULT NULL,
  `responses` longtext DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_apicustom`
--

LOCK TABLES `ums_apicustom` WRITE;
/*!40000 ALTER TABLE `ums_apicustom` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_apicustom` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_apikey`
--

DROP TABLE IF EXISTS `ums_apikey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_apikey` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `screetkey` varchar(255) DEFAULT NULL,
  `hit` int(11) DEFAULT NULL,
  `status` varchar(25) NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_apikey`
--

LOCK TABLES `ums_apikey` WRITE;
/*!40000 ALTER TABLE `ums_apikey` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_apikey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_dashboard`
--

DROP TABLE IF EXISTS `ums_dashboard`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_dashboard` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `id_ums_privileges` int(11) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_dashboard`
--

LOCK TABLES `ums_dashboard` WRITE;
/*!40000 ALTER TABLE `ums_dashboard` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_dashboard` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_email_queues`
--

DROP TABLE IF EXISTS `ums_email_queues`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_email_queues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `send_at` datetime DEFAULT NULL,
  `email_recipient` varchar(255) DEFAULT NULL,
  `email_from_email` varchar(255) DEFAULT NULL,
  `email_from_name` varchar(255) DEFAULT NULL,
  `email_cc_email` varchar(255) DEFAULT NULL,
  `email_subject` varchar(255) DEFAULT NULL,
  `email_content` text DEFAULT NULL,
  `email_attachments` text DEFAULT NULL,
  `is_sent` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_email_queues`
--

LOCK TABLES `ums_email_queues` WRITE;
/*!40000 ALTER TABLE `ums_email_queues` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_email_queues` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_email_templates`
--

DROP TABLE IF EXISTS `ums_email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_email_templates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `from_name` varchar(255) DEFAULT NULL,
  `from_email` varchar(255) DEFAULT NULL,
  `cc_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_email_templates`
--

LOCK TABLES `ums_email_templates` WRITE;
/*!40000 ALTER TABLE `ums_email_templates` DISABLE KEYS */;
INSERT INTO `ums_email_templates` VALUES (1,'Email Template Forgot Password Backend','forgot_password_backend','Reset Password','<p>Hi,</p><p>Someone requested forgot password, here is your new password : </p><p>[password]</p><p><br></p><p>--</p><p>Regards,</p><p>Admin</p>','[password]','UMS','',NULL,'2024-06-05 10:39:08',NULL),(2,'Checking Email','check_email','Check email address','<h1 style=\"font-family: Arial, Helvetica, sans-serif; font-size: 32px; line-height: 36px; padding-bottom: 10px; color: rgb(51, 51, 51); text-align: center;\">تحقق من عنوان البريد الإلكتروني الخاص بك</h1><div style=\"font-family: Arial, Helvetica, sans-serif; font-size: 17px; line-height: 25px; color: rgb(51, 51, 51);\"><p>لقد قمت مؤخرًا بتحديد&nbsp;<b style=\"font-size: 18px;\">[email]</b>&nbsp;كبريدك الكتروني. للتحقق من أن عنوان البريدالإلكتروني هذا ينتمي لك، قم بإدخال الرمز أدناه على صفحة التحقق من البريد الإلكتروني:</p><div style=\"font-size: 23px; line-height: 25px;\"><b>[code]</b></div><p><b>لماذا تلقيت هذا البريد الإلكتروني؟</b><br>يطلب UMS التحقق من البريد عند تحديد عنوان بريد إلكتروني. لا يمكن استخدام البريد إلكتروني الخاص بك حتى تقوم بالتحقق منه.</p><p>إذا لم تقم بإجراء هذه التغييرات أو إذا كنت تعتقد أن شخصًا غير مصرح له قد قام بالوصول إلى حسابك، فيتعين عليك تغيير كلمة السر الخاصة بك في أقرب وقت ممكن من صفحة الحساب</p><p>مع تحيات،</p><p>UMS Developers</p></div>','Check the authenticity of your email address','UMS','',NULL,'2024-06-05 10:39:08',NULL);
/*!40000 ALTER TABLE `ums_email_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_logs`
--

DROP TABLE IF EXISTS `ums_logs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_logs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ums_users` int(11) DEFAULT NULL,
  `ipaddress` varchar(50) DEFAULT NULL,
  `useragent` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `details` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_logs`
--

LOCK TABLES `ums_logs` WRITE;
/*!40000 ALTER TABLE `ums_logs` DISABLE KEYS */;
INSERT INTO `ums_logs` VALUES (1,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-05 10:39:44',NULL),(2,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-05 10:39:52',NULL),(3,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-05 11:17:20',NULL),(4,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-05 11:20:02',NULL),(5,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-05 11:28:41',NULL),(6,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-05 11:28:46',NULL),(7,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-05 11:30:52',NULL),(8,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-05 11:31:02',NULL),(9,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-05 11:32:42',NULL),(10,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-05 11:32:48',NULL),(11,NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/check-email','تم إرسال الرسالة إلى البريد الإلكتروني','email: w3ghost775@gmail.com<br>ip: 127.0.0.1<br>','2024-06-05 13:07:30',NULL),(12,NULL,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/check-email','تم إرسال الرسالة إلى البريد الإلكتروني','email: w3ghost775@gmail.com<br>ip: 127.0.0.1<br>','2024-06-05 13:14:34',NULL),(13,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-06 03:20:46',NULL),(14,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-07 07:34:40',NULL),(15,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/logout',':email تسجيل خروج','email: admin@crudbooster.com<br>','2024-06-07 07:34:55',NULL),(16,NULL,NULL,NULL,'http://localhost','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:37:41',NULL),(17,NULL,NULL,NULL,'http://localhost','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:39:09',NULL),(18,NULL,NULL,NULL,'http://localhost','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:39:54',NULL),(19,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:42:33',NULL),(20,1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36','http://127.0.0.1:8000/admin/login',':email سجل دخل من رقم آيبي :ip','email: admin@crudbooster.com<br>ip: 127.0.0.1<br>','2024-06-07 07:43:19',NULL),(21,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:49:44',NULL),(22,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:57:03',NULL),(23,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 07:57:19',NULL),(24,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات تم بنجاح : ','D:\\Al-Adel\\storage\\app\\backups\\backup-2024-06-07_11-26-27.sql','2024-06-07 08:26:29',NULL),(25,NULL,NULL,NULL,'http://localhost:888','النسخ الاحتياطي لقاعدة البيانات فشِل : ','','2024-06-07 08:41:50',NULL);
/*!40000 ALTER TABLE `ums_logs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_menus`
--

DROP TABLE IF EXISTS `ums_menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_menus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL DEFAULT 'url',
  `path` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `is_dashboard` tinyint(1) NOT NULL DEFAULT 0,
  `id_ums_privileges` int(11) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_menus`
--

LOCK TABLES `ums_menus` WRITE;
/*!40000 ALTER TABLE `ums_menus` DISABLE KEYS */;
INSERT INTO `ums_menus` VALUES (1,'Books','Route','AdminBooksControllerGetIndex',NULL,'fa fa-book',0,1,0,1,1,'2024-06-06 03:21:38',NULL);
/*!40000 ALTER TABLE `ums_menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_menus_privileges`
--

DROP TABLE IF EXISTS `ums_menus_privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_menus_privileges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ums_menus` int(11) DEFAULT NULL,
  `id_ums_privileges` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_menus_privileges`
--

LOCK TABLES `ums_menus_privileges` WRITE;
/*!40000 ALTER TABLE `ums_menus_privileges` DISABLE KEYS */;
INSERT INTO `ums_menus_privileges` VALUES (1,1,1);
/*!40000 ALTER TABLE `ums_menus_privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_moduls`
--

DROP TABLE IF EXISTS `ums_moduls`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_moduls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL,
  `table_name` varchar(255) DEFAULT NULL,
  `controller` varchar(255) DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_moduls`
--

LOCK TABLES `ums_moduls` WRITE;
/*!40000 ALTER TABLE `ums_moduls` DISABLE KEYS */;
INSERT INTO `ums_moduls` VALUES (1,'Notifications','fa fa-cog','notifications','ums_notifications','NotificationsController',1,1,NULL,'2024-06-05 10:39:08',NULL),(2,'Privileges','fa fa-cog','privileges','ums_privileges','PrivilegesController',1,1,NULL,'2024-06-05 10:39:08',NULL),(3,'Privileges_Roles','fa fa-cog','privileges_roles','ums_privileges_roles','PrivilegesRolesController',1,1,NULL,'2024-06-05 10:39:08',NULL),(4,'Users_Management','fa fa-users','users','ums_users','AdminUmsUsersController',0,1,NULL,'2024-06-05 10:39:08',NULL),(5,'settings','fa fa-cog','settings','ums_settings','SettingsController',1,1,NULL,'2024-06-05 10:39:08',NULL),(6,'Module_Generator','fa fa-database','module_generator','ums_moduls','ModulsController',1,1,NULL,'2024-06-05 10:39:08',NULL),(7,'Menu_Management','fa fa-bars','menu_management','ums_menus','MenusController',1,1,NULL,'2024-06-05 10:39:08',NULL),(8,'Email_Templates','fa fa-envelope-o','email_templates','ums_email_templates','EmailTemplatesController',1,1,NULL,'2024-06-05 10:39:08',NULL),(9,'Statistic_Builder','fa fa-dashboard','statistic_builder','ums_statistics','StatisticBuilderController',1,1,NULL,'2024-06-05 10:39:08',NULL),(10,'API_Generator','fa fa-cloud-download','api_generator','','ApiCustomController',1,1,NULL,'2024-06-05 10:39:08',NULL),(11,'Log_User_Access','fa fa-flag-o','logs','ums_logs','LogsController',1,1,NULL,'2024-06-05 10:39:08',NULL),(12,'Books','fa fa-book','books','books','AdminBooksController',0,0,NULL,'2024-06-06 03:21:38',NULL);
/*!40000 ALTER TABLE `ums_moduls` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_notifications`
--

DROP TABLE IF EXISTS `ums_notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_notifications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ums_users` int(11) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_notifications`
--

LOCK TABLES `ums_notifications` WRITE;
/*!40000 ALTER TABLE `ums_notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_privileges`
--

DROP TABLE IF EXISTS `ums_privileges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_privileges` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `is_superadmin` tinyint(1) DEFAULT NULL,
  `theme_color` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_privileges`
--

LOCK TABLES `ums_privileges` WRITE;
/*!40000 ALTER TABLE `ums_privileges` DISABLE KEYS */;
INSERT INTO `ums_privileges` VALUES (1,'Super Administrator',1,'skin-red','2024-06-05 10:39:08',NULL);
/*!40000 ALTER TABLE `ums_privileges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_privileges_roles`
--

DROP TABLE IF EXISTS `ums_privileges_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_privileges_roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_visible` tinyint(1) DEFAULT NULL,
  `is_create` tinyint(1) DEFAULT NULL,
  `is_read` tinyint(1) DEFAULT NULL,
  `is_edit` tinyint(1) DEFAULT NULL,
  `is_delete` tinyint(1) DEFAULT NULL,
  `id_ums_privileges` int(11) DEFAULT NULL,
  `id_ums_moduls` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_privileges_roles`
--

LOCK TABLES `ums_privileges_roles` WRITE;
/*!40000 ALTER TABLE `ums_privileges_roles` DISABLE KEYS */;
INSERT INTO `ums_privileges_roles` VALUES (1,1,0,0,0,0,1,1,'2024-06-05 10:39:08',NULL),(2,1,1,1,1,1,1,2,'2024-06-05 10:39:08',NULL),(3,0,1,1,1,1,1,3,'2024-06-05 10:39:08',NULL),(4,1,1,1,1,1,1,4,'2024-06-05 10:39:08',NULL),(5,1,1,1,1,1,1,5,'2024-06-05 10:39:08',NULL),(6,1,1,1,1,1,1,6,'2024-06-05 10:39:08',NULL),(7,1,1,1,1,1,1,7,'2024-06-05 10:39:08',NULL),(8,1,1,1,1,1,1,8,'2024-06-05 10:39:08',NULL),(9,1,1,1,1,1,1,9,'2024-06-05 10:39:08',NULL),(10,1,1,1,1,1,1,10,'2024-06-05 10:39:08',NULL),(11,1,0,1,0,1,1,11,'2024-06-05 10:39:08',NULL),(12,1,1,1,1,1,1,12,NULL,NULL);
/*!40000 ALTER TABLE `ums_privileges_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_settings`
--

DROP TABLE IF EXISTS `ums_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `content` text DEFAULT NULL,
  `content_input_type` varchar(255) DEFAULT NULL,
  `dataenum` varchar(255) DEFAULT NULL,
  `helper` varchar(255) DEFAULT NULL,
  `group_setting` varchar(255) DEFAULT NULL,
  `label` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_settings`
--

LOCK TABLES `ums_settings` WRITE;
/*!40000 ALTER TABLE `ums_settings` DISABLE KEYS */;
INSERT INTO `ums_settings` VALUES (1,'login_background_color',NULL,'text',NULL,'Input hexacode','login_register_style','Login Background Color','2024-06-05 10:39:08',NULL),(2,'login_font_color',NULL,'text',NULL,'Input hexacode','login_register_style','Login Font Color','2024-06-05 10:39:08',NULL),(3,'login_background_image',NULL,'upload_image',NULL,NULL,'login_register_style','Login Background Image','2024-06-05 10:39:08',NULL),(4,'email_sender','bilal14Hasil14@gmail.com','text',NULL,NULL,'email_setting','Email Sender','2024-06-05 10:39:08',NULL),(5,'smtp_driver','smtp','select','smtp',NULL,'email_setting','Mail Driver','2024-06-05 10:39:08',NULL),(6,'smtp_host','smtp.gmail.com','text',NULL,NULL,'email_setting','SMTP Host','2024-06-05 10:39:08',NULL),(7,'smtp_port','587','text',NULL,'default 25','email_setting','SMTP Port','2024-06-05 10:39:08',NULL),(8,'smtp_username','bilal14Hasil14@gmail.com','text',NULL,NULL,'email_setting','SMTP Username','2024-06-05 10:39:08',NULL),(9,'smtp_password','dkagorcvfjnkkkuv','text',NULL,NULL,'email_setting','SMTP Password','2024-06-05 10:39:08',NULL),(10,'smtp_encryption','tls','text',NULL,NULL,'email_setting','SMTP Encryption','2024-06-05 10:39:08',NULL),(11,'appname','CRUDBooster','text',NULL,NULL,'application_setting','Application Name','2024-06-05 10:39:08',NULL),(12,'default_paper_size','Legal','text',NULL,'Paper size, ex : A4, Legal, etc','application_setting','Default Paper Print Size','2024-06-05 10:39:08',NULL),(13,'logo','','upload_image',NULL,NULL,'application_setting','Logo','2024-06-05 10:39:08',NULL),(14,'favicon','','upload_image',NULL,NULL,'application_setting','Favicon','2024-06-05 10:39:08',NULL),(15,'api_debug_mode','true','select','true,false',NULL,'application_setting','API Debug Mode','2024-06-05 10:39:08',NULL),(16,'google_api_key','','text',NULL,NULL,'application_setting','Google API Key','2024-06-05 10:39:08',NULL),(17,'google_fcm_key','','text',NULL,NULL,'application_setting','Google FCM Key','2024-06-05 10:39:08',NULL);
/*!40000 ALTER TABLE `ums_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_statistic_components`
--

DROP TABLE IF EXISTS `ums_statistic_components`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_statistic_components` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `id_ums_statistics` int(11) DEFAULT NULL,
  `componentID` varchar(255) DEFAULT NULL,
  `component_name` varchar(255) DEFAULT NULL,
  `area_name` varchar(55) DEFAULT NULL,
  `sorting` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `config` longtext DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_statistic_components`
--

LOCK TABLES `ums_statistic_components` WRITE;
/*!40000 ALTER TABLE `ums_statistic_components` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_statistic_components` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_statistics`
--

DROP TABLE IF EXISTS `ums_statistics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_statistics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_statistics`
--

LOCK TABLES `ums_statistics` WRITE;
/*!40000 ALTER TABLE `ums_statistics` DISABLE KEYS */;
/*!40000 ALTER TABLE `ums_statistics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ums_users`
--

DROP TABLE IF EXISTS `ums_users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ums_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `Username` varchar(255) DEFAULT NULL,
  `Gender` tinyint(1) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Department_ID` bigint(20) unsigned DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `Address_ID` varchar(255) DEFAULT NULL,
  `Phone_number` varchar(30) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `id_ums_privileges` bigint(20) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ums_users`
--

LOCK TABLES `ums_users` WRITE;
/*!40000 ALTER TABLE `ums_users` DISABLE KEYS */;
INSERT INTO `ums_users` VALUES (1,'Super Admin',NULL,NULL,'$2y$10$dJxPC4LNBLO4zpuVp.KoUOmc.TNqNgSLcFSafOOe6ByO9BclflEaG',NULL,NULL,'admin@crudbooster.com',NULL,NULL,NULL,'Active',1,'2024-06-05 10:39:08',NULL),(2,'Ayman Ali',NULL,NULL,'$2y$10$dJxPC4LNBLO4zpuVp.KoUOmc.TNqNgSLcFSafOOe6ByO9BclflEaG',NULL,NULL,'ayman.405060@gmail.com',NULL,NULL,NULL,'Active',1,'2024-06-05 10:39:08',NULL);
/*!40000 ALTER TABLE `ums_users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
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

-- Dump completed on 2024-06-07 14:47:19
