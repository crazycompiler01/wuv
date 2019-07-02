<?php include 'header_browse.php';?>
<div class="stars"></div>
  <div class="twinkling"></div>
<!-- MOVIE LIST, GENRE WISE LISTING -->
<?php
	$movies		=	$this->crud_model->get_search_result('movie' , $search_key);
	$series		=	$this->crud_model->get_search_result('series', $search_key);
	?>
<div class="row home-section-list">
	<div class="col-md-12">
		<h4>
			<?php echo get_phrase('Search_result_for');?> : "<?php echo $search_key;?>"
		</h4>
		<div class="content">
					<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
					<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />
					<style>
						.movie_thumb{}
						.btn_opaque{font-size:20px; border: 1px solid #939393;text-decoration: none;margin: 10px;background-color: rgba(0, 0, 0, 0.74); color: #fff;}
						.btn_opaque:hover{border: 1px solid #939393;text-decoration: none;background-color: rgba(57, 57, 57, 0.74);color:#fff;}
					</style>
			<div class="grid owl-carousel owl-theme">
				<?php 
					foreach ($movies as $row)
					{
						$title	=	$row['title'];
						$link	=	base_url().'index.php?browse/playmovie/'.$row['movie_id'];
						$thumb	=	$this->crud_model->get_thumb_url('movie' , $row['movie_id']);
						include 'thumb.php';
					}
					
					foreach ($series as $row)
					{
						$title	=	$row['title'];
						$link	=	base_url().'index.php?browse/playseries/'.$row['series_id'];
						$thumb	=	$this->crud_model->get_thumb_url('series' , $row['series_id']);
						include 'thumb.php';
					}
					?>
			</div>
		</div>
		<div style="clear: both;"></div>
		<ul class="pagination">
			<?php echo $this->pagination->create_links(); ?>
		</ul>
	</div>
</div>
<?php include 'footer.php';?>