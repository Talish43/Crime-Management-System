<?php
include "dbConnect/connect.php";
	if(isset($_POST['btnAddUpdate']))
		{
		    $id    	          = $_POST['id'];
			$detail           = $_POST['detail'];
			$query		          = "INSERT INTO tbl_update 
			                                     (update_num,update_detail)
			                              VALUES ('$id','$detail')";
		    $result 	          = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Added Successfully');</script>";
			else
				echo "<script>alert('Record Not Added');</script>";
		}
?>
<main>
	<h2>Add Update</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>Update ID : </td>
			<td><input type="text" name="id" placeholder="Enter Your ID"></td>
		</tr>
	    <tr>
	    	<td>Detail : </td>
	    	<td><textarea cols="22" rows="20" name = "detail" placeholder="Enter Your Detail Here"></textarea></td>
	    </tr>
		<tr>
			<td><input type="submit" name="btnAddUpdate" value="Submit"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>