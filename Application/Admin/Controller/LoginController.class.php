<?php
namespace Admin\Controller;
use Think\Controller;

class LoginController extends Controller {
	//登陆主页
	public function index() {
		$this -> display();//登陆页面展示
	}

	//登陆验证
	public function login() {
		if (!IS_POST){
			$this -> error("非法请求");//非post请求为非法请求
		}
		$member = M('Member');//实力化member表
		$username = I('post.username', '', 'addslashes');//第一层防御sql注入
		$password = md5($_POST['password']);
		//验证账号密码是否正确
		$user = $member -> where("username = '%s' and password = '%s'", array($username, $password)) -> find();//用预编译来防止sql注入
		if (!$user) {
			$this -> error('账号或密码错误 :(');
			exit;
		}
		else
			pass;
//		//验证账户是否被禁用
		if ($user['status'] == 0) {
			$this -> error('账号被禁用，请联系超级管理员 :(');
		}
		if ($user['type'] == 1) {
			$this -> error('您没权限登陆后台 :(');
		}
		//验证是否为管理员
		//更新登陆信息
		$data = array('id' => $user['id'], 'update_at' => time(), 'login_ip' => get_client_ip(), );
		//如果数据更新成功  跳转到后台主页
		if ($member -> save($data)) {
			session('adminId', $user['id']);
			session('username', $user['username']);
			$this -> success("登陆成功", U('Index/index'));
		}
	}

	//定向之后台主页

	public function logout() {//退出操作，清空下面所有的为null
		session('adminId', null);
		session('username', null);
		redirect(U('Login/index'));
	}

}
