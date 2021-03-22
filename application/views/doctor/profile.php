<div class="content">


	<!-- 2 columns form -->
	<form class="form-horizontal" action="<?=base_url('/doctor/profile');?>" method="post" enctype="multipart/form-data">
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Fill All Details</h5>
				 <p style="color:green;font-size:21px;"><?php 
			        if($this->session->flashdata('message')){
			          echo $this->session->flashdata('message');
			        }?>
			    </p>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<fieldset>
							<legend class="text-semibold"><i class="icon-reading position-left"></i> Personal details</legend>
							<div class="form-group">
								<label class="col-lg-3 control-label">Enter your name:</label>
								<div class="col-lg-9">
									<input type="text" class="form-control" placeholder="Eugene Kopyov" maxlength="10" name="doctor_name" value="<?php echo set_value('doctor_name'); ?>">
									<?php echo form_error('doctor_name', '<div class="error">', '</div>'); ?>
								</div>

							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Select your Specialty:</label>
								<div class="col-lg-9">
								<select name="specialty" data-placeholder="Your Specialty" class="select" value="<?php echo set_value('specialty'); ?>">
								<option></option>
								<optgroup label="Doctor/Specialty">
								<option value="Cardiology">Cardiology (Heart Care)</option>
		                        <option value="Endocrinology">Endocrinology(Diabetes)</option>
		                        <option value="General Physician">General Physician</option>
		                        <option value="Oncology">Oncology (Cancer Care)</option>
		                        <option value="Opthalmology">Opthalmology (Eye Care)</option>
		                        <option value="Orthopaedics">Orthopaedics (Bone and Spine Injury)</option>
		                        <option value="Physiotherapy">Physiotherapy</option>
		                        <option value="Physiotherapy">Transplant</option>
		                        <option value="Urology">Urology</option>
								</optgroup>
								</select>
								<?php echo form_error('specialty', '<div class="error">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Attach screenshot:</label>
								<div class="col-lg-9">
									<input type="file" name="userfile" class="file-styled"
									value="<?php echo set_value('userfile'); ?>">
									<?php echo form_error('userfile', '<div class="error">', '</div>'); ?>
									<?php if(!empty($errors['message'])) {
									 echo'<div class="error">'.$errors['message'].'</div>';
										}?>
								</div>
							</div>


							<div class="form-group">
								<label class="col-lg-3 control-label">Facebook link :</label>
								<div class="col-lg-9">
									<input type="url" name="facebook_link" class="form-control" placeholder="Your facebook link" value="<?php echo set_value('facebook_link'); ?>">
									<?php echo form_error('facebook_link', '<div class="error">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Twitter link:</label>
								<div class="col-lg-9">
									<input type="url" name="twitter_link" class="form-control" placeholder="Your twitter link" value="<?php echo set_value('twitter_link'); ?>">
									<?php echo form_error('twitter_link', '<div class="error">', '</div>'); ?>

								</div>
							</div>
							<div class="form-group">
								<label class="col-lg-3 control-label">Instagram:</label>
								<div class="col-lg-9">
									<input type="url" name="instagram_link" class="form-control" placeholder="Your instagram link" value="<?php echo set_value('instagram_link'); ?>">
									<?php echo form_error('instagram_link', '<div class="error">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Your message:</label>
								<div class="col-lg-9">
									<textarea rows="5" name="message" cols="5" class="form-control" placeholder="Enter your message only 200 letter" maxlength="200" value="<?php echo set_value('message'); ?>"></textarea>
									<?php echo form_error('message', '<div class="error">', '</div>'); ?>
								</div>
							</div>
						</fieldset>
					</div>

					<div class="col-md-6">
						<fieldset>
		                	<legend class="text-semibold"><i class="icon-truck position-left"></i> Contact details</legend>
							<div class="form-group">
								<label class="col-lg-3 control-label">Qualification:</label>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<input type="text" placeholder="Qualification" class="form-control" name="qualification" value="<?php echo set_value('qualification'); ?>">
											<?php echo form_error('qualification', '<div class="error">', '</div>'); ?>
										</div>

										<div class="col-md-6">
										<select id="selectElementId" class="select" name="passyear" value="<?php echo set_value('passyear'); ?>">
											<option placeholder="">Year passing</option>
											<?php 
											$base_year = 2019;
												$start_year = $base_year - 30;
												$end_year = $start_year + 30;

												for( $i = $start_year; $i <= $end_year; $i++)
												{   
												  echo '<option value='.$i.'>'.$i.'</option>';
												}
											?>
										</select>
										<?php echo form_error('passyear', '<div class="error">', '</div>'); ?>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Email:</label>
								<div class="col-lg-9">
									<input type="text" name="email" placeholder="eugene@kopyov.com" class="form-control" value="<?php echo set_value('email'); ?>">
									<?php echo form_error('email', '<div class="error">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Phone:</label>
								<div class="col-lg-9">
									<input type="text" name="phone" placeholder="+99-99-9999-9999" class="form-control" value="<?php echo set_value('phone'); ?>">
									<?php echo form_error('phone', '<div class="error">', '</div>'); ?>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Location:</label>
								<div class="col-lg-9">
									<div class="row">
										<div class="col-md-6">
											<div class="mb-15">
					                            <select data-placeholder="Select your country" class="select" name="country" value="<?php echo set_value('country'); ?>">
					                            	<option></option>
					                            	<option value="India">India</option>
					                                <option value="Canada">Canada</option> 
					                                <option value="USA">USA</option> 
					                            <option value="Australia">Australia</option> 
					                                <option value="Germany">Germany</option> 
					                            </select>
					                             <?php echo form_error('country', '<div class="error">', '</div>'); ?>
				                            </div>

				                            <input type="text" placeholder="ZIP code" class="form-control" name="pin" value="<?php echo set_value('pin'); ?>">
				                            <?php echo form_error('pin', '<div class="error">', '</div>'); ?>
										</div>

										<div class="col-md-6">
											<input type="text" name="state" placeholder="State" class="form-control mb-15" value="<?php echo set_value('state'); ?>">
											<?php echo form_error('state', '<div class="error">', '</div>'); ?>
											<input type="text" placeholder="City" class="form-control" name="city" value="<?php echo set_value('city'); ?>">
											<?php echo form_error('city', '<div class="error">', '</div>'); ?>
										</div>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label class="col-lg-3 control-label">Hospita:</label>
								<div class="col-lg-9">
									<input type="text" placeholder="Your hospital name" class="form-control" name="hospital" value="<?php echo set_value('hospital'); ?>">
									<?php echo form_error('hospital', '<div class="error">', '</div>'); ?>
								</div>
							</div>
						</fieldset>
					</div>
				</div>

				<div class="text-right">
					<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
				</div>
			</div>
		</div>
	</form>
	<!-- /2 columns form -->
	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
	</div>
	<!-- /footer -->

</div>
<!-- /content area -->
