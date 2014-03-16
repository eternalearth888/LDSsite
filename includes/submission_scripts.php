<!-- VARIABLE NAMES -->
<?php
	$dateStamp = date('H:i, jS F Y');
	$seperator = "-------------------------------";
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'] ;
	$title = $_POST['titleName'];
	$company = $_POST['comName'];
	$orgSize = $_POST['orgSize'];
	$phone = $_POST['comTel'];
	$email =$_POST['comEmail'];
	$site = $_POST['comSite'];
	$address1 = $_POST['comAdd1'];
	$address2 = $_POST['comAdd2'];
	$city = $_POST['comCity'];
	$state= $_POST['states'];
	$country = $_POST['countries'];
	$code = $_POST['comZip'];
	$details = $_POST['text'];
?>
<!-- ERROR CHECKING AND REDIRECTING -->
<?php
	if((!empty($nameErr)) || (!empty($nameErr2)) || (!empty($emailErr)) || (!empty($phoneErr)) || (!empty($websiteErr)) || (!empty($titleErr)))
    {
?>
	<form action="contact.php" method="POST" name="errorForm">
<?php
	foreach ($_POST as $a => $b) {
		echo "<input type='hidden' name='".htmlentities($a)."' value='".htmlentities($b)."'>";
	}
	if(!empty($nameErr)) {
			echo "<input type='hidden' name='nameErr' value='".htmlentities($nameErr)."'>";
		}
		if (!empty($nameErr2)) {
			echo "<input type='hidden' name='nameErr2' value='".htmlentities($nameErr2)."'>";
		}
		if (!empty($emailErr)) {
			echo "<input type='hidden' name='emailErr' value='".htmlentities($emailErr)."'>";
		}
		if (!empty($phoneErr)) {
			echo "<input type='hidden' name='phoneErr' value='".htmlentities($phoneErr)."'>";
		}
		if (!empty($websiteErr)) {
			echo "<input type='hidden' name='websiteErr' value='".htmlentities($websiteErr)."'>";
		}
		if (!empty($titleErr)) {
			echo "<input type='hidden' name='titleErr' value='".htmlentities($titleErr)."'>";
		}
?>
	</form>
	<script language="JavaScript">
		document.errorForm.submit();
	</script>
<?php
	} else {
		echo '<h2>'."Thank you for your submission!".'</h2>';
	}
?>