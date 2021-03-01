<?php
include("config.php");

#$id = $_POST['st_Id'];
$name = $_POST['st_Name'];
$email = $_POST['st_Email'];
$phone = $_POST['st_Phone'];
$bio = $_POST['st_Bio'];
$cv = $_FILES["st_Cv"]["name"];
$apply = $_POST['apply_cp'];


$target_path = "../uploads/";
$target_path = $target_path . basename($_FILES['st_Cv']['name']);

if (move_uploaded_file($_FILES['st_Cv']['tmp_name'], $target_path)) {
    echo "File uploaded successfully!";
} else {
    echo "Sorry, file not uploaded, please try again!";
}

$sql = "INSERT INTO students (id,name,email,phone,bio,cv,apply) VALUES (:id,:name,:email,:phone,:bio,:cv,:apply)";
$query = $dbConn->prepare($sql);
$query->bindparam(':id', $id);
$query->bindparam(':name', $name);
$query->bindparam(':email', $email);
$query->bindparam(':phone', $phone);
$query->bindparam(':bio', $bio);
$query->bindparam(':cv', $cv);
$query->bindparam(':apply', $apply);
$query->execute();
$dbConn = null;



header("Location:../student/index.php");
