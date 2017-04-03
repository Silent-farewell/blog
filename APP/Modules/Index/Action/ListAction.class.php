<?php 
header("Content-type: text/html; charset=utf-8");
Class ListAction extends Action {

	Public function index () {
		import('ORG.Util.Page');
		import('Class.Category', APP_PATH);
		
		$id = (int)$_GET['id'];
		$cate = M('cate')->order('sort')->select();

		//首页/php
		$this->cates = M('cate')->field($field)->find($id);
		$fenlei = $this->cates;
		$this->fenlei = $fenlei["name"];
		$this->ids = $id;

		$cids = Category::getChildsId($cate, $id);
		$cids[] = $id;

		$where = array('cid' => array('IN', $cids));
		$count = M('blog')->where($where)->count();
		$page = new Page($count, 10);
		$limit = $page->firstRow . ',' . $page->listRows;

		$this->blog = D('BlogView')->getAll($where, $limit);
		$this->page = $page->show();
		
		$title = $fenlei["name"];
		$title .= ' - ';
		$this->assign('title', $title);

		$this->display();
	}
}

?>
