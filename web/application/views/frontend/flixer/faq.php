<!-- TOP LANDING SECTION -->
<div style="width:100%; height:90px; ">
    <!-- logo -->
    <div style="float: left;">
        <a href="<?php echo base_url();?>index.php?home">
            <img src="<?php echo base_url();?>/assets/global/logo.png" style="margin: 18px 40px; height: 35px;" />
        </a>
    </div>
</div>
<div class="stars"></div>
  <div class="twinkling"></div>
<div class="container faq-section">
	<div class="row">
		<div class="col-lg-12">
			<h4 class="white_text"><?php echo get_phrase('Frequently_asked_question');?></h4>
		</div>
		<?php 
		$count=0;
		$faqs	=	$this->db->get('faq')->result_array();
		foreach ($faqs as $row):
		$count++;
		?>
		
			<div class="col-lg-12 ">
				<div class="bs-example">
				    <div class="accordion" id="accordionExample">
				    	<div class="card">
							<div class="row">
								<div class="col-xs-2">
									<img src="<?php echo base_url().'assets/frontend/'.$selected_theme;?>/images/faq_icon.png" style=" width:40px;" />
								</div>
								<div class="col-xs-10 pl-0">
									<div class="card-header" id="headingOne<?php echo $count;?>">
										<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#collapseOne<?php echo $count;?>"><i class="fa fa-plus"></i> 
											<h3 class="white_text">
												<?php echo $row['question'];?>
											</h3>
										</button>	
									</div>
									<div id="collapseOne<?php echo $count;?>" class="collapse" aria-labelledby="headingOne<?php echo $count;?>" data-parent="#accordionExample">
						                <div class="card-body">
											<?php echo $row['answer'];?> 

										</div>
									</div>
									<hr style="border-top:1px dotted #616169;">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		
		<?php endforeach;?>


		
	</div>
	
</div>
<?php include 'footer.php';?>


