<style>
.forcustom+label{

    position: absolute;
    top: 32px;
    display: block;
    left: 0px;

}

.border-body {
    border: 1px solid #ddd;
    padding: 10px;
    margin-bottom: 20px;
}

.form-control.error-red {
    border-color: red !important;
}
.activeTab{
    background-color:#1E90FF !important;
    color:white;
    width:40px;
    height:20px;
}

.active{
    /*    background-color:#FF1E2E !important;*/

}


drag-check {
    padding: 13px 29px;
}

.row.drag-conten {
    margin-bottom: 19px;
}



</style>

<section class="content">
    <div class="row">
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-default">
                <div class="box-header with-border">

                    <h3 class="box-title "><?php echo isset($pageMode) && !empty($pageMode) ? "Edit Product" : ' Add Product' ?></h3>

                    <div class=" pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse">
                            <i class="fa fa-minus"></i>
                        </button>
                        <!--<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>-->
                    </div>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                


                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Custom Tabs -->
                            <div class="nav-tabs-custom main_tab">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation" class="active"><a href="#tab_1" data-toggle="tab" aria-controls="tab_1" role="tab" title="Step 1">Basic Information</a></li>
                                    <li role="presentation" class="<?php echo isset($pageMode) && !empty($pageMode) ? '' : 'disabl' ?>"><a href="#tab_2" data-toggle="tab" aria-controls="tab_3" role="tab" title="Step 2" >Link Creation</a></li>
                                    <li role="presentation" class="disabl"><a href="#tab_3" data-toggle="tab" aria-controls="tab_2" role="tab" title="Step 3">Additional Information</a></li>


                                </ul>

                                <div class="tab-content">
                                    <?php echo $this->Form->create($Boxes, ['url' => ['plugin' => 'GymApp', 'controller' => 'Gym', 'action' => 'addProduct'], "id" => "AddVideoForm", "enctype" => "multipart/form-data"]); ?>
                                    <div class="tab-content">
                                        <div class="tab-pane active" role="tabpanel" id="tab_1">


                                            <?php  echo $this->Form->input('product_other_detail.id', ['type' => 'hidden']); ?>
                                            <?php echo $this->Form->input('product_other_detail.store_inventories.0.id', ['type' => 'hidden']); ?>
                                            <?php  echo $this->Form->input('box.cart.id', ['type' => 'hidden']); ?>
                                            <?php echo $this->Form->input('mebase_customfield_product_icon.id', ['type' => 'hidden']); ?>

                                            <?php echo $this->Form->input('box_id', ['type' => 'hidden']); ?>
                                            <?php echo $this->Form->input('box_unique_id', ['type' => 'hidden']); ?>
                                            <?php echo $this->Form->input('id', ['type' => 'hidden']); ?>

                                            <div class="box-body">
                                                <div class="mainwidth">

                                                    <?php if($this->request->session()->read('successmsg')) { ?>
                                                    <?php echo $this->element('success_msg_box'); ?>
                                                    <?php } ?>



                                                    <?php if(isset($featureRestrictionFail) && $featureRestrictionFail=='true') { ?>
                                                    <?php echo $this->element('permission_msg_box',['msg'=>$msg]); ?>
                                                    <?php } ?>


                                                    <?php if($this->request->session()->read('limiterror')) { ?>
                                                    <?php echo $this->element('limit',['msg'=>$this->request->session()->read('limiterror')]); ?>
                                                    <?php } ?>


                                                    <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">




                                                        <div class="border-body">
                                                            <div class="box box-default collapsed-box">
  <div class="box-header with-border">
    <h3 class="box-title">Expandable</h3>
    <div class="box-tools pull-right">
      <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-plus"></i></button>
    </div><!-- /.box-tools -->
  </div><!-- /.box-header -->
  <div class="box-body">
    The body of the box
  </div><!-- /.box-body -->
</div><!-- /.box -->
                                                            

                                                            <div class="form-group">
                                                                <label>Select Category</label>
                                                                <?php echo $this->Gym->getAllInstance('instances'); ?>
                                                                <?php echo $this->Form->input('page_title', ['type' => 'hidden','class'=>'']); ?>

                                                            </div>

                                                            <div class="form-group" id="instance_category_container">
                                                                <?php echo $this->Gym->getInstanceCategory($Boxes->parent_id); ?>
                                                            </div>


                                                            <div class="form-group">
                                                                <label>Product Title</label>
                                                                <?php echo $this->Form->input('title', ['label' => false, 'class' => 'form-control validchk']); ?>
                                                            </div>

<!--
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Product Type</label>
                                    </div>
                                </div>
                                <?php

                            if (isset($features) && !empty($features) && in_array(CUSTOM_UPLOAD, $features)) {
                                $videoOption = [
                                    ['value' => 'youtube', 'text' => __('Youtube'), 'checked'],
                                    ['value' => 'custom', 'text' => __('Custom')],
                                ];
                            } else {
                                $videoOption = [['value' => 'youtube', 'text' => __('Youtube'), 'checked']];
                            }

                            echo $this->Form->input('video_format', [
                                    'type' => 'radio',
                                    'label' => false,
                                    'options' =>$videoOption,
                                    'templates' => [
                                        'inputContainer' => '{{content}}',
                                        'nestingLabel' => '<div class="col-md-4"><div class="form-group radio radio-primary">{{input}}<label{{attrs}}>{{text}}</label></div></div>',
                                        'radioWrapper' => '{{label}}'
                                    ]
                                ]);
                                ?>
                            </div>

                            <div class="form-group" id="youtubeVideFile"
                                 style="display:<?php echo isset($Boxes) && isset($Boxes->video_format) && !empty($Boxes->video_format) && $Boxes->video_format == 'youtube' ? 'block' : (!isset($Boxes->video_format) ? 'block' : 'none'); ?>">
                                <label>Product Link</label>
                                <?php echo $this->Form->input('youtube_link', ['label' => false, 'class' => 'form-control']); ?>
                            </div>
                        -->

<!--
                            <div id="customVideFile"
                                 style="display:<?php echo isset($Boxes) && isset($Boxes->video_format) && !empty($Boxes->video_format) && $Boxes->video_format == 'custom' ? 'block' : 'none'; ?>"
                                 class="form-group">
                                <label class="control-label">Product File <sup>(Accepted video formats: .Avi, .mp4 ,.flv, .wmv)</sup></label>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="input-group">
                                               <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-picture"></i>
                                               </span>
                                            <?php echo $this->Form->input('video_file_placeholder', ['type' => 'hidden','class'=>'forcustom']); ?>
                                            <?php echo $this->Form->input('video_file_placeholder', ["label" => false, "class" => "form-control", "placeholder" => "Choose File", 'type' => 'type', "disabled" => "disabled"]); ?>
                                            <span class="input-group-btn ">
                                                    <input name="video_file" accept="video/*" media-type="video"
                                                           type="file" style="display:none;"
                                                           class="browse_media_handler">
                                                    <button class="browse btn btn-primary browse browse_media"
                                                            type="button">
                                                        <i class="glyphicon glyphicon-search"></i>
                                                        Browse
                                                    </button>
                                                </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        -->


