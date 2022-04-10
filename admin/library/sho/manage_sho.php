<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_sho";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$image = $row["sho_pic"];
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["sho_name"].'</td>
					<td>'.$row["sho_cell"].'</td>
					<td>'.$row["sho_city"].'</td>
					<td>'."<img width='100' height='70' src='images/".$image."'>".'</td>
					<td><a href="index.php?pid=22 & hdId='.$row["sho_id"].'">Edit</a> 
					   /<a href="index.php?pid=29 & hdId='.$row["sho_id"].'">Delete</a></td>
				</tr>';
			$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Name</label></th>
			<th><label>Cell</label></th>
			<th><label>City</label></th>
			<th><label>Image</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>