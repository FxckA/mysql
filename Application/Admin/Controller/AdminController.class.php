<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
	public function isadmin() {
		$username = I('post.username', '', 'addslashes');
		$password = I('post.password');
		$checkbox = $_POST["remenber"];
		//		echo $username."</br>";
		//		echo $password."</br>";
		$User = M('Admin') -> where("username = '%s' and password = '%s'", array($username, $password)) -> select();
		if ($User) {
			if (!$checkbox) {
				cookie('admin', md5('admin+password'));
			} else {
				cookie('admin', md5('admin+password'),3600);
			}
			$this -> success("登陆成功！", U("Index/index"));

		} else {
			$this -> error("登录失败！");
		}
	}

}
