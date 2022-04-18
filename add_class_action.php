<?php
include('dbcon.php');
$session_id = $_POST['session_id'];
$subject_id = $_POST['subject_id'];
$class_id = $_POST['class_id'];
$term_year = $_POST['term_year'];
$query = mysqli_query($conn,"select * from lecturer_class where subject_id = '$subject_id' and class_id = '$class_id' and lecturer_id = '$session_id' and term_year = '$term_year' ")or die(mysqli_error());
$count = mysqli_num_rows($query);
if ($count > 0){ 
echo "true";
}else{

mysqli_query($conn,"insert into lecturer_class (lecturer_id,subject_id,class_id,thumbnails,term_year) values('$session_id','$subject_id','$class_id','admin/uploads/thumbnails.jpg','$term_year')")or die(mysqli_error());

$lecturer_class = mysqli_query($conn,"select * from lecturer_class order by lecturer_class_id DESC")or die(mysqli_error());
$lecturer_row = mysqli_fetch_array($lecturer_class);
$lecturer_id = $lecturer_row['lecturer_class_id'];


$insert_query = mysqli_query($conn,"select * from student where class_id = '$class_id'")or die(mysqli_error());
while($row = mysqli_fetch_array($insert_query)){
$id = $row['student_id'];
mysqli_query($conn,"insert into lecturer_class_student (lecturer_id,student_id,lecturer_class_id) value('$session_id','$id','$lecturer_id')")or die(mysqli_error());
echo "yes";
}
}
?>