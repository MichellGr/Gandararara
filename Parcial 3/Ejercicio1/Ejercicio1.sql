CREATE DATABASE Gandararara;
Use Gandararara;


CREATE TABLE Clientes (
IdCliente INT PRIMARY KEY IDENTITY (1,1) NOT NULL,
Nombre VARCHAR(30) NOT NULL,
Direccion VARCHAR(30) NOT NULL,
Colonia VARCHAR(20) NOT NULL,
Referencias VARCHAR(30) NOT NULL,
TotalPorPagar FLOAT(20) NOT NULL
);

INSERT INTO Clientes (Nombre,Direccion,Colonia,Referencias,TotalPorPagar) 
VALUES('Monica','Cerro del cimatario 44','Benito Juarez','Casa naranja','200'),
('Christian','Santiago tapia 22','Infonavit','Casa verde','120'),
('Ana','16 de septiembre 705','Centro','Casa azul','350'),
('Carlos','Avenida fundadores 35','Guerrero','Casa verde','400'),
('Yahir','Ayutla 53','Benito Juarez','Casa amarilla','250')