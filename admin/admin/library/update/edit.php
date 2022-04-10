<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_update WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
    $uptype          = $row['uptype'];
    $updetail        = $row['updetail'];
if(isset($_POST['update_update']))
    {   
      $uptype               = $_POST['uptype'];
      $updetail             = $_POST['updetail'];
      $query		        = "UPDATE tbl_update SET  
                                               uptype='$uptype',
											   updetail='$updetail' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=10','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Update</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Update Type</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="uptype" type="text" 
                      value="<?php echo $uptype; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Update Details</b></label>
                    <div class="col-lg-10">
                      <textarea name="updetail" cols="120" rows="20" 
                      style="border-radius:5px; margin-top:7px;"><?php echo $updetail; ?></textarea>
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