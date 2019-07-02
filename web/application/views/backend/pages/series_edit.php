<?php
	$series_detail = $this->db->get_where('series',array('series_id'=>$series_id))->row();
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <div class="card-body">
				<form method="post" action="<?php echo base_url();?>index.php?admin/series_edit/<?php echo $series_id;?>" enctype="multipart/form-data">
	                <div class="form-group mb-3">
	                    <label for="title">How to Video Title</label>
	                    <input type="text" class="form-control"  name="title" value="<?php echo $series_detail->title;?>">
	                </div>
	                <div class="form-group mb-3">
	                    <label for="title">How to Video Trailer URL</label>
	                    <input type="text" class="form-control" name="series_trailer_url" value="<?php echo $series_detail->trailer_url;?>">
	                </div>

	                <div class="form-group mb-3">
	                    <label for="thumb">Thumbnail</label>
						<span class="help">- icon image of the How to Video</span>
	                    <input type="file" class="form-control" name="thumb">
	                </div>

	                <div class="form-group mb-3">
	                    <label for="poster">Poster</label>
						<span class="help">- large banner image of the How to Video</span>
	                    <input type="file" class="form-control" name="poster">
	                </div>

					<div class="form-group mb-3">
						<label for="description_short">Short description</label>
						<textarea class="form-control" id="description_short" name="description_short" rows="6"><?php echo $series_detail->description_short;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="description_long">Long description</label>
						<textarea class="form-control" id="description_long" name="description_long" rows="6"><?php echo $series_detail->description_long;?></textarea>
					</div>

					<div class="form-group mb-3">
						<label for="actors">Dreams</label>
						<span class="help">- select multiple dreams</span>
						<select class="form-control select2" id="actors" multiple name="actors[]">
							<?php
								$actors	=	$this->db->get('actor')->result_array();
								foreach ($actors as $row2):?>
							<option
								<?php
									$actors	=	$series_detail->actors;
									if ($actors != '')
									{
										$actor_array	=	json_decode($actors);
										if (in_array($row2['actor_id'], $actor_array))
											echo 'selected';
									}
									?>
								value="<?php echo $row2['actor_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="genre_id">Type</label>
						<span class="help">- type must be selected</span>
						<select class="form-control select2" id="genre_id" name="genre_id">
							<?php
								$genres	=	$this->crud_model->get_genres();
								foreach ($genres as $row2):?>
							<option
								<?php if ( $series_detail->genre_id == $row2['genre_id']) echo 'selected';?>
								value="<?php echo $row2['genre_id'];?>">
								<?php echo $row2['name'];?>
							</option>
							<?php endforeach;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="year">Publishing Year</label>
						<span class="help">- year of publishing time</span>
						<select class="form-control select2" id="year" name="year">
							<?php for ($i = date("Y"); $i > 2000 ; $i--):?>
							<option
								<?php if ( $series_detail->year == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>

					<div class="form-group mb-3">
						<label for="rating">Rating</label>
						<span class="help">- star rating of the resource</span>
						<select class="form-control select2" id="rating" name="rating">
							<?php for ($i = 0; $i <= 5 ; $i++):?>
							<option
								<?php if ( $series_detail->rating == $i) echo 'selected';?>
								value="<?php echo $i;?>">
								<?php echo $i;?>
							</option>
							<?php endfor;?>
						</select>
					</div>
					<div class="row">
						<div class="form-group col-6">
							<input type="submit" class="btn btn-success col-12" value="Update Tv Series">
						</div>
						<div class="col-6">
							<a href="<?php echo base_url();?>index.php?admin/series_list" class="btn btn-secondary col-12">Go back</a>
						</div>
					</div>
				</form>
            </div>
        </div>
    </div>
	<div class="col-6">
		<div class="card">
            <div class="card-body">
                <h4 class="header-title">Seasons & episodes</h4>
				<a href="<?php echo base_url();?>index.php?admin/season_create/<?php echo $series_id;?>"
					class="btn btn-primary pull-right" style="margin-bottom: 20px;">
				<i class="fa fa-plus"></i>
				Create season
				</a>

				<table class="table table-hover table-centered mb-0" width="100%">
					<tbody>
						<?php
							$seasons	=	$this->crud_model->get_seasons_of_series($series_id);
							foreach ($seasons as $row):
							?>
						<tr>
							<td>
								<i class="fa fa-dot-circle-o"></i>
								<?php echo $row['name'];?>
							</td>
							<td>
								<?php
									$episodes	=	$this->crud_model->get_episodes_of_season($row['season_id']);
									echo count($episodes);
									?>
								episodes
							</td>
							<td>
								<a href="<?php echo base_url();?>index.php?admin/season_edit/<?php echo $series_id.'/'.$row['season_id'];?>"
									class="btn btn-info btn-xs btn-mini">
								manage episodes</a>
								<a href="<?php echo base_url();?>index.php?admin/season_delete/<?php echo $series_id.'/'.$row['season_id'];?>"
									class="btn btn-danger btn-xs btn-mini" onclick="return confirm('Want to delete?')">
								delete</a>
							</td>
						</tr>
						<?php endforeach;?>
					</tbody>
                </table>
            </div>
        </div>
	</div>
</div>
