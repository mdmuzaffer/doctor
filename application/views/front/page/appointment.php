
<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <h1 class="mb-2 bread">Appointment</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Appointment <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>
	
<section class="ftco-section ftco-no-pt ftco-no-pb ftco-counter img" id="section-counter" style="background-image: url(<?=base_url();?>public/front/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-md-6 py-5 pr-md-5">
          <div class="heading-section heading-section-white ftco-animate mb-5">
          	<span class="subheading">Consultation</span>
            <h2 class="mb-4">Free Consultation</h2>
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <p class="forMessage" style="color:#ffc107;"></p>
          </div>

          <form class="appointment-form ftco-animate" action="JavaScript:Void(0);">
    				<div class="d-md-flex">
	    				<div class="form-group">
	    					<input type="text" id="name" class="form-control" placeholder="Name">
	    					<input type="hidden" id="url" value="<?=base_url('/doctor/appointment');?>">
	    				</div>
	    				<div class="form-group ml-md-4">
	    					<input type="text" id="email" class="form-control" placeholder="Email">
	    				</div>
	    				<div class="form-group ml-md-4">
	    					<input type="text" id="address" class="form-control" placeholder="Address">
	    				</div>
    				</div>
    				<div class="d-md-flex">
    					<div class="form-group">
	    					<div class="form-field">
      					<div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="doctor" id="cntactForm" class="form-control">
                  	<option value="">Select doctor</option>
                  	<?php foreach($doctors as $doctoroption){?>
                  	<option value="<?= $doctoroption->id;?>"><?= $doctoroption->name;?></option>
                <?php }?>
                  </select>
                </div>
	              </div>
	    				</div>
    					<div class="form-group ml-md-4">
	    					<input type="text" id="phone" class="form-control" placeholder="Phone">
	    				</div>
    				</div>
    				<div class="d-md-flex">
	    				<div class="form-group">
	    					<div class="input-wrap">
	            		<div class="icon"><span class="ion-md-calendar"></span></div>
	            		<input type="text" id="date" class="form-control appointment_date" placeholder="Date">
            		</div>
	    				</div>
	    				<div class="form-group ml-md-4">
	    					<div class="input-wrap">
	            		<div class="icon"><span class="ion-ios-clock"></span></div>
	            		<input type="text" id="time" class="form-control appointment_time" placeholder="Time">
            		</div>
	    				</div>
    				</div>
    				<div class="d-md-flex">
    					<div class="form-group">
	              <textarea id="message" cols="30" rows="2" class="form-control" placeholder="Message"></textarea>
	            </div>
		        <div class="form-group ml-md-4">
		            <input type="button" id="myDoctor" value="Appointment" class="btn btn-secondary py-3 px-4">
		        </div>
    			</div>
    			</form>
			</div>
			<div class="col-lg-6 p-5 bg-counter aside-stretch">
					<h3 class="vr">About Dr.Care Facts</h3>
				<div class="row pt-4 mt-1">
	          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
	            <div class="block-18 p-5 bg-light">
	              <div class="text">
	                <strong class="number" data-number="30">0</strong>
	                <span>Years of Experienced</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
	            <div class="block-18 p-5 bg-light">
	              <div class="text">
	                <strong class="number" data-number="4500">0</strong>
	                <span>Happy Patients</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
	            <div class="block-18 p-5 bg-light">
	              <div class="text">
	                <strong class="number" data-number="84">0</strong>
	                <span>Number of Doctors</span>
	              </div>
	            </div>
	          </div>
	          <div class="col-md-6 d-flex justify-content-center counter-wrap ftco-animate">
	            <div class="block-18 p-5 bg-light">
	              <div class="text">
	                <strong class="number" data-number="300">0</strong>
	                <span>Number of Staffs</span>
	              </div>
	            </div>
	          </div>
          </div>
      </div>
    </div>
	</div>
</section>