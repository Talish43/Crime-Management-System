<?php
include "dbConnect/connect.php";
	if(isset($_POST['btnAddStation']))
		{
		    $code    	          = $_POST['code'];
			$selectCity           = $_POST['selectCity'];
			$selectType           = $_POST['selectType'];
			$address              = $_POST['address'];
			$stationsho           = $_POST['stationsho'];
			$stationcontact       = $_POST['stationcontact'];
			$query		          = "INSERT INTO 
			                        tbl_station(station_code,station_city,
			                                    station_area,station_address,
			                                    station_sho,station_contact)
							        VALUES('$code','$selectCity','$selectType',
							               '$address','$stationsho',
							               '$stationcontact')";
		    $result 	          = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Added Successfully');</script>";
			else
				echo "<script>alert('Record Not Added');</script>";
		}
?>
<main>
	<h2>Add Station</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>Station Code : </td>
			<td><input type="text" name="code" placeholder="Enter Your Name"></td>
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
					<option value="City">City</option>
					<option value="Village">Village</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Station Address:</td>
			<td><input type="text" name="address" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>Station SHO:</td>
			<td><input type="text" name="stationsho" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td>Station Contact:</td>
			<td><input type="text" name="stationcontact" placeholder="Enter Your Name"></td>
		</tr>
		<tr>
			<td><input type="submit" name="btnAddStation" value="Submit"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>