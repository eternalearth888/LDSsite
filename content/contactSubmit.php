<?php include('includes/error_form.php'); ?>
<?php include('includes/submission_scripts.php'); ?>

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
				$exec = 0;
				$team = 0;
				$info = 0;
				if (isset($_POST['EC'])) {
					$exec = 1;
					echo "Executive Coaching";
					echo '<br />';
				}
				if (isset($_POST['TD'])) {
					$team = 1;
					echo "Team Development";
					echo '<br />';
				}
				if (isset($_POST['info'])) {
					$info = 1;
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
				$suite = 0;
				$rep = 0;
				$pos = 0;
				if (isset($_POST['CS'])) {
					$suite = 1;
					echo "C-Suite Executive";
					echo '<br />';
				}
				if (isset($_POST['HR'])) {
					$rep = 1;
					echo "HR Representative";
					echo '<br />';
				}
				if (isset($_POST['position'])) {
					$pos = 1;
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
		<td colspan="2"><?php echo nl2br($details); ?></td>
	</tr>
</table>

<?php include('includes/submission_database.php'); ?>