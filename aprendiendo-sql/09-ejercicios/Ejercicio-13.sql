/*
    Ejercicio 13:
    Sacar la media de sueldos entre todos los vendedores por grupo
*/

SELECT g.nombre, g.ciudad, ROUND(AVG(v.sueldo), 2) AS 'Media Salarial' FROM vendedores v INNER JOIN grupos g ON v.grupo_id = g.id GROUP BY grupo_id;