<!--
                            <?php// echo $this->Gym->imageThumbs('Product Thumbnail'); ?>
                        -->
                        <div class="form-group" id="thumbid" >

                            <?php if(isset($Boxes['thumb_image']) && !empty($Boxes['thumb_image'])){
                                $thumbs = json_decode($Boxes['thumb_image'], true);
                                foreach($thumbs['thumb_images'] as $tkey=>$tval){
                                 if(isset($tval) && !empty($tval)) {

                                    $imagepreview = '<img src="' . $this->request->webroot . "img/developerimg/" . trim($this->request->session()->read('Auth.User.db_name')) . "/mebase/customlink/" . $tval . '" width="200px"/>';

                                } else { 

                                    $imagepreview = '<img src="' . $this->request->webroot . 'video_app_webroot/noprev.jpeg"  width="200px"/>';


                                } ?>


                                <label class="control-label">Product Images <sup>(Required dimension width 200 Height 200)</sup></label>
                                <span class="fa <?php echo $tkey==1?'fa-plus-circle addThumbnail':'fa-minus-circle remveLabelImages'; ?> pull-right " style="cursor:pointer;font-size: 21px;"></span>
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="input-group">
                                           <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-picture"></i>
                                        </span>
                                        <input type="hidden" name="upload_thumb_placeholder[]"
                                        value="<?php echo $tval; ?>" autofocus="autofocus">
                                        <input type="text" placeholder="Choose File" class="form-control validchk"
                                        value="<?php echo $tval; ?>"
                                        disabled="disabled">
                                        <span class="input-group-btn ">
                                            <input name="thumb_image[]" accept="image/*" media-type="image"
                                            type="file" width="200" height="200" style="display:none;"
                                            class="browse_media_handler_thumb">
                                            <button class="browse btn btn-primary browse browse_media"
                                            type="button">
                                            <i class="glyphicon glyphicon-search"></i>
                                            Browse
                                        </button>
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <span class="btn btn-primary" data-toggle="modal"
                                data-target="#ImagePreview_<?php echo $tkey; ?>">Preview</span>


                                <div class="modal fade bd-example-modal-sm" id="ImagePreview_<?php echo $tkey; ?>"
                                 role="dialog">
                                 <div class="modal-dialog mwidth">
                                    <!-- Modal content-->
                                    <div class="modal-content">

                                       <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">×</button>
                                        <h4 class="modal-title">Preview</h4>
                                    </div>

                                    <div class="modal-body" style="text-align: center!important;">
                                        <?php echo $imagepreview; ?>
                                    </div>
                                    <div class="modal-footer" style="text-align: center;padding:9px !important">
                                        <button type="button" class="btn  btn1" data-dismiss="modal"  style="margin-top:4px !important"> Done </button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>

                <?php }}else{ ?>


                <label class="control-label">Product Images <sup>(Required dimension width 200 Height 200)</sup></label>
                <span class="fa fa-plus-circle pull-right addThumbnail" style="cursor:pointer;font-size: 21px;"></span>
                <div class="row">
                    <div class="col-md-9">
                        <div class="input-group">
                           <span class="input-group-addon">
                            <i class="glyphicon glyphicon-picture"></i>
                        </span>
                        <input type="hidden" name="upload_thumb_placeholder[]"
                        autofocus="autofocus">
                        <input type="text" placeholder="Choose File" class="form-control validchk"
                        disabled="disabled">
                        <span class="input-group-btn ">
                            <input name="thumb_image[]" accept="image/*" media-type="image"
                            type="file" width="200" height="200" style="display:none;"
                            class="browse_media_handler_thumb">
                            <button class="browse btn btn-primary browse browse_media"
                            type="button">
                            <i class="glyphicon glyphicon-search"></i>
                            Browse
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <span class="btn btn-primary" data-toggle="modal"
                data-target="#ImagePreview_0">Preview</span>


                <div class="modal fade bd-example-modal-sm" id="ImagePreview_0"
                role="dialog">
                <div class="modal-dialog mwidth">
                    <!-- Modal content-->
                    <div class="modal-content">

                       <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">×</button>
                        <h4 class="modal-title">Preview</h4>
                    </div>

                    <div class="modal-body" style="text-align: center!important;">
                        <img src="<?php  echo $this->request->webroot . 'video_app_webroot/noprev.jpeg'; ?>" width=""/>
                    </div>
                    <div class="modal-footer" style="text-align: center;padding:9px !important">
                        <button type="button" class="btn  btn1" data-dismiss="modal"  style="margin-top:4px !important"> Done </button>
                    </div>
                </div>
            </div>
        </div>


    </div>
</div>



<?php } ?>
</div>



<div class="form-group">
    <label>Description</label>
    <?php  echo $this->Form->input('description', ['type' => 'textarea', 'label' => false, 'class' => 'form-control']); ?>
</div>
<div class="form-group col-md-8 col-xs-8 col-lg-8 col-sm-8" style="margin-left: -16px;">
    <?php echo $this->Form->input('brand_id', ['options' => $Brands, 'empty' => 'Choose', 'class' => 'form-control select2', 'label' => 'Select Brand']); ?>
</div>
<div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#mypayment" style="margin-top: 25px;width: 150.67px;" class="btn btn-primary btn1 center-block btn2">Add Brands
    </a>
</div>
<div class="clearfix"></div>

<?php if(isset($features) && !empty($features) && in_array(TAGES_FEATURE,$features)){ ?>
<div class="form-group">
    <label>Tags</label>
    <?php echo $this->Form->input('product_tags', ['label' => false, 'class' => 'form-control validchk']); ?>
</div>
<?php  } ?>
</div>
<div class="border-body">
    <div id="label_container">
        <?php if (isset($Boxes->active_media) && !empty($Boxes->active_media)) {
            $imagepreview = '<img src="" width="256px"/>';
            $BoxesActiveData = json_decode($Boxes->active_media, true); ?>
            <?php foreach ($BoxesActiveData['upload_images'] as $akey => $aval) { ?>
            <div class="form-group">
                <label class="control-label">Label Images <sup>(Required dimension width 40 Height 40)</sup></label>

                <?php if ($akey == 1) { ?>
                <span class="fa fa-plus-circle pull-right addLabel"
                style="cursor:pointer;font-size: 21px;"></span>
                <?php } else { ?>
                <span class="fa fa-minus-circle pull-right remveLabelImages"
                style="cursor:pointer;font-size: 21px;"></span>
                <?php } ?>


                <?php if (isset($aval) && !empty($aval)) {

                    $imagepreview = '<img src="' . $this->request->webroot . "img/developerimg/" . trim($this->request->session()->read('Auth.User.db_name')) . "/mebase/customlink/" . $aval . '" width="200px"/>';

                } else { 

                    $imagepreview = '<img src="' . $this->request->webroot . 'video_app_webroot/noprev.jpeg"  width="200px"/>';


                } ?>


                <div class="row">
                    <div class="col-md-9">
                        <div class="input-group">
                           <span class="input-group-addon">
                            <i class="glyphicon glyphicon-picture"></i>
                        </span>
                        <input type="hidden" value="<?php echo $aval; ?>"
                        name="upload_media_placeholder[]" autofocus="autofocus">
                        <input type="text" value="<?php echo $aval; ?>"
                        placeholder="Choose File" class="form-control"
                        disabled="disabled">
                        <span class="input-group-btn ">
                            <input name="upload_media[]" accept="image/*" media-type="image" width="40" height="40"
                            type="file" style="display:none;"
                            class="browse_media_handler">
                            <button class="browse btn btn-primary browse browse_media"
                            type="button">
                            <i class="glyphicon glyphicon-search"></i>
                            Browse
                        </button>
                    </span>
                </div>
            </div>
            <div class="col-md-2">
                <span class="btn btn-primary" data-toggle="modal"
                data-target="#ImageuPreview_<?php echo $akey; ?>">Preview</span>


                <div class="modal fade bd-example-modal-sm"
                id="ImageuPreview_<?php echo $akey; ?>" role="dialog">
                <div class="modal-dialog mwidth">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body" style="text-align:center;">
                            <?php echo $imagepreview; ?>
                        </div>
                        <div class="modal-footer" style="text-align: center;padding:9px !important">
                            <button type="button" class="btn  btn1 " data-dismiss="modal"  style="margin-top:4px !important"> Done </button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<?php } ?>
<?php } else { ?>




<?php if(isset($features) && !empty($features) && in_array(ADD_LABEL,$features)){ ?>
<div class="form-group col-md-8 col-xs-8 col-lg-8 col-sm-8" style="margin-left: -16px;">
    <?php echo $this->Form->input('label_id', ['options' => $Labels, 'empty' => 'Choose','multiple'=>'multiple', 'class' => 'form-control select2', 'label' => 'Select Label']); ?>
</div>
<div class="col-md-4 col-xs-4 col-lg-4 col-sm-4">
    <a href="javascript:void(0)" data-toggle="modal" data-target="#mylabel" style="margin-top: 25px;width: 134.67px;" class="btn btn-primary btn1 center-block btn2">Add Label
    </a>
</div>
<div class="clearfix"></div>


<div class="form-group">
    <label class="control-label">Label Images <sup>(Required dimension width 40 Height 40)</sup></label>
    <span class="fa fa-plus-circle pull-right addLabel"   style="cursor:pointer;font-size: 21px;"></span>
    <div class="row">
        <div class="col-md-9">
            <div class="input-group">
               <span class="input-group-addon">
                <i class="glyphicon glyphicon-picture"></i>
            </span>
            <input type="hidden" name="upload_media_placeholder[]"
            autofocus="autofocus">
            <input type="text" placeholder="Choose File" class="form-control"
            disabled="disabled">
            <span class="input-group-btn ">
                <input name="upload_media[]" accept="image/*" media-type="image"
                type="file" width="40" height="40" style="display:none;"
                class="browse_media_handler">
                <button class="browse btn btn-primary browse browse_media"
                type="button">
                <i class="glyphicon glyphicon-search"></i>
                Browse
            </button>
        </span>
    </div>
</div>
<div class="col-md-2">
    <span class="btn btn-primary" data-toggle="modal"
    data-target="#ImagePreview_0">Preview</span>


    <div class="modal fade bd-example-modal-sm" id="ImagePreview_0"
    role="dialog">
    <div class="modal-dialog mwidth">
        <!-- Modal content-->
        <div class="modal-content">

           <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title">Preview</h4>
        </div>

        <div class="modal-body" style="text-align: center!important;">
            <img src="<?php  echo $this->request->webroot . 'video_app_webroot/noprev.jpeg'; ?>" width=""/>
        </div>
        <div class="modal-footer" style="text-align: center;padding:9px !important">
            <button type="button" class="btn  btn1" data-dismiss="modal"  style="margin-top:4px !important"> Done </button>
        </div>
    </div>
</div>
</div>


</div>
</div>
</div>

<?php } ?>
<?php } ?>
</div>





