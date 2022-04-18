<?php include('header_dashboard.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar_lecturer.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('lecturer_sidebar.php'); ?>
                <div class="span6" id="content">
                     <div class="row-fluid">
					    <!-- breadcrumb -->
						
									
					     <ul class="breadcrumb">
						<?php
						$sy = $_POST['term_year'];
						
						$term_year_query = mysqli_query($conn,"select * from term_year where  term_year = '$sy'")or die(mysqli_error());
						$term_year_query_row = mysqli_fetch_array($term_year_query);
						$term_year = $term_year_query_row['term_year'];
						?>
							<li><a href="#"><b>My Class</b></a><span class="divider">/</span></li>
							<li><a href="#"><?php echo $term_year_query_row['term_year']; ?></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								
  										<ul	 id="da-thumbs" class="da-thumbs">
										<?php $query = mysqli_query($conn,"select * from lecturer_class
										LEFT JOIN class ON class.class_id = lecturer_class.class_id
										LEFT JOIN subject ON subject.subject_id = lecturer_class.subject_id
										where lecturer_id = '$session_id' and term_year = '$term_year' ")or die(mysqli_error());
										while($row = mysqli_fetch_array($query)){
										$id = $row['lecturer_class_id'];
				
										?>
											<li>
												<a href="my_students.php<?php echo '?id='.$id; ?>">
														<img src ="<?php echo $row['thumbnails'] ?>" width="124" height="140" class="img-polaroid">
													<div>
													<span>
													<p><?php echo $row['class_name']; ?></p>
													
													</span>
													</div>
												</a>
												<p class="class"><?php echo $row['class_name']; ?></p>
												<p class="subject"><?php echo $row['subject_code']; ?></p>
												<a  href="#<?php echo $id; ?>" data-toggle="modal"><i class="icon-trash"></i> Remove</a>	
											
											</li>
										<?php include("delete_class_modal.php"); ?>

			
									<?php } ?>
									</ul>
						
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
				<?php include('lecturer_right_sidebar.php') ?>
            </div>
		<?php include('footer.php'); ?>
        </div>
		<?php include('script.php'); ?>
    </body>
</html>