<?php if (!defined('THINK_PATH')) exit();?><div class="list-group" >
	<p href="#" class="list-group-item active" style="background-color:#009688; border:0;" >
	最新文章
	</p>
	<?php if(is_array($news)): foreach($news as $key=>$v): ?><a href="<?php echo U('/' . $v['id']);?>" class="list-group-item" style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;" ><?php echo ($v["title"]); ?></a><?php endforeach; endif; ?>
</div>