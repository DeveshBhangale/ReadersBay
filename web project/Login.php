<!DOCTYPE html>

<html>  
<head>
<style>
body {
		
		font-family: Arial, Helvetica, sans-serif;
		background-image: url("https://images.wallpaperscraft.com/image/book_coffee_bed_shadow_117507_1280x720.jpg");
		background-repeat:no-repeat;
		background-size: cover;
		
}
 
* {
  box-sizing: border-box;
}
.container {
  padding: 16px;
  background-color: white;
}
input[type=text], input[type=password], input[type=email]{
  width: 50%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: coral;
  color: white;
  padding: 16px;
  margin: 5px 0 22px 0;
  border: none;
  cursor: pointer;
  width: 25%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1.5;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
 
</style>
</head>

<body>
<form name="login" method="POST" action="Login1.php">
<div style="container">
<h1><b><p align="center"><font color="coral" size="35">Readers	Bay </font></p></b></h1>

<hr>

<p align="center">
<label for="Full Name"><b><font color="coral" >Full Name </font></b></label>
<input type="text" placeholder="Enter Full Name" name="fname"  autofocus="Full" required><br />

<label for="Password"><b><font color="coral" >Password  </font></b></label>
<input type="password" placeholder="Enter Password" name="password" required><br />

<hr>
    <p><font color="black" >By Logging in you agree to our <a href="#">Terms & Privacy</a>.</font></p>
<div style="text-align:center"> 
<button type="submit" name="submit" class="registerbtn" value="Login"> <font color="black">Login</font></button>
</form>
<form action="readersbay.html">
<button class="registerbtn" type="submit" name="submit"> <font color="black">Register</font></button>
</form>
</div>
</p></form>

</div>

</html>
</body>