<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Gym App</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="shortcut icon" type="image/png"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/videoappicons/fevicon.png"/>
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>video_app_webroot/custom_css/custom.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <!-- iCheck -->
    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/iCheck/square/blue.css">

    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/dist/css/skins/skin-blue.min.css"/>
    <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>video_app_webroot/dist/css/AdminLTE.min.css">
    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/bootstrap/css/bootstrap.min.css"/>

    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="<?php echo $this->request->webroot; ?>video_app_webroot/scrollbar/scroll.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css">

    <!--vivek styles addon-->
    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/dist/cvv/assets/css/styles.css"/>
    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/dist/css/skins/_all-skins.min.css"/>
    <link rel="stylesheet"
    href="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/select2/select2.min.css"/>
    <?php  // echo $this->Html->css('datepicker3');
    echo $this->Html->css('daterangepicker'); ?>
    <link rel="stylesheet" href="<?php // echo $this->request->webroot; ?>video_app_webroot/dropzone/dropzone.min.css"/>
    <!--vivek styles addon ends-->
    <style>


    .modal::before {
        content: "";
        display: inline-block;
        height: 100%;
        margin-right: -4px;
        vertical-align: middle;
    }

    .modal-dialog {
        display: inline-block;
        text-align: left;
        vertical-align: middle;
    }

    .modal {
        text-align: center;
    }

    .error-message {

        color: red;
    }

    .checkbox {
        padding-left: 20px;
    }

    .checkbox label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
    }

    .checkbox label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 3px;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
        transition: border 0.15s ease-in-out, color 0.15s ease-in-out;
    }

    .checkbox label::after {
        display: inline-block;
        position: absolute;
        width: 16px;
        height: 16px;
        left: 0;
        top: 0;
        margin-left: -20px;
        padding-left: 3px;
        padding-top: 1px;
        font-size: 11px;
        color: #555555;
    }

    .checkbox input[type="checkbox"] {
        opacity: 0;
    }

    .checkbox input[type="checkbox"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    .checkbox input[type="checkbox"]:checked + label::after {
        font-family: 'FontAwesome';
        content: "\f00c";
    }

    .checkbox input[type="checkbox"]:disabled + label {
        opacity: 0.65;
    }

    .checkbox input[type="checkbox"]:disabled + label::before {
        background-color: #eeeeee;
        cursor: not-allowed;
    }

    .checkbox.checkbox-circle label::before {
        border-radius: 50%;
    }

    .checkbox.checkbox-inline {
        margin-top: 0;
    }

    .checkbox-primary input[type="checkbox"]:checked + label::before {
        background-color: #428bca;
        border-color: #428bca;
    }

    .checkbox-primary input[type="checkbox"]:checked + label::after {
        color: #fff;
    }

    .checkbox-danger input[type="checkbox"]:checked + label::before {
        background-color: #d9534f;
        border-color: #d9534f;
    }

    .checkbox-danger input[type="checkbox"]:checked + label::after {
        color: #fff;
    }

    .checkbox-info input[type="checkbox"]:checked + label::before {
        background-color: #5bc0de;
        border-color: #5bc0de;
    }

    .checkbox-info input[type="checkbox"]:checked + label::after {
        color: #fff;
    }

    .checkbox-warning input[type="checkbox"]:checked + label::before {
        background-color: #f0ad4e;
        border-color: #f0ad4e;
    }

    .checkbox-warning input[type="checkbox"]:checked + label::after {
        color: #fff;
    }

    .checkbox-success input[type="checkbox"]:checked + label::before {
        background-color: #5cb85c;
        border-color: #5cb85c;
    }

    .checkbox-success input[type="checkbox"]:checked + label::after {
        color: #fff;
    }

    .radio {
        padding-left: 20px;
    }

    .radio label {
        display: inline-block;
        position: relative;
        padding-left: 5px;
    }

    .radio label::before {
        content: "";
        display: inline-block;
        position: absolute;
        width: 17px;
        height: 17px;
        left: 0;
        margin-left: -20px;
        border: 1px solid #cccccc;
        border-radius: 50%;
        background-color: #fff;
        -webkit-transition: border 0.15s ease-in-out;
        -o-transition: border 0.15s ease-in-out;
        transition: border 0.15s ease-in-out;
    }

    .radio label::after {
        display: inline-block;
        position: absolute;
        content: " ";
        width: 11px;
        height: 11px;
        left: 3px;
        top: 3px;
        margin-left: -20px;
        border-radius: 50%;
        background-color: #555555;
        -webkit-transform: scale(0, 0);
        -ms-transform: scale(0, 0);
        -o-transform: scale(0, 0);
        transform: scale(0, 0);
        -webkit-transition: -webkit-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -moz-transition: -moz-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        -o-transition: -o-transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
        transition: transform 0.1s cubic-bezier(0.8, -0.33, 0.2, 1.33);
    }

    .radio input[type="radio"] {
        opacity: 0;
    }

    .radio input[type="radio"]:focus + label::before {
        outline: thin dotted;
        outline: 5px auto -webkit-focus-ring-color;
        outline-offset: -2px;
    }

    .radio input[type="radio"]:checked + label::after {
        -webkit-transform: scale(1, 1);
        -ms-transform: scale(1, 1);
        -o-transform: scale(1, 1);
        transform: scale(1, 1);
    }

    .radio input[type="radio"]:disabled + label {
        opacity: 0.65;
    }

    .radio input[type="radio"]:disabled + label::before {
        cursor: not-allowed;
    }

    .radio.radio-inline {
        margin-top: 0;
    }

    .radio-primary input[type="radio"] + label::after {
        background-color: #428bca;
    }

    .radio-primary input[type="radio"]:checked + label::before {
        border-color: #428bca;
    }

    .radio-primary input[type="radio"]:checked + label::after {
        background-color: #428bca;
    }

    .radio-danger input[type="radio"] + label::after {
        background-color: #d9534f;
    }

    .radio-danger input[type="radio"]:checked + label::before {
        border-color: #d9534f;
    }

    .radio-danger input[type="radio"]:checked + label::after {
        background-color: #d9534f;
    }

    .radio-info input[type="radio"] + label::after {
        background-color: #5bc0de;
    }

    .radio-info input[type="radio"]:checked + label::before {
        border-color: #5bc0de;
    }

    .radio-info input[type="radio"]:checked + label::after {
        background-color: #5bc0de;
    }

    .radio-warning input[type="radio"] + label::after {
        background-color: #f0ad4e;
    }

    .radio-warning input[type="radio"]:checked + label::before {
        border-color: #f0ad4e;
    }

    .radio-warning input[type="radio"]:checked + label::after {
        background-color: #f0ad4e;
    }

    .radio-success input[type="radio"] + label::after {
        background-color: #5cb85c;
    }

    .radio-success input[type="radio"]:checked + label::before {
        border-color: #5cb85c;
    }

    .radio-success input[type="radio"]:checked + label::after {
        background-color: #5cb85c;
    }
    label.error{
        color: red;
        font-weight: normal;
    }
    .center-block-div {
       display: block;
       margin-right: auto;
       margin-left: auto;
       width: 53%;
       padding: 0 0 0 0%;
   }
   .input-plus {
      width: 94%;
      float: left;
  }
  .fa.fa-plus.plus {
   text-align: center;
   float: right;
   cursor: pointer;
   vertical-align: middle;
   margin: 10px 0;
}
.form-group.custom-sp {
	margin-top: 12px;
}

.file-up input{
	width: 81%;
}

.file-up button{
	width: 19%;
}


.content {
    min-height: 0px;
    padding: 0px;
    padding-top: 0px;
    padding-right: 15px;
    padding-bottom: 0px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    padding-left: 15px;
    padding-right: 15px;
}


.form-group.has-success .form-control, .form-group.has-success .input-group-addon {
    border-color: #00a65a;
    box-shadow: none;
}
.padd-zero{
	padding: 0;
}
.text-area-wide{
	width: 100%;
	border:1px solid #ccc;
}
.btn-primary.save {
	width: 20%;
	margin: 25px auto 0;
}
.cust-btn {
    width: 166.67px;
    margin-top: 37px;
    margin-bottom: 15px;

}
.box-body {
	padding-top: 0;
	padding-bottom: 0;
}
.form-group.rad-right {
	float: right;
	width: 100px;
}
.marg-bott{
	margin-bottom: 15px;
}
.two-btn-block {
	width: 100%;
	margin: 0 auto;
	float: left;
	text-align: center;
}
.two-btn button {
	width: 166.67px;
	margin: 2% 2% 3%;
}
.right-align .form-group {
	width: 102px;
	text-align: left;
}

/*--------------skew div--------------------*/

div.box-tools.pull-right {
  height: 100%;
  position: relative;
  overflow: hidden;
  width: 170px;
  right: 1px !important;
  top: 0px;
  height: 32px;
}
/*end*/
div.box-tools.pull-right::before {
	content: '';
	position: absolute;
	top: 0;
	right: 0;
	width: 169px;
	height: 100%;
	background-color: #3C8DBC;
	-webkit-transform-origin: 100% 100%;
	-ms-transform-origin: 100% 100%;
	transform-origin: 100% 100%;
	-webkit-transform: skewX(-25deg);
	-ms-transform: skewX(-25deg);
	transform: skewX(-25deg);
}
/*css added by afjal*/
.box-header.with-border1
{
	border-bottom: 1px solid #F26D0E;
}

div.box-tools.orange.pull-right::before {

	background-color: #F26D0E;

}
.nav-tabs-custom > .nav-tabs > li.active
{
	border-top-color: #3c8dbc;
}


.nav-tabs-custom > .orange > li.active {
    border-top-color: #F26D0E !important;
}
/*end*/
.box-tools-text {
	position: absolute;
	right: 20px;
	font-size: 14px;
	color: #fff;
	top: 6px;
	font-weight: 500;
	width: 137px;
	text-align: center;
}
.btn-box-tool.cust {
	padding: 5px;
	font-size: 12px;
	background: transparent;
	color: #fff;
	z-index: 999999999;
	position: inherit;
	float: right;
	margin: 1px 2px;
}
.box-header.with-border {
	border-bottom: 1px solid #3C8DBC;
}
.manage
{
  border:1px solid #3c8dbc !important;margin-right: 5px;background-color: #3c8dbc !important; color: #fff;
}
.check-sec{
	margin: 0 !important;
}
.check-sec .minimal {
	margin: 0 2px;
}
.padd-zero{
	padding: 0;
}
.ex-search{
	height: 30px;
}
.spacekatie.height{
	height: 185px;
}
.helpdesk-tb{
	font-size: 12px;
}

.selection--not_border .select2-container--default .select2-selection--single, .selection--not_border .select2-selection .select2-selection--single {
	border: 0px solid #d2d6de;
	border-radius: 0;
	padding: 6px 0px;
	height: 34px;
	/* color: blue; */
}

.selection--not_border .select2-container--default .select2-selection--single .select2-selection__rendered {
	color: #3c8dbc;
	line-height: 28px;
	font-weight: 600;
}

.select-box select {
	border: none;
	background: transparent;
	-webkit-appearance: none;
	-moz-appearance: none;
	background: url('../images/drop-down-arrow_old.png') no-repeat right;
	background-size: 10px;
	padding: 0 10px 0 0px;
}

.answered {
	color: green;
}

/*--------------Agents page css---------------*/

.nav.crm-tabs.agents li {
  float: left;
  margin: 0 3px;
}

.crm-tabs.agents a {
	background: #3C8DBC;
	color: #fff;
	border-radius: 3px;
	padding: 4px 35px !important;
	font-size: .9em;
	margin: 0 0;
	border: 1px solid transparent;
}

.crm-tabs.agents > li.active > a, .crm-tabs.agents > li > a:hover{
  border: 1px solid #3C8DBC;
  background: none;
  color: #3C8DBC;
}

.crm-tabs.export-chat {
	width: 100%;
	margin: 0 auto 0px;
}
.crm-tabs.export-chat a {
	background: #3C8DBC;
	color: #fff;
	border-radius: 3px;

	font-size: .9em;
	margin: 0 0;
	border: 1px solid transparent;
}

.row.space-top {
	margin-top: 12px;
}
/*--------------//Agents page css---------------*/

/*-----------agent genral settings-----------------------*/
.agent-sig > p {
    margin: 3px 0;
}
.agent-sig {
	border: 1px solid #ccc;
	height: 77px;
	padding: 0px 10px;
}
.timing-label{
	font-size: 13px;
}
.timing-label b{
	font-weight: 800;
}
.timing-label a{
    text-decoration: underline;
    font-size: 14px;
}
.agent-sett .form-group {
	margin-bottom: 20px;
}
.eve-ent {
	color: #787E7E;
	top: 0;
	text-align: center;
	font-size: 35px;
	font-weight: 700;
	margin: 164px 0 200px;
}
.plus-div .fa-plus {
	float: left !important;
	display: inline-block;
	margin-top: 33px !important;
}
.plus-div {
	padding: 0;
	text-align: left;
	float: left;
}
.macros-sec {
	height: 440px;
}
.add-now-mac {
	width: 335px;
	border: 1px solid #ccc;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-35%);
	padding: 13px 25px 20px;
}

.add-now-mac> div:nth-child(1) {
  width: 20%;
  float: left;
  text-align: center;
}
.add-now-mac > div:nth-child(2) {
  float: left;
  width: 80%;
}
.add-now-mac .fa-plus {
  color: #fff;
  background: #3C8DBC;
  height: 40px;
  width: 40px;
  border-radius: 30px;
  vertical-align: middle;
  padding: 13px 0 0 3px;
  font-size: 18px;
  text-align: center;
  margin: 17px 20px 0 0 !important;
  display: inline-block;
  float: left;
}
.add-now-mac h2 {
  line-height: .5;
  font-size: 23px;
}
.add-now-mac p {
	color:#7a7676;
}
.plus-div.padd-left{
	padding-left: 15px;
}
.wrench-drop .dropdown-menu {
	right: 0 !important;
	left: auto;
}
.search-input {
	width: 161px;
	background: url('../images/search.png') no-repeat 96%;
}
.table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th{
	vertical-align: middle;
}
.form-group.sp-right label {
	margin: 7px 0 0 9px;
}
.to-text {
	padding: 6px 0;
}
.report-btn .btn{
	padding: 5px 12px;
}
/*---------------------------**afjal export chat------------------------------------*/

.search1
{
  margin-top:12px;


}
.fonts
{
  font-size: 16px;
  margin-top:10px;
  color:#ccc;
}
.fonts1
{
  font-size: 16px;
  vertical-align: middle;
  padding-top: 10px;
}
.lbl

{
  margin-top:7px;
  margin-bottom:0;
}
.msg
{
  margin: 10px 0 0px;
}
.chat
{
  margin-top:-60px;margin-bottom: 10px;
}
.fonts:hover
{
  font-size: 16px;
  margin-top:10px;
  color:#333;
  cursor: pointer;
}
.ucolor
{
  background: #ECFEE4;
}
.acolor
{
  background: #E5F8FF;
}
.lucolor
{
  background: #FDC763;
  color:white;
}
.lucolor a
{
  color:white;
}
.fcheck
{
  background: grey;border-radius: 50px;vertical-align: middle;font-size:20px;margin-top:10px;color:white;height:20px;width: 20px;font-weight:normal
}
.fcheck1 {
	background: #8FC16C;
	border-radius: 50px;
	vertical-align: middle;
	font-size: 10px;
	margin-top: 0px;
	color: #8FC16C;
	height: 10px;
	width: 10px;
	font-weight: normal;
	margin: 0 0 0 6px;
}
.spacekatie {
	box-shadow: 1px 1px 2px 1px #ddd;
	padding: 5px;
	width: 100%;
	margin: auto;
	border: 1px solid #ccc;
}
.filter {
	position: absolute;
	float: right;
	margin-top: -22px;
	font-size: 15px;
	color: #8E8E8E;
	left: 80%;
	clear: both;
}
.gridicon {
	width: 20px;
	height: 20px;
	margin-top: 17px;
}

@media screen and (min-width: 1920px) {
    .chat {
        margin-top: -80px;
        margin-bottom: 10px;
        padding-left: 15px;
    }
    .gridicon {
       width: auto;
       height: 20px;
       margin-top: 18px;
   }
}
/*---------------------------//afjal export chat------------------------------------*/

/*-------------------x-editable icon----------------------*/

/*
.icon-ok{background-position:-288px 0;}
.icon-ok-sign{background-position:-72px -96px;}
.icon-ok-circle{background-position:-192px -96px;}
.icon-white,.nav-pills>.active>a>[class^="icon-"],.nav-pills>.active>a>[class*=" icon-"],.nav-list>.active>a>[class^="icon-"],.nav-list>.active>a>[class*=" icon-"],.navbar-inverse .nav>.active>a>[class^="icon-"],.navbar-inverse .nav>.active>a>[class*=" icon-"],.dropdown-menu>li>a:hover>[class^="icon-"],.dropdown-menu>li>a:focus>[class^="icon-"],.dropdown-menu>li>a:hover>[class*=" icon-"],.dropdown-menu>li>a:focus>[class*=" icon-"],.dropdown-menu>.active>a>[class^="icon-"],.dropdown-menu>.active>a>[class*=" icon-"],.dropdown-submenu:hover>a>[class^="icon-"],.dropdown-submenu:focus>a>[class^="icon-"],.dropdown-submenu:hover>a>[class*=" icon-"],.dropdown-submenu:focus>a>[class*=" icon-"]{background-image:url("../img/glyphicons-halflings-white.png");}
*/

/*-------------------x-editable icon----------------------*/
.spacediv2{
	margin-top: 15px;
	margin-bottom: 15px;
}

/*----------------graph page css--------------------------*/

.bar-tabs {
  width: 100%;
  float: left;
  padding: 0 0 0 30px;
}
.bar-tabs li {
  float: left;
  width: 16%;
  list-style: none;
  /*! margin: 0 11% 0 0%; */
  text-align: center;
}
.bar-tabs li > button {
  width: 100%;
}


/*-----------------------live chat css----------------------------*/
.top-space {
	margin: 25px 0 0;
}

.chat_window {
	width: 100%;
	max-width: 800px;
	height: 819px;
	border-radius: 10px;
	background-color: rgba(255, 255, 255, 0.67);
    /*	box-shadow: 0 10px 20px rgba(0, 0, 0, 0.15);*/
    background-color: #f8f8f8;
    overflow: hidden;
}

.top_menu {
	background-color: #fff;
	width: 100%;
	padding: 0;
	height: 43px;
	box-shadow: 0 1px 30px rgba(0, 0, 0, 0.1);
}
.top_menu .buttons {
  margin: 3px 0 0 20px;
  position: absolute;
}
.top_menu .buttons .button {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  display: inline-block;
  margin-right: 10px;
  position: relative;
}
.top_menu .buttons .button.close {
  background-color: #f5886e;
}
.top_menu .buttons .button.minimize {
  background-color: #fdbf68;
}
.top_menu .buttons .button.maximize {
  background-color: #a3d063;
}
.top_menu .title {
	text-align: center;
	color: #0c0c0c;
	font-size: 15px;
	font-weight: 600;
}
.top_menu.text-center {
	font-size: 12px;
	color: #a8a5a5;
	border-bottom: 1px solid rgba(204, 204, 204, 0.55);
}

.messages {
  position: relative;
  list-style: none;
  padding: 20px 10px 0 10px;
  margin: 0;
  background: #fff;
/*
  height: 393px;
  overflow: scroll;
  */
}
.messages .message {
  clear: both;
  overflow: hidden;
  margin-bottom: 20px;
  transition: all 0.5s linear;
  /*  opacity: 0;*/
}
.messages .message.left .avatar {
  background-color: #ccc;
  float: left;
}
.messages .message.left .text_wrapper {
  background-color: #EDF2F6;
  margin-left: 20px;
}
.messages .message.left .text_wrapper::after, .messages .message.left .text_wrapper::before {
  right: 100%;
  border-right-color: #EDF2F6;
}
.messages .message.left .text {
  color: #353535;
}
.messages .message.right .avatar {
  background-color: #3C8DBC;
  float: right;
}
.messages .message.right .text_wrapper {
  background-color: #00A8FF;
  margin-right: 20px;
  float: right;
}
.messages .message.right .text_wrapper::after, .messages .message.right .text_wrapper::before {
  left: 100%;
  border-left-color: #00A8FF;
}
.messages .message.right .text {
  color: #fff;
}
.messages .message.appeared {
  opacity: 1;
}
.messages .message .avatar {
  width: 40px;
  height: 40px;
  border-radius: 50%;
  display: inline-block;
  margin-top: 10px;
}
.messages .message .text_wrapper {
  display: inline-block;
  padding: 20px;
  border-radius: 6px;
  width: calc(100% - 85px);
  min-width: 100px;
  position: relative;
}
.messages .message .text_wrapper::after, .messages .message .text_wrapper:before {
  top: 18px;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}
.messages .message .text_wrapper::after {
  border-width: 13px;
  margin-top: 0px;
}
.messages .message .text_wrapper::before {
  border-width: 15px;
  margin-top: -2px;
}
.messages .message .text_wrapper .text {
  font-size: 14px;
  font-weight: 400;
}

.bottom_wrapper {
  position: relative;
  width: 100%;
  background-color: #fff;
  padding: 20px 20px;
  position: absolute;
  bottom: 0;
  border-top: 1px solid rgba(204, 204, 204, 0.55);
}
.bottom_wrapper .message_input_wrapper {
	display: inline-block;
	height: 75px;
	/* border-radius: 25px; */
	border: 1px solid #bcbdc0;
	width: calc(100% - 155px);
	position: relative;
	padding: 5px 9px;
}
.bottom_wrapper .message_input_wrapper .message_input {
	border: none;
	height: 93%;
	box-sizing: border-box;
	width: calc(100% - 9px);
	position: absolute;
	outline-width: 0;
	color: gray;
	resize: none;
}
.bottom_wrapper .send_message {
	width: 140px;
	height: 40px;
	display: inline-block;
	/* border-radius: 50px; */
	background-color: #3c8dbc;
	border: 2px solid #3c8dbc;
	color: #fff;
	cursor: pointer;
	transition: all 0.2s linear;
	text-align: center;
	float: right;
	margin-top: 17px;
}
.bottom_wrapper .send_message:hover {
   color: #3c8dbc;
   background-color: #fff;
}
.bottom_wrapper .send_message .text {
	font-size: 17px;
	font-weight: 400;
	display: inline-block;
	line-height: 34px;
}

.message_template {
  display: none;
}


.chat-user--head {
	width: 100%;
	float: left;
	border-bottom: 1px solid #ccc;
	padding: 4px 0;
}
.chat-user--head >div {
  float: left;
}
.chat-user--head > div:nth-child(1) {
	width: 10%;
}
.chat-user--head > div:nth-child(2) {
	width: 80%;
	text-align: center;
	padding: 6px 0 8px;
}
.chat-user--head > div:nth-child(3) {
	width: 10%;
	padding: 1px 0;
}
.chat-user--head > .hiddeen {
	visibility: hidden;
}
.chat-user--head .glyphicon.glyphicon-pencil {
	font-size: 12px;
	font-weight: 500;
	color: #777;
	cursor: pointer;
}
.chat-user {
	float: left;
	width: 100%;
	list-style: none;
	padding: 0;
	margin: 0;
}
.chat-user > li {
	width: 100%;
	padding: 7px 4px 0;
	float: left;
}
.chat-user > li > a > div:nth-child(1) {
	width: 15%;
	float:left;
}
.chat-user > li > a > div:nth-child(2) {
	width: 65%;
	float: left;
	padding: 0 7px;
}
.chat-user > li > a > div:nth-child(3) {
	width: 20%;
	float:left;
}
.chat-user li.active, .chat-user li:hover{
	background: #EDF2F6;
}
.u-online {
	background: green;
	display: inline-block;
	height: 7px;
	width: 7px;
	border-radius: 50%;
	vertical-align: middle;
	margin: 0 3px 0px;
}

.chat-user > li > a > div h4 {
	margin: 0;
	font-size: 14px;
	font-weight: 600;
	color: #333;
}
.chat-user > li > a > div p {
	font-size: 13px;
	font-weight: 600;
	color: #ccc;
}
.chat-user > li > a > div:nth-child(3) p{
	line-height: .5;
}
.chat-log {
	background: red;
	height: 18px;
	width: auto;
	display: table-cell;
	color: #fff;
	border-radius: 14px;
	vertical-align: middle;
	text-align: center;
	min-width: 18px;
	padding: 0 4px;
}
.content_pro_set_feature.user-chat-sec {
	min-height: 759px;
	max-height: 759px;
	background: rgba(255, 255, 255, 0.67);

}
.email-color {
	color: #00A8FF;
}
/*---------------------file sending page-----------------*/
.label-text {
	padding: 0 0 0 10px;
}
.fa-play.pos {
	position: absolute;
	top: 10px;
	right: -10px;
	cursor: pointer;
	color: gray;
}
.text-center
{
    text-align: justify;
    padding:8px 46px;
}
.box-header {
    background-color:white;
}
.box-header.with-border {
    border-bottom: 1px solid #f4f4f4;
}
.box-header {
    color: #444;
    display: block;
    margin-bottom: 18px;
    padding: 10px;
    position: relative;
}
.cbuttonpop {
    margin-left: 0px;
    width: 145px;
}

</style>
</head>

<body class="hold-transition skin-blue sidebar-mini login-page">
    <div class="wrapper">

        <?php echo $this->element('header'); ?>
        <?php echo $this->element('left_panel'); ?>

        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Gym
                    <small>Application</small>
                </h1>
                <?php // pr($this->request->session()->read()); ?>
            <!-- <ol class="breadcrumb">
                 <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
                 <li class="active">Here</li>
             </ol> -->
         </section>
         <!-- Main content -->
         <section class="content">
            <?php echo $this->fetch('content'); ?>
        </section>
        <!-- /.content -->
    </div>
    <?php echo $this->element('footer'); ?>
</div>

<script src="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/jQuery/jquery-2.2.3.min.js"></script>
<?php echo $this->Html->script('validation/jquery.validate'); ?>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/iCheck/icheck.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/dist/js/app.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/js/jquery.slimscroll.min.js"></script>
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/is_loading_master/src/loadingoverlay.min.js"></script>
<script src="<?php // echo $this->request->webroot; ?>video_app_webroot/dropzone/dropzone.min.js"></script>

<?php echo $this->Html->script('jqueryck/ckeditor');
echo $this->Html->script('jqueryck/adapters/jquery');
echo $this->Html->script('jquery-ui.min');
echo $this->Html->script('moment.min');
echo $this->Html->script('daterangepicker');
//echo $this->Html->script('bootstrap-datepicker');
echo $this->Html->script('jscolor');
?>


<!--
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/bootstrap/js/bootstrap-datepicker.js"></script>
<script src="<?php echo $this->request->webroot; ?>video_app_webroot/bootstrap/js/daterangepicker.js"></script>

-->
<link rel="stylesheet" type="text/css" href="<?php echo $this->request->webroot; ?>video_app_webroot/tooltip/css/tooltipster.bundle.min.css" />



<script>


    var validation = {
        'image': ['jpg', 'jpeg', 'png'],
        'image_validation': 3000,
        'video': ['mp4', '3gp', 'avi'],
        'video_validation': 5120
    };


    $(function () { 

  //$(".select2").select2();
  <!----script add vivek  get custom date revenues------>
  var start = moment().subtract(29, 'days');
  var end = moment();
  function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    var tabletype = $('#reportid').val();
    var start_date = start.format('YYYY-MM-DD');
    var end_date = end.format('YYYY-MM-DD');
}
$('#reportrange').daterangepicker({
    startDate: start,
    endDate: end,
    minDate: moment().subtract(1, 'years'),
    maxDate: moment().subtract(0, 'Days'),
    ranges: {
        'Today': [moment(), moment()],
        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
        'This Month': [moment().startOf('month'), moment().endOf('month')],
        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    }
}, cb);
cb(start, end);
$('body').on('click', '.rangepick', function () {
   var start = moment().subtract(29, 'days');
   var end = moment();
   function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
}
$('#reportrange').daterangepicker({
    startDate: start,
    endDate: end,
    minDate: moment().subtract(1, 'years'),
    maxDate: moment().subtract(0, 'Days'),
    ranges: {
     'Today': [moment(), moment()],
     'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
     'Last 7 Days': [moment().subtract(6, 'days'), moment()],
     'Last 30 Days': [moment().subtract(29, 'days'), moment()],
     'This Month': [moment().startOf('month'), moment().endOf('month')],
     'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
 }
}, cb);
function cb(start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    var tabletype = $('#reportid').val();
    var start_date = start.format('D-M-Y');
    var end_date = end.format('D-M-Y');
    $.ajax({
        url: '<?php echo $this->Url->build(['plugin'=>'GymApp', 'controller'=>'Gym', 'action'=>'getRevenueBydate']); ?>',
        type: 'post',
        data: {'period': 'custom', 'start_date': start_date, 'end_date': end_date},
        success: function (result) {
            $("#tableid").html(result);
        }
    });
}

});

<!----script add vivek  get custom date revenues------>	




$('.tooltip').tooltipster();

$('#AddVideoForm').validate({
    ignore: "",
    rules: {
        parent_id: "required",
        product_parent_id: "required",
        title: "required",
        youtube_link: {
            required: {
                depends: function (element) {
                  if(!$(element).val() && $("#video-format-youtube").prop('checked'))
                     return true;
             }
         }
     },
     video_file_placeholder:{
        required: {
            depends: function (element) {


                if(!$('input[name=video_file_placeholder][disabled=disabled]').val() && $("#video-format-custom").prop('checked'))
                    return true;

            }
        }
    }
},messages:{
    'parent_id':'Please enter a Category name',
    'product_parent_id':'Please enter a sub category name',
    'title':'Please enter a video title',
    'youtube_link':'Please enter a video link',
    'video_file_placeholder':'Please enter a video file',
}
});
$("#AddCategoryForm").validate({
    rules: {
        parent_id: "required",
        title: "required",
    },messages:{
        'parent_id':'Please select a Category name',
        'title':'Please enter a sub category name',
    }
});



$('body').on('click', '.AddBlocks', function (e) {
    var url = '<?php echo $this->Url->build(['controller'=>'Gym','action'=>'addInstance']); ?>';
    $.ajax({
        url: url,
        type: 'post',
        beforeSend: function () {
        }, success: function (res) {
            $('#BlockAddContainer').html(res);
            $('#BlockAddContainer').modal('show');
//                    $('#instanceAddContainer').LoadingOverlay("show");
}, complete: function () {

}, error: function () {

}
});

});
$('body').on('click', '.EditInstance', function (e) {

    e.preventDefault();
    var url = '<?php echo $this->Url->build(['controller'=>'Gym','action'=>'editInstance']); ?>';
    $.ajax({
        url: url,
        type: 'post',
        data: {'id': $(this).attr('id')},
        beforeSend: function () {
            $('#BlockAddContainer').find('.modal-dialog.modal-sm').LoadingOverlay("show");
        }, success: function (res) {


            $('#BlockAddContainer').html(res);
            $('#BlockAddContainer').modal('show');


        }, complete: function () {
            $('#BlockAddContainer').find('.modal-dialog.modal-sm').LoadingOverlay("hide");
        }, error: function () {
            $('#BlockAddContainer').find('.modal-dialog.modal-sm').LoadingOverlay("hide");
        }
    });

});
$('body').on('submit', '#AddInstanceForm', function (event) {

    var instanceFormData = new FormData($("form#AddInstanceForm")[0]);
    var formobj = $(this);
    var instanceID = $("#instance_id").val();
    var instanceValue = $("#instance_title").val();
    $.ajax({
        url: $(formobj).attr('action'),
        type: 'post',
        data: instanceFormData,
                processData: false, // tell jQuery not to process the data
                contentType: false, // tell jQuery not to set contentType
                beforeSend: function () {
                    $('#BlockAddContainer').find('.modal-dialog.modal-sm').LoadingOverlay("show");
                }, success: function (res) {
                    $('#BlockAddContainer').html(res);
                }, complete: function () {
                    setTimeout(function () {

                        $('#data-row-' + instanceID).LoadingOverlay("show");
                        $('#data-title-' + instanceID).text(instanceValue);
                        $('#data-row-' + instanceID).LoadingOverlay("hide");
                    },500);
                }
            });
    event.preventDefault();
});
$('body').on('change', 'select[name=parent_id]', function () {
    var page_title = $("select[name=parent_id] option:selected").text();
    $(this).closest('.form-group').find("input[name=page_title]").val(page_title);

    $.ajax({
        url: '<?php echo $this->Url->build(['action'=>'getInstanceCategoryByAjax','controller'=>'Gym','plugin'=>'GymApp']); ?>',
        type: "post",
        data: {'id': $(this).val()},
        beforeSend: function () {
            $('#instance_category_container').LoadingOverlay("show");
        }, success: function (res) {

            setTimeout(function () {
                $('#instance_category_container').LoadingOverlay("hide");
                $("#instance_category_container").html(res);
            }, 500);


        }, complete: function () {

        }, error: function () {
            $('#instance_category_container').LoadingOverlay("hide");

        }
    })


});


        /**
         * @Image Upload Handler Script Start
         */
         $('body').on('click', '.browse_media', function () {
            $(this).prev().trigger('click');
        });
         $('body').on('change', '.browse_media_handler', function () {

            var width, height;

            var MediaObj = $(this);                            // save object for further use
            var MediaModal = $(this).closest('.row').find('img');   // input to show image name
            var MediaPlaceholder = $(this).closest('.row').find('input:disabled');    // input to show image name

            var selectType = $(this).attr('media-type');         // get media type possible value are 'image', 'video', 'audio','pdf','doc'

            var ext = this.files[0].name.split('.').pop();      // calculte media extension
            var size = Math.round(this.files[0].size / 1024);    // calculte media size


            //validations
            if ($.inArray(ext, validation[selectType]) === -1) {
                alert("Select file extension not supported for the type media");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            } else if (size > validation[selectType + '_validation']) {
                alert("Please select an image with size of " + validation[selectType + '_validation'] + " or less than");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            }

            if ($.inArray(ext, ["jpg", "JPG", "png", "JPEG", "jpeg"]) != -1) { // this condition work for image only

                width = $(MediaObj).attr('width'); // get required image width given by user
                height = $(MediaObj).attr('height'); // get required image height given by user

                var reader = new FileReader;
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = reader.result;

                    image.onload = function () {
                        if (width && height) { // if width and height define or required

                            if (image.width != width || image.height != height) { // check dimension

                                alert('Please select image with given dimension');
                                $(MediaModal).attr('src', '');
                                $(MediaPlaceholder).val('');
                                return false;

                            } else { // dimension pass validation layer put the image string to the placeholder field
                                $(MediaPlaceholder).val($(MediaObj).val());
                            }
                        } else { // skip dimension and show image string to the placeholder field

                            $(MediaPlaceholder).val($(MediaObj).val());
                        }

                    }

                    $(MediaModal).attr('src', e.target.result);

                };
                reader.readAsDataURL($(MediaObj)[0].files[0]);


            } else {

                $(MediaPlaceholder).val($(MediaObj).val());

            }
            return false;


        });

         $('body').on('change', '.browse_app_media_handler,.browse_splash_media_handler', function (event) {


            var loadingObj = $(event.target).attr('class') == 'browse_splash_media_handler' ? $("#data-app-splash") : $("#data-app-icon");
            var MediaObj = $(this);                            // save object for further use
            var selectType = 'image';         // get media type possible value are 'image', 'video', 'audio','pdf','doc'
            var ext = this.files[0].name.split('.').pop();      // calculte media extension
            var size = Math.round(this.files[0].size / 1024);    // calculte media size


            //validations
            if ($.inArray(ext, validation[selectType]) === -1) {
                alert("Select file extension not supported for the type media");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            } else if (size > validation[selectType + '_validation']) {
                alert("Please select an image with size of " + validation[selectType + '_validation'] + " or less than");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            }

            if ($.inArray(ext, ["jpg", "JPG", "png", "JPEG", "jpeg"]) != -1) { // this condition work for image only

                width = $(MediaObj).attr('width'); // get required image width given by user
                height = $(MediaObj).attr('height'); // get required image height given by user

                var reader = new FileReader;
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = reader.result;

                    image.onload = function () {
                        if (width && height) { // if width and height define or required

                            if (image.width != width || image.height != height) { // check dimension

                                alert('Please select image with givien dimension');
                                $(MediaModal).attr('src', '');
                                $(MediaPlaceholder).val('');
                                return false;

                            } else { // dimension pass validation layer put the image string to the placeholder field
                                $(MediaPlaceholder).val($(MediaObj).val());
                            }
                        } else { // skip dimension and show image string to the placeholder field

                            $(MediaPlaceholder).val($(MediaObj).val());
                        }

                    }

                    $(loadingObj).LoadingOverlay("show");
                    setTimeout(function () {

                        $(loadingObj).attr('src', e.target.result);
                        $(loadingObj).LoadingOverlay("hide");

                    }, 1000);


                };
                reader.readAsDataURL($(MediaObj)[0].files[0]);


            }
            return false;


        });

        /**
         * @End
         */


        /**
         * @Add More Label Image Start
         */
         $('body').on('click', '.addLabel', function () {

            if ($('#label_container').children().length < 3) {
                $.ajax({
                    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'getLebalAddMore']);?>',
                    type: 'post',
                    beforeSend: function () {
                        $('#label_container').LoadingOverlay("show");
                    },
                    success: function (res) {

                        setTimeout(function () {
                            $('#label_container').LoadingOverlay("hide");
                            $('#label_container').append(res);
                        }, 500);


                    }, complete: function () {

                    }, error: function () {
                        $('#label_container').LoadingOverlay("hide");

                    }
                });

            }

        });
         $('body').on('click', '.remveLabelImages', function () {
            $('#label_container').LoadingOverlay("show");
            $(this).closest('.form-group').remove();
            $('#label_container').LoadingOverlay("hide");

        });
        /**
         * @End
         */


         $('body').on('submit', '#AddCategoryForm', function () {

             $('#AddCategoryForm').LoadingOverlay("show");
         });


         $('body').on('submit', '#AddVideoForm', function () {
            $('#AddVideoForm').LoadingOverlay("show");
        });
         $('body').on('submit', '#EditApplicationApp', function () {
            $(".box-body").LoadingOverlay("show");
        });
         $('body').on('click', '.publishProduct', function () {

            var obj = $(this).closest('tr');
            $(obj).LoadingOverlay("show");

            var box_id = $(this).attr('id');
            var id = $(this).attr('data-id');
            var box_unique_id = $(this).attr('data-box-unique-id');


            $.ajax({
                url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'publishProduct']); ?>',
                type: 'post',
                data: {'id': $(this).attr('id')},
                dataType: 'json',
                success: function (Res) {

                    if (Res.status == 'pass') {

                        $(obj).LoadingOverlay("hide");

                        var status = '<a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + box_unique_id + '" id="' + id + '" value="0" class="ChangeStatus" style="text-decoration: none;color:lightblue;">Deactivate</a>  ' +
                        '  <a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + box_unique_id + '" id="' + id + '" value="1" style="text-decoration: none; cursor: default;" >Active</a>';

                        $(obj).find('td:last').html(status);

                        $("#" + box_id).remove();
                        $.alert({
                            title: 'Success',
                            content: '<span style="color:green;">Video published Successfully</span>',
                            closeIcon: true
                        });
                    }
                    if (Res.status == 'fail') {
                        $(obj).LoadingOverlay("hide");
                    }
                }, complete: function () {

                }, error: function () {
                    $(obj).LoadingOverlay("hide");
                }
            });


        });
         $('body').on('click', '#AllPublish', function () {


            $.each($('input:checked'), function () {

                if (typeof $(this).closest('tr').find('.publishProduct').attr('id') != 'undefined') {
                   var obj = $(this).closest('tr');

                   var box_id = $(obj).find('.publishProduct').attr('id');
                   var id =$(obj).find('.publishProduct').attr('data-id');
                   var box_unique_id =$(obj).find('.publishProduct').attr('data-box-unique-id');

                   $.ajax({
                    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'publishProduct']); ?>',
                    type: 'post',
                    data: {'id': $(this).closest('tr').find('.publishProduct').attr('id')},
                    dataType: 'json',
                    beforeSend: function () {
                        $(obj).LoadingOverlay("show");
                    },
                    success: function (Res) {

                        if (Res.status == 'pass') {


                          var status = '<a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + box_unique_id + '" id="' + id + '" value="0" class="ChangeStatus" style="text-decoration: none;color:lightblue;">Deactivate</a>  ' +
                          '<a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + box_unique_id + '" id="' + id + '" value="1" style="text-decoration: none; cursor: default;" >Activate</a>';


                          $(obj).find('td:last').html(status);


                          $("#" + box_id).remove();




                          $(obj).LoadingOverlay("hide");
                          $(obj).find('input:checked').prop('checked', false);
                      }
                      if (Res.status == 'fail') {
                        $(obj).LoadingOverlay("hide");
                    }
                }, complete: function () {

                }, error: function () {
                    $(obj).LoadingOverlay("hide");
                }
            });
               }

           }).promise().done(function () {
            $("#CheckedAllProduct").prop('checked', false);

        });

       });

         $('body').on('click', '#CheckedAllProduct', function () {

            $.each($('.dataTable tr input'), function () {
                $(this).prop('checked', $("#CheckedAllProduct").prop('checked'));
            });

        });
         $('body').on('click', '.showImage', function () {
            $.alert({
                title: 'Success',
                content: '<span style="color:green;">Data Migrate Successfully</span>',
                closeIcon: true
            });
        });
         $('body').on('click', '.ChangeStatus', function () {

            var id = $(this).attr('id');
            var box_id = $(this).attr('data-box-id');
            var cube_id = $(this).attr('data-box-unique-id');
            var obj = $(this).closest('tr');

            if ($(this).attr('value') == 0) {
                $.ajax({
                    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'ChangeActiveToDeactivate']); ?>',
                    type: 'post',
                    data: {'id': id, 'cube_id': cube_id},
                    dataType: 'json',
                    beforeSend: function () {
                        $(obj).LoadingOverlay("show");
                    },
                    success: function (Res) {

                        if (Res.status == 'pass') {
                            $(obj).LoadingOverlay("hide");

                            var status = '<a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique_id="' + cube_id + '" id="' + id + '"   value="0"  style="text-decoration: none;cursor: default;">Deactivate</a>  ' +
                            '  <a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + cube_id + '" id="' + id + '" value="1" class="ChangeStatus" style="text-decoration: none;color:lightblue; " >Activate</a>';

                            $(obj).find('td:last').html(status);
                            $(obj).find('input:checked').prop('checked', false);


                        }
                        if (Res.status == 'fail') {
                            $(obj).LoadingOverlay("hide");
                        }
                    }, complete: function () {

                    }, error: function () {
                        $(obj).LoadingOverlay("hide");
                    }
                });
            } else if ($(this).attr('value') == 1) {


                $.ajax({
                    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'publishProduct']); ?>',
                    type: 'post',
                    data: {'id': box_id},
                    dataType: 'json',
                    beforeSend: function () {
                        $(obj).LoadingOverlay("show");
                    },
                    success: function (Res) {

                        if (Res.status == 'pass') {


                            var status = '<a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + cube_id + '" id="' + id + '" value="0" class="ChangeStatus" style="text-decoration: none;color:lightblue;">Deactivate</a>  ' +
                            '  <a href="javascript:void(0)" data-box-id="' + box_id + '" data-box-unique-id="' + cube_id + '" id="' + id + '" value="1" style="text-decoration: none; cursor: default;" >Activate</a>';

                            $(obj).find('td:last').html(status);
                            $(obj).LoadingOverlay("hide");

                        }

                        if (Res.status == 'fail') {
                            $(obj).LoadingOverlay("hide");
                        }

                    }, complete: function () {

                    }, error: function () {
                        $(obj).LoadingOverlay("hide");
                    }
                });

            }
        });

         /** @datatable :start */
         var t = $("#managevidoe").DataTable({
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1, 0, -2] /* 1st one, start by the right */,
            }],
            "order": [[1, 'desc']]
        });
         var o = $("#manageOther").DataTable({
            'aoColumnDefs': [{
                'bSortable': false,
                'aTargets': [-1, 0] /* 1st one, start by the right */,
            }],
            "order": [[1, 'desc']]
        });
         t.on('order.dt search.dt', function () {
            t.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {

                var counter = i + 1;
                cell.innerHTML = '<div class="checkbox checkbox-primary">' +
                ' <input id="checkbox' + counter + '" type="checkbox">' +
                '<label for="checkbox' + counter + '"></label>' +
                '</div>' +
                '</td>' + counter;
            });
        }).draw();

