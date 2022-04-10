<?php 
  $counter=1;
  $html="";
  $query       = "SELECT * FROM tbl_news ORDER BY ntype DESC";
  $queryResult = mysqli_query($conn,$query);
  while($row = mysqli_fetch_array($queryResult))
  {
    $html.='<tr>
          <td style="text-align:center">'.$row["ntype"].'</td>
          <td style="text-align:center">'.$row["nheading"].'</td>
          <td style="text-align:center">'.$row["ndetails"].'</td>
          <td style="text-align:center">
          <a class="btn btn-primary btn-xs fa fa-pencil" 
            href="index.php?pid=21 & id='.$row["id"].'"></a>
            <a class="btn btn-danger btn-xs fa fa-trash-o" 
            href="index.php?pid=22 & id='.$row["id"].'"></a> 
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
        <h3><i class="fa fa-angle-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Manage News</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                <thead>
                  <tr>
                    <th style="text-align:center;" class="hidden-phone">News Type</th>
                    <th style="text-align:center;" class="hidden-phone">News Heading</th>
                    <th style="text-align:center;" class="hidden-phone">News Details</th>
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