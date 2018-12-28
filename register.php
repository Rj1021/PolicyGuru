<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php");?>
<body>
	<?php include_once("header.php");?>
    <section>
      <div class="container-fluid">
		<div class="col-md-12">
           <div class="signUpBox">
		   <h3>User Registration</h3>
            <div class="panel panel-default">
              <div class="panel-heading">Some Title Related to Ragistration</div>
              <div class="panel-body">
			<form  action="email_verification.php">
              <div class="form-group vertical-center">
                <label class="control-label col-sm-4" for="email">Email: <span class="labelComment">(We will send you an email to confirm the address)</span>
				</label>
                <div class="col-sm-9  col-md-9 col-lg-8">
                  <input type="email" class="form-control" id="email" placeholder="Enter email">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Password:</label>
                <div class="col-sm-9 col-md-9 col-lg-8">
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-4" for="pwd">Confirm Password:</label>
                <div class="col-sm-9 col-md-9 col-lg-8">
                  <input type="password" class="form-control" id="pwd" placeholder="Enter password">
                </div>
              </div>
               <div class="form-group">
				<div class="col-md-12 text-right">
                  <button type="submit" class="btn btn-primary">Register</button>
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