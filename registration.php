<!DOCTYPE html>
<html>

<!-- import header.php -->
<?php
include("header.php");
?>

<!-- First Grid -->
<div class="w3-margin">

  <form id="contact_form" action="process.php" method="POST" align="center">
	<div class="row">
		<label for="name">Your name:</label><br />
		<input id="name" class="input" name="name" type="text" value="" size="40"  /><br />
	</div>
	
	<div class="row">
		<label for="email">Your email:</label><br />
		<input id="email" class="input" name="email" type="text" value="" size="40" /><br />
	</div>
	
	<div class="row">
		<label for="name">Your mobile number:</label><br />
		<input id="number" class="input" name="number" type="text" value="" size="40"  /><br />
	</div>
	
	
	
	
	<input id="submit_button" type="submit" value="register" onclick="return rvalidation();"/>
	<input id="submit_button" type="reset" value="reset"/>
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
