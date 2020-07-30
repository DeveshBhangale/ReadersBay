<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>

* {
  box-sizing: border-box;
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
body {
  background-image:url("bookpg.jpg");
  background-repeat: no-repeat;
  background-size: cover;	
   
  }
  .dropbtn {
  background-color: green;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
  margin-left:50px;
}

.dropbtn:hover, .dropbtn:focus {
  background-color:  brown;
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

.dropdown a:hover {background-color:brown;
padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;}

.show {display: block;}

  
</style>
</head>

<body style="font-family:Verdana;color:black;">
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


<div style=padding:5px;text-align:center;>
  <h1 style="font-size:50px;"><font color="red">BOOKS</font></h1>
</div>


  <div class="menu">
   <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn" margin-left="7px" >CATEGORY</button>
  <div id="myDropdown" class="dropdown-content">
  <form action="POEMS.php" method="get">
    
  <a href="Novels.php">Novels</a>
    <a href="Comics.php">Comics</a>
    <a href="horror1.php">Horror</a>
  </form>
  </div>
  </div>
  </div>
  

  <div class="main">
  <?php
$a= mysqli_connect("localhost","root","","pg1");

$res= mysqli_query($a,"select * from Novels");
while($row=mysqli_fetch_array($res))
{
?> 
   <br/>
   <a href="uploads/<?php echo $row['pdf_file']; ?>"><pre text align="center" style="font-size: 20px"><?php echo $row['pdf_file']; ?><br /></pre></a>
   
  
<?php
}

?>
	 
  </div>

  <div class="right">
 <form method="POST" action="Novelsdb.php" enctype="multipart/form-data">
 <font color="white"> Upload Your Books</font><input type="file"  name="pdf_file"><br/>
 
  <button name="submit" value="submit">Upload</button>
  
</form>
 
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




</body>
</html>

