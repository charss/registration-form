<html>
	<head>
		<title></title>
		<link rel='stylesheet' href='style.css'>
	</head>
	<body>
		<?php
			$name = '';
		?>


		<form name='form' action='' method='get'>
			<div class='main'>
				<h1>Student Registration Form</h1>
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
						<input type="radio" name="expell" value="Yes">Yes
						<input type="radio" name="expell" value="No">No
					</p>
				</div>

				<div class='box_label'>Student Information</div>

				<div class='board'>
					<div class='container'>
						<p>
							<label>Full Legal Name:</label>
							<input type='text' name='last_name' placeholder='Last Name'>
							<input type='text' name='first_name' placeholder='First Name'>
							<input type='text' name='middle_name' placeholder='Middle Name'>
						</p>
					</div>

					<div class='container'>
						<p>
							<label>Preffered Name (if different):</label>
							<input type='text' name='pref_last_name' placeholder='Last Name'>
							<input type='text' name='pref_first_name' placeholder='First Name'>
							<input type='text' name='pref_middle_name' placeholder='Middle Name'>
						</p>
					</div>

					<div class='container' id='f_start'>
						<p id='gender'>
							<label>Gender:</label>
							<input type="radio" name="gender" value="Male">Male
							<input type="radio" name="gender" value="Female">Female
						</p>
				        <p id='birth'>
							<label>Date of Birth:</label>
							<input type='date' name='birthday'>
				        </p>

			        	<p id='below'>
			        		<label>If the student has other siblings in this school, please list them:</label>
			        		<input type='text' id='siblings' name='siblings'>
				        </p>
					</div>
				</div>
				

				<div class='board for_school_use' id='proof_birth'>
					<label><i>For School Use</i><b>- Proof of Birth</b>:</label>
					<input type="checkbox" name="OSR" value="OSR"><label for="vehicle1">Copy in OSR</label>

					<input type="checkbox" name="BAPTISMAL" value="BAPTISMAL"><label for="vehicle2">Baptismal Record</label>

					<input type="checkbox" name="BIRTH_REGISTRATION" value="BIRTH_REGISTRATION"><label for="vehicle2">Birth Registration</label>

					<input type="checkbox" name="BIRTH_CERTIFICATE" value="BIRTH_CERTIFICATE"><label for="vehicle2">Birth Certificate</label>

					<input type="checkbox" name="IMMIGRATION" value="IMMIGRATION"><label for="vehicle2">Immigration Papers/Card</label>

					<input type="checkbox" name="PASSPORT" value="PASSPORT"><label for="vehicle2">Passport</label>

					<input type="checkbox" name="OTHER_PROOF" value="OTHER_PROOF"><label for="vehicle2">Other</label>
				</div>

				<div class='box_label'>Previous School Information</div>
				<div class='board'>
					<div class='container'>
						<p>
							<label>Name of Previous School Board / Municipality:</label>
							<input type='text'name='PREV_SCHOOL_BOARD'>
						</p>
				        <p>
				        	<label>Last date attended:</label>
				        	<input type='date' name='LAST_DATE'>
				        </p>
					</div>

					<div class='container'>
						<p>
							<label>Name of Previous School:</label>
							<input type='text'name='PREVIOUS_SCHOOL'>
						</p>
				        <p>
				        	<label>Grade at previous school:</label>
				        	<input type='text'name='GRADE_PREV_SCHOOL'>
				        </p>
					</div>

					<div class='container'>
						<p id='language'>
			        		<label>Language Instruction:</label>
							<input type="checkbox" name="ENGLISH" value="ENGLISH">English

							<input type="checkbox" name="FRENCH" value="FRENCH">French

							<input type="checkbox" name="OTHER_LANG" value="OTHER_LANG">Other
						</p>

				        <p id='reason'>
				        	<label>Reason for Transfer:</label>
				        	<input type='text'name='TRANSFER_REASON'>
				        </p>
					</div>
				</div>
				
				<div class='board' id='proof_birth'>
					<p>
		        		<label><b>Did the student ever attend a Waterloo Region District School Board school in the past?</b></label>
						<input type="radio" name="WATERLOO" value="Yes">Yes

						<input type="radio" name="WATERLOO" value="No">No
						If yes, name school(s):
						<p>
					</p>

					<div class='container' id='no_board'>
						<p id='higher'>
							<input type='text'name='WATERLOO1'>
							<input type='text'name='WATERLOO2'>
							<input type='text'name='WATERLOO3'>
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
			        			<input type="radio" name="IMMUNIZATION" value="Yes">Yes

								<input type="radio" name="IMMUNIZATION" value="No">No
			        		</span>
				        </p>
				    </div>

				    <div class='container'>
				    	<p>
							<input type='text'name='MEDICAL_CONDITION'>
						</p>
				    </div>

				    <div class='container'>
				    	<p id='blank'>
							<input type='text'name='MEDICAL_CONDITION'>
						</p>

						<p id='epipen'>
		        			<label id='try'>Does the student require an epi-pen?</label>
		        			<input type="radio" name="EPIPEN" value="Yes">Yes

							<input type="radio" name="EPIPEN" value="No">No
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
									<input type='text' name='BIRTH_COUNTRY'>
								</p>
								<p>
									<label>If Canada, Province of Birth:</label>
									<input type='text' name='BIRTH_PROVINCE'>
								</p>
							</div>

							<div class='container'>
								<p>
									<label>Country of Citizenship:</label>
									<input type='text' name='CITIZENSHIP'>
								</p>
							</div>
								

							<div class='container'>
								<p>
									<label id='canada_text'>If student not born in Canada, provide date student entered Canada to live <b>for the first time</b>:</label>
								</p>
								<p>
									<input type='date' id='canada_date' name='CANADA_DATE'>
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
									<input type="checkbox" id="can_citizen" name="can_citizen" value="can_citizen">
									Canadian Citizen
									<input type="checkbox" id="perm_resident" name="perm_resident" value="perm_resident">Permanent Resident/Landed Immigrant
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" name="student_visa" value="student_visa">Study Permit/Student Visa
									<input type="checkbox" name="refugee" value="refugee">Refugee Claimant
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" name="native_ancestry" value="native_ancestry">Native Ancestry
								</p>
							</div>
							<div id='status'>
								<p class='container' id='no_board'>
									<span id='try'>
										<input type="checkbox" id="status_other" name="status_other" value="status_other"><label>Other (specify):</label>
									</span>
									<input type='text' name='status_text' />
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" name="osr_veri" value="osr_veri">Verification in OSR
								</p>
							</div>
						</div>
				    </div>
			    </div>
			</div>
		</form>


	</body>
</html>
