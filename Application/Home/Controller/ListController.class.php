<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 文章管理
 */
class ListController extends Controller {
	public function index() {
		$articlescrap = M("articlescrap")->where("status <> 0")->select();
		$this -> assign("aritclescrap",$articlescrap);
		$this -> display();
	}

}
