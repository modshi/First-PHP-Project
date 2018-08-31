# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.23)
# Database: data
# Generation Time: 2018-08-31 18:17:22 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `post_title` varchar(255) NOT NULL DEFAULT '',
  `content` longtext NOT NULL,
  `date` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;

INSERT INTO `posts` (`id`, `post_title`, `content`, `date`)
VALUES
	(2,'Life is simple! ','Infuse your life with action. Don\'t wait for it to happen. Make it happen. Make your own future. Make your own hope. Make your own love. And whatever your beliefs, honor your creator, not by passively waiting for grace to come down from upon high, but by doing what you can to make grace happen... yourself, right now, right down here on Earth.','Friday 31st of August 2018 05:54:09 PM'),
	(3,'TEST','HELLLO!','Friday 31st of August 2018 05:56:17 PM'),
	(4,'life?','Happiness, like other emotions, is not something you obtain, but rather something you inhabit. When you’re raging pissed and throwing a socket wrench at the neighbor’s kids, you are not self-conscious about your state of anger. You are not thinking to yourself, “Am I finally angry? Am I doing this right?” No, you’re out for blood. You inhabit and live the anger. You are the anger. And then it’s gone.\r\n\r\nJust as a confident man doesn’t wonder if he’s confident, a happy man does not wonder if he’s happy. He simply is.\r\n\r\nWhat this implies is that finding happiness is not achieved in itself, but rather it is the side effect of a particular set of ongoing life experiences. This gets mixed up a lot, especially since happiness is marketed so much these days as a goal in and of itself. Buy X and be happy. Learn Y and be happy. But you can’t buy happiness and you can’t achieve happiness. It just is. And it is once you get other parts of your life in order.\r\n','Friday 31st of August 2018 05:59:15 PM'),
	(5,'THE FOUR STAGES OF LIFE','We are born helpless. We can’t walk, can’t talk, can’t feed ourselves, can’t even do our own damn taxes.\r\n\r\nAs children, the way we’re wired to learn is by watching and mimicking others. First we learn to do physical skills like walk and talk. Then we develop social skills by watching and mimicking our peers around us. Then, finally, in late childhood, we learn to adapt to our culture by observing the rules and norms around us and trying to behave in such a way that is generally considered acceptable by society.\r\n\r\nThe goal of Stage One is to teach us how to function within society so that we can be autonomous, self-sufficient adults. The idea is that the adults in the community around us help us to reach this point through supporting our ability to make decisions and take action ourselves.\r\n\r\nBut some adults and community members around us suck.1 They punish us for our independence. They don’t support our decisions. And therefore we don’t develop autonomy. We get stuck in Stage One, endlessly mimicking those around us, endlessly attempting to please all so that we might not be judged.2\r\n\r\nIn a “normal” healthy individual, Stage One will last until late adolescence and early adulthood.3 For some people, it may last further into adulthood. A select few wake up one day at age 45 realizing they’ve never actually lived for themselves and wonder where the hell the years went.\r\n\r\nThis is Stage One. The mimicry. The constant search for approval and validation. The absence of independent thought and personal values.','Friday 31st of August 2018 06:00:06 PM'),
	(6,'STOP TRYING TO BE HAPPY','Happiness, like other emotions, is not something you obtain, but rather something you inhabit. When you’re raging pissed and throwing a socket wrench at the neighbor’s kids, you are not self-conscious about your state of anger. You are not thinking to yourself, “Am I finally angry? Am I doing this right?” No, you’re out for blood. You inhabit and live the anger. You are the anger. And then it’s gone.\r\n\r\nJust as a confident man doesn’t wonder if he’s confident, a happy man does not wonder if he’s happy. He simply is.\r\n\r\nWhat this implies is that finding happiness is not achieved in itself, but rather it is the side effect of a particular set of ongoing life experiences. This gets mixed up a lot, especially since happiness is marketed so much these days as a goal in and of itself. Buy X and be happy. Learn Y and be happy. But you can’t buy happiness and you can’t achieve happiness. It just is. And it is once you get other parts of your life in order.','Friday 31st of August 2018 06:00:28 PM');

/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_first` varchar(255) NOT NULL,
  `user_last` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_pwd` varchar(255) NOT NULL,
  `user_type` varchar(10) DEFAULT '',
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`user_id`, `user_first`, `user_last`, `user_name`, `user_email`, `user_pwd`, `user_type`)
VALUES
	(4,'Mohammed','Alhoqbani','admin','alhoqbani.m@gmail.com','$2y$10$Uk9DGcRA.UBa4CjlfgaUQu0PZHlWSMABVubgvbeXs0/ENgXAd.1pm','1'),
	(5,'hamoud','alhoqbani','hamoud','h.alhoqbani@gmail.com','$2y$10$A5jink4IxioNmnVGV4NxbO9J0GY/usz2RsCkqFbI508ogQFsMW.tC','');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
