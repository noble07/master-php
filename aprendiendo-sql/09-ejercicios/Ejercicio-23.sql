/*
    Ejercicio 23:
    Listar todos los encargos realizados con la marca del coche y el nombre del cliente
*/

SELECT e.id, e.cantidad, co.marca, cl.nombre FROM encargos e INNER JOIN coches co ON e.coche_id = co.id INNER JOIN clientes cl ON e.cliente_id = cl.id;