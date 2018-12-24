/*
BD: deportes
usuario: deportesdb
password: rias1
*/
CREATE TABLE Usuario (
             nCveUsu INTEGER NOT NULL,
             sContrasenia VARCHAR(15) NOT NULL,
             sNombre VARCHAR (20) NOT NULL,
             sApePaterno VARCHAR (20) NOT NULL,
             sApeMaterno VARCHAR (20) NOT NULL,
             nTelefono BIGINT NOT NULL,
             sDireccion VARCHAR (40) NOT NULL,
             sEmail VARCHAR (40) NOT NULL
);
ALTER TABLE Usuario
        ADD PRIMARY KEY (nCveUsu);
CREATE TABLE Administrador (
              nCveAdmin INTEGER NOT NULL,
              sContrasenia VARCHAR(15) NOT NULL,
              sNombre VARCHAR (20) NOT NULL,
              sApePaterno VARCHAR (20) NOT NULL,
              sApeMaterno VARCHAR (20) NOT NULL,
              sEmail VARCHAR (40) NOT NULL

);
ALTER TABLE Administrador
        ADD PRIMARY KEY (nCveAdmin);

CREATE TABLE Productos (
              nCveProd INTEGER NOT NULL,
              sNomProducto VARCHAR(120) NOT NULL,
              nPrecio NUMERIC(10,2) NOT NULL,
              sTallas VARCHAR (15) NOT NULL,
              sTamanos VARCHAR (10) NOT NULL,
              sColores VARCHAR (20) NOT NULL,
              sTipo VARCHAR (25) NOT NULL,
              sEquipo VARCHAR (30) NOT NULL,
              sDisciplina VARCHAR (30) NOT NULL,
              nCantidad   INTEGER NOT NULL,
              sGenero VARCHAR (20) NOT NULL,
              sImg VARCHAR (100) NOT NULL,
              nCveAdmin INTEGER NOT NULL
);
ALTER TABLE Productos
          ADD PRIMARY KEY (nCveProd);
ALTER TABLE Productos ADD CONSTRAINT admin_addprod_fk
          FOREIGN KEY (nCveAdmin)
          REFERENCES Administrador (nCveAdmin);

CREATE TABLE Compras(
              nCveCompra INTEGER NOT NULL,
              nCveProd   INTEGER NOT NULL,
              nCveUsu    INTEGER NOT NULL,
              dFecha     DATE NOT NULL,
              nCantidad  INTEGER NOT NULL,
              sEstado    VARCHAR(15) NOT NULL
);
ALTER TABLE Compras
        ADD PRIMARY KEY (nCveCompra);
ALTER TABLE Compras ADD CONSTRAINT prod_comprado_fk
        FOREIGN KEY (nCveProd)
        REFERENCES Productos (nCveProd);
ALTER TABLE Compras ADD CONSTRAINT usu_compra_fk
        FOREIGN KEY (nCveUsu)
        REFERENCES Usuario (nCveUsu);



/* DATOS */

INSERT INTO Usuario (nCveUsu, sContrasenia, sNombre, sApePaterno, sApeMaterno, nTelefono, sDireccion, sEmail)
VALUES (1,'cont1','Orlando','Caricio','Jimenez',2731245240,'Atoyac','uri_170397@hotmail.com');
INSERT INTO Usuario (nCveUsu, sContrasenia, sNombre, sApePaterno, sApeMaterno, nTelefono, sDireccion, sEmail)
VALUES (2,'cont2','Anel','Gonzalez','Andrade',2731234567,'Potrero','anel@gmail.com');
INSERT INTO Usuario (nCveUsu, sContrasenia, sNombre, sApePaterno, sApeMaterno, nTelefono, sDireccion, sEmail)
VALUES (3,'cont3','Michelle','Caricio','Jimenez',2737654321,'Atoyac','Mich@gmail.com');

