<?php
include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
if(isset($_POST["display_btn"]))
	{
		$id=$_POST["display_id"];	
        $n1=$_POST['display_id'];
        $n2=$_POST['Display'];

      
    $stmt=$db->prepare("UPDATE product SET display='Yes' where id=$n1 ");
        
 $stmt->execute();
        
header("location:../books.php");
exit();
	    
	} 	 
 
 

?>