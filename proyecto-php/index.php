<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog de Videojuegos</title>
</head>
<body>
    <!-- CABECERA -->
    <header id="header">
        <!-- LOGO -->
        <div id="logo">
            <a href="index.php">
                Blog de Videojuegos
            </a>
        </div>

        <!-- MENU -->
        <nav id="nav">
            <ul>
                <li>
                    <a href="index.php">Inicio</a>
                </li>
                <li>
                    <a href="index.php">Categoria 1</a>
                </li>
                <li>
                    <a href="index.php">Categoria 2</a>
                </li>
                <li>
                    <a href="index.php">Categoria 3</a>
                </li>
                <li>
                    <a href="index.php">Categoria 4</a>
                </li>
                <li>
                    <a href="index.php">Sobre mí</a>
                </li>
                <li>
                    <a href="index.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>

    <div id="container">
        <!-- SIDEBAR -->
        <aside id="sidebar">
            <div id="login" class="block-aside">
                <h3>Identificate</h3>
                <form action="login.php" method="POST">
                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Entrar">
                </form>
            </div>

            <div id="register" class="block-aside">
                <h3>Registrate</h3>
                <form action="register.php" method="POST">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre">

                    <label for="apellidos">Apellidos</label>
                    <input type="text" name="apellidos">

                    <label for="email">Email</label>
                    <input type="email" name="email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password">

                    <input type="submit" value="Registrar">
                </form>
            </div>
        </aside>
        <!-- CAJA PRINCIPAL -->
        <div id="main">
            <h1>Ultimas entradas</h1>
            <article class="article">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur doloremque, odit iste eum a dignissimos assumenda modi alias officiis amet ipsum unde animi commodi placeat quasi quo quis quisquam ratione.</p>
            </article>

            <article class="article">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur doloremque, odit iste eum a dignissimos assumenda modi alias officiis amet ipsum unde animi commodi placeat quasi quo quis quisquam ratione.</p>
            </article>

            <article class="article">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur doloremque, odit iste eum a dignissimos assumenda modi alias officiis amet ipsum unde animi commodi placeat quasi quo quis quisquam ratione.</p>
            </article>

            <article class="article">
                <h2>Titulo de mi entrada</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur doloremque, odit iste eum a dignissimos assumenda modi alias officiis amet ipsum unde animi commodi placeat quasi quo quis quisquam ratione.</p>
            </article>
        </div>
    </div>

    <!-- PIE DE PAGINA -->
    <footer id="footer">
        <p>Desarrollado por Juan Camilo Muñoz &copy; 2019</p>
    </footer>

</body>
</html>