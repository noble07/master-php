/*
    Ejercicio 24:
    Listar los encargos con el nombre del coche, el nombre del cliente
    y el nombre de la ciudad, pero cuando unicamente sean de 'Barcelona'
*/

SELECT e.id, e.cantidad, co.modelo, cl.nombre, cl.ciudad FROM encargos e INNER JOIN coches co ON e.coche_id = co.id INNER JOIN clientes cl ON e.cliente_id = cl.id WHERE cl.ciudad = 'Barcelona';