<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_helpdesk";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["hd_name"].'</td>
					<td>'.$row["hd_cell"].'</td>
					<td>'.$row["hd_cnic"].'</td>
					<td>'.$row["hd_city"].'</td>
					<td>'.$row["hd_type"].'</td>
					<td>'.$row["hd_detail"].'</td>
					<td><a href="index.php?pid=17 & hdId='.$row["hd_id"].'">Edit</a> 
					   /<a href="index.php?pid=24 & hdId='.$row["hd_id"].'">Delete</a></td>
				</tr>';
			$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Name</label></th>
			<th><label>Cell No.</label></th>
			<th><label>CNIC</label></th>
			<th><label>City</label></th>
			<th><label>Type</label></th>
			<th><label>Detail</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>