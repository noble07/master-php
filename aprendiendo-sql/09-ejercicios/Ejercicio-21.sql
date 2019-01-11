/*
    Ejercicio 21:
    Obtener los nombre y ciudades de los clientes con encargos de 3 o mas unidades
*/

SELECT cl.nombre, cl.ciudad FROM encargos e INNER JOIN clientes cl ON e.cliente_id = cl.id WHERE cantidad >= 3;