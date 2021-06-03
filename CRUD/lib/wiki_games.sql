-- -------------------------------------------------------------
-- TablePlus 3.12.8(368)
--
-- https://tableplus.com/
--
-- Database: wiki_games
-- Generation Time: 2021-06-03 22:23:44.1350
-- -------------------------------------------------------------


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


CREATE TABLE `heroes_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `type_id` int DEFAULT NULL,
  `photo` longtext,
  PRIMARY KEY (`id`),
  KEY `type_id` (`type_id`),
  CONSTRAINT `heroes_tb_ibfk_1` FOREIGN KEY (`type_id`) REFERENCES `type_tb` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

CREATE TABLE `type_tb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `heroes_tb` (`id`, `name`, `type_id`, `photo`) VALUES
(9, 'Nuchaku', 1, 'https://files.elcode.xyz/final/Nunchaku.png'),
(10, 'Holy Knight Escanor', 2, 'https://files.elcode.xyz/final/Holy%20Knight%20Escanor.png'),
(11, 'The Grizzly Sin Of S', 3, 'https://files.elcode.xyz/final/The%20Grizzly%20Sin%20Of%20S.png'),
(12, 'Heart Of The Land', 1, 'https://files.elcode.xyz/final/Heart%20Of%20The%20Land.png'),
(13, 'A New Adventure', 3, 'https://files.elcode.xyz/final/A%20New%20Adventure.png'),
(14, 'Bringer Of Disaster', 2, 'https://files.elcode.xyz/final/Bringer%20Of%20Disaster.png'),
(15, 'Camelot\'s Sword', 1, 'https://files.elcode.xyz/final/Camelot\'s%20Sword.png'),
(16, 'Liones\'s Hero', 3, 'https://files.elcode.xyz/final/Liones\'s%20Hero.png');

INSERT INTO `type_tb` (`id`, `name`) VALUES
(1, 'Strength'),
(2, 'HP'),
(3, 'Agility');



/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;