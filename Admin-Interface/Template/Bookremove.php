	 <?php
			include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
 	 
 
if(isset($_POST["remove_btn"]))
	{
		$id=$_POST["remove_id"];	
	    echo $id;
	}

 $n1=$id;
 $stmt=$db->prepare("Delete from product where id=$n1 ");
 
 $stmt->execute();
header("location:../books.php");
exit();

?>