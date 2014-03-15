<?php include('includes/countries_array.php'); ?>
<?php include('includes/states_array.php'); ?>

<form name="coachForm" action="submission.php" method="post">
	<table id="contactForm">
		<thead id="contactHead">
			<tr>
				<td colspan="3">
					Tell us about yourself!
				</td>
			</tr>
		</thead>
			<tr>
				<td id="left">
					Title
				</td>
				<td>
					<input type="radio" name="titleName" <?php if (isset($_POST['titleName']) && $_POST['titleName']=="Ms.") echo "checked";?>  value="Ms.">Ms.
					<input type="radio" name="titleName" <?php if (isset($_POST['titleName']) && $_POST['titleName']=="Mrs.") echo "checked";?>  value="Mrs.">Mrs.
					<input type="radio" name="titleName" <?php if (isset($_POST['titleName']) && $_POST['titleName']=="Mr.") echo "checked";?>  value="Mr.">Mr.
				</td>
				<td>
					<span class="error">* <?php echo $_POST['titleErr'];?></span>
				</td>
			</tr>
			<tr>
				<td id="left">
					First Name
				</td>
				<td>
					<input type="text" name="firstName" value="<?php echo $_POST['firstName']; ?>"/>
				</td>
				<td>
					<span class="error">* <?php echo $_POST['nameErr'];?></span>
				</td>
			</tr>
			<tr>
				<td id="left">
					Last Name
				</td>
				<td>
					<input type="text" name="lastName" value="<?php echo $_POST['lastName']; ?>" />
				</td>
				<td>
					<span class="error">* <?php echo $_POST['nameErr2'];?></span>
				</td>
			</tr>
		<thead id="companyHead">
			<tr>
				<td colspan="3">
					Company Information
				</td>
			</tr>
		</thead>
			<tr>
				<td id="left">
					Company
				</td>
				<td colspan="2">
					<input type="text" name="comName"  value="<?php echo $_POST['comName']; ?>"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Organization Size
				</td>
				<td colspan="2">
					<select name="orgSize">
						<option value="">Select Number of Employees</option>
						<option value="< 50">< 50</option>
						<option value="50-250">50-250</option>
						<option value="251-1,000">251-1,000</option>
						<option value="1,001-10,000">1,001-10,000</option>
						<option value="10,001-40,000">10,001-40,000</option>
						<option value="> 40,000">>40,000</option>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">
					Phone
				</td>
				<td>
					<input type="tel" name="comTel" value="<?php echo $_POST['comTel']; ?>" />
				</td>
				<td>
					<span class="error">* <?php echo $_POST['phoneErr'];?></span>
				</td>
			</tr>
			<tr>
				<td id="left">
					Email
				</td>
				<td>
					<input type="email" name="comEmail"  value="<?php echo $_POST['comEmail']; ?>"/>
				</td>
				<td>
					<span class="error">* <?php echo $_POST['emailErr'];?></span>
				</td>
			</tr>
			<tr>
				<td id="left">
					Site
				</td>
				<td colspan="2">
					<input type="text" name="comSite"  value="<?php echo $_POST['comSite']; ?>"/>
				</td>
				<td>
					<span class="error"><?php echo $_POST['websiteErr'];?></span>
				</td>
			<tr>
				<td id="left">
					Address 1
				</td>
				<td colspan="2">
					<input type="text" name="comAdd1"  value="<?php echo $_POST['comAdd1']; ?>"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Address 2
				</td>
				<td colspan="2">
					<input type="text" name="comAdd2" value="<?php echo $_POST['comAdd2']; ?>"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					City
				</td>
				<td colspan="2">
					<input type="text" name="comCity" value="<?php echo $_POST['comCity']; ?>"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					State
				</td>
				<td colspan="2">
					<select name="states">
						<option value="">Select your State...</option>  
							<?php foreach($states as $key => $value) { ?>
								<option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
							<?php } ?>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">
					Zip/Postal Code
				</td>
				<td colspan="2">
					<input type="number" name="comZip" value="<?php echo $_POST['comZip']; ?>" />
				</td>
			</tr>
			<tr>
				<td id="left">
					Country
				</td>
				<td colspan="2">
					<select name="countries">
						<option value="">Select your Country...</option>  
							<?php foreach($countries as $key => $value) { ?>
								<option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
							<?php }	?>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">
					More Info
				</td>
				<td colspan="2">
					<input name="EC" type="checkbox" value="Exectutive Coaching">Executive Coaching
					<br />
					<input name="TD" type="checkbox" value="Team Development">Team Development
					<br />
					<input name="info" type="checkbox" value="Other">Other
				</td>
			</tr>
			<tr>
				<td id="left">
					Position
				</td>
				<td colspan="2">
					<input name="CE" type="checkbox" value="C-Suite Executive">C-Suite Executive
					<br />
					<input name="HR" type="checkbox" value="HR Representative">HR Representative
					<br />
					<input name="position" type="checkbox" value="Other">Other
				</td>
			</tr>
		<thead id="extraHead">
			<tr>
				<td colspan="3">
					Please tell state your interests or needs
				</td>
			</tr>
		</thead>
			<tr>
				<td colspan="3">
					<textarea name="text" rows="5" cols="50"  value="<?php echo $POST['text']; ?>"></textarea>
				</td>
			</tr>
			<tr>
				<td id="contactSubmit" colspan="3">
					<input type="submit" value="Submit Form"/>
				</td>
			</tr>
			<tr>
				<td id="required" colspan="3">
					<span class="error">*Required Field</span>
				</td>
			</tr>
	</table>
</form>
