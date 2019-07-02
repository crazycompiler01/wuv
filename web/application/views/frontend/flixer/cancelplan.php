<?php include 'header_browse.php';?>
<div class="stars"></div>
  <div class="twinkling"></div>
<div class="container mob-top-0" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center acc-bg-1">
			<h3 class="white_text"><?php echo get_phrase('cancel_your_membership');?>?</h3>
			<hr style="border-top: 1px dotted #616169;">
		</div>
		<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center acc-bg-2">
			<h4 class="white_text"><?php echo get_phrase('Click_Finish_Cancellation_below_to_cancel_your_membership');?></h4>
			<ul class="white_text text-left" style="line-height: 26px; margin-bottom: 30px;">
				<li>
					<?php echo get_phrase('Cancellation_will_be_effective_immedietly_after_your_confirmation');?>
				</li>
				<li>
					<?php echo get_phrase('Restart_your_membership_anytime. Your_viewing_preferences_will_be_saved_always');?>
				</li>
			</ul>
			<form method="post" action="<?php echo base_url();?>index.php?browse/cancelplan">
				<input type="hidden" name="task" value="<?php echo get_phrase('cancel_plan');?>" />
				<div class="text-center">
					<button class="btn btn-success btn-lg" type="submit"> <?php echo get_phrase('Finish_Cancellation');?> </button>
					<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-primary btn-lg"><?php echo get_phrase('Go_Back');?></a>
				</div>
			</form>
		</div>
	</div>
	
	
</div>

<?php include 'footer.php';?>
