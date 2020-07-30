<?php
$a= mysqli_connect("localhost","root","","pg1");




$res= mysqli_query($a,"select * from poems");
while($row=mysqli_fetch_array($res))
{	echo "<p>";
	echo $row["SrNo"]; echo "<br />";
	echo $row["data"];  echo "<br />";
	echo $row["Author"];  echo "<br />";	
	echo "</p>";
}

?>


