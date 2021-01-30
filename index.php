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
				<div class='board'>
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
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Yes
						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">No
					</p>
				</div>

				<div class='box_label'>Student Information</div>

				<div class='board'>
					<div class='container'>
						<p>
							<label>Full Legal Name:</label>
							<input type='text' id='name_input' name='last_name' placeholder='Last Name'>
							<input type='text' id='name_input' name='first_name' placeholder='First Name'>
							<input type='text' id='name_input' name='middle_name' placeholder='Middle Name'>
						</p>
					</div>

					<div class='container'>
						<p>
							<label>Preffered Name (if different):</label>
							<input type='text' id='name_input' name='pref_last_name' placeholder='Last Name'>
							<input type='text' id='name_input' name='pref_first_name' placeholder='First Name'>
							<input type='text' id='name_input' name='pref_middle_name' placeholder='Middle Name'>
						</p>
					</div>

					<div class='container' id='f_start'>
						<p id='gender'>
							<label>Gender:</label>
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Male
							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">Female
						</p>
				        <p id='birth'>
							<label>Date of Birth:</label>
							<input type='date' name='reg_date' id='reg_date'>
			        		<script>
			        			document.getElementById('reg_date').valueAsDate = new Date();
			        		</script>

				        </p>

			        	<p id='below'>
			        		<label>If the student has other siblings in this school, please list them:</label>
			        		<input type='text' id='siblings' name='pref_last_name' placeholder='Last Name'>
				        </p>
					</div>
				</div>
				

				<div class='board' id='proof_birth'>
					<label><i>For School Use</i><b>- Proof of Birth</b>:</label>
					<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Copy in OSR</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Baptismal Record</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Birth Registration</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Birth Certificate</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Immigration Papers/Card</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Passport</label>

					<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Other</label>
				</div>

				<div class='box_label'>Previous School Information</div>
				<div class='board'>
					<div class='container'>
						<p>
							<label>Name of Previous School Board / Municipality:</label>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
						</p>
				        <p>
				        	<label>Last date attended:</label>
				        	<input type='text'name='pref_last_name' placeholder='Last Name'>
				        </p>
					</div>

					<div class='container'>
						<p>
							<label>Name of Previous School:</label>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
						</p>
				        <p>
				        	<label>Grade at previous school:</label>
				        	<input type='text'name='pref_last_name' placeholder='Last Name'>
				        </p>
					</div>

					<div class='container'>
						<p id='language'>
			        		<label>Language Instruction:</label>
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">English

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">French

							<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">Other
						</p>

				        <p id='reason'>
				        	<label>Reason for Transfer:</label>
				        	<input type='text'name='pref_last_name' placeholder='Last Name'>
				        </p>
					</div>
				</div>
				
				<div class='board' id='proof_birth'>
					<p>
		        		<label><b>Did the student ever attend a Waterloo Region District School Board school in the past?</b></label>
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Yes

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">No
						If yes, name school(s):
						<p>
					</p>

					<div class='container' id='no_board'>
						<p id='higher'>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
						</p>
					</div>
				</div>

				<div class='box_label'>Health Information</div>
				<div class='board'>
					<div class='container' id='medical'>
						<p>
							<label>Medical conditions (include information on special equipment or medication if required:)</label>
						</p>

						<p id='below'>
			        		<label><b>For School Use</b></label>
			        		<span>
			        			<label>Immunization Record provided:</label>
			        			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Yes

								<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">No
			        		</span>
				        </p>
				    </div>

				    <div class='container'>
				    	<p>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
						</p>
				    </div>

				    <div class='container'>
				    	<p id='blank'>
							<input type='text'name='pref_last_name' placeholder='Last Name'>
						</p>

						<p id='epipen'>
		        			<label id='try'>Does the student require an epi-pen?</label>
		        			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Yes

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">No
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
									<input type='text'name='pref_last_name' placeholder='Last Name'>
								</p>
								<p>
									<label>If Canada, Province of Birth:</label>
									<input type='text'name='pref_last_name' placeholder='Last Name'>
								</p>
							</div>

							<div class='container'>
								<p>
									<label>Country of Citizenship:</label>
									<input type='text'name='pref_last_name' placeholder='Last Name'>
								</p>
							</div>
								

							<div class='container'>
								<p>
									<label>If student not born in Canada, provide data student entered Canada to live for the first time:</label>
								</p>
								<p id='f_end'>
									<input type='text'name='pref_last_name' placeholder='Last Name'>
								</p>
							</div>
						</span>

						<div class='board'>
							<div id=''>
								<p>
									<label><i>For School Use</i> - <b>Status in Canada:</b></label>
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" id="can_citizen" name="can_citizen" value="Bike">
									Canadian Citizen
									<input type="checkbox" id="perm_resident" name="vehicle2" value="Car">Permanent Resident/Landed Immigrant
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Study Permit/Student Visa
									<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">Refugee Claimant
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Native Ancestry
								</p>
							</div>
							<div id='status'>
								<p class='container' id='no_board'>
									<span id='try'>
										<input type="checkbox" id="status_other" name="vehicle1" value="Bike">Other (specify):
									</span>
									<input type='text' name='permission_register' />
								</p>
							</div>
							<div id='status'>
								<p>
									<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">Verification in OSR
								</p>
							</div>
						</div>
				    </div>
			    </div>
			</div>
		</form>


	</body>
</html>