<?php if(isset($features) && !empty($features) && in_array(ADD_LABEL,$features)){ ?>
<div class="row">

    <div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
        <div class="form-group">
            <label>Label Condition</label>
        </div>
    </div>
    <div class="col-md-8 col-lg-8 col-xs-12 col-sm-12">

        <?php
        echo $this->Form->input('show_on', [
            'type' => 'radio',
            'label' => false,
            'options' => [
                ['value' => 1, 'text' => __('Show label in Product detail page'), 'class' => 'minimal', 'checked'],
                ['value' => 2, 'text' => __('Show label on Product listing'), 'class' => 'minimal'],
            ],
            'templates' => [
                'inputContainer' => '{{content}}',
                'nestingLabel' => '<div class="form-group radio radio-primary">{{input}}<label{{attrs}}>{{text}}</label></div>',
                'radioWrapper' => '{{label}}'
            ]
        ]);
        ?>

    </div>

</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label>Banner Location</label>
        </div>
    </div>
    <?php
    $alignOption = [
        ['value' => '0', 'text' => __('Top'), 'checked'],
        ['value' => '1', 'text' => __('Bottom')],
    ];
    echo $this->Form->input('banner_bottom_text_placement', [
        'type' => 'radio',
        'label' => false,
        'options' =>$alignOption,
        'templates' => [
            'inputContainer' => '{{content}}',
            'nestingLabel' => '<div class="col-md-4"><div class="form-group radio radio-primary">{{input}}<label{{attrs}}>{{text}}</label></div></div>',
            'radioWrapper' => '{{label}}'
        ]
    ]);
    ?>
</div>


<?php } ?>

</div>
<div class="border-body">
    <div id="banner_container">
        <div class="form-group">
            <label class="control-label">Banner Image <sup>(Required dimension width 1920 Height 644)</sup></label>
            <div class="row">
                <div class="col-md-9">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="glyphicon glyphicon-picture"></i>
                        </span>
                        <input type="hidden" name="upload_media_placeholder[]" autofocus="autofocus">
                        <input id="file31" name="category_product_banner" type="text" placeholder="Choose File" class="form-control" disabled="disabled">
                        <span class="input-group-btn ">
                            <input id="btn31" name="category_banner" accept="image/*" media-type="image"
                            type="file" width="1920" height="644" style="display:none;"
                            class="browse_media_handler">
                            <button class="browse btn btn-primary browse browse_media" type="button" onclick="document.getElementById('btn31').click();">
                                <i class="glyphicon glyphicon-search"></i>
                                Browse
                            </button>
                        </span>
                    </div>
                </div>
                <div class="col-md-2">
                    <span id="preview_31" class="btn btn-primary preview_image" data-value="31" data-toggle="modal"
                    data-target="#preview-code-myModal">Preview</span>


                </div>
            </div>
        </div>
        <div class="form-group">
            <label>Banner Text</label>
            <?php  echo $this->Form->input('banner_text', ['type' => 'textarea', 'label' => false, 'class' => 'form-control']); ?>
        </div>
        
        <div class="form-group">
            <label>Banner Bottom Text</label>
            <?php  echo $this->Form->input('banner_bottom_text', ['type' => 'textarea', 'label' => false, 'class' => 'form-control']); ?>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Banner Location</label>
                </div>
            </div>
            <?php
            $alignOption = [
                ['value' => '0', 'text' => __('Top'), 'checked'],
                ['value' => '1', 'text' => __('Bottom')],
            ];
            echo $this->Form->input('banner_bottom_text_placement', [
                'type' => 'radio',
                'label' => false,
                'options' =>$alignOption,
                'templates' => [
                    'inputContainer' => '{{content}}',
                    'nestingLabel' => '<div class="col-md-4"><div class="form-group radio radio-primary">{{input}}<label{{attrs}}>{{text}}</label></div></div>',
                    'radioWrapper' => '{{label}}'
                ]
            ]);
            ?>
        </div>
        
        
        
    </div>
</div>
</div>



<div class="box-footer">
    <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
        <a href="javascript:void(0)" onclick="window.location.reload();"
        class="btn btn-primary btn1 center-block btn2">Reset
    </a>
</div>
<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
    <button id="info_1" type="button"
    class="btn btn-primary btn1 center-block btn2 setNewslater setNewslater1 right-slide">
    Next1
