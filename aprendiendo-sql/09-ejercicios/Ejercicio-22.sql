/*
    Ejercicio 22:
    Mostrar listado de clientes (numero de clientes y el nombre)
    mostrar tambien el numero de vendedor y su nombre
*/

SElECT cl.id, cl.nombre, v.id, CONCAT(v.nombre,' ',v.apellidos) AS 'Nombre vendedor' FROM clientes cl INNER JOIN vendedores v ON cl.vendedor_id = v.id;