//        Date 25-sep-2017

$("#manageUser").DataTable();







/** @end */






            // ck editor data
            $('textarea').ckeditor({
                'uiColor': '#337ab7'
            });
            $('body').on('click', '#saveAppIcon', function () {
                var selectedimg = $('input[name="mebasebase_appinfo[logo_image_name]"]:checked').val();
                $('#data-app-icon').LoadingOverlay("show");
                $("#iconLibrary").modal('hide');
                setTimeout(function () {
                    $("#data-app-icon").attr('src', '<?php echo $this->request->webroot . 'img/developerimg/library/MeBase/logos/'?>' + selectedimg);
                    $('#data-app-icon').LoadingOverlay("hide");

                }, 1000);
            });
            $('body').on('click', '#saveAppSplash', function () {
                var selectedimg = $('input[name="mebasebase_appinfo[splash_image_name]"]:checked').val();

                $('#data-app-splash').LoadingOverlay("show");

                $("#splashLibrary").modal('hide');
                setTimeout(function () {
                    $("#data-app-splash").attr('src', '<?php echo $this->request->webroot . 'img/developerimg/library/MeBase/splash/'?>' + selectedimg);
                    $('#data-app-splash').LoadingOverlay("hide");

                }, 1000);
            });
            $('body').on('click', 'input[name="mebasebase_appinfo[app_logo_type]"]', function () {
            if ($(this).val() == 1) { // select library upload
                $("#iconLibrary").modal('show');
                $(container).find(".modal-body").mCustomScrollbar({
                    setHeight: 400,
                    theme: "minimal-dark"
                });
            } else {

                $('#EditApplicationApp').find('.browse_app_media_handler').remove();
                $('#EditApplicationApp').append('<input name="mebasebase_appinfo[custom_icon_upload]" type="file" class="browse_app_media_handler" />');
                $('#EditApplicationApp').find('.browse_app_media_handler').trigger('click');


            }
        });
            $('body').on('click', 'input[name="mebasebase_appinfo[app_splash_type]"]', function () {

            if ($(this).val() == 1) { // select library upload
                var container = $("#splashLibrary");

                $("#splashLibrary").modal('show');
                $(container).find(".modal-body").mCustomScrollbar({
                    setHeight: 400,
                    theme: "minimal-dark"
                });
            } else {


                $('#EditApplicationApp').find('.browse_splash_media_handler').remove();
                $('#EditApplicationApp').append('<input name="mebasebase_appideleteByBoxIdnfo[custom_splash_upload]" type="file" class="browse_splash_media_handler" />');
                $('#EditApplicationApp').find('.browse_splash_media_handler').trigger('click');


            }


        });





            $('body').on('click','#updateProirity',function(){


                $.each($('.priorityOrder'),function(){


                   var obj=$(this);

                   if($(this).val() && $(this).attr('old-priority') !=$(this).val()){

                      $.ajax({

                       url:'<?php echo $this->Url->build(['controller'=>'Gym','action'=>'updateData','plugin'=>'GymApp']); ?>',
                       type:'post',
                       data:{'id':$(this).attr('id'),'value':$(this).val()},
                       dataType:'json',
                       success:function(data){
                          $(obj).LoadingOverlay("show");
                      },
                      complete:function(){
                          $(obj).LoadingOverlay("hide");

                      }

                  });

                  }
              });





            });


        // Date 21-sep-17 START

        $('body').on('click', '.set_template', function () {


            var clickedObj=$(this);
            $(clickedObj).LoadingOverlay("show");
            var Temptext= $(this).find('span').text();
            $.ajax({
                url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Meuser','action'=>'getTemplatesData']);?>',
                type: 'post',
                data: {'id': $(this).attr('id')},
                beforeSend: function () {
                },
                success: function (responseData) {
                    $("#user_temp").modal('show');
                    $("#user_temp").html(responseData);
                }, complete:function(){
                  $("#user_temp .modal-title").text(Temptext);

                  $(".content_pro_set_feature").mCustomScrollbar({
                    theme: "minimal",
                    scrollButtons: {
                        /*scroll buttons*/
                        enable: false, /*scroll buttons support: boolean*/
                        scrollType: "continuous", /*scroll buttons scrolling type: "continuous", "pixels"*/
                        scrollSpeed: 60, /*scroll buttons continuous scrolling speed: integer*/
                        scrollAmount: 40 /*scroll buttons pixels scroll amount: integer (pixels)*/
                    },
                    autoHideScrollbar: true,
                    scrollInertia: 875
                });
                  $(clickedObj).LoadingOverlay("hide");
              }
          });
        });

        $("body").on('click','#addTemplate',function(){
            var configid = $('#meuser_id').val();

            var selectedApp=$('.selected_application:checked').length;

            if(selectedApp) {
                $.ajax({
                    url: '<?php echo $this->Url->build([ "plugin"=>"GymApp","controller" =>"Meuser","action"=>"saveTemplate"]); ?>',
                    type: 'post',
                    dataType:'json',
                    data: $('#template_form').serialize(),
                    beforeSend:function(){
                        $('#user_temp .modal-body').LoadingOverlay("show");
                    },
                    success: function (data) {
                        if(data.status=='success'){

                            setTimeout(function () {
                                $('#user_temp .modal-body').LoadingOverlay("hide");
                                var successHtml='<div class="alert alert-success fade in alert-dismissable" style="margin-top:18px;">'+
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+
                                '<strong>Success!</strong> Application was successfully bind with this configuration'+
                                '</div>';
                                $("#MsgContainer").html(successHtml);

                            },1000);



                        }
                        if(data.status=='error'){


                            setTimeout(function () {
                                $('#user_temp .modal-body').LoadingOverlay("hide");

                                var errorHtml='<div class="alert alert-danger fade in alert-dismissable">'+
                                '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+
                                '<strong>Error!</strong> Something Wrong please try again later.'+
                                '</div>';
                                $("#MsgContainer").html(errorHtml);

                            },1000);



                        }
                    },complete:function(){




                    },error:function(){

                        $('#user_temp .modal-body').LoadingOverlay("hide");
                        var errorHtml='<div class="alert alert-danger fade in alert-dismissable">'+
                        '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+
                        '<strong>Error!</strong> Something Wrong please try again later.'+
                        '</div>';
                        $("#MsgContainer").html(errorHtml);
                    }
                });
            }else{
                var errorHtml='<div class="alert alert-danger fade in alert-dismissable">'+
                '<a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>'+
                '<strong>Error!</strong> No Application to bind'+
                '</div>';
                $("#MsgContainer").html(errorHtml);
            }
        });
       // Date 21-sep-17 END


        //Date 27-sep-17 delete functionality

        $('body').on('click','.deleteProduct',function(){
         var obj=$(this).closest('tr');
         $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'deleteByBoxId']); ?>',
            type: 'post',
            data: {'id': $(this).attr('data-box-id')},
            dataType: 'json',
            beforeSend: function () {
                $(obj).LoadingOverlay("show");
            },
            success: function (Res) {
                if (Res.status == 'success') {
                    $.alert({
                        title: 'Success',
                        content: '<span style="color:green;">Delete was Successfull</span>',
                        closeIcon: true
                    });
                    $(obj).remove();
                }
                if (Res.status == 'fail') {
                    $(obj).LoadingOverlay("hide");
                }

            }, complete: function () {




            }, error: function () {
                $(obj).LoadingOverlay("hide");
            }
        });
     });

    });
    function isNumber(evt) {
        evt = (evt) ? evt : window.event;
        var charCode = (evt.which) ? evt.which : evt.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        return true;
    }


  ///////////////image save and multi upload is here ///////////////////// 


  $('body').on('click', '.addThumbnail', function () {

      // if ($('#label_container').children().length < 3) {
        $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'getThumbAddMore']);?>',
            type: 'post',
            beforeSend: function () {
                $('#label_container').LoadingOverlay("show");
            },
            success: function (res) {

                setTimeout(function () {
                    $('#label_container').LoadingOverlay("hide");
                    $('#thumbid').append(res);
                }, 500);


            }, complete: function () {

            }, error: function () {
                $('#label_container').LoadingOverlay("hide");

            }
        });

    // }

});
  $('body').on('change', '.browse_media_handler_thumb', function () {

    var width, height;

            var MediaObj = $(this);                            // save object for further use
            var MediaModal = $(this).closest('.row').find('img');   // input to show image name
            var MediaPlaceholder = $(this).closest('.row').find('input:disabled');    // input to show image name

            var selectType = $(this).attr('media-type');         // get media type possible value are 'image', 'video', 'audio','pdf','doc'

            var ext = this.files[0].name.split('.').pop();      // calculte media extension
            var size = Math.round(this.files[0].size / 1024);    // calculte media size


            //validations
            if ($.inArray(ext, validation[selectType]) === -1) {
                alert("Select file extension not supported for the type media");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            } else if (size > validation[selectType + '_validation']) {
                alert("Please select an image with size of " + validation[selectType + '_validation'] + " or less than");
                $(MediaObj).val('');
                $(MediaModal).attr('src', '');

                return false;
            }

            if ($.inArray(ext, ["jpg", "JPG", "png", "JPEG", "jpeg"]) != -1) { // this condition work for image only

                width = $(MediaObj).attr('width'); // get required image width given by user
                height = $(MediaObj).attr('height'); // get required image height given by user

                var reader = new FileReader;
                reader.onload = function (e) {
                    var image = new Image();
                    image.src = reader.result;

                    image.onload = function () {
                        if (width && height) { // if width and height define or required

                            if (image.width != width || image.height != height) { // check dimension
                                alert('Please select image with givien dimension');
                                $(MediaModal).attr('src', '');
                                $(MediaPlaceholder).val('');
                                return false;

                            } else { // dimension pass validation layer put the image string to the placeholder field
                                $(MediaPlaceholder).val($(MediaObj).val());
                            }
                        } else { // skip dimension and show image string to the placeholder field

                            $(MediaPlaceholder).val($(MediaObj).val());
                        }
                    }
                    $(MediaModal).attr('src', e.target.result);
                };
                reader.readAsDataURL($(MediaObj)[0].files[0]);


            } else {

                $(MediaPlaceholder).val($(MediaObj).val());

            }
            return false;


        });

               ///////////////image upload and  is here /////////////////////  
           function formatValChange(id,name){
            $('.errmsg').hide();
//readURL(this);
var ProductValue = $('#product_information_'+id).val();
var parentValue = $('#selectbox_'+id).val();
var imgValue = $('#product_formatid_'+id).val();
var typedata = $(name).closest('.row').find('#videoformat_0').html();    
var extension = imgValue.split('.').pop().toUpperCase();
if(imgValue.length < 1) {
    imgResult = 0;
}	
else if (parentValue =="audio" && extension!="MP3" && extension!="AMR" && extension!="WMV" && extension!="AAC"){
    imgResult = 0;
    $('#file_'+id).after('<span class="errmsg"><p style="color:red;">Invalid format! Please select MP3,AMR,WMV or AAC flie</p></span>');
    $('#file_'+id).val('');
    $('#formatdataid_'+id).remove();
    return false;
}
else if (parentValue =="image" && extension!="PNG" && extension!="JPG" && extension!="JPEG"){
    imgResult = 0;
    $('#file_'+id).after('<span class="errmsg"><p style="color:red;">Invalid format! Please select JPG,PNG or JPEG flie</p></span>');
    $('#file_'+id).val('');
    $('#formatdataid_'+id).remove();
    return false;
}

else if (parentValue =="video" && extension!="3GP" && extension!="MP4"){
    imgResult = 0;
    $('#file_'+id).after('<span class="errmsg"><p style="color:red;">Invalid format! Please select 3GP or MP4 flie</p></span>');
    $('#file_'+id).val('');
    $('#formatdataid_'+id).remove();
    return false;
}
else if (parentValue =="doc" && extension!="DOC" && extension!="PDF" && extension!="TEXT" && extension!="PPT" && extension!="XLS"){
    imgResult = 0;
    $('#file_'+id).after('<span class="errmsg"><p style="color:red;">Invalid format! Please select DOC,PDF,TEXT,PPT,XLS flie</p></span>');
    $('#file_'+id).val('');
    $('#formatdataid_'+id).remove();
    return false;
}
else{ 
  $('#file_'+id).val(imgValue);
  $('#entitiesContainer').append('<tr class="drag-conten" id="formatdataid_'+id+'"><td align="center"><input class="tab_entity" type="checkbox" value="{"field_type":"'+parentValue+'","field_type_name":"'+ProductValue+'","format":"'+extension+'","tabinfo":"","drop_option":[],"field_name":"'+ProductValue+'","fields_keys":['+id+'],"field_value":[]}" key-id="'+id+'" name="data['+id+'][entity][]"><input type="hidden" /> </td><td>'+parentValue+'</td><td>'+ProductValue+'</td><td>'+imgValue+'</td></tr>');

}
}
function readURL(input) {
    if (input.files && input.files[0]) {
      var file = input.files[0];
      var img = new Image();
      var reader = new FileReader();
      var sizeKB = file.size / 1024;
      reader.onload = function (e) {
        $('#file_0').attr('src', e.target.result);
        $('#file_0').val(imgValue);

    }
    reader.readAsDataURL(input.files[0]);
    if(sizeKB > 500)
    {
        alert('Image Should Be Less Than 100KB');
        $('#file_0').val('');
        return false;
    }

}
} 

