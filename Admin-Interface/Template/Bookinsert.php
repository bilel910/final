	 <?php
		include 'C:\xampp\htdocs\inspirebook\config\config.php';

	
 	 
 
if(isset($_POST['submit'])){
 $title=$_POST['title'];
 $price=$_POST['price'];
 $description=$_POST['description'];
 $author=$_POST['author'];
 $file=$_FILES['photo'];

 $filename= $file['name'];
 $filepath= $file['tmp_name'];
 $fileerror= $file['error'];
 if($fileerror == 0){
 $destfile= '../../pic/book/'.$filename;
 
 
 move_uploaded_file($filepath, $destfile);
 } 
 $stmt=$db->prepare("insert into product values(null,'$title', $price , '$description', '$author' ,'$filename',now(),'NO')");
 $stmt->execute();
 
header("location:../books.php");
}
exit();
?>