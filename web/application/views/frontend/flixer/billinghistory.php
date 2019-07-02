<?php include 'header_browse.php';?>
<div class="stars"></div>
  <div class="twinkling"></div>

<div class="container mob-top-0" style="margin-top: 50px; margin-bottom: 50px;">
	<div class="row">
		<div class="col-lg-12">
			<h3 class="white_text" style="margin-bottom: 30px;"><?php echo get_phrase('billing_history');?></h3>
			
		</div>
		<div class="col-lg-12">
			<div class="table-responsive">
				<table class="table table-striped table-hover" style="background-color: transparent;">
					<tbody>
						<tr style="background-color: rgba(255, 255, 255, 0.3); color: #27273b; font-weight: bold; border-bottom: 1px dotted #ddd; border-top: 1px dotted #ddd; font-size: 16px;">
							<td><?php echo get_phrase('date');?></td>
							<td><?php echo get_phrase('package');?></td>
							<td><?php echo get_phrase('service_period');?></td>
							<td><?php echo get_phrase('payment_method');?></td>
							<td><?php echo get_phrase('total');?></td>
						</tr>
						<?php 
						$user_id				=	$this->session->userdata('user_id');
						$subscription_history	=	$this->crud_model->get_subscription_of_user($user_id);
						foreach ($subscription_history as $row):
						?>
						<tr style="border-bottom: 1px dotted #ddd;">
							<td>
								<?php echo date("d M, Y" , $row['payment_timestamp']);?>
							</td>
							<td>
								<?php echo $this->db->get_where('plan', array('plan_id'=>$row['plan_id']))->row()->name;?>
							</td>
							<td>
								<?php echo date("d M, Y" , $row['timestamp_from']);?>
								-
								<?php echo date("d M, Y" , $row['timestamp_to']);?>
							</td>
							<td>
								<?php echo $row['payment_method'];?>
							</td>
							<td>
								USD <?php echo $row['paid_amount'];?>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
				</table>
			</div>
			<a href="<?php echo base_url();?>index.php?browse/youraccount" class="btn btn-success btn-lg"><?php echo get_phrase('go_back');?></a>
		</div>
	</div>
	
	
</div>

<?php include 'footer.php';?>
