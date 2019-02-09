<?php
namespace Admin\Controller;
//use Think\Controller;
use Tool\AdminController;

//后台管理员控制器
class ManagerController extends AdminController{
	//登录
	public function login(){
		//两个逻辑：展示表单、收集表单
		if(!empty($_POST)){
			//收集表单信息：校验验证码、校验用户名和密码、跳转到后台品字首页面
			//校验验证码
			$vry=new \Think\Verify();
			if($vry->check($_POST['captcha'])){
				//校验用户名和密码
				$nm=$_POST['admin_user'];
				$pw=$_POST['admin_psd'];
				//利用model模型的“自定义”方法校验用户名和密码
				$user=new \Model\ManagerModel();//(使用自定义方法不能用$user=D('User');)
				$info=$user->checkNamePwd($nm, $pw);
				if($info){
					//持久化用户信息，并做页面跳转
					session('admin_user',$info['mg_name']);
					session('admin_id',$info['mg_id']);
					$this->redirect('Index/index');
				}
			}else{
				echo "验证码错误";
			}
		}
		$this->display();
	}
	
	//退出系统
	public function logout(){
		session(null);
		$this->redirect('login');
	}
	
	//展示验证码
	public function verifyImg(){
		$cfg=array(
				'imageH'=>30,   //验证码高度
				'imageW'=>110,  //验证码宽度
				'fontSize'=>15,  //验证码字体大小(px)
				'length'=>4,  //验证码位数
				'fontttf'=>'4.ttf',  //验证码字体
				'useCurve'=>false,  //不使用混淆曲线
		);
		//实例化Verify.class.php对象
		$very=new \Think\Verify($cfg);
		echo $very->entry();
	}
}