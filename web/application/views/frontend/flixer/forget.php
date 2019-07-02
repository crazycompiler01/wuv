<!-- TOP LANDING SECTION -->
<div class="stars"></div>
<div class="twinkling"></div>


<div class="waveWrapper waveAnimation">
			  <div class="waveWrapperInner bgTop">
				<div class="login-main">

					
						<div class="container">
							<div class="row aligner">
								<!-- <div class="col-sm-6 col-md-6 pr-0">
									<img src="<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/login_bg.jpg" class="img-responsive login-img">
								</div> -->
								<div class="col-sm-6 col-md-6 pl-0">
									<div class="login-box">
										<div class="text-center">
														<img src="<?php echo base_url();?>/assets/global/logo.png" style=" height: 50px;" />
													</div>
										<div class="text-center" style="margin-top: 15px;">
									        <a href="<?php echo base_url();?>index.php?home/signin" class="" style="color:#bbb;font-weight: 700;font-size: 20px;">
									        	<?php echo get_phrase('sign_in');?></a>
									    </div>
										<form action="<?php echo base_url();?>index.php?home/forget" method="post">
										 

										<?php 
										if ($this->session->flashdata('password_reset') == 'failed'):
										?>
											<!-- ERROR MESSAGE -->
											<div class="alert alert-dismissible alert-danger">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  	<?php echo get_phrase('Email_not_found');?>
											</div>
										<?php endif;?>
										
										<?php 
										if ($this->session->flashdata('password_reset') == 'success'):
										?>
											<!-- SUCCESS MESSAGE -->
											<div class="alert alert-dismissible alert-success">
											  <button type="button" class="close" data-dismiss="alert">&times;</button>
											  	<?php echo get_phrase('Password_sent_to_your_email');?>
											  <a href="<?php echo base_url();?>index.php?home/signin"><?php echo get_phrase('sign_in');?></a>
											</div>
										<?php endif;?>

										<h3 class="text-center"><?php echo get_phrase('Forgot_Email/_Password');?></h3>
										<hr style=" border-top: 1px dotted #616169;">
										<?php echo get_phrase('Enter_your_email_address. We_will_send_you_a_temporary_password.');?>
										<div class="mb10" style="margin-top: 20px;">
										<?php echo get_phrase('Email');?> 
										</div>
										<div class="">
											<input type="email" name="email" style="padding: 10px; width:100%; border: none;" />
										</div>
										<button type="submit" class="btn btn-success btn-lg" style=" width: 100%; margin: 20px 0px;"><?php echo get_phrase('Email_me');?></button>
										</form>
									</div>
								</div>
							</div>
						</div>
					
				</div>

			 </div>
			  <div class="waveWrapperInner bgMiddle">
			    <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
			  </div>
			  <div class="waveWrapperInner bgBottom">
			    <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
			  </div>
			</div>

