				<div class="row-fluid">

				    <div class="span12">

				    </div>

				</div>
				<div class="row-fluid">

				    <div class="span4">
				        <img class="index_logo" src="admin/images/Logo.png">
				    </div>

				    
				</div>

				<div class="row-fluid">
					<br>
				    <div class="span12">
				        <br>
				        <div class="motto">
				            <p>Multimedia University</p>
				            <p>FYP Monitoring and Management </p>
				        </div>
						<br>
						
                    <div class="announce_card" style="padding-left: 0px;padding-right: 0px;margin-bottom: 10px !important;">
                    	<div class="card-body">
                        	<h4 class="card-title" style="text-align: center" >Announcement</h4>
							<hr> </hr>

							<?php

								// $timezone = date_default_timezone_get();
								// $announce_text_query = mysqli_query($conn,"select * from public_announce order by published desc")or die(mysqli_error());

								//  $announce_text_query_row = mysqli_fetch_array($announce_text_query);
								// if (($announce_text_query_row['published']) == $timezone)
								// 	$announce_text = $announce_text_query_row['description'];

								// else {
								// 	echo $announce_text_query_row['description']; 
							$announce_text_query = mysqli_query($conn,"select * from public_announce order by published DESC")or die(mysqli_error());
							$announce_text_query_row = mysqli_fetch_array($announce_text_query);
							$announce_text = $announce_text_query_row['description'];

							echo $announce_text_query_row['description']; 

							?>
							<br>
							<br>
								
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!" data-toggle="modal" data-target="#modal18" style="background:#0750a4;">More Info</a>                         </div>
                        </div>
			</div> 
		</div>

	</div>
