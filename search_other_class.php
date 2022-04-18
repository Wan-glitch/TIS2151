	      <!-- block -->
                        <div class="block" id="search_class">
                            <div class="navbar navbar-inner block-header">
                                <div id="" class="muted pull-left"><strong>Search Past Class</strong></div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post" action="search_class.php">	
										<div class="control-group">
											<label>Semester:</label>
                                          <div class="controls">
                                            <select name="term_year"  class="span8" required>
                                             	<option></option>
											<?php
											$query = mysqli_query($conn,"select * from term_year order by term_year DESC");
											while($row = mysqli_fetch_array($query)){
											
											?>
											<option><?php echo $row['term_year']; ?></option>
											<?php } ?>
                                            </select>
                                          </div>
                                        </div>
											<div class="control-group">
                                          <div class="controls">
												<button name="search" class="btn btn-info"><i class="icon-search"></i> Search</button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->