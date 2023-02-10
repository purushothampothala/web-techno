<?php
$name = $_POST['name'];

$email = $_POST['email'];

$phone= $_POST['phone'];

$msg=$_POST['message'];


// echo "$name";
// echo "$email";
// echo "$phone";
// echo "$msg";

include 'connect.php';
$q=$conn->prepare("INSERT INTO contact(name,phone,email,message)VALUES('$name','$email','$phone','$msg')");
$res=$q->execute();
if($res){
	echo "<script>alert('success');</script>";
	echo "<script> window.location='contacts.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	// echo "<script> window.location='contacts.html';</script>";
}