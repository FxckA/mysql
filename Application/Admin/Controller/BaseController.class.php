<?php
namespace Admin\Controller;
use Think\Controller;
//基础模块，为了没必要每次后台一个控制器的时候检验是否合法用户,类的继承
class BaseController extends Controller {
    public function _initialize(){
        $sid = session('adminId');
        //判断用户是否登陆
        if(!isset($sid ) ) {
            redirect(U('Login/index'));
        }

    }

}