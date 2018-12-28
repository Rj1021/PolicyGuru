<!DOCTYPE html>
<html lang="en">
  <?php include_once("head.php");?>
  <body>
	<?php include_once("header.php");?>
    <section>
      <div class="container-fluid">
         <?php include_once("left_menu.php");?>
         <div class="col-md-10 rightAreaInner">
           <div class="signUpBox">
		   <h3>Update Profile Step One</h3>
            <div class="panel panel-default">
              <div class="panel-heading">Some Title Related to Update Profile Step One</div>
              <div class="panel-body">
            <form>
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Address:</label>
                <div class="col-sm-9 col-md-9 col-lg-9">
                  <input type="text" class="form-control" id="name" placeholder="Enter Address">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">City:</label>
                <div class="col-sm-9 col-md-9 col-lg-9">
                  <input type="text" class="form-control" id="email" placeholder="Enter City">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">State:</label>
                <div class="col-sm-9 col-md-9 col-lg-9">
                  <input type="text" class="form-control" id="pwd" placeholder="Enter State">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="pwd">Zip:</label>
                <div class="col-sm-9 col-md-9 col-lg-9">
                  <input type="text" class="form-control" id="pwd" placeholder="Enter Zip">
                </div>
              </div>
               <div class="form-group">
                <!--<div class="col-sm-offset-3 col-sm-6">-->
				<div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary">Next</button>
                </div>
              </div>
            </form>
			</div>
            </div>
		 </div>
         </div>
      </div>
    </section>
    <?php include_once("footer.php");?>
  </body>
</html>