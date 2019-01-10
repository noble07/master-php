/*
    Ejercicio 15:
    Mostrar los clientes que mas pedidos han hecho y mostrar la cantidad
*/

SELECT cl.nombre, COUNT(e.id) FROM encargos e INNER JOIN clientes cl ON e.cliente_id = cl.id GROUP BY e.cliente_id ORDER BY 2 DESC LIMIT 2;