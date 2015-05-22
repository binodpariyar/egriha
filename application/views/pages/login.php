          <div id="main_secondary"><!-- Main Content -->
            <div id="content_form"><!-- Content Starts -->
              <h2>Login</h2>
              <hr />

              <div class="entry">
                <div class="entry_top">
                  <!--top design -->
                </div>
                <div class="entry_body">


                  <form method="post" action="<?php echo base_url('login/process') ?>" id="contactform">
                    
                    <?php if($this->session->flashdata('msg_client') != '') { ?>
                      <p style="color:#e50000">
                        <?php echo $this->session->flashdata('msg_client'); ?>
                      </p>
                    <?php } ?>
                  
                    <div>
                     <label for="username"><strong>Username:</strong></label>
                     <input type="text" size="50" name="username" id="username" required="required"  />
                   </div>

                   <div>
                     <label for="password"><strong>Password:</strong></label>
                     <input type="password" size="50" name="password" id="password" value="" required="required" />
                   </div>
                   <div style="margin-top:10px;">
                     <input type="submit" class="submit" value="Login" name="submit" />
                   </div>

                   <p>
                    <a href="<?php echo site_url('forget'); ?>">Forget Password</a><br>
                    <a href="<?php echo site_url('signup'); ?>">Sign Up</a>
                  </p>

                </form>

              </div><!-- entry body ends -->
              <div class="entry_bottom"><!-- bottom design --></div>
            </div>
          </div><!-- Content Ends -->

        </div>