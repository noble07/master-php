# CONSULTAS DE AGRUPAMIENTO #
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id FROM entradas GROUP BY categoria_id;

# CONSULTA DE AGRUPAMIENTO CON CONDICIONES #
SELECT COUNT(titulo) AS 'NÚMERO DE ENTRADAS', categoria_id 
FROM entradas GROUP BY categoria_id HAVING COUNT(titulo) >= 4;

# FUNCIONES DE AGRUPAMIENTO #
/*
    AVG     Sacar la media
    COUNT   Contar el numero de elementos
    MAX     Valor maximo del grupo
    MIN     Valor minimo del grupo
    SUM     Sumar todo el contenido del grupo
*/

# EJEMPLO AVG #
SELECT AVG(id) AS 'Media de entradas' FROM entradas;

# EJEMPLO MAX #
SELECT id, titulo FROM entradas WHERE id = (SELECT MAX(id) FROM entradas);

# EJEMPLO MIN #
SELECT id, titulo FROM entradas WHERE id = (SELECT MIN(id) FROM entradas);

# EJEMPLO SUM #
SELECT SUM(id) AS 'SUMA DE ID' FROM entradas;


