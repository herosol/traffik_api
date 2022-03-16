<?php echo getBredcrum(ADMIN, array('#' => 'Contact Page')); ?>
<?php echo showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>Contact Page</strong></h2>
    </div>
    <div class="col-md-6 text-right">

    </div>
</div>
<div>
    <hr>
    <div class="clearfix"></div>
    <div class="panel-body">
        <form role="form"  method="post" class="form-horizontal form-groups-bordered validate" novalidate="novalidate" enctype="multipart/form-data">
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
                                <label for="banner_heading" class="control-label">Card Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_desc" class="control-label"> Card Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_desc" rows="3" class="form-control" ><?= $row['banner_desc'] ?></textarea>
                            </div>
                            
                        </div>
                        <div class="row">
                            <br/>
                            <?php for($i = 1; $i <= 3; $i++):?>
                                <div class="col-md-4">
                                    <div class="panel panel-primary" data-collapsed="0">
                                        <div class="panel-heading">
                                            <div class="panel-title">
                                                Icon Image <?=$i?>
                                            </div>
                                            <div class="panel-options">
                                                <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                            </div>
                                        </div>
                                        <div class="panel-body">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                    <img src="<?= !empty($row['image'.($i+1)]) ? getImageSrc(UPLOAD_PATH . "images/", $row['image'.($i+1)]) : 'http://placehold.it/3000x1000' ?>" alt="--">
                                                </div>
                                                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                <div>
                                                    <span class="btn btn-white btn-file">
                                                        <span class="fileinput-new">Select image</span>
                                                        <span class="fileinput-exists">Change</span>
                                                        <input type="file" name="image<?=($i+1)?>" accept="image/*" <?php if (empty($row['image'.($i+1)])) {echo 'required=""'; } ?>>
                                                    </span>
                                                    <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="heading_<?=$i?>" class="control-label"> Heading <?=$i?><span class="symbol required">*</span></label>
                                    <input type="text" name="heading_<?=$i?>" id="heading_<?=$i?>" value="<?= $row['heading_'.$i] ?>" class="form-control" required>
                                    <br/>
                                    <label for="tagline<?=$i?>" class="control-label"> Tagline <?=$i?><span class="symbol required">*</span></label>
                                    <input type="text" name="tagline<?=$i?>" id="tagline<?=$i?>" value="<?= $row['tagline'.$i] ?>" class="form-control" required>
                                </div>
                            <?php endfor?>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <label for="mid_text" class="control-label"> Mid Text <span class="symbol required">*</span></label>
                                <textarea name="mid_text" rows="3" class="form-control ckeditor" ><?= $row['mid_text'] ?></textarea>
                            </div>

                            <div class="col-md-12">
                                <label for="field_heading_1" class="control-label"> 1st Field Heading<span class="symbol required">*</span></label>
                                <input type="text" name="field_heading_1" id="field_heading_1" value="<?= $row['field_heading_1'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="field_heading_2" class="control-label"> 2nd Field Heading<span class="symbol required">*</span></label>
                                <input type="text" name="field_heading_2" id="field_heading_2" value="<?= $row['field_heading_2'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="field_heading_3" class="control-label"> 3rd Field Heading<span class="symbol required">*</span></label>
                                <input type="text" name="field_heading_3" id="field_heading_3" value="<?= $row['field_heading_3'] ?>" class="form-control" required>
                            </div>

                            <div class="col-md-12">
                                <label for="button_heading" class="control-label"> Button Heading<span class="symbol required">*</span></label>
                                <input type="text" name="button_heading" id="button_heading" value="<?= $row['button_heading'] ?>" class="form-control" required>
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
    <div class="clearfix"></div>
</div>