<?= getBredcrum(ADMIN, array('#' => 'Donate Now')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Donate Now</strong></h2>
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
                                    Left Image On Banner
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
                    <div class="col-md-9">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label">Banner Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_short_dec" class="control-label"> Banner Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_short_dec" rows="3" class="form-control" ><?= $row['banner_short_dec'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                       
                     
            <h3> Section 2</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section2_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section2_heading" id="section2_heading" value="<?= $row['section2_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="section2_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                <textarea name="section2_detail" rows="3" class="form-control" ><?= $row['section2_detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        <?php for($i = 1; $i <= 3; $i++):?>
                            <div class="col-md-4">
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
                                                        <img src="<?=get_site_image_src("images", $row['image'.($i+2)]) ?>" alt="--">
                                                    </div>
                                                    <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                    <div>
                                                        <span class="btn btn-white btn-file">
                                                            <span class="fileinput-new">Select image</span>
                                                            <span class="fileinput-exists">Change</span>
                                                            <input type="file" name="image<?=($i+2)?>" accept="image/*" <?php if(empty($row['image'.($i+2)])){echo 'required=""';}?>>
                                                        </span>
                                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <label for="sec2_image_tagline<?=$i?>" class="control-label"> Image Tagline <?=$i?> <span class="symbol required">*</span></label>
                                        <input type="text" name="sec2_image_tagline<?=$i?>" id="sec2_image_tagline<?=$i?>" value="<?= $row['sec2_image_tagline'.$i] ?>" class="form-control" >
                                        <br/>
                                        <label for="sec2_button_text<?=$i?>" class="control-label"> Button Text <?=$i?> <span class="symbol required">*</span></label>
                                        <input type="text" name="sec2_button_text<?=$i?>" id="sec2_button_text<?=$i?>" value="<?= $row['sec2_button_text'.$i] ?>" class="form-control" >
                                        <br/>
                                        <label for="sec2_button_link<?=$i?>" class="control-label">Button Link <?=$i?><span class="symbol required">*</span></label>
                                        <select name="sec2_button_link<?=$i?>" id="sec2_button_link<?=$i?>" class="form-control" required>
                                            <option value=''>-- Select --</option>
                                            <?php $pages = get_pages();
                                            foreach ($pages as $index => $page) { ?>
                                                <option value="<?= $index ?>" <?= ($row['sec2_button_link'.$i] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php endfor?>
            </div>
            <h3> Section 3</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    background Image
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
                                            <input type="file" name="image6" accept="image/*" <?php if (empty($row['image6'])) {echo 'required=""'; } ?>>
                                        </span>
                                        <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="section3_heading" class="control-label"> Heading <span class="symbol required">*</span></label>
                                <input type="text" name="section3_heading" id="section3_heading" value="<?= $row['section3_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="section3_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                <textarea name="section3_detail" rows="3" class="form-control" ><?= $row['section3_detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                        <?php for($i = 1; $i <= 3; $i++):?>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <br/>
                                        <label for="sec3_heading<?=$i?>" class="control-label"> Heading <?=$i?> <span class="symbol required">*</span></label>
                                        <input type="text" name="sec3_heading<?=$i?>" id="sec3_heading<?=$i?>" value="<?= $row['sec3_heading'.$i] ?>" class="form-control" >
                                        <br/>
                                        <label for="sec3_desc<?=$i?>" class="control-label">  Detail <?=$i?><span class="symbol required">*</span></label>
                                        <textarea name="sec3_desc<?=$i?>" rows="3" class="form-control" ><?= $row['sec3_desc'.$i] ?></textarea>
                                        <br/>
                                        <label for="sec3_button_text<?=$i?>" class="control-label"> Button Text <?=$i?> <span class="symbol required">*</span></label>
                                        <input type="text" name="sec3_button_text<?=$i?>" id="sec3_button_text<?=$i?>" value="<?= $row['sec3_button_text'.$i] ?>" class="form-control" >
                                        <br/>
                                        <label for="sec3_button_link<?=$i?>" class="control-label">Button Link <?=$i?><span class="symbol required">*</span></label>
                                        <select name="sec3_button_link<?=$i?>" id="sec3_button_link<?=$i?>" class="form-control" required>
                                            <option value=''>-- Select --</option>
                                            <?php $pages = get_pages();
                                            foreach ($pages as $index => $page) { ?>
                                                <option value="<?= $index ?>" <?= ($row['sec3_button_link'.$i] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        <?php endfor?>
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