# Se crea las tablas dentro de la DB blog_master #

CREATE TABLE usuarios(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    fecha date NOT NULL,
    CONSTRAINT pk_usuarios PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
)ENGINE=InnoDb;

CREATE TABLE categorias(
    id int(255) AUTO_INCREMENT NOT NULL,
    nombre varchar(100) NOT NULL,
    CONSTRAINT pk_categorias PRIMARY KEY (id)
)ENGINE=InnoDb;

CREATE TABLE entradas(
    id int(255) AUTO_INCREMENT NOT NULL,
    usuario_id int(255) NOT NULL,
    categoria_id int(255) NOT NULL,
    titulo varchar(255) NOT NULL,
    descripcion MEDIUMTEXT,
    fecha date NOT NULL,
    CONSTRAINT pk_entradas PRIMARY KEY (id),
    CONSTRAINT fk_entrada_usuario FOREIGN KEY(usuario_id) REFERENCES usuarios(id),
    CONSTRAINT fk_entrada_categoria FOREIGN KEY(categoria_id) REFERENCES categorias(id)
)ENGINE=InnoDb;

/* En las FOREIGN KEY */

/*
    ON DELETE CASCADE: *Se elimina el registro de la tabla si el id al que se esta apuntado con la fk se elimina tambien

    ON UPDATE CASCADE: *Se actualiza los resgistro en la tabla cuan el registro al que se apunta con la fk se actuliza

    ON DELETE SET NULL: *Cuando se elimina el campo al que se referencia se pone en null en registro de la tabla

    ON DELETE SET DEFAULT: *Cuando se elimina el campo al que se referencia se pone en Default en registro de la tabla

    ON DELETE NO ACTION: *Si se elimina el registro al que se apunta con la fk no hace nada (así viene por defecto)
*/