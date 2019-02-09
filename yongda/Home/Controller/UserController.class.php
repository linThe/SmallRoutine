<?php
namespace Home\Controller;
use Think\Controller;
Class UserController extends Controller{
	function login(){
		if(!empty($_POST)){
			
				//校验用户名和密码
				$nm=$_POST['username'];
				$pw=$_POST['password'];
				//利用model模型的“自定义”方法校验用户名和密码
				$user=new \Model\UserModel();//(使用自定义方法不能用$user=D('User');)
				$info=$user->checkNamePwd($nm, $pw);
				if($info){
					//持久化用户信息，并做页面跳转
					session('user_name',$info['username']);
					session('user_id',$info['user_id']);
					$this->redirect('Index/index');
				}
				echo '用户名或密码错误';
			}
		
		$this->display();
	}
	
	function logout(){
		session(null);
		$this->redirect('Index/index');
	}
	
	function register(){
		//echo __SELF__;
		//echo __ACTION__;die;
		$user=new \Model\UserModel();
		if(!empty($_POST)){
			$info=$user->create();  //收集表单信息，表单验证、自动完成、过滤非法字段	
			if($info){
				//处理爱好为字符串信息
				$info['user_hobby']=implode(',',$info['user_hobby']);
				if($user->add($info)){
					$this->redirect('Index/index');
				}
			}else{
				//表单验证失败
				var_dump($user->getError());
			}
		}
		$this->display();
	}
}