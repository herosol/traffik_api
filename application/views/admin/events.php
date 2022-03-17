<?php if ($this->uri->segment(3) == 'manage'): ?>
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Add/Update Events')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Add/Update <strong>Events</strong></h2>
        </div>
        <div class="col-md-6 text-right">
            <a href="<?php echo base_url(ADMIN . '/events'); ?>" class="btn btn-lg btn-default"><i class="fa fa-arrow-left"></i> Cancel</a>
        </div>
    </div>
    <div>
        <hr>
        <div class="row col-md-12">
            <form action="" name="frmNewsletter" role="form" class="form-horizontal blog-form" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-9">
                        <div class="row">
                            <div class="">
                                <div class="panel-heading col-md-12">
                                    <div class="panel-title"><h3>Basic Information</h3></div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Heading</label>
                                                <input type="text" name="heading" value="<?=$row->heading?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label">Short Description</label>
                                                <textarea  rows="8" class="form-control" name="short_description" required><?=$row->short_description?></textarea>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> State</label>
                                                <select name="state" id="state" class="form-control" required>
                                                    <option value=''>-- Select --</option>
                                                    <?php $states = states_by_country();
                                                    foreach ($states as $index => $state) { ?>
                                                        <option value="<?= $state->id ?>" <?= ($row->state == $state->id) ? 'selected' : '' ?>> <?= $state->name ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> City</label>
                                                <input type="text" name="city" value="<?=$row->city?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Location</label>
                                                <input type="text" name="location" value="<?=$row->location?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Zip Code</label>
                                                <input type="text" name="zipcode" value="<?=$row->zipcode?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>                                  
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Event Date</label>
                                                <input type="date" name="event_date" value="<?=$row->event_date?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <div class="col-md-12">
                                                <label class="control-label"> Event Time</label>
                                                <input type="time" name="event_time" value="<?=$row->event_time?>" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-picture-o"></i> Thumbnail </div>
                                <div class="panel-body thumbnail_blog" style="padding: 10px" id="imgDiv">
                                    <img src="<?= !empty($row->image) ? get_site_image_src("events", $row->image) : 'http://placehold.it/3000x1000' ?>" style="width: 100%; cursor: pointer;" id="newImg">
                                    <input type="file" name="image" accept="image/*" id="imgInput">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="panel panel-default">
                                <div class="panel-heading col-md-12" style="padding: 5.5px 10px"><i class="fa fa-eye" aria-hidden="true"></i> Display Options</div>
                                <div class="panel-body" style="padding: 15.5px 0px">                    

                                    <div class="col-md-7">
                                        <h5>Active</h5>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="btn-group" id="status" data-toggle="buttons">
                                            <label class="btn btn-default btn-on btn-sm <?php if($row->status == 1){echo 'active';}?>">
                                            <input type="radio" value="1" name="status"<?php if($row->status == 1){echo 'checked';}?>><i class="fa fa-check" aria-hidden="true"></i></label>
                                          
                                            <label class="btn btn-default btn-off btn-sm <?php if($row->status == 0){echo 'active';}?>">
                                            <input type="radio" value="0" name="status" <?php if($row->status == 0){echo 'checked';}?>><i class="fa fa-times" aria-hidden="true"></i></label>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
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
    <?php echo showMsg(); ?>
    <?php echo getBredcrum(ADMIN, array('#' => 'Manage Events')); ?>
    <div class="row margin-bottom-10">
        <div class="col-md-6">
            <h2 class="no-margin"><i class="entypo-list"></i> Manage <strong>Events</strong></h2>
        </div>
         <div class="col-md-6 text-right">
            <a href="<?= base_url(ADMIN . '/events/manage'); ?>" class="btn btn-lg btn-primary"><i class="fa fa-plus-circle"></i> Add New</a>
        </div>
    </div>
    <table class="table table-bordered datatable" id="table-1">
        <thead>
            <tr>
                <th class="text-center">Sr#</th>
                <th>Image</th>
                <th width="40%">Heading, Short Description</th>
                <th>Date, Time</th>
                <th>Location, City, State</th>
                <th>Status</th>
                <th>created date</th>
                <th class="text-center">&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <?php if (count($blogs) > 0): $count = 0; ?>
                <?php foreach ($blogs as $blog):  ?>                    
                    <tr class="odd gradeX">
                        <td class="text-center"><?= ++$count; ?></td>
                        <td>
                            <?php
                                if(empty($blog->image)){
                            ?>
                                    <img src="<?=base_url();?>adminassets/images/no_image.jpg" style="width: 200px">
                            <?php
                                }
                                else{
                            ?>
                                    <img src="<?=get_site_image_src("events/", $blog->image, 'thumb_')?>" style="width: 200px">
                            <?php
                                }
                            ?>
                        </td>
                        <td><b><?= $blog->heading ?></b><br/>&nbsp;&nbsp;<b><?= $blog->short_description ?></b></td>
                        <td><b><?= format_date($blog->event_date, 'd M Y') ?></b><br/>&nbsp;&nbsp;<b><?= format_date($blog->event_time, 'h:i A') ?></b></td>
                        <td><b><?= $blog->location ?></b><br/><b><?= $blog->city ?></b><br/><b><?= $blog->state ?></b></td>
                        <td><b><?=get_active_status($blog->status)?></b></td>
                       <td><b><?= format_date($blog->created_date,'M d Y h:i:s A'); ?></b></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"> Action <span class="caret"></span></button>
                                <ul class="dropdown-menu dropdown-primary" role="menu">
                                    <li><a href="<?= base_url(ADMIN); ?>/events/manage/<?= $blog->id; ?>">Edit</a></li>
                                    <?php if(access(10)):?>
                                        <li><a href="<?= base_url(ADMIN); ?>/events/delete/<?= $blog->id; ?>" onclick="return confirm('Are you sure?');">Delete</a></li>
                                    <?php endif?>
                                </ul>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </tbody>
    </table>
<?php endif; ?>
<script src="<?= base_url('adminassets/js/jquery-3.4.1.js'); ?>"></script>
<script type="text/javascript">
    $(document).on('click', '.add_recipe', function(e) {
        e.preventDefault();
          $ad = $(".recipe_clone:first").clone();
          $ad.find("input").val("");
          $ad.find("textarea").html("");
          var i=0;      
          $('.recipe_container').append($ad);
          $(".remove_recipe").each(function(){
            console.log($(this));
                $(this).click(function(e){
                    e.preventDefault(); 
                    $(this).parent().remove();
                });
          });
     });
    $('.add_new_cat').click(function(e){
        $(".category_new").toggle();
    });
    jQuery(document).on('change', '#imgInput', function () {

                var preview = jQuery(this).closest("#imgDiv").find("#newImg");
                console.log(preview);
                var oFReader = new FileReader();
                oFReader.readAsDataURL(jQuery(this)[0].files[0]);
                oFReader.addEventListener("load", function () {
                    preview.attr('src',oFReader.result);
                }, false);
    });
    $(document).on('click', '#add_category', function (event) {
            event.preventDefault();
            var cat_name=$("#cat_name").val();
            console.log("<?php echo base_url('admin/events/add_category'); ?>");
            $.ajax({
                    url: "<?php echo base_url('admin/events/add_category'); ?>",
                    data: {cat_name:cat_name },
                    type: "post",
                    async: false,
                    dataType: 'json',
                    success: function(response){
                        console.log(response);
                        if(response.status==true){
                            $(".site_categories").append('<li><input type="radio" name="categories" value="'+response.cat_id+'" checked="checked"> <span>'+cat_name+'</span></li>');
                            $('.category_new').hide();
                            $('#cat_name').val("");
                        }
                        
                      },
                      error: function(response)
                   {
                    console.log(response);
                   }
          });
        });
</script>