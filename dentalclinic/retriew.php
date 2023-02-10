<?php
include "connect.php";
$stmt = $conn->prepare("SELECT * FROM contact");
$stmt->execute();
$res = $stmt->rowcount();
if ($res){
     while($data = $stmt->fetchobject()){
     	?>
     	<tr>
     		<td><?= $data->name ?>
     		</td>
     	</tr>
     	<?php }
     }
     else{
           echo "<script>alert('failure');</script>";
     }?>
    
