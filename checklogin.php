<?php
session_start();
require_once 'connection.php';
// require_once 'konekcija.php';

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// $stmt = $konekcija->prepare("SELECT  username, password FROM korisnici WHERE username = :username");
$stmt = $konekcija->prepare("SELECT  username, password FROM opettabela WHERE username = :username");
$stmt->bindParam(":username", $username, PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch();
// echo("test");
if ($row && password_verify($password, $row['password']))
    header("Location: insertnewmachine.php");
else {
 
    header("Location: homepage.php");
}


if (!$row['username']) {
    $_SESSION['credentials'] = "Ne postoji uneti username!";

}


    else if (!password_verify($password, $row['password'])) {
        $_SESSION['credentials'] = "Sifra koju ste uneli je pogresna.";
    }

?>