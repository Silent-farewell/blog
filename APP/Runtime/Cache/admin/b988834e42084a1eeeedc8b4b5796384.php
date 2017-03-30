<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>后台管理</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/Css/bootstrap.min.css" rel="stylesheet">
	<script src="__PUBLIC__/Css/jquery.min.js"></script>
	<script src="__PUBLIC__/Css/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="__PUBLIC__/Css/dashboard.css" rel="stylesheet">

  </head>

  <body style="overflow:hidden;">

    <nav class="navbar navbar-inverse navbar-fixed-top" style="border-bottom: 0 solid white;">
      <div class="container-fluid" id="toubu">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">后台管理系统</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="__GROUP__" target="_blank">后台首页</a></li>
            <li><a href="http://www.qiwu.website" target="_blank">前台首页</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Index/logout');?>" target="_self">退出</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid" style=" height: 100%">
      <div class="row" style=" height: 100%">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="text-primary"><h4>博文管理</h4></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Blog/index');?>" target='iframe'>博文列表</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Blog/blog');?>" target='iframe'>添加博文</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Blog/trach');?>" target='iframe'>回收站</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="text-primary"><h4>属性管理</h4></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Attribute/index');?>" target='iframe'>属性列表</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Attribute/addAttr');?>" target='iframe'>添加属性</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="text-primary"><h4>分类管理</h4></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Category/index');?>" target='iframe'>分类列表</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Category/addCate');?>" target='iframe'>添加分类</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="text-primary"><h4>系统设置</h4></li>
            <li><a href="<?php echo U(GROUP_NAME . '/System/verify');?>" target='iframe'>验证码设置</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li class="text-primary"><h4>友情网站</h4></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Connect/index');?>" target='iframe'>友情网站列表</a></li>
            <li><a href="<?php echo U(GROUP_NAME . '/Connect/addConn');?>" target='iframe'>添加友情网站</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" style="height: 100%;">
          <iframe name="iframe" src="<?php echo U(GROUP_NAME . '/Index/shouye');?>" width=100% height=100% scrolling=1 frameborder="0" style="padding-bottom: 10px;"></iframe>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->

    <!-- Placed at the end of the document so the pages load faster -->
    <script>window.jQuery || document.write('<script src="__PUBLIC__/Js/jquery.min.js"><\/script>')</script>
    <script src="__PUBLIC__/Js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

  </body>
</html>