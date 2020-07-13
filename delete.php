<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // require_once 'konekcija.php';
    require_once 'connectionmachine.php';
    $id = $_REQUEST['id'];
    if (isset($id)) {
        $stmt = $konekcija->prepare("DELETE FROM tabelamasina WHERE id= :id");
        $stmt->execute([
            'id' => $id
        ]);
    }
    echo '<script>alert("Successfuly deleted!")</script>';
    echo '<a href="search.php">Go back</a>';
    exit();
}

// if{
//     (isset($id)){
//         $stmt = $konekcija->prepare("SELECT FROM tabelamasina WHERE status=:STOPPED");

//     }
// }