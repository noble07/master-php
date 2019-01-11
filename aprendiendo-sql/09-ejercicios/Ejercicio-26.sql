/*
    Ejercicio 26:
    Sacar vendedores que tienen jefe y sacar el nombre del jefe
*/

SELECT CONCAT(v1.nombre, ' ', v1.apellidos) AS 'Vendedor', v2.nombre AS 'Jefe' FROM vendedores v1 INNER JOIN vendedores v2 ON v1.jefe = v2.id;