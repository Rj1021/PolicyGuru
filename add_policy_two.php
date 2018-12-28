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
              <h3>Add Policy</h3>
              <div class="panel panel-default">
                <div class="panel-heading">Help Text - Some text related to policy</div>
                <div class="panel-body">
                  <form action="" class="form-inline">
                    <div class="form-group">
                      <div class="col-md-4">
                        <label>Policy Type <span>(Individual/Family Account)</span></label>
                        <select id="example-selectAllJustVisible" multiple="multiple">
                          <option value="Auto">Auto</option>
                          <option value="Home Owner">Home Owner</option>
                          <option value="Renter">Renter</option>
                          <option value="Life">Life</option>
                          <option value="Boat">Boat</option>
                          <option value="Bike">Bike</option>
                          <option value="Liability/Umbrella">Liability/Umbrella</option>
                          <option value="Other">Other</option>
                        </select>
                       </div>
                      <div class="col-md-4">
                          <label>Insurance Carrier</label>
                          <input type="text" class="form-control">
                      </div>
                      <div class="col-md-4">
                        <label>Policy Number</label>
                        <input type="text" class="form-control">
                       </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-4">
                            <label>Policy Type</label>
                            <select class="form-control">
                              <option value="Auto">Auto</option>
                              <option value="Home Owner">Home Owner</option>
                              <option value="Renter">Renter</option>
                              <option value="Life">Life</option>
                              <option value="Boat">Boat</option>
                              <option value="Bike">Bike</option>
                              <option value="Liability/Umbrella">Liability/Umbrella</option>
                              <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                          <label>Effective Date</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                          <label>Expiration Date</label>
                          <input type="text" class="form-control">
                        </div>

                      </div>

                      <div class="form-group">
                        <div class="col-md-4">
                          <label>Premium</label>
                          <input type="text" class="form-control">
                        </div>
                        <div class="col-md-4">
                          <label>Upload File</label>
                          <input type="file" class="form-control">
                        </div>

                        <div class="col-md-4 text-right">
                         <div class="addPolicyBtn"><button class="btn btn-primary">Add Policy</button></div>
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
                      <th>Street Address</th>
                      <th>City</th>
                      <th>Zip</th>
                      <th>State</th>
                      <th>Combined Single Unit</th>
                      <th>Replacement cost/ Actual Cash Value</th>
                      <th>Dwelling Limit</th>
                      <th>Other sturcter limit</th>
                      <th>contet unit</th>
                      <th>limit</th>
                      <th>Expencess</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>car1</td>
                      <td>India</td>
                      <td>110037</td>
                      <td><a href="javascript:void(0);">Delhi</a></td>
                      <td><a href="javascript:void(0);">123</a></td>
                      <td>99999</td>
                      <td>133</td>
                      <td>1334</td>
                      <td>123</td>
                      <td>200</td>
                      <td>500</td>
                    </tr>
                    <tr>
                      <td>car1</td>
                      <td>India</td>
                      <td>110037</td>
                      <td><a href="javascript:void(0);">Delhi</a></td>
                      <td><a href="javascript:void(0);">123</a></td>
                      <td>99999</td>
                      <td>133</td>
                      <td>1334</td>
                      <td>123</td>
                      <td>200</td>
                      <td>500</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="row">
                  <div class="col-md-12 text-right">
                  <button class="btn btn-primary">Report a Claim</button>
                </div>
              </div>
              <!--claim table ends -->

              <h4>Other Coverages</h4>
              <div class="table-responsive">
                <table class="table table-bordered">
                  <tr>
                    <thead>
                      <th>Heading</th>
                      <th>Heading</th>
                      <th>Heading</th>
                      <th>Heading</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>lorem ipsum</td>
                        <td>lorem ipsum</td>
                        <td>lorem ipsum</td>
                        <td>lorem ipsum</td>
                      </tr>
                    </tbody>
                  </tr>
                </table>
              </div>

           </div>
         </div>
      </div>
    </section>
	<?php include_once("footer.php");?>
  </body>
</html>