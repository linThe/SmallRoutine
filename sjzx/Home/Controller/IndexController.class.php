<?php
namespace Home\Controller;
use Think\Controller;

interface iTemplate
{
    public function setVariable($name, $var);
    public function getHtml($template);
}

class IndexController extends Controller{
  // 声明一个'iTemplate'接口

//
//// 实现接口
//// 下面的写法是正确的
//private $vars = array();
//
//  public function setVariable($name, $var)
//  {
//      $this->vars[$name] = $var;
//  }
//
//  public function getHtml($template)
//  {
//      foreach($this->vars as $name => $value) {
//          $template = str_replace('{' . $name . '}', $value, $template);
//      }
// 
//      return $template;
//  }
//	
	public function index(){
//		$arr = array() ;
//		$arr[0] = "value";
//		dump($arr) ;
//		
//		$arra = array() ;
//		$arra[]("key"=>'value') ;
//		$arra("key1"=>'value1') ;
//		$arra("key2"=>'value1') ;
//		$arra("key3"=>'value1') ;
//		
//		dump($arra) ;
//		
		$k = 'key,' ;
		$v = 'value,' ;
		$array = array() ;
		$array[$k] = $v ;
		
		
		$k = 'key' ;
		$v = 'value,value,value,value,' ;
		$array[$k] = $v ;
		
		for ($i=0; $i < 10; $i++) { 
			$k = 'key'.$i ;
			$v = 'value1'.$i.',' ;
			$array[$k] = $v ;
		}
		$v =  '' ;
		foreach ($array as $key => $value) {
			$v = $v.$value.',' ;
//			dump(end($array)) ;
//			if($value == end($array)){
//				$v = $v.$value ;
//			}
//			if(endif){
//				$v = $v.$value ;
//			array_diff($array, [$value]) ; //删除元素
//			}
		}
//		$array = strtok($v, ',') ;
//		$temp = 0 ;
//		foreach($array as $key => $value){
//			$v = $value ;
//			foreach($array as $key => $value){
//				if($v === $value){
//					$temp++ ;
//					if($temp > 1){
//						array_splice($array,$key,1) ; // 这个1 我是真没看懂
//						echo '第二次进来'.$key.'<br/>' ;
//						$temp-- ;
//					}
//				}
//			}
//			$temp = 0 ;
//		}
//		$temp = 0 ;			老实研究下这个为什么不行
//		for ($i=0; $i < count($array); $i++) { 
//			for ($z=0; $z < count($array); $z++) { 
//				if($array[$i] == $array[$z]){
//					$temp ++ ;
//					if($temp == 2){
//						array_splice($array,$i,1) ;//这个1代表什么
//						$temp -- ;
//					}
//				}
//			}
//			$temp = 0 ;
//		}
		$arr = array_unique(explode(',', $v)) ; //使用array_unique必须要一个新的容器即array
		$t = '' ;
		if($t == $array[2]){
			array_splice($arr,6,1) ;
			dump(array_merge($arr)) ;
			
		}else{echo "nn";}
		
	}
	

}
//
//interface syn{
//	function add() ;
//	function update() ; 
//}
//
//class test extends Controller implements syn{
//	function add($data) {
//		$credata = $mod->create($data) ;
//		$mod->add($credata) ;
//		
//	}
//	function update(){
//		
//	}
//	
//	function api(){
//		if(add(I('post.'))){
//			return 0 ;
//		}else{
//			return 1 ;
//		}
//	}
//}


?>

