# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.0.32-MariaDB-0+deb8u1)
# Datenbank: bseries_site
# Erstellt am: 2017-10-27 16:22:01 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Export von Tabelle docs_pages
# ------------------------------------------------------------

DROP TABLE IF EXISTS `docs_pages`;

CREATE TABLE `docs_pages` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(100) NOT NULL DEFAULT '',
  `parent` varchar(200) DEFAULT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `file` varchar(200) NOT NULL DEFAULT '',
  `info` text,
  `content` text,
  PRIMARY KEY (`id`),
  KEY `index` (`index`),
  KEY `parent` (`parent`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle docs_symbols
# ------------------------------------------------------------

DROP TABLE IF EXISTS `docs_symbols`;

CREATE TABLE `docs_symbols` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `index` varchar(100) NOT NULL DEFAULT '',
  `parent` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin DEFAULT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL DEFAULT '',
  `type` varchar(50) NOT NULL,
  `docblock` text,
  `source` text,
  `file` varchar(200) DEFAULT '',
  `visibility` varchar(20) DEFAULT NULL,
  `inherited` varchar(200) DEFAULT NULL,
  `extends` varchar(200) DEFAULT NULL,
  `overrides` varchar(200) DEFAULT NULL,
  `interfaces` text,
  `traits` text,
  `is_deprecated` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_static` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_abstract` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_magic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_external` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `index` (`index`),
  KEY `parent` (`parent`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle media
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `owner_id` int(11) unsigned NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `url` varchar(250) NOT NULL DEFAULT '',
  `type` varchar(100) NOT NULL,
  `mime_type` varchar(100) NOT NULL,
  `checksum` char(32) DEFAULT '',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Unique index set on user_id+checksum instead of user_id+dirn';



# Export von Tabelle media_attachments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media_attachments`;

CREATE TABLE `media_attachments` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` int(11) unsigned NOT NULL,
  `model` varchar(50) NOT NULL,
  `foreign_key` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `poly` (`model`,`foreign_key`),
  KEY `media_file` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Export von Tabelle media_versions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `media_versions`;

CREATE TABLE `media_versions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `media_id` int(11) unsigned NOT NULL,
  `url` varchar(250) NOT NULL DEFAULT '',
  `version` varchar(10) DEFAULT NULL,
  `type` varchar(100) NOT NULL,
  `mime_type` varchar(100) NOT NULL,
  `checksum` char(32) DEFAULT '',
  `status` varchar(20) NOT NULL DEFAULT 'unknown',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`media_id`),
  KEY `media_id` (`media_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Unique index set on user_id+checksum instead of user_id+dirn';



# Export von Tabelle users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL DEFAULT '',
  `number` varchar(100) NOT NULL DEFAULT '',
  `session_key` varchar(250) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(64) NOT NULL,
  `auth_token` varchar(250) DEFAULT NULL,
  `reset_answer` varchar(250) DEFAULT NULL,
  `reset_token` varchar(250) DEFAULT NULL,
  `role` varchar(30) NOT NULL DEFAULT 'user',
  `locale` varchar(5) DEFAULT 'de',
  `timezone` varchar(100) NOT NULL DEFAULT 'UTC',
  `country` char(2) DEFAULT NULL,
  `is_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_notified` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `number` (`number`),
  KEY `session_key` (`session_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
