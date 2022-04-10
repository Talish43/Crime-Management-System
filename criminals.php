<?php 

include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
 ?>

 <!--criminals--> 
	
		<div id="criminals" class="criminals">
		<div class="container">
		<div class="row">
		<h2 class="wow fadeInUp" data-wow-delay="0.2" style="color: red;">Criminals</h2>
<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Terrorist'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150' style='margin:0 auto;' height='200' class='img img-responsive' src='admin/superadmin/".$image."'>";
	}
?>
		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="0.8s">
		<div class="packages" style="min-height: 280px;">
		<h4 style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>


<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Highway Robbery'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='120'  style='margin:0 auto;' height='100' class='img img-responsive' height='100' src='admin/superadmin/".$image."'>";
	}
?>


		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="1.2s">
		<div class="packages" style="min-height: 300px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>




<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Street Robbery'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150'  style='margin:0 auto;' height='200' class='img img-responsive' height='200' src='admin/superadmin/".$image."'>";
	}
?>

		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="1.6s">
		<div class="packages" style="min-height: 340px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>
<?php 
    include "connect/db.php";
	$query       = "SELECT * FROM tbl_criminal WHERE type='Drug Peddler'";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
		            $id            = $row['id'];
            		$image         = $row["image"];
					$name          = $row["firstname"].'  '.$row['lastname'];
					$type          = $row["type"];
					$image_display = "<img width='150'  style='margin:0 auto;' height='200' class='img img-responsive' height='200' src='admin/superadmin/".$image."'>";
	}
?>



		<div class="col-lg-3 col-md-3 wow flipInY"  data-wow-delay="2.0s">
		<div class="packages" style="min-height: 300px;">
		<h4  style='margin:0 auto;'><?php echo $name; ?></h4>
		<p style='margin:0 auto; padding-top: 20px;'><?php echo $image_display; ?></p>
		<li style='margin:0 auto;  padding-top: 50px;'><b>Type : </b><?php echo $type; ?></li>
		<a href="criminal_full.php?pid=<?php echo $id;?>" class="btn btn-success">Details</a>
		</div>
		</div>
		
		
		</div>
		</div>
		</div>
        <!--End Of criminals-->

<?php 
include ("includes/footer.php");
 ?>
