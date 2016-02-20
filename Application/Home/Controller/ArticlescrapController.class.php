<?php

namespace Home\Controller;

use Think\Controller;
/**
 * 发布文章必须登录
 */
class ArticlescrapController extends BaseController{

    public function index($name){
        $this->display();
    }

    public function view($id){
        $post = M('Articlescrap')->find($id);
        $this->assign('Articlescrap', $post);
        $this->display();
    }
}
