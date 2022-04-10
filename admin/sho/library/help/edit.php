<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_help WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
    $hdtype          = $row['hdtype'];
    $hddetail        = $row['hddetail'];
if(isset($_POST['update_update']))
    {   
      $uptype               = $_POST['hdtype'];
      $updetail             = $_POST['hddetail'];
      $query		        = "UPDATE tbl_help SET  
                                               hdtype='$uptype',
											   hddetail='$updetail' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=12','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Help</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="confirm_password" class="control-label col-lg-2"><b>Type</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="confirm_password" name="hdtype" type="text" value="<?php echo $hdtype; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Detail</b></label>
                    <div class="col-lg-10">
                      <textarea class="form-control" rows="10" id="username" name="hddetail"><?php echo $hddetail;?></textarea>
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
