/* Creacion de la base de datos */

CREATE DATABASE IF NOT EXISTS producto;

/* Creacion de las tablas */

CREATE TABLE IF NOT EXISTS Productos (
    ProductID int NOT NULL,
    Nombre varchar(255),
    Cantidad int,
    PRIMARY KEY (ProductID)
);

CREATE TABLE IF NOT EXISTS users (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    type VARCHAR(10) NOT NULL,
    created_at DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS Clientes (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NombreCliente varchar(255),
	NombreEmpresa varchar(255),
	DireccionEmpresa varchar(255),
	Telefono varchar(20),
	Correo varchar(255)
);

CREATE TABLE IF NOT EXISTS Repartidores (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NombreRepartidor varchar(255),
	Telefono varchar(20),
	username VARCHAR(50) NOT NULL UNIQUE,
	FOREIGN KEY (username) REFERENCES users(username)
);

CREATE TABLE IF NOT EXISTS Pedidos (
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	idCliente INT NOT NULL,
	idRepartidor INT NOT NULL,
	Cantidad INT,
	Precio DECIMAL(6,2),
	FechaLimite DATETIME,
	Completado BIT NOT NULL,
	FechaCreacion DATETIME DEFAULT CURRENT_TIMESTAMP,
	FOREIGN KEY (idCliente) REFERENCES Clientes(id),
	CONSTRAINT fk_cliente_pedidos FOREIGN KEY (idCliente) REFERENCES Clientes (id) ON DELETE CASCADE,
	FOREIGN KEY (idRepartidor) REFERENCES Repartidores(id),
	CONSTRAINT fk_repartidor_pedidos FOREIGN KEY (idRepartidor) REFERENCES Repartidores (id) ON DELETE CASCADE
);

/* Poblar las tablas */

/* Insertar Producto */
INSERT INTO Productos
VALUES (0001, "Barra de Amaranto", 155);

/* Insertar Usuarios */
INSERT INTO users (username, password, type)
VALUES ("admin","admin","admin");

INSERT INTO users (username, password, type)
VALUES ("repartidor","repartidor","user");

INSERT INTO users (username, password, type)
VALUES ("supercool","supercool","user");

/* Insertar Clientes */
INSERT INTO Clientes (NombreCliente,NombreEmpresa,DireccionEmpresa,Telefono,Correo)
VALUES ("Juan Lopez","Soriana","Av Garza Sada 2211","88145627","juanlopez@soriana.com");

INSERT INTO Clientes (NombreCliente,NombreEmpresa,DireccionEmpresa,Telefono,Correo)
VALUES ("Carlos Delgado","Telmex","5 de Mayo, 1023","1000000","super@telmex.com");

/* Insertar Repartidores */
INSERT INTO Repartidores (NombreRepartidor,Telefono,username)
VALUES ("Pedro Garza","81198462","repartidor");

INSERT INTO Repartidores (NombreRepartidor,Telefono,username)
VALUES ("Oscar Laureano","341787878","supercool");

/* Insertar Pedido */
INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado)
VALUES (1,1,35,350,'18-06-12 10:34:09',0);

INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado)
VALUES (1,1,20,200,'18-10-12 10:34:09',0);

INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado)
VALUES (1,2,20,200,'18-06-12 10:34:09',0);

INSERT INTO Pedidos(idCliente,idRepartidor,Cantidad,Precio,FechaLimite,Completado)
VALUES (1,2,35,350,'18-11-12 10:34:09',0);
