<?php

namespace Home\Controller;

use Think\Controller;
/**
 * 发布文章必须登录
 */
class ArticlescrapController extends BaseController {

	public function index() {
		$post = M('Articlescrap') -> where("id = 12")->getField('content');
//		$post1 = var_dump($post);
//		echo $post1;
		$this -> assign('Articlescrap',htmlspecialchars_decode($post));
		$this -> display();
	}

}
