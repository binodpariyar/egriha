          <div id="main_secondary"><!-- Main Content -->
            
            <div id="content_form"><!-- Content Starts -->
              <h2>Fill the form below we will help you out</h2>
              <hr />

              <div class="entry">
                <div class="entry_top"><!--top design --></div>
                <div class="entry_body">


                 <form method="post" action="<?php echo base_url('signup/add') ?>" id="contactform">


                  <div>
                   <label for="firstname"><strong>First Name:</strong></label>
                   <input type="text" size="50" name="first_name" id="firstname" required="required"  />
                 </div>
                  <div>
                 <label for="email"><strong>Email:</strong></label>
                   <input type="email" size="50" name="email" id="email" value="" required="required" />
                 </div>
                   <div>
                   <label for="address"><strong>Address:</strong></label>
                   <input type="text" size="50" name="address" id="address" value="" required="required" />
                 </div>

                 <div>
                   <label for="mobile"><strong>Mobile:</strong></label>
                   <input type="text" size="50" name="mobile" id="mobile" value="" required="required" />
                 </div>
                   <div style="margin-bottom:10px;">
                        <label for="country"><strong>To:</strong></label>
                        <select id="type"required="required">
                          <option>Buy</option>
                          <option>Rent</option>
                         
                       </select>
                     </div>

                    <div style="margin-bottom:10px;">
                        <label for="country"><strong>Select Property:</strong></label>
                        <select id="type"required="required">
                          <option>House</option>
                          <option>Land</option>
                          <option>Appartment</option>
                          <option>Flat</option>
                          <option>Other Specify</option>
                       </select>
                     </div>

                       <div>
               <label for="description"><strong>Other Description:</strong></label>
               <textarea rows="5" cols="50" name="description" id="description" class="required"></textarea>
             </div>
                  
                
               
               
             
                 <div style="margin-top:10px;">
                   <input type="submit" class="submit" value="Submit" name="Submit" />
                 </div>

              </form>
            </div><!-- entry body ends -->



            <div class="entry_bottom"><!-- bottom design --></div>
          
          </div>


        </div>


        <!-- Content Ends -->


      </div>
