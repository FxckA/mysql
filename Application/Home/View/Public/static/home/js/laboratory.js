linkarr = new Array();
picarr = new Array();
textarr = new Array();
var swf_width=480;
var swf_height=260;
//������ɫ|����λ��|���ֱ�����ɫ|���ֱ���͸����|����������ɫ|����Ĭ����ɫ|������ǰ��ɫ|�Զ�����ʱ��|ͼƬ����Ч��|�Ƿ���ʾ��ť|�򿪷�ʽ
var configtg='0xffffff|0|0x3FA61F|5|0xffffff|0xC5DDBC|0x000033|4|3|1|_blank';
var files = "";
var links = "";
var texts = "";
//�������õ��ñ��
linkarr[1] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2015/0810/1745.html";
picarr[1]  = "/iiip/uploads/allimg/150810/2-150Q0191342Q4-lp.jpg";
textarr[1] = "�ص�ʵ������ʦ�μӵ�35��IEEE���ʵ����ѧ��ң�д��";
linkarr[2] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2015/0514/1737.html";
picarr[2]  = "/iiip/uploads/allimg/150514/2-150514092643596-lp.jpg";
textarr[2] = "���������ܸ�֪�����Լ������ֻ������ܸ�֪�������������о����ĵ�ʮ�Ľ�ѧ���ܳɹ���";
linkarr[3] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0910/1669.html";
picarr[3]  = "/iiip/uploads/allimg/140903/201391020841347-lp.jpg";
textarr[3] = "�й���ѧ������ѧ����ǧ�˼ƻ���ѡ�߳»���������У����ѧ�����������";
linkarr[4] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0709/1666.html";
picarr[4]  = "/iiip/uploads/allimg/140903/201379161259378-lp.jpg";
textarr[4] = "Ӣ��������˹��Ů����ѧHuiyu Zhou��ʿ��У����ѧ�����������";
linkarr[5] = "/iiip/html/dongtaixinwen/shiyanshixinwen/2013/0621/1664.html";
picarr[5]  = "/iiip/uploads/allimg/140903/201362112416248-lp.jpg";
textarr[5] = "Ӣ��������˹��ѧ���฻������У����ѧ������";

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