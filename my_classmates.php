<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
<?php $get_id = $_GET['id']; ?>

<style>
	.table th, .table td {
	padding: 8px;
	line-height: 20px;
	text-align: left;
	vertical-align: top;
	border-top: 1px solid powderblue;

}

</style>

<body>
    <?php include('navbar_student.php'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <?php include('my_classmates_link.php'); ?>
            <div class="span9" id="content">
                <div class="row-fluid">
                    <!-- breadcrumb -->
                    <?php $query = mysqli_query($conn,"select * from lecturer_class_student
					LEFT JOIN lecturer_class ON lecturer_class.lecturer_class_id = lecturer_class_student.lecturer_class_id 
					JOIN class ON class.class_id = lecturer_class.class_id 
					JOIN subject ON subject.subject_id = lecturer_class.subject_id
					where student_id = '$session_id'
					")or die(mysqli_error());
					$row = mysqli_fetch_array($query);
					$id = $row['lecturer_class_student_id'];	
					?>
                    <ul class="breadcrumb">
                        <li><a href="#"><?php echo $row['class_name']; ?></a> <span class="divider">/</span></li>
                        <li><a href="#"><?php echo $row['subject_code']; ?></a> <span class="divider">/</span></li>
                        <li><a href="#">Semester: <?php echo $row['term_year']; ?></a> <span class="divider">/</span>
                        </li>
                        <li><a href="#"><b>My Classmates</b></a></li>
                    </ul>

                    <!-- end breadcrumb -->

                    <!-- block -->
                    <div id="block_bg" class="block">
                        <div class="navbar navbar-inner block-header">
                            <div id="" class="muted pull-left"></div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
							<table cellpadding="0" cellspacing="0" border="0" class="table">
                                <ul id="da-thumbs" class="da-thumbs">
                                    <thead>
                                        <tr>
                                            <th >ID</th>

                                            <th>Name</th>
                                            <th>Email</th>

                                        </tr>
                                    </thead>
                                    <tbody>

										<?php
											$my_student = mysqli_query($conn,"SELECT *
											FROM lecturer_class_student
											LEFT JOIN student ON student.student_id = lecturer_class_student.student_id
											INNER JOIN class ON class.class_id = student.class_id where lecturer_class_id = '$get_id' order by lastname ")or die(mysqli_error());
											
											while($row = mysqli_fetch_array($my_student)){
											$id = $row['lecturer_class_student_id'];
											?>
                                        <tr>
										
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td>
											<td><?php echo $row['username'] ."@student.mmu.edu.my "; ?></td>
                                        <tr>
										<?php } ?>


                                </ul>
                                </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>


            </div>

        </div>
        <?php include('footer.php'); ?>
    </div>
    <?php include('script.php'); ?>
</body>

</html>
