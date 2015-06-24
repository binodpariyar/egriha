



<div id="main_secondary">

  <div class="service_wrapper">

<div id="provide">

  <h2><?php echo $content->title; ?></h2>

   <hr />
  
  <?php echo $content->body; ?>

</div>



  



</div>



<div class="ad">


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



