linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=480;
var swf_height=260;
//文字颜色|文字位置|文字背景颜色|文字背景透明度|按键文字颜色|按键默认颜色|按键当前颜色|自动播放时间|图片过渡效果|是否显示按钮|打开方式
var configtg='0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|4|3|1|_blank';
var files = "";
var links = "";
var texts = "";
//这里设置调用标记
linkarr[1] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2015/0810/1745.html";
picarr[1]  = "/iiip/uploads/allimg/150810/2-150Q0191342Q4-lp.jpg";
textarr[1] = "重点实验室老师参加第35届IEEE国际地球科学与遥感大会";
linkarr[2] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2015/0514/1737.html";
picarr[2]  = "/iiip/uploads/allimg/150514/2-150514092643596-lp.jpg";
textarr[2] = "大数据智能感知与类脑计算研讨会暨智能感知与计算国际联合研究中心第十四届学术周成功举";
linkarr[3] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0910/1669.html";
picarr[3]  = "/iiip/uploads/allimg/140903/201391020841347-lp.jpg";
textarr[3] = "中国科学技术大学青年千人计划入选者陈欢欢教授来校进行学术交流与访问";
linkarr[4] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0709/1666.html";
picarr[4]  = "/iiip/uploads/allimg/140903/201379161259378-lp.jpg";
textarr[4] = "英国贝尔法斯特女王大学Huiyu Zhou博士来校进行学术交流与访问";
linkarr[5] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0621/1664.html";
picarr[5]  = "/iiip/uploads/allimg/140903/201362112416248-lp.jpg";
textarr[5] = "英国埃塞克斯大学张青富教授来校进行学术交流";

for(i=1;i<picarr.length;i++){
if(files=="") files = picarr[i];
else files += "|"+picarr[i];
}
for(i=1;i<linkarr.length;i++){
if(links=="") links = linkarr[i];
else links += "|"+linkarr[i];
}
for(i=1;i<textarr.length;i++){
if(texts=="") texts = textarr[i];
else texts += "|"+textarr[i];
}
document.write('<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="'+ swf_width +'" height="'+ swf_height +'">');
document.write('<param name="movie" value="/iiip/templets/zhinengsuo/images/bcastr3.swf"><param name="quality" value="high">');
document.write('<param name="menu" value="false"><param name=wmode value="opaque">');
document.write('<param name="FlashVars" value="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'">');
document.write('<embed src="/iiip/templets/zhinengsuo/images/bcastr3.swf" wmode="opaque" FlashVars="bcastr_file='+files+'&bcastr_link='+links+'&bcastr_title='+texts+'&bcastr_config='+configtg+'&menu="false" quality="high" width="'+ swf_width +'" height="'+ swf_height +'" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />'); document.write('</object>');