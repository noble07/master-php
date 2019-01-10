/*
    Ejercicio 17:
    Obtener un listado con los encargos realizados por el cliente 'Fruteria Antonia Inc'
*/

SELECT e.id AS 'N° Encargo', e.cantidad, cl.nombre, co.modelo, e.fecha FROM encargos e INNER JOIN clientes cl ON e.cliente_id = cl.id INNER JOIN coches co ON e.coche_id = co.id WHERE cl.nombre = 'Fruteria Antonia Inc';
