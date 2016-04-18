<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController {

	public function index() {//首页展示
	    $articlescrap = M('articlescrap')-> where("status = 1")->order("time desc")->limit(7)->select();
		$news = M("news")-> where("status = 1")->order("time desc")->limit(7)->select();
		$this->assign("articlescrap",$articlescrap);
		$this->assign("news",$news);
		$this -> display();
	}

	public function leds() {//现任领导//完成
		$this -> display();
	}

	public function synopsis() {//实验室简介//完成
		$this -> display();
	}
	public function articlescrap(){//动态新闻列表//完成
	    $articlescrap = M('articlescrap')-> where("status = 1")->order("time desc")->limit(15)->select();
		$this->assign("articlescrap",$articlescrap);
		$this->display();
	}
	public function news() {//动态公告列表//完成
		$news = M("news")-> where("status = 1")->order("time desc")->limit(15)->select();
		$this->assign("news",$news);
		$this -> display();
	}

	public function research() {//科学研究//完成
		$this -> display();
	}

	public function study() {//学术梯队
		$this -> display();
	}

	public function education() {//研究生教学
		$this -> display();

	}

	public function benkestudy() {//本科生教学
		$this -> display();

	}

	public function callme() {//联系我们//完成
		$this -> display();

	}

}
