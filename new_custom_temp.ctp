<style>
    .sub_title_data
    {
        display: none;
    }
</style>

<div class="spacediv" id=""></div>

                           
        <?php echo $this->Form->create('customfields', ['url' => ['plugin' => 'GymApp', 'controller' => 'Gym', 'action' => 'addProduct'], "id" => "AddCustomForm",'enctype' => 'multipart/form-data', 'id' => 'CustomFieldForm']); ?>                          
           <div class="form-group counterCls" id="">
<!--              <i class="fa fa-info-circle" aria-hidden="true" title="User Can add attributes for prodcut like size,color option from dropdown Field type,user can add product info via input Field Type"></i> <label>Add Attribute *</label>-->
            </div>
            
			<div class="row" >	
					
		    	<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6">
			      <div class="form-group">
			       <label>Template</label>
                      <?php //echo $this->Gym->getAlltemplates('templates'); ?>
                      
                      <?php //echo $this->Form->input('template_name', ['options' => $templates, 'empty' => 'Choose', 'class' => 'form-control select2', 'label' => false]); ?>
                    <select class="form-control select2 selectCustomTemplate hookRequired" style="width:100%;" name="datatype[template]" counter-index="0">
                        <?php echo $this->cell('Hook.CommonHookFunction::getAllTemplates',['new']) ?>
                    </select>
		    	  </div>
			   </div>
			   
			<div class="col-md-6 col-lg-6 col-sm-6 col-xs-6 padd">
				
			<div class="form-group">
		    	<input type="text" class="form-control bdetailschk" placeholder="Enter Template Name" name="datatype[field_name]">
				
			</div>
			</div>
			  <span class="fa fa-plus-circle pmodal pull-right addattribute"style="cursor:pointer;font-size: 21px;"></span>
			</div>

					
            <div class="stimings2 vivekid" id="vivekid">
				
            <div class="row" id="">
            <div class="col-md-12 col-xs-12 col-lg-12 col-sm-12">
			   <div class="form-group">
               <label>Create Attribute</label>
                  <select class="form-control select2 bdetailschk" style="width:100%;"name="datatype[0][allowed_type]">
                  <option value="">Select</option>    
                  <option value="7">Dropdown</option>
                  <option value="6">Input</option>
                 </select>
               </div>
               

            
             <div class="form-group">
              <label>Attribute Name *</label>
            	<div class="form-group">
			<input type="text" class="form-control bdetailschk" placeholder="Please enter Attribute name" name="datatype[0][field_name]">
			    </div>
             </div>
          
             <div class="clearfix"></div>
          
            <div class="row "id="adddropmultiple_0">
                  <div class="col-md-11 col-lg-11 col-sm-10 col-xs-10 " >
                     <label> Value</label>
                      <div class="form-group">   
                      <input type="text"  class="form-control tab_2 bdetailschk" name="datatype[0][boxdata][]">
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
                 <input type="checkbox" value="1" class="minimal" name="datatype[0][format_drop][0]" >
                 <label for="CheckedAllProduct"><strong>Treat As A Separate Item</strong></label>
                 </div>
                 </div>
                   <div class="col-md-6 col-xs-6 col-sm-6 col-lg-6">
                  	 <div class="checkbox checkbox-primary">
                 <input type="checkbox" class="minimal" name="datatype[0][format_drop][2]" value="3" checked>
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
<!--
             <select class="form-control select2 bdetailschk" name="datatype[0][product_specification][allowed_type]" style="width:100%;">
             <option selected="selected">Input</option>
             <option>Dropdown</option>
            </select>
-->
             </div>
		
            <div class="form-group">
            <label>Heading Levels</label>
            <select class="form-control select2 tab_2 heading_level" name="datatype[0][product_specification][level]"  style="width:100%;">
             <option value="1" selected="selected">1</option>
             <option value="2">2</option>
		
            </select>
            </div>
<!-- Changes on 9jan18 start    -->
     <span class="fa fa-plus-circle pmodal1 appendsubtitle  pull-right" style="cursor:pointer;font-size: 17px;"></span>           
     <table class="table table-bordered table-striped table_specification">
         <thead>
             <tr>
                 <th style="text-align:center;"> Title </th>
                 <th class="sub_title_data" style="text-align:center;">Sub Title 1</th>
                 <th class="sub_title_data" style="text-align:center;">Input box Data</th>
             </tr>
        </thead>
        <tbody id="entitiesContainer">
            <tr class="tr_clone">
                <td>
                    <input type="text" name="datatype[product_specification][0][title_name]" class="form-control title-data vvv bdetailschk">
                </td>
                <td class="sub_title_data">
                    <input type="text" name="datatype[product_specification][0][field_name]" class="form-control subtitle-box bdetailschk">
                </td>
                <td class="sub_title_data">
                    <input type="text" name="datatype[product_specification][0][data]" class="form-control bdetailschk subtitle-data">
                </td>
                
            </tr>
        </tbody>
         
    </table>
                <span class="pull-left checkbox checkbox-primary"><input type="checkbox" value="1" class="minimal" id="CheckedAllProducts" name="CheckedAllProducts" >
                 <label for="CheckedAllProducts"><strong>Same as above</strong></label></span>
                <span class="fa fa-minus-circle hplus removesubtitle pull-right" style="cursor:pointer;font-size: 17px;padding-top: 14px;"></span>
                <div class="clearfix"></div>
                
