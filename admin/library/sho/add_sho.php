<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Add SHO</h2>
		<tr>
			<td>SHO Image:</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Cell :</td>
			<td><input type="text" name="cell"></td>
		</tr>
		<tr>
			<td>City :</td>
			<td>
				<select name="city">
					<option>Select SHO City</option>
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
			<td><input type="submit" name="submit" value="Add SHO"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
		</form>
	</table>
</main>
<?php 
include("dbConnect/connect.php");
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$cell = $_POST['cell'];
	$city = $_POST['city'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	if($name=='' or $cell=='' or $city =='')
	{
	echo"<script>alert('Any Field Is Empty ')</script>";
	exit();
    }
    move_uploaded_file($image_tmp, "images/$image_name");
    $query =        "INSERT into tbl_sho 
                                (sho_pic,sho_name,sho_cell,sho_city) 
                         VALUES ('$image_name','$name','$cell','$city')";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('SHO Is Inserted')</script>";
}
?>