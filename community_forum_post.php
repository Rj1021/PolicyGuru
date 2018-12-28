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
		   <h3>Community Post</h3>
            <div class="panel panel-default">
              <div class="panel-heading">Some Title Related to Community Post</div>
              <div class="panel-body">
            <form>
			  <div class="form-group">
                <label class="control-label col-sm-3" for="email">Subject:</label>
                <div class="col-sm-9 col-md-9 col-lg-8">
                  <input type="text" class="form-control" id="name" placeholder="Enter Subject">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-sm-3" for="email">Details:</label>
                <div class="col-sm-9 col-md-9 col-lg-9">
					<textarea rows="6" cols="52"></textarea>
                </div>
              </div>
               <div class="form-group">
                <div class="col-md-11 text-right">
                  <button type="submit" class="btn btn-primary">Post</button>
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