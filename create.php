<?php

session_start();


$name = $_REQUEST['name'];
$ram = $_REQUEST['ram'];
$max = $_REQUEST['maxfree'];

$uuid = uniqid();
$status = "STOPPED";
$active = '0';
$createAt = date("Y-m-d");

if(empty($name))
{
    $_SESSION['nameErr'] = "Field can't be empty";
    header("Location: insertnewmachine.php");
    exit();
}
else if (strlen($name) < 3)
{
    $_SESSION['nameErr'] = "More than 3 characters";
    header("Location: insertnewmachine.php");
    exit();

}

if($ram < 0)
{
    $_SESSION['ramErr'] = "Must be positive number";
    header("Location: insertnewmachine.php");
    exit();
}
else if ($ram > 64)
{
    $_SESSION['ramErr'] = "Must be less than 64";
    header("Location: insertnewmachine.php");
    exit();
}
if(empty($ram)){
    $_SESSION['ramErr'] = "Field can't be empty";
    header("Location: insertnewmachine.php");
    exit();
}
if ($max < 0)
{
    $_SESSION['maxfreeErr'] = "Must be positive number";
    header("Location: insertnewmachine.php");
    exit();
}
else if(empty($max)){
    $_SESSION['maxfreeErr'] = "Field can't be empty";
    header("Location: insertnewmachine.php");
    exit();
}
if(!is_numeric($max)){
    $_SESSION['maxfreeErr'] = "Must be a number";
    header("Location: insertnewmachine.php");
    exit();
}



// require_once 'konekcija.php';
require_once 'connectionmachine.php';

$stmt = $konekcija->prepare("INSERT INTO tabelamasina (uuid, name, status, createAt, active, ram, max_free)
                    VALUES (:uuid, :name, :status, :createAt, :active, :ram, :maxfree)"
);

$stmt->execute([

    'uuid'=> $uuid,
    'name' => $name,
    'status' => $status,
    'createAt' => $createAt,
    'active' => $active,
    'ram' => $ram,
    'maxfree' => $max

]);
// var_dump($stmt);
header("Location: insertnewmachine.php");


