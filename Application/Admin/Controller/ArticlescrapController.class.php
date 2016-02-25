<?php
namespace Admin\Controller;
use Admin\Controller;
/**
 * 文章管理
 */
class ArticlescrapController extends BaseController {
	/**
	 * 文章列表
	 * @return [type] [description]
	 */
	public function index($key = "") {
		if ($key === "") {
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

	/**
	 * 添加文章
	 */
	public function add() {
		//默认显示添加表单
		if (!IS_POST) {
			$this -> assign("category", getSortedCategory( M('category') -> select()));
			$this -> display();
		}
		if (IS_POST) {
			//如果用户提交数据
			$model = D("articlescrap");
			$model -> time = time();
			$model -> user_id = 1;
			$model -> status = 0;
			if (!$model -> create()) {
				// 如果创建失败 表示验证没有通过 输出错误提示信息
				$this -> error($model -> getError());
				exit();
			} else {
				if ($model -> add()) {
					$this -> success("添加成功", U('articlescrap/index'));
				} else {
					$this -> error("添加失败");
				}
			}
		}
	}

	/**
	 * 更新文章信息
	 * @param  [type] $id [文章ID]
	 * @return [type]     [description]
	 */
	public function update($id) {
		//默认显示添加表单
		if (!IS_POST) {
			$model = M('articlescrap') -> where('id=' . $id) -> find();
			$this -> assign("category", getSortedCategory( M('category') -> select()));
			$this -> assign('post', $model);
			$this -> display();
		}
		if (IS_POST) {
			$model = D("articlescrap");
			if (!$model -> create()) {
				$this -> error($model -> getError());
			} else {
				if ($model -> save()) {
					$this -> success("更新成功", U('articlescrap/index'));
				} else {
					$this -> error("更新失败");
				}
			}
		}
	}

	/**
	 * 删除文章
	 * @param  [type] $id [description]
	 * @return [type]     [description]
	 */
	public function delete($id) {
		$model = M('articlescrap');
		$result = $model -> where("id=" . $id) -> delete();
		if ($result) {
			$this -> success("删除成功", U('articlescrap/index'));
		} else {
			$this -> error("删除失败");
		}
	}

	public function post($id) {//post到前台
		if (IS_GET) {
			$status = M('articlescrap') -> where("id=" . $id) -> getField('status');
			if ($status === '0') {
				$data['status'] = 1;
			} else {
				$data['status'] = 0;
			}
			$result = M('articlescrap') -> where("id=" . $id) -> save($data);
			if ($result && $data['status'] === 1) {
				$this -> success("发布成功", U('articlescrap/index'));
			} elseif ($result && $data['status'] === 0) {
				$this -> success("撤销成功", U('articlescrap/index'));
			} else {
				$this -> error("操作失败");
			}
		} else {
			pass;

		}

	}

}
