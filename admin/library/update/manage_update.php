<?php 
include "dbConnect/connect.php";
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_update";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td>'.$counter.'</td>
					<td>'.$row["update_num"].'</td>
					<td>'.$row["update_detail"].'</td>
					<td><a href="index.php?pid=21 & hdId='.$row["update_id"].'">Edit</a> 
					   /<a href="index.php?pid=28 & hdId='.$row["update_id"].'">Delete</a></td>
				</tr>';
				$counter++;
	}
?>


<main>
	<table width="100%" style=" position: absolute;" border="2px solid green">
		<tr>
			<th><label>Sr No.</label></th>
			<th><label>Update Num</label></th>
			<th><label>Update Detail</label></th>
			<th><label>Action</label></th>
		</tr>
		<?php echo $html; ?>
	</table>
</main>