<?php
require_once 'session.php';
require_once '../data.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['cancel'])) {
        header('location:profile.php');
    } elseif (isset($_POST['submit'])) {
        $title =  $_POST['title'];
        $year =  $_POST['year'];
        $progress =$_POST['progess'];
        if (empty($title)) {
            header('location:education-add.php');
        }
        elseif (empty($year)) {
            header('location:education-add.php');
        }
        elseif (empty($progress)) {
            header('location:education-add.php');
        } elseif (!is_numeric($year)) {
            header('location:education-add.php');
        }
        elseif (!is_numeric($progress)) {
            header('location:education-add.php');
        }
        else {
            $add = "INSERT INTO educations (title,year,progress) VALUES ( '$title','$year','$progress' )";
        $add_q = mysqli_query($data, $add);
        if ($add_q) {
            header('location:profile.php');
            $_SESSION['edu_add'] = " Added Sucessfully";
        }
        }
    }
} else {
    header('location:education-add.php');
}

?>