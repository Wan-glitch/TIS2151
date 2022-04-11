<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>
    <body>
		<?php include('navbar_student.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('my_classmates_link.php'); ?>
                <div class="span9" id="content">
                     <div class="row-fluid">
					     <!-- breadcrumb -->
					<?php $query = mysqli_query($conn,"select * from teacher_class_student
					LEFT JOIN teacher_class ON teacher_class.teacher_class_id = teacher_class_student.teacher_class_id 
					JOIN class ON class.class_id = teacher_class.class_id 
					JOIN subject ON subject.subject_id = teacher_class.subject_id
					where student_id = '$session_id'
					")or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					$id = $row['teacher_class_student_id'];	
					?>
					     <ul class="breadcrumb">
							<li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><?php echo $row['subject_code']; ?></a> <span class="divider">/</span></li>
							<li><a href="#">Semester: <?php echo $row['school_year']; ?></a> <span class="divider">/</span></li>
							<li><a href="#"><b>My Classmates</b></a></li>
						</ul>
						
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
						<thead>
							<tr>
								<th></th>
				
								<th>Name</th>
								<th>ID Number</th>
						
								<th>Course Yr & Section</th>
								<th></th>
							</tr>
						</thead>
						<tbody>

							<?php								 
								$my_student = mysqli_query($conn,"SELECT *
								FROM teacher_class_student
								LEFT JOIN student ON student.student_id = teacher_class_student.student_id
								INNER JOIN class ON class.class_id = student.class_id where teacher_class_id = '$get_id' order by lastname ")or die(mysqli_error());
																
								while($row = mysqli_fetch_array($my_student)){
								$id = $row['teacher_class_student_id']; }
								?>
							<tr>
								<td width="30">
									<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
							</td>
															 
							<td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
							<td><?php echo $row['username']; ?></td> 
							</tr>

                        </tbody>
                        </table>
								</div>
								</div>
								
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>