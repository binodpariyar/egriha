



<div id="main_secondary">

  <div class="service_wrapper">

    <div id="provide">

      <h2>Matrix Design Consult Pvt Ltd</h2>

      <hr />

      <div style="margin-bottom:10px;">

       <label for="title"><strong>Search Project:</strong></label>

       <select id="type" onchange="change_cat(this.value);">

        <option value="0" <?php echo ($cat_id == 0) ? 'selected' : '' ;?> >All</option>

        <option value="1" <?php echo ($cat_id == 1) ? 'selected' : '' ;?> >Residential</option>

        <option value="2" <?php echo ($cat_id == 2) ? 'selected' : '' ;?> >Commericial</option>

        <option value="3" <?php echo ($cat_id == 3) ? 'selected' : '' ;?> >Institutional</option>

        <option value="4" <?php echo ($cat_id == 4) ? 'selected' : '' ;?> >Planning</option>

        <option value="5" <?php echo ($cat_id == 5) ? 'selected' : '' ;?> >Interior</option>

        <option value="6" <?php echo ($cat_id == 6) ? 'selected' : '' ;?> >Recreational</option>

        <option value="7" <?php echo ($cat_id == 7) ? 'selected' : '' ;?> >Others</option>

      </select>



    </div>

  </div>



  



</div>



<div class="gallery">

  <ul class="house_pic_one">





   <?php foreach ($projects as $project): ?>

   <li>

    <a href="<?php echo base_url('projects/description/'.$project->id); ?>">

      <img src="<?php echo base_url('uploads/project_images/'.$project->image_1); ?>">

      <span><?php echo $project->title; ?></span>

      <span><?php echo $project->location; ?></span>

    </a>

  </li>

<?php endforeach ?>



</ul>





</div>





<div class="ad">



  <ul class="ads_slider">
  
   <?php $ads = $this->db->order_by('order')->get('tbl_advertisement')->result(); ?>
          <?php foreach($ads as $ad){ ?>
          <li>
            <a href="<?php echo prep_url($ad->link); ?>" target="_blank">
              <img src="<?php echo base_url() ?>timthumb.php?h=300&w=300&q=100&src=<?php echo base_url('uploads/advertisement_image/'.$ad->image);?>">
            </a>
          </li>
          <?php } ?>

  </ul>

  







</div>













</div>



<script>

  

  function change_cat (cat_id) {

        

      if(cat_id == 0){

        window.location.href = base_url+'projects';

      }else { 

        window.location.href = base_url+'projects?cat_id='+cat_id;

      }



  }



</script>