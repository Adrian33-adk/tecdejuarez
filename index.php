<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <style>
        /* Estilo para el mensaje flotante */
        .mensaje-flotante {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #4CAF50;
            color: white;
            padding: 15px;
            border-radius: 5px;
            z-index: 1000;
            display: none; /* Ocultar por defecto */
        }
    </style>
</head>
<body>

    <header>
        INVENTARIO DE LABORATORIOS
    </header>

    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <a href="#form-login"><button id="btn__iniciar-sesion">Iniciar Sesión</button></a>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <a ```html
                    <button id="btn__registrarse">Regístrarse</button></a>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="login.php" method="POST" class="formulario__login" id="form-login">
                    <h2>Iniciar Sesión</h2>
                    <input type="email" name="correo" placeholder="Correo Electronico" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    <button type="submit">Entrar</button>
                </form>

                <!--Register-->
                <form action="registro.php" method="POST" class="formulario__register" id="form-register" style="display: none;">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre" placeholder="Nombre completo" required>
                    <input type="email" name="correo" placeholder="Correo Electronico" required>
                    <input type="text" name="usuario" placeholder="Usuario" required>
                    <input type="password" name="password" placeholder="Contraseña" required>
                    
                    <!-- Campo para seleccionar el rol -->
                    <label for="rol">Selecciona tu rol:</label>
                    <select id="rol" name="rol" required>
                        <option value="administrativo">Administrativo</option>
                        <option value="estudiante">Estudiante</option>
                    </select>
                    
                    <button type="submit">Regístrarse</button>
                    <button type="button" id="btn__volver-login">Volver a Iniciar Sesión</button> <!-- Botón para volver -->
                </form>
            </div>
        </div>

        <!-- Mensaje flotante -->
        <?php if (isset($_GET['mensaje'])): ?>
            <div class="mensaje-flotante">
                <?php echo htmlspecialchars($_GET['mensaje']); ?>
            </div>
        <?php endif; ?>

    </main>

    <script>
        document.getElementById('btn__registrarse').addEventListener('click', function() {
            const loginForm = document.querySelector('.formulario__login');
            const registerForm = document.querySelector('.formulario__register');

            loginForm.classList.add('slide-out');
            registerForm.classList.add('slide-in');

            setTimeout(() => {
                loginForm.style.display = 'none';
                registerForm.style.display = 'block';
                loginForm.classList.remove('slide-out');
            }, 500); // Debe coincidir con la duración de la animación
        });

        document.getElementById('btn__iniciar-sesion').addEventListener('click', function() {
            const loginForm = document.querySelector('.formulario__login');
            const registerForm = document.querySelector('.formulario__register');

            registerForm.classList.add('slide-out');
            loginForm.classList.add('slide-in');

            setTimeout(() => {
                registerForm.style.display = 'none';
                loginForm.style.display = 'block';
                registerForm.classList.remove('slide-out');
            }, 500); // Debe coincidir con la duración de la animación
        });

        document.getElementById('btn__volver-login').addEventListener('click', function() {
            const loginForm = document.querySelector('.formulario__login');
            const registerForm = document.querySelector('.formulario__register');

            registerForm.classList.add('slide-out');
            loginForm.classList.add('slide-in');

            setTimeout(() => {
                registerForm.style.display = 'none';
                loginForm.style.display = 'block';
                registerForm.classList.remove('slide-out');
            }, 500); // Debe coincidir con la duración de la animación
        });

        // Mostrar el mensaje flotante si existe
        const mensajeFlotante = document.querySelector('.mensaje-flotante');
        if (mensajeFlotante) {
            mensajeFlotante.style.display = 'block';
            setTimeout(() => {
                mensajeFlotante.style.display = 'none';
            }, 3000); // Ocultar después de 3 segundos
        }
    </script>
</body>
</html>