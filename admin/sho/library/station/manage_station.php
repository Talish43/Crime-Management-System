<?php 
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_station";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td style="text-align:center">'.$row["scode"].'</td>
					<td style="text-align:center">'.$row["scity"].'</td>
					<td style="text-align:center">'.$row["sname"].'</td>
					<td style="text-align:center">'.$row["shoname"].'</td>
					<td style="text-align:center">'.$row["scontact"].'</td>
          <td style="text-align:center">'.$row["email"].'</td>
					<td style="text-align:center">
					<a class="btn btn-primary btn-xs fa fa-pencil" 
            href="index.php?pid=23 & id='.$row["id"].'"></a>
            <a class="btn btn-danger btn-xs fa fa-trash-o" 
            href="index.php?pid=24 & id='.$row["id"].'"></a> 
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
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage Station</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align:center;">Station Code.</th>
                    <th style="text-align:center;" class="hidden-phone">Station City</th>
                    <th style="text-align:center;" class="hidden-phone">Station Name.</th>
					          <th style="text-align:center;"  class="hidden-phone">SHO Name</th>
					          <th style="text-align:center;" class="hidden-phone">Station Contact</th>
                    <th style="text-align:center;" class="hidden-phone">Email</th>
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