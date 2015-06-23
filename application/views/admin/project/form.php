<?php 

if(isset($edit)) {
	$path = admin_url().'project/update/'.$edit->id;
	$ss = $this->db->where('project_id',$edit->id)->get('tbl_services_project')->result();
	$selected_services = array();
	foreach ($ss as $key => $s) {
		$selected_services[] = $s->services_id;
	}

}else{
	$path = admin_url().'project/process';
}

?>
<form enctype="multipart/form-data" class="horizontal-form" method="post" action="<?php echo $path; ?>">
	<div class="col-md-5">		

		<div class="form-group">
			<label class="control-label">Project Title:</label>
			<input class="form-control" required='required' name="title" value="<?php echo (isset($edit)) ? $edit->title : ''; ?>">
		</div>

		<div class="form-group">
			<label class="control-label">Owner:</label>
			<input class="form-control" required='required' name="owner" value="<?php echo (isset($edit)) ? $edit->owner : ''; ?>">
		</div>

		<div class="form-group">
			<label class="control-label">Location:</label>
			<input class="form-control" required='required' name="location" value="<?php echo (isset($edit)) ? $edit->location : ''; ?>">
		</div>

		<div class="form-group">
			<label class="control-label">Built Area:</label>
			<input class="form-control" required='required' name="area" value="<?php echo (isset($edit)) ? $edit->area : ''; ?>">
		</div>

		<div class="form-group">
			<label class="control-label">Client Image:</label>
			<?php if(isset($edit)) { ?>
			<input type="file" name="client_image">
			<img width="100px;" src="<?php echo base_url().'uploads/project_images/'.$edit->client_image; ?>" class="img-thumbnail" />
			<?php } else{ ?>
			<input type="file" required='required' name="client_image">
			<?php } ?>
		</div>

		<div class="form-group">
			<label class="control-label">Service Provided:</label>

			<select class='form-control' name="category">					
				<option value="1" <?php if(isset($edit)) { echo ($edit->cat_id == 1) ? 'selected' : ''; } ?> >Residential</option>
				<option value="2" <?php if(isset($edit)) { echo ($edit->cat_id == 2) ? 'selected' : ''; } ?> >Commericial</option>
				<option value="3" <?php if(isset($edit)) { echo ($edit->cat_id == 3) ? 'selected' : ''; } ?> >Institutional</option>
				<option value="4" <?php if(isset($edit)) { echo ($edit->cat_id == 4) ? 'selected' : ''; } ?> >Planning</option>
				<option value="5" <?php if(isset($edit)) { echo ($edit->cat_id == 5) ? 'selected' : ''; } ?> >Interior</option>
				<option value="5" <?php if(isset($edit)) { echo ($edit->cat_id == 6) ? 'selected' : ''; } ?> >Recreational</option>
				<option value="5" <?php if(isset($edit)) { echo ($edit->cat_id == 7) ? 'selected' : ''; } ?> >Others</option>
			</select>
		</div>

		<div class="form-group">

			<label class="control-label">Service Provided:</label> <br>
			
			<?php $services = array('1'=>'Architectural','2'=>'Engineering','3'=>'Interior','4'=>'Vasthu','5'=>'Construction Sup'); ?>
			
			<?php foreach ($services as $key=>$service): ?>
			<label><input type="checkbox" name="service[]" value="<?php echo $key ?>" <?php if(isset($edit)) { echo (in_array($key, $selected_services)) ? 'checked' : '' ; } ?> ><?php echo $service ?></label>
			<?php endforeach ?>

		</div>

		<input class="btn btn-primary" type="submit" value="Submit">

	</div>
	<div class="col-md-5 pull-right">
		<div class="form-group">
			<label class="control-label">Image 1:</label>
			
			<?php if(isset($edit)) { ?>
			<input type="file" name="image_1">
			<img width="100px;" src="<?php echo base_url().'uploads/project_images/'.$edit->image_1; ?>" class="img-thumbnail" />
			<?php } else{ ?>
			<input type="file" required='required' name="image_1">
			<?php } ?>
		</div>
		<div class="form-group">
			<label class="control-label">Image 2:</label>
			<?php if(isset($edit)) { ?>
			<input type="file" name="image_2">
			<img width="100px;" src="<?php echo base_url().'uploads/project_images/'.$edit->image_2; ?>" class="img-thumbnail" />
			<?php } else { ?>
			<input type="file" required='required' name="image_2">
			<?php } ?>
		</div>
		<div class="form-group">
			<label class="control-label">Image 3:</label>
			<?php if(isset($edit)) { ?>
			<input type="file" name="image_3">
			<img width="100px;" src="<?php echo base_url().'uploads/project_images/'.$edit->image_3; ?>" class="img-thumbnail" />
			<?php } else{ ?>
			<input type="file" required='required' name="image_3">
			<?php } ?>
		</div>
		<div class="form-group">
			<label class="control-label">Description:</label>
			<textarea name="description"><?php if(isset($edit)) { echo $edit->description; } ?></textarea>
		</div>

	</div>
</form>
