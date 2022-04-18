<?php
include('admin/dbcon.php');
$id = $_POST['id'];
mysqli_query($conn,"delete from lecturer_class_student where lecturer_class_student_id = '$id'")or die(mysqli_error());
?>

