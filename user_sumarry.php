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
              <h3>User Summary</h3>
              
              <!--claim table -->
              <div class="table-responsvie">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>SN</th>
                      <th>Policy Type</th>
                      <th>Insurance Carrier</th>
                      <th>Policy Number</th>
                      <th>Effective Date</th>
                      <th>Expiry Date</th>
                      <th>Annual Premium</th>
                      <th>Add a claim</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1</td>
					  <td>Auto</td>
                      <td>State Farm</td>
                      <td><a href="javascript:void(0);">SF1234567890</a></td>
					  <td>01/01/2018</td>
                      <td>01/01/2018</td>
                      <td>$1,000.00</td>
                      <td>133</td>
                    </tr>
                    <tr>
                      <td>2</td>
					  <td>Life</td>
                      <td>Metlife</td>
                      <td><a href="javascript:void(0);">SF1234567890</a></td>
					  <td>01/01/2018</td>
                      <td>01/01/2018</td>
                      <td>$700.00</td>
                      <td>133</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--claim table ends -->

           </div>
         </div>
      </div>
    </section>
	<?php include_once("footer.php");?>
  </body>
</html>