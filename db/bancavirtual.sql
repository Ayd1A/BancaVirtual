CREATE SCHEMA IF NOT EXISTS `bancavirtual` DEFAULT CHARACTER SET utf8 ;
USE `bancavirtual` ;

-- -----------------------------------------------------
-- Table `bancavirtual`.`cliente`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bancavirtual`.`cliente` (
  `dpi` VARCHAR(45) NOT NULL,
  `nombres` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `user_type` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`dpi`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bancavirtual`.`cuenta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bancavirtual`.`cuenta` (
  `idcuenta` INT NOT NULL AUTO_INCREMENT,
  `saldo` VARCHAR(45) NOT NULL,
  `cliente_dpi` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idcuenta`, `cliente_dpi`),
  INDEX `fk_cuenta_cliente_idx` (`cliente_dpi` ASC),
  CONSTRAINT `fk_cuenta_cliente`
    FOREIGN KEY (`cliente_dpi`)
    REFERENCES `bancavirtual`.`cliente` (`dpi`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;





-- -----------------------------------------------------
-- Table `bancavirtual`.`Movimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `bancavirtual`.`Movimiento` (
  `idMovimiento` INT NOT NULL AUTO_INCREMENT,
  `monto` VARCHAR(45) NOT NULL,
  `cuenta_idcuenta` INT NOT NULL,
  `TipoMovimiento` VARCHAR(45) NULL,
  PRIMARY KEY (`idMovimiento`, `cuenta_idcuenta`),
  INDEX `fk_Movimiento_cuenta1_idx` (`cuenta_idcuenta` ASC),
  CONSTRAINT `fk_Movimiento_cuenta1`
    FOREIGN KEY (`cuenta_idcuenta`)
    REFERENCES `bancavirtual`.`cuenta` (`idcuenta`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;
