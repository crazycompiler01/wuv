<?php include 'header_browse.php';?>
<style>
	table{
	background-color: rgb(243, 243, 243);
	}
</style>
<div class="stars"></div>
  <div class="twinkling"></div>
<div class="container mob-top-0" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="">Purchase Membership</h3>
			<hr>
		</div>
		<div class="col-lg-8">
			<h4 class="">Purchase any of the membership package from below.</h4>
			<ul class="">
				<li>
					Select any of your preferred membership package & make payment.
				</li>
				<li>
					You can cancel your subscription anytime later.
				</li>
			</ul>
			<form method="post" action="">
				<div class="table-responsive" style="background-color: rgba(255,255,255,0.2);">
					<table class="table  table-hover" style="color: #fff; background-color: transparent; ">
						<tbody>
							<tr>
								<td>
									<h6>Packages</h6>
								</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center">
									<h5 style="text-transform: uppercase;"><?php echo $row['name'];?></h5>
								</td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>Monthly price</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center">USD <?php echo $row['price'];?></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>Screens you can watch on at the same time</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center"><?php echo $row['screens'];?></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>Watch on your laptop, TV, phone and tablet</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>HD available</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>Unlimited movies and TV shows</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td>Cancel anytime</td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center"><i class="fa fa-check" aria-hidden="true"></i></td>
								<?php endforeach;?>
							</tr>
							<tr>
								<td></td>
								<?php
									$plans = $this->crud_model->get_active_plans();
									foreach ($plans as $row):
									?>
								<td align="center">
									<input type="radio" name="plan_id" value="<?php echo $row['plan_id'];?>" onChange="enable_payment()" />
								</td>
								<?php endforeach;?>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="pull-right purchase-plan-btn">
					<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-success btn-lg">Go Back</a>
					<input type="submit" formaction="<?php echo base_url();?>index.php?payment/paypal_payment/paypal_post" 
						class="btn btn-primary btn-lg" id="payment_paypal" disabled value="Pay by paypal">
					<input type="submit" formaction="<?php echo base_url();?>index.php?browse/purchasestripe" 
						class="btn btn-primary btn-lg" id="payment_stripe" disabled value="Pay by stripe">
				</div>
			</form>
		</div>
		<script>
			function enable_payment()
			{
				$('#payment_paypal').removeAttr('disabled');
				$('#payment_stripe').removeAttr('disabled');
			}
		</script>
	</div>
	
	
</div>
<?php include 'footer.php';?>