<?= getBredcrum(ADMIN, array('#' => 'Home Page')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Home Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">
        <!--        <a href="<?= base_url('admin/services'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>-->
    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form" method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
            <h3> Main Banner
                <!-- <input type="checkbox" name="banner_section" id="banner_section" value="true"<?= !$row || $row['banner_section'] ? ' checked=""' : '' ?>> -->
            </h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Banner Background Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image1']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image1']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image1" accept="image/*" <?php if (empty($row['image1'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Card Background Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image2']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image2']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image2" accept="image/*" <?php if (empty($row['image2'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Card Logo Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image3']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image3']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image3" accept="image/*" <?php if (empty($row['image3'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label">Card Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_desc" class="control-label"> Card Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_desc" rows="3" class="form-control" ><?= $row['banner_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_title" class="control-label">Left Button Text (For Vendor) <span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_title" id="banner_button_title" value="<?= $row['banner_button_title'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link" class="control-label">Left Button Link (For Vendor)<span class="symbol required">*</span></label>
                                <select name="banner_button_link" id="banner_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['banner_button_link'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <h3>Section 2</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Left Floating Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image4']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image4']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image4" accept="image/*" <?php if (empty($row['image4'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Right Floating Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image5']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image5']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image5" accept="image/*" <?php if (empty($row['image5'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="sec1_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="sec1_heading" id="sec1_heading" value="<?= $row['sec1_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sec1_desc" class="control-label"> Short Detail <span class="symbol required">*</span></label>
                                <textarea name="sec1_desc" rows="3" class="form-control" ><?= $row['sec1_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="sec1_button_title" class="control-label">Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="sec1_button_title" id="sec1_button_title" value="<?= $row['sec1_button_title'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="sec1_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="sec1_button_link" id="sec1_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['sec1_button_link'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>                        
            <h3>Section 2</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="" class="control-label"> Heading (use em tag for colored text)<span class="symbol required">*</span></label>
                    <input type="text" name="sec2_headings" value="<?= $row['sec2_headings'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                    <input type="text" name="sec2_subheading" value="<?= $row['sec2_subheading'] ?>" class="form-control">
                </div>
                <div class="clearfix"></div>
                <div class="col-md-12">
                    <label for="sec1_desc" class="control-label"> Detail <span class="symbol required">*</span></label>
                    <textarea name="sec2_desc" rows="3" class="form-control" ><?= $row['sec2_desc'] ?></textarea>
                </div>
            </div>
            <h3>Stats</h3>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="" class="control-label"> Heading (use em tag for colored text)<span class="symbol required">*</span></label>
                    <input type="text" name="stats_headings" value="<?= $row['stats_headings'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                    <input type="text" name="stats_subheading" value="<?= $row['stats_subheading'] ?>" class="form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="stat1_heading" value="<?= $row['stat1_heading'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Description <span class="symbol required">*</span></label>
                            <textarea name="stat1_desc" rows="4" class="form-control ckeditor"><?= $row['stat1_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="stat2_heading" value="<?= $row['stat2_heading'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Description <span class="symbol required">*</span></label>
                            <textarea name="stat2_desc" rows="4" class="form-control ckeditor"><?= $row['stat2_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="stat3_heading" value="<?= $row['stat3_heading'] ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label"> Description <span class="symbol required">*</span></label>
                            <textarea name="stat3_desc" rows="4" class="form-control ckeditor"><?= $row['stat3_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
            </div>

            <h3> Section 3 (Audio)</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Left Image
                                </div>
                                <div class="panel-options">
                                    <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                        <img src="<?= !empty($row['image6']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image6']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                    <div>
                                        <span class="btn btn-white btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image6" accept="image/*" <?php if (empty($row['image6'])) {  echo 'required=""';} ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="sec3_heading" class="control-label"> Tagline <span class="symbol required">*</span></label>
                                <input type="text" name="sec3_tagline" value="<?= $row['sec3_tagline'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="sec3_heading" value="<?= $row['sec3_heading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="sec3_subheading" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                                <input type="text" name="sec3_subheading" value="<?= $row['sec3_subheading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-6">
                                <label for="section3_desc" class="control-label"> Sub Heading <span class="symbol required">*</span></label>
                                <textarea class="form-control" name="section3_desc" rows="3"><?= $row['section3_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="section3_button_text" id="section3_button_text" value="<?= $row['section3_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_button_link" class="control-label"> Button Link <span class="symbol required">*</span></label>
                                <select name="section3_button_link" id="section3_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $page) { ?>
                                        <option value="<?= $page ?>" <?= ($row['section3_button_link'] == $page) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Left Small Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image7']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image7']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image7" accept="image/*" <?php if (empty($row['image7'])) {  echo '';} ?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Right Small Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?= !empty($row['image8']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image8']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image8" accept="image/*">
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_heading" class="control-label"> Audio Heading <span class="symbol required">*</span></label>
                                <input type="text" name="audio_heading" value="<?= $row['audio_heading'] ?>" class="form-control">
                            </div>
                            <div class="col-md-4">
                                <label for="sec3_heading" class="control-label"> Audio Tagline <span class="symbol required">*</span></label>
                                <input type="text" name="audio_tagline" value="<?= $row['audio_tagline'] ?>" class="form-control">
                            </div>
                            <div class = "col-md-4">
                                <label class="control-label">Audio Song (mp3) <span class="symbol required"></span></label><br>
                                <?php if (isset($row['audio'])): ?>
                                <audio controls="controls">
                                    <source src="<?= base_url()."assets/upload/images/".$row['audio']?>" type="audio/ogg" />
                                    <source src="<?= base_url()."assets/upload/images/".$row['audio']?>" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio><br>
                                <?php else: ?>    
                                    <audio controls="controls">
                                    <source src="" type="audio/ogg" />
                                    <source src="" type="audio/mpeg" />
                                    Your browser does not support the audio element.
                                </audio><br>
                                <?php endif ?>
                                <input type = "file" name = 'audio' class = "form-control file2 inline btn btn-primary" data-label = "<i class='fa fa-upload'></i> Browse" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Section 4 (Ways)</h2>
            <div class="form-group">
                <div class="col-md-12">
                    <label class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="section4_heading" value="<?= $row['section4_heading'] ?>" class="form-control">
                </div>
            </div>
            <div clas="form-group">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="media1_num" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="media1_num" id="media1_num" value="<?= $row['media1_num'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media1_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="media1_heading" id="media1_heading" value="<?= $row['media1_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media1_desc" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="media1_desc" rows="3" class="form-control" required=""><?= $row['media1_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="media2_num" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="media2_num" id="media2_num" value="<?= $row['media2_num'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media1_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="media2_heading" id="media2_heading" value="<?= $row['media2_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media2_desc" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="media2_desc" rows="3" class="form-control" required=""><?= $row['media2_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="media3_num" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="media3_num" id="media3_num" value="<?= $row['media3_num'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="media3_heading" id="media3_heading" value="<?= $row['media3_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-12">
                            <label for="media3_desc" class="control-label"> Detail <span class="symbol required">*</span></label>
                            <textarea name="media3_desc" rows="3" class="form-control" required=""><?= $row['media3_desc'] ?></textarea>
                        </div>
                    </div>
                </div>
                
            </div>

            <h2>Section 5 (Stats)</h2>
            <div class="form-group">
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Background Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image9']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image9']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image9" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <label class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="sec5_heading" value="<?= $row['sec5_heading'] ?>" class="form-control">
                </div>
            </div>
            <div clas="form-group">
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="sec5_num1" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_num1" id="sec5_num1" value="<?= $row['sec5_num1'] ?>" class="form-control" >
                        </div>
                        <div class="col-md-12">
                            <label for="sec5_title1" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_title1" id="sec5_title1" value="<?= $row['sec5_title1'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="sec5_num2" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_num2" id="sec5_num2" value="<?= $row['sec5_num2'] ?>" class="form-control" >
                        </div>
                        <div class="col-md-12">
                            <label for="sec5_title2" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_title2" id="sec5_title2" value="<?= $row['sec5_title2'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-12">
                            <label for="sec5_num3" class="control-label"> Number <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_num3" id="sec5_num3" value="<?= $row['sec5_num3'] ?>" class="form-control" >
                        </div>
                        <div class="col-md-12">
                            <label for="sec5_title3" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec5_title3" id="sec5_title3" value="<?= $row['sec5_title3'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>

            <h2>Sponsors Section</h2>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="testimonials_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="sponsors_heading" id="sponsors_heading" value="<?= $row['sponsors_heading'] ?>" class="form-control">
                </div>
            </div>
            <h2>Section 7 (Subscribe)</h2>
            <div class="form-group">
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Floating Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image10']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image10']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image10" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="subscribe_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="subscribe_heading" id="" value="<?= $row['subscribe_heading'] ?>" class="form-control">
                    <br>
                    <label for="subscribe_desc" class="control-label"> Description <span class="symbol required"></span></label>
                    <textarea class="form-control" name="subscribe_desc" rows="3"><?= $row['subscribe_desc'] ?></textarea>
                </div>
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Right Floating Image
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['image11']) ? getImageSrc(UPLOAD_PATH . "images/", $row['image11']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="image11" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h2>Last Section (Contact)</h2>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="last_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="last_heading" id="" value="<?= $row['last_heading'] ?>" class="form-control">
                </div>
                <div class="col-md-6">
                    <label for="last_desc" class="control-label"> Description <span class="symbol required"></span></label>
                    <textarea class="form-control" name="last_desc" rows="3"><?= $row['last_desc'] ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-6">
                    <label for="last_card1_desc" class="control-label"> Contact Card 1 <span class="symbol required"></span></label>
                    <textarea class="form-control ckeditor" name="last_card1_desc" rows="3"><?= $row['last_card1_desc'] ?></textarea>
                </div>
                <div class="col-md-6">
                    <label for="last_card2_desc" class="control-label"> Contact Card 1 <span class="symbol required"></span></label>
                    <textarea class="form-control ckeditor" name="last_card2_desc" rows="3"><?= $row['last_card2_desc'] ?></textarea>
                </div>
            </div>
            <div class="form-group">
                <label for="field-1" class="col-sm-2 control-label "></label>
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary btn-lg col-md-3 pull-right"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>