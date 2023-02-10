<!DOCTYPE html>
<html>
<head>
	<title> </title>

	<style >
		table, th, td {
    border: 1px solid black;
}
	</style>
</head>
<body><?php
include "connect.php";
$stmt = $conn->prepare("SELECT * FROM contact");
$stmt->execute();
$res = $stmt->rowcount();
if ($res){
     while($data = $stmt->fetchobject()){
     	?>
     	<table>
     		<tr>
		<th> name</th>
		<th> phone</th>
		<th> email</th>
		<th> password</th>
	</tr> 
     	<tr>
     		<td><?= $data->name ?>
     		</td>
     	</tr>
     	<?php }
     }
     else{
           echo "<script>alert('failure');</script>";
     }?>
    
	
	
     

</body>
</html>