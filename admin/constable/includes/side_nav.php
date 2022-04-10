<?php
   include "connect/db.php";
   $admin = $_SESSION['constable'];
   $query = "SELECT name FROM tbl_admin WHERE type='$admin'";
   $run   = mysqli_query($conn,$query);
   while($row = mysqli_fetch_array($run))
    {
      $name_admin = $row['name'];
    }
?>
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start--><aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <h5 class="centered"><?php echo $name_admin; ?></h5>
            <li class="mt">
              <a class="active" href="index.php">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-pencil"></i>
                <span>FIR </span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=1">Add FIR</a></li>
                <li><a href="index.php?pid=2">Manage FIR</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-users"></i>
                <span>Criminals</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=3">Add Criminals</a></li>
                <li><a href="index.php?pid=4">Manage Criminals</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-gears"></i>
                <span>News</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=15">Add News</a></li>
                <li><a href="index.php?pid=16">Manage News</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-home"></i>
                <span>Stations</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=5">Add Stations</a></li>
                <li><a href="index.php?pid=6">Manage Stations</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class="fa fa-spinner"></i>
                <span>Updates</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=9">Add Update</a></li>
                <li><a href="index.php?pid=10">Manage Update</a></li>
              </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;">
                  <i class="fa fa-info"></i>
                  <span>Helpdesk</span>
                  </a>
                <ul class="sub">
                  <li><a href="index.php?pid=11">Add Help</a></li>
                  <li><a href="index.php?pid=12">Manage Help</a></li>
                </ul>
              </li>
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-gears"></i>
                <span>Registered Users</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=34">Manage Registered Users</a></li>
              </ul>
            </li>


            
            <li class="sub-menu">
              <a href="javascript:;">
                <i class=" fa fa-gears"></i>
                <span>Admin</span>
                </a>
              <ul class="sub">
                <li><a href="index.php?pid=13">Add Admin</a></li>
                <li><a href="index.php?pid=14">Manage Admin</a></li>
              </ul>
            </li>


            
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->