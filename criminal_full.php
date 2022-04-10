<?php 
include "connect/db.php";
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
$getId   = $_REQUEST['pid'];
$query = "SELECT * from tbl_criminal WHERE id= '$getId'";
$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($queryResult))
	{
          $image         = $row["image"];
          $name          = $row["firstname"];
          $name1         = $row["lastname"];
          $type          = $row["type"];
          $image_display = "<img class='img-responsive' style='margin-left:00px;' width='350' height='200' src='admin/superadmin/".$image."'>";
          $country       =  $row["country"];
          $city          = $row["city"];
          $religion      = $row["religion"];
  }
?>


<!--news-->    
	   <div id="news" class="news" style="min-height:500px;">
	   <div class="container"> 
     <table style="margin: 0 auto; width: 100%;">
      <tr>
        <th>
        <h3 style="color:red; text-align: left;">
          <div style="padding-top: 30px;"></div>
        <?php echo $name;?>
        <?php echo $name1;?>
        <hr>
        </h3>
        </th>
      </tr>

      <tr>

        <th>
          
          <center><?php echo $image_display; ?></center></th>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Type</b>
        <hr></td>
        <td style="text-align: left;"><?php echo $type; ?>
          <hr>
        </td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Country</b>
        <hr></td>
        <td style="text-align: left;"><?php echo $country; ?>
          <hr>
        </td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>City</b>
        <hr></td>
        <td style="text-align: left;"><?php echo $city; ?>
          <hr>
        </td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Religion</b>
        <hr></td>
        <td style="text-align: left;"><?php echo $religion; ?><hr></td>
      </tr>
  </table>
</div>



  </div>
	   </div>
	   </div>
	   
	   
	    <!--End Of news-->  
     

<?php 
include ("includes/footer.php");
 ?>



<!-- <div class="container">
      <div class=""> 
     <table class="table" style='margin-left:100px;'>
    <thead>
      <tr>
        <th>
        <h3 style="color:red; text-align: left;">
        <?php echo $name;?>
        <?php echo $name1;?>
        </h3>
        </th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th><center><?php echo $image_display; ?></center></th>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Type</b></td>
        <td style="text-align: left;"><?php echo $type; ?></td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Country</b></td>
        <td style="text-align: left;"><?php echo $country; ?></td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>City</b></td>
        <td style="text-align: left;"><?php echo $city; ?></td>
      </tr>
      <tr>
        <td style="text-align: left;"><b>Religion</b></td>
        <td style="text-align: left;"><?php echo $religion; ?></td>
      </tr>
    </tbody>
  </table>
</div>



  </div> -->