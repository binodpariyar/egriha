<div id="main_secondary">
  <div class="service_wrapper">
    <div id="provide">
     <h3><?php echo get_property_type($details->type); ?> <?php echo get_for_type($details->for); ?> for <?php echo $details->price; ?> at <?php echo $details->location; ?></h3></a>
     <hr />
     <div id="housesell">
      <div id="contenttwo">

        <div class="entry-selling description">

          <div class="entry_body">
            
            <?php if($details->verify == 1) { ?>
            <img class="verify" src="<?php echo base_url('front_assets/images/verify.png') ?>" alt="">
            <?php } ?>

            <div class="description-slider" style="width:360px;">

              <ul class="house-collections" id="house-slider">

                <li>
                  <img src="<?php echo base_url('uploads/list/'.$details->image_1);?>" alt="" />
                </li>

                <li>
                  <img src="<?php echo base_url('uploads/list/'.$details->image_2);?>" alt="" />
                </li>

                <li>
                  <img src="<?php echo base_url('uploads/list/'.$details->image_3);?>" alt="" />
                </li>

              </ul>

            </div>
            
            <div class="short_description" > 
              <ul style="padding:0px;">
                <li>Location: <?php echo $details->location ?></li>
                <li>Price: <?php echo $details->price ?></li>
                <li>Condition: <?php echo $details->condition ?></li>
                <li>Area: <?php echo $details->area; ?></li>
                <?php if($details->type == 1){ ?>
                <?php $house_detail = $this->db->where('p_id',$details->id)->get('tbl_house')->row(); ?>
                <li>Construction Year: <?php echo $house_detail->year ?></li>
                <li>Bedroom: <?php echo $house_detail->bedroom ?></li>
                <li>Bathroom: <?php echo $house_detail->bathroom ?></li>
                <?php } ?>
              </ul>
            </div>


            <div class="entry_body_spec" >

              <ul>
                <li>
                  <?php echo $details->description; ?>
                </li>
              </ul>

            </div>
          </div>
        </div>

      </div>
      
<!--       <div class="ad" style="margin-right:20px;">
        <p>
          <h5>Compare with</h5>
        </p>
        <p>
          <select name="compare" id="compare">
            <option <?php echo ($filter == 'area') ? 'selected' : '' ;?>  value="area">Area</option>
            <option <?php echo ($filter == 'location') ? 'selected' : '' ;?>  value="location">Location</option>
            <option <?php echo ($filter == 'price') ? 'selected' : '' ;?>  value="price">Price</option>
          </select>
        </p>
        <ul class="house_pic_one">
         <?php foreach ($projects as $project): ?>
         <li>
          <a href="<?php echo base_url($path.'/description/'.$project->id); ?>">
            <img src="<?php echo base_url('uploads/list/'.$project->image_1); ?>">
            <span><?php echo get_property_type($project->type); ?> <?php echo get_for_type($project->for); ?> for <?php echo $project->price; ?> at <?php echo $project->location; ?></span>
          </a>
        </li>
      <?php endforeach; ?>
    </ul>

  </div> -->
</div>
</div>
</div>

<h3>Compare with</h3>
<hr />
<div class="ad" style="margin-right:20px;">
  <p>
    <select name="compare" id="compare" style="padding:5px 10px ;">
      <option <?php echo ($filter == 'area') ? 'selected' : '' ;?>  value="area">Area</option>
      <option <?php echo ($filter == 'location') ? 'selected' : '' ;?>  value="location">Location</option>
      <option <?php echo ($filter == 'price') ? 'selected' : '' ;?>  value="price">Price</option>
    </select>
  </p>
  <ul class="house_pic_one">
   <?php foreach ($projects as $project): ?>
   <li>
    <a href="<?php echo base_url($path.'/description/'.$project->id); ?>">
      <img src="<?php echo base_url('uploads/list/'.$project->image_1); ?>">
      <span><?php echo get_property_type($project->type); ?> <?php echo get_for_type($project->for); ?> for <?php echo $project->price; ?> at <?php echo $project->location; ?></span>
    </a>
  </li>
<?php endforeach; ?>
</ul>

</div>

<style>
  img.verify {
    height: 100px !important;
    left: 795px;
    position: absolute;
    width: 100px !important;
    z-index: 100000;
  }
</style>

<!-- 
<div class="ad">

  <ul class="ads_slider">
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringad.jpeg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadone.jpg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadtwo.jpg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadone.jpg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadone.jpg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadtwo.jpg');?>">
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringadone.jpg');?>">
    </li>
  </ul>

</div> -->


<div class="projects margin_up_20">

  <ul class="house_pic" id="selling">
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
      <span>Commerial house</span>
      <span>Lazimpat Kathmandu</span>
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
      <span>Commerial house</span>
      <span>Lazimpat Kathmandu</span>
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
      <span>Civil Home</span>
      <span>Lazimpat Kathmandu</span>
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
      <span>Commerial house</span>
      <span>Lazimpat Kathmandu</span>
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
      <span>Commerial house</span>
      <span>Lazimpat Kathmandu</span>
    </li>
    <li>
      <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
      <span>Civil Home</span>
      <span>Lazimpat Kathmandu</span>
    </li>
  </ul>

</div>

</div>

<script>
$(document).ready(function(){

  $('#compare').on('change',function(e){
    var filter = $(this).val();
    insertParam('filter',filter);
  });

});
</script>