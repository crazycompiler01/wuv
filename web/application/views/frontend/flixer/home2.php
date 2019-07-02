<?php include 'header_browse.php';
echo "";?>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />
<style>
	.movie_thumb{}
	.btn_opaque{font-size:20px; border: 1px solid #939393;text-decoration: none;margin: 10px;background-color: rgba(0, 0, 0, 0.74); color: #fff;}
	.btn_opaque:hover{border: 1px solid #939393;text-decoration: none;background-color: rgba(57, 57, 57, 0.74);color:#fff;}


</style>
<!-- TOP FEATURED SECTION -->
<?php
	$featured_movie		=	$this->db->get_where('movie', array('featured'=>1))->row();
	
	?>
	<div class="home-category">
		<div id="stars"></div>
        <div id="stars2"></div>
        <div id="stars3"></div>
		<div style="height:85vh;width:100%;" >

			<div class="waveWrapper waveAnimation">
				
			  <div class="waveWrapperInner bgTop">
			  	<div id="stars"></div>
				<div id="stars2"></div>
				<div id="stars3"></div>
				<div id="title">
					<div class="banner-tt">
						<?php echo $featured_movie->title;?>
						<div style="font-size: 20px; letter-spacing: .2px; color: #ccc; font-weight: 100; width:50%;">
							<?php echo $featured_movie->description_short;?></div>
						<a href="<?php echo base_url();?>index.php?browse/playmovie/<?php echo $featured_movie->movie_id;?>" class="btn btn-success btn-lg"><b><i class="fa fa-rocket"></i> <?php echo get_phrase('EXPLORE');?></b>
						</a>
						<!-- ADD OR DELETE FROM PLAYLIST -->	<span id="mylist_button_holder">
					</span>
						<span id="mylist_add_button" style="display:none;">
					<a href="#" class="btn btn-primary btn-lg"
						onclick="process_list('movie' , 'add', <?php echo $featured_movie->movie_id;?>)" > 
					<b><i class="fa fa-plus"></i> <?php echo get_phrase('MY_RESOURCES');?></b>
					</a>
					</span>
						<span id="mylist_delete_button" style="display:none;">
					<a href="#" class="btn btn-primary btn-lg"
						onclick="process_list('movie' , 'delete', <?php echo $featured_movie->movie_id;?>)"> 
					<b><i class="fa fa-check"></i> <?php echo get_phrase('MY_RESOURCES');?></b>
					</a>
					</span>
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
			
		</div>
			<!-- <div class="row"> -->
	        <div class="col-md-12">
	        <h3 class="text-center mb-4">Featured Videos</h3> 

	        	<div class="thumbnail-slider" id="thumbnail-slider">
		            <div class="inner">
		                <ul>
		                	<?php
		                	foreach ($featured_slide as $f) {
		                    	//echo "<li><a href=".base_url()."index.php?browse/playmovie/".$f->movie_id."><img  class=\"thumb\" src=".$f->thumbnail."  /></a></li>";
	                    	//$link = 'aaasasas';
		                    ?>
		                    <li>
		                        <a class="thumb" href="<?php echo $f->thumbnail;?>"></a>
		                        <div class="feature-hidden">
		                        		<img src="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/explore.png" style="width:130px; margin: 0 auto;"/>
										<h5><p><?php echo $f->description_short;?></p></h5>
										<h4><a href=<?php echo base_url()."index.php?browse/playmovie/".$f->movie_id;?>>View more</a></h4>
										<!-- <a href="<?php echo $link; ?>">View more</a>
										<p class="hover-text"><?php echo $f->description_short;?> </p> -->
		                        </div>
		                    </li>

		                    <?php 
		                    }
		                    ?>
		                   <!--  <li>
		                        <a class="thumb" href="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/2.jpg"></a>
		                        <div class="feature-hidden">
		                        		<img src="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/explore.png" style="width:130px; margin: 0 auto;"/> 
										
										<h5><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p></h5>
										<h4><a href="javascipt:void(0)">View more</a></h4>
		                        </div>
		                    </li>
		                    <li>
		                        <a class="thumb" href="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/3.jpg"></a>
		                        <div class="feature-hidden">
		                        		<img src="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/explore.png" style="width:130px; margin: 0 auto;"/> 
										
										<h5><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p></h5>
										<h4><a href="javascipt:void(0)">View more</a></h4>
		                        </div>
		                    </li>
		                    <li>
		                        <a class="thumb" href="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/4.jpg"></a>
		                        <div class="feature-hidden">
		                        		<img src="<?php echo base_url();?>/assets/frontend/<?php echo $selected_theme;?>/images/explore.png" style="width:130px; margin: 0 auto;"/> 
										
										<h5><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p></h5>
										<h4><a href="javascipt:void(0)">View more</a></h4>
		                        </div>
		                    </li> -->
		                   
		                </ul>
		            </div>
		        </div>
	        	
	        	<!-- <div class="thumbnail-slider" id="thumbnail-slider">
		            <div class="inner">
		                <ul>
		                    <?php 
		                    foreach ($featured_slide as $f) {
		                    	echo "<li><a href=".base_url()."index.php?browse/playmovie/".$f->movie_id."><img  class=\"thumb\" src=".$f->thumbnail."  /></a></li>";
		                    }
		                    ?>
		                </ul>
		            </div>
		        </div> -->
	       </div>
	   

		<!-- </div> -->

<script>
	// submit the add/delete request for mylist
	// type = movie/series, task = add/delete, id = movie_id/series_id
	function process_list(type, task, id)
	{
		$.ajax({
			url: "<?php echo base_url();?>index.php?browse/process_list/" + type + "/" + task + "/" + id, 
			success: function(result){
			alert(result);
			if (task == 'add')
			{
				$("#mylist_button_holder").html( $("#mylist_delete_button").html() );
			}
			else if (task == 'delete')
			{
				$("#mylist_button_holder").html( $("#mylist_add_button").html() );
			}
		}});
	}
	
	// Show the add/delete wishlist button on page load
	$( document ).ready(function() {
	
		// Checking if this movie_id exist in the active user's wishlist
		mylist_exist_status = "<?php echo $this->crud_model->get_mylist_exist_status('movie' , $featured_movie->movie_id);?>";
	
		if (mylist_exist_status == 'true')
		{
			$("#mylist_button_holder").html( $("#mylist_delete_button").html() );
		}
		else if (mylist_exist_status == 'false')
		{
			$("#mylist_button_holder").html( $("#mylist_add_button").html() );
		}
	});
</script>
<!-- MY LIST, GENRE WISE LISTING & SLIDER -->
<?php 
	$genres		=	$this->crud_model->get_genres();
	foreach ($genres as $key => $row):
		// count movie number of this genre, if no found then return.
		$this->db->where('genre_id' , $row['genre_id']);
        $total_result = $this->db->count_all_results('movie');
        if ($total_result == 0)
        	continue;
	?>
	
<div class="row home-section-list">
	
	<div class="col-md-6">
		<div class="sec-name-vm">
			<h4 style="color: #043174;"><?php echo $row['name'];?></h4>
			<a href="<?php echo $link;?>" class="view-more">View more</a>
		</div>
	</div>
	
	<div class="col-md-6">
		
	</div>

	<div class="col-md-12">

		<div class="content">
		    	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
				<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />
				<style>
					.movie_thumb{}
					.btn_opaque{font-size:20px; border: 1px solid #939393;text-decoration: none;margin: 10px;background-color: rgba(0, 0, 0, 0.74); color: #fff;}
					.btn_opaque:hover{border: 1px solid #939393;text-decoration: none;background-color: rgba(57, 57, 57, 0.74);color:#fff;}
				</style>

			<div class="grid owl-carousel owl-theme"> <!-- id="thumbnail-slider_<?php echo $key+1 ?>" -->

	                        	

							<?php 
								$movies	= $this->crud_model->get_movies($row['genre_id'] , 5, 0);
								foreach ($movies as $row)
								{
									$title	=	$row['title'];
									$link	=	base_url().'index.php?browse/playmovie/'.$row['movie_id'];
									$thumb	=	$this->crud_model->get_thumb_url('movie' , $row['movie_id']);
									$des	=	$row['description_short'];
									include 'thumb.php';
								}

								?>
						
					
			</div> 
		</div>
	</div>
</div>
<?php endforeach;?>
<?php include 'footer.php';?>

