<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search</title>
    <link rel="stylesheet" href="styled3.css">

</head>
<body>
<div>
<h2>List of machine's</h2>

<form method="get" action="search.php">
    <input type="text" name="search" placeholder="Search">
    <input type="submit" value="Search">
    <a href="insertnewmachine.php">Back</a>

</form>
<br>
<?php
$search = $_REQUEST['search'];
require_once 'connectionmachine.php';
// require_once 'konekcija.php';
var_dump($search);
if (isset($search) && !empty($search) && is_numeric($search)) {
    $stmt = $konekcija->prepare ("SELECT * FROM tabelamasina WHERE ram = :search");
    $stmt->execute([
        'search' => $search
    ]);
}
else if (isset($search) && !empty($search) && !is_numeric($search)) {
    $stmt = $konekcija->prepare ("SELECT * FROM tabelamasina WHERE name LIKE :search");
    $stmt->execute([
        'search' => '%' . $search . '%'
     ]);
} else {
    $stmt = $konekcija->prepare("SELECT * FROM tabelamasina");
    $stmt->execute([]);
}
$row = $stmt->fetchAll();

?>
<ul>
<?php foreach ($row as $rows):?>
 <li>


    <?php echo $rows['name'];?>
     <?php echo $rows['ram'];?>
     <?php echo $rows['status'];?>


     <form action="delete.php?id=<?php echo $rows['id']?>" method="POST">
         <input type="submit" value="DELETE">
     </form>

     <form action="start.php?id=<?php echo $rows['id']?>" method="post">
         <input type="submit" value="START">
     </form>

     <form action="stop.php?id=<?php echo $rows['id']?>" method="post">
         <input type="submit" value="STOP">
     </form>
     <br>
 </li>

    <?php endforeach; ?>


</ul>
</div>
</body>
<div class="footer">
  <p>Nikola Sacka s31/18</p>
</div>
</html>