<?php
include('admin/dbcon.php');
$get_id = $_POST['id'];
mysqli_query($conn,"delete from lecturer_class  where  lecturer_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from lecturer_class_student  where  lecturer_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from lecturer_class_announcements  where  lecturer_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from lecturer_notification  where  lecturer_class_id = '$get_id' ")or die(mysqli_error());
mysqli_query($conn,"delete from class_subject_overview where  lecturer_class_id = '$get_id' ")or die(mysqli_error());
header('location:dasboard_lecturer.php');
?>