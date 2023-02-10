<?php
$name = $_POST['name'];



$email = $_POST['email'];

$msg=$_POST['message'];



//  echo "$name";
//  echo "$email";
//  echo "$phone";
// echo "$msg";

include 'connect.php';
$q=$conn->prepare("INSERT INTO reply (name,email,message)VALUES('$name','$email','$msg')");
$res=$q->execute();
if($res){
	echo "<script>alert('success');</script>";
	echo "<script> window.location='oralexam.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	// echo "<script> window.location='contacts.html';</script>";
}