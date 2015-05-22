          <div id="main_secondary"><!-- Main Content -->
            
            <div id="content_form"><!-- Content Starts -->
              <h2>Sign up</h2>
              <hr />

              <div class="entry">
                <div class="entry_top"><!--top design --></div>
                <div class="entry_body">


                 <form method="post" action="<?php echo base_url('signup/add') ?>" id="contactform">
                  <div>
                  <?php if($this->session->flashdata('msg') != "") { ?>
                  <p style="float:left">
                    <?php echo $this->session->flashdata('msg'); ?>
                  </p>
                  <?php } ?>

                  <br/>

                  </div>
                
                  <div>
                   <label for="firstname"><strong>First Name:</strong></label>
                   <input type="text" size="50" name="first_name" id="firstname" required="required" value="<?php echo set_value('first_name'); ?>"  />
                 </div>

                 <div>
                   <label for="lastname"><strong>Last Name:</strong></label>
                   <input type="text" size="50" name="last_name" id="lastname" value="" required="required" />
                 </div>
                    <div>
                   <label for="address"><strong>Address:</strong></label>
                   <input type="text" size="50" name="address" id="address" value="" required="required" />
                 </div>
                 <div>
                 <label for="email"><strong>Email:</strong></label>
                   <input type="email" size="50" name="email" id="email" value="" required="required" onblur="checkEmail();" />
                   <span class="fail" style="display:none;">Email Already Registered</span>
                   <span class="pass" style="display:none;">Email Available</span>
                 </div>
                 <div>
                   <label for="username"><strong>Username:</strong></label>
                   <input type="text" size="50" name="username" id="username" value="" required="required" onblur="checkUser();" />
                    <span class="fail2" style="display:none;">Username Already Registered</span>
                   <span class="pass2" style="display:none;">Username Available</span>
                 </div>
                 <div>
                   <label for="password"><strong>Password:</strong></label>
                   <input type="password" size="50" name="password" id="password" value="" required="required" />
                 </div>
                 <div>
                   <label for="repassword"><strong>Re entry-password:</strong></label>
                   <input type="repassword" size="50" name="repassword" id="repassword" value="" required="required" />
                 </div>
                 <div style="margin-top:10px;">
                   <input type="submit" id="submit" class="submit" value="Signup" name="Submit" />
                 </div>

              </form>
            </div><!-- entry body ends -->



            <div class="entry_bottom"><!-- bottom design --></div>
 


        <!-- Content Ends -->


      </div>


      <script type="text/javascript">

      function submitForm(){
        $('#contactform').submit();
      }

      function checkEmail(){
         $('.pass').hide();
          $('.fail').hide();
        var email = $('#email').val();
        if(email.length>=3){
          $.ajax({

              url:'<?php echo base_url()."signup/checkEmail" ?>',
              data:{'email':email},
              type:'POST',
              dataType:'JSON',
              success:function(data){
                console.log(data);
                if(data=='1'){

                  $('.fail').show();
                  $('.pass').hide();
                  $('#submit').prop('disabled','disabled');
                }
                else{

                  $('.fail').hide();
                  $('.pass').show();
                  $('#submit').prop('disabled','');
                }
              }
          });
        }
      }
      function checkUser(){
         $('.fail2').hide();
                  $('.pass2').hide();
        var user = $('#username').val();

        if(user.length>=3){
          $.ajax({

              url:'<?php echo base_url()."signup/checkUser" ?>',
              data:{'username':user},
              type:'POST',
              dataType:'JSON',
              success:function(data){
                
                if(data=='1'){

                  $('.fail2').show();
                  $('.pass2').hide();
                  $('#submit').prop('disabled','disabled');
                }
                else{

                  $('.fail2').hide();
                  $('.pass2').show();
                  $('#submit').prop('disabled','');
                }
              }
          });
        }
      }
      
      </script>
