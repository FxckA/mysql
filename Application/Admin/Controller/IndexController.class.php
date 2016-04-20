<?php
namespace Admin\Controller;
use Admin\Controller;
//首页控制器
class IndexController extends BaseController {
	public function index() {
		$data['member'] = M('member') -> count();//统计出用户数量
		$data['articlescrap'] = M('articlescrap')->where("cate_id != 5 and 6")-> count();//统计出文章数量
		//输出文章个数
		$data['news'] = M('news') ->where("cate_id = 6 or 5")-> count();//输出new数量
		$data['links'] = M('links') -> count();//统计出友情链接数量
		$this -> assign('data', $data);
		$this -> display();
	}

}
