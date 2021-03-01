<?php

include("config.php");

$id = $_POST['in_Id'];
$user_role_id = $_POST['ad_UserRoleId'];
$first_name = $_POST['ad_FirstName'];
$last_name = $_POST['ad_LastName'];
$email = $_POST['ad_Email'];
$password = $_POST['ad_Password'];

$sql = "UPDATE tbl_admin SET id=:id,user_role_id=:user_role_id,first_name=:first_name,last_name=:last_name,email=:email,password=:password WHERE id=:id";
$query = $dbConn->prepare($sql);
$query->bindparam(':id', $id);
$query->bindparam(':user_role_id', $user_role_id);
$query->bindparam(':first_name', $first_name);
$query->bindparam(':last_name', $last_name);
$query->bindparam(':email', $email);
$query->bindparam(':password', $password);
$query->execute();
$dbConn = null;
header("Location:../../index.php");
?>