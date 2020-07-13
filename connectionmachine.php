<?php

//konekcija do baze podataka

// $konekcija= mysqli_connect('localhost', 'root', '', 'machine');

// //provera konekcije

// if (!$konekcija){
//     echo 'Problem sa konekcijom: '.mysqli_connect_error(); 
// }

$host = "localhost";
$user = "root";
$pass = "";
$bazapodataka = "masine";

$konekcija = new PDO("mysql:host=$host; dbname=$bazapodataka", $user, $pass);

$konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);



?>