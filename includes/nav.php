<?php
session_start();
if(isset($_SESSION['name']))
{
    include "nav2.php";
}
else
include "nav1.php";
?>