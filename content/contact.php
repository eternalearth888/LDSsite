<?php include('includes/countries_array.php'); ?>
<?php include('includes/states_array.php'); ?>

<form name="coachForm" action="contactInfoSubmit.php" method="post">
	<table id="contactForm">
		<thead id="contactHead">
			<tr>
				<td colspan="2">
					Tell us about yourself!
				</td>
			</tr>
		</thead>
			<tr>
				<td id="left">First Name*</td>
				<td>
					<input type="text" name="firstName" />
				</td>
			</tr>
			<tr>
				<td id="left">Last Name*</td>
				<td>
					<input type="text" name="lastName" />
				</td>
			</tr>
			<tr>
				<td id="left">Title</td>
				<td>
					<input type="text" name="titleName" />
				</td>
			</tr>
		<thead id="companyHead">
			<tr><td colspan="2">Company Information</td></tr>
		</thead>
			<tr>
				<td id="left">Company</td>
				<td><input type="text" name="comName" /></td>
			</tr>
			<tr>
				<td id="left">Organization Size</td>
				<td>
					<select name="orgSize">
						<option value="">Selet Number of Employees</option>
						<option value="< 50">Less Than 50</option>
						<option value="50-250">50-250</option>
						<option value="251-1,000">251-1,000</option>
						<option value="1,001-10,000">1,001-10,000</option>
						<option value="10,001-40,000">10,001-40,000</option>
						<option value="> 40,000">Greater Than 40,000</option>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">Phone*</td>
				<td><input type="tel" name="comTel" /></td>
			</tr>
			<tr>
				<td id="left">Email*</td>
				<td><input type="email" name="comEmail" /></td>
			</tr>
			<tr>
				<td id="left">Address 1</td>
				<td><input type="text" name="comAdd1" /></td>
			</tr>
			<tr>
				<td id="left">Address 2</td>
				<td><input type="text" name="comAdd2" /></td>
			</tr>
			<tr>
				<td id="left">City</td>
				<td><input type="text" name="comCity" /></td>
			</tr>
			<tr>
				<td id="left">State</td>
				<td>
					<select name="states">
						<option value="">Select your State...</option>  
						<?php

						foreach($states as $key => $value) {

						?>
						<option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
						<?php

						}

						?>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">Zip/Postal Code</td>
				<td>
					<input type="number" name="comZip" />
				</td>
			</tr>
			<tr>
				<td id="left">Country</td>
				<td>
					<select name="countries">
						<option value="">Select your Country...</option>  
						<?php

						foreach($countries as $key => $value) {

						?>
						<option value="<?= $key ?>" title="<?= htmlspecialchars($value) ?>"><?= htmlspecialchars($value) ?></option>
						<?php

						}

						?>
					</select>
				</td>
			</tr>
			<tr>
				<td id="left">More Info</td>
				<td>
					<input name="comInfo" type="checkbox" value="Exectutive Coaching">Executive Coaching
					<br />
					<input name="comInfo" type="checkbox" value="Team Development">Team Development
					<br />
					<input name="comInfo" type="checkbox" value="Other">Other
				</td>
			</tr>
			<tr>
				<td id="left">Position</td>
				<td>
					<input name="position" type="checkbox" value="C-Suite Executive">C-Suite Executive
					<br />
					<input name="position" type="checkbox" value="HR Representative">HR Representative
					<br />
					<input name="position" type="checkbox" value="Other">Other
				</td>
			</tr>
		<thead id="extraHead">
			<tr>
				<td colspan="2">Please tell state your interests or needs</td>
			</tr>
		</thead>
			<tr>
				<td colspan="2">
					<textarea name="text" rows="5" cols="50"></textarea>
				</td>
			</tr>
			<tr>
				<td id="contactSubmit" colspan="2">
					<input type="submit" value="Submit Form" />
				</td>
			</tr>
			<tr>
				<td id="required" colspan="2">
					*Required Field
				</td>
			</tr>
	</table>
</form>
