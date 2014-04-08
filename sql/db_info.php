<!DOCTYPE html>
<html>
<meta name="viewport" content="user-scalable=0;"/>
<meta name="description" content="LDS Executive Coaching: Transforming business through Leadership, Development, Solutions ">
<meta name="keywords" content="Dr. Elia Gourgouris, Executive, Coaching, LDS, Leadership, Development, Solutions, executive coaching">
<meta charset="UTF-8">
<head>
	<title> LDS Executive Coaching</title>
	<link rel="stylesheet" type="text/css" href="../css/display2.css">
	<!--[if lt IE 9]> <script src="html5shiv.js"></script> <![endif]-->
</head>
	<body>
<?php
	/* Create a new mysqli object with database connection parameters */
   @ $db = new mysqli('localhost', 'root', '', 'ldsexecu_submissions');

   if(mysqli_connect_errno()) {
      echo "Connection Failed: " . mysqli_connect_errno();
      exit();
   }
?>
<?php
	$id=$_GET['id'];
	if ($db) {
		$stmt = $db->prepare("SELECT * FROM submissions WHERE id=?");

		if ($stmt->bind_param("i", $id)) {
		   echo "Query success!";
		} else {
			echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
		}
 		 /* Bind results */
		$stmt->bind_result( $id,
					$address1,
					$address2,
					$city,
					$state,
					$country,
					$code,
					$details,
					$site,
					$coachV,
					$teamV,
					$infoV,
					$suiteV,
					$repV,
					$posV,
					$company,
					$orgSize,
					$phone,
					$email,
					$fname,
					$lname,
					$title,
					$dateStamp
				);

		if (!$stmt->execute()) {
		    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
		} else {
		    /* Fetch the value */
		    $stmt->fetch();
		}
?>
	<table class="displayTable" align="center">
			<thead class="displayHead1">
				<tr>
					<td colspan="9">Personal Info</td>
				</tr>
			</thead>
			<thead class="displayHead2">
				<tr>
					<td colspan="2" align="center">Submitted</td>
					<td>Title</td>
					<td>First Name</td>
					<td>Last Name</td>
					<td>Phone</td>
					<td colspan="3" align="right">Email</td>
				</tr>
			</thead>
			<tr>
<?php
	echo '<td colspan="2" align="center">'.$dateStamp.'</td>';
	echo '<td>'.$title.'</td>';
	echo '<td>'.$fname.'</td>';
	echo '<td>'.$lname.'</td>';
	echo '<td>'.$phone.'</td>';
	echo '<td colspan="3" align="right">'.$email.'</td>';
?>
	</tr>
		<thead class="displayHead1">
			<tr>
				<td colspan="9">Company Info</td>
			</tr>
		</thead>
		<thead class="displayHead2">
			<tr>
				<td>Company</td>
				<td>Size</td>
				<td>Website</td>
				<td>Add. 1</td>
				<td>Add. 2</td>
				<td>City</td>
				<td>State</td>
				<td>Country</td>
				<td>ZipCode</td>
			</tr>
		</thead>
		<tr>
		<?php
	echo '<td >'.$company.'</td>';
	echo '<td >'.$orgSize.'</td>';
	echo '<td >'.$site.'</td>';
	echo '<td >'.$address1.'</td>';
	echo '<td >'.$address2.'</td>';
	echo '<td >'.$city.'</td>';
	echo '<td >'.$state.'</td>';
	echo '<td >'.$country.'</td>';
	echo '<td >'.$code.'</td>';
?>
	</tr>
	<thead class="displayHead1">
		<tr>
			<td colspan="4">Seeking</td>
			<td colspan="5">Position</td>
		</tr>
	</thead>
	<thead align="center" >
		<tr>
			<td colspan="2">Executive Coaching</td>
			<td>Team Development</td>
			<td>Other</td>
			<td>C-Suite Exec</td>
			<td colspan="3">HR-Representative</td>
			<td>Other</td>
		</tr>
	</thead>
	<tr>
<?php
	echo '<td  colspan="2">'.$coachV.'</td>';
	echo '<td >'.$teamV.'</td>';
	echo '<td >'.$infoV.'</td>';
	echo '<td >'.$suiteV.'</td>';
	echo '<td  colspan="3">'.$repV.'</td>';
	echo '<td >'.$posV.'</td>';
?>
	</tr>
	<thead class="displayHead1">
	</tr>
		<td colspan="9">Details</td>
	</tr>
	</thead>
	<tr>
<?php
	echo '<td colspan="9">'.$details.'</td>';
?>
	</tr>
</table>
<?php
			    /* Close statement */
		    	$stmt->close();
	} else {
		echo '<h1>DATABASE NOT FOUND: CONTACT WEBMASTER</h1>';
	}			
?>	
<?php
	$db->close();
?>
	</body>
</html>