</button>
<!--
                                <button id="info_1" type="submit"
                                        class="btn btn-primary btn1 center-block btn2 setNewslater setNewslater1">
                                    Next1
                                </button>
                            -->
                        </div>
                    </div>
                </div>
            </div>


        </div>

        <!--Tab 2 is starting here  ------>

        <div class="tab-pane mainwidth" role="tabpanel" id="tab_2" >
            <div class="spacediv" id=""></div>

            <div class="row"> 
              <div class="clearfix"></div>	
              <div class="row lbplus">
                <div id="addmorelink">
                    <?php if (isset($Boxes['link_details']) && json_decode($Boxes['link_details'], true) && json_last_error() === 0) { ?>

                    <?php foreach (json_decode($Boxes['link_details'], true) as $ky => $vval) {  //pr($vval); ?>

                    <?php if (isset($vval['sub_data'][0]['image_file']['name']) && !empty($vval['sub_data'][0]['image_file']['name'])) {

                        $imagepreview1 = '<img src="' . $this->request->webroot . "img/developerimg/" . trim($this->request->session()->read('Auth.User.db_name')) . "/mebase/customlink/" . $vval['sub_data'][0]['image_file']['name'] . '" width="200px"/>';

                    } else { 

                        $imagepreview1 = '<img src="' . $this->request->webroot . 'video_app_webroot/noprev.jpeg"  width="200px"/>';


                    } ?>


                    <div class="stimings1 link_div form-group">
                       <div class="row">

                           <div class="col-md-12 col-xs-12 col-lg-12 col-xs-12">

                            <div class="row">  
                                <div class="col-md-11 col-xs-10 col-lg-11 col-sm-11" >
                                 <div class="form-group">
                                    <label>Link Position</label>
                                    <?php echo $this->Form->select('data[' . $ky . '][link_type]', ['1' => 'Top', '2' => 'Middle', '3' => 'Bottom'], ['id' => '','class' => 'form-control select2 linkpos accountchk','style' => 'width:100%;', 'escape' => false, 'default' => $vval['link_type']]); ?>
                                </div>
                            </div>

                            <div class="col-md-1 col-sm-1 col-lg-1 col-xs-2">
                                <div class="form-group">
                                    <?php if($ky==0){ ?>
                                    <span class="fa fa-plus-circle pull-right " style="cursor:pointer;font-size: 18px;" onclick="addLinkposition()";></span>

                                    <?php } else{ ?>
                                    <span class="fa fa-minus-circle pmodal pull-right removepos" style="cursor:pointer;font-size: 18px;"></span>                
                                    <?php } ?>
                                </div>
                            </div>
                            <div id="adddmultipleposition"></div>
                            <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" >
                                <div class="form-group">
                                 <label>Link</label>
                             </div>
                         </div>
                         <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                            <div class="form-group">
                                <input type="radio" value="1" <?php echo isset($vval['add_type']) && $vval['add_type']=='1'?'checked':''; ?> class="minimal external_hook_hide" name="data[<?php echo $ky; ?>][add_type]" > &nbsp; Hook
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                            <div class="form-group">
                             <input value="0" type="radio" <?php echo isset($vval['add_type']) && $vval['add_type']=='0'?'checked':''; ?> class="minimal external_hook_show" name ="data[<?php echo $ky; ?>][add_type]" > &nbsp; External
                         </div>
                     </div>
                 </div>
                 <!--            innerbox-->
                 <div class="stimings1" style="display: <?php echo isset($vval['add_type']) && $vval['add_type']=='0'?'block':'none'; ?>;">
                    <div class="row">

                        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                            <div class="form-group">
                             <label>Link Type</label>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                        <div class="form-group">
                            <input type="radio" value="text" class="minimal" name ="image_text" <?php echo isset($vval['type']) && !empty($vval['type'])?'checked':''; ?>> &nbsp; Text
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
                      <div class="form-group">
                         <input type="radio" value="image" class="minimal" name ="image_text" <?php echo isset($vval['type']) && !empty($vval['type'])?'':'checked'; ?>> &nbsp; Image
                     </div>
                 </div>
                 <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                     <div class="form-group roq mebase_form_main" style="display: <?php echo isset($vval['type']) && !empty($vval['type'])?'block':'none'; ?>;">
                         <label>Text</label>
                         <input name="data[<?php echo $ky; ?>][sub_data][0][type]" type="text" class="form-control accountchk">
                     </div>
                     <div class="form-group roq mebase_form_main" style="display: <?php echo isset($vval['type']) && !empty($vval['type'])?'none':'block'; ?>;">
                        <input class="upload_trigger" id="btn1" style="display:none;" onchange="document.getElementById('file1').value=this.value.substring(this.value.lastIndexOf('\\')+1);" type="file" name="data[<?php echo $ky; ?>][sub_data][0][image_file]">

                        <input type="hidden" value="<?php echo isset($vval['sub_data'][0]['image_file']['name']) && !empty($vval['sub_data'][0]['image_file']['name'])?$vval['sub_data'][0]['image_file']['name']:''; ?>" name="data[<?php echo $ky; ?>][sub_data][0][old_image_file]">

                        <label class="col-lg-12 col-xs-12 padd-zero">Image</label> 
                        <div class="col-lg-9 col-xs-9" style="padding-right:30px;">
                            <div class="input-group row">
                                <input id="file1" placeholder="Choose Image" class="form-control accountchk" type="text" name="logo" value="<?php echo isset($vval['sub_data'][0]['image_file']['name']) && !empty($vval['sub_data'][0]['image_file']['name'])?$vval['sub_data'][0]['image_file']['name']:''; ?>" disabled>
                                <input name="" autofocus="autofocus" type="hidden">
                                <span class="input-group-btn">
                                    <button class="browse btn btn-primary " type="button" onclick="document.getElementById('btn1').click();">
                                      Browse
                                  </button>
                              </span>
                          </div>
                      </div>
                      <div class="col-lg-3 col-xs-3">
                         <div class="row">                      
                            <button type="button" data-value="1" id="preview_1" class="btn btn-primary form-control preview_image" data-toggle="modal" data-target="#preview-code-myModal_<?php echo $ky; ?>">Preview</button>	
                        </div>
                    </div>
                    <div class="modal fade bd-example-modal-sm" id="preview-code-myModal_<?php echo $ky; ?>" role="dialog">
                        <div class="modal-dialog mwidth">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-body" style="text-align:center;">
                                    <?php echo $imagepreview1; ?>
                                </div>
                                <div class="modal-footer" style="text-align: center;padding:9px !important">
                                    <button type="button" class="btn  btn1 " data-dismiss="modal"  style="margin-top:4px !important"> Done </button>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="clearfix"></div>
                </div>





                <div class="form-group">
                    <label>Web Url</label>
                    <input name="data[<?php echo $ky; ?>][sub_data][0][web_url]" value="<?php echo isset($vval['sub_data'][0]['web_url'])?$vval['sub_data'][0]['web_url']:''; ?>" type="text" class="form-control accountchk">
                </div>
                <div class="form-group">
                    <label>Android Deeplink</label>
                    <input name="data[<?php echo $ky; ?>][sub_data][0][android_url]" type="text" class="form-control accountchk" value="<?php echo isset($vval['sub_data'][0]['android_url'])?$vval['sub_data'][0]['android_url']:''; ?>">
                </div>
                <div class="form-group">
                    <label>IOS Deeplink</label>
                    <input name="data[<?php echo $ky; ?>][sub_data][0][ios_url]" type="text" value="<?php echo isset($vval['sub_data'][0]['ios_url'])?$vval['sub_data'][0]['ios_url']:''; ?>" class="form-control accountchk">
                </div>
            </div>    
        </div>
    </div>
    <div id="hook_data_0" class="stimings23" style="display: <?php echo isset($vval['add_type']) && $vval['add_type']=='1'?'block':'none'; ?>;">
        <?php if (isset($Boxes['hook_details']) && json_decode($Boxes['hook_details'], true) && json_last_error() === 0) { $saved_hook = json_decode($Boxes['hook_details'], true);  ?>

        <div class="row"> 
            <div class="col-md-6 col-lg-6 col-md-6 col-xs-6">
               <div class="form-group">
                <label>Template</label>
                <select class="form-control select2 selectTemplate hookRequired" style="width:100%;" counter-index="0" name="hook[0][template]" >
                 <?php echo $this->cell('Hook.CommonHookFunction::getAllHookTemp',[$Boxes->hook_id]) ?>

             </select>  
         </div>    
     </div>
     <div class="col-md-6 col-lg-6 col-md-6 col-xs-6">
         <div class="form-group">
             <label>Name</label>
             <input type="text" name="hook[0][template_name]" class="form-control" style="display:none;">
         </div>    
     </div>

     <span class="fa fa-plus-circle pmodal pull-right addhookhtml"style="cursor:pointer;font-size: 21px;"></span>
 </div>


 <?php foreach($saved_hook as $ky2=>$vy2) { foreach ($vy2['hook_details'] as $key => $val) {   ?>

 <div class="stimings1 counterpositionCls" id="divID_<?php echo $key; ?>">

    <input type="hidden" class="card_type"
    name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][card_type]"
    value="<?php echo $val['card_type']; ?>"/>
    <!-- [ 1 -> open card , 2 -> collapse , 3 -> button ] -->
    <input type="hidden" class="card_type_option"
    name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][card_type_option]"
    value="<?php echo $val['card_type_option']; ?>"/>
    <!-- [ 0-> nothing selection, 1 -> redirect , 2 -> callout , 3 -> deeplink] -->

    <input type="hidden" class="row_counter" value="<?php echo $key; ?>"/>
    <!-- [ form  hidden input ] -->

    <div class="row">  
        <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
           <div class="form-group">
            <label>Title/Icon</label>
            <select class="form-control select2 title_icon hookRequired" name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][title_type]" style="width:100%;" id="title_icon_1" >
              <option value="">Select</option>
              <option <?php echo $val['title_type'] == 'title' ? 'selected' : ''; ?> data-toggle="title/icon" value="title">Title
              </option>
              <option <?php echo $val['title_type'] == 'icon' ? 'selected' : ''; ?> data-toggle="icon/title" value="icon">Icon
              </option>
          </select>  
      </div>    
  </div>
  <div class="col-md-2 col-xs-12 col-sm-12 col-lg-2 padd">
     <div class="form-group">
      <div id="" class=""> 
          <input name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][title]"
          placeholder="Max 7 characters"

          value="<?php echo isset($val['title_type']) && !empty($val['title_type']) && $val['title_type'] == 'title' ? $val['title'] : ''; ?>"
          maxlength="7" class="input_title form-control commonTitle buttonTitle hookRequired" type="text"
          style="display: <?php echo isset($val['title_type']) && !empty($val['title_type']) && $val['title_type'] == 'title' ? 'block' : 'none'; ?>">
      </div>
      <div class="row padd">      
          <div class="col-lg-9 col-md-9 col-xs-10 col-sm-10 hide">
           <div class="form-group">
             <input id="btn8" type="file" style="display:none;"  onchange="document.getElementById('file8').value=this.value.substring(this.value.lastIndexOf('\\')+1);">
             <input id="file8" type="text" class="form-control">
         </div>
         <div class="form-group">
             <input type="button" style="display: <?php echo isset($val['title_type']) && !empty($val['title_type']) && $val['title_type'] == 'icon' ? 'block' : 'none'; ?>;width:45%;" class="btn btn-primary cbuttonpop form-control" onclick="document.getElementById('btn8').click();" value="Select File"/ >
         </div>
     </div>
 </div> 
</div>   
</div>   
<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
    <div class="form-group">
     <label>Type</label>
 </div>  
 <section>
     <span class="pull-right manage-btn">
         <ul class="nav  crm-tabs cmpop agents ">
             <li  class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 1 ? 'active' : ''; ?>"><a data-value="4" data-card-type="1" name="open_card_collapsed_card/button" class="hook cardsTypes" data-toggle="tab" href="#h1<?php echo $key; ?>">Open Card</a></li>
             <li class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 2 ? 'active' : ''; ?>"><a data-value="4" data-card-type="2" name="open_card_collapsed_card/button" class="hook cardsTypes" data-toggle="tab" href="#h2<?php echo $key; ?>">Collapse Card</a></li>
             <li class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 ? 'active' : ''; ?>"><a data-value="4" data-card-type="3" name="open_card_collapsed_card/button" class="hook cardsTypes" data-toggle="tab" href="#h3<?php echo $key; ?>">Button</a></li>
         </ul>
     </span> 
 </section>
</div>
<div class="col-md-4 col-xs-12 col-sm-12 col-lg-4">
    <div class="tab-content">
       <!--1st tab id  -->
       <div id="h1<?php echo $key; ?>" class="tab-pane fade <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 1 ? 'in active' : ''; ?>">
        <label>Module</label>
        <div class="stimings">
            <div class="row">  
                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 AddMoreRow">
                 <div class="form-group">
                     <label>Module</label>
                     <select class="form-control select2 plugin_type" name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][module]" style="width:100%;">
                      <option selected="">Select</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 1 ? ' selected ' : ''; ?> value="1">MeBase</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 2 ? ' selected ' : ''; ?>value="2">MeHelper</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 3 ? ' selected ' : ''; ?>value="3">MeSocial</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 4 ? ' selected ' : ''; ?>value="4">MeBaseGallery</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 5 ? ' selected ' : ''; ?>value="5">MeBaseEvent</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 6 ? ' selected ' : ''; ?>value="6">MeBaseUrl</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 7 ? ' selected ' : ''; ?>value="7">MeBaseContact</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 8 ? ' selected ' : ''; ?>value="8">Social</option>
                      <option <?php echo isset($val['module']) && $val['module'] == 9 ? ' selected ' : ''; ?>value="9">Blog</option>
                  </select>  
              </div>
              <div class="form-group">
                 <label>Sub Module</label>
                 <!--########################################################### -->                    


                 <?php if(isset($val['module']) && $val['module']==1) { ?>

                 <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                 <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getPagesInstancesLocation', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>


               <?php } else if(isset($val['module']) && $val['module']==2){ ?>



               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getHelperPages', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>



               <?php } else if(isset($val['module']) && $val['module']==4){ ?> <!--  gallery data-->



               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getGalleryPages', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>


               <?php } else if(isset($val['module']) && $val['module']==5 ){ ?>


               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getEventPages', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>

               <?php } else if(isset($val['module']) && $val['module']==6){ ?>


               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getUrlPages', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>


               <?php } else if(isset($val['module']) && $val['module']==7){?>

               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getContactPages', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>



               <?php } else if(isset($val['module']) && $val['module']==8){ ?>



               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getMeSocialData', [$val['sub_module_type'], $val['sub_module']]) ?>
               </select>


               <?php } else if(isset($val['module']) && $val['module']==9){ ?>



               <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
               <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                   <?php echo $this->cell('Hook.CommonHookFunction::getBlogData', [$val['sub_module_type'], $val['sub_module']])->render('Blog/get_blog_data'); ?>
               </select>


               <?php }?>



               <!--########################################################### -->                    




           </div>



           <?php if(isset($val['sub_module_type']) && !empty($val['sub_module_type']) && $val['sub_module_type']=='Blog'){ ?>


           <div class="form-group">
            <label> Componant</label>
            <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][component]"
                class="form-control select2 hookcomponent component">
                <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['sub_module'], $val['component']])->render('Blog/display_blog_category'); ?>
            </select>


        </div>



        <div class="form-group">
         <label> Sub Componant</label>
         <select
         name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_component]"
         class="form-control select2 sub_component">
         <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['component'], $val['sub_component']]) ->render('Blog/display_blog_category');?>
     </select>


 </div>
 <?php } else { ?> 


 <div class="form-group">
    <label> Componant</label>
    <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][component]"
        class="form-control select2 hookcomponent component">
        <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['sub_module'], $val['component']]) ?>
    </select>


