<?php
		include 'C:\xampp\htdocs\inspirebook\config\config.php';

        $stmt= $db->query("SELECT * FROM product");

        if(isset($_POST['sortasc']))
        {
            // $sortasc = "SELECT * FROM product ORDER BY price ASC";
            $stmt= $db->query("SELECT * FROM product ORDER BY price ASC");

            header("location:../books.php");
        }
        else if(isset($_POST['sortdsc']))
        {
            // $sortasc = "SELECT * FROM product ORDER BY price DESC";
            $stmt= $db->query("SELECT * FROM product ORDER BY price DESC");

            header("location:../books.php");   
        }
        exit();
            ?>