////Adding multiple tabs on product add page//////
function readTabs(tabval) { 
  var counter=parseInt($('.counterProductCls').length); 
  if(tabval =='' ){
      $('.adddiv').remove();
      return false;
  }
  if(tabval<=counter){ 
   $('#appendivid').show('');
   $('.adddiv').remove();

   for (var i = 1; i <= tabval; i++) { 
    if (i == 1) {
      $("#appendivid").append('<li class="adddiv activeTab" index-key="' + i + '" >Tab'+i+'</li><input name="data[' + i + '][tab_name]" type="hidden">');
  } else {
    $("#appendivid").append('<li class="adddiv " index-key="' + i + '" >Tab'+i+'</li><input name="data[' + i + '][tab_name]" type="hidden">');

}

}
}
else{ 
	alert('Invalid Tab'); ///if tab is greater than no. of data rows.
	$('.adddiv').remove();
	return false;
}
}

// when user click on tab to assign formats.

$('body').on('click', '#appendivid li', function () {
 $('#appendivid li').removeClass('activeTab');
 $(this).addClass('activeTab');
 if ($(this).next('input[type=hidden]').val() != '') {
    $("#TabNameInput").val($(this).next('input[type=hidden]').val());
} else {
    $("#TabNameInput").val('');
}


    //   code used for showing tab wise selected inputs
    $.each($("#entitiesContainer .drag-conten"), function () {
        if (typeof $(this).attr('index-key') != 'undefined' && $(this).attr('index-key') != $('li.activeTab').attr('index-key')) {
            $(this).css('display', 'none');
        } else { //alert($(this));
            $(this).css('display', 'block');
        }
    });


});
//   code used for showing tab wise selected inputs area tab name
$('body').on('keyup', '#TabNameInput', function () {
    $("#appendivid li.activeTab").next('input[type=hidden]').val($(this).val());
});
$('body').on('click', ".tab_entity", function () {
    if ($(this).prop('checked') == true) {
        $(this).attr('name', 'data[' + $('li.activeTab').attr('index-key') + '][entity][]');
        $(this).closest('tr.drag-conten').attr('index-key', $("#appendivid li.activeTab").attr('index-key'));
    } else {
        $(this).removeAttr('name');
        $(this).closest('tr.drag-conten').removeAttr('index-key');
    }
});

  ///////////////image uploading is here ///////////////////// 

  $('body').on('click', '.addattribute', function () {
      var counter=parseInt($('.counterCls').length);
      if (counter < 5) {
        $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'getAttributeAddMore']);?>',
            type: 'post',
            data:{'counter':counter},
            beforeSend: function () {
                $('.vivekid').LoadingOverlay("show");
            },
            success: function (res) {

                setTimeout(function () {

                    $('#addparentdiv').append(res);
                    $('.vivekid').LoadingOverlay("hide");
                }, 500);


            }, complete: function () {

            }, error: function () {


            }
        });

    }

});

  $('body').on('click', '.remveattributes', function () {
    $('.tab_2').LoadingOverlay("show");
    $(this).closest('.form-group').remove();
    $('.tab_2').LoadingOverlay("hide");

});

        // code to adddropdown div multiple child	
        function adddropdown(counter){ 
            $('#adddropmultiple_'+counter).append('<div class="form-group"><div class=" col-md-11 col-lg-11 col-sm-10 col-xs-10" ><label></label><div class=""><input type="text" class="form-control bdetailschk" name="datatype[0][boxdata][]"></div></div><div class="col-md-1 col-lg-1 col-xs-2 col-sm-2"><div class=""><span class="fa fa-minus-circle hplus remveattributes "style="cursor:pointer;font-size: 17px;"></span> </div> </div></div>');
        }

		//// code to addheading div multiple child	
      function addHeadings(counter){ 

       var typedata = $('#addsubtitle_'+counter).children().length+1;
       $('.vvv').LoadingOverlay("show");
       $('#addsubtitle_'+counter).append('<div class="form-group stimings1"><div class="row "><div class="col-md-12 col-xs-12 col-lg-12 col-md-12"><div class="form-group"><label>Sub Title 1</label><input type="text" name="datatype['+counter+'][product_specification]['+typedata+'][field_name]" class="form-control"></div><div class="form-group"><label>Input box Data</label><input type="text" name="datatype['+counter+'][product_specification]['+typedata+'][data]" class="form-control"></div></div></div><span class="fa fa-minus-circle hplus remveattributes "style="cursor:pointer;font-size: 17px;padding-left:96%"></span></div></div>');
       $('.vvv').LoadingOverlay("hide");
   }
			// code to add position div multiple parent

           function addLinkposition(){ 
               var counter=parseInt($('.link_div').length);	
               if (counter < 5) {
                   $.ajax({
                       url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'addlinkHtml']);?>',
                       type: 'post',
                       data:{'counter':counter},
                       beforeSend: function () {
                        $('.addheadinddiv').LoadingOverlay("show");
                    },
                    success: function (res) {
                        setTimeout(function () {

                            $('#addmorelink').append(res);
                            $('.addheadinddiv').LoadingOverlay("hide");
                        }, 500);


                    }, complete: function () {

                    }, error: function () {


                    }
                });

               }

           }
           $('body').on('click', '.removepos', function () { 
            $('.linkpos').LoadingOverlay("show");
            $(this).closest('.form-group').remove();
            $('.linkpos').LoadingOverlay("hide");

        });


	// code to addheading div multiple Hook html
	$('body').on('click', '.addhookhtml', function () {
		var counter=parseInt($('.counterpositionCls').length);	
        if (counter < 5) {
            $.ajax({
                url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'addhookHtml']);?>',
                type: 'post',
                data:{'counter':counter},
                beforeSend: function () {
                    $('.addheadinddiv').LoadingOverlay("show");
                },
                success: function (res) {
                    setTimeout(function () {

                        $('#addmoreehook').append(res);
                        $('.addheadinddiv').LoadingOverlay("hide");
                    }, 500);


                }, complete: function () {

                }, error: function () {


                }
            });

        }

    });

	
	// code to addheading div multiple parent

	$('body').on('click', '.addheadinddiv', function () {
		var counter=parseInt($('.counterHeaderCls').length);
		
        if (counter < 5) {
            $.ajax({
                url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'getHeadingAddMore']);?>',
                type: 'post',
                data:{'counter':counter},
                beforeSend: function () {
                    $('.addheadinddiv').LoadingOverlay("show");
                },
                success: function (res) {
                    setTimeout(function () {

                        $('#addparentheadings').append(res);
                        $('.addheadinddiv').LoadingOverlay("hide");
                    }, 500);


                }, complete: function () {

                }, error: function () {


                }
            });

        }

    });
    $('body').on('click', '.appendsubtitle', function () {
        var cloneIndex = $(".tr_clone").length;

        var $lastRow = $(this).closest('.row').find('.table_specification tr:last');
        var $newRow = $lastRow.clone();
        $newRow.find(".title-data").attr('name', 'datatype[product_specification]['+ cloneIndex +'][title_name]');
        $newRow.find(".subtitle-box").attr('name', 'datatype[product_specification]['+ cloneIndex +'][field_name]');
        $newRow.find(".subtitle-data").attr('name', 'datatype[product_specification]['+ cloneIndex +'][data]');
        $newRow.insertAfter(".table_specification tr:last");
    });
    
    $('body').on('click', '.removesubtitle', function () {
        if($('.tr_clone').length>1)
        {
            $(this).closest('.row').find('.table_specification tr:last').remove();
        }
    });
    $('body').on('click', '.addproductinfodiv', function () {
      var counter=parseInt($('.counterProductCls').length);

      if (counter < 4) {
        $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'getProductinfoAddMore']);?>',
            type: 'post',
            data:{'counter':counter},
            beforeSend: function () {
                $('.addheadinddiv').LoadingOverlay("show");
            },
            success: function (res) {
                setTimeout(function () {

                    $('#productinfodiv').append(res);
                    $('.addheadinddiv').LoadingOverlay("hide");
                }, 500);


            }, complete: function () {

            }, error: function () {


            }
        });

    }

});
    
    $('body').on('change', '.plugin_type', function () {
        var HookUrl="hook/Hooks";
        


        var obj = $(this);
        var urlData;

    if ($(this).val() == 1) { // mebase
        urlData = HookUrl+'/getMebaseData';
    } else if ($(this).val() == 2) { // helper
        urlData =  HookUrl+'/getHelperData';
    } else if ($(this).val() == 3) {
        urlData =  HookUrl+'/getMeBaseSocial';
    } else if ($(this).val() == 4) { // helper
        urlData =  HookUrl+'/getGalleryData';
    } else if ($(this).val() == 5) {
        urlData =  HookUrl+'/getEventData';
    } else if ($(this).val() == 6) {
        urlData =  HookUrl+'/getUrlData';
    } else if ($(this).val() == 7) {
        urlData =  HookUrl+'/getMeBaseContactData';
    } else if ($(this).val() == 8) {
        urlData =  HookUrl+'/getSocialData';
    }

    $.ajax({
        url: urlData,
        type: 'post',
        data: {'plugin': $(this).val()},
        beforeSend: function () {


            $(obj).closest('.AddMoreRow').find('.sub_module').LoadingOverlay("show");
            $(obj).closest('.AddMoreRow').find('.hookcomponent').html('<option value="">Select</option>');
            $(obj).closest('.AddMoreRow').find('.sub_component').html('<option value="">Select</option>');

        },
        success: function (dataRes) { // data response
            $(obj).closest('.AddMoreRow').find('.sub_module').LoadingOverlay("hide");
            setTimeout(function () {
                $(obj).closest('.AddMoreRow').find('.sub_module').html(dataRes);
            },1000);


        }, complete: function () {


        }
    });

});
    
    $('body').on('change', '.sub_module', function () {
        var HookUrl="hook/Hooks";

        var obj = $(this);
        alert($(obj).find(':selected').attr('data-type'));
        $(obj).prev().val($(obj).find(':selected').attr('data-type'));

        if ($(obj).find(':selected').attr('data-type') == 'Instances') {
            $.ajax({
                url:  HookUrl+'/getChildrenData',
                type: 'post',
                data: {'id': $(this).val()},
                beforeSend: function () {
                    $(obj).closest('.AddMoreRow').find('.hookcomponent').LoadingOverlay("show");
                    $(obj).closest('.AddMoreRow').find('.sub_component').html('<option value="">Select</option>');
                },
            success: function (dataRes) { // data response
                $(obj).closest('.AddMoreRow').find('.hookcomponent').LoadingOverlay("hide");

                setTimeout(function () {
                    $(obj).closest('.AddMoreRow').find('.hookcomponent').html(dataRes);
                },1000);

            }, complete: function () {
             $("#HomeHookForm").find('#spinnerimg').remove();
         }
     })
        }

        $(obj).closest('.AddMoreRow').find('.hookcomponent').html('<option value="">Select</option>');
        $(obj).closest('.AddMoreRow').find('.sub_component').html('<option value="">Select</option>');

    });

