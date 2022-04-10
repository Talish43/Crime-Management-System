<?php
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
  $html="";
	include "connect/db.php";
	$query       = "SELECT * FROM tbl_news ";
	$queryResult = mysqli_query($conn,$query);
	while($row = mysqli_fetch_array($queryResult))
	{
   $image_display = "<img width='150' style='margin:0px 0px 0px 90px;' height='200' class='img img-responsive' src='admin/superadmin/".$row["image"]."'>";
		$html.='<tr>
					    <td style="margin-left:100px;">
              <a style="color:blue; margin-left:0px;" 
                href="full_news.php?pid='.$row["id"].'">'.$image_display.'</a> 
              </td>
              <td style="padding-top:50px;">
              <a style="color:blue; margin-top:100px; margin-left:-200px" 
                href="full_news.php?pid='.$row["id"].'">'.$row["nheading"].'</a>
              </td>
            </tr>';
	}
        
?>
<div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table" id="hidden-table-info">
              	
                <thead>
                  <tr>
                              <th style="text-align:left; padding-left:100px;" class="hidden-phone">
                              	<h4>Latest Crime News</h4></th>
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
include ("includes/footer.php");
 ?>