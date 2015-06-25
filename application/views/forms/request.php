
<div id="content_form">
	<h5>Please fill the following fields for further information and services. We will contact you later with appropriate suggestions.</h5>
	<div class="entry">
		<div class="entry_body">
			<form method="post" action="<?php echo base_url('contact/success') ?>" id="contactform">

				<div>
					<label for="firstname"><strong>First Name:</strong></label>
					<input type="text" size="50" name="first_name" id="firstname" required="required"  />
				</div>

				<div>
					<label for="lastname"><strong>Last Name:</strong></label>
					<input type="text" size="50" name="last_name" id="lastname" required="required"  />
				</div>

				<div>
					<label for="email"><strong>Email Name:</strong></label>
					<input type="email" size="50" name="email" id="email" required="required"  />
				</div>

				<div>
					<label for="mobile"><strong>Mobile:</strong></label>
					<input type="text" size="50" name="mobile" id="mobile" required="required"  />
				</div>

				<div>
					<label for="address"><strong>Address:</strong></label>
					<input type="text" size="50" name="address" id="address" required="required"  />
				</div>

				<div>
					<label for="consultation"><strong>I want to find land to built:</strong></label>
					<select name="consultation" id="consultation" required="required">
						<option value="Residence Building">Residence Building</option>
						<option value="Commercial Building">Commercial Building</option>
						<option value="Intitutional Building">Intitutional Building</option>
						<option value="Temporary Shades">Temporary Shades</option>
					</select>
				</div>

				<div>
					<label for="other"><strong>If other specify:</strong></label>
					<input type="text" name="other" id="other" />
				</div>

				<div style="margin-top:10px;">
					<input type="submit" class="submit" value="Submit" name="Submit" />
				</div>

				<div>
					Or contact us directly <a href="<?php echo base_url('contact/') ?>">here</a>
				</div>

			</form>

		</div>
	</div>