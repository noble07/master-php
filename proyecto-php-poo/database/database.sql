CREATE DATABASE tienda_master;
USE tienda_master;

CREATE TABLE usuarios(
    id int(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    apellidos VARCHAR(255),
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    rol VARCHAR(20),
    imagen VARCHAR(255),
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE (email)
)ENGINE=InnoDb;

INSERT INTO usuarios VALUES (NULL, 'Admin', 'Admin', 'admin@admin.com', 'password', 'admin', NULL);

CREATE TABLE categorias(
    id int(255) NOT NULL AUTO_INCREMENT,
    nombre VARCHAR(100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

INSERT INTO categorias VALUES (NULL, 'Manga corta');
INSERT INTO categorias VALUES (NULL, 'Tirantes');
INSERT INTO categorias VALUES (NULL, 'Manga larga');
INSERT INTO categorias VALUES (NULL, 'Sudaderas');

CREATE TABLE productos(
    id int(255) NOT NULL AUTO_INCREMENT,
    categoria_id INT(255) NOT NULL,
    nombre  VARCHAR(100) NOT NULL,
    descripcion TEXT,
    precio FLOAT(100,2) NOT NULL,
    stock INT(255) NOT NULL,
    oferta VARCHAR(2),
    fecha DATE NOT NULL,
    imagen VARCHAR(255),
    CONSTRAINT pk_productos PRIMARY KEY (id),
    CONSTRAINT fk_producto_categoria FOREIGN KEY (categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

CREATE TABLE pedidos(
    id int(255) NOT NULL AUTO_INCREMENT,
    usuario_id int(255) NOT NULL,
    provincia VARCHAR(100) NOT NULL,
    localidad VARCHAR(100) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    coste FLOAT(200,2) NOT NULL,
    estado VARCHAR(20) NOT NULL,
    fecha DATE,
    hora TIME,
    CONSTRAINT pk_pedidos PRIMARY KEY (id),
    CONSTRAINT fk_pedido_usuario FOREIGN KEY (usuario_id) REFERENCES usuarios(id)
)ENGINE=InnoDb;

CREATE TABLE lineas_pedidos(
    id int(255) NOT NULL AUTO_INCREMENT,
    pedido_id INT(255) NOT NULL,
    producto_id INT(255) NOT NULL,
    unidades INT(255) NOT NULL,
    CONSTRAINT pk_linas_pedidos PRIMARY KEY (id),
    CONSTRAINT fk_linea_pedido FOREIGN KEY (pedido_id) REFERENCES pedidos(id),
    CONSTRAINT fk_lineas_producto FOREIGN KEY (producto_id) REFERENCES productos(id)
)ENGINE=InnoDb;