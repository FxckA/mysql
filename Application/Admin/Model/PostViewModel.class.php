<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class PostViewModel extends ViewModel {
   public $viewFields = array(
     'articlescrap'=>array('id','title','content','user_id','cate_id','time','type'),
     'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'articlescrap.cate_id=category.id'),
     'member'=>array('username', '_on'=>'articlescrap.user_id=member.id'),
   );
 }

?>