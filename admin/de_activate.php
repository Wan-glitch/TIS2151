<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"update lecturer set lecturer_stat = 'Deactivated' where lecturer_id = '$get_id'");
header('location:lecturers.php');
?>