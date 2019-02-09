<?php
namespace Home\Controller;
use Think\Controller;
class KnowleageController extends Controller {
	
    public function knowleage(){
    	if(IS_GET){
    		   //初始化表失败不知道为什么,貌似数据库出问题了，换个密码试试
//  		if($mod = D('news')){
//  			$mod->select() ;
//			}{
//				echo $mod->getError();
//			}
			echo "数据库错误！！";
		}
    	$this->display() ;    	
    }
}