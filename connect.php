<?php 

$name = $_POST['name']; 
$email = $_POST['email']; 
$phone = $_POST['phone']; 
$parent = $_POST['parent']; 
$div = $_POST['div']; 
$clas = $_POST['clas']; 
$rollcall = $_POST['rollcall']; 

$conn  = new mysqli('localhost', 'root', '', 'test');
if($conn->connect_error){
    die('connection Failed :'.$conn->connect_error);

}else{
    $conn->prepare("insert into registration(name,email,phone,parent,div,clas,rollcall)value(?,?,?,?,?,?,?)");
    $stmt->bind_param("ssiisii",$name,$email,$phone,$parent,$div,$clas,$rollcall);
    $stmt->execute();
    echo"Registered Successfully...!";
    $stmt->close();
    $conn->close();
}


?>