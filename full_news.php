<?php 
include "connect/db.php";
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
$getId   = $_REQUEST['pid'];
$query = "SELECT * from tbl_news WHERE id= '$getId'";
$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
					$nheading          = $row["nheading"];
					$image             = $row['image'];
					$ndetails          = $row["ndetails"];
          $date              = $row["date"];
	}
?>


<!--news-->  
       
	   <div id="news" class="news" style="min-height:500px;">
	   <div class="container">         
     <table style="width: 100%; margin: 0 auto; ">
       <thead>
         <tr>
           <th><h4 style="color:black; text-transform: uppercase; text-align: left;"><?php echo $nheading;?></h4>
            <hr></th>
         </tr>
       </thead>
       <tbody>
       <tr>
         <th><img class="img-responsive" style=" margin: 0 auto; margin-left: -2px;"  src="admin/superadmin/<?php echo $image;?>">
          <hr></th>
         </tr>
       </tbody>
       </table>
       <table width="50%">
       <tr>
           <td><h5 style="text-align: left; text-transform: uppercase; color:black;">News Details:</h5><p style="text-align: justify;"><?php echo $ndetails;?></p></td>
      </tr>
      <tr>
        <td><h5 style="text-align: left; text-transform: uppercase; color:black;">Date & Time:</h5><p style="text-align: justify;"> <?php echo $date;?></td>
      </tr>
      </table>
	   </div>
	   </div>
	   
	   
	    <!--End Of news-->  
     

<?php 
include ("includes/footer.php");
 ?>









<!-- <div class="table-responsive">          
  <table class="table">
    <thead>
      <tr>
        <th colspan="10" rowspan="10"><h3 style="color:red; text-align: left;"><?php echo $nheading;?></h3></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th colspan="10" rowspan="10"><img class="img-responsive" style="width:900px;  height:350px;" src="admin/superadmin/<?php echo $image;?>"></th>
      </tr>
    </tbody>
    <tr>
        <td colspan="10" rowspan="10"><h4>News Details:</h4><p style="text-align: left;"><?php echo $ndetails;?></p></td>
      </tr>
      <tr>
        <th colspan="10" rowspan="10">Publishing Time: <p style="text-align: left;">  <?php echo $date;?></p></th>
      </tr>
  </table>
  </div> -->