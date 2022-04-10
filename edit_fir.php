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
    $edit_id = $_REQUEST['id'];
    $query = "SELECT * from tbl_fir WHERE id = '$edit_id'";
    $result = mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $name              = $row['applicant_name'];
	$applicant_cell    = $row['applicant_cell'];
	$applicant_cnic    = $row['applicant_cnic'];
	$email             = $row['email'];
	$district          = $row['district'];
	$city              = $row['city'];
	$address           = $row['address'];
	$fir_catagory      = $row['fir_catagory'];
    $pass              = $row['pass'];
    $placeofocc        = $row['placeofocc'];
	$dateofocc         = $row['dateofocc'];
	$timeofocc         = $row['timeofocc'];
	$details           = $row['details'];
  if(isset($_POST['update_update']))
    { 
      $name_update              = $_POST['ap_name_update'];
	  $applicant_cell_update    = $_POST['ap_cell_update'];
	  $applicant_cnic_update    = $_POST['ap_cnic_update'];
	  $email_update             = $_POST['email_update'];
	  $district_update          = $_POST['district_update'];
	  $city_update              = $_POST['city_update'];
	  $address_update           = $_POST['address_update'];
	  $fir_catagory_update      = $_POST['catagory_update'];
      $pass_update              = $_POST['pass_update'];
      $placeofocc_update        = $_POST['placeofocc_update'];
	  $dateofocc_update         = $_POST['dateofocc_update'];
	  $timeofocc_update         = $_POST['timeofocc_update'];
	  $details_update           = $_POST['details_update'];
      $query		       = "UPDATE tbl_fir SET    
                                               applicant_name='$name_update',
											   applicant_cell='$applicant_cell_update',
											   applicant_cnic='$applicant_cnic_update',
											   email='$email_update',
											   district='$district_update',
											   city='$city_update',
											   address='$address_update',
											   fir_catagory='$fir_catagory_update',
											   pass='$pass_update',
											   placeofocc='$placeofocc_update',
											   dateofocc='$dateofocc_update',
											   timeofocc='$timeofocc_update',
											   details='$details_update' WHERE id=$edit_id";
        $result            = mysqli_query($conn,$query);
      if($result>0)
        {
              echo "<script>window.open('updated.php?message=Success','_self')</script>"; 
        }
      else
        echo "<script>window.open('updated.php?message=UnSuccess','_self')</script>";
    }
 ?>

<!--FIR--> 
    <div id="fir" class="fir" style="min-height:600px;">
	<div class="container" >
	<div class="row">
	<form name="fir" action="" method="POST">
	<h2 class="wow fadeInUp" data-wow-delay="0.2" style="color: red;">Edit F-I-R</h2>
	<p class="wow fadeInUp" data-wow-delay="0.2"></p>
	<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.8s">
	


	<div class="input-group input-group-lg">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-user"></i></span>
	<input class=" form-control" id="firstname" name="ap_name_update" type="text" value="<?php echo $name; ?>" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.1s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-earphone"></i></span>
	<input class=" form-control" id="firstname" name="ap_cell_update" type="number" value="<?php echo $applicant_cell; ?>" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.4s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-credit-card"></i></span>
	 <input class=" form-control" id="firstname" name="ap_cnic_update" type="number"
	  value="<?php echo $applicant_cnic; ?>" required />
	</div>
<br>



	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.7s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-ok-sign"></i></span>
	<input class="form-control " id="email" name="email_update" type="email" 
	value="<?php echo $email; ?>" required/>
	</div>
	
	<br>

    <div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.0s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
	<input class="form-control " id="email" name="district_update" type="text"
	value="<?php echo $district; ?>" required/>
	</div>

	<br>
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.3s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
    <input class="form-control " id="email" name="city_update" type="text" 
    value="<?php echo $city; ?>" required/>
	</div>
	<br>

	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.6s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
	<input class="form-control " id="email" name="address_update" type="text" 
	value="<?php echo $address; ?>"required/>
	</div>
<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="2.9s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-th-list"></i></span>
	<select class="form-control" name="catagory_update" required>
                <option value="<?php echo $fir_catagory; ?>"><?php echo $fir_catagory; ?></option>
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
	 <input class="form-control " id="password" name="pass_update" type="password"  
	 value="<?php echo $pass; ?>" required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="3.5s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-th-list"></i></span>
	 <input class="form-control " id="password" name="placeofocc_update" type="text" 
	 value="<?php echo $placeofocc; ?>" required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="3.8s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-qrcode"></i></span>
	 <input class="form-control " id="password" name="dateofocc_update" type="date"  
	 value="<?php echo $dateofocc; ?>" required/>
	</div>

<br>
<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="4.1s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-ok-sign"></i></span>
	 <input class="form-control " id="password" name="timeofocc_update" type="time"  
	 value="<?php echo $timeofocc; ?>" required/>
	</div>

<br>

	<div class="input-group wow fadeInUp"  data-wow-delay="3.8s">
	<span class="input-group-addon" style="width:50px;" id="sizing-addion1"><i class="glyphicon glyphicon-info-sign"></i></span>
	<textarea class="form-control" cols="89" rows="10" name="details_update" style="font-size:18px;" placeholder=" Enter FIR Details"><?php echo $details;?></textarea>
	</div>

	<br>
	<br>
	<br>
	
	</div>
	<input type="submit" style="width:400px;" class="btn btn-success form-control wow fadeInUp"  data-wow-delay="4.2s" name="update_update" value="Update FIR"/>
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
