<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
           <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Help</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2"><b>Type</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="hdtype" type="text" placeholder="Enter Help Type" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Detail</b></label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="10" id="username" name="hddetail" placeholder="Enter Update Detail " ></textarea>
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
      $hdtype          = $_POST['hdtype'];
      $hddetail        = $_POST['hddetail'];
      $query           ="INSERT INTO tbl_help(hdtype,hddetail) VALUES('$hdtype','$hddetail')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=12','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>