/*
    Ejercicio 19:
    Obtener los vendedores con 2 o más clientes
*/

SELECT v.nombre, v.apellidos, COUNT(cl.id) AS 'N° de clientes' FROM clientes cl INNER JOIN vendedores v ON cl.vendedor_id = v.id GROUP BY v.id HAVING COUNT(cl.id) >= 2;