<!-- open database -->
<?php
@ $db = mysqli_connect('localhost', 'root', '', 'ldsexecu_submissions');

if (mysqli_connect_errno()) {
	echo "ERROR: Could not connect to database. Please try again later.";
	exit;
}

$query = "INSERT INTO submissions VALUES
	(
		'$address1',
		'$address2',
		'$city',
		'$state',
		'$country',
		'$code',
		'$details',
		'$site',
		'$coachV',
		'$teamV',
		'$infoV',
		'$suiteV',
		'$repV',
		'$posV',
		'$company',
		'$orgSize',
		'$fname',
		'$lname',
		'$title',
		'$dateStamp'
	)"
;

$result = $db->query($query);

if ($result) {
	echo $db->affect_rows." submission sent to database.";
} else {
	echo '<span class="error">'."ERROR: Submission not added to database Please try again".'</span>';
}

$db->close();
?>