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
				echo '<h2>'.'No data in the database. Please come and try again later'.'</h2>';
			} else {
				echo '<h2>'.'Database results:'.'</h2>';
				for ($i = 0; $i < $num_results; $i++) {
					$row = $result->fetch_assoc();
?>
	<table id="displayTable">
		<thead class="displayHead1">
			<tr>
				<td colspan="9">Personal Info</td>
			</tr>
		</thead>
		<thead class="displayHead2">
			<tr>
				<td>ID</td>
				<td colspan="2">Submitted</td>
				<td>Title</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Phone</td>
				<td colspan="2">Email</td>
			</tr>
		</thead>
		<tr>
<?php
	echo '<td class="cell">'.$row['id'].'</td>';
	echo '<td class="cell" colspan="2">'.$row['stamp'].'</td>';
	echo '<td class="cell">'.$row['title'].'</td>';
	echo '<td class="cell">'.$row['first_name'].'</td>';
	echo '<td class="cell">'.$row['last_name'].'</td>';
	echo '<td class="cell">'.$row['phone'].'</td>';
	echo '<td class="cell" colspan="2">'.$row['email'].'</td>';
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
	echo '<td class="cell">'.$row['company_name'].'</td>';
	echo '<td class="cell">'.$row['company_size'].'</td>';
	echo '<td class="cell">'.$row['site'].'</td>';
	echo '<td class="cell">'.$row['address_1'].'</td>';
	echo '<td class="cell">'.$row['address_2'].'</td>';
	echo '<td class="cell">'.$row['city'].'</td>';
	echo '<td class="cell">'.$row['state'].'</td>';
	echo '<td class="cell">'.$row['country'].'</td>';
	echo '<td class="cell">'.$row['zipcode'].'</td>';
?>
	</tr>
	<thead class="displayHead1">
		<tr>
			<td colspan="4">Seeking</td>
			<td colspan="5">Position</td>
		</tr>
	</thead>
	<thead class="displayHead2">
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
	echo '<td class="cell" colspan="2">'.$row['exec_coaching'].'</td>';
	echo '<td class="cell">'.$row['team_develop'].'</td>';
	echo '<td class="cell">'.$row['more_other'].'</td>';
	echo '<td class="cell">'.$row['c_suite'].'</td>';
	echo '<td class="cell" colspan="3">'.$row['hr_rep'].'</td>';
	echo '<td class="cell">'.$row['position'].'</td>';
?>
	</tr>
	<thead class="displayHead1">
	</tr>
		<td colspan="9">Details</td>
	</tr>
	</thead>
	<tr>
<?php
	echo '<td colspan="9">'.$row['paragraph'].'</td>';
?>
	</tr>
</table>
<?php
	}
?>
<?php
			}
		}
	} else {
		echo "Database NOT Found ";
	}
	$db->close();
?>