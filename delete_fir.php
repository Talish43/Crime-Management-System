<?php 
include "connect/db.php";
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
    $delte_id = $_REQUEST['id'];
    $query    = "SELECT * FROM tbl_fir WHERE id = '$delte_id'";
    $result   = mysqli_query($conn,$query);
    $row      =mysqli_fetch_assoc($result);
    $an       = $row['application_number'];
	$query   = "DELETE FROM tbl_users WHERE application_number = '$an'";
    $result  = mysqli_query($conn,$query);
    if($result>0)
    {
	    $query1 = "DELETE FROM tbl_fir WHERE id = '$delte_id'";
        $result1 = mysqli_query($conn,$query1);
        if($result1>0)
        {
        	echo '<div class="alert alert-success text-center">
                <h4 style="padding-top:10px; line-height:20px;">FIR Deleted Successfully</h4>
                </div>';
	    }
	    else
        {
	        echo '<div class="alert alert-success text-center">
                <h4 style="padding-top:10px; line-height:20px;">FIR Deleted Successfully But FIR User Not Deleted</h4>
                </div>';
        }
    }
    else
    {
    	echo '<div class="alert alert-success text-center">
                <h4 style="padding-top:10px; line-height:20px;">FIR Not Deleted</h4>
                </div>';
    }
 ?>

<?php 
include ("includes/footer.php");
 ?>