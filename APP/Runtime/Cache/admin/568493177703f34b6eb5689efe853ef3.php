<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap core CSS -->
    <link href="__PUBLIC__/Css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
  </head>
  <body>
  	<h2 class="sub-header">博文列表</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                    <th>ID</th>
		<th>标题</th>
		<th>所属分类</th>
		<th>点击次数</th>
		<th>发布时间</th>
		<th>操作</th>
                </tr>
              </thead>
              <tbody>
                
              	<?php if(is_array($blog)): foreach($blog as $key=>$v): ?><tr>
				<td width="8%"><?php echo ($v["id"]); ?></td>
				<td>
					<?php echo ($v["title"]); if(is_array($v["attr"])): foreach($v["attr"] as $key=>$value): ?><strong style="color:<?php echo ($value["color"]); ?>;padding:0 5px">[<?php echo ($value["name"]); ?>]</strong><?php endforeach; endif; ?>
				</td>
				<td width="12%"><?php echo ($v["cate"]); ?></td>
				<td width="12%"><?php echo ($v["click"]); ?></td>
				<td width="12%"><?php echo (date('y-m-d H:i', $v["time"])); ?></td>
				<td width="20%">
					<?php if(ACTION_NAME == "index"): ?>[<a href="<?php echo U(GROUP_NAME . '/Blog/edit', array('id' => $v['id']));?>">修改</a>]
						[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrach', array('id' => $v['id'], 'type' => 1));?>">删除</a>]
					<?php else: ?>
						[<a href="<?php echo U(GROUP_NAME . '/Blog/toTrach', array('id' => $v['id'], 'type' => 0));?>">还原</a>]
						[<a href="<?php echo U(GROUP_NAME . '/Blog/delete', array('id' => $v['id']));?>">彻底删除</a>]<?php endif; ?>
				</td>
			</tr><?php endforeach; endif; ?>

		<tr>
			<td colspan="6" align="center">
				<ul class="pagination">
					<?php echo ($page); ?>
				</ul>
			</td>
		</tr>
                
              </tbody>
            </table>
          </div>
  </body>
</html>