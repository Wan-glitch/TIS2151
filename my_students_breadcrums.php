	 <!-- breadcrumb -->
	<?php $class_query = mysqli_query($conn,"select * from lecturer_class
	LEFT JOIN class ON class.class_id = lecturer_class.class_id
	LEFT JOIN subject ON subject.subject_id = lecturer_class.subject_id
	where lecturer_class_id = '$get_id'")or die(mysqli_error());
	$class_row = mysqli_fetch_array($class_query);
	?>
				
	<ul class="breadcrumb">
		<li><a href="#"><?php echo $class_row['class_name']; ?></a> <span class="divider">/</span></li>
		<li><a href="#"><?php echo $class_row['subject_code']; ?></a> <span class="divider">/</span></li>
		<li><a href="#">Semester: <?php echo $class_row['semester']; ?></a> <span class="divider">/</span></li>
		<li><a href="#"><b>My Students</b></a></li>
	</ul>
	<!-- end breadcrumb -->