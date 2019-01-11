/*
    Ejercicio 28:
    Mostrar todos los vendedores y el numero de clientes.
    Se deben mostrar tengan o no clientes
*/

SELECT v.nombre, v.apellidos, COUNT(cl.id) FROM vendedores v LEFT JOIN clientes cl ON v.id = cl.vendedor_id GROUP BY v.id;