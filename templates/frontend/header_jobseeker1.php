<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=title();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'KendoCore/css/') ;?>kendo.common.min.css" rel="stylesheet" id="bootstrap-css">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'KendoCore/css/') ;?>kendo.Metro.min.css" rel="stylesheet" id="bootstrap-css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<script src="<?php echo get_template_directory(dirname(__FILE__), 'js/') ;?>jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory(dirname(__FILE__), 'KendoCore/js/') ;?>kendo.core.min.js"></script>
<script src="<?php echo get_template_directory(dirname(__FILE__), 'KendoCore/js/') ;?>kendo.ui.core.min.js"></script>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
  <style>
      body{
        background-color: #f8f8f8 !important;
      }

      #login-dp{
        min-width: 250px;
        padding: 14px 14px 0;
        overflow:hidden;
        background-color:rgba(255,255,255,.8);
      }
      #login-dp .help-block{
        font-size:12px
      }
      #login-dp .bottom{
        background-color:rgba(255,255,255,.8);
        border-top:1px solid #ddd;
        clear:both;
        padding:14px;
      }
      #login-dp .social-buttons{
        margin:12px 0
      }
      #login-dp .social-buttons a{
        width: 49%;
      }
      #login-dp .form-group {
        margin-bottom: 10px;
      }
      .btn-fb{
        color: #fff;
        background-color:#3b5998;
      }
      .btn-fb:hover{
        color: #fff;
        background-color:#496ebc
      }
      .btn-tw{
        color: #fff;
        background-color:#55acee;
      }
      .btn-tw:hover{
        color: #fff;
        background-color:#59b5fa;
      }
      @media(max-width:768px){
        #login-dp{
            background-color: inherit;
            color: #fff;
        }
        #login-dp .bottom{
            background-color: inherit;
            border-top:0 none;
        }
      }

  </style>

  <nav style="background-color:white;box-shadow:none !important;border-color:none !important" class="navbar navbar-default" role="navigation">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a style="color:#00b1b3!important" class="navbar-brand" href="#">PAMAHIRE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, User <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                      <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                      <li class="divider"></li>
                      <li><a href="<?=set_url('user/logout');?>"><i class="icon-off"></i> Logout</a></li>
                  </ul>
              </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
