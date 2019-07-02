<?php include 'header_browse.php';?>
  <div class="stars"></div>
  <div class="twinkling"></div>
<!-- MOVIE LIST, GENRE WISE LISTING -->
<?php
	$movies		=	$this->crud_model->get_mylist('movie');
	$series		=	$this->crud_model->get_mylist('series');
	?>
<div class="row home-section-list">
	<div class="col-md-12">
		<h4 style="text-transform: capitalize;">
			<?php echo get_phrase('My_List');?> 
				(<?php echo count($movies) + count($series);?>)
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
					for ($i = 0; $i<count($movies) ; $i++)
					{
						$title	=	$this->db->get_where('movie' , array('movie_id' => $movies[$i]))->row()->title;
						$link	=	base_url().'index.php?browse/playmovie/' . $movies[$i];
						$thumb	=	$this->crud_model->get_thumb_url('movie' , $movies[$i]);
						include 'thumb.php';
					}
					
					for ($i = 0; $i<count($series) ; $i++)
					{
						$title	=	$this->db->get_where('series' , array('series_id' => $series[$i]))->row()->title;
						$link	=	base_url().'index.php?browse/playseries/' . $series[$i];
						$thumb	=	$this->crud_model->get_thumb_url('movie' , $series[$i]);
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