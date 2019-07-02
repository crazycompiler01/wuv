<?php include 'header_browse.php'; ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/demo.css" />
<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/frontend/' . $selected_theme;?>/hovercss/set1.css" />
<style>
	.movie_thumb{}
	.btn_opaque{font-size:20px; border: 1px solid #939393;text-decoration: none;margin: 10px;background-color: rgba(0, 0, 0, 0.74); color: #fff;}
	.btn_opaque:hover{border: 1px solid #939393;text-decoration: none;background-color: rgba(57, 57, 57, 0.74);color:#fff;}
</style>
<!-- TOP FEATURED SECTION -->
<?php $featured_movie = $this->db->get_where('movie', array('featured'=>1))->row(); ?>
<div style="height:85vh;width:100%;background-image: url(<?php echo $this->crud_model->get_poster_url('movie' , $featured_movie->movie_id);?>); background-size:cover; background-position: center center;">
	<div class="waveWrapper waveAnimation">
		<div class="waveWrapperInner bgTop">
			<div id="stars"></div>
			<div id="stars2"></div>
			<div id="stars3"></div>
			<div id="title">
				<div style="font-size: 85px;clear: both;padding: 200px 0px 0px 50px;color: #fff;  position: relative; z-index: 999999">
					<?php echo $featured_movie->title;?>
					<div style="font-size: 20px; letter-spacing: .2px; color: #ccc; font-weight: 100; width:50%;">
						<?php echo $featured_movie->description_short;?></div>
					<a href="<?php echo base_url();?>index.php?browse/playmovie/<?php echo $featured_movie->movie_id;?>" class="btn btn-danger btn-lg" style="font-size: 20px; background-color: #fbb813;">	<b><i class="fa fa-play"></i> <?php echo get_phrase('PLAY');?></b>
					</a>
					<!-- ADD OR DELETE FROM PLAYLIST -->	<span id="mylist_button_holder">
				</span>
					<span id="mylist_add_button" style="display:none;">
				<a href="#" class="btn  btn-lg btn_opaque"
					onclick="process_list('movie' , 'add', <?php echo $featured_movie->movie_id;?>)" style="background-color: #fbb813; border-color: #fbb813;"> 
				<b><i class="fa fa-plus"></i> <?php echo get_phrase('MY_RESOURCES');?></b>
				</a>
				</span>
					<span id="mylist_delete_button" style="display:none;">
				<a href="#" class="btn  btn-lg btn_opaque"
					onclick="process_list('movie' , 'delete', <?php echo $featured_movie->movie_id;?>)"> 
				<b><i class="fa fa-check"></i> <?php echo get_phrase('MY_RESOURCES');?></b>
				</a>
				</span>
				</div>
			</div>
			<div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
		</div>
		<div class="waveWrapperInner bgMiddle">
			<div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
		</div>
		<div class="waveWrapperInner bgBottom">
			<div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
		</div>
	</div>
</div>
<script>
	// submit the add/delete request for mylist
	// type = movie/series, task = add/delete, id = movie_id/series_id
	function process_list(type, task, id)
	{
		$.ajax({
			url: "<?php echo base_url();?>index.php?browse/process_list/" + type + "/" + task + "/" + id, 
			success: function(result){
			//alert(result);
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
<?php $genres=$ this->crud_model->get_genres(); foreach ($genres as $row): // count movie number of this genre, if no found then return. $this->db->where('genre_id' , $row['genre_id']); $total_result = $this->db->count_all_results('movie'); if ($total_result == 0) continue; ?>
<div class="row" style="margin:20px 60px;">
	<h4 style="color: #043174;"><?php echo $row['name'];?></h4>
	<div class="content">
		<div class="grid">
			<?php $movies=$ this->crud_model->get_movies($row['genre_id'] , 5, 0); foreach ($movies as $row) { $title = $row['title']; $link = base_url().'index.php?browse/playmovie/'.$row['movie_id']; $thumb = $this->crud_model->get_thumb_url('movie' , $row['movie_id']); include 'thumb.php'; } ?></div>
	</div>
</div>
<?php endforeach;?>
<?php include 'footer.php';?>