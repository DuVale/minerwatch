-- MySQL dump 10.11
--
-- Host: localhost    Database: mine
-- ------------------------------------------------------
-- Server version	5.0.77-log

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
-- Table structure for table `api_keys`
--

DROP TABLE IF EXISTS `api_keys`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `api_keys` (
  `id` int(11) NOT NULL auto_increment,
  `user_id` int(11) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `pool_type` varchar(255) NOT NULL,
  `enabled` tinyint(1) NOT NULL default '0',
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `api_key_ix` (`api_key`),
  KEY `user_id_ix` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `btcguild_pool_results`
--

DROP TABLE IF EXISTS `btcguild_pool_results`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `btcguild_pool_results` (
  `id` int(11) NOT NULL auto_increment,
  `api_key` varchar(255) NOT NULL,
  `unconfirmed_rewards` varchar(255) NOT NULL,
  `confirmed_rewards` varchar(255) NOT NULL,
  `estimated_rewards` varchar(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `hash_rate` varchar(255) NOT NULL,
  `round_shares` varchar(255) NOT NULL,
  `round_stales` varchar(255) NOT NULL,
  `reset_shares` varchar(255) NOT NULL,
  `reset_stales` varchar(255) NOT NULL,
  `total_shares` varchar(255) NOT NULL,
  `total_stales` varchar(255) NOT NULL,
  `last_share` varchar(255) NOT NULL,
  `blocks_found` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `worker_name_ix` (`worker_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `btcguild_pool_results_archive`
--

DROP TABLE IF EXISTS `btcguild_pool_results_archive`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `btcguild_pool_results_archive` (
  `id` int(11) NOT NULL auto_increment,
  `api_key` varchar(255) NOT NULL,
  `unconfirmed_rewards` varchar(255) NOT NULL,
  `confirmed_rewards` varchar(255) NOT NULL,
  `estimated_rewards` varchar(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `hash_rate` varchar(255) NOT NULL,
  `round_shares` varchar(255) NOT NULL,
  `round_stales` varchar(255) NOT NULL,
  `reset_shares` varchar(255) NOT NULL,
  `reset_stales` varchar(255) NOT NULL,
  `total_shares` varchar(255) NOT NULL,
  `total_stales` varchar(255) NOT NULL,
  `last_share` varchar(255) NOT NULL,
  `blocks_found` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `worker_name_ix` (`worker_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `slush_pool_results`
--

DROP TABLE IF EXISTS `slush_pool_results`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `slush_pool_results` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(4) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `username` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `unconfirmed_reward` varchar(255) NOT NULL,
  `send_threshold` varchar(255) NOT NULL,
  `confirmed_reward` varchar(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `last_share` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `alive` varchar(255) NOT NULL,
  `shares` varchar(255) NOT NULL,
  `hashrate` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  UNIQUE KEY `api_worker_ux` (`api_key`,`worker_name`),
  KEY `worker_name_ix` (`worker_name`),
  KEY `user_id_ix` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2282 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `slush_pool_results_archive`
--

DROP TABLE IF EXISTS `slush_pool_results_archive`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `slush_pool_results_archive` (
  `id` int(11) NOT NULL auto_increment,
  `active` tinyint(4) NOT NULL default '0',
  `user_id` int(11) NOT NULL default '0',
  `username` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL,
  `unconfirmed_reward` varchar(255) NOT NULL,
  `send_threshold` varchar(255) NOT NULL,
  `confirmed_reward` varchar(255) NOT NULL,
  `worker_name` varchar(255) NOT NULL,
  `last_share` varchar(255) NOT NULL,
  `score` varchar(255) NOT NULL,
  `alive` varchar(255) NOT NULL,
  `shares` varchar(255) NOT NULL,
  `hashrate` varchar(255) NOT NULL,
  `creation_time` datetime NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `worker_name_ix` (`worker_name`),
  KEY `user_id_ix` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2281 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2011-06-29 23:59:34
