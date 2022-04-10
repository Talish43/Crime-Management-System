<?php
include "dbConnect/connect.php";
$delte_id = $_REQUEST['hdId'];
$query = "DELETE FROM tbl_fir WHERE fir_id = '$delte_id'";
$result = mysqli_query($conn,$query);
if($result>0)
{
	echo"<script>alert('Recod Has Been Deleted Successfully')</script>";
	
}
else
{
	echo"<script>alert('Recod Not Deleted')</script>";
}
?>
<main>
	<h2>Recod Deleted</h2>
</main>