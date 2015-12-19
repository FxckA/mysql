<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function index() {
		$this -> display(T('login'));
		//展示登陆页面

	}

}
