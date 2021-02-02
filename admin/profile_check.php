<div>
    <form class="booking-form-box" method="POST" action="booking_1.php">
		<div class="booking-form-box">
		    <div class="booking-form">
		        <label>Travelig From</label>
			    <select name="state_from" class="form-control origin">
				        <option value="0">---Select State---</option>
				        <?php 
					        $origin_query = mysqli_query($connection, "SELECT * FROM `origin`") ;
					        while($row = mysqli_fetch_array($origin_query)) {
						?>
						<option value="<?php echo $row['origin_id'] ?>"><?php echo $row['origin_state'] ?></option>
						<?php
					        }
				        ?>
			    </select><br />
			
			        <label>Travelig To</label>
			        <select name="state_to" class="form-control trip">
				        <option value="0">---Select State---</option>
			        </select><br />
			        <div class="input-grp">
			            <label>Departing</label>
			            <input type="date" class="form-control select-date">
		            </div>
                        <input type="hidden" value='view' name='action' class="form-control">
		            <div class="input-grp"><br>
		                <input type="submit" value="Submit Bookings" class="btn btn-danger btn-block">
		            </div>
		    </div>
		</div>
	</form>
</div>
