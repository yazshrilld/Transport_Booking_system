<div>
    <form class="booking-form-box" method="POST" action="booking_p.php">
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
			        <div class="row">
						<div class="input-grp col-xs-6">
							<label>Departing</label>
							<input type="date" class="form-control select-date"><br />
						</div>
						<div class="input-grp col-xs-6">
							<label>Arrival</label>
							<input type="date" class="form-control select-date">
						</div>
					</div>
                        <input type="hidden" value='view' name='action' class="form-control">
		            <div class="input-grp"><br>
		                <input type="submit" value="Submit Bookings" class="btn btn-danger ">
		            </div>
		    </div>
		</div>
	</form>
</div>
