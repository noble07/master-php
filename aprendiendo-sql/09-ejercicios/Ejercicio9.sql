/*
    Ejercicio 9:
    Mostrar todos los vendedores del grupo con id de 2, ordenados por sueldo de mayor 
    a menor
*/

SELECT * FROM vendedores WHERE grupo_id = 2 ORDER BY sueldo DESC;