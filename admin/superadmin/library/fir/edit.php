<?php
include "connect/db.php";
$edit_id = $_REQUEST['id'];
$query = "SELECT * from tbl_fir WHERE id = '$edit_id'";
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($result);
  $name              = $row['applicant_name'];
	$applicant_cell    = $row['applicant_cell'];
	$applicant_cnic    = $row['applicant_cnic'];
	$fir_catagory      = $row['fir_catagory'];
  $district          = $row['district'];
  $city              = $row['city'];
  $address           = $row['address'];
  $placeofocc        = $row['placeofocc'];
	$officer_name      = $row['officer_name'];
	$officer_contact   = $row['officer_contact'];
	$police_station    = $row['police_station'];
	$details           = $row['details'];
	$status            = $row['status'];
	$message           = $row['message'];
if(isset($_POST['update_update']))
    {   
      $ap_name             = $_POST['ap_name_update'];
      $ap_cell             = $_POST['ap_cell_update'];
      $ap_cnic             = $_POST['ap_cnic_update'];
      $catagory            = $_POST['catagory_update'];
      $ap_on               = $_POST['ap_on_update'];
      $ap_oc               = $_POST['ap_oc_update'];
      $ps                  = $_POST['ps_update'];
      $status              = $_POST['status_update'];
      $message             = $_POST['message_update'];
      $details             = $_POST['details_update'];
      $query		       = "UPDATE tbl_fir SET    applicant_name='$ap_name',
											   applicant_cell='$ap_cell',
											   applicant_cnic='$ap_cnic',
											   fir_catagory='$catagory',
											   officer_name='$ap_on',
											   officer_contact='$ap_oc',
											   police_station='$ps',
											   status='$status',
											   message='$message',
											   details='$details' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
          echo "<script>window.open('index.php?pid=2','_self')</script>";
        }
      else
        echo "<script> alert('An Error Occured'); </script>";
    }
?>
<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
           <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Edit FIR</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_name_update" type="text" value="<?php echo $name; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant Cell</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_cell_update" type="text" value="<?php echo $applicant_cell; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant CNIC</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_cnic_update" type="text" value="<?php echo $applicant_cnic; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>FIR Catagory</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="catagory_update" required>
                        <option value="<?php echo $fir_catagory; ?>"><?php echo $fir_catagory; ?></option>
                        <option value="Murder">Murder</option>
                        <option value="Kidnapped">Kidnapped</option>
                        <option value="Rape">Rape</option>
                        <option value="Terrorist">Terrorist</option>
                        <option value="other">Other Crime</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant District</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="district" type="text" value="<?php echo $district; ?>" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant City</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="city" type="text" value="<?php echo $city; ?>" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant Home Address</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="address" type="text" value="<?php echo $address; ?>" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Place Of Occurance</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="district" type="text" value="<?php echo $placeofocc; ?>" readonly />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Officer Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_on_update" type="text" value="<?php echo $officer_name; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Officer Contact</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_oc_update" type="text" value="<?php echo $officer_contact; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Police Station</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="ps_update" required >
                        <option value="<?php echo $police_station; ?>"><?php echo $police_station; ?></option>
                        <?php
                             $query       = "SELECT * FROM tbl_station";
                             $queryResult = mysqli_query($conn,$query);
                             while($row = mysqli_fetch_array($queryResult))
                             {
                                 $station_name  = $row["sname"];
                               ?>
                                   <option value="<?php echo $station_name;?>"><?php echo $station_name;?></option>
    
                               <?php
                                   }
                               ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Status</b></label>
                    <div class="col-lg-10">
                      <select class="form-control" name="status_update" required >
                        <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                        <option value="Not Viewed">Not Viewed</option>
                        <option value="Pending">Pending</option>
                        <option value="Solved">Solved</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Message</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="message_update" type="text" value="<?php echo $message; ?>" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Details</b></label>
                    <div class="col-lg-10">
                      <textarea name="details_update" cols="120" rows="20" 
                      style="border-radius:5px; margin-top:7px;"><?php echo $details; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="submit"  class="btn btn-theme form-control" name="update_update" value="Update FIR">
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