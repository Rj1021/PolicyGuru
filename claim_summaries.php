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
              <h3>Claim Summary</h3>
              <div class="panel panel-default">
                <div class="panel-heading">Help Text - Some text related to Claim Summary</div>
                <div class="panel-body">
                  <form action="" class="form-inline">
                    <div class="form-group">
                      <div class="col-md-4">
                          <label>Claim Type:</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                          <label>Loss Date:</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label>Claim Number:</label>
                        <input type="text" class="form-control">
                       </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                          <label>Adjustor:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                          <label>Adjustor Phone Number:</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                          <label>Adjustor Email:</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>

                      <div class="form-group">
                        
                        <div class="col-md-4">
                          <label>Upload File:</label>
                          <input type="file" class="form-control">
                        </div>

                        <div class="col-md-4 text-center">
                         <div class="addPolicyBtn"><button class="btn btn-primary">Add Claim</button></div>
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
                      <th>Claim Number</th>
                      <th>Claim Type</th>
					  <th>Policy Number</th>
                      <th>Deductable</th>
                      <th>Adjustor</th>
                      <th>Adjustor Phone Number</th>
                      <th>Adjustor Email</th>
                      <th>Status</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>car1</td>
                      <td>99999</td>
                      <td>133</td>
                      <td>1334</td>
                      <td>123</td>
                      <td>200</td>
					  <td>123</td>
                      <td>200</td>
                    </tr>
                    <tr>
                      <td>car1</td>
                      <td>99999</td>
                      <td>133</td>
                      <td>1334</td>
                      <td>123</td>
                      <td>200</td>
					  <td>123</td>
                      <td>200</td>
                    </tr>
                  </tbody>
                </table>
              </div>

           </div>
         </div>
      </div>
    </section>
	<?php include_once("footer.php");?>
  </body>
</html>