# CONSULTA CON UNA CONDICION #
SELECT * FROM usuarios WHERE email = 'admin@admin.com';

/*
    OPERADORES DE COMPARACION:
    Igual         =
    Distinto      !=
    Menor que     <
    Mayor que     >
    Menor o igual <=
    Mayor o igual >=
    Entre         between A and B
    En            in
    Es nulo       ISNULL
    No nulo       ISNOTNULL
    Como          LIKE
    No es como    NOT LIKE
*/

/*
    OPERADORES LOGICOS:
    O   OR
    Y   AND
    NO  NOT
*/

/*
    COMODINES:
    Cualquier cantidad de caracteres: %
    Un caracter desconocido: _
*/

# EJEMPLOS #


# 1. Mostrar Nombre y Apellidos de todos los usuarios registrados en 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) = '2019';

# 2. Mostrar Nombre y Apellidos de todos los usuarios QUE NO se registraron en 2019 #
SELECT nombre, apellidos FROM usuarios WHERE YEAR(fecha) != '2019' OR ISNULL(fecha);

# 3. Mostar el email de los usuarios cuyo apellido contenga la letra A y que su contraseña sea 1234 #
SELECT email FROM usuarios WHERE apellidos LIKE '%a%' AND password= '1234';

# 4. Sacar todos los registros de la tabla usuarios cuyo año sea PAR #
SELECT * FROM usuarios WHERE (YEAR(fecha)%2 = 0);

# 5. Sacar todos los registros de la tabla usuarios cuyo nombre tenga mas de 5 letras y que se hayan registrado antes de 2020, y mostrar el nombre en mayusculas #
SELECT UPPER(nombre) AS 'nombre', apellidos FROM usuarios WHERE LENGTH(nombre) > 5 AND YEAR(fecha) < 2020;