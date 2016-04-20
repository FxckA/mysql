<?php

namespace Home\Controller;

use Think\Controller;

class IndexController extends BaseController {

	public function index() {//首页展示
	    $articlescrap = M('news')-> where("cate_id =5 and status = 1")->order("time desc")->limit(7)->select();
		$news = M("news")-> where("cate_id = 6 and status = 1")->order("time desc")->limit(7)->select();
		$this->assign("articlescrap",$articlescrap);
		$this->assign("news",$news);
		$this -> display();
	}
	public function synopsis() {//实验室简介//完成
		$synopsis=M("articlescrap")->where("cate_id = 2 and status =1")->select();
		$this -> assign("title",htmlspecialchars_decode($synopsis[0]["title"]));
		$this -> assign("content",htmlspecialchars_decode($synopsis[0]["content"]));
		$this -> display();
	}

	public function leds() {//现任领导//完成
		$leds=M("articlescrap")->where("cate_id = 3 and status =1")->select();
		$this -> assign("title",htmlspecialchars_decode($leds[0]["title"]));
		$this -> assign("content",htmlspecialchars_decode($leds[0]["content"]));
		$this -> display();
	}
	
	public function articlescrap(){//动态新闻列表//完成
	    $articlescrap = M('news')-> where("cate_id =5 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$articlescrap);
 		$this->display();
 	}
 	public function news() {//动态公告列表//完成
 		$news = M("news")-> where("cate_id = 6 and status = 1")->order("time desc")->limit(15)->select();
 		$this -> assign("data",$news);
 		$this -> display();
 	}
 	public function zthd(){//专题活动
 		$zthd = M('news')-> where("cate_id =7 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$zthd);
 		$this->display();
 	}
 	public function lwzz() {//论文专著//完成
 		$lwzz = M('news')-> where("cate_id =9 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$lwzz);
 		$this->display();
 	}
 	public function research() {//科研项目//完成
 		$research = M('news')-> where("cate_id =10 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$research);
 		$this->display();
 	}
 	public function yjcg(){//研究成果
 		$yjcg = M('news')-> where("cate_id =11 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$yjcg);
 		$this->display();
 		
 	}
 	public function xsyj(){//学术交流 
 		$xsyj = M('news')-> where("cate_id =12 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$xsyj);
 		$this->display();	
 	}
//
 	public function study() {//科研队伍//学术梯队
 		$study = M('news')-> where("cate_id =14 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$study);
 		$this->display();
 	}
 	public function zpxx(){///招聘信息
 		$zpxx = M('news')-> where("cate_id =15 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$zpxx);
 		$this->display();
 	}

//
 	public function education() {//招生信息//研究生教学
 		$education = M('news')-> where("cate_id =17 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$education);
 		$this->display();

	}
	public function byyjs() {//招生信息//毕业研究生
		$byyjs = M('news')-> where("cate_id =18 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$byyjs);
 		$this->display();

	}
	public function zxyjs() {//招生信息//在校研究生
		$zxyjs = M('news')-> where("cate_id =19 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$zxyjs);
 		$this->display();

	}

	public function benkestudy() {//专业介绍//本科生教学
		$benkestudy = M('news')-> where("cate_id =21 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$benkestudy);
 		$this->display();

	}
	public function pyfa() {//培养方案//本科生教学
		$pyfa = M('news')-> where("cate_id =22 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$pyfa);
 		$this->display();
	}
	public function kcjs() {//课程介绍//本科生教学
		$kcjs = M('news')-> where("cate_id =23 and status = 1")->order("time desc")->limit(15)->select();
		$this -> assign("data",$kcjs);
 		$this->display();

	}
	public function callme() {//联系我们//完成
		$this -> display();
	}

}
