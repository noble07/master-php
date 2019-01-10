/*
    Ejercicio 8:
    Visualizar todos los coches en cuyo marca exista la letra 'A' y cuyo modelo empieze por 'F'
*/

SELECT * FROM coches WHERE marca LIKE '%A%' AND modelo LIKE 'F%';