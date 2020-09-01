<?php
include 'dbConfig.php';
$statusMsg = '';

if(isset($_POST["submit"]) && !empty($_FILES["myfile"]["name"])){
    $name = $_FILES['myfile']['name'];
    $type = $_FILES['myfile']['type'];
    $data = file_get_contents($_FILES['myfile']['tmp_name']);
    $stmt = $conn->prepare("insert into myblob values('', ?, ?, ?)");
    $stmt->bindParam(1, $name);
    $stmt->bindParam(2, $type);
    $stmt->bindParam(3, $data);
    $stmt->execute();
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>