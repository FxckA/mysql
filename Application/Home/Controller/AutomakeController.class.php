<?php

namespace Home\Controller;

use Think\Controller;

class AutomakeController extends BaseController {
	public function index($id = '') {
		$id = I('get.id');
		if(!empty($id)){
			$data = M('news')->where("id = %d",intval($id))->select();
			$this -> assign("title",htmlspecialchars_decode($data[0]["title"]));
			$this -> assign("time",htmlspecialchars_decode($data[0]["time"]));
			$this -> assign("content",htmlspecialchars_decode($data[0]["content"]));
			$this -> display();
		}
	}

}
