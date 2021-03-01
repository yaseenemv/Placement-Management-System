<?php
include("config.php");
$id = $_GET['id'];
$sql = "DELETE FROM tbl_users WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->execute(array(':id' => $id));
$dbConn = null;
header("Location:../admin/index.php");
?>