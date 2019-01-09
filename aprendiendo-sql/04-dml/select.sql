# MOSTRAR TODOS LOS REGISTROS / FILAS DE UNA TABLA #
SELECT email, nombre, apellidos FROM usuarios;

# MOSTRAR TODOS LOS CAMPOS #
SELECT * FROM usuarios;

# OPERADORES ARITMETICOS #
SELECT email, (7+7) AS 'OPERACION' FROM usuarios;

# FUNCIONES MATEMATICAS #
SELECT ABS(7) AS 'VALOR ABSOLUTO' FROM usuarios;
SELECT CEIL(7.35) AS 'REDONDEO' FROM usuarios; /* LO REDONDEA AL NUMERO CERCANO HACIA ARRIBA*/
SELECT FLOOR(7.35) AS 'REDONDEO' FROM usuarios; /* LO REDONDEA AL NUMERO CERCANO HACIA ABAJO*/

# FUNCIONES DE CARACTERES #
SELECT UPPER(nombre) from usuarios; /* TRANSFORMA EL TEXTO A MAYUSCULA */
SELECT UPPER(nombre) from usuarios; /* TRANSFORMA EL TEXTO A MINUSCULA */
SELECT CONCAT(nombre, ' ', apellidos) AS 'CONVERSION' from usuarios; /* CONCATENAR UN CAMPO CON OTRO */
SELECT LENGTH(CONCAT(nombre, ' ', apellidos)) AS 'CONVERSION' from usuarios; /* SACA EL N° DE CARACTERES */
SELECT TRIM(CONCAT('    ',nombre, ' ', apellidos, '     ')) AS 'CONVERSION' from usuarios; /* LIMPIA LOS ESPACIOS DE LA IZQUIERDA Y DERECHA DE CUALQUIER CADENA DE TEXTO */

# FUNCIONES PARA FECHAS #
SELECT email, fecha, CURDATE() AS 'Fecha actual' FROM usuarios; # SACA LA FECHA ACTUAL #
SELECT email, DATEDIFF(fecha, CURDATE()) AS 'Dias de diferencia' FROM usuarios; # SACA LOS DIAS DE DIFERENCIA #
SELECT email, DAYNAME(fecha) AS 'Dias de diferencia' FROM usuarios; # SACA EL NOMBRE DEL DIA #
SELECT email, DAYOFMONTH(fecha) AS 'Dias de diferencia' FROM usuarios; # SACA LOS DIAS DEL MES #
SELECT email, DAYOFWEEK(fecha) AS 'Dias de diferencia' FROM usuarios; # DIA DE LA SEMANA #
SELECT email, DAYOFYEAR(fecha) AS 'Dias de diferencia' FROM usuarios; # DIA DEL AÑO #
SELECT email, MONTH(fecha) AS 'Dias de diferencia' FROM usuarios; # MES DEL AÑO #
SELECT email, YEAR(fecha) AS 'Dias de diferencia' FROM usuarios; # AÑO #
SELECT email, DAY(fecha) AS 'Dias de diferencia' FROM usuarios; # DIA #
SELECT email, HOUR(fecha) AS 'Dias de diferencia' FROM usuarios; # HORA #
SELECT email, MINUTE(fecha) AS 'Dias de diferencia' FROM usuarios; # MINUTOS #
SELECT email, SECOND(fecha) AS 'Dias de diferencia' FROM usuarios; # SEGUNDOS #
SELECT email, CURTIME() AS 'Dias de diferencia' FROM usuarios; # HORA ACTUAL#
SELECT email, SYSDATE() AS 'Dias de diferencia' FROM usuarios; # FECHA / HORA DEL SERVER #
SELECT email, DATE_FORMAT(fecha, '%d-%m-%Y') FROM usuarios; # DAR FORMATO A LA FECHA #

# FUNCIONES GENERALES #
SELECT email, ISNULL(apellidos) FROM usuarios; # COMPRUEBA SI EL CAMPO ES NULO #
SELECT email, STRCMP('Hola', 'Hola') FROM usuarios; # COMPARA QUE STRINS SEAN IGUALES (false sin son iguales, true si son diferentes) #
SELECT VERSION() FROM usuarios; # DEVUELVE VERSION DE MySQL #
SELECT USER() FROM usuarios; # USUARIOS A NIVEL SGBD #
SELECT DISTINCT USER() FROM usuarios; # MUESTRA SOLO LOS REGISTROS DIFERENTES #
SELECT DISTINCT DATABASE() FROM usuarios; # NOMBRE DE LA BASE DE DATOS #
SELECT IFNULL(apellidos, 'Este campo esta vacio') FROM usuarios; # SI UN CAMPO ESTA VACIO MUESTRA UN STRING EN SU LUGAR #
