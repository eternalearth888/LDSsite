<?php include('includes/countries_array.php'); ?>
<?php include('includes/states_array.php'); ?>

<form name="coachForm" action="submission.php" method="post">
	<table id="contactForm">
		<thead id="contactHead">
			<tr>
				<td colspan="2">
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
			</tr>
			<tr>
				<td id="left">
					First Name
				</td>
				<td>
					<input type="text" name="firstName"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Last Name
				</td>
				<td>
					<input type="text" name="lastName"/>
				</td>
			</tr>
		<thead id="companyHead">
			<tr>
				<td colspan="2">
					Company Information
				</td>
			</tr>
		</thead>
			<tr>
				<td id="left">
					Company
				</td>
				<td colspan="2">
					<input type="text" name="comName"/>
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
					<input type="tel" name="comTel"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Email
				</td>
				<td>
					<input type="email" name="comEmail"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Site
				</td>
				<td colspan="2">
					<input type="text" name="comSite"/>
				</td>
			<tr>
				<td id="left">
					Address 1
				</td>
				<td colspan="2">
					<input type="text" name="comAdd1"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					Address 2
				</td>
				<td colspan="2">
					<input type="text" name="comAdd2"/>
				</td>
			</tr>
			<tr>
				<td id="left">
					City
				</td>
				<td colspan="2">
					<input type="text" name="comCity"/>
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
					<input type="number" name="comZip"/>
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
					<input name="CS" type="checkbox" value="C-Suite Executive">C-Suite Executive
					<br />
					<input name="HR" type="checkbox" value="HR Representative">HR Representative
					<br />
					<input name="position" type="checkbox" value="Other">Other
				</td>
			</tr>
		<thead id="extraHead">
			<tr>
				<td colspan="2">
					Please tell state your interests or needs
				</td>
			</tr>
		</thead>
			<tr>
				<td colspan="2">
					<textarea name="text" rows="5" cols="50"></textarea>
				</td>
			</tr>
			<tr>
				<td id="contactSubmit" colspan="2">
					<input type="submit" value="Submit Form"/>
				</td>
			</tr>
	</table>
</form>
