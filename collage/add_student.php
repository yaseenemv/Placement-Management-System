<?php

include("config.php");

$id = $_POST['in_Id'];
$user_role_id = $_POST['ad_UserRoleId'];
$first_name = $_POST['ad_FirstName'];
$last_name = $_POST['ad_LastName'];
$email = $_POST['ad_Email'];
$password = md5($_POST['ad_Password']);

$sql = "INSERT INTO tbl_users (id,user_role_id,first_name,last_name,email,password) VALUES (:id,:user_role_id,:first_name,:last_name,:email,:password)";
$query = $dbConn->prepare($sql);
$query->bindparam(':id', $id);
$query->bindparam(':user_role_id', $user_role_id);
$query->bindparam(':first_name', $first_name);
$query->bindparam(':last_name', $last_name);
$query->bindparam(':email', $email);
$query->bindparam(':password', $password);
$query->execute();
$dbConn = null;
header("Location:../collage/index.php");
/* 
CREATE TABLE IF NOT EXISTS `tbl_admin` (
    id INT NOT NULL AUTO_INCREMENT,
    user_role_id INT NOT NULL,
    first_name VARCHAR(256)  NOT NULL,
    last_name VARCHAR(256)  NOT NULL,
    email VARCHAR(256)  NOT NULL,
    password VARCHAR(256)  NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 */
