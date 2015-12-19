<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		if (cookie('admin') === md5('admin+password')) {
			pass;
		} else {
			exit ;
		}

		$this -> display(T('index'));
	}

	public function logout() {
		cookie('admin',null);
		$this -> redirect('Login/index');
	}

}
