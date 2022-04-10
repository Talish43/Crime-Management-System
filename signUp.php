<?php
include ("includes/header.php");
include ("includes/nav.php");
?>
    <center>
	       <div style="width:400px; min-height:400px; margin:0 auto; margin-top:180px;">
           <img src="images/icon.png" alt="Logo" style="width:150px; height:100px; margin-bottom:30px;" />
           <h3>User Registration</h3>
           <?php 
              include "connect/db.php";
	            if(isset($_POST['submit']))
		        {
		              $name    	  = $_POST['name'];
			          $email         = $_POST['email'];
			          $pass         = $_POST['pass'];
			          $cnic         = $_POST['cnic'];
			          $phone         = $_POST['phone'];
			          $query		  = "INSERT INTO tbl_registered_users(name,email,pass,cnic,phone)
							                          VALUES('$name','$email','$pass','$cnic','$phone')";
		              $result 	  = mysqli_query($conn,$query);
			    if($result>0)
				{
					echo '<div class="alert alert-success text-center">
                          <h4 style="padding-top:10px; line-height:20px;">Sign Up Successfull</h4>
                           </div>';
				}
			else
				echo "<script> alert('Sorry An Error Occured'); </script>";
		}
?>
	       <form action="" method="POST">
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-user"></i></span>
		   <input type="text" class="form-control" name="name" placeholder="Enter Name">
		   </div>
           <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-info-sign"></i></span>
		   <input type="email" class="form-control" name="email" placeholder="Enter Email">
		   </div>
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-lock"></i></span>
		   <input type="password" class="form-control" name="pass" placeholder="Enter Password">
		   </div>
           <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-home"></i></span>
		   <input type="text" class="form-control" name="cnic" placeholder="Enter CNIC">
		   </div>
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-earphone"></i></span>
		   <input type="text" class="form-control" name="phone" placeholder="Enter Phone Number">
           </div>
		   <br>
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <input type="submit"class="form-control" style=" border-radius: 10px; background-color:red; color:white;" name="submit" value="SIGNUP">
		   </div>
		   </form>
	   </div>
	</center>

<?php 
include ("includes/footer.php");
?>