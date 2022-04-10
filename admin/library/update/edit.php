<?php  
include "dbConnect/connect.php";
$get_id = $_REQUEST['hdId'];
$query       = "SELECT * FROM tbl_update WHERE update_id = '$get_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
			$num       = $row["update_num"];
			$detail    = $row["update_detail"];
					
	}
?>
<main>
	<h2>Update Updates</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>Update Number : </td>
			<td><input type="text" name="update_num" value="<?php echo $num; ?>"></td>
		</tr>
		<tr>
			<td>Update Detail:</td>
			<td><input type="text" name="update_detail" value="<?php echo $detail; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btnUpdateStation" value="Update"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>
<?php

	if(isset($_POST['btnUpdateStation']))
		{
		    $update_num    	             = $_POST['update_num'];
			$update_detail               = $_POST['update_detail'];
			$query		                 = "UPDATE tbl_update SET 
			                                update_num       = '$update_num',
			                                update_detail    = '$update_detail'
			                                WHERE update_id  = '$get_id'";
		    $result 	          = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Updated Successfully');</script>";
			else
				echo "<script>alert('Record Not Updated');</script>";
		}
?>