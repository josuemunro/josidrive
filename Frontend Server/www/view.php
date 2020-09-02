<?php
include 'dbConfig.php';
$id = isset($_GET['id'])? $_GET['id'] : "";
$q = $conn->query("SELECT * FROM files WHERE id=$id");
$row = $q->fetch();
header('Content-Type:'.$row['datatype']);
echo $row['data'];
?>