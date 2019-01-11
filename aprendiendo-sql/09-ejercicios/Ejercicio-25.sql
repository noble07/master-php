/*
    Ejercicio 25:
    Obtener una lista de los nombres de los clientes con el importe de sus encargos acumulado
*/

SELECT cl.nombre, SUM(e.cantidad*co.precio) AS 'Importe' FROM encargos e INNER JOIN clientes cl ON e.cliente_id = cl.id INNER JOIN coches co ON e.coche_id = co.id GROUP BY cl.nombre ORDER BY 2 ASC;