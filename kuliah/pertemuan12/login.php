<?php
session_start();

if (isset($_SESSION['login'])) {
  header('Location: index.php');
  exit;
}

require 'functions.php';

if (isset($_POST['login'])) {
  $login = login($_POST);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>

<body>
  <h3>Login</h3>
  <?php if (isset($login['error'])) : ?>
    <p style="color: red; font-style: italic;"><?= $login['pesan']; ?></p>
  <?php endif; ?>
  <form action="" method="POST">
    <table>
      <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" name="username" placeholder="Masukkan Username" autofocus autocomplete="off" required></td>
      </tr>
      <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" name="password" placeholder="Masukkan Password" required></td>
      </tr>
      <tr>
        <td><button type="submit" name="login">Login</button></td>
      </tr>
      <tr>
        <td><button type="submit" name="registrasi"><a href="registrasi.php">Register</a></button></td>
      </tr>
    </table>
</body>

</html>