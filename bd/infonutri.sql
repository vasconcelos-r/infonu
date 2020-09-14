-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 16-Jun-2019 às 05:14
-- Versão do servidor: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infonutri`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agua`
--

DROP TABLE IF EXISTS `agua`;
CREATE TABLE IF NOT EXISTS `agua` (
  `agua_num` int(11) NOT NULL AUTO_INCREMENT,
  `agua_data` date NOT NULL,
  `agua_qtd` int(4) NOT NULL,
  `user_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`agua_num`),
  KEY `user_cod` (`user_cod`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `composto`
--

DROP TABLE IF EXISTS `composto`;
CREATE TABLE IF NOT EXISTS `composto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `energia_kcal` smallint(6) DEFAULT NULL,
  `energia_kJ` smallint(6) DEFAULT NULL,
  `proteinas_g` decimal(3,1) DEFAULT NULL,
  `lipideos_g` decimal(3,1) DEFAULT NULL,
  `colesterol_mg` smallint(6) DEFAULT NULL,
  `carboidratos_g` decimal(4,1) DEFAULT NULL,
  `fibra_g` decimal(3,1) DEFAULT NULL,
  `calcio_mg` smallint(6) DEFAULT NULL,
  `fosforo_mg` smallint(6) DEFAULT NULL,
  `ferro_mg` decimal(3,1) DEFAULT NULL,
  `sodio_mg` int(11) DEFAULT NULL,
  `potassio_mg` smallint(6) DEFAULT NULL,
  `zinco_mg` decimal(2,1) DEFAULT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=163 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `composto`
--

INSERT INTO `composto` (`id`, `nome`, `energia_kcal`, `energia_kJ`, `proteinas_g`, `lipideos_g`, `colesterol_mg`, `carboidratos_g`, `fibra_g`, `calcio_mg`, `fosforo_mg`, `ferro_mg`, `sodio_mg`, `potassio_mg`, `zinco_mg`, `data`) VALUES
(51, 'Farinha, de centeio, integral', 336, 1405, '12.5', '1.8', NULL, '73.3', '15.5', 34, 340, '4.7', 41, 334, '2.7', '2019-04-24'),
(55, 'Maçã, Argentina, com casca, crua ', 63, 262, '0.2', '0.2', NULL, '16.6', '2.0', 3, 11, '0.1', 1, 117, '0.0', '2019-04-24'),
(54, 'Maçã, Fuji, com casca, crua ', 56, 232, '0.3', '0.0', NULL, '15.2', '1.3', 2, 9, '0.1', 0, 75, '0.0', '2019-04-24'),
(56, 'Mamão, Formosa, cru ', 45, 190, '0.8', '0.1', NULL, '11.6', '1.8', 25, 11, '0.2', 3, 222, '0.1', '2019-04-24'),
(57, 'Mamão, Papaia, cru', 40, 168, '0.5', '0.1', NULL, '10.4', '1.0', 22, 11, '0.2', 2, 126, '0.1', '2019-04-24'),
(58, 'Mamão verde, doce em calda, drenado ', 209, 876, '0.3', '0.1', NULL, '57.6', '1.2', 12, 3, '0.2', 5, 9, '0.0', '2019-04-24'),
(59, 'Manga, Haden, crua ', 64, 266, '0.4', '0.3', NULL, '16.7', '1.6', 12, 9, '0.1', 1, 148, '0.1', '2019-04-24'),
(60, 'Manga, Palmer, crua', 72, 303, '0.4', '0.2', NULL, '199.4', '1.6', 12, 14, '0.1', 2, 157, '0.1', '2019-04-24'),
(61, 'Manga, Tommy Atkins, crua', 51, 212, '0.9', '0.2', NULL, '12.8', '2.1', 8, 14, '0.1', 0, 138, '0.1', '2019-04-24'),
(62, 'Maracujá, cru ', 68, 286, '2.0', '2.1', NULL, '12.3', '1.1', 5, 51, '0.6', 2, 338, '0.4', '2019-04-24'),
(64, 'Abadejo, filé, congelado, assado', 112, 467, '23.5', '1.2', 103, '0.0', NULL, 23, 338, '0.5', 334, 156, '0.5', '2019-04-29'),
(66, 'Abadejo, filé, congelado, cozido', 91, 381, '19.3', '0.9', 87, '0.0', NULL, 17, 351, '0.3', 189, 146, '0.4', '2019-04-29'),
(67, 'Abadejo, filé, congelado, grelhado', 130, 542, '27.6', '1.3', 136, '0.0', NULL, 20, 581, '0.3', 305, 279, '0.4', '2019-04-29'),
(68, 'Atum, conserva em óleo ', 166, 694, '26.2', '6.0', 53, '0.0', NULL, 7, 211, '1.2', 362, 280, '0.6', '2019-04-29'),
(69, 'Atum, fresco, cru ', 118, 492, '25.7', '0.9', 48, '0.0', NULL, 7, 254, '1.3', 30, 308, '0.4', '2019-04-29'),
(70, 'Bacalhau, salgado, cru', 1363, 569, '29.0', '1.3', 139, '0.0', NULL, 157, 186, '0.9', 13585, 434, '0.7', '2019-04-29'),
(71, 'Camarão, Rio Grande, grande, cozido', 92, 377, '19.0', '1.0', 241, '0.0', NULL, 90, 266, '1.3', 367, 102, '1.2', '2019-04-29'),
(72, 'Camarão, Sete Barbas, sem cabeça, com casca, frito', 231, 968, '18.4', '15.4', 283, '2.9', NULL, 960, 337, '2.4', 99, 107, '1.1', '2019-04-29'),
(73, 'Corvina grande, assada ', 147, 631, '26.3', '3.6', 117, '0.0', NULL, 60, 176, '0.5', 85, 291, '0.7', '2019-04-30'),
(74, 'Corvina grande, cozida', 100, 419, '23.4', '2.6', 123, '0.0', NULL, 69, 164, '0.6', 68, 194, '0.7', '2019-04-30'),
(75, 'Lambari, congelado, frito ', 327, 1368, '28.4', '22.8', 246, '0.0', NULL, 1881, 1067, '0.8', 65, 331, '5.6', '2019-04-30'),
(76, 'Merluza, filé, assado', 122, 510, '26.6', '0.9', 91, '0.0', NULL, 36, 273, '0.4', 120, 364, '0.9', '2019-04-30'),
(77, 'Merluza, filé, frito ', 192, 802, '26.9', '8.5', 109, '0.0', NULL, 38, 279, '0.4', 90, 447, '0.6', '2019-04-30'),
(78, 'Carne, bovina, contra-filé de costela, grelhado', 275, 1150, '29.9', '16.3', 98, '0.0', NULL, 4, 252, '2.8', 51, 383, '6.7', '2019-04-30'),
(79, 'Estrogonofe de frango ', 173, 724, '15.0', '10.8', 66, '3.0', NULL, 28, 195, '1.5', 99, 307, '0.6', '0000-00-00'),
(80, 'Estrogonofe de carne ', 173, 724, '15.0', '10.8', 66, '3.0', NULL, 28, 186, '2.7', 123, 322, '2.0', '0000-00-00'),
(104, 'Cenoura, crua ', 34, 143, '1.3', '0.2', NULL, '7.7', '3.2', 23, 28, '0.2', 3, 315, '0.2', '0000-00-00'),
(82, 'Melancia, crua', 33, 136, '0.9', '0.0', NULL, '8.1', '0.1', 8, 12, '0.2', 0, 104, '0.1', '0000-00-00'),
(83, 'Melão, cru ', 29, 123, '0.7', '0.0', NULL, '7.5', '0.3', 3, 10, '0.2', 11, 216, '0.1', '0000-00-00'),
(84, 'Mexerica, Rio, crua ', 37, 154, '0.7', '0.1', NULL, '9.3', '2.7', 17, 14, '0.1', 2, 125, '0.2', '0000-00-00'),
(85, 'Morango, cru', 30, 126, '0.9', '0.3', NULL, '6.0', '1.7', 11, 22, '0.3', 0, 184, '0.2', '0000-00-00'),
(86, 'Banana, maçã, crua ', 87, 363, '1.8', '0.1', NULL, '22.3', '2.6', 3, 29, '0.2', 0, 264, '0.1', '0000-00-00'),
(87, 'Banana, nanica, crua ', 92, 383, '1.4', '0.1', NULL, '23.8', '1.9', 3, 27, '0.3', 0, 355, '0.3', '0000-00-00'),
(88, 'Banana, prata, crua ', 98, 411, '1.3', '0.0', NULL, '26.0', '2.0', 8, 22, '0.4', 0, 358, '0.1', '0000-00-00'),
(89, 'Caju, cru ', 43, 180, '1.0', '0.3', NULL, '10.3', '1.7', 1, 16, '0.2', 3, 124, '0.1', '0000-00-00'),
(90, 'Laranja, lima, crua ', 46, 191, '1.1', '0.1', NULL, '11.5', '1.8', 31, 15, '0.1', 1, 130, '0.1', '0000-00-00'),
(91, 'Tamarindo, cru ', 276, 1154, '3.2', '0.5', NULL, '72.5', '6.4', 37, 55, '0.6', 0, 723, '0.7', '0000-00-00'),
(92, 'Romã, crua', 56, 233, '0.4', '0.0', NULL, '15.1', '0.4', 5, 40, '0.3', 1, 485, '0.7', '0000-00-00'),
(93, 'Pitanga, crua ', 41, 173, '0.9', '0.2', NULL, '10.2', '3.2', 18, 13, '0.4', 2, 113, '0.4', '0000-00-00'),
(94, 'Feijoada', 117, 489, '8.7', '6.5', 22, '11.6', '5.1', 32, 105, '1.3', 278, 303, '0.8', '0000-00-00'),
(95, 'Farinha, de trigo', 360, 1508, '9.8', '1.4', NULL, '75.1', '2.3', 18, 115, '1.0', 1, 151, '0.8', '0000-00-00'),
(96, 'Farinha, láctea, de cereais ', 415, 1736, '11.9', '5.8', 11, '77.8', '1.9', 196, 296, '8.7', 125, 366, '1.7', '0000-00-00'),
(97, 'Lasanha, massa fresca, cozida ', 164, 685, '5.8', '1.2', NULL, '32.5', '1.6', 10, 42, '1.2', 207, 54, '0.4', '0000-00-00'),
(98, 'Lasanha, massa fresca, crua ', 220, 922, '7.0', '1.3', NULL, '45.1', '1.6', 17, 82, '1.9', 667, 137, '0.8', '0000-00-00'),
(99, 'Macarrão, instantâneo ', 436, 1824, '8.8', '17.2', NULL, '62.4', '5.6', 18, 112, '0.8', 1516, 148, '0.5', '0000-00-00'),
(100, 'Macarrão, trigo, cru', 371, 1553, '10.0', '1.3', NULL, '77.9', '2.9', 17, 100, '0.9', 7, 147, '0.8', '0000-00-00'),
(101, 'Milho, amido, cru', 361, 1512, '0.6', '0.0', NULL, '87.1', '0.7', 1, 13, '0.1', 8, 9, '0.1', '0000-00-00'),
(102, 'Milho, fubá, cru ', 353, 1479, '7.2', '1.9', NULL, '78.9', '4.7', 3, 108, '0.9', 0, 168, '1.1', '0000-00-00'),
(103, 'Pão, aveia, forma', 343, 1435, '12.4', '5.7', 2, '59.6', '6.0', 109, 182, '4.7', 606, 210, '1.7', '0000-00-00'),
(105, 'Pepino, cru ', 10, 40, '0.9', '0.0', NULL, '2.0', '1.1', 10, 12, '0.1', 0, 154, '0.1', '0000-00-00'),
(106, 'Repolho, roxo, cru', 31, 129, '1.9', '0.1', NULL, '7.2', '2.0', 44, 14, '0.2', 4, 150, '0.2', '0000-00-00'),
(107, 'Batata, inglesa, sauté ', 68, 284, '1.3', '0.9', NULL, '14.1', '1.4', 4, 32, '0.3', 8, 199, '0.2', '0000-00-00'),
(108, 'Berinjela, cozida', 19, 79, '0.7', '0.1', 0, '4.5', '2.5', 11, 15, '0.2', 1, 105, '0.1', '0000-00-00'),
(109, 'Berinjela, crua ', 20, 82, '1.2', '0.1', NULL, '4.4', '2.9', 9, 20, '0.2', 0, 205, '0.1', '0000-00-00'),
(110, 'Beterraba, cozida', 32, 135, '1.3', '0.1', 0, '7.2', '1.9', 15, 30, '0.2', 23, 245, '0.4', '0000-00-00'),
(111, 'Beterraba, crua ', 49, 204, '1.9', '0.1', NULL, '11.1', '3.4', 18, 19, '0.3', 10, 375, '0.5', '0000-00-00'),
(112, 'Biscoito, polvilho doce', 438, 1831, '1.0', '12.2', 9, '80.5', '1.2', 30, 23, '1.8', 98, 54, '0.1', '0000-00-00'),
(113, 'Brócolis, cozido ', 25, 103, '2.1', '0.5', NULL, '4.4', '3.4', 51, 33, '0.5', 2, 119, '0.2', '0000-00-00'),
(114, 'Brócolis, cru ', 25, 107, '3.6', '0.3', NULL, '4.0', '2.9', 86, 78, '0.6', 3, 322, '0.5', '0000-00-00'),
(115, 'Chuchu, cozido', 19, 78, '0.4', '0.0', NULL, '4.8', '1.0', 8, 13, '0.1', 2, 54, '0.1', '0000-00-00'),
(116, 'Chuchu, cru', 17, 71, '0.7', '0.1', 0, '4.1', '1.3', 12, 18, '0.2', 0, 126, '0.1', '0000-00-00'),
(117, 'Inhame, cru', 97, 405, '2.1', '0.2', NULL, '23.2', '1.7', 12, 65, '0.4', 0, 568, '0.3', '0000-00-00'),
(118, 'Jiló, cru ', 27, 114, '1.4', '0.2', NULL, '6.0', '4.8', 20, 29, '0.3', 0, 213, '0.1', '0000-00-00'),
(119, 'Jurubeba, crua ', 126, 526, '4.4', '3.0', 0, '23.1', '23.9', 151, 155, '0.9', 1, 619, '0.6', '0000-00-00'),
(120, 'Mandioca, cozida', 125, 524, '0.6', '0.3', NULL, '30.1', '1.6', 19, 22, '0.1', 1, 100, '0.2', '0000-00-00'),
(121, 'Mandioca, crua', 151, 634, '1.1', '0.3', 0, '36.2', '1.9', 15, 29, '0.3', 2, 208, '0.2', '0000-00-00'),
(122, 'Mandioca, farofa, temperada ', 406, 1697, '2.1', '9.1', NULL, '80.3', '7.8', 66, 45, '1.4', 575, 201, '0.2', '0000-00-00'),
(123, 'Mandioca, frita', 300, 1255, '1.4', '11.2', NULL, '50.0', '1.9', 23, 57, '0.3', 2, 176, '0.4', '0000-00-00'),
(124, 'Manjericão, cru ', 21, 88, '2.0', '0.4', NULL, '3.6', '3.3', 211, 40, '1.0', 4, 252, '0.5', '0000-00-00'),
(125, 'Maxixe, cru ', 14, 58, '1.4', '0.1', NULL, '2.7', '2.2', 21, 25, '0.4', 11, 328, '0.2', '0000-00-00'),
(126, 'Pão, de queijo, assado ', 363, 1519, '5.1', '24.6', 68, '34.2', '0.6', 102, 94, '0.3', 773, 93, '0.6', '0000-00-00'),
(127, 'Pão, de queijo, cru', 295, 1232, '3.6', '14.0', 63, '38.5', '1.0', 88, 79, '0.3', 405, 58, '0.4', '0000-00-00'),
(128, 'Amêndoa, torrada, salgada', 581, 2430, '18.6', '47.3', NULL, '29.5', '11.6', 237, 493, '3.1', 279, 640, '2.6', '0000-00-00'),
(129, 'Castanha-de-caju, torrada, salgada', 570, 2386, '18.5', '46.3', NULL, '29.0', '3.7', 33, 594, '5.2', 125, 671, '4.7', '0000-00-00'),
(130, 'Castanha-do-Brasil, crua ', 643, 2690, '14.5', '63.5', 0, '15.1', '7.9', 146, 853, '2.3', 1, 651, '4.2', '0000-00-00'),
(131, 'Coco,  cru', 406, 1701, '3.7', '42.0', NULL, '10.4', '5.4', 6, 118, '1.8', 15, 354, '0.9', '0000-00-00'),
(132, 'Farinha, de mesocarpo de babaçu, crua', 329, 1376, '1.4', '0.2', NULL, '79.2', '17.9', 61, 26, '18.3', 12, 362, '0.3', '0000-00-00'),
(133, 'Café, pó, torrado ', 419, 1752, '14.7', '11.9', NULL, '65.8', '51.2', 107, 169, '8.1', 1, 1609, '0.5', '0000-00-00'),
(134, 'Capuccino, pó', 417, 1746, '11.3', '8.6', 29, '73.6', '2.4', 467, 358, '2.3', 382, 886, '1.1', '0000-00-00'),
(135, 'Fermento em pó, químico', 90, 375, '0.5', '0.1', 0, '43.9', NULL, 0, NULL, NULL, 10052, NULL, NULL, '0000-00-00'),
(150, 'Gelatina, sabores variados, pó', 380, 1591, '8.9', '0.0', NULL, '89.2', NULL, 27, 2, '0.3', 235, 7, '0.0', '2019-05-24'),
(137, 'Chocolate, ao leite ', 540, 2258, '7.2', '30.3', 17, '59.6', '2.2', 191, 212, '1.6', 77, 355, '1.1', '2019-05-24'),
(138, 'Chocolate, ao leite, com castanha do Pará ', 559, 2338, '7.4', '34.2', 16, '55.4', '2.5', 171, 303, '1.5', 64, 431, '1.3', '2019-05-24'),
(139, 'Chocolate, ao leite, dietético', 557, 2330, '6.9', '33.8', 13, '56.3', '2.8', 188, 276, '3.3', 85, 458, '1.1', '2019-05-24'),
(140, 'Chocolate, meio amargo ', 475, 1987, '4.9', '29.9', 2, '62.4', '62.4', 45, 220, '3.6', 9, 432, '1.5', '2019-05-24'),
(149, 'Gelatina, sabores variados, pó', 380, 1591, '8.9', '0.0', NULL, '89.2', NULL, 27, 2, '0.3', 235, 7, '0.0', '2019-05-24'),
(142, 'Açúcar, refinado', 387, 1617, '0.3', '0.0', NULL, '99.5', NULL, 4, 0, '0.1', 12, 6, '0.0', '2019-05-24'),
(144, 'Açúcar, mascavo', 369, 1542, '0.8', '0.1', NULL, '94.5', NULL, 127, 38, '8.3', 25, 522, '0.5', '2019-05-24'),
(145, 'Cocada branca ', 449, 449, '1.1', '13.6', NULL, '81.4', '3.6', 7, 396, '1.2', 29, 183, '0.4', '2019-05-24'),
(146, 'Doce, de abóbora, cremoso', 199, 832, '0.9', '0.2', NULL, '54.6', '2.3', 13, 14, '0.9', 0, 137, '0.0', '2019-05-24'),
(147, 'Doce, de leite, cremoso', 306, 1282, '6.5', '6.0', 20, '59.5', NULL, 195, 141, '0.1', 120, 259, '0.5', '2019-05-24'),
(148, 'Mel, de abelha', 309, 1294, '0.0', '0.0', NULL, '84.0', '0.0', 10, 40, '0.3', 6, 99, '0.2', '2019-05-24'),
(151, 'Shoyu', 61, 255, '3.3', '0.3', NULL, '11.6', NULL, 15, 47, '0.5', 5024, 165, '0.2', '2019-05-24'),
(152, 'Shoyu', 61, 255, '3.3', '0.3', NULL, '11.6', NULL, 15, 47, '0.5', 5024, 165, '0.2', '2019-05-24'),
(153, 'Azeitona, preta, conserva ', 194, 812, '1.2', '20.3', NULL, '5.0', '4.6', 59, 16, '5.5', 1567, 79, '0.3', '2019-05-24'),
(154, 'Azeitona, preta, conserva ', 194, 812, '1.2', '20.3', NULL, '5.0', '4.6', 59, 16, '5.5', 1567, 79, '0.3', '2019-05-24'),
(155, 'Azeitona, preta, conserva ', 194, 812, '1.2', '20.3', NULL, '5.5', '4.6', 59, 16, '5.5', 1567, 79, '0.3', '2019-05-24'),
(156, 'Azeitona, verde, conserva', 137, 573, '0.9', '14.2', NULL, '4.1', '3.8', 2, 5, '0.2', 1347, 20, '0.1', '2019-05-24'),
(157, 'Maionese, tradicional com ovos', 302, 1264, '0.6', '27.3', 0, '16.9', NULL, 2, 14, '0.1', 787, 16, '0.1', '2019-05-24'),
(158, 'Acarajé', 289, 1210, '8.3', '19.9', 25, '19.1', '9.4', 124, 142, '1.9', 305, 354, '1.2', '2019-05-24'),
(159, 'Arroz carreteiro ', 154, 643, '10.8', '7.1', 36, '11.6', '1.5', 13, 48, '1.0', 1622, 87, '2.7', '2019-05-24'),
(160, 'Bolinho de arroz', 274, 1144, '8.0', '8.3', 70, '41.7', '2.7', 24, 37, '2.1', 59, 96, '0.9', '2019-05-24'),
(161, 'Salpicão, de frango', 148, 619, '13.9', '7.8', 53, '4.6', '0.4', 9, 103, '0.3', 248, 149, '0.4', '2019-05-24'),
(162, 'Cuscuz, paulista', 142, 595, '2.6', '4.6', 15, '22.5', '2.4', 14, 26, '0.3', 236, 53, '0.2', '2019-05-24');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesagem`
--

DROP TABLE IF EXISTS `pesagem`;
CREATE TABLE IF NOT EXISTS `pesagem` (
  `pes_cod` int(11) NOT NULL AUTO_INCREMENT,
  `pes_data` date NOT NULL,
  `pes_altura` decimal(3,2) NOT NULL,
  `pes_kg` decimal(5,2) NOT NULL,
  `user_cod` int(11) DEFAULT NULL,
  PRIMARY KEY (`pes_cod`),
  KEY `user_cod` (`user_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pesagem`
--

INSERT INTO `pesagem` (`pes_cod`, `pes_data`, `pes_altura`, `pes_kg`, `user_cod`) VALUES
(1, '2019-06-16', '1.63', '50.00', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao`
--

DROP TABLE IF EXISTS `refeicao`;
CREATE TABLE IF NOT EXISTS `refeicao` (
  `ref_cod` int(11) NOT NULL AUTO_INCREMENT,
  `ref_tipo` varchar(25) NOT NULL,
  `ref_data` date NOT NULL,
  `ref_hora` time NOT NULL,
  `ref_qtd` int(11) NOT NULL,
  `REF_USER_COD` int(11) DEFAULT NULL,
  PRIMARY KEY (`ref_cod`),
  KEY `usuario_refeicao` (`REF_USER_COD`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `refeicao`
--

INSERT INTO `refeicao` (`ref_cod`, `ref_tipo`, `ref_data`, `ref_hora`, `ref_qtd`, `REF_USER_COD`) VALUES
(1, 'Café da Manhã', '2019-06-13', '16:34:00', 100, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `refeicao_composto`
--

DROP TABLE IF EXISTS `refeicao_composto`;
CREATE TABLE IF NOT EXISTS `refeicao_composto` (
  `id` int(11) NOT NULL,
  `ref_cod` int(11) NOT NULL,
  PRIMARY KEY (`id`,`ref_cod`),
  KEY `refeicao_composto_refCod_FK` (`ref_cod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `refeicao_composto`
--

INSERT INTO `refeicao_composto` (`id`, `ref_cod`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `user_cod` int(11) NOT NULL AUTO_INCREMENT,
  `user_nome` varchar(25) NOT NULL,
  `user_sobrenome` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_sexo` varchar(9) NOT NULL,
  `user_telefone` varchar(11) NOT NULL,
  `user_nasc` date NOT NULL,
  `user_senha` varchar(15) NOT NULL,
  PRIMARY KEY (`user_cod`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`user_cod`, `user_nome`, `user_sobrenome`, `user_email`, `user_sexo`, `user_telefone`, `user_nasc`, `user_senha`) VALUES
(1, 'Jonathan', 'Iha', 'jonathanXiha@outlook.com', 'Masculino', '16981057359', '2000-02-13', 'teste');

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `agua`
--
ALTER TABLE `agua`
  ADD CONSTRAINT `agua_ibfk_1` FOREIGN KEY (`user_cod`) REFERENCES `usuario` (`user_cod`);

--
-- Limitadores para a tabela `pesagem`
--
ALTER TABLE `pesagem`
  ADD CONSTRAINT `pesagem_ibfk_1` FOREIGN KEY (`user_cod`) REFERENCES `usuario` (`user_cod`),
  ADD CONSTRAINT `user_cod` FOREIGN KEY (`user_cod`) REFERENCES `usuario` (`user_cod`);

--
-- Limitadores para a tabela `refeicao`
--
ALTER TABLE `refeicao`
  ADD CONSTRAINT `usuario_refeicao` FOREIGN KEY (`REF_USER_COD`) REFERENCES `usuario` (`user_cod`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
