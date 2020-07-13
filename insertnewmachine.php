<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert new machine</title>
    <link rel="stylesheet" href="styled2.css">
</head>
<body>
<div>
<h1>Create machine</h1>

<form method="post" action="create.php">

    <label for="name">Name</label>
    <input id="name" name="name" type="text" >
    <?php if(isset( $_SESSION['nameErr'])): ?>
    <span> <?= $_SESSION['nameErr'] ?></span>
    <?php
    unset($_SESSION['nameErr']);
    ?>
    <?php endif; ?>

    <br><br>

    <label for="ram">Ram</label>
    <input id="ram" name="ram" type="number" >
    <?php if(isset( $_SESSION['ramErr'])): ?>
    <span> <?= $_SESSION['ramErr'] ?></span>
    <?php
    unset($_SESSION['ramErr']);
    ?>
    <?php endif; ?>

    <br><br>

    <label for="maxfree">max free</label>
    <input id="maxfree" name="maxfree" type="number" >
    <?php if(isset( $_SESSION['maxfreeErr'])): ?>
    <span> <?= $_SESSION['maxfreeErr'] ?></span>
    <?php
    unset($_SESSION['maxfreeErr']);
    ?>
    <?php endif; ?>
    <br><br>
    <input type="submit">
    <br><br>
    <a href="search.php">Search machine!</a>
    <a href="homepage.php">Logout</a>    


</form>
</div>
</body>
<div class="footer">
  <p>Nikola Sacka s31/18</p>
</div>
</html>
