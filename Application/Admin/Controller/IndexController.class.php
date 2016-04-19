<?php
namespace Admin\Controller;
use Admin\Controller;
//首页控制器
class IndexController extends BaseController {
	public function index() {
		$data['member'] = D('member') -> count();//统计出用户数量
		$data['articlescrap'] = D('articlescrap') -> count();//统计出文章数量
		//输出文章个数
		$data['links'] = D('links') -> count();//统计出友情链接数量
		$this -> assign('data', $data);
		$this -> display();
	}

}
