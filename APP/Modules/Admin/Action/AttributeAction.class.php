<?php 

Class AttributeAction extends CommonAction {

	//属性列表
	Public function index () {
		$this->attr = M('attr')->select();
		$this->display();
	}

	//添加属性视图
	Public function addAttr () {
		$this->display();
	}

	//添加属性表单处理
	Public function runAddAttr () {
		if (M('attr')->add($_POST)) {
			$this->success('添加成功', U(GROUP_NAME . '/Attribute/index'));
		} else {
			$this->error('添加失败');
		}
	}


	//删除
	Public function del () {
		if(M('attr')->delete($_GET['id'])) {
			$this->success('删除成功', U(GROUP_NAME . '/Attribute/index'));
		} else {
			$this->error('删除失败');
		}
	}
}

 ?>