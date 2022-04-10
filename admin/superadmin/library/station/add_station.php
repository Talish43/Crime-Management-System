<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Station</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Station Code</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="scode" type="text" placeholder="Enter Station Code" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Station City</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="scity" type="text" placeholder="Enter Station City" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Station Name</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="sname" type="text" placeholder="Enter Station Name" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>SHO Name</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="shoname" type="text"  placeholder="Enter SHO Name "/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2"><b>Station Contact</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="scontact" type="text" placeholder="Enter Station Contact" />
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
      $scode        = $_POST['scode'];
      $scity        = $_POST['scity'];
      $sname        = $_POST['sname'];
      $shoname      = $_POST['shoname'];
      $scontact     = $_POST['scontact'];
      $email        = $_POST['email'];
      $query        ="INSERT INTO tbl_station(scode,scity,sname,shoname,scontact,email) VALUES('$scode','$scity','$sname','$shoname','$scontact','$email')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=6','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>