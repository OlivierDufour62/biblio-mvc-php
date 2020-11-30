START TRANSACTION;

DROP DATABASE IF EXISTS biblio;
CREATE DATABASE biblio;
USE biblio;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `lastname` VARCHAR(255) NOT NULL,
    `firstname` VARCHAR(255) NOT NULL,
    `adress` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL UNIQUE,
    `zip_code` VARCHAR(255) NOT NULL,
    `city` VARCHAR(255) NOT NULL,
    `pwd` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `authors`;
CREATE TABLE `authors` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `format`;
CREATE TABLE `format` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `editeurs`;
CREATE TABLE `editeurs` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    PRIMARY KEY (`id`)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `livres`;
CREATE TABLE `livres` (
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `titre` VARCHAR(255) NOT NULL,
    `nbPages` INT NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `date_create` DATETIME DEFAULT CURRENT_DATE,
    `date_update` DATETIME DEFAULT CURRENT_DATE,
    `date_delete` DATETIME DEFAULT CURRENT_DATE,
    `id_Authors` INT(10) NOT NULL,
    `id_Format` INT(10) NOT NULL,
    `id_Editeurs` INT(10) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`id_Authors`) REFERENCES authors(id),
    FOREIGN KEY (`id_Format`) REFERENCES editeurs(id),
    FOREIGN KEY (`id_Editeurs`) REFERENCES format(id)
)ENGINE=innoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

COMMIT;