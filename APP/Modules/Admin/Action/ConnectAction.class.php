<?php 

Class ConnectAction extends CommonAction {

	//友情链接列表
	Public function index () {
		$this->conn = M('conn')->select();
		$this->display();
	}

	//友情链接视图
	Public function addConn () {
		$this->display();
	}

	//添加链接表单处理
	Public function runAddConn () {
		$data = array(
			'name' => $_POST['name'],
			'http' => 'http://' . $_POST['http']
			);
		if(M('conn')->add($data)) {
			$this->success('添加成功', U(GROUP_NAME . '/Connect/index'));
		}	else {
			$this->error('添加失败');
		}
	}

	//删除链接
	Public function del () {
		if(M('conn')->delete($_GET['id'])) {
			$this->success('删除成功', U(GROUP_NAME . '/Connect/index'));
		} else {
			$this->error('删除失败');
		}
	}

}

 ?>