</div>



<div class="form-group">
 <label> Sub Componant</label>
 <select
 name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_component]"
 class="form-control select2 sub_component">
 <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['component'], $val['sub_component']]) ?>
</select>


</div>

<?php } ?>        

















</div> 
</div> 
</div>
</div>
<div id="h2<?php echo $key; ?>" class="tab-pane fade <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 2 ? 'in active' : ''; ?>">
    <label>Module</label>
    <div class="stimings">
        <div class="row">  
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 AddMoreRow">
             <div class="form-group">
                 <label>Module</label>
                 <select class="form-control select2 plugin_type" name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][module]" style="width:100%;">
                  <option selected="selected">Select</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 1 ? ' selected ' : ''; ?> value="1">MeBase</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 2 ? ' selected ' : ''; ?>value="2">MeHelper</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 3 ? ' selected ' : ''; ?>value="3">MeSocial</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 4 ? ' selected ' : ''; ?>value="4">MeBaseGallery</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 5 ? ' selected ' : ''; ?>value="5">MeBaseEvent</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 6 ? ' selected ' : ''; ?>value="6">MeBaseUrl</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 7 ? ' selected ' : ''; ?>value="7">MeBaseContact</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 8 ? ' selected ' : ''; ?>value="8">Social</option>
                  <option <?php echo isset($val['module']) && $val['module'] == 9 ? ' selected ' : ''; ?>value="9">Blog</option>     

              </select>  
          </div>
          <div class="form-group">
             <label>Sub Module</label>
             <!--########################################################### -->                    


             <?php if(isset($val['module']) && $val['module']==1) { ?>

             <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
             <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getPagesInstancesLocation', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>


           <?php } else if(isset($val['module']) && $val['module']==2){ ?>



           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getHelperPages', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>



           <?php } else if(isset($val['module']) && $val['module']==4){ ?> <!--  gallery data-->



           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getGalleryPages', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>


           <?php } else if(isset($val['module']) && $val['module']==5 ){ ?>


           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getEventPages', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>

           <?php } else if(isset($val['module']) && $val['module']==6){ ?>


           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getUrlPages', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>


           <?php } else if(isset($val['module']) && $val['module']==7){?>

           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getContactPages', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>



           <?php } else if(isset($val['module']) && $val['module']==8){ ?>



           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getMeSocialData', [$val['sub_module_type'], $val['sub_module']]) ?>
           </select>


           <?php } else if(isset($val['module']) && $val['module']==9){ ?>



           <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
           <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
               <?php echo $this->cell('Hook.CommonHookFunction::getBlogData', [$val['sub_module_type'], $val['sub_module']])->render('Blog/get_blog_data'); ?>
           </select>


           <?php }?>



           <!--########################################################### -->                    




       </div>



       <?php if(isset($val['sub_module_type']) && !empty($val['sub_module_type']) && $val['sub_module_type']=='Blog'){ ?>


       <div class="form-group">
        <label> Componant</label>
        <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][component]"
            class="form-control select2 hookcomponent component">
            <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['sub_module'], $val['component']])->render('Blog/display_blog_category'); ?>
        </select>


    </div>



    <div class="form-group">
     <label> Sub Componant</label>
     <select
     name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_component]"
     class="form-control select2 sub_component">
     <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['component'], $val['sub_component']]) ->render('Blog/display_blog_category');?>
 </select>


</div>
<?php } else { ?> 


<div class="form-group">
    <label> Componant</label>
    <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][component]"
        class="form-control select2 hookcomponent component">
        <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['sub_module'], $val['component']]) ?>
    </select>


</div>



<div class="form-group">
 <label> Sub Componant</label>
 <select
 name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_component]"
 class="form-control select2 sub_component">
 <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['component'], $val['sub_component']]) ?>
</select>


</div>

