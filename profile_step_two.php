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
		   <h3>Update Profile Step Two</h3>
            <div class="panel panel-default">
              <div class="panel-heading">Some Title Related to Update Profile Step Two</div>
              <div class="panel-body">
            <form>
              <div class="form-group">
                <label class="control-label col-sm-5" for="email">How many homes do you own:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
                  <input type="text" class="form-control" id="name" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-5" for="email">How many cars do you own:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
                  <input type="text" class="form-control" id="email" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-5" for="pwd">Do you own a boat:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
                  <input type="text" class="form-control" id="pwd" placeholder="">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-5" for="pwd">Are you married:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
					<label class="radio-inline">
                    <input type="radio" name="optradio">Yes
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="optradio">No
                    </label>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-5" for="pwd">How many children do you have:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
                  <input type="number" min="0" class="form-control" id="pwd" placeholder="">
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-5" for="pwd">Do you own a small business:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
					<label class="radio-inline">
                    <input type="radio" name="optradio">Yes
                    </label>
                    <label class="radio-inline">
                    <input type="radio" name="optradio">No
                    </label>
                </div>
              </div>
			  <div class="form-group">
                <label class="control-label col-sm-5" for="pwd">Business Name:</label>
                <div class="col-sm-9 col-md-9 col-lg-7">
                  <input type="text" class="form-control" id="pwd" placeholder="">
                </div>
              </div>
               <div class="form-group">
                <div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary">Submit</button>
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