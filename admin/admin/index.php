<?php
session_start();
if(isset($_SESSION['admin']))
{
include ("includes/header.php");
include ("includes/side_nav.php");
include ("includes/controller.php");
include ("includes/footer.php");
}
else
{
    header("location:../index.php");
}
?>