<?php } ?>            
</div> 
</div> 
</div>
</div>
<!--            for button tab only -->
<div id="h3<?php echo $key; ?>" class="tab-pane fade <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 ? 'in active' : ''; ?>">
    <div class="deeplink_button">        <div class="from-group">
        <label>Module</label>
        <div>
         <section>
             <span class="">
                 <ul class="nav  crm-tabs cmpop agents ">
                     <li class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 1 ? 'active' : ''; ?>"><a data-toggle="tab" href="#Redirect">Redirect</a></li>
                     <li class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 2 ? 'active' : ''; ?>"><a data-toggle="tab" href="#call">Call Out</a></li>
                     <li class="<?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 3 ? 'active' : ''; ?>"><a data-toggle="tab" href="#drop">Deeplink/Url</a></li>
                 </ul>
             </span> 
         </section>    
     </div> 
     <div class="padd">
        <div class="tab-content data_append">
            <div id="Redirect" class="tab-pane <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 1 ? 'in active' : ''; ?>">
             <div class="stimings">
                <div class="row">  
                    <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12 AddMoreRow">
                     <div class="form-group">
                         <label>Module</label>
                         <select class="form-control select2 plugin_type" name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][module]" style="width:100%;">
                          <option selected="selected">Select</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 1 ? ' selected ' : ''; ?> value="1">MeBase</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 2 ? ' selected ' : ''; ?>value="2">MeHelper</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 3 ? ' selected ' : ''; ?>value="3">MeSocial</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 4 ? ' selected ' : ''; ?>value="4">MeBaseGallery</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 5 ? ' selected ' : ''; ?>value="5">MeBaseEvent</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 6 ? ' selected ' : ''; ?>value="6">MeBaseUrl</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 7 ? ' selected ' : ''; ?>value="7">MeBaseContact</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 8 ? ' selected ' : ''; ?>value="8">Social</option>
                          <option <?php echo isset($val['module']) && $val['module'] == 9 ? ' selected ' : ''; ?>value="9">Blog</option>
                      </select>  
                  </div>
                  <div class="form-group">
                     <label>Sub Module</label>
                     <!--########################################################### -->                    


                     <?php if(isset($val['module']) && $val['module']==1) { ?>

                     <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                     <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getPagesInstancesLocation', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>


                   <?php } else if(isset($val['module']) && $val['module']==2){ ?>



                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getHelperPages', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>



                   <?php } else if(isset($val['module']) && $val['module']==4){ ?> <!--  gallery data-->



                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getGalleryPages', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>


                   <?php } else if(isset($val['module']) && $val['module']==5 ){ ?>


                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getEventPages', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>

                   <?php } else if(isset($val['module']) && $val['module']==6){ ?>


                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getUrlPages', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>


                   <?php } else if(isset($val['module']) && $val['module']==7){?>

                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getContactPages', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>



                   <?php } else if(isset($val['module']) && $val['module']==8){ ?>



                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getMeSocialData', [$val['sub_module_type'], $val['sub_module']]) ?>
                   </select>


                   <?php } else if(isset($val['module']) && $val['module']==9){ ?>



                   <input type="hidden" value="<?php echo $val['sub_module_type']; ?>"  name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module_type]"/>
                   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_module]" class="form-control select2 sub_module getmebase hookRequired">
                       <?php echo $this->cell('Hook.CommonHookFunction::getBlogData', [$val['sub_module_type'], $val['sub_module']])->render('Blog/get_blog_data'); ?>
                   </select>


                   <?php }?>



                   <!--########################################################### -->                    




               </div>



               <?php if(isset($val['sub_module_type']) && !empty($val['sub_module_type']) && $val['sub_module_type']=='Blog'){ ?>


               <div class="form-group">
                <label> Componant</label>
                <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][component]"
                    class="form-control select2 hookcomponent component">
                    <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['sub_module'], $val['component']])->render('Blog/display_blog_category'); ?>
                </select>


            </div>



            <div class="form-group">
             <label> Sub Componant</label>
             <select
             name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_component]"
             class="form-control select2 sub_component">
             <?php echo $this->cell('Hook.CommonHookFunction::displayBlogCategory', [$val['component'], $val['sub_component']]) ->render('Blog/display_blog_category');?>
         </select>


     </div>
     <?php } else { ?> 


     <div class="form-group">
        <label> Componant</label>
        <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][component]"
            class="form-control select2 hookcomponent component">
            <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['sub_module'], $val['component']]) ?>
        </select>


    </div>



    <div class="form-group">
     <label> Sub Componant</label>
     <select
     name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][sub_component]"
     class="form-control select2 sub_component">
     <?php echo $this->cell('Hook.CommonHookFunction::displayCategory', [$val['component'], $val['sub_component']]) ?>
 </select>


</div>

<?php } ?>              
</div> 
</div> 
</div>
</div>
<div id="call" class="tab-pane <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 2 ? 'in active' : ''; ?>">
    <div class="col-md-2 paddpop col-lg-2 col-sm-2 col-xs-2">
        <div class="form-group">    
         <input name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][call_checkbox_status]"

         value="<?php echo isset($val['call_checkbox_status']) && !empty($val['call_checkbox_status']) ? 1 : 0; ?>"

         <?php echo isset($val['call_checkbox_status']) && !empty($val['call_checkbox_status']) ? 'checked' : ''; ?>

         id="call<?php echo $key; ?>" type="checkbox" class="minimal"> &nbsp;</div> 
     </div>
     <div class="col-md-10 col-xs-10 col-sm-10 col-lg-10">
      <div class="form-group">
       <label>Call</label>  
       <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][call]" class="form-control select2" style="width:100%;">
           <?php echo $this->cell('Hook.CommonHookFunction::displayPhone', [$val['call']]) ?>
       </select>  
   </div>
</div> 
<div class="clearfix"></div>
<div class="col-md-2 paddpop col-lg-2 col-sm-2 col-xs-2">
    <div class="form-group">    
     <input name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][msg_checkbox_status]"
     value="<?php echo isset($val['msg_checkbox_status']) && !empty($val['msg_checkbox_status']) ? 1 : 0; ?>"
     id="msg<?php echo $key; ?>"
     <?php echo isset($val['msg_checkbox_status']) && !empty($val['msg_checkbox_status']) ? 'checked' : ''; ?> type="checkbox" class="minimal"> &nbsp;</div> 
 </div>
 <div class="col-md-10 col-xs-10 col-sm-10 col-lg-10">
  <div class="form-group">
   <label>Messsage</label>  
   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][message]" class="form-control select2" style="width:100%;">
       <option value="">Select</option>
       <?php echo $this->cell('Hook.CommonHookFunction::displayPhone', [$val['message']]) ?>
   </select>  
</div>
</div>  
<div class="clearfix">
</div>
<div class="col-md-2 paddpop col-lg-2 col-sm-2 col-xs-2">
    <div class="form-group">    
     <input name="hook[<?php echo $ky2; ?>][hook_details][<?php echo $key; ?>][email_checkbox_status]"
     value="<?php echo isset($val['email_checkbox_status']) && !empty($val['email_checkbox_status']) ? 1 : 0; ?>"
     <?php echo isset($val['email_checkbox_status']) && !empty($val['email_checkbox_status']) ? 'checked' : ''; ?>
     id="email<?php echo $key; ?>" type="checkbox" class="minimal"> &nbsp;</div> 
 </div>
 <div class="col-md-10 col-xs-10 col-sm-10 col-lg-10">
  <div class="form-group">
   <label>Email</label>  
   <select name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][email]" class="form-control select2" style="width:100%;">
       <option value="">Select</option>
       <?php echo $this->cell('Hook.CommonHookFunction::displayEmail', [$val['email']]) ?>
   </select>  
</div>
</div>  
</div>
<div id="drop" class="tab-pane <?php echo isset($val['card_type']) && !empty($val['card_type']) && $val['card_type'] == 3 && isset($val['card_type_option']) && $val['card_type_option'] == 3 ? 'in active' : ''; ?>">
    <div class="form-group">
        <label>Web URL</label>
        <input value="<?php echo isset($val['deeplink_web']) && !empty($val['deeplink_web']) ? $val['deeplink_web'] : '' ?>"
        name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][deeplink_web]" type="text" class="form-control">    
    </div>
    <div class="form-group">
     <label>Android Deeplink</label>
     <input value="<?php echo isset($val['deeplink_android']) && !empty($val['deeplink_android']) ? $val['deeplink_android'] : '' ?>"
     name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][deeplink_android]" type="text" class="form-control">   
 </div>
 <div class="form-group">
    <label>IOS Deeplink</label>
    <input value="<?php echo isset($val['deeplink_ios']) && !empty($val['deeplink_ios']) ? $val['deeplink_ios'] : '' ?>"
    name="hook[<?php echo $counter; ?>][hook_details][<?php echo $key; ?>][deeplink_ios]" type="text" class="form-control">   
