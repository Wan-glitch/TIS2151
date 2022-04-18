					<?php
						$term_year_query = mysqli_query($conn,"select * from term_year order by term_year DESC")or die(mysqli_error());
						$term_year_query_row = mysqli_fetch_array($term_year_query);
						$term_year = $term_year_query_row['term_year'];
						?>
				
	 				<?php $query_yes = mysqli_query($conn,"select * from lecturer_class_student
					LEFT JOIN lecturer_class ON lecturer_class.lecturer_class_id = lecturer_class_student.lecturer_class_id 
					LEFT JOIN class ON class.class_id = lecturer_class.class_id 
					LEFT JOIN subject ON subject.subject_id = lecturer_class.subject_id
					LEFT JOIN lecturer ON lecturer.lecturer_id = lecturer_class_student.lecturer_id 
					JOIN notification ON notification.lecturer_class_id = lecturer_class.lecturer_class_id 
					where lecturer_class_student.student_id = '$session_id' and term_year = '$term_year'   order by notification.date_of_notification DESC
					")or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);

		
		            ?>
					<?php $query_no = mysqli_query($conn,"select * from notification 
					LEFT JOIN notification_read ON notification_read.notification_id = notification.notification_id
					where notification_read.student_id  = '$session_id'
					")or die(mysqli_error());
					$count_yes = mysqli_num_rows($query_no);
					
		            ?>
					
					<?php $not_read = $count_no -  $count_yes; ?>