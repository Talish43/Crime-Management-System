<?php
include "dbConnect/connect.php";
$edit_id = $_REQUEST['hdId'];
$query = "SELECT * from tbl_helpdesk WHERE hd_id = '$edit_id'";
$result = mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	$name = $row['hd_name'];
	$cell = $row['hd_cell'];
	$cnic = $row['hd_cnic'];
	$city = $row['hd_city'];
	$type = $row['hd_type'];
	$detail = $row['hd_detail'];
}
?>
<main>
	<h2>Update HelpDesk</h2>
	<table align="center" cellpadding="10" cellspacing="10">
		<form action="" method="POST">
		<tr>
			<td>Name:</td>
			<td><input type="text" name="update_name"  value="<?php echo $name;?>"></td>
		</tr>
		<tr>
			<td>Cell:</td>
			<td><input type="text" name="update_cell" value="<?php echo $cell;?>"></td>
		</tr>
		<tr>
			<td>CNIC:</td>
			<td><input type="text" name="update_cnic" value="<?php echo $cnic;?>"></td>
		</tr>
		<tr>
			<td>City:</td>
			<td>
				<select name="update_selectCity">
					<option value="<?php echo $city;?>"><?php echo $city;?></option>
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
				<select name="update_selectType">
					<option value="<?php echo $type;?>"><?php echo $type;?></option>
					<option value="Information">Information</option>
					<option value="Complaint">Complaint</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Detail:</td>
			<td>
				<textarea cols="25" rows="20" name="update_detail" ><?php echo $detail;?></textarea>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="btnUpdateHelp" value="Update"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
	</form>
	</table>
</main>
<?php  
if(isset($_POST['btnUpdateHelp']))
{
	$update_name       = $_POST['update_name'];
	$update_cell       = $_POST['update_cell'];
	$update_cnic       = $_POST['update_cnic'];
	$update_selectCity = $_POST['update_selectCity'];
	$update_selectType = $_POST['update_selectType'];
	$update_detail     = $_POST['update_detail'];
	$query = "UPDATE tbl_helpdesk SET hd_name = '$update_name', 
	                                  hd_cell = '$update_cell', 
	                                  hd_cnic = '$update_cnic',  
	                                  hd_city = '$update_selectCity', 
	                                  hd_type = '$update_selectType',
	                                  hd_detail = '$update_detail'
	                                  WHERE hd_id ='$edit_id'";
	if(mysqli_query($conn,$query))
		echo "<script>alert('Data Updated Successfully ')</script>";
	else
		echo "<script>alert('Data Is Not Updated ')</script>";
}
?>