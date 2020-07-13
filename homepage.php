<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styled1.css">
</head>
<body>
    <div class="form">
    <!-- konekcija do baze -->
    <?php 
    require_once 'connection.php'; 
    // require_once 'konekcija.php'; 
    ?>
    <p>Login</p>
    <!-- pri submitovanju, pokreni checklogin.php za proveru -->
    <!-- <form action="POST" action="homepage.php"> -->
    <form method="POST" action="checklogin.php">
    <p>
    <!-- <label for="username">Username:</label> -->
    <input name="username" id="username" placeholder="USERNAME"><br>
    </p>
    <p>
    <!-- <label for="password">Password:</label> -->
    <input type="password" name="password" id="password" placeholder="PASSWORD">
    </p>
    <!-- Klikom na 'ovde' pokrece se registracija -->
    <input type="submit" class="submit"><br>

    </form>
    <p>Ako nemate nalog, kliknite
    <a href="registration.php">ovde</a>.
    </p>
    <!-- provera kredencijala -->
    <?php if(isset( $_SESSION['credentials'])): ?>
        <span> <?= $_SESSION['credentials'] ?></span>
        <?php
        unset($_SESSION['credentials']);
        ?>
    <?php endif; ?>
    </div>
</body>
<div class="footer">
  <p>Nikola Sacka s31/18</p>
</div>
</html>