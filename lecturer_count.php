					<?php
						$term_year_query = mysqli_query($conn,"select * from term_year order by term_year DESC")or die(mysqli_error());
						$term_year_query_row = mysqli_fetch_array($term_year_query);
						$term_year = $term_year_query_row['term_year'];
						?>
				
					<?php $query_yes = mysqli_query($conn,"select * from lecturer_notification
					LEFT JOIN notification_read_lecturer on lecturer_notification.lecturer_notification_id =  notification_read_lecturer.notification_id
					where lecturer_id = '$session_id' 
					")or die(mysqli_error());
					$count_no = mysqli_num_rows($query_yes);
		            ?>
					<?php $query = mysqli_query($conn,"select * from lecturer_notification
					LEFT JOIN lecturer_class on lecturer_class.lecturer_class_id = lecturer_notification.lecturer_class_id
					LEFT JOIN student on student.student_id = lecturer_notification.student_id
					LEFT JOIN assignment on assignment.assignment_id = lecturer_notification.assignment_id 
					LEFT JOIN class on lecturer_class.class_id = class.class_id
					LEFT JOIN subject on lecturer_class.subject_id = subject.subject_id
					where lecturer_class.lecturer_id = '$session_id' 
					")or die(mysqli_error());
					$count = mysqli_num_rows($query);
		            ?>
					
					<?php $not_read = $count -  $count_no; ?>