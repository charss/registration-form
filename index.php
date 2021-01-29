<html>
	<head><title>Student Registration Form</title></head>
	<link rel='stylesheet' href='style.css'>
	<body>
		<div class='main'>
			<p class='title'>Student Registration Form</p>
			<div class='boxes'>
				<div class='container first'>
					<div class="one">
						<p><i>For School Use</i><b>-Permission to Register:</b> _____________</p>
					</div>
			        <div class="two">
			        	<p class='date'>Date: _____________</p>
			        </div>
			        <div class="three" id='checks'>
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
						<p>Student Number: _____________</p>
					</div>
			        <div class="two">
			        	<p>Entry Date: _____________</p>
			        </div>
			        <div class="three">
			        	<p>Entry Type: _____________</p>
			        </div>
			        <div class="four">
			        	<p>Grade: _____________</p>
			        </div>
				</div>

				<div class='container second'>
					<div class="one">
						<p>OEN: _____________</p>
					</div>
			        <div class="two">
			        	<p class='date'>Class/Homeform: _____________</p>
			        </div>

				</div>
			</div>

			<br>
			<div class='container boxes'>
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

			
		</div>
	</body>
</html>
