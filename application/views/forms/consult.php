<<<<<<< HEAD
<div id="content_form">
	<h2>Fill the form below we will help you out</h2>
	<div class="entry">
		<div class="entry_body">
			<form method="post" action="<?php echo base_url('signup/add') ?>" id="contactform">

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
					<label for="consultation"><strong>Consultation For:</strong></label>
					<select name="consultation" id="consultation" required="required">
						<option value="Architectural/Engineering">Architectural/Engineering</option>
						<option value="Interior Design">Interior Design</option>
						<option value="Property Consultation">Property Consultation</option>
						<option value="Vastu Consultation">Vastu Consultation</option>
					</select>
				</div>

				<div style="margin-top:10px;">
					<input type="submit" class="submit" value="Submit" name="Submit" />
				</div>

			</form>

		</div>
	</div>
=======
<div style="width:60%;margin:150px auto;">
	<h3>To consult with us <a href="<?php echo site_url('contact'); ?>">Contact Us</a></h3>
>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
</div>