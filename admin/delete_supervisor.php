<?php
include('dbcon.php');
if (isset($_POST['delete_supervisor'])){
$id=$_POST['selector'];
$N = count($id);
for($i=0; $i < $N; $i++)
{
	$result = mysqli_query($conn,"DELETE FROM supervisor where supervisor_id='$id[$i]'");
}
header("location: supervisors.php");
}
?>