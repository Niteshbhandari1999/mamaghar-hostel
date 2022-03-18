<?php
$name = $_POST['name'];
$mobileno = $_post['mobileno'];
$email = $_post['email'];
$Description = $_post['description'];

$conn = new mysqli('localhost','root','','hostelhome');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration 
    (name,mobileno,email,description)values(?,?,?,?)");
    $stmt->bind_param("sssssi",$name,$mobileno,$email,$Description);
    $stmt->execute();
    echo "registration succeefully..";
    $stmt->close();
    $conn->colse();
}
