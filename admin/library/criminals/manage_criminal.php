<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_criminal";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$image = $row["criminal_photo"];
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["criminal_name"].'</td>
					<td>'.$row["criminal_type"].'</td>
					<td>'."<img width='100' height='100' src='images/".$image."'>".'</td>
					<td>'.$row["country"].'</td>
					<td>'.$row["city"].'</td>
					<td>'.$row["religion"].'</td>
					<td><a href="index.php?pid=19 & hdId='.$row["criminal_id"].'">Edit</a> 
					   /<a href="index.php?pid=26 & hdId='.$row["criminal_id"].'">Delete</a></td>
				</tr>';
			$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Name</label></th>
			<th><label>Type</label></th>
			<th><label>Image</label></th>
			<th><label>Country</label></th>
			<th><label>City</label></th>
			<th><label>Religion</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>