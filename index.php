<?php
$msg =@$_REQUEST['session1'];
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
if(isset($msg))
{
echo '<h4 style="margin-bottom:80px;"><div class="alert alert-success text-center">Login Successfull</div><h4>';
}
?>
	
	    <!--criminals--> 
	
		<div id="criminals" class="criminals">
		<div class="container">
		<div class="row">
		<h2 class="wow fadeInUp" data-wow-delay="0.2" style="color: red;">Criminals</h2>
<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Terrorist'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150' style='margin:0 auto;' height='200' class='img img-responsive' src='admin/superadmin/".$image."'>";
	}
?>
		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="0.8s">
		<div class="packages" style="min-height: 280px;">
		<h4 style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>


<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Highway Robbery'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='120'  style='margin:0 auto;' height='100' class='img img-responsive' height='100' src='admin/superadmin/".$image."'>";
	}
?>


		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="1.2s">
		<div class="packages" style="min-height: 300px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>




<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Street Robbery'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150'  style='margin:0 auto;' height='200' class='img img-responsive' height='200' src='admin/superadmin/".$image."'>";
	}
?>

		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="1.6s">
		<div class="packages" style="min-height: 340px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>
<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Drug Peddler'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150'  style='margin:0 auto;' height='200' class='img img-responsive' height='200' src='admin/superadmin/".$image."'>";
	}
?>



		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="2.0s">
		<div class="packages" style="min-height: 300px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>
		
		
		</div>
		</div>
		</div>
        <!--End Of criminals-->







        <?php
include "connect/db.php";
  if(isset($_POST['submit']))
    {  
      $name             = $_POST['name'];
      $cell             = $_POST['cell'];
      $email            = $_POST['email'];
      $details          = $_POST['details'];
      $query            = "SELECT * FROM tbl_contact WHERE email='$email'";
      $run = mysqli_query($conn,$query);
      if(mysqli_num_rows($run)==1)
      {
      	echo '<div class="alert alert-success text-center">
              <strong>Email</strong> Already Exist!<br>
              Please Try Another <strong>Email</strong>
              </div>';
      }
    else
      {
      $query1            = "INSERT INTO tbl_contact(name,phone,email,message)
                                            VALUES('$name','$cell','$email','$details')";
        if(mysqli_query($conn,$query1))
            {
              echo '<div class="alert alert-success text-center">
                <strong>Message</strong> Successfully Send
                </div>';
            }
        }
    }
 ?>


 <!--contact--> 
	<div id="fir" class="fir" style="min-height:600px;">
	<div class="container" >
	<div class="row">
	<form name="fir" action="" method="POST">
	<h2 style="color:red;" class="wow fadeInUp" data-wow-delay="0.2">Contact</h2>
	<p class="wow fadeInUp" data-wow-delay="0.2"></p>
	<div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.6s">

	<div class="input-group input-group-lg">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-user"></i></span>
	<input class=" form-control" id="firstname" name="name" type="text" placeholder="Enter Name" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.0s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-earphone"></i></span>
	<input class=" form-control" id="firstname" name="cell" type="text" placeholder="Enter Phone Number" required />
	</div>
	<br>
	
	<div class="input-group input-group-lg  wow fadeInUp" data-wow-delay="1.4s">
	<span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-credit-card"></i></span>
	 <input class=" form-control" id="firstname" name="email" type="email" placeholder="Enter Email" required />
	</div>

	
	</div>

	<div class="col-lg-6 col-md-6  wow fadeInUp" data-wow-delay="1.8s">



	<div class="input-group">
	<span class="input-group-addon" style="width:50px;" id="sizing-addion1"><i class="glyphicon glyphicon-edit"></i></span>
	<textarea class="form-control" required cols="89" rows="6" name="details" style="font-size:18px;" placeholder=" Enter Your Message"></textarea>

	</div>
	<br>
	<input type="submit"  class="btn btn-danger form-control" name="submit" value="Send Message">
	</div>
	</form>

	</div>
	</div>
        </div>
    <!--End Of contact-->


    



<?php
include ("includes/footer.php");
 ?>

 <!--news-->  
       
	   <!-- <div id="news" class="news" style="height:700px;">
	   <div class="container">
	   <h2 style="color:red;" class="wow fadeInUp" data-wow-delay="0.2">Latest News</h2>
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <div class="row">
	   <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.8s">
	   <a href="all_news_type.php?type=Crime"><span class="glyphicon glyphicon-eye-open"></span></a>
	   <a href="all_news_type.php?type=Crime"><h4>Crime News</h4></a>
	   </div>
	   

	   	<div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1.4s">
	    <a href="all_news_type.php?type=Politics"><span class="glyphicon glyphicon-refresh"></span></a>
	   <a href="all_news_type.php?type=Politics"><h4><h4>Political News</h4></a>
	   </div>
	
	   
	   <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="1s">
	   <a href="all_news_type.php?type=Sports"><span class="glyphicon glyphicon-flag"></span></a>
	   <a href="all_news_type.php?type=Sports"><h4>Sports News</h4></a>
	   
	   </div>
	   
	   <div class="col-lg-3 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
	    <a href="recenet_updates.php?type=updates"><span class="glyphicon glyphicon-bell"></span></a>
	   <a href="recenet_updates.php?type=updates"><h4>Recenet Updates</h4></a>
	   </div>
	   
	   
	   </div>
	   </div>
	   </div> -->
	   
	   
	    <!--End Of news-->  