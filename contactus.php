<!DOCTYPE html>
<html>
<script>
function validateForm()
{
	var x=document.forms["coachForm"]["firstName"].value;
	if (x==null || x=="") {
  		alert("First name must be filled out");
  		return false;
  	}

  	var y=document.forms["coachForm"]["lastName"].value;
  	if (y==null || y=="") {
  		alert("Last name must be filled out");
  		return false;
  	}

	var z=document.forms["coachForm"]["comEmail"].value;
	var atpos=z.indexOf("@");
	var dotpos=z.lastIndexOf(".");
	if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length) {
 	 	alert("Not a valid e-mail address");
  		return false;
 	}
}
</script>
<?php require('includes/htmlmeta.php'); ?>

	<body>
		<?php require('includes/header.php'); ?>
		<div class="wrapper">
			<?php include('includes/LDSBlock.php'); ?>
			<div id="change">
				<?php require('content/contact.php'); ?>
			</div>
		</div>
		<?php require('includes/footer.php'); ?>
	</body>
</html>