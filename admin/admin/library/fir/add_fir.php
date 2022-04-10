<!--main content start-->
<section id="main-content">
      <section class="wrapper">
          <div class="col-lg-12">
            <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Add FIR</h3>
            <div class="form-panel">
              <div class="form">
                <form class="cmxform form-horizontal style-form" id="signupForm" method="POST" action="">
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant Name</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_name" type="text" placeholder="Enter Applicant Name" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant Cell</b></label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="firstname" name="ap_cell" type="number" placeholder="Enter Applicant Cell" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Applicant CNIC</b></label>
                    <div class="col-lg-10">
                       <input class=" form-control" id="firstname" name="ap_cnic" type="number" placeholder="Enter Applicant CNIC" required />
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="email" class="control-label col-lg-2"><b>Email</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="email" type="email" placeholder="Enter Applicant Email" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>District</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="district" type="text" placeholder="Enter Applicant District" required/>
                    </div>
                  </div>

                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>City</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="email" name="city" type="text" placeholder="Enter Applicant City" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Home Address</b></label>
                    <div class="col-lg-10">
                    <input class="form-control " id="email" name="address" type="text" placeholder="Enter Applicant Permanet Address" required/>
                    </div>
                  </div>
                    <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Select Crime Type</b></label>
                    <div class="col-lg-10">
                         <select class="form-control" name="catagory" required>
                         <option value="none">Select Type Of Crime</option>
                        <?php 
                                include "connect/db.php";
                              $query       = "SELECT * FROM tbl_criminal ";
                              $queryResult = mysqli_query($conn,$query);
                              while($row = mysqli_fetch_assoc($queryResult))
                          {
                                            $type            = $row['type'];
                        ?>
                          <option value="<?php echo $type;?>"><?php echo $type;?></option>
                        <?php
                          }
                        ?>
                        <option value="other">Other Crime</option>
                        </select>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="password" class="control-label col-lg-2"><b>Password</b></label>
                    <div class="col-lg-10">
                      <input class="form-control " id="password" name="pass" type="password"  placeholder="Enter Applicant Password " required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Place Of Occurence</b></label>
                    <div class="col-lg-10">
                    <input class="form-control " id="password" name="placeofocc" type="text"  placeholder="Enter Place Of Incident " required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Date Of Occurence</b></label>
                    <div class="col-lg-10">
                    <input class="form-control " id="password" name="dateofocc" type="date"  placeholder="Enter Date Of Incident " required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Time Of Occurence</b></label>
                    <div class="col-lg-10">
                    <input class="form-control " id="password" name="timeofocc" type="time"  placeholder="Enter Time Of Incident" required/>
                    </div>
                  </div>
                  <div class="form-group ">
                    <label for="firstname" class="control-label col-lg-2"><b>Details</b></label>
                    <div class="col-lg-10">
                     <textarea class="form-control" rows="10" name="details" placeholder="Enter FIR Details" required ></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-12">
                      <input type="submit"  class="btn btn-theme form-control" name="submit" value="Save FIR">
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
      $num = rand(1000,100000000); 
      $ap_name             = $_POST['ap_name'];
      $ap_cell             = $_POST['ap_cell'];
      $ap_cnic             = $_POST['ap_cnic'];
      $email               = $_POST['email'];
      $address             = $_POST['address'];
      $district            = $_POST['district'];
      $city                = $_POST['city'];
      $catagory            = $_POST['catagory'];
      $placeofocc          = $_POST['placeofocc'];
      $dateofocc           = $_POST['dateofocc'];
      $timeofocc           = $_POST['timeofocc'];
      $pass                = $_POST['pass'];
      $details             = $_POST['details'];
      $status              = "Pending";
      $officername         = "Not Assigned";
      $officercontact      = "Not Assigned";
      $officerstation      = "Not Assigned";
      $query               = "INSERT INTO tbl_fir(application_number,applicant_name,applicant_cell,
                                               applicant_cnic,address,district,city,fir_catagory,placeofocc,
                                               dateofocc,timeofocc,pass,email,details,status,officer_name,
                                               officer_contact,police_station)
                                        VALUES('$num','$ap_name','$ap_cell','$ap_cnic','$address',
                                               '$district','$city','$catagory','$placeofocc','$dateofocc',
                                               '$timeofocc','$pass','$email','$details','$status',
                                                '$officername','$officercontact','$officerstation')";

        $result            = mysqli_query($conn,$query);

        $query1            = "INSERT INTO tbl_users(application_number,email,name,cnic,phone,pass)
                                        VALUES('$num','$email','$ap_name','$ap_cnic',
                                               '$ap_cell','$pass')";
        $result1            = mysqli_query($conn,$query1);
      if($result>0 & $result1>0 )
        {
          echo "<script>window.open('index.php?pid=2','_self')</script>";
        }
      else
        echo "<script> alert('Sorry An Error Occured'); </script>";
    }
?>