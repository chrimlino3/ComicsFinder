CREATE DATABASE `marveldata`;

USE marveldata;

CREATE TABLE IF NOT EXISTS `reviews` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(45) NOT NULL, 
    `body` VARCHAR(255) NOT NULL,
    `marvelid` INT(11) NOT NULL,
    PRIMARY KEY(id)
);


CREATE TABLE IF NOT EXISTS `comics` ( 
    `id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `marvelid` INT NOT NULL, 
    `issue` INT NOT NULL,
    `description` TEXT NOT NULL,
    `thumbnail` VARCHAR(255) NOT NULL,
    `characters` TEXT NOT NULL,
    `extension` VARCHAR(45) NOT NULL,
     PRIMARY KEY(id)
) 