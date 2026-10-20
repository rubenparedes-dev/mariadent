
        
        <?php
            // Agarramos los datos que vienen del formulario usando $_POST
            // OJO: el nombre dentro de corchetes debe ser IGUAL al name="" del HTML
            $nombre = $_POST["nombre"];
            $celular = $_POST["celular"];
            $edad = $_POST["edad"];
            $correo = $_POST["correo"];
            $mensaje = $_POST["mensaje"];
            $informacion = $_POST["informacion"];

            // Los mostramos en pantalla
            echo "<p><strong>Nombre:</strong> $nombre</p>";
            echo "<p><strong>Celular:</strong> $celular</p>";
            echo "<p><strong>Edad:</strong> $edad</p>";
            echo "<p><strong>Correo:</strong> $correo</p>";
            echo "<p><strong>Servicio elegido:</strong> $informacion</p>";
            echo "<p><strong>Mensaje:</strong> $mensaje</p>";
        ?>

       