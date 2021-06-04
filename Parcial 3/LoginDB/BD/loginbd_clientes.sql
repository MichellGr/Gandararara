CREATE DATABASE LoginDB
Use LoginDB;
CREATE TABLE Clientes (
  IDCliente INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
  Usuario varchar(20) NOT NULL,
  Clave varchar(20) NOT NULL
);

INSERT INTO Clientes VALUES (1,'Michell','Gandara');