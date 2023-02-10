<?php
$name = $_POST['name'];

$phone= $_POST['phone'];

$email = $_POST['email'];

$date= $_POST['ddate'];
$time= $_POST['ttime'];

$msg=$_POST['message'];
$d=$_POST['doctor'];


//  echo "$name";
//  echo "$email";
//  echo "$phone";
// echo "$msg";

include 'connect.php';
$q=$conn->prepare("INSERT INTO doctor (name,phone,email,ddate,ttime,message,ndoctor	)VALUES('$name','$phone','$email','$date','$time','$msg','$d')");
$res=$q->execute();
if($res){
	echo "<script>alert('APPOINTMENT DONE');</script>";
	echo "<script> window.location='doctors.php';</script>";
}
else{
	echo "<script>alert('failure');</script>";
	// echo "<script> window.location='contacts.html';</script>";
}