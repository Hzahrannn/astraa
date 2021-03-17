<?php
require_once( "db.php");
session_start();


if($_SESSION['email']){


session_unset();
session_destroy();
header( "location: login.php");
}
else{


header( "location: login.php");
}
?>