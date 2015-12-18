<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public function index(){
		$this -> show('User page!', 'utf-8');
    }
	public function hello(){
		$this -> show('hello!','utf-8');
	}
}