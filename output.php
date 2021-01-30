<html>
	<head>
		<title></title>
		<link rel='stylesheet' href='style2.css'>
	</head>
	<body>
		<?php
			session_start();
			$stud_number = $_GET['stud_number'];
			$expell = $_GET['expell'];
			$last_name = $_GET['last_name'];
			$first_name = $_GET['first_name'];
			$middle_name = $_GET['middle_name'];
			$pref_last_name = $_GET['pref_last_name'];
			$pref_first_name = $_GET['pref_first_name'];
			$pref_middle_name = $_GET['pref_middle_name'];
			$gender = $_GET['gender'];
			$birthday = $_GET['birthday'];
			$siblings = $_GET['siblings'];
			$proof = $_GET['proof'];
			$prev_school_board = $_GET['PREV_SCHOOL_BOARD'];
			$last_date = $_GET['LAST_DATE'];
			$previous_school = $_GET['PREVIOUS_SCHOOL'];
			$grade_prev_school = $_GET['GRADE_PREV_SCHOOL'];
			$language_ins = $_GET['language_ins'];
			$transfer_reason = $_GET['TRANSFER_REASON'];
			$waterloo = $_GET['WATERLOO'];
			$waterloo1 = $_GET['WATERLOO1'];
			$waterloo2 = $_GET['WATERLOO2'];
			$waterloo3 = $_GET['WATERLOO3'];
			$immunization = $_GET['IMMUNIZATION'];
			$medical_condition = $_GET['MEDICAL_CONDITION'];
			$medical_condition2 = $_GET['MEDICAL_CONDITION2'];
			$epipen = $_GET['EPIPEN'];
			$birth_country = $_GET['BIRTH_COUNTRY'];
			$birth_province = $_GET['BIRTH_PROVINCE'];
			$citizenship = $_GET['CITIZENSHIP'];
			$canada_date = $_GET['CANADA_DATE'];
			$canada_status = $_GET['canada_status'];
			$status_text = $_GET['status_text'];
		?>

		<div class='main'>
			<h1>Student Information</h1>
			<div class='board for_school_use'>
				<div class='container'>
					<p>
						<label for='form'><i>For School Use</i><b>-Permission to Register:</b></label>
						<input type='text' name='permission_register'>
					</p>
			        <p>
	        			<label>Date:</label>
	        			<input type='date' name='reg_date' id='reg_date'>
		        		<script>
		        			document.getElementById('reg_date').valueAsDate = new Date();
		        		</script>
			        </p>
			        <p>
						<input type="checkbox" name="ESL" value="ESL">ESL
						<input type="checkbox" name="SPED" value="SPED">SPED
						<input type="checkbox" name="IPRC" value="IPRC">IPRC
						<input type="checkbox" name="ISA" value="ISA">ISA
			        </p>
				</div>

				<div class='container'>
					<p>
						<label>Student Number:</label>
						<input type='text' name='stud_number'>
					</p>

			        <p>
		        		<label>Entry Date:</label>
			        	<input type='text' name='entry_date'>
			        </p>
			        <p>
		        		<label>Entry Type:</label>
		        		<input type='text' name='entry_type'>
			        </p>
			        <p>
		        		<label>Grade:</label>
		        		<input type='text' name='grade'>
			        </p>
				</div>

				<div class='container'>
					<p>
						<label>OEN:</label>
						<input type='text' name='oen'>
					</p>
			        <p>
		        		<label>Class/Homeform:</label>
    					<input type='text' name='homeform'>
        			</p>
				</div>
			</div>

			<div class='board' id='expell_div'>
				<p id='expell'>
					<label>Is the student currently expelled from any school or school board?</label>
					<input type="radio" name="expell" <?php echo($expell == 'Yes' ? 'checked="checked"' : ''); ?> disabled>Yes
					<input type="radio" name="expell" <?php echo($expell == 'No' ? 'checked="checked"' : ''); ?> disabled>No
				</p>
			</div>

			<div class='box_label'>Student Information</div>

			<div class='board'>
				<div class='container'>
					<p>
						<label>Full Legal Name:</label>
						<input type='text' disabled placeholder="Last Name" <?php echo("value=$last_name"); ?> >
						<input type='text' disabled placeholder="First Name" <?php echo("value=$first_name"); ?> >
						<input type='text' disabled placeholder="Middle Name" <?php echo("value=$middle_name"); ?> >
					</p>
				</div>

				<div class='container'>
					<p>
						<label>Preffered Name (if different):</label>
						<input type='text' disabled placeholder="Last Name" <?php echo("value=$pref_last_name"); ?> >
						<input type='text' disabled placeholder="First Name" <?php echo("value=$pref_first_name"); ?> >
						<input type='text' disabled placeholder="Middle Name" <?php echo("value=$pref_middle_name"); ?> >
					</p>
				</div>

				<div class='container' id='f_start'>
					<p id='gender'>
						<label>Gender:</label>
						<input type="radio" name="gender" <?php echo($gender == 'Male' ? 'checked="checked"' : ''); ?> disabled>Male
						<input type="radio" name="gender" <?php echo($gender == 'Female' ? 'checked="checked"' : ''); ?> disabled>Female
					</p>
			        <p id='birth'>
						<label>Date of Birth:</label>
						<input type='date' name='birthday' value="<?php echo $birthday?>">

			        </p>

		        	<p id='below'>
		        		<label>If the student has other siblings in this school, please list them:</label>
		        		<input type='text' disabled  <?php echo("value=$siblings"); ?>>

			        </p>
				</div>
			</div>
			

			<div class='board for_school_use' id='proof_birth'>
				<label><i>For School Use</i><b>- Proof of Birth</b>:</label>

				<input type="checkbox" <?php echo((in_array("OSR", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Copy in OSR</label>

				<input type="checkbox" <?php echo((in_array("BAPTISMAL", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Baptismal Record</label>

				<input type="checkbox" <?php echo((in_array("BIRTH_REGISTRATION", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Birth Registration</label>

				<input type="checkbox" <?php echo((in_array("BIRTH_CERTIFICATE", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Birth Certificate</label>

				<input type="checkbox" <?php echo((in_array("IMMIGRATION", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Immigration Papers/Card</label>

				<input type="checkbox" <?php echo((in_array("PASSPORT", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Passport</label>

				<input type="checkbox" <?php echo((in_array("OTHER_PROOF", $proof)) ? 'checked="checked"' : ''); ?> disabled><label>Other</label>
			</div>

			<div class='box_label'>Previous School Information</div>
			<div class='board'>
				<div class='container'>
					<p>
						<label>Name of Previous School Board / Municipality:</label>
						<input type='text' disabled  <?php echo("value=$prev_school_board"); ?>>
					</p>
			        <p>
			        	<label>Last date attended:</label>
			        	<input type='date' name='birthday' value="<?php echo $last_date?>">
			        </p>
				</div>

				<div class='container'>
					<p>
						<label>Name of Previous School:</label>
						<input type='text' disabled  <?php echo("value=$previous_school"); ?>>
					</p>
			        <p>
			        	<label>Grade at previous school:</label>
			        	<input type='text' disabled  <?php echo("value=$grade_prev_school"); ?>>
			        </p>
				</div>

				<div class='container'>
					<p id='language'>
		        		<label>Language Instruction:</label>
		        		<input type="checkbox" <?php echo((in_array("ENGLISH", $language_ins)) ? 'checked="checked"' : ''); ?> disabled><label>English</label>

		        		<input type="checkbox" <?php echo((in_array("FRENCH", $language_ins)) ? 'checked="checked"' : ''); ?> disabled><label>French</label>

		        		<input type="checkbox" <?php echo((in_array("OTHER_LANG", $language_ins)) ? 'checked="checked"' : ''); ?> disabled><label>Other</label>
					</p>

			        <p id='reason'>
			        	<label>Reason for Transfer:</label>
			        	<input type='text' disabled  <?php echo("value=$transfer_reason"); ?>>
			        </p>
				</div>
			</div>
			
			<div class='board' id='proof_birth'>
				<p>
	        		<label><b>Did the student ever attend a Waterloo Region District School Board school in the past?</b></label>
	        		<input type="radio" <?php echo($waterloo == 'Yes' ? 'checked="checked"' : ''); ?> disabled>Yes
	        		<input type="radio" <?php echo($waterloo == 'No' ? 'checked="checked"' : ''); ?> disabled>No
					If yes, name school(s):
				</p>

				<div class='container' id='no_board'>
					<p id='higher'>
						<input type='text' disabled  <?php echo("value=$waterloo1"); ?>>
						<input type='text' disabled  <?php echo("value=$waterloo2"); ?>>
						<input type='text' disabled  <?php echo("value=$waterloo3"); ?>>
					</p>
				</div>
			</div>

			<div class='box_label'>Health Information</div>
			<div class='board'>
				<div class='container' id='medical'>
					<p>
						<label>Medical conditions (include information on special equipment or medication if required:)</label>
					</p>

					<p id='below' class='for_school_use board'>
		        		<label><b>For School Use</b></label>
		        		<span>
		        			<label>Immunization Record provided:</label>
		        			<input type="radio" <?php echo($immunization == 'Yes' ? 'checked="checked"' : ''); ?> disabled>Yes
		        			<input type="radio" <?php echo($immunization == 'No' ? 'checked="checked"' : ''); ?> disabled>No
		        		</span>
			        </p>
			    </div>

			    <div class='container'>
			    	<p>
						<input type='text' disabled  <?php echo("value=$medical_condition"); ?>>
					</p>
			    </div>

			    <div class='container'>
			    	<p id='blank'>
						<input type='text' disabled  <?php echo("value=$medical_condition2"); ?>>
					</p>

					<p id='epipen'>
	        			<label id='try'>Does the student require an epi-pen?</label>
	        			<input type="radio" name="gender" <?php echo($epipen == 'Yes' ? 'checked="checked"' : ''); ?> disabled>Yes
	        			<input type="radio" name="gender" <?php echo($epipen == 'No' ? 'checked="checked"' : ''); ?> disabled>No
			        </p>
			    </div>
			</div>
			

		    <div class='box_label'>Citizen Information</div>
		    <div class='board'>
		    	<div class='container'>
			    	<span>
						<div class='container'>
							<p>
								<label>Birth Country:</label>
								<input type='text' disabled  <?php echo("value=$birth_country"); ?>>
							</p>
							<p>
								<label>If Canada, Province of Birth:</label>
								<input type='text' disabled  <?php echo("value=$birth_province"); ?>>
							</p>
						</div>

						<div class='container'>
							<p>
								<label>Country of Citizenship:</label>
								<input type='text' disabled  <?php echo("value=$citizenship"); ?>>
							</p>
						</div>
							

						<div class='container'>
							<p>
								<label id='canada_text'>If student not born in Canada, provide date student entered Canada to live <b>for the first time</b>:</label>
							</p>
							<p>
								<input type='date' name='birthday' value="<?php echo $canada_date?>">
							</p>
						</div>
					</span>

					<div class='board for_school_use'>
						<div>
							<p>
								<label><i>For School Use</i> - <b>Status in Canada:</b></label>
							</p>
						</div>
						<div id='status'>
							<p>
								<input type="checkbox" <?php echo((in_array("can_citizen", $canada_status)) ? 'checked="checked"' : '');?> >Canadian Citizen
								<input type="checkbox" <?php echo((in_array("perm_resident", $canada_status)) ? 'checked="checked"' : '');?> >Resident/Landed Immigrant
							</p>
						</div>
						<div id='status'>
							<p>
								<input type="checkbox" <?php echo((in_array("student_visa", $canada_status)) ? 'checked="checked"' : '');?> >Study Permit/Student Visa
								<input type="checkbox" <?php echo((in_array("refugee", $canada_status)) ? 'checked="checked"' : '');?> >Refugee Claimant
							</p>
						</div>
						<div id='status'>
							<p>
								<input type="checkbox" <?php echo((in_array("native_ancestry", $canada_status)) ? 'checked="checked"' : '');?> >Native Ancestry
							</p>
						</div>
						<div id='status'>
							<p class='container' id='no_board'>
								<span id='try'>
									<input type="checkbox" <?php echo((in_array("status_other", $canada_status)) ? 'checked="checked"' : '');?> ><label>Other (specify):</label>
								</span>
								<input type='text' disabled  <?php echo("value=$status_text"); ?>>
							</p>
						</div>
						<div id='status'>
							<p>
								<input type="checkbox" <?php echo((in_array("osr_veri", $canada_status)) ? 'checked="checked"' : '');?> >Verification in OSR
							</p>
						</div>
					</div>
			    </div>
		    </div>
		</div>


	</body>
</html>
