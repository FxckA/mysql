<?php
namespace Admin\Controller;
use Admin\Controller;
/**
 * 文章管理
 */
class ShowController extends BaseController {
	public function index() {
		$id = I('get.id','addslashes');
		$id = intval($id);
		$articlescrap = M("articlescrap")->where("id = %d ",$id)->getField("title,content,time");
		$this -> assign("aritclescrap",$articlescrap);
		$this -> display();
	}

}
