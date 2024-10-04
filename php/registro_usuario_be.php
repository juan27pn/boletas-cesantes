<?php
    /* llave de la caja fuerte, se tiene que abrir primero */
    include 'conexion_be.php';

    $nombre_completo = $_POST['nombre_completo'];
    $dni = $_POST['dni'];
    $contrasena = $_POST['contrasena'];

    $query = "INSERT INTO usuarios(nombre_completo, dni, contrasena)
                VALUES('$nombre_completo', '$dni', '$contrasena')";

    $ejecutar = mysqli_query($conexion, $query);

   if($ejecutar){
        echo '
            <script> 
                alert("usuario ingresado correctamente");
                window.location = "../index.php";
            </script>                    
        
        ';

   }else{
        echo '
        <script> 
            alert("Primero debe iniciar sesion");
            window.location = "../index.php";
        </script>
        ';
    }      
    mysqli_close($conexion)

?>