	 <?php
			include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
 	 
 
if(isset($_POST["remove_btn"]))
	{
		$id=$_POST["remove_id"];	
	    echo $id;
	}
$stmt=$db->prepare("Delete from  transcationbook where 	OrderID  ='$id' ");
 
 $stmt->execute();
$st=$db->prepare("Delete from  orderlist where 	OrderID ='$id' ");
 
$st->execute();

header("location:../bookorders.php");
exit();

 

?>