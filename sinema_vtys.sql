/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 50638
 Source Host           : localhost:3306
 Source Schema         : sinema_vtys

 Target Server Type    : MySQL
 Target Server Version : 50638
 File Encoding         : 65001

 Date: 20/01/2021 22:17:00
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for costumers
-- ----------------------------
DROP TABLE IF EXISTS `costumers`;
CREATE TABLE `costumers` (
  `costumer_id` int(11) NOT NULL AUTO_INCREMENT,
  `costumer_name` varchar(35) NOT NULL,
  `costumer_surname` varchar(35) NOT NULL,
  `costumer_phone` varchar(11) NOT NULL,
  `costumer_email` varchar(50) NOT NULL,
  `costumer_password` varchar(18) NOT NULL,
  PRIMARY KEY (`costumer_id`),
  UNIQUE KEY `costumer_phone` (`costumer_phone`),
  UNIQUE KEY `costumer_email` (`costumer_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for events
-- ----------------------------
DROP TABLE IF EXISTS `events`;
CREATE TABLE `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `plan_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  PRIMARY KEY (`event_id`),
  KEY `plan_id` (`plan_id`),
  KEY `movie_id` (`movie_id`),
  CONSTRAINT `movie_id` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `plan_id` FOREIGN KEY (`plan_id`) REFERENCES `plans` (`plan_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for genres
-- ----------------------------
DROP TABLE IF EXISTS `genres`;
CREATE TABLE `genres` (
  `genre_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(30) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for halls
-- ----------------------------
DROP TABLE IF EXISTS `halls`;
CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL AUTO_INCREMENT,
  `hall_capasity` int(11) NOT NULL,
  PRIMARY KEY (`hall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for movies
-- ----------------------------
DROP TABLE IF EXISTS `movies`;
CREATE TABLE `movies` (
  `movie_id` int(11) NOT NULL AUTO_INCREMENT,
  `genre_id` int(11) NOT NULL,
  `movie_name` varchar(50) NOT NULL,
  `movie_director` varchar(40) NOT NULL,
  `movie_date` date NOT NULL,
  `movie_language` varchar(15) NOT NULL,
  PRIMARY KEY (`movie_id`),
  KEY `genre_id` (`genre_id`),
  CONSTRAINT `genre_id` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`genre_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for plans
-- ----------------------------
DROP TABLE IF EXISTS `plans`;
CREATE TABLE `plans` (
  `plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `from_date` datetime NOT NULL,
  `to_date` datetime NOT NULL,
  PRIMARY KEY (`plan_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for sales_persons
-- ----------------------------
DROP TABLE IF EXISTS `sales_persons`;
CREATE TABLE `sales_persons` (
  `sales_person_id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_person_name` varchar(35) NOT NULL,
  `sales_person_surname` varchar(35) NOT NULL,
  `sales_person_phone` varchar(11) NOT NULL,
  `sales_person_email` varchar(50) NOT NULL,
  `sales_person_password` varchar(18) NOT NULL,
  PRIMARY KEY (`sales_person_id`),
  UNIQUE KEY `sales_person_phone` (`sales_person_phone`),
  UNIQUE KEY `sales_person_email` (`sales_person_email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Table structure for seats
-- ----------------------------
DROP TABLE IF EXISTS `seats`;
CREATE TABLE `seats` (
  `seat_id` int(11) NOT NULL AUTO_INCREMENT,
  `ticket_id` int(11) NOT NULL,
  `hall_id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  PRIMARY KEY (`seat_id`),
  KEY `ticket_id` (`ticket_id`),
  KEY `hall_id` (`hall_id`),
  KEY `event_id` (`event_id`),
  CONSTRAINT `event_id` FOREIGN KEY (`event_id`) REFERENCES `events` (`event_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `hall_id` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `ticket_id` FOREIGN KEY (`ticket_id`) REFERENCES `tickets` (`ticket_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Table structure for tickets
-- ----------------------------
DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `costumer_id` int(11) DEFAULT NULL,
  `sales_person_id` int(11) DEFAULT NULL,
  `hall_id` int(11) NOT NULL,
  `ticket_time` datetime NOT NULL,
  PRIMARY KEY (`ticket_id`),
  KEY `movie_id` (`movie_id`),
  KEY `costumer_id` (`costumer_id`),
  KEY `sales_person_id` (`sales_person_id`),
  KEY `hall_id` (`hall_id`),
  CONSTRAINT `tickets_ibfk_1` FOREIGN KEY (`movie_id`) REFERENCES `movies` (`movie_id`),
  CONSTRAINT `tickets_ibfk_2` FOREIGN KEY (`costumer_id`) REFERENCES `costumers` (`costumer_id`),
  CONSTRAINT `tickets_ibfk_3` FOREIGN KEY (`sales_person_id`) REFERENCES `sales_persons` (`sales_person_id`),
  CONSTRAINT `tickets_ibfk_5` FOREIGN KEY (`hall_id`) REFERENCES `halls` (`hall_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

SET FOREIGN_KEY_CHECKS = 1;
