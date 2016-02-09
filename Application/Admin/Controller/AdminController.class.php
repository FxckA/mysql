<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function isadmin() {
		$username = I('post.username', '', 'addslashes');
		$password = I('post.password');
		$password = md5($password . C('salt'));
		//		$checkbox = $_POST["remenber"];
		$User = M('Admin') -> where("username = '%s' and password = '%s'", array($username, $password)) -> find();
		if ($User) {
			cookie('admin', md5('admin+password'));
			$this -> success("登陆成功！", U("Index/index"));
		} else {
			$this -> error("登录失败！");
		}
	}

}
