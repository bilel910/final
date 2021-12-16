	 <?php
			include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
 	 
 
if(isset($_POST["remove_btn"]))
	{
		$id=$_POST["remove_id"];	
	    echo $id;
	}
$stmt=$db->prepare("Delete from admin where email= '$id' ");
 
 $stmt->execute();


header("location:../index.php");
exit();

 

?>