<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
	public function _before_changepassword() {
		checkcookie();
	}

	public function changepassword() {
		$oldpassword = $_POST['oldpassword'];
		$newpassword = $_POST['newpassword'];
		$User = M('Admin') -> where("password = '%s'", $oldpassword) -> select();
		if ($User) {
			$Admin = M('Admin');
			$Admin['password'] = md5($newpassword . C('salt'));
			$Admin -> where("password = '%s'", $oldpassword) -> save();
			$this -> success("密码修改成功!", U("Index/changepasswordindex"));
		} else {
			$this -> error("密码修改失败!可能原密码输错了！");
		}
	}

}
