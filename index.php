<html>
	<head><title>Student Registration Form</title></head>
	<link rel='stylesheet' href='style.css'>
	<body>
		<?php
			$name = '';
		?>
		<div class='main'>
			<p class='title'>Student Registration Form</p>
			<div class='boxes'>
				<div class='container first'>
					<div class="one">
						<form name='form' action='' method='get'>
							<i>For School Use</i><b>-Permission to Register:</b>
							<input type='text' name='permission_register'>
						</form>
					</div>
			        <div class="two">
			        	<form name='form' action='' method='get'>
			        		Date:
			        		<input type='date' name='reg_date' id='reg_date'>
			        		<script>
			        			document.getElementById('reg_date').valueAsDate = new Date();
			        		</script>
			        	</form>
			        	
			        </div>
			        <div class="three" id=''>
			        	<form action="/action_page.php">
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">ESL</label>

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">SPED</label>

							<input type="checkbox" id
							="vehicle3" name="vehicle3" value="Boat"><label for="vehicle3">IPRC</label>
							<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"><label for="vehicle3">ISA</label>
						</form>
			        </div>
				</div>

				<div class='container second'>
					<div class="one">
						<form name='form' action='' method='get'>
							<span class='a'>
								Student Number:
							</span>
								<input type='text' class='b' name='stud_number'>
							
						</form>
					</div>
			        <div class="two">
			        	<form name='form' action='' method='get'>
				        	<p>
				        		Entry Date:
				        		<input type='text' name='entry_date'>
				        	</p>
				        </form>
			        </div>
			        <div class="three">
			        	<form name='form' action='' method='get'>
				        	<p>
				        		Entry Type:
				        		<input type='text' name='entry_type'>
				        	</p>
				        </form>
			        </div>
			        <div class="four">
			        	<form name='form' action='' method='get'>
				        	<p>
				        		Grade:
				        		<input type='text' name='grade'>
				        	</p>
				        </form>
			        </div>
				</div>

				<div class='container second'>
					<div class="one">
						<form name='form' action='' method='get'>
							<p>
								OEN: 
								<input type='text' name='oen'>
							</p>
						</form>
					</div>
			        <div class="two">
			        	<form name='form' action='' method='get'>
			        		<p>
			        			Class/Homeform:
			        			<input type='text' name='homeform'>
			        		</p>
			        	</form>
			        </div>

				</div>
			</div>

			<br>
			<div class='container boxes expell'>
				<div float='left'>
					<p>Is the student currently expelled from any school or school board?</p>
				</div>
				<div id='checks' float='right'>
					<form action="/action_page.php">
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Yes</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">No</label>
					</form>
				</div>
			</div>
			<br>

			<div class='boxes'>
				<div class='container first'>
					<div class="one">
						<form name='form' action='' method='get'>
							<div id='left'>
								Full Legal Name: 
							</div>
							<div id='right'>
								<input type='text' id='name_input' name='last_name' placeholder='Last Name'>
								<input type='text' id='name_input' name='first_name' placeholder='First Name'>
								<input type='text' id='name_input' name='middle_name' placeholder='Middle Name'>
							</div>
							
						</form>
						
					</div>
				</div>

				<div class='container second'>
					<div class="one">
						<form name='form' action='' method='get'>
							<br>
							<div id='left'>
								Preffered Name (if different): 
							</div>
							<div id='right'>
								<input type='text' id='name_input' name='pref_last_name' placeholder='Last Name'>
								<input type='text' id='name_input' name='pref_first_name' placeholder='First Name'>
								<input type='text' id='name_input' name='pref_middle_name' placeholder='Middle Name'>
							</div>
						</form>
					</div>
				</div>

				<div class='container second'>
					<div class="one" id='checks'>
						<form action="/action_page.php">
							Gender:
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Male</label>

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Female</label>
						</form>
					</div>

			        <div class="two">
			        	<p class='date'>Date of Birth: _____________</p>
			        </div>

			        <div class="three">
			        	<p class='date'>If the student has other siblings in this school, please list them: _____________</p>
			        </div>

				</div>

				<div class='container second birth' id='checks'>
					<form action="/action_page.php">
						<i>For School Use</i><b>- Proof of Birth</b>:
						<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Copy in OSR</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Baptismal Record</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Birth Registration</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Birth Certificate</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Immigration Papers/Card</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Passport</label>

						<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">Other</label>
					</form>
				</div>
			</div>
			
			<br>

			<div class='boxes'>
				<div class='container first'>
					<div class="one">
						<p>Name of Previous School Board / Municipality: _____________</p>
					</div>
			        <div class="two">
			        	<p>Last date attended: _____________</p>
			        </div>
				</div>

				<div class='container second'>
					<div class="one">
						<p>Name of Previous School: _____________</p>
					</div>
			        <div class="two">
			        	<p>Grade a previous school: _____________</p>
			        </div>
				</div>

				<div class='container second'>
					<div class="one" id='checks'>
			        	<form action="/action_page.php">
			        		Language Instruction:
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">English</label>

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">French</label>

							<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat"><label for="vehicle3">Other</label>
						</form>
					</div>

			        <div class="two">
			        	<p>Reason for Transfer: _____________</p>
			        </div>
				</div>

				<div class='container second'>
					<div class="one" id='checks'>
			        	<form action="/action_page.php">
			        		<b>Did the student ever attend a Waterloo Region District School Board school in the past?</b>
							<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Yes</label>

							<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">No</label>
							If yes, name school(s):
						</form>
					</div>
				</div>

				<div class='container second'>
					<div class="one">
						______________________________________
					</div>

					<div class="two">
						______________________________________
					</div>

					<div class="three">
						______________________________________
					</div>
				</div>
			</div>

			<br>

			<div class='boxes'>
				<div class='container first'>
					<div class="one">
						<p>Medical conditions (include information on special equipment or medicationm if required:)</p>
					</div>

			        <div class="two">
			        	<div class='container first'>
			        		<div class='one'>
			        			<p>For School Use</p>
			        		</div>
			        	</div>

			        	<div class='container second'>
			        		<div class='two' id='checks'>
			        			<form action="/action_page.php">
			        				Immunization Record provided:
									<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Yes</label>

									<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">No</label>
								</form>
			        		</div>
			        	</div>
			        </div>
				</div>

				<div class='container second'>
					<div class="one">
						<p>_____________________________________________________</p>
					</div>
				</div>

				<div class='container second'>
					<div class="one">
						<p>___________________________________________________________</p>
					</div>
			        <div class="two">
			        	<div class='two' id='checks'>
		        			<form action="/action_page.php">
		        				Does the student require an epi-pen?
								<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Yes</label>

								<input type="checkbox" id="vehicle2" name="vehicle2" value="Car"><label for="vehicle2">No</label>
							</form>
		        		</div>
			        </div>
				</div>
			</div>

			<div class='container boxes'>
				<div class='container'>
					<div class='one'>
						<div class='container first'>
							<div class='one'>
								<p>Birth Country: ____________________</p>
							</div>
							
							<div class='two'>
								<p>If Canada, Province of Birth: _____________________</p>
							</div>
						</div>
						
						<div class='container second'>
							<div class='one'>
								<p>Country of Citizenship: ________________________</p>
							</div>
						</div>

						<div class='container second'>
							<div class='one'>
								<p>If student not born in Canada, provide data student entered Canada to live for the first time:</p>
							</div>

							<div class='two'>
								<p> _______________________________________</p>
							</div>
						</div>
					</div>

					<div class='two canada'>
						<div class="row">
							<div class="form-group-lg col-xs-5">
								<label class="control-label" for="facilities"><i>For School Use</i><b> - Status in Canada:</b></label>
								<div>
									<div th:each="facility : ${facilities}" class="column_2">
										<span>
											<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Canadian Citizen</label>
										</span>
										<span>
											<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Study Permit/Student Visa</label>
										</span>

										<span>
											<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Native Ancestry</label>
										</span>

										<span>
											<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Permanent Resident/Landed Immigrant</label>
										</span>

										<span>
											<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Refugee Claimant</label>
										</span>
									</div>

									<span>
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Other (specify): _______________________</label>
									</span>
									<br>
									<span>
										<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike"><label for="vehicle1">Verification in OSR</label>
									</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
