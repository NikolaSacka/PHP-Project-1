<?php

//konekcija do baze podataka

// $konekcija= mysqli_connect('localhost', 'root', '', 'schema');

// //provera konekcije

// if (!$konekcija){
//     echo 'Problem with connection:  '.mysqli_connect_error(); 
// }

$host = "localhost";
$user = "root";
$pass = "";
$bazapodataka = "opetsema";

$konekcija = new PDO("mysql:host=$host; dbname=$bazapodataka", $user, $pass);

$konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// $host = "localhost";
// $user = "root";
// $pass = "";
// $bazapodataka = "schema";

// $konekcija = new PDO("mysql:host=$host; dbname=$bazapodataka", $user, $pass);

// $konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);




?>