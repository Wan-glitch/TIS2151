   <div class="row-fluid">
       <a href="lecturers.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Lecturer</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Lecturer</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
								<!--
										<label>Photo:</label>
										<div class="control-group">
                                          <div class="controls">
                                               <input class="input-file uniform_on" id="fileInput" type="file" required>
                                          </div>
                                        </div>
									-->	
									<?php
									$query = mysqli_query($conn,"select * from lecturer where lecturer_id = '$get_id' ")or die(mysqli_error());
									$row = mysqli_fetch_array($query);
									?>
										
										  <div class="control-group">
											<label>Faculty:</label>
                                          <div class="controls">
                                            <select name="faculty"  class="chzn-select"required>
											<?php
											$query_lecturer = mysqli_query($conn,"select * from lecturer join  faculty")or die(mysqli_error());
											$row_lecturer = mysqli_fetch_array($query_lecturer);
											
											?>
											
                                             	<option value="<?php echo $row_lecturer['faculty_id']; ?>">
												<?php echo $row_lecturer['faculty_name']; ?>
												</option>
											<?php
											$faculty = mysqli_query($conn,"select * from faculty order by faculty_name");
											while($faculty_row = mysqli_fetch_array($faculty)){
											
											?>
											<option value="<?php echo $faculty_row['faculty_id']; ?>"><?php echo $faculty_row['faculty_name']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['firstname']; ?>" name="firstname" id="focusedInput" type="text" placeholder = "Firstname">
                                          </div>
                                        </div>
										
										<div class="control-group">
                                          <div class="controls">
                                            <input class="input focused" value="<?php echo $row['lastname']; ?>"  name="lastname" id="focusedInput" type="text" placeholder = "Lastname">
                                          </div>
                                        </div>
										
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div>
					
					
				   <?php
                            if (isset($_POST['update'])) {
                       
                                $firstname = $_POST['firstname'];
                                $lastname = $_POST['lastname'];
                                $faculty_id = $_POST['faculty'];
								
								
								$query = mysqli_query($conn,"select * from lecturer where firstname = '$firstname' and lastname = '$lastname' ")or die(mysqli_error());
								$count = mysqli_num_rows($query);
								
								if ($count > 1){ ?>
								<script>
								alert('Data Already Exist');
								</script>
								<?php
								}else{
								
								mysqli_query($conn,"update lecturer set firstname = '$firstname' , lastname = '$lastname' , faculty_id = '$faculty_id' where lecturer_id = '$get_id' ")or die(mysqli_error());	
								
								?>
								<script>
							 	window.location = "lecturers.php"; 
								</script>
								<?php   }} ?>
						 
						 