

<div id="s3slider">
 <ul id="s3sliderContent">
  <?php $slides = $this->db->order_by('order')->get('tbl_slider')->result(); ?>
  <?php foreach($slides as $slide){ ?>
  <li>
    <img src="<?php echo base_url() ?>timthumb.php?h=277&w=940&q=100&src=<?php echo base_url('uploads/slider_image/'.$slide->image);?>">
  </li>
  <?php } ?>
</ul>
</div>

<div class="wrap">
  <div id="main_secondary">
    <div class="welcome_cover">
      <div id="content">
        <h2>Welcome To eGriha</h2>
        <hr />
        <p>eGRIHA is established to provide a complete real estate solution.             
          you can contact us before and after a construction of any buildings               
          so we can give you any kind of services. We are collabration of Architects,             
          Engineers, Buildirs And Property consultant. It is easy and time consuming.              
          save your time and money, Do eGRIHA. </p>            
          <!-- <a href="#">Read More</p></a> -->

          <p>eGRIHA offers a trustful services to its client through transparancy in all dealings.              
            You can simply login and can get day to day update of any construction works              
            and other services from eGRIHA..<a href="aboutus">Read More</p></a>            

          </div>
          <!-- content ends -->
          <div id="youtube">
           <iframe src="https://www.youtube.com/embed/zXBeNV3oliU" frameborder="0" allowfullscreen="" style="
           width: 100%;
           height: 100%;
           "></iframe>
         </div>
       </div>


       <div class="ad margin-up">
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


      <div class="content_wrapper"> 

       <div id="recent">
         <a href="<?php echo base_url('projects'); ?>">
          <h4 style="margin-bottom: 12px;
          padding-left: 8px;
          font-size: 22px;">Recent Project</h4></a>
          <hr />
          <ul class="house_pic">
            <?php foreach ($projects as $project): ?>
            <li>
              <a href="<?php echo base_url('projects'); ?>">
                <img src="<?php echo base_url('uploads/project_images/'.$project->image_1); ?>">
                <span><?php echo $project->title; ?></span>
                <span><?php echo $project->location; ?></span>
              </a>
            </li>
          <?php endforeach ?>
          <!-- <li>
            <a href="<?php echo base_url('projects'); ?>">
              <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
              <span>Commerial house</span>
              <span>Lazimpat Kathmandu</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('projects'); ?>">
              <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
              <span>Civil Home</span>
              <span>Lazimpat Kathmandu</span>
            </a>
          </li>
          <li>
            <a href="<?php echo base_url('projects'); ?>">
              <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
              <span>Commerial house</span>
              <span>Lazimpat Kathmandu</span>
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
              <span>Commerial house</span>
              <span>Lazimpat Kathmandu</span>
            </a>
          </li>
          <li>
            <a href="">
              <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
              <span>Civil Home</span>
              <span>Lazimpat Kathmandu</span>
            </a>
          </li> -->

        </ul>




      </div>






      <div class="find_land">
        <div class="firstdiv">
          <h4>Find a Land</h4>
          <p>Give us your location, price and area you want we will help to find 
            the best of your choice.</p>
            <div class="submit_button">
              <a href="<?php echo base_url('home/request'); ?>" class="submit_padding colorbox-iframe">Submit Request</a>
            </div>
          </div>

          <div class="firstdiv">
            <h4>Need a Consultation</h4>
            <p>Give us your location, price and area you want we will help to find 
              the best of your choice.</p>
              <div class="submit_button">
                <a href="<?php echo base_url('home/consult'); ?>" class="submit_padding colorbox-iframe">Submit Request</a>
              </div>
            </div>

            <div class="firstdiv">
              <h4>All Service Package</h4>
              <p>Give us your location, price and area you want we will help to find 
                the best of your choice.</p>
                <div class="submit_button">
                  <a  href="<?php echo base_url('home/service'); ?>" class="submit_padding colorbox-iframe">Submit Request</a>
                </div>
              </div>


            </div>


          </div>







<!--    <div id="request">

    <form method="post" action="#" id="contactform">

      <h3>I want to:<h3>


                  <div>
                   <label for="findland" style="float:left;">Find a land</label>
                   <input style="margin-top:1px; float:left;" type="radio" size="50" name="firstname" id="findland" required="required"  />
                 </div>
                 <br/><br/>
                 <div>
                   <label for="findland" style="float:left;">Find a land and consult with experts</label>
                   <input style="margin-top:1px; float:left;" type="radio" size="50" name="firstname" id="findland" required="required"  />
                 </div>
                 <br/><br/>
                 <div>
                   <label for="findland" style="float:left;">Find a land, consult with experts and<br>build a home from ghargriha</label>
                   <input style="margin-top:1px; float:left;" type="radio" size="50" name="firstname" id="findland" required="required"  />
                 </div>
                 <div>
                 <br>
                 <br>
                 <br>

               <input type="submit" class="submit" value="Submit" name="submit" />
              </div>
               
 </form>


</div> -->






<script type="text/javascript">

$(document).ready(function(){
  // alert('binod');
  $('.house_pic').bxSlider({
    minSlides: 4,
    maxSlides: 4,
    slideWidth: 200,
    slideMargin: 5,
    controls:true,
    auto : true
  });
});

</script>


</div><!-- main secondary ends -->