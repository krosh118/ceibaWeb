<!DOCTYPE html>
<html>
    <head>
        <?php
            include 'header.php';
            echo '';
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo '  <!-- Titulo Y Descripcion-->
                <div class="titles">
                    <h1>Iniciar Sesión</h1>
                    <h4>Sistema de gestión de solicitudes</h4>
                </div>

                <!-- Formulario -->
                <form action="#" method="post" id="main">	
                    <!-- Usuario -->
                    <label>Nombre de usuario:</label>
                    <input type="text" name="user" placeholder="Nombre de Usuario">

                    <!-- Contraseña -->
                    <label>Contraseña:</label>
                    <input type="password" name="password" placeholder="Contraseña">

                    <!-- Enviar -->
                    <input type="submit" value="Ingresar">

                    <p class="perder"><a href="#">Olvide mi contraseña</a> | <a href="registro.php">Registrarme</a></p>

                </form>';
        ?>
    </body>
</html>
