<!DOCTYPE html>
    <head>
        <?php
        include 'header.php';
        ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registrarse | Sistema de gestión de solicitudes</title>
    </head>
    <body>
        <?php
        if (!isset($_POST['user'])){
        echo '  <!-- Titulo Y Descripcion-->
                <div class="titles">
                    <h1>Registro</h1>
                    <h4>Sistema de gestión de solicitudes</h4>
                </div>

                <!-- Formulario -->
                <form action="registro.php" method="post" id="main">	
                    <!-- Usuario -->
                    <label>Nombre de usuario:</label>
                    <input type="text" name="user" placeholder="Nombre de Usuario" align="center" required>

                    <!-- Email -->
                    <label>Email:</label>
                    <input type="text" name="email" placeholder="Email" required>
                    
                    <!-- Contraseña -->
                    <label>Contraseña:</label>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    
                    <!-- Enviar -->
                    <input type="submit" name = "submit" value="Registrar">
                    
                    <p class="perder"><a href="index.php">Iniciar sesión</a></p>

                    </form>';
        }else{
            
            $usuario = $_POST['user'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $connection = mysql_connect('localhost', 'root', '') or die ('No se pudo realizar la conexión.');
            
            mysql_select_db('cagon') or die ('No se pudo seleccionar la base de datos');
            
            $query = "INSERT INTO usuario (codigo, nombres, apellidos, fechaNacimiento, fechaIngreso, agencia, departamento, 
                puesto, sueldoBase, bonificacion, extension, otroTelefono, usuario, password, correoElectronico) VALUES(NULL, NULL, NULL, NULL,
                    NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$usuario', '$password', '$email')";
            
            if(mysql_query($query)){
                
                echo "El usuario ha sido agregado exitosamente";
                
            }else{
                
                echo "El usuario no se ha podidio agregar";
                
            }
            
        }
        ?>
    </body>
</html>
<?php

?>
