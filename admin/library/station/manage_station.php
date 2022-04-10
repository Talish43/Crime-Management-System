<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_station";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["station_code"].'</td>
					<td>'.$row["station_city"].'</td>
					<td>'.$row["station_area"].'</td>
					<td>'.$row["station_address"].'</td>
					<td>'.$row["station_sho"].'</td>
					<td>'.$row["station_contact"].'</td>
					<td><a href="index.php?pid=20 & hdId='.$row["station_id"].'">Edit</a> 
					   /<a href="index.php?pid=27 & hdId='.$row["station_id"].'">Delete</a></td>
				</tr>';
				$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Station Code.</label></th>
			<th><label>Station City</label></th>
			<th><label>Station Area.</label></th>
			<th><label>Station Address</label></th>
			<th><label>Station Sho</label></th>
			<th><label>Station Contact</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>