$('body').on('change', '.hookcomponent', function (e) {

   var HookUrl="hook/Hooks";

   e.stopImmediatePropagation();
   var obj = $(this);
   $.ajax({
     url: HookUrl+'/getChildrenData',
     type: 'post',
     data: {'id': $(this).val()},
     beforeSend: function () {
        $(obj).closest('.AddMoreRow').find('.sub_component').LoadingOverlay("show");
    },
        success: function (dataRes) { // data response
            $(obj).closest('.AddMoreRow').find('.sub_component').LoadingOverlay("hide");

            setTimeout(function () {
                $(obj).closest('.AddMoreRow').find('.sub_component').html(dataRes);
            },1000);

        }
    });
});


function  formatChange (counter,val) {
    $('#file_'+counter).val('');
    $('.errmsg').hide();

    if (val == 'audio') {
//                $("#imageformat_"+counter).css('display', 'none');
//                $("#docformat_"+counter).css('display', 'none');
//                $("#videoformat_"+counter).css('display', 'none');
$("#audioformat_"+counter).html('<div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group"><label>Format</label></div></div><div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]" checked> &nbsp; MP3</div></div> <div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; AMR</div></div><div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; WMV</div></div><div class="col-md-4 col-lg-4 col-xs-4 col-sm-4"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; AAC</div></div>');

} else if (val =='video') {
//                $("#imageformat_"+counter).css('display', 'none');
//                $("#docformat_"+counter).css('display', 'none');
//                $("#videoformat_"+counter).css('display', 'block');
$("#audioformat_"+counter).html('<div class="col-md-3 col-lg-3 col-xs-3 col-sm-"><div class="form-group"><label>Format</label></div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" class="minimal" value="3gp" name ="datatype['+counter+'][media][format]" > &nbsp; 3GP</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" value="mp4" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; MP4</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; Youtube</div></div>');

}
else if (val == 'image') {
//               $("#imageformat_"+counter).css('display', 'block');
//                $("#docformat_"+counter).css('display', 'none');
//                $("#videoformat_"+counter).css('display', 'none');
$("#audioformat_"+counter).html('<div class="col-md-3 col-lg-3 col-xs-3 col-sm-">            <div class="form-group">             <label>Format</label>            </div>            </div>          <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">            <div class="form-group">            <input type="radio" class="minimal" name ="datatype['+counter+'][media][format]" checked> &nbsp; JPEG            </div>            </div>            <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">             <div class="form-group">             <input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; JPG            </div>            </div>            <div class="col-md-3 col-lg-3 col-xs-3 col-sm-3">             <div class="form-group">             <input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; PNG            </div>            </div>');

}
else if (val =='doc') {
//               $("#imageformat_"+counter).css('display', 'none');
//                $("#docformat_"+counter).css('display','block');
//                $("#videoformat_"+counter).css('display','none');
$("#audioformat_"+counter).html('<div class="col-md-3 col-lg-3 col-xs-3 col-sm-"><div class="form-group"><label>Format</label>            </div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]" checked> &nbsp; DOC</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp;  PDF</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; TEXT</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3 col-md-offset-3"><div class="form-group"><input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; PPT</div></div><div class="col-md-3 col-lg-3 col-xs-3 col-sm-3"><div class="form-group">             <input type="radio" class="minimal" name ="datatype['+counter+'][media][format]"> &nbsp; XLS</div></div>');
}
}  

