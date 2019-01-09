<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formularios PHP y HTML</title>
</head>
<body>
    <h1>Formulario</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label> 
        <p><input type="text" name="nombre"></p>
        <label for="apellido">Apellido:</label> 
        <!--<input type="text" name="apellido" autofocus="autofocus" disabled="disabled" maxlength="5" minlength="5" pattern="[A-Z]+"> required="required" placeholder="Pon tu apellido"-->
        <p><input type="text" name="apellido"></p>

        <label for="boton">Botón:</label> 
        <p><input type="button" name="boton" value="Click"></p>

        <label for="sexo">Sexo:</label> 
        <p>
            Hombre <input type="checkbox" name="sexo" value="hombre">
            Mujer <input type="checkbox" name="sexo" value="mujer" checked="checked">
        </p>

        <label for="color">Color:</label> 
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label> 
        <p><input type="date" name="fecha"></p>

        <label for="correo">Correo:</label> 
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo:</label> 
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="fecha">Fecha:</label> 
        <p><input type="hidden" name="fecha"></p>

        <label for="numero">Numero:</label> 
        <p><input type="number" name="numero"></p>

        <label for="pass">Contraseña:</label> 
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente:</label> 
        <p>
            America del Sur: <input type="radio" name="continente" value="America del Sur">
            Europa: <input type="radio" name="continente" value="Europa">
            Asia: <input type="radio" name="continente" value="Asia">
        </p>

        <label for="web">Pagina web:</label> 
        <p><input type="url" name="web"></p>

        <textarea name="" id="" cols="30" rows="10"></textarea>
        <br>
        
        <h3>Peliculas:</h3>
        <select name="peliculas">
            <option value="Spiderman">Spiderman</option>
            <option value="Batman">Batman</option>
            <option value="Superman">Superman</option>
            <option value="Flash">Flash</option>
        </select>

        <br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>