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
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css.css"><link href="ddmenu.css" rel="stylesheet" type="text/css"></link>
<script src="ddmenu.js" type="text/javascript"></script>
<script src="cvalidation.js" type="text/javascript"></script>

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
            <span class="top-heading"><a href="occassion.php" class="w3-padding-large w3-hover-white">Occassion</a></span>
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
            <span class="top-heading"><a href="contact.php" class="w3-padding-large w3-white">Contact Us</a></span>
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
 
</div> -->   
<!-- First Grid -->
<div class="w3-margin">

  <form id="contact_form" action="c.php" method="POST" enctype="multipart/form-data" align="center">
	<div class="row">
		<label for="name"><font size="6">Your name:</font></label><br />
		<input id="name" class="input" name="name" type="text" value="" size="40"  /><br />
	</div>
	<div class="row">
		<label for="email"><font size="6">Your email:</font></label><br />
		<input id="email" class="input" name="email" type="text" value="" size="40" /><br />
	</div>
	<div class="row">
		<label for="message"><font size="6">Your query:</font></label><br />
		<textarea id="message" class="input" name="message" rows="7" cols="40" /></textarea><br />
	</div>
	<font size="5"><input id="submit_button" type="submit" value="Send" onclick="return cvalidation();"/></font>
</form>						                    


</div>

<!-- Second Grid
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      

    </div>

    <div class="w3-twothird">
      <h1> </h1>
      <h5 class="w3-padding-32">                                                             </h5>

      <p class="w3-text-grey">
 

</p>
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge"> </h1>
</div>
 -->


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
