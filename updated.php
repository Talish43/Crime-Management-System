<?php
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");        
?>
<div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <?php
               @$message  = $_REQUEST['message'];
               if($message=="Success")
               {
                echo '<div class="alert alert-success text-center">
                <h4> FIR Updated Successfully</h4>
                </div>';
               }
               if($message=="UnSuccess")
               {
                echo '<div class="alert alert-danger text-center">
                <h4> FIR Not Updated</h4>
                </div>';
               }
              ?>
            </div>
          </div>
          <!-- page end-->
        </div>
<?php
include ("includes/footer.php");
 ?>