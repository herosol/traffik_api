<?= getBredcrum(ADMIN, array('#' => 'Stats And Statistics')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Stats And Statistics</strong></h2>
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
                    </div>
                    <div class="col-md-9">
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
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="sec2_desc" class="control-label"> Detail <span class="symbol required">*</span></label>
                                <textarea name="sec2_desc" rows="4" class="form-control ckeditor" ><?= $row['sec2_desc'] ?></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h3>Section 3</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
                        <label for="sec3_main_heading<?=$i?>" class="control-label"> Main Heading <span class="symbol required">*</span></label>
                        <input type="text" name="sec3_main_heading<?=$i?>" id="sec3_main_heading<?=$i?>" value="<?= $row['sec3_main_heading'.$i] ?>" class="form-control" required>
                        <br/>            
                        <div class="row">
                            <?php for($i = 1; $i <= 3; $i++):?>
                                <div class="col-md-4">
                                    <label for="sec3_heading<?=$i?>" class="control-label"> Heading <span class="symbol required">*</span></label>
                                    <input type="text" name="sec3_heading<?=$i?>" id="sec3_heading<?=$i?>" value="<?= $row['sec3_heading'.$i] ?>" class="form-control" required>
                                    <br/>
                                    <label for="sec3_tagline<?=$i?>" class="control-label"> Tagline <span class="symbol required">*</span></label>
                                    <input type="text" name="sec3_tagline<?=$i?>" id="sec3_tagline<?=$i?>" value="<?= $row['sec3_tagline'.$i] ?>" class="form-control" required>
                                </div>
                            <?php endfor?>
                        </div>
                    </div>
                </div>
            </div>   
            <h3>Section 4</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-primary" data-collapsed="0">
                            <div class="panel-heading">
                                <div class="panel-title">
                                    Left Form Image
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
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <label for="form_heading" class="control-label"> Form Heading <span class="symbol required">*</span></label>
                                <input type="text" name="form_heading" id="form_heading" value="<?= $row['form_heading'] ?>" class="form-control" required>
                                <label for="form_tagline" class="control-label"> Form Tagline <span class="symbol required">*</span></label>
                                <input type="text" name="form_tagline" id="form_tagline" value="<?= $row['form_tagline'] ?>" class="form-control" required>
                                <label for="form_button_text" class="control-label"> Form BUtton Text <span class="symbol required">*</span></label>
                                <input type="text" name="form_button_text" id="form_button_text" value="<?= $row['form_button_text'] ?>" class="form-control" required>
                            </div>
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