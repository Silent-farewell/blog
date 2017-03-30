<?php 

Class FriendWidget extends Widget {

	Public function render ($data) {
		$field = array('name', 'http');
		$data['friend'] = M('conn')->field($field)->select();
		return $this->renderFile('', $data);
	}
}

 ?>