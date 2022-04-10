<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_admin";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["admin_name"].'</td>
					<td>'.$row["admin_pwd"].'</td>
					<td><a href="index.php?pid=23 & hdId='.$row["admin_id"].'">Edit</a> 
					   /<a href="index.php?pid=30 & hdId='.$row["admin_id"].'">Delete</a></td>
				</tr>';
			$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Name</label></th>
			<th><label>Password</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>