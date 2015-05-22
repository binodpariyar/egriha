<?php 
if (isset($edit)) {
  $path = admin_url('user_management/update/'.$edit->id);
}
else
{
  $path = admin_url('user_management/process');
}
?>


<form class="form-horizontal col-md-6" role="form" method="post" action="<?php echo $path;?>">
  <div class="form-group">
    <label for="nameinput" class="col-sm-3 control-label">Name:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" required name="name" id="nameinput" placeholder="Name"
      <?php if (isset($edit)) {
        echo 'value="'.$edit->name.'"';
      } ?>
      >
    </div>
  </div>


  <div class="form-group">
    <label for="nameinput" class="col-sm-3 control-label">Email:</label>
    <div class="col-sm-9">
      <input type="email" class="form-control" required name="email" id="nameinput" placeholder="Email"
      <?php if (isset($edit)) {
        echo 'value="'.$edit->email.'"';
      } ?>
      >
    </div>
  </div>

  <div class="form-group">
    <label for="nameinput" class="col-sm-3 control-label">Usernames:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" required name="username" id="nameinput" placeholder="Username"
      <?php if (isset($edit)) {
        echo 'value="'.$edit->username.'"';
      } ?>
      >
    </div>
  </div>

  <div class="form-group">
    <label for="nameinput" class="col-sm-3 control-label">Password:</label>
    <div class="col-sm-9">
      <input type="text" class="form-control" <?php if(!isset($edit->password)) echo "required" ?> name="password" id="nameinput" placeholder="password"/>
      <label for="disabledSelect" style="color:#e50000">
        <?php if (isset($edit)) { echo 'Leave the field blank for not changing the password'; } ?>
      </label>
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Submit</button>
    </div>
  </div>
</form>