</div>
</div>        
</div>    

</div>
<!--             end-->
</div></div>
</div>
<!--            end     -->

</div>

</div> 
</div>

</div>



<?php }}} else{ ?>

<?php echo $this->element('select_hook'); ?>


<?php } ?>

</div>

</div>             </div>   
</div>

<?php }}else{ ?>
<div class="stimings1 link_div form-group">
   <div class="row">
       <div class="col-md-12 col-xs-12 col-lg-12 col-xs-12">

        <div class="row">  
            <div class="col-md-11 col-xs-10 col-lg-11 col-sm-11" >
             <div class="form-group">
                <label>Link Position</label>
                <select  class="form-control select2 linkpos accountchk" style="width:100%;"name="data[0][link_type]">
                  <option value="">-Select-</option>
                  <option value="1">Top</option>
                  <option value="2">Middle</option>
                  <option value="3">Bottom</option>
              </select>
          </div>
      </div>

      <div class="col-md-1 col-sm-1 col-lg-1 col-xs-2">
        <div class="form-group">
           <span class="fa fa-plus-circle pull-right " style="cursor:pointer;font-size: 18px;" onclick="addLinkposition()";></span>
       </div>
   </div>
   <div id="adddmultipleposition"></div>
   <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4" >
    <div class="form-group">
     <label>Link</label>
 </div>
</div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
    <div class="form-group">
        <input type="radio" value="1" class="minimal external_hook_hide" name="data[0][add_type]" > &nbsp; Hook
    </div>
</div>
<div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
    <div class="form-group">
     <input value="0" type="radio" class="minimal external_hook_show" name ="data[0][add_type]" checked> &nbsp; External
 </div>
</div>
</div>
<!--            innerbox-->
<div class="stimings1">
    <div class="row">

        <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
            <div class="form-group">
             <label>Link Type</label>
         </div>
     </div>
     <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
        <div class="form-group">
            <input type="radio" value="text" class="minimal" name ="image_text" checked> &nbsp; Text
        </div>
    </div>
    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-4">
      <div class="form-group">
         <input type="radio" value="image" class="minimal" name ="image_text" > &nbsp; Image
     </div>
 </div>
 <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
     <div class="form-group roq mebase_form_main" style="display: block;">
         <label>Text</label>
         <input name="data[0][sub_data][0][type]" type="text" class="form-control accountchk">
     </div>
     <div class="form-group roq mebase_form_main" style="display: none;">
        <input class="upload_trigger" id="btn1" style="display:none;" onchange="document.getElementById('file1').value=this.value.substring(this.value.lastIndexOf('\\')+1);" type="file" name="data[0][sub_data][0][image_file]">
        <input type="hidden" value="" name="data[0][sub_data][0][old_image_file]">
        <label class="col-lg-12 col-xs-12 padd-zero">Image</label> 
        <div class="col-lg-9 col-xs-9" style="padding-right:30px;">
         <div class="input-group row">
             <input id="file1" placeholder="Choose Image" class="form-control accountchk" type="text" name="logo" disabled>
             <input name="" autofocus="autofocus" type="hidden">
             <span class="input-group-btn">
                 <button class="browse btn btn-primary " type="button" onclick="document.getElementById('btn1').click();">
                  Browse
              </button>
          </span>
      </div>
  </div>
  <div class="col-lg-3 col-xs-3">
     <div class="row">
        <button type="button" data-value="1" id="preview_1" class="btn btn-primary form-control preview_image" data-toggle="modal" data-target="#preview-code-myModal">Preview</button>	
    </div>
</div>
<div class="clearfix"></div>
</div>





<div class="form-group">
    <label>Web Url</label>
    <input name="data[0][sub_data][0][web_url]" type="text" class="form-control accountchk">
</div>
<div class="form-group">
    <label>Android Deeplink</label>
    <input name="data[0][sub_data][0][android_url]" type="text" class="form-control accountchk">
</div>
<div class="form-group">
    <label>IOS Deeplink</label>
    <input name="data[0][sub_data][0][ios_url]" type="text" class="form-control accountchk">
</div>
</div>    
</div>
</div>
<div class="stimings23" id="hook_data_0" style="display:none;">
    <?php echo $this->element('select_hook'); ?>


</div>

</div>             </div>   
</div>
<?php } ?>
</div>
<div class="footer col-md-12 col-xs-12 col-lg-12 col-sm-12 padd">
   <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
    <button type="Go to Inventory" class="btn btn-primary  btn1 center-block btn2">Reset</button>
</div>
<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
    <!--                      <input  type="button" class="btn btn-primary btn1 center-block btn2 right-slide" value="Proceed">-->
    <input  type="submit" class="btn btn-primary btn1 center-block btn2 save-button" style="" value="Save">
</div>
</div>

</div>
</div>
</div>
<?php echo $this->Form->end(); ?>
<!--Tab 2 is ending here------>  
</div>


<!--Add attributes starting here ------>
<div class="tab-pane mainwidth " role="tabpanel" id="tab_3" style="">
   <div class="spacediv" id=""></div>

   <?php echo $this->Form->create('customfields', ['enctype' => 'multipart/form-data', 'id' => 'CustomFieldForm']); ?>                          
   <div class="form-group counterCls" id="divID_0">
    <!--              <i class="fa fa-info-circle" aria-hidden="true" title="User Can add attributes for prodcut like size,color option from dropdown Field type,user can add product info via input Field Type"></i> <label>Add Attribute *</label>-->
</div>

<div class="row" >	

   <div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
     <div class="form-group">
      <label>Template</label>
      <?php //echo $this->Gym->getAlltemplates('templates'); ?>

      <?php //echo $this->Form->input('template_name', ['options' => $templates, 'empty' => 'Choose', 'class' => 'form-control select2', 'label' => false]); ?>
      <select class="form-control select2 selectCustomTemplate hookRequired" style="width:100%;" counter-index="0">
        <?php echo $this->cell('Hook.CommonHookFunction::getAllTemplates',['random']) ?>
    </select>
</div>
</div>

<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 padd">

   <div class="form-group">
       <input type="text" class="form-control bdetailschk" placeholder="Enter Template Name" name="templatename">

   </div>
</div>
<span class="fa fa-plus-circle pmodal pull-right addattribute"style="cursor:pointer;font-size: 21px;"></span>
</div>


<div class="stimings2 vivekid" id="vivekid">

    <div class="row" id="">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
          <div class="form-group">
           <label>Create Attribute</label>
           <select class="form-control select2 bdetailschk" style="width:100%;"name="attr_field_type[0]">
              <option value="attribute">Attribute</option>
              <option value="input">Input</option>
          </select>
      </div>



      <div class="form-group">
          <label>Attribute Name *</label>
          <div class="form-group">
           <input type="text" class="form-control bdetailschk" placeholder="Please enter Attribute name" name="attribute_name[0]">
       </div>
   </div>

   <div class="clearfix"></div>

   <div class="row "id="adddropmultiple_0">
      <div class="col-md-11 col-lg-11 col-sm-10 col-xs-10 " >
         <label> Value</label>
         <div class="form-group">   
          <input type="text"  class="form-control tab_2 bdetailschk" name="dropdown[0][]">
      </div> 
  </div>
  <div class="col-md-1 col-lg-1 col-xs-2 col-sm-2">
      <div class="form-group">
         <span class="fa fa-plus-circle hplus adddropdowndata "style="cursor:pointer;font-size: 17px;" onclick="adddropdown(0)";></span>  </div>
     </div>
 </div>



 <div class="row">
     <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6 " >
        <div class="checkbox checkbox-primary">
         <input type="checkbox" class="minimal" checked>
         <label for="CheckedAllProduct"><strong>Treat As A Sperate Item</strong></label>
     </div>
 </div>
 <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
    <div class="checkbox checkbox-primary">
     <input type="checkbox" class="minimal" checked>
     <label for="CheckedAllProduct"><strong>Add in FIlter</strong></label>
 </div>
</div>
</div> 

</div>
</div> 

</div>
<br>

