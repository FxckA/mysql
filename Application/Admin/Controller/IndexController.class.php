<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		if (cookie('admin')) {
			pass;
		} else {
			exit;
		}

		$this -> display(T('index'));
	}

}
