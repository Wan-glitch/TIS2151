<div class="span3" id="sidebar">
	<img id="avatar" class="img-polaroid" src="admin/<?php echo $row['location']; ?>">
	<?php include('lecturer_count.php'); ?>
	<ul class="nav nav-list bs-docs-sidenav nav-collapse collapse">
		<li class=""><a href="dasboard_lecturer.php"><i class="icon-chevron-right"></i><i class="icon-group"></i>&nbsp;My Class</a></li>
		<li class="active"><a href="notification_lecturer.php"><i class="icon-chevron-right"></i><i class="icon-info-sign"></i>&nbsp;Notification
		</a></li>
		<li class=""><a href="add_downloadable.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Materialss</a></li> 
		<li class=""><a href="add_announcement.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Announcement</a></li> 
		<li class=""><a href="add_assignment.php"><i class="icon-chevron-right"></i><i class="icon-plus-sign"></i>&nbsp;Add Assignment</a></li>
	<?php include('search_other_class.php'); ?>	
</div>

