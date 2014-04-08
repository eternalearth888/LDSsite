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
				echo '<h1>'.'Database results:'.'</h1>';
?>

	<table id="displayTable">
	<thead class="displayHead1">
		<tr>
			<td align="right">ID</td>
			<td colspan="2" align="center">Submitted</td>
			<td align="left">Title</td>
			<td align="left">First Name</td>
			<td align="left">Last Name</td>
			<td align="right">Phone</td>
			<td colspan="2" align="right">Email</td>
			<td align="center"> More Info</td>
		</tr>
	</thead>
<?php
		for ($i = 0; $i < $num_results; $i++) {
			$row = $result->fetch_assoc();
?>

		<tr>
<?php
	echo '<td align="right">'.$row['id'].'</td>';
	echo '<td colspan="2" align="center">'.$row['stamp'].'</td>';
	echo '<td align="left">'.$row['title'].'</td>';
	echo '<td align="left">'.$row['first_name'].'</td>';
	echo '<td align="left">'.$row['last_name'].'</td>';
	echo '<td align="right">'.$row['phone'].'</td>';
	echo '<td colspan="2" align="right">'.$row['email'].'</td>';
	echo '<td colspan="2" align="center"><a href="sql/db_info.php?id='.$row['id'].'" target="_blank">View</a></td>';
?>
	</tr>

<?php
			}
?>
</table>
<?php
		}
	}
}
	$db->close();
?>