<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_station WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
      $scode        = $row['scode'];
      $scity        = $row['scity'];
      $sname        = $row['sname'];
      $shoname      = $row['shoname'];
      $scontact     = $row['scontact'];
      $email        = $row['email'];
if(isset($_POST['update_update']))
    {   
      $scode        = $_POST['scode'];
      $scity        = $_POST['scity'];
      $sname        = $_POST['sname'];
      $shoname      = $_POST['shoname'];
      $scontact     = $_POST['scontact'];
      $email        = $_POST['email'];
      $query		       = "UPDATE tbl_station SET    
                                               scode='$scode',
											   scity='$scity',
											   sname='$sname',
											   shoname='$shoname',
											   scontact='$scontact',
											   email='$email' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=6','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Station</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Station Code</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="scode" type="text" value="<?php echo $scode; ?>" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Station City</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="scity" type="text" value="<?php echo $scity; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Station Name</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="sname" type="text"value="<?php echo $sname; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>SHO Name</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="shoname" type="text"  value="<?php echo $shoname; ?>" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2"><b>Station Contact</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="scontact" type="text" value="<?php echo $scontact; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" value="<?php echo $email; ?>" required/>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-theme form-control" name="update_update" value="Submit Data">
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

