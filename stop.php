<?php

// require_once 'konekcija.php';
require_once 'connectionmachine.php';

$id = $_REQUEST['id'];

$stmt = $konekcija->query("SELECT * FROM tabelamasina WHERE id = $id ");
$masina = $stmt->fetch();

if($masina['status'] == 'RUNNING'){
    sleep(2);
    $stmt = $konekcija->query("UPDATE `tabelamasina` SET `status` = 'STOPPED' WHERE `tabelamasina`.`id` = $id");
    header("Location: search.php");
}
else
{
    echo '<script>alert ("Machine is already stopped")</script>';
    echo '<a href="search.php">Go back</a>';
}

