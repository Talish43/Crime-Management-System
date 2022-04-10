<?php
include "connect/db.php";
    $delte_id = $_REQUEST['id'];
    $query    = "SELECT * FROM tbl_users WHERE id = '$delte_id'";
    $result   = mysqli_query($conn,$query);
    $row      =mysqli_fetch_assoc($result);
    $an       = $row['application_number'];
	$query   = "DELETE FROM tbl_fir WHERE application_number = '$an'";
    $result  = mysqli_query($conn,$query);
    if($result>0)
    {
	    $query1 = "DELETE FROM tbl_users WHERE id = '$delte_id'";
        $result1 = mysqli_query($conn,$query1);
        if($result1>0)
        {
        	echo "<script>window.open('index.php?pid=31','_self')</script>";
	    }
	    else
        {
	        echo"<script>alert('User Not Deleted')</script>";
        }
    }
    else
    {
    	echo"<script>alert('Recod Not Deleted')</script>";
    }
 ?>