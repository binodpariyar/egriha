<div id="main_secondary">
  <h2>List Your Property Here</h2>
  <div class="find-land-two">
    
    <div class="firstdiv">
      <h4>Member Login</h4>
      <p>If you already have username and password then sign up here.</p>
      <div class="submit_button">
        <a href="login" class="submit_padding">Member Login</a>
      </div>
    </div>
    <div class="firstdiv">
      <h4>Not Member Yet?</h4>
      <p>For sell your property you need to create a username and password           
        its simple and totally free of cost.</p>
        <div class="submit_button">
          <a href="signup" class="submit_padding">Create User</a>
        </div>
      </div>
    </div>
    <div class="ad">
      <ul class="ads_slidertwo">
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