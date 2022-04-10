<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Admin</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="name" type="text" placeholder="Enter Name" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b> Admin Type</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="type">
                        <option value="none">Select One</option>
                        <option value="superadmin">Super Admin</option>
                        <option value="admin">Admin</option>
                        <option value="sho">SHO</option>
                        <option value="constable">Constable</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Cell</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="cell" type="text" placeholder="Enter Cell" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>City</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="city" type="text" placeholder="Enter City" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>Password</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="pass" type="password"  placeholder="Enter Password "/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" placeholder="Enter Email"/>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-theme form-control" name="submit" value="Submit Data">
                  </div>
                </div>
                </form>
              </div>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
<?php
  include "connect/db.php";
  if(isset($_POST['submit']))
    {
      $name        = $_POST['name'];
      $type        = $_POST['type'];
      $cell        = $_POST['cell'];
      $city        = $_POST['city'];
      $pass        = $_POST['pass'];
      $email       = $_POST['email'];
      $query           ="INSERT INTO tbl_admin(name,type,cell,city,pass,email) 
                                         VALUES('$name','$type','$cell','$city',
                                                '$pass','$email')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=14','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>