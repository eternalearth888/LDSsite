<?php include('includes/error_form.php'); ?>
<?php
	//create variable names
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
?>
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

<table id="contactSubmission">
		<tr>
			<td colspan="2" align="center"><?php echo $dateStamp ?></td>
		</tr>
		<tr>
			<td colspan="2"></td>
		</tr>
	<thead id="submissionHead">
		<tr>
			<td colspan="2">Basic Info</td>
		</tr>
	</thead>
	<tr>
		<td id="left">Title</td>
		<td><?php echo $title ?></td>
	</tr>
	<tr>
		<td id="left">Name</td>
		<td><?php echo $lname.','.$fname ?></td>
	</tr>
	<thead id="submissionHead">
		<tr>
			<td colspan="2">Company Info</td>
		</tr>
	</thead>
	<tr>
		<td id="left">Company Name</td>
		<td><?php echo $company ?></td>
	</tr>
	<tr>
		<td id="left">Size</td>
		<td><?php echo $orgSize ?></td>
	</tr>
	<tr>
		<td id="left">Phone</td>
		<td><?php echo $phone ?></td>
	</tr>
	<tr>
		<td id="left">Email</td>
		<td><?php echo $email ?></td>
	</tr>
	<tr>
		<td id="left">Site</td>
		<td><?php echo $site ?></td>
	<tr>
		<td id="left">Address</td>
		<td><?php 
				echo $address1.'<br />';
				echo $address2.'<br />';
				echo $city;
				if ($state == "") {
					echo "";
				} else {
					echo ','.$state;
				}
				echo '<br />'.$code.'<br />';
				echo $country.'<br />';
		 	?>
		</td>
	</tr>
	<tr>
		<td id="left">Seeking</td>
		<td>
			<?php
				if (isset($_POST['EC'])) {
					echo "Executive Coaching";
					echo '<br />';
				}
				if (isset($_POST['TD'])) {
					echo "Team Development";
					echo '<br />';
				}
				if (isset($_POST['info'])) {
					echo "Other";
					echo '<br />';
				}
				if ( (!(isset($_POST['EC']))) && (!(isset($_POST['TD']))) && (!(isset($_POST['info']))) ){
					echo "N/A";
				}
			?>
		</td>
	</tr>
	<tr>
		<td id="left">Position(s)</td>
		<td>
			<?php
				if (isset($_POST['CS'])) {
					echo "C-Suite Executive";
					echo '<br />';
				}
				if (isset($_POST['HR'])) {
					echo "HR Representative";
					echo '<br />';
				}
				if (isset($_POST['position'])) {
					echo "Other";
					echo '<br />';
				}
				if ( (!(isset($_POST['CS']))) && (!(isset($_POST['HR']))) && (!(isset($_POST['position']))) ){
					echo "N/A";
				}
			?>
		</td>
	</tr>
	<thead id="submissionHead">
		<tr>
			<td colspan="2">Details</td>
		</tr>
	</thead>
	<tr>
		<td colspan="2"><?php echo nl2br($_POST['text']); ?></td>
	</tr>
</table>