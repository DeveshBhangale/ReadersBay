<!DOCTYPE html>
<html>
<head>

<title>Confirmation Page</title>
<style>
body  {
  background-image: url("sp1.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
/* Set a style for the submit button */
.homepagebtn {
  background-color: red;
  color: white;
  padding: 16px;
  margin: 5px 0 22px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.homepagebtn:hover {
  opacity: 1.5;
}
</style>


</head>
<body >
<?php
$FullName = $_POST['fname'];
$Email = $_POST['email'];
$password = $_POST['password'];
$to = $_POST['email']; 
$sub = "Registration successful"; 
$msg="Hello , You have been registered successfully";
 if (mail($to,$sub,$msg)) {

$dbconnect=mysqli_connect("localhost","root","","pg1");
if(mysqli_connect_errno($dbconnect)){
	echo "failed to connect";
	
}
else {
	
	$password = md5($password);
	$to = "piyushjha65@gmail.com"; 
  $sub = "Generic Mail"; 
  $msg="Hello Geek! This is a generic email."; 
  if (mail($to,$sub,$msg)) 
      echo "Your Mail is sent successfully."; 
  else
      echo "Your Mail is not sent. Try Again.";

	$INSERT = "INSERT into page1 (fname,email,password) values(?,?,?)";
	
	
	$stmt = $dbconnect->prepare($INSERT);
	$r= $stmt->num_rows;
	if ($r==0){
		
		$stmt->bind_param("sss",$FullName,$Email,$password);
		$stmt->execute();
		$stmt->store_result();
	
		header("location: Login.php");
		
	}
	else
	{echo "Record is same";}
	}}
else{
	echo "Your Mail is not sent. Try Again.";

}

?>

<div style="text-align:center"> 
		<div class="menu">
			<h1 style="font-size:25px;" ><font color="black">Account Registered Successfully</font></h1>
    
			<button  class="homepagebtn"  onClick="parent.location='second page.html'" value='HomePage'>Home Page</button>
    
</div>
</div>
</body>
</html>