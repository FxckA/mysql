<?php
namespace Admin\Controller;
use Admin\Controller\BaseController;
class IndexController extends BaseController {
	public function index() {
		$this -> display(T('index'));
	}

	public function changepasswordindex() {
		$this -> display(T('changepassword'));
	}

	public function logout() {
		cookie('admin', null);
		$this -> redirect('Login/index');
	}

	public function searchuser() {
		$User = M('Admin') -> getField('id,username,whoami');
		var_dump($User);
		foreach ($User as $key => $value) {
			echo $key.'</br>'.$value;
//			$this -> assign('name',$key);
		}
//		$this -> display(T('tables'));
	}

}
