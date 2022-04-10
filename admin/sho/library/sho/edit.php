<?php  

$edit_id = $_REQUEST['hdId'];
include "dbConnect/connect.php";
	$query       = "SELECT * FROM tbl_sho WHERE sho_id = '$edit_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$image = $row["sho_pic"];
		$name  = $row["sho_name"];
		$cell  = $row["sho_cell"];
		$city  = $row["sho_city"];	}
?>
<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Edit SHO</h2>
		<tr>
			<td>SHO Image:</td>
			<td><input type="file" name="image"><img src="images/<?php echo $image; ?> " width="100" height="100"></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="update_name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Cell :</td>
			<td><input type="text" name="update_cell" value="<?php echo $cell; ?>"></td>
		</tr>
		<tr>
			<td>City :</td>
			<td>
				<select name="update_city">
					<option value="<?php echo $city; ?>"><?php echo $city;?></option>
					<option value="Multan">Multan</option>
					<option value="Lahore">Lahore</option>
					<option value="Khanewal">Khanewal</option>
					<option value="Lodhran">Lodhran</option>
					<option value="Rahim Yar Khan">Rahim Yar Khan</option>
					<option value="Islamabad">Islamabad</option>
				</select>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="update" value="Update Criminal"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
		</form>
	</table>
</main>
<?php 
include("dbConnect/connect.php");
if(isset($_POST['update']))
{
	$update_name = $_POST['update_name'];
	$update_cell = $_POST['update_cell'];
	$update_city = $_POST['update_city'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	
    move_uploaded_file($image_tmp, "images/$image_name");
    $query = "UPDATE tbl_sho SET  
                                sho_pic	= '$image_name',
                                sho_name     = '$update_name',
                                sho_cell     = '$update_cell',
                                sho_city     = '$update_city'                                 
                          WHERE sho_id = '$edit_id'";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('SHO Is Updated')</script>";
}
?>