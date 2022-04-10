<?php
include "dbConnect/connect.php";
$edit_id = $_REQUEST['hdId'];
$query = "SELECT * from tbl_fir WHERE fir_id = '$edit_id'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	$fno = $row['fir_no'];
	$name = $row['fir_name'];
	$cnic = $row['fir_cnic'];
	$cell = $row['fir_cell'];
	$city = $row['fir_station_city'];
	$area = $row['fir_station_area'];
	$address = $row['fir_station_address'];
	$detail = $row['fir_detail'];
	$status = $row['fir_status'];
	$assigned = $row['fir_asign'];
}
?>
<main>
	<h2>Update FIR</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
			<tr>
			<td>FIR Number:</td>
			<td><input type="text" name="update_fno" value="<?php echo $fno; ?>"></td>
		</tr>
		<tr>
			<td>Name:</td>
			<td><input type="text" name="update_name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Cell:</td>
			<td><input type="text" name="update_cell" value="<?php echo $cell; ?>"></td>
		</tr>
		<tr>
			<td>CNIC:</td>
			<td><input type="text" name="update_cnic" value="<?php echo $cnic; ?>"></td>
		</tr>
		<tr>
			<td>Station City:</td>
			<td>
				<select name="update_selectCity" >
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
				<select name="update_selectType">
					<option value="<?php echo $area; ?>"><?php echo $area; ?></option>
					<option value="Information">City</option>
					<option value="Complaint">Village</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Address:</td>
			<td><input type="text" name="update_address" value="<?php echo $address; ?>"></td>
		</tr>
		<tr>
			<td>Status:</td>
			<td><input type="text" name="update_status" value="<?php echo $status; ?>"></td>
		</tr>
		<tr>
			<td>Assigned To:</td>
			<td><input type="text" name="update_assignedto" value="<?php echo $assigned; ?>"></td>
		</tr>
		<tr>
			<td>Detail:</td>
			<td>
				<textarea cols="25" rows="20" name="update_detail"><?php echo $detail; ?></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnUpdateFir" value="Update"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>
<?php  
if(isset($_POST['btnUpdateFir']))
{
	$update_fno        = $_POST['update_fno'];
	$update_name       = $_POST['update_name'];
	$update_cell       = $_POST['update_cell'];
	$update_cnic       = $_POST['update_cnic'];
	$update_selectCity = $_POST['update_selectCity'];
	$update_selectType = $_POST['update_selectType'];
	$update_address    = $_POST['update_address'];
	$update_status     = $_POST['update_status'];
	$update_assignedto = $_POST['update_assignedto'];
	$update_detail     = $_POST['update_detail'];
	$query =            " UPDATE tbl_fir SET 
	                                  fir_no              = '$update_fno', 
	                                  fir_name            = '$update_name', 
	                                  fir_cnic            = '$update_cnic',
	                                  fir_cell            = '$update_cell',   
	                                  fir_station_city    = '$update_selectCity', 
	                                  fir_station_area    = '$update_selectType',
	                                  fir_station_address = '$update_address',
	                                  fir_status          = '$update_status',
	                                  fir_asign           = '$update_assignedto',
	                                  fir_detail          = '$update_detail'
	                                  WHERE fir_id        = '$edit_id'";
	if(mysqli_query($conn,$query))
		echo "<script>alert('Data Updated Successfully ')</script>";
	else
		echo "<script>alert('Data Is Not Updated ')</script>";
}
?>