<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add Criminals</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>First Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="firstname" type="text" placeholder="Enter First Name" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="lastname" class="control-label col-lg-2"><b>Last Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="lastname" name="lastname" type="text" placeholder="Enter Last Name" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Image</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="pic" type="file" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Type</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="type" required>
                       <option value="none">Select Criminal Type</option>
                         <option value="Highway Robbery">Highway Robbery</option>
                         <option value="Street Robbery">Street Robbery </option>
                         <option value="Terrorist">Terrorist</option>
                         <option value="Drug Peddler">Drug Peddler</option>
                         <option value="Others">Others</option>
                     </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Country</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="country" type="text" placeholder="Enter Country" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>City</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="city" type="text" placeholder="Enter City" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Religion</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="religion" type="text" placeholder="Enter Religion" />
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
      $firstname        = $_POST['firstname'];
      $lastname         = $_POST['lastname'];
      $picName          = $_FILES['pic']['name'];
      $tempName         = $_FILES['pic']['tmp_name'];
      $picFolder        = "img/Criminal/".$picName;
      move_uploaded_file($tempName,$picFolder); //or copy
      $type             = $_POST['type'];
      $country          = $_POST['country'];
      $city             = $_POST['city'];
      $religion         = $_POST['religion'];
      $email            = $_POST['email'];
      $query            ="INSERT INTO tbl_criminal(firstname,lastname,image,type,country,city,religion,email) VALUES('$firstname','$lastname','$picFolder','$type','$country','$city','$religion','$email')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=4','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>