/*CREATION DES TABLES*/
CREATE DATABASE PHP_PROJECT;
USE PHP_PROJECT;
CREATE TABLE IF NOT EXISTS product(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  price FLOAT NOT NULL,
  id_unit INT NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS unit(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS recipe(
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NOT NULL,
  instruction TEXT,
  id_user INT NOT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE IF NOT EXISTS needs(
  id INT NOT NULL AUTO_INCREMENT,
  id_product INT NOT NULL,
  quantity FLOAT NOT NULL,
  id_recipe INT NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS menu(
  id INT NOT NULL AUTO_INCREMENT,
  jour DATE NOT NULL,
  id_recipe INT NOT NULL,
  PRIMARY KEY (id)
);

CREATE TABLE IF NOT EXISTS `Users` (
  `ID` INT(7) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Username` VARCHAR(15) NOT NULL,
  `Password` VARCHAR (40) NOT NULL,
  `Email` VARCHAR (100) NOT NULL,
  `Activated` TINYINT(1)  UNSIGNED NOT NULL DEFAULT '0',
  `Confirmation` CHAR(40) NOT NULL DEFAULT '',
  `RegDate` INT(11) UNSIGNED NOT NULL,
  `LastLogin` INT(11) UNSIGNED NOT NULL DEFAULT '0',
  `GroupID` INT(2) UNSIGNED NOT NULL DEFAULT '1',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8;

/*ENRICHISSEMENT DES TABLES*/
USE PHP_PROJECT;
INSERT INTO user(login,password,admin) VALUES
('admin','admin',1),
('user','user',0);
INSERT INTO unit(name) VALUES
('litre'),
('kigo'),
('pièces');
INSERT INTO product(name,price,id_unit) VALUES
('lait de soja',2.50,1),
('Oeuf',0.20,3),
('riz',0.80,2);
INSERT INTO recipe(name,instruction,id_user) VALUES
('Omelette',"<p>1. Casser les oeufs</p><p>Battre les oeufs</p><p>cuire les oeufs</p>",2);
INSERT INTO needs(id_product,quantity,id_recipe) VALUES
(2,200,1);
INSERT INTO menu(jour,id_recipe) VALUES
('23-06-2016',1);

/*CREATION USER*/
CREATE USER IF NOT EXISTS 'usersql'@'localhost' IDENTIFIED BY 'pwduser';
GRANT ALL ON PHP_PROJECT.* TO 'usersql'@'localhost' IDENTIFIED BY 'pwduser';
FLUSH PRIVILEGES;
