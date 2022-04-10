<?php
include "connect/db.php";
$delte_id = $_REQUEST['id'];
$query = "DELETE FROM tbl_news WHERE id = '$delte_id'";
$result = mysqli_query($conn,$query);
if($result>0)
{
	echo "<script>window.open('index.php?pid=16','_self')</script>";
	
}
else
{
	echo"<script>alert('Recod Not Deleted')</script>";
}
?>
<main>
	<h2>Recod Deleted</h2>
</main>