$('body').on('click', 'input[name=add_tabs]', function () {
    if ($(this).val() == 'yes') {
        $("#tabbinddivid").css('display', 'block');
    } else if ($(this).val() == 'no') {
        $("#tabbinddivid").css('display', 'none');
    }
});

$('body').on('click', 'input[name=image_text]', function () {
    var obj = $(this).closest('.stimings1').find('input[type=file]');
    if ($(this).val() == 'text') {            
        $(obj).closest('.roq.mebase_form_main').css('display', 'none');
        $(obj).closest('.roq.mebase_form_main').find('input').val('');
        $(obj).closest('.roq.mebase_form_main').prev().css('display', 'block');
    } else if ($(this).val() == 'image') {
        $(obj).closest('.roq.mebase_form_main').css('display', 'block');
        $(obj).closest('.roq.mebase_form_main').prev().css('display', 'none');
        $(obj).closest('.roq.mebase_form_main').prev().find('input').val('');
    }

});

$(document).ready(function () {
//        $('.main_tab .nav-tabs li a[title]').tooltip();
//        $('.nav-tabs > li a[title]').tooltip();
$('.nav-tabs > li a[title]').tooltipster();

$('a[data-toggle="tab"]').on('show.bs.tab', function (e) {
    var $target = $(e.target);
    if ($target.parent().hasClass('disabled')) {
        return false;
    }
});
});


