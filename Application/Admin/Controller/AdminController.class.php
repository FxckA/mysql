<?php
namespace Admin\Controller;
use Think\Controller;
class AdminController extends Controller {
    public function index(){
		$this -> display(T('login'));//展示登陆页面
    }
	public function login($username = null ,$password = null ){//接收post数据
		if(IS_POST){
			echo $username.'</br>';
			echo $password.'</br>';
		}
		
	}
}