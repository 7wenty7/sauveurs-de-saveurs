-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema sauveurs-de-saveurs
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema sauveurs-de-saveurs
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `sauveurs-de-saveurs` DEFAULT CHARACTER SET utf8 ;
USE `sauveurs-de-saveurs` ;

-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`product_type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`product_type` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`product` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `ref` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NULL,
  `composition` VARCHAR(45) NULL,
  `use` VARCHAR(45) NULL,
  `price` FLOAT NOT NULL,
  `date` DATE NOT NULL,
  `stock` INT NOT NULL,
  `product_type_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_product_type_idx` (`product_type_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_product_type`
    FOREIGN KEY (`product_type_id`)
    REFERENCES `sauveurs-de-saveurs`.`product_type` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`fruit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`fruit` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`product_image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`product_image` (
  `id` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `path` VARCHAR(150) NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_product_image_product1_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_image_product1`
    FOREIGN KEY (`product_id`)
    REFERENCES `sauveurs-de-saveurs`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`product_has_fruit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`product_has_fruit` (
  `product_id` INT NOT NULL,
  `fruit_id` INT NOT NULL,
  PRIMARY KEY (`product_id`, `fruit_id`),
  INDEX `fk_product_has_fruit_fruit1_idx` (`fruit_id` ASC) VISIBLE,
  INDEX `fk_product_has_fruit_product1_idx` (`product_id` ASC) VISIBLE,
  CONSTRAINT `fk_product_has_fruit_product1`
    FOREIGN KEY (`product_id`)
    REFERENCES `sauveurs-de-saveurs`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_product_has_fruit_fruit1`
    FOREIGN KEY (`fruit_id`)
    REFERENCES `sauveurs-de-saveurs`.`fruit` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`user` (
  `id` INT NOT NULL,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `phone` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `address` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) VISIBLE,
  UNIQUE INDEX `phone_UNIQUE` (`phone` ASC) VISIBLE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`invoice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`invoice` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `ref` VARCHAR(45) NOT NULL,
  `user_id` INT NOT NULL,
  `total` FLOAT NOT NULL,
  `date` DATE NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `ref_UNIQUE` (`ref` ASC) VISIBLE,
  INDEX `fk_invoice_user1_idx` (`user_id` ASC) VISIBLE,
  CONSTRAINT `fk_invoice_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `sauveurs-de-saveurs`.`user` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`invoice_has_product`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`invoice_has_product` (
  `invoice_id` INT NOT NULL,
  `product_id` INT NOT NULL,
  PRIMARY KEY (`invoice_id`, `product_id`),
  INDEX `fk_invoice_has_product_product1_idx` (`product_id` ASC) VISIBLE,
  INDEX `fk_invoice_has_product_invoice1_idx` (`invoice_id` ASC) VISIBLE,
  CONSTRAINT `fk_invoice_has_product_invoice1`
    FOREIGN KEY (`invoice_id`)
    REFERENCES `sauveurs-de-saveurs`.`invoice` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_invoice_has_product_product1`
    FOREIGN KEY (`product_id`)
    REFERENCES `sauveurs-de-saveurs`.`product` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `sauveurs-de-saveurs`.`contact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `sauveurs-de-saveurs`.`contact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `first_name` VARCHAR(45) NULL,
  `last_name` VARCHAR(45) NULL,
  `email` VARCHAR(45) NOT NULL,
  `object` VARCHAR(45) NULL,
  `message` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
