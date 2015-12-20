<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
class UserController extends BaseController {
	public function changepassword() {
		$oldpassword = md5($_POST['oldpassword'] . C('salt'));
		$newpassword = md5($_POST['newpassword'] . C('salt'));
		$User = M('Admin') -> where("password = '%s'", $oldpassword) -> select();
		if ($User) {
			$Admin = M('Admin');
			$Admin -> where("password = '%s'", $oldpassword) -> setField('password', $newpassword);
			if ($Admin) {
				$this -> success("密码修改成功!", U("Index/logout"));
			} else {
				$this -> error("密码修改失败!可能原密码输错了！");
			}

		}
	}


}
