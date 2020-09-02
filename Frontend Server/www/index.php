<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ligma</title>
</head>
<body>
<h1>Yeah the boys</h1>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select File to Upload:
    <input type="file" name="myfile">
    <button name="btn">Upload ya stuff</button>
</form>
<?php
  include 'dbConfig.php';
    
  $q = $conn->query("SELECT * FROM files");

  while($row = $q->fetch()){
  echo "<li>
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
