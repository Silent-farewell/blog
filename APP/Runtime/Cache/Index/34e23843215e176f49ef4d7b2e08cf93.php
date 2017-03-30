<?php if (!defined('THINK_PATH')) exit();?><div class="list-group list-success">
	<p href="#" class="list-group-item active" style="background-color:#009688;border:0">
	友情链接
	</p>
	<?php if(is_array($friend)): foreach($friend as $key=>$v): ?><a href="<?php echo ($v['http']); ?>" class="list-group-item" target='_blank' style="overflow: hidden;white-space: nowrap;text-overflow: ellipsis;"><?php echo ($v["name"]); ?></a><?php endforeach; endif; ?>
</div>