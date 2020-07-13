<?php
session_start();


$username = $_REQUEST['username'];

if (empty($_REQUEST['password'])){
    $_SESSION['passerr'] = "Password is required";

}
// $password = password_hash($_REQUEST['password'], PASSWORD_DEFAULT);
$firstname = $_REQUEST['firstname'];
$lastname = $_REQUEST['lastname'];




if (empty($username)) {
    $_SESSION['emailErr'] = "Email is required";


} else {
    if (!filter_var($username, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = "Invalid email format";


    }
}

if (isset( $_SESSION['emailErr'])){

    header("Location: registration.php");
    exit();
} if (isset( $_SESSION['passerr'])){
    header("Location: registration.php");
    exit();
}



if (empty($password)){
    $_SESSION['passerr'] = "Password is required";
}

// require_once 'konekcija.php';
require_once 'connection.php';

$stmt = $konekcija->prepare("INSERT INTO opettabela (username,password,firstname,lastname)
                    VALUES (:username, :password, :firstname, :lastname)"
// $stmt = $konekcija->prepare("INSERT INTO korisnici (username,password,firstname,lastname)
//                     VALUES (:username, :password, :firstname, :lastname)"
);

$stmt->execute([

    'username'=> $username,
    'password' => $password,
    'firstname' => $firstname,
    'lastname' => $lastname

]);
// echo();
header("Location: homepage.php");
// var_dump($stmt);