$(".right-slide").on('click',function(){  

	var ids=$(this).attr('id');
	var count =0;
	if(ids=='info_1'){
		var cls = 'validchk';
  }
  if(ids=='info_2'){
      var cls = 'bdetailschk';
  }
  if(ids=='info_3'){
      var cls = 'accountchk';
  }		

  $("."+cls).each(function(){
    $(this).removeClass("error-red");
    if ($(this).val().trim() === '') {
        $(this).addClass("error-red");
//            $(this).siblings('div').show();

count = count + 1;
}
else{
   $(this).removeClass("error-red");
//             $(this).siblings('div').hide();
}

});
  if (count != 0) {
   return false;
}

var old_href = $(".main_tab li.active a").attr("href");	
var $active = $('.main_tab .nav-tabs li.active');
$active.next().removeClass('disabled');
$(".main_tab li.active").removeClass('active').next().addClass("active");
var new_href = $(".main_tab li.active a").attr("href");
$(old_href).removeClass('active');
$(new_href).addClass('active');

if($(".main_tab li:last-child").hasClass('active')){
 $(".right-slide").hide();
 $(".save-button").show();

}
});


var _URL = window.URL || window.webkitURL;
$('body').on('click','.preview_image', function(){

    var counter = $(this).attr('data-value');
    var obj = document.getElementById('btn'+counter);

    var filename = obj.files[0]['name'];
    var file = obj.files[0];

    img = new Image();
    var imgwidth = 0;
    var imgheight = 0;
    var maxwidth = 400;
    var maxheight = 300;

    img.src = _URL.createObjectURL(file);
    img.onload = function() {

        $('#preview_img').empty();
        $('#preview_img').append(img).addClass('img-responsive','center-block');


    }

});

