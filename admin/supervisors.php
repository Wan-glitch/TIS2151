<?php include('header.php'); ?>
<?php include('session.php'); ?>
    <body>
		<?php include('navbar.php'); ?>
        <div class="container-fluid">
            <div class="row-fluid">
				<?php include('supervisor_sidebar.php'); ?>
				<div class="span3" id="adduser">
				<?php include('add_supervisor.php'); ?>		   			
				</div>
                <div class="span6" id="">
                     <div class="row-fluid">
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Supervisor List</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
  									<form action="delete_supervisor.php" method="post">
  									<table cellpadding="0" cellspacing="0" border="0" class="table" id="example">
									<a data-toggle="modal" href="#supervisor_delete" id="delete"  class="btn btn-danger" name=""><i class="icon-trash icon-large"></i></a>
									<?php include('modal_delete.php'); ?>
										<thead>
										    <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Username</th>

                                    <th></th>
                                </tr>
										</thead>
										<tbody>
												 <?php
                                    $supervisor_query = mysqli_query($conn,"select * from supervisor") or die(mysqli_error());
                                    while ($row = mysqli_fetch_array($supervisor_query)) {
                                    $id = $row['supervisor_id'];
                                    $supervisor_stat = $row['supervisor_stat'];
                                        ?>
									<tr>
										<td width="30">
										<input id="optionsCheckbox" class="uniform_on" name="selector[]" type="checkbox" value="<?php echo $id; ?>">
										</td>
                                    <td width="40"><img class="img-circle" src="<?php echo $row['location']; ?>" height="50" width="50"></td> 
                                    <td><?php echo $row['firstname'] . " " . $row['lastname']; ?></td> 
                                    <td><?php echo $row['username']; ?></td> 
                               
									<td width="50"><a href="edit_supervisor.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-pencil"></i></a></td>
									<?php if ($supervisor_stat == 'Activated' ){ ?>
									    <td width="120"><a href="de_activate_supervisor.php<?php echo '?id='.$id; ?>" class="btn btn-danger"><i class="icon-remove"></i> Deactivate</a></td>
									<?php }else{ ?>
									    <td width="120"><a href="edit_supervisor.php<?php echo '?id='.$id; ?>" class="btn btn-success"><i class="icon-check"></i> Activated</a></td>				
									<?php } ?>
                                </tr>
                            <?php } ?>
                               
										</tbody>
									</table>
									</form>
                                </div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>


                </div>
            </div>
		
        </div>
		<?php include('script.php'); ?>
    </body>

</html>