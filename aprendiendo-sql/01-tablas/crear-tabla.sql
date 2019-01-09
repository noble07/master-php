/*
    int(n° cifras)                 ENTERO (maximo 4294967295)
    integer(n° cifras)             ENTERO (maximo 4294967295)
    varchar(n° caracteres)         STRING / ALFANUMERICO (maximo 255)
    char(n° caracteres)            STRING / ALFANUMERICO (maximo 255)
    float(n° cifras, n° decimales) DECIMAL / COMA FLOTANTE
    date, time, timestamp          FECHA

    // STRING MAS GRANDES
    TEXT                           STRING / ALFANUMERICO (maximo 65535)
    MEDIUMTEXT                     STRING / ALFANUMERICO (maximo 16 mill)
    LONGTEXT                       STRING / ALFANUMERICO (maximo 16 bill.)

    // ENTEROS MAS GRANDES
    MEDIUMINT
    BIGINT
*/


/*
    CREAR TABLA
*/

CREATE TABLE usuarios(
    id int(11) auto_increment,
    nombre varchar(100) NOT NULL,
    apellidos varchar(100) default 'Campo por defecto',
    email varchar(100) NOT NULL,
    password varchar(255),
    CONSTRAINT pk_usuarios PRIMARY KEY (id)
);


ALTER