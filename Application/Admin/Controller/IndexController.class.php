<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
<<<<<<< HEAD
		if (cookie('admin') === md5('admin+password')) {
			pass;
		} else {
			exit ;
=======
		if (cookie('admin')) {
			pass;
		} else {
			exit;
>>>>>>> 8582b954300c7ac9fb8022f84c6853e5afab5bbe
		}

		$this -> display(T('index'));
	}

<<<<<<< HEAD
	public function logout() {
		cookie('admin',null);
		$this -> redirect('Login/index');
	}

=======
>>>>>>> 8582b954300c7ac9fb8022f84c6853e5afab5bbe
}
