/*
    Mostrar los datos del vendedor con mas antiguedad en el concecionario.
*/

SELECT * FROM vendedores ORDER BY fecha_alta ASC LIMIT 1;

# 30 plus: Obtener los coches con mas unidades vendidas.#

SELECT co.marca, co.modelo, e.cantidad FROM coches co INNER JOIN encargos e ON e.coche_id = co.id ORDER BY cantidad DESC LIMIT 3;