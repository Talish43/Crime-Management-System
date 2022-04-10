<?php
include "connect/db.php";
$delte_id = $_REQUEST['id'];
$query = "DELETE FROM tbl_registered_users WHERE id = '$delte_id'";
$result = mysqli_query($conn,$query);
if($result>0)
{
    echo "<script>window.open('index.php?pid=34','_self')</script>";  
}
else
{
    echo"<script>alert('Recod Not Deleted')</script>";
}
?>