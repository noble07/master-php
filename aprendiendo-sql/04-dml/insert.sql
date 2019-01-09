# INSERTAR NUEVOS REGISTROS #
INSERT INTO usuarios VALUES (null, 'Camilo', 'Apellido', 'camilo@camilo.com', '123asda','2019-01-06');
INSERT INTO usuarios VALUES (null, 'Antonio', 'Martinez', 'antonio@antonio.com', '123asda','2019-05-06');
INSERT INTO usuarios VALUES (null, 'Paco', 'Lopez', 'paco@paco.com', '123asda','2029-01-06');


# INSERTAR FILAS SOLO CON CIERTAS COLUMNAS #
INSERT INTO usuarios(email, password) VALUES ('admin@admin.com', 'admin');