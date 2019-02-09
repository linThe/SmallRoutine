<?php
namespace Home\Controller;
use Think\Controller;
class TestController extends Controller {
	public function index(){
		$t = D('first') ;
		$tt = $t->select() ;
		dump($tt) ;	
	}
}

?>