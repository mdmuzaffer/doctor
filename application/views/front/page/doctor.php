
<section class="hero-wrap hero-wrap-2" style="background-image: url('<?=base_url();?>public/front/images/bg_1.jpg');" data-stellar-background-ratio="0.5">
<div class="overlay"></div>
<div class="container">
<div class="row no-gutters slider-text align-items-center justify-content-center">
  <div class="col-md-9 ftco-animate text-center">
    <h1 class="mb-2 bread">Qualified Doctors</h1>
    <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Doctor <i class="ion-ios-arrow-forward"></i></span></p>
  </div>
</div>
</div>
</section>

<section class="ftco-section">
	<div class="container">
		<div class="row">
			<?php foreach($doctors as $doctor) {?>
			<div class="col-md-6 col-lg-3 ftco-animate">
				<div class="staff">
					<div class="img-wrap d-flex align-items-stretch">
						<div class="img align-self-stretch" style="background-image: url(<?=base_url('/upload/'.$doctor->image);?>);">
						</div>
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


		<div class="row no-gutters my-5">
	      	<div class="col text-center">
		        <div class="block-27">
		          <ul style="margin-left: 426px;">
		          		<?php echo $this->pagination->create_links();?>
		          </ul>
		        </div>
	      	</div>
    	</div>

	</div>
</section>
