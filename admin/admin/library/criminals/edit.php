<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_criminal WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);

    $firstname         = $row['firstname'];
	$lastname          = $row['lastname'];
	$image             = $row['image'];
	$type              = $row['type'];
	$country           = $row['country'];
	$city              = $row['city'];
	$religion          = $row['religion'];
	$email             = $row['email'];
if(isset($_POST['update_update']))
    {   
      $firstname        = $_POST['firstname'];
      $lastname         = $_POST['lastname'];
      $type             = $_POST['type'];
      $country          = $_POST['country'];
      $city             = $_POST['city'];
      $religion         = $_POST['religion'];
      $email            = $_POST['email'];
      $query		       = "UPDATE tbl_criminal SET    
                                               firstname='$firstname',
											   lastname='$lastname',
											   type='$type',
											   country='$country',
											   city='$city',
											   religion='$religion',
											   email='$email' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=4','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Criminals</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>First Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text"value="<?php echo $firstname; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Last Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" value="<?php echo $lastname; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Type</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="type" type="text" value="<?php echo $type; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Country</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="country" type="text" value="<?php echo $country; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>City</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="city" type="text" value="<?php echo $city; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Religion</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="religion" type="text" value="<?php echo $religion; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" value="<?php echo $email; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="submit" class="btn btn-theme form-control" name="update_update" value="Update Data">
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