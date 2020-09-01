<?php
include 'dbConfig.php';
$statusMsg = '';

if(isset($_POST["btn"])){
    echo "something happened ";
    $name = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    $data = file_get_contents($_FILES['myfile']['tmp_name']);
    // $stmt = $conn->prepare("INSERT INTO files VALUES('', ?, ?, ?)");
    // echo "we made some sort of connection ";
    // $stmt->bindParam('name', $name);
    // $stmt->bindParam('datatype', $type);
    // $stmt->bindParam('data', $data);
    // $stmt->execute();
    // echo "what is going on ";
    $sql = "INSERT INTO files VALUES ('John')";
    echo "what in the world";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "huuuuh";
    if($sql){
        $statusMsg = "The file ".$name. " has been uploaded successfully.";
    }else{
        $statusMsg = "File upload failed, please try again.";
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>