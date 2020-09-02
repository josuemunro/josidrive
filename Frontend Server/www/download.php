<?php
include 'dbConfig.php';
$id = isset($_GET['id'])? $_GET['id'] : "";
$q = $conn->query("SELECT * FROM files WHERE id=$id");
$row = $q->fetch();
$type = $row['datatype'];
$name = $row['name'];
$content = $row['data'];
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
exit;
?>