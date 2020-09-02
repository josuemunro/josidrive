<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ligma</title>
</head>
<body>
<h1>Yeah the boys</h1>

<form method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="myfile">
    <button name="btn">Upload ya stuff</button>
</form>
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
    
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
  echo "<li>
    <a target='_blank' href='view.php?id=".$row['id']."'>
      ".$row["name"]."
    </a>
    <embed src='data:".$row['datatype'].";base64,".base64_encode($row['data'])."' width='200'/>
  </li>
  <a target='_blank' href='download.php?id=".$row['id']."'>
      Download here!
    </a>";
}

?>
<br>

</body>
</html>
