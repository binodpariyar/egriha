<style>
  select{
    width: 80%;
    padding: 5px;
  }
</style>
<div id="content_form">
  <h2>Fill the form below we will help you out</h2>
  <div class="entry">
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



     <div >

      <label for="country"><strong>To:</strong></label>

      <select id="type" required="required">

        <option>Buy</option>

        <option>Rent</option>

      </select>

    </div>



    <div >

      <label for="country"><strong>Property:</strong></label>

      <select id="type" required="required">

        <option>House</option>

        <option>Land</option>

        <option>Appartment</option>

        <option>Flat</option>

        <option>Other Specify</option>

      </select>

    </div>



    <div>

      <label for="country"><strong>Area:</strong></label>

      <input type="text" size="50" name="area" id="area" value="" required="required" />

<!--       <select id="type" required="required">

        <option>House</option>

        <option>Land</option>

        <option>Appartment</option>

        <option>Flat</option>

        <option>Other Specify</option>

      </select> -->

    </div>

    

    <div>

      <label for="country"><strong>Location:</strong></label>

      <input type="text" size="50" name="location" id="location" value="" required="required" />

    </div>



    <div>

      <label for="country"><strong>Price Range:</strong></label>

      <select id="type" required="required">

        <option value="Below 10,00,000">Below 10,00,000</option>

        <option value="10,00,000 - 50,00,0000">10,00,000 - 50,00,0000</option>

        <option value="50,00,000 - 80,00,000">50,00,000 - 80,00,000</option>

        <option value="80,00,000 - 1,00,00,000">80,00,000 - 1,00,00,000</option>

        <option value="Above 1,00,00,000">Above 1,00,00,000</option>

      </select>

    </div>



    <div>

     <label for="description"><strong>Other Description:</strong></label>

     <textarea rows="5" cols="50" name="description" id="description" class="required"></textarea>

   </div>

   <div>

     <input type="submit" class="submit" value="Submit" name="Submit" />

   </div>



 </form>

</div>


