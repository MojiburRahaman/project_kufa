<?php
require_once '../data.php';
session_start();

$id = $_GET['id'];
$active_status = "UPDATE `partners` SET `status`= 1 WHERE id = $id ";

if (mysqli_query($data,$active_status)) {
   header('location:partners.php');
   $_SESSION['partner_active'] = "Active Suceessfully";
}
?>