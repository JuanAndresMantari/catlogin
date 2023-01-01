<?php
  require 'database.php';
  $message = '';
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $sql = "INSERT INTO users (email, password) VALUES (:email, :password)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $stmt->bindParam(':password', $password);
    if ($stmt->execute()) {
      $message = 'Regitrado Satisfactoriamente';
    } else {
      $message = 'Hubo un problema al registrar al usuario';
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Juan Mantari</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>
        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya tienes una cuenta?</h3>
                        <p>Inicia sesión para entrar en la página</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no tienes una cuenta?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form class="formulario__login" method="post" id="formulario">
                        <h2>Iniciar Sesión</h2>
                        <input id="email" name="email" type="text" placeholder="Email">
                        <input id="password" name="password" type="password" placeholder="Contraseña">
                        <!-- catcha  -->
                        <br>
                        <br>
                            <div class="container">
                                <div class="wrapper">
                                <canvas id="canvas" width="200" height="70"></canvas>
                                <button id="reload-button"><i class="fa-solid fa-arrow-rotate-right"></i></button>
                                </div>
                                <input  type="text" id="user-input" placeholder="Ingrese el texto de la Imagen"/>
                                <button id="submit-button">ingresar</button>
                                <?php if(isset($_GET['err'])):?>
                                    <p>usuario o contraseña incorrectos</p>
                                    <?php endif; ?>
                                <?php if(!empty($message)): ?>
                                <p> <?= $message ?></p>
                                <?php endif; ?>    
                            </div>
                        <!-- catcha  -->
                    </form>

                    <!--Register-->
                    <form action="index.php" class="formulario__register" method="POST">
                        <h2>Regístrarse</h2>
                        <input name="email" type="text" placeholder="Ingresa tu Email">
                        <input name="password" type="password" placeholder="Ingrese contraseña">
                        <input name="confirm_password" type="password" placeholder="Repita la contraseña">
                        <input type="submit" value="Registrar">
                    </form>
                </div>

            </div>

        </main>

        <script src="assets/js/script.js"></script>
        <script src="scriptcat.js"></script>
</body>
</html>