<?php  

$edit_id = $_REQUEST['hdId'];
include "dbConnect/connect.php";
	$query       = "SELECT * FROM tbl_criminal WHERE criminal_id = '$edit_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$image     = $row["criminal_photo"];
		$name      = $row["criminal_name"];
		$type      = $row["criminal_type"];
		$country   = $row["country"];
		$city      = $row["city"];
		$religion  = $row["religion"];
	}

?>
<main>
	<table>
		<form enctype="multipart/form-data" action="" method="POST">
		<h2>Update Criminal Recod</h2>
		<tr>
			<td>Criminal Image:</td>
			<td><input type="file" name="image"><img width="100" height="100" src="images/<?php echo $image; ?>"></td>
		</tr>
		<tr>
			<td>Name :</td>
			<td><input type="text" name="update_name" value="<?php echo $name; ?>"></td>
		</tr>
		<tr>
			<td>Type :</td>
			<td>
				<select name="update_type" value="<?php echo $type; ?>">
					<option><?php echo $type; ?></option>
					<option>Killer</option>
					<option>Murderer</option>
					<option>Rapist</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Country :</td>
			<td><input type="text" name="update_country" value="<?php echo $country; ?>"></td>
		</tr>
		<tr>
			<td>City :</td>
			<td><input type="text" name="update_city" value="<?php echo $city; ?>"></td>
		</tr>
		<tr>
			<td>Religion :</td>
			<td><input type="text" name="update_religion" value="<?php echo $religion; ?>"></td>
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
	$name = $_POST['update_name'];
	$type = $_POST['update_type'];
	$update_country = $_POST['update_country'];
	$update_city = $_POST['update_city'];
	$update_religion = $_POST['update_religion'];
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
    $query = "UPDATE tbl_criminal SET criminal_photo	= '$image_name',
                                      criminal_name     = '$name',
                                      criminal_type     = '$type',
                                      country           = '$update_country',
                                      city              = '$update_city',
                                      religion          = '$update_religion'
                                      WHERE criminal_id = '$edit_id'";
    if(mysqli_query($conn,$query))
    	echo "<script>alert('Criminal Is Updated')</script>";
}
?>