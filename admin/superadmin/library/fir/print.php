<link rel="icon" type="image/png" href="img/logo.png" >

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datepicker/css/datepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-datetimepicker/datertimepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-timepicker/compiled/timepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-daterangepicker/daterangepicker.css" />
  <link rel="stylesheet" type="text/css" href="lib/bootstrap-fileupload/bootstrap-fileupload.css" />
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <link href="lib/fancybox/jquery.fancybox.css" rel="stylesheet" />
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>
  <link rel="stylesheet" href="css/to-do.css">
  <script src="lib/jquery/jquery.min.js"></script>




<?php 
    include "../../connect/db.php";
	$print_id = $_GET['id'];
	$query       = "SELECT * FROM tbl_fir WHERE id='$print_id'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{/*,
                                               email,*/
		$an    = $row['application_number'];
		$aname = $row['applicant_name'];
		$ac    = $row['applicant_cell'];
		$dti    = $row['date'];
		$em    = $row['email'];
		$acnic = $row['applicant_cnic'];
		$fc    = $row['fir_catagory'];
		$on    = $row['officer_name'];
		$dt    = $row['details'];
		$oc    = $row['officer_contact'];
		$st    = $row['status'];
		$pas   = $row['pass'];
		$ps    = $row["police_station"];
	}
?>

 <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
<?php 
session_start();
if(isset($_SESSION['superadmin']))
{
	?>
    <!--main content start-->
    <section id="main-content" style="margin: 0 auto;">
      <section class="wrapper">
        <div class="row">
          <!-- page start-->
          <center>
              <div style="width: 100%; height: 500px; margin:0 auto;">
              	<center>
              		<img src="img/logo.png" style="width: 70px; display: inline;">
              		<h4 style=" display: inline; text-decoration: underline;">Online Complaint (Complaint Copy)</h4>
              	</center>
              	<br><br><br>
              	<table class="table table-stripped text-center">
              		<tr>
              			<th>Police Station:</th>
              			<td><?php echo $ps; ?></td>
              			<th>Application Number:</th>
              			<td><?php echo $an; ?></td>
              		</tr>
              		<tr>
              			<th>Date:</th>
              			<td><?php echo $dti; ?></td>
              			<th>Applicant Name:</th>
              			<td><?php echo $aname; ?></td>
              		</tr>
              		<tr>
              			<th>Catagory:</th>
              			<td><?php echo $fc; ?></td>
              			<th>Applicant CNIC:</th>
              			<td><?php echo $acnic; ?></td>
              		</tr>
              		<tr>
              			<th>Officer Name:</th>
              			<td><?php echo $on; ?></td>
              			<th>Applicant Number:</th>
              			<td><?php echo $ac; ?></td>
              		</tr>
              		<tr>
              			<th>Password:</th>
              			<td><?php echo $pas; ?></td>
              			<th>Email:</th>
              			<td><?php echo $em; ?></td>
              		</tr>
              		<tr>
              			<th>Status:</th>
              			<td><?php echo $st; ?></td>
              			<th>Officer Contact:</th>
              			<td><?php echo $oc; ?></td>
              		</tr>
              		
              	</table>
              	<br>
              	<br>
              	<br>

              </div>
          <!-- page end-->
        </div>
        </center>
        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
 <?php
}
else
{
    header("location:../../index.php");
}
?>