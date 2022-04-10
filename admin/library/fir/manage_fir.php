<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_fir";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["fir_no"].'</td>
					<td>'.$row["fir_name"].'</td>
					<td>'.$row["fir_cnic"].'</td>
					<td>'.$row["fir_cell"].'</td>
					<td>'.$row["fir_time"].'</td>
					<td>'.$row["fir_station_city"].'</td>
					<td>'.$row["fir_station_area"].'</td>
					<td>'.$row["fir_station_address"].'</td>
					<td>'.$row["fir_detail"].'</td>
					<td>'.$row["fir_status"].'</td>
					<td>'.$row["fir_asign"].'</td>
					<td><a href="index.php?pid=18 & hdId='.$row["fir_id"].'">Edit</a> 
					   /<a href="index.php?pid=25 & hdId='.$row["fir_id"].'">Delete</a></td>
				</tr>';
				$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>FIR No.</label></th>
			<th><label>Name</label></th>
			<th><label>Cell No.</label></th>
			<th><label>CNIC</label></th>
			<th><label> Date & Time</label></th>
			<th><label>City</label></th>
			<th><label>Area</label></th>
			<th><label>Address</label></th>
			<th><label>Detail</label></th>
			<th><label>Status</label></th>
			<th><label>Assigned To</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>