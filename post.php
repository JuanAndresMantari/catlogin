<?php
  session_start();

  // if (isset($_SESSION['user_id'])) {
  //   header('Location: /principal.php');
  // }
  require 'database.php';

  $email = $_GET['email'];
  $pass = $_GET['pass'];

  if($email === '' || $pass ===''){
    echo json_encode('error');
  }else {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_GET['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    if (count($results) > 0 && password_verify($_GET['pass'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: ./principal.php");
    } else {
      header("location: index.php?err=nouser");
    }
  }


?>