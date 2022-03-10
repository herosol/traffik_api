<?= getBredcrum(ADMIN, array('#' => 'National Directory')); ?>
<?= showMsg(); ?>
<div class="row margin-bottom-10">
    <div class="col-md-6">
        <h2 class="no-margin"><i class="entypo-window"></i> Update <strong>National Directory</strong></h2>
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
                    <div class="col-md-4">
                        <div class="form-group">
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

                            <div class="col-md-12">
                                <label for="banner_heading" class="control-label">Banner Heading <span class="symbol required">*</span></label>
                                <input type="text" name="banner_heading" id="banner_heading" value="<?= $row['banner_heading'] ?>" class="form-control" required>
                            </div>
                            <div class="col-md-12">
                                <label for="banner_desc" class="control-label"> Banner Detail <span class="symbol required">*</span></label>
                                <textarea name="banner_desc" rows="3" class="form-control ckeditor" ><?= $row['banner_desc'] ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <?php for($i = 1; $i <= 3; $i++):?>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="panel panel-primary" data-collapsed="0">
                                                <div class="panel-heading">
                                                    <div class="panel-title">
                                                        Right Section Image <?=$i?>
                                                    </div>
                                                    <div class="panel-options">
                                                        <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
                                                    </div>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                                        <div class="fileinput-new thumbnail" style="max-width: 310px; height: 110px;" data-trigger="fileinput">
                                                            <img src="<?=get_site_image_src("images", $row['image'.($i+1)]) ?>" alt="--">
                                                        </div>
                                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 320px; max-height: 160px; line-height: 6px;"></div>
                                                        <div>
                                                            <span class="btn btn-white btn-file">
                                                                <span class="fileinput-new">Select image</span>
                                                                <span class="fileinput-exists">Change</span>
                                                                <input type="file" name="image<?=($i+1)?>" accept="image/*" <?php if(empty($row['image'.($i+1)])){echo 'required=""';}?>>
                                                            </span>
                                                            <a href="#" class="btn btn-orange fileinput-exists" data-dismiss="fileinput">Remove</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="right_section_card_heading<?=$i?>" class="control-label"> Card <?=$i?> Heading <span class="symbol required">*</span></label>
                                            <input type="text" name="right_section_card_heading<?=$i?>" id="right_section_card_heading<?=$i?>" value="<?= $row['right_section_card_heading'.$i] ?>" class="form-control" required>
                                        </div>
                                        <div class="col-md-12">
                                            <label for="right_section_card_tagline<?=$i?>" class="control-label"> Card <?=$i?> Desc <span class="symbol required">*</span></label>
                                            <input type="text" name="right_section_card_tagline<?=$i?>" id="right_section_card_tagline<?=$i?>" value="<?= $row['right_section_card_tagline'.$i] ?>" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor?>
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