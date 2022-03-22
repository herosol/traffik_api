<?= getBredcrum(ADMIN, array('#' => 'Rescue Stories')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Rescue Stories</strong></h2>
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
                                <textarea name="banner_desc" rows="3" class="form-control" ><?= $row['banner_desc'] ?></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="form-group">
                            <div class="col-md-12">
                                <label for="banner_card_heading" class="control-label"> Banner Card Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_card_heading" id="banner_card_heading" value="<?= $row['banner_card_heading'] ?>" class="form-control" >
                            </div>
                            <div class="col-md-12">
                                <label for="banner_card_detail" class="control-label">  Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_card_detail" rows="3" class="form-control" ><?= $row['banner_card_detail'] ?></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="banner_card_button_text" class="control-label"> Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="banner_card_button_text" id="banner_card_button_text" value="<?= $row['banner_card_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="banner_card_button_link" class="control-label">Button Link<span class="symbol required">*</span></label>
                                <select name="banner_card_button_link" id="banner_card_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['banner_card_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
            </div>

            <h3> Section 3</h3>
            <div class="form-group">
                <div class="row">
                    <div class="col-md-12">
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
                            <div class="col-md-6">
                                <label for="section3_upper_button_text" class="control-label"> Upper Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="section3_upper_button_text" id="section3_upper_button_text" value="<?= $row['section3_upper_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_upper_button_link" class="control-label">Upper Button Link<span class="symbol required">*</span></label>
                                <select name="section3_upper_button_link" id="section3_upper_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['section3_upper_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="section3_lower_button_text" class="control-label"> Lower Button Text <span class="symbol required">*</span></label>
                                <input type="text" name="section3_lower_button_text" id="section3_lower_button_text" value="<?= $row['section3_lower_button_text'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label for="section3_lower_button_link" class="control-label">Lower Button Link<span class="symbol required">*</span></label>
                                <select name="section3_lower_button_link" id="section3_lower_button_link" class="form-control" required>
                                    <option value=''>-- Select --</option>
                                    <?php $pages = get_pages();
                                    foreach ($pages as $index => $page) { ?>
                                        <option value="<?= $index ?>" <?= ($row['section3_lower_button_link'] == $index) ? 'selected' : '' ?>> <?= $page ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
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