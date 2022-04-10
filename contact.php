<?php 

include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
 ?>

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
	<div id="fir" class="contact" style="min-height:600px;">
	<div class="container" >
	<div class="row">
	<form name="fir" action="" method="POST">
	<h2 class="wow fadeInUp" data-wow-delay="0.2" style="color: red;">Contact</h2>
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
