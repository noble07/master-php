/*
    Crear una vista llamada 'vendedoresA' que incluirá todos los vendedores
    del grupo que se llame 'Vendedores A'
*/
CREATE VIEW vendedoresA AS
SELECT CONCAT(v.nombre, ' ', v.apellidos) AS 'Nombre' FROM vendedores v INNER JOIN grupos g ON v.grupo_id = g.id WHERE g.nombre = 'Vendedores A';