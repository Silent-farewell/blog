<?php 

/**
 * 自定义标签库
 */

Class TagLibHd extends TagLib {

	Protected $tags = array(
		'nav' => array('attr' => 'limit,order', 'close' => 1),
		'hot' => array('attr' => 'limit', 'close' => 1)
		);

	Public function _nav ($attr, $content) {
		$attr = $this->parseXmlAttr($attr);
		$str = <<<str
<?php
	\$_nav_cate = M('cate')->order("{$attr['order']}")->select();
	import('Class.Category', APP_PATH);
	\$_nav_cate = Category::unlimitedForLayer(\$_nav_cate);
	foreach (\$_nav_cate as \$_nav_cate_v) :
		extract(\$_nav_cate_v);
		\$url = U('/c_' . \$id);
?>
str;
		$str .= $content;
		$str .= '<?php endforeach;?>';
		return $str;
	}

	Public function _hot ($attr, $content) {
		$attr = $this->parseXmlAttr($attr);
		$limit = $attr['limit'];
		$str = '<?php ';
		$str .= '$field = array("id", "title", "click");';
		$str .= '$_hot_blog = M("blog")->field($field)->limit(' . $limit . ')->order("click DESC")->select();';
		$str .= 'foreach ($_hot_blog as $_hot_value):';
		$str .= 'extract($_hot_value);';
		$str .= '$url = U("/" . $id);?>';
		$str .= $content;
		$str .= '<?php endforeach;?>';
		return $str; 
	}
}

 ?>