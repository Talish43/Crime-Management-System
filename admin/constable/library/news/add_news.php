<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add News</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="" enctype="multipart/form-data">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>News Type</b></label>
                    <div class="col-lg-10">
                     <select class="form-control" name="ntype" required>
                       <option value="none">Select News Type</option>
                         <option value="Crime">Crime News</option>
                         <option value="Political">Political News</option>
                         <option value="Sports">Sports News</option>
                     </select>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="username" class="control-label col-lg-2"><b>News Heading</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="username" name="nheading" type="text" placeholder="Enter News Heading" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>News Image</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="pic" type="file" />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b> News Details</b></label>
                    <div class="col-lg-10">
                     <textarea class="form-control" rows="10" name="ndetails" placeholder="Enter News Details"></textarea>
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
      $ntype           = $_POST['ntype'];
      $nheading        = $_POST['nheading'];
      $picName          = $_FILES['pic']['name'];
      $tempName         = $_FILES['pic']['tmp_name'];
      $picFolder        = "img/news/".$picName;
      move_uploaded_file($tempName,$picFolder); //or copy
      $ndetails        = $_POST['ndetails'];
      $query           ="INSERT INTO tbl_news(ntype,nheading,image,ndetails) 
                                       VALUES('$ntype','$nheading','$picFolder','$ndetails')";
      $result    = mysqli_query($conn,$query);
      if($result>0)
        echo "<script>window.open('index.php?pid=16','_self')</script>";
      else
        echo "<script>alert('Record Not Added');</script>";
    }
?>