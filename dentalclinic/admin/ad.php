<?php

$email = $_POST['email'];

$pwd= $_POST['password'];



// echo "$name";
 echo "$email";
// echo "$phone";
// echo "$msg";

include 'connect.php';
$q=$conn->prepare("SELECT * FROM admin WHERE email='$email' AND password='$pwd'");
$q->execute();
$res=$q->rowCount();
if($res){
	echo "<script>alert('success');</script>";
	echo "<script> window.location='db.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	echo "<script> window.location='index.php';</script>";
}