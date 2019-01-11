/*
    Ejercicio 27:
    Visualizar los nombre de los clientes y la cantidad de encargos realizados
    incluyendo los que no hayan realizado encargos
*/

INSERT INTO clientes VALUES (NULL, 1, 'Tienda Organica Inc', 'Murcia', 0, CURDATE());

SELECT c.nombre, COUNT(e.id) AS 'Cantidad encargos' FROM clientes c LEFT JOIN encargos e ON e.cliente_id = c.id GROUP BY c.id;