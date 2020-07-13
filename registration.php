<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="styled2.css">

</head>
<body>
<div>
<h1>Create Account</h1>

<form method="POST" action="newuser.php">

    <!-- input za username -->
    <label for="username">Username (email):</label>
    <input id="username" name="username">


    <!-- provera i validacija mejla -->
    <?php if(isset( $_SESSION['emailErr'])): ?>
    <span> <?= $_SESSION['emailErr'] ?></span>
    <?php
    unset($_SESSION['emailErr']);
    ?>
    <?php endif; ?>

    <br>

    <!-- input za password -->    
    <label for="password">Password</label>
    <input id="password" name="password" type="password"  >

    <!-- provera i validacija pass -->
    <?php if(isset( $_SESSION['passerr'])): ?>
    <span> <?= $_SESSION['passerr'] ?></span>
    <?php
    unset($_SESSION['passerr']);
    ?>
    <?php endif; ?>


    <br>

    <label for="firstname">First name</label>
    <input id="firstname" name="firstname" type="text"><br>

    <label for="lastname">Last name</label>
    <input id="lastname" name="lastname" type="text"><br>

    <input type="submit">
    <a href="homepage.php">Go back</a>

</form>
</div>
</body>
<div class="footer">
  <p>Nikola Sacka s31/18</p>
</div>
</html>
