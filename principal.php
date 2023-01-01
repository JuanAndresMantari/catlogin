<?php
  session_start();
  require 'database.php';
  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);
    $user = null;
    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
</head>
<body>

        <main>
            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <?php if(!empty($user)): ?>
                        <h3>BIENVENIDO <?= $user['email']; ?></h3>
                        <p>Sesion Iniciada Correctamente</p>
                        <a href="logout.php">
                            <button>Cerrar Cesion</button>
                        </a>
                        <?php else: ?>
                        <h1>Inicia Sesion o registrate</h1>

                        <a href="index.php">Login</a> or
                        <a href="index.php">SignUp</a>
                        <?php endif; ?>
                    </div>

                </div>

                
                


            </div>

        </main>

        <script src="assets/js/script.js"></script>
        <script src="scriptcat.js"></script>
</body>
</html>