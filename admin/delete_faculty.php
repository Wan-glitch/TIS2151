<?php
include('dbcon.php');
if (isset($_POST['delete_faculty'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM faculty where faculty_id='$id[$i]'");
}
header("location: faculty.php");
}
?>