<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_admin WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
      $name        = $row['name'];
      $type        = $row['type'];
      $cell        = $row['cell'];
      $city        = $row['city'];
      $pass        = $row['pass'];
      $email       = $row['email'];
if(isset($_POST['update_update']))
    {   
      $name        = $_POST['name'];
      $type        = $_POST['type'];
      $cell        = $_POST['cell'];
      $city        = $_POST['city'];
      $pass        = $_POST['pass'];
      $email       = $_POST['email'];
      $query		       = "UPDATE tbl_admin SET    
                                               name='$name',
											   type='$type',
											   cell='$cell',
											   city='$city',
											   pass='$pass',
											   email='$email' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=14','_self')</script>";
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
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit Admin</h3>
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
                    <label for="firstname" class="control-label col-lg-2"><b> Admin Type</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="type">
                        <option value="<?php echo $type;?>"><?php echo $type;?></option>
                        <option value="admin">Admin</option>
                        <option value="sho">SHO</option>
                        <option value="constable">Constable</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>Cell</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="cell" type="text" value="<?php echo $cell; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>City</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="city" type="text" value="<?php echo $city; ?>" required  />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>Password</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="pass" type="password"  value="<?php echo $pass; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email"value="<?php echo $email; ?>" required  />
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