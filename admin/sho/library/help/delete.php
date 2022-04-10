<?php
include "connect/db.php";
$delte_id = $_REQUEST['id'];
$query = "DELETE FROM tbl_help WHERE id = '$delte_id'";
$result = mysqli_query($conn,$query);
if($result>0)
{
	echo "<script>window.open('index.php?pid=12','_self')</script>";
	
}
else
{
	echo"<script>alert('Recod Not Deleted')</script>";
}
?>
<main>
	<h2>Recod Deleted</h2>
</main>