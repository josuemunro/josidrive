<meta http-equiv="refresh" content="2; url=index.php">
<?php
include 'dbConfig.php';
if(isset($_POST["btn"])){
    echo "something happened ";
    $name = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    $data = addslashes(file_get_contents($_FILES['myfile']['tmp_name']));
    try {
      $sql = "INSERT INTO files (name, datatype, data)
    VALUES ('$name', '$type', '{$data}')";
      // use exec() because no results are returned
      $conn->exec($sql);
      echo "New record created successfully";
    } catch(PDOException $e) {
      echo $sql . "<br>" . $e->getMessage();
    }
  }
?>