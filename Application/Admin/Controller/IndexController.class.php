<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function _before_index() {
		checkcookie();
	}

	public function index() {
		$this -> display(T('index'));
	}

	public function changepasswordindex() {
		checkcookie();
		$this -> display(T('changepassword'));
	}

	public function logout() {
		cookie('admin', null);
		$this -> redirect('Login/index');
	}

}
