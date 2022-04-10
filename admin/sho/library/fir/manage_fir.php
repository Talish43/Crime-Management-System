<?php 
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_fir ORDER BY id DESC ";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td style="text-align:center">'.$row["application_number"].'</td>
					<td style="text-align:center">'.$row["applicant_name"].'</td>
					<td style="text-align:center">'.$row["applicant_cell"].'</td>
					<td style="text-align:center">'.$row["fir_catagory"].'</td>
					<td style="text-align:center">'.$row["officer_name"].'</td>
					<td style="text-align:center">'.$row["officer_contact"].'</td>
					<td style="text-align:center">'.$row["police_station"].'</td>
					<td style="text-align:center">'.$row["status"].'</td>
					<td style="text-align:center">
          <a class="btn btn-primary" href="library/fir/print.php?id='.$row["id"].'">Print</a> </td>
					<td style="text-align:center">
          <a class="btn btn-primary btn-xs fa fa-pencil" 
          href="index.php?pid=17 & id='.$row["id"].'"></a>
          <a class="btn btn-danger btn-xs fa fa-trash-o" 
          href="index.php?pid=18 & id='.$row["id"].'"></a> 
					</td>
				</tr>';
			$counter++;
	}
?>
 <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage FIR</h3>
        <center><h1><?php echo @$_GET['inserted']; ?></h1></center>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align:center;" class="hidden-phone">Application Number</th>
                    <th style="text-align:center;" class="hidden-phone">Applicant Name</th>
				    <th style="text-align:center;" class="hidden-phone">Applicant Cell</th>
					<th style="text-align:center;" class="hidden-phone">FIR Catagory</th>
					<th style="text-align:center;" class="hidden-phone">Officer Name</th>
					<th style="text-align:center;" class="hidden-phone">Officer Contact</th>
					<th style="text-align:center;" class="hidden-phone">Police Station</th>
					<th style="text-align:center;" class="hidden-phone">Status</th>
					<th style="text-align:center;" class="hidden-phone">Print</th>
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
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->