<?php
require_once('config.php');
if(isset($_GET['logout']) && $_GET['logout'] == true)
{
	session_destroy();
	header("location:../../login.php");
	exit;
}
