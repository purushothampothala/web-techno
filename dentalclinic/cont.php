<?php
$name = $_POST['name'];



$phone= $_POST['phone'];
$email = $_POST['email'];

$msg=$_POST['message'];


// echo "$name";
// echo "$email";
// echo "$phone";
// echo "$msg";

include 'connect.php';
$q=$conn->prepare("INSERT INTO contact(name,phone,email,message)VALUES('$name','$phone','$email','$msg')");
$res=$q->execute();
if($res){
	echo "<script>alert('INFORMATION SENT');</script>";
	echo "<script> window.location='contacts.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	// echo "<script> window.location='contacts.html';</script>";
}