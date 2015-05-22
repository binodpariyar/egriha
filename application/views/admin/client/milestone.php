<?php 
if (isset($edit)) {
  $path = admin_url('client_management/update_milestone/'.$edit->id);
}
else
{
  $path = admin_url('client_management/process_milestone/'.$id);
}
?>

<form enctype="multipart/form-data" class="horizontal-form" method="post" action="<?php echo $path; ?>">
  <div class="col-md-5">    

    <div class="form-group">
      <label class="control-label">Milestone Title:</label>
      <input class="form-control" required='required' name="name" value="<?php echo (isset($edit)) ? $edit->name : ''; ?>">
    </div>

    <div class="form-group">
      <label class="control-label">Milestone Image:</label>
      <?php if(isset($edit)) { ?>
      <input type="file" name="image">
      <img width="100px;" src="<?php echo base_url().'uploads/milestone_images/'.$edit->image; ?>" class="img-thumbnail" />
      <?php } else{ ?>
      <input type="file" required='required' name="image">
      <?php } ?>
    </div>

    <div class="form-group">
      <label class="control-label">Milestone Image:</label>
      <?php if(isset($edit)) { ?>
      <input type="file" name="image_1">
      <img width="100px;" src="<?php echo base_url().'uploads/milestone_images/'.$edit->image_1; ?>" class="img-thumbnail" />
      <?php } else{ ?>
      <input type="file" required='required' name="image_1">
      <?php } ?>
    </div>

    <div class="form-group">
      <label class="control-label">Milestone Image:</label>
      <?php if(isset($edit)) { ?>
      <input type="file" name="image_2">
      <img width="100px;" src="<?php echo base_url().'uploads/milestone_images/'.$edit->image_2; ?>" class="img-thumbnail" />
      <?php } else{ ?>
      <input type="file" required='required' name="image_2">
      <?php } ?>
    </div>


    <div class="form-group">
      <label class="control-label">Description:</label>
      <textarea name="description"><?php if(isset($edit)) { echo $edit->description; } ?></textarea>
    </div>

    <?php if(isset($edit)) { ?>
    
    <div class="form-group">
      <label class="control-label">Status:</label>
      <label>
        <input type="radio" name="status" value="0" <?php echo ($edit->status == 0)? 'checked' : '' ?>> Pending
      </label>
      <label>
        <input type="radio" name="status" value="1" <?php echo ($edit->status == 1)? 'checked' : '' ?>> Completed
      </label>
    </div>

    <?php } ?>

    <input class="btn btn-primary" type="submit" value="Submit">

  </div>

</form>
