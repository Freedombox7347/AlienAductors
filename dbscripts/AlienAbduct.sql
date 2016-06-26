-- MySQL Script generated by MySQL Workbench
-- 06/24/16 21:47:26
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Alien_Abductors
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema Alien_Abductors
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Alien_Abductors` DEFAULT CHARACTER SET utf8 ;
USE `Alien_Abductors` ;

-- -----------------------------------------------------
-- Table `Alien_Abductors`.`Location`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Alien_Abductors`.`Location` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `State` VARCHAR(45) NULL,
  `Country` VARCHAR(45) NULL,
  `City` VARCHAR(45) NULL,
  `Zipcode` VARCHAR(15) NULL,
  `Address` VARCHAR(255) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Alien_Abductors`.`Privileges`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Alien_Abductors`.`Privileges` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Admin` TINYINT(1) NOT NULL,
  `User` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Alien_Abductors`.`Members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Alien_Abductors`.`Members` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `First_Name` VARCHAR(45) NULL,
  `Last_Name` VARCHAR(45) NULL,
  `Age` TINYINT NULL,
  `location_id` INT UNSIGNED NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(255) NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Privilege` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE(`Username`),
  UNIQUE(`Email`),
  INDEX `State_id_idx` (`location_id` ASC),
  INDEX `Privlage_idx` (`Privilege` ASC),
  CONSTRAINT `State_id`
    FOREIGN KEY (`location_id`)
    REFERENCES `Alien_Abductors`.`Location` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Privilege`
    FOREIGN KEY (`Privilege`)
    REFERENCES `Alien_Abductors`.`Privileges` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE);


-- -----------------------------------------------------
-- Table `Alien_Abductors`.`Experience`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Alien_Abductors`.`Experience` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Exp_Name` VARCHAR(45) NOT NULL,
  `Description` TEXT NULL,
  PRIMARY KEY (`id`),
  UNIQUE(`Exp_Name`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `Alien_Abductors`.`Exp_Reviews`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `Alien_Abductors`.`Exp_Reviews` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `Review` TEXT(1000) NULL,
  `Exp_Rating` TINYINT(5) NULL,
  `Member_id` INT UNSIGNED NOT NULL,
  `Exp_id` INT UNSIGNED NOT NULL,
  `Recommend` TINYINT(1) NULL,
  PRIMARY KEY (`id`),
  INDEX `Member_id_idx` (`Member_id` ASC),
  INDEX `Exp_id_idx` (`Exp_id` ASC),
  CONSTRAINT `Member_id`
    FOREIGN KEY (`Member_id`)
    REFERENCES `Alien_Abductors`.`Members` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `Exp_id`
    FOREIGN KEY (`Exp_id`)
    REFERENCES `Alien_Abductors`.`Experience` (`id`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;


