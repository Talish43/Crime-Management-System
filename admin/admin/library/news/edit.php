<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_news WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
    $ntype              = $row['ntype'];
	$nheading           = $row['nheading'];
	$ndetails           = $row['ndetails'];
if(isset($_POST['update_update']))
    {   
      $ntype           = $_POST['ntype'];
      $nheading        = $_POST['nheading'];
      $ndetails        = $_POST['ndetails'];
      $query		   = "UPDATE tbl_news SET    
                                               ntype='$ntype',
											   nheading='$nheading',
											   ndetails='$ndetails'
											   WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=16','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit News</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>News Type</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ntype" type="text" value="<?php echo $ntype; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>News Heading</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="nheading" type="text" value="<?php echo $nheading; ?>" required   />
                    </div>
                  </div>
                    <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>New Details</b></label>
                    <div class="col-lg-10">
                      <textarea name="ndetails" cols="120" rows="20" 
                      style="border-radius:5px; margin-top:7px;"><?php echo $ndetails; ?></textarea>
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