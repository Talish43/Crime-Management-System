<?php 
include "connect/db.php";
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
$getId   = $_REQUEST['pid'];
$query = "SELECT * from tbl_update WHERE id= '$getId'";
$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
					$upheading         = $row["upheading"];
					$uptype            = $row["uptype"];
          $updetail          = $row["updetail"];
          $postedby          = $row["postedby"];
          $date              = $row["date"];
	}
?>


<!--news-->  
       
	   <div id="news" class="news" style="min-height:500px;">
	   <div class="container">
	   	<div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th colspan="10" rowspan="10"><h3 style="color:red; text-align: left;"><?php echo $upheading;?></th>
      </tr>
    </thead>
    <tbody>
      <tr>
         <th colspan="10" rowspan="10">Detail:<p style="text-align: left;"><?php echo $updetail;?></p></th>
      </tr>
    </tbody>
    <tr>
        <th colspan="10" rowspan="10">Posted By:<p style="text-align: left;"> <?php echo $postedby;?></p></th>
      </tr>
      <tr>
        <th colspan="10" rowspan="10">Dated<p style="text-align: left;">  <?php echo $date;?></p></th>
      </tr>
  </table>
  </div>
	   </div>
	   </div>
	   
	   
	    <!--End Of news-->  
     

<?php 
include ("includes/footer.php");
 ?>
