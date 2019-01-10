/*
    Ejercicio 16:
    Obtener listado de clientes atendidos por el vendedor 'David Lopez'
*/

SELECT cl.nombre FROM clientes cl INNER JOIN vendedores v ON cl.vendedor_id = v.id WHERE CONCAT(v.nombre, ' ',v.apellidos) = 'David Lopez';

# OTRA FORMA #
SELECT * FROM clientes WHERE vendedor_id IN
    (SELECT id FROM vendedores WHERE nombre = 'David' AND apellidos='Lopez');
