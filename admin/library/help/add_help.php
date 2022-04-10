<?php
include "dbConnect/connect.php";
	if(isset($_POST['btnAddHelp']))
		{
		    $name    	  = $_POST['name'];
		    $cellNo       = $_POST['cell'];
			$cnic         = $_POST['cnic'];
			$selectCity   = $_POST['selectCity'];
			$selectType   = $_POST['selectType'];
			$detail       = $_POST['detail'];
			$query		  = "INSERT INTO tbl_helpdesk(hd_name,hd_cell,hd_cnic,hd_city,hd_type,hd_detail)
										        VALUES('$name','$cellNo','$cnic','$selectCity','$selectType','$detail')";
		$result 	  = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Added Successfully');</script>";
			else
				echo "<script>alert('Record Not Added');</script>";
		}
?>
<main>
	<h2>Add HelpDesk</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>Cell:</td>
			<td><input type="text" name="cell" placeholder="Enter Your Cell Number"></td>
		</tr>
		<tr>
			<td>CNIC:</td>
			<td><input type="text" name="cnic" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td>
				<select name="selectCity">
					<option value="">Select City</option>
					<option value="Multan">Multan</option>
					<option value="Lahore">Lahore</option>
					<option value="Khanewal">Khanewal</option>
					<option value="Lodhran">Lodhran</option>
					<option value="BahawalPoor">BahawalPoor</option>
					<option value="Rahim Yaar Khan">Rahim Yaar Khan</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Type:</td>
			<td>
				<select name="selectType">
					<option value="">Select Type</option>
					<option value="Information">Information</option>
					<option value="Complaint">Complaint</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Detail:</td>
			<td>
				<textarea cols="25" rows="20" name="detail"></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnAddHelp" value="Submit"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>