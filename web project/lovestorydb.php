<?php
$data= $_POST['data'];
$Author= $_POST['Author'];


$dbconnect=mysqli_connect("localhost","root","","pg1");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
else {
	


	$INSERT = "INSERT into lovestory (data,Author) values(?,?)";
	
	
	$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	if ($r==0){
		
		$stmt->bind_param("ss",$data,$Author);
		$stmt->execute();
		$stmt->store_result();
	
		header("location: lovestory.php");
		
	}
	else
	{echo "Record is same";}
	}
?>