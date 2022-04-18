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
						$term_year_query = mysqli_query($conn,"select * from term_year order by term_year DESC")or die(mysqli_error());
						$term_year_query_row = mysqli_fetch_array($term_year_query);
						$term_year = $term_year_query_row['term_year'];
						?>
							<li><a href="#">Teachers</a><span class="divider">/</span></li>
							<li><a href="#"><b>Profile</b></a></li>
						</ul>
						 <!-- end breadcrumb -->
					 
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
										<div class="alert alert-info"><i class="icon-info-sign"></i> About Me</div>
								<?php $query= mysqli_query($conn,"select * from lecturer where lecturer_id = '$session_id'")or die(mysqli_error());
								$row = mysqli_fetch_array($query);
						?>
  									<?php echo $row['about']; ?>
						
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