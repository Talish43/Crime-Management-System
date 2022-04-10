<!DOCTYPE html>
<html lang="en">
    
<head>
        <title>Crime Management System</title><meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" type="image/png" href="img/logo.png" >
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="css/matrix-login.css" />
        <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <div id="loginbox">   <center> <h2>Welcome To Login</h2>   </center>  
        <form id="loginform" class="form-vertical" action="index.php" method="POST" name="myForm">
                 <div class="control-group normal_text"> <img src="img/logo.png" style="width:100px; height:80px;" alt="Logo" /></div>

<?php 
    include "connect/db.php";
    if(isset($_POST['submit']))
    {
    $user_name = $_POST['user_name'];
    $user_pass = $_POST['user_pass'];
    $admin= "admin";
    $constable= "constable";
    $sho= "sho";
    $superadmin = "superadmin";
    
    $admin_query = "SELECT * FROM tbl_admin WHERE type='$user_name' AND pass = '$user_pass' AND type='$admin'";
    $run_admin   = mysqli_query($conn,$admin_query);

    $constable_query = "SELECT * FROM tbl_admin WHERE type='$user_name' AND pass = '$user_pass' AND type='$constable'";
    $run_constable   = mysqli_query($conn,$constable_query);

    $sho_query = "SELECT * FROM tbl_admin WHERE type='$user_name' AND pass = '$user_pass' AND type='$sho'";
    $run_sho   = mysqli_query($conn,$sho_query);


    $superadmin_query = "SELECT * FROM tbl_admin WHERE type='$user_name' AND pass = '$user_pass' AND type='$superadmin'";
    $run_superadmin   = mysqli_query($conn,$superadmin_query);


    if(mysqli_num_rows($run_sho)==1)
    {
        session_start();
        $_SESSION['sho']=$sho;
        echo header("location:sho/index.php");
    }
    else if(mysqli_num_rows($run_constable)==1)
    {
        session_start();
        $_SESSION['constable']=$constable;
        echo header("location:constable/index.php");
    }
    else if(mysqli_num_rows($run_admin)==1)
    {
        session_start();
        $_SESSION['admin']=$admin;
        echo header("location:admin/index.php");
    }
    else if(mysqli_num_rows($run_superadmin)==1)
    {
        session_start();
        $_SESSION['superadmin']=$superadmin;
        echo header("location:superadmin/index.php");
    }
    else
    {
        echo '<div style="width:300px; margin:0 auto; height:15px; line-height:15px;" class="alert alert-danger text-center">
                       <strong>Invalid</strong> User Name Or Password
                       </div>';
    }
}
?>
    
            
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_lg"><i class="icon-user"> </i></span>
                            <input type="text" name="user_name" placeholder="User Name" />
                            </select>
                        </div>
                    </div>
                </div>
                <div class="control-group">
                    <div class="controls">
                        <div class="main_input_box">
                            <span class="add-on bg_ly"><i class="icon-lock"></i></span>
                            <input type="password" name="user_pass" placeholder="Password" />
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                   <center><input type="submit" value="Login" name="submit" style="width: 200px; height:40px;
                   font-size: 17px;" onclick="return isValid(); " class="btn btn-success" /></center> 
                </div>
            </form>
           
        </div>
        
        <script src="js/jquery.min.js"></script>  
        <script src="js/matrix.login.js"></script> 
    </body>

</html>



