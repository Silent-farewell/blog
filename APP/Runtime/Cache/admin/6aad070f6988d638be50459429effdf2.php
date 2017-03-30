<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>后台管理</title>

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/Css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <script type='text/javascript'>
		window.UEDITOR_HOME_URL = '__ROOT__/Data/Ueditor/';
		window.onload = function () {
			window.UEDITOR_CONFIG.initialFrameWidth = 1100;
			window.UEDITOR_CONFIG.initialFrameHeight = 600;
			UE.getEditor('content');
		}
	</script>
    <script type="text/plain" id="myEditor" class="remarkContext" style="width:100%"></script>
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="__ROOT__/Data/Ueditor/ueditor.all.min.js"></script>
	<style>
		iframe{width:100%;height:100%;border:none;overflow-x:hidden;overflow-y:auto;}
		body{width:100%;height:100%;border:none;overflow-x:hidden;overflow-y:auto;}
		h2{margin-bottom: 20px;}
	</style>
  </head>
  <body>
  	<h2 class="sub-header">添加博文</h2>
          <form class="form-horizontal" role="form" action="<?php echo U(GROUP_NAME . '/Blog/addBlog');?>" method="post">
          	<div class="form-group">
			<label class="col-sm-2 control-label">所属分类：</label>
			<div class="col-sm-10">
				<select name="cid" class="form-control">
				<option value="">===请选择分类===</option>
				<?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["name"]); ?></option><?php endforeach; endif; ?>
			</select>
			</div>
		</div>
          	<div class="form-group">
			<label class="col-sm-2 control-label">博文属性：</label>
			<div class="col-sm-10">
				<?php if(is_array($attr)): foreach($attr as $key=>$v): ?><label class="checkbox-inline">
						<input type="checkbox" name='aid[]' value='<?php echo ($v["id"]); ?>' /><?php echo ($v["name"]); ?>
					</label><?php endforeach; endif; ?>
			</div>
		</div>
		  <div class="form-group">
		    <label for="click" class="col-sm-2 control-label">点击次数：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="cllick" name="click" value='100' >
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="title" class="col-sm-2 control-label">标　　题：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="title" name="title" placeholder="请输入标题">
		    </div>
		  </div>
		  <div class="form-group">
		    <label for="summary" class="col-sm-2 control-label">摘　　要：</label>
		    <div class="col-sm-10">
		      <input type="text" class="form-control" id="summary" name="summary" placeholder="请输入摘要">
		    </div>
		  </div>

		  <div class="form-group">
		    <label for="content" class="col-sm-2 control-label">文章正文：</label>
		    <div class="col-sm-10">
		    <textarea name="content" id="content" style="padding: 0; border: 0;"></textarea>
		    </div>
		  </div>
			
		  <div class="form-group">
		    <div class="col-sm-offset-2 col-sm-10">
		      <button type="submit" class="btn btn-success btn-lg" style="width: 30%;">添加博文</button>
		    </div>
		  </div>
	</form>
  </body>
</html>