<?php 

Class BlogViewModel extends ViewModel {

	Protected $viewFields = array(
		//视图模式定义
		'blog' => array(
			'id', 'title', 'time', 'click', 'summary',
			'_type' => 'LEFT'
			),
		'cate' => array(
			'name', '_on' => 'blog.cid = cate.id'
			)
		);

	Public function getAll ($where, $limit) {
		return $this->where($where)->limit($limit)->order('time DESC')->select();
	}
}

 ?>