<form class="horizontal-form col-md-4" action="<?php echo admin_url('site_management/process') ?>" method="post">
	 <p class="form-group">
	 	
	 	<label>Facebook:</label>
	 	<input class="form-control" name="facebook" value="<?php echo $edit->facebook ?>">


	 </p>
	 <p class="form-group">
	 	
	 	<label>Google:</label>
	 	<input class="form-control" name="google" value="<?php echo $edit->google ?>">


	 </p>
	 <p class="form-group">
	 	
	 	<label>Twitter:</label>
	 	<input class="form-control" name="twitter" value="<?php echo $edit->twitter ?>">


	 </p>

	 <p class="form-group">
	 	
	 	<label>Youtube:</label>
	 	<input class="form-control" name="youtube" value="<?php echo $edit->youtube ?>">


	 </p>

	 <div class="col-md-3 pull-left button">
	 	<input class="btn btn-primary" value="submit" type="submit">
	 </div>
</form>