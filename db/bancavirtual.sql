	CREATE TABLE `clientes` ( 
   `idcliente` int(11) NOT NULL AUTO_INCREMENT,
 `nombres` varchar(40) NOT NULL,
   `apellido` varchar(40) DEFAULT NULL,
 `telefono` varchar(40) DEFAULT NULL,
 `dpi` varchar(40)  NOT NULL,
 `direccion` varchar(40) DEFAULT NULL,
 `correo` varchar(40) NOT NULL,
 `password` varchar(40) NOT NULL,
  `user_type` varchar(40) NOT NULL,
 PRIMARY KEY (`idcliente`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;


INSERT INTO clientes ( nombres,apellido,telefono,dpi,direccion,correo,password,user_type)
VALUES ('malibu', 'verv', '889', '990', 'Montana', 'malibu@gmail.com','123', 'admin');

CREATE TABLE `cuenta` ( 
   `idcuenta` int(11) NOT NULL AUTO_INCREMENT,
 `nombre` varchar(40)  DEFAULT NULL,
   `tipo` varchar(40) NOT NULL, 
 PRIMARY KEY (`idcuenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO cuenta (nombre, tipo)
VALUES ('Cuenta Monetaria', 'Monetaria');
INSERT INTO cuenta (nombre, tipo)
VALUES ('Cuenta de Ahorro', 'Ahorro');

CREATE TABLE `cliente_cuenta` ( 
   `idclientcuenta` int(11) NOT NULL AUTO_INCREMENT,
   `idcliente` int(11) NOT NULL,
  `idcuenta` int(11) NOT NULL,

   CONSTRAINT FK_client FOREIGN KEY (idcliente)
    REFERENCES clientes(idcliente)  ON DELETE CASCADE,
  CONSTRAINT FK_cuenta FOREIGN KEY (idcuenta)
    REFERENCES cuenta(idcuenta)
      ON DELETE CASCADE,
 PRIMARY KEY (`idclientcuenta`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO cliente_cuenta (idcliente, idcuenta)
VALUES (1, 2);


CREATE TABLE `movimientos` ( 
   `idmov` int(11) NOT NULL AUTO_INCREMENT,
   `idcliente` int(11) NOT NULL,
  `idcuenta` int(11) NOT NULL,
 `monto` int(11) NOT NULL,
  `tipo` varchar(40)  NOT NULL,
   CONSTRAINT FK_client1 FOREIGN KEY (idcliente)
    REFERENCES clientes(idcliente)  ON DELETE CASCADE,
  CONSTRAINT FK_cuenta1 FOREIGN KEY (idcuenta)
    REFERENCES cuenta(idcuenta)
      ON DELETE CASCADE,
 PRIMARY KEY (`idmov`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1;

INSERT INTO movimientos (idcliente, idcuenta,monto,tipo)
VALUES (1, 2, 'retiro', '90');
