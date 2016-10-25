-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2016 at 02:58 PM
-- Server version: 5.7.15-0ubuntu0.16.04.1
-- PHP Version: 5.6.26-1+deb.sury.org~xenial+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `PHP_PROJECT`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `jour` date NOT NULL,
  `id_recipe` int(11) NOT NULL,
  `day_moment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `jour`, `id_recipe`, `day_moment`) VALUES
(71, '2016-10-03', 2, 'evening'),
(82, '2016-10-07', 2, 'midday'),
(93, '2016-10-04', 4, 'evening'),
(94, '2016-10-03', 4, 'midday'),
(95, '2016-10-04', 1, 'midday'),
(96, '2016-10-05', 8, 'midday'),
(97, '2016-10-06', 4, 'evening'),
(99, '2016-10-12', 10, 'midday'),
(100, '2016-10-11', 13, 'evening');

-- --------------------------------------------------------

--
-- Table structure for table `needs`
--

CREATE TABLE `needs` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` float NOT NULL,
  `id_recipe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `needs`
--

INSERT INTO `needs` (`id`, `id_product`, `quantity`, `id_recipe`) VALUES
(1, 2, 200, 1),
(2, 5, 2, 4),
(3, 6, 1, 4),
(4, 7, 10, 4),
(5, 1, 75, 7),
(6, 3, 45, 7),
(7, 1, 24, 7),
(8, 6, 1, 7),
(9, 8, 1, 8),
(10, 19, 1, 9),
(11, 20, 1, 9),
(12, 14, 1, 10),
(13, 15, 3, 10),
(14, 12, 2, 10),
(15, 11, 1, 11),
(16, 8, 5, 11),
(17, 13, 12, 12),
(18, 2, 3, 13),
(19, 3, 1, 13),
(20, 20, 2, 13),
(21, 3, 1, 14),
(22, 22, 1, 15),
(23, 23, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `price` float NOT NULL,
  `id_unit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `id_unit`) VALUES
(1, 'lait de soja', 2.5, 1),
(2, 'Oeuf', 0.2, 3),
(3, 'riz', 0.8, 2),
(4, 'Gloui', 45, 1),
(5, 'Gloui', 45, 1),
(6, 'Boulga', 450, 2),
(7, 'Balgou', 1, 3),
(8, 'Patate', 1, 3),
(9, 'Poivre', 50, 2),
(10, 'Maroille', 20, 2),
(11, 'Steak hachÃ© de boeuf', 7, 2),
(12, 'Ail', 1, 3),
(13, 'Tartine', 0.05, 3),
(14, 'Chevreuil', 7, 2),
(15, 'Endive', 1, 3),
(16, 'Courgette', 1, 3),
(17, 'Boudin noir crÃ©ole', 4, 3),
(18, 'Farine', 2, 2),
(19, 'Potiron', 1, 3),
(20, 'Cognac', 15, 1),
(21, 'Girolle', 0.3, 3),
(22, 'Poulet', 7, 3),
(23, 'Sauce aigre-douce', 4, 1),
(24, 'CrÃ¨me chantilly', 2, 3),
(25, 'Chili', 3, 2),
(26, 'Boeuf hachÃ©', 7, 2),
(27, 'Sauce tomate', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recipe`
--

CREATE TABLE `recipe` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `instruction` longtext COLLATE utf8_bin,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `recipe`
--

INSERT INTO `recipe` (`id`, `name`, `instruction`, `id_user`) VALUES
(1, 'Omelette', '<p>1. Casser les oeufs</p><p>Battre les oeufs</p><p>cuire les oeufs</p>', 2),
(2, 'Kebab', 'Faire kebab et manger', 2),
(7, 'Farfadet', 'Faire le farfadet puis ajouter du sel, et enfin tout manger, Miam !', 2),
(8, 'Patate flambÃ©e', 'Faire flamber la pate, mais pas trop fort, puis miam miam.', 2),
(9, 'Potiron farci au cognac', 'Prendre un beau potiron et donner un grand coup de pied au milieu afin de crÃ©er un renfoncement,\r\nremplir le potiron de cognac et flamber le tout.\r\nPrendre un extincteur et eteindre tout Ã§a.', 2),
(10, 'Chevreuil aux endives', 'Mixez votre chevreuil dans un extracteur de jus industriel puis mÃ©langez le tout avec deux-trois endives,\r\narrosez le tout de cognac, Ã  consommer avec modÃ©ration', 2),
(11, 'Steak hachÃ© frites', 'Saisir votre steak en le flambant au cognac,\r\najoutez 500 grammes de poivre, salez Ã  votre convenance.', 2),
(13, 'CrÃ¨pe au beurre de mamie', 'Faire la crÃªpe, puis manger la crÃªpe\r\net ajouter beaucoup de beurre', 4),
(14, 'Riz blanc', 'Cuire le riz, voilÃ ', 2),
(15, 'Poulet aigre-doux', 'Prendre le poulet et lui arracher les pattes\r\nPasser le tout au four pendant 5 minutes\r\n', 2),
(16, 'Chili con carne', 'Tout broyer dans une casserolle et ajouter un grand verre de cognac\r\nEnsuite, pressez le jus restant pour faire une sauce\r\nFacilement accompagnÃ© par un jus d&#039;orange, ou un cognac', 2);

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`id`, `name`) VALUES
(1, 'litre'),
(2, 'kigo'),
(3, 'piÃªces');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `ID` int(7) UNSIGNED NOT NULL,
  `Username` varchar(15) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Activated` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `Confirmation` char(40) NOT NULL DEFAULT '',
  `RegDate` int(11) UNSIGNED NOT NULL,
  `LastLogin` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `GroupID` int(2) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`ID`, `Username`, `Password`, `Email`, `Activated`, `Confirmation`, `RegDate`, `LastLogin`, `GroupID`) VALUES
(2, 'Bakhah', '5df44b2cf63928d0f9fa09f818581e1fa95e540e', 'frkhourdin@gmail.com', 1, '', 1475175068, 1476966745, 1),
(3, 'Jojo', 'c73830a66998cf63a3c0e275a7814098d0e71569', 'jojo@gmail.com', 1, '', 1475234330, 1475234350, 1),
(4, 'Lancieri', '98a3f5a05d1eebc8bd9231999a6aa1cb570a2933', 'lancier@gmail.com', 1, '', 1476954738, 1476955201, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `needs`
--
ALTER TABLE `needs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipe`
--
ALTER TABLE `recipe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `needs`
--
ALTER TABLE `needs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `recipe`
--
ALTER TABLE `recipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `ID` int(7) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
