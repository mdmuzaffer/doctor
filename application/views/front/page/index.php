<?php

/*	echo"<pre>";
    print_r($blogs);
    die;*/

?>

<!-- END nav -->
<section class="home-slider owl-carousel">
  <div class="slider-item" style="background-image:url(<?=base_url();?>public/front/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
  	<div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 text ftco-animate">
        <h1 class="mb-4">Helping Your <span>Stay Happy One</span></h1>
        <h3 class="subheading">Everyday We Bring Hope and Smile to the Patient We Serve</h3>
        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
      </div>
    </div>
    </div>
  </div>

  <div class="slider-item" style="background-image:url(<?=base_url();?>public/front/images/bg_2.jpg);">
  	<div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
      <div class="col-md-6 text ftco-animate">
        <h1 class="mb-4">We Care <span>About Your Health</span></h1>
        <h3 class="subheading">Your Health is Our Top Priority with Comprehensive, Affordable medical.</h3>
        <p><a href="#" class="btn btn-secondary px-4 py-3 mt-3">View our works</a></p>
      </div>
    </div>
    </div>
  </div>
</section>

<section class="ftco-services ftco-no-pb">
		<div class="container">
			<div class="row no-gutters">
      <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
        		<span class="flaticon-doctor"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Qualitfied Doctors</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
        		<span class="flaticon-ambulance"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Emergency Care</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>    
      </div>
      <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
        		<span class="flaticon-stethoscope"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Outdoor Checkup</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
      <div class="col-md-3 d-flex services align-self-stretch p-4 ftco-animate">
        <div class="media block-6 d-block text-center">
          <div class="icon d-flex justify-content-center align-items-center">
        		<span class="flaticon-24-hours"></span>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">24 Hours Service</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>      
      </div>
    </div>
		</div>
	</section>
	<br>
	
	<section class="ftco-intro" style="background-image: url(<?=base_url();?>public/front/images/bg_3.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<h2>We Provide Free Health Care Consultation</h2>
					<p class="mb-0">Your Health is Our Top Priority with Comprehensive, Affordable medical.</p>
					<p></p>
				</div>
				<div class="col-md-3 d-flex align-items-center">
					<p class="mb-0"><a href="#" class="btn btn-secondary px-4 py-3">Free Consutation</a></p>
				</div>
			</div>
		</div>
	</section>

	<br>
	<section class="ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
      	<span class="subheading">Doctors</span>
        <h2 class="mb-4">Qualified Doctors in Purnia</h2>
        <p>Purnia Line Bazar is an important city of Purnia, Bihar. It is medical hub serving city. The large no of patients from North-East Bihar as well as neighbouring Nepal and West Bengal. Line Bazar is fully facilitated with good doctors, private and government hospitals, blood banks, chemists etc.</p>
      </div>
    </div>	
			<div class="row">

				<?php foreach($doctors as $doctor){?>
				<div class="col-md-6 col-lg-3 ftco-animate">
					<div class="staff">
						<div class="img-wrap d-flex align-items-stretch">
							<div class="img align-self-stretch" style="background-image: url(<?=base_url('/upload/'.$doctor->image);?>);"></div>
						</div>
						<div class="text pt-3 text-center">
							<h3>Dr. <?php echo $doctor->name;?></h3>
							<span class="position mb-2"><?php echo $doctor->specialty;?></span>
							<div class="faded">
								<p><?php echo $doctor->message;?></p>
								<ul class="ftco-social text-center">
					                <li class="ftco-animate"><a href="<?=$doctor->twitter_link;?>"><span class="icon-twitter"></span></a></li>
					                <li class="ftco-animate"><a href="<?=$doctor->facebook_link;?>"><span class="icon-facebook"></span></a></li>
					                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
					                <li class="ftco-animate"><a href="<?=$doctor->instagram_link;?>"><span class="icon-instagram"></span></a></li>
	              				</ul>
              				</div>
						</div>
					</div>
				</div>
			<?php }?>
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
	
	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
      <div class="col-md-8 text-center heading-section ftco-animate">
      	<span class="subheading">Blog</span>
        <h2 class="mb-4">Recent Blog</h2>
        <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
      </div>
    </div>
	<div class="row">
	<?php foreach($blogs as $blog): ?>
      <div class="col-md-4 ftco-animate">
        <div class="blog-entry">
          <a href="blog-single.html" class="block-20" style="background-image: url(<?=base_url('/upload/'.$blog->image);?>);">
			<div class="meta-date text-center p-2">
	            <span class="day">
	            <?php $newDate = date("d", strtotime($blog->created_at)); 
	            echo $newDate;
	            ?></span>
	            <span class="mos">
	            <?php $newDate = date("F", strtotime($blog->created_at)); 
	            echo $newDate;
	            ?></span>
	            <span class="yr">
	            <?php $newDate = date("Y", strtotime($blog->created_at)); 
	            echo $newDate;
	            ?></span>
            </div>
          </a>
          <div class="text bg-white p-4">
            <h3 class="heading"><a href="#"><?=$blog->hospital;?></a></h3>
            <p><?= substr($blog->message,0,100);?> ...</p>
            <div class="d-flex align-items-center mt-4">
                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                <p class="ml-auto mb-0">
                	<a href="#" class="mr-2">Admin</a>
                	<a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                </p>
            </div>
          </div>
        </div>
      </div>
  		<?php endforeach; ?>
    </div>
	</div>
</section>