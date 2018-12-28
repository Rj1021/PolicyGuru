<!DOCTYPE html>
<html lang="en">
<?php include_once("head.php");?>
<body>
	<?php include_once("header.php");?>
    <section>
      <div class="container-fluid loginPageNew">
        <div class="row">
          <div class="col-md-8 leftArea">
           <div class="panel panel-default">
             <div class="panel-heading"><strong>Agent Info</strong></div>
             <div class="panle-body">
               <ul class="agentInfo">
                 <li>Address</li>
                 <li>Phone</li>
                 <li>Email</li>
               </ul>
             </div>
           </div>
           <div class="formContainerNew">
           <!--login Form Start -->
             <div class="row">
               <div class="col-md-6">
                 <div class="panel panel-default">
                   <div class="panel-heading"><strong>New Customer</strong></div>
                   <div class="panel-body">
                     <form action="">
                      <div class="loginSocial">
                         <a href="#" class="btn btn-primary btn-block">Ragister Using Facebook</a>
                         <a href="#" class="btn btn-danger btn-block">Ragister Using Google +</a>
                         <a href="register.php" class="btn btn-warning btn-block">Ragister Using Email</a>
                      </div>
                     </form>
                   </div>
                 </div>
               </div> <!-- left login Buttons -->

               <div class="col-md-6">
                 <div class="panel panel-default">
                   <div class="panel-heading"><strong>Existing Customer</strong></div>
                   <div class="panel-body">
                     <form action="">
                       <div class="formGroup">
                        <label for="Username">Username</label>
                        <input type="text" id="Username" placeholder="Username" class="form-control">
                      </div> 

                      <div class="formGroup">
                        <label for="Password">Password</label>
                        <input type="password" id="Password" placeholder="Password" class="form-control">
                      </div>
                    
                      <div class="loginButton text-right">
                        <a href="#" class="btn btn-success">Login</a>
                      </div>
                     </form>
                   </div>
                  </div>
               </div> <!-- right login Buttons -->
             </div>
             <!--login Form ends -->

             <!--form Buttons -->
             <div class="blogButtons">
               <div class="row">
                 <div class="col-md-4"><a href="javascript:void(0);">Coverage Comparison</a></div>
                 <div class="col-md-4"><a href="javascript:void(0);">Community Forum</a></div>
                 <div class="col-md-4"><a href="javascript:void(0);">Request a new quote</a></div>
               </div>
             </div>
             <!--form Buttons Ends -->

           </div>
          </div>
        <div class="col-md-4 rightArea">
          <div class="agentBox">
             <div class="userBox"></div>
             <div><a href="javascript:void(0);" class="btn btn-primary btn-block">Text Me</a></div>
          </div>
        </div>
        </div>
      </div>
    </section>
	<?php include_once("footer.php");?>
  </body>
</html>