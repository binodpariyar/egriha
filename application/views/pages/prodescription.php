

<div id="main_secondary">
  <div class="service_wrapper">
    <div id="provide">
      <h3><?php echo $details->title; ?></h3>
      <hr />
      <div id="housesell">
        <div id="contenttwo">
          <div class="entry-selling description project">

            <div class="entry_body">

              <div class="description-slider">

                <ul class="house-collections" id="house-slider">

                  <li>
                    <img src="<?php echo base_url('uploads/project_images/'.$details->image_1);?>" alt="" />
                  </li>

                  <li>
                    <img src="<?php echo base_url('uploads/project_images/'.$details->image_2);?>" alt="" />
                  </li>

                  <li>
                    <img src="<?php echo base_url('uploads/project_images/'.$details->image_3);?>" alt="" />
                  </li>

                </ul>

              </div>

              <div class="short_description"> 
               <ul>
                <h4>Project Summary</h4>
                <li>Owner: <?php echo $details->owner; ?></li>
                <li>Location: <?php echo $details->location; ?></li>
                <li>Area: <?php echo $details->area; ?> sq Feet</li>
              </ul>

              <h4>Service Provided</h4>
              <ul>
                <li>Architectural</li>
                <li>Engineering</li>
                <li>Interior</li>
                <li>Vastu</li>
                <li>Construction supervision</li>
              </ul>


            </div>




          </div><!-- project entry content ends -->

        </div><!-- project entry ends -->


      </div><!-- content ends -->


    </div>

  </div>



</div>






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

</div>




<div class="client_speak">

  <div class="entry_body">
    <div class="client_section">

      <h5>Client Speak</h5>
      <img src="<?php echo base_url('uploads/project_images/'.$details->client_image);?>" alt="<?php echo $details->owner; ?>" />
      <br/>
      <ul style="float:left">
        <li>
          <?php echo $details->owner; ?>
        </li>
        <li>
         <?php echo $details->location; ?>
       </li>
     </ul>
   </div>


   <div class="entry_body_spec margin_top">
    <ul>
      <li>
        <?php echo $details->description; ?>
      </li>    

    </ul>
  </div>

</div><!-- project entry content ends -->

</div>


<div class="projects margin_up_20">

  <ul class="house_pic" id="selling">
    
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








</div>

