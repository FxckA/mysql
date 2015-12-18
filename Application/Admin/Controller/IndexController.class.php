<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	public function index() {
		$this -> show('Admin.Index page!', 'utf-8');
	}

}
