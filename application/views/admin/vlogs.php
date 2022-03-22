<?php if ($this->uri->segment(3) == 'manage'): ?>

	<?= showMsg(); ?>

	<?= getBredcrum(ADMIN, array('#' => 'Add/Update Blogs')); ?>

	<div class="row margin-bottom-10">

		<div class="col-md-6">

			<h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Blogs</strong></h2>

		</div>

		<div class="col-md-6 text-right">

			<a href="<?= site_url(ADMIN . '/vlogs'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>

		</div>

	</div>

	<div>

		<hr>

		<div class="row col-md-12">

			<form action="" name="frmLocation" role="form" class="form-horizontal" method="post" enctype="multipart/form-data">	

            <div class="col-md-4">
            	<div class="col-md-12">
                    <label class="control-label"> Status</label>
                    <select class="form-control" name="status" id="status">
                    	<option value="0" <?=($row->status==0 )?'selected':'' ?>>NO</option>
                    	<option value="1" <?=($row->status==1 )?'selected':'' ?>>Yes</option>
                    </select>
                </div>
            </div>
			<div class="col-md-4">
            	<div class="col-md-12">
                    <label class="control-label"> Featured</label>
                    <select class="form-control" name="featured" id="featured">
                    	<option value="0" <?=($row->featured==0 )?'selected':'' ?>>NO</option>
                    	<option value="1" <?=($row->featured==1 )?'selected':'' ?>>Yes</option>
                    </select>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
                        <label class="control-label">Poster Image <span class="symbol required">*</span></label><br>
                        <input type="hidden" name="image1" value="<?= $row->image; ?>">
                        <img src = "<?php echo getImageSrc(SITE_IMAGES.'/vlogs/',$row->image); ?>" height="150"><br>
                        <input type="file" name="image" id="image"  class="form-control file2 inline btn btn-primary" data-label="<i class='fa fa-upload'></i> Browse" />
                        <div><br />
                            <small style = "color:#F00;">* Best resolution is <strong>1200 x 450</strong>.</small><br />
                            <small style = " color:#F00;">* Allowed formats are <strong>JPG | JPEG | PNG</strong>.</small><br>
                            <small style = "color:#F00;">* Image size maximum <strong>2MB</strong> allowed.</small>
                        </div>
                    </div> 
                </div>
            </div>
			<div class="col-md-12">
                <div class="form-group">
                    <div class="col-md-12">
						<label class="control-label">Vlog Title <span class="symbol required">*</span></label>
						<input type="text" class="form-control" name="title" value="<?=$row->title;?>"  placeholder="Title">
                    </div> 
                </div>
				<div class="form-group">
                    <div class="col-md-6">
	               <label class="control-label">Vlog Date <span class="symbol required">*</span></label>
						<input type="text" class="form-control datepicker" name="date" value="<?=$row->date;?>" placeholder="Date">
                    </div> 
					<!-- <div class="col-md-6">
	               		<label class="control-label">Video Duration <span class="symbol required">*</span></label>
						<input type="text" class="form-control" name="duration" value="<?=$row->duration;?>" placeholder="Duration">
                    </div>  -->
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="form-group">
				<div class="col-md-12">
	               <label class="control-label">Vlog Short Description <span class="symbol required">*</span></label>
	                <textarea class="form-control" rows="5" name="short_description"><?=$row->short_description;?></textarea>
	            </div>
	            <div class="col-md-12">
	               <label class="control-label">Vlog Description <span class="symbol required">*</span></label>
	                <textarea class="form-control ckeditor" rows="5" name="description"><?=$row->description;?></textarea>
	            </div>
             </div>
            <div class="clearfix"></div>
				<div class="col-md-12">

					<hr class="hr-short">

					<div class="form-group text-right">

						<div class="col-md-12">

							<button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>

						</div>

					</div>

				</div>

			</form>

		</div>

		<div class="clearfix"></div>

	</div>

<?php else: ?>

	<?= showMsg(); ?>

	<?= getBredcrum(ADMIN, array('#' => 'Manage Blog')); ?>

	<div class="row margin-bottom-10">

		<div class="col-md-6">

			<h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Blog </strong></h2>

		</div>

		<div class="col-md-6 text-right">

			<a href="<?= site_url(ADMIN . '/vlogs/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>

		</div>

	</div>

	<table class="table table-bordered datatable" id="table-1">

		<thead>

			<tr>

				<th width="5%" class="text-center">Sr#</th>

				<th>Image</th>
				<th>Title</th>
				<th>Status</th>
				<th width="12%" class="text-center">&nbsp;</th>

			</tr>

		</thead>

		<tbody>

			<?php if (count($rows) > 0): $count = 0; ?>

				<?php foreach ($rows as $row): ?>

					<tr class="odd gradeX">

						<td class="text-center"><?= ++$count; ?></td>

						<td>
							<img src="<?= getImageSrc(SITE_IMAGES.'vlogs/',$row->image ) ?>" height="80px">
						</td>
						<td>
							<?= short_text( $row->title ) ?>
						</td>
						<td><?= getStatus($row->status) ?></td>
						<td class="text-center">

							<div class="btn-group">

								<button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>

								<ul class="dropdown-menu dropdown-primary" role="menu">

									<li><a href="<?= site_url(ADMIN); ?>/vlogs/manage/<?= $row->id; ?>">Edit</a></li>

									<li><a href="<?= site_url(ADMIN); ?>/vlogs/delete/<?= $row->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>

								</ul>

							</div>

						</td>

					</tr>

				<?php endforeach; ?>

			<?php endif; ?>

		</tbody>

	</table>

<?php endif; ?>