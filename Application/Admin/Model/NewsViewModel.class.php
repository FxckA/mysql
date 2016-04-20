<?php 
namespace Admin\Model;
use Think\Model\ViewModel;

class NewsViewModel extends ViewModel {
   public $viewFields = array(//展示默认文章的视图模型
     'news'=>array('id','title','content','user_id','cate_id','time','type','status'),
     'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'news.cate_id=category.id'),
     'member'=>array('username', '_on'=>'news.user_id=member.id'),
   );
 }

?>