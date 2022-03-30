<?php
include('dbcon.php');
$get_id = $_GET['id'];
mysqli_query($conn,"update supervisor set supervisor_stat = 'Deactivated' where supervisor_id = '$get_id'");
header('location:supervisors.php');
?>