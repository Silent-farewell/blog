<?php 

Class ShowAction extends Action {

	Public function index () {
		$id = (int) $_GET['id'];

		$field = array('id', 'title', 'time', 'content', 'cid');
		$this->blog = M('blog')->field($field)->find($id);

		//首页>php>字符串
		$cid = $this->blog['cid'];
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->parent = Category::getParents($cate, $cid);

		$this->display();
	}

	Public function clickNum () {
		//点击一次click加1
		$id = (int) $_GET['id'];
		$where = array('id' => $id);
		$click = M('blog')->where($where)->getField('click');
		M('blog')->where($where)->setInc('click');
		echo 'document.write(' . $click . ')';
	}
}

 ?>