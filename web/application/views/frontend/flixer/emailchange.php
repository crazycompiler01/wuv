<?php include 'header_browse.php';?>
<div class="stars"></div>
<div class="twinkling"></div>
<div class="container mob-top-0" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<?php
		if ($this->session->flashdata('status') == 'email_change_failed'):
		?>
			<!-- ERROR MESSAGE --> 
			<div class="alert alert-dismissible alert-danger">
			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			  <?php echo get_phrase('Email_already_exists_or_password_wrong_given. Please_try_again');?>
			</div>
		<?php endif;?>
		<div class="col-lg-6 col-lg-offset-3 text-center">
			<h3 class="white_text"><?php echo get_phrase('Change_Email');?></h3>
			<hr style="border-top:1px dotted #616169;">
		</div>
		<div class="col-lg-6 col-lg-offset-3">
			<form method="post" action="<?php echo base_url();?>index.php?browse/emailchange">
				<div class="">
					<?php echo get_phrase('Current_Email');?> 
				</div>
				<div class="white_text">
					<?php echo $this->crud_model->get_current_user_detail()->email;?>
				</div>
				<br>
				<div class="">
					<?php echo get_phrase('New_Email');?> 
				</div>
				<div class="white_text">
					<input type="email" name="new_email" style="padding: 10px; width:100%;" />
				</div>
				<div class="" style="margin-top: 20px;">
					<?php echo get_phrase('Current_Password');?>
				</div>
				<div class="white_text">
					<input type="password" name="old_password" style="padding: 10px; width:100%;" />
				</div>
				<br>
				<div class="text-center">
					<button class="btn btn-success btn-lg" type="submit"> <?php echo get_phrase('Save');?> </button>
					<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-primary btn-lg"><?php echo get_phrase('Cancel');?></a>
				</div>
			</form>
		</div>
	</div>
	
	
</div>
<?php include 'footer.php';?>

