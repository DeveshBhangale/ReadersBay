<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

* {
  box-sizing: border-box;
}
body{
  ont-family: Arial, Helvetica, sans-serif;
    background-image: url("book.jpg");
    background-repeat:no-repeat;
    background-size: cover;
    
}
.menu {
  float:left;
  width:20%;
  text-align:center;
}
.menu a {
 
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:center;
  width:60%;
  padding:0 20px;
  
   
}
.right {
  float:right;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}



@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}

  .dropbtn {
  background-color: red;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left:50px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:red;
  margin-left:50px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color:white;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color:red;
padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;}

.show {display: block;}

  
</style>
</head>

<body style="font-family:Verdana;color:black;">


<div style=padding:5px;text-align:center;>
  <h1 style="font-size:50px;"><font color="red">POEMS</font></h1>
</div>


  <div class="menu">
   <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" margin-left="7px" >CATEGORY</button>
  <div id="myDropdown" class="dropdown-content">
  <form action="POEMS.php" method="get">
    
  <a href="sad.php">sad </a>
  
    <a href="love.php">love and friendship</a>
    <a href="dark.php">dark and death</a>
  </form>
  </div>
  </div>
  </div>
  

  <div class="main">
  <?php
$a= mysqli_connect("localhost","root","","pg1");

$res= mysqli_query($a,"select * from poems");
while($row=mysqli_fetch_array($res))
{
?> <p text align="center" style="font-size: 20px">Shall I compare thee to a summer’s day?
Thou art more lovely and more temperate:
Rough winds do shake the darling buds of May,
And summer’s lease hath all too short a date:
Sometime too hot the eye of heaven shines,
And often is his gold complexion dimm’d;
And every fair from fair sometime declines,
By chance, or nature’s changing course, untrimm’d;
But thy eternal summer shall not fade
Nor lose possession of that fair thou ow’st;
Nor shall Death brag thou wander’st in his shade,
When in eternal lines to time thou grow’st;
So long as men can breathe or eyes can see,
So long lives this, and this gives life to thee.

 </p>
 <p align="right" style="font-size: 20px"><i>~ William Shakespeare</i></p>
   <p text align="justify" style="font-size: 20px"><?php echo $row["SrNo"]; ?><br /></p>
   <pre text align="center" style="font-size: 20px"><?php echo $row["data"]; ?><br /></pre>
   <p align="right" style="font-size: 20px"><i>~<?php echo $row["Author"]; ?></i><br /></p>
  
<?php
}

?>
	 
  </div>

  

<div>

</div>


<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

<header>
        <div class="container">
          <h1 class="logo"></h1>

          <nav>
            <ul>
              <li><a href="second page.html">Home</a></li>
              <li><a href="logout.php">logout</a></li>
              
            </ul>
          </nav>
        </div>
      </header>


</body>
</html>

