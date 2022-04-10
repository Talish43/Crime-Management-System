<?php  
include "dbConnect/connect.php";
$get_id = $_REQUEST['hdId'];
$query       = "SELECT * FROM tbl_station WHERE station_id = '$get_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
			$code    = $row["station_code"];
			$city    = $row["station_city"];
			$area	 = $row["station_area"];
			$address = $row["station_address"];
			$sho	 = $row["station_sho"];
			$contact = $row["station_contact"];
					
	}
?>
<main>
	<h2>Add Station</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>Station Code : </td>
			<td><input type="text" name="code" value="<?php echo $code; ?>"></td>
		</tr>
		<tr>
			<td>Station City:</td>
			<td>
				<select name="selectCity" value="<?php echo $city; ?>">
					<option value="<?php echo $city; ?>"><?php echo $city; ?></option>
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
				<select name="selectType" >
					<option value="<?php echo $area; ?>"><?php echo $area; ?></option>
					<option value="City">City</option>
					<option value="Village">Village</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Station Address:</td>
			<td><input type="text" name="address" value="<?php echo $address; ?>"></td>
		</tr>
		<tr>
			<td>Station SHO:</td>
			<td><input type="text" name="stationsho" value="<?php echo $sho; ?>"></td>
		</tr>
		<tr>
			<td>Station Contact:</td>
			<td><input type="text" name="stationcontact" value="<?php echo $contact; ?>"></td>
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
		    $code    	          = $_POST['code'];
			$selectCity           = $_POST['selectCity'];
			$selectType           = $_POST['selectType'];
			$address              = $_POST['address'];
			$stationsho           = $_POST['stationsho'];
			$stationcontact       = $_POST['stationcontact'];
			$query		          = "UPDATE tbl_station SET 
			                                station_code    = '$code',
			                                station_city    = '$selectCity',
			                                station_area    = '$selectType',
			                                station_address = '$address',
			                                station_sho     = '$stationsho',
			                                station_contact = '$stationcontact' 
			                                WHERE station_id = '$get_id'";
		    $result 	          = mysqli_query($conn,$query);
			if($result>0)
				echo "<script>alert('Record Added Successfully');</script>";
			else
				echo "<script>alert('Record Not Added');</script>";
		}
?>