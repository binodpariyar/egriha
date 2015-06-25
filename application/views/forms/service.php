<!-- <div style="width:60%;margin:150px auto;">
	<h3>We will give you service from first to last so</h3>
	<h3>Contact now: 9841237899/ 0140000 </h3>
	<h3>Company Address : Tinkune, Kathmandu</h3>
	<h3> Phone : 9851183984,9841641971,9849425098</h3>
	<h3> Email ID : something@yahoo.com</h3>
</div> -->


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
					<label for="other"><strong>If other specify:</strong></label>
					<textarea name="other" style="height:200px"></textarea>
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