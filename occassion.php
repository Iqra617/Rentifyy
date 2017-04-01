<!DOCTYPE html>
<html>
<!-- import header.php -->
<?php
include("header.php");
?>

<!--<head>
<title>  Rentifyy</title>
	<link rel="icon" type="image/icon" href="fac.ico"/>

</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mycss.css">
<link rel="stylesheet" href="css.css">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link href="ddmenu.css" rel="stylesheet" type="text/css"></link>
<script src="ddmenu.js" type="text/javascript"></script>
<body>

<!-- Navbar -->
<!--<nav id="ddmenu">
<ul>
	<li class="full-width">
            <span class="top-heading"><a href="index.php" class="w3-padding-large w3-hover-white">Home</a></span>
     </li>
	 <li class="full-width">
            <span class="top-heading"><a href="why_rent.php" class="w3-padding-large w3-hover-white">Why Rent?</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="clothing.php" class="w3-padding-large w3-hover-white">Clothing</a></span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><a href="">All</a></li>
                        <li><a href="">Ethnic</a></li>
                        <li><a href="">Western</a></li>
                    </ul>
		 </div>
            </div>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="occassion.php" class="w3-padding-large w3-white">Occassion</a></span>
            <i class="caret"></i>
            <div class="dropdown">
                <div class="dd-inner">
                    <ul class="column">
                        <li><a href="">All</a></li>
                        <li><a href="">Wedding</a></li>
                        <li><a href="">Party</a></li>
                    </ul>
		 </div>
            </div>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="contact.php" class="w3-padding-large w3-hover-white">Contact Us</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="login.php" class="w3-padding-large w3-hover-white">Login</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="registration.php" class="w3-padding-large w3-hover-white">Register</a></span>
     </li>
</ul>


<!-- Header -->
<!--<div class="w3-container w3-teal w3-center w3-padding-500">
<p class="w3-xlarge"line-height: 100%;> 
  <h1 class="w3-margin w3-jumbo"><b>Rentifyy</b></h1>

<h4>	<br>Rent It-Rock It-Return It</br></h4>
 </p>
 
</div>
-->
<!-- First Grid -->
<table width="100%" height="10%" align="center">
		<tr><td align="center"><p style="font-size:xx-large">Occassion</p></td></tr>
</table>
<table width="100%" height="50%">
		<tr><td><table width="100%" height="100%">
			<tr><td align="center">All</td></tr>
			<tr><td align="center">Wedding</td></tr>
			<tr><td align="center">Party</td></tr>
			</table>
		    </td>
		    <td><table width="100%" height="100%" cell padding="10" cell spacing="5">
				<tr><td align="center" height="200px" width="200px"><img src="images/images57.jpg" width="200px" height="200px"></td>
				    <td align="center"><p style="font-size:30px">Fresh
						      	Trends</p></td>
				    <td height="200px" width="200px"><img src="images/images (54).jpg"></td></tr>
			</table></td>
		 	<tr><td></td><td align="center"><p style="font-size:x-large">Wedding</p></td></tr>
			<table width="100%" height="100%" cell padding="10" cell spacing="5">
			<tr height="200px"><td align="center" width="200px" height="200px">
			<img src="images/images (13).jpg"></td>
		    		    <td align="center" width="200px" height="200px">
			<img src="images/images (39).jpg"></td>
		    		    <td align="center" width="200px" height="200px">
			<img src="images/images (45).jpg"></td>
				</tr>
				<tr><td align="center">Rental Price:1500 rs.</td>
				    <td align="center">Rental Price:1200 rs.</td>
				    <td align="center">Rental Price:1300 rs.</td>
			<tr><td></td><td align="center"><p style="font-size:x-large">Party</p></td></tr>
				<tr><td align="center" width="200px" height="200px">
			<img src="images/download (4).jpg" width="200" height="200"></td>
		    		    <td align="center" width="200px" height="300px">
			<img src="images/images (6).jpg" width="200" height="200"></td>
		    		    <td align="center" width="200px" height="200px">
			<img src="images/images (37).jpg" width="200" height="200"></td>
				</tr></table></td>
		</tr>
	</table>
  



<!-- Footer -->
<!-- import footer.php -->
<?php
include("footer.php");
?>

<!--<footer class="w-footer">
 
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
<center> <p>&copy; 2016 Rentifyy.com<p> </center>

</footer>
-->
<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
