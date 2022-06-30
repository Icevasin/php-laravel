-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Customers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Customers` (
  `CustomerID` INT NOT NULL,
  `CustomerFirstname` VARCHAR(100) NOT NULL,
  `CustomerLastname` VARCHAR(100) NOT NULL,
  `E-mail` VARCHAR(100) NOT NULL,
  `Phone` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`CustomerID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Products` (
  `ProductID` INT NOT NULL,
  `TypeOfShirt` VARCHAR(45) NOT NULL,
  `Size` VARCHAR(45) NOT NULL,
  `PricePerItem` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ProductID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`TheSeller`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`TheSeller` (
  `SellerID` INT NOT NULL,
  `SellerFirstname` VARCHAR(100) NOT NULL,
  `SellerLastname` VARCHAR(100) NOT NULL,
  `E-mail` VARCHAR(100) NOT NULL,
  `Phone` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(300) NOT NULL,
  PRIMARY KEY (`SellerID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Orders`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Orders` (
  `OrderNumber` INT NOT NULL,
  `OrderDate` DATETIME NOT NULL,
  `ShippingDate` DATETIME NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `Comment` VARCHAR(45) NULL,
  `CustomerID` INT NOT NULL,
  `SellerID` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`OrderNumber`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`OrderDetails`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`OrderDetails` (
  `OrderNumber` INT NOT NULL,
  `ProductID` VARCHAR(45) NOT NULL,
  `QuantityOrdered` VARCHAR(45) NOT NULL,
  `PriceEach` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`OrderNumber`, `ProductID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Payment`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Payment` (
  `PaymentNumber` INT NOT NULL,
  `PaymentBy` VARCHAR(50) NOT NULL,
  `PaymentDate` DATETIME NOT NULL,
  `OrderNumber` INT NOT NULL,
  PRIMARY KEY (`PaymentNumber`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
