/*
    1. Diseñar y crear la base de datos de un concesionario.
*/

CREATE DATABASE IF NOT EXISTS concesionario;
USE concesionario;

CREATE TABLE coches(
    id int(10) NOT NULL AUTO_INCREMENT,
    modelo varchar(100) NOT NULL,
    marca varchar(50),
    precio int(20) NOT NULL,
    stock int(255) NOT NULL,
    CONSTRAINT pk_coches PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE grupos(
    id int(10) NOT NULL AUTO_INCREMENT,
    nombre varchar(100) NOT NULL,
    ciudad varchar(100),
    CONSTRAINT pk_grupos PRIMARY KEY(id)
)ENGINE=InnoDB;

CREATE TABLE vendedores(
    id int(10) NOT NULL AUTO_INCREMENT,
    grupo_id int(10) NOT NULL,
    jefe int(10),
    nombre varchar(100) NOT NULL,
    apellidos varchar(150),
    cargo varchar(50) NOT NULL,
    fecha_alta date,
    sueldo float(20,2),
    comision float(10,2),
    CONSTRAINT pk_vendedores PRIMARY KEY(id),
    CONSTRAINT fk_vendedor_grupo FOREIGN KEY(grupo_id) REFERENCES grupos(id),
    CONSTRAINT fk_vendedor_jefe FOREIGN KEY(jefe) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE clientes(
    id int(10) NOT NULL AUTO_INCREMENT,
    vendedor_id int(10),
    nombre varchar(150) NOT NULL,
    ciudad varchar(100),
    gastado float(50,2),
    fecha date,
    CONSTRAINT pk_clientes PRIMARY KEY(id),
    CONSTRAINT fk_cliente_vendedor FOREIGN KEY(vendedor_id) REFERENCES vendedores(id)
)ENGINE=InnoDB;

CREATE TABLE encargos(
    id int(10) NOT NULL AUTO_INCREMENT,
    cliente_id int(10) NOT NULL,
    coche_id int(10) NOT NULL,
    cantidad int(100),
    fecha date,
    CONSTRAINT pk_encargos PRIMARY KEY(id),
    CONSTRAINT fk_encargo_cliente FOREIGN KEY(cliente_id) REFERENCES clientes(id),
    CONSTRAINT fk_encargo_coche FOREIGN KEY(coche_id) REFERENCES coches(id)
)ENGINE=InnoDB;


# RELLENAR LA BASE DE DATOS CON INFORMACION - INSERTS #

# COCHES #
INSERT INTO coches VALUES (NULL, 'Renault Clio', 'Renault', 12000, 13);
INSERT INTO coches VALUES (NULL, 'Seat Panda', 'Seat', 10000, 10);
INSERT INTO coches VALUES (NULL, 'Mercedes Ranchera', 'Mercedez Benz', 32000, 24);
INSERT INTO coches VALUES (NULL, 'Porche Cayene', 'Porche', 65000, 5);
INSERT INTO coches VALUES (NULL, 'Lambo Aventador', 'Lamborgini', 170000, 2);
INSERT INTO coches VALUES (NULL, 'Ferrari Spider', 'Ferrari', 245000, 80);

# GRUPOS #
INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Directores Mecanicos', 'Madrid');
INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Barcelona');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Barcelona');
INSERT INTO grupos VALUES (NULL, 'Vendedores C', 'Valencia');
INSERT INTO grupos VALUES (NULL, 'Vendedores A', 'Bilbao');
INSERT INTO grupos VALUES (NULL, 'Vendedores B', 'Pamplona');
INSERT INTO grupos VALUES (NULL, 'Vendedores C', 'Santiago de Compostela');

# VENDEDORES #
INSERT INTO vendedores VALUES (NULL, 1, NULL, 'David', 'Lopez', 'Responsable de tienda', CURDATE(), 30000, 4);
INSERT INTO vendedores VALUES (NULL, 1, 1, 'Fran', 'Martinez', 'Ayudante en tienda', CURDATE(), 23000, 2);
INSERT INTO vendedores VALUES (NULL, 2, NULL, 'Nelson', 'Sánchez', 'Responsable de tienda', CURDATE(), 38000, 5);
INSERT INTO vendedores VALUES (NULL, 2, 3, 'Jesus', 'Lopez', 'Ayudante en tienda', CURDATE(), 12000, 6);
INSERT INTO vendedores VALUES (NULL, 3, NULL, 'Víctor', 'Lopez', 'Mecanico jefe', CURDATE(), 50000, 2);
INSERT INTO vendedores VALUES (NULL, 4, NULL, 'Antonio', 'Lopez', 'Vendedor de recambios', CURDATE(), 13000, 8);
INSERT INTO vendedores VALUES (NULL, 5, NULL, 'Salvador', 'Lopez', 'Vendedor experto', CURDATE(), 60000, 2);
INSERT INTO vendedores VALUES (NULL, 6, NULL, 'Joaquin', 'Lopez', 'Ejecutivo de cuentas', CURDATE(), 80000, 1);
INSERT INTO vendedores VALUES (NULL, 6, 8, 'Luis', 'Lopez', 'Ayudante de tienda', CURDATE(), 10000, 10);

# CLIENTES #
INSERT INTO clientes VALUES (NULL, 1, 'Construcciones Diaz Inc', 'Alcobendas', 24000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Fruteria Antonia Inc', 'Fuenlabrada', 40000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Imprenta Martinez Inc', 'Barcelona', 32000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Jesus Colchones Inc', 'El Prat', 96000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Bar Pepe Inc', 'Valencia', 170000, CURDATE());
INSERT INTO clientes VALUES (NULL, 1, 'Tienda PC Inc', 'Murcia', 245000, CURDATE());

# ENCARGOS #
INSERT INTO encargos VALUES (NULL, 1, 1, 2, CURDATE());
INSERT INTO encargos VALUES (NULL, 2, 2, 4, CURDATE());
INSERT INTO encargos VALUES (NULL, 3, 3, 1, CURDATE());
INSERT INTO encargos VALUES (NULL, 4, 3, 3, CURDATE());
INSERT INTO encargos VALUES (NULL, 5, 5, 1, CURDATE());
INSERT INTO encargos VALUES (NULL, 6, 6, 1, CURDATE());

SELECT cantidad, nombre FROM encargos, clientes WHERE encargos.cliente_id = clientes.id;
SELECT cantidad, nombre, modelo FROM encargos, clientes, coches WHERE encargos.cliente_id = clientes.id AND encargos.coche_id = coches.id;