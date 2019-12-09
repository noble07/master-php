CREATE TABLE IF NOT EXISTS symfony_master;
USE symfony_master;

CREATE TABLE IF NOT EXISTS users(
id int(255) auto_increment not null,
role varchar(50),
name varchar(100),
surname varchar(200),
email varchar(255),
password varchar(255),
created_at datetime,
CONSTRAINT pk_user PRIMARY KEY(id)
)ENGINE=InnoDB;

INSERT INTO user VALUES(NULL, 'ROLE_USER', 'Victor', 'Robles', 'victor@victor.com', 'password', CURTIME());
INSERT INTO user VALUES(NULL, 'ROLE_USER', 'Manolo', 'Perez', 'manolo@manolo.com', 'password', CURTIME());
INSERT INTO user VALUES(NULL, 'ROLE_USER', 'Carlos', 'Sanchez', 'carlos@carlos.com', 'password', CURTIME());

CREATE TABLE IF NOT EXISTS tasks(
id int(255) auto_increment not null,
user_id int(255) not null,
title varchar(255),
content text,
priority varchar(20),
hours int(100),
created_at datetime,
CONSTRAINT pk_task PRIMARY KEY(id),
CONSTRAINT fk_task_user FOREIGN KEY(user_id) REFERENCES users(id)
)ENGINE=InnoDB;

INSERT INTO task VALUES(NULL, 1, 'Tarea 1', 'Contenido de prueba 1', 'high', 40, CURTIME());
INSERT INTO task VALUES(NULL, 1, 'Tarea 2', 'Contenido de prueba 2', 'low', 20, CURTIME());
INSERT INTO task VALUES(NULL, 2, 'Tarea 3', 'Contenido de prueba 3', 'medium', 10, CURTIME());
INSERT INTO task VALUES(NULL, 3, 'Tarea 4', 'Contenido de prueba 4', 'high', 50, CURTIME());
