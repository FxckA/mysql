<?php

namespace Home\Controller;

use Think\Controller;
/**
 * 发布文章必须登录
 */
class ArticlescrapController extends BaseController {

	public function index($name) {
		if ($name != "") {
			$model = D('ArticlescrapView');
		} else {
			$where['articlescrap.title'] = array('like', "%$key%");
			$where['member.username'] = array('like', "%$key%");
			$where['category.title'] = array('like', "%$key%");
			$where['_logic'] = 'or';
			$model = D('articlescrap') -> where($where);
		}

		$count = $model -> where($where) -> count();
		// 查询满足要求的总记录数
		$Page = new \Extend\Page($count, 15);
		// 实例化分页类 传入总记录数和每页显示的记录数(25)
		$show = $Page -> show();
		// 分页显示输出
		$post = $model -> limit($Page -> firstRow . ',' . $Page -> listRows) -> where($where) -> order('id DESC') -> select();
		$this -> assign('model', $post);
		$this -> assign('page', $show);
		$this -> display();

	}

	public function view($id) {
		$post = M('Articlescrap') -> find($id);
		$this -> assign('Articlescrap', $post);
		$this -> display();
	}

}
