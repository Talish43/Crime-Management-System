<?php
session_start();
session_destroy();
include ("includes/header.php");
include ("includes/nav.php");
include ("includes/content.php");
echo '<h4><div class="alert alert-success text-center">You Are Logged Out</div><h4>';
include ("includes/footer.php");
 ?>