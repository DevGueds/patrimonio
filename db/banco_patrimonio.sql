-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema patrimonio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema patrimonio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `patrimonio` DEFAULT CHARACTER SET utf8 ;
USE `patrimonio` ;

-- -----------------------------------------------------
-- Table `patrimonio`.`cadastro_usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `patrimonio`.`cadastro_usuario` (
  `id_usuario` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `usuario` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `senha` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `permissao` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_usuario`)  COMMENT '')
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `patrimonio`.`cadastro_patrimonio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `patrimonio`.`cadastro_patrimonio` (
  `id_patrimonio` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `descricao` VARCHAR(150) NULL DEFAULT NULL COMMENT '',
  `quantidade` INT(11) NULL DEFAULT NULL COMMENT '',
  `numero_patrimonio` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `valor` DOUBLE NULL DEFAULT NULL COMMENT '',
  `data_aquisicao` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `forma_aquisicao` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `fornecedor` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `empenho` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `local` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `data_cadastro` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `id_usuario` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id_patrimonio`)  COMMENT '',
  INDEX `fk_cadastro_patrimonio_cadastro_usuario_idx` (`id_usuario` ASC)  COMMENT '',
  CONSTRAINT `fk_cadastro_patrimonio_cadastro_usuario`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `patrimonio`.`cadastro_usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
