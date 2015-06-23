<form class="horizontal-form col-md-6" method="post" action="<?php echo admin_url('about/save/'.$details->slug) ?>">
	 <div class="form-group">
	 	<label>Content:</label>
	 	<textarea style="height:200px;" name="body"><?php echo $details->body ?></textarea>
	 </div>
	
	 <div class="col-md-3 pull-left button">
	 	<input class="btn btn-primary" value="submit" type="submit">
	 </div>
</form>