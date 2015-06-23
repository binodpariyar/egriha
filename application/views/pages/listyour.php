<div id="main_secondary"><!-- Main Content -->

  <div id="content_form"><!-- Content Starts -->
    <h2>List Your Property</h2>
    <hr />

    <div class="entry">
      <div class="entry_top"><!--top design --></div>
      <div class="entry_body">


        <form method="post" action="<?php echo base_url('listyourproperty/add') ?>" id="contactform" enctype="multipart/form-data">
          <div>
            <?php if($this->session->flashdata('msg') != "") { ?>
            <p style="float:left">
              <?php echo $this->session->flashdata('msg'); ?>
            </p>
            <?php } ?>
            <br/>

          </div>

          <div>
            <label for="address"><strong>You Want:</strong></label>
            <select name="for">                    
              <option value="1">Rent</option>
              <option value="2">Sell</option>
            </select>
          </div>

          <div>
            <label for="address"><strong>Property Type:</strong></label>
            <select name="property" onblur="cForm();" id="property">                    
              <option value="1">Home</option>
              <option value="2">Appartment</option>
              <option value="3">Land</option>
            </select>
          </div>

          <div id="area">
            <label for="address"><strong>Land Area:</strong></label>
            <input type="text" size="50" name="area" id="address" value="" required="required" />
          </div>

          <div id="floor">
            <label for="address"><strong>Total Floor:</strong></label>
            <input type="number" size="50" name="floor" id="address" value="1" min="1" required="required" />
          </div>

          <div id="storey">
            <label for="address"><strong>No Of Storey:</strong></label>
            <input type="number" min="1" name="storey" id="address" value="1" required="required" />
          </div>

          <div id="price">
            <label for="address"><strong>Price:</strong></label>
            <input type="text" size="50" name="price" id="address" value="" required="required" />
          </div>

          <div id="year">
            <label for="address"><strong>Year of Construction:</strong></label>
            <input type="text" size="50" name="year" id="address" value="" required="required" />
          </div>

          <div id="location">
            <label for="address"><strong>Property Location:</strong></label>
            <input type="text" size="50" name="location" id="address" value="" required="required" />
          </div>

          <div id="bedroom">
            <label for="address"><strong>Bed Room Number:</strong></label>
            <input type="number" min="1" name="bedroom" id="address" value="1" required="required" />
          </div>

          <div id="bathroom">
            <label for="address"><strong>Bath Room Number</strong></label>
            <input type="number" min="1" name="bathroom" id="address" value="1" required="required" />
          </div>

          <div id="condition">
            <label for="address"><strong>Current Condition</strong></label>
            <select name="condition">
              <option>Good</option>
              <option>Fair</option>
            </select>
          </div>

          <div>
            <label for="address"><strong>Photo:</strong></label>
            <input type="file" name="image_1" />
          </div>

          <div>
            <label for="address"><strong>Photo:</strong></label>
            <input type="file" name="image_2" />
          </div>

          <div>
            <label for="address"><strong>Photo:</strong></label>
            <input type="file" name="image_3" />
          </div>

          <div>
            <label for="address"><strong>Description:</strong></label>
            <textarea style="height:200px" name="description"></textarea>
          </div>

          <div style="margin-top:10px;">
            <input type="submit" id="submit" class="submit" value="Submit" />
          </div>

        </form>
      </div><!-- entry body ends -->



      <div class="entry_bottom"><!-- bottom design --></div>



      <!-- Content Ends -->


    </div>
  </div>

  <div class="client_detail">
    <div class="entry_body_client">
      <h3>Added Property</h3>

      <div class="entry_body_spec_client">
        
        <ul>
          <?php foreach ($list as $key => $row): ?>
            <li>
              <a href="<?php echo base_url().'listyourproperty/show/'.$row->id; ?>"><?php echo get_property_type($row->type); ?> <?php echo get_for_type($row->for); ?> for <?php echo $row->price; ?> at <?php echo $row->location; ?> </a> ( <strong><?php echo ($row->status == 1) ? 'Approved' : 'Pendding Approval' ; ?> </strong>)
            </li>
          <?php endforeach; ?>
        </ul>

      </div>

      <div class="entry_body_spec_client">

        <ul>
          <li><a href="<?php echo site_url('login/log_out') ?>">Logout</a></li>
        </ul>

      </div>

    </div>
  </div>

</div>


<script type="text/javascript">


function cForm(){
  var f = $('#property').val();
  if(f=="Land"){

    $("#floor").hide();
    $("#storey").hide();
    $("#bedroom").hide();
    $("#bathroom").hide();
    $("#year").hide();

  }
  else if(f=="Appartment"){
    $("#floor").hide();
    $("#storey").hide();
    $("#bedroom").show();
    $("#bathroom").show();
    $("#year").show();


  }

  else{
    $("#floor").show();
    $("#storey").show();
    $("#bedroom").show();
    $("#bathroom").show();
    $("#year").show();
  }

}


</script>
