<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /ProyectoWeb');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT idUserLog, email, password FROM usuarioslogin WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['idUserLog'];
      header('Location:/Vista/php/indexusuario.php');
    } else {
      $message = 'Lo siento, información no válida';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="Vista/css/Diseño-Login.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>Iniciar Sesión</h1>
    <span>o <a href="signup.php">Registrarse</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingrese su correo electrónico">
      <input name="password" type="password" placeholder="Ingrese su contraseña">
      <input type="submit" value="Iniciar Sesion">
    </form>
  </body>
</html>