$('body').on('click', '.external_hook_hide', function () {
    alert("hide");
    $(this).parents('.link_div').find('.stimings1').css('display', 'none');
    $(this).parents('.link_div').find('.stimings23').css('display', 'block');
})

$('body').on('click', '.external_hook_show', function () {
    alert("show");
    $(this).parents('.link_div').find('.stimings1').css('display', 'block');
    $(this).parents('.link_div').find('.stimings23').css('display', 'none');
})

$('body').on('change', '.selectTemplate', function () {


    var selectedTemp = $(this).children('option:selected').val();
    var counter = $(this).attr('counter-index');

    if (selectedTemp == 'new') {
        $(this).parents('.templateDropDown').next().css('display', 'block');
        $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'Hook','controller'=>'Hooks','action'=>'getDefaultTemp']); ?>',
            type: 'post',
            data: {'id': selectedTemp, 'counter': counter},
            success: function (data) {
                $("#hook_data_"+counter).html(data).fadeIn('slow');;
            }, complete: function () {

            }
        });
    } else {
        $(this).parents('.templateDropDown').next().css('display', 'none');

        $.ajax({
            url: '<?php echo $this->Url->build(['plugin'=>'Hook','controller'=>'Hooks','action'=>'getTemplateData']); ?>',
            type: 'post',
            data: {'id': selectedTemp, 'counter': counter},
            success: function (data) {
                $("#hook_data_"+counter).html(data);
            }, complete: function () {

            }
        });
    }
});

$('body').on('change', '.selectCustomTemplate', function () {


    var selectedTemp = $(this).children('option:selected').val();
    var counter = $(this).attr('counter-index');

    if (selectedTemp == 'new') {
//            $(this).parents('.templateDropDown').next().css('display', 'block');
$.ajax({
    url: '<?php echo $this->Url->build(['plugin'=>'Hook','controller'=>'Hooks','action'=>'getDefaultCustom']); ?>',
    type: 'post',
    data: {'id': selectedTemp, 'counter': counter},
    success: function (data) {
        $("#tab_3").html(data).fadeIn('slow');;
    }, complete: function () {

    }
});
} else {
//            $(this).parents('.templateDropDown').next().css('display', 'none');

$.ajax({
    url: '<?php echo $this->Url->build(['plugin'=>'Hook','controller'=>'Hooks','action'=>'getTemplateCustom']); ?>',
    type: 'post',
    data: {'id': selectedTemp, 'counter': counter},
    success: function (data) {
        $("#tab_3").html(data);
    }, complete: function () {

    }
});
}
});



$('body').on('change', '.title_icon', function () {

    var toggledata = $(this).children('option:selected').attr('data-toggle').split('/');

    showHideCommonFun($(this), '.input_' + toggledata[0], '.input_' + toggledata[1]);
});

