<?php
$name = $_POST['name'];
$Email = $_POST['email'];
$Phone = $_POST['phone'];
$gender = $_POST['gender'];
$note = $_POST['note'];

$conn = new mysqli('localhost','root','','mydb');
if($conn->connect_error){
    die('connection failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into registration(name,email,phone,gender,note)
    values(?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiss", $name, $email, $phone, $gender, $note);
    $stmt->execute();
    echo "registrtion Successfully...";
    $stmt->close();
    $conn->close();
}
?>
