<?php
$conn=mysqli_connect("localhost","root","","pg1");
extract($_POST);
$FullName = $_POST['fname'];

$password = md5($_POST['password']);

if(isset($submit))
{
  $rs=mysqli_query($conn,"select * from page1 where fname='$FullName' and password='$password'");
  if(mysqli_num_rows($rs)<1)
  {
    $found="N";
  }
  else
  {
    $_SESSION["FullName"]=$FullName;
    $_SESSION["password"]=$password;
    
  }
}
if (null!== $_SESSION["FullName"] and null !== $_SESSION["password"])
{
session_start();
$_SESSION["name"]=$FullName;
header("Location: second page.html");


}
else
{echo "Invalid User";
 header("Location: loginerror.php");

}
?>