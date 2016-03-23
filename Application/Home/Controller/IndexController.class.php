<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController {

	public function index() {//首页展示
		$this -> display();
	}

	public function led() {//现任领导

	}

	public function synopsis() {//实验室简介

	}

	public function news() {//动态新闻

	}

	public function research() {//科学研究
		$this ->display();
	}

	public function study() {//学术梯队

	}

	public function education() {//研究生教学

	}

	public function benkestudy() {//本科生教学

	}

	public function callme() {//联系我们
		$this -> display();

	}

}
