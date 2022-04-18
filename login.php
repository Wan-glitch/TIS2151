<?php
		include('admin/dbcon.php');
		session_start();
		$username = $_POST['username'];
		$password = $_POST['password'];
		/* student */
			$query = "SELECT * FROM student WHERE username='$username' AND password='$password'";
			$result = mysqli_query($conn,$query)or die(mysqli_error());
			$row = mysqli_fetch_array($result);
			$num_row = mysqli_num_rows($result);
		/* lecturer */
		$query_lecturer = mysqli_query($conn,"SELECT * FROM lecturer WHERE username='$username' AND password='$password'")or die(mysqli_error());
		$num_row_lecturer = mysqli_num_rows($query_lecturer);
		$row_teahcer = mysqli_fetch_array($query_lecturer);
		if( $num_row > 0 ) { 
		$_SESSION['id']=$row['student_id'];
		echo 'true_student';	
		}else if ($num_row_lecturer > 0){
		$_SESSION['id']=$row_teahcer['lecturer_id'];
		echo 'true';
		
		 }else{ 
				echo 'false';
		}	
				
		?>