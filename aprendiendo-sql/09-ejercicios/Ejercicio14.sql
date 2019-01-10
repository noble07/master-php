/*
    Ejercicio 14:
    Visualizar las unidades totales vendidas de cada coche a cada cliente.
    Mostrando el nombre del coche, el nombre del cliente y la suma de unidades
*/

SELECT co.modelo AS 'Vehiculo', cl.nombre AS 'Cliente', e.cantidad AS 'Unidades' FROM encargos e INNER JOIN coches co ON e.coche_id = co.id INNER JOIN clientes cl  ON e.cliente_id = cl.id;