<?php
	@ $db = mysqli_connect('localhost', 'root', '', 'ldsexecu_submissions');

	if (mysqli_connect_errno()) {
		echo "ERROR: Could not connect to database. Please try again later.";
		exit;
	}

	if ($db) {
		$query = "SELECT * FROM submissions";
		$result = mysqli_query($db, $query);

		if ($result) {
			$num_results = mysqli_num_rows($result);

			if (is_null($num_results)) {
				echo '<h2>'.'Database is Null'.'</h2>';
			} else if {
				echo '<h2>'.'No data in database. Try again later.'.'</h2>';
			} else {
				echo '<h2>'.'Database results:'.'</h2>';
				for ($i = 0; $i <= $num_results; $i++) {
					$row = mysqli_fetch_object($result);
					$row->title;
				}
			}
		}
	} else {
		echo "Database NOT Found ";
	}
	$db->close();
?>
