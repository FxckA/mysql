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

}
