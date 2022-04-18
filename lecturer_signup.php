<?php
include('admin/dbcon.php');
session_start();
$username = $_POST['username'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$faculty_id = $_POST['faculty_id'];

$query = mysqli_query($conn,"select * from lecturer where  firstname='$firstname' and lastname='$lastname' and faculty_id = '$faculty_id'")or die(mysqli_error());
$row = mysqli_fetch_array($query);
$id = $row['lecturer_id'];

$count = mysqli_num_rows($query);
if ($count > 0){
	mysqli_query($conn,"update lecturer set username='$username',password = '$password', lecturer_status = 'Registered' where lecturer_id = '$id'")or die(mysqli_error());
	$_SESSION['id']=$id;
	echo 'true';
}else{
	echo 'false';
}
?>