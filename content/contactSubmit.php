<?php include('content/submission_variables.php'); ?>

<table id="contactSubmission">
	<thead id="submissionHead">
		<tr>
			<td colspan="2">Basic Info</td>
		</tr>
	</thead>
	<tr>
		<td colspan="2" align="center">
			<?php echo $dateStamp ?>
		</td>
	</tr>
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
					$coachV = 1;
					echo "Executive Coaching";
					echo '<br />';
				} else {
					$coachV = 0;
				}
				if (isset($_POST['TD'])) {
					$teamV = 1;
					echo "Team Development";
					echo '<br />';
				} else {
					$teamV = 0;
				}
				if (isset($_POST['info'])) {
					$infoV = 1;
					echo "Other";
					echo '<br />';
				} else {
					$infoV = 0;
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
					$suiteV = 1;
					echo "C-Suite Executive";
					echo '<br />';
				} else {
					$suiteV = 0;
				}
				if (isset($_POST['HR'])) {
					$repV = 1;
					echo "HR Representative";
					echo '<br />';
				} else {
					$repV = 0;
				}
				if (isset($_POST['position'])) {
					$posV = 1;
					echo "Other";
					echo '<br />';
				} else {
					$posV = 0;
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
		<td colspan="2"><?php echo nl2br($details); ?></td>
	</tr>
</table>
<center>
	<?php include('sql/db_insert.php'); ?>
</center>