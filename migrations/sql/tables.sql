USE `Local`;

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(45) NOT NULL, 
    `body` VARCHAR(255) NOT NULL,
    `stars` INT(11) NOT NULL,
    `marvelid` INT(11) NOT NULL,
    PRIMARY KEY('id');
)

DROP TABLE IF EXISTS `comics`;
CREATE TABLE IF NOT EXISTS `comics` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `marvelid` INT(11) NOT NULL, 
    `title` VARCHAR(255) NOT NULL,
    `issue` INT(11) NOT NULL,
    `description` TEXT NOT NULL,
    `thumbnail` VARCHAR(255) NOT NULL,
    `characters` TEXT NOT NULL,
    `extension` VARCHAR(45) NOT NULL,
     PRIMARY KEY('id')
)