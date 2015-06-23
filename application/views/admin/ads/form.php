<?php

if(isset($edit)){
    $path= admin_url('advertisement/update/'.$edit->id);
}else{
    $path = admin_url('advertisement/save');
}
?>


<form enctype="multipart/form-data" method="post" action="<?php echo $path; ?>" role="form"> 
    <div class="panel panel-default"> 
        <div class="panel-heading">
            <h6 class="panel-title"><i class="icon-user"></i>
            <?php if(isset($edit)){
                echo 'Edit Slider Image\'s';
            }else{
                echo 'Add Slider Image\'s';
            } ?>           
            </h6>
        </div> 
        <div class="panel-body">
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label>Title:</label> 
                        <input type="text" value="<?php echo (isset ($edit->title)) ? $edit->title :set_value('title'); ?>" name="title" class="form-control" placeholder="Enter title"/>
                        <label for="image" class="error"><?php echo form_error('title'); ?></label>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <label>Link:</label> 
                        <input type="text" value="<?php echo (isset ($edit->link)) ? $edit->link :set_value('link'); ?>" name="link" class="form-control" placeholder="Enter link"/>
                        <label for="link" class="error"><?php echo form_error('link'); ?></label>
                    </div>
                </div>

                <div class="row" style="margin-top: 15px;">
                    <div class="col-md-12">
                        <label>Image:</label>                         
                        <input style="padding-bottom: 40px;" type="file" name="image" id="report-screenshot" class="styled form-control"/>
                        <span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
                        <label for="image" class="error"><?php echo $this->session->flashdata('error') ?></label>
                    </div>
                    <div class="col-md-12">
                    <?php if(isset($edit)){?>
                        <img height="128px" width="250px" src="<?php echo base_url('uploads/advertisement_image/'.$edit->image) ;?>" />
                    <?php } ?>
                        
                    </div>
                </div>
            </div> 


            <div class="form-actions text-right"> 
                <input type="reset" value="Cancel" class="btn btn-danger"> 
                <input type="submit" value="Submit" class="btn btn-primary"> 
            </div> 
        </div>

    </div>

</form>