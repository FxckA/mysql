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
<<<<<<< HEAD
				cookie('admin', md5('admin+password'));
			} else {
				cookie('admin', md5('admin+password'),3600);
=======
				cookie('admin', 'admin', 3600);
			} else {
				pass;//记住remeber的情况下的设置cookie
>>>>>>> 8582b954300c7ac9fb8022f84c6853e5afab5bbe
			}
			$this -> success("登陆成功！", U("Index/index"));

		} else {
			$this -> error("登录失败！");
		}
	}

}
