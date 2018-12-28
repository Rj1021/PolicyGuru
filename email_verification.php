<!DOCTYPE html>
<html lang="en">
  <?php include_once("head.php");?>
  <body>
	<?php include_once("header.php");?>
    <section>
      <div class="container-fluid">
         <div class="col-md-12">
           <div class="signUpBox">
		   <h3>Confirm Email</h3>
            <div class="panel panel-default">
              <div class="success-msg">Your email has been validated. Please enter your password to proceed.</div>
              <div class="panel-body">
            <form action="user_dashboard.php">
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Password:</label>
                <div class="col-sm-9 col-md-9 col-lg-8">
                  <input type="password" class="form-control" id="name" placeholder="Enter Password">
                </div>
              </div>
               <div class="form-group">
				<div class="col-md-11 text-right">
                  <button type="submit" class="btn btn-primary">First time Login</button>
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