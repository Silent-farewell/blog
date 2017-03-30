<?php 

//多对多的关联模型 （增、删、改多用关联模型 查多用视图模型）
Class BlogRelationModel extends RelationModel {

	Protected $tableName = 'blog';

	Protected $_link = array(
		'attr' => array(
			'mapping_type' => MANY_TO_MANY,
			'mapping_name' => 'attr',
			'foreign_key' => 'bid',
			'relation_foreign_key' => 'aid',
			'relation_table' => 'hd_blog_attr'
			),
		'cate' => array(
			'mapping_type' => BELONGS_TO,
			'foreign_key' => 'cid',
			'mapping_fields' => 'name',
			'as_fields' => 'name:cate'
			)
		);
	Public function getBlogs ($type = 0) {

		import('ORG.Util.Page');
		$count = M('blog')->count();
		$page = new Page($count, 15);
		$limit = $page->firstRow . ',' . $page->listRows;

		$field = array('del');
		$where = array('del' => $type);
		return $this->field($field, true)->where($where)->relation(true)->order('time')->limit($limit)->select();
	}
}

 ?>