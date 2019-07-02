<div class="stars"></div>
  <div class="twinkling"></div>

<!-- ERROR MESSAGE -->
<style>
	td{padding: 12px 15px; border-bottom: 1px solid #ccc;}
</style>

<div class="waveWrapper waveAnimation">
			  <div class="waveWrapperInner bgTop">
<div class="login-main">
	<div class="container">
		
			<!-- ERROR MESSAGE SHOWING IF DUPLICATE EMAIL FOUND -->
			<?php 
				if ($this->session->flashdata('signup_result') == 'failed'):
				?>
			<div class="alert alert-dismissible alert-danger" style="margin: 30px;">
				<button type="button" class="close" data-dismiss="alert">&times;</button>
					<?php echo get_phrase('Email_already_exists! Please_try_again');?>.
			</div>
			<?php endif;?>
			<div class="row">
				<div class="col-md-8 col-md-offset-2" >
					<div class="login-box">
						<div class="text-center">
										<img src="<?php echo base_url();?>/assets/global/logo.png" style=" height: 50px;" />
									</div>
						<h3 class="text-center"><?php echo get_phrase('Sign_up_to_start_your_membership');?></h3>
						<h4 class="text-center"><?php echo get_phrase('Create_your_account');?>:</h4>
						<hr style=" border-top: 1px dotted #616169;">
						<form method="post" action="<?php echo base_url();?>index.php?home/signup">
							<div style="margin:10px 0px 5px;">
								<?php echo get_phrase('Email_Address');?>
							</div>
							<div class="">
								<input type="email" name="email" style="padding: 10px; width:100%; border: none;" autocomplete="off" />
							</div>
							<div style="margin:10px 0px 5px;">
								<?php echo get_phrase('Password');?>
							</div>
							<div class="">
								<input type="password" name="password" style="padding: 10px; width:100%; border: none;" />
							</div>
							<div class="text-center">
								<button type="submit"  class="btn btn-success btn-lg" style=" width: 150px; margin: 20px 0px;">
								<?php echo get_phrase('Register');?></button>
							</div>
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
