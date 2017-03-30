<?php 

Class IndexAction extends Action {

	Public function index () {

		import('ORG.Util.Page');

		$count = M('blog')->count();
		$page = new Page($count, 10);
		$where = 1;
		$limit = $page->firstRow . ',' . $page->listRows;
		$this->blog = D('BlogView')->getAll($where, $limit);
		$this->page = $page->show(); 

		$this->display();
	}
}

 ?>