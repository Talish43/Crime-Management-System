
<?php
include ("includes/header.php");
include ("includes/nav.php");
?>

    <center>
	   <div style="width:400px; height:400px; margin:0 auto; margin-top:200px;">
	   <img src="images/icon.png" alt="Logo" style="width:150px; height:100px; margin-bottom:30px;" />
	   <?php 
            include "connect/db.php";
	        if(isset($_POST['submit']))
	    {
		    $name    	  = $_POST['name'];
			$pass         = $_POST['pass'];
			$query		  = "SELECT * FROM tbl_registered_users WHERE email ='$name' AND pass = '$pass'";
		    $result 	  = mysqli_query($conn,$query);
			if(mysqli_num_rows($result)>0)
				{
					$_SESSION['name'] = $name;
					$_SESSION['pass'] = $pass;
					header('location:index.php?session1=Login Successfull');
				}
			else
				 echo '<div class="alert alert-danger text-center">
                       <strong>Invalid</strong> User Name Or Password
                       </div>';
		}
?>
	       <form action="" method="POST">
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-user"></i></span>
		   <input type="email" class="form-control" name="name" placeholder="Enter User Email" required>
		   </div>
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <span class="input-group-addon" id="sizing-addion1"><i class="glyphicon glyphicon-lock"></i></span>
		   <input type="password" class="form-control" name="pass" placeholder="Enter User Password" required>
		   </div>
		   <br>
		   <div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
		   <input type="submit"class="form-control" style=" border-radius: 10px; background-color:red; color:white;" name="submit" value="Login">
		   </div>
		   </form>

	   </div>
	</center>

<?php 
include ("includes/footer.php");
?>


<!--End Of Login

	<div class="input-group input-group-lg" style="width:400px; margin:0 auto;">
	
	<input type="text" name="name" placeholder="User Name"  class="form-control" />
	</div>
    
	
	<input type="password" name="pass" class="form-control"  placeholder="User Password"/>
	</div>
    
	<input type="submit" class="form-control" style="background-color:red; color:white;" name="submit" value="LOGIN" />
	<div style="margin-top:100px;"></div>
	</div>
   </form>
	</div>
	</div>
    </div>
	</div>
    </div>
     -->