<!-- Changes on 9jan18 end      -->
                
                
                
                
                
                
                
                
<!--
           <div class="form-group ">
            <label>Title</label>
			  <input type="text" name="datatype[0][product_specification][field_name]" class="form-control vvv bdetailschk">
			</div>
-->
<!--	 <span class="fa fa-plus-circle pmodal1  pull-right" style="cursor:pointer;font-size: 17px;display:none;" onclick="addHeadings(0)"></span>	-->
             <div class="clearfix"></div>
			<!----add subtitle field start here--->
			
<!--		    <div class="stimings1 add_subtitle"  style="display:none;">-->
<!--
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
-->
<!--			</div>	-->
<!--			<div id="addsubtitle_0"></div>-->
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
            <input type="text" class="form-control bdetailschk" name="datatype[0][product_specification][field_name]" id="product_information_0">
            </div>
			   <div class="form-group">
             <label>Format Type *</label>
            <select class="form-control select2 selectformat bdetailschk" style="width:100%;" id="selectbox_0"  onchange="formatChange(0,this.value)" name="datatype[0][media][allowed_type]">
                 
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
            <input type="radio" class="minimal" name ="datatype[0][media][format]" checked> &nbsp; MP3
            </div>
            </div>
            
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
             <input type="radio" class="minimal" name ="datatype[0][media][format]"> &nbsp; AMR
            </div>
            </div>
             <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
             <input type="radio" class="minimal" name ="datatype[0][media][format]"> &nbsp; WMV
            </div>
            </div>
           
            <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4">
             <div class="form-group">
             <input type="radio" class="minimal" name ="datatype[0][media][format]"> &nbsp; AAC 
            </div>
            </div>
            </div>
				
<!--			for video-->
				
<!--
		 <div class="row lbplus2" id="videoformat_0" style="display:none">
            <div class="col-md-3 col-lg-3 col-xs-3 col-sm-">
            <div class="form-group">
             <label>Format</label>
            </div>
            </div>
          <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
            <div class="form-group">
            <input type="radio" class="minimal" value="3gp" name ="aaaaa" > &nbsp; 3GP
            </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
             <div class="form-group">
             <input type="radio" value="mp4" class="minimal" name ="aaaaa"> &nbsp; MP4
            </div>
            </div>
            <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">
             <div class="form-group">
             <input type="radio" class="minimal" name ="aaaaa"> &nbsp; Youtube
            </div>
            </div>
            </div>
-->
				
<!--				end-->
<!--				for image-->
<!--
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
-->
				
<!--				end-->
<!--				for doc-->
<!--
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
                   
-->
                <div class="col-md-9 col-xs-12 col-lg-9 col-sm-12">
                  <div class="form-group">
                 <input id="product_formatid_0" style="display:none;" type="file" name="datatype[0][media][file]" onchange="formatValChange(0,this)">
                 <label>Upload</label>
                        <div class="input-group">
                          <input id="file_0" placeholder="Upload" class="form-control" type="text" name="datatype[0][media][file_name]">
                            
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
                                        ['value' => 'yes', 'text' => __('Yes'), 'class' => 'minimal','data-toggle' => 'modal', 'data-target' => '#myModalhook4'],
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
			
<!--
		   <div class="stimings1" style="display:none" id="tabbinddivid">
			<div class="row">
			<div class="col-md-12 col-xs-12 col-lg-12 col-xs-12">
			<div class="form-group">
			<label>No. of tabs</label>
					 <select class="form-control select2" name="tabcount" style="width:100%;" id="selectbox" onchange="readTabs(this.value);">
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
-->
             
<!--------tabs div for formats---------------->
              
             
                 <div class="box-footer" id="">
                <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
                <button type="submit" class="btn btn-primary btn1 center-block btn2">Reset</button>
                </div>
               <div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
<!--                <input id="info_2"  type="button" class="btn btn-primary btn1 center-block btn2 right-slide" value="Next2">-->
                   <input id="info_2"  type="submit" class="btn btn-primary btn1 center-block btn2 right-slide" value="save">
				  </div>
					</div>
					
 <!--Add attributes ending here by vivek 27 nov 17------>
                   
                   <?php echo $this->Form->end(); ?>

            <!----modal is start here------>
 <div class="modal fade" id="myModalhook4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-target="#myModal2" >
        <div class="modal-dialog mwidth1" role="document">
        <div class="modal-content">
           <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title hcenter" id="myModalLabel"> Hook</h4>
               </div>
            <div class="modal-body">
             
<!--         form start heare    -->
		   <div class="stimings1" style="" id="tabbinddivid">
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
                   </div>
          </div>
        </div>
    </div>
<!----modal is ends here------> 