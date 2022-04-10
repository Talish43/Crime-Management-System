<?php 
	$counter=1;
	$html="";
	$query       = "SELECT * FROM tbl_admin";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
		$html.='<tr>
					<td style="text-align:center">'.$counter.'</td>
					<td style="text-align:center">'.$row["name"].'</td>
					<td style="text-align:center">'.$row["pass"].'</td>
					<td style="text-align:center">'.$counter.'</td>
					<td style="text-align:center">'.$row["name"].'</td>
					<td style="text-align:center">
					<button title="Edit" class="btn btn-primary btn-xs fa fa-pencil"></button>
					<button title="Delete" class="btn btn-danger btn-xs fa fa-trash-o"></button>
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
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage SHO</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align:center;">Sr No.</th>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;" class="hidden-phone">Cell</th>
                    <th style="text-align:center;" class="hidden-phone">City</th>
				    <th style="text-align:center;" class="hidden-phone">Image</th>
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