/*
    Ejercicio 18:
    Listar los clientes que han hecho algun encargo del coche 'Mercedes Ranchera'
*/

SELECT cl.nombre, co.modelo FROM encargos e INNER JOIN clientes cl ON e.cliente_id = cl.id INNER JOIN coches co ON e.coche_id = co.id WHERE modelo='Mercedes Ranchera';