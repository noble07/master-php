/*
    Ejercicio 5:
    Mostrar todos los vendedores con su nombre y el numero de dias que llevan
    en el concesionario
*/
UPDATE vendedores SET fecha_alta = '2017-09-14';
SELECT nombre, DATEDIFF(CURDATE(),fecha_alta) AS 'Dias trabajando' FROM vendedores;