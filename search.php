<?php
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
?>
<?php
if(isset($_POST['submit']))
  {
  $html="";
	$search  = $_POST['search_text'];
	include "connect/db.php";
	$query   = "SELECT * FROM tbl_fir WHERE application_number = '$search'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
    $ac = @$row['application_number'];
		$html.='<tr>
					<td style="text-align:center">'.$row["application_number"].'</td>
					<td style="text-align:center">'.$row["officer_name"].'</td>
					<td style="text-align:center">'.$row["officer_contact"].'</td>
					<td style="text-align:center">'.$row["police_station"].'</td>
					<td style="text-align:center">'.$row["status"].'</td>
          <td style="text-align:center">
          <a class="btn btn-primary btn-xs fa fa-pencil" 
          href="edit_fir.php?id='.$row["id"].'"></a>
          <a class="btn btn-danger btn-xs fa fa-trash-o" 
          href="delete_fir.php?id='.$row["id"].'"></a> 
          </td>
				</tr>';
	}
   if($search=@$ac)
   {
?>
<div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered " id="hidden-table-info">
              	<center><h4>Search Result</h4></center>
                <thead>
                  <tr>
                    <th style="text-align:center;" class="hidden-phone">Application Number</th>
					          <th style="text-align:center;" class="hidden-phone">Officer Name</th>
					          <th style="text-align:center;" class="hidden-phone">Officer Contact</th>
					          <th style="text-align:center;" class="hidden-phone">Police Station</th>
					          <th style="text-align:center;" class="hidden-phone">Status</th>
                    <th style="text-align:center;" class="hidden-phone">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php echo $html; ?>
               </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
<?php
}
else
{
  echo '<div class="alert alert-danger text-center">
        Invalid Application Number
        </div>';
}
}
include ("includes/footer.php");
 ?>