<!DOCTYPE html>
<html>

<!-- import header.php -->
<?php
include("header.php");
?>

<body>


<!-- First Grid -->

	<table width="100%" height="10%" align="center">
		<tr><td align="center"><p style="font-size:xx-large">Clothing</p></td></tr>
	</table>
	<table width="100%" height="50%">
		<tr><td><table width="100%" height="100%">
			<tr><td align="center"><a href="">All</a></td></tr>
			<tr><td align="center"><a href="">Western</a></td></tr>
			<tr><td align="center"><a href="">Ethnic</a></td></tr>
			</table>
		    </td>
		    <td><table width="100%" height="100%" cell padding="10" cell spacing="5">
				<tr><td><img src="images/images4.jpg" style="width:200px; height:200px"></td>
				    <td align="center"><p style="font-size:30px">Fresh
						      	Trends</p></td>
				    <td><img src="images/images14.jpg" width="200px" height="200px"></td></tr></table></td>
		 		<tr><td></td><td align="center">Western</td></tr>
		<table width="100%" height="100%" cell padding="10" cell spacing="5">		
				<tr><td align="center">
			<img src="images/images8.jpg" width="200px" height=200px"></td>
		    		    <td align="center">
			<img src="images/images67.jpg" width="200px" height="200px"></td>
		    		    <td align="center">
			<img src="images/images53.jpg" width="200px" height="200px"></td>
				</tr>
				<tr><td align="center">Rental Price:1500 rs.</td>
				    <td align="center">Rental Price:1200 rs.</td>
				    <td align="center">Rental Price:1300 rs.</td>
				<tr><td></td><td align="center">Ethnic</td></tr>
				<tr><td align="center">
				
			<img src="images/images30.jpg" width="200px" height="200px"></td>
		    		    <td align="center">
						
			<img src="images/images33.jpg" width="200px" height="200px"></td>
		    		    <td align="center">
			<img src="images/images25.jpg" width="200px" height=2300px"></td>
				</tr></table>
         				                    




      
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
