<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?=title();?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo get_template_directory(dirname(__FILE__), 'css/') ;?>bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
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
          <a style="color:#2c3e50!important" class="navbar-brand" href="#">PAMAHIRE</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><p class="navbar-text">Already have an account?</p></li>
            <li id="dd_login" class="dropdown">
              <a href="#" id="dd_login_ex" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
        			<ul id="login-dp" class="dropdown-menu">
        				<li>
        					 <div class="row">
        							<div class="col-md-12">
        								 <form class="form" role="form" id="form-login">
        										<div class="form-group">
        											 <label class="sr-only" for="exampleInputEmail2">Email address</label>
        											 <input type="text" name="username" class="form-control" id="username" required>
        										</div>
        										<div class="form-group">
        											 <label class="sr-only" for="exampleInputPassword2">Password</label>
        											 <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                     <div class="help-block text-right"><a href="">Forget the password ?</a></div>
        										</div>
        								 </form>
                         <div class="form-group">
                            <button id="btn_login" style="background-color:#00b1b3!important;color:white" class="btn btn-block">Sign in</button>
                         </div>
                         <div class="form-group">
                            <a href="<?=set_url('user/register');?>" style="background-color: transparent;border-color: #ef6733;color: #ef6733;border-width:2px" class="btn btn-block">Register</a>
                         </div>
        							</div>
        					 </div>
        				</li>
        			</ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
