<?php 
session_start();
if(isset($_SESSION['name']))
{
include ("includes/header.php");
?>

<!--NavBar-->
<div id="myNavbar" class="navbar navbar-default navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	  	<div class="top_header">
		  <div class="row" style="width:102%; height:70px; background-color:black;"  id="top_header_area">
		  <div style="padding-top:18px;"></div>
			  <div class="col-lg-7">
			  <font style="color:white; line-height:40px; font-size:16px;">  <i class="glyphicon glyphicon-earphone"></i>   +923046767793</font>
			  </div>
			  <div class="col-lg-4">
				  <form class="form-inline" action="search.php" method="POST">
					  <div class="form-group">
						  <input type="text" required class="form-control search_box" name="search_text" placeholder="Check Your FIR Status">
					  </div>
					  <div class="form-group">
					  	<button type="submit" name="submit" class="form-control btn btn-success search_button" style="background-color: red; color: white; width: 80px; height:38px; border: 1px solid black; ">     <i class="	glyphicon glyphicon-search"></i></button>
					  </div>
				  </form>
			  </div>
			  <div class="col-lg-1">
			  	
			  </div>
		  </div>
		</div>
      </div>
	  <div class="container-fluid">
	  <div class="navbar-header">
	  
	  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  <span class="icon-bar"></span>
	  </button>
	  <a href="index.php" class="navbar_brand"><img src="images/logo.png" alt="Logo" style="width:200px;"></a>
	  </div>
	  <div class="navbar-collapse collapse">
	  <div style="padding-top:12px; margin-right:30px;">
	  <ul class="nav navbar-nav navbar-right">
	  <li><a href="index.php"><i class="glyphicon glyphicon-home"></i>         Home</a></li>
	  <li><a href="all_news_type.php"><i class="glyphicon glyphicon-globe"></i></i>         News</a></li>
	  <li><a href="criminals.php"><i class="glyphicon glyphicon-warning-sign"></i>         Criminals</a></li>
	  <li><a href="contact.php"><i class="glyphicon glyphicon-earphone"></i>         Contact</a></li>
	  <li><a href="fir.php"><i class="	glyphicon glyphicon-pencil"></i>        FIR</a></li>
      <li><a href="logout.php"><i class="glyphicon glyphicon-log-out"></i>        Logout</a></li>
	  </div>
	  </ul>
	  </div>
	  </div>
	  </div>  <!--End Of NavBar-->  
	  


<?php
include ("includes/content.php");
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
          echo '<div class="alert alert-success text-center">
                <h4 style="padding-top:10px; line-height:20px;">FIR Submitted Successfully</h4>
                <p style="text-align:center">Your FIR Number Is :   
                                             &nbsp;&nbsp;&nbsp;
                '.$num.'</p>
                </div>';
          
        }
      else
        echo '<div class="alert alert-danger text-center">
                Sorry <strong>  FIR</strong> Not Submitted
                </div>';
    }
 ?>

<!--FIR--> 
    <div id="fir" class="fir" style="min-height:600px;">
	<div class="container" >
	<div class="row">
	<form name="fir" action="" method="POST">
	<h2 class="wow fadeInUp" data-wow-delay="0.2" style="color: red;">F-I-R</h2>
	<p class="wow fadeInUp" data-wow-delay="0.2"></p>
	<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
	


	<div class="input-group input-group-lg">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-user"></i></span>
	<input class=" form-control" id="firstname" name="ap_name" type="text" placeholder="Enter Applicant Name" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.1s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-earphone"></i></span>
	<input class=" form-control" id="firstname" name="ap_cell" type="number" placeholder="Enter Applicant Cell Number" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.4s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-credit-card"></i></span>
	 <input class=" form-control" id="firstname" name="ap_cnic" type="number" placeholder="Enter Applicant CNIC" required />
	</div>
<br>



	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.7s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-ok-sign"></i></span>
	<input class="form-control " id="email" name="email" type="email" placeholder="Enter Applicant Email" required/>
	</div>
	
	<br>

    <div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.0s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
	<input class="form-control " id="email" name="district" type="text" placeholder="Enter Applicant District" required/>
	</div>

	<br>
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.3s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
    <input class="form-control " id="email" name="city" type="text" placeholder="Enter Applicant City" required/>
	</div>
	<br>

	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.6s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
	<input class="form-control " id="email" name="address" type="text" placeholder="Enter Applicant Permanet Address" required/>
	</div>
<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.9s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-th-list"></i></span>
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

	
	
	
	<br>
	<br>
	<br>
	</div>

	<div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-delay="3.2s">
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="3.2s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-qrcode"></i></span>
	 <input class="form-control " id="password" name="pass" type="password"  placeholder="Enter Applicant Password " required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="3.5s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-th-list"></i></span>
	 <input class="form-control " id="password" name="placeofocc" type="text"  placeholder="Enter Place Of Incident " required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="3.8s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-qrcode"></i></span>
	 <input class="form-control " id="password" name="dateofocc" type="date"  placeholder="Enter Date Of Incident " required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="4.1s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-ok-sign"></i></span>
	 <input class="form-control " id="password" name="timeofocc" type="time"  placeholder="Enter Time Of Incident" required/>
	</div>

<br>

	<div class="input-group wow fadeInUp"  data-wow-delay="3.8s">
	<span class="input-group-addon" style="width:50px;" id="sizing-addion1"><i class="glyphicon glyphicon-info-sign"></i></span>
	<textarea class="form-control" cols="89" rows="10" name="details" style="font-size:18px;" placeholder=" Enter FIR Details"></textarea>
	</div>

	<br>
	<br>
	<br>
	
	</div>
	<input type="submit" style="width:400px;" class="btn btn-success form-control wow fadeInUp"  data-wow-delay="4.2s" name="submit" value="Submit FIR"/>
	</form>

	</div>
	</div>
        </div>
		
		
    <!--End Of FIR --> 

<?php 
include ("includes/footer.php");
?>
<?php
}
else
{
	header("location:index.php");
}
?>


<!-- <br>
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.6s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-list-alt"></i></span>	
	<select class="form-control" name="ps" required>
	<option value="none">Select Police Station</option>
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
	</div> -->