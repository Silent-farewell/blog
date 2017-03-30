<?php 

Class BlogAction extends CommonAction {

	//博文列表
	Public function index () {
		import('ORG.Util.Page');

		$this->blog = D('BlogRelation')->getBlogs();

		$count = M('blog')->count();
		$page = new Page($count, 15);
		$this->page = $page->show(); 

		$this->display();
	}

	//删除到回收站/还原
	Public function toTrach () {
		$type = (int) $_GET['type'];
		$msg = $type ? '删除' : '还原';
		$update = array(
			'id' => (int) $_GET['id'],
			'del' => $type
			);
		if (M('blog')->save($update)) {
			$this->success($msg . '成功', U(GROUP_NAME . '/Blog/index'));
		} else {
			$this->error($msg . '失败');
		}
	}

	//回收站
	Public function trach () {
		$this->blog = D('BlogRelation')->getBlogs(1);
		$this->display();
	}

	//彻底删除
	Public function delete () {
		$id = (int) $_GET['id'];
		if (M('blog')->delete($id)) {
			M('blog_attr')->where(array('bid' => $id))->delete();
			$this->success('删除成功', U(GROUP_NAME . '/Blog/trach'));
		} else {
			$this->error('删除失败');
		}
	}

	//添加博文
	Public function blog () {
		//所属分类
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->cate = Category::unlimitedForLevel($cate);

		//博文属性
		$this->attr = M('attr')->select();

		$this->display();
	}

	//添加博文表单处理
	Public function addBlog () {
		$data = array(
			'title' => $_POST['title'],
			'content' => $_POST['content'],
			'summary' => $_POST['summary'],
			'time' => time(),
			'click' => (int) $_POST['click'],
			'cid' => (int) $_POST['cid']
			);

		if ($bid = M('blog')->add($data)) {

			if (isset($_POST['aid'])) {
				$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr` (bid, aid) VALUES';
				foreach ($_POST['aid'] as $v) {
					$sql .= '(' . $bid . ',' . $v . '),';
				}
				$sql = rtrim($sql, ',');
				M('blog_attr')->query($sql);
			}
			$this->success('添加成功', U(GROUP_NAME . '/Blog/index'));
		} else {
			$this->error('添加失败');
		}
	}

	//图片上传

	//修改博文
	public function edit () {
		$id = (int) $_GET['id'];
		//p($id);


		//分类列表
		import('Class.Category', APP_PATH);
		$cate = M('cate')->order('sort')->select();
		$this->cate = Category::unlimitedForLevel($cate);

		//博文属性
		$this->attr = M('attr')->select();

		//从数据库读取博文
		$field = array('id', 'cid', 'click', 'title', 'summary', 'content');
		$this->blog = M('blog')->field($field)->find($id);

		//p($this->blog);

		//原有属性
		$blogattr = M('blog_attr')->where(array('bid' => $id))->select();

		//p($blogattr);
		foreach ($blogattr as $v) {
			
			$aid[] = $v['aid'];
		}
		$this->aid = $aid['0'];

		$this->display();
	}

	//修改博文表单处理
	Public function editBlog () {
		$data = array(
			'id' => $_POST['id'],
			'cid' => $_POST['cid'],
			'click' => $_POST['click'],
			'title' => $_POST['title'],
			'summary' => $_POST['summary'],
			'content' => $_POST['content']
			);
		$id = $data['id'];

		//清空原属性
		M('blog_attr')->where(array('bid' => $id))->delete();

		//修改数据库
		if(($bid = M('blog')->save($data)) || isset($_POST['aid'])) {
			if (isset($_POST['aid'])) {
				$sql = 'INSERT INTO `' . C('DB_PREFIX') . 'blog_attr` (bid, aid) VALUES';
				foreach ($_POST['aid'] as $v) {
					$sql .= '(' . $id . ',' . $v . '),';
				}
				$sql = rtrim($sql, ',');
				M('blog_attr')->query($sql);
			}
			$this->success('修改成功', U(GROUP_NAME . '/Blog/index'));
		} else {
			$this->error('修改失败');
		}
	}


}


 ?>



