<meta http-equiv="refresh" content="1; url=index.php">
<h1>Redirecting...</h1>
<?php
include 'dbConfig.php';
$id = isset($_GET['id'])? $_GET['id'] : "";
$sql = "DELETE FROM files WHERE id=$id";
$conn->exec($sql);
?>