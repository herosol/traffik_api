<?= getBredcrum(ADMIN, array('#' => 'Traffik & Sex')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Traffik & Sex</strong></h2>
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
            <h3> Main Banner </h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-7">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label">Banner Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_desc" class="control-label"> Banner Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_desc" rows="3" class="form-control ckeditor" ><?= $row['banner_desc'] ?></textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_title" class="control-label">Button Text<span class="symbol required">*</span></label>
                                <input type="text" name="banner_button_title" id="banner_button_title" value="<?= $row['banner_button_title'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                                <select name="banner_button_link" id="banner_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['banner_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5">
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
                                    Banner Right Image
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
                    </div>
                </div>
            </div>
            <h3> Section 2 </h3>
            <div class="form-group">
                <?php for($i = 1; $i <= 10; $i++):?>
                        <div class="col-md-3">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Image
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?=get_site_image_src("images", $row['image'.($i+11)]) ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image<?=($i+11)?>" accept="image/*" <?php if(empty($row['image'.($i+11)])){echo 'required=""';}?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br/>
                                        <textarea name="sec_image_detail<?=$i?>" rows="3" class="form-control" ><?= $row['sec_image_detail'.$i] ?></textarea>
                                </div>
                            </div>
                        </div>
                    <?php endfor?>
            </div>
            <h3>Section 4</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Left Person Image
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
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Card Left Logo
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
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="sec4_left_card_heading" class="control-label"> Card Heading <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_card_heading" id="sec4_left_card_heading" value="<?= $row['sec4_left_card_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sec4_left_card_short" class="control-label"> Card Short Detail <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_card_short" id="sec4_left_card_short" value="<?= $row['sec4_left_card_short'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="sec4_left_card_tagline" class="control-label"> Card Tagline <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_card_tagline" id="sec4_left_card_tagline" value="<?= $row['sec4_left_card_tagline'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="sec4_left_left_button_text" class="control-label"> Left Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_left_button_text" id="sec4_left_left_button_text" value="<?= $row['sec4_left_left_button_text'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="sec4_left_left_button_link" class="control-label"> Left Button Link <span class="symbol required">*</span></label>
                                <select name="sec4_left_left_button_link" id="sec4_left_left_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['sec4_left_left_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            
                            <div class="col-md-12">
                                <label for="sec4_left_right_button_text" class="control-label"> Right Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_right_button_text" id="sec4_left_right_button_text" value="<?= $row['sec4_left_right_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sec4_left_right_button_link" class="control-label"> Right Button Link <span class="symbol required">*</span></label>
                                <input type="text" name="sec4_left_right_button_link" id="sec4_left_right_button_link" value="<?= $row['sec4_left_right_button_link'] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="sec4_right_main_heading" class="control-label"> Right Main Heading <span class="symbol required">*</span></label>
                                <textarea name="sec4_right_main_heading" rows="2" class="form-control" ><?= $row['sec4_right_main_heading'] ?></textarea>
                            </div>
                            <div class="col-md-12">
                                <label for="sec4_right_main_desc" class="control-label"> Right Short Detail <span class="symbol required">*</span></label>
                                <textarea name="sec4_right_main_desc" rows="2" class="form-control" ><?= $row['sec4_right_main_desc'] ?></textarea>
                            </div>
                            <br/>
                            <div class="col-md-12">
                                <label for="sec4_right_heading_2" class="control-label"> Right Second Detail <span class="symbol required">*</span></label>
                                <textarea name="sec4_right_heading_2" rows="2" class="form-control" ><?= $row['sec4_right_heading_2'] ?></textarea>
                            </div>
                            <br/>
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="sec4_right_card1_no" id="sec4_right_card1_no" value="<?= $row['sec4_right_card1_no'] ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="sec4_right_card1_desc" rows="3" class="form-control" ><?= $row['sec4_right_card1_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="sec4_right_card2_no" id="sec4_right_card2_no" value="<?= $row['sec4_right_card2_no'] ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="sec4_right_card2_desc" rows="3" class="form-control" ><?= $row['sec4_right_card2_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="sec4_right_card3_no" id="sec4_right_card3_no" value="<?= $row['sec4_right_card3_no'] ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="sec4_right_card3_desc" rows="3" class="form-control" ><?= $row['sec4_right_card3_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br/>

                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-md-4">
                                        <input type="text" name="sec4_right_card4_no" id="sec4_right_card4_no" value="<?= $row['sec4_right_card4_no'] ?>" class="form-control" required>
                                    </div>
                                    <div class="col-md-8">
                                        <textarea name="sec4_right_card4_desc" rows="3" class="form-control" ><?= $row['sec4_right_card4_desc'] ?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 5</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="section5_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                        <input type="text" name="section5_heading" id="section5_heading" value="<?= $row['section5_heading'] ?>" class="form-control" >
                    </div>
                </div>
            </div>
            <h2>Section 6</h2>
            <div class="form-group">
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Left Card Image
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
                                        <input type="file" name="image6" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Audio
                            </div>
                            <div class="panel-options">
                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                    <img src="<?= !empty($row['audio']) ? getImageSrc(UPLOAD_PATH . "images/", $row['audio']) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                <div>
                                    <span class="btn btn-white btn-file">
                                        <span class="fileinput-new">Select image</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="audio" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="sec6_main_heading" class="control-label"> Heading <span class="symbol required"></span></label>
                    <input type="text" name="sec6_main_heading" id="" value="<?= $row['sec6_main_heading'] ?>" class="form-control">
                    <br>
                    <label for="sec6_main_desc" class="control-label"> Description <span class="symbol required"></span></label>
                    <textarea class="form-control" name="sec6_main_desc" rows="5"><?= $row['sec6_main_desc'] ?></textarea>
                    <br>
                    <label for="sec6_card_song_heading" class="control-label"> Card Song Heading <span class="symbol required"></span></label>
                    <input type="text" name="sec6_card_song_heading" id="" value="<?= $row['sec6_card_song_heading'] ?>" class="form-control">
                    <br>
                    <label for="sec6_card_song_tagline" class="control-label"> Card Song tagline <span class="symbol required"></span></label>
                    <input type="text" name="sec6_card_song_tagline" id="" value="<?= $row['sec6_card_song_tagline'] ?>" class="form-control">
                </div>
                <div class="col-md-3">
                    <div class="panel panel-primary" data-collapsed="0">
                        <div class="panel-heading">
                            <div class="panel-title">
                                Right Logo
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
                                        <input type="file" name="image7" accept="image/*" >
                                    </span>
                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3> Section 7</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section7_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section7_heading" id="section7_heading" value="<?= $row['section7_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="section7_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                <textarea name="section7_detail" rows="3" class="form-control" ><?= $row['section7_detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="section7_field_title" class="control-label"> Field Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section7_field_title" id="section7_field_title" value="<?= $row['section7_field_title'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section7_btn_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="section7_btn_text" id="section7_btn_text" value="<?= $row['section7_btn_text'] ?>" class="form-control" required>
                            </div> 
                        </div>
                        <div class="form-group">
                <?php for($i = 1; $i <= 4; $i++):?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="panel panel-primary" data-collapsed="0">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            Image
                                        </div>
                                        <div class="panel-options">
                                            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                <img src="<?=get_site_image_src("images", $row['image'.($i+7)]) ?>" alt="--">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                            <div>
                                                <span class="btn btn-white btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image<?=($i+7)?>" accept="image/*" <?php if(empty($row['image'.($i+7)])){echo 'required=""';}?>>
                                                </span>
                                                <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
            </div>
                    </div>
                </div>
            </div>

            <h3>Section 8</h3>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="sec8_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_heading" value="<?= $row['sec8_heading'] ?>" class="form-control" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <?php for($i = 1; $i <= 4; $i++):?>
                    <div class="col-md-3">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="sec8_card_heading<?=$i?>" class="control-label"> Card Heading <?=$i?> <span class="symbol required">*</span></label>
                                <input type="text" name="sec8_card_heading<?=$i?>" id="sec8_card_heading<?=$i?>" value="<?= $row['sec8_card_heading'.$i] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="sec8_card_desc<?=$i?>" class="control-label"> Card Tagline <?=$i?> <span class="symbol required">*</span></label>
                                <input type="text" name="sec8_card_desc<?=$i?>" id="sec8_card_desc<?=$i?>" value="<?= $row['sec8_card_desc'.$i] ?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                <?php endfor?>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="sec8_after_card_heading" class="control-label"> After Cards Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_after_card_heading" value="<?= $row['sec8_after_card_heading'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="sec8_after_card_heading_tagline" class="control-label"> Tagline <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_after_card_heading_tagline" value="<?= $row['sec8_after_card_heading_tagline'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="sec8_after_card_amount" class="control-label"> Amount <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_after_card_amount" value="<?= $row['sec8_after_card_amount'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-4">
                            <label for="sec8_after_card_amount_tagline" class="control-label"> After Amount Heading <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_after_card_amount_tagline" value="<?= $row['sec8_after_card_amount_tagline'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="sec8_button_text" class="control-label">Button Text <span class="symbol required">*</span></label>
                            <input type="text" name="sec8_button_text" id="sec8_button_text" value="<?= $row['sec8_button_text'] ?>" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label for="sec8_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                            <select name="sec8_button_link" id="sec8_button_link" class="form-control" required>
                                <option value=''>-- Select --</option>
                                <?php $pages = get_pages();
                                foreach ($pages as $index => $page) { ?>
                                    <option value="<?= $index ?>" <?= ($row['sec8_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
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