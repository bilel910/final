	 <?php
	include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
 	 
 
 $n1=$_POST['id'];
 $n2=$_POST['title'];
 $n3=$_POST['price'];
 $n4=$_POST['description'];
 $n5=$_POST['author'];
 $n6=$_POST['Display'];


	 
 $stmt=$db->prepare("UPDATE product SET title='$n2' , price=$n3, description='$n4' , author='$n5' , display='$n6' where id=$n1 ");
 
 $stmt->execute();
header("location:../books.php");
exit();

?>