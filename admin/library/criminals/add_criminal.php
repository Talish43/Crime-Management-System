<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Add Criminal</h2>
		<tr>
			<td>Criminal Image:</td>
			<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image"></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>
				<select name="type">
					<option>Select Theif Type</option>
					<option>Killer</option>
					<option>Murderer</option>
					<option>Rapist</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Country :</td>
			<td><input type="text" name="country"></td>
		</tr>
		<tr>
			<td>City :</td>
			<td><input type="text" name="city"></td>
		</tr>
		<tr>
			<td>Religion :</td>
			<td><input type="text" name="religion"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Add Criminal"></td>
			<td><input type="reset" value="Reset"></td>
		</tr>
		</form>
	</table>
</main>
<?php 
include("dbConnect/connect.php");
if(isset($_POST['submit']))
{
	$name       = $_POST['name'];
	$type       = $_POST['type'];
	$country    = $_POST['country'];
	$city       = $_POST['city'];
	$religion   = $_POST['religion'];
	$image_name = $_FILES['image']['name'];
	$image_type = $_FILES['image']['type'];
	$image_size = $_FILES['image']['size'];
	$image_tmp  = $_FILES['image']['tmp_name'];
	if($name=='' or $type=='')
	{
	echo"<script>alert('Any Field Is Empty ')</script>";
	exit();
    }
    move_uploaded_file($image_tmp, "images/$image_name");
    $query = "INSERT into tbl_criminal(criminal_photo,criminal_name,criminal_type,country,city,religion) 
                                 Values ('$image_name','$name','$type','$country','$city','$religion')";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('Criminal Is Inserted')</script>";
}
?>