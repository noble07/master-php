/*
    Ejercicio 20:
    Seleccionar el grupo en el que trabaja el vendedor con mayor salario y mostrar
    el nombre del grupo
*/

SELECT v.nombre, v.apellidos, g.nombre, v.sueldo FROM vendedores v INNER JOIN grupos g ON v.grupo_id = g.id
ORDER BY v.sueldo DESC LIMIT 1;

# OTRA FORMA #
SELECT * FROM grupos WHERE id IN
    (SELECT grupo_id FROM vendedores WHERE sueldo = (
        SELECT MAX(sueldo) FROM vendedores
    ));