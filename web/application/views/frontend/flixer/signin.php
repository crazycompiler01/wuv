<!-- TOP LANDING SECTION -->
<div class="stars"></div>
<div class="twinkling"></div>


	<!-- logo -->
	<!-- <div style="float: left;">
		<a href="<?php echo base_url();?>index.php?home">
		<img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 50px;" />
		</a>
	</div>  -->
	<div class="waveWrapper waveAnimation">
			  <div class="waveWrapperInner bgTop">
			  	<div class="login-main">
				  	<div class="container">
						<div class="row aligner">
							<!-- <div class="col-sm-6 col-md-6 pr-0">
								<img src="<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/login_bg.jpg" class="img-responsive login-img">
							</div> -->
							<div class="col-sm-10 col-md-8 pl-0">
								<div class="login-box">
									<?php 
										if ($this->session->flashdata('signin_result') == 'failed'):
										?>
									<!-- ERROR MESSAGE -->
									<div class="alert alert-dismissible alert-danger">
										<button type="button" class="close" data-dismiss="alert">&times;</button>
										<?php echo get_phrase('Login_failed! Please_try_again.');?>
									</div>
									<?php endif;?>
									<div class="text-center">
										<img src="<?php echo base_url();?>/assets/global/logo.png" style=" height: 50px;" />
										<h4 style="margin-top: 20px;">Your Digital Library of Dream Building Resources</h4>
										<hr style="border-top: 1px dotted #ccc">
									</div>
									<form method="post" action="<?php echo base_url();?>index.php?home/signin">
										<h3 class="text-center"><?php echo get_phrase('sign_in');?></h3>
										<hr style=" border-top: 1px dotted #616169;">
										<div class="mb10">
											<?php echo get_phrase('Email');?> 
										</div>
										<div class="">
											<input type="email" name="email" style="padding: 10px; width:100%; border: none;" />
										</div>
										<div class="mb10" style="margin-top: 20px;">
											<?php echo get_phrase('Password');?>
										</div>
										<div class="">
											<input type="password" name="password" style="padding: 10px; width:100%; border: none;" />
										</div>
										<button class="btn btn-success btn-lg" style=" width: 100%; margin: 20px 0px; "> <?php echo get_phrase('sign_in');?> </button>
									</form>
									<hr style=" border-top: 1px dotted #616169;">
									<a href="<?php echo base_url();?>index.php?home/forget"><?php echo get_phrase('Forget_password');?>?</a>
									|
									<a href="<?php echo base_url();?>index.php?home/signup"><?php echo get_phrase('Sign_up');?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			  	<!-- <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div> -->
			  </div>
			  <div class="waveWrapperInner bgMiddle">
			    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
			  </div>
			  <div class="waveWrapperInner bgBottom">
			    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
			  </div>
			</div>
	

<!-- MIDDLE TAB SECTION -->