INSERT INTO Administrador (nCveAdmin, sContrasenia, sNombre, sApePaterno, sApeMaterno, sEmail)
VALUES (1,'Uriel123','Uriel','Caricio','Jimenez','uri.aguila.10@gmail.com');
INSERT INTO Administrador (nCveAdmin, sContrasenia, sNombre, sApePaterno, sApeMaterno, sEmail)
VALUES (2,'Joanan123','Joanan','Sierra', 'Sanchez', 'joanan@gmail.com');

INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (1,'Playera Oficial',200,'Mediana','N/A','Azul','Uniforme', 'Barcelona', 'Futbol', 4, 'Masculino','img/productos/prod1camisaBarcelona.jpg',1);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (2,'Balon Futbol n5',300,'N/A','5','Azul','Balones', 'Nike', 'Futbol', 4,'N/A', 'img/productos/prod2balonazulnike.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (3,'Pants',400,'Mediana','N/A','Blanco','Uniforme', 'Nike', 'Futbol', 4,'Femenino', 'img/productos/prod3pantsfemblanco.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (4,'Taza Serie mundial',100,'N/A','Grande','Blanco','Souvenir', 'Dodgers', 'Beisbol', 4,'N/A', 'img/productos/prod4tasadodgers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (5,'Playera entrenamiento',300,'Mediana','N/A','Blanco','Uniforme', 'Adidas', 'Futbol', 4,'Masculino', 'img/productos/prod5camisaentrenamiento.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (6,'Camisa Oficial',500,'Mediana','N/A','Dorado','Uniforme', 'Lakers', 'Baloncesto', 4,'Masculino', 'img/productos/prod6camisalakers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (7,'LLavero Chelsea',150,'N/A','Chico','Azul','Souvenir', 'Chelsea', 'Futbol', 4,'N/A', 'img/productos/prod7llaverochelsea.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (8,'Camisa Seleccion Mexicana',1150,'Chica','N/A','Verde','Uniforme', 'Mexico', 'Futbol', 4,'boy', 'img/productos/prod8camisaseleccionniño.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (9,'Tacos deportivos',1050,'No 28','N/A','Negro','Uniforme', 'Nike', 'Futbol', 4,'Masculino', 'img/productos/prod9tacosnikenegros.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (10,'Chamarra',550,'Chica','N/A','Rosa','Uniforme', 'Adidas', 'Futbol', 4,'girl', 'img/productos/prod10chamarrarosani.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (11,'Balon Baloncesto',750,'N/A','5','Cafe','Balones', 'Wilson', 'Baloncesto', 4,'Masculino', 'img/productos/prod11balonbalwilson.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (12,'Taza Mexico',200,'N/A','Grande','Blanco','Souvenir', 'Mexico', 'Futbol', 2,'Masculino', 'img/productos/prod12tazamexico.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (13,'Balon Barcelona',400,'N/A','5','Amarillo','Balones', 'Nike', 'Futbol', 6,'Masculino', 'img/productos/prod13barca.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (14,'Llavero Baseball',200,'N/A','Chico','Blanco','Souvenir', 'Base', 'Beisbol', 2,'Masculino', 'img/productos/prod14llaverobeis.png',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (15,'Llavero Mexico',100,'N/A','Chico','Rojo','Souvenir', 'Mexico', 'Futbol', 5,'Masculino', 'img/productos/prod15llaveromexico.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (16,'Camisa RealMadrid',1000,'Mediana','N/A','Blanco','Uniforme', 'Arsenal', 'Futbol', 3,'Masculino', 'img/productos/prod16camisareal.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (17,'Camisa Chivas',1600,'Chica','N/A','Verde','Uniforme', 'Chivas', 'Futbol', 10,'Masculino', 'img/productos/prod17camisachivas.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (18,'Camisa National',600,'Mediana','N/A','Rojo','Uniforme', 'National', 'Beisbol', 4,'Masculino', 'img/productos/prod18camisanational.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (19,'Chamarra',700,'Mediana','N/A','Gris','Uniforme', 'Puma', 'Futbol', 4,'Masculino', 'img/productos/prod19chamarrapuma.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (20,'Balon Barca ',800,'N/A','5','Blanco','Balones', 'Nike', 'Futbol', 2,'Masculino', 'img/productos/prod20barca.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (21,'Camisa Barcelona M ',1100,'chica','N/A','Azul','Uniforme', 'Nike', 'Futbol', 6,'Femenino', 'img/productos/prod21camisabarcelona.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (22,'Taza Barcelona ',200,'N/A','Grande','Azul','Souvenir', 'Barcelona', 'Futbol', 2,'Masculino', 'img/productos/prod22tasabarcelona.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (23,'Taza Real Madrid',300,'N/A','Grande','Blanco','Souvenir', 'Real Madrid', 'Futbol', 4,'Masculino', 'img/productos/prod23tazareal.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (24,'Balon Mexico ',600,'N/A','5','Blanco','Balones', 'Adidas', 'Futbol', 2,'Masculino', 'img/productos/prod24balonmexico.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (25,'Balon Mexico ',650,'N/A','5','Verde','Balones', 'Adidas', 'Futbol', 8,'Masculino', 'img/productos/prod25balonmexico.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (26,'Camisa Lakers ',850,'Grande','N/A','Negro','Uniformes', 'Lakers', 'Baloncesto', 3,'Masculino', 'img/productos/prod26camisalakers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (27,'Camisa Lakers ',650,'Grande','N/A','Blanco','Uniforme', 'Lakers', 'Baloncesto', 9,'Masculino', 'img/productos/prod27camisalakers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (28,'Balon Lakers ',850,'N/A','6','Morado','Balones', 'Lakers', 'Baloncesto', 4,'Masculino', 'img/productos/prod28balonlakers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (29,'Balon Lakers ',650,'N/A','6','Negro','Balones', 'Lakers', 'Baloncesto', 3,'Masculino', 'img/productos/prod29balonlakers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (30,'Taza Dodgers ',300,'N/A','Grande','Azul','Souvenir', 'Dodgers', 'Beisbol', 4,'Masculino', 'img/productos/prod30tazadodgers.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (31,'Camisa Seleccion Argentina',1300,'Mediana','N/A','Azul','Uniforme', 'Argentina', 'Futbol', 4,'Femenino', 'img/productos/prod31camisaargn.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (32,'Camisa Seleccion Brasil',1300,'Mediana','N/A','Amarillo','Uniforme', 'Brasil', 'Futbol', 4,'Femenino', 'img/productos/prod32camisabras.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (33,'Pants Nike',900,'Mediana','N/A','Negro','Uniforme', 'Nike', 'Futbol', 4,'Femenino', 'img/productos/prod33pantsnike.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (34,'Camisa Dodgers',1000,'Mediana','N/A','Blanco','Uniforme', 'Dodgers', 'Beisbol', 4,'Femenino', 'img/productos/prod34camisadodgerfem.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (35,'Short Adidas',600,'Chica','N/A','Rosado','Uniforme', 'Adidas', 'Futbol', 4,'Femenino', 'img/productos/prod35shortrosaadidas.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (36,'Camisa Seleccion España',1300,'Mediana','N/A','Roja','Uniforme', 'España', 'Futbol', 4,'Femenino', 'img/productos/prod36camisaselecespa.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (37,'Camisa Lakers',700,'Mediana','N/A','Amarillo','Uniforme', 'Lakers', 'Baseball', 4,'Femenino', 'img/productos/prod37camisalakersfem.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (38,'Pants Nike',500,'Medinana','N/A','Azul','Uniforme', 'Nike', 'Futbol', 4,'Femenino', 'img/productos/prod38pantsnikeazulfem.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (39,'Camisa Club America',1500,'Medinana','N/A','Amarillo','Uniforme', 'America', 'Futbol', 4,'Femenino', 'img/productos/prod39camisafemamerica.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (40,'Camisa Club RealMadrid ',1200,'Mediana','N/A','Blanco','Uniforme', 'RealMadrid', 'Futbol', 4,'Femenino', 'img/productos/prod40camisarealfem.jpg',2);

INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (41,'Gorra Boston',600,'Chica','N/A','Negro','Uniforme', 'Boston', 'Beisbol', 4,'boy', 'img/productos/prod41gorraboston.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (42,'Camisa Club RealMadrid ',1000,'Chica','N/A','Blanco','Uniforme', 'RealMadrid', 'Futbol', 4,'boy', 'img/productos/prod42camisaninosreal.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (43,'Camisa Club Millan ',1000,'Chica','N/A','Roo','Uniforme', 'Millan', 'Futbol', 4,'boy', 'img/productos/prod43camisamillaninnos.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (44,'Camisa Club America ',1200,'Chica','N/A','Amarillo','Uniforme', 'America', 'Futbol', 4,'boy', 'img/productos/prod44camisaameninos.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (45,'Pants Nike Infantil ',700,'Chica','N/A','Negro','Uniforme', 'Nike', 'Futbol', 4,'boy', 'img/productos/prod45pantsnikenino.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (46,'Pants Niñe Infantil ',600,'Chica','N/A','Azul','Uniforme', 'Nike', 'Futbol', 4,'girl', 'img/productos/prod46pantsnikenina.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (47,'Chamarra Nike Infantil',1200,'Chica','N/A','Azul','Uniforme', 'Nike', 'Futbol', 4,'girl', 'img/productos/prod47chamarrainfantil.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (48,'Camisa Chicago Bulls ',500,'Chica','N/A','Blanco','Uniforme', 'Chicago Bulls', 'Baloncesto', 4,'girl', 'img/productos/prod48camisabulls.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (49,'Camisa NBA Seleccion USA',1000,'Chica','N/A','Blanco','Uniforme', 'USA', 'Baloncesto', 4,'girl', 'img/productos/prod49camisanbausa.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (50,'Chamarra Puma Infantil',900,'Chica','N/A','Rosado','Uniforme', 'Puma', 'Futbol', 4,'girl', 'img/productos/prod50chamarrapumanina.jpg',2);

INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (51,'Tennis Nike Azul',900,'No. 25','N/A','Azul','Uniforme', 'Nike', 'Futbol', 4,'Masculino', 'img/productos/prod51tennisnukeazul.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
  VALUES (52,'Tennis Adidas Verdes',900,'No. 23','N/A','Verde','Uniforme', 'Adidas', 'Futbol', 4,'Femenino', 'img/productos/prod52tennisaddverd.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (53,'Tennis Puma Blancos',900,'No.27','N/A','Blanco','Uniforme', 'Puma', 'Futbol', 4,'Masculino', 'img/productos/prod53tennispuma.jpg',2);
INSERT INTO Productos (nCveProd, sNomProducto, nPrecio, sTallas, sTamanos, sColores, sTipo, sEquipo, sDisciplina, nCantidad, sGenero, sImg, nCveAdmin)
VALUES (54,'Tennis Skechers',900,'No. 25','N/A','Azul','Uniforme', 'Skechers', 'Futbol', 4,'Masculino', 'img/productos/prod54tennisskets.jpg',2);


INSERT INTO Compras (nCveCompra, nCveProd, nCveUsu, dFecha, nCantidad, sEstado)
VALUES (1,1,1,'2018-12-05',2,'Acreditado');

CREATE USER 'deportesdb'@'localhost' IDENTIFIED BY 'rias1';

GRANT select, insert, delete, update ON Usuario TO deportesdb;
GRANT select, insert, delete, update ON Administrador TO deportesdb;
GRANT select, insert, delete, update ON Productos TO deportesdb;
GRANT select, insert, delete, update ON Compras TO deportesdb;
