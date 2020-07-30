<?php

$dbconnect=mysqli_connect("localhost","root","","pg1");

if($_POST['submit']){	
	$imagefile = $_FILES['image']['name'];
	$imagetemp = $_FILES['image']['tmp_name'];
	$upload_file=$_FILES['pdf_file']['name'];
	$upload_file1=$_FILES['pdf_file']['tmp_name'];
	$folder2 = "uploads/".$imagefile;
	$folder1 = "uploads/".$upload_file; 	
	move_uploaded_file($imagetemp,$folder2);
	move_uploaded_file($upload_file1,$folder1);
$INSERT = "INSERT into page1 ('$folder1','$folder2') values(?,?)";
$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	if ($r==0){
		
		$stmt->bind_param("ss",$folder1,$folder2);
		$stmt->execute();
		$stmt->store_result();
	
	
		echo "Success"; 
	}
	}
else{echo "Select Files";}


	
	
?>