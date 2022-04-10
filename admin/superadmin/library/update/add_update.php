<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
           <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Update</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Update Type</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="uptype" type="text" placeholder="Enter Update Type" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Update Heading</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="upheading" type="text" placeholder="Enter Update Heading" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Update Detail</b></label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="10" id="username" name="updetail" placeholder="Enter Update Detail " ></textarea>
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
      $upheading       = $_POST['upheading'];
      $uptype          = $_POST['uptype'];
      $updetail        = $_POST['updetail'];
      $postedby        = "Super Admin";
      $query           ="INSERT INTO tbl_update(upheading,uptype,updetail,postedby) VALUES('$upheading','$uptype','$updetail','$postedby')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=10','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>