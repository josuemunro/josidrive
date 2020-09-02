<meta http-equiv="refresh" content="1; url=index.php">
<h1>Redirecting...</h1>
<?php
include 'dbConfig.php';
if(isset($_POST["btn"])){
    $name = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    $data = addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
    try {
      $sql = "INSERT INTO files (name, datatype, data)
    VALUES ('$name', '$type', '{$data}')";
      // use exec() because no results are returned
      $conn->exec($sql);
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
?>