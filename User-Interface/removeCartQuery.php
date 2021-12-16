	 <?php
		include 'C:\xampp\htdocs\inspirebook2\config\config.php';

	
 	 
 
if(isset($_POST["removeAll_btn"]))
	{
	$id=$_POST["remove_id"];	
 	$stmt=$db->prepare("Delete  from cart where Cid=$id ");
 	$stmt->execute();
header("location:cart.php");
exit();
}
if(isset($_POST["remove_btn"]))
	{
	$cid=$_POST["remove_cid"];
 	$id=$_POST["remove_id"];	
 	$stmt=$db->prepare("Delete  from cart where id=$id AND Cid=$cid ");
 	$stmt->execute();
header("location:cart.php");
exit();
}
?>