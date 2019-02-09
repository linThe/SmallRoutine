<?php
namespace Admin\Controller;
//use Think\Controller;
use Tool\AdminController;

class RoleController extends AdminController{
	//列表展示
	function showlist(){
		//获得角色信息
		$info=D('Role')->select();
		$this->assign('info',$info);
		$this->display();
	}
	
	//给角色分配权限
	function distribute($role_id){
		//echo __SELF__;
		//echo __ACTION__;die;
		$role=new \Model\RoleModel();
		
		if(!empty($_POST)){
			if($role->saveAuth($_POST['auth_id'],$role_id)){
				$this->redirect('showlist');
			}else{
				echo '修改权限失败';
			}
		}
		
		//获得被分配权限角色的信息
		$role_info=$role->find($role_id);
		$authidsarr=explode(',', $role_info['role_auth_ids']);
		//获得权限信息
		$auth_infoA=D('Auth')->where('auth_level=0')->select();
		$auth_infoB=D('Auth')->where('auth_level=1')->select();
		
		$this->assign('authidsarr',$authidsarr);
		$this->assign('role_info',$role_info);
		$this->assign('auth_infoA',$auth_infoA);
		$this->assign('auth_infoB',$auth_infoB);
		$this->display();
	}
	
}