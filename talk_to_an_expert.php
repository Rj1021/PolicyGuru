<!DOCTYPE html>
<html lang="en">
  <?php include_once("head.php");?>
  <body>
	<?php include_once("header.php");?>
    <section>
      <div class="container-fluid">
         <?php include_once("left_menu.php");?>
         <div class="col-md-10 rightAreaInner">
           <div class="updateProfileBox">
              <div class="row">
                <div class="col-md-12">
                  <ul class="innerHeadButtons">
                    <li><a href="#">Update Profile</a></li>
                    <li><a href="#">Add Policies</a></li>
                    <li><a href="#">Add Claims</a></li>
                  </ul>
                </div>
              </div>
              <h3>Talk to an Expert</h3>
              <div class="panel panel-default">
                <div class="panel-heading">Help Text - Some text related to Talk to an Expert</div>
                <div class="panel-body">
                  <form action="" class="form-inline">
                    <div class="form-group">
                      <div class="col-md-3">
                          <label>Zip Code</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-3">
                          <label>Expertise</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-3">
                        <label>Distance</label>
                        <input type="text" class="form-control">
                       </div>
					   <div class="col-md-3 text-right">
						<div class="addPolicyBtn"><button class="btn btn-primary">Search Experts</button></div>
                       </div>
                    </div>
                  </form>
                </div>
              </div> <!--ends of from Panel -->
              
              <!--claim table -->
              <div class="table-responsvie">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Picture</th>
                      <th>Name</th>
                      <th>Address / Phone</th>
                      <th>Distance</th>
                      <th>Expertise</th>
                      <th>Affiliations</th>
                      <th>Select</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="user_img/image1.png" alt="Picture"></td>
					  <td>Expert 1</td>
                      <td>Address, 1234567890</td>
                      <td>2.1</td>
                      <td>Auto HomeSmall Business -Frenchises</td>
                      <td>None - Independent</td>
                      <td><input type="checkbox" name="Forgiveness" value="1"></td>
                    </tr>
                    <tr>
                      <td><img src="user_img/image1.png" alt="Picture"></td>
					  <td>Expert 1</td>
                      <td>Address, 1234567890</td>
                      <td>2.1</td>
                      <td>Auto HomeSmall Business -Frenchises</td>
                      <td>None - Independent</td>
                      <td><input type="checkbox" name="Forgiveness" value="1"></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                  <div class="col-md-12 text-right">
                  <button class="btn btn-primary">Contact Selected Expert</button>
                </div>
              </div>
              <!--claim table ends -->

           </div>
         </div>
      </div>
    </section>
	<?php include_once("footer.php");?>
  </body>
</html>