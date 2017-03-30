<?php 

Class CategoryAction extends CommonAction {

	//分类列表视图
	Public function index () {
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort ASC')->select();		
		$cate = Category::unlimitedForLevel($cate, '&nbsp;&nbsp;--');
		$this->cate = $cate; //把从数据库读取到的东西通过对象的形式分配到模板上
		$this->display();
	}

	//添加分类视图
	Public function addCate () {
		$this->pid = I('pid', 0, 'intval');
		$this->display();
	}

	//添加分类表单处理
	Public function runAddCate () {
		if (M('cate')->add($_POST)) {
			$this->success('添加成功', U(GROUP_NAME . '/Category/index'));
		} else {
			$this->error('添加失败');
		}
	}

	//排序
	Public function sortCate () {
		$db = M('cate');
		foreach ($_POST as $id => $sort) {
			$db->where(array('id' => $id))->setField('sort', $sort);
		}
		$this->redirect(GROUP_NAME . '/Category/index');
	}

	//删除
	Public function del () {
		if(M('cate')->delete($_GET['id'])) {
			$this->success('删除成功', U(GROUP_NAME . '/Category/index'));
		} else {
			$this->error('删除失败');
		}
	}
}
 ?>
