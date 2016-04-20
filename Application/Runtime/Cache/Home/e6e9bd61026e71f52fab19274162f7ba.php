<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>珍稀濒危动植物生态与环境保护重点实验室</title>
<link rel="stylesheet" href="/bishe/Application/Home/View//Public/static/css/sysgk.css">
</head>
<body>
    <!--头部-->
  <!--头部-->
    <div class="top">
       <img src="/bishe/Application/Home/View//Public/static/img/top_pic.gif" alt="珍稀濒危动植物生态与环境保护重点实验室" />
    </div>
    <!--导航栏-->
    <div class="nav">
      <ul class="nav_con">
        <li class="tw"><a href="<?php echo U("index/index");?>">首页</a></li>
        <li class="fo">|<a href="<?php echo U("index/synopsis");?>"><b>实验室概况</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/articlescrap");?>"><b>动态新闻</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/research");?>"><b>科学研究</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/study");?>"><b>学术梯队</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/education");?>"><b>研究生教育</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/benkestudy");?>"><b>本科教学</b></a></li>
        <li class="fo">|<a href="<?php echo U("index/callme");?>"><b>联系我们</b></a></li>
      </ul>
    </div>
    <!--主体部分-->
	<div class="main">
      <!--这里是左边-->
	  <div class="left">
	    <div class="shiyan">
		   <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/sysgk1.jpg"/>
		   </div>
		   <div class="wen">
             <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/synopsis");?>">实验室简介</a></li>
                 <li><a target="_blank" href="<?php echo U("index/leds");?>">现任领导</a></li>
               </ul>
             </div>
		   </div>
           <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/dtxw1.jpg"/>
		   </div>
		   <div class="wen">
		    <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/articlescrap");?>">实验室新闻</a></li>
                 <li><a href="<?php echo U("index/news");?>">通知公告</a></li>
                 <li><a href="<?php echo U("index/zthd");?>">专题活动</a></li>
               </ul>
             </div>
		   </div>
		   <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/kxyj1.jpg"/>
		   </div>
		   <div class="wen">
		    <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/lwzz");?>">论文专著</a></li>
                 <li><a href="<?php echo U("index/research");?>">科研项目</a></li>
                 <li><a href="<?php echo U("index/yjcg");?>">研究成果</a></li>
                 <li><a href="<?php echo U("index/xsyj");?>">学术交流</a></li>
               </ul>
             </div>
		   </div>
		   <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/xstd1.jpg"/>
		   </div>
		   <div class="wen">
		    <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/study");?>">科研队伍</a></li>
                 <li><a href="<?php echo U("index/zpxx");?>">招聘信息</a></li>
               </ul>
             </div>
		   </div>
		   <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/yjsjy1.jpg"/>
		   </div>
		   <div class="wen">
		    <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/education");?>">招生信息</a></li>
                 <li><a href="<?php echo U("index/byyjs");?>">毕业研究生</a></li>
                 <li><a href="<?php echo U("index/zxyjs");?>">在校研究生</a></li>
               </ul>
             </div>
		   </div>
		   <div class="tu">
           <img src="/bishe/Application/Home/View//Public/static/img/bkjx1.jpg"/>
		   </div>
		   <div class="wen">
		    <div class="ww">
               <ul>
                 <li><a href="<?php echo U("index/benkestudy");?>">专业介绍</a></li>
                 <li><a href="<?php echo U("index/pyfa");?>">培养方案</a></li>
                 <li><a href="<?php echo U("index/kcjs");?>">课程介绍</a></li>
               </ul>
             </div>
		   </div>
		 </div>
	  </div>
      <!--实验室的内容-->
 <div class="content">
        <div class="con_text">
          <div class="f1"><?php echo ($title); ?></div>
          <div class="f2">点击数：#     <span>发布时间：#</span></div>
          <hr />
          <div class="f3">
          	<?php echo ($content); ?>
          </div>
        </div>
      </div>
    </div>

      <!--实验室的内容-->

<div class="footer">
      <table class="f" width="1000" height="40" cellspacing="0" cellpadding="0" border="0" align="center">
        <tr>
          <td class="w" align="center" style="font-size:12px; padding-top:15px; padding-bottom:15px">
             CopyRight 版权所有© 广西师范大学计算机科学与信息工程学院 地址：广西桂林市七星区育才路15号-计算机科学与信息工程学院 <br>
             电话：0773-5816858(育才校区院办) 0773-3698036(雁山校区院办)<br>       
          </td>
        </tr>
      </table>
    </div>
</body>
</html>