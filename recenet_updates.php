<?php 
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
 ?>	


<!--news-->  
       
	   <div id="news" class="news" style="height:700px;">
	   <div class="container">
	   <h2 class="wow fadeInUp" data-wow-delay="0.2">All Update News</h2>
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <br>	
	   <div class="row">
	   		<table class="table">
    <thead>
      <tr>
        <th><h1>Latest Updates</h1></th>
      </tr>
    </thead>
    <tbody>
    <tr>
    	<?php 
      	    include "connect/db.php";
      	    $counter           =    0;
            $query       = "SELECT * FROM tbl_update";
	        $queryResult = mysqli_query($conn,$query);
	        while($row = mysqli_fetch_assoc($queryResult))
	           {
                    $id                = $row['id']; 
            		$utype             = $row["uptype"];
					$udetails          = $row["updetail"];
					$counter++;
		?>
		<td style="text-align: left;"><a style="text-decoration:underline; color:blue;" href="full_updates.php?pid=<?php echo $id; ?>"><?php echo $utype;?></a></td>        
      </tr>
      <?php
         }
        ?>
    </tbody>
  </table>
        
	   </div>
	   </div>
	   </div>
	   
	   
	    <!--End Of news-->  
     

<?php 
include ("includes/footer.php");
?>