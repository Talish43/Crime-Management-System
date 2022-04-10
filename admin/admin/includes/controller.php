<?php
$id = $_REQUEST['pid'];
switch($id)
{
  case 1:
  include "library/fir/add_fir.php";
  break;
  case 2:
  include "library/fir/manage_fir.php";
  break;
  case 3:
  include "library/criminals/add_criminal.php";
  break;
  case 4:
  include "library/criminals/manage_criminal.php";
  break;
  case 5:
  include "library/station/add_station.php";
  break;
  case 6:
  include "library/station/manage_station.php";
  break;
  case 7:
  include "library/constable/add_constable.php";
  break;
  case 8:
  include "library/constable/manage_constable.php";
  break;
  case 9:
  include "library/update/add_update.php";
  break;
  case 10:
  include "library/update/manage_update.php";
  break;
  case 11:
  include "library/help/add_help.php";
  break;
  case 12:
  include "library/help/manage_help.php";
  break;
  case 13:
  include "library/admin/add_admin.php";
  break;
  case 14:
  include "library/admin/manage_admin.php";
  break;
  case 15:
  include "library/news/add_news.php";
  break;
  case 16:
  include "library/news/manage_news.php";
  break;
  case 17:
  include "library/fir/edit.php";
  break;
  case 18:
  include "library/fir/delete.php";
  break;
  case 19:
  include "library/criminals/edit.php";
  break;
  case 20:
  include "library/criminals/delete.php";
  break;
  case 21:
  include "library/news/edit.php";
  break;
  case 22:
  include "library/news/delete.php";
  break;
  case 23:
  include "library/station/edit.php";
  break;
  case 24:
  include "library/station/delete.php";
  break;
  case 25:
  include "library/update/edit.php";
  break;
  case 26:
  include "library/update/delete.php";
  break;
  case 27:
  include "library/help/edit.php";
  break;
  case 28:
  include "library/help/delete.php";
  break;
  case 29:
  include "library/admin/edit.php";
  break;
  case 30:
  include "library/admin/delete.php";
  break;
  case 31:
  include "library/users/manage_users.php";
  break;
  case 32:
  include "library/users/edit.php";
  break;
  case 33:
  include "library/users/delete.php";
  break;
  case 34:
  include "library/RegUsers/manage_users.php";
  break;
  case 35:
  include "library/RegUsers/edit.php";
  break;
  case 36:
  include "library/RegUsers/delete.php";
  break;
  default:
  include "library/home.php";
  break;
}
?>