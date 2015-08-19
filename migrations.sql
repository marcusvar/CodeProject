CREATE DATABASE  IF NOT EXISTS `codeproject_curso` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `codeproject_curso`;
-- MySQL dump 10.13  Distrib 5.6.17, for osx10.6 (i386)
--
-- Host: localhost    Database: codeproject_curso
-- ------------------------------------------------------
-- Server version	5.6.21

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
-- Table structure for table `migrations_new`
--

DROP TABLE IF EXISTS `migrations_new`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations_new` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations_new`
--

LOCK TABLES `migrations_new` WRITE;
/*!40000 ALTER TABLE `migrations_new` DISABLE KEYS */;
INSERT INTO `migrations_new` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_07_23_220711_create_clients_table',1),('2015_07_27_181058_create_projects_table',1),('2015_08_04_185418_create_project_notes_table',1),('2014_04_24_110151_create_oauth_scopes_table',2),('2014_04_24_110304_create_oauth_grants_table',2),('2014_04_24_110403_create_oauth_grant_scopes_table',2),('2014_04_24_110459_create_oauth_clients_table',2),('2014_04_24_110557_create_oauth_client_endpoints_table',2),('2014_04_24_110705_create_oauth_client_scopes_table',2),('2014_04_24_110817_create_oauth_client_grants_table',2),('2014_04_24_111002_create_oauth_sessions_table',2),('2014_04_24_111109_create_oauth_session_scopes_table',2),('2014_04_24_111254_create_oauth_auth_codes_table',2),('2014_04_24_111403_create_oauth_auth_code_scopes_table',2),('2014_04_24_111518_create_oauth_access_tokens_table',2),('2014_04_24_111657_create_oauth_access_token_scopes_table',2),('2014_04_24_111810_create_oauth_refresh_tokens_table',2),('2015_08_06_152541_create_project_task_trables',3),('2015_08_12_205613_create_project_members_tables',4),('2015_08_06_152541_create_project_tasks_tables',5);
/*!40000 ALTER TABLE `migrations_new` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'codeproject_curso'
--

--
-- Dumping routines for database 'codeproject_curso'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-19  9:43:13