$('body').on('change', '.heading_level', function () {

 var counters = $(this).closest('.counterHeaderCls').attr('id');
 var counterdata = counters.trim().split('_');
 var counter = counterdata[1];

 var toggledata = $(this).children('option:selected').val();
 if(toggledata.trim()==1)
 {
     $('.sub_title_data').hide();
     $(this).closest('.row').find('.pmodal1').css('display', 'none');
     $(this).closest('.row').find('.add_subtitle').css('display', 'none');
     $(this).closest('.row').find('.add_subtitle').html('');
 }
 else if(toggledata.trim()==2)
 {
     $('.sub_title_data').show();
     $(this).closest('.row').find('.pmodal1').css('display', 'block');
     $(this).closest('.row').find('.add_subtitle').css('display', 'block');
     $(this).closest('.row').find('.add_subtitle').html('<div class="row "><div class="col-md-12 col-xs-12 col-lg-12 col-md-12"><div class="form-group"><label>Sub Title 1</label><input type="text" name="datatype['+counter+'][product_specification][0][field_name]" class="form-control bdetailschk"></div><div class="form-group"><label>Input box Data</label><input type="text" name="datatype[0][product_specification][0][data]" class="form-control bdetailschk"></div></div></div>');
 }

     //   showHideCommonFun($(this), '.input_' + toggledata[0], '.input_' + toggledata[1]);
 });

function showHideCommonFun(rowIdentifier, showObj, hideObj) {

    $(rowIdentifier).closest('.AddMoreRow').find($(showObj)).css('display', 'block');
    $(rowIdentifier).closest('.AddMoreRow').find($(hideObj)).css('display', 'none');
}

$('body').on('click', '.cardsTypes', function () {

//        var containerHtml = $(this).parents('.mainHookAddMoreRowsContainer');
//        var counterIndex = getCounterIndex(containerHtml);
//
//        $(this).parent().siblings().find('.active').removeClass('active');
//        $(this).addClass('active');
        $(this).closest('.AddMoreRow').find('.card_type').val($(this).attr('data-card-type')); // why? used to get which card type select on each row like open card, collapse card or button this value set in hidden field

//        if ($(this).attr('data-value') == 5) {
//            $(this).closest('.AddMoreRow').find('.button').css('display', 'block');
//            $(this).closest('.AddMoreRow').find('.button_option_container').html('');
//        } else {
//            $('#button_checkbox_' + counterIndex).html('');
//            $('#product_listing_status' + counterIndex).prop('checked', false);
//            $(this).closest('.AddMoreRow').find('.button').css('display', 'none');
//            $(this).closest('.AddMoreRow').find('.button_option_container').html(getTemplate($(this).attr('data-value'), $(this)));
//        }

var dynamcTable = $(this).attr('data-card-type');
var counters= $(this).closest('.AddMoreRow').parent().attr('id');
var counterdata = counters.trim().split('_');
var counter = counterdata[1];
//    var counter=parseInt($('.counterpositionCls').length);
var self = this;
$.ajax({
    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'giveHtml']);?>',
    type: 'post',
    data: {'dynamcTable': dynamcTable, 'counter':counter},
    success: function(data) {
        $(self).closest('.AddMoreRow').find('.tab-content').html(data).fadeIn();


    }

});

});

$('body').on('click', '.buttonType', function () {


    $(this).closest('.AddMoreRow').find('.card_type_option').val($(this).attr('data-value'));


//        $(this).closest('.AddMoreRow').find('.button_option_container').html(getTemplate($(this).attr('data-value'), $(this)));
var dynamcTable = $(this).attr('data-value');
var counters= $(this).closest('.AddMoreRow').parent().attr('id');
var counterdata = counters.trim().split('_');
var counter = counterdata[1];
var self = this;
$.ajax({
    url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'giveElement']);?>',
    type: 'post',
    data: {'dynamcTable': dynamcTable, 'counter':counter},
    success: function(data) {
        $(self).closest('.deeplink_button').find('.data_append').html(data);


    }

});


});

$('#saveProduc').submit(function(event) {
    var count = 0;
    $(".marketfield").each(function(){
        $(this).removeClass("error-red");
        if ($(this).val().trim() === '') {
            $(this).addClass("error-red");
            $(this).siblings('div').show();
            
            count = count + 1;
        }
        else{
           $(this).removeClass("error-red");
           $(this).siblings('div').hide();
       }

   });
    if (count != 0) {
        event.preventDefault();
        return false;
    }
    
    var formData = new FormData($('#saveProduct')[0])

    
    $.ajax({
        contentType: false,
        cache: false,
        processData:false,
        url: '<?php echo $this->Url->build(['plugin'=>'GymApp','controller'=>'Gym','action'=>'addData']);?>',
        type: 'post',
        data: formData,
        success: function(data) {


        }
    });
    return false;

});

$('body').on('click', "#CheckedAllProducts", function () {
    if ($(this).prop('checked') == true) {        
//        $(this).attr('name', 'data[' + $('li.activeTab').attr('index-key') + '][entity][]');
//        $(this).closest('tr.drag-conten').attr('index-key', $("#appendivid li.activeTab").attr('index-key'));
} else {
//        $(this).removeAttr('name');
//        $(this).closest('tr.drag-conten').removeAttr('index-key');
}
});


</script>


<!--    Script For Label Start-->
<script>

//            $(function () {
//		     $('#AddlabelForm').validate({
//            ignore: "",
//            rules: {
//                label_name: "required",   
//                label_text: {
//                    required: {
//                        depends: function (element) {
//                          if(!$(element).val() && $(".label_type1").prop('checked'))
//                           return true;
//                        }
//                    }
//                },
//                   file1: {
//                    required: {
//                        depends: function (element) {
//                          if(!$(element).val() && $(".label_type2").prop('checked'))
//                           return true;
//                        }
//                    }
//                },
//              
//            },messages:{
//                'label_name':'Please enter Label name',
//                'label_text':'This field is mandatory',                 
//                'file1':'This field is mandatory',                 
//            }
//        });
//    });


$('body').on('click', 'input[name=label_type]', function () {
    if ($(this).val() == 'image') {
        $('.imagehideclass').css('display', 'block');
        $('#label_text').val('');
        $('#textfieldid').css('display', 'none');

    } else {
        $('#label_image').val('');
        $('.showimgname').val('');
        $('.imagehideclass').css('display', 'none');
        $('#textfieldid').css('display', 'block');
    }

});
$('body').on('change', '#label_image', function () {
    $('.errmsg').hide();
    $('#blahedit').attr('src', '');
    readURL1(this);
    var imgValue = $('#label_image').val();
    var extension = imgValue.split('.').pop().toUpperCase();
    if(imgValue.length < 1) {
        imgResult = 0;
    }	
    else if (extension!="PNG" && extension!="JPG" && extension!="JPEG"){
        imgResult = 0;
        $('#file1').after('<span class="errmsg"><p style="color:red;">Invalid format! Please select JPG,PNG or JPEG flie</p></span>');
        $('#file1').val('');
        return false;
    }

});
function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#blah').attr('src', e.target.result);
            $('#blahedit').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
} 

$('#AddlabelForm').submit(function(event) {

    $(".labelfield").each(function(){
        $(this).removeClass("error-red");

    });



    if(!$('#label_text').val() && $(".label_type1").prop('checked'))
    {
        $('#label_text').addClass("error-red");
        return false;
    }
    if(!$('.showimgname').val() && $(".label_type2").prop('checked'))
    {
        $('.showimgname').addClass("error-red");
        return false;
    }
    if(!$('#label_name').val())
    {
        $('#label_name').addClass("error-red");
        return false;
    }




    
    var formData = new FormData($('#AddlabelForm')[0])

    
    $.ajax({
        contentType: false,
        cache: false,
        processData:false,
        url: '<?php echo $this->Url->build(['plugin'=>'GymApp', 'controller'=>'Gym', 'action'=>'addLabel']); ?>',
        type: 'post',
        data: formData,
        success: function(data) {
            data = JSON.parse(data);
            $('#label-id').append('<option value="'+data.id+'">'+data.label_name+'</option>');
            $("#mylabel").modal('hide');
            $('#AddlabelForm')[0].reset();
            

        }
    });
    return false;

});


</script>  

<!--    Script For Label End-->

<!--  Script For Brand Start  -->

<script>

 ///////////////image upload and preview is here /////////////////////  

 $('body').on('change', '#brand_image', function () {
    $('.errmsg').hide();
    $('#blahedit').attr('src', '');
    readURL2(this);
    var imgValue = $('#brand_image').val();
    var extension = imgValue.split('.').pop().toUpperCase();
    if(imgValue.length < 1) {
        imgResult = 0;
    }	
    else if (extension!="PNG" && extension!="JPG" && extension!="JPEG"){
        imgResult = 0;
        $('#file26').after('<span class="errmsg"><p style="color:red;">Invalid format! Please select JPG,PNG or JPEG flie</p></span>');
        $('#file26').val('');
        return false;
    }

});
 
 function readURL2(input) {
    if (input.files && input.files[0]) {
      var file = input.files[0];
      var img = new Image();
      var reader = new FileReader();
      var sizeKB = file.size / 1024;
      reader.onload = function (e) {
        $('#pbrandiconid').attr('src', e.target.result);
        $('#blahedit').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]);
    if(sizeKB > 500)
    {
        alert('Image Should Be Less Than 100KB');
        $('#file1').val('');
        return false;
    }

}
} 
  ///////////////image upload and preview is here ///////////////////// 


  ///////////////image save and multi upload is here ///////////////////// 
  $('#brandform').submit(function(event) {
    var count = 0;
    $(".brandfield").each(function(){
        $(this).removeClass("error-red");
        if ($(this).val().trim() === '') {
            $(this).addClass("error-red");
            $(this).siblings('div').show();
            
            count = count + 1;
        }
        else{
           $(this).removeClass("error-red");
           $(this).siblings('div').hide();
       }

   });
    if (count != 0) {
        event.preventDefault();
        return false;
    }
    
    var formData = new FormData($('#brandform')[0])

    
    $.ajax({
        contentType: false,
        cache: false,
        processData:false,
        url: '<?php echo $this->Url->build(['plugin'=>'GymApp', 'controller'=>'Gym', 'action'=>'addBrand']); ?>',
        type: 'post',
        data: formData,
        success: function(data) {
            data = JSON.parse(data);
            $('#brand-id').append('<option value="'+data.id+'">'+data.brand_name+'</option>');
            $("#mypayment").modal('hide');
            $('#brandform')[0].reset();
            

        }
    });
    return false;

});

  $('body').on('keyup','#brand_name',function(){
   $(".error_ac_info").hide();

});


///////////////image save and multi upload is end here /////////////////////

/////////////// brand  delete is here /////////////////////	

/////////////// brand  delete is ends here /////////////////////

/////////////// brand  status change is start here /////////////////////	

////////////// brand  status change is ends here /////////////////////	





</script>


<!--  Script For Brand End  -->


<!--<script type="text/javascript" src="-->
    <?php //echo $this->request->webroot; ?><!--iziModal_master/js/iziModal.min.js"></script>-->
    <script type="text/javascript"
    src="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript"
    src="<?php echo $this->request->webroot; ?>video_app_webroot/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.3/jquery-confirm.min.js"></script>
    <script src="<?php echo $this->request->webroot; ?>video_app_webroot/scrollbar/scroll.js"></script>
    <script src="<?php echo $this->request->webroot; ?>video_app_webroot/tooltip/js/tooltipster.bundle.min.js"></script>
    <?php echo $this->Html->script('validation/jquery.validate'); ?>

    <div class="modal fade bd-example-modal-sm" id="BlockAddContainer" role="dialog"></div>
</body>
</html>




