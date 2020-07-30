<?php
$conn = mysqli_connect("localhost","root","","pg1");

if(isset($_POST['submit'])){
	$allow  = array('pdf','docx');
	$temp = explode('.',$_FILES['pdf_file']['name']);
		
		
	$extension = end($temp);
		
	$upload_file=$_FILES['pdf_file']['name'];
		
	move_uploaded_file($_FILES['pdf_file']['tmp_name'], 'uploads/'.$_FILES['pdf_file']['name']);
	
	$qry=mysqli_query($conn,"INSERT INTO `horrordb` (`pdf_file`) values('".$upload_file."')");
		if($qry){
			
			header("Location: horror1.php");
		}
	
		else{
			echo 'Upload error';
		}
	}
	?>