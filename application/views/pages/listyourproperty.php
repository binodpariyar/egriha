<<<<<<< HEAD
<div id="main_secondary"><!-- Main Content -->
  <h2>List Your Property Here</h2>
<!-- <p> If you already have username and password then sign up here:<a href="signup"> Member Login</a></p>
<p> For sell your property you need to create a username and password           
  its simple and totally free of cost.:<a href="signup">Login</a></p> -->
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
<!-- 
  <div class="paddingdiv">
   <h3>Sign up here</h3>
 </div>
    <div class="registeremail">
     <form method="post" action="#" id="contactform">
              <div>
               
          
          <label for="email"><strong>Email:</strong></label><br>
                   <input type="email" size="50" name="email" id="email" value="" required="required" />
                 </div>
                 <div>
                   <label for="password"><strong>Password:</strong></label>
                   <input type="password" size="50" name="password" id="password" value="" required="required" />
                 </div>
                 <div>
                   <label for="repassword"><strong>Re-password:</strong></label>
                   <input type="repassword" size="50" name="repassword" id="repassword" value="" required="required" />
                 </div>
                 <div style="margin-top:10px;">
                   <input type="submit" class="submit" value="Signup" name="submit" />
                 </div>
             </form>
  </div>
-->
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
=======
<div id="main_secondary"><!-- Main Content -->
  <h2>List Your Property Here</h2>
<!-- <p> If you already have username and password then sign up here:<a href="signup"> Member Login</a></p>
<p> For sell your property you need to create a username and password           
  its simple and totally free of cost.:<a href="signup">Login</a></p> -->
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
<!-- 
  <div class="paddingdiv">
   <h3>Sign up here</h3>
 </div>
    <div class="registeremail">
     <form method="post" action="#" id="contactform">
              <div>
               
          
          <label for="email"><strong>Email:</strong></label><br>
                   <input type="email" size="50" name="email" id="email" value="" required="required" />
                 </div>
                 <div>
                   <label for="password"><strong>Password:</strong></label>
                   <input type="password" size="50" name="password" id="password" value="" required="required" />
                 </div>
                 <div>
                   <label for="repassword"><strong>Re-password:</strong></label>
                   <input type="repassword" size="50" name="repassword" id="repassword" value="" required="required" />
                 </div>
                 <div style="margin-top:10px;">
                   <input type="submit" class="submit" value="Signup" name="submit" />
                 </div>
             </form>
  </div>
-->
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
>>>>>>> cba332da7c5b3e069bcb1525a7974f4bf1fed1c5
</div>