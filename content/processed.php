<h2>Thank you for your submission!</h2>
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
	$address1 = $_POST['comAdd1'];
	$address2 = $_POST['comAdd2'];
	$city = $_POST['comCity'];
	$state= $_POST['states'];
	$country = $_POST['countries'];
	$code = $_POST['comZip'];
?>

<table id="contactSubmission">
		<tr>
			<td colspan="2"><?php echo $dateStamp ?></td>
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
				if(empty($_POST['comInfo'])){
				    echo "N/A";
				}else{
				    $N = count($_POST['comInfo']);
				    for( $i = 0; $i <= $N; ++$i){
				        echo $_POST['comInfo'][$i];
				    }
				    echo "\n";
				}
			?>
		</td>
	</tr>
	<tr>
		<td id="left">Position(s)</td>
		<td>
			<?php
				if(empty($_POST['position'])){
				    echo "N/A";
				}else{
				    $M = count($_POST['position']);
				    for( $j = 0; $j <= $M; ++$j){
				        echo $_POST['position'][$j];
				    }
				    echo "\n";
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


<!-- WRITING TO FILE -->
<?php
	$outputString = $seperator."\n".$date."\n".$seperator."\n";
	/**open file for appending**/
	@ $fp = fopen("database/submissions.txt",'ab');

	if (!$fp) {
		echo "<h3>Your submission could not be processed at this time.Please try again later.</h3>";
		exit;
	}
	if ($finalTotal != 0) {
		flock($fp, LOCK_EX);
					
		/**WRITE TO FILE**/
		fwrite($fp, $outputString, strlen($outputString));

		/**CLOSE FILE**/
		flock($fp, LOCK_UN);
		fclose($fp);

		echo "<h3>Submission Processed</h3>";
	}
?>