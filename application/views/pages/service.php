<<<<<<< HEAD


<div id="main_secondary">
  <div class="service_wrapper">
    <div id="provide">
      <h2>Services</h2>
      <hr />
      <h4>Property Consultation</h4>
      <p>If you are going to buy or sell your property we are always with you for the best consultation of your property so that you can get the best value of money. Our property consulates are experienced and have good technical background. So do not hesitate to visit us.</p>
      <h4>Architecture and engineering consultation</h4>
      <p>For the best design and aesthetic detailing of your house and other structures you can remember us ,with our young and innovative architects and engineers of respective firms. Trust us we’ll do our best for your full satisfaction.</p>
      <h4>Commercial</h4>
      <p>You can minimize the valuable time and money by selecting a good contractor, which now a days you can find hardly in the market. But here are we to find many good one and let you to compare them and select the best one. The builders’ associates with us are highly responsible & experienced.</p>
    </div>


    <div id="residential">
      <h2>We can help you with:</h2>
      <hr />

      <div class="commercial"><header>Residential</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=1'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>"></a>
        </section>
      </div>

      <div class="commercial"><header>Commercial</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=2'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringtwo.jpg'); ?>"></a>
        </section>

      </div>

      <div class="commercial"><header>Institutional</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=3'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringfour.jpg'); ?>"></a>
        </section>
      </div>

      <div class="commercial"><header>Interior</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=5'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringtwo.jpg'); ?>"></a>
        </section>
      </div>

    </div>
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




  <div class="projects margin_up_20">

    <ul class="house_pic" id="selling">
      <li>
        <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
        <span>Commerial house</span>
        <!--  <span>Rs.750000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
        <span>Commerial house</span>
        <!-- <span>Rs.7510000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
        <span>Civil Home</span>
        <!-- <span>Rs.1550000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
        <span>Commerial house</span>
        <!--  <span>Rs.750000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
        <span>Commerial house</span>
        <!-- <span>Rs.7510000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
        <span>Civil Home</span>
        <!-- <span>Rs.1550000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>

    </ul>



  </div>


</div>

=======


<div id="main_secondary">
  <div class="service_wrapper">
    <div id="provide">
      <h2>Services</h2>
      <hr />
      <h4>Property Consultation</h4>
      <p>If you are going to buy or sell your property we are always with you for the best consultation of your property so that you can get the best value of money. Our property consulates are experienced and have good technical background. So do not hesitate to visit us.</p>
      <h4>Architecture and engineering consultation</h4>
      <p>For the best design and aesthetic detailing of your house and other structures you can remember us ,with our young and innovative architects and engineers of respective firms. Trust us we’ll do our best for your full satisfaction.</p>
      <h4>Commercial</h4>
      <p>You can minimize the valuable time and money by selecting a good contractor, which now a days you can find hardly in the market. But here are we to find many good one and let you to compare them and select the best one. The builders’ associates with us are highly responsible & experienced.</p>
    </div>


    <div id="residential">
      <h2>We can help you with:</h2>
      <hr />

      <div class="commercial"><header>Residential</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=1'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>"></a>
        </section>
      </div>

      <div class="commercial"><header>Commercial</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=2'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringtwo.jpg'); ?>"></a>
        </section>

      </div>

      <div class="commercial"><header>Institutional</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=3'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringfour.jpg'); ?>"></a>
        </section>
      </div>

      <div class="commercial"><header>Interior</header>
        <section>
          <a href="<?php echo base_url('projects?cat_id=5'); ?>"><img src="<?php echo base_url('front_assets/images/engineeringtwo.jpg'); ?>"></a>
        </section>
      </div>

    </div>
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




  <div class="projects margin_up_20">

    <ul class="house_pic" id="selling">
      <li>
        <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
        <span>Commerial house</span>
        <!--  <span>Rs.750000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
        <span>Commerial house</span>
        <!-- <span>Rs.7510000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
        <span>Civil Home</span>
        <!-- <span>Rs.1550000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/engineeringthree.jpg'); ?>">
        <span>Commerial house</span>
        <!--  <span>Rs.750000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/sellthree.jpg'); ?>">
        <span>Commerial house</span>
        <!-- <span>Rs.7510000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>
      <li>
        <img src="<?php echo base_url('front_assets/images/civilhome.jpg'); ?>">
        <span>Civil Home</span>
        <!-- <span>Rs.1550000/-</span> -->
        <span>Lazimpat Kathmandu</span>
      </li>

    </ul>



  </div>


</div>

>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
