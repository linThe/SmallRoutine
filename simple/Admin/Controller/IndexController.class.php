<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	
    public function index(){
		
		$dream = D("introduce_dream") ;
		$sentiment = D("introduce_sentiment") ;
		
		$dInfo = $dream->select() ;
		$sInfo = $sentiment -> find() ;  //默认读取第一条数据
		
		//返回二位数组（Table[record[cloumn],record[cloumn]])
		$this->assign('dream_data',$dInfo) ; 
		$this->assign('sent_data',$sInfo) ;
		
    	$this->display() ;    	
	}
	
	
}