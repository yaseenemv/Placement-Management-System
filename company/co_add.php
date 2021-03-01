<?php
include("config.php");


$id = $_POST['in_Id'];
$cp_name = $_POST['in_CpName'];
$company_details = $_POST['in_CompanyDetails'];
$can_numbder = $_POST['in_CanNumbder'];

$sql = "INSERT INTO tbl_company (id,cp_name,company_details,can_numbder) VALUES (:id,:cp_name,:company_details,:can_numbder)";
$query = $dbConn->prepare($sql);
$query->bindparam(':id', $id);
$query->bindparam(':cp_name', $cp_name);
$query->bindparam(':company_details', $company_details);
$query->bindparam(':can_numbder', $can_numbder);
$query->execute();
$dbConn = null;
header("Location:../company/index.php");
?>