<div id="addparentdiv" class=""></div>
<span class="fa fa-plus-circle pmodal addheadinddiv" style="cursor:pointer;font-size: 21px;padding-left:100%;"></span>
<div class="stimings2  counterHeaderCls" id="divID_0">
    <div class="row">
        <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
         <div class="form-group">
            <label>Product Specification</label>
            <select class="form-control select2 bdetailschk" style="width:100%;">
             <option selected="selected">Input</option>
             <option>Dropdown</option>
         </select>
     </div>

     <div class="form-group">
        <label>Heading Levels</label>
        <select class="form-control select2 tab_2" style="width:100%;">
         <option selected="selected">1</option>
         <option>2</option>

     </select>
 </div>
 <div class="form-group ">
    <label>Title</label>
    <input type="text" class="form-control vvv bdetailschk">
</div>
<span class="fa fa-plus-circle pmodal1  pull-right" style="cursor:pointer;font-size: 17px;" onclick="addHeadings(0)"></span>	
<div class="clearfix"></div>
			<!----add subtitle field start here--->
			
		    <div class="stimings1">
		    <div class="row ">
			<div class="col-md-12 col-xs-12 col-lg-12 col-md-12">
			<div class="form-group">
			<label>Sub Title 1</label>
			<input type="text" class="form-control bdetailschk">	
			</div>
			<div class="form-group">
			<label>Input box Data</label>
			<input type="text" class="form-control bdetailschk">	
			</div>	
			</div>	
			</div>		
			</div>	
			<div id="addsubtitle_0"></div>
             </div>
           
           <!----add subtitle field ends herer--->
              </div>  
              </div><br>
              <div id="addparentheadings"></div>
              <!--------div for formats---------------->
              
              <!--        form loop-->
              <div class="row">
               <span class="fa fa-plus-circle pmodal addproductinfodiv counterProductCls" style="cursor:pointer;font-size: 21px;padding-left:100%;"></span>
           </div>

           <div class="stimings2">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
                    <div class="form-group">
                        <label>Field Name*</label>
                        <input type="text" class="form-control bdetailschk" name="product_information[]" id="product_information_0">
                    </div>
                    <div class="form-group">
                     <label>Format Type *</label>
                     <select class="form-control select2 selectformat bdetailschk" style="width:100%;" id="selectbox_0"  onchange="formatChange(0,this.value)" name="format_type[0]">

                      <option value="audio">Audio</option>
                      <option value="video">Video</option>
                      <option value="image">Image</option>
                      <option value="doc">Doc</option>
                  </select>
              </div>

              <div class="row lbplus2" id="audioformat_0" style="display:block">

                <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                    <div class="form-group">
                     <label>Format</label>
                 </div>
             </div>
             <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
                <div class="form-group">
                    <input type="radio" class="minimal" name ="r2" checked> &nbsp; MP3
                </div>
            </div>

            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
                 <input type="radio" class="minimal" name ="r2"> &nbsp; AMR
             </div>
         </div>
         <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
                 <input type="radio" class="minimal" name ="r2"> &nbsp; WMV
             </div>
         </div>

         <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
                 <input type="radio" class="minimal" name ="r2"> &nbsp; AAC 
             </div>
         </div>
     </div>

     <!--			for video-->

     <div class="row lbplus2" id="videoformat_0" style="display:none">
        <div class="col-md-3 col-lg-3 col-xs-3 col-sm-">
            <div class="form-group">
             <label>Format</label>
         </div>
     </div>
     <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
        <div class="form-group">
            <input type="radio" class="minimal" name ="adi1" checked> &nbsp; 3GP
        </div>
    </div>
    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
     <div class="form-group">
         <input type="radio" class="minimal" name ="adi1"> &nbsp; MP4
     </div>
 </div>
 <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
     <div class="form-group">
         <input type="radio" class="minimal" name ="adi1"> &nbsp; Youtube
     </div>
 </div>
</div>

<!--				end-->
<!--				for image-->
<div class="row lbplus2" id="imageformat_0" style="display:none">
    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-">
        <div class="form-group">
         <label>Format</label>
     </div>
 </div>
 <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
    <div class="form-group">
        <input type="radio" class="minimal" name ="im1" checked> &nbsp; JPEG
    </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="im1"> &nbsp; JPG
 </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="im1"> &nbsp; PNG
 </div>
</div>
</div>

<!--				end-->
<!--				for doc-->
<div class="row lbplus2" id="docformat_0" style="display:none">
    <div class="col-md-3 col-lg-3 col-xs-3 col-sm-">
        <div class="form-group">
         <label>Format</label>
     </div>
 </div>
 <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
    <div class="form-group">
        <input type="radio" class="minimal" name ="doc1" checked> &nbsp; DOC
    </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="r2"> &nbsp;  PDF   
 </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="doc1"> &nbsp; TEXT
 </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 col-md-offset-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="doc1"> &nbsp; PPT
 </div>
</div>
<div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
 <div class="form-group">
     <input type="radio" class="minimal" name ="doc1"> &nbsp; XLS
 </div>
</div>
</div>
<div class="col-md-9 col-xs-12 col-lg-9 col-sm-12">
  <div class="form-group">
     <input id="product_formatid_0" style="display:none;" type="file" name="product_format[0]" onchange="formatValChange(0,this.value)" name="format_type[0]">
     <label>Upload</label>
     <div class="input-group">
      <input id="file_0" placeholder="Uplload Image" class="form-control" type="text" name="format_type[0]">

      <input name="format_type[0]" autofocus="autofocus" type="hidden">
      <span class="input-group-btn">
         <button class="browse btn btn-primary" type="button" onclick="document.getElementById('product_formatid_0').click();">
             Select File
         </button>
     </span>
 </div>
</div>

</div>
<!--				end-->
</div> 
</div>
<!--end-->
</div> 
<div id="productinfodiv"></div>

<!--------div for formats---------------->
<!--------tabs div for formats---------------->


<div class="spacediv" id=""></div>
<div class="row lbplus">
   <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
    <div class="form-group">





       <label>Add Tabs</label>	
   </div>
</div>
<?php      echo $this->Form->input('add_tabs', [
    'type' => 'radio',
    'label' => false,
    'options' => [
        ['value' => 'yes', 'text' => __('Yes'), 'class' => 'minimal'],
        ['value' => 'no', 'text' => __('No'), 'class' => 'minimal' , 'checked'],
    ],
    'templates' => [
        'inputContainer' => '{{content}}',
        'nestingLabel' => '<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group radio radio-primary">{{input}}<label{{attrs}}>{{text}}</label></div></div>',
        'radioWrapper' => '{{label}}'
    ]
]);
?>

</div>

<div class="stimings1" style="display:none" id="tabbinddivid">
   <div class="row">
       <div class="col-md-12 col-xs-12 col-lg-12 col-xs-12">
           <div class="form-group">
               <label>No. of tabs</label>
               <select class="form-control select2" style="width:100%;" id="selectbox" onchange="readTabs(this.value);">
                  <option value="">-Select Tab-</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
              </select>
          </div>	
      </div>
      <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6 paddtab">
        <div class="form-group">
            <span>
             <div class="spacediv clear-fix" id=""></div>
             <ul class="nav crm-tabs agents" id="appendivid">
             </ul>
         </span> 
     </div>
 </div>	 
 <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
    <div class="form-group">
        <label>Tab Name</label>
        <input type="text" class="form-control" id="TabNameInput" name="TabNameInput">
    </div>
</div>
<div class="col-md-12 col-xs-12 col-lg-12 col-xs-12">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="text-align:center;"> Select </th>
          <th>Field Type</th>
          <th>Field Name</th>
          <th>Format Name</th>
      </tr>
  </thead>
  <tbody id="entitiesContainer">
  </tbody>
</table>
</div>	 
</div>   

</div>	
<!--------tabs div for formats---------------->


<div class="box-footer" id="">
    <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
        <button type="submit" class="btn btn-primary btn1 center-block btn2">Reset</button>
    </div>
    <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
        <input id="info_2"  type="button" class="btn btn-primary btn1 center-block btn2 right-slide" value="Next2">
    </div>
</div>

<!--Add attributes ending here by vivek 27 nov 17------>

<?php echo $this->Form->end(); ?>

</div>




</div>
</section>

<div id="preview-code-myModal" class="modal fade" role="dialog">
  <div class="modal-dialog" style="width: -moz-fit-content;">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Preview</h4>
    </div>
    <div id="preview_img" class="modal-body bar-code-body" style="overflow-y: auto;">




     <div class="clearfix"></div>

 </div>




</div>
</div>
</div>

<?php //echo $this->element('add_brand'); ?>                    
<?php //echo $this->element('add_label'); ?>                    

