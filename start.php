<?php

//  require_once 'konekcija.php';
 require_once 'connectionmachine.php';

$id = $_REQUEST['id'];

$stmt = $konekcija->query("SELECT * FROM tabelamasina WHERE id = $id ");
$masina = $stmt->fetch();

if($masina['status'] == 'STOPPED'){
    sleep(2);
    $stmt = $konekcija->query("UPDATE `tabelamasina` SET `status` = 'RUNNING' WHERE `tabelamasina`.`id` = $id");
    header("Location: search.php");
}
else
{
    echo '<script>alert ("Machine is already running")</script>';
    echo '<a href="search.php">Go back</a>';}

