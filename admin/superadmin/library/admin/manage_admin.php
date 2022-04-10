<?php 
  $counter=1;
  $html="";
  $type = "superadmin";
  $query       = "SELECT * FROM tbl_admin WHERE type='$type'";
  $queryResult = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($queryResult))
  {
    $html.='<tr>
          <td style="text-align:center">'.$row["name"].'</td>
          <td style="text-align:center">'.$row["type"].'</td>
          <td style="text-align:center">'.$row["cell"].'</td>
          <td style="text-align:center">'.$row["city"].'</td>
          <td style="text-align:center">'.$row["pass"].'</td>
          <td style="text-align:center">'.$row["email"].'</td>
          <td style="text-align:center">
          <a class="btn btn-primary btn-xs fa fa-pencil" 
          href="index.php?pid=29 & id='.$row["id"].'"></a>
          <a class="btn btn-danger btn-xs fa fa-trash-o" 
          href="index.php?pid=30 & id='.$row["id"].'"></a>
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
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage Admin</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align:center;">Name</th>
                    <th style="text-align:center;" class="hidden-phone">Type</th>
                    <th style="text-align:center;" class="hidden-phone">Cell</th>
                    <th style="text-align:center;" class="hidden-phone">City</th>
                    <th style="text-align:center;" class="hidden-phone">Password</th>
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