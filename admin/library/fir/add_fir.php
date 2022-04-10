<?php
include "dbConnect/connect.php";
	if(isset($_POST['btnAddFir']))
		{
		    $firno    	  = $_POST['firno'];
		    $name    	  = $_POST['name'];
			$cnic         = $_POST['cnic'];
			$cellNo       = $_POST['cell'];
			$selectCity   = $_POST['selectCity'];
			$selectType   = $_POST['selectType'];
			$address   = $_POST['address'];
			$detail       = $_POST['detail'];
			$query		  = "INSERT INTO 
			                tbl_fir(fir_no,fir_name,fir_cnic,fir_cell,
			                fir_station_city,fir_station_area,
			                fir_station_address,fir_detail)
							VALUES('$firno','$name','$cnic','$cellNo','$selectCity','$selectType','$address','$detail')";
		$result 	  = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Added Successfully');</script>";
			else
				echo "<script>alert('Record Not Added');</script>";
		}
?>
<main>
	<h2>Add FIR</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>FIR Number:</td>
			<td><input type="text" name="firno" placeholder="Enter Your Name"></td>
		</tr>
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
			<td>Station City:</td>
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
			<td>Station Area:</td>
			<td>
				<select name="selectType">
					<option value="">Select Area</option>
					<option value="Information">City</option>
					<option value="Complaint">Village</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Station Address:</td>
			<td><input type="text" name="address" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>Detail:</td>
			<td>
				<textarea cols="25" rows="20" name="detail"></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnAddFir" value="Submit"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>