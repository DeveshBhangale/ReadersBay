<!DOCTYPE html>
<html>
<head><meta charset="UTF-8"/></head>
<body>
	

<form method="POST" action="bookdb1.php" enctype="multipart/form-data">
	<input type="file"  name="pdf_file"><br/>
	<input type="file"  name="image" ><br/>
	<button name="submit" value="submit">Upload</button>
	
</form>

<?php
$a = mysqli_connect('localhost','root','','pg1');
$res = mysqli_query($a,"select * from bookdb");
while($row=mysqli_fetch_array($res))
{ ?>
	
	<a href="uploads/<?php echo $row['pdf_file']; ?>"><?php echo $row['pdf_file']; ?></a>
<?php
}
?>
</body></html>