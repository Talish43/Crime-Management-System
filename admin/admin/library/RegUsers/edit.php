<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_registered_users WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
      $name        = $row["name"];
      $email       = $row["email"];
      $pass        = $row["pass"];
      $cnic        = $row['cnic'];
      $phone       = $row['phone'];
if(isset($_POST['update_update']))
    {

      $name         = $_POST['name'];
      $email        = $_POST['email'];
      $pass         = $_POST['pass'];
      $cnic         = $_POST['cnic'];
      $phone        = $_POST['phone'];
      $query		       = "UPDATE tbl_registered_users SET    
                         name='$name',
											   email='$email',
											   cnic='$cnic',
											   phone='$phone',
											   pass='$pass' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=34','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!

<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Registered User</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="name" type="text" value="<?php echo $name; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email"value="<?php echo $email; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Cnic</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="cnic" type="text" value="<?php echo $cnic; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Phone</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="phone" type="text" value="<?php echo $phone; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>Password</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="pass" type="password"  value="<?php echo $pass; ?>" required />
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