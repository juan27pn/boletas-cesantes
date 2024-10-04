<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Boletas Cesantes</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3><strong>¿Eres Cesante?</strong></h3>
                        <p><strong>Inicia sesión para descargar tu Boleta</strong></p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3><strong>¿Aún no tienes una cuenta?</strong></h3>
                        <p><strong>Regístrate para que puedas iniciar sesión</strong></p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                                    
                    <!--Login-->
                    <form action="" class="formulario__login">
                        <img src="ima1.jpg"> 
                        <h2><strong>Iniciar Sesión</strong></h2>
                        <input type="text" placeholder="DNI" name=mail>
                        <input type="password" placeholder="Contraseña" name=password>
                        <button>Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                        <img src="ima1.jpg"> 
                        <h2><strong>Registrarse</strong></h2>
                        <input type="text" placeholder="Nombres y Apellidos" name="nombre_completo">
                        <input type="text" placeholder="DNI" name="dni">
                        <input type="password" placeholder="Contraseña" name="contrasena">
                        <button>Regístrarse</button>
                    </form>

                   
                    
                </div>
            </div>

        </main>

        <script src="assets/js/script.js"></script>
</body>
</html>