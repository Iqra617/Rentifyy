<!DOCTYPE html>
<html>
<head>
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
<nav id="ddmenu">
<ul>
	<li class="full-width">
            <span class="top-heading"><a href="index.php" class="w3-padding-large w3-white">Home</a></span>
     </li>
	 <li class="full-width">
            <span class="top-heading"><a href="why_rent.php" class="w3-padding-large w3-white">Why Rent?</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="clothing.php" class="w3-padding-large w3-white">Clothing</a></span>
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
            <span class="top-heading"><a href="contact.php" class="w3-padding-large w3-white">Contact Us</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="login.php" class="w3-padding-large w3-white">Login</a></span>
     </li>
	<li class="full-width">
            <span class="top-heading"><a href="registration.php" class="w3-padding-large w3-white">Register</a></span>
     </li>
</ul>

<!-- Header -->
<div class="w3-container w3-teal w3-center w3-padding-78">
  <h1 class="w3-margin w3-jumbo">"Style is a way to say who you are without having to speak."</h1>
  <p class="w3-xlarge">        </p>
  <button class="w3-btn w3-padding-16 w3-large w3-margin-top"><a href="why_rent.php">Get Started</button></a>
</div>



<!-- First Grid -->

 <img width="1350" height="650" src="images/dress_gif.gif">                      



<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="">

	<td>  <center>      	<h1 align="center"> <b> HOW IT WORKS</b>  
			<p class="w3-text-grey"><font size='6'><br><b> 1.Shop for any Occassion</b></br>Choose from our wide range of collection for any occassion like Party or Wedding!

                                             <br><b>2.Find the Best Fit </b></br>Select a dress that fits you the best.
                                             <br><b>3.Select a Timeframe </b></br>Choose the time period during which you want to rent it.
                                             <br><b>4.Return it </font></b> </br>We will be responsible to collect the dress from you after the completion of timeframe.

			</p>
							</h1>
	</center>


    </div>

    <div class="w3-third w3-center">   

    </div>
  </div>
</div>
</tr>
</table>


</div>

<!-- import footer.php -->
<?php
include("footer.php");
?>




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
